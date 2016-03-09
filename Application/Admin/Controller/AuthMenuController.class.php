<?php
namespace Admin\Controller;

class AuthMenuController extends AdminController {
    public function lists($pid = 0) {
        $where['pid'] = $pid;
        $order = "sort ASC";
        $this->assign('pid', $pid);
        parent::lists($where, $order);
    }
}