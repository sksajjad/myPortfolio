
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use function Laravel\Prompts\alert;

// Terminal Prompt - Run: composer require phpmailer/phpmailer
require '../../vendor/autoload.php'; // Include Composer autoloader

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $from = $_POST['email'];
    $to = "sksajjad344@gmail.com";
    $subject = $_POST['subject'];
    $massage = $_POST['msg'];

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sksajjad344@gmail.com';  // Your Gmail address
        $mail->Password   = 'irgbiaejzyhyercb';    // App password, not Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('sksajjad344@gmail.com', $name);
        $mail->addAddress('sksajjad250@gmail.com'); // To your Gmail

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "Name: {$name}<br>Email: {$from}<br><br>Massage: <br>{$massage}";

        $mail->send();
        echo '<script>alert("Massage Sent Successfully. Go back.")</script>';
    } catch (Exception $e) {
        echo '<script>alert("Error! Could not be done.")</script>';
    }
} else {
    echo "Invalid request.";
}
