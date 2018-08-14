<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

    <style type="text/css">
    body{
	font-family:Geneva, Arial, Helvetica, sans-serif;
	font-size:90%;
	width:90%;
        background: white;
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
	height: 150px;
}
li{display:inline}
.tabela_epis{
    font-size:11px;
}
    .tabela_epis input{
        font-size:12px;
    }
@media \0screen\,screen\9 { 
    .tabela_epis input{
        font-size:9px;
    }
}    
li:hover{display:block;}
#div_statusbar{
	vertical-align: bottom;
	position:absolute;
	top:1%;
	width: 110px;
	border:solid;
	background-color:silver;
	right: 0px;
	max-width:110px;
	max-height:397px;
	height: 397px;
	text-align: center;
}
#div_statusbar textArea{
    font-size:75%;
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
h1{font-size:150%}
</style>
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Estruturas.js"></script>
<script type="text/javascript" src="../classes/js/Fabricantes.js"></script>
<script type="text/javascript" src="../classes/js/maquina.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="../classes/js/Setores.js"></script>
<script type="text/javascript" src="../classes/js/Abas.js"></script>

</head>

<body>
    <script type="text/javascript">  
 
        newfabricantes=new Fabricantes();
        newmaquina=new maquina();
          empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();    
         newSetores=new Setores();
         function captura_linha(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['CODIGO_MAQUINA'].value=valor_celula[0];
                document.forms[1].elements['NOME'].value=valor_celula[1];
                document.forms[1].elements['TIPO_DE_USO'].value=valor_celula[2];
                document.forms[1].elements['CODIGO_MAQUINA'].focus();
                document.getElementById('consultaexterna').style.display='none';
            }

            div_pai=document.getElementById('consultaexterna');

            
            function monta_consulta_funcionario(campo_origem,campo_pesquisa){
                estilo='';
                if (campo_origem!=null){
                    posicao=Array();
                    posicao[0]=findPosY(campo_origem)+campo_origem.offsetHeight;
                    posicao[1]=findPosX(campo_origem)+campo_origem.offsetLeft;
                    posicao[2]="150";
                    posicao[3]=campo_origem.offsetWidth;
                    estilo='z-index:10;position:absolute;'+'top:'+posicao[0]+'px;'+'left:'+posicao[1]+'px;'+'height:'+posicao[2]+'px;'+'width:'+posicao[3]+'px;'+'border:solid 1px'+'background:white;';
                }    
                div_pai=document.getElementById('consultaexterna');
                div_pai.setAttribute('style',estilo);
                div_pai.style.border='solid 1px';
                div_pai.style.top=posicao[0];
                div_pai.style.left=posicao[1]+'px';
                div_pai.style.height='340px';
                div_pai.style.width='425px';
                div_pai.style.background='white';
                div=document.createElement('div');
                div.setAttribute('className', 'tableContainer');
                div.setAttribute('id', 'tableContainer');
                div_pai.appendChild(div);                
                tabela=document.createElement('table');
                tabela.setAttribute('class', 'scrollTable');
                if (document.getElementById('tableContainer').children.length>0){
                        if (navigator.appName!='Microsoft Internet Explorer'){
                            oChild=document.getElementById('tableContainer').childNodes;
                            document.getElementById('tableContainer').removeChild( oChild[0] );
                        }
                        else {
                            oChild=document.getElementById('tableContainer').children[0];
                            document.getElementById('tableContainer').removeChild(oChild);
                        }    
                }
                div_pai.style.display='block';
                document.getElementById('tableContainer').appendChild(tabela);
                thead=document.createElement('thead');
                thead.setAttribute('class', 'fixedHeader');
                tabela.appendChild(thead);
                tr=document.createElement('tr');
                thead.appendChild(tr);
                colunas=Array('COD.MAQ.','                  NOME                    ','TIPO_DE_USO');
                for (xcab=0;xcab < 3;xcab++){
                     th=document.createElement('th');
                     th.innerHTML=colunas[xcab];
                     tr.appendChild(th);  
                }  
                consultar_funcionario(tabela,campo_pesquisa,' like ')
            }    
                
                
            function consultar_funcionario(ntabela,campo_pesquisa,criterio){
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                ntabela.appendChild(tbody);
                

                empresa_ativa=empresa_ativa.toString();
                parm=Array(empresa_ativa,(campo_pesquisa.value+"%"));
                buscar_registros(window,'maquinas','Consulta_Maquina',Array("CODIGO_EMPRESA","NOME"),parm,false,Array("=","like "),newregistros);
                
                cont=0;
                valores=newregistros.getValores();
                valores=valores.toString().split(',');
                for(x=0;x<valores.length-1;x++){
                    vreg=valores[x].split('|');
                    tr=document.createElement('tr');
                    
                    if (x % 2==0){
                        tr.setAttribute('class','alternateRow');
                    }
                    else {
                        tr.setAttribute('class','normalRow');
                    }
                    tr.setAttribute('onclick', 'captura_linha(this)');
                    for (y=0;y<vreg.length-1;y++){
                        td=document.createElement('td');
                        a=document.createElement('a');
                        a.setAttribute('href', "#");
                        a.innerHTML=vreg[y];
                        td.appendChild(a);
                        tr.appendChild(td);
                        tr.appendChild(td);
                        tbody.appendChild(tr);
                    }
                    
                    
                }    
                
            }
        function exibe_campos(){
                codigo_maquina=document.forms[1].elements['CODIGO_MAQUINA'].value;
                document.forms[1].reset();
                //newmaquina.setValores(newregistro.getValores());
                                
                if (acao=='I'){
                    document.forms[1].elements["CODIGO_MAQUINA"].value = codigo_maquina;
                }
                if (acao=='A'){
                        carrega_campo();
                        document.forms[1].elements["CODIGO_MAQUINA"].value = new String(newmaquina.get_Codigo_Maquina());
                        document.forms[1].elements["NOME"].value = new String(newmaquina.get_Nome());
                        document.forms[1].elements["TIPO_DE_USO"].value = new String(newmaquina.get_Tipo_De_Uso());
			document.forms[1].elements["TAXA_DE_RUIDO"].value = new String(newmaquina.get_Taxa_De_Ruido());
                       document.forms[1].elements["TAXA_DE_LUMINOSIDADE"].value = new String(newmaquina.get_Taxa_De_Luminosidade());
                        carrega_unidades(document.forms[1].elements["UNIDADE"]);
                        document.forms[1].elements["UNIDADE"].value = new String(newmaquina.get_Unidade());
                        carrega_setores(document.forms[1].elements["CODIGO_SETOR"]);
                        document.forms[1].elements["CODIGO_SETOR"].value = new String(newmaquina.get_Setor());
                        document.forms[1].elements["FABRICANTE"].value = new String(newmaquina.get_Fabricante());
                        document.getElementById(new String(newmaquina.get_Classificacao_Local())).checked=true;
                        document.forms[2].elements["txt_log_data_cadastro"].value = new String(newmaquina.get_Data_Cadastro());                
                        document.forms[2].elements["txt_log_ultima_atualizacao"].value = new String(newmaquina.get_Ultima_Atualizacao());                     
                        document.forms[2].elements["txt_log_ultimo_usuario"].value = new String(newmaquina.get_Ultimo_Usuario());                
                        
                       
                }
            }
            function carrega_campo(){
                 codigo_maquina=document.forms[1].elements['FABRICANTE'].value;
                  buscar_registros(window,"fabricantes","Carrega_Fabricante",null,null,true,null,newfabricantes);
                 document.forms[1].elements['FABRICANTE'].length=0;
                 document.forms[1].elements['FABRICANTE'].add(new Option('Selecione um Fabricante','0'));
                 for(i=1;i <= newfabricantes.length();i++){
                        document.forms[1].elements['FABRICANTE'].add(new Option(newfabricantes.get_Nome(i-1),i-1));
                 }       
            }
           

            
            var acao='';
            function grava_registro(){
             if (confirm("Confirma o registro?")){
                document.forms[1].action="../PHP/Maquina_Class.php?acao=I";
                document.forms[1].submit();
             }
            }
            function imprime_registro(){
             if (confirm("Imprimir registro corrente?")){
                document.forms[1].action="Relatorio_Maquina.php";
                document.forms[1].submit();
             }
            }            
            function apaga_registro(){
                if (confirm("Confirma a exclusão do registro?")){
                    document.forms[1].action="../PHP/Maquina_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
             function proximo_registro(campo,visao){
                codexa=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codexa,">",visao,visao,'Busca_Maquina',false,newexame);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codexa=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codexa,"<",visao,visao,'Busca_Maquina',false,newexame);                    
                exibe_campos();
            } 
    function imprime_registro(){
  
          if (confirm("Imprimir registro corrente?")){
                document.forms[1].action="../Reports/Relatorio_Maquina.php";
                document.forms[1].submit();
             }
       }   
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
                            alert('Empresa n�o possui estrutura organizacional cadastrada!');
                            return;
                            
                        }
                        campo.value=codigo_estrutura;
                        

            }
	   function carrega_setores(campo){
                 document.getElementById('setorimg').style.visibility='visible';
                 chave=Array('UNIDADE');
                 Unidade=document.forms[1].elements['UNIDADE'].value;
                 valor=Array(Unidade);
                 buscar_registros(window,"setores","Carrega_Setores",chave,valor,false,Array("="),newSetores);
                 old_value=campo.value;
                 campo.length=0;
		 campo.add(new Option('',0));
                 for (y=1;y <=newSetores.length();y++){
                             opt=new Option(newSetores.get_Codigo_Setor([y-1])+"|"+newSetores.get_Nome_Setor([y-1]).substr(0,100),newSetores.get_Codigo_Setor([y-1]));
                             campo.add(opt);
                        }
                 document.getElementById('setorimg').style.visibility='hidden';
                 campo.value=old_value;
                 
            }  
        </script>
