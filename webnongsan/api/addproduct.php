<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
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


<div class="container" style="width: 600px">
    <h2 style="color:blue">THÊM SẢN PHẨM</h2>
    <form action="add-sp.php" method="POST">
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" id="name" placeholder="Tên sản phẩm:" name="name">
        </div>
        <div class="form-group">
            <label for="image">Link:</label>
            <input type="text" class="form-control" id="image" placeholder="Link hình ảnh" name="image">
        </div>
        <div class="form-group">
            <label for="price">Giá:</label>
            <input type="text" class="form-control" id="price" placeholder="Giá sản phẩm" name="price">
        </div>
        <div class="form-group">
            <label for="description">Mô tả:</label>
            <textarea type="text" class="form-control" id="description" placeholder="Mô tả sản phẩm" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>

    <br>
</div>


</body>
</html>