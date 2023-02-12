
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,tr,td{
        text-align: center;
    }
    h3{
        text-align: center;
    }
</style>
<body>
    <h3>Đây là chức năng Show sản phẩm</h3>
    <table border="1" style="border-collapse: collapse; width: 50%; height: 50%;margin-left: 25%;">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        
        <?php foreach($show as $item){ ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->name?></td>
            <td>
                <button onclick="location.href='./sua&id=<?= $item->id ?>'">Sửa</button>
                <button onclick="if(confirm('Bạn Có Muốn Xóa khummm >?')){location.href='./xoa&id=<?= $item->id ?>'}">Xóa</button>
                <button onclick="location.href='./them'">Thêm</button>
            </td>
            
        </tr>
        <?php }?>

    </table>
</body>
</html>