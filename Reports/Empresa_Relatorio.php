<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$codigo_empresa=$_SESSION['empresa_ativa'];
$nome_empresa=$_SESSION['nome_empresa_ativa'];
$situacao=$_POST['SITUACAO'];
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
      <h2>Ficha da Empresa </h2>
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
$conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
$conn->prepara_stmt('S', 'empresas',array('*'), null, array('CODIGO_EMPRESA','SITUACAO'), array('=','='),array($codigo_empresa,$situacao),null,array("SITUACAO"));
$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
      $situacao=array('A'=>'Ativa','B'=>'Bloqueada','C'=>'Cancelada','D'=>'Outras',' '=>'NÃ£o configurada');
    $r=$conn->executa_acao();        
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
?>
       
     <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
     <tr>
       <td  width="5%">Situação</td>
       <td width="5%"><?php echo mb_strtoupper($situacao[$row['SITUACAO']])?></td>
     </tr>
     <tr>
       <td  width="7%">Codigo</td>
       <td width="7%"><?php echo mb_strtoupper($row['CODIGO_EMPRESA'])?></td>
     </tr>
     <tr>
       <td  width="24%">Nome Fantasia</td>
       <td width="24%" ><?php echo $row['NOME_FANTASIA']?></td>
     </tr>
     <tr>
       <td  width="24%">Razão social</td>
       <td width="24%" ><?php echo $row['RAZAO_SOCIAL']?></td>
     </tr>
     <tr>
       <td  width="24%">CNPJ</td>
       <td width="24%" ><?php echo $row['CNPJ']?></td>
     </tr>
     <tr>
       <td  width="24%">CNAE</td>
       <td width="24%" ><?php echo $row['CODIGO_CNAE']?></td>
     </tr>
     <tr>
       <td  width="24%">Tipo de Logradouro</td>
       <td width="24%" ><?php echo $row['TIPO_LOGRADOURO_COMERCIAL']?></td>
     </tr>
     <tr>
       <td  width="24%">Municipio</td>
       <td width="24%" ><?php echo $row['MUNICIPIO_COMERCIAL']?></td>
     </tr>
     <tr>
       <td  width="24%">UF</td>
       <td width="24%" ><?php echo $row['UF_COMERCIAL']?></td>
     </tr>
     <tr>
       <td  width="24%">Endereço</td>
       <td width="24%" ><?php echo $row['ENDERECO_COMERCIAL']?></td>
     </tr>
     <tr>
       <td  width="24%">Bairro</td>
       <td width="24%" ><?php echo $row['BAIRRO_COMERCIAL']?></td>
     </tr> 
     <tr>
       <td  width="24%">N° de Funcionarios</td>
       <td width="24%" ><?php echo $row['NUMERO_FUNCS']?></td>
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

