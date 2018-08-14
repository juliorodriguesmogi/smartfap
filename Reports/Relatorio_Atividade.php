<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$codigo_empresa=$_SESSION['empresa_ativa'];
$nome_empresa=$_SESSION['nome_empresa_ativa'];
$codigo_atividade=$_POST['CODIGO_ATIVIDADE'];
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
      <h2>Ficha da Atividade </h2>
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
 $classificacao=array('A'=>'Administrativa','O'=>'Operacional',''=>'Não-definida');  
include_once('../classes/PHP/conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', 'atividades',array('*'), null, array('CODIGO_EMPRESA','CODIGO_ATIVIDADE'), array('=','='),array($codigo_empresa,$codigo_atividade),null,array("CODIGO_ATIVIDADE"));
$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $r=$conn->executa_acao();        
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
        $conn->prepara_stmt('S', 'atividade_funcoes',array('*'), null, array('CODIGO_EMPRESA','CODIGO_ATIVIDADE'), array('=','='),array($codigo_empresa,$codigo_atividade),null,array("CODIGO_FUNCAO"));
$r2=$conn->executa_acao();      
   $row2=$r2->fetch(PDO::FETCH_ASSOC);
?>
       
     <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
     <tr>
       <td  width="5%">Codigo</td>
       <td width="5%"><?php echo $row['CODIGO_ATIVIDADE']?></td>
     </tr>
     <tr>
       <td  width="7%">Descrição</td>
       <td width="7%"><?php echo mb_strtoupper($row['DESCRICAO_ATIVIDADE'])?></td>
     </tr>
     <tr>
       <td  width="24%">Classificação
       <td width="24%" ><?php echo $classificacao[$row['CLASSIFICACAO_ATIVIDADE']]?></td>
     </tr>
    
         
  <td  width="14%">Data do Cadastro </td><td width="14%" style="font-size:10px" align="left"><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['DATA_CADASTRO'])?></td>
  </tr>
    <td  width="12%">Ultima Atualização </td>
      <td><span style="font-size:10px"><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['ULTIMA_ATUALIZACAO'])?></span></td>
  </tr>
  <tr>
  </tr> 
  <tr><td> </td></tr>
   <tr><td> </td></tr>
    <tr><td> </td></tr>
  <tr>
  <td colspan="2"><strong><center>Funções Associadas à Atividade</center></strong></td>
  </tr>
  <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
  <td>Código da Função</td>
    <td>Descrição da Função</td>
  </tr>
 <?php include_once('../classes/PHP/conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', 'atividade_funcoes',array('*'), null, array('CODIGO_EMPRESA','CODIGO_ATIVIDADE'), array('=','='),array($codigo_empresa,$codigo_atividade),null,array("CODIGO_ATIVIDADE"));
$r=$conn->executa_acao();      

if ($r->fetchall(PDO::FETCH_ASSOC)>0){
    $r=$conn->executa_acao();      
    while($row2=$r->fetch(PDO::FETCH_ASSOC)){
?>
   <tr>
   <td><?php echo $row2['CODIGO_FUNCAO']?> </td>
   
   <td><?php echo $row2['DESCRICAO_FUNCAO']?> </td>
   
   </tr>
<?php }}
else{
	   echo "<tr><td style='color:red' colspan='2'><center>Não há funções associadas a essa atividade<center></td></tr>";

}
?>
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
      <td align="center" style='color:red' width="100%">Arquivo n�o cont�m registros a serem impressos!</td>
    </tr>
  </table>
  <?php }
  ?>
   </table>
</body>
 </html>

