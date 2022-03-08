<!--Content-->
<div style="background-color: rgb(99, 39, 120);">
    <div class="container bg-white">
        <div class="row">
            <?php $row = mysqli_fetch_array($data["Account"]);?>
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" style="width: 150px;" src="<?php echo $row["avatar"]; ?>" alt="Image">
                    <span class="font-weight-bold"><?php echo $row["username"]; ?></span>
                    <span class="text-black-50"><?php echo $row["email"]; ?></span>
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">Chọn ảnh</button>
                </div>
                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Cập nhật ảnh đại diện</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <form method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="file" name="avatar">
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-secondary btn-sm" value="Cập nhật" name="changeAvatar">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Đóng</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Hồ sơ của tôi</h4>
                    </div>
                    <form method="post">
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Họ và tên</label><input type="text" class="form-control" placeholder="Họ và tên" value="<?php echo $row["name"]; ?>" name="name"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Ngày sinh</label><input type="date" class="form-control" value="<?php echo $row["dob"]; ?>" name="dob"></div>
                        <div class="col-md-12">
                            <label class="labels">Giới tính</label>
                            <select class="form-control" name="gender">
                                <?php if ($row["gender"] == "Nam") { ?>
                                        <option selected="selected" value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                <?php
                                    } else { ?>
                                        <option value="Nam">Nam</option>
                                        <option selected="selected" value="Nữ">Nữ</option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text" class="form-control" placeholder="Số điện thoại" value="<?php echo $row["phone"]; ?>" name="phone"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="Email" value="<?php echo $row["email"]; ?>" name="email"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="sumbit" name="updateInfo">Lưu thay đổi</button></div>
                    <form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Thay đổi mật khẩu</span></div><br>
                    <div class="col-md-12"><label class="labels">Mật khẩu cũ</label><input type="text" class="form-control" placeholder="Mật khẩu cũ" value="<?php echo $row["password"]; ?>" disabled></div> <br>
                    <div class="col-md-12"><label class="labels">Nhập mật khẩu mới</label><input type="password" class="form-control" placeholder="Mật khẩu mới" value="" name="password"></div> <br>
                    <div class="col-md-12"><label class="labels">Nhập lại mật khẩu mới</label><input type="password" class="form-control" placeholder="Nhập lại mật khẩu mới" value="" name="rePassword"></div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="changePassword">Đổi mật khẩu</button></div>
                </div>
            </div>
        </div>
    </div>
</div>