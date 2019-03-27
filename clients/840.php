<?php
$dllerror = "Cannot load ";

$filename = "clients/840.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x1AA0AD;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x102243] = chr(0xAD); $content[0x102244] = chr(0xA0); $content[0x102245] = chr(0x5A); $content[0x102246] = chr(0x00);
	$content[0x102504] = chr(0xAD); $content[0x102505] = chr(0xA0); $content[0x102506] = chr(0x5A); $content[0x102507] = chr(0x00);
	$content[0x10258A] = chr(0xAD); $content[0x10258B] = chr(0xA0); $content[0x10258C] = chr(0x5A); $content[0x10258D] = chr(0x00);
	$content[0x102735] = chr(0xAD); $content[0x102736] = chr(0xA0); $content[0x102737] = chr(0x5A); $content[0x102738] = chr(0x00);
	$content[0x1027BF] = chr(0xAD); $content[0x1027C0] = chr(0xA0); $content[0x1027C1] = chr(0x5A); $content[0x1027C2] = chr(0x00);
	$content[0x102845] = chr(0xAD); $content[0x102846] = chr(0xA0); $content[0x102847] = chr(0x5A); $content[0x102848] = chr(0x00);
	$content[0x102900] = chr(0xAD); $content[0x102901] = chr(0xA0); $content[0x102902] = chr(0x5A); $content[0x102903] = chr(0x00);
	$content[0x102A06] = chr(0xAD); $content[0x102A07] = chr(0xA0); $content[0x102A08] = chr(0x5A); $content[0x102A09] = chr(0x00);
}
if(!empty($tibiadat))
{
	$patchaddr = 0x1AA112;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x10221F] = chr(0x12); $content[0x102220] = chr(0xA1); $content[0x102221] = chr(0x5A); $content[0x102222] = chr(0x00);
	$content[0x1024F8] = chr(0x12); $content[0x1024F9] = chr(0xA1); $content[0x1024FA] = chr(0x5A); $content[0x1024FB] = chr(0x00);
	$content[0x10257E] = chr(0x12); $content[0x10257F] = chr(0xA1); $content[0x102580] = chr(0x5A); $content[0x102581] = chr(0x00);
	$content[0x102724] = chr(0x12); $content[0x102725] = chr(0xA1); $content[0x102726] = chr(0x5A); $content[0x102727] = chr(0x00);
	$content[0x1027B3] = chr(0x12); $content[0x1027B4] = chr(0xA1); $content[0x1027B5] = chr(0x5A); $content[0x1027B6] = chr(0x00);
	$content[0x102839] = chr(0x12); $content[0x10283A] = chr(0xA1); $content[0x10283B] = chr(0x5A); $content[0x10283C] = chr(0x00);
	$content[0x1028EF] = chr(0x12); $content[0x1028F0] = chr(0xA1); $content[0x1028F1] = chr(0x5A); $content[0x1028F2] = chr(0x00);
	$content[0x1029F5] = chr(0x12); $content[0x1029F6] = chr(0xA1); $content[0x1029F7] = chr(0x5A); $content[0x1029F8] = chr(0x00);
}
if(!empty($tibiapic))
{
	$patchaddr = 0x1AA177;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x102267] = chr(0x77); $content[0x102268] = chr(0xA1); $content[0x102269] = chr(0x5A); $content[0x10226A] = chr(0x00);
	$content[0x102510] = chr(0x77); $content[0x102511] = chr(0xA1); $content[0x102512] = chr(0x5A); $content[0x102513] = chr(0x00);
	$content[0x102596] = chr(0x77); $content[0x102597] = chr(0xA1); $content[0x102598] = chr(0x5A); $content[0x102599] = chr(0x00);
	$content[0x102746] = chr(0x77); $content[0x102747] = chr(0xA1); $content[0x102748] = chr(0x5A); $content[0x102749] = chr(0x00);
	$content[0x1027CB] = chr(0x77); $content[0x1027CC] = chr(0xA1); $content[0x1027CD] = chr(0x5A); $content[0x1027CE] = chr(0x00);
	$content[0x102851] = chr(0x77); $content[0x102852] = chr(0xA1); $content[0x102853] = chr(0x5A); $content[0x102854] = chr(0x00);
	$content[0x102911] = chr(0x77); $content[0x102912] = chr(0xA1); $content[0x102913] = chr(0x5A); $content[0x102914] = chr(0x00);
	$content[0x102A17] = chr(0x77); $content[0x102A18] = chr(0xA1); $content[0x102A19] = chr(0x5A); $content[0x102A1A] = chr(0x00);
}
if(!empty($rsakey))
{
	$patchaddr = 0x1AB610;
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
	$patchaddr = 0x1AB610;
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
	$content[0xF0C30] = chr(0x55); $content[0xF0C31] = chr(0x8B); $content[0xF0C32] = chr(0xEC); $content[0xF0C33] = chr(0x83);
	$content[0xF0C34] = chr(0xEC); $content[0xF0C35] = chr(0x08); $content[0xF0C36] = chr(0xC7); $content[0xF0C37] = chr(0x45);
	$content[0xF0C38] = chr(0xFC); $content[0xF0C39] = chr(0x48); $content[0xF0C3A] = chr(0xFC); $content[0xF0C3B] = chr(0x77);
	$content[0xF0C3C] = chr(0x00); $content[0xF0C3D] = chr(0xC7); $content[0xF0C3E] = chr(0x45); $content[0xF0C3F] = chr(0xF8);
	$content[0xF0C40] = chr(0x00); $content[0xF0C41] = chr(0x00); $content[0xF0C42] = chr(0x00); $content[0xF0C43] = chr(0x00);
	$content[0xF0C44] = chr(0xEB); $content[0xF0C45] = chr(0x09); $content[0xF0C46] = chr(0x8B); $content[0xF0C47] = chr(0x45);
	$content[0xF0C48] = chr(0xF8); $content[0xF0C49] = chr(0x83); $content[0xF0C4A] = chr(0xC0); $content[0xF0C4B] = chr(0x01);
	$content[0xF0C4C] = chr(0x89); $content[0xF0C4D] = chr(0x45); $content[0xF0C4E] = chr(0xF8); $content[0xF0C4F] = chr(0x83);
	$content[0xF0C50] = chr(0x7D); $content[0xF0C51] = chr(0xF8); $content[0xF0C52] = chr(0x0A); $content[0xF0C53] = chr(0x7D);
	$content[0xF0C54] = chr(0x34); $content[0xF0C55] = chr(0x68); $content[0xF0C56] = chr(0x38); $content[0xF0C57] = chr(0xF4);
	$content[0xF0C58] = chr(0x5B); $content[0xF0C59] = chr(0x00); $content[0xF0C5A] = chr(0x68); $content[0xF0C5B] = chr(0xE4);
	$content[0xF0C5C] = chr(0xF9); $content[0xF0C5D] = chr(0x5A); $content[0xF0C5E] = chr(0x00); $content[0xF0C5F] = chr(0x6A);
	$content[0xF0C60] = chr(0x64); $content[0xF0C61] = chr(0x8B); $content[0xF0C62] = chr(0x4D); $content[0xF0C63] = chr(0xFC);
	$content[0xF0C64] = chr(0x51); $content[0xF0C65] = chr(0xE8); $content[0xF0C66] = chr(0xD6); $content[0xF0C67] = chr(0xA1);
	$content[0xF0C68] = chr(0x05); $content[0xF0C69] = chr(0x00); $content[0xF0C6A] = chr(0x83); $content[0xF0C6B] = chr(0xC4);
	$content[0xF0C6C] = chr(0x10); $content[0xF0C6D] = chr(0x8B); $content[0xF0C6E] = chr(0x55); $content[0xF0C6F] = chr(0xFC);
	$content[0xF0C70] = chr(0xC7); $content[0xF0C71] = chr(0x42); $content[0xF0C72] = chr(0x64); $content[0xF0C73] = chr(0x03);
	$content[0xF0C74] = chr(0x1C); $content[0xF0C75] = chr(0x00); $content[0xF0C76] = chr(0x00); $content[0xF0C77] = chr(0x8B);
	$content[0xF0C78] = chr(0x45); $content[0xF0C79] = chr(0xFC); $content[0xF0C7A] = chr(0xC6); $content[0xF0C7B] = chr(0x40);
	$content[0xF0C7C] = chr(0x68); $content[0xF0C7D] = chr(0x01); $content[0xF0C7E] = chr(0x8B); $content[0xF0C7F] = chr(0x4D);
	$content[0xF0C80] = chr(0xFC); $content[0xF0C81] = chr(0x83); $content[0xF0C82] = chr(0xC1); $content[0xF0C83] = chr(0x70);
	$content[0xF0C84] = chr(0x89); $content[0xF0C85] = chr(0x4D); $content[0xF0C86] = chr(0xFC); $content[0xF0C87] = chr(0xEB);
	$content[0xF0C88] = chr(0xBD); $content[0xF0C89] = chr(0xFF); $content[0xF0C8A] = chr(0x15); $content[0xF0C8B] = chr(0x90);
	$content[0xF0C8C] = chr(0xB5); $content[0xF0C8D] = chr(0x5A); $content[0xF0C8E] = chr(0x00); $content[0xF0C8F] = chr(0x33);
	$content[0xF0C90] = chr(0xD2); $content[0xF0C91] = chr(0xB9); $content[0xF0C92] = chr(0x0A); $content[0xF0C93] = chr(0x00);
	$content[0xF0C94] = chr(0x00); $content[0xF0C95] = chr(0x00); $content[0xF0C96] = chr(0xF7); $content[0xF0C97] = chr(0xF1);
	$content[0xF0C98] = chr(0x89); $content[0xF0C99] = chr(0x15); $content[0xF0C9A] = chr(0x40); $content[0xF0C9B] = chr(0xFC);
	$content[0xF0C9C] = chr(0x77); $content[0xF0C9D] = chr(0x00); $content[0xF0C9E] = chr(0x8B); $content[0xF0C9F] = chr(0xE5);
	$content[0xF0CA0] = chr(0x5D); $content[0xF0CA1] = chr(0xC3); $content[0xF0CA2] = chr(0xCC);

	$patchaddr = 0x1BF438;
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
		$content[0xF0C73] = $port[0]; $content[0xF0C74] = $port[1];
	}
}
else if(isset($port) && $port > 0)
{
	$port = pack("v", $port);
	$content[0xF0DAA] = $port[0]; $content[0xF0DAB] = $port[1];
}
if(!empty($title))
{
	$patchaddr = 0x1BF49D;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x1019A1] = chr(0x9D); $content[0x1019A2] = chr(0xF4); $content[0x1019A3] = chr(0x5B); $content[0x1019A4] = chr(0x00);
	$content[0x1058E2] = chr(0x9D); $content[0x1058E3] = chr(0xF4); $content[0x1058E4] = chr(0x5B); $content[0x1058E5] = chr(0x00);
}
if(!empty($createurl))
{
	$patchaddr = 0x1ABB58;
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
	$patchaddr = 0x1ABB94;
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
	$patchaddr = 0x1ABD74;
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
	$patchaddr = 0x1B5368;
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
	$patchaddr = 0x1BC524;
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
	$patchaddr = 0x1B6348;
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
	$content[0x1AA1DC] = chr(0x68); $content[0x1AA1DD] = chr(0x18); $content[0x1AA1DE] = chr(0xA2); $content[0x1AA1DF] = chr(0x5A);
	$content[0x1AA1E0] = chr(0x00); $content[0x1AA1E1] = chr(0xFF); $content[0x1AA1E2] = chr(0x15); $content[0x1AA1E3] = chr(0x1C);
	$content[0x1AA1E4] = chr(0xB2); $content[0x1AA1E5] = chr(0x5A); $content[0x1AA1E6] = chr(0x00); $content[0x1AA1E7] = chr(0x85);
	$content[0x1AA1E8] = chr(0xC0); $content[0x1AA1E9] = chr(0x75); $content[0x1AA1EA] = chr(0x1C); $content[0x1AA1EB] = chr(0x6A);
	$content[0x1AA1EC] = chr(0x10); $content[0x1AA1ED] = chr(0x68); $content[0x1AA1EE] = chr(0x18); $content[0x1AA1EF] = chr(0xA2);
	$content[0x1AA1F0] = chr(0x5A); $content[0x1AA1F1] = chr(0x00); $content[0x1AA1F2] = chr(0x68); $content[0x1AA1F3] = chr(0x0C);
	$content[0x1AA1F4] = chr(0xA2); $content[0x1AA1F5] = chr(0x5A); $content[0x1AA1F6] = chr(0x00); $content[0x1AA1F7] = chr(0x6A);
	$content[0x1AA1F8] = chr(0x00); $content[0x1AA1F9] = chr(0xFF); $content[0x1AA1FA] = chr(0x15); $content[0x1AA1FB] = chr(0xD4);
	$content[0x1AA1FC] = chr(0xB4); $content[0x1AA1FD] = chr(0x5A); $content[0x1AA1FE] = chr(0x00); $content[0x1AA1FF] = chr(0x6A);
	$content[0x1AA200] = chr(0xFF); $content[0x1AA201] = chr(0xFF); $content[0x1AA202] = chr(0x15); $content[0x1AA203] = chr(0x28);
	$content[0x1AA204] = chr(0xB1); $content[0x1AA205] = chr(0x5A); $content[0x1AA206] = chr(0x00); $content[0x1AA207] = chr(0xE9);
	$content[0x1AA208] = chr(0x78); $content[0x1AA209] = chr(0xC0); $content[0x1AA20A] = chr(0xFA); $content[0x1AA20B] = chr(0xFF);
	$content[0x140] = chr(0xDC); $content[0x141] = chr(0xA1); $content[0x142] = chr(0x1A); $content[0x143] = chr(0x00);

	$patchaddr = 0x1AA20C;
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
	$content[0x111EB] = chr(0xC6); $content[0x111EC] = chr(0x46); $content[0x111ED] = chr(0x78); $content[0x111EE] = chr(0xFF);
	$content[0x111EF] = chr(0x90); $content[0x111F0] = chr(0x90); $content[0x111F6] = chr(0xC6); $content[0x111F7] = chr(0x46);
	$content[0x111F8] = chr(0x7C); $content[0x111F9] = chr(0xCE); $content[0x111FA] = chr(0x90); $content[0x111FB] = chr(0x90);
}
if(isset($mchack))
{
	$content[0x105924] = chr(0xEB);
}
if(isset($xray))
{
	$content[0xEC179] = chr(0x90); $content[0xEC17A] = chr(0x90); $content[0xEC183] = chr(0x90); $content[0xEC184] = chr(0x90);
}