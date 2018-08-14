<?php
$handle = fopen("cid10n4a6", "r");
$handle2= fopen("c:\\cid10.txt", "w+");
if ($handle) {
    while (!feof($handle)) {
        //$x=strlen(fgets($handle));
        $linha = fgets($handle,4096 );
        $linha=substr($linha,0,strlen($linha));
        $linha_write=substr($linha,0,strlen($linha)-2);
        $linha_temp=substr($linha_write,10,strlen($linha)-11);
        $linha_temp=str_replace('"','',$linha_temp);
        $linha_write=substr($linha_write,0,10).$linha_temp;
        $linha_write.='"'."\n";
        fwrite($handle2, $linha_write);
    }
    fclose($handle);
    fclose($handle2);
}
?>
