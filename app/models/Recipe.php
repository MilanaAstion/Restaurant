<?php
class Recipe extends Model
{
   public static function getTable()
   {
      return "recipes";
   }

   public static function add($params, $file)
   {
      $table = self::getTable();
      $params["image"] = self::addFile($file);
      $sql = "INSERT INTO `$table`(`name`, `desc`, `img`, `cook`,`weight`,`price`) 
      VALUES (:name, :desc, :image, :cook, :weight, :price)";
      parent::exec($sql, $params, 'add_recipe');
   }

   public static function edit($params, $file)
   {
      $table = self::getTable();
      self::editFile($file, $params["id"]);
      $sql = "UPDATE `$table` SET `name`= :name,`desc`= :desc,
      `price`= :price,`cook`= :cook,`weight` = :weight WHERE `id`= :id";
      parent::exec($sql, $params, 'edit_recipe');
   }

   public static function editFile($file, $prod_id)
   {
      if($file["error"] == UPLOAD_ERR_NO_FILE){
         return false;
      }
      $params["image"] = self::addFile($file);
      $params["id"] = $prod_id;
      $table = self::getTable();
      $sql = "UPDATE `$table` SET `img`= :image WHERE `id`= :id";
      parent::exec($sql, $params, 'edit_file_recipe');
   }

   public static function addFile($file)
   {
      $img = new File($file, 100000000, ['png','jpeg','jpg']);
      $img->uploadFile("assets/img/recipes/");
      return $img->fileName;
   }

   public static function getTags($recipe_id)
   {
      self::connect();
        $sql = "SELECT t.name, t.id 
        FROM tags t
        JOIN recipe_tags r_t
        ON r_t.tag_id = t.id
        WHERE r_t.recipe_id = $recipe_id";
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll();
   }

   public static function getIngredients($recipe_id)
   {
      self::connect();
        $sql = "SELECT i.name, i.id 
        FROM ingredients i
        JOIN recipe_ingeredients r_i
        ON r_i.ingredient_id = i.id
        WHERE r_i.recipe_id = 12";
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll();
   }

   public static function getAll($sort)
   {
      if($sort){
         self::connect();
         $sql = "SELECT * FROM `recipes` ORDER BY `price` $sort";
         $stmt = self::$db->query($sql);
         $recipes = $stmt->fetchAll();
      }
      else{
         $recipes = self::findAll();
      }
      return $recipes;
   }

   public static function search($params)
   {
      self::connect();
      $name = "%".$params["name"]."%";
      if($params["sort"]){
         $sql = "SELECT * FROM `recipes` WHERE `name` LIKE '$name' ORDER BY `price` {$params['sort']}";
      }
      else{
         $sql = "SELECT * FROM `recipes` WHERE `name` LIKE '$name'";
      }
      $stmt = self::$db->query($sql);
      return $stmt->fetchAll();
   }

   public static function filterPrice($data){
      self::connect();
      $min = $data["min"];
      $max = $data["max"];
      $sql = "SELECT * FROM `recipes` WHERE `price` BETWEEN $min AND $max";
      $stmt = self::$db->query($sql);
      return $stmt->fetchAll();
   }

   public static function sortWeight($sort){
      if($sort){
         self::connect();
         $sql = "SELECT * FROM `recipes` ORDER BY `weight` $sort";
         $stmt = self::$db->query($sql);
         $recipes = $stmt->fetchAll();
      }
      else{
         $recipes = self::findAll();
      }
      return $recipes;
   }

   public static function filterIngredient($ingredient_id){
      self::connect();
      $items = RecipeIngredient::getRecipes($ingredient_id);
      return self::findMany($items);
   }
}