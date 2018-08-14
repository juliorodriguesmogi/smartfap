<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$codigo_empresa=$_SESSION['empresa_ativa'];
$nome_empresa=$_SESSION['nome_empresa_ativa'];
?>
<html>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <style type="text/css" >
@media print{
document.location{display: none}
body{width:auto;margin:2 auto}
  table{ font-size:9px;font-family:Arial, Helvetica, sans-serif}
  img{display:inline;visibility: visible}
  button{display:none}
  #cabecalho_campos{position:relative}
  #cabecalho_pagina{page-break-before:always}
  #rodape{position:absolute;top:20px }
  
}
@media screen{
body{width:auto;margin:0 5}
  table{ font-size:12px;font-family:Arial, Helvetica, sans-serif}
 #cabecalho_campos{position:relative}
  #rodape{
	position:absolute;
	top:95%;
	width: 90%;
}
  img{
        filter: alpha(opacity:0.15);  
        KHTMLOpacity: 0.15;  
        MozOpacity: 0.15;  
        -khtml-opacity: .15;  
        -ms-filter: "alpha(opacity=15)";  
        -moz-opacity: .15;  
        filter: alpha(opacity=15);  
        opacity: .15;
}
}
table{
border-width: 1;
border-style:solid;
border-color: black;

}

table #tr_detalhe td{
    text-transform: uppercase;
}
tr td {border: 1pt solid black}
    </style>
<script type="text/javascript">

</script>
</head>
<body>
<div align="right"><button type="button" onClick="window.print()"><img src='../images/printer_2.png'/></button></div>
   <table id="cabecalho_pagina" width="100%" style="border-bottom:solid 1px"  >
    <tbody>
    <tr>
    <th colspan="2"><div align="left"><img id="image"src="cyberpc150dpi.jpg" width="149px" height="64px" /></div></th>
    <th colspan="2"><center>
        <table width="866" height="55"  >
          <tr><td width="548">PROGRAMA DE PREVEN��O DE RISCOS AMBIENTAIS </td>
          <td width="293"><p>Data de Emiss&atilde;o:
            <?php $d=getDate();echo $d['mday'].'/'.$d['mon'].'/'.$d['year'] ?>
          </p>
            <p>            Hora:<?php echo $d['hours'].':'.$d['minutes'].':'.$d['seconds']?></p>
            </td>
          </tr></table>
    </center></th>
	<th></th>		
  </tr>
 
 <tr>
    <th colspan="2"></th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
</table><table width="100%">
  <tr id="cabecalho_campos" style="border-bottom:solid 1px" ><td><div align="center"><strong>1 – DADOS DA EMPRESA</strong></div></td>
  </tr></table>
   <table width="100%" height="376" > <?php
include_once('../classes/PHP/conexao_PDO.php');
 

$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', 'maquinas',array('*'), null, array('CODIGO_EMPRESA'), '=',array($codigo_empresa),null,array("CODIGO_MAQUINA"));

$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $r=$conn->executa_acao();        
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
         $conn->prepara_stmt('S', 'fabricantes',array('*'), null, array('CODIGO_FABRICANTE'), array('='),array($row['FABRICANTE']),null,array("CODIGO_FABRICANTE"));
        $r2=$conn->executa_acao();
        $row2=$r2->fetch(PDO::FETCH_ASSOC);
?>
     
     <tr>
       <td  width="40%">Empresa</td><td width="40%"><?php echo $codigo_empresa." ".utf8_encode($nome_empresa)?></td>
     </tr>
     <tr>
       <td  width="9%" >CNPJ </td><td width="9%" align="center"><?php echo $row['TIPO_DE_USO']?></td>
     </tr>
	 
     <tr>
       <td  width="8%" >Endereço</td>
       <td width="8%"><?php echo $row['TAXA_DE_RUIDO']?></td>
     </tr>
     <tr>
       <td  width="9%" >C.E.P</td>
       <td width="9%"><?php echo $row2['NOME']?></td>
     </tr>
     <tr>
       <td  width="1%" >Municipio</td>
       <td width="3%"><?php echo $row['VIDA_UTIL']?><?php echo $row['VIDA_UTIL2']?></td>
     </tr>
	 <tr>
       <td  width="1%" >C.N.A.E. (Port. MTb n.º 01/95)</td>
       <td width="3%"><?php echo $row['VIDA_UTIL']?><?php echo $row['VIDA_UTIL2']?></td>
     </tr>
	 <tr>
       <td  width="1%" >Grau de Risco</td>
       <td width="3%"><?php echo $row['VIDA_UTIL']?><?php echo $row['VIDA_UTIL2']?></td>
     </tr> 
   
  <?php 
  }
}
else {?>
  <table width="100%">
    <tr style="border:none" id="tr_detalhe">
      <td align="center" style='color:red' width="100%">Arquivo não contém registros a serem impressos!</td>
    </tr>
  </table>
  <?php }
  ?>
   </table>
   <p>&nbsp;</p>
   <table width="100%">
