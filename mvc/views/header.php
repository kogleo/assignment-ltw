<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <title>Mona Company</title>
        <?php while($row = mysqli_fetch_array($data["LogoTitle"])){?>
        <link rel="shortcut icon" href="<?php echo $row['content']?>">
        <?php
        }
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <link href="./public/css/style.css" rel="stylesheet">
        <script src="./public/js/script.js"></script>
    </head>
    <body>
        <!--Header-->
        <div class="top-header">
            <?php
                if (isset($_SESSION["username"])) { ?>
                    <a href="./account" class="top-header-content"><i class="bi bi-person-fill"></i>Tài khoản của tôi</a>
                    &nbsp; &nbsp; &nbsp;
                    <a href="./login/LogOut" class="top-header-content"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a>
            <?php
                } else { ?>
                    <a href="./login" class="top-header-content"><i class="bi bi-person-fill"></i>Tài khoản của tôi</a>
                    &nbsp; &nbsp; &nbsp;
                    <a href="./login" class="top-header-content"><i class="bi bi-lock"></i> Đăng nhập</a>
            <?php
                }
            ?>
            
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <?php while($row = mysqli_fetch_array($data["LogoBrand"])){?>
                <a class="navbar-brand" href="./home" style="align-items: center;"><img src="<?php echo $row['content']?>" style="width: 18%;"></a>
                <?php
                }?>
                <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between navbar-right" id="navbarSupportedContent">
                <ul class="navbar-nav m-lg-auto  mb-2 mb-lg-0 nav-left">
                    <li class="nav-item">
                        <a class="nav-link" href="./home">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./intro">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./news">Tin tức</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./contact">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./cart">Giỏ hàng <i class="bi bi-cart2"></i></a>
                    </li>
                </ul>
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm..." name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-outline-success" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: -0.5%; padding-bottom: 0;">
            <div class="container-fluid" style="background-color: antiquewhite;">
                <a class="navbar-brand">Danh mục</a>
                <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#danhmuc" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between navbar-right" id="danhmuc">
                <ul class="navbar-nav m-lg-auto  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./printingInk">Mực in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./printer">Máy in</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./officeMachine">Máy văn phòng</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./technologyEquipment">Thiết bị công nghệ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./accessories">Phụ kiện văn phòng</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>