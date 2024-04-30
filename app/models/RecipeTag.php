<?php
class RecipeTag extends Model
{
    public static function getTable()
    {
        return 'recipe_tags';
    }

    public static function getTags($recipe_id)
    {
        
        $table = static::getTable();
        $params = ["recipe_id" => $recipe_id];
        $sql = "SELECT `tag_id` FROM `$table` WHERE `recipe_id` = :recipe_id";
        $stmt = self::$db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function add($params)
    {
        self::connect();
        $table = static::getTable();
        self::check($params);
        $sql = "INSERT INTO `$table`(`recipe_id`, `tag_id`) VALUES (:recipe_id, :tag_id)";
        self::exec($sql, $params, "add_recipe_tag");
    }

    public static function check($params)
    {
        self::connect();
        $table = static::getTable();
        $sql = "SELECT * FROM `$table` WHERE `recipe_id` = :recipe_id AND `tag_id` = :tag_id";
        $stmt = self::$db->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetchAll();
        if($result) throw new Exception("tag_exist");
    }

    public static function remove($params)
    {
        self::connect();
        $table = static::getTable();
        $sql = "DELETE FROM `$table` WHERE `recipe_id` = :recipe_id AND `tag_id` = :tag_id";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($params);
    }

    public static function getRecipes($tag_id)
    {
        self::connect();
        $table = static::getTable();
        $sql = "SELECT `recipe_id` FROM `$table` WHERE `tag_id` = $tag_id";
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}