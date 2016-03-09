<?php
namespace Admin\Controller;

use Think\Controller;

class AdminController extends Controller {
    protected $model = null; //当前管理model
    protected $upload = array(); //当前上传类型

    /**
     * 初始化
     * 该方法主要进行权限认证
     */
    protected function _initialize() {
        /*//检测是否登录
        define('AUTH_UID', is_login());
        AUTH_UID || refresh();

        //检测权限
        if(!auth_access(AUTH_UID, CONTROLLER_NAME . '/' . ACTION_NAME)){
            $this->error('没有操作权限，请联系管理员！');
        }

        //加载配置
        load_system_config();*/

        //获取当前管理模型
        $model = I('get.model');
        $this->model = $model ?: (empty($this->model) ? CONTROLLER_NAME : $this->model);
    }

    public function lists($map = array(), $sort = 'update_time DESC') {
        $model = D($this->model);
        $map['status'] = array('egt', 0);
        $list = $model->where($map)->order($sort)->select();

        //模板赋值
        $this->assign('list', $list);
        /*$this->assign('page', $page);*/

        //输出模板
        $templ = method_exists($model, 'view') ? $model->view('lists') : '';
        $this->display($templ);
    }

    public function add() {
        $model = D($this->model);
        if (IS_AJAX && IS_POST) {
            $data = $model->create();
            if ($data && $model->add()) {
                $this->success('新增成功');
            } else {
                $this->error('新增失败', '', array('error' => $model->getError()));
            }
        } else {
            //输出模板
            $templ = method_exists($model, 'view') ? $model->view('edit') : 'edit';
            $this->display($templ);
        }
    }

    public function edit($id) {
        $model = D($this->model);
        if (IS_AJAX && IS_POST) {
            $data = $model->create();
            if ($data && false !== $model->save()) {
                $this->success('保存成功');
            } else {
                $this->error('保存失败', '', array('error' => $model->getError()));
            }
        } else {
            //获取数据
            $data = $model->find($id);
            $this->assign('data', $data);
            $templ = method_exists($model, 'view') ? $model->view('edit') : '';
            $this->display($templ);
        }
    }

    public function delete($id) {
        $model = D($this->model);
        if (C('DATA_DELETE_TYPE')) {
            $status = $model->delete($id);
        } else {
            $map = array('id' => $id);
            $status = $model->where($map)->setField('status', -1);
        }

        //返回结果
        if (false === $status) {
            $this->error('删除数据失败，请重试。。。');
        } else {
            $this->success('删除成功！');
        }
    }

    //真删除
    public function remove($id) {
        $model = D($this->model);
        $status = $model->delete($id);

        //返回结果
        if (false === $status) {
            $this->error('删除数据失败，请重试。。。');
        } else {
            $this->success('删除成功！');
        }
    }

    public function status($id, $status) {
        $model = D($this->model);

        $map = array('id' => $id);
        if (false != $model->where($map)->setField('status', $status)) {
            $this->success('修改状态成功！');
        } else {
            $this->error('修改状态失败！');
        }
    }
}