<?PHP
session_start();
include_once('../PHP/Busca_Empresa_Ativa.php');
$codigo_empresa=$_SESSION['empresa_ativa'];
$nome_empresa=$_SESSION['nome_empresa_ativa'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PPP - Perfil Profissiográfico Previdenciário</title>
<style type="text/css">
body{
 font-family:Arial, Helvetica, sans-serif;
}
</style>
</head>

<body>
    <?php
include_once('../classes/PHP/conexao_PDO.php');
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('S', 'funcionarios',array('*'), null, array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO'), array('=','='),array($codigo_empresa,$codigo_funcionario),null,array("CODIGO_FUNCIONARIO"));
$r=$conn->executa_acao();        
if ($r->fetchColumn(0)!=null){
    $r=$conn->executa_acao();        
    while($row=$r->fetch(PDO::FETCH_ASSOC)){
?>
<div align="center">
  <p><strong><img width="111" height="64" src="../images/clip_image001.png" /></strong></p>
  <p align="center"><strong>PERFIL  PROFISSIOGR&Aacute;FICO PREVIDENCI&Aacute;RIO &ndash; PPP</strong></p>
  <p>&nbsp;</p>
  
</div>
<div><center>
<table border="1" cellspacing="0" cellpadding="0" width="1005">
  <tr>
    <td colspan="13" valign="top"><p><strong>I-SE&Ccedil;&Atilde;O DOS DADOS    ADMINISTRATIVOS</strong></p></td>
  </tr>
  <tr>
    <td colspan="4" valign="top"><p>1-CNPJ    do Domicilio Tribut&aacute;rio /CEI</p>
      <p>&nbsp;</p></td>
    <td colspan="5" valign="top">2-Nome    Empresarial</td>
    <td colspan="4" valign="top">3-CNAE</td>
    </tr>
  <tr>
    <td colspan="8" valign="top"><p>4-Nome    do Trabalhador</p>
    <p>&nbsp;</p><?php echo $row['NOME_FUNCIONARIO']?></td>
    <td width="149" valign="top"><p>5-BR/PD</p>
    <p>&nbsp;</p></td>
    <td colspan="4" valign="top"><p>6-NIT</p>
    <p>&nbsp;</p><?php echo $row['NUMERO_NIT']?></td>
  </tr>
  <tr>
    <td width="171" valign="top"><p>7-Data    de Nascimento</p>
    <p>&nbsp;</p><?php echo $row['DATA_NASCIMENTO']?></td>
    <td colspan="3" valign="top"><p>8-Sexo(F/M)</p>
      <p>&nbsp;</p><?php echo $row['SEXO']?></td>
    <td colspan="2" valign="top"><p>9-CTPS:    N&ordm;</p>    </td>
    <td colspan="2" valign="top"><p>10-Data    de Admiss&atilde;o</p>      <p></p><?php echo $row['DATA_ADMISSAO']?></td>
    <td colspan="4" valign="top"><p>11-Regime    Revezamento</p><?php echo $row['REGIME_REVEZAMENTO']?></td>
    </tr>
  <tr>
    <td colspan="13" valign="top"><p align="center"><strong>12-CAT REGISTRADA</strong></p></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><p>12.1-Data    de Registro</p></td>
    <td colspan="9" valign="top"><p>12.2-N&ordm;    da CAT</p></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><p>&nbsp;</p></td>
    <td colspan="9" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><p>&nbsp;</p></td>
    <td colspan="9" valign="top"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="13" valign="top"><p align="center"><strong>13-LOTA&Ccedil;&Atilde;O E ATRIBUI&Ccedil;&Atilde;O</strong></p></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p align="center">13.1-Per&iacute;odo</p></td>
    <td colspan="3" valign="top">13.2-CNPJ/CEI
      <p align="center">&nbsp;</p></td>
    <td width="84" valign="top"><p align="center">13.3-Setor</p>      <p align="center">&nbsp;</p></td>
    <td width="89" valign="top">13.4-Cargo</td>
    <td colspan="2" valign="top"><p align="center">13.5-Fun&ccedil;&atilde;o</p>      <p align="center">&nbsp;</p></td>
    <td width="139" valign="top">13.6-CBO</td>
    <td width="159" valign="top"><p align="center">13.7-C&oacute;digo GFIP</p></td>
  </tr>
  <tr>
    <td colspan="2" valign="top">&nbsp;</td>
    <td colspan="3" valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>	
  </tr>
  <tr>
    <td colspan="13" valign="top"><p align="center"><strong>14-PROFISSIOGRAFIA</strong></p></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p align="center">14.1Per&iacute;odo</p></td>
    <td colspan="10" valign="top"><p align="center">14.2-Descri&ccedil;&atilde;o das    Atividades</p></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p align="center">&nbsp;</p></td>
    <td colspan="10" valign="top"><p>&nbsp;</p></td>
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

<table border="1" cellspacing="0" cellpadding="0" width="1005">
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
    <td width="102" valign="top"><p align="center">&nbsp;</p></td>
    <td width="74" valign="top"><p>&nbsp;</p></td>
    <td colspan="2" valign="top"><p>&nbsp;</p></td>
    <td width="122" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td width="161" valign="top"><p align="center">&nbsp;</p></td>
    <td width="134" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
    <td width="146" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
    <td width="137" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
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
    <td width="102" valign="top"><p align="center">&nbsp;</p></td>
    <td width="74" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td colspan="2" valign="top"><p>&nbsp;</p></td>
    <td width="122" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td width="161" valign="top"><p align="center">&nbsp;</p></td>
    <td width="134" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
    <td width="146" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
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
    <td width="102" valign="top"><p>&nbsp;</p></td>
    <td colspan="2" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td colspan="2" valign="top"><p><strong>&nbsp;</strong></p></td>
    <td colspan="4" valign="top"><p><strong>&nbsp;</strong></p></td>
    </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;</td>
    <td colspan="4" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;</td>
    <td colspan="4" valign="top">&nbsp;</td>
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
    <td width="100%" colspan="10"><p><strong>III-SE&Ccedil;&Atilde;O DE RESULTADOS DE MONITORA&Ccedil;&Atilde;O BIOL&Oacute;GICA</strong></p></td>
  </tr>
  <tr>
    <td width="100%" colspan="10"><p>17-EXAMES M&Eacute;DICOS CL&Iacute;NICOS E COMPLEMENTARES (Quadros I e II, da NR-07)</p></td>
  </tr>
  <tr>
    <td width="17%" colspan="2"><p>17.1 Data</p></td>
    <td width="21%" colspan="3"><p>17.2 Tipo</p></td>
    <td width="19%"><p>17.3 Natureza</p></td>
    <td width="15%" colspan="3"><p>17.4 Exame (R/S)</p></td>
    <td width="26%"><p>17.5 Indica&ccedil;&atilde;o de Resultados</p></td>
  </tr>
  <tr>
    <td width="17%" colspan="2"><p align="center">__/__/___</p></td>
    <td width="21%" colspan="3"><p>&nbsp;</p></td>
    <td width="19%"><p>&nbsp;</p></td>
    <td width="15%" colspan="3" valign="top"><p align="center">(&nbsp;&nbsp; ) Normal</p></td>
    <td width="26%"><p>(&nbsp;&nbsp; ) Alterado<br />
      (&nbsp;&nbsp; ) Est&aacute;vel<br />
      (&nbsp;&nbsp; ) Agravamento<br />
      (&nbsp;&nbsp; ) Ocupacional<br />
      (&nbsp;&nbsp; ) N&atilde;o Ocupacional</p></td>
  </tr>
  <tr>
    <td width="17%" colspan="2"><p align="center">__/__/___</p></td>
    <td width="21%" colspan="3"><p>&nbsp;</p></td>
    <td width="19%"><p>&nbsp;</p></td>
    <td width="15%" colspan="3" valign="top"><p align="center">(&nbsp;&nbsp; ) Normal</p></td>
    <td width="26%"><p>(&nbsp;&nbsp; ) Alterado<br />
      (&nbsp;&nbsp; ) Est&aacute;vel<br />
      (&nbsp;&nbsp; ) Agravamento<br />
      (&nbsp;&nbsp; ) Ocupacional<br />
      (&nbsp;&nbsp; ) N&atilde;o Ocupacional</p></td>
  </tr>
  <tr>
    <td width="17%" colspan="2"><p align="center">__/__/___</p></td>
    <td width="21%" colspan="3"><p>&nbsp;</p></td>
    <td width="19%"><p>&nbsp;</p></td>
    <td width="15%" colspan="3" valign="top"><p align="center">(&nbsp;&nbsp; ) Normal</p></td>
    <td width="26%"><p>(&nbsp;&nbsp; ) Alterado<br />
      (&nbsp;&nbsp; ) Est&aacute;vel<br />
      (&nbsp;&nbsp; ) Agravamento<br />
      (&nbsp;&nbsp; ) Ocupacional<br />
      (&nbsp;&nbsp; ) N&atilde;o Ocupacional</p></td>
  </tr>
  <tr>
    <td width="17%" colspan="2"><p align="center">__/__/___</p></td>
    <td width="21%" colspan="3"><p>&nbsp;</p></td>
    <td width="19%"><p>&nbsp;</p></td>
    <td width="15%" colspan="3" valign="top"><p align="center">( &nbsp;&nbsp;) Normal</p></td>
    <td width="26%"><p>(&nbsp;&nbsp; ) Alterado<br />
      (&nbsp;&nbsp; ) Est&aacute;vel<br />
      (&nbsp;&nbsp; ) Agravamento<br />
      (&nbsp;&nbsp; ) Ocupacional<br />
      (&nbsp;&nbsp; ) N&atilde;o Ocupacional</p></td>
  </tr>
  <tr>
    <td width="100%" colspan="10"><p>18-RESPONS&Aacute;VEL PELA MONITORA&Ccedil;&Atilde;O BIOL&Oacute;GICA</p></td>
  </tr>
  <tr>
    <td width="15%"><p>18.1 Per&iacute;odo</p></td>
    <td width="22%" colspan="3"><p>18.2 NIT</p></td>
    <td width="21%" colspan="4"><p>18.3 Registro Conselho de Classe</p></td>
    <td width="39%" colspan="2"><p>18.4 Nome do Profissional Legalmente Habilitado</p></td>
  </tr>
  <tr>
    <td width="15%"><p align="center">__/__/___</p></td>
    <td width="22%" colspan="3"><p>&nbsp;</p></td>
    <td width="21%" colspan="4"><p>&nbsp;</p></td>
    <td width="39%" colspan="2"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="15%"><p align="center">__/__/___</p></td>
    <td width="22%" colspan="3"><p>&nbsp;</p></td>
    <td width="21%" colspan="4"><p>&nbsp;</p></td>
    <td width="39%" colspan="2"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="15%"><p align="center">__/__/___</p></td>
    <td width="22%" colspan="3"><p>&nbsp;</p></td>
    <td width="21%" colspan="4"><p>&nbsp;</p></td>
    <td width="39%" colspan="2"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="15%"><p align="center">__/__/___</p></td>
    <td width="22%" colspan="3"><p>&nbsp;</p></td>
    <td width="21%" colspan="4"><p>&nbsp;</p></td>
    <td width="39%" colspan="2"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="15%"><p align="center">__/__/___</p></td>
    <td width="22%" colspan="3"><p>&nbsp;</p></td>
    <td width="21%" colspan="4"><p>&nbsp;</p></td>
    <td width="39%" colspan="2"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="100%" colspan="10"><strong>IV-RESPONS&Aacute;VEIS PELAS INFORMA&Ccedil;&Otilde;ES</strong></td>
  </tr>
  <tr>
    <td width="100%" colspan="10"><p><em>Declaramos, para todos os    fins de direito, que as informa&ccedil;&otilde;es prestadas neste documento s&atilde;o ver&iacute;dicas e    foram transcritas fielmente dos registros administrativos, das demonstra&ccedil;&otilde;es    ambientais e dos programas m&eacute;dicos de responsabilidade da empresa. &Eacute; de nosso    conhecimento que a presta&ccedil;&atilde;o de informa&ccedil;&otilde;es falsas neste documento constitui    crime de falsifica&ccedil;&atilde;o de documento p&uacute;blico, nos termos do artigo 297 do    C&oacute;digo Penal e, tamb&eacute;m, que tais informa&ccedil;&otilde;es s&atilde;o de car&aacute;ter privativo do    trabalhador, constituindo crime, nos termos da Lei n&ordm; 9.029/95, pr&aacute;ticas    discriminat&oacute;rias decorrentes de sua exigibilidade por outrem, bem como de sua    divulga&ccedil;&atilde;o para terceiros, ressalvado quando exigida pelos &oacute;rg&atilde;os p&uacute;blicos    competentes.</em></p></td>
  </tr>
  <tr>
    <td width="25%" colspan="3"><p>19-Data Emiss&atilde;o PPP</p></td>
    <td width="74%" colspan="7"><p>20-REPRESENTANTE LEGAL DA EMPRESA</p></td>
  </tr>
  <tr>
    <td width="25%" colspan="3" rowspan="2"><p align="center">____/___/___</p></td>
    <td width="34%" colspan="4" valign="top"><p>20.1NIT</p></td>
    <td width="40%" colspan="3"><p>20.2 Nome</p></td>
  </tr>
  <tr>
    <td width="34%" colspan="4" valign="top"><p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
      <p align="center">(Carimbo)</p></td>
    <td width="40%" colspan="3"><p align="center">&nbsp;</p>
        <p align="center">&nbsp;</p>
      <p align="center">_____________________________<br />
        (Assinatura)</p></td>
  </tr>
  <tr>
    <td width="100%" colspan="10"><p>OBSERVA&Ccedil;&Otilde;ES</p>
        <p>&nbsp;</p></td>
  </tr>
</table>
</center>
</div>
    <?php
    }
}
    ?>
</body>
</html>