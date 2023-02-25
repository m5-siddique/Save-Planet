<?php 
		//get user ip address
		$ip_address = $_SERVER['REMOTE_ADDR'];
		//get user ip address details with geoplugin.net
		$geopluginURL = 'http://www.geoplugin.net/php.gp?id='.$ip_address;
		$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
		//get city name by return array
		$city = $addrDetailsArr['geoplugin_city'];
		//get country name by return array
		$country = $addrDetailsArr['geoplugin_countryName'];
		echo '<strong>City</strong>: '.$city.'<br>';
		
?>