<?php

class GoodBye{
    const message="Thank you for visiting our site!";

    public function __construct(){
        echo self::message;
}
}
$goodBye=new GoodBye();


?>