<center><h1>Cadastro de Locais,M�quinas e Equipamentos</h1></center>
    <div style="height:40px;max-height:40px">
     <form id="frm_barra_tarefas" action="" >
        <button type="button"  onclick="window.location.reload(true);document.forms[1].elements['CODIGO_EMPRESA'].focus();">
       <table>
            <tr>
            <td height="42"><img src="../images/novo.png" height="40" width="38" /></td>
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
       <button  type="button" onclick="exibe_campos();">
       <table>
            <tr>
            <td height="42"><img src="../images/barra_ferramentas/update_quantity_cart[1].png" height="33" width="47" /></td>
            </tr>
            <tr>
            <td height="16">Desfazer</td>
            </tr>
       </table>
       </button>
     
      <button  type="button" onclick="registro_anterior(document.forms[1].elements['CODIGO_EXAME'],'exames_codigo_desc')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/left.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Anterior</td>
           </tr>
      </table>
      </button>
      <button  type="button" onclick="proximo_registro(document.forms[1].elements['CODIGO_EXAME'],'exames_codigo_asc')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/right.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Pr�ximo</td>
           </tr>
      </table>
      </button>
     
     <button  type="button" onclick="imprime_registro();">
     <table>
          <tr>
          <td height="42"><img src="../images/printer_2.png" height="40" width="40" /></td>
          </tr>
          <tr>
          <td height="18">Imprimir</td>
          </tr>
     </table>
     </button>
     <button  type="button" onclick="window.location.reload(true);document.forms[1].elements['CODIGO_EXAME'].focus();">
     <table>
         <tr>
         <td height="42" width="50"><img src="../images/folha.gif" height="40" width="35" /></td>
         </tr>
         <tr>
         <td height="16">Limpar</td>
         </tr>
     </table>
  </button>  

  
      <div id="div_statusbar">
        <table width="109" height="393" border="0">
          <tr>
            <td colspan="2" style="border:solid 1px">Informa&ccedil;&otilde;es do Registro</td>
          </tr>
          <tr>
            <td colspan="2">Data de Movimenta&ccedil;&atilde;o </td>
          </tr>
          <tr>
            <td colspan="2"><textarea id="TXT_LOG" name="txt_log_data_cadastro" disabled="disabled" style="text-align:center;width:100px;min-height:30px;max-height:30px;max-width:100px;min-width:100px;background:transparent" cols="1" rows="2"></textarea></td>
          </tr>
          <tr>
            <td colspan="2">&Uacute;ltima Atualiza&ccedil;&atilde;o</td>
          </tr>
          <tr>
            <td colspan="2"><textarea id="TXT_LOG" name="txt_log_ultima_atualizacao" disabled="disabled" style="text-align:center;width:100px;min-height:30px;max-height:30px;max-width:100px;min-width:100px;background:transparent" cols="1" rows="2"></textarea></td>
          </tr>
          <tr>
            <td colspan="2">&Uacute;ltima Altera&ccedil;&atilde;o realizada por</td>
          </tr>
          <tr>
            <td colspan="2"><input id="TXT_LOG" name="txt_log_ultimo_usuario" type="text" disabled="disabled" size="8" style="background:transparent" maxlength="8" value="<?php echo $_SESSION['ID_USUARIO']?>"/></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">&Uacute;ltimo sequencial gerado</td>
          </tr>
          <tr>
            <td colspan="2"><input id="TXT_LOG" name="txt_log_ultimo_codigo_gerado" type="text" disabled="disabled" size="8" style="background:transparent" maxlength="8" value="<?php echo $_SESSION['CODIGO_USUARIO']?>"/></td>
          </tr>
          <tr>
            <td width="50">&nbsp;</td>
            <td width="49">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </div>
     

    </form>
    </div>
    <link href="estilosistema.css" rel="stylesheet" type="text/css" />


        <br/>
        <br/>
    
    <form id="frm_maquina" action="" method="POST">
        <table width="17%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Dados Cadastrais </td>
                
            </tr>
