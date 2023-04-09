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
		if(count($arr) != 1){
			echo "<tr>";
			foreach($arr as $key){
				if(gettype($key) == "array") {
					echo "<td class='value'>";
					foreach($key as $newKey){
						echo $newKey . "<br>";
					}
					echo "</td>";
				} else {
					echo "<td class='value'>" . $key . "</td>";
				}
			}
			echo "</tr>";

		}

	}

	echo "<table class='table table-striped table-bordered table-hover table-sm'>";
	echo "<thead class='table-dark'>";
	echo "<tr>";
	echo "<th scope='col'>type</th>";
	echo "<th scope='col'>ttl</th>";
	echo "<th scope='col'>value</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	print_clean_arr($a_record);
	print_clean_arr($aaaa_record);
	print_clean_arr($mx_record);
	print_clean_arr($ns_record);
	print_clean_arr($soa_record);
	print_clean_arr($txt_record);
	echo "</tbody>";
	echo "</table>";

}

?>
