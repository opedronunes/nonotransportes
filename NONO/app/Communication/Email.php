<?php

/**
 * Variáveis do front
 */
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

/**
 * E-mail para quem será enviado
 */
$address = "nono.transportes@hotmail.com";

/**
 * Corpo do e-mail
 */
$body = "
  <html>
    <h2>Sou um Contato pelo Site</h2>
    <p>Nome: <b>$name</b></p>
    <p>E-mail: <b>$email</b></p>
    <p>telefone: <b>$phone</b></p>
    <p>Do que precisa: <b>$subject</b></p>
    <p>Orçamento: <b>$message</b></p>
  </html>
";

/**
 * Garantir que os dados seram exibidos corretamente
 */
$headers = "MIME-Version: 1.0\n";
$headers = "Content-type: text/html; charset=iso-8859-1\n";
$headers = "From: $name <$email>";

/**
 * Send
 */
if(mail($address,$subject,$body,$headers)){
  echo "<meta http-equiv='refresh' content='7;URL=../../content/pages/send-form.html'>";
}else{
  echo "<meta http-equiv='refresh' content='7;URL=../../index.html'>";
}

?>
