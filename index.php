<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>模板</title>
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
        <h1>模板</h1>
    </div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="https://www.longqiuhong.com/" target="_blank">我的主页</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="https://blog.longqiuhong.com/" target="_blank">我的博客</a></li>
                        <li><a href="https://github.com/costa92/html/tree/master/php/" target="_blank">GitHub地址</a></li>
                        <li class="active"><a href="#">预览地址</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="row">
        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked" id="myNav">
                <li class="active"><a href="#section-1">第一部分</a></li>
                <li><a href="#section-2">第二部分</a></li>
                <li><a href="#section-3">第三部分</a></li>
                <li><a href="#section-4">第四部分</a></li>
                <li><a href="#section-5">第五部分</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <!-- section-1  -->
            <h2 id="section-1">第一部分</h2>

            <hr>
            <!-- section-2  -->
            <h2 id="section-2">第二部分</h2>

            <hr>
            <!-- section-3  -->
            <h2 id="section-3">第三部分</h2>

            <hr>

            <!-- section-4 -->
            <h2 id="section-5">第四部分</h2>

            <hr>
            <!-- section-5 -->
            <h2 id="section-5">第五部分</h2>

            <hr>
        </div>
    </div>
</div>
<script>

</script>
</body>
</html>

