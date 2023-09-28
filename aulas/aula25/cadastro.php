<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Verifica se o formulário foi enviado usando o método GET

    // Captura os dados do formulário
    $nome = $_GET["nome"];
    $media = $_GET["media"];
    $mes = $_GET["mes"];
    $dia = $_GET["dia"];
    $hora = $_GET["hora"];

    // Endereço de e-mail para onde você deseja enviar os dados
    $destinatario = "vss.vinicius@outlook.com";

    // Assunto do e-mail
    $assunto = "Novo formulário de inscrição recebido";

    // Corpo do e-mail com os dados do formulário
    $mensagem = "Nome: $nome\n";
    $mensagem .= "Média: $media\n";
    $mensagem .= "Período Letivo: $mes\n";
    $mensagem .= "Dia da Prova: $dia\n";
    $mensagem .= "Horário da Prova: $hora\n";

    // Cabeçalhos do e-mail
    $cabecalhos = "From: $nome <$destinatario>";

    // Envia o e-mail
    if (mail($destinatario, $assunto, $mensagem, $cabecalhos)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail. Verifique suas configurações de servidor.";
    }
} else {
    echo "Este script PHP espera um pedido GET.";
}
?>