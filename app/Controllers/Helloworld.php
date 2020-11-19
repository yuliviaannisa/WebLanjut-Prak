<?php namespace App\Controllers;

class Helloworld extends BaseController
{
    public function show(){
        echo "Yulivia Annisa Putri<br>" ;
        echo "1857051008";
    }
    public function index($name, $npm) {

        //echo $this->name;
        echo $name. "<br>";
        echo $npm. "<br>";
        //echo "Hello Yulivia !"

    } 
}