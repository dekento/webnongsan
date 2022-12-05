<?php
    require_once ('connection.php');
    if (!isset($_POST['id']) || !isset($_POST['name']) || !isset($_POST['image']) || !isset($_POST['price']) || !isset($_POST['description'])) {
        die(json_encode(array('status' => false, 'data' => 'Parameters not valid')));

    }
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = 'UPDATE sanpham SET name = ?, image = ?, price = ?, description = ? where id = ?';

    try{
        $stmt = $dbCon->prepare($sql);
        $stmt->execute(array($name,$image,$price,$description, $id));
        header("location:../product.php");
    }
    catch(PDOException $ex){
        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    }
?>