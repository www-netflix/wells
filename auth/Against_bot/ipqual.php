<?php

$key = trim(file_get_contents("panel/config/antibot3.ini"));


$ip = isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'];


$user_agent = $_SERVER['HTTP_USER_AGENT']; 
$user_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];


$strictness = 1;


$allow_public_access_points = 'true';

$lighter_penalties = 'false';

$parameters = array(
	'user_agent' => $user_agent,
	'user_language' => $user_language,
	'strictness' => $strictness,
	'allow_public_access_points' => $allow_public_access_points,
	'lighter_penalties' => $lighter_penalties
);



$formatted_parameters = http_build_query($parameters);

// Create API URL
$url = sprintf(
	'https://www.ipqualityscore.com/api/json/ip/%s/%s?%s', 
	$key,
	$ip, 
	$formatted_parameters
);

// Fetch The Result
$timeout = 5;

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);

$json = curl_exec($curl);
curl_close($curl);

// Decode the result into an array.
$result = json_decode($json, true);

// Check to see if our query was successful.
if(isset($result['success']) && $result['success'] === true){

	 if($result['proxy'] === true){
		exit(header("Location: https://www.ipqualityscore.com/disable-your-proxy-vpn-connection"));
		$content = "IPQUAL - [".$ip."] \r\n";
	    $save=fopen("bots.txt","a+");
        fwrite($save,$content);
	    fclose($save);
	}
	


}

    
    
?>