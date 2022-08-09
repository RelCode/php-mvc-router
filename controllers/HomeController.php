<?php
/*
    the Helper.php library will provide us the methods we need to create a data model and render a view from this controller. That's where MVC meets
*/
require_once('./library/Helper.php');
class HomeController extends Library\Helper {
    /*
    from our app.php in the bootstrap folder, we passed $route, $action, $item & query as arguments and their parameters will be used when needed by the particular controller that is opened
    */
    public function __construct($route,$action,$item,$query){
        /*
        model file name must have the same name as the route: Home.php, so the following line is setting that. but since home does not have a model file because it only view a page, we won't be using anything from this construcor method and therefore we can just comment or delete all the properties in this method
        */
        $this->homeModel = $this->model($route);//passing route name to create model for route
        //$action is often used to give us the name of a view to be rendered if a page has many subpages
        $this->action = $action;
        //$item will be used as an id if the page will be used to fetch data about a specific entity and output it
        $this->id = $item;
    }
    public function index(){
        /*
            if I wanted to fetch data from a database or API, I'd use the $this->homeModel model as follow:
            $data = $this->homeModel->fetchData(); and then pass the results alongside the view
        */

        //the view method is inherited from the helper library
        $this->view('home');
        /*
            I want this controller to view home.php, so I'm passing it as an argument,
            if I wanted to view something else, read.php, delete.php, I would've passed $this->action as an argument
        */
    }
}