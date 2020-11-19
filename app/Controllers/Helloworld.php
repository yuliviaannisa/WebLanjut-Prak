<?php namespace App\Controllers;

class Helloworld extends BaseController
{
    public function show(){
        echo "AKU TIM AYAM MEKDI<br>" ;
        echo "KALO KAMU???";
    }
    public function index($name, $npm) {

        //echo $this->name;
        echo $name. "<br>";
        echo $npm. "<br>";
        //echo "Hello Yulivia !"

    } 
}