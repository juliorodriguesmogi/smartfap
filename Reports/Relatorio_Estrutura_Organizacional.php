<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$codigo_empresa=$_SESSION['empresa_ativa'];
$nome_empresa=$_SESSION['nome_empresa_ativa'];
?>
<html id="html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript">
    function gera_pdf(){
        <?php
        ob_start();        
        header("location:Relatorio_Estrutura_Organizacional.php");
        
    
 
      
    // Neste momento nenhuma saída foi enviada ao navegador  
      
    // Recebemos o valor do buffer na variável $resultado  
    $resultado = ob_get_contents();  
      
    // Já podemos encerrar o buffer e limpar tudo que há nele  
    ob_end_clean();  
      
    // Agora é só gravar um arquivo com os dados coletados  
    $ok = file_put_contents('x.html', $resultado);  
      
    // Envia uma mensagem para o usuário indicando se ocorreu tudo OK  
    if ($ok) {  
        print 'Arquivo gravado com sucesso.';  
        print 'Clique aqui para visualizar';  
    } else {  
        print 'Ocorreu um erro. Verifique o permissionamento.';  
    }  

        ?>
    }
</script>
</head>
<body style="font-family: arial" >
<button type="button" onClick="gera_pdf();">Imprimir PDF</button>    
   <table id="cabecalho_pagina" width="100%" style="border-bottom:solid 1px"  >
    <tr>
    <th colspan="2"><div align="left"><img id="image"src="cyberpc150dpi.jpg" width="149px" height="64px" /></div></th>
    <th colspan="2"><center>
      <h2>Estrutura Organizacional da Empresa </h2>
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
   <table width="100%" border="0" >
   <tr>
   <td>C&oacute;digo Unidade Pai</td>
   <td>C&oacute;digo Unidade</td>
   <td>Nível na Organização</td>
   <td>Descrição da Unidade</td>
   <td>Responsável pela Unidade</td>   
   </tr>
 <?php
include_once('../classes/PHP/conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', 'estrutura_organizacional',array('*'), null, array('CODIGO_EMPRESA'), array('='),array($codigo_empresa,),null,array("CODIGO_EMPRESA","UNIDADE","UNIDADE_PAI","NIVEL_ORGANIZACAO"));
$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $r=$conn->executa_acao();        
    $row=$r->fetch(PDO::FETCH_ASSOC);
    echo "<td><strong>".$row['UNIDADE_PAI']."</strong></td>";
    echo "<td>".$row['UNIDADE']."</td>";
    echo "<td>".$row['NIVEL_ORGANIZACAO']."</td>";
    echo "<td>".$row['DESCRICAO_UNIDADE']."</td>";
    $unidade_pai=$row['UNIDADE_PAI'];
    $unidade_pai_anterior=$row['UNIDADE_PAI'];
    $ncont=0;
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
<?php    
$cores=array();
$cores[1]="#99FF99";
$cores[2]="#66CCFF";
$cores[3]="#FFFFCC";
$cores[4]="#CCFFFF";
echo "<td>".$row['UNIDADE']."</td>";
echo "<td>".$row['UNIDADE_PAI']."</td>";
echo "<td>".$row['NIVEL_ORGANIZACAO']."</td>";

echo "<td style='background:".$cores[$row['NIVEL_QUEBRA']==null?0:$row['NIVEL_QUEBRA']]."'>";
$ncont=$row['NIVEL_QUEBRA'];
$str='';
for($x=0;$x<=$ncont;$x++){
    $str.="&nbsp&nbsp&nbsp&nbsp";
    
}
echo $str.$row['DESCRICAO_UNIDADE'];
echo "</td>";
echo "<td style='background:".$cores[$row['NIVEL_QUEBRA']==null?0:$row['NIVEL_QUEBRA']]."'>";
echo $str.$row['RESPONSAVEL']."</td>";
?>

</tr>       
  <?php 
  $unidade_pai_anterior=$unidade_pai;
  $unidade_pai=$row['UNIDADE_PAI']; 
  

  
   }
}
    // Inicializa o buffer e bloqueia qualquer saída para o navegador  

    
    
  ?>
   </table>


</body>
</html>
