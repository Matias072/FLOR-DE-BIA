
<?php
    include('/xampp/htdocs/FlorDeBia/Model/banco.php');
    
    session_start(); // Inicia a sessão

    if(isset($_POST['CPF']))
    {   
        $senha=$_POST['password'];
        $CPF=$_POST['CPF'];   

        $sql = $conn->prepare("select senha from cliente where CPF=? limit 1");
        $sql->execute(array($CPF));
        $resul = $sql->fetchColumn();

        if(password_verify($senha,$resul))
        {
            $_SESSION['CPF'] = $CPF; // Armazena o CPF do usuário na sessão
            header('Location: http://localhost/FlorDeBia/View/index.php');
        }
        else
        {
            echo ("<script> alert('Usuário ou senha inválida') </script>");
        }
    }
?>