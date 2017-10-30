<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Essa função gera um valor de String aleatório do tamanho recebendo por parametros
function randString($size) {
    //String com valor possíveis do resultado, os caracteres pode ser adicionado ou retirados conforme sua necessidade
    $basic = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    $return = "";

    for ($count = 0; $size > $count; $count++) {
        //Gera um caracter aleatorio
        $return .= $basic[rand(0, strlen($basic) - 1)];
    }

    return $return;
}

function enviaConfirmacaoEmail($emailCliente, $nomeCliente, $chave) {
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.promoimpresso.com.br';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'suporte@promoimpresso.com.br';                 // SMTP username
        $mail->Password = '10203040Pi@';                           // SMTP password
        //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        //Recipients
        $mail->setFrom('suporte@promoimpresso.com.br', 'Suporte PI');
        $mail->addAddress($emailCliente, $nomeCliente);     // Add a recipient 'alissonvinicios04@gmail.com`
        //$mail->addAddress('testepromoimpresso@gmail.com');               // Name is optional
        $mail->addReplyTo('suporte@promoimpresso.com.br', 'Suporte PI');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        //Attachments
        $mail->addAttachment("_imagens/icon/logo.png");         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Gráfica PromoImpresso - Confirmação de cadastro';
        $mail->Body = 'Esse é um e-mail automático, <b>não o responda!</b> <br/>'
                . ' Clique no link para confirmar seu cadastro: http://www.promoimpresso.com.br/confimar_cadastro.php?key=' . $chave;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
