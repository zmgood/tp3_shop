<?php

namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller{
    //头部
    public function head() {
        $this->display();
    }
    //左部
    public function left() {
        $this->display();
    }
    //右部
    public function right() {
        $this->display();
    }
    //索引页（整合 头部、左侧、右侧）
    public function index() {
        $this->display();
    }
        
}


