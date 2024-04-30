<?php
class RecipeIngredient_Controller
{
    public function action_add()
    {
        if($_POST){
            try {
                $valid = new Validator($_POST);
                $valid->empty();
                RecipeIngredient::add($_POST); 
                header("location: /recipe/single?mess=add_ingredient_recipe&id=".$_POST["recipe_id"]);
            }
            catch (Exception $e) {
                header("location: /recipeingredient/add?error=" . $e->getMessage()."&recipe_id=".$_POST["recipe_id"]);
            }
        }
        else{
            $ingredients = Ingredient::findAll();
            View::admin("recipe_ingredient/add", ["ingredients" => $ingredients, "id" => $_GET["recipe_id"]]);
        }
        
    }

    public function action_delete()
    {
        $result = RecipeIngredient::remove($_GET);
        if($result){
            header("location: /recipe/single?mess=delete_ingredient_recipe&id=" .$_GET["recipe_id"]);
        }
        else{
            header("location: /recipe/single?error=delete_ingredient_recipe&id=" .$_GET["recipe_id"]);
        }
    }
}