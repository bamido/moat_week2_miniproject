<?php
	
		/*API Client App*/
		$url = "http://naijapoetry.com/api/poetsapi";

		//step 1: initialize curl session
		$curlsession = curl_init();

		//step 2: set options for the session
		curl_setopt($curlsession, CURLOPT_URL, $url);
		curl_setopt($curlsession, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curlsession, CURLOPT_HEADER, false);

		//step 3: execute curl session using curl_exec()

		$result = curl_exec($curlsession);
		$output = json_decode($result, true);

		//step 4: close curl
		curl_close($curlsession);

		//var_dump($output);

		foreach($output as $item){
		

?>

	<div style="border: 1px solid #000000; width:220px; height: 220px; float:left;">
		<?php if($item['PoetImageUrl']==null){ ?>
			<img src="avatar.png" alt="poets" style="width:200px; height:200px;" />
		<?php }else{ ?>
			<img src="http://naijapoetry.com/<?php echo $item['PoetImageUrl']; ?>" style="width:200px; height:200px;">
		<?php
			}
		?>
		<div>
			<?php echo $item['Firstname']." ".$item['Surname']; ?>
		</div>
	</div>

<?php
	}
?>


