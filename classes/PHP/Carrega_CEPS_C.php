<?php
session_start();
header("Content-Type: text/html; charset=iso-8859-1", true);
//gambiarra para o IECA;
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  
header('http-equiv="Content-Type" content="text/html; charset=ISO-8859-1');


$campo=(String) $_GET['campo'];
$campo=explode(",(", $campo);
$x=str_replace("'","",'SOUNDEX');
$p=str_replace("'","",")");
$campo[0]=$x."(".$campo[0].$p;
$campo[1]=$x."(".$campo[1];
$campo[2]=$x."(".$campo[2];
$campo[3]=$x."(".$campo[3];
$campo[4]=$x."(".$campo[4];

$valor=(String) $_GET['valor'];
$valor=explode(",(",mb_convert_encoding($valor,'iso-8859-1','utf-8'));
$valor[0]=str_replace("'","",$valor[0]);
$valor[1]=str_replace("'","",$valor[1]);
$valor[2]=str_replace("'","",$valor[2]);
$valor[3]=str_replace("'","",$valor[3]);
$valor[4]=str_replace("'","",$valor[4]);
$x=str_replace("'","",'SOUNDEX');
$valor[0]=$x."("."'$valor[0]'".$p;
$valor[1]=$x."("."'$valor[1]'".$p;
$valor[2]=$x."("."'$valor[2]'".$p;
$valor[3]=$x."("."'$valor[3]'".$p;
$valor[4]=$x."("."'$valor[4]'".$p;

$condicao=(String) $_GET['condicao'];
$condicao=explode(',', $condicao);
$tipo_busca=(String) $_GET['tipo_busca'];
$visao=(String) $_GET['visao'];
$tabela=(String) $_GET['tabela'];
$l=include_once('conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','cyberpc07','cyberpc07','phoenix10','mysql','bd_comum');
$conn->prepara_stmt('S', "ceps", array('distinct CEP'),null,$campo,$condicao,$valor,null,array("CEP"));
$r=$conn->executa_acao();     
if ($r->fetchColumn(0)==null){
    echo "NF";
    return;
}
else {
    $r=$conn->executa_acao();     
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
        $campo='';
        foreach ($row as $valor){
            $valor=ereg_replace("\r", "", $valor); 
            $valor=ereg_replace("\n", "", $valor); 
            $valor=preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1",$valor);

            $valor=str_replace("\n",'',$valor);
            $valor=  utf8_decode($valor);            
             $campo.=$valor.'|';
        }
        echo $campo;
        echo "\n";
    }     
}
?>
