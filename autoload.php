<?php
    function model_autoloader($class) {
        if ($class == "Model" || $class == "Recipe" || $class == "Tag" || $class == "RecipeTag" || $class == "Ingredient" || $class == "RecipeIngredient" ){
            $file = __DIR__ . '/app/models/' . $class . '.php';
            if (file_exists($file)) {
                require_once($file);
            }
        }
    }
    
    function helper_autoloader($class) {
        if ($class == "File" || $class == "Validator" || $class == "User"){
            $file = __DIR__ . '/app/helpers/' . $class . '.php';
            if (file_exists($file)) {
                require_once($file);
            }
        }
    }
    spl_autoload_register('model_autoloader');
    spl_autoload_register('helper_autoloader');