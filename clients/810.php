<?php
$dllerror = "Cannot load ";

$filename = "clients/810.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x196AAD;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xF5463] = chr(0xAD); $content[0xF5464] = chr(0x6A); $content[0xF5465] = chr(0x59); $content[0xF5466] = chr(0x00);
	$content[0xF5724] = chr(0xAD); $content[0xF5725] = chr(0x6A); $content[0xF5726] = chr(0x59); $content[0xF5727] = chr(0x00);
	$content[0xF57AA] = chr(0xAD); $content[0xF57AB] = chr(0x6A); $content[0xF57AC] = chr(0x59); $content[0xF57AD] = chr(0x00);
	$content[0xF5955] = chr(0xAD); $content[0xF5956] = chr(0x6A); $content[0xF5957] = chr(0x59); $content[0xF5958] = chr(0x00);
	$content[0xF59DF] = chr(0xAD); $content[0xF59E0] = chr(0x6A); $content[0xF59E1] = chr(0x59); $content[0xF59E2] = chr(0x00);
	$content[0xF5A65] = chr(0xAD); $content[0xF5A66] = chr(0x6A); $content[0xF5A67] = chr(0x59); $content[0xF5A68] = chr(0x00);
	$content[0xF5B20] = chr(0xAD); $content[0xF5B21] = chr(0x6A); $content[0xF5B22] = chr(0x59); $content[0xF5B23] = chr(0x00);
	$content[0xF5C26] = chr(0xAD); $content[0xF5C27] = chr(0x6A); $content[0xF5C28] = chr(0x59); $content[0xF5C29] = chr(0x00);
}
if(!empty($tibiadat))
{
	$patchaddr = 0x196B12;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xF543F] = chr(0x12); $content[0xF5440] = chr(0x6B); $content[0xF5441] = chr(0x59); $content[0xF5442] = chr(0x00);
	$content[0xF5718] = chr(0x12); $content[0xF5719] = chr(0x6B); $content[0xF571A] = chr(0x59); $content[0xF571B] = chr(0x00);
	$content[0xF579E] = chr(0x12); $content[0xF579F] = chr(0x6B); $content[0xF57A0] = chr(0x59); $content[0xF57A1] = chr(0x00);
	$content[0xF5944] = chr(0x12); $content[0xF5945] = chr(0x6B); $content[0xF5946] = chr(0x59); $content[0xF5947] = chr(0x00);
	$content[0xF59D3] = chr(0x12); $content[0xF59D4] = chr(0x6B); $content[0xF59D5] = chr(0x59); $content[0xF59D6] = chr(0x00);
	$content[0xF5A59] = chr(0x12); $content[0xF5A5A] = chr(0x6B); $content[0xF5A5B] = chr(0x59); $content[0xF5A5C] = chr(0x00);
	$content[0xF5B0F] = chr(0x12); $content[0xF5B10] = chr(0x6B); $content[0xF5B11] = chr(0x59); $content[0xF5B12] = chr(0x00);
	$content[0xF5C15] = chr(0x12); $content[0xF5C16] = chr(0x6B); $content[0xF5C17] = chr(0x59); $content[0xF5C18] = chr(0x00);
}
if(!empty($tibiapic))
{
	$patchaddr = 0x196B77;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xF5487] = chr(0x77); $content[0xF5488] = chr(0x6B); $content[0xF5489] = chr(0x59); $content[0xF548A] = chr(0x00);
	$content[0xF5730] = chr(0x77); $content[0xF5731] = chr(0x6B); $content[0xF5732] = chr(0x59); $content[0xF5733] = chr(0x00);
	$content[0xF57B6] = chr(0x77); $content[0xF57B7] = chr(0x6B); $content[0xF57B8] = chr(0x59); $content[0xF57B9] = chr(0x00);
	$content[0xF5966] = chr(0x77); $content[0xF5967] = chr(0x6B); $content[0xF5968] = chr(0x59); $content[0xF5969] = chr(0x00);
	$content[0xF59EB] = chr(0x77); $content[0xF59EC] = chr(0x6B); $content[0xF59ED] = chr(0x59); $content[0xF59EE] = chr(0x00);
	$content[0xF5A71] = chr(0x77); $content[0xF5A72] = chr(0x6B); $content[0xF5A73] = chr(0x59); $content[0xF5A74] = chr(0x00);
	$content[0xF5B31] = chr(0x77); $content[0xF5B32] = chr(0x6B); $content[0xF5B33] = chr(0x59); $content[0xF5B34] = chr(0x00);
	$content[0xF5C37] = chr(0x77); $content[0xF5C38] = chr(0x6B); $content[0xF5C39] = chr(0x59); $content[0xF5C3A] = chr(0x00);
}
if(!empty($rsakey))
{
	$patchaddr = 0x197610;
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
	$patchaddr = 0x197610;
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
	$content[0xE3F80] = chr(0x55); $content[0xE3F81] = chr(0x8B); $content[0xE3F82] = chr(0xEC); $content[0xE3F83] = chr(0x83);
	$content[0xE3F84] = chr(0xEC); $content[0xE3F85] = chr(0x08); $content[0xE3F86] = chr(0xC7); $content[0xE3F87] = chr(0x45);
	$content[0xE3F88] = chr(0xFC); $content[0xE3F89] = chr(0xB8); $content[0xE3F8A] = chr(0x3B); $content[0xE3F8B] = chr(0x76);
	$content[0xE3F8C] = chr(0x00); $content[0xE3F8D] = chr(0xC7); $content[0xE3F8E] = chr(0x45); $content[0xE3F8F] = chr(0xF8);
	$content[0xE3F90] = chr(0x00); $content[0xE3F91] = chr(0x00); $content[0xE3F92] = chr(0x00); $content[0xE3F93] = chr(0x00);
	$content[0xE3F94] = chr(0xEB); $content[0xE3F95] = chr(0x09); $content[0xE3F96] = chr(0x8B); $content[0xE3F97] = chr(0x45);
	$content[0xE3F98] = chr(0xF8); $content[0xE3F99] = chr(0x83); $content[0xE3F9A] = chr(0xC0); $content[0xE3F9B] = chr(0x01);
	$content[0xE3F9C] = chr(0x89); $content[0xE3F9D] = chr(0x45); $content[0xE3F9E] = chr(0xF8); $content[0xE3F9F] = chr(0x83);
	$content[0xE3FA0] = chr(0x7D); $content[0xE3FA1] = chr(0xF8); $content[0xE3FA2] = chr(0x0A); $content[0xE3FA3] = chr(0x7D);
	$content[0xE3FA4] = chr(0x34); $content[0xE3FA5] = chr(0x68); $content[0xE3FA6] = chr(0x28); $content[0xE3FA7] = chr(0xC4);
	$content[0xE3FA8] = chr(0x5A); $content[0xE3FA9] = chr(0x00); $content[0xE3FAA] = chr(0x68); $content[0xE3FAB] = chr(0xB4);
	$content[0xE3FAC] = chr(0xB5); $content[0xE3FAD] = chr(0x59); $content[0xE3FAE] = chr(0x00); $content[0xE3FAF] = chr(0x6A);
	$content[0xE3FB0] = chr(0x64); $content[0xE3FB1] = chr(0x8B); $content[0xE3FB2] = chr(0x4D); $content[0xE3FB3] = chr(0xFC);
	$content[0xE3FB4] = chr(0x51); $content[0xE3FB5] = chr(0xE8); $content[0xE3FB6] = chr(0xF6); $content[0xE3FB7] = chr(0x75);
	$content[0xE3FB8] = chr(0x05); $content[0xE3FB9] = chr(0x00); $content[0xE3FBA] = chr(0x83); $content[0xE3FBB] = chr(0xC4);
	$content[0xE3FBC] = chr(0x10); $content[0xE3FBD] = chr(0x8B); $content[0xE3FBE] = chr(0x55); $content[0xE3FBF] = chr(0xFC);
	$content[0xE3FC0] = chr(0xC7); $content[0xE3FC1] = chr(0x42); $content[0xE3FC2] = chr(0x64); $content[0xE3FC3] = chr(0x03);
	$content[0xE3FC4] = chr(0x1C); $content[0xE3FC5] = chr(0x00); $content[0xE3FC6] = chr(0x00); $content[0xE3FC7] = chr(0x8B);
	$content[0xE3FC8] = chr(0x45); $content[0xE3FC9] = chr(0xFC); $content[0xE3FCA] = chr(0xC6); $content[0xE3FCB] = chr(0x40);
	$content[0xE3FCC] = chr(0x68); $content[0xE3FCD] = chr(0x01); $content[0xE3FCE] = chr(0x8B); $content[0xE3FCF] = chr(0x4D);
	$content[0xE3FD0] = chr(0xFC); $content[0xE3FD1] = chr(0x83); $content[0xE3FD2] = chr(0xC1); $content[0xE3FD3] = chr(0x70);
	$content[0xE3FD4] = chr(0x89); $content[0xE3FD5] = chr(0x4D); $content[0xE3FD6] = chr(0xFC); $content[0xE3FD7] = chr(0xEB);
	$content[0xE3FD8] = chr(0xBD); $content[0xE3FD9] = chr(0xE8); $content[0xE3FDA] = chr(0x15); $content[0xE3FDB] = chr(0xF9);
	$content[0xE3FDC] = chr(0x05); $content[0xE3FDD] = chr(0x00); $content[0xE3FDE] = chr(0x99); $content[0xE3FDF] = chr(0xB9);
	$content[0xE3FE0] = chr(0x0A); $content[0xE3FE1] = chr(0x00); $content[0xE3FE2] = chr(0x00); $content[0xE3FE3] = chr(0x00);
	$content[0xE3FE4] = chr(0xF7); $content[0xE3FE5] = chr(0xF9); $content[0xE3FE6] = chr(0x89); $content[0xE3FE7] = chr(0x15);
	$content[0xE3FE8] = chr(0xB0); $content[0xE3FE9] = chr(0x3B); $content[0xE3FEA] = chr(0x76); $content[0xE3FEB] = chr(0x00);
	$content[0xE3FEC] = chr(0x8B); $content[0xE3FED] = chr(0xE5); $content[0xE3FEE] = chr(0x5D); $content[0xE3FEF] = chr(0xC3);
	$content[0xE3FF0] = chr(0xCC);

	$patchaddr = 0x1AC428;
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
		$content[0xE3FC3] = $port[0]; $content[0xE3FC4] = $port[1];
	}
}
else if(isset($port) && $port > 0)
{
	$port = pack("v", $port);
	$content[0xE40FA] = $port[0]; $content[0xE40FB] = $port[1];
}
if(!empty($title))
{
	$patchaddr = 0x1AC48D;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0xF4BC1] = chr(0x8D); $content[0xF4BC2] = chr(0xC4); $content[0xF4BC3] = chr(0x5A); $content[0xF4BC4] = chr(0x00);
	$content[0xF8902] = chr(0x8D); $content[0xF8903] = chr(0xC4); $content[0xF8904] = chr(0x5A); $content[0xF8905] = chr(0x00);
}
if(!empty($createurl))
{
	$patchaddr = 0x197B50;
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
	$patchaddr = 0x197B8C;
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
	$patchaddr = 0x197D6C;
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
	$patchaddr = 0x1A0778;
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
	$patchaddr = 0x1A9624;
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
	$patchaddr = 0x1A1748;
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
	$content[0x196BDC] = chr(0x68); $content[0x196BDD] = chr(0x18); $content[0x196BDE] = chr(0x6C); $content[0x196BDF] = chr(0x59);
	$content[0x196BE0] = chr(0x00); $content[0x196BE1] = chr(0xFF); $content[0x196BE2] = chr(0x15); $content[0x196BE3] = chr(0x1C);
	$content[0x196BE4] = chr(0x72); $content[0x196BE5] = chr(0x59); $content[0x196BE6] = chr(0x00); $content[0x196BE7] = chr(0x85);
	$content[0x196BE8] = chr(0xC0); $content[0x196BE9] = chr(0x75); $content[0x196BEA] = chr(0x1C); $content[0x196BEB] = chr(0x6A);
	$content[0x196BEC] = chr(0x10); $content[0x196BED] = chr(0x68); $content[0x196BEE] = chr(0x18); $content[0x196BEF] = chr(0x6C);
	$content[0x196BF0] = chr(0x59); $content[0x196BF1] = chr(0x00); $content[0x196BF2] = chr(0x68); $content[0x196BF3] = chr(0x0C);
	$content[0x196BF4] = chr(0x6C); $content[0x196BF5] = chr(0x59); $content[0x196BF6] = chr(0x00); $content[0x196BF7] = chr(0x6A);
	$content[0x196BF8] = chr(0x00); $content[0x196BF9] = chr(0xFF); $content[0x196BFA] = chr(0x15); $content[0x196BFB] = chr(0xD4);
	$content[0x196BFC] = chr(0x74); $content[0x196BFD] = chr(0x59); $content[0x196BFE] = chr(0x00); $content[0x196BFF] = chr(0x6A);
	$content[0x196C00] = chr(0xFF); $content[0x196C01] = chr(0xFF); $content[0x196C02] = chr(0x15); $content[0x196C03] = chr(0x28);
	$content[0x196C04] = chr(0x71); $content[0x196C05] = chr(0x59); $content[0x196C06] = chr(0x00); $content[0x196C07] = chr(0xE9);
	$content[0x196C08] = chr(0xE8); $content[0x196C09] = chr(0xF1); $content[0x196C0A] = chr(0xFA); $content[0x196C0B] = chr(0xFF);
	$content[0x148] = chr(0xDC); $content[0x149] = chr(0x6B); $content[0x14A] = chr(0x19); $content[0x14B] = chr(0x00);

	$patchaddr = 0x196C0C;
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
	$content[0x1045B] = chr(0xC6); $content[0x1045C] = chr(0x46); $content[0x1045D] = chr(0x78); $content[0x1045E] = chr(0xFF);
	$content[0x1045F] = chr(0x90); $content[0x10460] = chr(0x90); $content[0x10466] = chr(0xC6); $content[0x10467] = chr(0x46);
	$content[0x10468] = chr(0x7C); $content[0x10469] = chr(0xCE); $content[0x1046A] = chr(0x90); $content[0x1046B] = chr(0x90);
}
if(isset($mchack))
{
	$content[0xF8965] = chr(0x90); $content[0xF8966] = chr(0x90);
}
if(isset($xray))
{
	$content[0xDF469] = chr(0x90); $content[0xDF46A] = chr(0x90); $content[0xDF472] = chr(0x90); $content[0xDF473] = chr(0x90);
}