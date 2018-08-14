<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$ea=new Busca_Empresa_Ativa($_SESSION['id_usuario']);
$codigo_empresa=$ea->retorna_empresa();
$nome_empresa=$ea->retorna_nome_empresa();
?>
<html>
<head>
    <style type="text/css" >
@media print{
document.location{display: none}
body{width:auto;margin:2 auto}
  table{ font-size:9px;font-family:Arial, Helvetica, sans-serif}
  img{display:inline;visibility: visible}
  button{display:none}
  #cabecalho_campos{position:relative}


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
table #tr_detalhe td{
    text-transform: uppercase;
}

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
      <h2>Relat�rio de Entrega/Devolu&ccedil;&atilde;o </h2>
      <h2>de EPIs por Funcion&aacute;rio </h2>
    </center></th>
	<th></th>		
  </tr>
  <tr>
    <th colspan="2"><div align="left"><h3>Empresa</h3><?php echo $codigo_empresa." ".$nome_empresa?></div></th>
    <th width="41%"><div align="left">Periodo:    </div></th>
    <th width="21%"><div align="right">Data de Emiss&atilde;o:<?php $d=getDate();echo $d['mday'].'/'.$d['mon'].'/'.$d['year'] ?></div></th>
    <th width="16%"><div align="right">Hora:<?php echo $d['hours'].':'.$d['minutes'].':'.$d['seconds']?></div></th>
  </tr>
 <tr>
    <th colspan="2"></th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
</table>
<table width="100%" >    
  <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
    <td  width="6%" rowspan="2" valign="top">C�digo</td>
    <td  width="13%" rowspan="2" valign="top" style="min-width:30%">Descri��o do EPI </td>
    <td  width="9%" rowspan="2" valign="top"><div align="center">
      <p>Tipo Prote&ccedil;&atilde;o </p> 
    </div></td>
    <td  width="6%" rowspan="2" valign="top">Tamanho</td>
    <td  width="6%" rowspan="2" valign="top">Codigo CA </td>
    <td  width="4%" rowspan="2" valign="top">Validade CA  </td>
    <td colspan="2" valign="top"><div align="center">Vida &Uacute;til </div></td>
    <td colspan="2" rowspan="2" valign="top">Funcion&aacute;rio</td>
    <td  width="17%" rowspan="2" valign="top">�ltima Atualiza��o </td>
  </tr>
  <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
    <td  width="5%" valign="top">Dura&ccedil;&atilde;o</td>
    <td  width="5%" valign="top">Fator</td>
  </tr>
  
<?php
include_once('../classes/PHP/conexao_PDO.php');
 

$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', 'movimentacao_epis_d',array('*'), null, array('CODIGO_EMPRESA'), '=',array($codigo_empresa),null,array("SEQUENCIAL"));

$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $r=$conn->executa_acao();        
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
?>
    <tr style="border:none" id="tr_detalhe">
    <td width="6%"><?php echo $row['CODIGO_EPIS']?></td>
    <td width="13%"><?php echo mb_strtoupper($row['DESCRICAO'])?></td>
    <td width="9%" align="center"><?php echo $row['TIPO_DE_PROTECAO']?></div></td>
	<td width="6%"><?php echo $row['TAMANHO']?></td>
	<td width="6%"><?php echo $row['CODIGO_CA']?></td>
    <td width="4%"><?php echo $row['VALIDADE_CA']?></td>
    <td width="5%"><?php echo $row['VIDA_UTIL']?></td>
	<td width="5%"><?php echo $row['VIDA_UTIL2']?></td>
    <td width="9%"><span style="font-size:10px"><?php ?></span></td>
	<td width="16%" style="font-size:10px"><?php ?></td>
    <td width="17%" style="font-size:10px" align="left"><?php echo $row['ULTIMA_ATUALIZACAO']?> </td>
  </tr>
  <?php 
  }
}
else {?>
 <table width="100%">
 <tr style="border:none" id="tr_detalhe">
 <td align="center" style='color:red' width="100%">Arquivo n�o cont�m registros a serem impressos!</td>
 </tr>
 </table>
<?php }
  ?>
</table>
  
</body>
 </html>
