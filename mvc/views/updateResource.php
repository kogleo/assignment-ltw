<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="./public/css/member.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div id="main" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-box mt-5 mb-5">
                        <h2>Chỉnh sửa tài nguyên</h2>
                        <br>
                        <form class="row g-3 needs-validation infoForm" action="./updateResource" method="POST" novalidate >
                        <?php while($row = mysqli_fetch_array($data['PostId'])) { ?>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Loại tài nguyên</label>
                                <div class="col-sm-9">
                                    <input type="hidden" class="form-control" name="id" placeholder="" value="<?php echo $row['id'] ?>">
                                    <input type="text" class="form-control" name="type"  id="type" placeholder="" required value="<?php echo $row['type'] ?>">
                                    <div class="invalid-feedback">
                                        Kiểu không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="phone">Tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name"  id="name" placeholder="" required  value="<?php echo $row['name'] ?>">
                                    <div class="invalid-feedback">
                                        Tên không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Nội dung</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="content"  id="content" placeholder="" required  value="<?php echo $row['content'] ?>">
                                    <div class="invalid-feedback">
                                        Nội dung không hợp lệ
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-outline-danger" type="submit" id="signup"  name="resourceUpdate">Xác nhận</button>
                                <a class="btn btn-outline-danger" href="./admin" type="submit" id="signup" name="update" >Trở về</a>
                            </div>
                            <?php 
                                }
                            ?>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js "></script>
    <script src="./public/js/member.js"></script>
</body>
</html>