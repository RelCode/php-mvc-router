<?php
/*
    this page will be used on pages where the user want to make a $_POST request to provide protection against XSRF
*/

//first we check if the a csrf session token has been generated, else we create a new one
if(!isset($_SESSION['mvc_route']['token'])){
    //the token session name can be anything you prefer
    $_SESSION['mvc_route']['token'] = bin2hex(openssl_random_pseudo_bytes(32));
}

echo '<input type="hidden" name="token" value="'.$_SESSION['mvc_route']['token'].'"/>';