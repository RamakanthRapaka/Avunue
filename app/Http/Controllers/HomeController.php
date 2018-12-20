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

class HomeController extends Controller {

    public function IpCredit() {

        $inpatient_credit = Inpatientcredit::all();

        return view('ipcredit', compact('inpatient_credit'));
    }

    public function IpDebit() {

        $inpatient_debit = Inpatientdebit::all();

        return view('ipdebit', compact('inpatient_debit'));
    }

}
