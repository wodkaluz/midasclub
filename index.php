<DOCTYPE! html>

<?php
include "imagem.php";
$src = "http://www.mtv.com.br/gsp/noticias/MARCO%202016/adele%20erro%204.jpg";
$alt = "descricao";
$width= "500px";
$height="500px";
$title="E vai descendo na boquinha da garrafa";
$img = imagem($src,$alt,$title, $width, $height);
?>

    
    
<html>
    <head>
    </head>
    <body>
        <?php
    echo $img;
    ?>
    </body>
</html>