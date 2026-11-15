<?php
/*
 * Multi Fibras - recebimento de contatos / pedidos de orçamento
 * Ajuste o e-mail abaixo para o endereço real da empresa.
 */
$destino = "contato@multifibras.com.br";

function limpa($v) {
    return htmlspecialchars(trim(strip_tags($v ?? "")), ENT_QUOTES, "UTF-8");
}

$nome     = limpa($_POST["nome"] ?? $_POST["name"] ?? "");
$empresa  = limpa($_POST["empresa"] ?? "");
$contacto = limpa($_POST["contacto"] ?? $_POST["phone"] ?? "");
$email    = limpa($_POST["email"] ?? "");
$assunto  = limpa($_POST["subject"] ?? "Contato pelo site");
$mensagem = limpa($_POST["mensagem"] ?? $_POST["message"] ?? "");

$assunto_email = "Site Multi Fibras - " . ($assunto ?: "Novo contato");
$corpo  = "Nome: $nome\n";
$corpo .= "Empresa: $empresa\n";
$corpo .= "Contato: $contacto\n";
$corpo .= "E-mail: $email\n";
$corpo .= "Assunto: $assunto\n\n";
$corpo .= "Mensagem:\n$mensagem\n";

$headers  = "From: site@multifibras.com.br\r\n";
if ($email) {
    $headers .= "Reply-To: $email\r\n";
}

@mail($destino, $assunto_email, $corpo, $headers);

echo "<script>alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');"
   . "location.href=document.referrer||'/';</script>";
