<?php

// #21 アクセス権について理解しよう

// private  :そのクラス内からのみアクセス可能
// protected:そのクラス＋親子クラス内からのアクセスのみ可能
// public   :どこからでもアクセス可能


// User クラス
class User {
    // property
    // public $name;
    // private $name;
    protected $name;
    
    // constructor
    public function __construct($name){
        $this->name = $name;
    }
    
    // method
    public function sayHi() {
        echo "hi, i am $this->name";
    }
}

class AdminUser extends User {
    // method
    public function sayHello(){
        echo "hello form $this->name";
    }
}

$tom = new User("Tom");
// echo $tom->name;
$steve = new AdminUser("Steve");
$steve->sayHello();