<tr><td><div align="center"><strong>2 – OBJETIVOS</strong></div></td>
</tr>
<tr><td>O Programa de Prevenção de Riscos Ambientais PPRA, visa atender a Portaria 3.214/78 na sua
    <strong>Norma Regulamentadora No. 09</strong>, visando preservar a saúde e a integridade física dos
trabalhadores, através da antecipação, reconhecimento, avaliação e conseqüente controle dos
riscos ambientais.
</td>
</tr>
</table>
   <p>&nbsp;</p>
<table width="100%">
<tr><td><div align="center"><strong>3 ––– INVESTIMENTOS --- 2010</strong></div></td>
</tr><tr><td><strong>A empresa não nos repassou os dados de investimentos e metas previstas no PPRA</strong>,
conforme o <strong>DECRETO No. 7331 DE 19 /10 /2010</strong> – Altera o Regulamento da Previdência
Social, aprovado pelo Decreto nº 3.048, de 6 de maio de 1999, Art. 201-D §6º e Art. 341.
A empresa, através de seu responsável / procurador, se compromete no<strong> prazo de 30 dias</strong>,
encaminharem os dados pertinentes ao ano fiscal anterior e anexá-lo a este PPRA, atendendo
assim a Legislação.</td>
</tr></table>
<p>&nbsp;</p>
<table width="100%">
  <tr><td><div align="center"><strong>4 – SUBS�?DIOS PARA O PCMSO</strong></div></td>
</tr><tr><td>O documento base do PPRA e o Laudo Ambiental, servirá de base para a implementação e
renovação do PCMSO – Programa de Controle Médico de Saúde Ocupacional, para determinação
de medidas controle à saúde do trabalhador.</td></tr></table>

<p>&nbsp;</p>
<table width="100%">
<tr><td><div align="center"><strong>5 – RISCOS AMBIENTAIS IDENTIFICADOS</strong></div></td>
</tr></table>
<table width="100%">
  <tr><td width="34%">Agentes Físicos</td>
  <td width="66%"><input name="RUIDO" type="radio" id="C" value="C" /> Ruído
<input name="UMIDADE" type="radio" id="C" value="C" /> Umidade
<input name="RADIACAO" type="radio" id="C" value="C" /> Radiações Não Ionizantes</td></tr>
<tr><td>Agentes Ergonômicos</td><td><input name="ILUMINACAO" type="radio" id="C" value="C" />Iluminamento</td>
<tr><td>Agentes Químicos</td><td><input name="ILUMINACAO" type="radio" id="C" value="C" />Tintas e Solventes
<input name="ILUMINACAO" type="radio" id="C" value="C" />Hidrocarbonetos e Outros Compostos de Carbono
<input name="ILUMINACAO" type="radio" id="C" value="C" />Poeiras Incômodas
<input name="ILUMINACAO" type="radio" id="C" value="C" />Fumos Metálicos
<input name="ILUMINACAO" type="radio" id="C" value="C" />Produtos de Limpeza</td></tr>
</table>
<p>&nbsp;</p>
<table width="100%">
  <tr><td><div align="center"><strong>6 – AVALIAÇÕES QUALITATIVAS E QUANTITATIVAS</strong></div></td>
</tr></table>
<table width="100%" border="1">
  <tr><td width="899" height="43">As avaliações quantitativas e qualitativas dos riscos ambientais estão descritos no LTCAT, com
todas informações e registros pertinentes aos agentes agressivos.</td>
</tr></table>
<p>&nbsp;</p>
<table width="100%">
<tr><td><div align="center"><strong>7 – RELAÇÃO DE EPI´S UTILIZADOS</strong></div></td>
</tr></table>
<table><tr><td>Abaixo segue a relação de epi´s utilizados pela empresa com os respectivos C.A´s (Certificados de
Aprovação), lembramos que a numeração pode variar mediante a troca de fornecedor, o que não
influenciará na capacidade de proteção e neutralização dos agentes agressivos</td></tr></table>
<table width="100%">
  <tr><td>EPI</td><td>C.A</td><td>EPI</td><td>C.A</td></tr>
<tr><td>Botas de PVC</td><td></td><td>Respirador semi facial para fumos
metálicos</td><td></td></tr>
<tr><td>Luvas Nitrílicas</td><td></td><td>Máscara com filtro de luz</td><td></td></tr>
<tr><td>Avental de raspa tipo barbeiro</td><td></td><td>Respirador semi facial descartável para
gases ácidos e vapores orgânicos</td><td></td></tr>
<tr><td>Creme protetor para a pele</td><td></td><td>Óculos águia incolor</td><td></td></tr>
<tr><td>Plug de silicone</td><td></td><td>Luva para jato de areia</td><td></td></tr>
<tr><td>Luva de vaqueta</td><td></td><td>Sapato com bico de aço</td><td></td></tr>
<tr><td>Tênis com bico de aço</td><td></td>Botina com bico de aço<td></td><td></td></tr></table>
<p>&nbsp;</p>
<table width="100%">
  <tr><td><div align="center"><strong>8 – ANTECIPAÇÃO E RECONHECIMENTO DOS RISCOS AMBIENTAIS
  Resumo LTCAT</strong></div></td>
