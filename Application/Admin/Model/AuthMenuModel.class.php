<?php
/**
 * 后台用户模型
 */

namespace Admin\Model;

use Think\Model;

class AuthMenuModel extends Model {

    protected $_auto = array(
        array('create_time', 'time', 1, 'function'), // 对create_time字段在新增的时候写入当前时间戳
        array('update_time', 'time', 2, 'function'), // 对update_time字段在更新的时候写入当前时间戳
        array('status', 1, 3), // 新增或更新的时候把status字段设置为1
    );
}
