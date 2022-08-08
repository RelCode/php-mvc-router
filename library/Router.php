<?php
namespace Library;
class Router {
    private static function requestUri($part){
        /* 
            $_SERVER['REQUEST_URI'] is equal /projectFolder/
            therefore explode('/',$uri) function breaks up the uri to subsets of the uri separated by a forward slashes

            so for example, if the $_SERVER['REQUEST_URI'] == /projectFolder/products/viewProduct/productId
            explode will give us [2] = 'products
            explode will give us [3] = 'viewProduct
            explode will give us [4] = 'productId
        */
        $uri = explode('/',$_SERVER['REQUEST_URI']);
        if($part == 'route'){//'products'
            //we check if route is blank & return 'home', else return set route name
            return $uri[2] == '' ? 'home' : $uri[2];//in production, change 2 to 1
        }elseif($part == 'action'){//'viewProduct'
            //the isset function checks if action portion is set, else returns blank value
            return isset($uri[3]) ? $uri[3] : '';//in production, change 3 to 2
        }elseif($part == 'item'){//'productId'
            //the isset function checks if item portion is set, else returns blank value
            return isset($uri[4]) ? $uri[4] : '';//in production, change 3 to 4
        }elseif($part == 'query'){
            //this is used if a query url is used:: /products/?query=shoes
            return isset($_GET['query']) ? $_GET['query'] : '';
        }
    }
    public static function route(){
        return self::requestUri('route');
    }

    public static function action(){
        return self::requestUri('action');
    }

    public static function item(){
        return self::requestUri('item');
    }

    public static function query(){
        return self::requestUri('query');
    }
}