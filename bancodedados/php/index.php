<?php
include_once 'includes/conex.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>
<body> 
    <main>
        <section id="contato">
            <legend>Deixe aqui seus dados</legend>
            <form action="conex.php" method="post">
                <div id="nome">
                <label>Digite seu nome</label><br>
                <input type="text" name="nome" id="" placeholder="Ex: Gabriela " required><br>
                </div>
                <div id="sobrenome">
                <label>Digite o assunto</label><br>
                <input type="text" name="sobrenome" id="" placeholder="Ex: Haag" required><br>
                </div>
                <input type="submit" value="Enviar" id="enviarEmail">
                </div>
            </form>
        
        </section>
</main>