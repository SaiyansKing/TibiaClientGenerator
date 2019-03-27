<?php
$dllerror = "Cannot load ";

$filename = "clients/1098.exe";
$handle = fopen($filename, "r");
$contentSize = filesize($filename);
$content = fread($handle, $contentSize);
fclose($handle);
if(!empty($tibiaspr))
{
	$patchaddr = 0x47B010;
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
	$patchaddr = 0x47B050;
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
	$patchaddr = 0x47B05C;
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
	$patchaddr = 0x46A0A0;
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
	$patchaddr = 0x46A0A0;
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
	$content[0x469940] = chr(0xCC); $content[0x469941] = chr(0xAE); $content[0x469942] = chr(0x86); $content[0x469943] = chr(0x00);
	$content[0x469948] = chr(0xCC); $content[0x469949] = chr(0xAE); $content[0x46994A] = chr(0x86); $content[0x46994B] = chr(0x00);
	$content[0x469950] = chr(0xCC); $content[0x469951] = chr(0xAE); $content[0x469952] = chr(0x86); $content[0x469953] = chr(0x00);
	$content[0x469958] = chr(0xCC); $content[0x469959] = chr(0xAE); $content[0x46995A] = chr(0x86); $content[0x46995B] = chr(0x00);
	$content[0x469960] = chr(0xCC); $content[0x469961] = chr(0xAE); $content[0x469962] = chr(0x86); $content[0x469963] = chr(0x00);
	$content[0x469968] = chr(0xCC); $content[0x469969] = chr(0xAE); $content[0x46996A] = chr(0x86); $content[0x46996B] = chr(0x00);
	$content[0x469970] = chr(0xCC); $content[0x469971] = chr(0xAE); $content[0x469972] = chr(0x86); $content[0x469973] = chr(0x00);
	$content[0x469978] = chr(0xCC); $content[0x469979] = chr(0xAE); $content[0x46997A] = chr(0x86); $content[0x46997B] = chr(0x00);
	$content[0x469980] = chr(0xCC); $content[0x469981] = chr(0xAE); $content[0x469982] = chr(0x86); $content[0x469983] = chr(0x00);
	$content[0x469988] = chr(0xCC); $content[0x469989] = chr(0xAE); $content[0x46998A] = chr(0x86); $content[0x46998B] = chr(0x00);

	$patchaddr = 0x4694CC;
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
	$content[0x469944] = $port[0]; $content[0x469945] = $port[1];
	$content[0x46994C] = $port[0]; $content[0x46994D] = $port[1];
	$content[0x469954] = $port[0]; $content[0x469955] = $port[1];
	$content[0x46995C] = $port[0]; $content[0x46995D] = $port[1];
	$content[0x469964] = $port[0]; $content[0x469965] = $port[1];
	$content[0x46996C] = $port[0]; $content[0x46996D] = $port[1];
	$content[0x469974] = $port[0]; $content[0x469975] = $port[1];
	$content[0x46997C] = $port[0]; $content[0x46997D] = $port[1];
	$content[0x469984] = $port[0]; $content[0x469985] = $port[1];
	$content[0x46998C] = $port[0]; $content[0x46998D] = $port[1];
}
if(!empty($title))
{
	$patchaddr = 0x469531;
	$len = strlen($title);
	for($pos = 0; $pos < $len; $pos++)
	{
		$content[$patchaddr] = chr(ord(substr($title, $pos)));
		$patchaddr++;
	}
	$content[$patchaddr] = chr(0x00);

	$content[0x1AE5BB] = chr(0x31); $content[0x1AE5BC] = chr(0xAF); $content[0x1AE5BD] = chr(0x86); $content[0x1AE5BE] = chr(0x00);
	$content[0x1B0E65] = chr(0x31); $content[0x1B0E66] = chr(0xAF); $content[0x1B0E67] = chr(0x86); $content[0x1B0E68] = chr(0x00);
}
if(!empty($createurl))
{
	$patchaddr = 0x469830;
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
	$patchaddr = 0x4697EC;
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
	$patchaddr = 0x469570;
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
	$patchaddr = 0x55996C;
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
	$patchaddr = 0x56B034;
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
	$patchaddr = 0x56B040;
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
	$patchaddr = 0x56AA98;
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