</tr><tr><td>Os dados abaixo foram coletados do LTCAT, visando facilitar a visualização dos registros ambientais.
A gradação de qualitativa dos agentes agressivos, visa demonstrar o potencial de exposição do risco
ambiental.</td></tr></table><table width="100%">
  <tr><td><div align="center"><strong>LEGENDA</strong></div></td>
</tr></table><table width="100%">
  <tr><td bgcolor="#00FF00" width="12%"></td>
  <td width="88%">Risco Abaixo ou Dentro do Limite de Tolerância</td>
  </tr>
<tr><td bgcolor="#FFFF00"></td><td>Risco Controlado com EPI / EPC</td></tr>
<tr><td bgcolor="#FF0000"></td><td>Risco Acima do Limite de Tolerância – Sem proteção</td></tr>
<tr><td><div align="center">N.A</div></td><td>Não Aplicável</td></tr>
<tr><td><div align="center">N.O</div></td><td>Não Observado</td></tr></table>
<table width="100%">
<tr><td>setor</td></tr></table>
<table width="100%">
<tr><td>RISCOS F�?SICOS</td></tr></table>
<table width="100%" height="69">
  <tr><td width="24">Tipo</td>
<td width="84">Fonte geradora</td>
<td width="65">intensidade</td>
<td width="74">Grau de risco</td>
<td width="101">Funçoes expostas</td>
<td width="27">Sexo</td>
<td width="115">medidas de controle</td>
</tr>
<tr><td width="24" height="14"></td>
<td width="84"></td>
<td width="65"></td>
<td width="74"></td>
<td width="101"></td>
<td width="27"></td>
<td width="115"></td>
</tr></table>
<table width="100%">
  <tr><td><p>Funções que não estão expostas a nenhum agente agressivo:
   </p>
      <p> • Analista de Sistemas
        • Auxiliar Administrativo</p></td></tr><tr><td height="25"><p>Observações:
 </p>
    <p> * Descrição detalhada das fontes vide LTCAT
      Por ser considerado agente ergonômico, as medições de iluminamento não estão descritas neste PPRA e sim no
      LTCAT, pois não afetam diretamente a saúde e integridade do trabalhador.</p></td>
</tr></table>
<p>&nbsp;</p>
<table><tr><td><div align="center"><strong>9 – PRIORIDADES / CRONOGRAMA DE ATIVIDADES</strong></div></td>
</tr>
<tr><td>As medidas de controle sobre os agentes agressivos identificados no LTCAT, devem ter seus prazos
respeitados conforme a prioridade e cronograma de execução destas. As alterações de prazo devem
ser justificadas desde que não afetem de imediato a saúde e integridade física dos trabalhadores.</td></tr></table>
<table width="100%">
<tr><td>Prioridade / Ação</td><td>Objetivo</td><td>MÊS DE EXECUÇÃO</td></tr></table>
<table width="100%">
  <tr><td>Observações:
Por ser considerado agente ergonômico, as medições de iluminamento não estão descritas neste
PPRA e sim no LTCAT, pois não afetam diretamente a saúde e integridade do trabalhador</td></tr></table>
<p>&nbsp;</p>
<table><tr><td><div align="center"><strong>10 – DIVULGAÇÃO</strong></div></td>
</tr><tr><td>Todos os dados referentes ao PPRA estarão à disposição dos empregados, seus representantes
legais e órgãos competentes. As informações e esclarecimentos sobre o PPRA serão fornecidos
aos trabalhadores através de palestra e outros meios de comunicação da empresa.</td></tr></table>
<p>&nbsp;</p>
<table width="100%">
<tr><td><div align="center"><strong>11 ––– RESPONS�?VEL PELA ELABORAÇÃO DO PPRA</strong></div></td>
</tr><tr><td></td></tr></table>
<table width="100%">
<tr><td>Responsável da XXXXX</td><td>Data</td></tr><tr><td></td><td><p>Assinatura</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p></td></tr></table>
<p>&nbsp;</p>
<table><tr><td><div align="center"><strong>12 ––– RESPONS�?VEL PELA EXECUÇÃO DO PPRA</strong></div></td>
</tr><tr><td>As recomendações e medidas preventivas adotadas, bem como os prazos para execução de
medidas complementares serão seguidas e implantadas, conforme cronograma de prioridades.
Estando ciente que a não manutenção das medidas de controle, tanto individuais quanto
coletivas, poderão afetar a saúde e integridade física dos funcionários, descaracterizando assim a
proteção / neutralização dos agentes agressivos.</td></tr></table>
<table width="100%">
<tr><td>Responsáveis da Empresa</td><td>Data</td></tr><tr><td></td><td><p>Assinatura</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p></td></tr></table>
</body>
 </html>
