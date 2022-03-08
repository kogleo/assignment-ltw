<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php while($row = mysqli_fetch_array($data["LogoTitle"])){?>
    <link rel="shortcut icon" href="<?php echo $row['content']?>">
    <?php
    }
    ?>
    <title>Mona company</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./public/css/admin.css" rel="stylesheet">
</head> 
<body>
    <div class="main">
        <div class="top-header">
            <a href="./AdminLogin/LogOut" class="top-header-content"><i class="bi bi-lock"></i> Đăng xuất</a>
        </div>
    
        <div class="sidebar-container">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-member-tab" data-bs-toggle="pill" data-bs-target="#v-pills-member" type="button" role="tab" aria-controls="v-pills-member" aria-selected="true">Quản lí thành viên</button>
                    <button class="nav-link " id="v-pills-comment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-comment" type="button" role="tab" aria-controls="v-pills-comment" aria-selected="false">Quản lí bình luận</button>

                    <button class="nav-link" id="v-pills-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-info" type="button" role="tab" aria-controls="v-pills-info" aria-selected="false">Quản lí thông tin liên hệ</button>
                    <button class="nav-link" id="v-pills-product-tab" data-bs-toggle="pill" data-bs-target="#v-pills-product" type="button" role="tab" aria-controls="v-pills-product" aria-selected="false">Quản lí sản phẩm</button>
                    <button class="nav-link" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="false">Quản lí bài viết</button>
                    <button class="nav-link" id="v-pills-material-tab" data-bs-toggle="pill" data-bs-target="#v-pills-material" type="button" role="tab" aria-controls="v-pills-material" aria-selected="false">Quản lí tài nguyên</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-member" role="tabpanel" aria-labelledby="v-pills-member-tab">
                        <div class="table-container container">
                            <h4 class="text-center" style="margin: 2%;">Danh sách thành viên</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tên người dùng</th>
                                            <th scope="col">Mật khẩu</th>
                                            <th scope="col">Họ và Tên</th>
                                            <th scope="col">Giới tính</th>
                                            <th scope="col">Ngày sinh</th>
                                            <th scope="col">Số điện thoại</th>
                                            <th scope="col">Mail</th>
                                            <th scope="col"></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php while($row = mysqli_fetch_array($data["getMember"])){?>
                                            <tr>
                                                <td><?php echo $row['username']?></td>
                                                <td><?php echo $row['password']?></td>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['gender']?></td>
                                                <td><?php echo $row['dob']?></td>
                                                <td><?php echo $row['phone']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td style="width: 10vw" class="d-flex">
                                                    <form action="./updateMember" method="POST">
                                                        <input type="text" value="<?php echo $row['username']; ?>" name="username" hidden>
                                                        <button type="submit" class="btn btn-outline-info btn-sm">Chỉnh sửa</button>
                                                    </form>
                                                    &nbsp;
                                                    <form method="post" style="display: inline">
                                                        <input type="text" value="<?php echo $row['username']; ?>" name ="username" hidden>
                                                        <button name="deleteMember" type="submit" class="btn btn-outline-danger btn-sm">Xóa</button>
                                                    </form>
                                                </td>  
                                            
                                            </tr>
                                        <?php }?>
                                      </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-outline-info"> <a href="./addMember"  class="link-primary" style="text-decoration: none">Thêm</a> </button>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade " id="v-pills-comment" role="tabpanel" aria-labelledby="v-pills-comment-tab">
                        <div class="table-container container">
                            <h4 class="text-center" style="margin: 2%;">Danh sách bình luận</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Người viết</th>
                                            <th scope="col">ID bài viết</th>
                                            <th scope="col">Nội dung</th>
                                            <th scope="col">Thời gian</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col"></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php while($row = mysqli_fetch_array($data["getComment"])){?>
                                            <tr>
                                                <td><?php echo $row['id']?></td>
                                                <td><?php echo $row['username']?></td>
                                                <td><?php echo $row['postId']?></td>
                                                <td><?php echo $row['content']?></td>
                                                <td><?php echo $row['time']?></td>
                                                <td><?php 
                                                        if ( $row['status'] != 0){echo 'Đã duyệt';} else {echo 'Chưa duyệt';};
                                                    ?>
                                                </td>
                                                <td>
                                                <form method="post">
                                                    <input type="text" value="<?php echo $row['id']; ?>" name ="id" hidden>
                                                    <button type="submit" name='acceptComment' class="btn btn-outline-info btn-sm"> Duyệt </button> 
                                                    <button type="submit" name='deleteComment' class="btn btn-outline-danger btn-sm"> Xóa </button> 
                                                </form> 
                                                </td>  
                                            
                                            </tr>
                                            <?php }?>
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">
                        <form class="container" method="post">
                            <h4 class="text-center" style="margin-top: 2%;">Thông tin liên hệ</h4>
                            <?php while($row = mysqli_fetch_array($data['Contacts'])) { ?>
                            <div class="infor-tab-box px-5">
                                <span class="details">Địa chỉ: </span>
                                <input type="text" id="address" name="address" placeholder="Nhập địa chỉ" class="form-control" value="<?php echo $row['address']?>" required>
                            </div>
                            <div class="infor-tab-box px-5">
                                <span class="details">Số điện thoại: </span>
                                <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại" class="form-control" value="<?php echo $row['phone']?>" required>
                            </div>
                            <div class="infor-tab-box px-5">
                                <span class="details">Mail:</span>
                                <input type="text" id="mail" name="mail" placeholder="Nhập email" class="form-control" value="<?php echo $row['mail']?>" required>
                            </div>
                            <div class="button-sub">
                                <button type="submit" name="contactsEdit" class="btn btn-outline-info">Chỉnh sửa</button>
                            </div>
                            <?php 
                                }
                            ?>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-product" role="tabpanel" aria-labelledby="v-pills-product-tab">
                        <div class="table-container list-product">
                            <h4 class="text-center" style="margin: 2%;">Danh sách sản phẩm</h4>
                            <div class="table-responsive" style="overflow: scroll; max-height: 400px">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col" style="width: 15%">Tên sản phẩm</th>
                                            <th scope="col" style="width: 10%">Số lượng</th>
                                            <th scope="col" style="width: 35%">Mô tả</th>
                                            <th scope="col" style="width: 5%">Giá</th>
                                            <th scope="col" style="width: 10%">Loại</th>
                                            <th scope="col" style="width: 12%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($data['Products'])) { ?>
                                        <tr>
                                            <td scope="col"><?php echo $row['id']?></td>
                                            <td scope="col"><?php echo $row['name']?></td>
                                            <td scope="col"><?php echo number_format($row['quantity'])?></td>
                                            <td scope="col"><?php echo $row['description']?></td>
                                            <td scope="col"><?php echo number_format($row['price'])?></td>
                                            <td scope="col"><?php echo $row['type']?></td>
                                            <td class="d-flex">
                                                <form action="./updateProduct" method="POST">
                                                    <input type="text" value="<?php echo $row['id']; ?>" name="id" hidden>
                                                    <button type="submit" class="btn btn-outline-info btn-sm">Chỉnh sửa</button>
                                                </form>
                                                &nbsp;
                                                <form method="POST">
                                                    <input type="text" value="<?php echo $row['id']; ?>" name ="id" hidden>
                                                    <button name="productDelete" type="submit" class="btn btn-outline-danger btn-sm">Xóa</button>
                                                </form>
                                            </td>  
                                        </tr>
                                        <?php 
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <form action="./addProduct" method="POST">
                                <button type="submit" class="btn btn-outline-info">Thêm</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">
                        <div class="table-container container">
                            <h4 class="text-center" style="margin: 2%;">Danh sách bài viết</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col" style="width: 30%">Tiêu đề</th>
                                            <th scope="col">Từ khóa</th>
                                            <th scope="col" style="width: 20%">Mô tả</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php while($row = mysqli_fetch_array($data['Posts'])) { ?>
                                            <tr>
                                                <td scope="col"><?php echo $row['id']?></td>
                                                <td scope="col"><?php echo $row['title']?></td>
                                                <td scope="col"><?php echo $row['SEOkey']?></td>
                                                <td scope="col"><?php echo $row['description']?></td>
                                                <td class="d-flex">
                                                    <form action="./updatePost" method="POST">
                                                        <input type="text" value="<?php echo $row['id']; ?>" name="id" hidden>
                                                        <button type="submit" class="btn btn-outline-info btn-sm">Chỉnh sửa</button>
                                                    </form>
                                                    &nbsp;
                                                    <form method="POST">
                                                        <input type="text" value="<?php echo $row['id']; ?>" name ="id" hidden>
                                                        <button name="postDelete" type="submit" class="btn btn-outline-danger btn-sm">Xóa</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                        </tbody>
                                </table>
                            </div>
                            <form action="./addPost" method="POST">
                                <button type="submit" class="btn btn-outline-info">Thêm</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-material" role="tabpanel" aria-labelledby="v-pills-material-tab">
                        <div class="table-container container">
                            <h4 class="text-center" style="margin: 2%;">Danh sách tài nguyên</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" tyle="width: 10%">ID</th>
                                            <th scope="col" style="width: 10%">Tên</th>
                                            <th scope="col" style="width: 15%">Loại tài nguyên</th>
                                            <th scope="col">Nội dung</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($row = mysqli_fetch_array($data["getResource"])){?>
                                            <tr>
                                                <td><?php echo $row['id']?></td>
                                                <td><?php echo $row['type']?></td>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['content']?></td>
                                               
                                                <td style="width: 10vw" class="d-flex">
                                                    <form action="./updateResource" method="POST">
                                                        <input type="text" value="<?php echo $row['id']; ?>" name="id" hidden>
                                                        <button type="submit" class="btn btn-outline-info btn-sm">Chỉnh sửa</button>
                                                    </form>
                                                    &nbsp;
                                                    <form method="post" style="display: inline-block">
                                                            <input type="text" value="<?php echo $row['id']; ?>" name ="id" hidden>
                                                            <button name="deleteResource" type="submit" class="btn btn-outline-danger btn-sm">Xóa</button>
                                                    </form>
                                                </td>  
                                            
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-outline-info"> <a href="./addResource"  class="link-primary" style="text-decoration: none">Thêm</a> </button>
                            
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>