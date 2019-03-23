<?php

//  #24 インターフェースを使ってみよう

interface sayHi {
    public function sayHi();
}

interface sayHello {
    public function sayHello();
}

class User implements sayHi, sayHello {
    public function sayHi(){
        echo "Hi";
    }
    public function sayHello(){
        echo "hello";
    }
}

$tom = new User("tom");
echo $tom->sayHello();