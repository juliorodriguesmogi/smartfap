<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$codigo_empresa=$_SESSION['empresa_ativa'];
$nome_empresa=$_SESSION['nome_empresa_ativa'];
$codigo_funcionario=$_POST['CODIGO_FUNCIONARIO'];
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
      <h2>Ficha do Funcion&aacute;rio </h2>
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
$conn->prepara_stmt('S', 'funcionarios',array('*'), null, array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO'), array('=','='),array($codigo_empresa,$codigo_funcionario),null,array("CODIGO_FUNCIONARIO"));
$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $r=$conn->executa_acao();        
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
           $conn->prepara_stmt('S', 'funcoes',array('*'), null, array('CODIGO_EMPRESA','CODIGO_FUNCAO'), array('=','='),array($_SESSION['empresa_ativa'], $row['FUNCAO']),null,array("CODIGO_FUNCAO"));
        $r2=$conn->executa_acao();
        $row2=$r2->fetch(PDO::FETCH_ASSOC);
     
         $conn->prepara_stmt('S', 'estrutura_organizacional',array('*'), null, array('CODIGO_EMPRESA','UNIDADE'), array('=','='),array($_SESSION['empresa_ativa'], $row['UNIDADE']),null,array("UNIDADE"));
        $r3=$conn->executa_acao();
        $row3=$r3->fetch(PDO::FETCH_ASSOC);		
         $conn->prepara_stmt('S', 'setores',array('*'), null, array('CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'), array('=','=','='),array($_SESSION['empresa_ativa'], $row['UNIDADE'],$row['SETOR']),null,array("CODIGO_SETOR"));
        $r4=$conn->executa_acao();		
        $row4=$r4->fetch(PDO::FETCH_ASSOC);
?>
       
     <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
     <tr>
       <td  width="5%">Código</td>
       <td width="5%"><?php echo $row['CODIGO_FUNCIONARIO']?></td>
     </tr>
     <tr>
       <td  width="7%">Matricula do funcionario</td>
       <td width="7%"><?php echo mb_strtoupper($row['MATRICULA_FUNCIONARIO'])?></td>
     </tr>
     <tr>
       <td  width="24%">Nome do funcionario </td>
       <td width="24%" ><?php echo $row['NOME_FUNCIONARIO']?></td>
     </tr>
     <tr>
       <td  width="6%">Função</td><td width="6%"><?php echo $row2['DESCRICAO_FUNCAO_EMPRESA']?></td>
     </tr>
     <tr>
       <td colspan="1">Profissão</td><td width="7%"><?php echo $row['PROFISSAO']?></td>   
     </tr>
     <tr>
       <td  width="5%">Cargo </td> <td width="5%"><?php echo $row['CARGO']?></td>
     </tr>
     <tr>
       <td  width="5%">Setor </td><td width="5%"><?php echo $row4['NOME_SETOR']?></td>
     </tr>
     <tr>
       <td  width="7%">Grau de exposição </td><td width="7%"><?php echo $row['GRAU_EXPOSICAO']?></td>
     </tr>
     <tr>
       <td  width="8%">Grau de risco </td><td width="8%"><?php echo $row['GRAU_RISCO']?></td>
     </tr>
     <tr>
       <td  width="8%">Numero CTPS </td> <td width="8%"><?php echo $row['NUMERO_CTPS']?></td>
     </tr>
     <tr>
       <td  width="8%">Serie do CTPS </td><td width="8%"><?php echo $row['SERIE_CTPS']?></td>
     </tr>
     <tr>
       <td  width="8%">Data de emissão do CTPS </td><td width="8%"><?php echo $row['DATA_EMISSAO_CTPS']?></td>
     </tr>
     <tr>
       <td  width="8%">Endereço residencial </td><td width="8%"><?php echo $row['ENDERECO_RESIDENCIAL']?></td>
     </tr>
     <tr>
       <td  width="8%">Numero da residencia </td><td width="8%"><?php echo $row['NRO_RESIDENCIAL']?></td>
     </tr>
     <tr>
       <td  width="8%">Bairro </td><td width="8%"><?php echo $row['BAIRRO_RESIDENCIA']?></td>
     </tr>
     <tr>
       <td  width="8%">Cidade </td><td width="8%"><?php echo $row['CIDADE_RESIDENCIA']?></td>
     </tr>
     <tr>
       <td  width="8%">UF </td><td width="8%"><?php echo $row['UF_RESIDENCIA']?></td>
     </tr>
     <tr>
       <td  width="8%">Cep </td><td width="8%"><?php echo $row['CEP_RESIDENCIA']?></td>
     </tr>
     <tr>
       <td  width="8%">Numero do CPF </td><td width="8%"><?php echo $row['NUMERO_CPF']?></td>
     </tr>
     <tr>
       <td  width="8%">Numero do RG </td><td width="8%"><?php echo $row['NUMERO_RG']?></td>
     </tr>
     <tr>
       <td  width="8%">Data de expedição </td><td width="8%"><?php echo $row['DATA_EXPEDICAO']?></td>
     </tr>
     <tr>
       <td  width="8%">Orgão de expeditor </td><td width="8%"><?php echo $row['ORGAO_EXPEDIDOR']?></td>
     </tr>
          <tr>
       <td  width="8%">Data de nascimento </td><td width="8%"><?php echo $row['DATA_NASCIMENTO']?></td>
     </tr>
     <tr>
       <td  width="8%">Data da admissão </td><td width="8%"><?php echo $row['DATA_ADMISSAO']?></td>
     </tr>
     <tr>
       <td  width="8%">Data de desligamento </td><td width="8%"><?php echo $row['DATA_DESLIGAMENTO']?></td>
     </tr>
     <tr>
       <td  width="8%">Zona eleitoral </td><td width="8%"><?php echo $row['ZONA_ELEITORAL']?></td>
     </tr>
     <tr>
       <td  width="8%">Titulo eleitoral </td><td width="8%"><?php echo $row['TITULO_ELEITORAL']?></td>
     </tr>
     <tr>
       <td  width="8%">Numero NIT </td><td width="8%"><?php echo $row['NUMERO_NIT']?></td>
     </tr>
  <td  width="14%">Data do Cadastro </td><td width="14%" style="font-size:10px" align="left"><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['DATA_CADASTRO'])?></td>
  </tr>
  <td  width="12%">Última Atualização </td><td><span style="font-size:10px"><?php echo preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['ULTIMA_ATUALIZACAO'])?></span></td>
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
      <td align="center" style='color:red' width="100%">Arquivo não contém registros a serem impressos!</td>
    </tr>
  </table>
  <?php }
  ?>
   </table>
</body>
 </html>
