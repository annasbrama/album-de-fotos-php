<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Galeria de Imagens - Exercicio PhP</title>
</head>

<body>
    <h1>Galeria de Imagens</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*">
        <button type="submit">Enviar Imagem</button>
    </form>
    <div class="gallery">
        <?php
            $files= glob("upload/*.*");
            foreach($files as $file){
                echo '<img src="'.$file. '" alt="Imagem">';
            }
    ?>
    </div>
</body>

</html>