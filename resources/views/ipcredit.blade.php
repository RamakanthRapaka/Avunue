<!DOCTYPE html>
<html>
    <head>
        <title>Avunue Hospitals - In Patient Credit</title>
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
                    @foreach($inpatient_credit as $ip_credit)
                    <tr>
                        <td>{{$ip_credit->auto_number}}</td>
                        <td>{{$ip_credit->patientcode}}</td>
                        <td>{{$ip_credit->patientname}}</td>
                        <td>{{$ip_credit->patientvisitcode}}</td>
                        <td>{{$ip_credit->rate}}</td>
                        <td>{{$ip_credit->docno}}</td>
                        <td>{{$ip_credit->billtype}}</td>
                        <td>{{$ip_credit->accountname}}</td>
                        <td>{{$ip_credit->paymentstatus}}</td>
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