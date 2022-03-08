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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div id="main" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-box mt-5 mb-5">
                        <h2>Đăng ký</h2>
                        <p class="mb-4">Đã có tài khoản? <a href="login">Đăng nhập</a></p>
                        <form class="row g-3 needs-validation" method="post" novalidate>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="name" name="name" required maxlength="30">
                                <label class="form-label" for="name">Họ và tên</label>
                                <div class="invalid-feedback">
                                    Họ và tên không hợp lệ!
                                </div>
                            </div>
                            <div class="col-lg-8 mb-4 form-floating">
                                <input type="date" class="form-control" id="dob" name="dob" required>
                                <label class="form-label" for="dob">Ngày sinh</label>
                                <div class="invalid-feedback">
                                    Ngày sinh không hợp lệ!
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4 form-floating">
                                <select class="form-select" id="gender" name="gender" required>
                                        <option selected disabled value="" label="Nam/Nữ"></option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
                                <label class="form-label" for="gender">Giới tính</label>
                                <div class="invalid-feedback">
                                    Vui lòng chọn giới tính!
                                </div>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="email" class="form-control" id="email"  name="email" required maxlength="50">
                                <label class="form-label" for="email">Email</label>
                                <div class="invalid-feedback">
                                    Email không hợp lệ!
                                </div>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="tel" name="phone" required pattern="(\+84|0)\d{9}">
                                <label class="form-label" for="tel">Số điện thoại</label>
                                <div class="invalid-feedback">
                                    Số điện thoại không hợp lệ!
                                </div>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control" id="username" name="username" required maxlength="20">
                                <label class="form-label" for="username">Tên đăng nhập</label>
                                <div class="invalid-feedback">
                                    Tên đăng nhập không hợp lệ!
                                </div>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="password" name="password" required maxlength="20">
                                <label class="form-label" for="password">Mật khẩu</label>
                                <div class="invalid-feedback">
                                    Mật khẩu không hợp lệ!
                                </div>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="rePassword" placeholder="" name="rePassword" required>
                                <label class="form-label" for="rePassword">Nhập lại mật khẩu</label>
                                <div class="invalid-feedback" id="error">
                                    Mật khẩu không chính xác!
                                </div>
                                <div id="error">

                                </div>
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="accept" name="accept" required>
                                <label class="form-check-label" for="accept">Tôi đồng ý với các <a href="#">chính sách bảo mật</a> và <a href="#">điều khoản dịch vụ</a></label>
                                <div class="invalid-feedback">
                                    Phải đồng ý trước ghi đăng ký!
                                </div>
                            </div>
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-outline-danger" type="submit" id="signup" name="signup">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/script.js"></script>
</body>

</html>