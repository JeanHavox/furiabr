<?php

if(isset($_POST['email']) &&  !empty($_POST['email'])){

$nome = addslashes($_POST['nome']);
$nick = addslashes($_POST['nick']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "jeanavlobos13@gmail.com";
$subject = "Formulário Furia BR";
$body = "Nome: ".$nome. "\r\n".
        "Nick: ".$nick. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From: jeanavlobos13@gmail.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();


if(mail($to,$subject,$body,$header)) {

    echo ("Mensagem enviada com sucesso");

}else {
    echo ("No momento o formulário de e-mail não está funcionando devido ao nosso dominio. Peço que entre em contato através do ícone de Whatsapp na página de contatos.");
}

}

?>