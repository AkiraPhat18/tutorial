<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once "config.php";
        $id = (int) $_GET["id"];
        //var_dump($id);
        //sql to delete a record
        $sql = "SELECT *  FROM products WHERE id=".$id;

        $result = $conn->query($sql);

        $row = $result->fetch_assoc();

        //echo "<pre>";
        //print_r($row);
        //echo "</pre>";
    ?>

    <?php
        if (isset($_POST) && !empty($_POST) && isset($_POST["products_id"])){
            $errors = array();

            if (!isset($_POST["products_id"]) || empty($_POST["products_id"])){
                $errors[] = "ID sản phẩm ko hợp lệ ";
            }

            if (empty($errors)){
                $id = (int) $_POST["products_id"];

                $sqlDelete = "DELETE FROM products WHERE  id=$id";

                echo $sqlDelete;
                $result = $conn->query($sqlDelete);

                if ($result == true){
                    echo "<div class='alert alert-success'>Xóa sản phẩm thanh cong ! <a href='index.php'>Trang chủ</a></div>";
                }else {
                    echo "<div class='alert alert-danger'>Xóa sản phẩm thất bại!</div>";
                }
            }else{
                $errors_string = implode("<br>",$errors);
                echo "<div class='alert alert-danger'>$errors_string</div>";
            }
        }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Xóa sản phẩm</h1>
                <form name="delete" action="" method="post">
                    <input type="hidden" name="products_id" value="<?php echo $row["id"] ?>">

                    <div class="form-group">
                        <label>Tên sản phẩm: <?php echo  $row["product_title"] ?></label>
                    </div>

                    <button type="submit" class="btn btn-danger">xóa sản phẩm</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>