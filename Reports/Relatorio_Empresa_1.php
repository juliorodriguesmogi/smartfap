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
      <h2>Relatório de Fun&ccedil;&otilde;es Cadastradas </h2>
    </center></th>
	<th></th>		
  </tr>
  <tr>
    <th colspan="2" valign="bottom"><div align="left"><h3>&nbsp;</h3>
      <h3>Empresa  <span style="max-width:100px"><?php echo $codigo_empresa." ".$nome_empresa?></span></h3>
      <div style="max-width:100px"></div>
    </div></th>
    <th width="34%"><div align="left">    </div></th>
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
    <td  width="4%" valign="top">C&oacute;digo Fun&ccedil;&atilde;o </td>
   <td  width="1%" valign="top">codigo cbo da familia </td>
   <td  width="6%" valign="top">codigo cbo ocupação </td>
   <td  width="3%" valign="top">codigo cbo sinonimo </td>
   <td  width="4%" valign="top">descrição resumida da familia </td>
   <td  width="6%" valign="top">descrição resumida da ocupação </td>
   <td  width="4%" valign="top">descrição resumida sinonimo </td>

    <td  width="10%" valign="top">Data de Cadastro </td>
    <td  width="10%" valign="top">Última Atualização </td>
  </tr>
  
<?php
include_once('../classes/PHP/conexao_PDO.php');
 

$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', 'empresas',array('*'), null,null , null,null,array("CODIGO_EMPRESA"));

$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $r=$conn->executa_acao();        
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
?>
    <tr style="border:none" id="tr_detalhe">
    <td width="5%"><?php echo mb_strtoupper($row['SITUACAO'])?></td>
   <td width="5%"><?php echo mb_strtoupper($row['NOME_FANTASIA'])?></td>
   <td width="5%"><?php echo mb_strtoupper($row['GRAU_RISCO'])?></td>


   
	<td width="16%" style="font-size:10px"><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['DATA_CADASTRO'])?></td>
    <td width="17%" style="font-size:10px;max-length:100px;" align="left" ><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['ULTIMA_ATUALIZACAO'])?> </td>
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
  
</body>
 </html>