<!--Content-->
<div class="container" style="margin-bottom: 5%;">
    <div class="row">
        <div class="col-md-12 text-center" style="padding: 1%;">
            <h4>THIẾT BỊ CÔNG NGHỆ</h4>
        </div>
    </div>
    <div class="row">
        <aside class="col-md-3 side">
            <form method="post" action="" class="input-group">
                <div class="form-outline">
                    <input type="search" name="technologyEquipmentSearchInput" class="form-control px-2" placeholder="Tìm kiếm..." value="<?php if (isset($_POST["technologyEquipmentSearch"])) echo $data['Search']?>"/>
                </div>
                <button type="submit" class="btn btn-success" name="technologyEquipmentSearch">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <h5 style="margin-top: 5%;">DANH MỤC</h5>
            <nav>
                <div class="row">
                    <div class="border-end bg-white" id="sidebar-wrapper">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./printingInk">Mực in</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./printer">Máy in</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./officeMachine">Máy văn phòng</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./technologyEquipment">Thiết bị công nghệ</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="./accessories">Phụ kiện văn phòng</a>
                        </div>
                    </div>
                </div>
            </nav>
        </aside>
        <div class="col-md-9 col-sm-12">
            <div class="row">
                <?php if (isset($_POST["technologyEquipmentSearch"]) && $_POST["technologyEquipmentSearchInput"] != ''){?>
                    <p>Có <?php echo $data["TechnologyEquipment"]->num_rows?> kết quả phù hợp với tìm kiếm</p>
                <?php 
                    }
                ?> 
            <?php
                while($row = mysqli_fetch_array($data["TechnologyEquipment"])) { ?>
                    <div class="card col-sm-4 col-md-3">
                        <img class="card-img-top" src="<?php echo $row["image"]?>" alt="Image" style="width:60%; margin-left: 30%;">
                        <div class="card-body">
                            <p class="card-text text-center">
                                <?php echo $row["name"]?>
                                <br>
                                <span style="color: red">
                                <?php echo number_format($row["price"]) . " VNĐ"?>
                                </span>
                                <form method="post" class="text-center">
                                    <input type="hidden" name="addToCart" value="<?php echo $row['id']?>">
                                    <button type="submit" class="btn btn-success btn-sm">Thêm vào giỏ</button>
                                </form>
                            </p>
                        </div>
                    </div>
            <?php 
                }
            ?>
            </div>
        </div>
    </div>
</div>