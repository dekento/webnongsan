<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa nhân viên</title>
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
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $sodienthoai = $_POST['sodienthoai'];
    $matkhau = $_POST['matkhau'];
    $luong = $_POST['luong'];
?>


<div class="container" style="width: 600px">
    <h2>Sửa thông tin sản phẩm</h2>
    <form action="edit-nv.php" method="POST">
        <div class="form-group" hidden>
            <label for="id">Id:</label>
            <input type="text" class="form-control" id="id" placeholder="Nhập tên" name="id" value="<?=$id?>">
        </div>
        <div class="form-group">
            <label for="ten">Tên:</label>
            <input type="text" class="form-control" id="ten" placeholder="Nhập tên" name="ten" value="<?=$ten?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Nhập email" name="email" value="<?=$email?>">
        </div>
        <div class="form-group">
            <label for="sodienthoai">Số điện thoại:</label>
            <input type="text" class="form-control" id="sodienthoai" placeholder="Nhập số điện thoại" name="sodienthoai" value="<?=$sodienthoai?>">
        </div>
        <div class="form-group">
            <label for="matkhau">Mật khẩu:</label>
            <input type="text" class="form-control" id="matkhau" placeholder="Nhập mật khẩu" name="matkhau" value="<?=$matkhau?>">
        </div>
        <div class="form-group">
            <label for="luong">Lương:</label>
            <input type="text" class="form-control" id="luong" placeholder="Nhập lương" name="luong" value="<?=$luong?>">
        </div>
        <a href="../admin.php"><button type="button" class="btn btn-default">Trở về</button></a>
        <button type="submit" id="editBtn" class="btn btn-primary">Edit</button>
    </form>

    <br>
</div>

</body>
</html>