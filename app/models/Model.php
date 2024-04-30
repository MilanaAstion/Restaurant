<?php
class Model
{
    public static $db;

    public static function connect()
    {
        $host_dbname = 'mysql:host=localhost;dbname=recipes';
        $user = 'root';
        $password = '';
        self::$db = new PDO($host_dbname, $user, $password);
    }
    
    public static function findAll()
    {
        self::connect();
        $table = static::getTable();
        $sql = "SELECT * FROM `$table`";
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findOne($id)
    {
        self::connect();
        $table = static::getTable();
        $sql = "SELECT * FROM `$table` WHERE `id` = $id";
        $stmt = self::$db->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function exec($sql, $params, $error)
    {
        self::connect();
        $stmt = self::$db->prepare($sql);
        $result = $stmt->execute($params);
        if(!$result){
            throw new Exception($error);
        }
        // $start = microtime(true);
        // $end = microtime(true);
        // echo "time:".($end-$start);
    } 

    public static function delete($id)
    {
        self::connect();
        $table = static::getTable();
        $sql = "DELETE FROM `$table` WHERE `id` = $id";
        return self::$db->exec($sql);
    }

    public static function findIds($column, $value)
    {
        self::connect();
        $table = static::getTable();
        $sql = "SELECT `id` FROM `$table` WHERE `$column` = ?";
        $stmt = self::$db->prepare($sql);
        $stmt->execute([$value]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function findMany($id_arr)
    {
        if (!is_array($id_arr)) return [];
        self::connect();
        $table = static::getTable();
        $id_str = implode(",", $id_arr);
        $sql = "SELECT * FROM `$table` WHERE `id` IN ($id_str)";
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}