</table>
       
<div id="divCadastro" style="display: block">
           <table width="92%" border="0" class="tabela">
          <tr>
            <td width="121" rowspan="2">C&oacute;digo  </td>
            <td width="90" rowspan="2"><p>
                <input type="text" name="CODIGO_MAQUINA" class="input" maxlength="10" size="10" onblur="buscar_registro(window,this.name,this.value,'=','maquinas','maquinas','Busca_Maquina',true,newmaquina)" /><img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_MAQUINA'],document.forms[1].elements['CODIGO_MAQUINA'])" onkeypress="return entrada_numerica_inteira(this,event)" width="10px" height="10px"/>
            </p></td>
            <td width="175" rowspan="2"><div align="right">Descri&ccedil;&atilde;o </div></td>
            <td colspan="3" rowspan="2"><input type="text" name="NOME"  class="input" maxlength="70" size="70" /></td>
            <td colspan="3"><div align="center">&Aacute;rea de Classifica&ccedil;&atilde;o</div></td>
            </tr>
          <tr>
            <td colspan="2">
              <input name="CLASSIFICACAO_LOCAL" type="radio" value="A" id="A" />
              <label for="CLASSIFICACAO_LOCAL">Administrativa</label>
   </td>
            <td width="188">
              <input name="CLASSIFICACAO_LOCAL" type="radio" value="O" id="O" />
              <label for="CLASSIFICACAO_LOCAL">Operacional</label>
              </td>
          </tr>
          <tr>
            <td>Taxa nominal de Ru&iacute;do </td>
            <td><input type="text" class="input" name="TAXA_DE_RUIDO" maxlength="5" size="10"/> dB(A)</td>
            <td>Taxa Nominal de Luminosidade </td>
            <td width="95"><input type="text" class="input" name="TAXA_DE_LUMINOSIDADE" maxlength="5" size="10"/> Lux</td>
            <td width="61"><div align="right">Fabricante</div></td>
            <td width="256"><select name="FABRICANTE" onfocus="carrega_campo()" style="width:250px">
            </select></td>
            <td width="67">&nbsp;</td>
			<td width="87">Tipo de Utiliza&ccedil;&atilde;o </td>
			<td><select name="TIPO_DE_USO" >
              <option value="" selected></option>
              <option value="EQUIPAMENTOS DE ESCRIT&Oacute;RIO">Equpamentos de Escrit&oacute;rio</option>
              <option value="M&Aacute;QUINAS OPERATRIZES">M&aacute;quinas Operatrizes</option>
              <option value="M&Aacute;QUINAS PESADAS">M&aacute;quinas Pesadas</option>
              <option value="VE&Iacute;CULOS PESADOS">Ve&iacute;culos Pesados</option>
              <option value="IMPRESSORAS">Impressoras</option>
              <option value="M&Aacute;QUINAS INJETORAS">M&aacute;quinas Injetoras</option>
              <option value="TRANSFORMA&Ccedil;&Atilde;O QU&Iacute;MICA">Transforma&ccedil;&atilde;o Qu&iacute;mica</option>
            </select></td>
          </tr>
          
          <tr>
            <td>Unidade de Trabalho </td>
            <td colspan="3"><select name="UNIDADE" id="UNIDADE" style="width:300px" onfocus="carrega_unidades(this)" >
            </select></td>
            <td>Setor</td>
            <td colspan="2"><select name="CODIGO_SETOR" id="SETOR" style="width:300px" onfocus="carrega_setores(this)" >
            </select><img id="setorimg" src="../images/gears.gif" width="15px" height="15px" style="visibility:hidden"/></td>
            <td colspan="2">&nbsp;</td>
            </tr>
        </table>
