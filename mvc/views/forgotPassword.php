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
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div id="main" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-box mt-5 mb-5">
                        <h2>Quên mật khẩu</h2>
                        <p>Vui lòng nhập tên đăng nhập hoặc địa chỉ email. Bạn sẽ nhận được một liên kết tạo mật khẩu mới qua email.</p>
                        <form method="post">
                            <div class="mb-4 form-floating">
                                <input type="email" class="form-control" id="username" required>
                                <label for="username">Tên đăng nhập hoặc email</label>
                            </div>
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-outline-danger" type="submit" name="resetPassword">Đặt lại mật khẩu</button>
                            </div>
                            <div class="mb-3">
                                <a class="link-dark" href="login">Đăng nhập</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>