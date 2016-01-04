<?php

	require('taxiClass.php');

	$yellow_taxi = new Car();

	if (isset($_REQUEST['action'])){
		$action = $_REQUEST['action'];
		switch ($action) {
			case 'engine':
				$yellow_taxi->start();
				break;
			case 'run':
				$yellow_taxi->run();
				break;
			case 'stop':
				$yellow_taxi->stop();
				break;
			default:
				# code...
				break;
		}


	}


?>


<html>
<body>
	<form method="post" action="taxi_demo.php?action=engine">
		<input type="submit" value="エンジンを掛ける" />
	</form>
	<form method="post" action="taxi_demo.php?action=run">
		<input type="submit" value="走る" />
	</form>
	<form method="post" action="taxi_demo.php?action=stop">
		<input type="submit" value="止める" />
	</form>
</body>
</html>