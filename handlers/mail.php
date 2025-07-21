<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv -> load();

$MAIL_USERNAME = $_ENV['MAIL_USERNAME'];
$MAIL_PASSWORD = $_ENV['MAIL_PASSWORD'];
$MAIL_SERVER   = $_ENV['MAIL_SERVER'];
$MAIL_PORT     = $_ENV['MAIL_PORT'];

if ($_SERVER["REQUEST_METHOD"]=== "POST"){
    $email = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"] ?? ''));

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<div class="error">Invalid email address.</div>';
        exit;
    }

    if(strlen($message)< 10){
        echo '<div class="error">Message is too short.</div>';
        exit;
    }

    $mail = new PHPMailer(true);
    try{
        $mail -> isSMTP();
        $mail -> Host = $MAIL_SERVER;
        $mail -> SMTPAuth = true;
        $mail -> Username = $MAIL_USERNAME;
        $mail -> Password = $MAIL_PASSWORD;
        $mail -> SMTPSecure = 'tls';
        $mail -> Port = $MAIL_PORT;

        $mail -> setFrom($MAIL_USERNAME, 'trasha.dev');
        $mail -> addAddress($MAIL_USERNAME);
        $mail -> addReplyTo($email);

        $mail -> isHTML(false);
        $mail -> Subject = 'New mail from trasha.dev!';
        $mail -> Body = "FROM: $email\n\nMessage:\n$message";

        $mail -> send();
        echo '<div class="success">Thank you! Your message was sent successfully!</div>'; 
    } catch (Exception $e){
        error_log('Mailer error: ' . $mail -> ErrorInfo);
        echo '<div class="error">Mailer error:' . htmlspecialchars($mail -> ErrorInfo) . '</div>';
    }
} else {
    http_response_code(405);
    echo '<div class="error">Invalid request method</div>';
}