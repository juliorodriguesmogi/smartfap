<?php
$div_linha_pai=$_GET['div_linha_pai'];
$linha_pai=$_GET['linha_pai'];
@move_uploaded_file($_FILES["nome_foto"]["tmp_name"],"../fotos/". $_FILES["nome_foto"]["name"]);
echo "<meta HTTP-EQUIV='Refresh' CONTENT='1;URL=../HTML/carregafoto.php?div_linha_pai=".$div_linha_pai."&linha_pai=".$linha_pai."&foto=".$_FILES['nome_foto']['name']."'>";
?>