<?php

namespace App;
require_once '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST) && !empty($_POST)) {

  //VARIÁVEIS DO FRONT
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
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
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contato@nonotransporteselocacoes.com.br';
    $mail->Password   = 'Nono@2022';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
  
    /**
     * REMETENTES E DESTINATÁRIOS
     */
    $mail->setFrom( 'contato@nonotransporteselocacoes.com.br', 'Contato pelo site');
    $mail->addAddress('nono.transportes@hotmail.com');
    /**
     * CONTEÚDO DO E-MAIL
     */
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = "
                        <html>
                          <h2 style='color:#ff5500;'>Boa Notícia!</h2>
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
    $mail->send();
      echo "<meta http-equiv='refresh' content='0;URL=../content/pages/send-form.html'>";

  } catch (Exception $e) {
    echo "<meta http-equiv='refresh' content='0;URL=../content/pages/send-form-error.html'>";
  }
}else{
  echo "<meta http-equiv='refresh' content='0;URL=../content/pages/send-form-error.html'>";
}
