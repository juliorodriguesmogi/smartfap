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
      <h2>Relatório de Máquinas e Equipamentos Cadastrados </h2>
    </center></th>
	<th></th>		
  </tr>
  <tr>
    <th colspan="2"><div align="left"><h3>Empresa</h3><?php echo $codigo_empresa." ".utf8_encode($nome_empresa)?></div></th>
    <th width="41%"><div align="left">    </div></th>
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

    
    <td  width="6%" rowspan="2">Código</td>
    <td  width="40%" rowspan="2">Nome</td>
    <td  width="9%" rowspan="2">Taxa de Luminosidade (Lux)</td>
    <td  width="8%" rowspan="2">Taxa de Ruído</td>
    <td  width="9%" rowspan="2">Unidade </td>
    <td  width="15%" colspan="2" rowspan="2">Setor</td>
         <td  width="14%" rowspan="2">Usu&aacute;rio criador </td>
         <td  width="14%" rowspan="2">Atualizado por  </td>
         <td  width="28%" rowspan="2">Data Cria&ccedil;&atilde;o </td>
    <td  width="20%" rowspan="2">Última Atualização </td>
  </tr>

  <td width="6%"></tr>
  
<?php
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
    <tr style="border:none" id="tr_detalhe">
    <td width="6%"><?php echo $row['CODIGO_MAQUINA']?></td>
    <td width="40%"><?php echo mb_strtoupper($row['NOME'])?></td>
    <td width="9%" align="center"><?php echo $row['TAXA_DE_LUMINOSIDADE']?></div></td>
	<td width="8%"><?php echo $row['TAXA_DE_RUIDO']?></td>

        <?php
         $conn->prepara_stmt('S', 'estrutura_organizacional',array('*'), null, array('CODIGO_EMPRESA','UNIDADE'), array('=','='),array($row['CODIGO_EMPRESA'],$row['UNIDADE']),null,array("UNIDADE"));
         $r3=$conn->executa_acao();
          $row3=$r3->fetch(PDO::FETCH_ASSOC);
         $conn->prepara_stmt('S', 'setores',array('*'), null, array('CODIGO_EMPRESA','CODIGO_SETOR'), array('=','='),array($row['CODIGO_EMPRESA'],$row['CODIGO_SETOR']),null,array("CODIGO_SETOR"));
         $r4=$conn->executa_acao();
          $row4=$r4->fetch(PDO::FETCH_ASSOC);
        
        ?>
	<td width="3%"><?php echo $row3['DESCRICAO_UNIDADE']?><?php echo $row['VIDA_UTIL2']?></td>
	<td width="0%" colspan="2"><?php echo $row4['NOME_SETOR']?></td>
        <td width="0%"><?php echo $row['ULTIMO_USUARIO']?></td>
        <td width="28%"><span style="font-size:10px"><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['DATA_CADASTRO'])?></span></td>
        <td width="20%"><span style="font-size:10px"><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['ULTIMA_ATUALIZACAO'])?></span></td>
    <td>&nbsp;</td>
	<td width="16%" style="font-size:10px">&nbsp;</td>
    <td width="17%" style="font-size:10px" align="left">&nbsp;</td>
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