</div>
        <div id="divRelatorio" style="display: none">
            <table border="0" width="50%">
                <tr>
                    <td>
                        RELAT�RIOS
                    </td>
                </tr>
            </table>
        </div>
        <div id="divConsulta" style="display: none">
            <table border="0" width="50%">
                <tr>
                    <td>
                        CONSULTAS
                    </td>
                </tr>
            </table>
        </div>
        <div id="divModelo" style="display: none">
            <table border="0" width="50%">
                <tr>
                    <td>
                        MODELOS DE IMPRESS�O
                    </td>
                </tr>
            </table>
        </div>
        <script>
            defineAba( "celAbaCadastro"  , "divCadastro"   );
            defineAba( "celAbaRelatorio" , "divRelatorio"  );
            defineAba( "celAbaConsultas" , "divConsulta"   );
            defineAba( "celAbaModelos"   , "divModelo"     );
            defineAbaAtiva( "celAbaCadastro" );
        </script>
</body>
       
  <link href="../css/designer.css" type="text/css" rel="stylesheet" />
 
</div>
</form>
       </div><link href="statusbar.css" type="text/css" rel="stylesheet"/>
             <div id="div_statusbar">
               
<form id='status' name="status">    
  <table width="109" height="393" border="0">
    <tr>
      <td colspan="2" style="border:solid 1px">Informa&ccedil;&otilde;es do Registro</td>
    </tr>
    <tr>
      <td colspan="2">Data de Cadastro</td>
    </tr>
    <tr>
      <td colspan="2"><textarea ID="TXT_LOG" name="txt_log_data_cadastro" DISABLED="DISABLED" style="text-align:center;width:100px;min-height:30px;max-height:30px;max-width:100px;min-width:100px;background:transparent" cols="1" rows="2"></textarea></td>
    </tr>
    <tr>
      <td colspan="2">&Uacute;ltima Atualiza&ccedil;&atilde;o</td>
    </tr>
    <tr>
      <td colspan="2"><textarea ID="TXT_LOG" name="txt_log_ultima_atualizacao" DISABLED="DISABLED" style="text-align:center;width:100px;min-height:30px;max-height:30px;max-width:100px;min-width:100px;background:transparent" cols="1" rows="2"></textarea></td>
    </tr>
      
    <tr>
      <td colspan="2">&Uacute;ltima Altera��o realizada por</td>
    </tr>
    <tr>
      <td colspan="2"><INPUT ID="TXT_LOG" name="txt_log_ultimo_usuario" TYPE="TEXT" DISABLED="DISABLED" SIZE="8" STYLE="background:transparent" MAXLENGTH="8" VALUE="<?php echo $_SESSION['ID_USUARIO']?>"/></td>
    </tr>

      <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&Uacute;ltimo c&oacute;digo gerado</td>
    </tr>
    <tr>
      <td colspan="2"><INPUT ID="TXT_LOG" name="txt_log_ultimo_codigo_gerado" TYPE="TEXT" DISABLED="DISABLED" SIZE="8" STYLE="background:transparent" MAXLENGTH="8" VALUE="<?php echo $_SESSION['CODIGO_USUARIO']?>"/></td>
    </tr>
    <tr>
      <td width="50">&nbsp;</td>
      <td width="49">&nbsp;</td>
    </tr>
   
    </tr>
  </table>
</form>
</div>
        <form>
                <div id="consultaexterna" style="postion:absolute;display:none">
      <input type="text" id="txt_pesquisa" name="txt_pesquisa" size="50"/>
            <button name="btn" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_MAQUINA'],document.forms[3].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button><label onclick="document.getElementById('consultaexterna').style.display='none'"><strong>   X</strong></label>
      </div>     

    </form>
</body>
</html>
