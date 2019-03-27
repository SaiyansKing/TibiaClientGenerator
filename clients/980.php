<?php
$dllerror = "Cannot load ";

$filename = "clients/980.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x321F60;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	/*$content[0x12FC3B] = chr(0xF9); $content[0x12FC3C] = chr(0x62); $content[0x12FC3D] = chr(0x6F); $content[0x12FC3E] = chr(0x00);
	$content[0x12FF65] = chr(0xF9); $content[0x12FF66] = chr(0x62); $content[0x12FF67] = chr(0x6F); $content[0x12FF68] = chr(0x00);
	$content[0x12FFF4] = chr(0xF9); $content[0x12FFF5] = chr(0x62); $content[0x12FFF6] = chr(0x6F); $content[0x12FFF7] = chr(0x00);
	$content[0x13019D] = chr(0xF9); $content[0x13019E] = chr(0x62); $content[0x13019F] = chr(0x6F); $content[0x1301A0] = chr(0x00);
	$content[0x130226] = chr(0xF9); $content[0x130227] = chr(0x62); $content[0x130228] = chr(0x6F); $content[0x130229] = chr(0x00);
	$content[0x1302B8] = chr(0xF9); $content[0x1302B9] = chr(0x62); $content[0x1302BA] = chr(0x6F); $content[0x1302BB] = chr(0x00);
	$content[0x13035A] = chr(0xF9); $content[0x13035B] = chr(0x62); $content[0x13035C] = chr(0x6F); $content[0x13035D] = chr(0x00);
	$content[0x130475] = chr(0xF9); $content[0x130476] = chr(0x62); $content[0x130477] = chr(0x6F); $content[0x130478] = chr(0x00);*/
}
if(!empty($tibiadat))
{
	$patchaddr = 0x321F44;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	/*$content[0x12FC1B] = chr(0x5E); $content[0x12FC1C] = chr(0x63); $content[0x12FC1D] = chr(0x6F); $content[0x12FC1E] = chr(0x00);
	$content[0x12FF59] = chr(0x5E); $content[0x12FF5A] = chr(0x63); $content[0x12FF5B] = chr(0x6F); $content[0x12FF5C] = chr(0x00);
	$content[0x12FFE8] = chr(0x5E); $content[0x12FFE9] = chr(0x63); $content[0x12FFEA] = chr(0x6F); $content[0x12FFEB] = chr(0x00);
	$content[0x13018F] = chr(0x5E); $content[0x130190] = chr(0x63); $content[0x130191] = chr(0x6F); $content[0x130192] = chr(0x00);
	$content[0x13021A] = chr(0x5E); $content[0x13021B] = chr(0x63); $content[0x13021C] = chr(0x6F); $content[0x13021D] = chr(0x00);
	$content[0x1302AC] = chr(0x5E); $content[0x1302AD] = chr(0x63); $content[0x1302AE] = chr(0x6F); $content[0x1302AF] = chr(0x00);
	$content[0x13034C] = chr(0x5E); $content[0x13034D] = chr(0x63); $content[0x13034E] = chr(0x6F); $content[0x13034F] = chr(0x00);
	$content[0x130467] = chr(0x5E); $content[0x130468] = chr(0x63); $content[0x130469] = chr(0x6F); $content[0x13046A] = chr(0x00);*/
}
if(!empty($tibiapic))
{
	$patchaddr = 0x321F7C;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	/*$content[0x12FC5B] = chr(0xC3); $content[0x12FC5C] = chr(0x63); $content[0x12FC5D] = chr(0x6F); $content[0x12FC5E] = chr(0x00);
	$content[0x12FF71] = chr(0xC3); $content[0x12FF72] = chr(0x63); $content[0x12FF73] = chr(0x6F); $content[0x12FF74] = chr(0x00);
	$content[0x130000] = chr(0xC3); $content[0x130001] = chr(0x63); $content[0x130002] = chr(0x6F); $content[0x130003] = chr(0x00);
	$content[0x1301AB] = chr(0xC3); $content[0x1301AC] = chr(0x63); $content[0x1301AD] = chr(0x6F); $content[0x1301AE] = chr(0x00);
	$content[0x130232] = chr(0xC3); $content[0x130233] = chr(0x63); $content[0x130234] = chr(0x6F); $content[0x130235] = chr(0x00);
	$content[0x1302C4] = chr(0xC3); $content[0x1302C5] = chr(0x63); $content[0x1302C6] = chr(0x6F); $content[0x1302C7] = chr(0x00);
	$content[0x130368] = chr(0xC3); $content[0x130369] = chr(0x63); $content[0x13036A] = chr(0x6F); $content[0x13036B] = chr(0x00);
	$content[0x130483] = chr(0xC3); $content[0x130484] = chr(0x63); $content[0x130485] = chr(0x6F); $content[0x130486] = chr(0x00);*/
}
if(!empty($rsakey))
{
	$patchaddr = 0x3267B8;
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
	$patchaddr = 0x3267B8;
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
	$content[0x326AA0] = chr(0xD8); $content[0x326AA1] = chr(0x81); $content[0x326AA2] = chr(0x72); $content[0x326AA3] = chr(0x00);
	$content[0x326AA8] = chr(0xD8); $content[0x326AA9] = chr(0x81); $content[0x326AAA] = chr(0x72); $content[0x326AAB] = chr(0x00);
	$content[0x326AB0] = chr(0xD8); $content[0x326AB1] = chr(0x81); $content[0x326AB2] = chr(0x72); $content[0x326AB3] = chr(0x00);
	$content[0x326AB8] = chr(0xD8); $content[0x326AB9] = chr(0x81); $content[0x326ABA] = chr(0x72); $content[0x326ABB] = chr(0x00);
	$content[0x326AC0] = chr(0xD8); $content[0x326AC1] = chr(0x81); $content[0x326AC2] = chr(0x72); $content[0x326AC3] = chr(0x00);
	$content[0x326AC8] = chr(0xD8); $content[0x326AC9] = chr(0x81); $content[0x326ACA] = chr(0x72); $content[0x326ACB] = chr(0x00);
	$content[0x326AD0] = chr(0xD8); $content[0x326AD1] = chr(0x81); $content[0x326AD2] = chr(0x72); $content[0x326AD3] = chr(0x00);
	$content[0x326AD8] = chr(0xD8); $content[0x326AD9] = chr(0x81); $content[0x326ADA] = chr(0x72); $content[0x326ADB] = chr(0x00);
	$content[0x326AE0] = chr(0xD8); $content[0x326AE1] = chr(0x81); $content[0x326AE2] = chr(0x72); $content[0x326AE3] = chr(0x00);
	$content[0x326AE8] = chr(0xD8); $content[0x326AE9] = chr(0x81); $content[0x326AEA] = chr(0x72); $content[0x326AEB] = chr(0x00);

	$patchaddr = 0x3269D8;
	$len = strlen($ipaddress);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($ipaddress, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
if(isset($port) && $port > 0)
{
	$port = pack("v", $port);
	$content[0x326AA4] = $port[0]; $content[0x326AA5] = $port[1];
	$content[0x326AAC] = $port[0]; $content[0x326AAD] = $port[1];
	$content[0x326AB4] = $port[0]; $content[0x326AB5] = $port[1];
	$content[0x326ABC] = $port[0]; $content[0x326ABD] = $port[1];
	$content[0x326AC4] = $port[0]; $content[0x326AC5] = $port[1];
	$content[0x326ACC] = $port[0]; $content[0x326ACD] = $port[1];
	$content[0x326AD4] = $port[0]; $content[0x326AD5] = $port[1];
	$content[0x326ADC] = $port[0]; $content[0x326ADD] = $port[1];
	$content[0x326AE4] = $port[0]; $content[0x326AE5] = $port[1];
	$content[0x326AEC] = $port[0]; $content[0x326AED] = $port[1];
}
if(!empty($title))
{
	$patchaddr = 0x326A3D;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x12D1F7] = chr(0x3D); $content[0x12D1F8] = chr(0x82); $content[0x12D1F9] = chr(0x72); $content[0x12D1FA] = chr(0x00);
	$content[0x131711] = chr(0x3D); $content[0x131712] = chr(0x82); $content[0x131713] = chr(0x72); $content[0x131714] = chr(0x00);
}
if(!empty($createurl))
{
	$patchaddr = 0x326B6C;
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
	$patchaddr = 0x326DCC;
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
	$patchaddr = 0x326AF4;
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
	$patchaddr = 0x41B310;
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
	$patchaddr = 0x40EEA8;
	$len = strlen($defaultch);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($defaultch, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
if(!empty($serverlog))
{
	$patchaddr = 0x40EEB8;
	$len = strlen($serverlog);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($serverlog, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);
}
if(!empty($copyright))
{
	$patchaddr = 0x40F0F8;
	$len = strlen($copyright);
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
if(isset($lighthack))
{
	//TODO: too lazy to search for now
}
if(isset($mchack))
{
	$content[0x131747] = chr(0xEB);
}
if(isset($xray))
{
	$content[0x110BCC] = chr(0x90); $content[0x110BCD] = chr(0x90); $content[0x110BD9] = chr(0x90); $content[0x110BDA] = chr(0x90);
}