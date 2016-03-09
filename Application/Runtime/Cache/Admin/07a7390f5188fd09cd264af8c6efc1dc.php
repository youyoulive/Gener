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
        <div class="panel-heading"><span class="fui-list"></span> 幻灯片列表</div>
        <div class="panel-body">
            <div class="btn-group">
                <a class="btn btn-primary" href="<?php echo U('add');?>">新增</a>
                <button type="button" class="btn btn-primary">启用</button>
                <button type="button" class="btn btn-primary">禁用</button>
                <button type="button" class="btn btn-primary">删除</button>
            </div>
        </div>
        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>标题</th>
                        <th>资讯ID</th>
                        <th>图片</th>
                        <th>位置</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ID</td>
                    <td>标题</td>
                    <td>资讯ID</td>
                    <td>图片</th>
                    <td>位置</td>
                    <td>状态</td>
                    <td>操作</td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- Panel footer -->
        <div class="panel-footer">

        </div>
    </div>

        </div>
    </body>
</html>