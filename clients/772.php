<?php
$dllerror = "Cannot load ";
$sprfile1 = "Cannot find .spr file.";
$sprfile2 = "Cannot open .spr file.";
$datfile = "Cannot find .dat file.";
$picfile1 = "Cannot find .pic file.";
$picfile2 = "Cannot open .pic file.";

$filename = "clients/772.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x15A41D;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x17350C;
	$len = strlen($sprfile1);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($sprfile1, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x1734EC;
	$len = strlen($sprfile2);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($sprfile2, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xAB5A] = chr(0x1D); $content[0xAB5B] = chr(0xA4); $content[0xAB5C] = chr(0x55); $content[0xAB5D] = chr(0x00);
	$content[0xB02C] = chr(0x1D); $content[0xB02D] = chr(0xA4); $content[0xB02E] = chr(0x55); $content[0xB02F] = chr(0x00);
	$content[0xB535] = chr(0x1D); $content[0xB536] = chr(0xA4); $content[0xB537] = chr(0x55); $content[0xB538] = chr(0x00);
	$content[0x4A337] = chr(0x1D); $content[0x4A338] = chr(0xA4); $content[0x4A339] = chr(0x55); $content[0x4A33A] = chr(0x00);
	$content[0x924D1] = chr(0x1D); $content[0x924D2] = chr(0xA4); $content[0x924D3] = chr(0x55); $content[0x924D4] = chr(0x00);
	$content[0x94B15] = chr(0x1D); $content[0x94B16] = chr(0xA4); $content[0x94B17] = chr(0x55); $content[0x94B18] = chr(0x00);
}
if(!empty($tibiadat))
{
	$patchaddr = 0x15A482;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x17352C;
	$len = strlen($datfile);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($datfile, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xAB4D] = chr(0x82); $content[0xAB4E] = chr(0xA4); $content[0xAB4F] = chr(0x55); $content[0xAB50] = chr(0x00);
	$content[0xB01F] = chr(0x82); $content[0xB020] = chr(0xA4); $content[0xB021] = chr(0x55); $content[0xB022] = chr(0x00);
	$content[0xB51D] = chr(0x82); $content[0xB51E] = chr(0xA4); $content[0xB51F] = chr(0x55); $content[0xB520] = chr(0x00);
	$content[0x4A328] = chr(0x82); $content[0x4A329] = chr(0xA4); $content[0x4A32A] = chr(0x55); $content[0x4A32B] = chr(0x00);
	$content[0xD781A] = chr(0x82); $content[0xD781B] = chr(0xA4); $content[0xD781C] = chr(0x55); $content[0xD781D] = chr(0x00);
}
if(!empty($tibiapic))
{
	$patchaddr = 0x15A4E7;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x1734CC;
	$len = strlen($picfile1);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($picfile1, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x1734AC;
	$len = strlen($picfile2);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($picfile2, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xAB68] = chr(0xE7); $content[0xAB69] = chr(0xA4); $content[0xAB6A] = chr(0x55); $content[0xAB6B] = chr(0x00);
	$content[0xB03A] = chr(0xE7); $content[0xB03B] = chr(0xA4); $content[0xB03C] = chr(0x55); $content[0xB03D] = chr(0x00);
	$content[0xB54D] = chr(0xE7); $content[0xB54E] = chr(0xA4); $content[0xB54F] = chr(0x55); $content[0xB550] = chr(0x00);
	$content[0x4A346] = chr(0xE7); $content[0x4A347] = chr(0xA4); $content[0x4A348] = chr(0x55); $content[0x4A349] = chr(0x00);
	$content[0x9497E] = chr(0xE7); $content[0x9497F] = chr(0xA4); $content[0x94980] = chr(0x55); $content[0x94981] = chr(0x00);
	$content[0x94B29] = chr(0xE7); $content[0x94B2A] = chr(0xA4); $content[0x94B2B] = chr(0x55); $content[0x94B2C] = chr(0x00);
}
if(!empty($rsakey))
{
	$patchaddr = 0x15B620;
	$len = strlen($rsakey);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($rsakey, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
else
{
	// Maybe use patched rsakey executable instead?
	$patchaddr = 0x15B620;
	$len = strlen($ots_rsakey);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($ots_rsakey, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
if(!empty($ipaddress))
{
	// This is some patching to be able use 100 character hostnames
	$content[0xCA0E0] = chr(0x55); $content[0xCA0E1] = chr(0x8B); $content[0xCA0E2] = chr(0xEC); $content[0xCA0E3] = chr(0x83);
	$content[0xCA0E4] = chr(0xEC); $content[0xCA0E5] = chr(0x08); $content[0xCA0E6] = chr(0xC7); $content[0xCA0E7] = chr(0x45);
	$content[0xCA0E8] = chr(0xFC); $content[0xCA0E9] = chr(0xF8); $content[0xCA0EA] = chr(0x52); $content[0xCA0EB] = chr(0x71);
	$content[0xCA0EC] = chr(0x00); $content[0xCA0ED] = chr(0xC7); $content[0xCA0EE] = chr(0x45); $content[0xCA0EF] = chr(0xF8);
	$content[0xCA0F0] = chr(0x00); $content[0xCA0F1] = chr(0x00); $content[0xCA0F2] = chr(0x00); $content[0xCA0F3] = chr(0x00);
	$content[0xCA0F4] = chr(0xEB); $content[0xCA0F5] = chr(0x09); $content[0xCA0F6] = chr(0x8B); $content[0xCA0F7] = chr(0x45);
	$content[0xCA0F8] = chr(0xF8); $content[0xCA0F9] = chr(0x83); $content[0xCA0FA] = chr(0xC0); $content[0xCA0FB] = chr(0x01);
	$content[0xCA0FC] = chr(0x89); $content[0xCA0FD] = chr(0x45); $content[0xCA0FE] = chr(0xF8); $content[0xCA0FF] = chr(0x83);
	$content[0xCA100] = chr(0x7D); $content[0xCA101] = chr(0xF8); $content[0xCA102] = chr(0x04); $content[0xCA103] = chr(0x7D);
	$content[0xCA104] = chr(0x34); $content[0xCA105] = chr(0x68); $content[0xCA106] = chr(0x54); $content[0xCA107] = chr(0xA1);
	$content[0xCA108] = chr(0x4C); $content[0xCA109] = chr(0x00); $content[0xCA10A] = chr(0x68); $content[0xCA10B] = chr(0xB0);
	$content[0xCA10C] = chr(0xF0); $content[0xCA10D] = chr(0x55); $content[0xCA10E] = chr(0x00); $content[0xCA10F] = chr(0x6A);
	$content[0xCA110] = chr(0x64); $content[0xCA111] = chr(0x8B); $content[0xCA112] = chr(0x4D); $content[0xCA113] = chr(0xFC);
	$content[0xCA114] = chr(0x51); $content[0xCA115] = chr(0xE8); $content[0xCA116] = chr(0x23); $content[0xCA117] = chr(0x82);
	$content[0xCA118] = chr(0x04); $content[0xCA119] = chr(0x00); $content[0xCA11A] = chr(0x83); $content[0xCA11B] = chr(0xC4);
	$content[0xCA11C] = chr(0x10); $content[0xCA11D] = chr(0x8B); $content[0xCA11E] = chr(0x55); $content[0xCA11F] = chr(0xFC);
	$content[0xCA120] = chr(0xC7); $content[0xCA121] = chr(0x42); $content[0xCA122] = chr(0x64); $content[0xCA123] = chr(0x03);
	$content[0xCA124] = chr(0x1C); $content[0xCA125] = chr(0x00); $content[0xCA126] = chr(0x00); $content[0xCA127] = chr(0x8B);
	$content[0xCA128] = chr(0x45); $content[0xCA129] = chr(0xFC); $content[0xCA12A] = chr(0xC6); $content[0xCA12B] = chr(0x40);
	$content[0xCA12C] = chr(0x68); $content[0xCA12D] = chr(0x01); $content[0xCA12E] = chr(0x8B); $content[0xCA12F] = chr(0x4D);
	$content[0xCA130] = chr(0xFC); $content[0xCA131] = chr(0x83); $content[0xCA132] = chr(0xC1); $content[0xCA133] = chr(0x70);
	$content[0xCA134] = chr(0x89); $content[0xCA135] = chr(0x4D); $content[0xCA136] = chr(0xFC); $content[0xCA137] = chr(0xEB);
	$content[0xCA138] = chr(0xBD); $content[0xCA139] = chr(0xE8); $content[0xCA13A] = chr(0xF5); $content[0xCA13B] = chr(0x7D);
	$content[0xCA13C] = chr(0x04); $content[0xCA13D] = chr(0x00); $content[0xCA13E] = chr(0x25); $content[0xCA13F] = chr(0x03);
	$content[0xCA140] = chr(0x00); $content[0xCA141] = chr(0x00); $content[0xCA142] = chr(0x80); $content[0xCA143] = chr(0x79);
	$content[0xCA144] = chr(0x05); $content[0xCA145] = chr(0x48); $content[0xCA146] = chr(0x83); $content[0xCA147] = chr(0xC8);
	$content[0xCA148] = chr(0xFC); $content[0xCA149] = chr(0x40); $content[0xCA14A] = chr(0xA3); $content[0xCA14B] = chr(0xF0);
	$content[0xCA14C] = chr(0x52); $content[0xCA14D] = chr(0x71); $content[0xCA14E] = chr(0x00); $content[0xCA14F] = chr(0x8B);
	$content[0xCA150] = chr(0xE5); $content[0xCA151] = chr(0x5D); $content[0xCA152] = chr(0xC3); $content[0xCA153] = chr(0xCC);

	$patchaddr = 0xCA154;
	$len = strlen($ipaddress);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($ipaddress, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
	if(isset($port) && $port > 0)
	{
		$port = pack("v", $port);
		$content[0xCA123] = $port[0]; $content[0xCA124] = $port[1];
	}
}
else if(isset($port) && $port > 0)
{
	$port = pack("v", $port);
	$content[0xCA1FB] = $port[0]; $content[0xCA1FC] = $port[1];
}
if(!empty($title))
{
	$content[0xD9468] = chr(0xEB); $content[0xD9465] = chr(0x04); $content[0xD9140] = chr(0xC2); $content[0xD9141] = chr(0x04);
	$content[0xD9142] = chr(0x00); $content[0xD9143] = chr(0xCC); $content[0xD948B] = chr(0x50);

	$patchaddr = 0xD9144;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xDA625] = chr(0x6A); $content[0xDA626] = chr(0x00); $content[0xDA627] = chr(0x6A); $content[0xDA628] = chr(0x00);
	$content[0xDA629] = chr(0x6A); $content[0xDA62A] = chr(0x00); $content[0xDA62B] = chr(0x6A); $content[0xDA62C] = chr(0x00);
	$content[0xDA62D] = chr(0x68); $content[0xDA62E] = chr(0x94); $content[0xDA62F] = chr(0x28); $content[0xDA630] = chr(0x5C);
	$content[0xDA631] = chr(0x00); $content[0xDA632] = chr(0x68); $content[0xDA633] = chr(0x00); $content[0xDA634] = chr(0x00);
	$content[0xDA635] = chr(0xCF); $content[0xDA636] = chr(0x00); $content[0xDA637] = chr(0x68); $content[0xDA638] = chr(0x44);
	$content[0xDA639] = chr(0x91); $content[0xDA63A] = chr(0x4D); $content[0xDA63B] = chr(0x00); $content[0xDA63C] = chr(0x90);
	$content[0xDA63D] = chr(0x90); $content[0xDA63E] = chr(0x90); $content[0xDA63F] = chr(0x90); $content[0xDA640] = chr(0x90);
}
if(!empty($createurl))
{
	$patchaddr = 0x15BB60;
	$len = strlen($createurl);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($createurl, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
if(!empty($manageurl))
{
	$patchaddr = 0x15BB8C;
	$len = strlen($manageurl);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($manageurl, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
if(!empty($siteurl))
{
	$patchaddr = 0x15BD38;
	$len = strlen($siteurl);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($siteurl, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
if(!empty($sitebutton))
{
	$patchaddr = 0x163BF0;
	$len = strlen($sitebutton);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($sitebutton, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
if(!empty($defaultch))
{
	$patchaddr = 0x16C71C;
	$len = strlen($defaultch);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($defaultch, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
if(!empty($copyright))
{
	$patchaddr = 0x15C650;
	$len = min(strlen($copyright), 80);
	for($pos = 0; $pos < $len; $pos++)
	{
		$cbyte = ord(substr($copyright, $pos));
		if($cbyte == 92)
			$content[$patchaddr] = chr(0x0A);
		else
			$content[$patchaddr] = chr($cbyte);

		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
if(!empty($injectdll))
{
	$content[0x15A54C] = chr(0x68); $content[0x15A54D] = chr(0x88); $content[0x15A54E] = chr(0xA5); $content[0x15A54F] = chr(0x55);
	$content[0x15A550] = chr(0x00); $content[0x15A551] = chr(0xFF); $content[0x15A552] = chr(0x15); $content[0x15A553] = chr(0x00);
	$content[0x15A554] = chr(0xB2); $content[0x15A555] = chr(0x55); $content[0x15A556] = chr(0x00); $content[0x15A557] = chr(0x85);
	$content[0x15A558] = chr(0xC0); $content[0x15A559] = chr(0x75); $content[0x15A55A] = chr(0x1C); $content[0x15A55B] = chr(0x6A);
	$content[0x15A55C] = chr(0x10); $content[0x15A55D] = chr(0x68); $content[0x15A55E] = chr(0x88); $content[0x15A55F] = chr(0xA5);
	$content[0x15A560] = chr(0x55); $content[0x15A561] = chr(0x00); $content[0x15A562] = chr(0x68); $content[0x15A563] = chr(0x7C);
	$content[0x15A564] = chr(0xA5); $content[0x15A565] = chr(0x55); $content[0x15A566] = chr(0x00); $content[0x15A567] = chr(0x6A);
	$content[0x15A568] = chr(0x00); $content[0x15A569] = chr(0xFF); $content[0x15A56A] = chr(0x15); $content[0x15A56B] = chr(0xD4);
	$content[0x15A56C] = chr(0xB4); $content[0x15A56D] = chr(0x55); $content[0x15A56E] = chr(0x00); $content[0x15A56F] = chr(0x6A);
	$content[0x15A570] = chr(0xFF); $content[0x15A571] = chr(0xFF); $content[0x15A572] = chr(0x15); $content[0x15A573] = chr(0x18);
	$content[0x15A574] = chr(0xB1); $content[0x15A575] = chr(0x55); $content[0x15A576] = chr(0x00); $content[0x15A577] = chr(0xE9);
	$content[0x15A578] = chr(0xFE); $content[0x15A579] = chr(0x9A); $content[0x15A57A] = chr(0xFB); $content[0x15A57B] = chr(0xFF);
	$content[0x140] = chr(0x4C); $content[0x141] = chr(0xA5); $content[0x142] = chr(0x15); $content[0x143] = chr(0x00);

	$patchaddr = 0x15A57C;
	$len = strlen($dllerror);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($dllerror, $pos)));
		$patchaddr++;
	}
	$len = strlen($injectdll);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($injectdll, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
if(isset($lighthack))
{
	//Not tested
	$content[0xC65DD] = chr(0x90);
	$content[0xC65DE] = chr(0x90);
	$content[0xC65DF] = chr(0x90);
}
if(isset($mchack))
{
	$content[0xDA6E5] = chr(0xEB);
}
if(isset($xray))
{
	//TODO: too lazy to search for now
}