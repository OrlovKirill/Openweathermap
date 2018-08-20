<?
	$url = 'http://api.openweathermap.org/data/2.5/weather?q=Moscow&appid=9e7e2f20ef05c5572d9346601c4f8fbb';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json;'));
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
	curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000);
	$curlRes = curl_exec($ch);
	curl_close($ch);
	$result = json_decode($curlRes);
	// print_r($result);
	$weather=($result ->weather[0]->main);
	$temperature=($result->main->temp);	

	function temperature($kelv){
	return $kelv-273;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Weather Report Using api</title>
	</head>
	<body>
		<center><h2>Weather and temperature in Moscow</h2>
			<h3><?=$weather?>	</h3>
			<h3><?=(temperature($temperature)). '°'?> </h3>
		</center>
	</body>
</html>