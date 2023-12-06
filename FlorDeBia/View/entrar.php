<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/FlorDeBia/Assets/CSS/telacadastro.css">
    <title>entrar</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="http://localhost/FlorDeBia/Assets/imagens/undraw_shopping_re_3wst.svg" alt="">
        </div>
        <div class="form">
            <form action="http://localhost/FlorDeBia/Model/CRUDlogin.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Bem vindo de volta</h1>
                    </div>
                    
                    <div class="login-button">
                        <button><a href="http://localhost/FlorDeBia/View/index.php">Home</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="CPF">CPF</label>
                        <input id="CPF" type="CPF" name="CPF" placeholder="Digite somente os números" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit"href="http://localhost/FlorDeBia/View/index.php">Continuar </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>