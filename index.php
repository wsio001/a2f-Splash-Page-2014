<?php
	// @todo Super array goes here
	$est = array(
		'2014' => array(
			array('title'=>'Irvine', 'prefix'=>'University of California'),
			array('title'=>'Santa Barbara', 'prefix'=>'University of California'),
			array('title'=>'Southern California', 'prefix'=>'University of'),
			array('title'=>'Pomona', 'prefix'=>'Cal Poly')
		),
		'2013' => array(
			array('title'=>'Los Angeles', 'prefix'=>'University of California')
		)
	);

	//echo count($est);
	foreach($est as $key => $value) {
		echo $key . '<br />';
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,400italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="favicon.ico" rel="shortcut icon">

	<!-- @todo Need analytics tracker -->

	<title>Welcome to acts2fellowship</title>
  
</head>

<body>

	<!-- @todo rest of code goes here -->
	<div class="temp">
		Temp
	</div>

</body>
</html>