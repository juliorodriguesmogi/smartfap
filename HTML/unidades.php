<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
body{
	font-family:Geneva, Arial, Helvetica, sans-serif;
	font-size:80%;
	width:85%;
        
}
#principal{
        border-bottom-style: none;
}


#codigo_usuario {	text-align:right;	
}
#frm_usuarios {    border-bottom: none;
}
#principal {        border-bottom-style: none;
}
body{
	font-family:Geneva, Arial, Helvetica, sans-serif;
	font-size:90%;
	width:90%;
}
#principal{
    background: whitesmoke;
    width:1000px;
    height:150px;
}
#aba_principal{
    position: relative;
    width:500px;
	height:100px;
    list-style: none;
    font-family:  sans-serif;
    font-size: 95%; 
}
#aba_principal li{
    display:inline;
    position:relative;
}
li{display:inline}

li:hover{display:block;}
form #div_statusbar{
	vertical-align: bottom;
	position:absolute;
	top:1%;
	width: 110px;
	max-width: 1280px;
	border:solid;
	background-color:silver;
	left: 90%;
	height: 397px;
	text-align: center;
}
#div_statusbar textArea{
    font-size:75%;
}
table#tbl th {
    background-color: #FF0;
    display:inline;
    text-decoration: none;
    width:100%;
}
#codigo_atividade{
	text-align:right;	
}
table#tbl tr {
    background-color: #FF0;
    display:block;
    text-decoration: none;
    width:100%;
}
table#tbl tr:hover{
    background-color: cadetblue;
}
table#tbl td a{
    background-color: #ffc;
    display:block;
    text-decoration: none;
    width:100%;
}
table#tbl tdx a:hover{
    background-color: cadetblue;
}
#div_mensagem{
        text-align:center;
	position:relative;
	z-index:7;
}
#mensagem{
	text-align:center;
	width:300px;
	background:transpartent;
	border:none;
	color:red;
}
.highlight{
    background-color: cadetblue;
}
-->

</style>
<script type="text/javascript" src="../classes/js/abas.js"></script>
<script type="text/javascript" src="../classes/js/Estruturas.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros_2.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="../js/CNPJ.js"></script>
<script type="text/javascript">
	   function carrega_unidades(campo){
                 empativa=<?php echo $_SESSION['empresa_ativa']?>+"";
                 buscar_registros(window,'estrutura_organizacional',"Carrega_Estrutura",'CODIGO_EMPRESA',empativa,false,'=',newEstruturas);

                 codigo_estrutura=campo.value;
                 // Inicializa select option 
				 
                 campo.length=0;
                 // Loop para carregar select option
                 nivel_organizacao=0;
                 for (y=0;y< newEstruturas.length()+1;y++){
                            
                             opt=new Option('',0);
                             if (y==0){
                                opt.text="";
                                opt.value=0;
                             }
                             else {
                                opt=new Option();
                                if (newEstruturas.get_Nivel_Organizacao(y-1)>nivel_organizacao){
                                    opt.setAttribute('class',"subnivel");
                                    opt.text="  ";
                                }
                                else {
                                    opt.text="";
                                    opt.setAttribute('class',"");
                                }
                                nivel_organizacao=newEstruturas.get_Nivel_Organizacao(y-1);
				opt.text+=newEstruturas.get_Descricao_Unidade(y-1);
                                opt.value=newEstruturas.get_Codigo_Unidade(y-1);
                             }
                             
                             campo.add(opt);
                        }
                        if (campo.length==1){
                            campo.length=0;
                            opt=new Option('Nenhuma Unidade a Selecionar',0);
                            campo.add(opt);
                            
                        }
                        campo.value=codigo_estrutura;
                        

            }
            
            function grava_registro(){
             if (confirm("Salvar registro?")){
                document.forms[1].action="../PHP/Estrutura_Class.php?acao=I";
                document.forms[1].submit();
             }
            }
            function apaga_registro(){
             if (confirm("Apagar registro?")){
                document.forms[1].action="../PHP/Estrutura_Class.php?acao=D";
                document.forms[1].submit();
             }
            }            
            function pesquisar_registro(campo){
                newEstruturas=new Estruturas();
                buscar_registros2(window,'estrutura_organizacional','Estrutura_Class',campo.name,campo.value,true,Array("=","="),newEstruturas,"C");
                
                
            }
            function exibe_campos(){
                codigo_unidade=document.forms[1].elements['UNIDADE'].value;
                document.forms[1].reset();
                //newativ.setValores(newregistro.getValores());
                    if (acao=='I'){
                        document.forms[1].elements["UNIDADE"].value = 0;
                    }

                    if (acao=='A'){
                        document.forms[1].elements["UNIDADE"].value = new String(newEstruturas.get_Codigo_Unidade(0));
                        document.forms[1].elements["DESCRICAO_UNIDADE"].value = new String(newEstruturas.get_Descricao_Unidade(0));
                        document.forms[1].elements["NIVEL_LTCAT"].value = new String(newEstruturas.get_Nivel_LTCAT(0));
                        document.forms[1].elements["POSSUI_ALMOXARIFADO"].value = new String(newEstruturas.get_Possui_Almoxarifado(0));
                        document.forms[1].elements["RECEBIMENTO_EPIS"].value = new String(newEstruturas.get_Recebimento_Epis(0));
                        document.forms[1].elements["CNPJ_NIVEL"].value = new String(newEstruturas.get_CNPJ_Nivel(0));
                        document.forms[1].elements["POSSUI_ALMOXARIFADO"].value = new String(newEstruturas.get_Possui_Almoxarifado(0));
                    }

            }
            
            function recarrega_formulario(){
                var local=window.location.href;
                if (local.indexOf("?")>-1){
                    local2=(local.substring(0,local.indexOf("?")));
                    window.location.href=local2;
                }
            }
            

