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
$tabela=(String) $_GET['tabela'];
$l=include_once('conexao_PDO.php');
$campo=(String) $_GET['campo'];
$campo=explode(',', $campo);
$valor=(String) $_GET['valor'];
$valor=explode(',', $valor);
$condicao=(String) $_GET['condicao'];
$condicao=explode(',', $condicao);
$conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
$conn->prepara_stmt('S', $tabela, array('*'),null,$campo,$condicao,$valor,null,array("CODIGO_FUNCAO DESC"));
$r=$conn->executa_acao();     
if ($r->fetchColumn()==0){
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
            $valor=  utf8_decode($valor);
            $campo.=$valor.'|';
        }
        echo $campo;
        echo "\n";
}
}
?>