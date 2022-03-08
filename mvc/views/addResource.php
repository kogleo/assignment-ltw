<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mona Company</title>
    <link rel="shortcut icon" href="http://mauweb.monamedia.net/vmax/wp-content/uploads/2019/05/Mona-designstyle-colors-m.png">
    <link rel="stylesheet" href="./public/css/member.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div id="main" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-box mt-5 mb-5">
                        <h2>Thêm tài nguyên</h2>
                        <br>
                        <form class="row g-3 needs-validation infoForm" action="./addResource" method="POST" novalidate >
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Loại tài nguyên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="type"  id="type" placeholder="" required value="">
                                    <div class="invalid-feedback">
                                        Kiểu không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="phone">Tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name"  id="name" placeholder="" required  value="">
                                    <div class="invalid-feedback">
                                        Tên không hợp lệ!
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row ">
                                <label class="form-label col-sm-3" for="name">Nội dung</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="content"  id="content" placeholder="" required  value="">
                                    <div class="invalid-feedback">
                                        Nội dung không hợp lệ
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 d-grid gap-2">
                                <button class="btn btn-outline-danger" type="submit" id="signup"  name="addResource">Xác nhận</button>
                                <a class="btn btn-outline-danger" href="./admin" type="submit" id="signup" name="add" >Trở về</a>
                            </div>
                        </form>
                        
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js "></script>
    <script src="./public/js/member.js"></script>
</body>
</html>