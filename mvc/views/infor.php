<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Palette Mosaic' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/infor.css">
    <title>User profile</title>
    <link rel="icon" href="<?php echo BASE_URL ?>/public/img/logo.png">

    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 14px;
            align-items: center !important;

        }

        .main {
            background-image: url('./public/img/a.jpg');
            background-position: center;
            background-size: cover;
            height: auto;
            left: 0;
            min-height: 100%;
            min-width: 100%;
            position: absolute;
            top: 0;
            width: auto;
        }

        a:visited {
            color: #FF421A !important;
            font-weight: bold;
        }

        a:hover {
            color: #ff921a !important;
            text-decoration: none;
        }

        label {
            color: #FFf !important;
            font-weight: bold;
            font-size: 16px;
        }

        .field-icon {
            float: right;
            padding-right: 25px;
            margin-left: -20px;
            margin-top: -25px;
            position: relative;
            z-index: 2;
        }
        nav-link{
            color: #FF421A !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="main">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
                <div class="container">
                    <a href="<?php echo BASE_URL ?>/home">
                        <img class="navbar-brand" src="<?php echo BASE_URL ?>/public/img/logo.png" style="width:60px; float:left;">
                    </a>

                    <div class="nav justify-content-end topnav">
                        <a class="nav-link" href="<?php echo BASE_URL ?>/home">Trang Chủ</a>
                        <a class="nav-link" href="<?php echo BASE_URL ?>/book">Danh Bạ</a>
                        <a class="nav-link" href="<?php echo BASE_URL ?>/infor">Tài Khoản</a>
                        <?php
                        if (isset($_SESSION['ID'])) {
                            echo "<a  class= 'btn btn-primary' style='background-color:#fff' href='" . BASE_URL . "/logout'>Đăng xuất</a>";
                        } else {
                            echo "<a class='btn btn-primary btn-login' style='background-color:#fff'  href='" . BASE_URL . "/login'>Sign in / Login</a>";
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <a href="<?php echo BASE_URL ?>/home">Home</a>
            <div class="  head-infor-account">
                <h3> Thông tin tài khoản </h3>
            </div>

            <div class=" block-infor ">

                <div class="row justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person-circle" viewBox="0 0 18 18">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                    </svg>
                </div>

                <hr>
                <form action="" method="POST" class="up" enctype="multipart/form-data">
                    <div class="row row-infor">
                        <div class="col-3">
                            <label class="lable">Name: </label>
                        </div>
                        <div class="col-6 ">
                            <input type="text" name="nameU" class="form-control forrm" value="<?php echo $data['GN']['name'] ?>">
                        </div>
                    </div>
                    <div class="row row-infor ">
                        <div class="col-3 ">
                            <label class="lable">Company: </label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="Location" class="form-control forrm" value="<?php echo $data['GN']['company'] ?>">
                        </div>
                    </div>
                    <div class="row row-infor">
                        <div class="col-3 ">
                            <label class="lable">PhoneNumber: </label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="phoneNumber" class="form-control forrm" value="<?php echo $data['GN']['number'] ?>">
                        </div>
                    </div>
                    <div class="row row-infor">
                        <div class="col-3 ">
                            <label class="lable">Email: </label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="Emails" class="form-control forrm" value="<?php echo $data['GN']['email'] ?>">
                        </div>
                    </div>
                    <div class="row row-infor ">
                        <div class="col-3 ">
                            <label class="lable">User Name: </label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="nameUser" class="form-control forrm" value="<?php echo $data['GN']['username'] ?>">
                        </div>
                    </div>
                    <div class="row row-infor">
                        <div class="col-3">
                            <label class="lable">PassWord: </label>
                        </div>
                        <div class="col-6 ">

                            <input name="passwordUser" type="password" class="form-control inputclass formmk" name="password" required value="<?php echo md5($data['GN']['password']) ?>" readonly>
                        </div>
                        <div class="change-password col-2" data-bs-toggle="collapse" data-bs-target="#password" style="font-weight: bold;">
                        <div class="igochange">Thay đổi</div></div>
                    </div>

                    <div id="password" class="collapse">
                        <div class="row row-infor">
                            <div class="col-3">
                                <label class="lable">Mật khẩu cũ: </label>
                            </div>
                            <div class="col-6 ">
                                <input name="oldPass" type="password" class="form-control formmk" placeholder="Nhập mật khẩu cũ">
                            </div>
                        </div>
                        <div class="row row-infor">
                            <div class="col-3">
                                <label class="lable">Mật khẩu mới: </label>
                            </div>
                            <div class="col-6 ">
                                <input name="newPass" type="password" class="form-control formmk" placeholder="Nhập mật khẩu mới từ 6 đến 32 kí tự">
                            </div>
                        </div>
                        <div class="row row-infor">
                            <div class="col-3">
                                <label class="lable">Nhập lại: </label>
                            </div>
                            <div class="col-6">
                                <input name="newPassConfirm" type="password" class="form-control formmk" placeholder="Nhập lại mật khẩu mới">
                            </div>
                        </div>
                    </div>

                    <div class="row row-infor ">
                        <div class="col-3 ">
                            <label class="lable">SID: </label>
                        </div>
                        <div class="col-6">
                            <input id="SID" name="SID" type="password" class="form-control forrm" value="<?php echo $data['GN']['SID'] ?>">
                            <span toggle="#SID" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                    </div>
                    <div class="row row-infor ">
                        <div class="col-3 ">
                            <label class="lable">Token: </label>
                        </div>
                        <div class="col-6">
                            <input id="token" name="token" type="password" class="form-control forrm" value="<?php echo $data['GN']['token'] ?>">
                            <span toggle="#token" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" name="saveuser" class="btn-update col-4 ">Cập nhật</button>
                    </div>
                </form>
                <hr>

            </div>
        </div>
    </div>

    <div class="update"></div>
</body>
<script>
    $(document).ready(function() {
        $('.up').on('submit', function(e) {
            e.preventDefault();
            str = $(this).serialize();
            $.post('./mvc/controllers/updatePro.php',
                    $(this).serialize()
                )
                .done(function(data) {
                    $('.update').html(data);
                    $('#kqBook').modal('show')
                    setTimeout(function() {
                        location.reload();
                    }, 2000)
                });
        })

        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

    });
</script>


</html>