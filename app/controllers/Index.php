<?php

class Index extends DController{
    
    public function __construct(){
        parent::__construct();
    }

    public function home(){
        $this->load->view("header");

        $data = array();
        $table = "post";
        $postModel = $this->load->model("PostModel");
        $data['allPost'] = $postModel->getAllPost($table);
        $this->load->view("content", $data);

        $tableCat = "category";
        $catModel = $this->load->model("CatModel");
        $data['catlist'] = $catModel->catList($tableCat);
        $data['latestPost'] = $postModel->getlatestPost($table);

        $this->load->view("sidebar", $data);
        
    }

    public function postDetails($id){
        $this->load->view("header");

        $data = array();
        $tablePost = "post";
        $tableCat = "category";

        $postModel = $this->load->model("PostModel");
        $data['postbyid'] = $postModel->getPostById($tablePost, $tableCat, $id );
        $this->load->view("details", $data);

        $tableCat = "category";
        $catModel = $this->load->model("CatModel");
        $data['catlist'] = $catModel->catList($tableCat);
        $data['latestPost'] = $postModel->getlatestPost($tablePost);

        $this->load->view("sidebar", $data);
        $this->load->view("sidebar");
    }

    public function postByCat($id){
        $this->load->view("header");

        $data = array();
        $tablePost = "post";
        $tableCat = "category";

        $postModel = $this->load->model("PostModel");
        $data['getCat'] = $postModel->getPostBycat($tablePost, $tableCat, $id );
        $this->load->view("postbycat", $data);
        $this->load->view("sidebar");
    }
}
?>