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
tr td {border-bottom: 1pt dotted black}
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
      <h2>Relatório de Instrumentos de Medição Cadastrados </h2>
    </center></th>
	<th></th>		
  </tr>
  <tr>
    <th colspan="2" valign="bottom"><div align="left"><h3>&nbsp;</h3>
      <h3>Empresa  <span style="max-width:100px"><?php echo $codigo_empresa." ".utf8_encode($nome_empresa)?></span></h3>
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
    <td  width="6%" rowspan="2" valign="top">Codigo</td>
    <td  width="13%" rowspan="2" valign="top">Descrição do instrumento</td>
    <td  width="5%" rowspan="2" valign="top">Categoria </td>
   <td  width="5%" rowspan="2" valign="top">Tipo </td>
   <td  width="6%" rowspan="2" valign="top">Marca </td>
   <td  width="5%" rowspan="2" valign="top">Modelo </td>
   <td  width="13%" rowspan="2" valign="top">Data de Calibração </td>
   <td  width="10%" rowspan="2" valign="top">Data de Cadastro </td>
   <td  width="10%" rowspan="2" valign="top">Última Atualização </td>
  </tr>
  <tr></tr>
 
  
<?php
include_once('../classes/PHP/conexao_PDO.php');
 

$conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
$conn->prepara_stmt('S', 'instrumentos',array('*'), null,array('CODIGO_EMPRESA'),array('=') , array($codigo_empresa),array("CODIGO_INSTRUMENTO"));

$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $r=$conn->executa_acao();        
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
?>
   <tr style="border:none" id="tr_detalhe">
   <td width="6%"><?php echo $row['CODIGO_INSTRUMENTO']?></td>
   <td width="13%"><?php echo mb_strtoupper($row['DESCRICAO_INSTRUMENTO'])?></td>
   <td width="5%"><?php echo mb_strtoupper($row['CATEGORIA'])?></td>
   <td width="5%"><?php echo mb_strtoupper($row['TIPO'])?></td>
   <td width="6%"><?php echo mb_strtoupper($row['MARCA'])?></td>
   <td width="5%"><?php echo mb_strtoupper($row['MODELO'])?></td>
   <td width="13%"><?php echo mb_strtoupper($row['DATA_CALIBRACAO'])?></td>
    
	<td width="10%" style="font-size:10px"><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['DATA_CADASTRO'])?></td>
    <td width="10%" style="font-size:10px;max-length:100px;" align="left" ><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['ULTIMA_ATUALIZACAO'])?> </td>
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