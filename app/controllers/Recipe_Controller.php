<?php
class Recipe_Controller
{
    public function action_index()
    {
        $recipes = Recipe::findAll();
        View::admin("recipe/index", ["recipes" => $recipes]);
    }
    public function action_add()
    {
        if($_POST){
            try {
                $valid = new Validator($_POST);
                $valid->empty();
                Recipe::add($_POST, $_FILES['img']); 
                header("location: /recipe/index?mess=add_recipe");
            }
            catch (Exception $e) {
                header("location: /recipe/add?error=" . $e->getMessage());
            }
        }
        else{
            View::admin("recipe/add");
        }
        
    }
    public function action_single()
    {
        $recipe = Recipe::findOne($_GET["id"]);
        $tags = Recipe::getTags($_GET["id"]);
        $ingredients = RecipeIngredient::get($_GET["id"]);
        View::admin("recipe/single/index", ["recipe" => $recipe, "tags" => $tags, "ingredients" => $ingredients]);
    }
    public function action_edit()
    {
        if($_POST){
            try {
                $valid = new Validator($_POST);
                $valid->empty();
                Recipe::edit($_POST, $_FILES['img']); 
                header("location: /recipe/index?mess=edit_recipe");
            }
            catch (Exception $e) {
                header("location: /recipe/edit?error=" . $e->getMessage());
            }
        }
        else{
            $recipe = Recipe::findOne($_GET["id"]);
            View::admin("recipe/edit",['recipe'=>$recipe]);
        }
        
    }

    public function action_delete()
    {
        $result = Recipe::delete($_GET["id"]);
        if($result){
            header("location: /recipe/index?mess=delete_recipe");
        }
        else{
            header("location: /recipe/index?mess=error_recipe");
        }
    }
}