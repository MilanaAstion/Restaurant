<?php
class RecipeIngredient extends Model
{
    public static function getTable()
    {
        return "recipe_ingeredients";
    }

    public static function get($recipe_id)
    {
        $table = static::getTable();
        $params["recipe_id"] = $recipe_id;
        $sql = "SELECT * FROM  `$table` WHERE `recipe_id` = :recipe_id";
        $stmt = self::$db->prepare($sql);
        $stmt->execute($params);
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($items){
            foreach($items as $item){
                $ingredients[] = Ingredient::findOne($item["ingredient_id"]);
            }
            return $ingredients;
        }
    }

    public static function add($params)
    {
        $table = static::getTable();
        $sql = "INSERT INTO `$table`(`ingredient_id`, `recipe_id`) VALUES (:ingredient_id, :recipe_id)";
        self::exec($sql, $params, "add_ingredient_recipe");
    }

    public static function remove($params)
    {
        self::connect();
        $table = static::getTable();
        $sql = "DELETE FROM `$table` WHERE `recipe_id` = :recipe_id AND `ingredient_id` = :id";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($params);
    }

    public static function getRecipes($ingredient_id)
    {
        self::connect();
        $table = static::getTable();
        $sql = "SELECT `recipe_id` FROM `$table` WHERE `ingredient_id` = $ingredient_id";
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}