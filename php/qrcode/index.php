<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP生成二维码</title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Custom Styles */
        ul.nav-tabs{
            width: 140px;
            margin-top: 20px;
            border-radius: 4px;
            border: 1px solid #ddd;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
        }
        ul.nav-tabs li{
            margin: 0;
            border-top: 1px solid #ddd;
        }
        ul.nav-tabs li:first-child{
            border-top: none;
        }
        ul.nav-tabs li a{
            margin: 0;
            padding: 8px 16px;
            border-radius: 0;
        }
        ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
            color: #fff;
            background: #0088cc;
            border: 1px solid #0088cc;
        }
        ul.nav-tabs li:first-child a{
            border-radius: 4px 4px 0 0;
        }
        ul.nav-tabs li:last-child a{
            border-radius: 0 0 4px 4px;
        }
        ul.nav-tabs.affix{
            top: 30px; /* Set the top position of pinned element */
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#myNav").affix({
                offset: {
                    top: 145
                }
            });
        });
    </script>
</head>
<body data-spy="scroll" data-target="#myScrollspy">

<div class="container">
    <div class="jumbotron">
        <h1>PHP生成二维码</h1>
    </div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="https://www.longqiuhong.com/" target="_blank">我的主页</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="https://blog.longqiuhong.com/" target="_blank">我的博客</a></li>
                        <li><a href="https://github.com/costa92/html/tree/master/php/qrcode" target="_blank">GitHub地址</a></li>
                        <li class="active"><a href="https://word.longqiuhong.com/php/qrcode/">预览地址</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="row">
        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked" id="myNav">
                <li class="active"><a href="#section-1">单独生成二维码</a></li>
                <li><a href="#section-2">生成当前二维码</a></li>
                <li><a href="#section-3">生成表单二维码</a></li>
                <li><a href="#section-4">第四部分</a></li>
                <li><a href="#section-5">第五部分</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <!-- section-1  -->
            <h2 id="section-1">单独生成二维码</h2>
                <p>利用phpqrcode插件生成二维码</p>
                <img  id="alone_code" src=""/>
                <h4>生成代码:</h4>
                <p>
                    <pre class="hljs elixir">
                        <code class="elixir">
include "../phpqrcode/phpqrcode.php";   //引用phpqrcode插件
$value = 'https://www.longqiuhong.com';  //二维码内容
$errorCorrectionLevel = 'L'; //容错级别
$matrixPointSize = 6; //生成图片大小
//生成二维码图片
$QR = '../qrcode/img/alone.png';// 定义生成图片的名称
 if(function_exists($name)){
        unlink($name);
 }
QRcode::png($value, $QR, $errorCorrectionLevel, $matrixPointSize, 2);
exit($QR);
                        </code>
                    </pre>
                </pre>
             <p>利用ajax请求加载显示二维码</p>
            <hr>
            <!-- section-2  -->
            <h2 id="section-2">生成当前网页二维码</h2>
            <p>利用phpqrcode生成当前页面二维码</p>
            <p>当前url地址是<span id="url"></span></p>
            <img  id="localhost_code" src=""/>
            <img  id="alone_code" src=""/>
            <h4>生成代码:</h4>
            <p>
            <pre class="hljs elixir">
                        <code class="elixir">
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
                        </code>
                    </pre>
            </pre>
            <hr>
            <!-- section-3  -->
            <h2 id="section-3">生成表单二维码</h2>
            <p>利用phpqrcode生成当前页面二维码</p>
            <div class="form-inline">
                <div class="form-group">
                    <label for="name">生成二维码地址</label>
                    <input type="text" class="form-control cm" id="name"
                           placeholder="请输入生成二维码地址">
                </div>
                <button type="submit" class="btn btn-default" id="submit3">提交</button>
             </div>
            <p><img id="from_code" src="" style="display: none"></p>
            <h4>生成代码:</h4>
            <p>
            <pre class="hljs elixir">
                        <code class="elixir">
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
                        </code>
                    </pre>
            </pre>
            <hr>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        alone();
        localhost ();
        /**加载单独二维码*/
      function alone () {
            $.ajax({
                url:"examples/alone.php",
                success:function (data) {
                    $("#alone_code").attr('src',data);
                }
            });
        }
        /**加载单独二维码*/
        function localhost () {
            var l_url = window.location.href;
            $.ajax({
                url:"examples/localhost.php",
                dataType:'JSON',
                data:{url:encodeURIComponent(l_url)},
                success:function (data) {
                    $("#localhost_code").attr('src',data.img);
                    $("#url").html(data.url);
                }
            });
        }

        /**表单生成二维码*/
        $('#submit3').on('click',function () {
             var url = $('#name').val();
            $.ajax({
                url:"examples/from.php",
                dataType:'JSON',
                type:"POST",
                data:{url:encodeURIComponent(url)},
                success:function (data) {
                    $('#from_code').attr('src',data.img);
                    $('#from_code').css('display','block');
                }
            });
        });

    });
</script>
</body>
</html>

