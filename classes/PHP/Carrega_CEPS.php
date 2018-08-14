<?php
session_start();
header("Content-Type: text/html; charset=UTF-8", true);
//gambiarra para o IECA;
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  
header('http-equiv="Content-Type" content="text/html; charset=UTF-8');

$campo=(String) $_GET['campo'];
$valor=(String) $_GET['valor'];
//$valor=explode(",(",mb_convert_encoding($valor, 'iso-8859-1','utf-8'));
$valor=utf8_encode($valor);
$valor=mb_strtoupper($valor);
$condicao=(String) $_GET['condicao'];
$condicao=explode(',', $condicao);
$tipo_busca=(String) $_GET['tipo_busca'];
$visao=(String) $_GET['visao'];
$tabela=(String) $_GET['tabela'];
$l=include_once('conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','cyberpc07','cyberpc07','phoenix10','mysql','bd_comum');
$conn->prepara_stmt('S', "ceps", array('*'),null,array($campo),$condicao,array($valor),null,array("TIPO_LOGRADOURO,LOGRADOURO,BAIRRO,CIDADE,CEP limit 100"));
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
            
             $campo.=$valor.'|';
        }
        echo $campo;
        echo "\n";
    }     
}
?>
