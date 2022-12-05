<?php
    require_once ('connection.php');

    if (!isset($_POST['name']) || !isset($_POST['image']) || !isset($_POST['price'])  || !isset($_POST['description'])) {
        die(json_encode(array('status' => false, 'data' => 'Parameters not valid')));
    }

    $name = $_POST['name'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = 'INSERT INTO sanpham(name,image,price,description) VALUES(?,?,?,?)';

    try{
        $stmt = $dbCon->prepare($sql);
        $stmt->execute(array($name,$image,$price,$description));
        header('location: ../product.php');
        echo json_encode(array('status' => true, 'data' => 'Thêm sản phẩm thành công'));
    }
    catch(PDOException $ex){
        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    }

?>