<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>OneThink 管理平台</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="renderer" content="webkit">
        <link href="/Gener/Public/Common/css/bootstrap.min.css" rel="stylesheet">
        <link href="/Gener/Public/Common/css/flat-ui.css" rel="stylesheet">
        <link href="/Gener/Public/Admin/css/style.css" rel="stylesheet">
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
                <a class="btn btn-primary" href="*">新增</a>
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
                        <th>名称</th>
                        <th>URL</th>
                        <th>规则</th>
                        <th>排序</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>名称</th>
                    <th>URL</th>
                    <th>规则</th>
                    <th>排序</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- Panel footer -->
        <div class="panel-footer">

        </div>
    </div>

        </div>
        <script src="/Gener/Public/Common/js/jquery.min.js"></script>
        <script src="/Gener/Public/Common/js/bootstrap.min.js"></script>
        <script src="/Gener/Public/Admin/js/admin.js"></script>
    </body>
</html>