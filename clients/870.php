<?php
$dllerror = "Cannot load ";

$filename = "clients/870.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x1B7ABD;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x108C13] = chr(0xBD); $content[0x108C14] = chr(0x7A); $content[0x108C15] = chr(0x5B); $content[0x108C16] = chr(0x00);
	$content[0x108ED4] = chr(0xBD); $content[0x108ED5] = chr(0x7A); $content[0x108ED6] = chr(0x5B); $content[0x108ED7] = chr(0x00);
	$content[0x108F5A] = chr(0xBD); $content[0x108F5B] = chr(0x7A); $content[0x108F5C] = chr(0x5B); $content[0x108F5D] = chr(0x00);
	$content[0x109105] = chr(0xBD); $content[0x109106] = chr(0x7A); $content[0x109107] = chr(0x5B); $content[0x109108] = chr(0x00);
	$content[0x10918F] = chr(0xBD); $content[0x109190] = chr(0x7A); $content[0x109191] = chr(0x5B); $content[0x109192] = chr(0x00);
	$content[0x109215] = chr(0xBD); $content[0x109216] = chr(0x7A); $content[0x109217] = chr(0x5B); $content[0x109218] = chr(0x00);
	$content[0x1092D0] = chr(0xBD); $content[0x1092D1] = chr(0x7A); $content[0x1092D2] = chr(0x5B); $content[0x1092D3] = chr(0x00);
	$content[0x1093D6] = chr(0xBD); $content[0x1093D7] = chr(0x7A); $content[0x1093D8] = chr(0x5B); $content[0x1093D9] = chr(0x00);
}
if(!empty($tibiadat))
{
	$patchaddr = 0x1B7B22;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x108BEF] = chr(0x22); $content[0x108BF0] = chr(0x7B); $content[0x108BF1] = chr(0x5B); $content[0x108BF2] = chr(0x00);
	$content[0x108EC8] = chr(0x22); $content[0x108EC9] = chr(0x7B); $content[0x108ECA] = chr(0x5B); $content[0x108ECB] = chr(0x00);
	$content[0x108F4E] = chr(0x22); $content[0x108F4F] = chr(0x7B); $content[0x108F50] = chr(0x5B); $content[0x108F51] = chr(0x00);
	$content[0x1090F4] = chr(0x22); $content[0x1090F5] = chr(0x7B); $content[0x1090F6] = chr(0x5B); $content[0x1090F7] = chr(0x00);
	$content[0x109183] = chr(0x22); $content[0x109184] = chr(0x7B); $content[0x109185] = chr(0x5B); $content[0x109186] = chr(0x00);
	$content[0x109209] = chr(0x22); $content[0x10920A] = chr(0x7B); $content[0x10920B] = chr(0x5B); $content[0x10920C] = chr(0x00);
	$content[0x1092BF] = chr(0x22); $content[0x1092C0] = chr(0x7B); $content[0x1092C1] = chr(0x5B); $content[0x1092C2] = chr(0x00);
	$content[0x1093C5] = chr(0x22); $content[0x1093C6] = chr(0x7B); $content[0x1093C7] = chr(0x5B); $content[0x1093C8] = chr(0x00);
}
if(!empty($tibiapic))
{
	$patchaddr = 0x1B7B87;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x108C37] = chr(0x87); $content[0x108C38] = chr(0x7B); $content[0x108C39] = chr(0x5B); $content[0x108C3A] = chr(0x00);
	$content[0x108EE0] = chr(0x87); $content[0x108EE1] = chr(0x7B); $content[0x108EE2] = chr(0x5B); $content[0x108EE3] = chr(0x00);
	$content[0x108F66] = chr(0x87); $content[0x108F67] = chr(0x7B); $content[0x108F68] = chr(0x5B); $content[0x108F69] = chr(0x00);
	$content[0x109116] = chr(0x87); $content[0x109117] = chr(0x7B); $content[0x109118] = chr(0x5B); $content[0x109119] = chr(0x00);
	$content[0x10919B] = chr(0x87); $content[0x10919C] = chr(0x7B); $content[0x10919D] = chr(0x5B); $content[0x10919E] = chr(0x00);
	$content[0x109221] = chr(0x87); $content[0x109222] = chr(0x7B); $content[0x109223] = chr(0x5B); $content[0x109224] = chr(0x00);
	$content[0x1092E1] = chr(0x87); $content[0x1092E2] = chr(0x7B); $content[0x1092E3] = chr(0x5B); $content[0x1092E4] = chr(0x00);
	$content[0x1093E7] = chr(0x87); $content[0x1093E8] = chr(0x7B); $content[0x1093E9] = chr(0x5B); $content[0x1093EA] = chr(0x00);
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

	$content[0x108371] = chr(0x19); $content[0x108372] = chr(0x89); $content[0x108373] = chr(0x5B); $content[0x108374] = chr(0x00);
	$content[0x10BF62] = chr(0x19); $content[0x10BF63] = chr(0x89); $content[0x10BF64] = chr(0x5B); $content[0x10BF65] = chr(0x00);
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
	$patchaddr = 0x1C2A00;
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
	$patchaddr = 0x1B8ACC;
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
	$patchaddr = 0x1B8AC0;
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
	$patchaddr = 0x1C3A88;
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
	$content[0x1B7BEC] = chr(0x68); $content[0x1B7BED] = chr(0x28); $content[0x1B7BEE] = chr(0x7C); $content[0x1B7BEF] = chr(0x5B);
	$content[0x1B7BF0] = chr(0x00); $content[0x1B7BF1] = chr(0xFF); $content[0x1B7BF2] = chr(0x15); $content[0x1B7BF3] = chr(0xC8);
	$content[0x1B7BF4] = chr(0x82); $content[0x1B7BF5] = chr(0x5B); $content[0x1B7BF6] = chr(0x00); $content[0x1B7BF7] = chr(0x85);
	$content[0x1B7BF8] = chr(0xC0); $content[0x1B7BF9] = chr(0x75); $content[0x1B7BFA] = chr(0x1C); $content[0x1B7BFB] = chr(0x6A);
	$content[0x1B7BFC] = chr(0x10); $content[0x1B7BFD] = chr(0x68); $content[0x1B7BFE] = chr(0x28); $content[0x1B7BFF] = chr(0x7C);
	$content[0x1B7C00] = chr(0x5B); $content[0x1B7C01] = chr(0x00); $content[0x1B7C02] = chr(0x68); $content[0x1B7C03] = chr(0x1C);
	$content[0x1B7C04] = chr(0x7C); $content[0x1B7C05] = chr(0x5B); $content[0x1B7C06] = chr(0x00); $content[0x1B7C07] = chr(0x6A);
	$content[0x1B7C08] = chr(0x00); $content[0x1B7C09] = chr(0xFF); $content[0x1B7C0A] = chr(0x15); $content[0x1B7C0B] = chr(0xD0);
	$content[0x1B7C0C] = chr(0x84); $content[0x1B7C0D] = chr(0x5B); $content[0x1B7C0E] = chr(0x00); $content[0x1B7C0F] = chr(0x6A);
	$content[0x1B7C10] = chr(0xFF); $content[0x1B7C11] = chr(0xFF); $content[0x1B7C12] = chr(0x15); $content[0x1B7C13] = chr(0x48);
	$content[0x1B7C14] = chr(0x81); $content[0x1B7C15] = chr(0x5B); $content[0x1B7C16] = chr(0x00); $content[0x1B7C17] = chr(0xE9);
	$content[0x1B7C18] = chr(0xBC); $content[0x1B7C19] = chr(0xAE); $content[0x1B7C1A] = chr(0xFA); $content[0x1B7C1B] = chr(0xFF);
	$content[0x150] = chr(0xEC); $content[0x151] = chr(0x7B); $content[0x152] = chr(0x1B); $content[0x153] = chr(0x00);

	$patchaddr = 0x1B7C1C;
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
	//TODO: too lazy to search for now
}
if(isset($mchack))
{
	$content[0x10BFA4] = chr(0xEB);
}
if(isset($xray))
{
	$content[0xF2769] = chr(0x90); $content[0xF276A] = chr(0x90); $content[0xF2773] = chr(0x90); $content[0xF2774] = chr(0x90);
}