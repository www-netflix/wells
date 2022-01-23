<?php 
error_reporting();
session_start();

#######################################################################################################
$config['apikey']   = trim(file_get_contents("panel/config/antibot4.ini"));        // https://killbot.pw/developers
$config['bot']      = 'https://google.com';     // URL bots will be redirect
$config['real']     = 'https://killbot.org';     // URL real visitor will be redirect
#######################################################################################################

class Killbot {
    function apikey($api_key) {
        $this->apikey = $api_key;
    }

    function get_client_ip() {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
        
        if(filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif(filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        
        return $ip;
    }
    
    function httpGet($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Killbot Blocker');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        return $response;
    }

    function check() {
        $ip         = $this->get_client_ip();
        $respons    = $this->httpGet("https://killbot.org/api/v1/blocker?ip=".$ip."&apikey=".$this->apikey."&ua=".urlencode($_SERVER['HTTP_USER_AGENT'])."&url=".urldecode($_SERVER['REQUEST_URI']));
        $json       = json_decode($respons,true);
        if($json['data']['block_access'] == true){
            return true;
        } else {
            return false;
        }
    }
}

$Killbot = new Killbot;
$Killbot->apikey( $config['apikey'] );
if($Killbot->check() == true){
    die(header("location: ".$config['bot']));
    $content = "Killbot - [".$ip."] \r\n";
	$save=fopen("bots.txt","a+");
    fwrite($save,$content);
	fclose($save);
}
?>