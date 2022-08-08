<?php
require_once('./library/Helper.php');
class HomeController extends Library\Helper {
    public function __construct($route,$action,$item){
        $this->homeModel = $this->model($route);
    }
    public function index(){
        $this->view('./home.php');
    }
}