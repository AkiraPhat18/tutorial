<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    //nạp file kết nối cơ sở dữ liệu
    include_once "config.php";

    $sqlSelect = "SELECT * FROM products";

    $result = $conn->query($sqlSelect);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Liệt kê danh sách các sản phẩm</h1>
                <h1>
                    <a href="create.php" class="btn btn-success">Thêm mới sản phẩm</a>
                </h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên </th>
                            <th>Mô tả</th>
                            <th>Thời gian tạo</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Trạng thái</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row["id"]?></td>
                            <td><?php echo $row["product_title"]?></td>
                            <td><?php echo $row["product_desc"]?></td>
                            <td><?php echo $row["created"]?></td>
                            <td><?php echo $row["price"]?></td>
                            <td><?php echo $row["quantity"]?></td>
                            <td><?php echo $row["status"]?></td>
                            <td>
                                <p><a href="edit.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">Sửa sản phẩm</a> </p>
                            </td>
                            <td>
                                <p><a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Xóa sản phẩm</a> </p>
                            </td>
                        </tr>
                        <?php
                        }
                    }else{
                        echo "Ko tồn tại sản phẩm nào";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
