<?php
class Image {
    public $tmpName;
    public $name;
    public $path;
    public $key;
    public $size;
    public $newName;
    public $newPath;

    public function __construct($key)
    {
        $this->name = $_FILES[$key]["name"];
        $this->tmpName = $_FILES[$key]["tmp_name"];
        $this->key = $key;
        $this->size = $_FILES[$key]["size"];
    }

    public function createPath($path, $newName = false)
    {
        if($newName == false){
            $this->path = $path.$this->name;
        }
        else{
            $this->setNewName();
            $this->newPath = $path.$this->newName;
        }
        return $this;
    }

    public function moveFile()
    {
        if(!$_FILES[$this->key]["size"]) return false;
        $path = $this->path ? $this->path : $this->newPath;
        move_uploaded_file($this->tmpName, $path);
    }

    public function getName($path)
    {
        if(!$_FILES[$this->key]["size"]) return false;
        $name = $this->newName ? $this->newName : $this->name;
        return $path . $name;
    }

    public function checkSize($maxSize = 1024){
        if($_FILES[$this->key]["size"] > $maxSize) return false;
        return true;
    }

    public function checkType($types){
        $ext = $this->getExtension();
        if(in_array($ext, $types)) return true;
        return false;
    }
     
    private function getExtension(){
        $ext = pathinfo($this->name, PATHINFO_EXTENSION);
        return strtolower($ext);
    }

    public function setNewName(){
        $ext = $this->getExtension();
        $this->newName = time().".".$ext;
    }
}