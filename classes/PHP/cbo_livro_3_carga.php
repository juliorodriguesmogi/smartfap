<?php
$handle = fopen("CBO2002_Liv2.txt", "r");
//$c=include_once("conexao_comun_class.php");
$c=include_once("conexao.php");
if ($handle) {
    while (!feof($handle)) {
        //$x=strlen(fgets($handle));
        
        $linha = fgetcsv($handle,150,"\n");
        if (substr($linha[0],0,7)==' T�TULO' || substr($linha[0],0,6)=='T�TULO'){
            $linha = fgetcsv($handle,150,"\n");
            $codigo=substr($linha[0], 0, 4);

                
                while (substr($linha[0],0,19)<>' DESCRI��O SUM�RIA ' && substr($linha[0],0,17)<>'DESCRI��O SUM�RIA' && substr($linha[0],0,17<>'DESCRI��O SUM�RIA')){
                    $linha=fgetcsv($handle,150,"\n");
                }   
                $linha = fgetcsv($handle,150,"\n");
                $linha = fgetcsv($handle,150,"\n");
                $linha = fgetcsv($handle,150,"\n");
                while (substr($linha[0],0,24)<>' fORMA��O E EXPERI�NCIA ' && substr($linha[0],0,23)<>'fORMA��O E EXPERI�NCIA '){
                    $linha=fgetcsv($handle, 150,"\n");
                    $descricao_sumaria[]=$linha[0];
                }
                array_pop($descricao_sumaria);
                $d=implode("\n",$descricao_sumaria);
                $sql="update `cbos` set DESCRICAO_SUMARIA='$d' where CODIGO_CBO='$codigo'";
                mysql_query($sql);

        $linha = fgetcsv($handle,150,"\n");
        $descricao_sumaria=null;
        }
        
        
    }
    mysql_close($c);
}    
?>
