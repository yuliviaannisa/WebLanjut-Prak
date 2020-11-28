<?php namespace App\Controllers;

class Helloworld extends BaseController
{
    public function show(){
        echo "<b> THRIFT YOU LOTS.<br>" ;
        echo "Selamat Datang, Happy Thrifting";
    }
    public function index($name, $npm) {

        //echo $this->name;
        echo $name. "<br>";
        echo $npm. "<br>";
        //echo "Hello Yulivia !"

    } 
}