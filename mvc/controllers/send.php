<?php
require_once "../models/sms.php";
include "../core/DB.php";
$send = new sms();
if ($send->Send($_POST["s_id"], $_POST["s_message"])) {
    echo "<div id='kqBook' class='modal fade'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div style='background:	#FF421a; border-radius: 30px; padding: 50px; '>
                                <h2 style='text-align: center; color: #fff'>Gửi thành công.</h2>
                            </div>  
                        </div>
                    </div>";
} else {
    echo "<div id='kqBook' class='modal fade'>
                        <div class='modal-dialog modal-dialog-centered'>
                            <div style='background:	#D82828; border-radius: 30px; padding: 50px; '>
                                <h2 style='text-align: center; color: #fff'>Gửi thất bại</h2>
                                <p style='text-align: center; color: #fff'>Vui lòng kiểm tra lại SĐT hoặc là Token của bạn vì Twillio có thể thay đổi trong 24h </p>
                            </div>  
                        </div>
                    </div>";
}

