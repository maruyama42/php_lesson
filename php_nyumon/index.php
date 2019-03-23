<?php

// #20 クラスを継承してみよう

// 継承

// User クラス
class User {
    // property
    public $name;
    
    // constructor
    public function __construct($name){
        $this->name = $name;
    }
    
    // method
    // public function sayHi() {
    final public function sayHi() {
        echo "hi, i am $this->name";
    }
}

class AdminUser extends User {
    // method
    public function sayHello(){
        echo "hello form Admin";
    }
    
    // override
    public function sayHi() {
        echo "[admin] hi, i am $this->name";
    }
}

$tom = new User("Tom");
$steve = new AdminUser("Steve");

// echo $steve->name;

$tom->sayHi();
$steve->sayHi();
// $steve->sayHello();