<?php
// include "model/DBconfig.php"; đã gọi bên index
if (isset($_GET['action'])) {                 //chạy CSS
    $action = $_GET['action'];
} else {
    $action = '';
}


$thanhcong = array();
switch ($action) {
    case 'add': {                                           // lấy dữ liệu từ view
            if (isset($_POST['add_user'])) {
                $hoten = $_POST['hoten'];
                $namsinh = $_POST['namsinh'];
                $quequan = $_POST['quequan'];

                if ($db->insertData($hoten, $namsinh, $quequan)) {
                    $thanhcong[] = 'add_success';
                }
            }
            require_once("view\add_user.php");
            break;
        }
    case 'edit': {
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = "thanhvien";
                $dataID = $db->getDataID($tblTable,$id);
               
                if(isset($_POST['update_user'])){
                    // lấy dữ liệu từ view
                    $hoten = $_POST['hoten'];
                    $namsinh = $_POST['namsinh'];
                    $quequan = $_POST['quequan'];
                    // truyền sang model:
                    if($db->updateData($id,$hoten,$namsinh,$quequan)){
                        header('location: MVC.php?controller=thanh-vien&action=list');
                    }
                }
            }
            require_once("view/edit_user.php");
            break;
        }
    case 'delete': {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $tblTable="thanhvien";
            if($db->deleteData($id,$tblTable)){
                header('location: MVC.php?controller=thanh-vien&action=list');
            }else{
                header('location: MVC.php?controller=thanh-vien&action=list');
            }

        }
            // require_once("view\delete.php");
            break;
        }
    case 'list': {
        $tblTable = "thanhvien";
        $data = $db->getAllData($tblTable);
            require_once('view\list.php');
            break;
        }
    default: {
            require_once("view\list.php");
        }
}
