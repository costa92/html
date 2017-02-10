<?php
/**
 * Created by PhpStorm.
 * User: costa92
 * Date: 2017/2/10
 * Time: 下午1:12
 */

include "../phpqrcode/phpqrcode.php";
$value = 'https://www.longqiuhong.com'; //二维码内容

$errorCorrectionLevel = 'L';//容错级别

$matrixPointSize = 6;//生成图片大小

//生成二维码图片
$name = "../img/alone.png";
if(function_exists($name)){
    unlink($name);
}
QRcode::png($value, $name, $errorCorrectionLevel, $matrixPointSize, 2);
$QR = '../qrcode/img/alone.png';//已经生成的原始二维码图
exit($QR);