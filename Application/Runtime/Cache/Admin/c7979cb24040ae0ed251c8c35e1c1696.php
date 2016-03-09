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
        <div class="panel-heading">
            <span class="fui-list"></span> <?php if(empty($data["id"])): ?>新增菜单<?php else: ?>编辑菜单<?php endif; ?>
        </div>
        <form action="/Gener/admin.php?m=Admin&amp;c=AuthMenu&amp;a=add" method="post" class="panel-body auto-put-form" role="form" data-back-url="<?php echo U('lists');?>">
            <div class="hide">
                <input type="hidden" name="id" value="<?php echo ((isset($data["id"]) && ($data["id"] !== ""))?($data["id"]):''); ?>">
            </div>
            <div class="form-group row">
                <div class="col-sm-6 col-lg-4">
                    <label>上级菜单</label>
                    <select class="form-control" name="pid">
                        <option value="0">一级菜单</option>
                        <?php $_result=getMenuList(0);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if(($vol['id']) == $data["pid"]): ?><option value="<?php echo ($vol['id']); ?>" selected="selected"><?php echo ($vol['title']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo ($vol['id']); ?>"><?php echo ($vol['title']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 col-lg-4">
                    <label>菜单标题</label>
                    <input type="text" name="title" value="<?php echo ((isset($data["title"]) && ($data["title"] !== ""))?($data["title"]):''); ?>" class="form-control" placeholder="请输入菜单标题">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 col-lg-4">
                    <label>URL</label>
                    <input type="text" name="url" value="<?php echo ((isset($data["url"]) && ($data["url"] !== ""))?($data["url"]):''); ?>" class="form-control" placeholder="请输入URL">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 col-lg-4">
                    <label>规则</label>
                    <input type="text" name="rule" value="<?php echo ((isset($data["rule"]) && ($data["rule"] !== ""))?($data["rule"]):''); ?>" class="form-control" placeholder="请输入规则">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 col-lg-4">
                    <label>排序</label>
                    <input type="text" name="sort" value="<?php echo ((isset($data["sort"]) && ($data["sort"] !== ""))?($data["sort"]):''); ?>" class="form-control" placeholder="请输入排序">
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
        <script src="/Gener/Public/Common/js/jquery.min.js"></script>
        <script src="/Gener/Public/Common/js/bootstrap.min.js"></script>
        <script src="/Gener/Public/Admin/js/admin.js"></script>
    </body>
</html>