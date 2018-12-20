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
                            <th class="text-center">PAYMENT</th>
                            <th class="text-center">SUB PAYMENT</th>
                            <th class="text-center">NAME</th>
                    </thead>
                    @foreach($transaction_pay_later as $pay_later)
                    <tr>
                        <td>{{$pay_later->auto_number}}</td>
                        <td>{{$pay_later->patientname}}</td>
                         <td>{{$pay_later->paymenttype}}</td>
                        <td>{{$pay_later->subtype}}</td>
                        <td>{{$pay_later->accountname}}</td>
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