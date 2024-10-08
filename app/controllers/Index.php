<?php

class Index extends DController{
    
    public function __construct(){
        parent::__construct();
    }

    public function home(){
        $this->load->view("header");

        $data = array();
        $table = "post";
        $PostModel = $this->load->model("PostModel");
        $data['allPost'] = $PostModel->getAllPost($table);
        $this->load->view("content", $data);

        
        $this->load->view("sidebar");
        
    }
}
?>