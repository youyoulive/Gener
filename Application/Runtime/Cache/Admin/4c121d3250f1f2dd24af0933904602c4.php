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
        <div class="panel-heading"><span class="fui-list"></span> 菜单列表</div>
        <div class="panel-body">
            <div class="btn-group">
                <a class="btn btn-primary" href="<?php echo U('add');?>">新增</a>
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
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vol['id']); ?></td>
                    <td><?php echo ($vol['title']); ?></td>
                    <td><?php echo ($vol['url']); ?></td>
                    <td><?php echo ($vol['rule']); ?></td>
                    <td><?php echo ($vol['sort']); ?></td>
                    <td>
                        <?php if(($vol['status']) == "1"): ?><a title="禁用" data-toggle="tooltip" data-placement="top" href="<?php echo U('status?status=0&id='.$vol['id']);?>" class="mag-r-5 ajax">
                                <span class="fui-check color-green fs-14"></span>
                            </a>
                            <?php else: ?>
                            <a title="启用" data-toggle="tooltip" data-placement="top" href="<?php echo U('status?status=1&id='.$vol['id']);?>" class="mag-r-5 ajax">
                                <span class="fui-cross color-red fs-14"></span>
                            </a><?php endif; ?>
                    </td>
                    <td>
                        <a title="子菜单" data-toggle="tooltip" data-placement="top" href="<?php echo U('lists?pid=' . $vol['id']);?>" class="mag-r-5">
                            <span class="fui-list-numbered color-black fs-14"></span>
                        </a>
                        <a title="编辑" data-toggle="tooltip" data-placement="top" href="<?php echo U('edit?id=' . $vol['id']);?>" class="mag-r-5">
                            <span class="fui-new color-green fs-14"></span>
                        </a>
                        <a title="删除" data-toggle="tooltip" data-placement="top" href="<?php echo U('delete?id=' . $vol['id']);?>" class="ajax mag-r-5 operation-delete">
                            <span class="fui-trash color-red fs-14"></span>
                        </a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
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