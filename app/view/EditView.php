<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Đây là Chức năng sửa Động Vật</h3>
    <a href="./">Về trang chính</a>
    <?php
    ?>
    <form action="" method="post">
        <label for="">Tên Động Vật</label> <br>
        <input type="text" name="edit-name" value="<?php echo $update->name ?>"><br>
        <button name="edit">sửa</button><br>
    </form>
</body>

</html>