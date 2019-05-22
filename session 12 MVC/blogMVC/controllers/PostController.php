<?php
    class PostController {
        public function getPost() {                                 //lấy dữ liệu bên model 
            require("models/PostModel.php");
            $postModel = new PostModel();
            $posts = $postModel->getPost();                 //tạo biến posts để lấy dữ liệu từ model                
            
            require_once('views/Postview.php');                    // lấy dữ liệu bên views                            
            $postView = new PostView;                             // in mãng ra,nhận lại views  
            $postView->showAllPost($posts);                         // truyền biến post vào để show dữ liệu 
        }
        public function addPost(){
            require_once('views/Postview.php');                    // tạo hàm thêm              
            $postView = new PostView;                           
            $postView->formAddPost();     
        }
        public function doAdd(){                                //tạo hàm thêm
            $title = $_POST['title'];                       //lấy input có name là title
            $content = $_POST['content'];       
            $urlThumbnail = $_POST['url_thumbnail'];
            $tag = $_POST['tag'];
            // echo $title.'<br>';
            // echo $content.'<br>';
            // echo $urlThumbnail.'<br>';
            // echo $tag;
            $data = array(                                  // tạo mãng để nhận dữ liệu
                "title" =>$title,
                'content' =>$content,
                'url_thumbnail' =>$title,
                'tag' =>$tag,
            );
            require("models/PostModel.php");
            $postModel = new PostModel();
            $status = $postModel->addPost($post); 
        }
    }
