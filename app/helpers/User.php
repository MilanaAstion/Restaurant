<?php
class User 
{
    const LOGIN = "admin";
    const PASSWORD = "12345";
    
    public static function login($data)
    {
        if($data["pass"] !== self::PASSWORD){
            header("location: /user/login?error=password");
            exit;
        }
        if($data["login"] !== self::LOGIN){
            header("location: /user/login?error=login");
            exit;
        }
        header("location: /recipe/index");
    }
}