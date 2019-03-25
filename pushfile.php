<?php
header('Content-Description: File Transfer');
header('Content-Type: application/exe');
header('Content-Disposition: attachment; filename=Tibia.exe');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . $contentSize);

ob_clean();
flush();
print $content;