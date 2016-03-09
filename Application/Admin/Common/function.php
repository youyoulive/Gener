<?php
function getMenuList($pid = 0){
    $AuthMenu = D('AuthMenu');
    $map['status'] = array('eq', 1);
    $map['pid'] = array('eq', $pid);
    $order = "sort ASC";
    $data = $AuthMenu->where($map)->order($order)->select();
    return $data;
}