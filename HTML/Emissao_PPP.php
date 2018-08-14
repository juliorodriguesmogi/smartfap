<?php

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
TABLE{
	font-family:Arial, Helvetica, sans-serif;
	background-color: #E8E8E8;
}
</style>

    <script type="text/javascript" charset="utf-8">
     function insere(node){
                //divpai=node.parentNode;
              divpai=node.parentNode.parentNode.parentNode;
                divfilho=divpai.children[0].cloneNode(true);
                divpai.appendChild(divfilho);
            }	
function remove(node){
divremover=node.parentNode.parentNode;
divpai=node.parentNode.parentNode.parentNode;
divpai.removeChild(divremover);
} 

function insere_exame(node){
                //divpai=node.parentNode;
              divpai=node.parentNode.parentNode.parentNode;
                divfilho=divpai.children[0].cloneNode(true);
                divpai.appendChild(divfilho);
            }	
function remove_exame(node){
divremover=node.parentNode.parentNode;
divpai=node.parentNode.parentNode.parentNode;
divpai.removeChild(divremover);
}
function insere_responsaveis_ambientais(node){
                //divpai=node.parentNode;
              divpai=node.parentNode.parentNode.parentNode;
                divfilho=divpai.children[0].cloneNode(true);
                divpai.appendChild(divfilho);
            }	
function remove_responsaveis_ambientais(node){
divremover=node.parentNode.parentNode;
divpai=node.parentNode.parentNode.parentNode;
divpai.removeChild(divremover);
} 
    </script></head>
<body>
<div align="center">
  <p><strong><img width="111" height="64" src="../images/clip_image001.png" /></strong></p>
  <p align="center"><strong>PERFIL  PROFISSIOGR&Aacute;FICO PREVIDENCI&Aacute;RIO &ndash; PPP</strong></p>
  <p>&nbsp;</p>
