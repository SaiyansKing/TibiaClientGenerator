<?php
$dllerror = "Cannot load ";

$filename = "clients/860.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x1B7A5D;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x108913] = chr(0x5D); $content[0x108914] = chr(0x7A); $content[0x108915] = chr(0x5B); $content[0x108916] = chr(0x00);
	$content[0x108BD4] = chr(0x5D); $content[0x108BD5] = chr(0x7A); $content[0x108BD6] = chr(0x5B); $content[0x108BD7] = chr(0x00);
	$content[0x108C5A] = chr(0x5D); $content[0x108C5B] = chr(0x7A); $content[0x108C5C] = chr(0x5B); $content[0x108C5D] = chr(0x00);
	$content[0x108E05] = chr(0x5D); $content[0x108E06] = chr(0x7A); $content[0x108E07] = chr(0x5B); $content[0x108E08] = chr(0x00);
	$content[0x108E8F] = chr(0x5D); $content[0x108E90] = chr(0x7A); $content[0x108E91] = chr(0x5B); $content[0x108E92] = chr(0x00);
	$content[0x108F15] = chr(0x5D); $content[0x108F16] = chr(0x7A); $content[0x108F17] = chr(0x5B); $content[0x108F18] = chr(0x00);
	$content[0x108FD0] = chr(0x5D); $content[0x108FD1] = chr(0x7A); $content[0x108FD2] = chr(0x5B); $content[0x108FD3] = chr(0x00);
	$content[0x1090D6] = chr(0x5D); $content[0x1090D7] = chr(0x7A); $content[0x1090D8] = chr(0x5B); $content[0x1090D9] = chr(0x00);
}
if(!empty($tibiadat))
{
	$patchaddr = 0x1B7AC2;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x1088EF] = chr(0xC2); $content[0x1088F0] = chr(0x7A); $content[0x1088F1] = chr(0x5B); $content[0x1088F2] = chr(0x00);
	$content[0x108BC8] = chr(0xC2); $content[0x108BC9] = chr(0x7A); $content[0x108BCA] = chr(0x5B); $content[0x108BCB] = chr(0x00);
	$content[0x108C4E] = chr(0xC2); $content[0x108C4F] = chr(0x7A); $content[0x108C50] = chr(0x5B); $content[0x108C51] = chr(0x00);
	$content[0x108DF4] = chr(0xC2); $content[0x108DF5] = chr(0x7A); $content[0x108DF6] = chr(0x5B); $content[0x108DF7] = chr(0x00);
	$content[0x108F83] = chr(0xC2); $content[0x108F84] = chr(0x7A); $content[0x108F85] = chr(0x5B); $content[0x108F86] = chr(0x00);
	$content[0x108F09] = chr(0xC2); $content[0x108F0A] = chr(0x7A); $content[0x108F0B] = chr(0x5B); $content[0x108F0C] = chr(0x00);
	$content[0x108FBF] = chr(0xC2); $content[0x108FC0] = chr(0x7A); $content[0x108FC1] = chr(0x5B); $content[0x108FC2] = chr(0x00);
	$content[0x1090C5] = chr(0xC2); $content[0x1090C6] = chr(0x7A); $content[0x1090C7] = chr(0x5B); $content[0x1090C8] = chr(0x00);
}
if(!empty($tibiapic))
{
	$patchaddr = 0x1B7B27;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x108937] = chr(0x27); $content[0x108938] = chr(0x7B); $content[0x108939] = chr(0x5B); $content[0x10893A] = chr(0x00);
	$content[0x108BE0] = chr(0x27); $content[0x108BE1] = chr(0x7B); $content[0x108BE2] = chr(0x5B); $content[0x108BE3] = chr(0x00);
	$content[0x108C66] = chr(0x27); $content[0x108C67] = chr(0x7B); $content[0x108C68] = chr(0x5B); $content[0x108C69] = chr(0x00);
	$content[0x108E16] = chr(0x27); $content[0x108E17] = chr(0x7B); $content[0x108E18] = chr(0x5B); $content[0x108E19] = chr(0x00);
	$content[0x108E9B] = chr(0x27); $content[0x108E9C] = chr(0x7B); $content[0x108E9D] = chr(0x5B); $content[0x108E9E] = chr(0x00);
	$content[0x108F21] = chr(0x27); $content[0x108F22] = chr(0x7B); $content[0x108F23] = chr(0x5B); $content[0x108F24] = chr(0x00);
	$content[0x108FE1] = chr(0x27); $content[0x108FE2] = chr(0x7B); $content[0x108FE3] = chr(0x5B); $content[0x108FE4] = chr(0x00);
	$content[0x1090E7] = chr(0x27); $content[0x1090E8] = chr(0x7B); $content[0x1090E9] = chr(0x5B); $content[0x1090EA] = chr(0x00);
}
if(!empty($rsakey))
{
	$patchaddr = 0x1B8980;
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
	$patchaddr = 0x1B8980;
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
	$content[0x1B8860] = chr(0xB4); $content[0x1B8861] = chr(0x88); $content[0x1B8862] = chr(0x5B); $content[0x1B8863] = chr(0x00);
	$content[0x1B8868] = chr(0xB4); $content[0x1B8869] = chr(0x88); $content[0x1B886A] = chr(0x5B); $content[0x1B886B] = chr(0x00);
	$content[0x1B8870] = chr(0xB4); $content[0x1B8871] = chr(0x88); $content[0x1B8872] = chr(0x5B); $content[0x1B8873] = chr(0x00);
	$content[0x1B8878] = chr(0xB4); $content[0x1B8879] = chr(0x88); $content[0x1B887A] = chr(0x5B); $content[0x1B887B] = chr(0x00);
	$content[0x1B8880] = chr(0xB4); $content[0x1B8881] = chr(0x88); $content[0x1B8882] = chr(0x5B); $content[0x1B8883] = chr(0x00);
	$content[0x1B8888] = chr(0xB4); $content[0x1B8889] = chr(0x88); $content[0x1B888A] = chr(0x5B); $content[0x1B888B] = chr(0x00);
	$content[0x1B8890] = chr(0xB4); $content[0x1B8891] = chr(0x88); $content[0x1B8892] = chr(0x5B); $content[0x1B8893] = chr(0x00);
	$content[0x1B8898] = chr(0xB4); $content[0x1B8899] = chr(0x88); $content[0x1B889A] = chr(0x5B); $content[0x1B889B] = chr(0x00);
	$content[0x1B88A0] = chr(0xB4); $content[0x1B88A1] = chr(0x88); $content[0x1B88A2] = chr(0x5B); $content[0x1B88A3] = chr(0x00);
	$content[0x1B88A8] = chr(0xB4); $content[0x1B88A9] = chr(0x88); $content[0x1B88AA] = chr(0x5B); $content[0x1B88AB] = chr(0x00);

	$patchaddr = 0x1B88B4;
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
	$content[0x1B8864] = $port[0]; $content[0x1B8865] = $port[1];
	$content[0x1B886C] = $port[0]; $content[0x1B886D] = $port[1];
	$content[0x1B8874] = $port[0]; $content[0x1B8875] = $port[1];
	$content[0x1B887C] = $port[0]; $content[0x1B887D] = $port[1];
	$content[0x1B8884] = $port[0]; $content[0x1B8885] = $port[1];
	$content[0x1B888C] = $port[0]; $content[0x1B888D] = $port[1];
	$content[0x1B8894] = $port[0]; $content[0x1B8895] = $port[1];
	$content[0x1B889C] = $port[0]; $content[0x1B889D] = $port[1];
	$content[0x1B88A4] = $port[0]; $content[0x1B88A5] = $port[1];
	$content[0x1B88AC] = $port[0]; $content[0x1B88AD] = $port[1];
}
if(!empty($title))
{
	$patchaddr = 0x1B8919;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x108071] = chr(0x19); $content[0x108072] = chr(0x89); $content[0x108073] = chr(0x5B); $content[0x108074] = chr(0x00);
	$content[0x10BC62] = chr(0x19); $content[0x10BC63] = chr(0x89); $content[0x10BC64] = chr(0x5B); $content[0x10BC65] = chr(0x00);
}
if(!empty($createurl))
{
	$patchaddr = 0x1B8620;
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
	$patchaddr = 0x1B865C;
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
	$patchaddr = 0x1B883C;
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
	$patchaddr = 0x1C2930;
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
	$patchaddr = 0x1B8AF4;
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
	$patchaddr = 0x1B8AE8;
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
	$patchaddr = 0x1C39D0;
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
if(!empty($injectdll))
{
	$content[0x1B7B8C] = chr(0x68); $content[0x1B7B8D] = chr(0xC8); $content[0x1B7B8E] = chr(0x7B); $content[0x1B7B8F] = chr(0x5B);
	$content[0x1B7B90] = chr(0x00); $content[0x1B7B91] = chr(0xFF); $content[0x1B7B92] = chr(0x15); $content[0x1B7B93] = chr(0xC8);
	$content[0x1B7B94] = chr(0x82); $content[0x1B7B95] = chr(0x5B); $content[0x1B7B96] = chr(0x00); $content[0x1B7B97] = chr(0x85);
	$content[0x1B7B98] = chr(0xC0); $content[0x1B7B99] = chr(0x75); $content[0x1B7B9A] = chr(0x1C); $content[0x1B7B9B] = chr(0x6A);
	$content[0x1B7B9C] = chr(0x10); $content[0x1B7B9D] = chr(0x68); $content[0x1B7B9E] = chr(0xC8); $content[0x1B7B9F] = chr(0x7B);
	$content[0x1B7BA0] = chr(0x5B); $content[0x1B7BA1] = chr(0x00); $content[0x1B7BA2] = chr(0x68); $content[0x1B7BA3] = chr(0xBC);
	$content[0x1B7BA4] = chr(0x7B); $content[0x1B7BA5] = chr(0x5B); $content[0x1B7BA6] = chr(0x00); $content[0x1B7BA7] = chr(0x6A);
	$content[0x1B7BA8] = chr(0x00); $content[0x1B7BA9] = chr(0xFF); $content[0x1B7BAA] = chr(0x15); $content[0x1B7BAB] = chr(0xD0);
	$content[0x1B7BAC] = chr(0x84); $content[0x1B7BAD] = chr(0x5B); $content[0x1B7BAE] = chr(0x00); $content[0x1B7BAF] = chr(0x6A);
	$content[0x1B7BB0] = chr(0xFF); $content[0x1B7BB1] = chr(0xFF); $content[0x1B7BB2] = chr(0x15); $content[0x1B7BB3] = chr(0x48);
	$content[0x1B7BB4] = chr(0x81); $content[0x1B7BB5] = chr(0x5B); $content[0x1B7BB6] = chr(0x00); $content[0x1B7BB7] = chr(0xE9);
	$content[0x1B7BB8] = chr(0x2F); $content[0x1B7BB9] = chr(0xAA); $content[0x1B7BBA] = chr(0xFA); $content[0x1B7BBB] = chr(0xFF);
	$content[0x148] = chr(0x8C); $content[0x149] = chr(0x7B); $content[0x14A] = chr(0x1B); $content[0x14B] = chr(0x00);

	$patchaddr = 0x1B7BBC;
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
	$content[0xEAFA9] = chr(0x90); $content[0xEAFAA] = chr(0x90); $content[0xEAFAC] = chr(0xFF);
}
if(isset($mchack))
{
	$content[0x10BCA4] = chr(0xEB);
}
if(isset($xray))
{
	$content[0xF2809] = chr(0x90); $content[0xF280A] = chr(0x90); $content[0xF2813] = chr(0x90); $content[0xF2814] = chr(0x90);
}
if(isset($extfiles))
{
	$content[0x100968] = chr(0x64); $content[0x100969] = chr(0x6C); $content[0x10096A] = chr(0x01); $content[0x10096B] = chr(0x00);
	$content[0x100944] = chr(0xE9); $content[0x100945] = chr(0x3B); $content[0x100946] = chr(0x73); $content[0x100947] = chr(0x0B);
	$content[0x100948] = chr(0x00); $content[0x100949] = chr(0x90); $content[0x10094A] = chr(0x90); $content[0x10094B] = chr(0x90);
	$content[0x10094C] = chr(0x90); $content[0x100972] = chr(0x89); $content[0x100973] = chr(0x04); $content[0x100974] = chr(0x8A);
	$content[0x100975] = chr(0x90); $content[0x1B7C84] = chr(0x3E); $content[0x1B7C85] = chr(0x8D); $content[0x1B7C86] = chr(0x04);
	$content[0x1B7C87] = chr(0xBD); $content[0x1B7C88] = chr(0x00); $content[0x1B7C89] = chr(0x00); $content[0x1B7C8A] = chr(0x00);
	$content[0x1B7C8B] = chr(0x00); $content[0x1B7C8C] = chr(0x50); $content[0x1B7C8D] = chr(0xE8); $content[0x1B7C8E] = chr(0x80);
	$content[0x1B7C8F] = chr(0x9D); $content[0x1B7C90] = chr(0xFB); $content[0x1B7C91] = chr(0xFF); $content[0x1B7C92] = chr(0xE9);
	$content[0x1B7C93] = chr(0xB6); $content[0x1B7C94] = chr(0x8C); $content[0x1B7C95] = chr(0xF4); $content[0x1B7C96] = chr(0xFF);
	$content[0x10080C] = chr(0x8B); $content[0x10080D] = chr(0x44); $content[0x10080E] = chr(0x8A); $content[0x10080F] = chr(0xFC);
	$content[0x100810] = chr(0x90);
}
if(isset($exteffects))
{
	$content[0x104B5] = chr(0x47); $content[0x104B6] = chr(0x97); $content[0x104B7] = chr(0x0E); $content[0x104B8] = chr(0x00);
	$content[0x104BA] = chr(0xB7);
}
if(isset($extskills))
{
	$content[0x11FA5] = chr(0x57); $content[0x11FA6] = chr(0x7C); $content[0x11FA7] = chr(0x0E); $content[0x11FA8] = chr(0x00);
	$content[0x11FAA] = chr(0xB7);
}
if(isset($exthp))
{
	$content[0x11D2C] = chr(0x70); $content[0x11D2D] = chr(0x80); $content[0x11D2E] = chr(0x0E); $content[0x11D2F] = chr(0x00);
	$content[0x11D30] = chr(0x8B); $content[0x11D31] = chr(0xF0); $content[0x11D32] = chr(0x90);
	$content[0x11D37] = chr(0x65); $content[0x11D38] = chr(0x80); $content[0x11D39] = chr(0x0E); $content[0x11D3A] = chr(0x00);
	$content[0x11D3B] = chr(0x8B); $content[0x11D3C] = chr(0xF8); $content[0x11D3D] = chr(0x90);
}
if(isset($extmp))
{
	$content[0x11D6A] = chr(0x32); $content[0x11D6B] = chr(0x80); $content[0x11D6C] = chr(0x0E); $content[0x11D6D] = chr(0x00);
	$content[0x11D6E] = chr(0x8B); $content[0x11D6F] = chr(0xD0); $content[0x11D70] = chr(0x90);
	$content[0x11D75] = chr(0x27); $content[0x11D76] = chr(0x80); $content[0x11D77] = chr(0x0E); $content[0x11D78] = chr(0x00);
	$content[0x11D79] = chr(0x90); $content[0x11D7A] = chr(0x90); $content[0x11D7B] = chr(0x90);
}