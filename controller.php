<?php

require "model.php";
$url = $_POST["url"];

$dns = new Dns($url);

$a_record = $dns->dns_a();
$mx_record = $dns->dns_mx();
$txt_record = $dns->dns_txt();
$ns_record = $dns->dns_ns();
$aaaa_record = $dns->dns_aaaa();
$soa_record = $dns->dns_soa();

print_r($a_record);
echo "<br>";
echo "<br>";
print_r($mx_record);
echo "<br>";
echo "<br>";
//print_r($txt_record);
echo "<br>";
echo "<br>";
print_r($ns_record);
echo "<br>";
echo "<br>";
print_r($aaaa_record);
echo "<br>";
echo "<br>";
print_r($soa_record);












?>
