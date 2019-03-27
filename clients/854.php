<?php
$dllerror = "Cannot load ";

$filename = "clients/854.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x1B19BD;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x103D03] = chr(0xBD); $content[0x103D04] = chr(0x19); $content[0x103D05] = chr(0x5B); $content[0x103D06] = chr(0x00);
	$content[0x103FC4] = chr(0xBD); $content[0x103FC5] = chr(0x19); $content[0x103FC6] = chr(0x5B); $content[0x103FC7] = chr(0x00);
	$content[0x10404A] = chr(0xBD); $content[0x10404B] = chr(0x19); $content[0x10404C] = chr(0x5B); $content[0x10404D] = chr(0x00);
	$content[0x1041F5] = chr(0xBD); $content[0x1041F6] = chr(0x19); $content[0x1041F7] = chr(0x5B); $content[0x1041F8] = chr(0x00);
	$content[0x10427F] = chr(0xBD); $content[0x104280] = chr(0x19); $content[0x104281] = chr(0x5B); $content[0x104282] = chr(0x00);
	$content[0x104305] = chr(0xBD); $content[0x104306] = chr(0x19); $content[0x104307] = chr(0x5B); $content[0x104308] = chr(0x00);
	$content[0x1043C0] = chr(0xBD); $content[0x1043C1] = chr(0x19); $content[0x1043C2] = chr(0x5B); $content[0x1043C3] = chr(0x00);
	$content[0x1044C6] = chr(0xBD); $content[0x1044C7] = chr(0x19); $content[0x1044C8] = chr(0x5B); $content[0x1044C9] = chr(0x00);
}
if(!empty($tibiadat))
{
	$patchaddr = 0x1B1A22;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x103CDF] = chr(0x22); $content[0x103CE0] = chr(0x1A); $content[0x103CE1] = chr(0x5B); $content[0x103CE2] = chr(0x00);
	$content[0x103FB8] = chr(0x22); $content[0x103FB9] = chr(0x1A); $content[0x103FBA] = chr(0x5B); $content[0x103FBB] = chr(0x00);
	$content[0x10403E] = chr(0x22); $content[0x10403F] = chr(0x1A); $content[0x104040] = chr(0x5B); $content[0x104041] = chr(0x00);
	$content[0x1041E4] = chr(0x22); $content[0x1041E5] = chr(0x1A); $content[0x1041E6] = chr(0x5B); $content[0x1041E7] = chr(0x00);
	$content[0x104273] = chr(0x22); $content[0x104274] = chr(0x1A); $content[0x104275] = chr(0x5B); $content[0x104276] = chr(0x00);
	$content[0x1042F9] = chr(0x22); $content[0x1042FA] = chr(0x1A); $content[0x1042FB] = chr(0x5B); $content[0x1042FC] = chr(0x00);
	$content[0x1043AF] = chr(0x22); $content[0x1043B0] = chr(0x1A); $content[0x1043B1] = chr(0x5B); $content[0x1043B2] = chr(0x00);
	$content[0x1044B5] = chr(0x22); $content[0x1044B6] = chr(0x1A); $content[0x1044B7] = chr(0x5B); $content[0x1044B8] = chr(0x00);
}
if(!empty($tibiapic))
{
	$patchaddr = 0x1B1A87;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x103D27] = chr(0x87); $content[0x103D28] = chr(0x1A); $content[0x103D29] = chr(0x5B); $content[0x103D2A] = chr(0x00);
	$content[0x103FD0] = chr(0x87); $content[0x103FD1] = chr(0x1A); $content[0x103FD2] = chr(0x5B); $content[0x103FD3] = chr(0x00);
	$content[0x104056] = chr(0x87); $content[0x104057] = chr(0x1A); $content[0x104058] = chr(0x5B); $content[0x104059] = chr(0x00);
	$content[0x104206] = chr(0x87); $content[0x104207] = chr(0x1A); $content[0x104208] = chr(0x5B); $content[0x104209] = chr(0x00);
	$content[0x10428B] = chr(0x87); $content[0x10428C] = chr(0x1A); $content[0x10428D] = chr(0x5B); $content[0x10428E] = chr(0x00);
	$content[0x104311] = chr(0x87); $content[0x104312] = chr(0x1A); $content[0x104313] = chr(0x5B); $content[0x104314] = chr(0x00);
	$content[0x1043D1] = chr(0x87); $content[0x1043D2] = chr(0x1A); $content[0x1043D3] = chr(0x5B); $content[0x1043D4] = chr(0x00);
	$content[0x1044D7] = chr(0x87); $content[0x1044D8] = chr(0x1A); $content[0x1044D9] = chr(0x5B); $content[0x1044DA] = chr(0x00);
}
if(!empty($rsakey))
{
	$patchaddr = 0x1B2610;
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
	$patchaddr = 0x1B2610;
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
	$content[0xF2630] = chr(0x55); $content[0xF2631] = chr(0x8B); $content[0xF2632] = chr(0xEC); $content[0xF2633] = chr(0x83);
	$content[0xF2634] = chr(0xEC); $content[0xF2635] = chr(0x08); $content[0xF2636] = chr(0xC7); $content[0xF2637] = chr(0x45);
	$content[0xF2638] = chr(0xFC); $content[0xF2639] = chr(0x28); $content[0xF263A] = chr(0xA7); $content[0xF263B] = chr(0x78);
	$content[0xF263C] = chr(0x00); $content[0xF263D] = chr(0xC7); $content[0xF263E] = chr(0x45); $content[0xF263F] = chr(0xF8);
	$content[0xF2640] = chr(0x00); $content[0xF2641] = chr(0x00); $content[0xF2642] = chr(0x00); $content[0xF2643] = chr(0x00);
	$content[0xF2644] = chr(0xEB); $content[0xF2645] = chr(0x09); $content[0xF2646] = chr(0x8B); $content[0xF2647] = chr(0x45);
	$content[0xF2648] = chr(0xF8); $content[0xF2649] = chr(0x83); $content[0xF264A] = chr(0xC0); $content[0xF264B] = chr(0x01);
	$content[0xF264C] = chr(0x89); $content[0xF264D] = chr(0x45); $content[0xF264E] = chr(0xF8); $content[0xF264F] = chr(0x83);
	$content[0xF2650] = chr(0x7D); $content[0xF2651] = chr(0xF8); $content[0xF2652] = chr(0x0A); $content[0xF2653] = chr(0x7D);
	$content[0xF2654] = chr(0x34); $content[0xF2655] = chr(0x68); $content[0xF2656] = chr(0xF8); $content[0xF2657] = chr(0x62);
	$content[0xF2658] = chr(0x5C); $content[0xF2659] = chr(0x00); $content[0xF265A] = chr(0x68); $content[0xF265B] = chr(0x8E);
	$content[0xF265C] = chr(0x4A); $content[0xF265D] = chr(0x5B); $content[0xF265E] = chr(0x00); $content[0xF265F] = chr(0x6A);
	$content[0xF2660] = chr(0x64); $content[0xF2661] = chr(0x8B); $content[0xF2662] = chr(0x4D); $content[0xF2663] = chr(0xFC);
	$content[0xF2664] = chr(0x51); $content[0xF2665] = chr(0xE8); $content[0xF2666] = chr(0x86); $content[0xF2667] = chr(0xEE);
	$content[0xF2668] = chr(0x05); $content[0xF2669] = chr(0x00); $content[0xF266A] = chr(0x83); $content[0xF266B] = chr(0xC4);
	$content[0xF266C] = chr(0x10); $content[0xF266D] = chr(0x8B); $content[0xF266E] = chr(0x55); $content[0xF266F] = chr(0xFC);
	$content[0xF2670] = chr(0xC7); $content[0xF2671] = chr(0x42); $content[0xF2672] = chr(0x64); $content[0xF2673] = chr(0x03);
	$content[0xF2674] = chr(0x1C); $content[0xF2675] = chr(0x00); $content[0xF2676] = chr(0x00); $content[0xF2677] = chr(0x8B);
	$content[0xF2678] = chr(0x45); $content[0xF2679] = chr(0xFC); $content[0xF267A] = chr(0xC6); $content[0xF267B] = chr(0x40);
	$content[0xF267C] = chr(0x68); $content[0xF267D] = chr(0x01); $content[0xF267E] = chr(0x8B); $content[0xF267F] = chr(0x4D);
	$content[0xF2680] = chr(0xFC); $content[0xF2681] = chr(0x83); $content[0xF2682] = chr(0xC1); $content[0xF2683] = chr(0x70);
	$content[0xF2684] = chr(0x89); $content[0xF2685] = chr(0x4D); $content[0xF2686] = chr(0xFC); $content[0xF2687] = chr(0xEB);
	$content[0xF2688] = chr(0xBD); $content[0xF2689] = chr(0xFF); $content[0xF268A] = chr(0x15); $content[0xF268B] = chr(0x98);
	$content[0xF268C] = chr(0x25); $content[0xF268D] = chr(0x5B); $content[0xF268E] = chr(0x00); $content[0xF268F] = chr(0x33);
	$content[0xF2690] = chr(0xD2); $content[0xF2691] = chr(0xB9); $content[0xF2692] = chr(0x0A); $content[0xF2693] = chr(0x00);
	$content[0xF2694] = chr(0x00); $content[0xF2695] = chr(0x00); $content[0xF2696] = chr(0xF7); $content[0xF2697] = chr(0xF1);
	$content[0xF2698] = chr(0x89); $content[0xF2699] = chr(0x15); $content[0xF269A] = chr(0x20); $content[0xF269B] = chr(0xA7);
	$content[0xF269C] = chr(0x78); $content[0xF269D] = chr(0x00); $content[0xF269E] = chr(0x8B); $content[0xF269F] = chr(0xE5);
	$content[0xF26A0] = chr(0x5D); $content[0xF26A1] = chr(0xC3); $content[0xF26A2] = chr(0xCC);

	$patchaddr = 0x1C62F8;
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
		$content[0xF2673] = $port[0]; $content[0xF2674] = $port[1];
	}
}
else if(isset($port) && $port > 0)
{
	$port = pack("v", $port);
	$content[0xF27AA] = $port[0]; $content[0xF27AB] = $port[1];
}
if(!empty($title))
{
	$patchaddr = 0x1C635D;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x103461] = chr(0x5D); $content[0x103462] = chr(0x63); $content[0x103463] = chr(0x5C); $content[0x103464] = chr(0x00);
	$content[0x107072] = chr(0x5D); $content[0x107073] = chr(0x63); $content[0x107074] = chr(0x5C); $content[0x107075] = chr(0x00);
}
if(!empty($createurl))
{
	$patchaddr = 0x1B278C;
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
	$patchaddr = 0x1B27C8;
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
	$patchaddr = 0x1B29A4;
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
	$patchaddr = 0x1BC1E8;
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
	$patchaddr = 0x1B2784;
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
	$patchaddr = 0x1B2778;
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
	$patchaddr = 0x1BD1C8;
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
	$content[0x1B1AEC] = chr(0x68); $content[0x1B1AED] = chr(0x28); $content[0x1B1AEE] = chr(0x1B); $content[0x1B1AEF] = chr(0x5B);
	$content[0x1B1AF0] = chr(0x00); $content[0x1B1AF1] = chr(0xFF); $content[0x1B1AF2] = chr(0x15); $content[0x1B1AF3] = chr(0x24);
	$content[0x1B1AF4] = chr(0x22); $content[0x1B1AF5] = chr(0x5B); $content[0x1B1AF6] = chr(0x00); $content[0x1B1AF7] = chr(0x85);
	$content[0x1B1AF8] = chr(0xC0); $content[0x1B1AF9] = chr(0x75); $content[0x1B1AFA] = chr(0x1C); $content[0x1B1AFB] = chr(0x6A);
	$content[0x1B1AFC] = chr(0x10); $content[0x1B1AFD] = chr(0x68); $content[0x1B1AFE] = chr(0x28); $content[0x1B1AFF] = chr(0x1B);
	$content[0x1B1B00] = chr(0x5B); $content[0x1B1B01] = chr(0x00); $content[0x1B1B02] = chr(0x68); $content[0x1B1B03] = chr(0x1C);
	$content[0x1B1B04] = chr(0x1B); $content[0x1B1B05] = chr(0x5B); $content[0x1B1B06] = chr(0x00); $content[0x1B1B07] = chr(0x6A);
	$content[0x1B1B08] = chr(0x00); $content[0x1B1B09] = chr(0xFF); $content[0x1B1B0A] = chr(0x15); $content[0x1B1B0B] = chr(0xDC);
	$content[0x1B1B0C] = chr(0x24); $content[0x1B1B0D] = chr(0x5B); $content[0x1B1B0E] = chr(0x00); $content[0x1B1B0F] = chr(0x6A);
	$content[0x1B1B10] = chr(0xFF); $content[0x1B1B11] = chr(0xFF); $content[0x1B1B12] = chr(0x15); $content[0x1B1B13] = chr(0x38);
	$content[0x1B1B14] = chr(0x21); $content[0x1B1B15] = chr(0x5B); $content[0x1B1B16] = chr(0x00); $content[0x1B1B17] = chr(0xE9);
	$content[0x1B1B18] = chr(0x0F); $content[0x1B1B19] = chr(0xB5); $content[0x1B1B1A] = chr(0xFA); $content[0x1B1B1B] = chr(0xFF);
	$content[0x148] = chr(0xEC); $content[0x149] = chr(0x1A); $content[0x14A] = chr(0x1B); $content[0x14B] = chr(0x00);

	$patchaddr = 0x1B1B1C;
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
	$content[0xE6119] = chr(0x90); $content[0xE611A] = chr(0x90); $content[0xE611C] = chr(0xFF);
}
if(isset($mchack))
{
	$content[0x1070B4] = chr(0xEB);
}
if(isset($xray))
{
	$content[0xED979] = chr(0x90); $content[0xED97A] = chr(0x90); $content[0xED983] = chr(0x90); $content[0xED984] = chr(0x90);
}
if(isset($extfiles))
{
	$content[0xFBD58] = chr(0x84); $content[0xFBD59] = chr(0x6C); $content[0xFBD5A] = chr(0x01); $content[0xFBD5B] = chr(0x00);
	$content[0xFBD34] = chr(0xE9); $content[0xFBD35] = chr(0xAB); $content[0xFBD36] = chr(0x5E); $content[0xFBD37] = chr(0x0B);
	$content[0xFBD38] = chr(0x00); $content[0xFBD39] = chr(0x90); $content[0xFBD3A] = chr(0x90); $content[0xFBD3B] = chr(0x90);
	$content[0xFBD3C] = chr(0x90); $content[0xFBD62] = chr(0x89); $content[0xFBD63] = chr(0x04); $content[0xFBD64] = chr(0x8A);
	$content[0xFBD65] = chr(0x90); $content[0x1B1BE4] = chr(0x3E); $content[0x1B1BE5] = chr(0x8D); $content[0x1B1BE6] = chr(0x04);
	$content[0x1B1BE7] = chr(0xBD); $content[0x1B1BE8] = chr(0x00); $content[0x1B1BE9] = chr(0x00); $content[0x1B1BEA] = chr(0x00);
	$content[0x1B1BEB] = chr(0x00); $content[0x1B1BEC] = chr(0x50); $content[0x1B1BED] = chr(0xE8); $content[0x1B1BEE] = chr(0xC5);
	$content[0x1B1BEF] = chr(0xA7); $content[0x1B1BF0] = chr(0xFB); $content[0x1B1BF1] = chr(0xFF); $content[0x1B1BF2] = chr(0xE9);
	$content[0x1B1BF3] = chr(0x46); $content[0x1B1BF4] = chr(0xA1); $content[0x1B1BF5] = chr(0xF4); $content[0x1B1BF6] = chr(0xFF);
	$content[0xFBBFC] = chr(0x8B); $content[0xFBBFD] = chr(0x44); $content[0xFBBFE] = chr(0x8A); $content[0xFBBFF] = chr(0xFC);
	$content[0xFBC00] = chr(0x90);
}
if(isset($exteffects))
{
	$content[0x10135] = chr(0xB7); $content[0x10136] = chr(0x4E); $content[0x10137] = chr(0x0E); $content[0x10138] = chr(0x00);
	$content[0x1013A] = chr(0xB7);
}
if(isset($extskills))
{
	$content[0x11C25] = chr(0xC7); $content[0x11C26] = chr(0x33); $content[0x11C27] = chr(0x0E); $content[0x11C28] = chr(0x00);
	$content[0x11C2A] = chr(0xB7);
}
if(isset($exthp))
{
	$content[0x119AC] = chr(0xE0); $content[0x119AD] = chr(0x37); $content[0x119AE] = chr(0x0E); $content[0x119AF] = chr(0x00);
	$content[0x119B0] = chr(0x8B); $content[0x119B1] = chr(0xF0); $content[0x119B2] = chr(0x90); $content[0x119B7] = chr(0xD5);
	$content[0x119B8] = chr(0x37); $content[0x119B9] = chr(0x0E); $content[0x119BA] = chr(0x00); $content[0x119BB] = chr(0x8B);
	$content[0x119BC] = chr(0xF8); $content[0x119BD] = chr(0x90);
}
if(isset($extmp))
{
	$content[0x119EA] = chr(0xA2); $content[0x119EB] = chr(0x37); $content[0x119EC] = chr(0x0E); $content[0x119ED] = chr(0x00);
	$content[0x119EE] = chr(0x8B); $content[0x119EF] = chr(0xD0); $content[0x119F0] = chr(0x90); $content[0x119F5] = chr(0x97);
	$content[0x119F6] = chr(0x37); $content[0x119F7] = chr(0x0E); $content[0x119F8] = chr(0x00); $content[0x119F9] = chr(0x90);
	$content[0x119FA] = chr(0x90); $content[0x119FB] = chr(0x90);
}