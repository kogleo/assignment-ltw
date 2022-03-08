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
                        <h2>Chỉnh sửa thành viên</h2>
                        <br>
                        <form class="row g-3 needs-validation infoForm" action="./updateMember" method="POST" novalidate >
                        <?php while($row = mysqli_fetch_array($data['Member'])) { ?>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Tên người dùng</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="username" placeholder="" required value="<?php echo $row['username'] ?>" disabled>
                                    <input type="hidden" value="<?php echo $row['username'] ?>" name="username">
                                    <div class="invalid-feedback">
                                        Tên người dùng không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Họ và tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name"  id="name" placeholder="" required value="<?php echo $row['name'] ?>">
                                    <div class="invalid-feedback">
                                        Họ và tên không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="phone">Mail</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="mail"  id="email" placeholder="" required  value="<?php echo $row['email'] ?>">
                                    <div class="invalid-feedback">
                                        Mail không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Mật khẩu</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password"  id="name" placeholder="" required  value="<?php echo $row['password'] ?>">
                                    <div class="invalid-feedback">
                                        Mật khẩu không hợp lệ
                                    </div>
                                </div>
                            </div>
                           
                           
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="phone">Số điện thoại</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="phone"  id="phone" placeholder="" required  value="<?php echo $row['phone'] ?>">
                                    <div class="invalid-feedback">
                                        Số điện thoại không hợp lệ
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="phone">Link ảnh đại diện</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="avatar"  id="phone" placeholder="" required  value="<?php echo $row['avatar'] ?>">
                                    <div class="invalid-feedback">
                                        Link không hợp lệ
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 mb-4 form-floating">
                                <input type="date" class="form-control" id="dob" name="dob"  placeholder="" required value="<?php echo $row['dob'] ?>">
                                <label class="form-label" for="dob">Ngày sinh</label>
                                <div class="invalid-feedback">
                                    Ngày sinh không hợp lệ!
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4 form-floating">
                                <select class="form-select" id="gender" name="gender" required >
                                        <option selected value="<?php if ($row['gender']==='Nam') {echo 'Nam';} else {echo "Nữ";} ?>">
                                        <?php if ($row['gender']==='Nam') {echo 'Nam';} else {echo "Nữ";} ?></option>
                                        <option value="<?php if ($row['gender']==='Nam') {echo 'Nữ';} else {echo "Nam";} ?>">
                                        <?php if ($row['gender']==='Nam') {echo 'Nữ';} else {echo "Nam";} ?></option>
                                    </select>
                                <label class="form-label" for="gender">Giới tính</label>
                                <div class="invalid-feedback">
                                    Vui lòng chọn giới tính!
                                </div>
                            </div>
                            
                                            
                            <?php 
                                }
                            ?>
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-outline-danger" type="submit" id="signup"  name="MemberUpdate">Xác nhận</button>
                                <a class="btn btn-outline-danger" href="./admin" type="submit" id="signup"  name="update">Trở về</a>
                            </div>
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