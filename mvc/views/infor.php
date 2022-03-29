<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/infor.css">
    <title>User profile</title>
    
</head>

<body>
    <div class="container">
    <a href="<?php echo BASE_URL ?>/home">Home</a>
        <div class="  head-infor-account">
            <h3> Thông tin tài khoản </h3>
        </div>

        <div class=" block-infor ">

            <div class="row justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 18 18">
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
                    <div class="col-7 ">
                        <input type="text" name="nameUser" class="form-control forrm" value="<?php echo $data['GN']['name'] ?>">
                    </div>
                </div>
                <div class="row row-infor ">
                    <div class="col-3 ">
                        <label class="lable">Company: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="Location" class="form-control forrm" value="<?php echo $data['GN']['company'] ?>">
                    </div>
                </div>
                <div class="row row-infor">
                    <div class="col-3 ">
                        <label class="lable">PhoneNumber: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="phoneNumber" class="form-control forrm" value="<?php echo $data['GN']['number'] ?>">
                    </div>
                </div>
                <div class="row row-infor">
                    <div class="col-3 ">
                        <label class="lable">Email: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="Emails" class="form-control forrm" value="<?php echo $data['GN']['email'] ?>">
                    </div>
                </div>
                <div class="row row-infor ">
                    <div class="col-3 ">
                        <label class="lable">User Name: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control forrm" value="<?php echo $data['GN']['username'] ?>">
                    </div>
                </div>
                <div class="row row-infor">
                    <div class="col-3">
                        <label class="lable">PassWord: </label>
                    </div>
                    <div class="col-7 ">

                        <input name="passwordUser" type="password" class="form-control inputclass formmk" name="password" required value="<?php echo $data['GN']['password'] ?>" readonly>
                    </div>
                    <div class="change-password " data-toggle="collapse" data-target="#password">Thay đổi</div>
                </div>

                <div id="password" class="collapse">
                    <div class="row row-infor">
                        <div class="col-3">
                            <label class="lable">Mật khẩu cũ: </label>
                        </div>
                        <div class="col-7 ">
                            <input name="oldPass" type="password" class="form-control formmk" placeholder="Nhập mật khẩu cũ">
                        </div>
                    </div>
                    <div class="row row-infor">
                        <div class="col-3">
                            <label class="lable">Mật khẩu mới: </label>
                        </div>
                        <div class="col-7 ">
                            <input name="newPass" type="password" class="form-control formmk" placeholder="Nhập mật khẩu mới từ 6 đến 32 kí tự">
                        </div>
                    </div>
                    <div class="row row-infor">
                        <div class="col-3">
                            <label class="lable">Nhập lại: </label>
                        </div>
                        <div class="col-7 ">
                            <input name="newPassConfirm" type="password" class="form-control formmk" placeholder="Nhập lại mật khẩu mới">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" name="saveuser" class="btn-update col-4 ">Cập nhật</button>
                </div>
            </form>
            <hr>

        </div>
    </div>
    <div class="update"></div>
    <!-- <script>
    $(document).ready(function() {
        $('.up').on('submit', function(e) {
            e.preventDefault();
            str = $(this).serialize();
            base = $('#base').val();
            $.post(base+'/mvc/controllers/updatePro.php',
                    $(this).serialize()
                )
                .done(function(data) {
                    $('.update').html(data)
                    $('#kqBook').modal('show')
                    setTimeout(function() {
                        location.reload();
                    },1000)
                });
        })
       
    });
</script> -->
</body>

</html>