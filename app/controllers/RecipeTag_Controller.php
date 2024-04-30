<?php
class RecipeTag_Controller
{
    public function action_add()
    {
        if($_POST){
            try {
                $valid = new Validator($_POST);
                $valid->empty();
                RecipeTag::add($_POST); 
                header("location: /recipe/single?mess=add_tag_recipe&id=".$_POST["recipe_id"]);
            }
            catch (Exception $e) {
                header("location: /recipetag/add?error=" . $e->getMessage());
            }
        }
        else{
            $tags = Tag::findAll();
            View::admin("recipe_tag/add", ["tags" => $tags, "id" => $_GET["id"]]);
        }
        
    }

    public function action_delete()
    {
        $result = RecipeTag::remove($_GET);
        if($result){
            header("location: /recipe/single?mess=delete_tag_recipe&id=" .$_GET["recipe_id"]);
        }
        else{
            header("location: /recipe/single?error=delete_tag_recipe&id=" .$_GET["recipe_id"]);
        }
    }
}