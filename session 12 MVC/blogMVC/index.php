<?php
    $action = $_GET['action'];              // thêm biến action để hiển thị
    

    require_once("controllers/PostController.php");
    $postcontroller = new PostController();

    if($action=="list"){                        // nếu action bằng list thì lấy danh sách bài viết ra
    $postcontroller->getPost();                 // hàm lấy danh sách từ controller
    }
    if($action="add"){
        $postcontroller->addPost();
    }
    if($action="doAdd"){
        $postcontroller->doAdd();           //bên controller
    }
    
?>