<?php
// __get($property) ja ja property thakbe na sei golo set kore dibe....
// __set ($property, $value) holo amon ekta property declear korlam ja propery class ar vitore nai or private kora sei property banailam and setar value add hoye jasse.

// __call($method, $arg) amon ekta method ke call korlam set class ar modde nai seta dhore use korte parse
class A {
    private $name = 'Asraf';
    private $age = 44;
    private $job = 'PHP Developer';

    public function info(){

    }

    // public function __get($property) { // receive property whose not present
    //     // echo $property . " Property is invalid";
    // }

    // public function __set($property, $value) {
    //     // echo $property . " Property is valid ";
    // }

    public function __call($method, $args) {
        echo $method . " Method is doesn't exist";
    }

}

$a = new A;
$a -> eat();

// echo $a -> name = "Rifat";