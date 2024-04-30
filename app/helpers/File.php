<?php

class File
{
    public $file;
    public $maxSize;
    public $ext;
    public $validExt;
    public $fileName;

    public function __construct($file, $max_size, $valid_ext) 
    {
        $this->file = $file;
        $this->maxSize = $max_size;
        $this->validExt = $valid_ext;
    }

    public function checkFile() 
    {
        if ($this->file['error'] == UPLOAD_ERR_NO_FILE) {
            throw new Exception('file_exist');
        } 
    }

    public function checkSize() {
        if ($this->file['size'] > $this->maxSize) {
            throw new Exception('file_size');
        }
    }

    public function getExtension() 
    {
        $this->ext = pathinfo($this->file['name'], PATHINFO_EXTENSION);
    }

    public function checkType() {
        if (!in_array($this->ext, $this->validExt)) {
            throw new Exception('file_type');
        }
    }

    public function createName() {
        $this->fileName = time() . '.' . $this->ext; 
    }

    public function moveFile($dir) {
        $path = $dir . $this->fileName;
        move_uploaded_file($this->file['tmp_name'], $path);
    }

    public function uploadFile($dir) {
        $this->checkFile();
        $this->checkSize();
        $this->getExtension();
        $this->checkType();
        $this->createName();
        $this->moveFile($dir);
    }

}
