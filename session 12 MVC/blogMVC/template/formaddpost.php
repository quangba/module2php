<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add Post</h1>
    <!-- tạo acction = doadd để chuyển trang qua doadd -->
    <form action="?action=doAdd" method="post">            
        title of Post:<br>
        <input type="text" name="title" size="58"><br>
        content of Post:<br>
        <textarea name="content" cols="60" rows="5"></textarea><br>
        Url Thumbnail<br>
        <input type="text" name="url_thumbnail" size="58"><br>
        tag: <br>
        <input type="text" name="tag" size="58"><br>
        <input type="submit" name="ok" value="add">

    </form>
</body>
</html>