<!--Content-->
<div class="main col-lg-12 py-3 mb-7 text-center d-flex align-items-center flex-column" id="intro-header" style="min-height: 180px;">
    <div class="text-light m-auto">
        <h5 class="fw-bold fs-3 fs-lg-5 fs-xl-4 mb-3 col-auto">GIỚI THIỆU</h5>
        <p class="fw-bold"><a class="link-light text-decoration-none fw-normal" href="./home">TRANG CHỦ</a> <span>/</span> GIỚI THIỆU</p>
    </div>
</div>
<div class="container" id="main">
    <div class="main row py-3 d-flex align-items-center" id="main-top">
        <div class="col-lg-4">
            <?php while($row = mysqli_fetch_array($data["Logo"])){?>
            <img class="rounded mx-auto d-block" src="<?php echo $row['content']?>" alt="">
            <?php
                }
            ?>
        </div>
        <div class="col-lg-8 col-md-12">
            <h3 class="fw-bold fs-5 fs-lg-4 fs-xl-3">Mona Media – Siêu thị uy tín, hàng chính hãng, giá rẻ !</h3>
            <p>Được thành lập vào năm 1999, Công ty Mona Media đi tiên phong trong hoạt động sản xuất mực in tương thích với thương hiệu Vmax. Mực in Vmax được thiết kế theo tiêu chuẩn của nhà sản xuất gốc (OEM), tính đồng bộ tuyệt đối giúp máy in vận
                hành ổn định và độ an toàn cao. Chất lượng sản phẩm và dịch vụ hoàn hảo đã giúp Mực in Vmax trở thành thương hiệu được ưa chuộng và vươn lên trở thành: Thương hiệu mực in tương thích số 1 tại Việt Nam (Theo thống kê của AC Nielsen
                tháng 11/2009).</p>
            <p>Hiện tại, để đem đến sự tiện lợi cho doanh nghiệp khi mua sắm tại Mona Media, chúng tôi còn cung cấp thiết bị, máy móc, đồ dùng văn phòng chính hãng và đã nhận được tin tưởng sử dụng sản phẩm từ hơn 6000 tập đoàn đa quốc gia và các doanh
                nghiệp trong nước. Quý khách có thể dễ dàng tìm thấy sản phẩm ưng ý: Máy in, Mực in chính hãng tất cả thương hiệu Canon, HP, Brother, Xerox,…, Mực in Vmax, Thiết bị văn phòng (Máy Scan, Photo, Laptop, Máy tính bàn, Máy tính tiền, Máy
                chấm công,…), Văn phòng phẩm và nhiều sản phẩm khác dành cho văn phòng với chi phí tiết kiệm hơn và tham gia nhiều chương trình khuyến mãi hấp dẫn.</p>
            <p>Việc mua hàng cũng trở nên dễ dàng và tiện lợi hơn với Vmax.vn vì chỉ cần 1 cú click chuột, sản phẩm đặt mua sẽ chuyển tới tận tay khách hàng với giá cực tốt, hỗ trợ lắp đặt, hướng dẫn sử dụng nhiệt tình từ đội ngũ kĩ thuật giàu kinh nghiệm
                của chúng tôi.</p>
        </div>
    </div>
    <div class="container main py-3" id="main-center">
        <div class="row">
            <div class="col-auto col-lg-12 justify-content-center text-center align-items-center justify-content-lg-between">
                <h1 class="fw-bold fs-3 fs-lg-2 fs-xl-1">LỢI ÍCH KHÁCH HÀNG</h1>
                <?php while($row = mysqli_fetch_array($data["Benefit"])){?>
                <p><?php echo $row['content']?></p>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container main py-3" id="main-bottom">
        <div class="row bg-holder">
            <div class="col-md-6" data-aos="zoom-in">
                <div class="d-flex align-items-start"><img class="me-4" src="./public/img/icon-1.png" alt="...">
                    <div class="flex-1">
                        <h3 class="fw-bold fs-5 fs-lg-4 fs-xl-3">Tiết kiệm chi phí</h3>
                        <?php while($row = mysqli_fetch_array($data["Saving"])){?>
                        <p><?php echo $row['content']?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start"><img class="me-4" src="./public/img/icon-2.png" alt="...">
                    <div class="flex-1">
                        <h3 class="fw-bold fs-5 fs-lg-4 fs-xl-3">Chất lượng quốc tế</h3>
                        <?php while($row = mysqli_fetch_array($data["Quality"])){?>
                        <p><?php echo $row['content']?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start"><img class="me-4" src="./public/img/icon-3.png" alt="...">
                    <div class="flex-1">
                        <h3 class="fw-bold fs-5 fs-lg-4 fs-xl-3">Chăm sóc khách hàng hoàn hảo</h3>
                        <?php while($row = mysqli_fetch_array($data["Care"])){?>
                        <p><?php echo $row['content']?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start"><img class="me-4" src="./public/img/icon-4.png" alt="...">
                    <div class="flex-1">
                        <h3 class="fw-bold fs-5 fs-lg-4 fs-xl-3">Bảo trì, sửa chữa miễn phí</h3>
                        <?php while($row = mysqli_fetch_array($data["Maintenance"])){?>
                        <p><?php echo $row['content']?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start"><img class="me-4" src="./public/img/icon-5.png" alt="...">
                    <div class="flex-1">
                        <h3 class="fw-bold fs-5 fs-lg-4 fs-xl-3">Dịch vụ bảo hành chu đáo</h3>
                        <?php while($row = mysqli_fetch_array($data["Warranty"])){?>
                        <p><?php echo $row['content']?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>