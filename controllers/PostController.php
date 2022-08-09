<?php
require_once('./library/Helper.php');
class PostController extends Library\Helper {
    public function __construct($route, $action, $item,$query){
        /*
        just like with the home controller, I won't be using the model, action or id property so I won't initialising them
        */
    }

    public function index(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //this will run when a form is being submitted and then pass the array of post data
            $this->formSubmitted($_POST);
        }
        //i know that for this example I need only one view, so I will call it directly
        return $this->view('post');
    }

    public function formSubmitted($post){
        /*
            if something was submitted, we run this method
            this can be anything, data you want to read or send via api or save in a database
            this method here can be where you do your validation and sanitization before storing data
        */
        //remember that when we are using $_POST so we need to protect the user from XSRF
        if($_SESSION['mvc_route']['token'] != $post['token']){
            //if the session token does not match the token value sent alongside the form we alert an error message
            echo '<script>alert("Error Code 500")</script>';
            die();
        }
        //also, another layer of security can be enforced by using htmlenties to protect against cross-site scripting
        $name = htmlentities($post['name'],ENT_QUOTES);
        $profession = htmlentities($post['profession'],ENT_QUOTES);
        //you can handle this section anyway it suits your needs
        echo '<script>alert("Hi '.$name.', I\'m sure you are a great '.$profession.'")</script>';
        //in my case I am just alerting what was submitted, but storing data to a DB or writing to a file can be done
    }
}