<?php
$ots_rsakey = "109120132967399429278860960508995541528237502902798129123468757937266291492576446330739696001110603907230888610072655818825358503429057592827629436413108566029093628212635953836686562675849720620786279431090218017681061521755056710823876476444260558147179707119674283982419152118103759076030616683978566631413";
$version = $_POST["version"];
$tibiaspr = $_POST["file-spr"];
$tibiadat = $_POST["file-dat"];
$tibiapic = $_POST["file-pic"];
$rsakey = $_POST["rsa"];
$ipaddress = $_POST["address"];
$port = (int)$_POST["port"];
$title = $_POST["title"];
$createurl = $_POST["create-url"];
$manageurl = $_POST["manage-url"];
$siteurl = $_POST["site-url"];
$sitebutton = $_POST["site-button"];
$defaultch = $_POST["default-channel"];
$serverlog = $_POST["server-channel"];
$copyright = $_POST["copyright"];
$injectdll = $_POST["injectdll"];
$lighthack = $_POST["light-hack"];
$mchack = $_POST["mc-hack"];
$xray = $_POST["x-ray"];
$extfiles = $_POST["ext-files"];
$exteffects = $_POST["ext-effects"];
$extskills = $_POST["ext-skills"];
$exthp = $_POST["ext-hp"];
$extmp = $_POST["ext-mp"];
if($version == "7.40")
	include 'clients/740.php';
else if($version == "7.60")
	include 'clients/760.php';
else if($version == "7.72")
	include 'clients/772.php';
else if($version == "8.54")
	include 'clients/854.php';
else if($version == "8.60")
	include 'clients/860.php';
else
	die("Unknown client version");

include 'pushfile.php';