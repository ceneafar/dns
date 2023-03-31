<?php

if(isset($_POST["btn"])){
	require "model.php";
	$url = $_POST["url"];
	$dns = new Dns($url);

	$a_record = $dns->dns_a();
	$mx_record = $dns->dns_mx();
	$txt_record = $dns->dns_txt();
	$ns_record = $dns->dns_ns();
	$aaaa_record = $dns->dns_aaaa();
	$soa_record = $dns->dns_soa();

	function print_clean_arr($arr){	
		foreach($arr as $key){
			if(gettype($key) == "array") {

				foreach($key as $newKey){
					echo $newKey .  "<br>";
				}

			} else {
				echo $key . "<br>";
			}
		}
	}

	echo "<br>";

	print_clean_arr($a_record);
	echo "<br>";
	echo "<br>";
	print_clean_arr($mx_record);
	echo "<br>";
	echo "<br>";
	print_clean_arr($txt_record);
	echo "<br>";
	echo "<br>";
	print_clean_arr($ns_record);
	echo "<br>";
	echo "<br>";
	print_clean_arr($aaaa_record);
	echo "<br>";
	echo "<br>";
	print_clean_arr($soa_record);
}











?>
