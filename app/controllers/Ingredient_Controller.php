<?php
class Ingredient_Controller
{
    public function action_index()
    {
        $ingredients = Ingredient::findAll();
        View::admin("ingredient/index", ["ingredients" => $ingredients]);
    }

    public function action_add()
    {
        if($_POST){
            try {
                $valid = new Validator($_POST);
                $valid->empty();
                Ingredient::add($_POST); 
                header("location: /ingredient/index?mess=add_ingedient");
            }
            catch (Exception $e) {
                header("location: /ingredient/add?error=" . $e->getMessage());
            }
        }
        else{
            View::admin("ingredient/add");
        }
        
    }

    public function action_delete()
    {
        $result = Ingredient::delete($_GET["id"]);
        if($result){
            header("location: /ingredient/index?mess=delete_ingedient");
        }
        else{
            header("location: /ingredient/index?error=delete_ingredient");
        }
    }

    public function action_edit()
    {
        if($_POST){
            try {
                $valid = new Validator($_POST);
                $valid->empty();
                Ingredient::edit($_POST); 
                header("location: /ingredient/index?mess=edit_ingedient");
            }
            catch (Exception $e) {
                header("location: /ingredient/edit?error=" . $e->getMessage());
            }
        }
        else{
            $ingredient = Ingredient::findOne($_GET["id"]);
            View::admin("ingredient/edit", ["ingredient" => $ingredient]);
        }
        
    }
}