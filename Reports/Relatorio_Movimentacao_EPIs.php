<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$codigo_empresa=$_SESSION['empresa_ativa'];
$nome_empresa=$_SESSION['nome_empresa_ativa'];
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
  #rodape_pagina{position:absolute;bottom:10px;page-break-after:always}
  #cabecalho_campos{position:relative}
#cabecalho_pagina { display: table-header-group;position:static } 
#relatorio{
    height:20cm;
    page-break-after:auto;    
}

}
@media screen{
body{width:auto;margin:0 5;height:800px;}
  table{ font-size:12px;font-family:Arial, Helvetica, sans-serif}
 #cabecalho_campos{position:relative}
 thead{display: table-header-group}
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
<div id="relatorio">
<table id="cabecalho_pagina" width="100%" style="border-bottom:solid 1px"  >
    <thead>   
    <thead>           
    <tr>
    <th colspan="2"><div align="left"><img id="image"src="cyberpc150dpi.jpg" width="149px" height="64px" /></div></th>
    <th colspan="2"><center>
      <h2>Relatório de Movimentação de EPIs </h2>
    </center></th>
	<th></th>		
  </tr>
  <tr>
    <th colspan="2"><div align="left"><h3>Empresa</h3><?php echo $codigo_empresa." ".$nome_empresa?></div></th>
    <th width="41%"><div align="left">Periodo:    </div></th>
    <th width="19%"><div align="right">Data de Emiss&atilde;o:<?php $d=getDate();echo $d['mday'].'/'.$d['mon'].'/'.$d['year'] ?></div></th>
    <th width="18%"><div align="right">Hora:<?php echo $d['hours'].':'.$d['minutes'].':'.$d['seconds']?></div></th>
  </tr>
 <tr>
    <th colspan="2"></th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
   </thead>  


</table>
<table width="100%" >    
  <tr id="cabecalho_campos" style="border-bottom:solid 1px" >

      <td  width="7%" rowspan="2" valign="top">Sequencial</td>
      <td  width="4%" rowspan="2" valign="top">Código</td>
    <td  width="10%" rowspan="2" valign="top" style="min-width:30%">Descrição do EPI </td>
    <td  width="7%" rowspan="2" valign="top"><div align="center">
      <p>Tipo Prote&ccedil;&atilde;o </p> 
    </div></td>
    <td  width="6%" rowspan="2" valign="top">Tamanho</td>
    <td  width="5%" rowspan="2" valign="top">Codigo CA </td>
<td colspan="2" valign="top"><div align="center">Vida &Uacute;til </div></td>    
    <td  width="5%" rowspan="2" valign="top">Proxima Troca Prevista</td>
    <td colspan="2" rowspan="2" valign="top">Funcion&aacute;rio</td>
    <td  width="15%" rowspan="2" valign="top">Data Movimentação </td>

  <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
    <td  width="5%" valign="top">Dura&ccedil;&atilde;o</td>
    <td  width="3%" valign="top">Fator</td>
  </tr>
<tr>
</tr>
<?php
include_once('../classes/PHP/conexao_PDO.php');
 

$conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
$conn->prepara_stmt('S', array('movimentacao_epis_m m','movimentacao_epis_d d','epis e','funcionarios f'),array('*'), null, array('m.CODIGO_EMPRESA','d.CODIGO_EMPRESA','e.CODIGO_EMPRESA','m.SEQUENCIAL','d.CODIGO_EPIS','f.CODIGO_FUNCIONARIO'), array('=','=','=','=','=','='),array($codigo_empresa,'[m.CODIGO_EMPRESA]','[d.CODIGO_EMPRESA]','[d.SEQUENCIAL]','[e.CODIGO_EPIS]','[m.CODIGO_FUNCIONARIO]'),null,array("m.SEQUENCIAL"));

$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $r=$conn->executa_acao();        
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
?>
    <tr style="border:none" id="tr_detalhe">
    <td width="7%"><?php echo $row['SEQUENCIAL']?></td>
    <td width="4%"><?php echo $row['CODIGO_EPIS']?></td>
    <td width="10%"><?php echo mb_strtoupper($row['DESCRICAO_EPI'])?></td>
    <td width="7%" align="center"><?php echo $row['TIPO_DE_PROTECAO']?></td>
	<td width="6%"><?php echo $row['TAMANHO']?></td>
	<td width="5%"><?php echo $row['CODIGO_CA']?></td>
    <td width="5%"><?php echo $row['VIDA_UTIL']?></td>
    <td width="3%"><?php echo $row['VIDA_UTIL2']?></td>
	<td width="5%"><?php echo $row['PROXIMA_TROCA_PREVISTA']?></td>
    <td width="7%"><span style="font-size:10px"><?php echo $row['CODIGO_FUNCIONARIO']?></span></td>
	<td width="26%" style="font-size:10px"><?php echo $row['NOME_FUNCIONARIO']?></td>
    <td width="15%" style="font-size:10px" align="left"><?php echo $row['DATA_CRIACAO_REGISTRO']?> </td>
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
</div>
<div id="rodape_pagina">

</div>
</body>
 </html>