</div>
<div><center>
<table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td colspan="13" valign="top"><p><strong>I-SE&Ccedil;&Atilde;O DOS DADOS    ADMINISTRATIVOS</strong></p></td>
  </tr>
  <tr>
    <td colspan="4" valign="top"><p>1-CNPJ    do Domicilio Tribut&aacute;rio /CEI</p>
      <p align="center"><input name='CNPJ' type="text" size="50" /></p>
      <p align="center">&nbsp;</p></td>
    <td colspan="5" valign="top"><p>2-Nome    Empresarial
      
  </p>
      <p align="center">    
        <input name='EMPRESA' type="text" size="60" />
      </p></td>
    <td colspan="4" valign="top"><p>3-CNAE </p>
      <p align="center">
         <input name='CNAE' type="text" size="45" /> 
      </p></td>
    </tr>
  <tr>
    <td colspan="8" valign="top"><p>4-Nome    do Trabalhador</p>
    <p align="center">
      <input name='FUNCIONARIO' type="text" size="80" /></p>
    <p align="center">&nbsp;</p></td>
    <td width="149" valign="top"><p>5-BR/PD</p>
    <p align="center">
      <input name='BRPD' type="text" size="30" />
    </p></td>
    <td colspan="4" valign="top"><p>6-NIT</p>
    <p align="center">
      <input name='NIT' type="text" size="40" />
    </p></td>
  </tr>
  <tr>
    <td width="171" valign="top"><p align="left">7-Data de Nascimento</p>
    <p align="center">
      <input name='DATA_NASCIMENTO' type="text" size="20" />
    </p></td>
    <td colspan="3" valign="top"><p>8-Sexo(F/M)</p>
      <input name="SEXO" type="radio" id="F"  value="F" />Feminino
      <input name="SEXO" type="radio" id="M"  value="F" />Masculino
    </td>
    <td colspan="2" valign="top"><p>9-CTPS:    N&ordm;</p>
      <p align="center">
        <input name='CTPS' type="text" size="30" />
      </p></td>
    <td colspan="2" valign="top"><p>10-Data    de Admiss&atilde;o</p>      <p align="center"><input name='CNPJ' type="text" size="30" /></p></td>
    <td colspan="8" valign="top"><p>11-Regime    Revezamento</p>
      <p align="center">
        <input name='REVEZAMENTO' type="text" size="30" />
      </p></td>
    </tr>
  </table>
	
	<p>&nbsp;</p>
	<table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td colspan="13" valign="top"><p align="center"><strong>12-CAT REGISTRADA</strong></p></td>
  </tr>
  </table>
        
   <div style="width:100%" id="div_1">
       <div style="width:100%" id="div_2">
  <table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td colspan="3" valign="top"><p>12.1-Data    de Registro</p></td>
    <td colspan="9" valign="top"><p>12.2-N&ordm;    da CAT</p></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><p align="center">
      <input name='DATA_CAT' type="text" size="20" /></p>
      </td>
    <td colspan="9" valign="top"><p align="center">
      <input name='NUMERO_CAT' type="text" size="40" />
    </p></td>
  </tr>
  
  </table>
        <div style="width:100%" id="div_button">
                <button type="button" value="" onclick="insere_responsaveis_ambientais(this)">+ Incluir CAT</button>
      <button type="button" value="" onclick="remove_responsaveis_ambientais(this)" >+ Remover CAT</button>  
        </div>
       </div>
   </div>
  <p>&nbsp;</p>
  <table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td colspan="13" valign="top"><p align="center"><strong>13-LOTA&Ccedil;&Atilde;O E ATRIBUI&Ccedil;&Atilde;O</strong></p></td>
  </tr>
  </table>
        <div style="width:100%" id="div_1">
            <div style="width:100%" id="div_2">
  <table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td colspan="2" valign="top"><p align="center">13.1-Per&iacute;odo</p>
      <p align="center">
        <input name='PERIODO' type="text" size="30" />
      </p>
      <p align="center">&nbsp;</p></td>
    <td colspan="3" valign="top">13.2-CNPJ/CEI
      <p align="center">
        <input name='CNPJ/LOTACAO' type="text" size="30" />
      </p>
      </td>
    <td width="84" valign="top"><p align="center">13.3-Setor</p>  <input name='SETOR' type="text" size="30" />    <p align="center">&nbsp;</p></td>
    <td width="89" valign="top"><p>13.4-Cargo</p>
      <input name='CARGO' type="text" size="30" /><p>&nbsp;</p></td>
    <td colspan="2" valign="top"><p align="center">13.5-Fun&ccedil;&atilde;o</p>    <input name='FUNCAO' type="text" size="30" />  <p align="center">&nbsp;</p></td>
    <td width="139" valign="top"><p>13.6-CBO</p>
     <input name='CBO' type="text" size="25" /> <p>&nbsp;</p></td>
    <td width="159" valign="top"><p align="center">13.7-C&oacute;digo GFIP</p><input name='CODIGO_GFIP' type="text" size="23" /></td>
  </tr>
  </table>
        <div style="width:100%" id="div_button">
                <button type="button" value="" onclick="insere_responsaveis_ambientais(this)">+ Incluir Fator de Risco</button>
      <button type="button" value="" onclick="remove_responsaveis_ambientais(this)" >+ Remover Fator de Risco</button>
        </div>
        </div>
        </div>
  <table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td colspan="13" valign="top"><p align="center"><strong>14-PROFISSIOGRAFIA</strong></p></td>
  </tr>
  </table>
        
        
        <div style="width:100%" id="div_1">
            <div style="width:100%" id="div_2">
  <table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td colspan="2" valign="top"><p align="center">14.1Per&iacute;odo</p></td>
    <td colspan="10" valign="top"><p align="center">14.2-Descri&ccedil;&atilde;o das    Atividades</p></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p align="center">
      <input name='PERIODO' type="text" size="40" maxlength="8" />
    </td>
    <td colspan="10" valign="top">
      <textarea name='DESCRICAO_ATIVIDADE' cols="100" rows="5"  ></textarea>
   </td>
  </tr>
  </table>
 
            <div style="width:100%" id="div_button">
                <button type="button" value="" onclick="insere_responsaveis_ambientais(this)">+ Incluir Fator de Risco</button>
      <button type="button" value="" onclick="remove_responsaveis_ambientais(this)" >+ Remover Fator de Risco</button>
            </div>
            </div> 
        </div>
        
