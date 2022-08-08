<?php
require_once('./config/core.php');
require_once('./library/Router.php');



//header.php contains basic HTML most-top content
require('./views/layouts/header.php');

/*
HTML BODY CONTENT STARTS HERE
*/

//we create a controller name variable that will be used to fetch a controller for the current route name
$ctrlName = ucfirst(Library\Router::route()) . 'Controller'; //ctrlName === controller name
/* to display a page, we need to make sure that a class that will view the page exists.
    e.g: www.mysite.com/home
    in this case 'home' will be our route and therefore HomeController.php will have to be created in controllers folder
*/

//based on OS, directory names can be case-sensitive so to maintain the standard, ucfirst() will be used to match the correct controller name
if(file_exists('./controllers/'.ucfirst($ctrlName).'.php')){
    //if the route controller exists(HomeController.php),
    require_once('./controllers/'.ucfirst($ctrlName).'.php');
    //we get the 3 main parts of our uri and then pass them as arguments to the controller
    $route = Library\Router::route();
    $action = Library\Router::action();
    $item = Library\Router::item();
    //we require and create an instance of its class
    $controller = new $ctrlName($route,$action,$item);
    //from the class we invoke the index() method which is our class entry point and it returns the view
    $controller->index();
}else{
    //we view the 404.php page
    require('./views/404.php');
}
/*
HTML BODY CONTENTS ENDS HERE
*/


//footer.php contains basic HTML most-bottom content
require('./views/layouts/footer.php');