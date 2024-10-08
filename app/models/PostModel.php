<?php

class PostModel extends DModel{

    public function __construct(){
        parent::__construct();
    }

    public function getAllPost($table){
        $sql = "select * from $table order by id desc limit 4";
        return $this->db->select($sql);
    }

}
?>