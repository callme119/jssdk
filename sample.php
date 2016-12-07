<?php
require_once "jssdk.php";
$url = urldecode($_GET['url']);
$jssdk = new JSSDK("wx53bf06122618f768", "c1c300ea63649dba1cedd8b400a2f377", $url);
$signPackage = $jssdk->GetSignPackage();
unset($signPackage['rawString']);
header('Content-type: application/json'); // 设置数据返回格式为json
echo json_encode($signPackage);

// 这是最后一行