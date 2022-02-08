<?php
//This is my Controller

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);


//Require the autoload file
require_once('vendor/autoload.php');
require('model/data-layer.php');

//create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /',function($f3){

    //Save data to the "hive"
    $f3->set('username','jshmo');
    $f3->set('password',sha1('password1'));
    $f3->set('title',"Working with Template");
    $f3->set('color','blue');

    $f3->set('fruits',array('apple','orange','banana'));

    $f3->set('desserts',getDesserts());

    $f3->set('colors',getColor());

    //Display list of radio buttons containing colors
        //Define function that returns array of colors
        //Add data to hive
        //Display data in view page.

    $view = new Template();
    echo $view->render('views/info.html');
});
// Run fat-free
$f3->run();