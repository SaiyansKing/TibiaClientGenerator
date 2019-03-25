<?php
function unfucked_base_convert($numstring, $frombase, $tobase)
{
    $chars = "0123456789abcdefghijklmnopqrstuvwxyz";
    $tostring = substr($chars, 0, $tobase);
    $length = strlen($numstring);
    $result = '';
    for ($i = 0; $i < $length; $i++)
    {
        $number[$i] = strpos($chars, $numstring{$i});
    }
    do
    {
        $divide = 0;
        $newlen = 0;
        for ($i = 0; $i < $length; $i++)
        {
            $divide = $divide * $frombase + $number[$i];
            if ($divide >= $tobase)
            {
                $number[$newlen++] = (int)($divide / $tobase);
                $divide = $divide % $tobase;
            } elseif ($newlen > 0)
            {
                $number[$newlen++] = 0;
            }
        }
        $length = $newlen;
        $result = $tostring{$divide} . $result;
    } while ($newlen != 0);
    return $result;
}

$config = array(
    "config" => dirname(__FILE__) . '/openssl.cnf',
    "private_key_bits" => 1024,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

$key = openssl_pkey_new($config);
openssl_pkey_export($key, $privatekey, null, $config);
$details = openssl_pkey_get_details($key);
openssl_pkey_free($key);

while(openssl_error_string() !== false) {}

$hex = array_map(bin2hex, $details['rsa']);

echo 'Client RSA Key:<br><textarea rows="10" cols="50">'.unfucked_base_convert($hex['n'], 16, 10).'</textarea><br>
Old Server RSA Key:<br><textarea rows="15" cols="50">const char* p("'.unfucked_base_convert($hex['p'], 16, 10).'");
const char* q("'.unfucked_base_convert($hex['q'], 16, 10).'");
const char* d("'.unfucked_base_convert($hex['d'], 16, 10).'");</textarea><br>
New Server RSA Key.pem<br><textarea rows="15" cols="50">'.$privatekey.'</textarea>';
