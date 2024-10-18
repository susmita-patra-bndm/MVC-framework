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

    public function postDetails($id){
        $this->load->view("header");

        $data = array();
        $tablePost = "post";
        $tableCat = "category";
        $PostModel = $this->load->model("PostModel");
        $data['postbyid'] = $PostModel->getPostById($tablePost, $tableCat, $id );

        $this->load->view("details", $data);
        $this->load->view("sidebar");
    }

    public function postBycat(){

    }
}
?>