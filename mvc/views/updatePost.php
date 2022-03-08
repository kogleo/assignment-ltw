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
            <h6 class="text-center" style="margin-top: 2%;">Thông tin bài viết</h6>
            <?php while($row = mysqli_fetch_array($data['PostId'])) { ?>
            <div class="infor-tab-box px-5">
                <span class="details">ID: </span>
                <input type="text" id="id" name="id" value="<?php echo $row['id']?>" readonly class="form-control">
            </div>
            <div class="infor-tab-box px-5">
                <span class="details">Tiêu đề: </span>
                <input type="text" id="title" name="title" placeholder="Nhập tiêu đề" value="<?php echo $row['title']?>" required class="form-control">
            </div>
            <div class="infor-tab-box px-5">
                <span class="details">Từ khóa:</span>
                <input type="text" id="SEOkey" name="SEOkey" placeholder="Nhập từ khóa" value="<?php echo $row['SEOkey']?>" required class="form-control">
            </div>
            <div class="infor-tab-box px-5">
                <span class="details">Mô tả:</span>
                <input type="text" id="description" name="description" placeholder="Nhập mô tả" value="<?php echo $row['description']?>" required class="form-control">
            </div>
            <div class="infor-tab-box px-5">
                <span class="details">Nội dung:</span>
                <input type="text" id="content" name="content" placeholder="Nhập nội dung" value="<?php echo htmlentities($row['content'])?>" required class="form-control">
            </div>
            <div class="infor-tab-box px-5">
                <span class="details">Hình ảnh:</span>
                <input type="text" id="image" name="image" placeholder="Nhập hình ảnh" value="<?php echo htmlentities($row['image'])?>" required class="form-control">
            </div>
            <div class="button-sub">
                <button class="btn btn-outline-success" type="submit" name="postUpdate">Chỉnh sửa</button>
            </div>
            <?php 
                }
            ?>
        </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>