<?php
$div_linha_pai=$_GET['div_linha_pai'];
$linha_pai=$_GET['linha_pai'];

$img=$_FILES["nome_foto"]["tmp_name"];
$imagem_p=  imagecreatetruecolor(500, 420);
$imagem=imagecreatefromjpeg($_FILES["nome_foto"]["tmp_name"]);
list($width, $height) = getimagesize($img);
imagecopyresampled($imagem_p, $imagem, 0, 0, 0, 0, 500, 420, $width, $height);
$newfile="../fotos/".mb_strtolower($_FILES["nome_foto"]["name"]);
imagejpeg($imagem_p, $newfile, 50);
//@move_uploaded_file($_FILES["nome_foto"]["tmp_name"],"../fotos/". mb_strtolower($_FILES["nome_foto"]["name"]));
//@move_uploaded_file($imagem,"../fotos/". mb_strtolower($_FILES["nome_foto"]["name"]));
echo "<meta HTTP-EQUIV='Refresh' CONTENT='1;URL=../HTML/carregafoto.php?div_linha_pai=".$div_linha_pai."&linha_pai=".$linha_pai."&foto=".mb_strtolower($_FILES['nome_foto']['name'])."'>";
imagedestroy($imagem_p);
?>