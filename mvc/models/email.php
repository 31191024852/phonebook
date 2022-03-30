<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// If necessary, modify the path in the require statement below to refer to the
// location of your Composer autoload.php file.
require './vendor/autoload.php';

class email extends DB
{
    public function sendEmail($id_send, $subject, $message)
    {
        $qr = "SELECT `email` FROM `tbl_friends` WHERE `id`= " . $id_send;
        $result = mysqli_query($this->con, $qr);
        if ($result->num_rows) {
            $data = mysqli_fetch_assoc($result);
            // Replace sender@example.com with your "From" address.
            // This address must be verified with Amazon SES.
            $sender = 'lienhe@phonebookgr2.tech';
            $senderName = 'PhoneBookGr2';

            // Replace recipient@example.com with a "To" address. If your account
            // is still in the sandbox, this address must be verified.
            $recipient = $data['email'];

            // Replace smtp_username with your Amazon SES SMTP user name.
            $usernameSmtp = 'AKIAW3IDSPYE55I5WEMA';

            // Replace smtp_password with your Amazon SES SMTP password.
            $passwordSmtp = 'BGaUgbO9JGCgZzv7ZpdC9rk6m4cpwmWm09IXZJtcr6jw';

            // Specify a configuration set. If you do not want to use a configuration
            // set, comment or remove the next line.
            //$configurationSet = 'ConfigSet';

            // If you're using Amazon SES in a region other than US West (Oregon),
            // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
            // endpoint in the appropriate region.
            $host = 'email-smtp.ap-southeast-1.amazonaws.com';
            $port = 587;


            // The plain-text body of the email
            $bodyText =  $message;

            // The HTML-formatted body of the email
            $bodyHtml = file_get_contents('./public/template/index.html');

            $mail = new PHPMailer(true);

            try {
                // Specify the SMTP settings.
                $mail->isSMTP();
                $mail->setFrom($sender, $senderName);
                $mail->Username   = $usernameSmtp;
                $mail->Password   = $passwordSmtp;
                $mail->Host       = $host;
                $mail->Port       = $port;
                $mail->SMTPAuth   = true;
                $mail->SMTPSecure = 'tls';
                //  $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

                // Specify the message recipients.
                $mail->addAddress($recipient);
                // You can also add CC, BCC, and additional To recipients here.

                // Specify the content of the message.
                $mail->isHTML(true);
                $mail->Subject    = $subject;
                $mail->Body       = $bodyHtml;
                $mail->AltBody    = $bodyText;
                $mail->Send();
                return true;
            } catch (Exception $e) {
                return $e;
            }
        }else{
            return false;
        }
    }
}
