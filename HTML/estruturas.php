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
<script type="text/javascript">
	   function carrega_unidades_pai(campo){
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
	   function carrega_unidades(campo){
                 empativa=<?php echo $_SESSION['empresa_ativa']?>+"";
                 unidade_pai=document.getElementById('UNIDADE_PAI').value;
                 buscar_registros(window,'estrutura_organizacional',"Carrega_Estrutura",Array('CODIGO_EMPRESA','UNIDADE'),Array(empativa,unidade_pai),false,Array('=','<>'),newEstruturas);

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
            function exibe_campos(){
                
            }
            
            function grava_registro(){
             if (confirm("Salvar registro?")){
                document.forms[1].action="../PHP/Estrutura_Class.php?acao=E";
                document.forms[1].submit();
             }
            }
            function remove_item(campo){
                linha_remover=campo.parentNode.parentNode;
                document.getElementById('tabela_estrutura').deleteRow(linha_remover.rowIndex);
            }
            function carregar_registros(){
                newEstruturas=new Estruturas();
                newEstruturas.inicializa();
                empativa=<?php echo $_SESSION['empresa_ativa']?>+"";
                
                buscar_registros2(window,'estrutura_organizacional','Estrutura_Class',Array('CODIGO_EMPRESA','UNIDADE_PAI'),Array(empativa,'0'),true,Array("=",">"),newEstruturas,"L");
                
                tabela=document.getElementById('tabela_estrutura');
                while (tabela.rows.length>0) tabela.deleteRow(-1);
                for (z=0;z<newEstruturas.length();z++){
                    newEstruturaspai=new Estruturas();
                    newEstruturaspai.inicializa();
                    buscar_registros2(window,'estrutura_organizacional','Estrutura_Class',Array('CODIGO_EMPRESA','UNIDADE'),Array(empativa,newEstruturas.get_Codigo_Unidade_Pai(z)),true,Array("=","="),newEstruturaspai,"C");
                    tabela.insertRow(-1);
                    tabela.rows[tabela.rows.length-1].insertCell(-1);
                    tabela.rows[tabela.rows.length-1].cells[0].setAttribute('style','width:2%;max-width:2%');
                    img=document.createElement('img');
                    img.src='../images/imageres.dll_I0037_0409.png';
                    img.setAttribute('style','height:15px;width:15px');
                    img.setAttribute('src','../images/imageres.dll_I0037_0409.png');
                    img.setAttribute('onclick','remove_item(this)');
                    img.alt='Remover a linha corrente';
                    tabela.rows[tabela.rows.length-1].cells[0].appendChild(img);
                    tabela.rows[tabela.rows.length-1].insertCell(-1);
                    tabela.rows[tabela.rows.length-1].insertCell(-1);
                    tabela.rows[tabela.rows.length-1].insertCell(-1);
                    tf=document.createElement('select');
                    tf.setAttribute('name','estrutura_organizacional|UNIDADE_PAI[]');
                    tf.add(new Option(newEstruturaspai.get_Descricao_Unidade(z),newEstruturas.get_Codigo_Unidade_Pai(z)));
                    tabela.rows[tabela.rows.length-1].cells[1].appendChild(tf);
                    tf.setAttribute('style','width:300px');
                    tf.readonly=true;
                    tf.value=document.getElementById('UNIDADE_PAI').value;
                    tf=document.createElement('select');
                    tf.setAttribute('name','estrutura_organizacional|UNIDADE[]');
                    tf.add(new Option(newEstruturas.get_Descricao_Unidade(z),newEstruturas.get_Codigo_Unidade(z)));
                    tf.value=document.getElementById('UNIDADE').value;
                    tf.setAttribute('style','width:300px');
                    tf.readonly=true;
                    tabela.rows[tabela.rows.length-1].cells[2].appendChild(tf);
                    tf=document.createElement('select');
                    tf.setAttribute('name','estrutura_organizacional|NIVEL_ORGANIZACAO[]');
                    tf.add(new Option(newEstruturas.get_Nivel_Organizacao(z),newEstruturas.get_Nivel_Organizacao(z)));
                    tf.value=document.getElementById('UNIDADE').value;
                    tf.setAttribute('style','width:50px');
                    tf.readonly=true;
                    tabela.rows[tabela.rows.length-1].cells[3].appendChild(tf);
                    
                    
                }
                
            }

            function inserir_nivel(campo){
                tabela.insertRow(-1);
                tabela.rows[tabela.rows.length-1].insertCell(-1);
                tabela.rows[tabela.rows.length-1].cells[0].setAttribute('style','width:2%;max-width:2%');
                img=document.createElement('img');
                img.src='../images/imageres.dll_I0037_0409.png';
                img.setAttribute('style','height:15px;width:15px');
                img.setAttribute('src','../images/imageres.dll_I0037_0409.png');
                img.setAttribute('onclick','remove_item(this)');
                img.alt='Remover a linha corrente';
                tabela.rows[tabela.rows.length-1].cells[0].appendChild(img);
                tabela.rows[tabela.rows.length-1].insertCell(-1);
                tabela.rows[tabela.rows.length-1].insertCell(-1);
                tabela.rows[tabela.rows.length-1].insertCell(-1);

                tf=document.createElement('select');
                tf.setAttribute('name','estrutura_organizacional|UNIDADE_PAI[]');
                tf.add(new Option(document.getElementById('UNIDADE_PAI').options[document.getElementById('UNIDADE_PAI').selectedIndex].text,document.getElementById('UNIDADE_PAI').value));
                tabela.rows[tabela.rows.length-1].cells[1].appendChild(tf);
                tf.setAttribute('style','width:300px');
                tf.readonly=true;
                tf.value=document.getElementById('UNIDADE_PAI').value;
                tf=document.createElement('select');
                tf.setAttribute('name','estrutura_organizacional|UNIDADE[]');
                tf.add(new Option(document.getElementById('UNIDADE').options[document.getElementById('UNIDADE').selectedIndex].text,document.getElementById('UNIDADE').value));
                tf.value=document.getElementById('UNIDADE').value;
                tf.setAttribute('style','width:300px');
                tf.readonly=true;
                tabela.rows[tabela.rows.length-1].cells[2].appendChild(tf);
                tf=document.createElement('select');
                tf.setAttribute('name','estrutura_organizacional|NIVEL_ORGANIZACAO[]');
                tf.add(new Option(document.getElementById('NIVEL_ORGANIZACAO').options[document.getElementById('NIVEL_ORGANIZACAO').selectedIndex].text,document.getElementById('NIVEL_ORGANIZACAO').value));
                tf.value=document.getElementById('UNIDADE').value;
                tf.setAttribute('style','width:50px');
                tf.readonly=true;
                tabela.rows[tabela.rows.length-1].cells[3].appendChild(tf);
                
            }

</script>

</head>
<link href="estilosistema.css" rel="stylesheet" type="text/css" />
<body onload="carregar_registros()">
<center>
  <h1>Manutençao da Estrutura Organizacional</h1>
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
  <div id="principal" > <br />
      <br />
      <table width="30%" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaEstrutura" onclick="trataCliqueAba( this.id );" onmouseover="trataMouseAba( this );"> Construir Estrutura </td>		  
        </tr>
      </table>


        <div id="divEstrutura" style="display: block">
		
          <table id="tabela_lancamentos" width="100%" border="0" class="tabela">
            <tr>
			 <th colspan="3">Unidade Mestre </th>
			 <th width="446" align="left"><select  id="UNIDADE_PAI" style="width:300px" onfocus="carrega_unidades_pai(this)" >
             </select></th>
			 <th width="154" align="left">Unidade Subordinada </th>
			 <th width="270" align="left"><select  id="UNIDADE" style="width:300px" onfocus="carrega_unidades(this)" >
             </select></th>
                         <th width="154" align="left">Nível Organização</th>
			 <th width="270" align="left"><select  id="NIVEL_ORGANIZACAO" style="width:50px" >
            
                             <option value=""></option>
                             <option value="0">0</option>
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>
                             <option value="6">6</option>
                             <option value="7">7</option>
                             <option value="8">8</option>
                             <option value="9">9</option>
                             <option value="10">10</option>
                              </select>
                         </th>
                         
			 <th width="100" align="left"><button type="button"  onclick="inserir_nivel(this)">Inserir Nível</button></th>
			 <th width="31">		      </th>			 
            </tr>
			  <tr><td width="34">&nbsp;</td>
			    <td width="59">Sequência</td>
			    <td colspan="2">Unidade Mestre </td>			
			  <td colspan="2">Unidade Subordinada </td>
		      <td>&nbsp;</td>
		    <tr>
			<td colspan="2"></td>
			</tr>
          </table>
          <table id="tabela_estrutura" width="100%" border="0" class="tabela">
		  </table>
        </div>
        <script>
            defineAba( "celAbaEstrutura" , "divEstrutura"  );
            defineAbaAtiva( "celAbaEstrutura" );
        </script>
      </div>
</form>
 </body>
</html>
