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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div id="main" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-box mt-5 mb-5">
                        <h2>Đăng nhập</h2>
                        <p class="mb-4">Chưa có tài khoản? <a href="signup">Đăng ký</a></p>
                        <form method="post">
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" name="username" value="<?php if (isset($_COOKIE["username"])) echo $_COOKIE["username"];?>" required>
                                <label for="username">Tên đăng nhập</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" name="password" value="<?php if (isset($_COOKIE["password"])) echo $_COOKIE["password"];?>" required>
                                <label for="password">Mật khẩu</label>
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" name="remember" <?php if (isset($_COOKIE["username"])) echo "checked"?>>
                                <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                            </div>
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-outline-danger" type="submit" name="submit">Đăng nhập</button>
                            </div>
                            <div class="mb-3">
                                <a class="link-dark" href="forgotPassword">Quên mật khẩu?</a>
                                <br>
                                <a class="link-dark" href="home">Quay về trang chủ</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>