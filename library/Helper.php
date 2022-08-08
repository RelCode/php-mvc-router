<?php
namespace Library;

class Helper {
    public function model($model){
        //this method is used to create a model based on the name provided as a parameter ($modelName)
        if(file_exists('./models/'.ucfirst($model).'.php')){
            //if the requested model exists, an instance of its class will be created and returned
            require_once('./models/'.ucfirst($model).'.php');
            return new $model();
        }
        return null;
    }

    //default viewer for every controller available.
    public function view($view,$data = null){
        // if a view must contain data to render it must be passed as an array, if not, an empty data array will be available
        //then we require the passed parameter which contains the required view based on its controller
        require('./views/'. $view . '.php');
    }
}