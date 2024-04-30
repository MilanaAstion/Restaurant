<?php
class Ingredient extends Model
{
    public static function getTable()
    {
        return "ingredients";
    }

    public static function add($params)
    {
        $table = static::getTable();
        $sql = "INSERT INTO `$table`(`name`) VALUES (:name)";
        // debug($params);
        self::exec($sql, $params, "add_ingredient");
    }

    public static function edit($params)
    {
        $table = static::getTable();
        $sql = "UPDATE `$table` SET `name`= :name WHERE `id`= :id";
        self::exec($sql, $params, "edit_ingredient");
    }

}