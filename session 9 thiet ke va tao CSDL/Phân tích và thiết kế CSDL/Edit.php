<?php
include_once('connectCSDL.php');
$id = $_GET['id'];
$sql = "SELECT * FROM categories WHERE categoryCode='$id'";
$data = $connect->prepare($sql);
$data->execute();
$obj = $data->fetch(PDO::FETCH_OBJ);
?>
<form method="post">
    categoryCode: <input name="categoryCode" type="text" value="<?php echo $obj->categoryCode; ?>"><br><br />
    categoryName: <input type="text" name="categoryName" value="<?php echo $obj->categoryName; ?>"><br><br />
    <label>Description</label><br> <textarea rows="10" cols="50" name="Description"><?php echo $obj->description; ?></textarea><br><br />
    <input type='submit' name='submit' value="OK">
    <button>
        <a href="them sua xoa.php">Cancle</a>
    </button>
</form>
<?php
if ($_POST) {
    if (isset($_POST['submit'])) {
        $code = $_POST['categoryCode'];
        $name = $_POST['categoryName'];
        $description = $_POST['Description'];

        $sql = "UPDATE `categories` SET `categoryCode`='$code',`categoryName`='$name',`description`='$description' 
        WHERE categoryCode='$id'";

        $data = $connect->prepare($sql);
        $data->execute();
        header('location: them sua xoa.php');
    }
}
?>