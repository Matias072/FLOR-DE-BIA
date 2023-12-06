<?php
    include('/xampp/htdocs/FlorDeBia/Model/banco.php');
    
    session_start(); // Inicia a sessão

    if(isset($_SESSION['CPF'])) // Verifica se o usuário está logado
    {   
        $CPF = $_SESSION['CPF'];   

        $sql = $conn->prepare("SELECT nome, cpf, email FROM cliente WHERE CPF=? LIMIT 1");
        $sql->execute(array($CPF));
        $user = $sql->fetch(PDO::FETCH_ASSOC);
    }
    else
    {
        echo "Você precisa estar logado para ver esta página.";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/FlorDeBia/Assets/CSS/perfil.css">
    <title>Perfil</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="http://localhost/FlorDeBia/Assets/imagens/undraw_online_stats_0g94.svg" alt="">
        </div>
        <div class="form">
            <form action="http://localhost/FlorDeBia/Model/CRUDprocessa_formulario.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>perfil</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="http://localhost/FlorDeBia/View/index.php">Home</a></button>
                    </div>
                    <div class="login-button">
                        <button><a href="http://localhost/FlorDeBia/Controler/logout.php">logout</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        
                        <label for="firstname">Nome Completo</label>
                        <label><?php echo $user['nome']; ?></label>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <label><?php echo $user['email']; ?></label>
                    </div>
                    <div class="input-box">
                        <label for="CPF">CPF</label>
                        <label><?php echo $user['cpf']; ?></label><br>
                    </div>
                </div>


            </form>
        </div>
    </div>
</body>

</html>

