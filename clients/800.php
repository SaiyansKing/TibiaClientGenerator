<?php
$dllerror = "Cannot load ";

$filename = "clients/800.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x19203D;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xF2D63] = chr(0x3D); $content[0xF2D64] = chr(0x20); $content[0xF2D65] = chr(0x59); $content[0xF2D66] = chr(0x00);
	$content[0xF3024] = chr(0x3D); $content[0xF3025] = chr(0x20); $content[0xF3026] = chr(0x59); $content[0xF3027] = chr(0x00);
	$content[0xF30AA] = chr(0x3D); $content[0xF30AB] = chr(0x20); $content[0xF30AC] = chr(0x59); $content[0xF30AD] = chr(0x00);
	$content[0xF3255] = chr(0x3D); $content[0xF3256] = chr(0x20); $content[0xF3257] = chr(0x59); $content[0xF3258] = chr(0x00);
	$content[0xF32DF] = chr(0x3D); $content[0xF32E0] = chr(0x20); $content[0xF32E1] = chr(0x59); $content[0xF32E2] = chr(0x00);
	$content[0xF3365] = chr(0x3D); $content[0xF3366] = chr(0x20); $content[0xF3367] = chr(0x59); $content[0xF3368] = chr(0x00);
	$content[0xF3420] = chr(0x3D); $content[0xF3421] = chr(0x20); $content[0xF3422] = chr(0x59); $content[0xF3423] = chr(0x00);
	$content[0xF3526] = chr(0x3D); $content[0xF3527] = chr(0x20); $content[0xF3528] = chr(0x59); $content[0xF3529] = chr(0x00);
}
if(!empty($tibiadat))
{
	$patchaddr = 0x1920A2;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xF2D3F] = chr(0xA2); $content[0xF2D40] = chr(0x20); $content[0xF2D41] = chr(0x59); $content[0xF2D42] = chr(0x00);
	$content[0xF3018] = chr(0xA2); $content[0xF3019] = chr(0x20); $content[0xF301A] = chr(0x59); $content[0xF301B] = chr(0x00);
	$content[0xF309E] = chr(0xA2); $content[0xF309F] = chr(0x20); $content[0xF30A0] = chr(0x59); $content[0xF30A1] = chr(0x00);
	$content[0xF3244] = chr(0xA2); $content[0xF3245] = chr(0x20); $content[0xF3246] = chr(0x59); $content[0xF3247] = chr(0x00);
	$content[0xF32D3] = chr(0xA2); $content[0xF32D4] = chr(0x20); $content[0xF32D5] = chr(0x59); $content[0xF32D6] = chr(0x00);
	$content[0xF3359] = chr(0xA2); $content[0xF335A] = chr(0x20); $content[0xF335B] = chr(0x59); $content[0xF335C] = chr(0x00);
	$content[0xF340F] = chr(0xA2); $content[0xF3410] = chr(0x20); $content[0xF3411] = chr(0x59); $content[0xF3412] = chr(0x00);
	$content[0xF3515] = chr(0xA2); $content[0xF3516] = chr(0x20); $content[0xF3517] = chr(0x59); $content[0xF3518] = chr(0x00);
}
if(!empty($tibiapic))
{
	$patchaddr = 0x192107;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xF2D87] = chr(0x07); $content[0xF2D88] = chr(0x21); $content[0xF2D89] = chr(0x59); $content[0xF2D8A] = chr(0x00);
	$content[0xF3030] = chr(0x07); $content[0xF3031] = chr(0x21); $content[0xF3032] = chr(0x59); $content[0xF3033] = chr(0x00);
	$content[0xF30B6] = chr(0x07); $content[0xF30B7] = chr(0x21); $content[0xF30B8] = chr(0x59); $content[0xF30B9] = chr(0x00);
	$content[0xF3266] = chr(0x07); $content[0xF3267] = chr(0x21); $content[0xF3268] = chr(0x59); $content[0xF3269] = chr(0x00);
	$content[0xF32EB] = chr(0x07); $content[0xF32EC] = chr(0x21); $content[0xF32ED] = chr(0x59); $content[0xF32EE] = chr(0x00);
	$content[0xF3371] = chr(0x07); $content[0xF3372] = chr(0x21); $content[0xF3373] = chr(0x59); $content[0xF3374] = chr(0x00);
	$content[0xF3431] = chr(0x07); $content[0xF3432] = chr(0x21); $content[0xF3433] = chr(0x59); $content[0xF3434] = chr(0x00);
	$content[0xF3537] = chr(0x07); $content[0xF3538] = chr(0x21); $content[0xF3539] = chr(0x59); $content[0xF353A] = chr(0x00);
}
if(!empty($rsakey))
{
	$patchaddr = 0x193610;
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
	$patchaddr = 0x193610;
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
	$content[0xE1AF0] = chr(0x55); $content[0xE1AF1] = chr(0x8B); $content[0xE1AF2] = chr(0xEC); $content[0xE1AF3] = chr(0x83);
	$content[0xE1AF4] = chr(0xEC); $content[0xE1AF5] = chr(0x08); $content[0xE1AF6] = chr(0xC7); $content[0xE1AF7] = chr(0x45);
	$content[0xE1AF8] = chr(0xFC); $content[0xE1AF9] = chr(0xE8); $content[0xE1AFA] = chr(0xEA); $content[0xE1AFB] = chr(0x75);
	$content[0xE1AFC] = chr(0x00); $content[0xE1AFD] = chr(0xC7); $content[0xE1AFE] = chr(0x45); $content[0xE1AFF] = chr(0xF8);
	$content[0xE1B00] = chr(0x00); $content[0xE1B01] = chr(0x00); $content[0xE1B02] = chr(0x00); $content[0xE1B03] = chr(0x00);
	$content[0xE1B04] = chr(0xEB); $content[0xE1B05] = chr(0x09); $content[0xE1B06] = chr(0x8B); $content[0xE1B07] = chr(0x45);
	$content[0xE1B08] = chr(0xF8); $content[0xE1B09] = chr(0x83); $content[0xE1B0A] = chr(0xC0); $content[0xE1B0B] = chr(0x01);
	$content[0xE1B0C] = chr(0x89); $content[0xE1B0D] = chr(0x45); $content[0xE1B0E] = chr(0xF8); $content[0xE1B0F] = chr(0x83);
	$content[0xE1B10] = chr(0x7D); $content[0xE1B11] = chr(0xF8); $content[0xE1B12] = chr(0x0A); $content[0xE1B13] = chr(0x7D);
	$content[0xE1B14] = chr(0x34); $content[0xE1B15] = chr(0x68); $content[0xE1B16] = chr(0x08); $content[0xE1B17] = chr(0x83);
	$content[0xE1B18] = chr(0x5A); $content[0xE1B19] = chr(0x00); $content[0xE1B1A] = chr(0x68); $content[0xE1B1B] = chr(0x8C);
	$content[0xE1B1C] = chr(0x75); $content[0xE1B1D] = chr(0x59); $content[0xE1B1E] = chr(0x00); $content[0xE1B1F] = chr(0x6A);
	$content[0xE1B20] = chr(0x64); $content[0xE1B21] = chr(0x8B); $content[0xE1B22] = chr(0x4D); $content[0xE1B23] = chr(0xFC);
	$content[0xE1B24] = chr(0x51); $content[0xE1B25] = chr(0xE8); $content[0xE1B26] = chr(0x26); $content[0xE1B27] = chr(0x61);
	$content[0xE1B28] = chr(0x05); $content[0xE1B29] = chr(0x00); $content[0xE1B2A] = chr(0x83); $content[0xE1B2B] = chr(0xC4);
	$content[0xE1B2C] = chr(0x10); $content[0xE1B2D] = chr(0x8B); $content[0xE1B2E] = chr(0x55); $content[0xE1B2F] = chr(0xFC);
	$content[0xE1B30] = chr(0xC7); $content[0xE1B31] = chr(0x42); $content[0xE1B32] = chr(0x64); $content[0xE1B33] = chr(0x03);
	$content[0xE1B34] = chr(0x1C); $content[0xE1B35] = chr(0x00); $content[0xE1B36] = chr(0x00); $content[0xE1B37] = chr(0x8B);
	$content[0xE1B38] = chr(0x45); $content[0xE1B39] = chr(0xFC); $content[0xE1B3A] = chr(0xC6); $content[0xE1B3B] = chr(0x40);
	$content[0xE1B3C] = chr(0x68); $content[0xE1B3D] = chr(0x01); $content[0xE1B3E] = chr(0x8B); $content[0xE1B3F] = chr(0x4D);
	$content[0xE1B40] = chr(0xFC); $content[0xE1B41] = chr(0x83); $content[0xE1B42] = chr(0xC1); $content[0xE1B43] = chr(0x70);
	$content[0xE1B44] = chr(0x89); $content[0xE1B45] = chr(0x4D); $content[0xE1B46] = chr(0xFC); $content[0xE1B47] = chr(0xEB);
	$content[0xE1B48] = chr(0xBD); $content[0xE1B49] = chr(0xE8); $content[0xE1B4A] = chr(0xC5); $content[0xE1B4B] = chr(0xE1);
	$content[0xE1B4C] = chr(0x05); $content[0xE1B4D] = chr(0x00); $content[0xE1B4E] = chr(0x99); $content[0xE1B4F] = chr(0xB9);
	$content[0xE1B50] = chr(0x0A); $content[0xE1B51] = chr(0x00); $content[0xE1B52] = chr(0x00); $content[0xE1B53] = chr(0x00);
	$content[0xE1B54] = chr(0xF7); $content[0xE1B55] = chr(0xF9); $content[0xE1B56] = chr(0x89); $content[0xE1B57] = chr(0x15);
	$content[0xE1B58] = chr(0xE0); $content[0xE1B59] = chr(0xEA); $content[0xE1B5A] = chr(0x75); $content[0xE1B5B] = chr(0x00);
	$content[0xE1B5C] = chr(0x8B); $content[0xE1B5D] = chr(0xE5); $content[0xE1B5E] = chr(0x5D); $content[0xE1B5F] = chr(0xC3);
	$content[0xE1B60] = chr(0xCC);

	$patchaddr = 0x1A8308;
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
		$content[0xE1B33] = $port[0]; $content[0xE1B34] = $port[1];
	}
}
else if(isset($port) && $port > 0)
{
	$port = pack("v", $port);
	$content[0xE1C6A] = $port[0]; $content[0xE1C6B] = $port[1];
}
if(!empty($title))
{
	$patchaddr = 0x1A836D;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xF24AC] = chr(0x6D); $content[0xF24AD] = chr(0x83); $content[0xF24AE] = chr(0x5A); $content[0xF24AF] = chr(0x00);
	$content[0xF61E2] = chr(0x6D); $content[0xF61E3] = chr(0x83); $content[0xF61E4] = chr(0x5A); $content[0xF61E5] = chr(0x00);
}
if(!empty($createurl))
{
	$patchaddr = 0x193B50;
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
	$patchaddr = 0x193B8C;
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
	$patchaddr = 0x193D6C;
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
	$patchaddr = 0x19C6D0;
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
	$patchaddr = 0x1A5564;
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
	$patchaddr = 0x19D6A0;
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
	$content[0x19216C] = chr(0x68); $content[0x19216D] = chr(0xA8); $content[0x19216E] = chr(0x21); $content[0x19216F] = chr(0x59);
	$content[0x192170] = chr(0x00); $content[0x192171] = chr(0xFF); $content[0x192172] = chr(0x15); $content[0x192173] = chr(0x1C);
	$content[0x192174] = chr(0x32); $content[0x192175] = chr(0x59); $content[0x192176] = chr(0x00); $content[0x192177] = chr(0x85);
	$content[0x192178] = chr(0xC0); $content[0x192179] = chr(0x75); $content[0x19217A] = chr(0x1C); $content[0x19217B] = chr(0x6A);
	$content[0x19217C] = chr(0x10); $content[0x19217D] = chr(0x68); $content[0x19217E] = chr(0xA8); $content[0x19217F] = chr(0x21);
	$content[0x192180] = chr(0x59); $content[0x192181] = chr(0x00); $content[0x192182] = chr(0x68); $content[0x192183] = chr(0x9C);
	$content[0x192184] = chr(0x21); $content[0x192185] = chr(0x59); $content[0x192186] = chr(0x00); $content[0x192187] = chr(0x6A);
	$content[0x192188] = chr(0x00); $content[0x192189] = chr(0xFF); $content[0x19218A] = chr(0x15); $content[0x19218B] = chr(0xD4);
	$content[0x19218C] = chr(0x34); $content[0x19218D] = chr(0x59); $content[0x19218E] = chr(0x00); $content[0x19218F] = chr(0x6A);
	$content[0x192190] = chr(0xFF); $content[0x192191] = chr(0xFF); $content[0x192192] = chr(0x15); $content[0x192193] = chr(0x10);
	$content[0x192194] = chr(0x32); $content[0x192195] = chr(0x59); $content[0x192196] = chr(0x00); $content[0x192197] = chr(0xE9);
	$content[0x192198] = chr(0x9C); $content[0x192199] = chr(0xFE); $content[0x19219A] = chr(0xFA); $content[0x19219B] = chr(0xFF);
	$content[0x150] = chr(0x6C); $content[0x151] = chr(0x21); $content[0x152] = chr(0x19); $content[0x153] = chr(0x00);

	$patchaddr = 0x19219C;
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
	$content[0x102CB] = chr(0xC6); $content[0x102CC] = chr(0x46); $content[0x102CD] = chr(0x78); $content[0x102CE] = chr(0xFF);
	$content[0x102CF] = chr(0x90); $content[0x102D0] = chr(0x90); $content[0x102D6] = chr(0xC6); $content[0x102D7] = chr(0x46);
	$content[0x102D8] = chr(0x7C); $content[0x102D9] = chr(0xCE); $content[0x102DA] = chr(0x90); $content[0x102DB] = chr(0x90);
}
if(isset($mchack))
{
	$content[0xF6223] = chr(0xEB);
}
if(isset($xray))
{
	$content[0xDD2D7] = chr(0x90); $content[0xDD2D8] = chr(0x90); $content[0xDD2E1] = chr(0x90); $content[0xDD2E2] = chr(0x90);
}