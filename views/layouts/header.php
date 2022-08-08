<!DOCTYPE html>
<html lang="en">
<head>
    <!-- change /mvc_router to your project folder name, it helps with the loading of assets (css,js) as you navigate through page -->
    <base href="http://localhost/mvc_router/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>
    <link rel="stylesheet" href="./assets/app.css">
</head>
<body>
    <?php
        require('./views/layouts/navbar.php');
    ?>
