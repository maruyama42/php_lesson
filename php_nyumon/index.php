<?php

// #22 staticキーワードを使ってみよう

// private  :そのクラス内からのみアクセス可能
// protected:そのクラス＋親子クラス内からのアクセスのみ可能
// public   :どこからでもアクセス可能


// User クラス
class User {
    public $name;
    public static $count = 0;

    // constructor
    public function __construct($name){
        $this->name = $name;
        self::$count++;
    }
    
    // method
    public function sayHi() {
        echo "hi, i am $this->name";
    }
    
    // static
    public static function getMessage() {
        echo "hello from User class!";
    }
}

// User::getMessage();
// $tom = new User("Tom");

$tom = new User("Tom");
$Bob = new User("Bob");

echo User::$count;