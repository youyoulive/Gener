<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>管理后台登录</title>
    <link href="/Gener/Public/Common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Gener/Public/Common/css/flat-ui.css" rel="stylesheet">
    <link href="/Gener/Public/Admin/css/admin.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="logo"><span class="fui-cmd"></span>&nbsp;&nbsp;&nbsp;后台管理系统</div>
    <div class="nav nav_left">
        <ul>
            <?php $_result=getMenuList(0);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li><a target="main" href="<?php echo U($vol['url']);?>" class="white"><?php echo ($vol['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>
    <div class="nav nav_right">
        <ul>
            <li><a href="#" class="white"><span class="fui-home"></span><br />站点首页</a></li>
            <li><a href="#" class="white"><span class="fui-gear"></span><br />账号设置</a></li>
            <li><a href="#" class="white"><span class="fui-power"></span><br />安全退出</a></li>
        </ul>
    </div>
</header>
<nav>
    <ul>
        <!--<li><a target="main" href="<?php echo U('User/lists');?>" style="color:#222;">用户管理</a></li>
        <li><a target="main" href="<?php echo U('User/add');?>" style="color:#222;">分组管理</a></li>
        <li><a target="main" href="<?php echo U('AuthMenu/lists');?>" style="color:#222;">菜单管理</a></li>-->
    </ul>
</nav>
<section>
    <iframe id="main-iframe" src="about:black" frameborder="0" width="100%" height="100%" name="main"></iframe>
</section>
</body>
</html>