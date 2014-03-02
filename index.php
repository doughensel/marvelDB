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
		$curl_opts = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $url
        );
        $connection = curl_init();
        $curl_params[CURLOPT_USERAGENT] = self::USER_AGENT;

        foreach ($curl_params as $option => $value) {
            curl_setopt($connection, $option, $value);
        }
        curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($connection);
        $headers = explode("\r\n\r\n", $response);
        $response_code = curl_getinfo($connection, CURLINFO_HTTP_CODE);
        $response_headers = $headers;
        $response_json    = $response;
        $response_obj     = json_decode($this->response_json);

        curl_close($connection);

        print_r( $response_obj );
	?>
</p>

<!-- ///////////////////////// -->
<!-- //		JAVASCRIPT		// -->
<!-- ///////////////////////// -->

<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>