<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$ea=new Busca_Empresa_Ativa($_SESSION['id_usuario']);
$codigo_empresa=$ea->retorna_empresa();
$nome_empresa=$ea->retorna_nome_empresa();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9"/>
<meta name="robots" content="noindex, nofollow"/>
<meta name="googlebot" content="noindex">
<meta http-equiv="cache-control" content="no-cache">    
<meta http-equiv="X-UA-Compatible" content="IE=8" />

<title>Brove.NET ISO Yaz?l?m?</title>
<link rel="stylesheet" type="text/css" href="css/pagination.css" />
<style>
    #all thead { display: table-header-group; }
    #all tfoot { display: table-footer-group; }
    .header_table{ height:100px; }
    .footer_table{ height:100px; }
</style>
</head>

<body>
<table id="all">
   <thead><tr><td><table class="header_table"><tr><td>Your header goes here</td></tr></table></td></tr></thead>
   <tfoot><tr><td><table class="footer_table"><tr><td>Your footer goes here</td></tr></table></td></tr></tfoot>
   <tbody>
     <tr><td>
       Page body in here -- as long as it needs to be<br />
       <!-- i wrote this many -->
     </td></tr>
<?php
include_once('../classes/PHP/conexao_PDO.php');
 

$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
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
       
   </tbody>
</table>
</body>
</html>