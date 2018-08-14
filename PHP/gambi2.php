<?php
$handle = fopen("CBO.csv", "r");
$handle2= fopen("c:\\CBO.txt", "w+");
if ($handle) {
    while (!feof($handle)) {
        //$x=strlen(fgets($handle));
        $linha = fgets($handle,300 );
        $cbo='"'.substr($linha,0,6).'";"';
        $descricao=substr($linha,6,300);
        $descricao=substr($descricao,1,strlen($descricao)-3);
        $linha_write=$cbo.$descricao;
        $linha_write.='"'."\n";
        fwrite($handle2, $linha_write);
    }
    fclose($handle);
    fclose($handle2);
}
?>
