<?php
include_once('connectCSDL.php');
?>
<form method="post">
    categoryCode: <input name="categoryCode" type="text"><br><br />
    categoryName: <input type="text" name="categoryName"><br><br />
    <label>Description</label><br> <textarea rows="10" cols="50" name="Description"></textarea><br><br />
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

        $sql = "INSERT INTO categories(categoryCode,categoryName,description) VALUES ('$code','$name','$description')";
        $data = $connect->prepare($sql);
        $data->execute();
        header('location: them sua xoa.php');
    }
}
?>