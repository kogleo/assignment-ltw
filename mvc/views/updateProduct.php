<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mona Company</title>
    <?php while($row = mysqli_fetch_array($data["LogoTitle"])){?>
    <link rel="shortcut icon" href="<?php echo $row['content']?>">
    <?php
    }
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./public/css/admin.css" rel="stylesheet">
</head> 
<body>
        <form class="container" method="post">
            <h6 class="text-center" style="margin-top: 2%;">Thông tin sản phẩm</h6>
            <?php while($row = mysqli_fetch_array($data['ProductId'])) { ?>
            <div class="infor-tab-box px-5">
                <span class="details">ID: </span>
                <input type="text" id="id" name="id" value="<?php echo $row['id']?>" readonly class="form-control">
            </div>
            <div class="infor-tab-box px-5">
                <span class="details">Tên sản phẩm: </span>
                <input type="text" id="name" name="name" placeholder="Nhập tên sản phẩm" value="<?php echo $row['name']?>" required class="form-control">
            </div>
            <div class="infor-tab-box px-5">
                <span class="details">Số lượng:</span>
                <input type="text" id="quantity" name="quantity" placeholder="Nhập số lượng" value="<?php echo $row['quantity']?>" required class="form-control">
            </div>
            <div class="infor-tab-box px-5">
                <span class="details">Mô tả:</span>
                <input type="text" id="description" name="description" placeholder="Nhập mô tả" value="<?php echo $row['description']?>" required class="form-control">
            </div>
            <div class="infor-tab-box px-5">
                <span class="details">Giá:</span>
                <input type="text" id="price" name="price" placeholder="Nhập giá" value="<?php echo $row['price']?>" required class="form-control">
            </div>
            <div class="infor-tab-box px-5">
                <span class="details">Loại:</span>
                <input type="text" id="type" name="type" placeholder="Nhập loại" value="<?php echo $row['type']?>" required class="form-control">
            </div>
            <div class="infor-tab-box px-5">
                <span class="details">Hình ảnh:</span>
                <input type="text" id="image" name="image" placeholder="Nhập link hình ảnh" value="<?php echo $row['image']?>" required class="form-control">
            </div>
            <div class="button-sub">
                <button type="submit" name="postUpdate" class="btn btn-outline-success">Chỉnh sửa</button>
            </div>
            <?php 
                }
            ?>
        </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>