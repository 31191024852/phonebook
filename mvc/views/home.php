<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width"/>

    <title>Hello Group 2 AWS</title>
    
    
    <link rel="icon" href="<?php echo BASE_URL ?>/public/img/logo.png">


    <style>

        body{
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 14px;
            align-items: center !important;
            
        }

        .main{
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
        
        .logo{
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            font-weight: bold;
            font-size: 500%;
            font-family: 'Palette Mosaic';
            left: 5%;
            color: #FF421A;
            -webkit-text-stroke: 1px black;
        }
        
        a:visited{
            color: #FF421A !important;
            font-weight: bold;
        }
        a:hover{
            color: #ff921a !important;
            text-decoration: none;
        }
        nav-link{
            color: #FF421A !important;
        }
        

    </style>

    <!--     Fonts     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Palette Mosaic' rel='stylesheet'>

</head>

<body>
    <div class="container-fluid">
        <div class="main">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
                <div class="container">
                <a href="<?php echo BASE_URL ?>/home">
                    <img class="navbar-brand" src="<?php echo BASE_URL ?>/public/img/logo.png" style="width:60px; float:left;">
                </a>
                
                <div class="nav justify-content-end topnav" >
                        <a class="nav-link" href="<?php echo BASE_URL ?>/home">Trang Chủ</a>
                        <a class="nav-link" href="<?php echo BASE_URL ?>/book">Danh Bạ</a>
                        <a class="nav-link" href="<?php echo BASE_URL ?>/infor">Tài Khoản</a>
                        <?php
                            if(isset($_SESSION['ID'])){
                            echo "<a  class= 'btn btn-primary' style='background-color:#fff' href='" . BASE_URL . "/logout'>Đăng xuất</a>";
                            }
                            else{
                            echo "<a class='btn btn-primary btn-login' style='background-color:#fff'  href='" . BASE_URL . "/login'>Sign in / Login</a>"; 
                            }
                        ?>
                </div>
                </div>
                
            </nav>
            
            <div>
                
                <h1 class="logo">
                 HELLO GROUP 2 AWS
                </h1>
        
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
