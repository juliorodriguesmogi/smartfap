<?php
session_start();
//gambiarra para o IECA;
header("Content-Type: text/html; charset=ISO-8859-1", true);
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  
header('http-equiv="Content-Type" content="text/html; charset=ISO-8859-1');
ini_set('default_charset','iso-8859-1');

$campo=$_GET['campo'];
$valor=$_GET['valor'];
$tabela=$_GET['tabela'];
$visao=$_GET['visao'];
$condicao="=";
$l=include_once('conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
$conn->prepara_stmt('S', $tabela, array('*'),null,$campo,$condicao,$valor,null,array("RAZAO_SOCIAL"));
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