</script>

</head>
<link href="estilosistema.css" rel="stylesheet" type="text/css" />
<body onload="recarrega_formulario()">
<center>
  <h1>Cadastro de Unidades</h1>
</center>
<form id="frm_barra_tarefas" action="" >
  <button type="button" onclick="">
  <table>
    <tr>
      <td height="42"><img src="../images/novo.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Novo</td>
    </tr>
  </table>
  </button>
  <button type="button" onclick="grava_registro();">
  <table>
    <tr>
      <td height="42"><img src="../images/barra_ferramentas/floppy.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Gravar</td>
    </tr>
  </table>
  </button>
  <button  type="button" onclick="apaga_registro();">
  <table>
    <tr>
      <td height="42"><img src="../images/barra_ferramentas/error_button_2.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Apagar</td>
    </tr>
  </table>
  </button>
  <button  type="button" onclick="descer();">
  <table>
    <tr>
      <td height="42"><img src="../images/barra_ferramentas/update_quantity_cart[1].png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Desfazer</td>
    </tr>
  </table>
  </button>
  <button  type="button" onclick="subir();">
  <table>
    <tr>
      <td height="42"><img src="../images/barra_ferramentas/cima.gif" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Primeiro</td>
    </tr>
  </table>
  </button>
  <button  type="button" onclick="registro_anterior(document.forms[1].elements['CODIGO_EMPRESA'],'empresas_codigo_desc')">
  <table>
    <tr>
      <td height="42"><img src="../images/barra_ferramentas/left.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Anterior</td>
    </tr>
  </table>
  </button>
  <button  type="button" onclick="proximo_registro(document.forms[1].elements['CODIGO_EMPRESA'],'empresas_codigo_asc')">
  <table>
    <tr>
      <td height="42"><img src="../images/barra_ferramentas/right.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Pr&oacute;ximo</td>
    </tr>
  </table>
  </button>
  <button  type="button" onclick="descer();">
  <table>
    <tr>
      <td height="42" width="48"><img src="../images/barra_ferramentas/baixo.gif" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Ultimo</td>
    </tr>
  </table>
  </button>
    <button  type="button" onclick="document.forms[1].reset();document.forms[2].reset();document.forms[1].elements['CODIGO_USUARIO'].focus();">
  <table>
    <tr>
      <td height="42"><img src="../images/barra_ferramentas/folha.jpg" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Limpar</td>
    </tr>
  </table>
  </button>

  <button  type="button" onclick="descer();">
  <table>
    <tr>
      <td height="40"><img src="../images/printer_2.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="18">Imprimir</td>
    </tr>
  </table>
  </button>
</form>
  <link href="estiloSistema.css" rel="stylesheet" type="text/css" />
  <link href="../css/designer.css" rel="stylesheet" type="text/css" />  
  <form id="frm_principal" action="" method="post">
  <div id="principal" > 
      <br />
      <table width="30%" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onclick="trataCliqueAba( this.id );" onmouseover="trataMouseAba( this );"> Cadastro de Unidades </td>
        </tr>
      </table>

      <div id="divCadastro" style="display: block">
        <table width="100%" border="0" class="tabela">
          <tr>
            <th width="86">C&oacute;digo da Unidade </th>
            <td width="82"><input type="text" name="UNIDADE" size="10" onkeypress="return entrada_numerica_inteira(this,event)" onblur="pesquisar_registro(this)"/>
            <img src="../images/search.png" width="10px" height="10px"/></td>
            <td colspan="2" align="right">Descri&ccedil;&atilde;o da Unidade </td>
            <th colspan="3"><input type="text" name="DESCRICAO_UNIDADE" size="40" /></th>
            <th>&nbsp;</th>
            <th width="158">&nbsp;</th>
          </tr>
          <tr>
            <th>N&iacute;vel p/ LTCAT? </th>
            <td><select name="NIVEL_LTCAT">
              <option value="S">Sim</option>
              <option value="N">N&atilde;o</option>
              <option selected="selected"> </option>
            </select>            </td>
            <td width="81">Possui Almoxarifado? </td>
            <td width="80"><select name="POSSUI_ALMOXARIFADO">
              <option value="S">Sim</option>
              <option value="N">N&atilde;o</option>
              <option selected="selected"> </option>
            </select></td>
            <th width="78">Recebimento de EPIs? </th>
            <th width="100"><select name="RECEBIMENTO_EPIS">
              <option value="S">Sim</option>
              <option value="N">N&atilde;o</option>
              <option selected="selected"> </option>
            </select></th>
            <th width="75">CNPJ/CEI p/ LTCAT</th>
            <th width="108"><input type="text" name="CNPJ_NIVEL" size="18" onblur="Formatar_CNPJ(this)" onkeypress="return entrada_numerica(this,event)"/></th>
            <th>&nbsp;</th>
          </tr>
        </table>
		</div>
  </div>
  </form>
  
        <script>
            defineAba( "celAbaCadastro"  , "divCadastro"   );
            defineAbaAtiva( "celAbaCadastro" );
        </script>

 </body>
</html>
