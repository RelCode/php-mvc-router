<?php
require_once('./config/core.php');
//route will be used to handle every route request
require_once('./library/Router.php');



//header.php contains basic HTML top-most content as well as the navbar
require('./views/layouts/header.php');

/*
HTML BODY CONTENT STARTS HERE
*/

//we create a controller name variable that will be used to fetch a controller for the current route name
$ctrlName = ucfirst(Library\Router::route()) . 'Controller'; //ctrlName === controller name
/* to display a page, we need to make sure that a class that will view the page exists.
    e.g: www.mysite.com/home
    in this case 'home' will be our route and therefore HomeController.php will have to be created in controllers folder in order for us to render the home.php view
*/

/*
    based on OS configuration, directory names can be case-sensitive so to maintain the standard, ucfirst() will be used to match the correct controller name
*/
if(file_exists('./controllers/'.ucfirst($ctrlName).'.php')){
    //if the route controller exists(e.g: HomeController.php), we require it
    require_once('./controllers/'.ucfirst($ctrlName).'.php');
    /*
    we get the 4 main parts of our uri and then pass them as arguments to the controller


    from www.mysite.com/products/product/productId/?size=10
    the following will have values commented at the end
    */
    $route = Library\Router::route();// == products
    $action = Library\Router::action();// == product
    $item = Library\Router::item();// == productId
    $query = Library\Router::query();// == 10
    //we require and create an instance of its class
    $controller = new $ctrlName($route,$action,$item,$query);
    //from the class we invoke the index() method which is our class entry point and it returns the view
    $controller->index();
}else{
    //we view the 404.php page
    require('./views/404.php');
}
/*
HTML BODY CONTENTS ENDS HERE
*/


//footer.php contains basic HTML bottom-most content
require('./views/layouts/footer.php');