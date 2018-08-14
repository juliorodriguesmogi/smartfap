<?php
session_start();
if (!isset($_SESSION['CODIGO_ERRO'])){
    $_SESSION['CODIGO_ERRO']="0";
}
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
<script type="text/javascript" src="../classes/js/epis.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="../classes/js/Fabricantes.js"></script>
<script type="text/javascript" src="../classes/js/Epis_Base.js"></script>
<script type="text/javascript" src="../classes/js/Abas.js"></script>
<script type="text/javascript" src="../js/script.js" ></script>
<link href="../css/designer.css" type="text/css" rel="stylesheet" />
<link href="estilosistema.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript">  
        codigo_erro=<?php echo '"'.$_SESSION['CODIGO_ERRO'].'"';?>;
        contadx=0;
        contadx=0;
        empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();         
        function verifica_erro(){
            if (codigo_erro!="0"){
                dv=document.createElement('div');
                form=document.getElementById('frm_epis');
                dv.setAttribute('id','div_mens');
                dv.setAttribute('style','margin:0;width:110px;height:90px;z-index:1');
                dv.style.background='../images/mensagens/'+codigo_erro+'.png)';
                form.appendChild(dv);
                fecha_erro_timer();
            }
        }
        function fecha_erro(){
            contadx-=0.1;
            if (contadx>=0){
                valor='MozOpacity:'+x+';'+'opacity:'+x+';filter:alpha(opacity='+(x*100)+')';
                document.getElementById('div_mens').setAttribute('style',valor+";display:none");
            }	
            else {
               clearInterval('esm()');
               form.removeChild(dv);
               <?php $_SESSION['CODIGO_ERRO']=null?>;
            }
            
            document.getElementById('div_mens').setAttribute('style',valor+";display:block");
                
        }
        function fecha_erro_timer(){
            setInterval('fecha_erro()',80);

        }
        
        newepis=new epis();
         
        function procura_registro(campo) {
            buscar_registro(window,campo.name, campo.value,Array("=","="),'epis','epis','Busca_Epi',true,newepis);
        }
         
        function exibe_campos(){
                codigo_epis=document.forms[1].elements['CODIGO_EPIS'].value;
                document.forms[1].reset();                        
                if (acao=='I'){
                    document.forms[1].elements["CODIGO_EPIS"].value = codigo_epis;
                }
                if (acao=='A'){  
                    carrega_epis_base();
                        document.forms[1].elements["CODIGO_EPIS"].value = new String(newepis.get_Codigo_Epis());
                        document.forms[1].elements["DESCRICAO"].value = new String(newepis.get_Descricao());
                        document.forms[1].elements["TIPO_DE_PROTECAO"].value = new String(newepis.get_Tipo_De_Protecao());
			document.forms[1].elements["CODIGO_CA"].value = new String(newepis.get_Codigo_CA());
                        document.forms[1].elements["VALIDADE_CA"].value = new String(newepis.get_Validade_ca());
                        carrega_fabricante();
                        document.forms[1].elements["FABRICANTE"].value = new String(newepis.get_Fabricante());
                        document.forms[1].elements["VIDA_UTIL"].value = new String(newepis.get_Vida_Util());    
                        document.forms[1].elements["VIDA_UTIL2"].value = new String(newepis.get_Vida_Util2());    
                        document.forms[1].elements["TAMANHO"].value = new String(newepis.get_Tamanho());    
                        document.forms[1].elements["NIVEL_PROTECAO"].value = new String(newepis.get_Nivel_Protecao());    
                        document.forms[1].elements["NATUREZA"][0].checked=document.forms[1].elements["NATUREZA"][0].value==newepis.get_Natureza()?true:false;
                        document.forms[1].elements["NATUREZA"][1].checked=document.forms[1].elements["NATUREZA"][1].value==newepis.get_Natureza()?true:false;
                        carrega_epis_base();
                        document.forms[1].elements["CODIGO_EPI_BASE"].value = newepis.get_Codigo_Epi_Base();    
                        document.forms[3].elements["txt_log_data_cadastro"].value = new String(newepis.get_Data_Cadastro());                
                        document.forms[3].elements["txt_log_ultima_atualizacao"].value = new String(newepis.get_Ultima_Atualizacao());                        document.forms[3].elements["txt_log_ultimo_usuario"].value = new String(newepi.get_Ultimo_Usuario());                
                        
                       
                }
            }

            function carrega_fabricante(){
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
             if (confirm("Confirma o registro")){
                document.forms[1].action="../PHP/Epis_Class.php?acao="+"I";
                document.forms[1].submit();
             }
            }
            function apaga_registro(){
                if (confirm("Confirma a exclusÃ£o do registro?")){
                    document.forms[1].action="../PHP/Epis_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
            function proximo_registro(campo,visao){
                codepi=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codepi,Array(">","="),visao,visao,'Busca_Epi',false,newepis);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codepi=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codepi,Array("<","="),visao,visao,'Busca_Epi',false,newepis);                    
                exibe_campos();
            } 
            
            function carrega_epis_base(){
                 codigo_epi_base=document.forms[1].elements['CODIGO_EPI_BASE'].value;
                  buscar_registros(window,"epis_base","Carrega_EPIS_Base",null,null,false,null,newepisbase);
                 document.forms[1].elements['CODIGO_EPI_BASE'].length=0;
                 document.forms[1].elements['CODIGO_EPI_BASE'].add(new Option('Selecione um EPI Base','0'));
                 for(i=1;i <= newepisbase.length();i++){
                        document.forms[1].elements['CODIGO_EPI_BASE'].add(new Option(newepisbase.get_Descricao_EPI_Base(i-1),newepisbase.get_Codigo_EPI_Base(i-1)));
                 }       
            }           
              function imprime_registro(){
  
          if (confirm("Imprimir registro corrente?")){
                document.forms[1].action="../Reports/Relatorio_Epi.php";
                document.forms[1].submit();
             }
       }  
 function captura_linha(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['CODIGO_EPIS'].value=valor_celula[0];
                document.forms[1].elements['DESCRICAO'].value=valor_celula[1];
                document.forms[1].elements['TIPO_DE_PROTECAO'].value=valor_celula[2];
                document.forms[1].elements['CODIGO_EPIS'].focus();
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
                colunas=Array('COD.EPIS.','DESCRIÇÃO','TIPO_DE_PROTEÇÃO');
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
                buscar_registros(window,'epis','Consulta_Epi',Array("CODIGO_EMPRESA","DESCRICAO","TIPO_DE_PROTECAO"),parm,false,Array("=","like "),newregistros);
                
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
        </script>

</head>

<body onload="verifica_erro();">
<center><h1>Cadastro de EPIs</h1></center>
<div id="menu">
  <form id="frm_barra_tarefas" action="" >
       <button type="button"  onclick="window.location.reload(true);document.forms[1].elements['CODIGO_EPIS'].focus();">
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
     
      <button  type="button" onclick="registro_anterior(document.forms[1].elements['CODIGO_EPIS'],'epis_codigo_desc')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/left.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Anterior</td>
           </tr>
      </table>
      </button>
      <button  type="button" onclick="proximo_registro(document.forms[1].elements['CODIGO_EPIS'],'epis_codigo_asc')">
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
     <button  type="button" onclick="window.location.reload(true);document.forms[1].elements['CODIGO_EPI'].focus();">
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
</div>

    
</div>
      
        <table width="30%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td id="celAbaCadastro" width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                Dados Cadastrais</td>                
                <td id="celAbaEstoques" align="center" valign="middle" width="10%" class="abainativa" onMouseOver="trataMouseAba( this );" onClick="trataCliqueAba( this.id );">
                    Estoques                
                </td>
                
            </tr>
       </table>	  
      <div id="principal" style="width:90%;height:60%">
       <form id="frm_epis" method="POST">

      <div id="divCadastro" style="display: block;overflow:auto;height:60%;min-height:60%;" >
                     <table width="100%" border="0" class="tabela">
          <tr>
            <td width="63">C&oacute;digo EPI </td>
            <td width="60"><p>
                <input type="text" name="CODIGO_EPIS" maxlength="10" size="10" onblur="procura_registro(this);" class="input" onkeypress="return entrada_numerica_inteira(this,event)"/><img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_EPIS'],document.forms[1].elements['CODIGO_EPIS'])" width="10px" height="10px"/>
            </p></td>
            <td width="75">Descri&ccedil;&atilde;o </td>
            <td colspan="3"><textarea name="DESCRICAO" style="width:200px;font-size:11px" value="<?php echo $_SESSION['CODIGO_EPIS'] ?> "></textarea></td>
            <td>Categoria de Proteção </td>
            <td colspan="2"><select name="TIPO_DE_PROTECAO" class="input">
              <option selected="selected"></option>
              <option value="AUDITIVA">Auditiva</option>
              <option value="CABEÇA">Cabeça</option>
              <option value="CONTRA-QUEDAS">Contra-Quedas</option>
              <option value="FACIAL-OCULAR">Facial Ocular</option>
              <option value="MÃOS E BRAÇOS">Mãos e Braços</option>
              <option value="PÉS E PERNAS">Pés e Pernas</option>
              <option value="RESPIRATÓRIA">Respiratória</option>
              <option value="TRONCO">Tronco</option>
              <option value="VEST.SEGURANÇA">Vest.Segurança</option>
              <option value="VEST.SEGURANÇA NR10">Vest.Segurança NR10</option>
            </select></td>
            <td>N&iacute;vel de Prote&ccedil;&atilde;o </td>
            <td width="43"><select name="NIVEL_PROTECAO">
              <option selected="selected"> </option>
              <option value="B">BAIXO</option>
              <option value="M">M&Eacute;DIO</option>
              <option value="A">ALTO</option>
                                    </select></td>
            <td width="4">&nbsp;</td>
          </tr>
          <tr>
            <td>C&oacute;digo C.A. </td>
            <td><input type="text" name="CODIGO_CA" maxlength="10" size="10" class="input"/></td>
            <td>Validade C.A. </td>
            <td width="60"><input type="text" name="VALIDADE_CA" maxlength="10" class="input" size="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
            
            <td width="68">Fabricante</td>
            <td colspan="5"><select name="FABRICANTE" style="width:250px"  class="input" onfocus="carrega_fabricante()" >
            </select></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
          <td colspan="4"><div align="center">Natureza</div></td>
          <td rowspan="2">Tamanho</td>
          <td width="87" rowspan="2"><select name="TAMANHO" >
            <option value=" " selected="selected"> </option>
            <option value="PEQUENO" >Pequeno</option>
            <option value="M&Eacute;DIO">M&eacute;dio</option>
            <option value="GRANDE">Grande</option>
          </select></td>
          <td width="80" rowspan="2" align="right">Vida &Uacute;til
          <td width="63" rowspan="2"><input type="text" name="VIDA_UTIL" maxlength="10" size="10" class="input"/>
          <td width="116" rowspan="2"><select name="VIDA_UTIL2" >
            <option selected="selected"></option>
            <option>HORA(S)</option>
            <option>DIA(S)</option>
            <option>SEMANA(S)</option>
            <option>MES(ES)</option>
            <option>ANO(S)</option>
            <option>PERMANENTE</option>
          </select>          
          <td width="61" rowspan="2">          </tr>
          <tr>
            <td height="28">Nacional</td>
            <td><input type="radio" id="natureza" name="NATUREZA" value="N" /></td>
            <td>Importado</td>
            <td><input type="radio" id="natureza" name="NATUREZA" value="I" /></td>
          </tr>
          <tr>
              <td>Código EPI Base</td>
              <td colspan="7"><select name="CODIGO_EPI_BASE" onfocus="carrega_epis_base();" style="width:450px">
              </select>			  </td>
			  </tr>    
        </table>


        </div>
    </form>           
        <div id="divEstoques" style="display:block;overflow:auto;height:60%;min-height:60%;" >
            <table border="0" width="100%">
          <tr>
<td>Unidade</td>
            <td><input type="text" name="UNIDADE" maxlength="10" readonly="readonly" size="10" style="text-align:right" class="input" onkeypress="return entrada_numerica_inteira(this,event)"  value="<?php echo $_SESSION['unidade']?>"  /></td>
            <td colspan="5"><input type="text"  maxlength="50" readonly="readonly" size="50" value="<?php echo $_SESSION['nome_unidade']?>" /></td>
            <td width="46">&nbsp;</td>
            <td width="46">&nbsp;</td>
            <td width="46">&nbsp;</td>
          </tr>
          <tr>
            <td width="131">Estoque mínimo</td>
            <td width="87"><p>
                <input type="text" maxlength="10" size="10" class="input_numerico"/>
            </p></td>
            <td width="132">Estoque máximo</td>
            <td width="60"><p>
                <input type="text"  maxlength="10" size="10" class="input_numerico"/>
            </p></td>
            <td width="117">Estoque atual</td>
            <td width="87"><p>
                <input type="text" maxlength="10" disabled="disabled" size="10" class="input_numerico"/>
            </p></td>
          </tr>
          <tr>
            <td>Data &Uacute;ltima Compra </td>
            <td><input name="text" type="text" disabled="disabled" class="input_numerico" size="10" maxlength="10"/></td>
            <td>Qtde &Uacute;ltima Compra </td>
            <td><input name="text2" type="text" disabled="disabled" class="input_numerico" size="10" maxlength="10"/></td>
          </tr>
          <tr>      
            <td width="131">Estoque médio</td>
            <td width="87"><p>
                <input type="text" name="" disabled="disabled" maxlength="10" size="10" class="input_numerico"/>
            </p></td>
            <td width="132">Previsão para compra</td>
            <td width="60"><p>
                <input type="text" name="" disabled="disabled" maxlength="10" size="10" class="input_numerico"/>
            </p></td>
              </tr>
            </table>
        </br>

        <div style="width:100%" >
        <caption><center><h2>Histórico de Movimentação do EPI</h2></center></caption>            
        <table border="solid 1px" width="100%">
            <tr>
                <td width="2%">Data</td>
                <td width="5%">Estoque Anterior</td>
                <td width="5%">Tipo Mov</td>
                <td width="5%">Qtde </td>
                <td width="5%">Estoque Posterior</td>
            </tr>
        </table>
        </div>
         <div style="width:100%" >
        <table border="solid 1px" width="100%">
            <tr>
                <td width="2%"></td>
                <td width="5%"></td>
                <td width="5%"></td>
                <td width="5%"></td>
                <td width="5%"></td>
            </tr>
            <tr>
                <td width="2%"></td>
                <td width="5%"></td>
                <td width="5%"></td>
                <td width="5%"></td>
                <td width="5%"></td>
            </tr>
            
        </table>

        </div>
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
                        MODELOS DE IMPRESSÃO
                    </td>
                </tr>
            </table>
		</div>

      </div>
              <script>
            defineAba( "celAbaCadastro"  , "divCadastro"   );
            defineAba( "celAbaEstoques" , "divEstoques" );
            defineAba( "celAbaConsultas" , "divConsulta" );
            defineAba( "celAbaModelos"   , "divModelo"  );
            defineAbaAtiva( "celAbaCadastro" );
        </script>
  <form>
                <div id="consultaexterna" style="postion:absolute;display:none">
      <input type="text" id="txt_pesquisa" name="txt_pesquisa" size="50"/>
            <button name="btn" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_EPIS'],document.forms[2].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button><label onclick="document.getElementById('consultaexterna').style.display='none'"><strong>   X</strong></label>
      </div>     

    </form>
<form>
    <div id="div_statusbar">
      <table width="109" height="393" border="0">
        <tr>
          <td colspan="2" style="border:solid 1px">Informa&ccedil;&otilde;es do Registro</td>
        </tr>
        <tr>
          <td colspan="2">Data de Cadastro</td>
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
          <td colspan="2">&Uacute;ltimo c&oacute;digo gerado</td>
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
</body>
</html>
