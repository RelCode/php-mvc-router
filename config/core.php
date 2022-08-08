<?php
/* 
    core.php will be the first script included in every page we navigate/route to
*/

//if your PHP application will make use of sessions, uncomment the following line::
// session_start();

/*
    $navigable: is an array of pages the website/application must be able to let users navigate to.

    for your use case, if you want add another page that users should be able to reach, products.php page for example, just add it on the array below
*/
$navigable = ['home','about','contact' /*,'products'*/];