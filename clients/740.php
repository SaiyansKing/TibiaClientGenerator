<?php
$dllerror = "Cannot load ";
$sprfile = "Cannot open .spr file.";
$datfile = "Cannot open .dat file.";
$picfile = "Cannot open .pic file.";

$filename = "clients/740.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x7A4D8;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x8A8DC;
	$len = strlen($sprfile);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($sprfile, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x1BC8] = chr(0xD8); $content[0x1BC9] = chr(0xA4); $content[0x1BCA] = chr(0x47); $content[0x1BCB] = chr(0x00);
	$content[0x1CD8] = chr(0xD8); $content[0x1CD9] = chr(0xA4); $content[0x1CDA] = chr(0x47); $content[0x1CDB] = chr(0x00);
	$content[0x1E2B] = chr(0xD8); $content[0x1E2C] = chr(0xA4); $content[0x1E2D] = chr(0x47); $content[0x1E2E] = chr(0x00);
	$content[0x176FE] = chr(0xD8); $content[0x176FF] = chr(0xA4); $content[0x17700] = chr(0x47); $content[0x17701] = chr(0x00);
	$content[0x33126] = chr(0xD8); $content[0x33127] = chr(0xA4); $content[0x33128] = chr(0x47); $content[0x33129] = chr(0x00);
	$content[0x331C1] = chr(0xD8); $content[0x331C2] = chr(0xA4); $content[0x331C3] = chr(0x47); $content[0x331C4] = chr(0x00);
}
if(!empty($tibiadat))
{
	$patchaddr = 0x7A53D;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x8A8FC;
	$len = strlen($datfile);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($datfile, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x1BB1] = chr(0x3D); $content[0x1BB2] = chr(0xA5); $content[0x1BB3] = chr(0x47); $content[0x1BB4] = chr(0x00);
	$content[0x1CC1] = chr(0x3D); $content[0x1CC2] = chr(0xA5); $content[0x1CC3] = chr(0x47); $content[0x1CC4] = chr(0x00);
	$content[0x1E11] = chr(0x3D); $content[0x1E12] = chr(0xA5); $content[0x1E13] = chr(0x47); $content[0x1E14] = chr(0x00);
	$content[0x176EF] = chr(0x3D); $content[0x176F0] = chr(0xA5); $content[0x176F1] = chr(0x47); $content[0x176F2] = chr(0x00);
	$content[0x4B684] = chr(0x3D); $content[0x4B685] = chr(0xA5); $content[0x4B686] = chr(0x47); $content[0x4B687] = chr(0x00);
}
if(!empty($tibiapic))
{
	$patchaddr = 0x7A5A2;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$patchaddr = 0x8A8BC;
	$len = strlen($picfile);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($picfile, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x1BDF] = chr(0xA2); $content[0x1BE0] = chr(0xA5); $content[0x1BE1] = chr(0x47); $content[0x1BE2] = chr(0x00);
	$content[0x1CEF] = chr(0xA2); $content[0x1CF0] = chr(0xA5); $content[0x1CF1] = chr(0x47); $content[0x1CF2] = chr(0x00);
	$content[0x1E45] = chr(0xA2); $content[0x1E46] = chr(0xA5); $content[0x1E47] = chr(0x47); $content[0x1E48] = chr(0x00);
	$content[0x1770D] = chr(0xA2); $content[0x1770E] = chr(0xA5); $content[0x1770F] = chr(0x47); $content[0x17710] = chr(0x00);
	$content[0x3319E] = chr(0xA2); $content[0x3319F] = chr(0xA5); $content[0x331A0] = chr(0x47); $content[0x331A1] = chr(0x00);
	$content[0x331CB] = chr(0xA2); $content[0x331CC] = chr(0xA5); $content[0x331CD] = chr(0x47); $content[0x331CE] = chr(0x00);
}
if(!empty($ipaddress))
{
	// This is some patching to be able use 100 character hostnames
	$content[0x48820] = chr(0x55); $content[0x48821] = chr(0x8B); $content[0x48822] = chr(0xEC); $content[0x48823] = chr(0x83);
	$content[0x48824] = chr(0xEC); $content[0x48825] = chr(0x08); $content[0x48826] = chr(0xC7); $content[0x48827] = chr(0x45);
	$content[0x48828] = chr(0xFC); $content[0x48829] = chr(0x98); $content[0x4882A] = chr(0x88); $content[0x4882B] = chr(0x5E);
	$content[0x4882C] = chr(0x00); $content[0x4882D] = chr(0xC7); $content[0x4882E] = chr(0x45); $content[0x4882F] = chr(0xF8);
	$content[0x48830] = chr(0x00); $content[0x48831] = chr(0x00); $content[0x48832] = chr(0x00); $content[0x48833] = chr(0x00);
	$content[0x48834] = chr(0xEB); $content[0x48835] = chr(0x09); $content[0x48836] = chr(0x8B); $content[0x48837] = chr(0x45);
	$content[0x48838] = chr(0xF8); $content[0x48839] = chr(0x83); $content[0x4883A] = chr(0xC0); $content[0x4883B] = chr(0x01);
	$content[0x4883C] = chr(0x89); $content[0x4883D] = chr(0x45); $content[0x4883E] = chr(0xF8); $content[0x4883F] = chr(0x83);
	$content[0x48840] = chr(0x7D); $content[0x48841] = chr(0xF8); $content[0x48842] = chr(0x04); $content[0x48843] = chr(0x7D);
	$content[0x48844] = chr(0x34); $content[0x48845] = chr(0x68); $content[0x48846] = chr(0xA5); $content[0x48847] = chr(0x88);
	$content[0x48848] = chr(0x44); $content[0x48849] = chr(0x00); $content[0x4884A] = chr(0x68); $content[0x4884B] = chr(0xC0);
	$content[0x4884C] = chr(0xD3); $content[0x4884D] = chr(0x47); $content[0x4884E] = chr(0x00); $content[0x4884F] = chr(0x6A);
	$content[0x48850] = chr(0x64); $content[0x48851] = chr(0x8B); $content[0x48852] = chr(0x4D); $content[0x48853] = chr(0xFC);
	$content[0x48854] = chr(0x51); $content[0x48855] = chr(0xE8); $content[0x48856] = chr(0xA3); $content[0x48857] = chr(0x4F);
	$content[0x48858] = chr(0x01); $content[0x48859] = chr(0x00); $content[0x4885A] = chr(0x83); $content[0x4885B] = chr(0xC4);
	$content[0x4885C] = chr(0x10); $content[0x4885D] = chr(0x8B); $content[0x4885E] = chr(0x55); $content[0x4885F] = chr(0xFC);
	$content[0x48860] = chr(0xC7); $content[0x48861] = chr(0x42); $content[0x48862] = chr(0x64); $content[0x48863] = chr(0x03);
	$content[0x48864] = chr(0x1C); $content[0x48865] = chr(0x00); $content[0x48866] = chr(0x00); $content[0x48867] = chr(0x8B);
	$content[0x48868] = chr(0x45); $content[0x48869] = chr(0xFC); $content[0x4886A] = chr(0xC6); $content[0x4886B] = chr(0x40);
	$content[0x4886C] = chr(0x68); $content[0x4886D] = chr(0x01); $content[0x4886E] = chr(0x8B); $content[0x4886F] = chr(0x4D);
	$content[0x48870] = chr(0xFC); $content[0x48871] = chr(0x83); $content[0x48872] = chr(0xC1); $content[0x48873] = chr(0x70);
	$content[0x48874] = chr(0x89); $content[0x48875] = chr(0x4D); $content[0x48876] = chr(0xFC); $content[0x48877] = chr(0xEB);
	$content[0x48878] = chr(0xBD); $content[0x48879] = chr(0x33); $content[0x4887A] = chr(0xD2); $content[0x4887B] = chr(0x52);
	$content[0x4887C] = chr(0xE8); $content[0x4887D] = chr(0x5C); $content[0x4887E] = chr(0x49); $content[0x4887F] = chr(0x01);
	$content[0x48880] = chr(0x00); $content[0x48881] = chr(0x50); $content[0x48882] = chr(0xE8); $content[0x48883] = chr(0x6A);
	$content[0x48884] = chr(0x5C); $content[0x48885] = chr(0x01); $content[0x48886] = chr(0x00); $content[0x48887] = chr(0x83);
	$content[0x48888] = chr(0xC4); $content[0x48889] = chr(0x08); $content[0x4888A] = chr(0xE8); $content[0x4888B] = chr(0x6F);
	$content[0x4888C] = chr(0x5C); $content[0x4888D] = chr(0x01); $content[0x4888E] = chr(0x00); $content[0x4888F] = chr(0x25);
	$content[0x48890] = chr(0x03); $content[0x48891] = chr(0x00); $content[0x48892] = chr(0x00); $content[0x48893] = chr(0x80);
	$content[0x48894] = chr(0x79); $content[0x48895] = chr(0x05); $content[0x48896] = chr(0x48); $content[0x48897] = chr(0x83);
	$content[0x48898] = chr(0xC8); $content[0x48899] = chr(0xFC); $content[0x4889A] = chr(0x40); $content[0x4889B] = chr(0xA3);
	$content[0x4889C] = chr(0x90); $content[0x4889D] = chr(0x88); $content[0x4889E] = chr(0x5E); $content[0x4889F] = chr(0x00);
	$content[0x488A0] = chr(0x8B); $content[0x488A1] = chr(0xE5); $content[0x488A2] = chr(0x5D); $content[0x488A3] = chr(0xC3);
	$content[0x488A4] = chr(0xCC);

	$patchaddr = 0x488A5;
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
		$content[0x48863] = $port[0]; $content[0x48864] = $port[1];
	}
}
else if(isset($port) && $port > 0)
{
	$port = pack("v", $port);
	$content[0x4891E] = $port[0]; $content[0x4891F] = $port[1];
}
if(!empty($title))
{
	$content[0x4B818] = chr(0xEB); $content[0x4B815] = chr(0x04); $content[0x4B710] = chr(0xC2); $content[0x4B711] = chr(0x04);
	$content[0x4B712] = chr(0x00); $content[0x4B713] = chr(0xCC); $content[0x4B83B] = chr(0x50);

	$patchaddr = 0x4B714;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x4BA6A] = chr(0x6A); $content[0x4BA6B] = chr(0x00); $content[0x4BA6C] = chr(0x6A); $content[0x4BA6D] = chr(0x00);
	$content[0x4BA6E] = chr(0x6A); $content[0x4BA6F] = chr(0x00); $content[0x4BA70] = chr(0x6A); $content[0x4BA71] = chr(0x00);
	$content[0x4BA72] = chr(0x68); $content[0x4BA73] = chr(0xFC); $content[0x4BA74] = chr(0x73); $content[0x4BA75] = chr(0x49);
	$content[0x4BA76] = chr(0x00); $content[0x4BA77] = chr(0x68); $content[0x4BA78] = chr(0x00); $content[0x4BA79] = chr(0x00);
	$content[0x4BA7A] = chr(0xCF); $content[0x4BA7B] = chr(0x00); $content[0x4BA7C] = chr(0x68); $content[0x4BA7D] = chr(0x14);
	$content[0x4BA7E] = chr(0xB7); $content[0x4BA7F] = chr(0x44); $content[0x4BA80] = chr(0x00); $content[0x4BA81] = chr(0x90);
	$content[0x4BA82] = chr(0x90);
}
if(!empty($createurl))
{
	$patchaddr = 0x7B588;
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
	$patchaddr = 0x7B5B4;
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
	$patchaddr = 0x7B73C;
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
	$patchaddr = 0x81204;
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
	$patchaddr = 0x891B0;
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
	$patchaddr = 0x7BCD8;
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
	$content[0x7A607] = chr(0x68); $content[0x7A608] = chr(0x43); $content[0x7A609] = chr(0xA6); $content[0x7A60A] = chr(0x47);
	$content[0x7A60B] = chr(0x00); $content[0x7A60C] = chr(0xFF); $content[0x7A60D] = chr(0x15); $content[0x7A60E] = chr(0x9C);
	$content[0x7A60F] = chr(0xB2); $content[0x7A610] = chr(0x47); $content[0x7A611] = chr(0x00); $content[0x7A612] = chr(0x85);
	$content[0x7A613] = chr(0xC0); $content[0x7A614] = chr(0x75); $content[0x7A615] = chr(0x1C); $content[0x7A616] = chr(0x6A);
	$content[0x7A617] = chr(0x10); $content[0x7A618] = chr(0x68); $content[0x7A619] = chr(0x43); $content[0x7A61A] = chr(0xA6);
	$content[0x7A61B] = chr(0x47); $content[0x7A61C] = chr(0x00); $content[0x7A61D] = chr(0x68); $content[0x7A61E] = chr(0x37);
	$content[0x7A61F] = chr(0xA6); $content[0x7A620] = chr(0x47); $content[0x7A621] = chr(0x00); $content[0x7A622] = chr(0x6A);
	$content[0x7A623] = chr(0x00); $content[0x7A624] = chr(0xFF); $content[0x7A625] = chr(0x15); $content[0x7A626] = chr(0x84);
	$content[0x7A627] = chr(0xB4); $content[0x7A628] = chr(0x47); $content[0x7A629] = chr(0x00); $content[0x7A62A] = chr(0x6A);
	$content[0x7A62B] = chr(0xFF); $content[0x7A62C] = chr(0xFF); $content[0x7A62D] = chr(0x15); $content[0x7A62E] = chr(0x58);
	$content[0x7A62F] = chr(0xB1); $content[0x7A630] = chr(0x47); $content[0x7A631] = chr(0x00); $content[0x7A632] = chr(0xE9);
	$content[0x7A633] = chr(0x83); $content[0x7A634] = chr(0x4A); $content[0x7A635] = chr(0xFE); $content[0x7A636] = chr(0xFF);
	$content[0x140] = chr(0x07); $content[0x141] = chr(0xA6); $content[0x142] = chr(0x07); $content[0x143] = chr(0x00);

	$patchaddr = 0x7A637;
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
	$content[0x46A3D] = chr(0x90);
	$content[0x46A3E] = chr(0x90);
	$content[0x46A3F] = chr(0x90);
}
if(isset($mchack))
{
	$content[0x4BAB2] = chr(0x74);
}
if(isset($xray))
{
	//TODO: too lazy to search for now
}