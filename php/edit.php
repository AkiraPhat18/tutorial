<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
include_once "config.php";

$id = (int) $_GET["id"];
//var_dump($id);

$sqlSelect = "SELECT * FROM products WHERE id=".$id;

$result = $conn->query($sqlSelect);

$row = $result->fetch_assoc();
//echo "<pre>";
//print_r($row);
//echo "</pre>";
?>

<?php

if (isset($_POST) && !empty($_POST) && isset($_POST["product_id"])){
    $errors = array();

    if (!isset($_POST["product_title"]) || empty($_POST["product_title"])){
        $errors[] = "Tên sản phẩm ko hợp lệ";
    }
    if (!isset($_POST["product_desc"])||empty($_POST["product_desc"])){
        $errors[] = "Mô tả sản phẩm ko hợp lệ";
    }
    if (!isset($_POST["created"])||empty($_POST["created"])){
        $errors[] = "Thời gian tạo sản phẩm ko hợp lệ";
    }

    if ( !isset($_POST["price"]) || empty($_POST["price"]) ){
        $errors[] = "Giá sản phẩm ko hợp lệ";
    }
    if ( !isset($_POST["quantity"]) || empty($_POST["quantity"]) ){
        $errors[] = "Số lượng sản phẩm ko hợp lệ";
    }
    if ( !isset($_POST["status"])  ){
        $errors[] = "Trạng thái sản phẩm ko hợp lệ";
    }

    if (empty($errors)){
        $id = (int) $_POST["product_id"];
        $product_title = $_POST["product_title"];
        $product_desc = $_POST["product_desc"];
        $created = $_POST["created"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $status = $_POST["status"];

        $sqlUpdate = "Update products set product_title='$product_title',
product_desc='$product_desc',
price='$price',quantity='$quantity',status='$status' WHERE  id=$id";
        echo $sqlUpdate;
        $result = $conn->query($sqlUpdate);

        if ($result == true) {
            echo "<div class='alert alert-success'>
Sửa sản phẩm thành công ! <a href='index.php'>Trang chủ</a>
</div>";
        } else {
            echo "<div class='alert alert-danger'>
Sua sản phẩm thất bại !
</div>";
        }
    }else{
        /**
         * Chuyển mảng $errors thành chuỗi = hàm implode()
         */
        $errors_string = implode("<br>", $errors);
        echo "<div class='alert alert-danger'>$errors_string</div>";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa sản phẩm </h1>
            <form name="edit" action="" method="post">
                <input type="hidden" name="product_id" value="<?php echo $row["id"] ?>">

                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="product_title" class="form-control"
                           value="<?php echo $row["product_title"] ?>">
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea name="product_desc" class="form-control" id="" cols="3" rows="4"><?php echo $row["product_desc"] ?></textarea>

                </div>
                <div class="form-group">
                    <label>Thời gian nhập</label>
                    <input type="date" name="created" class="form-control"
                           value="<?php echo $row["created"] ?>">
                </div>
                <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="text" name="price" class="form-control"
                           value="<?php echo $row["price"] ?>">
                </div>
                <div class="form-group">
                    <label>Số lượng sản phẩm</label>
                    <input type="text" name="quantity" class="form-control"
                           value="<?php echo $row["quantity"] ?>">
                </div>
                <div class="form-group">
                    <label>Trạng thái</label>
                    <input type="radio" name="status" class="form-control" value="1"/> Xuất bản
                    <input type="radio" name="status" class="form-control" value="0"/> Không xuất bản
                </div>

                <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
