<?php
var_dump($_GET['action']);
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

$thanhcong = array();
switch ($action) {
    case 'add': {
            if (isset($_POST['addproduct'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $producer = $_POST['producer'];

                $database->insertData($name, $price, $description, $producer);
            }
            require_once('views/add_product.php');
            break;
        }
    case 'edit': {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $dataID = $database->getData($id);
                // lay du lieu tu view
                if (isset($_POST['editproduct'])) 
                {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $producer = $_POST['producer'];

                    // truyen du lieu lay dc tu view sang model
                    $editProduct = $database->updateData($id, $name, $price, $description, $producer);
                    var_dump($editProduct);
                    // if ($editProduct) {
                    //     header('location:index.php?controller=san-pham&action=list');
                    // }
                }
            }
            require_once('views/edit_product.php');
            break;
        }
    case 'delete': {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $deleteData = $database->deleteData($id);
                if ($deleteData) {
                    header('location: index.php?controller=san-pham&action=list');
                }
            }
            break;
        }
    case 'list': {
            $san_pham = $database->getAllData();
            require_once('views/list.php');

            break;
        }
    default: {
            require_once('views/list.php');
            break;
        }
}
