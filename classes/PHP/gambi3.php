<?php
$handle = fopen("cep", "r");
$c=include_once("conexao_comun_class.php");
if ($handle) {
    while (!feof($handle)) {
        //$x=strlen(fgets($handle));
        
        $linha = fgetcsv($handle,350,';' );
        $sql="insert into `ceps` values ($linha[0],'$linha[1]','$linha[2]','$linha[3]','$linha[4]','$linha[5]','$linha[6]'";
        mysql_query($sql);
        
    }
    mysql_close($c);
}    
?>
