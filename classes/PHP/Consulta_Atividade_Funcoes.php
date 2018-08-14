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
$l=include_once('conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
if ($conn->erro!=null){
    echo "NF";
    return;
}
$conn->prepara_stmt('S', array('atividades a','atividade_funcoes af'),array('a.CODIGO_EMPRESA','a.CODIGO_ATIVIDADE','af.CODIGO_FUNCAO','af.DESCRICAO_FUNCAO'), null, array('a.CODIGO_EMPRESA','a.CODIGO_ATIVIDADE','af.CODIGO_EMPRESA','af.CODIGO_ATIVIDADE'), array('=','=','=','='),array('[af.CODIGO_EMPRESA]','[af.CODIGO_ATIVIDADE]',$valor[0],$valor[1]),null,array("a.CODIGO_EMPRESA","CODIGO_FUNCAO"));
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
            $campo.=$valor.'|';
        }
        echo $campo;
        echo "\n";

    }     
}
?>
