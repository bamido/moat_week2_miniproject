<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$searchword = urlencode($_POST['search']);
		$url = "http://google.com/search?q=".$searchword;

		//step 1: initialize curl session
		$curlsession = curl_init();

		//step 2: set options for the session
		curl_setopt($curlsession, CURLOPT_URL, $url);
		curl_setopt($curlsession, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curlsession, CURLOPT_HEADER, false);

		//step 3: execute curl session using curl_exec()

		$result = curl_exec($curlsession);

		//step 4: close curl
		curl_close($curlsession);

		echo $result;
		


	}
?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input type="text" name="search">
	<input type="submit" name="submit" value="Search">	
</form>