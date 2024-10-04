<?php
spl_autoload_register(function($class){
    include_once "system/libs/".$class.".php";
});

$url = isset($_GET['url']) ? $_GET['url'] : NULL;
if ($url != NULL) {
    $url = rtrim($url, '/');
    $url = explode("/", filter_var($url,FILTER_SANITIZE_URL)); 
}else{
    unset($url);
}


if(isset($url[0])){
    include 'app/controllers/'.$url[0].'.php';
    
    $ctlr = new $url[0]();
    if (isset($url[2])) {
        $method=$url[1];
        $parm=$url[2];
        $ctlr->$method($parm);
    }else{
        if (isset($url[1])) {
            $method=$url[1];
            $ctlr->$method();
            
        }else{

        }
    }
} else {
    include 'app/controllers/Index.php';
    $ctlr = new Index();
    $ctlr->home();
}


?>
