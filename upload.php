<?php
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_FILES['image'])){
    
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //verifica se o arquivo é uma imagem real
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
            echo "O arquivo ". basename($_FILES["image"]["name"])." foi enviado com sucesso.";
            } else {
            echo "Desculpe, houve um erro ao enviar o seu arquivo.";
            }     
    } else {
        echo "O arquivo não é uma imagem.";
    }
    // else {
    //     //mostra mensagem de erro especifica
    //     echo "Erro no upload: ". $_FILES["image"]["error"];
    // }
    // else {
    //  echo "Nenhum arquivo enviado.";
    // }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="refresh" content="2; url=index.php">
    <title>Upload de Imagem</title>
</head>

<body>
    <p>Redirecionando para a galeria...</p>
</body>

</html>