<p>&nbsp;</p>
<table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td colspan="9" valign="top"><p><strong>II-SE&Ccedil;&Atilde;O DOS REGISTROS    AMBIENTAIS</strong></p></td>
  </tr>
  <tr>
    <td colspan="9" valign="top"><p align="center"><strong>15-EXPOSI&Ccedil;&Atilde;O A FATORES DE RISCOS</strong></p></td>
  </tr>
</table>
<div style="width:100%" id="div_1">
    <div style="width:100%" id="div_2">
  <table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td width="143" valign="top"><p align="center">15.1-Per&iacute;odo</p></td>
    <td width="190" valign="top"><p>15.2-Tipo </p></td>
    <td colspan="2" valign="top"><p>15.3-Fator    de Risco</p></td>
    <td width="272" valign="top"><p>15.4-Intensidade    / Conc</p></td>
    <td width="216" valign="top"><p align="center">15.5-T&eacute;cnica Utilizada</p></td>
    <td width="120" valign="top"><p align="center">15.6-EPC Eficaz</p></td>
    <td width="120" valign="top"><p align="center">15.7-EPI Eficaz</p></td>
    <td width="92" valign="top"><p align="center">15.8-CA EPI</p></td>
  </tr>
  <tr>
    <td width="143" valign="top"><div align="center">
      <input name='PERIODO_FATORES_RISCO' type="text" size="20" />
    </div></td>
    <td width="190" valign="top"><div align="center">
      <input name='TIPO_RISCO' type="text" size="20" />
    </div></td>
    <td colspan="2" valign="top"><input name='FATOR_RISCO' type="text" size="35" /></td>
    <td width="272" valign="top"><div align="center">
      <input name='INTENSIDADE' type="text" size="30" />
    </div></td>
    <td width="216" valign="top"><div align="center">
      <input name='TECNICA_UTILIZADA' type="text" size="30" />
    </div></td>
    <td width="120" valign="top"><input name='EPC' type="text" size="20" /></td>
    <td width="120" valign="top"><input name='EPI' type="text" size="20" /></td>
    <td width="92" valign="top"><input name='CA_EPI' type="text" size="15" /></td>
  </tr>
  </table>
        <div style="width:100%" id="div_button">
                   <button type="button" value="" onclick="insere_responsaveis_ambientais(this)">+ Incluir Fator de Risco</button>
      <button type="button" value="" onclick="remove_responsaveis_ambientais(this)" >+ Remover Fator de Risco</button>
        </div>
    </div>
  </div>

  <p>&nbsp;</p>
  <table border="1" cellspacing="0" cellpadding="0"  width="100%">
    <tr>
    <td  >Atendimento aos requisitos das NR-06 e NR-09 do MTE pelos EPI informados</td>
    
  </tr>
  <tr>
    <td  ><div align="justify">Foi tentada a implementa&ccedil;&atilde;o de medidas de prote&ccedil;&atilde;o coletiva, de car&aacute;ter administrativo ou de
      organiza&ccedil;&atilde;o do trabalho, optando-se pelo EPI por inviabilidade t&eacute;cnica, insufici&ecirc;ncia ou interinidade,
      ou ainda em car&aacute;ter complementar ou emergencial</div></td>
    
  </tr>
  <tr>
    <td  ><div align="justify">Foram observadas as condi&ccedil;&otilde;es de funcionamento e do uso ininterrupto do EPI ao longo do tempo,
      conforme especifica&ccedil;&atilde;o t&eacute;cnica do fabricante, ajustada &agrave;s condi&ccedil;&otilde;es de campo.</div></td>
    
  </tr>
  <tr>
    <td>Foi observado o prazo de validade, conforme Certificado de Aprova&ccedil;&atilde;o-CA do MTE</td>
    
  </tr>
  <tr>
    <td><div align="justify">Foi observada a periodicidade de troca definida pelos programas ambientais, comprovada mediante 
      recibo assinado pelo usu&aacute;rio em &eacute;poca pr&oacute;pria.</div></td>
   
  </tr>
  <tr>
    <td>Foi observada a higieniza&ccedil;&atilde;o.</td>
    
  </tr>

  <tr>
    <td valign="top"><p align="center"><strong>16-RESPONS&Aacute;VEIS PELOS REGISTROS AMBIENTAIS</strong></p></td>
  </tr>
