<?php
class Tag extends Model
{
    public static function getTable()
    {
        return "tags";
    }

    public static function add($params)
    {
        $table = static::getTable();
        $sql = "INSERT INTO `$table`(`name`) VALUES (:name)";
        self::exec($sql, $params, "add_tag");
    }

    public static function edit($params)
    {
        $table = static::getTable();
        $sql = "UPDATE `$table` SET `name`= :name WHERE `id`= :id";
        self::exec($sql, $params, "edit_tag");
    }

    public static function getRecipes($tag_id)
    {
       $ids = RecipeTag::getRecipes($tag_id);
       if(!$ids){
          return;
       }
       return Recipe::findMany($ids);
    }
}