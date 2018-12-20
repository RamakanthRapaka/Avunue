<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Avunue Hospitals - Transaction Pay Later</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h2 align="center">Avunue Hospitals - Transaction Pay Later</h2>
					
					<table id="example" class="table table-hover table-striped">
						<thead>
							<tr>
								<th>PATIENT ID</th>
								<th>PATIENT NAME</th>
                                                                <th>PATIENT CODE</th>
								<th>PAYMENT TYPE</th>
                                                                <th>SUB TYPE</th>
                                                                <th>TRANSACTION DATE</th>
                                                                <th>TIME</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>PATIENT ID</th>
								<th>PATIENT NAME</th>
                                                                <th>PATIENT CODE</th>
								<th>PAYMENT TYPE</th>
                                                                <th>SUB TYPE</th>
                                                                <th>TRANSACTION DATE</th>
                                                                <th>TIME</th>
							</tr>
						</tfoot>
					</table>
                </div>
            </div>
        </div>
		
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		
		<script>
			$('#example').DataTable( {
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url":"<?= route('dataProcessing') ?>",
					"dataType":"json",
					"type":"POST",
					"data":{"_token":"<?= csrf_token() ?>"}
				},
				"columns":[
					{"data":"auto_number"},
					{"data":"patientname"},
                                        {"data":"patientcode"},
					{"data":"paymenttype"},
                                        {"data":"subtype"},
                                        {"data":"transactiondate"},
                                        {"data":"transactiontime"}
				]
			} );
		</script>
    </body>
</html>