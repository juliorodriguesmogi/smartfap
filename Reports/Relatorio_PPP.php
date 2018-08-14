<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$codigo_empresa=$_SESSION['empresa_ativa'];
$codigo_funcionario=2; //;$_SESSION['codigo_funcionario'];
$nome_empresa=$_SESSION['nome_empresa_ativa'];
include_once '../classes/PHP/conexao_PDO.php';
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', "empresas", array('*'),null,array('CODIGO_EMPRESA'),array("="),array($codigo_empresa)); 
$registros=$conn->executa_acao();
$empresa=$registros->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PPP - Perfil Profissiográfico Previdenciário</title>
<style type="text/css">
body{
 font-family:Arial, Helvetica, sans-serif;
}
</style>
</head>

<body>
    <?php
$conn->prepara_stmt('S', 'funcionarios',array('*'), null, array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO'), array('=','='),array($codigo_empresa,$codigo_funcionario),null,array("CODIGO_FUNCIONARIO"));
$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $r=$conn->executa_acao();        
    $funcionario=$r->fetch(PDO::FETCH_ASSOC);
?>
<div align="center">
  <p><strong><img width="111" height="64" src="../images/clip_image001.png" /></strong></p>
  <p align="center"><strong>PERFIL  PROFISSIOGR&Aacute;FICO PREVIDENCI&Aacute;RIO &ndash; PPP</strong></p>
  <p>&nbsp;</p>
  
</div>
<div><center>
<table border="1" cellspacing="0" cellpadding="0" width="1000">
  <tr>
    <td colspan="13" valign="top"><p><strong>I-SE&Ccedil;&Atilde;O DOS DADOS    ADMINISTRATIVOS</strong></p></td>
  </tr>
  <tr>
    <td colspan="4" valign="top"><p>1-CNPJ    do Domicilio Tribut&aacute;rio /CEI</p>
      <p><?php $empresa['CNPJ']?></p></td>
    <td colspan="6" valign="top"><p>2-Nome    Empresarial</p>
	<p><?php $empresa['RAZAO_SOCIAL']?></p>	
	</td>
    <td valign="top">3-CNAE
      <?php $empresa['CODIGO_CNAE']?></td>
    <td width="4" colspan="4" valign="top"><p>&nbsp;</p>
	  <p></p></td>
    </tr>
  <tr>
    <td colspan="8" valign="top"><p>4-Nome    do Trabalhador</p>
    <p><?php echo utf8_decode($funcionario['NOME_FUNCIONARIO'])?></p></td>
    <td width="157" valign="top"><p>5-BR/PD</p>
    <p> </p></td>
    <td colspan="4" valign="top"><p>6-NIT</p>
    <p><?php echo $funcionario['NUMERO_NIT']?></p></td>
  </tr>
  <tr>
    <td width="188" valign="top"><p>7-Data    de Nascimento</p>
    <p><?php echo $funcionario['DATA_NASCIMENTO']?></p></td>
    <td colspan="3" valign="top"><p>8-Sexo(F/M)</p>
      <p><?php echo $funcionario['SEXO']?></p></td>
    <td colspan="2" valign="top"><p>9-CTPS:    N&ordm;</p>
      <p><?php echo $funcionario['NUMERO_CTPS']?></p></td>
    <td colspan="2" valign="top"><p>10-Data    de Admiss&atilde;o</p>      <?php echo $funcionario['DATA_ADMISSAO']?></td>
    <td colspan="4" valign="top"><p>11-Regime    Revezamento</p><?php echo $funcionario['REVEZAMENTO']?></td>
    </tr>
  <tr>
    <td colspan="13" valign="top"><p align="center"><strong>12-CAT REGISTRADA</strong></p></td>
  </tr>
  	<tr>
    <td colspan="3" valign="top"><p>12.1-Data    de Registro</p></td>
    <td colspan="9" valign="top"><p>12.2-N&ordm;    da CAT</p></td>
	</tr>

  <tr><td colspan="10"><div id="cats_registradas">
    <table width="648" id="cat_registrada">
  <tr>
  <?php
	$conn->prepara_stmt('S', "funcionarios_historico_afastamentos", array('*'),null,array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO'),array("=","="),array($codigo_empresa,$codigo_funcionario)); 
	$registros=$conn->executa_acao();
	$historico_afastamentos=$registros->fetch(PDO::FETCH_ASSOC);
  ?>
    <td colspan="3" valign="top"><p><?php echo $historico_afastamentos['DATA_INICIO_AFASTAMENTO']?></p></td>
    <td width="401" colspan="9" valign="top"><p><?php echo $historico_afastamentos['CAT']?></p></td>
  </tr>
	</table>
	</div>
	</td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><p>&nbsp;</p></td>
    <td colspan="9" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="13" valign="top"><p align="center"><strong>13-LOTA&Ccedil;&Atilde;O E ATRIBUI&Ccedil;&Atilde;O</strong></p></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p align="center">13.1-Per&iacute;odo</p>      </td>
    <td colspan="3" valign="top"><p>13.2-CNPJ/CEI
    </p>      </td>
    <td width="88" valign="top"><p align="center">13.3-Setor</p>      </td>
    <td width="117" valign="top"><p>13.4-Cargo</p>      </td>
    <td colspan="2" valign="top"><p align="center">13.5-Fun&ccedil;&atilde;o</p>      </td>
    <td width="146" valign="top"><p>13.6-CBO</p>      </td>
    <td width="180" valign="top"><p align="center">13.7-C&oacute;digo GFIP</p>      </td>
  </tr>
  <tr>
  <?php
	$conn->prepara_stmt('S', "funcionarios_historico_lotacao_atribuicao", array('*'),null,array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO'),array("=","="),array($codigo_empresa,$codigo_funcionario)); 
	$registros=$conn->executa_acao();
	$lotacao_atribuicao=$registros->fetch(PDO::FETCH_ASSOC);
  ?>
  
    <td colspan="2" valign="top">&nbsp;</td>
    <td colspan="3" valign="top"><?php echo $lotacao_atribuicao['CNPJ_CEI']?></td>
    <td valign="top"><?php echo $lotacao_atribuicao['DESCRICAO_SETOR']?></td>
    <td valign="top"><?php echo $lotacao_atribuicao['DESCRICAO_CARGO']?></td>
    <td colspan="2" valign="top"><?php echo $lotacao_atribuicao['DESCRICAO_CARGO']?></td>
    <td valign="top"><?php echo $lotacao_atribuicao['CODIGO_CBO']?></td>
    <td valign="top"><?php echo $lotacao_atribuicao['CODIGO_GFIP']?></td>	
  </tr>
  <tr>
    <td colspan="13" valign="top"><p align="center"><strong>14-PROFISSIOGRAFIA</strong></p></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p align="center">14.1Per&iacute;odo</p></td>
    <td colspan="10" valign="top"><p align="center">14.2-Descri&ccedil;&atilde;o das    Atividades</p></td>
  </tr>
  <tr>
  <?php
	$conn->prepara_stmt('S', "funcionarios_profissiografia", array('*'),null,array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO'),array("=","="),array($codigo_empresa,$codigo_funcionario)); 
	$registros=$conn->executa_acao();
	$profissiografia=$registros->fetch(PDO::FETCH_ASSOC);
  ?>
  
    <td colspan="2" valign="top"><p align="center"><?php echo $profissiografia['DATA_INICIO_ATIVIDADE']?>a <?php echo $lotacao_atribuicao['DATA_FIM_ATIVIDADE']?></p></td>
    <td colspan="10" valign="top"><p><?php echo $lotacao_atribuicao['DESCRICAO_RESUMIDA_ATIVIDADE']?></p></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p align="center">&nbsp;</p></td>
    <td colspan="10" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p>&nbsp;</p></td>
    <td colspan="10" valign="top"><p>&nbsp;</p></td>
  </tr>
</table>

<table border="1" cellspacing="0" cellpadding="0" width="1000">
  <tr>
    <td colspan="9" valign="top"><p><strong>II-SE&Ccedil;&Atilde;O DOS REGISTROS    AMBIENTAIS</strong></p></td>
  </tr>
  <tr>
    <td colspan="9" valign="top"><p align="center"><strong>15-EXPOSI&Ccedil;&Atilde;O A FATORES DE RISCOS</strong></p></td>
  </tr>
  <tr>
    <td width="102" valign="top"><p align="center">15.1-Per&iacute;odo</p></td>
    <td width="74" valign="top"><p>15.2-Tipo </p></td>
    <td colspan="2" valign="top"><p>15.3-Fator    de Risco</p></td>
    <td width="122" valign="top"><p>15.4-Intensidade    / Conc</p></td>
    <td width="161" valign="top"><p align="center">15.5-T&eacute;cnica Utilizada</p></td>
    <td width="134" valign="top"><p align="center">15.6-EPC Eficaz</p></td>
    <td width="146" valign="top"><p align="center">15.7-EPI Eficaz</p></td>
    <td width="137" valign="top"><p align="center">15.8-CA EPI</p></td>
  </tr>
  <tr>
  <?php
	$conn->prepara_stmt('S', "funcionarios_exposicao_fatores_riscos", array('*'),null,array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO'),array("=","="),array($codigo_empresa,$codigo_funcionario)); 
	$registros=$conn->executa_acao();
	$exposicao=$registros->fetch(PDO::FETCH_ASSOC);
  ?>  
    <td width="102" valign="top"><p align="center"><?php echo $exposicao['DATA_INICIO_EXPOSICAO']?>a <?php echo $exposicao['DATA_FIM_EXPOSICAO']?></p></td>
    <td width="74" valign="top"><p><?php echo $exposicao['TIPO_EXPOSICAO']?></p></td>
    <td colspan="2" valign="top"><p><?php echo $exposicao['FATOR_RISCO']?></p></td>
    <td width="122" valign="top"><p><strong>&nbsp;</strong><?php echo $exposicao['INTENSIDADE_CONCENTRACAO']?></p></td>
    <td width="161" valign="top"><p align="center"><?php echo $exposicao['TECNICA_UTILIZADA']?></p></td>
    <td width="134" valign="top"><p align="center"><strong><?php echo $exposicao['EPC_EFICAZ']?>&nbsp;</strong></p></td>
    <td width="146" valign="top"><p align="center"><strong><?php echo $exposicao['EPI_EFICAZ']?>&nbsp;</strong></p></td>
    <td width="137" valign="top"><p align="center"><strong><?php echo $exposicao['CA_EPI']?>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="102" valign="top"><p align="center">&nbsp;</p></td>
    <td width="74" valign="top"><p>&nbsp;</p></td>
    <td colspan="2" valign="top"><p>&nbsp;</p></td>
    <td width="122" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td width="161" valign="top"><p align="center">&nbsp;</p></td>
    <td width="134" valign="top"><p align="center">&nbsp;</p></td>
    <td width="146" valign="top"><p align="center">&nbsp;</p></td>
    <td width="137" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
  </tr>
    <tr>
    <td colspan="8" valign="top">Atendimento aos requisitos das NR-06 e NR-09 do MTE pelos EPI informados</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" valign="top"><div align="justify">Foi tentada a implementa&ccedil;&atilde;o de medidas de prote&ccedil;&atilde;o coletiva, de car&aacute;ter administrativo ou de
      organiza&ccedil;&atilde;o do trabalho, optando-se pelo EPI por inviabilidade t&eacute;cnica, insufici&ecirc;ncia ou interinidade,
      ou ainda em car&aacute;ter complementar ou emergencial</div></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" valign="top"><div align="justify">Foram observadas as condi&ccedil;&otilde;es de funcionamento e do uso ininterrupto do EPI ao longo do tempo,
      conforme especifica&ccedil;&atilde;o t&eacute;cnica do fabricante, ajustada &agrave;s condi&ccedil;&otilde;es de campo.</div></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" valign="top">Foi observado o prazo de validade, conforme Certificado de Aprova&ccedil;&atilde;o-CA do MTE</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" valign="top"><div align="justify">Foi observada a periodicidade de troca definida pelos programas ambientais, comprovada mediante 
      recibo assinado pelo usu&aacute;rio em &eacute;poca pr&oacute;pria.</div></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" valign="top">Foi observada a higieniza&ccedil;&atilde;o.</td>
    <td valign="top">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="9" valign="top"><p align="center"><strong>16-RESPONS&Aacute;VEIS PELOS REGISTROS AMBIENTAIS</strong></p></td>
  </tr>
  <tr>
    <td width="102" valign="top"><p align="center">16.1-Per&iacute;odo</p></td>
    <td colspan="2" valign="top"><p>16.2-NIT</p></td>
    <td colspan="2" valign="top"><p>16.3-Registro    Conselho da Classe</p></td>
    <td colspan="4" valign="top"><p>16.4-Nome    do Profissional Legalmente Habilitado</p>      </td>
    </tr>
  <tr>
    <?php
	$conn->prepara_stmt('S', "funcionarios_exposicao_fatores_riscos", array('*'),null,array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO'),array("=","="),array($codigo_empresa,$codigo_funcionario)); 
	$registros=$conn->executa_acao();
	$responsavel_reg_amb=$registros->fetch(PDO::FETCH_ASSOC);
  ?> 
    <td width="102" valign="top"><p></p></td>
    <td colspan="2" valign="top"><p><strong>&nbsp;</strong><?php echo $responsavel_reg_amb['NUMERO_NIT']?></p></td>
    <td colspan="2" valign="top"><p><strong>&nbsp;</strong><?php echo $responsavel_reg_amb['NUMERO_REGISTRO']?></p></td>
    <td colspan="4" valign="top"><p><strong>&nbsp;</strong><?php echo $responsavel_reg_amb['NOME_RESPONSAVEL']?></p></td>
    </tr>
</table>
<table width="1005" border="1px sold">
<tr height="20">
<td>
</td>
</tr>
<tr>
</tr>
<tr>
</tr>
</table>

<table border="1" cellspacing="0" cellpadding="0" width="1005">
  <tr>
    <td colspan="10"><p><strong>III-SE&Ccedil;&Atilde;O DE RESULTADOS DE MONITORA&Ccedil;&Atilde;O BIOL&Oacute;GICA</strong></p></td>
  </tr>
  <tr>
    <td colspan="10"><p>17-EXAMES M&Eacute;DICOS CL&Iacute;NICOS E COMPLEMENTARES (Quadros I e II, da NR-07)</p></td>
  </tr>
  <tr>
    <td ><p>17.1 Data</p></td>
    <td width="18%"><p>17.2 Tipo</p></td>
    <td colspan="3"><p>17.3 Natureza</p></td>
    <br />
<td width="9%"><p>17.4 Exame (R/S)</p></td>
<td colspan="2"><p>17.5 Indica&ccedil;&atilde;o de Resultados</p></td>
</tr>
  <tr>
    <?php
	$conn->prepara_stmt('S', "funcionarios_exposicao_fatores_riscos", array('*'),null,array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO'),array("=","="),array($codigo_empresa,$codigo_funcionario)); 
	$registros=$conn->executa_acao();
	$monitoracao_biologica=$registros->fetch(PDO::FETCH_ASSOC);
  ?>   
    <td ><p align="center"><?php echo $monitoracao_biologica['PERIODO_INICIAL']?></p></td>
    <td ><p><?php echo $monitoracao_biologica['TIPO_EXAME']?></p></td>
    <td colspan="3"><p>&nbsp;</p>      <p align="center"><?php echo $monitoracao_biologica['NATUREZA_EXAME']?></p>      <p></p></td>
    <td><?php echo $monitoracao_biologica['EXAME_R_S']?></td>
    <td colspan="2"><p><?php echo $monitoracao_biologica['RESULTADO']?></p></td>
    </tr>
  <tr>
    <td colspan="10"><p>18-RESPONS&Aacute;VEL PELA MONITORA&Ccedil;&Atilde;O BIOL&Oacute;GICA</p></td>
  </tr>
  <tr>
    <td width="9%"><p>18.1 Per&iacute;odo</p></td>
    <td ><p>18.2 NIT</p></td>
    <td width="27%" ><p>18.3 Registro Conselho de Classe</p></td>
    <td colspan="5" ><p>18.4 Nome do Profissional Legalmente Habilitado</p>      <p>&nbsp;</p></td>
	</tr>
  <tr>
    <?php
	$conn->prepara_stmt('S', "funcionarios_exposicao_fatores_riscos", array('*'),null,array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO'),array("=","="),array($codigo_empresa,$codigo_funcionario)); 
	$registros=$conn->executa_acao();
	$responsavel_mon_bio=$registros->fetch(PDO::FETCH_ASSOC);
  ?> 
    <td width="9%"><p></p></td>
    <td ><p><?php echo $responsavel_mon_bio['NUMERO_NIT']?></p></td>
    <td ><p><?php echo $responsavel_mon_bio['NUMERO_REGISTRO']?></p></td>
    <td colspan="5"><p><?php echo $responsavel_mon_bio['NOME_RESPONSAVEL']?></p></td>
  </tr>
  <tr>
    <td colspan="10"><strong>IV-RESPONS&Aacute;VEIS PELAS INFORMA&Ccedil;&Otilde;ES</strong></td>
  </tr>
  <tr>
    <td colspan="10"><p><em>Declaramos, para todos os    fins de direito, que as informa&ccedil;&otilde;es prestadas neste documento s&atilde;o ver&iacute;dicas e    foram transcritas fielmente dos registros administrativos, das demonstra&ccedil;&otilde;es    ambientais e dos programas m&eacute;dicos de responsabilidade da empresa. &Eacute; de nosso    conhecimento que a presta&ccedil;&atilde;o de informa&ccedil;&otilde;es falsas neste documento constitui    crime de falsifica&ccedil;&atilde;o de documento p&uacute;blico, nos termos do artigo 297 do    C&oacute;digo Penal e, tamb&eacute;m, que tais informa&ccedil;&otilde;es s&atilde;o de car&aacute;ter privativo do    trabalhador, constituindo crime, nos termos da Lei n&ordm; 9.029/95, pr&aacute;ticas    discriminat&oacute;rias decorrentes de sua exigibilidade por outrem, bem como de sua    divulga&ccedil;&atilde;o para terceiros, ressalvado quando exigida pelos &oacute;rg&atilde;os p&uacute;blicos    competentes.</em></p></td>
  </tr>
  <tr>
    <td colspan="3"><p>19-Data Emiss&atilde;o PPP</p></td>
    <td colspan="7"><p>20-REPRESENTANTE LEGAL DA EMPRESA</p></td>
  </tr>
  <tr>
    <td colspan="3" rowspan="2"><p align="center">&nbsp;</p></td>
    <td colspan="4" valign="top"><p>20.1NIT </p></td>
    <td width="27%" colspan="3"><p>20.2 Nome</p></td>
  </tr>
  <tr>
    <td colspan="4" valign="top"><p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
      <p align="center">(Carimbo)</p></td>
    <td colspan="3"><p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
      <p align="center">_____________________________<br />
        (Assinatura)</p></td>
  </tr>
  <tr>
    <td colspan="10"><p>OBSERVA&Ccedil;&Otilde;ES</p>
        <p>&nbsp;</p></td>
  </tr>
</table>
</center>
</div>
    <?php
    }

    ?>
</body>
</html>