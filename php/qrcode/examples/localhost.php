<?php
/**
 * Created by PhpStorm.
 * User: costa92
 * Date: 2017/2/10
 * Time: 下午2:33
 */

include "../phpqrcode/phpqrcode.php";
//$http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://'; //判断是https还http协议
//
//$value = $http_type . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; //二维码内容
$value= urldecode(isset($_GET['url'])?$_GET['url']:"");
$errorCorrectionLevel = 'L';//容错级别
$matrixPointSize = 6;//生成图片大小
//生成二维码图片
$name = "../img/localhost.png";
if(function_exists($name)){
    unlink($name);
}
QRcode::png($value, $name, $errorCorrectionLevel, $matrixPointSize, 2);
$QR = '../qrcode/img/localhost.png';//已经生成的原始二维码图
exit(json_encode(array('img'=>$QR,'url'=>$value)));