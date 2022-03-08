<!--Content-->
<div class="container" style="margin-bottom: 5%; margin-top:1%">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Tin tức</h3>
        </div>
    </div>
    <div class="row">
        <aside class="col-md-3 side">
            <div class="input-group">
                <div class="form-outline">
                    <input type="search" class="form-control px-2" placeholder="Tìm kiếm..."/>
                </div>
                <button type="button" class="btn btn-success">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <h5 style="margin-top: 5%;">BÀI VIẾT MỚI</h5>
            <nav>
                <div class="row">
                    <div class="border-end bg-white" id="sidebar-wrapper">
                        <div class="list-group list-group-flush">
                        <?php
                            while($row = mysqli_fetch_array($data["titles"])) {?>
                            <form action="./detailnews" method="post">
                                <input type="hidden" name="postId" value="<?php echo $row['id']?>">
                                <button class="btn-link list-group-item-action list-group-item list-group-item-light p-2" type="submit"><?php echo $row['title']?></button>
                            </form>
                        <?php 
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </nav>
        </aside>
        <div class="col-md-9 col-sm-12">
            <div class="row">
                <?php
                while($row = mysqli_fetch_array($data["posts"])) {?>
                <div class="card col-sm-4 col-6" style="padding: 0;">
                    <img class="card-img-top" src="<?php echo $row['image']?>" alt="Image" style="width:100%">
                    <div class="card-body">
                        <div class="card-text text-center">
                            <form action="./detailnews" method="post">
                                <input type="hidden" name="postId" value="<?php echo $row['id']?>">
                                <button class="btn-link" type="submit"><?php echo $row['title']?></button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php 
                }
                ?>
            </div>
        </div>
    </div>
</div>