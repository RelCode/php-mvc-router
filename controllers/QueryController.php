<?php
require_once('./library/Helper.php');
class QueryController extends Library\Helper{
    /*
        this class will be used to get a string query from the URI
        ::this function might be used for when you have an ecommerce site and you are search for products by name or description or if you have set a filter function and passed the filter value via $_GET[''] parameters
    */
    public function __construct($route,$action,$item,$query){
        //in this case we will be using our query string value found from the uri via $_GET
        $this->query = $query;
    }

    public function index(){
        //we are returning the view and $query value as data
        return $this->view('query',$this->query);
    }
}