<?php
    class PostView {
        public function showAllPost($posts){               //hàm hiển thị(biến post được controller gọi sau khi nhận database từ model)
            require_once("template/post.php");            //hiển thị các bài viết ở đây.để controller lấy(htm,CSS,trang trí)
        }
        public function formAddPost(){              // tạo hàm, tạo form bên template
            require_once('template/formaddpost.php');
        }
    }
?>