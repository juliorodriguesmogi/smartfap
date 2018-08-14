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
$campo=(String) $_GET['campo'];
$campo=explode(',', $campo);
$valor=(String) $_GET['valor'];
$valor=explode(',', $valor);
$condicao=(String) $_GET['condicao'];
$condicao=explode(',', $condicao);
$tipo_busca=(String) $_GET['tipo_busca'];
$visao=(String) $_GET['visao'];
$campo[]='CODIGO_EMPRESA';
$valor[]=$_SESSION['empresa_ativa'];
$condicao[]="=";
$l=include_once('conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', "laudos_avaliacoes", array("DISTINCT OUTROS_FISICOS_DESCRICAO, OUTROS_BIOLOGICOS_DESCRICAO,  OUTROS_QUIMICOS_DESCRICAO", "sum(RUIDO) AS RUIDO,SUM(RUIDO_DOSIMETRIA) AS RUIDO_DOSIMETRIA,SUM(FRIO) AS FRIO,SUM(CALOR) AS CALOR,SUM(UMIDADE) AS UMIDADE,SUM(RADIACAO_NAO_IONIZANTE) AS RADIACAO_NAO_IONIZANTE,SUM(RADIACAO_IONIZANTE),SUM(OUTROS_FISICOS) AS OUTROS_FISICOS,SUM(SANGUE_HUMANO) AS SANGUE_HUMANO,SUM(SANGUE_ANIMAL) AS SANGUE_ANIMAL,SUM(MANEJO_ANIMAIS) AS MANEJO_ANIMAIS,SUM(OUTROS_BIOLOGICOS) AS OUTROS_BIOLOGICOS,SUM(PRODUTOS_LIMPEZA) AS PRODUTOS_LIMPEZA,SUM(TINTAS_SOLVENTES) AS TINTAS_SOLVENTES,SUM(HIDROCARBONETOS_AROMATICOS) AS HIDROCARBONETOS_AROMATICOS,SUM(FUMOS_METALICOS) AS FUMOS_METALICOS,SUM(POEIRAS_INCOMODAS) AS POEIRAS_INCOMODAS, SUM(POEIRAS_MINERAIS) AS POEIRAS_MINERAIS,SUM(OUTROS_QUIMICOS) AS OUTROS_QUIMICOS,SUM(ILUMINAMENTO) AS ILUMINAMENTO ","UNIDADE","CODIGO_SETOR"),null,$campo,$condicao,$valor,array('UNIDADE','CODIGO_SETOR')); 
$r=$conn->executa_acao();     
$processado=0;
while($row=$r->fetch(PDO::FETCH_ASSOC)){
        $campo='';
        foreach ($row as $valor){
            $valor=ereg_replace("\r", "", $valor); 
            $valor=ereg_replace("\n", "", $valor); 
            $valor=preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1",$valor);
            $valor=  utf8_decode($valor);            
            $campo.=$valor."|";
        }
        echo $campo."\n";
        $processado++;
}
if ($processado==0){
    echo "NF";
    return;
}
?>
