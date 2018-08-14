<?php
session_start();
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
tr td {border-bottom: 1pt dotted black}

</style>
<script type="text/javascript">

</script>
</head>
<body>
   <table width="90%" style="border-bottom:solid 1px"  >
    <tbody>
    <tr>
    <th colspan="2"><div align="left"><img id="image"src="cyberpc150dpi.jpg" width="149px" height="64px" /></div></th>
    <th colspan="2"><center><h2>Relatório de Atividades</h2></center></th>
	<th></th>		
  </tr>
  <tr>
    <th colspan="2"><div align="left"><h3>Empresa</h3></div></th>
    <th width="36%"><div align="left">    </div></th>
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
<table width="90%" >    
  <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
    <td  width="5%">Código</td>
    <td  width="10%" style="min-width:30%">Descrição da Atividade (Resumida)</td>
    <td  width="60%" style="min-width:30%">Descrição da Atividade (Completa)</td>
    <td  width="5%"><div align="center"><p>Classificação</p> </div></td>
    <td  width="10%">Data de Cadastro </td>
    <td  width="10%">Última Atualização </td>
  </tr>
  <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
    <td  width="5%">&nbsp;</td>
    <td  width="10%" style="min-width:30%">&nbsp;</td>
    <td  width="60%" style="min-width:30%">&nbsp;</td>
    <td width="5%"<div align="center">(Administrativa/Operacional)</div></td>
    <td  width="10%">&nbsp;</td>
    <td  width="10%">&nbsp;</td>
  </tr>
<?php
include_once('../classes/PHP/conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', 'atividades',array('*'), null,array('CODIGO_EMPRESA'), array('='),array($_SESSION['empresa_ativa']),null,array("CODIGO_ATIVIDADE"));

$r1=$conn->executa_acao();        
if ($r1->fetchall(PDO::FETCH_ASSOC)>0){
    $r1=$conn->executa_acao();  
$classificacao=array('A'=>'Administrativa','O'=>'Operacional',''=>'Não-definida');      
    while($row=$r1->fetch(PDO::FETCH_ASSOC)){

    echo '<tr style="border:none">' ;
    echo '<td width="5%">'.$row['CODIGO_ATIVIDADE']. '</td>';
    echo '<td width="10%"><p align="justify">'.  (mb_strtoupper($row['DESCRICAO_RESUMIDA_ATIVIDADE'])).'</p></td>';
    echo '<td width="60%"><p align="justify">'.  (mb_strtoupper($row['DESCRICAO_ATIVIDADE'])).'</p></td>' ;
    echo '<td width="5%" align="center">'. $classificacao[$row['CLASSIFICACAO_ATIVIDADE']].'</div></td>';
    echo '<td width="10%">'.preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['DATA_CADASTRO']). '</td>';
    echo '<td width="10%">'. preg_replace("/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/", "$3/$2/$1 $4:$5:$6", $row['ULTIMA_ATUALIZACAO']). '</td>';
    echo '</tr>'; 
    
    $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
    $conn->prepara_stmt('S', 'atividade_funcoes',array('*'), null, array('CODIGO_EMPRESA','CODIGO_ATIVIDADE'), array('=','='),array($row['CODIGO_EMPRESA'],$row['CODIGO_ATIVIDADE']),null,array("CODIGO_ATIVIDADE"));
     $r2=$conn->executa_acao(); ?>     

 <td colspan="5"><strong><center>Funções Associadas à Atividade</center></strong></td>
  </tr>
  <tr id="cabecalho_campos" style="border-bottom:solid 1px" >
  <td>Código da Função</td>
    <td>Descrição da Função</td>
  </tr>
 <?php include_once('../classes/PHP/conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', 'atividade_funcoes',array('*'), null, array('CODIGO_EMPRESA','CODIGO_ATIVIDADE'), array('=','='),array($row['CODIGO_EMPRESA'],$row['CODIGO_ATIVIDADE']),null,array("CODIGO_ATIVIDADE"));
$r2=$conn->executa_acao();      

if ($r2->fetchall(PDO::FETCH_ASSOC)>0){
    $r2=$conn->executa_acao();      
    while($row2=$r2->fetch(PDO::FETCH_ASSOC)){
?>
   <tr>
   <td><?php echo $row2['CODIGO_FUNCAO']?> </td>
   <?php
   echo '<td colspan="5" >'. $row2['DESCRICAO_FUNCAO'].'</td>';
   
   echo '</tr>';
    }
    echo '<tr>';
    echo  '<td  width="5%">Código</td>';
    echo '<td  width="10%" style="min-width:30%">Descrição da Atividade (Resumida)</td>';
    echo '<td  width="60%" style="min-width:30%">Descrição da Atividade (Completa)</td>'; 
    echo  '<td  width="5%"><div align="center"><p>Classificação</p> </div></td>';
    echo '<td  width="10%">Data de Cadastro </td>';
    echo  '<td  width="10%">Última Atualização </td>';
    
    echo '</tr>';
}
else{
    echo "<tr><td style='color:red' colspan='2'><center>Não há funções associadas a essa atividade<center></td></tr>";
}
    }
}
 else {
 echo '< table width="100%">';
 echo  '</br>';  
echo '< /br>'; 
 echo  '<tr style="border:none" id="tr_detalhe">'; 
 echo    '<td align="center" style="color:red" width="100%">Arquivo não contém registros a serem impressos!</td>'; 
 echo   '< /tr> '; 
 echo  '</table>';
 echo  '</table>';
 }
 
?>
</table>
  
</body>

 </html>
