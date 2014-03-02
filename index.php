<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />

<!-- //   MarvelDB v.0.0.0  // -->

<!-- ///////////////////////// -->
<!-- //		STYLESHEETS		// -->
<!-- ///////////////////////// -->

<title>Marvel DB</title>
</head>

<body>


<h1>MarvelDB v.0.0.0</h1>
<p>
	Coming soon, to a true believer near you.
</p>

<p>
	<?php 
		include_once 'php/creds.php';
		
		$url = 'http://gateway.marvel.com/v1/public/characters/?' . http_build_query($params);
		print_r( http_build_query($params) );
		echo '<br />';

		// Initate cURL
		$ch = curl_init();
		// Disable SSL
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		$result=curl_exec($ch);
		print_r( $result );
		echo '<br />';

		print_r( var_dump(json_decode($result, true)) );

	?>
</p>

<!-- ///////////////////////// -->
<!-- //		JAVASCRIPT		// -->
<!-- ///////////////////////// -->

<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>