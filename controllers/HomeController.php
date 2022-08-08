<?php
require_once('./library/Helper.php');
class HomeController extends Library\Helper {
    public function __construct($route,$action,$item){
        $this->homeModel = $this->model($route);
        $this->action = $action;
        $this->id = $item;
    }
    public function index(){
        /*
            if I wanted to fetch data from a database or API, I'd use the $this->homeModel model as follow:
            $data = $this->homeModel->fetchData(); and then pass the results alongside the view
        */

        //the view method is inherited from the helper library
        $this->view('home.php');
        /*
            I want this controller to view home.php, so I'm passing it as an argument,
            if I wanted to view something else, read.php, delete.php, I would've passed $this->action as an argument
        */
    }
}