<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>OneThink 管理平台</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="renderer" content="webkit">
        <link href="/Gener/Public/Common/css/bootstrap.min.css" rel="stylesheet">
        <link href="/Gener/Public/Common/css/flat-ui.css" rel="stylesheet">
        <style>
            table{font-size:12px;}
        </style>
    </head>
    <body>
        <div style="padding:10px;">
            
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            <span class="fui-list"></span> <?php if(empty($data["id"])): ?>新增幻灯片<?php else: ?>编辑幻灯片<?php endif; ?>
        </div>
        <form action="/Gener/admin.php?s=/User/add.html" method="post" class="panel-body auto-put-form" role="form" data-back-url="<?php echo U('lists');?>">
            <div class="hide">
                <input type="hidden" name="id" value="<?php echo ((isset($data["id"]) && ($data["id"] !== ""))?($data["id"]):''); ?>">
                <input type="hidden" name="pic" value="<?php echo ((isset($data["pic"]) && ($data["pic"] !== ""))?($data["pic"]):''); ?>" class="form-control" id="label-title" >
            </div>
            <div class="form-group row">
                <div class="col-sm-6 col-lg-4">
                    <label for="label-title">幻灯片标题</label>
                    <input type="text" name="title" value="<?php echo ((isset($data["title"]) && ($data["title"] !== ""))?($data["title"]):''); ?>" class="form-control" id="label-title" placeholder="请输入幻灯片名称">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 col-lg-4">
                    <label for="label-title">资讯ID</label>
                    <input type="text" name="nid" value="<?php echo ((isset($data["nid"]) && ($data["nid"] !== ""))?($data["nid"]):''); ?>" class="form-control" id="label-title" placeholder="请输入文章ID">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-6 col-lg-4">
                    <button type="submit" class="btn btn-primary btn-block">保存</button>
                </div>
            </div>
        </form>
    </div>

        </div>
    </body>
</html>