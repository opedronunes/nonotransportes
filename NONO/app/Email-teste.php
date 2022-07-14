<?php

namespace App;

require_once '../vendor/autoload.php';

//VARIÁVEIS DO FRONT
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/**
 * INSTANCIA DO PHPMAILER
 */
$mail = new PHPMailer(true);

try {

  /**
   * CONFIGURAÇÃO SMTP
   */
  $mail->CharSet = 'UTF-8';
  $mail->SMTPDebug = 0;
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = '';
  $mail->Password   = '';
  $mail->SMTPSecure = 'tls';
  $mail->Port       = 587;

  /**
   * REMETENTES E DESTINATÁRIOS
   */
  $mail->setFrom('', 'Contato pelo site');
  $mail->addAddress('');

  /**
   * CONTEÚDO DO E-MAIL
   */
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body    = "
                      <html>
                        <h2>Boa Notícia!</h2>
                        <p>Alguém visitou seu site e deseja fazer um orçamento.</p>
                        <h4>Segue dados do cliente:</h4>
                        <p>Nome: <b>$name</b></p>
                        <p>E-mail: <b>$email</b></p>
                        <p>Telefone: <b>$phone</b></p>
                        <p>Mensagem: <b>$message</b></p>
                      </html>
    ";

  /**
   * ENVIAR E-MAIL
   */
  if ($mail->send()) {
    echo "<meta http-equiv='refresh' content='0;URL=../content/pages/send-form.html'>";
  }
} catch (Exception $e) {
  echo "Mensagem não foi enviada! → Mailer Error: {$mail->ErrorInfo}";
  echo "<meta http-equiv='refresh' content='0;URL=../content/pages/send-form-error.html'>";
}
