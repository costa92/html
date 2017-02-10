<?php
/**
 * Created by PhpStorm.
 * User: costa92
 * Date: 2017/2/10
 * Time: 下午3:40
 */

include "../phpqrcode/phpqrcode.php";

if(!empty($_POST['url'])){
     $value = urldecode($_POST['url']); //二维码内容
    $errorCorrectionLevel = 'L';//容错级别
    $matrixPointSize = 6;//生成图片大小
//生成二维码图片
    $name = "../img/from.png";
    if(function_exists($name)){
        unlink($name);
    }
    QRcode::png($value, $name, $errorCorrectionLevel, $matrixPointSize, 2);
    $QR = '../qrcode/img/from.png';//已经生成的原始二维码图
    exit(json_encode(array('img'=>$QR)));
}
return false;
