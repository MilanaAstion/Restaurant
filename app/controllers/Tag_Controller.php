<?php
class Tag_Controller
{
    public function action_index()
    {
        $tags = Tag::findAll();
        View::admin("tag/index", ["tags" => $tags]);
    }
    public function action_add()
    {
        if($_POST){
            try {
                $valid = new Validator($_POST);
                $valid->empty();
                Tag::add($_POST); 
                header("location: /tag/index?mess=add_tag");
            }
            catch (Exception $e) {
                header("location: /tag/add?error=" . $e->getMessage());
            }
        }
        else{
            View::admin("tag/add");
        }
        
    }

    public function action_edit()
    {
        if($_POST){
            try {
                $valid = new Validator($_POST);
                $valid->empty();
                Tag::edit($_POST); 
                header("location: /tag/index?mess=edit_tag");
            }
            catch (Exception $e) {
                header("location: /tag/edit?error=" . $e->getMessage());
            }
        }
        else{
            $tag = Tag::findOne($_GET["id"]);
            View::admin("tag/edit",['tag'=>$tag]);
        }
        
    }

    public function action_delete()
    {
        $result = Tag::delete($_GET["id"]);
        if($result){
            header("location: /tag/index?mess=delete_tag");
        }
        else{
            header("location: /tag/index?error=delete_tag");
        }
    }
}