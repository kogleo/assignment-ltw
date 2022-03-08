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
        <?php
            while($row = mysqli_fetch_array($data["post"])) { ?>
            <div class="row centent_new" style="padding: 2%">
                <div class="header_news">
                    <h2><?php echo $row["title"]?></h2>
                </div>
                <div class="main_news">
                    <?php echo $row["content"]?>
                </div>
            </div>
        <?php
            }
        ?>
            <div class="comment">
                <h5>Ý kiến (<label id="total_cmt"><?php echo mysqli_num_rows($data["comments"])?></label>)</h5>
            </div>
            <form method="post">
                <div class="text_cmt purple-border" >
                    <textarea placeholder="Ý kiến của bạn" class="form-control" name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-success btn-sm" style="margin-top: 1%">Gửi bình luận</button>
            <form>
            <div class="all_cmt">
                <?php
                while($row = mysqli_fetch_array($data["comments"])) { ?>
                <div class="item_cmt">
                    <div class="ava_cmt">
                        <img src="<?php echo $row['avatar']?>" width="25px">
                    </div>
                    <div class="time_cmt">
                        <p><?php echo $row['time']?></p>
                    </div>
                    <div class="user_name">
                        <h6><?php echo $row['username']?></h6>
                    </div>
                    <div class="cont_cmt">
                        <h6><?php echo $row['content']?></h6>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>