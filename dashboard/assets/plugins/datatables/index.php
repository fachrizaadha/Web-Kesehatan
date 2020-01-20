
<html>
<head>
<title>Datatables</title>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

	<link rel="stylesheet"  href="datatables.min.css">	
	<link rel="stylesheet"  href="style.css">	
	<script src="jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="datatables.min.js" type="text/javascript"></script> 	
	<style>
	body {font-family: calibri;color:#4e7480;max-width:600px;}
	</style>
</head>
<body>
<div class="container">
	<table id="contact-detail" class="responsive display nowrap" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th data-priority="1">Phone</th>
			<th data-priority="2">DOB</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td>Barry</td>
			<td>Allen</td>
			<td>Florida</td>
			<td>2211335566</td>
			<td>02-02-1983</td>
		</tr>
		<tr>
			<td>Bruce</td>
			<td>Banner</td>
			<td>Newyork</td>
			<td>7788995566</td>
			<td>14-04-1987</td>
		</tr>		
		<tr>				
			<td>Bruce</td>
			<td>Wayne</td>
			<td>Gotham</td>
			<td>8877887744</td>
			<td>15-11-1991</td>
		</tr>		
		<tr>
			<td>Catherine</td>
			<td>Halsey</td>
			<td>Olympia</td>
			<td>8990453211</td>
			<td>02-02-1990</td>
		</tr>
			<tr>
			<td>Dominique</td>
			<td>Francon</td>
			<td>Gotham</td>
			<td>9890124418</td>
			<td>01-01-2011</td>
        </tr>
		<tr>
			<td>Ellsworth</td>
			<td>Toohey</td>
			<td>Texas</td>
			<td>7678123331</td>
			<td>01-10-1990</td>
		</tr>
		<tr>
			<td>Harvy</td>
			<td>Dent</td>
			<td>Newyork</td>
			<td>9988774445</td>
			<td>01-10-1990</td>		
		</tr>
		
		<tr>
			<td>Howard</td>
			<td>Roark</td>
			<td>Newyork</td>
			<td>8745554413</td>
			<td>15-11-2011</td>
		</tr>
		<tr>
			<td>John</td>
			<td>Mclane</td>
			<td>orlando</td>
			<td>7744114411</td>
			<td>15-11-2000</td>
		</tr>
		<tr>		
			<td>Nick</td>
			<td>Fury</td>
			<td>Olympia</td>
			<td>9966554488</td>
			<td>25-01-1980</td>
		</tr>
		<tr>
			<td>Peter</td>
			<td>Parker</td>
			<td>Queens</td>
			<td>4455664455</td>
			<td>10-04-1990</td>
		</tr>
		<tr>
			<td>Peter</td>
			<td>Keating</td>
			<td>Texas</td>
			<td>9089094445</td>
			<td>15-11-2013</td>
		</tr>
		<tr>
			<td>Tony</td>
			<td>Stark</td>
			<td>Texas</td>
			<td>8899886655</td>
			<td>05-10-1984</td>
		</tr>
	</tbody>
</table>
	</div>
<script>
$(document).ready(function() {
    $('#contact-detail').dataTable({
		"responsive": true,
		"columnDefs": [
		            { responsivePriority: 1, targets: 0 },
		            { responsivePriority: 2, targets: 4 }
		        ]
    } );
} );
</script>
</html>