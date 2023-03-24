<?php

class Dns {
	private string $host;

	function __construct($host){
		$this->host = $host;
	}	

	public function dns_a(){
		return dns_get_record($this->host, DNS_A);
	}

	public function dns_mx(){
		return dns_get_record($this->host, DNS_MX);
	}


	public function dns_txt(){
		return dns_get_record($this->host, DNS_TXT);
	}

	public function dns_ns(){
		return dns_get_record($this->host, DNS_NS);
	}

	public function dns_cname(){
		return dns_get_record($this->host, DNS_CNAME);
	}

	public function dns_aaaa(){
		return dns_get_record($this->host, DNS_AAAA);
	}

	public function dns_soa(){
		return dns_get_record($this->host, DNS_SOA);
	}

	public function clean_arr($arr){
		$result = [];
		$aux = [];
		foreach($arr as $position){
			foreach($position as $key => $value){
				$result["type"] = $position["type"];
				$result["ttl"] = $position["ttl"];
				if($position[$key] == "MX"){
					array_push($aux,  "[". $position["pri"] . "] " . $position["target"]);
				}


			}
		}

		array_push($result, $aux);

		return $result;
	}
}
