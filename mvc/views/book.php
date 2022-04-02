<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Phone book</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="icon" href="<?php echo BASE_URL ?>/public/img/logo.png">
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 14px;
            align-items: center !important;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }

        .custom-checkbox label:before {
            width: 18px;
            height: 18px;
        }

        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }

        .custom-checkbox input[type="checkbox"]:checked+label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            border-color: #fff;
        }

        .custom-checkbox input[type="checkbox"]:disabled+label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
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

        a>nav {
            color: #FF421A !important;
            font-weight: bold;
        }

        .form-sms {
            font-size: 15px;
            display: inline;
        }

        .br {
            margin-top: 20px !important;
        }

        .modal-body {
            padding: 10px 30px !important;
        }

        .modal-header {
            background-color: #212529 !important;
            color: #fff !important;
        }

        .modal-content {
            border: none !important;
            border-radius: 5px !important;
        }
        nav-link{
            color: #FF421A !important;
        }
    </style>
    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
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

            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title bg-dark">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Phone <b>Book</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addContactModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Contact</span></a>
                                    <a href="#emailContactModal2" class="btn btn-info email2" data-toggle="modal"><i class="material-icons">&#xe158;</i> <span>Send Email All</span></a>
                                </div>
                            </div>
                        </div>
                        <table id="data_table" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th hidden>Id</th>
                                    <th>Name</th>
                                    <th>Company Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th style="width:fit-content">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['contacts'] as $contact) {
                                    echo '<tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                            </td>
                            <td class="fid" hidden>' . $contact['id'] . '</td>
                            <td class="fname">' . $contact['name'] . '</td>
                            <td class="fcname">' . $contact['company_name'] . '</td>
                            <td class="fnumber">' . $contact['number'] . '</td>
                            <td class="femail">' . $contact['email'] . '</td>
                            <td class="faddress">' . $contact['address'] . '</td>
                            <td>
                                <a href="#editContactModal" class="edit" name="e_' . $contact['id'] . '" id="e_' . $contact['id'] . '" class="editbtn" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deleteContactModal" class="delete" name="d_' . $contact['id'] . '" id="d_' . $contact['id'] . '"data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                <a href="#smsContactModal" class="sms" name="m_' . $contact['id'] . '" id="m_' . $contact['id'] . '"data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Message">&#xe0c9;</i></a>
                                <a href="#emailContactModal" class="email" name="a_' . $contact['id'] . '" id="a_' . $contact['id'] . '"data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Email">&#xe158;</i></a>
                            </td>
                        </tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- add Modal HTML -->
            <div id="addContactModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" id="add_form">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Contact</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" id="name" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input name="companyname" id="companyname" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input name="number" id="number" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" id="email" type="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address" id="address" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" name="add" id="add" class="btn btn-success" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Edit Modal HTML -->
            <div id="editContactModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" id="edit_form">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Contact</h4>
                                <button type="button" class="btn-close" data-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group" hidden>
                                    <input type="text" id="e_id" name="e_id" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" id="e_name" name="e_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" id="e_companyname" name="e_companyname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="text" id="e_number" name="e_number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" id="e_email" name="e_email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" id="e_address" name="e_address" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" name="save" id="save" class="btn btn-info" value="save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Delete Modal HTML -->
            <div id="deleteContactModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Contact</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <?php
                                if (isset($_SESSION)) {
                                    echo '<input type="text" id="d_id" name="delete_id" class="form-control" hidden>';
                                }
                                ?>

                                <p>Are you sure you want to delete these Contacts?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- SMS modal -->
            <div class="modal fade" id="smsContactModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" id="smsContactForm">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">SMS</h4>
                                <button type="button" class="btn-close" data-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <p>
                                    Send your message in the form below by SMS.
                                </p>
                                <div class="form-group" hidden>
                                    <input type="text" id="s_id" name="s_id" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Name: </label>
                                    <h5 id="s_name" name="s_name" class="form-sms"></h5>
                                </div>
                                <div class="form-group br">
                                    <label>Company Name: </label>
                                    <h5 id="s_companyname" name="s_companyname" class="form-sms"></h5>
                                </div>
                                <div class="form-group br">
                                    <label>Mobile: </label>
                                    <h5 type="text" id="s_number" name="s_number" class="form-sms"></h5>
                                </div>
                                <div class="form-group br">
                                    <label>Email: </label>
                                    <h5 type="email" id="s_email" name="s_email" class="form-sms"></h5>
                                </div>
                                <div class="form-group br">
                                    <label>Address: </label>
                                    <h5 class="form-sms" id="s_address" name="s_address"></h5>
                                </div>
                                <div class="form-group br">
                                    <label>Message: </label>
                                    <textarea class="form-control" id="s_message" name="s_message"></textarea>
                                </div>

                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Email Modal -->
            <div id="emailContactModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Contact Us</h4>
                            <button type="button" class="btn-close" data-dismiss="modal"></button>
                            
                        </div>
                        <div class="modal-body">
                            <form role="form" method="post" id="reused_form">
                                <p>
                                    Send your message in the form below and we will get back to you as early as possible.
                                </p>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="g_id" name="g_id" hidden />
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        Name:</label>
                                    <h5 type="text" class="form-sms" id="g_name" name="g_name" required maxlength="50"></h5>

                                </div>
                                <div class="form-group br">
                                    <label for="email">
                                        Email:</label>
                                    <h5 type="email" class="form-sms" id="g_email" name="g_email" required maxlength="50"></h5>
                                </div>
                                <div class="form-group br">
                                    <label for="email">
                                        Subject:</label>
                                    <input type="text" class="form-sms" id="g_subject" name="g_subject" required maxlength="50">
                                </div>
                                <div class="form-group br">
                                    <label for="name">
                                        Message:</label>
                                    <textarea class="form-control" type="textarea" name="g_message" id="g_message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                                </div>

                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success btn-block" id="btnContactUs">Post It! →</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>
            <!-- All Email -->
            <div id="emailContactModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Contact Us</h4>
                            <button type="button" class="btn-close" data-dismiss="modal"></button>
                            
                        </div>
                        <div class="modal-body">
                            <form role="form" method="post" id="reused_form">
                                <p>
                                    Send your message in the form below and we will get back to you as early as possible.
                                </p>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="g_id" name="g_id" hidden />
                                </div>
                                <div class="form-group">
                                    <label for="name">
                                        Name:</label>
                                    <h5 type="text" class="form-sms" id="g_name" name="g_name" required maxlength="50"></h5>

                                </div>
                                <div class="form-group br">
                                    <label for="email">
                                        Email:</label>
                                    <h5 type="email" class="form-sms" id="g_email" name="g_email" required maxlength="50"></h5>
                                </div>
                                <div class="form-group br">
                                    <label for="email">
                                        Subject:</label>
                                    <input type="text" class="form-sms" id="g_subject" name="g_subject" required maxlength="50">
                                </div>
                                <div class="form-group br">
                                    <label for="name">
                                        Message:</label>
                                    <textarea class="form-control" type="textarea" name="g_message" id="g_message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                                </div>

                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success btn-block" id="btnContactUs">Post It! →</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="update">
        <?php
        if (isset($_GET['send'])) {
            if ($_GET['send'] == 'done') {
                echo "<div id='kqBook' class='modal fade'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div style='background:	#FF421a; border-radius: 30px; padding: 50px; '>
                                <h2 style='text-align: center; color: #fff'>Gửi thành công.</h2>
                            </div>  
                        </div>
                    </div>";
            } else if ($_GET['send'] == 'fail') {
                echo "<div id='kqBook' class='modal fade'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div style='background:	#D82828; border-radius: 30px; padding: 50px; '>
                                <h2 style='text-align: center; color: #fff'>Gửi thất bại</h2>
                                <p style='text-align: center; color: #fff'>Vui lòng kiểm tra lại SĐT hoặc là Token của bạn vì Twillio có thể thay đổi trong 24h </p>
                            </div>  
                        </div>
                    </div>";
            }
        }
        ?>
    </div>
</body>
<script>
    $(document).ready(function() {
        $(document).on('click', '.edit', function() {
            var currentTD = $(this).parents('tr').find('td');
            //popup
            $('#e_id').val(currentTD.parent().find('.fid').text());
            $('#e_name').val(currentTD.parent().find('.fname').text());
            $('#e_companyname').val(currentTD.parent().find('.fcname').text());
            $('#e_number').val(currentTD.parent().find('.fnumber').text());
            $('#e_email').val(currentTD.parent().find('.femail').text());
            $('#e_address').val(currentTD.parent().find('.faddress').text());

        });
        $(document).on('click', '.delete', function() {
            var currentTD = $(this).parents('tr').find('td');
            $('#d_id').val(currentTD.parent().find('.fid').text())
        });

        $(document).on('click', '.sms', function() {
            var currentTD = $(this).parents('tr').find('td');
            $('#s_id').val(currentTD.parent().find('.fid').text());
            $('#s_name').text(currentTD.parent().find('.fname').text());
            $('#s_companyname').text(currentTD.parent().find('.fcname').text());
            $('#s_number').text(currentTD.parent().find('.fnumber').text());
            $('#s_email').text(currentTD.parent().find('.femail').text());
            $('#s_address').text(currentTD.parent().find('.faddress').text());
        })

        $(document).on('click', '.email', function() {
            var currentTD = $(this).parents('tr').find('td');
            $('#g_id').val(currentTD.parent().find('.fid').text());
            $('#g_name').text(currentTD.parent().find('.fname').text());
            $('#g_email').text(currentTD.parent().find('.femail').text());
        })

        $(document).on('click', '.email2', function(){
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            var a=[]
            checkbox.each(function() {
                if(this.checked==true) {
                    a.push($(this).parent().find('.fid').val());
                }
            })
            alert(a)
        })

        $('#kqBook').modal('show')


    });
</script>

</html>