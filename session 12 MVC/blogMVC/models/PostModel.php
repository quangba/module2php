<?php
    class PostModel {
        public function getPost(){
           $conn = mysqli_connect('localhost','root','','blogmvc');     // hàm kết nối 
           mysqli_set_charset($conn,'utf8');                            // hàm lấy tiếng việt          
           if(mysqli_connect_errno()){
               echo "Connect error:". mysqli_connect_errno();
           }
           $result = $conn->query("SELECT * FROM `mvc_post`");          // lấy dữ liệu

           $post = array();                                             // tạo mãng để lấy dữ liệu
           if($result->num_rows>0){                                      // dùng lệnh hiển thị dữ liệu trong SQL   
               while($post= mysqli_fetch_assoc($result)){               // điều kiện trả về từng hàng trong SQL
                    $posts[] = $post;
               }
           }
           return $posts;                              // trả dữ liểu để controller lấy được(qua controller để tiến hành)
        }
        public function addPost($post){
            $conn = mysqli_connect('localhost','root','','blogmvc');    
           mysqli_set_charset($conn,'utf8');                                     
           if(mysqli_connect_errno()){
               echo "Connect error:". mysqli_connect_errno();
           }
           $sql = "INSERT INTO `mvc_post`(`id`, `title`, `content`, `time`, `url_thumbnail`, `tag`)
            VALUES (,[value-2],[value-3],[value-4],[value-5],[value-6])";
        }
    }
?>