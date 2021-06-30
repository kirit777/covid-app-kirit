<!DOCTYPE html>
<html>
<head>
	<title>Covid Live</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="google-site-verification" content="uza6Gh8xbuNXozz7q8MICSSLrgnoLzioHvqTE2tclI4" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="sass/style.css?v=<?php echo time(); ?>">
		<script type="text/javascript" href="css/style.js"></script>
</head>
<body>
<div class="main_div table-responsive">
	<h2 class="text-center">Covid19 Updates Live</h2>
	<div class="w-100 d-flex align-items-center justify-content-center" ><img src="covid.png" class="img-fluid"></div>
	<table class="table table-striped text-center">
		<tr class="table-info">
			<th>LastUpdatedTime</th>
			<th>State</th>
			<th>Total Confirmed</th>
			<th>Active</th>
			<th>Recovered</th>
			<th>Deaths</th>
		</tr>
<?php
	$data = file_get_contents('https://api.covid19india.org/data.json');
	$json_data = json_decode($data, true);
	$ctn = count($json_data['statewise']);
	/*echo($ctn);*/
	 $i = 1;
	 while ( $i < $ctn) {
	 	# code...
	 	$lastupdatedtime =  $json_data['statewise'][$i]['lastupdatedtime'];
	 	$statewise =  $json_data['statewise'][$i]['state'];
	 	$confirmed =  $json_data['statewise'][$i]['confirmed'];
	 	$active =  $json_data['statewise'][$i]['active'];
	 	$recovered =  $json_data['statewise'][$i]['recovered'];
	 	$deaths =  $json_data['statewise'][$i]['deaths'];
 ?>
		<tr>
			<td><?php echo($lastupdatedtime); ?></td>
			<td><?php echo($statewise); ?></td>
			<td><?php echo($confirmed); ?></td>
			<td><?php echo($active); ?></td>
			<td><?php echo($recovered); ?></td>
			<td><?php echo($deaths); ?></td>
		</tr>

<?php 
			$i++;
	 	/*echo($statewise);*/
	 }
?>
	</table>
</div>
</body>
</html>