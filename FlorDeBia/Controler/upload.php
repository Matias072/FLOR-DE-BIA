<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "O arquivo ". htmlspecialchars( basename( $_FILES["file"]["name"])). " foi enviado.";
} else {
    echo "Desculpe, houve um erro ao enviar seu arquivo.";
}
?>