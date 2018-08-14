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
$visao=$_GET['tabela'];
$visaof=$visao."_funcoes";
$l=include_once('conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$sql="
select laf.CODIGO_ATIVIDADE,len.AGENTE_PREVENCAO as LEN_AGENTE_PREVENCAO,lef.AGENTE_PREVENCAO AS LEF_AGENTE_PREVENCAO,laf.CODIGO_FUNCAO,laf.DESCRICAO_FUNCAO,(case when laf.CODIGO_FUNCAO=0 THEN 'NÃO' ELSE 'SIM' END) AS EPI_EFICAZ,lef.CODIGO_EPI,lef.CA_EPI,(select EPC_EFICAZ from `laudos_setores_pericia` lsp where lsp.CODIGO_EMPRESA=lacc.CODIGO_EMPRESA and lsp.ANO_PERICIA=lacc.ANO_PERICIA and lsp.NUMERO_LAUDO=lacc.NUMERO_LAUDO and lsp.REVISAO=lacc.REVISAO and lsp.UNIDADE=lacc.UNIDADE and lsp.CODIGO_SETOR=lacc.CODIGO_SETOR) as EPC_EFICAZ,
(select
(case when (select count(*) from `$visao` where CODIGO_EMPRESA=lac.CODIGO_EMPRESA and ANO_PERICIA=lac.ANO_PERICIA and NUMERO_LAUDO=lac.NUMERO_LAUDO and REVISAO=lac.REVISAO  and PERIODICIDADE_EXPOSICAO<>'')>0 then
    (select COUNT(*)  from `funcoes` fn1, `funcionarios` fu1,`$visao` lf1 where lf1.UNIDADE=fu1.UNIDADE and lf1.CODIGO_SETOR=fu1.CODIGO_SETOR and lf1.CODIGO_EMPRESA=fu1.CODIGO_EMPRESA and fn1.CODIGO_EMPRESA=lf1.CODIGO_EMPRESA and lf1.CODIGO_EMPRESA=lac.CODIGO_EMPRESA and fu1.FUNCAO=fn1.CODIGO_FUNCAO and lf1.ANO_PERICIA=lac.ANO_PERICIA and lf1.NUMERO_LAUDO=lac.NUMERO_LAUDO and lf1.REVISAO=lac.REVISAO   and PERIODICIDADE_EXPOSICAO<>'' and fu1.SEXO='M' )  else
(case when (select count(*) from `$visaof` where CODIGO_EMPRESA=lac.CODIGO_EMPRESA and ANO_PERICIA=lac.ANO_PERICIA and NUMERO_LAUDO=lac.NUMERO_LAUDO and REVISAO=lac.REVISAO  and PERIODICIDADE_EXPOSICAO<>'')>0 THEN
    (select COUNT(*)  from `funcoes` fn1, `funcionarios` fu1,`$visaof` lf1 where lf1.CODIGO_FUNCAO=fn1.CODIGO_FUNCAO  and lf1.CODIGO_EMPRESA=lac.CODIGO_EMPRESA and lf1.ANO_PERICIA=lac.ANO_PERICIA and lf1.NUMERO_LAUDO=lac.NUMERO_LAUDO and lf1.REVISAO=lac.REVISAO  and PERIODICIDADE_EXPOSICAO<>'' and fu1.SEXO='M') 
else 0 end)end)
 from `$visao` lac where lac.CODIGO_EMPRESA=lef.CODIGO_EMPRESA and lac.ANO_PERICIA=lef.ANO_PERICIA and lac.NUMERO_LAUDO=lef.NUMERO_LAUDO and lac.REVISAO=lef.REVISAO ) AS CONT_MASCULINO,
(select
 (case when (select count(*) from `$visao` where CODIGO_EMPRESA=lac.CODIGO_EMPRESA and ANO_PERICIA=lac.ANO_PERICIA and NUMERO_LAUDO=lac.NUMERO_LAUDO and REVISAO=lac.REVISAO  and PERIODICIDADE_EXPOSICAO<>'')>0 then
    (select COUNT(*)  from `funcoes` fn1, `funcionarios` fu1,`$visao` lf1 where lf1.UNIDADE=fu1.UNIDADE and lf1.CODIGO_SETOR=fu1.CODIGO_SETOR and lf1.CODIGO_EMPRESA=fu1.CODIGO_EMPRESA and fn1.CODIGO_EMPRESA=lf1.CODIGO_EMPRESA and lf1.CODIGO_EMPRESA=lac.CODIGO_EMPRESA and fu1.FUNCAO=fn1.CODIGO_FUNCAO and lf1.ANO_PERICIA=lac.ANO_PERICIA and lf1.NUMERO_LAUDO=lac.NUMERO_LAUDO and lf1.REVISAO=lac.REVISAO   and PERIODICIDADE_EXPOSICAO<>'' and fu1.SEXO='F' )  else
(case when (select count(*) from `$visaof` where CODIGO_EMPRESA=lac.CODIGO_EMPRESA and ANO_PERICIA=lac.ANO_PERICIA and NUMERO_LAUDO=lac.NUMERO_LAUDO and REVISAO=lac.REVISAO  and PERIODICIDADE_EXPOSICAO<>'')>0 THEN
    (select COUNT(*)  from `funcoes` fn1, `funcionarios` fu1,`$visaof` lf1 where lf1.CODIGO_FUNCAO=fn1.CODIGO_FUNCAO  and lf1.CODIGO_EMPRESA=lac.CODIGO_EMPRESA and lf1.ANO_PERICIA=lac.ANO_PERICIA and lf1.NUMERO_LAUDO=lac.NUMERO_LAUDO and lf1.REVISAO=lac.REVISAO  and PERIODICIDADE_EXPOSICAO<>'' and fu1.SEXO='F') 
else 0 end)end)
 from `$visao` lac where lac.CODIGO_EMPRESA=lef.CODIGO_EMPRESA and lac.ANO_PERICIA=lef.ANO_PERICIA and lac.NUMERO_LAUDO=lef.NUMERO_LAUDO and lac.REVISAO=lef.REVISAO ) AS CONT_FEMININO
from `laudos_epis_necessarios` len left join `laudos_epis_fornecidos` lef   on
lef.CODIGO_EMPRESA=len.CODIGO_EMPRESA and lef.ANO_PERICIA=len.ANO_PERICIA and lef.NUMERO_LAUDO=len.NUMERO_LAUDO and lef.REVISAO=len.REVISAO 
and lef.CODIGO_EMPRESA=len.CODIGO_EMPRESA and lef.ANO_PERICIA=len.ANO_PERICIA and lef.NUMERO_LAUDO=len.NUMERO_LAUDO and lef.REVISAO=len.REVISAO 


inner join `laudos_atividades_funcoes` laf on
laf.CODIGO_EMPRESA = lef.CODIGO_EMPRESA and laf.ANO_PERICIA=lef.ANO_PERICIA and laf.NUMERO_LAUDO=lef.NUMERO_LAUDO and laf.CODIGO_ATIVIDADE=lef.CODIGO_ATIVIDADE
and laf.CODIGO_EMPRESA = len.CODIGO_EMPRESA and laf.ANO_PERICIA=len.ANO_PERICIA and laf.NUMERO_LAUDO=len.NUMERO_LAUDO
inner join `$visao` lacc 
on laf.CODIGO_EMPRESA = lacc.CODIGO_EMPRESA and laf.ANO_PERICIA=lacc.ANO_PERICIA and laf.NUMERO_LAUDO=lacc.NUMERO_LAUDO
 where 
lacc.CODIGO_EMPRESA=$valor[0] and lacc.ANO_PERICIA=$valor[1] and lacc.NUMERO_LAUDO=$valor[2] and lacc.UNIDADE=$valor[4] and lacc.CODIGO_SETOR=$valor[5] 
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
            $campo.=$valor."|";
        }
        echo $campo;
        echo "\n";
    }     
}
?>
