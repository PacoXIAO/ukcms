<?php /*a:2:{s:59:"D:\download\ukcms\application\install\view\index\step3.html";i:1553153629;s:54:"D:\download\ukcms\application\install\view\layout.html";i:1553153629;}*/ ?>
<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UKcms安装向导</title>

        <!-- Set render engine for 360 browser -->
        <meta name="renderer" content="webkit">
        <link rel="stylesheet" href="/public/static/amazeui/css/amazeui.min.css">
        <style>
            body{padding-bottom:20px}
            p{ text-indent: 30px; margin:5px 0}
            .top{text-align:center;height:60px; border-bottom:1px solid #e1e0e0; background-color:#199adc; margin-bottom:20px}
            .top h2{ color:#fff;line-height:60px; font-weight:500}
            .am-list-border li{color:#666}
            .am-list-border .active{background-color:#128ac7; color:#fff}

            .am-form-label{font-size: 16px; font-weight: 500; padding:0; text-align: right}
            .success{color:green}
            .error{color:red}
        </style>
    </head>
    <body>
        <div class="top"><h2>UKcms安装向导</h2></div>

        <div class="am-container">
            <div class="am-g">
                <div class="am-u-md-3 am-hide-sm-only">
                    <ul class="am-list am-list-static am-list-border">
                        
<li class="am-btn"><i class="am-icon-file-o am-icon-fw"></i> 使用协议</li>
<li class="am-btn"><i class="am-icon-circle-o-notch am-icon-fw"></i>  环境检测</li>
<li class="am-btn"><i class="am-icon-database am-icon-fw"></i> 创建数据库</li>
<li class="am-btn active"><i class="am-icon-check am-icon-fw"></i> 安装完成</li>

                    </ul>
                </div>
                <div class="am-u-md-9 am-u-sm-12">
                    

<ul id="show-list" class="am-list am-list-static am-list-border am-list-striped">
</ul>
<script type="text/javascript">
    var list = document.getElementById('show-list');
    function showmsg(msg, classname) {
        var li = document.createElement('li');
        li.innerHTML = msg;
        classname && li.setAttribute('class', classname);
        list.appendChild(li);
        document.body.scrollTop += 50;
    }
</script>
<button class="am-btn am-btn-success" id="working">
    <i class="am-icon-spinner am-icon-spin"></i>
    安装中
</button>

                </div>
            </div>
        </div>

    </body>
</html>