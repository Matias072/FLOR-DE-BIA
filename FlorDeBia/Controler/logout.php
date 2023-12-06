<?php
    session_start(); // Inicia a sessão
    session_destroy(); // Destrói a sessão limpando os dados
    header('Location: http://localhost/FlorDeBia/View/index.php'); // Redireciona para a página de login
?>