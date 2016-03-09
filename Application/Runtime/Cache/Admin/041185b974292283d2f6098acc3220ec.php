<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>管理后台登录</title>
    <link href="/Gener/Public/Common/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Gener/Public/Common/css/flat-ui.css" rel="stylesheet">
    <link href="/Gener/Public/Admin/css/login.css" rel="stylesheet">
</head>
<body>
<div class="login col-lg-4 col-lg-offset-4">
    <div class="login_ui">
        <h4>管理系统登录</h4>
    </div>
    <div class="login-screen">
        <div class="login-form">
            <div class="form-group">
                <input type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name">
                <label class="login-field-icon fui-user" for="login-name"></label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass">
                <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>
            <a class="btn btn-primary btn-lg btn-block" href="#">Log in</a>
            <a class="login-link" href="#">Lost your password?</a>
        </div>
    </div>
</div>
</body>
</html>