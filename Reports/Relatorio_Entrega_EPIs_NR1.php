<?PHP
session_start();
$d=getDate();
$nmes=array('01'=>'Janeiro','02'=>'Fevereiro','03'=>'Março','04'=>'Abril','05'=>'Maio','06'=>'Junho','07'=>'Julho','08'=>'Agosto','09'=>'Setembro','10'=>'Outubro','11'=>'Novembro','12'=>'Dezembro');
$mes=$nmes[str_pad($d['mon'],2,'0',STR_PAD_LEFT)];
$ano=$d['year'];
$dia=$d['mday'];
include_once('../PHP/Busca_Empresa_Ativa.php');
$ea=new Busca_Empresa_Ativa($_SESSION['id_usuario']);
$codigo_empresa=$ea->retorna_empresa();
$nome_empresa=$ea->retorna_nome_empresa();
$cidade_empresa=$ea->retorna_municipio_empresa();
include_once '../classes/PHP/conexao_PDO.php';   
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', "funcionarios", array('*'), '',array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO') , array('=','='), array($_GET['CODIGO_EMPRESA'],$_GET['CODIGO_FUNCIONARIO']));
$f=$conn->executa_acao();
$row=$f->fetch(PDO::FETCH_ASSOC);
$nome_funcionario=mb_strtoupper($row['NOME_FUNCIONARIO']);
$matricula_funcionario=mb_strtoupper($row['MATRICULA_FUNCIONARIO']);
$cargo=mb_strtoupper($row['CARGO']);
$secao=mb_strtoupper($row['SETOR']);
$conn->prepara_stmt('S', "movimentacao_epis_m", array('*'), '',array('CODIGO_EMPRESA','SEQUENCIAL') , array('=','='), array($_GET['CODIGO_EMPRESA'],$_GET['SEQUENCIAL']));
$r=$conn->executa_acao();


?>
<html>
<head>
    <style type="text/css" >
