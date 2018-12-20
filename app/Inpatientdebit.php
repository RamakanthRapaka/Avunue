<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inpatientdebit extends Model
{
    protected $table = "ip_debitnotebrief";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'auto_number','consultationdate','consultationtime','patientcode','patientname','patientvisitcode','description','authorizedby', 'rate', 'docno', 'billtype', 'accountname', 'paymentstatus', 'referalrefund', 'locationname', 'locationcode', 'username', 'ipaddress', 'unit', 'amount', 'accountcode', 'selaccountname'
    ];
}
