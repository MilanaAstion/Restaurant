<?php
class User_Controller
{
    public function action_login()
    {
        if($_POST){
            User::login($_POST);
        }
        else{
            View::render('user/login');
        }
        
    }
}