@media print{
document.location{display: none}
body{width:auto;margin:2 auto}
  table{ font-size:11px;font-family:Arial, Helvetica, sans-serif}
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

</style>
<script type="text/javascript" src="../js/funcoes.js"></script>    
<script type="text/javascript">

//window.onload=carrega_impressao();
janela= getUrlvars('janela');

function carrega_impressao(){
                if (parm==null){
                parm="?CODIGO_EMPRESA="+getUrlvars('CODIGO_EMPRESA');
                parm=parm+"&SEQUENCIAL="+getUrlvars('SEQUENCIAL')
                parm=parm+"&CODIGO_FUNCIONARIO="+getUrlvars('CODIGO_FUNCIONARIO');

                window.open("Relatorio_Entrega_EPIs_NR1.php"+parm, "print", "location=no resizable=YES directories=no menubar=no status=no toolbar=no titlebar=no");   

                }
                
            }
    
    function retorna_pagina(janela)
    {
        window.close();
    }
</script>    
</head>
<body>
<form id="frm_imprime_epi" action="">
<div align="right"><button type="button" onClick="window.print();retorna_pagina();"><img src='../images/printer_2.png'/></button></div>
   <table id="cabecalho_pagina" width="100%" style="border-bottom:solid 1px"  >
    <tbody>
    <tr>
    <th colspan="2"><div align="left"><img id="image"src="cyberpc150dpi.jpg" width="149px" height="64px" /></div></th>
    <th colspan="2"><center>
      <h2>Ficha de Entrega de EPIs </h2>
    </center></th>
	<th width="16%"></th>		
  </tr>
  <tr>
    </tr>
 <tr>
    <th colspan="2"></th>
    <th width="41%"></th>
    <th width="21%"></th>
    <th></th>
  </tr>
</table>
   <table>
   <tr style="margin-left:20px;margin-right:20px">
   
   <td >
     <p align="center"><h2 align="center">TERMO DE RESPONSABILIDADE PELA GUARDA E USO DE
       EQUIPAMENTO DE PROTEÇÃO INDIVIDUAL - E.P.I.</h2>
     </p>
     <p align="center"> IDENTIFICAÇÃO DO EMPREGADO      </p>
	 </BR>
     <p>Matricula: <?php echo $matricula_funcionario ?>   </p>
     <p>Nome: <?php echo $nome_funcionario ?>   </p>
     <p>Cargo: <?php echo $cargo ?></p>
     <p>Seção: <?php echo $secao ?> </p>
     <p>&nbsp;</p>
     <p align="justify"> Recebi da empresa <?PHP echo $nome_empresa?>, a título de empréstimo, para meu uso exclusivo
       e obrigatório nas dependências da empresa, conforme determinado na NR-6 da Portaria
       3.214/78, os equipamentos especificados neste termo de responsabilidade,
       comprometendo-me a mantê-los em perfeito estado de conservação, ficando ciente de
       que:      </p>
     <p align="justify">1- Recebi treinamento quanto à necessidade na utilização dos referidos EPI’s, a maneira
       correta de usá-los, guardá-los e higienizá-los, bem como da minha responsabilidade
       quanto a seu uso conforme determinado na NR-1 da Portaria 3.214/78.      </p>
     <p align="justify">2- Se o equipamento for danificado ou inutilizado por emprego inadequado, mau uso,
       negligência ou extravio, a empresa me fornecerá novo equipamento e cobrará o valor
       de um equipamento da mesma marca ou equivalente ao da praça (parágrafo único do
       artigo 462 da CLT).      </p>
     <p align="justify">3- Fico proibido de dar ou emprestar o equipamento que estiver sob minha
       responsabilidade, só podendo fazê-lo se receber ordem por escrito da pessoa
       autorizada para tal fim.      </p>
     <p align="justify">4- Em caso de dano, inutilização ou extravio do equipamento deverei comunicar
       imediatamente ao setor competente.      </p>
     <p align="justify">5- Terminando os serviços ou no caso de rescisão do contrato de trabalho, devolverei o
       equipamento completo e em perfeito estado de conservação, considerando-se o tempo
       do uso do mesmo, ao setor competente.      </p>
     <p align="justify">6- Estando os equipamentos em minha posse, estarei sujeito a inspeções sem prévio
       aviso.      </p>
     <p align="justify">7- Fico ciente de que não utilizando o equipamento de proteção individual em serviço
       estarei sujeito as sanções disciplinares cabíveis que irão desde simples advertências
       até a dispensa por justa causa nos termos do Art. 482 da C.L.T. combinado com a NR-1
     e NR-6 da Portaria 3.214/78.</p>  </tr>
   <tr>

     </tr>
   </table>
   </br>
   <table width="1016">
   <caption>EPIs fornecidos pela Empresa ao Funcionário</caption>
    <tr >   
       <td width="40%">Descrição EPI</td>
       <td width="20%">Tipo Proteção</td>
       <td width="10%">Código C.A.</td>	   
       <td width="11%">Qtde Fornecida</td>
       <td width="19%">Data Prevista para Substituição</td>
    </tr>    

   <?php
   $conn->prepara_stmt('S', "movimentacao_epis_d", array('DESCRICAO_EPI','TIPO_PROTECAO','QTDE_FORNECIDA','PROXIMA_TROCA_PREVISTA','CODIGO_CA'), '',array('CODIGO_EMPRESA','SEQUENCIAL') , array('=','='), array($_GET['CODIGO_EMPRESA'],$_GET['SEQUENCIAL']));
   $r=$conn->executa_acao();
   while ($row=$r->fetch(PDO::FETCH_ASSOC)){
       echo '<tr>';
       echo '<td width="40%">'.$row['DESCRICAO_EPI'].'<td>';
       echo '<td width="20%">'.$row['TIPO_PROTECAO'].'</td>';
       echo '<td width="10%">'.$row['CODIGO_CA'].'</td>';	   
       echo '<td width="15%">'.$row['QTDE_FORNECIDA'].'</td>';
       echo '<td width="15%">'.preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1",$row['PROXIMA_TROCA_PREVISTA']).'</td>';
       echo '</tr>';
   }
   ?>
   <tr></tr>
  </table>
   <table>
   <tr colspan="4">
     <td width="1008">&nbsp;</td>
   </tr>
   <tr colspan="4">
     <td><p align="right"><?php $cidade_empresa ?><?php echo $dia?> , de <?php echo $mes ?> de <?php echo $ano ?>.   </p></td>
	</tr>
	<tr> 
     <td><p align="right">Ciente: _______________________________________</p></td>
   </tr>
</table>
</form>   
</body>
 </html>
<?php 
   
?>