<?php
$dllerror = "Cannot load ";
$sprfile1 = "Cannot find .spr file.";
$sprfile2 = "Cannot open .spr file.";
$datfile1 = "Cannot find .dat file.";
$datfile2 = "Cannot open .dat file.";
$picfile1 = "Cannot find .pic file.";
$picfile2 = "Cannot open .pic file.";

$filename = "clients/792.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x18CCCD;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x1A6748;
	$len = strlen($sprfile1);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($sprfile1, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x1A6728;
	$len = strlen($sprfile2);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($sprfile2, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xB34D] = chr(0xCD); $content[0xB34E] = chr(0xCC); $content[0xB34F] = chr(0x58); $content[0xB350] = chr(0x00);
	$content[0xB7B4] = chr(0xCD); $content[0xB7B5] = chr(0xCC); $content[0xB7B6] = chr(0x58); $content[0xB7B7] = chr(0x00);
	$content[0xBC45] = chr(0xCD); $content[0xBC46] = chr(0xCC); $content[0xBC47] = chr(0x58); $content[0xBC48] = chr(0x00);
	$content[0x4EA87] = chr(0xCD); $content[0x4EA88] = chr(0xCC); $content[0x4EA89] = chr(0x58); $content[0x4EA8A] = chr(0x00);
	$content[0xA116E] = chr(0xCD); $content[0xA116F] = chr(0xCC); $content[0xA1170] = chr(0x58); $content[0xA1171] = chr(0x00);
	$content[0xA3AFC] = chr(0xCD); $content[0xA3AFD] = chr(0xCC); $content[0xA3AFE] = chr(0x58); $content[0xA3AFF] = chr(0x00);
}
if(!empty($tibiadat))
{
	$patchaddr = 0x18CD32;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x1A6788;
	$len = strlen($datfile1);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($datfile1, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x1A6768;
	$len = strlen($datfile2);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($datfile2, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xB340] = chr(0x32); $content[0xB341] = chr(0xCD); $content[0xB342] = chr(0x58); $content[0xB343] = chr(0x00);
	$content[0xB7A7] = chr(0x32); $content[0xB7A8] = chr(0xCD); $content[0xB7A9] = chr(0x58); $content[0xB7AA] = chr(0x00);
	$content[0xBC23] = chr(0x32); $content[0xBC24] = chr(0xCD); $content[0xBC25] = chr(0x58); $content[0xBC26] = chr(0x00);
	$content[0x4EA78] = chr(0x32); $content[0x4EA79] = chr(0xCD); $content[0x4EA7A] = chr(0x58); $content[0x4EA7B] = chr(0x00);
	$content[0xF09F2] = chr(0x32); $content[0xF09F3] = chr(0xCD); $content[0xF09F4] = chr(0x58); $content[0xF09F5] = chr(0x00);
	$content[0xF0A1C] = chr(0x32); $content[0xF0A1D] = chr(0xCD); $content[0xF0A1E] = chr(0x58); $content[0xF0A1F] = chr(0x00);
}
if(!empty($tibiapic))
{
	$patchaddr = 0x18CD97;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x1A6708;
	$len = strlen($picfile1);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($picfile1, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x1A66E8;
	$len = strlen($picfile2);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($picfile2, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xB35B] = chr(0x97); $content[0xB35C] = chr(0xCD); $content[0xB35D] = chr(0x58); $content[0xB35E] = chr(0x00);
	$content[0xB7C2] = chr(0x97); $content[0xB7C3] = chr(0xCD); $content[0xB7C4] = chr(0x58); $content[0xB7C5] = chr(0x00);
	$content[0xBC67] = chr(0x97); $content[0xBC68] = chr(0xCD); $content[0xBC69] = chr(0x58); $content[0xBC6A] = chr(0x00);
	$content[0x4EA96] = chr(0x97); $content[0x4EA97] = chr(0xCD); $content[0x4EA98] = chr(0x58); $content[0x4EA99] = chr(0x00);
	$content[0xA3952] = chr(0x97); $content[0xA3953] = chr(0xCD); $content[0xA3954] = chr(0x58); $content[0xA3955] = chr(0x00);
	$content[0xA3B06] = chr(0x97); $content[0xA3B07] = chr(0xCD); $content[0xA3B08] = chr(0x58); $content[0xA3B09] = chr(0x00);
}
if(!empty($rsakey))
{
	$patchaddr = 0x18D620;
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
	$patchaddr = 0x18D620;
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
	$content[0xE08F0] = chr(0x55); $content[0xE08F1] = chr(0x8B); $content[0xE08F2] = chr(0xEC); $content[0xE08F3] = chr(0x83);
	$content[0xE08F4] = chr(0xEC); $content[0xE08F5] = chr(0x08); $content[0xE08F6] = chr(0xC7); $content[0xE08F7] = chr(0x45);
	$content[0xE08F8] = chr(0xFC); $content[0xE08F9] = chr(0x18); $content[0xE08FA] = chr(0x5E); $content[0xE08FB] = chr(0x75);
	$content[0xE08FC] = chr(0x00); $content[0xE08FD] = chr(0xC7); $content[0xE08FE] = chr(0x45); $content[0xE08FF] = chr(0xF8);
	$content[0xE0900] = chr(0x00); $content[0xE0901] = chr(0x00); $content[0xE0902] = chr(0x00); $content[0xE0903] = chr(0x00);
	$content[0xE0904] = chr(0xEB); $content[0xE0905] = chr(0x09); $content[0xE0906] = chr(0x8B); $content[0xE0907] = chr(0x45);
	$content[0xE0908] = chr(0xF8); $content[0xE0909] = chr(0x83); $content[0xE090A] = chr(0xC0); $content[0xE090B] = chr(0x01);
	$content[0xE090C] = chr(0x89); $content[0xE090D] = chr(0x45); $content[0xE090E] = chr(0xF8); $content[0xE090F] = chr(0x83);
	$content[0xE0910] = chr(0x7D); $content[0xE0911] = chr(0xF8); $content[0xE0912] = chr(0x04); $content[0xE0913] = chr(0x7D);
	$content[0xE0914] = chr(0x34); $content[0xE0915] = chr(0x68); $content[0xE0916] = chr(0x64); $content[0xE0917] = chr(0x09);
	$content[0xE0918] = chr(0x4E); $content[0xE0919] = chr(0x00); $content[0xE091A] = chr(0x68); $content[0xE091B] = chr(0x54);
	$content[0xE091C] = chr(0x14); $content[0xE091D] = chr(0x59); $content[0xE091E] = chr(0x00); $content[0xE091F] = chr(0x6A);
	$content[0xE0920] = chr(0x64); $content[0xE0921] = chr(0x8B); $content[0xE0922] = chr(0x4D); $content[0xE0923] = chr(0xFC);
	$content[0xE0924] = chr(0x51); $content[0xE0925] = chr(0xE8); $content[0xE0926] = chr(0x16); $content[0xE0927] = chr(0x2A);
	$content[0xE0928] = chr(0x05); $content[0xE0929] = chr(0x00); $content[0xE092A] = chr(0x83); $content[0xE092B] = chr(0xC4);
	$content[0xE092C] = chr(0x10); $content[0xE092D] = chr(0x8B); $content[0xE092E] = chr(0x55); $content[0xE092F] = chr(0xFC);
	$content[0xE0930] = chr(0xC7); $content[0xE0931] = chr(0x42); $content[0xE0932] = chr(0x64); $content[0xE0933] = chr(0x03);
	$content[0xE0934] = chr(0x1C); $content[0xE0935] = chr(0x00); $content[0xE0936] = chr(0x00); $content[0xE0937] = chr(0x8B);
	$content[0xE0938] = chr(0x45); $content[0xE0939] = chr(0xFC); $content[0xE093A] = chr(0xC6); $content[0xE093B] = chr(0x40);
	$content[0xE093C] = chr(0x68); $content[0xE093D] = chr(0x01); $content[0xE093E] = chr(0x8B); $content[0xE093F] = chr(0x4D);
	$content[0xE0940] = chr(0xFC); $content[0xE0941] = chr(0x83); $content[0xE0942] = chr(0xC1); $content[0xE0943] = chr(0x70);
	$content[0xE0944] = chr(0x89); $content[0xE0945] = chr(0x4D); $content[0xE0946] = chr(0xFC); $content[0xE0947] = chr(0xEB);
	$content[0xE0948] = chr(0xBD); $content[0xE0949] = chr(0xE8); $content[0xE094A] = chr(0x35); $content[0xE094B] = chr(0xA7);
	$content[0xE094C] = chr(0x05); $content[0xE094D] = chr(0x00); $content[0xE094E] = chr(0x25); $content[0xE094F] = chr(0x03);
	$content[0xE0950] = chr(0x00); $content[0xE0951] = chr(0x00); $content[0xE0952] = chr(0x80); $content[0xE0953] = chr(0x79);
	$content[0xE0954] = chr(0x05); $content[0xE0955] = chr(0x48); $content[0xE0956] = chr(0x83); $content[0xE0957] = chr(0xC8);
	$content[0xE0958] = chr(0xFC); $content[0xE0959] = chr(0x40); $content[0xE095A] = chr(0xA3); $content[0xE095B] = chr(0x10);
	$content[0xE095C] = chr(0x5E); $content[0xE095D] = chr(0x75); $content[0xE095E] = chr(0x00); $content[0xE095F] = chr(0x8B);
	$content[0xE0960] = chr(0xE5); $content[0xE0961] = chr(0x5D); $content[0xE0962] = chr(0xC3); $content[0xE0963] = chr(0xCC);

	$patchaddr = 0xE0964;
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
		$content[0xE0933] = $port[0]; $content[0xE0934] = $port[1];
	}
}
else if(isset($port) && $port > 0)
{
	$port = pack("v", $port);
	$content[0xE0A0B] = $port[0]; $content[0xE0A0C] = $port[1];
}
if(!empty($title))
{
	$content[0xF2818] = chr(0xEB); $content[0xF2815] = chr(0x04); $content[0xF24F0] = chr(0xC2); $content[0xF24F1] = chr(0x04);
	$content[0xF24F2] = chr(0x00); $content[0xF24F3] = chr(0xCC); $content[0xF283B] = chr(0x50);

	$patchaddr = 0xF24F4;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xF3B4B] = chr(0x8B); $content[0xF3B4C] = chr(0x16); $content[0xF3B4D] = chr(0x57); $content[0xF3B4E] = chr(0x57);
	$content[0xF3B4F] = chr(0x57); $content[0xF3B50] = chr(0x57); $content[0xF3B51] = chr(0x68); $content[0xF3B52] = chr(0xF4);
	$content[0xF3B53] = chr(0x19); $content[0xF3B54] = chr(0x60); $content[0xF3B55] = chr(0x00); $content[0xF3B56] = chr(0x68);
	$content[0xF3B57] = chr(0x00); $content[0xF3B58] = chr(0x00); $content[0xF3B59] = chr(0xCF); $content[0xF3B5A] = chr(0x00);
	$content[0xF3B5B] = chr(0x68); $content[0xF3B5C] = chr(0xF4); $content[0xF3B5D] = chr(0x24); $content[0xF3B5E] = chr(0x4F);
	$content[0xF3B5F] = chr(0x00); $content[0xF3B60] = chr(0x90); $content[0xF3B61] = chr(0x90); $content[0xF3B62] = chr(0x90);
	$content[0xF3B63] = chr(0x90); $content[0xF3B64] = chr(0x90);
}
if(!empty($createurl))
{
	$patchaddr = 0x195090;
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
	$patchaddr = 0x18DB60;
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
	$patchaddr = 0x18DD3C;
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
	$patchaddr = 0x1963F8;
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
	$patchaddr = 0x19F184;
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
	$patchaddr = 0x18E680;
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
	$content[0x18CE60] = chr(0x68); $content[0x18CE61] = chr(0x9C); $content[0x18CE62] = chr(0xCE); $content[0x18CE63] = chr(0x58);
	$content[0x18CE64] = chr(0x00); $content[0x18CE65] = chr(0xFF); $content[0x18CE66] = chr(0x15); $content[0x18CE67] = chr(0x08);
	$content[0x18CE68] = chr(0xD2); $content[0x18CE69] = chr(0x58); $content[0x18CE6A] = chr(0x00); $content[0x18CE6B] = chr(0x85);
	$content[0x18CE6C] = chr(0xC0); $content[0x18CE6D] = chr(0x75); $content[0x18CE6E] = chr(0x1C); $content[0x18CE6F] = chr(0x6A);
	$content[0x18CE70] = chr(0x10); $content[0x18CE71] = chr(0x68); $content[0x18CE72] = chr(0x9C); $content[0x18CE73] = chr(0xCE);
	$content[0x18CE74] = chr(0x58); $content[0x18CE75] = chr(0x00); $content[0x18CE76] = chr(0x68); $content[0x18CE77] = chr(0x90);
	$content[0x18CE78] = chr(0xCE); $content[0x18CE79] = chr(0x58); $content[0x18CE7A] = chr(0x00); $content[0x18CE7B] = chr(0x6A);
	$content[0x18CE7C] = chr(0x00); $content[0x18CE7D] = chr(0xFF); $content[0x18CE7E] = chr(0x15); $content[0x18CE7F] = chr(0xDC);
	$content[0x18CE80] = chr(0xD4); $content[0x18CE81] = chr(0x58); $content[0x18CE82] = chr(0x00); $content[0x18CE83] = chr(0x6A);
	$content[0x18CE84] = chr(0xFF); $content[0x18CE85] = chr(0xFF); $content[0x18CE86] = chr(0x15); $content[0x18CE87] = chr(0x20);
	$content[0x18CE88] = chr(0xD1); $content[0x18CE89] = chr(0x58); $content[0x18CE8A] = chr(0x00); $content[0x18CE8B] = chr(0xE9);
	$content[0x18CE8C] = chr(0xF8); $content[0x18CE8D] = chr(0x04); $content[0x18CE8E] = chr(0xFB); $content[0x18CE8F] = chr(0xFF);
	$content[0x138] = chr(0x60); $content[0x139] = chr(0xCE); $content[0x13A] = chr(0x18); $content[0x13B] = chr(0x00);

	$patchaddr = 0x18CE90;
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
	$content[0x100AB] = chr(0xC6); $content[0x100AC] = chr(0x46); $content[0x100AD] = chr(0x78); $content[0x100AE] = chr(0xFF);
	$content[0x100AF] = chr(0x90); $content[0x100B0] = chr(0x90); $content[0x100B6] = chr(0xC6); $content[0x100B7] = chr(0x46);
	$content[0x100B8] = chr(0x7C); $content[0x100B9] = chr(0xCE); $content[0x100BA] = chr(0x90); $content[0x100BB] = chr(0x90);
}
if(isset($mchack))
{
	$content[0xF3C15] = chr(0xEB);
}
if(isset($xray))
{
	//TODO: too lazy to search for now
}