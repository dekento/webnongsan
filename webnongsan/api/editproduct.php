<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<style>
    body{
        padding-top: 50px;
    }
    table{

        text-align: center;
    }
    tr.item{
        border-top: 1px solid #5e5e5e;
        border-bottom: 1px solid #5e5e5e;
    }

    tr.item:hover{
        background-color: #d9edf7;
    }

    tr.item td{
        min-width: 150px;
    }

    tr.header{
        font-weight: bold;
    }

    a{
        text-decoration: none;
    }
    a:hover{
        color: deeppink;
        font-weight: bold;
    }
</style>


<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $description = $_POST['description'];
?>


<div class="container" style="width: 600px">
    <h2>Sửa thông tin sản phẩm</h2>
    <form action="edit-sp.php" method="POST">
        <div class="form-group" hidden>
            <label for="id">Id:</label>
            <input type="text" class="form-control" id="id" placeholder="Nhập tên" name="id" value="<?=$id?>">
        </div>
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm" name="name" value="<?=$name?>">
        </div>
        <div class="form-group">
            <label for="image">Link:</label>
            <input type="text" class="form-control" id="image" placeholder="Nhập link hình ảnh" name="image" value="<?=$image?>">
        </div>
        <div class="form-group">
            <label for="price">Giá:</label>
            <input type="text" class="form-control" id="price" placeholder="Nhập giá sản phẩm" name="price" value="<?=$price?>">
        </div>
        <div class="form-group">
            <label for="description">Mô tả:</label>
            <textarea rows="4" cols="50" type="text" class="form-control" id="description" placeholder="Nhập mô tả sản phẩm" name="description" value="<?=$description?>"><?=$description?></textarea>
        </div>
        <a href="../product.php"><button type="button" class="btn btn-default">Trở về</button></a>
        <button type="submit" id="editBtn" class="btn btn-primary">Edit</button>
    </form>

    <br>
</div>

</body>
</html>