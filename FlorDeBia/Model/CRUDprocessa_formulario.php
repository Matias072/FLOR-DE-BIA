<?php
include("/xampp/htdocs/FlorDeBia/Model/banco.php");
include("/xampp/htdocs/FlorDeBia/Controler/phpOO.php");

try {
    $conn= new PDO ("mysql:host=localhost;dbname=$bancodedados","$usuario","$senha");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

    $nome = $_POST['firstname'];
    $email = $_POST['email'];
    $cpf = $_POST['CPF'];
    $senha = password_hash($_POST['password'], PASSWORD_DEFAULT);
  

    $sql = "INSERT INTO cliente (nome, cpf, email, senha, telefone, cep, cidade, bairro, rua, numero)
    VALUES ('$nome', '$cpf', '$email', '$senha', NULL, NULL, NULL, NULL, NULL, NULL)";

    $conn->exec($sql);
    echo "Novo registro criado com sucesso";

    // Enviar e-mail
    $to = $email;
    $subject = "Cadastro concluído";
    $message = "Olá $nome,\n\nSeu cadastro foi concluído com sucesso.\n\nAtenciosamente,\nEquipe FlorDeBia";
    $headers = "From: flordebia15@gmail.com";

    mail($to, $subject, $message, $headers);

    header('Location: http://localhost/FlorDeBia/View/index.php');
    /*O envio de email funciona em alguns momentos e em outros não devido as configuraçoes do sendmail.ini dentro do xamp e devido
    as configurações de segurança do gmail que definem o xampp como app suspeito e barram o acesso dele ao gmail*/
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
?>