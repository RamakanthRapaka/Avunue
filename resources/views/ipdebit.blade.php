<!DOCTYPE html>
<html>
    <head>
        <title>Avunue Hospitals - In Patient Debit</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script
        src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet"
              href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet"
              href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
        <script
        src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <style>
    </style>
    <body>
        <div class="container ">
            {{ csrf_field() }}
            <div class="table-responsive text-center">
                <table class="table table-borderless" id="table">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">PATIENT CODE</th>
                            <th class="text-center">NAME</th>
                            <th class="text-center">VISIT CODE</th>
                            <th class="text-center">PRICE</th>
                            <th class="text-center">DOC NO</th>
                            <th class="text-center">BILL TYPE</th>
                            <th class="text-center">ACCOUNT NAME</th>
                            <th class="text-center">PAYMENT STATUS</th>
                        </tr>
                    </thead>
                    @foreach($inpatient_debit as $ip_debit)
                    <tr>
                        <td>{{$ip_debit->auto_number}}</td>
                        <td>{{$ip_debit->patientcode}}</td>
                        <td>{{$ip_debit->patientname}}</td>
                        <td>{{$ip_debit->patientvisitcode}}</td>
                        <td>{{$ip_debit->rate}}</td>
                        <td>{{$ip_debit->docno}}</td>
                        <td>{{$ip_debit->billtype}}</td>
                        <td>{{$ip_debit->accountname}}</td>
                        <td>{{$ip_debit->paymentstatus}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <script>
$(document).ready(function () {
    $('#table').DataTable();
});
        </script>
    </body>
</html>