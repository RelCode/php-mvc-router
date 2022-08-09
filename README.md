# PHP-MVC-ROUTER

**a small, simple & secure PHP library to help anyone who wants to create an MVC based project**

most often when people want to create an MVC project, handling routing tends to be a nightmare and makes most people opt for a framework.

but what if you are creating a small project, say 5 pages or less? that's why I made this project.
This library is small (*< 75kb*), secure as it offers XSRF & Cross-Site Scripting protection.

### What it includes:

- index.php (this is the application's entry point)
- .htaccess (this file is responsible for redirecting all requests to index.php & preventing content browsing directly from the browser)
- bootstrap (folder that contains app.php which is where the application will be running)
- config (folder that contains connection.php for those who plans on using MySQL, core.php, csrf.php which provides anti-xsrf function)
- assets (folder contains app.css & app.js which are the main css & js files you'll build upon)
- library (contains 2 files, Helper.php & Router.php)
	- Helper.php is a universal controller that is used by other controllers to return a view and/or create a model for that controller
	- Router.php is where the magic starts. uri is broken down & subsets of this uri are returned as values used to fetch corresponding controllers
- controllers (this is where all the created Controllers for different routes will be stored)
- models (this is where all the created models for different routes will be stored)
- views (this is where all the created views for different routes will be stored, including 404.php page that will be rendered if the route does not exist)

#### There are multiple frameworks out there for this but to those who want to do something small or get an idea of how you can create one such library for your own application, I'd say this is the best place to start

## you can download the project & go through the source code, which will be easy to understand since every page is filled with comments to help you get the most out of this small library.

I am planning to work on this (make it smaller, faster & add more functionality) if anyone finds it helpful.
this might be ridden with bugs as it is my initial version so if you happen to pick something off please know that any input/suggestion would be highly appreciated.

`good luck on your project`