</table>

<div style="width:100%" id="div_responsaveis_ambientais">
    <div style="width:100%" id="div_responsaveis_ambientais2">
 <table border="1" cellspacing="0" cellpadding="0" width="100%">
    <tr>
    <td width="240" valign="top"><p align="center">16.1-Per&iacute;odo</p></td>
    <td colspan="2" valign="top"><p>16.2-NIT</p></td>
    <td colspan="2" valign="top"><p>16.3-Registro    Conselho da Classe</p></td>
    <td colspan="4" valign="top"><p>16.4-Nome    do Profissional Legalmente Habilitado</p>      </td>
    </tr>
  <tr>
    <td width="40" valign="top"><div align="center">
      <input name='PERIODO_AMBIENTE' type="text" size="30" />
    </div></td>
    <td colspan="2" valign="top"><div align="center">
      <input name='NIT_AMBIENTE' type="text" size="20" />
    </div></td>
    <td colspan="2" valign="top"><div align="center">
      <input name='CONSELHO_DE_CLASSE' type="text" size="30" />
    </div></td>
    <td colspan="4" valign="top"><div align="center">
      <input name='NOME_RESPONSAVEL' type="text" size="60" />
    </div></td>
    </tr>
     </table>
     <div style="width:100%" id="div_responsaveis_ambientais_button">
          <button type="button" value="" onclick="insere_responsaveis_ambientais(this)">+ Incluir Responsavel</button>
      <button type="button" value="" onclick="remove_responsaveis_ambientais(this)" >+ Remover Responsavel</button>
     </div>
     
    </div>
</div>


