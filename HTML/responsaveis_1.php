<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>responsaveis tecnicos</title>

 <style type="text/css">
form  #div_statusbar{
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
body{
	font-family:Geneva, Arial, Helvetica, sans-serif;
	font-size:90%;
	width:90%;
        
}
h1{font-size:150%}

 </style>
        <script>
            defineAba( "celAbaCadastro"  , "divCadastro"   );
            defineAbaAtiva( "celAbaCadastro" );
        </script>

<title>    
</title>
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Estruturas.js"></script>
<script type="text/javascript" src="../classes/js/responsaveis.js"></script>
<script type="text/javascript" src="../classes/js/Abas.js"></script>
<script type="text/javascript" src="../classes/js/funcoes.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="../js/CPF.js"></script>
<script type="text/javascript" src="../classes/js/CBO.js"></script>
<script type="text/javascript" src="../classes/js/CBOS.js"></script>

<script type="text/javascript">  
        
         newresponsavel=new responsavel();
          
         empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();   
         CBOS_Profissao=new CBOS();
         CBOS_Cargo=new CBOS();
         newfuncoes=new Funcoes();
         
         function captura_linha(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['CODIGO_RESPONSAVEL'].value=valor_celula[0];
                document.forms[1].elements['NOME_RESPONSAVEL'].value=valor_celula[1];
                document.forms[1].elements['CPF'].value=valor_celula[2];
                document.forms[1].elements['CODIGO_RESPONSAVEL'].focus();
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
                colunas=Array('COD.RESP.','NOME RESP.','CPF');
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
                buscar_registros(window,'responsaveis','Consulta_Responsaveis',Array("NOME_RESPONSAVEL"),parm,false,Array("like "),newregistros);
                
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
                codigo_responsavel=document.forms[1].elements['CODIGO_RESPONSAVEL'].value;
                document.forms[1].reset();
                //newmaquina.setValores(newregistro.getValores());
                                
                if (acao=='I'){
                    document.forms[1].elements["CODIGO_RESPONSAVEL"].value = codigo_responsavel;
                }
                if (acao=='A'){
                        carrega_profissao();
                        carrega_funcoes();
                      
                        document.forms[1].elements["CODIGO_RESPONSAVEL"].value = new String(newresponsavel.get_Codigo_Responsavel());
                        document.forms[1].elements["NOME_RESPONSAVEL"].value = new String(newresponsavel.get_Nome_Responsavel());
                        document.forms[1].elements["CPF"].value = new String(newresponsavel.get_CPF());
						document.forms[1].elements["RG"].value = new String(newresponsavel.get_RG());
                                                document.forms[1].elements["NUMERO_NIT"].value = new String(newresponsavel.get_Numero_Nit());
                        document.forms[1].elements["DATA_ADMISSAO"].value = new String(newresponsavel.get_Data_Admissao());
                        document.forms[1].elements["FUNCAO"].value = new String(newresponsavel.get_Funcao());    
                        document.forms[1].elements["SETOR"].value = new String(newresponsavel.get_Setor());
                        document.forms[1].elements["PROFISSAO"].value = new String(newresponsavel.get_Profissao());
                        document.forms[1].elements["CARGO"].value = new String(newresponsavel.get_Cargo());
                        document.forms[2].elements["txt_log_data_cadastro"].value = new String(newresponsavel.get_Data_Cadastro());                
                        document.forms[2].elements["txt_log_ultima_atualizacao"].value = new String(newresponsavel.get_Ultima_Atualizacao());                     
                        document.forms[2].elements["txt_log_ultimo_usuario"].value = new String(newresponsavel.get_Ultimo_Usuario());                
                        
                       
                }
            }
            function carrega_campo(){
                 codigo_cnae=document.forms[1].elements['CODIGO_CNAE'].value;
                 cnae=Array();
                 descricao=Array();
                 observacao=Array();
                 var xtemp='';
                 var x='';
                 nregistros=newregistros.getValores();
                 
                 for(i=0;i < nregistros.length;i++){
                    x=nregistros[i].split("|");
                    cnae[i]=x[0].substr(0,10);
                    xtemp=x[1];
                    descricao[i]=xtemp;

                 }
                 for (c=0;c<document.forms[1].elements['CODIGO_CNAE'].options.length-1;c++){
                     document.forms[1].elements['CODIGO_CNAE'].remove(c);
                 }
                 
                 
                 for (y=0;y<cnae.length;y++){
                             
                             //opt=document.createElement('option');
                             opt=new Option('Selecione um item',0);
                             if (y==0){
                                opt.text="Selecione um �tem";
                                opt.value="";
                             }
                             else {
                                opt.text=cnae[y]+" "+descricao[y];
                                opt.value=cnae[y];
                             }
                             
                             document.forms[1].elements['CODIGO_CNAE'].add(opt);
                        }
                        document.forms[1].elements['CODIGO_CNAE'].value=newresponsavel.get_CNAE();

            }
           

            
            var acao='';
            function grava_registro(){
             if (confirm("confirma o registro")){

                document.forms[1].action="../PHP/Responsavel_Class.php?acao=I";
                document.forms[1].submit();
             }
            }
            function apaga_registro(){
                if (confirm("Confirma a exclus�o do registro?")){
                    document.forms[1].action="../PHP/Responsavel_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
            function proximo_registro(campo,visao){
                codresp=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codresp,">",visao,visao,'Busca_Responsavel',false,newresponsavel);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codresp=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codresp,"<",visao,visao,'Busca_Responsavel',false,newresponsavel);                    
                exibe_campos();
            }  
            function imprime_registro(){
  
          if (confirm("Imprimir registro corrente?")){
                document.forms[1].action="../Reports/Relatorio_Responsavel.php";
                document.forms[1].submit();
             }
       }   
        function carrega_cargos(){
                 document.getElementById('cargoimg').style.visibility='visible';
                 codigo_cbo_principal=document.forms[1].elements['PROFISSAO'].value.substr(0,4) +'%';
                 numopt=document.forms[1].elements['CARGO'].options.length;
                 Isel=document.forms[1].elements['CARGO'];
                 Isel.length=0;
                 buscar_registros(window,"cbos","Carrega_CBO","CODIGO_CBO,TIPO",codigo_cbo_principal+',O',false,"like,=",CBOS_Cargo);
                 opt=new Option('',0);
                 Isel.add(opt);
                 
                 ccboocup=Array();
                 tprofocup=Array();
                 for(i=0;i < CBOS_Cargo.length();i++){
                    ccboocup[i]=CBOS_Cargo.get_Codigo_CBOs(i);
                    tprofocup[i]=CBOS_Cargo.get_Titulo_Profissao(i);
                    

                 }
                
                 for (y=1;y<=ccboocup.length;y++){
                             opt=new Option(ccboocup[y-1]+"|"+tprofocup[y-1],ccboocup[y-1]);
                             Isel.add(opt);

                        }
                 document.getElementById('ocupimg').style.visibility='hidden';       
            }   
            
            	function carrega_profissao(){
                 document.getElementById('profimg').style.visibility='visible';
                 numopt=document.forms[1].elements['PROFISSAO'].options.length;
                 Isel=document.forms[1].elements['PROFISSAO'];
                 Isel.length=0;
                 buscar_registros(window,"cbos","Carrega_CBO","TIPO","O",true,"=",CBOS_Profissao);				 
                 opt=new Option('',0);
                 Isel.add(opt);
                 for(i=0;i < CBOS_Profissao.length();i++){
                    opt=new Option(CBOS_Profissao.get_Codigo_CBOs(i)+"|"+CBOS_Profissao.get_Titulo_Profissao(i),CBOS_Profissao.get_Codigo_CBOs(i));
                    Isel.add(opt);
                 }
                 document.getElementById('profimg').style.visibility='hidden';       
			
			}
                        function carrega_funcoes(){
                 document.getElementById('funcimg').style.visibility='visible';
                 buscar_registros(window,"funcoes","Carrega_Funcao","","",true,Array("=","="),newfuncoes);
                 document.forms[1].elements['FUNCAO'].length=0;
				 document.forms[1].elements['FUNCAO'].add(new Option('',0));
                 for (y=1;y <=newfuncoes.length();y++){
                             opt=new Option(newfuncoes.get_Codigo_Funcao([y-1])+"|"+newfuncoes.get_Descricao_funcoes_x([y-1]).substr(0,100),newfuncoes.get_Codigo_Funcao([y-1]));
                             document.forms[1].elements['FUNCAO'].add(opt);
                        }
                 document.getElementById('funcimg').style.visibility='hidden';
                 
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
                            
                             opt=new Option('Selecione um item',0);
                             if (y==0){
                                opt.text="Selecione um �tem";
                                opt.value="";
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
			
         </script>
        <link href="estilosistema.css" rel="stylesheet" type="text/css" />
		<link href="estiloSistema.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="titulo">
<h1><center>Cadastro de Respons&aacute;veis T&eacute;cnicos</center></h1>
</div>
<br/>

  <form id="frm_barra_tarefas" action="" >
       <button type="button" onclick="">
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
     
      <button  type="button" onclick="registro_anterior(document.forms[1].elements['CODIGO_RESPONSAVEL'],'responsaveis')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/left.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Anterior</td>
           </tr>
      </table>
      </button>
      <button  type="button" onclick="proximo_registro(document.forms[1].elements['CODIGO_RESPONSAVEL'],'responsaveis')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/right.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Pr&oacute;ximo</td>
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
     <button  type="button" onclick="document.forms[1].reset();document.forms[1].elements['CODIGO_ATIVIDADE'].focus();">
     <table>
         <tr>
         <td height="42" width="50"><img src="../images/folha.gif" height="40" width="35" /></td>
         </tr>
         <tr>
         <td height="16">Limpar</td>
         </tr>
     </table>
  </button>  
</form>

<br/>
<div width="95%">
<form id="frm_responsaveis"  name="frm_responsaveis" method="POST">
        <table width="30%" border="0" cellpadding="0" cellspacing="1" >
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                Dados do Respons�vel</td>                

                
            </tr>
       </table>	
        <div id="divCadastro" style="display: block;background:whitesmoke;width:95%">
              <table bgcolor="whitesmoke" class="tabela" width="93%"  >
                <tr>
                  <td width="68">Codigo </td>
                  <td width="106"><input type="text" name="CODIGO_RESPONSAVEL" size="10" onblur="buscar_registro(window,this.name,this.value,'=','responsaveis','responsaveis','Busca_Responsavel',true,newresponsavel)"/><img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_RESPONSAVEL'],document.forms[1].elements['CODIGO_RESPONSAVEL'])" width="10px" height="10px"/></td>
                  <td colspan="2">Nome do Respons&aacute;vel </td>
                  <td colspan="2"><input type="text" name="NOME_RESPONSAVEL" size="50" /></td>
                  <td width="53">N&uacute;mero do CPF</td>
                  <td width="86"><input type="text" name="CPF" size="14" onblur="Formatar_CPF(this)" /></td>
                  <td width="66">N&uacute;mero do RG</td>
                  <td width="90"><input type="text" name="RG"  size="20"/></td>
                  <td colspan="2">&nbsp;</td>
                  <td width="53">N&uacute;mero do NIT</td>
                  <td colspan="2"><input type="text" name="NUMERO_NIT"  size="20"/></td>
                </tr>
                <tr>
                     
                  <td width="68">Data de Adimiss&atilde;o </td>
                  <td width="106"><input type="text" name="DATA_ADMISSAO" size="10" /></td>
                  <td width="139">&nbsp;</td>
                  <td colspan="3">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="3">&nbsp;</td>

                  <td width="250">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
				  <td colspan="2">&nbsp;</td>				  
                </tr>
                <tr>
                  <td>Fun&ccedil;&atilde;o</td>
                  <td colspan="3"><select name="FUNCAO" style="width:250px" onfocus="carrega_funcoes()">
                  </select></td>
                  <td><img id="profimg" src="../images/gears.gif" width="15px" height="15px"/></td>
                  <td >&nbsp;</td>
                </tr>
                <tr>
                  <td>Profiss&atilde;o</td>
                  <td colspan="3"><select name="PROFISSAO" style="width:250px;" onfocus="carrega_profissao()">
                    <option></option>
                  </select></td>
                  <td><img id="funcimg" src="../images/gears.gif" width="15px" height="15px"/></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Cargo Atual </td>
                  <td colspan="3"><select name="CARGO" style="width:250px" onfocus="carrega_cargos()">
                  </select></td>
                  <td><img id="cargoimg" src="../images/gears.gif" width="15px" height="15px"/></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Unidade de Trabalho </td>
                  <td colspan="3"><select name="UNIDADE" id="UNIDADE" style="width:250px" onfocus="carrega_unidades(this)">
                  </select></td>
                  <td width="59"><img id="unidimg" src="../images/gears.gif" width="15px" height="15px"/></td>
                  <td width="250">&nbsp;</td>
                </tr>
                <tr>
                  <td>Setor de Trabalho</td>
                  <td colspan="3"><select name="SETOR" style="width:250px">
                  </select></td>
                  <td><img id="setorimg" src="../images/gears.gif" width="15px" height="15px"/></td>
                  <td>&nbsp;</td>
                </tr>
    </table>
       
</form>
</div>
      <link href="statusbar.css" type="text/css" rel="stylesheet"/>
               
<form id='status' name="status">    
<div id="div_statusbar">
  <table width="109" height="393" left="0px" border="0">
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
      <td colspan="2">&Uacute;ltima Altera&ccedil;&atilde;o realizada por</td>
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
  </div>
</form>
<form>
                <div id="consultaexterna" style="postion:absolute;display:none">
      <input type="text" id="txt_pesquisa" name="txt_pesquisa" size="50"/>
            <button name="btn" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_RESPONSAVEL'],document.forms[3].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button>
      </div>     

    </form>

</body>
</html>
