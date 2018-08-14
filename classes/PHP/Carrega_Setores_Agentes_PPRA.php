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

$l=include_once('conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
$sql="
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'FISICOS' as CLASSE,'RUIDO' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_ruido WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'FISICOS' as CLASSE,'RUIDO DOSIMETRIA' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_ruido_dosimetria WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'FISICOS' as CLASSE,'CALOR' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_calor WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'FISICOS' as CLASSE,'FRIO' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_frio WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'QUIMICOS' as CLASSE,'FUMOS METALICOS' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_fumos_metalicos WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'QUIMICOS' as CLASSE,'HIDROCARBONETOS' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_hidrocarbonetos WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'ERGONOMICOS' as CLASSE,'ILUMINAMENTO' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_iluminamento WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'BIOLOGICOS' as CLASSE,'MANEJO ANIMAIS' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_manejo_animais WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'BIOLOGICOS' as CLASSE,'OUTROS BIOLOGICOS' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_outros_biologicos WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'FISICOS' as CLASSE,'OUTROS FISICOS' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_outros_fisicos WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'QUIMICOS' as CLASSE,'OUTROS QUIMICOS' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_outros_quimicos WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'QUIMICOS' as CLASSE,'POEIRAS INCOMODAS' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_poeiras_incomodas WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'QUIMICOS' as CLASSE,'POEIRAS MINERAIS' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_poeiras_minerais WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'QUIMICOS' as CLASSE,'PRODUTOS DE LIMPEZA' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_produtos_limpeza WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'QUIMICOS' as CLASSE,'RADIACAO IONIZANTE' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_radiacao_ionizante WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'QUIMICOS' as CLASSE,'RADIACAO NAO IONIZANTE' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_radiacao_nao_ionizante WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'BIOLOGICOS' as CLASSE,'SANGUE ANIMAL' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_sangue_animal WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'BIOLOGICOS' as CLASSE,'SANGUE HUMANO' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_sangue_humano WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'QUIMICOS' as CLASSE,'TINTAS e SOLVENTES' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_tintas_solventes WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0  union
select CODIGO_EMPRESA,ANO_PERICIA,NUMERO_LAUDO,REVISAO,UNIDADE,CODIGO_SETOR,'FISICOS' as CLASSE,'UMIDADE' as TIPO,FONTE_GERADORA,TIPO_AVALIACAO,GRAU_RISCO from
laudos_avaliacoes_umidade WHERE CODIGO_EMPRESA=$valor[0] and ANO_PERICIA=$valor[1] and NUMERO_LAUDO=$valor[2] and REVISAO=$valor[3] and UNIDADE <>0 
order by UNIDADE,CODIGO_SETOR,CLASSE,TIPO
";
$conn->prepara_stmt('C', null, null,null,null,null,null,null,null,null,$sql);
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
            $valor=ereg_replace("\n", "  ", $valor); 
            $valor=preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1",$valor);

            //$valor=str_replace("\n",'',$valor);
            $valor=  utf8_decode($valor);            
             $campo.=$valor.'|';
        }
        echo $campo;
        echo "\n";
    }     
}
?>
