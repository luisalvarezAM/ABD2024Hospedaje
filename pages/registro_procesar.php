<?php
require  'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abd2024Hospedaje";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$usertype = $_POST['usertype'];
$password =md5($_POST['password']) ;// Encriptar la contraseña con bcrypt
$registration_date = $_POST['registration_date'];

// Generar código de activación único
$activation_code = md5(uniqid(rand(), true));

$sql = "INSERT INTO usuarios (username, email, usertype, password, registration_date, activation_code) VALUES ('$username', '$email', '$usertype', '$password', '$registration_date', '$activation_code')";

if ($conn->query($sql) === TRUE) {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'alvarezmayoralluisantonio@gmail.com';
    $mail->Password = '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('alvarezmayoralluisantonio@gmail.com', 'Hotel Luxury Puerto Vallarta');
    $mail->addAddress($email, $username);

    $mail->isHTML(true);
    $mail->Subject = 'Activación de Cuenta';
    $mail->Body = '¡Gracias por registrarte! Por favor, haz clic en el siguiente enlace para activar tu cuenta: <a href="localhost/ABD2024A/pages/activar_cuenta.php?code=' . $activation_code . '">Activar Cuenta</a>';

    if ($mail->send()) {
        echo "Registro exitoso. Se ha enviado un correo para activar tu cuenta.";
    } else {
        echo "Error al enviar el correo: " . $mail->ErrorInfo;
    }
} else {
    echo "Error al registrar: " . $conn->error;
}

$conn->close();
