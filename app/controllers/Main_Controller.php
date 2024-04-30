<?php
class Main_Controller
{
    public function action_index()
    {
        $recipes = Recipe::findAll();
        $tags = Tag::findAll();
        View::render('main/index', ['recipes'=>$recipes, 'tags'=>$tags]);
    }
    
    public function action_single()
    {
        $recipe = Recipe::findOne($_GET['id']);
        // var_dump($recipe);
        $tags = Recipe::getTags($_GET['id']);
        $ingredients = Recipe::getIngredients($_GET['id']);
        View::render('main/single', ['recipe'=>$recipe, 'tags'=>$tags, 'ingredients' => $ingredients]);
    }

    public function action_tag()
    {
        $recipes = Tag::getRecipes($_GET['id']);
        $tag = Tag::findOne($_GET['id']);
        View::render('main/tag', ['recipes'=>$recipes, 'tag'=>$tag]);
    }

    public function action_tags()
    {
        $tags = Tag::findAll($_GET['id']);
        View::render('main/tags', ['tags'=>$tags]);
    }

    public function action_recipes()
    {
        if($_GET["min"] && $_GET["max"]){
            $recipes = Recipe::filterPrice($_GET); 
        }
        elseif($_GET["weight"]){
            $recipes = Recipe::sortWeight($_GET["weight"]);
        }
        elseif($_GET["ingredient"]){
            $recipes = Recipe::filterIngredient($_GET["ingredient"]);
        }
        else{
            $recipes = Recipe::getAll($_GET["sort"]);
        }
       
        $tags = Tag::findAll();
        $ingredients = Ingredient::findAll();
        View::render('main/recipes', ['recipes'=>$recipes, 'tags'=>$tags, 'ingredients'=>$ingredients]);
    } 

    public function action_search()
    {
        $recipes = Recipe::search($_GET);
        $tags = Tag::findAll();
        View::render('main/search', ['recipes'=>$recipes, 'tags'=>$tags]);
    }

    public static function action_contact()
    {
        View::render('main/contact');
    }
}