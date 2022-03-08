        <!--Footer-->
        <div class="footer">
            <div class="container-fluid jumbotron text-center business-info-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="row">
                                    <h3 class="business-info">THÔNG TIN HỮU ÍCH <br> CHO DOANH NGHIỆP</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="input-group form-register-padding">
                                    <input type="text" class="form-control" placeholder="Email..." aria-describedby="input-group-button-right">
                                    <button type="button" class="btn btn-success" id="input-group-button-right">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <h4 class="info">THÔNG TIN LIÊN HỆ</h4>
                            <?php while($row = mysqli_fetch_array($data["Contact"])){?>
                            <p><span class="fas fa-map-marker-alt"></span> <?php echo $row['address']?></p>
                            <p><span class="fas fa-phone-square-alt"></span> <?php echo $row['phone']?></p>
                            <p><span class="fas fa-envelope"></span>  <?php echo $row['mail']?></p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <h4 class="info">DANH MỤC</h4>
                            <div class="col-md-6">
                                <div class="row">
                                    <p>Mực in</p>
                                    <p>Nạp mực</p>
                                    <p>Máy văn phòng</p>
                                    <p>Giấy-Sổ-Bút</p>
                                    <p>Bìa-Kìm-Kẹp</p>
                                    <p>Dụng cụ khác</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <p>Mực in chính hãng</p>
                                    <p>Máy in</p>
                                    <p>Thiết bị công nghệ</p>
                                    <p>Phụ kiện máy tính</p>
                                    <p>Nhu yếu phẩm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <h4 class="info">SẢN PHẨM BÁN CHẠY</h4>
                            <div class="row">
                            <img src="http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/dung-cu-khac-4-300x300.jpg" class="top-product-1" alt="Not found">
                            <img src="http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/dung-cu-khac-3-300x300.jpg" class="top-product-1" alt="Not found">
                            <img src="http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/dung-cu-khac-2-300x300.jpg" class="top-product-1" alt="Not found">
                            </div>
                            <div class="row">
                            <img src="http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/dung-cu-khac-1-300x300.jpg" class="top-product-2" alt="Not found">
                            <img src="http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/nhu-yeu-pham-4-300x300.jpg" class="top-product-2" alt="Not found">
                            <img src="http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/nhu-yeu-pham-3-300x300.jpg" class="top-product-2" alt="Not found">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <h4 class="info">HÌNH THỨC THANH TOÁN</h4>
                            <div class="row">
                                <img src="http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/Cash-icon.png" class="payment" alt="Not found">
                                <img src="http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/if_bank_transfer.png" class="payment" alt="Not found">
                                <img src="http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/paypal.png" class="payment" alt="Not found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>