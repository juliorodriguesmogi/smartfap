<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro de Funcionários</title>
<style type="text/css">
body{
	font-family:Geneva, Arial, Helvetica, sans-serif;
	font-size:80%;
	width:85%;
}
#principal{
	position:absolute;
	width:80%;
	height:32%;
	left:0%;
}
#aba_principal{
	position: relative;
	width:30%;
	list-style: none;
	font-family:  sans-serif;
	font-size: 95%;
	left: 0;
}
#aba_principal li{
    display:inline;
    position:relative;
}
li{display:inline}

li:hover{display:block;}
</style>
</head>

<body>

    <div>
    <form id="frm_barra_tarefas" action="" >
       <button type="button" onclick="">
       <table>
            <tr>
            <td height="42"><img src="../images/barra_ferramentas/novo.jpg" height="36" width="47" /></td>
            </tr>
            <tr>
            <td height="16">Novo</td>
            </tr>
       </table>
       </button>
       <button type="button" onclick="grava_registro();">
       <table>
            <tr>
            <td height="42"><img src="../images/barra_ferramentas/floppy.png" height="40" width="45" /></td>
            </tr>
            <tr>
            <td height="16">Gravar</td>
            </tr>
       </table>
       </button>
       <button  type="button" onclick="apaga_registro();">
       <table>
            <tr>
            <td height="42"><img src="../images/barra_ferramentas/error_button_2.png" height="40" width="45" /></td>
            </tr>
            <tr>
            <td height="16">Apagar</td>
            </tr>
       </table>
       </button>
       <button  type="button" onclick="descer();">
       <table>
            <tr>
            <td height="42"><img src="../images/barra_ferramentas/update_quantity_cart[1].png" height="33" width="47" /></td>
            </tr>
            <tr>
            <td height="16">Desfazer</td>
            </tr>
       </table>
       </button>
       <button  type="button" onclick="subir();">
       <table>
            <tr>
            <td height="42"><img src="../images/barra_ferramentas/cima.gif" height="35" width="35" /></td>
            </tr>
            <tr>
            <td height="16">Primeiro</td>
            </tr>
      </table>
      </button>
      <button  type="button" onclick="registro_anterior(document.forms[1].elements['CODIGO_USUARIO'],'usuarios')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/left.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Anterior</td>
           </tr>
      </table>
      </button>
      <button  type="button" onclick="proximo_registro(document.forms[1].elements['CODIGO_USUARIO'],'usuarios')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/right.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Pr&oacute;ximo</td>
           </tr>
      </table>
      </button>
      <button  type="button" onclick="decer();">
     <table>
          <tr>
          <td height="42" width="48"><img src="../images/barra_ferramentas/baixo.gif" height="35" width="35" /></td>
          </tr>
          <tr>
          <td height="16">Ultimo</td>
          </tr>
     </table>
     </button>
     <button  type="button" onclick="decer();">
     <table>
          <tr>
          <td height="40"><img src="../images/barra_ferramentas/printer_2.png" height="38" width="45" /></td>
          </tr>
          <tr>
          <td height="18">Imprimir</td>
          </tr>
     </table>
     </button>
     <button  type="button" onclick="document.forms['form1'].reset();document.getElementById('iFrame1').src='';document.forms['form1'].elements['codigo_associado'].focus();">
     <table>
         <tr>
         <td height="42"><img src="../images/barra_ferramentas/folha.jpg" height="36" width="45" /></td>
         </tr>
         <tr>
         <td height="16">Limpar</td>
         </tr>
     </table>
  </button>  

</form>
</div>

<form id="frm_empresas" action="empresas.php" method="POST">
<div id="principal">
<ul id="aba_principal" name="aba_principal">
  <li id="dados_cadastrais"><a href="">Dados Cadastrais do Funcionário</a>
      <div style="top:10px;">        </div>
  </li>
      <div style="top:10px; ">      
	  <table width="10%" border="0" bgcolor="WHITESMOKE">
  <tr>
    <td>C&oacute;digo da Empresa </td>
    <td><input name="textfield5" type="text" size="10" maxlength="10" /></td>
    <td colspan="4"><input name="textfield22" type="text" size="50" maxlength="50" /></td>
    <td>Grau de Exposi&ccedil;&atilde;o </td>
    <td><select name="select">
    </select>    </td>
    <td>Grau de Risco </td>
    <td><select name="select4">
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="71">Matr&iacute;cula do Funcion&aacute;rio </td>
    <td width="60"><input name="textfield" type="text" size="10" maxlength="10" /></td>
    <td width="68">Nome do Funcion&aacute;rio </td>
    <td colspan="3"><input name="textfield2" type="text" size="50" maxlength="50" /></td>
    <td width="61">Numero CTPS </td>
    <td width="70"><input name="textfield3" type="text" size="10" maxlength="10" /></td>
    <td width="60">S&eacute;rie</td>
    <td width="65"><input name="textfield4" type="text" size="10" maxlength="10" /></td>
    <td width="56">Data de Emiss&atilde;o </td>
    <td width="96"><input name="textfield42" type="text" size="10" maxlength="10" /></td>
  </tr>
  <tr>
    <td>N&uacute;mero CPF </td>
    <td colspan="2"><input name="textfield6" type="text" size="18" maxlength="18" /></td>
    <td width="80">N&uacute;mero RG </td>
    <td width="129"><input name="textfield62" type="text" size="18" maxlength="18" /></td>
    <td width="83">Data Expedi&ccedil;&atilde;o </td>
    <td><input name="textfield422" type="text" size="10" maxlength="10" /></td>
    <td>&Oacute;rg&atilde;o Expedidor </td>
    <td><input name="textfield32" type="text" size="10" maxlength="10" /></td>
    <td>N&uacute;mero PIS/PASEP </td>
    <td colspan="2"><input name="textfield43" type="text" size="10" maxlength="10" /></td>
    </tr>
  <tr>
    <td>Data de Nascimento </td>
    <td><input name="textfield4222" type="text" size="10" maxlength="10" /></td>
    <td>&nbsp;</td>
    <td>Data de Admiss&atilde;o </td>
    <td><input name="textfield42222" type="text" size="10" maxlength="10" /></td>
    <td>Data de Desligamento </td>
    <td><input name="textfield422222" type="text" size="10" maxlength="10" /></td>
    <td>Profiss&atilde;o do Funcion&aacute;rio  </td>
    <td colspan="2"><select name="select2">
    </select>    </td>
    <td>Cargo atual na empresa </td>
    <td><select name="select3">
    </select></td>
  </tr>
  <tr>
    <td>Setor de Trabalho </td>
    <td colspan="2"><select name="select5">
    </select></td>
    <td>Fun&ccedil;&atilde;o </td>
    <td><select name="select6">
    </select></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12">&nbsp;</td>
  </tr>
</table>
	  </div>
</ul>
</div>
</form>

</body>
</html>
