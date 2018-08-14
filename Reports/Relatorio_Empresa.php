<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$ea=new Busca_Empresa_Ativa($_SESSION['id_usuario']);
$codigo_empresa=$ea->retorna_empresa();
$nome_empresa=$ea->retorna_nome_empresa();
?>
<html>
    
    
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />      
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
      <h2>Relatório de Empresas Cadastradas </h2>
    </center></th>
	<th></th>		
  </tr>
  <tr>
    <th colspan="2" valign="bottom"><div align="left"><h3>&nbsp;</h3>
      <div style="max-width:100px"></div>
    </div></th>
    <th width="39%"><div align="left">    </div></th>
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
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td colspan="4" valign="top"><div align="center">Endere&ccedil;o Comercial </div></td>
  </tr>
  <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
    <td  width="5%" valign="top">Situa&ccedil;&atilde;o</td>
    <td  width="6%" valign="top">C&oacute;digo Empresa </td>
   <td  width="11%" valign="top">Nome Fantasia </td>
   <td  width="20%" valign="top">Raz&atilde;o Social </td>
   <td  width="8%" valign="top">CNPJ/CEI</td>
   <td  width="7%" valign="top">CNAE</td>
   <td  width="14%" valign="top">Logradouro</td>
   <td  width="13%" valign="top">Bairro</td>

    <td  width="14%" valign="top">Cidade</td>
    <td  width="2%" valign="top">UF </td>
  </tr>
  
<?php
include_once('../classes/PHP/conexao_PDO.php');
 

$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', 'empresas',array('*'), null,null , null,null,null,array("RAZAO_SOCIAL"));
$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $situacao=array('A'=>'Ativa','B'=>'Bloqueada','C'=>'Cancelada','D'=>'Outras',' '=>'Não configurada');
    $r=$conn->executa_acao();        
     $razao_social=null;
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
?>
    <tr style="border:none" id="tr_detalhe">
      <td width="5%"><?php echo mb_strtoupper($situacao[$row['SITUACAO']])?></td>
    <td width="6%"><?php echo mb_strtoupper($row['CODIGO_EMPRESA'])?></td>
    <td width="11%"><?php echo (mb_strtoupper($row['NOME_FANTASIA']))?></td>
    <td width="20%"><?php echo (mb_strtoupper($row['RAZAO_SOCIAL']))?></td>
      <td width="8%"><?php echo mb_strtoupper($row['CNPJ'])?></td>
      <td width="7%"><?php echo mb_strtoupper($row['CODIGO_CNAE'])?></td>	  
      <td width="14%"><?php echo (mb_strtoupper($row['TIPO_LOGRADOURO_COMERCIAL']).' '.mb_strtoupper($row['ENDERECO_COMERCIAL']).', '.mb_strtoupper($row['NRO_COMERCIAL']))?></td>	  	      <td width="13%"><?php echo (mb_strtoupper($row['BAIRRO_COMERCIAL']))?></td>	  	  
      <td width="14%"><?php echo (mb_strtoupper($row['MUNICIPIO_COMERCIAL']))?></td>	  	  		
      <td width="2%"><?php echo ($row['UF_COMERCIAL'])?></td>	  	  		
<?php
if ($razao_social !=null && $row['RAZAO_SOCIAL']!=$razao_social){
    echo "<td style='border-bottom:double'></td>";
}
$razao_social=$row['RAZAO_SOCIAL'];
?>
   
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