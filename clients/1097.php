<?php
$dllerror = "Cannot load ";

$filename = "clients/1097.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x475D88;
	$len = strlen($tibiaspr);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiaspr, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	/*$content[0x108C13] = chr(0xBD); $content[0x108C14] = chr(0x7A); $content[0x108C15] = chr(0x5B); $content[0x108C16] = chr(0x00);
	$content[0x108ED4] = chr(0xBD); $content[0x108ED5] = chr(0x7A); $content[0x108ED6] = chr(0x5B); $content[0x108ED7] = chr(0x00);
	$content[0x108F5A] = chr(0xBD); $content[0x108F5B] = chr(0x7A); $content[0x108F5C] = chr(0x5B); $content[0x108F5D] = chr(0x00);
	$content[0x109105] = chr(0xBD); $content[0x109106] = chr(0x7A); $content[0x109107] = chr(0x5B); $content[0x109108] = chr(0x00);
	$content[0x10918F] = chr(0xBD); $content[0x109190] = chr(0x7A); $content[0x109191] = chr(0x5B); $content[0x109192] = chr(0x00);
	$content[0x109215] = chr(0xBD); $content[0x109216] = chr(0x7A); $content[0x109217] = chr(0x5B); $content[0x109218] = chr(0x00);
	$content[0x1092D0] = chr(0xBD); $content[0x1092D1] = chr(0x7A); $content[0x1092D2] = chr(0x5B); $content[0x1092D3] = chr(0x00);
	$content[0x1093D6] = chr(0xBD); $content[0x1093D7] = chr(0x7A); $content[0x1093D8] = chr(0x5B); $content[0x1093D9] = chr(0x00);*/
}
if(!empty($tibiadat))
{
	$patchaddr = 0x475DB0;
	$len = strlen($tibiadat);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiadat, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	/*$content[0x108BEF] = chr(0x22); $content[0x108BF0] = chr(0x7B); $content[0x108BF1] = chr(0x5B); $content[0x108BF2] = chr(0x00);
	$content[0x108EC8] = chr(0x22); $content[0x108EC9] = chr(0x7B); $content[0x108ECA] = chr(0x5B); $content[0x108ECB] = chr(0x00);
	$content[0x108F4E] = chr(0x22); $content[0x108F4F] = chr(0x7B); $content[0x108F50] = chr(0x5B); $content[0x108F51] = chr(0x00);
	$content[0x1090F4] = chr(0x22); $content[0x1090F5] = chr(0x7B); $content[0x1090F6] = chr(0x5B); $content[0x1090F7] = chr(0x00);
	$content[0x109183] = chr(0x22); $content[0x109184] = chr(0x7B); $content[0x109185] = chr(0x5B); $content[0x109186] = chr(0x00);
	$content[0x109209] = chr(0x22); $content[0x10920A] = chr(0x7B); $content[0x10920B] = chr(0x5B); $content[0x10920C] = chr(0x00);
	$content[0x1092BF] = chr(0x22); $content[0x1092C0] = chr(0x7B); $content[0x1092C1] = chr(0x5B); $content[0x1092C2] = chr(0x00);
	$content[0x1093C5] = chr(0x22); $content[0x1093C6] = chr(0x7B); $content[0x1093C7] = chr(0x5B); $content[0x1093C8] = chr(0x00);*/
}
if(!empty($tibiapic))
{
	$patchaddr = 0x475DBC;
	$len = strlen($tibiapic);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($tibiapic, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	/*$content[0x108C37] = chr(0x87); $content[0x108C38] = chr(0x7B); $content[0x108C39] = chr(0x5B); $content[0x108C3A] = chr(0x00);
	$content[0x108EE0] = chr(0x87); $content[0x108EE1] = chr(0x7B); $content[0x108EE2] = chr(0x5B); $content[0x108EE3] = chr(0x00);
	$content[0x108F66] = chr(0x87); $content[0x108F67] = chr(0x7B); $content[0x108F68] = chr(0x5B); $content[0x108F69] = chr(0x00);
	$content[0x109116] = chr(0x87); $content[0x109117] = chr(0x7B); $content[0x109118] = chr(0x5B); $content[0x109119] = chr(0x00);
	$content[0x10919B] = chr(0x87); $content[0x10919C] = chr(0x7B); $content[0x10919D] = chr(0x5B); $content[0x10919E] = chr(0x00);
	$content[0x109221] = chr(0x87); $content[0x109222] = chr(0x7B); $content[0x109223] = chr(0x5B); $content[0x109224] = chr(0x00);
	$content[0x1092E1] = chr(0x87); $content[0x1092E2] = chr(0x7B); $content[0x1092E3] = chr(0x5B); $content[0x1092E4] = chr(0x00);
	$content[0x1093E7] = chr(0x87); $content[0x1093E8] = chr(0x7B); $content[0x1093E9] = chr(0x5B); $content[0x1093EA] = chr(0x00);*/
}
if(!empty($rsakey))
{
	$patchaddr = 0x464E00;
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
	$patchaddr = 0x464E00;
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
	$content[0x4646A0] = chr(0x2C); $content[0x4646A1] = chr(0x4E); $content[0x4646A2] = chr(0x86); $content[0x4646A3] = chr(0x00);
	$content[0x4646A8] = chr(0x2C); $content[0x4646A9] = chr(0x4E); $content[0x4646AA] = chr(0x86); $content[0x4646AB] = chr(0x00);
	$content[0x4646B0] = chr(0x2C); $content[0x4646B1] = chr(0x4E); $content[0x4646B2] = chr(0x86); $content[0x4646B3] = chr(0x00);
	$content[0x4646B8] = chr(0x2C); $content[0x4646B9] = chr(0x4E); $content[0x4646BA] = chr(0x86); $content[0x4646BB] = chr(0x00);
	$content[0x4646C0] = chr(0x2C); $content[0x4646C1] = chr(0x4E); $content[0x4646C2] = chr(0x86); $content[0x4646C3] = chr(0x00);
	$content[0x4646C8] = chr(0x2C); $content[0x4646C9] = chr(0x4E); $content[0x4646CA] = chr(0x86); $content[0x4646CB] = chr(0x00);
	$content[0x4646D0] = chr(0x2C); $content[0x4646D1] = chr(0x4E); $content[0x4646D2] = chr(0x86); $content[0x4646D3] = chr(0x00);
	$content[0x4646D8] = chr(0x2C); $content[0x4646D9] = chr(0x4E); $content[0x4646DA] = chr(0x86); $content[0x4646DB] = chr(0x00);
	$content[0x4646E0] = chr(0x2C); $content[0x4646E1] = chr(0x4E); $content[0x4646E2] = chr(0x86); $content[0x4646E3] = chr(0x00);
	$content[0x4646E8] = chr(0x2C); $content[0x4646E9] = chr(0x4E); $content[0x4646EA] = chr(0x86); $content[0x4646EB] = chr(0x00);

	$patchaddr = 0x46422C;
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
	$content[0x4646A4] = $port[0]; $content[0x4646A5] = $port[1];
	$content[0x4646AC] = $port[0]; $content[0x4646AD] = $port[1];
	$content[0x4646B4] = $port[0]; $content[0x4646B5] = $port[1];
	$content[0x4646BC] = $port[0]; $content[0x4646BD] = $port[1];
	$content[0x4646C4] = $port[0]; $content[0x4646C5] = $port[1];
	$content[0x4646CC] = $port[0]; $content[0x4646CD] = $port[1];
	$content[0x4646D4] = $port[0]; $content[0x4646D5] = $port[1];
	$content[0x4646DC] = $port[0]; $content[0x4646DD] = $port[1];
	$content[0x4646E4] = $port[0]; $content[0x4646E5] = $port[1];
	$content[0x4646EC] = $port[0]; $content[0x4646ED] = $port[1];
}
if(!empty($title))
{
	$patchaddr = 0x464291;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x1ADE1B] = chr(0x91); $content[0x1ADE1C] = chr(0x4E); $content[0x1ADE1D] = chr(0x86); $content[0x1ADE1E] = chr(0x00);
	$content[0x1B06E5] = chr(0x91); $content[0x1B06E6] = chr(0x4E); $content[0x1B06E7] = chr(0x86); $content[0x1B06E8] = chr(0x00);
}
if(!empty($createurl))
{
	$patchaddr = 0x464590;
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
	$patchaddr = 0x46454C;
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
	$patchaddr = 0x4642D0;
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
	$patchaddr = 0x5525A8;
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
	$patchaddr = 0x5635BC;
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
	$patchaddr = 0x563574;
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
	$patchaddr = 0x564AC0;
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
	//TODO: too lazy to search for now
}
if(isset($xray))
{
	//TODO: too lazy to search for now
}