<p>&nbsp;</p>
<table border="1" cellspacing="0" cellpadding="0" width="100%">
            <tr width="100%">
                <td colspan="10"><p><strong>III-SE&Ccedil;&Atilde;O DE RESULTADOS DE MONITORA&Ccedil;&Atilde;O BIOL&Oacute;GICA</strong></p></td>
            </tr>
            <tr>
                <td colspan="10"><p>17-EXAMES M&Eacute;DICOS CL&Iacute;NICOS E COMPLEMENTARES (Quadros I e II, da NR-07)</p></td>
            </tr>
            
  </table>

 <div style="width:100%" id="div_exame">
      <div style="width:100%" id="div_exame2">
        
        <table id="tbl_exame" border="1" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td width="20%"><p align="left">17.1 Data</p></td>
                <td width="18%"><p>17.2 Tipo</p></td>
                <td width="13%"><p>17.3 Natureza</p></td>
                <td colspan="13%"><p>17.4 Exame (R/S)</p></td>
                <td width="35%"><p>17.5 Indica&ccedil;&atilde;o de Resultados</p></td>
            </tr>
			<tr>
                <td width="20%"><p align="center"><input name='DATA_EXAME' type="text" size="20" /></p></td>
                <td width="18%">
                    <input name='TIPO_EXAME' type="text" size="30" />
                </td>
                <td width="13%"><input name='NATUREZA_EXAME' type="text" size="20" /></td>
                <td colspan="13%" valign="top"><input name="EXAME_MEDICO" type="radio" id="N"  value="F" /> Normal</p></td>
                <td width="35%"><input name="EXAME_RESULTADO" type="radio" id="A"  value="F" /> Alterado<br />
                    <input name="EXAME_RESULTADO" type="radio" id="E"  value="F" /> Est&aacute;vel<br />
                    <input name="EXAME_RESULTADO" type="radio" id="AG"  value="F" /> Agravamento<br />
                    <input name="EXAME_RESULTADO" type="radio" id="O"  value="F" /> Ocupacional<br />
                    <input name="EXAME_RESULTADO" type="radio" id="NO"  value="F" /> N&atilde;o Ocupacional</p></td>
            </tr>
        </table>
          <div>
              <button type="button" value="" onclick="insere_exame(this)">+ Incluir Exame</button>
      <button type="button" value="" onclick="remove_exame(this)" >+ Remover Exame</button>
     </div>
      </div>
     
 </div>
        
        <p>&nbsp;</p>
        <table border="1" cellspacing="0" cellpadding="0" width="100%"> <td colspan="10"><p>18-RESPONS&Aacute;VEL PELA MONITORA&Ccedil;&Atilde;O BIOL&Oacute;GICA</p></td>
  </table>
        <div style="width:100%" id="div_responsaveis">
        <div style="width:100%" id="div_responsaveis2">
               <table width="100%" cellspacing="0" cellpadding="0"  border="1" id="tbl_responsaveis">
                <tr>
                     
                   <td width="14%"><p>18.1 Per&iacute;odo</p></td>
                   <td width="14%"><p>18.2 NIT</p></td>
                   <td width=20%><p>18.3 Registro Conselho de Classe</p></td>
                   <td width=30%><p>18.4 Nome do Profissional Legalmente Habilitado</p></td>
                </tr>

 
                <tr>
                    <td width="14%"><p align="center"><input name='PERIODO_RESPONSAVEL_MONITORACAO_BIOLOGICA' type="text" size="20" /></p></td>
                    <td width="14%"><p><input name='NIT_RESPONSAVEL_MONITORACAO_BIOLOGICA' type="text" size="20" /></p></td>
                    <td width="20%"><p><input name='REGISTRO_CLASSE_RESPONSAVEL_MONITORACAO_BIOLOGICA' type="text" size="20" /></p></td>
                    <td width="30%"><p><input name='NOME_PROFISSIONAL_RESPONSAVEL_MONITORACAO_BIOLOGICA' type="text" size="20" /></p></td>
                </tr>
             </table>
             <div>
                       <button type="button" value="" onclick="insere(this)">+ Incluir Responsavel</button>
      <button type="button" value="" onclick="remove(this)" >+ Remover Responsavel</button>
                
            </div>
          </div>
           
        </div>
                
              
                   
        
     
    
     
           

    <p>&nbsp;</p>
    <table border="1" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td colspan="10"><strong>IV-RESPONS&Aacute;VEIS PELAS INFORMA&Ccedil;&Otilde;ES</strong></td>
  </tr>
  <tr>
    <td colspan="10"><p><em>Declaramos, para todos os    fins de direito, que as informa&ccedil;&otilde;es prestadas neste documento s&atilde;o ver&iacute;dicas e    foram transcritas fielmente dos registros administrativos, das demonstra&ccedil;&otilde;es    ambientais e dos programas m&eacute;dicos de responsabilidade da empresa. &Eacute; de nosso    conhecimento que a presta&ccedil;&atilde;o de informa&ccedil;&otilde;es falsas neste documento constitui    crime de falsifica&ccedil;&atilde;o de documento p&uacute;blico, nos termos do artigo 297 do    C&oacute;digo Penal e, tamb&eacute;m, que tais informa&ccedil;&otilde;es s&atilde;o de car&aacute;ter privativo do    trabalhador, constituindo crime, nos termos da Lei n&ordm; 9.029/95, pr&aacute;ticas    discriminat&oacute;rias decorrentes de sua exigibilidade por outrem, bem como de sua    divulga&ccedil;&atilde;o para terceiros, ressalvado quando exigida pelos &oacute;rg&atilde;os p&uacute;blicos    competentes.</em></p></td>
  </tr>
  <tr>
    <td colspan="3"><p>19-Data Emiss&atilde;o PPP</p></td>
    <td colspan="7"><p>20-REPRESENTANTE LEGAL DA EMPRESA             
         <input name='REPRESETANTE_EMPRESA' type="text" size="60" /></p></td>
  </tr>
  <tr>
    <td colspan="3" rowspan="2"><p align="center"><input name='DATA_EMISSAO' type="text" size="20" /></p></td>
    <td colspan="4" valign="top"><p>20.1NIT <input name='NIT_REPRESENTANTE' type="text" size="20" /></p></td>
    <td colspan="3"><p>20.2 Nome 
        <input name='NOME_REPRESENTANTE' type="text" size="20" /></p></td>
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
<p>&nbsp;</p>
</div>
</body>
</html>

