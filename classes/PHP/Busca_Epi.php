<?php
session_start();
header("Content-Type: text/html; charset=ISO-8859-1", true);
//gambiarra para o IECA;
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  
header('http-equiv="Content-Type" content="text/html; charset=ISO-8859-1');
$campo=(String) $_GET['campo'];
$campo=explode(',', $campo);
$valor=(String) $_GET['valor'];
$valor=explode(',', $valor);
$condicao=(String) $_GET['condicao'];
$condicao=explode(',', $condicao);
$tipo_busca=(String) $_GET['tipo_busca'];
$tipo_busca=explode(',', $tipo_busca);
$visao=(String) $_GET['visao'];
$campo[]='CODIGO_EMPRESA';
$valor[]=$_SESSION['empresa_ativa'];
$l=include_once('conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
if ($conn->erro!=null){
    echo "NF";
    return;
}
$conn->prepara_stmt('S', array('epis e','epis_estoques_unidades f'),array('*'), null, array('e.CODIGO_EMPRESA','e.CODIGO_EPIS','f.CODIGO_EPI','f.UNIDADE'), array('=','=','=','=','='),array('[f.CODIGO_EMPRESA]','[f.CODIGO_EPI]',$valor[0],$_SESSION['unidade']),null,array("e.CODIGO_EMPRESA"));
//$conn->prepara_stmt('S', $visao, array('*'),null,$campo,$tipo_busca,$valor,null,array("CODIGO_EPIS"));
$r=$conn->executa_acao();     
if ($r->fetchColumn(0)==0){
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
            //$valor=  str_replace('00/00/0000', $valor, '');
            echo $valor."\n";
        }


    }     
}
?>
