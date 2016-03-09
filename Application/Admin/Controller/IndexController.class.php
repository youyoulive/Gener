<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller {
    public function index() {
        $this->display('index');
    }

    public function login() {
        $this->display('login');
    }

    public function welcome(){
        $this->display('welcome');
    }
}