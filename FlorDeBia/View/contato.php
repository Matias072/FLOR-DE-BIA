<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/FlorDeBia/Assets/CSS/contato.css">
    <title>Contact</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="mailto:flordebia15@gmail.com" method="post" enctype="text/plain">
                
                <div class="form-header">
                    <div class="title">
                        <h1>Contact</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="http://localhost/FlorDeBia/View/index.php">Home</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome Completo</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu nome" required>
                    </div>
                    <br/>   
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <br/>                    
                    <div class="input-box" >
                        <label for="Mensagem">Mensagem</label>
                        <input id="Mensagem" type="text" name="Mensagem" placeholder="Deixe sua duvida aqui" required>
                    </div>

                </div>

                <div class="continue-button">
                    <button><a href="http://localhost/FlorDeBia/View/index.php">Enviar</a> </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>