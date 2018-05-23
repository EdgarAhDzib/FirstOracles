<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
function getXmlData($url)
{
   $ch = curl_init();
   curl_setopt ($ch, CURLOPT_URL, $url);
   curl_setopt ($ch, CURLOPT_HEADER, 0);
   ob_start();
   curl_exec ($ch);
   curl_close ($ch);
   $string = ob_get_contents();
   ob_end_clean();
   return $string; 
}
$key = getXmlData("https://URL/DIR/FILE.php?id=ID&acct=ACCOUNT");
echo $key;
?>

</body>
</html>