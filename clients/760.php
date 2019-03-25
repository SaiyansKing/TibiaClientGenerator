<?php
$dllerror = "Cannot load ";
$sprfile = "Cannot open .spr file.";
$datfile = "Cannot open .dat file.";
$picfile = "Cannot open .pic file.";

$filename = "clients/760.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x7DE98;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x905C4;
	$len = strlen($sprfile);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($sprfile, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x1BDD] = chr(0x98); $content[0x1BDE] = chr(0xDE); $content[0x1BDF] = chr(0x47); $content[0x1BE0] = chr(0x00);
	$content[0x1CFD] = chr(0x98); $content[0x1CFE] = chr(0xDE); $content[0x1CFF] = chr(0x47); $content[0x1D00] = chr(0x00);
	$content[0x1E65] = chr(0x98); $content[0x1E66] = chr(0xDE); $content[0x1E67] = chr(0x47); $content[0x1E68] = chr(0x00);
	$content[0x18163] = chr(0x98); $content[0x18164] = chr(0xDE); $content[0x18165] = chr(0x47); $content[0x18166] = chr(0x00);
	$content[0x34356] = chr(0x98); $content[0x34357] = chr(0xDE); $content[0x34358] = chr(0x47); $content[0x34359] = chr(0x00);
	$content[0x343F1] = chr(0x98); $content[0x343F2] = chr(0xDE); $content[0x343F3] = chr(0x47); $content[0x343F4] = chr(0x00);
}
if(!empty($tibiadat))
{
	$patchaddr = 0x7DEFD;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x905E4;
	$len = strlen($datfile);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($datfile, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x1BC6] = chr(0xFD); $content[0x1BC7] = chr(0xDE); $content[0x1BC8] = chr(0x47); $content[0x1BC9] = chr(0x00);
	$content[0x1CE6] = chr(0xFD); $content[0x1CE7] = chr(0xDE); $content[0x1CE8] = chr(0x47); $content[0x1CE9] = chr(0x00);
	$content[0x1E4B] = chr(0xFD); $content[0x1E4C] = chr(0xDE); $content[0x1E4D] = chr(0x47); $content[0x1E4E] = chr(0x00);
	$content[0x18154] = chr(0xFD); $content[0x18155] = chr(0xDE); $content[0x18156] = chr(0x47); $content[0x18157] = chr(0x00);
	$content[0x4D9E4] = chr(0xFD); $content[0x4D9E5] = chr(0xDE); $content[0x4D9E6] = chr(0x47); $content[0x4D9E7] = chr(0x00);
}
if(!empty($tibiapic))
{
	$patchaddr = 0x7DF62;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x905A4;
	$len = strlen($picfile);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($picfile, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x1BF4] = chr(0x62); $content[0x1BF5] = chr(0xDF); $content[0x1BF6] = chr(0x47); $content[0x1BF7] = chr(0x00);
	$content[0x1D14] = chr(0x62); $content[0x1D15] = chr(0xDF); $content[0x1D16] = chr(0x47); $content[0x1D17] = chr(0x00);
	$content[0x1E7F] = chr(0x62); $content[0x1E80] = chr(0xDF); $content[0x1E81] = chr(0x47); $content[0x1E82] = chr(0x00);
	$content[0x18172] = chr(0x62); $content[0x18173] = chr(0xDF); $content[0x18174] = chr(0x47); $content[0x18175] = chr(0x00);
	$content[0x343CE] = chr(0x62); $content[0x343CF] = chr(0xDF); $content[0x343D0] = chr(0x47); $content[0x343D1] = chr(0x00);
	$content[0x343FB] = chr(0x62); $content[0x343FC] = chr(0xDF); $content[0x343FD] = chr(0x47); $content[0x343FE] = chr(0x00);
}
if(!empty($ipaddress))
{
	// This is some patching to be able use 100 character hostnames
	$content[0x4A9A0] = chr(0x55); $content[0x4A9A1] = chr(0x8B); $content[0x4A9A2] = chr(0xEC); $content[0x4A9A3] = chr(0x83);
	$content[0x4A9A4] = chr(0xEC); $content[0x4A9A5] = chr(0x08); $content[0x4A9A6] = chr(0xC7); $content[0x4A9A7] = chr(0x45);
	$content[0x4A9A8] = chr(0xFC); $content[0x4A9A9] = chr(0x50); $content[0x4A9AA] = chr(0xFB); $content[0x4A9AB] = chr(0x5E);
	$content[0x4A9AC] = chr(0x00); $content[0x4A9AD] = chr(0xC7); $content[0x4A9AE] = chr(0x45); $content[0x4A9AF] = chr(0xF8);
	$content[0x4A9B0] = chr(0x00); $content[0x4A9B1] = chr(0x00); $content[0x4A9B2] = chr(0x00); $content[0x4A9B3] = chr(0x00);
	$content[0x4A9B4] = chr(0xEB); $content[0x4A9B5] = chr(0x09); $content[0x4A9B6] = chr(0x8B); $content[0x4A9B7] = chr(0x45);
	$content[0x4A9B8] = chr(0xF8); $content[0x4A9B9] = chr(0x83); $content[0x4A9BA] = chr(0xC0); $content[0x4A9BB] = chr(0x01);
	$content[0x4A9BC] = chr(0x89); $content[0x4A9BD] = chr(0x45); $content[0x4A9BE] = chr(0xF8); $content[0x4A9BF] = chr(0x83);
	$content[0x4A9C0] = chr(0x7D); $content[0x4A9C1] = chr(0xF8); $content[0x4A9C2] = chr(0x04); $content[0x4A9C3] = chr(0x7D);
	$content[0x4A9C4] = chr(0x34); $content[0x4A9C5] = chr(0x68); $content[0x4A9C6] = chr(0x25); $content[0x4A9C7] = chr(0xAA);
	$content[0x4A9C8] = chr(0x44); $content[0x4A9C9] = chr(0x00); $content[0x4A9CA] = chr(0x68); $content[0x4A9CB] = chr(0x08);
	$content[0x4A9CC] = chr(0x10); $content[0x4A9CD] = chr(0x48); $content[0x4A9CE] = chr(0x00); $content[0x4A9CF] = chr(0x6A);
	$content[0x4A9D0] = chr(0x64); $content[0x4A9D1] = chr(0x8B); $content[0x4A9D2] = chr(0x4D); $content[0x4A9D3] = chr(0xFC);
	$content[0x4A9D4] = chr(0x51); $content[0x4A9D5] = chr(0xE8); $content[0x4A9D6] = chr(0x23); $content[0x4A9D7] = chr(0x67);
	$content[0x4A9D8] = chr(0x01); $content[0x4A9D9] = chr(0x00); $content[0x4A9DA] = chr(0x83); $content[0x4A9DB] = chr(0xC4);
	$content[0x4A9DC] = chr(0x10); $content[0x4A9DD] = chr(0x8B); $content[0x4A9DE] = chr(0x55); $content[0x4A9DF] = chr(0xFC);
	$content[0x4A9E0] = chr(0xC7); $content[0x4A9E1] = chr(0x42); $content[0x4A9E2] = chr(0x64); $content[0x4A9E3] = chr(0x03);
	$content[0x4A9E4] = chr(0x1C); $content[0x4A9E5] = chr(0x00); $content[0x4A9E6] = chr(0x00); $content[0x4A9E7] = chr(0x8B);
	$content[0x4A9E8] = chr(0x45); $content[0x4A9E9] = chr(0xFC); $content[0x4A9EA] = chr(0xC6); $content[0x4A9EB] = chr(0x40);
	$content[0x4A9EC] = chr(0x68); $content[0x4A9ED] = chr(0x01); $content[0x4A9EE] = chr(0x8B); $content[0x4A9EF] = chr(0x4D);
	$content[0x4A9F0] = chr(0xFC); $content[0x4A9F1] = chr(0x83); $content[0x4A9F2] = chr(0xC1); $content[0x4A9F3] = chr(0x70);
	$content[0x4A9F4] = chr(0x89); $content[0x4A9F5] = chr(0x4D); $content[0x4A9F6] = chr(0xFC); $content[0x4A9F7] = chr(0xEB);
	$content[0x4A9F8] = chr(0xBD); $content[0x4A9F9] = chr(0x33); $content[0x4A9FA] = chr(0xD2); $content[0x4A9FB] = chr(0x52);
	$content[0x4A9FC] = chr(0xE8); $content[0x4A9FD] = chr(0xE0); $content[0x4A9FE] = chr(0x60); $content[0x4A9FF] = chr(0x01);
	$content[0x4AA00] = chr(0x00); $content[0x4AA01] = chr(0x50); $content[0x4AA02] = chr(0xE8); $content[0x4AA03] = chr(0xEA);
	$content[0x4AA04] = chr(0x73); $content[0x4AA05] = chr(0x01); $content[0x4AA06] = chr(0x00); $content[0x4AA07] = chr(0x83);
	$content[0x4AA08] = chr(0xC4); $content[0x4AA09] = chr(0x08); $content[0x4AA0A] = chr(0xE8); $content[0x4AA0B] = chr(0xEF);
	$content[0x4AA0C] = chr(0x73); $content[0x4AA0D] = chr(0x01); $content[0x4AA0E] = chr(0x00); $content[0x4AA0F] = chr(0x25);
	$content[0x4AA10] = chr(0x03); $content[0x4AA11] = chr(0x00); $content[0x4AA12] = chr(0x00); $content[0x4AA13] = chr(0x80);
	$content[0x4AA14] = chr(0x79); $content[0x4AA15] = chr(0x05); $content[0x4AA16] = chr(0x48); $content[0x4AA17] = chr(0x83);
	$content[0x4AA18] = chr(0xC8); $content[0x4AA19] = chr(0xFC); $content[0x4AA1A] = chr(0x40); $content[0x4AA1B] = chr(0xA3);
	$content[0x4AA1C] = chr(0x48); $content[0x4AA1D] = chr(0xFB); $content[0x4AA1E] = chr(0x5E); $content[0x4AA1F] = chr(0x00);
	$content[0x4AA20] = chr(0x8B); $content[0x4AA21] = chr(0xE5); $content[0x4AA22] = chr(0x5D); $content[0x4AA23] = chr(0xC3);
	$content[0x4AA24] = chr(0xCC);

	$patchaddr = 0x4AA25;
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
		$content[0x4A9E3] = $port[0]; $content[0x4A9E4] = $port[1];
	}
}
else if(isset($port) && $port > 0)
{
	$port = pack("v", $port);
	$content[0x4AA9E] = $port[0]; $content[0x4AA9F] = $port[1];
}
if(!empty($title))
{
	$content[0x4DB78] = chr(0xEB); $content[0x4DB75] = chr(0x04); $content[0x4DA70] = chr(0xC2); $content[0x4DA71] = chr(0x04);
	$content[0x4DA72] = chr(0x00); $content[0x4DA73] = chr(0xCC); $content[0x4DB9B] = chr(0x50);

	$patchaddr = 0x4DA74;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x4DDAC] = chr(0x6A); $content[0x4DDAD] = chr(0x00); $content[0x4DDAE] = chr(0x6A); $content[0x4DDAF] = chr(0x00);
	$content[0x4DDB0] = chr(0x6A); $content[0x4DDB1] = chr(0x00); $content[0x4DDB2] = chr(0x6A); $content[0x4DDB3] = chr(0x00);
	$content[0x4DDB4] = chr(0x68); $content[0x4DDB5] = chr(0xB8); $content[0x4DDB6] = chr(0xD4); $content[0x4DDB7] = chr(0x49);
	$content[0x4DDB8] = chr(0x00); $content[0x4DDB9] = chr(0x68); $content[0x4DDBA] = chr(0x00); $content[0x4DDBB] = chr(0x00);
	$content[0x4DDBC] = chr(0xCF); $content[0x4DDBD] = chr(0x00); $content[0x4DDBE] = chr(0x68); $content[0x4DDBF] = chr(0x74);
	$content[0x4DDC0] = chr(0xDA); $content[0x4DDC1] = chr(0x44); $content[0x4DDC2] = chr(0x00); $content[0x4DDC3] = chr(0x90);
	$content[0x4DDC4] = chr(0x90);
}
if(!empty($createurl))
{
	$patchaddr = 0x7E968;
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
	$patchaddr = 0x7E994;
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
	$patchaddr = 0x7EB1C;
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
	$patchaddr = 0x857B8;
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
	$patchaddr = 0x8DE74;
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
	$patchaddr = 0x7F150;
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
	$content[0x7DFC7] = chr(0x68); $content[0x7DFC8] = chr(0x6C); $content[0x7DFC9] = chr(0xF4); $content[0x7DFCA] = chr(0x5F);
	$content[0x7DFCB] = chr(0x00); $content[0x7DFCC] = chr(0xFF); $content[0x7DFCD] = chr(0x15); $content[0x7DFCE] = chr(0x9C);
	$content[0x7DFCF] = chr(0xE2); $content[0x7DFD0] = chr(0x47); $content[0x7DFD1] = chr(0x00); $content[0x7DFD2] = chr(0x85);
	$content[0x7DFD3] = chr(0xC0); $content[0x7DFD4] = chr(0x75); $content[0x7DFD5] = chr(0x1C); $content[0x7DFD6] = chr(0x6A);
	$content[0x7DFD7] = chr(0x10); $content[0x7DFD8] = chr(0x68); $content[0x7DFD9] = chr(0x6C); $content[0x7DFDA] = chr(0xF4);
	$content[0x7DFDB] = chr(0x5F); $content[0x7DFDC] = chr(0x00); $content[0x7DFDD] = chr(0x68); $content[0x7DFDE] = chr(0x60);
	$content[0x7DFDF] = chr(0xF4); $content[0x7DFE0] = chr(0x5F); $content[0x7DFE1] = chr(0x00); $content[0x7DFE2] = chr(0x6A);
	$content[0x7DFE3] = chr(0x00); $content[0x7DFE4] = chr(0xFF); $content[0x7DFE5] = chr(0x15); $content[0x7DFE6] = chr(0x84);
	$content[0x7DFE7] = chr(0xE4); $content[0x7DFE8] = chr(0x47); $content[0x7DFE9] = chr(0x00); $content[0x7DFEA] = chr(0x6A);
	$content[0x7DFEB] = chr(0xFF); $content[0x7DFEC] = chr(0xFF); $content[0x7DFED] = chr(0x15); $content[0x7DFEE] = chr(0x58);
	$content[0x7DFEF] = chr(0xE1); $content[0x7DFF0] = chr(0x47); $content[0x7DFF1] = chr(0x00); $content[0x7DFF2] = chr(0xE9);
	$content[0x7DFF3] = chr(0x27); $content[0x7DFF4] = chr(0x4B); $content[0x7DFF5] = chr(0xFE); $content[0x7DFF6] = chr(0xFF);
	$content[0x140] = chr(0xC7); $content[0x141] = chr(0xDF); $content[0x142] = chr(0x07); $content[0x143] = chr(0x00);

	$patchaddr = 0xA2460;
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
	$content[0x48A83] = chr(0x90);
	$content[0x48A84] = chr(0x90);
	$content[0x48A85] = chr(0x90);
}
if(isset($mchack))
{
	$content[0x4DE45] = chr(0xEB);
}
if(isset($xray))
{
	//TODO: too lazy to search for now
}