<?php

if (!isset($argv[1]) || (isset($argv[2]) && !in_array(strtoupper($argv[2]), ["SMS", "CALL", "ALL"]))) {
	echo "Usage: php ".basename(__FILE__)." <phone_number> [SMS|CALL|ALL]\n";
	exit;
} elseif (!isset($argv[2])) {
	$argv[2] = "SMS";
}

$countries = ["MY", "SG", "ID", "TH", "VN", "KH", "PH", "MM"];
shuffle($countries);

if (function_exists("cli_set_process_title")) cli_set_process_title("GAC Spammer - 0 Hits");

$i = 0;
while (true) {
	foreach ($countries as $countryCode) {
		$success = false;
		while (!$success) {
			foreach (["SMS", "CALL"] as $method) {
					echo date("[H:i:s]")." ".$method." OTP Requested.\n";
					if (function_exists("cli_set_process_title")) cli_set_process_title("GAC Spammer - ".++$i." Hits");
					$success = true;				
			}			
		}
	}
}

?>