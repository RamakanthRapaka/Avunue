<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inpatientcredit;
use App\Inpatientdebit;
use App\Masteraccountname;
use App\Masterpaymenttype;
use App\Mastersubtype;
use App\Mastertransactionpaylater;
use DB;

class DatatableController extends Controller {

    public function getPayLater(Request $request) {

        $columns = array(
            0 => 'auto_number',
            1 => 'patientname',
            2 => 'patientcode',
            3 => 'paymenttype',
            4 => 'subtype',
            5 => 'transactiondate',
            6 => 'transactiontime'
        );

        $totalData = Mastertransactionpaylater::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $posts = DB::table('master_transactionpaylater')
                    ->join('master_subtype', 'master_subtype.auto_number', '=', 'master_transactionpaylater.subtypeano')
                    ->join('master_accountname', 'master_accountname.auto_number', '=', 'master_transactionpaylater.accountnameano')
                    ->select('master_transactionpaylater.transactiontime','master_transactionpaylater.transactiondate','master_transactionpaylater.patientcode','master_transactionpaylater.paymenttype', 'master_transactionpaylater.auto_number', 'master_transactionpaylater.patientname', 'master_subtype.subtype', 'master_accountname.accountname')
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();

            $totalFiltered = Mastertransactionpaylater::count();
        } else {
            $search = $request->input('search.value');
            $posts = DB::table('master_transactionpaylater')
                    ->where('patientname', 'like', "%{$search}%")
                    ->orWhere('patientcode', 'like', "%{$search}%")
                    ->orWhere('paymenttype', 'like', "%{$search}%")
                    ->orWhere('transactiondate', 'like', "%{$search}%")
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
            $totalFiltered = DB::table('master_transactionpaylater')
                    ->where('patientname', 'like', "%{$search}%")
                    ->orWhere('patientcode', 'like', "%{$search}%")
                    ->orWhere('paymenttype', 'like', "%{$search}%")
                    ->orWhere('transactiondate', 'like', "%{$search}%")
                    ->count();
        }

        $data = array();

        if ($posts) {
            foreach ($posts as $r) {
                $nestedData['auto_number'] = $r->auto_number;
                $nestedData['patientname'] = $r->patientname;
                $nestedData['patientcode'] = $r->patientcode;
                $nestedData['paymenttype'] = $r->paymenttype;
                $nestedData['subtype'] = $r->subtype;
                $nestedData['transactiondate'] = $r->transactiondate;
                $nestedData['transactiontime'] = $r->transactiontime;
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        echo json_encode($json_data);
    }

}
