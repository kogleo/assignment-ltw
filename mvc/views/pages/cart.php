<!--Content-->
<div class="container">
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">Chọn ảnh</button> -->

    <div class="row">
        <div class="col-md-8" style="margin-top: 0.05em">
            <div class="row cart_head">
                <div class="col-md-5 col-6">
                    <input type="checkbox" id="checkAll" onclick="checkAll()">
                    <p style="display: inline-block">TẤT CẢ</p>
                </div>
                <div class="col-md-3 text-center unit-price">
                    ĐƠN GIÁ
                </div>
                <div class="col-md-3 col-4 col-sm-4 text-center">
                    SỐ LƯỢNG
                </div>
                <div class="col-md-1 col-2">
                    <form method="post">
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="text-align: left;">Xóa sản phẩm</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p>Bạn muốn xóa tất cả sản phẩm?</p>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-secondary btn-sm" value="Xóa" name="deleteAll">
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Đóng</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" style="background: none; color: inherit; border: none; padding: 0;
                                                        font: inherit; cursor: pointer; outline: inherit;"
                                            data-bs-toggle="modal" data-bs-target="#myModal">
                            <img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/trash.svg"/>
                            </button>
                        </div>
                    </form> 
                </div>
            </div>
            <div style="overflow: auto;  max-height: 400px;  width: 100%;">
            <?php
                while($row = mysqli_fetch_array($data["Product"])) {?>
                <div class="row cart_content">
                    <div class="col-md-5 col-6 image_name">
                        <input type="checkbox"  class="check" onclick="check()">
                        <a href="#">
                            <img src="<?php echo $row["image"]?>" class="unit-price" />
                        </a>
                        <span class="name_product_cart"><?php echo $row["name"]?></span>
                    </div>
                    <div class="col-md-3 col-3 text-center center_text unit-price">
                        <span class="price_cart"><?php echo number_format($row["price"])?></span> <span style="font-size: small;">VNĐ</span>
                    </div>
                    <div class="col-md-3 col-4 text-center center_text" style="width: 14%">
                        <?php if ($row["quantity"] != 1) {?>
                            <form method="post">
                            <div class="input-group text-center input-group-sm" style="width: 100%;">
                                <input type="hidden" name="productId" value="<?php echo $row["id"]?>">
                                <div class="input-group-prepend">
                                    <input type="hidden" value="<?php echo $row["quantity"]?>" name="quantityMinus" style="width: 30%" class="text-center" readonly/>
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" name="minus">
                                    <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                    <input class="form-control quantity" type="tel" value="<?php echo $row["quantity"]?>" name="quantityPlus" style="width: 1px; text-align: center;" class="text-center quantity" readonly/>
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" name="plus">
                                    <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            </form>
                        <?php
                        } else {
                        ?>
                            <form method="post">
                            <div class="input-group text-center input-group-sm" style="width: 100%;">
                                <input type="hidden" name="productId" value="<?php echo $row["id"]?>">
                                <div class="input-group-prepend">
                                    <input type="hidden" value="<?php echo $row["quantity"]?>" style="width: 1px; text-align: center;" class="text-center" readonly/>
                                    <button class="btn btn-outline-secondary btn-sm" type="button" name="minus" 
                                        data-bs-toggle="modal" data-bs-target="#id<?php echo $row['id']?>">
                                    <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                    <input type="tel" class="form-control quantity" value="<?php echo $row["quantity"]?>" name="quantityPlus" style="width: 1px; text-align: center;" class="text-center quantity" readonly/>
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" name="plus">
                                    <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            </form>
                        <?php 
                        }
                        ?>
                        
                    </div>
                    <div class="col-md-1 col-2 center_text">
                        <form method="post">
                            <div class="modal" id="id<?php echo $row['id']?>">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title" style="text-align: left;">Xóa sản phẩm</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Bạn muốn xóa sản phẩm này?</p>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <input type="hidden" value="<?php echo $row['id']?>" name="delete">
                                            <button type="submit" class="btn btn-secondary btn-sm">Xóa</button>
                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Đóng</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center ">
                                <button type="button" style="background: none; color: inherit; border: none; padding: 0;
                                                        font: inherit; cursor: pointer; outline: inherit;"
                                                        data-bs-toggle="modal" data-bs-target="#id<?php echo $row['id']?>">
                                <img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/trash.svg" />
                                </button>
                            </div>
                        </form> 
                    </div>
                </div>
            <?php 
            }
            ?>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <form action="./printingInk">
                    <button type="submit" class="btn btn-outline-success">← Tiếp tục xem sản phẩm</button>
                    </form> 
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
            <br>
        </div>
        
        <div class="col-md-4" style="margin-top: 0.05em; padding-left: 2%">
            <div class="row cart_head">
                <div class="col-md-12 ">
                    <p style="margin-top: 9px">TỔNG SỐ LƯỢNG</p>
                </div>
            </div>
            <div class="row">
                <p>Phiếu ưu đãi</p>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Mã ưu đãi">
                    <button type="button" class="btn btn-outline-secondary">Áp dụng</button>
                </div>
            </div>
            <br>
            <div class="row" style="margin-bottom: -5%;">
                <p>Tạm tính: <span id="temp">0</span> VNĐ</p>
                <p>Giảm giá: 0 VNĐ</p>
                <p>Tổng: <span id="totalPrice">0</span> VNĐ</p>
            </div>
            <hr>
            <div class="text-center">
                <button type="button" class="btn btn-outline-success">Tiến hành thanh toán</button>
            </div>
            <br>
    </div>
    </div>
</div>