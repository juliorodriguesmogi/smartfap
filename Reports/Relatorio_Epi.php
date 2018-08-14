<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$codigo_empresa=$_SESSION['empresa_ativa'];
$nome_empresa=$_SESSION['nome_empresa_ativa'];
$codigo_epi=$_POST['CODIGO_EPIS'];

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
      <h2>Ficha do Epi</h2>
    </center></th>
	<th></th>		
  </tr>
  <tr>
    <th colspan="2"><div align="left"><h3>Empresa</h3><?php echo $codigo_empresa." ".$nome_empresa?></div></th>
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
 <?php
include_once('../classes/PHP/conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', 'epis',array('*'), null, array('CODIGO_EMPRESA','CODIGO_EPIS'), array('=','='),array($codigo_empresa,$codigo_epi),null,array("CODIGO_EPIS"));
$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $r=$conn->executa_acao(); 
    $nacionalidade=array('I'=>'Importado','N'=>'Nacional',''=>'NÃO IDENTIFICADO'); 
    $nivel_protecao=array('B'=>'Baixo','A'=>'Alto','M'=>'Médio');
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
         $conn->prepara_stmt('S', 'fabricantes',array('*'), null, array('CODIGO_FABRICANTE'), array('='),array($row['FABRICANTE']),null,array("CODIGO_FABRICANTE"));
        $r2=$conn->executa_acao();
        $row2=$r2->fetch(PDO::FETCH_ASSOC);
?>
       
     <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
     <tr>
       <td  width="5%">Codigo</td>
       <td width="5%"><?php echo $row['CODIGO_EPIS']?></td>
     </tr>
       <tr>
       <td  width="5%">Descrição</td>
       <td width="5%"><?php echo $row['DESCRICAO']?></td>
     </tr>
       <tr>
       <td  width="5%">Tipo de proteção</td>
       <td width="5%"><?php echo $row['TIPO_DE_PROTECAO']?></td>
     </tr>
       <tr>
       <td  width="5%">Codigo do CA</td>
       <td width="5%"><?php echo $row['CODIGO_CA']?></td>
     </tr>
       <tr>
       <td  width="5%">Validade CA</td>
       <td width="5%"><?php echo $row['VALIDADE_CA']?></td>
     </tr>
       <tr>
       <td  width="5%">Fabricante</td>
       <td width="5%"><?php echo $row2['NOME']?></td>
     </tr>
      <tr>
       <td  width="5%">Natureza</td>
       <td width="5%"><?php echo $nacionalidade[$row['NATUREZA']]?></td>
     </tr>
     <tr>
       <td  width="7%">Vida util</td>
       <td width="7%"><?php echo mb_strtoupper($row['VIDA_UTIL'])?>  <?php echo mb_strtoupper($row['VIDA_UTIL2'])?></td>
     </tr>
     <tr>
       <td  width="24%">Tamanho
       <td width="24%" ><?php echo $row['TAMANHO']?></td>
     </tr>
    <tr>
       <td  width="24%">Nivel de Proteção
       <td width="24%" ><?php echo $nivel_protecao[$row['NIVEL_PROTECAO']]?></td>
     </tr>
     <tr>
       <td  width="24%">Codigo wpi base
       <td width="24%" ><?php echo $row['CODIGO_EPI_BASE']?></td>
     </tr>
    
         
  <td  width="14%">Data do Cadastro </td><td width="14%" style="font-size:10px" align="left"><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['DATA_CADASTRO'])?></td>
  </tr>
  <td  width="12%">Ultima Atualização </td><td><span style="font-size:10px"><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['ULTIMA_ATUALIZACAO'])?></span></td>
  </tr>
  <tr style="border:none" id="tr_detalhe">
  <tr></tr>
  
  <tr>
    
    
  </tr>
  <?php 
  }
}
else {?>
  <table width="100%">
    <tr style="border:none" id="tr_detalhe">
      <td align="center" style='color:red' width="100%">Arquivo nï¿½o contï¿½m registros a serem impressos!</td>
    </tr>
  </table>
  <?php }
  ?>
   </table>
</body>
 </html>

