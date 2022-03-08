 <!--Content-->
 <div class="main col-lg-12 py-3 mb-7 text-center d-flex align-items-center flex-column" id="intro-header" style="min-height: 180px;">
    <div class="text-light m-auto">
        <h5 class="fw-bold fs-3 fs-lg-5 fs-xl-4 mb-3 col-auto">LIÊN HỆ</h5>
        <p class="fw-bold"><a class="link-light text-decoration-none fw-normal" href="./home">TRANG CHỦ</a> <span>/</span> LIÊN HỆ</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form>
                <!-- Vertical -->
                <div class="form-group">
                    <input class="form-control" placeholder="Họ và tên">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Số điện thoại">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Địa chỉ">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Lời nhắn"></textarea>
                </div>
                <div class="col-md-12 text-center margin-contact-register-button">
                    <button type="submit" class="btn btn-success">Đăng ký</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <?php while($row = mysqli_fetch_array($data["contact"])){?>
            <h4 class="contact-info-font">THÔNG TIN LIÊN HỆ</h4>
            <p><span class="fas fa-map-marker-alt"></span> <?php echo $row['address']?></p>
            <p><span class="fas fa-phone-square-alt"></span> <?php echo $row['phone']?></p>
            <p><span class="fas fa-envelope"></span> <?php echo $row['mail']?></p>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924.886128813392!2d106.65760374521682!3d10.770608561503689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee98946d601%3A0xb3eba90e385e4dea!2zTMO9IFRoxrDhu51uZyBLaeG7h3QsIHBoxrDhu51uZyAxNSwgUXXhuq1uIDExLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1633855216238!5m2!1svi!2s" style="width: 100%; height: 450px" allowfullscreen="" loading="lazy"></iframe>            
        </div>
    </div>
</div>