<?php

class Dns {
	private string $host;

	function __construct($host){
		$this->host = $host;
	}	

	public function dns_a(){
		return $this->clean_arr(dns_get_record($this->host, DNS_A));
	}

	public function dns_mx(){
		return $this->clean_arr(dns_get_record($this->host, DNS_MX));
	}

	public function dns_txt(){
		return $this->clean_arr(dns_get_record($this->host, DNS_TXT));
	}

	public function dns_ns(){
		return $this->clean_arr(dns_get_record($this->host, DNS_NS));
	}

	public function dns_cname(){
		return dns_get_record($this->host, DNS_CNAME);
	}

	public function dns_aaaa(){
		return $this->clean_arr(dns_get_record($this->host, DNS_AAAA));
	}

	public function dns_soa(){
		return $this->clean_arr(dns_get_record($this->host, DNS_SOA));
	}

	public function clean_arr($arr){
		$result = [];
		$aux = [];
		foreach($arr as $position){
			foreach($position as $key => $value){
				$result["type"] = $position["type"];
				$result["ttl"] = $position["ttl"];

				if($position[$key] == "A"){
					array_push($aux, $position["ip"]);
				}

				if($position[$key] == "MX"){
					array_push($aux,  "[". $position["pri"] . "] " . $position["target"]);
				}

				if($position[$key] == "AAAA"){
					array_push($aux, $position["ipv6"]);
				}

				if($position[$key] == "TXT"){
					array_push($aux, $position["txt"]);
				}

				if($position[$key] == "NS"){
					array_push($aux, $position["target"]);
				}

				if($position[$key] == "SOA"){
					$aux = array(
						"mnamei: " .  $position["mname"],
						"rname: " .  $position["rname"],
						"serial : " . $position["serial"],
						"refresh: " . $position["refresh"],
						"retry: " . $position["retry"],
						"expire: " . $position["expire"],
						"ttl: " . $position["ttl"],
					);
				}

			}
		}

		array_push($result, $aux);



		return $result;
	}
}
