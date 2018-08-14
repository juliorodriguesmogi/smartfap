<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sem t&iacute;tulo</title>
<link rel="stylesheet" type="text/css" href="estilosistema.css" />
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Estruturas.js"></script>
<script type="text/javascript" src="../classes/js/Setor_x.js"></script>
<script type="text/javascript" src="../classes/js/Setores.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="../classes/js/Abas.js"></script>
<link href="../css/designer.css" type="text/css" rel="stylesheet" />
<style type="text/css">
body{
	background:white;
	font-family:Geneva, Arial, Helvetica, sans-serif;
	font-size:90%;
	width:90%;
}

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
     <script type="text/javascript">  
 
         newsetor=new setor();
         empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>;
         
        function exibe_campos(){
                carrega_unidades();
				unidade=document.forms[1].elements['UNIDADE'].value;
		codigo_setor=document.forms[1].elements['CODIGO_SETOR'].value;
                document.forms[1].reset();
                //newsetor.setValores(newregistro.getValores());
                                
                if (acao=='I'){
                    
					document.forms[1].elements["UNIDADE"].value = unidade;
                    document.forms[1].elements["CODIGO_SETOR"].value = 0;
                }
                if (acao=='A'){
                        
                        document.forms[1].elements["CODIGO_SETOR"].value = new String(newsetor.get_Codigo_Setor());
                        document.forms[1].elements["UNIDADE"].value = new String(newsetor.get_Unidade());
                        document.forms[1].elements["NOME_SETOR"].value = new String(newsetor.get_Nome_Setor());
                        document.forms[1].elements["DESCRICAO"].value = new String(newsetor.get_Descricao());
                        document.forms[1].elements["SITUACAO"].value = new String(newsetor.get_Situacao());
                        document.getElementById("NIVEL_IMPRESSAO_LAUDO").checked =newsetor.get_Nivel_Impressao_Laudo()=='S'?true:false;
			document.forms[3].elements["txt_log_data_cadastro"].value = new String(newsetor.get_Data_Cadastro());                
                        document.forms[3].elements["txt_log_ultima_atualizacao"].value = new String(newsetor.get_Ultima_Atualizacao());                     
                        document.forms[3].elements["txt_log_ultimo_usuario"].value = new String(newsetor.get_Ultimo_Usuario());                
                        
                       
                }
            }
			function pesquisar_setor(campo){
			empresa_ativa=String(<?php echo $_SESSION['empresa_ativa']?>);
            campos=Array('CODIGO_EMPRESA','UNIDADE',campo.name);
			oldunit=document.forms[1].elements['UNIDADE'].value;
			valores=Array(empresa_ativa,document.forms[1].elements['UNIDADE'].value,campo.value);			
			buscar_registro(window,campos,valores,Array('=','=','='),'setores','setores','Busca_Setor',true,newsetor);
			}

           function captura_linha(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['UNIDADE'].value=valor_celula[0];
                document.forms[1].elements['CODIGO_SETOR'].value=valor_celula[1];
                document.forms[1].elements['NOME_SETOR'].value=valor_celula[2];
                document.forms[1].elements['CODIGO_SETOR'].focus();
      
                document.getElementById('consultaexterna').style.display='none';
            }

            div_pai=document.getElementById('consultaexterna');

            
            function monta_consulta_setor(campo_origem,campo_pesquisa){
                estilo='';
                if (campo_origem!=null){
                    posicao=Array();
                    posicao[0]=String(findPosY(campo_origem)+campo_origem.offsetHeight);
                    posicao[1]=String(findPosX(campo_origem)+campo_origem.offsetLeft);
                    posicao[2]="330";
                    posicao[3]=String(campo_origem.offsetWidth+800);
                    estilo='z-index:10;position:absolute;'+'top:'+posicao[0]+'px;'+'left:'+posicao[1]+'px;'+'height:'+posicao[2]+'px;'+'width:'+posicao[3]+'px;'+'border:solid 1px'+'background:white;';
                }    
                div_pai=document.getElementById('consultaexterna');
                div_pai.setAttribute('style',estilo);
                div_pai.style.border='solid 1px';
                div_pai.style.top=posicao[0];
                div_pai.style.left=posicao[1]+'px';
                div_pai.style.height=posicao[2]+'px';
                div_pai.style.width=posicao[3]+'px';
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
                colunas=Array('UNID.','COD.SETOR','NOME.SETOR');
                largura=Array('112px','300px','250px');
                for (xcab=0;xcab < 3;xcab++){
                     th=document.createElement('th');
                     th.setAttribute('width',largura[xcab]);
                     th.innerHTML=colunas[xcab];
                     tr.appendChild(th);  
                }  
                consultar_setor(tabela,campo_pesquisa,' like ')
            }    
                
                
            function consultar_setor(ntabela,campo_pesquisa,criterio){
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                ntabela.appendChild(tbody);
                empresa_ativa=empresa_ativa.toString();
                parm=Array(empresa_ativa,(campo_pesquisa.value+"%"));
                buscar_registros(window,'setores','Consulta_Setores',Array("CODIGO_EMPRESA","NOME_SETOR"),parm,false,Array("=","like "),newregistros);
               
                cont=0;
                valores=newregistros.getValores();
                valores=valores.toString().split("/|");
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
                    largura=Array('112px','300px','250px');
                    for (y=0;y<3;y++){
                        td=document.createElement('td');
                        td.setAttribute('style','width:'+largura[y]);
                        a=document.createElement('a');
                        a.setAttribute('href', "#");
                        a.innerHTML=vreg[y];
                        td.appendChild(a);
                        tr.appendChild(td);
                        tbody.appendChild(tr);
                    }
                    
                    
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
                        document.forms[1].elements['CODIGO_CNAE'].value=newsetor.get_CNAE();

            }
           

            
            var acao='';
            function grava_registro(){
             if (confirm("confirma o registro")){
                document.forms[1].action="../PHP/Setor_Class.php?acao=I";
                document.forms[1].submit();
             }
            }
            function apaga_registro(){
                if (confirm("Confirma a exclus�o do registro?")){
                    document.forms[1].action="../PHP/Setor_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
            function proximo_registro(campo,visao){
                codemp=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codemp,">",visao,newsetor);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codemp=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name, codemp,"<",visao,newsetor);
                exibe_campos();
            }  
            
	   function carrega_unidades(){
                 empativa=<?php echo $_SESSION['empresa_ativa']?>+"";
                 buscar_registros(window,'estrutura_organizacional',"Carrega_Estrutura",'CODIGO_EMPRESA',empativa,false,'=',newEstruturas);
                 codigo_estrutura=document.forms[1].elements['UNIDADE'].value;
                 // Inicializa select option 
                 document.forms[1].elements['UNIDADE'].length=0;
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
                             
                             document.forms[1].elements['UNIDADE'].add(opt);
                        }
                        if (document.forms[1].elements['UNIDADE'].length==1){
                            document.forms[1].elements['UNIDADE'].length=0;
                            opt=new Option('Nenhuma Unidade a Selecionar',0);
                            document.forms[1].elements['UNIDADE'].add(opt);
                            alert('Empresa n�o possui estrutura organizacional cadastrada!');
                            return;
                            
                        }
                        document.forms[1].elements['UNIDADE'].value=codigo_estrutura;
                        

            }
            function carrega_setores_pai(campo){
                 //document.getElementById('setorimg').style.visibility='visible';
                 chave=Array('UNIDADE','CODIGO_SETOR');
                 Unidade=document.forms[1].elements['UNIDADE'].value;
                 Setor_Atual=document.forms[1].elements['CODIGO_SETOR'].value;
                 valor=Array(Unidade,Setor_Atual);
                 buscar_registros(window,"setores","Carrega_Setores",chave,valor,true,Array("=","<>"),newSetores);
                 campo.length=0;
		 campo.add(new Option('',0));
                 for (y=1;y <=newSetores.length();y++){
                             opt=new Option(newSetores.get_Codigo_Setor([y-1])+"-"+newSetores.get_Nome_Setor([y-1]).substr(0,100),newSetores.get_Codigo_Setor([y-1]));
                             campo.add(opt);
                        }
                 
                 
            }    			            

            defineAba( "celAbaCadastro"  , "divCadastro"   );
            defineAba( "celAbaHistExp" , "divHistoricoExposicao" );
            defineAbaAtiva( "celAbaCadastro" );

 function imprime_registro(){
             if (confirm("Imprimir registro corrente?")){
                document.forms[1].action="../Reports/Relatorio_setor.php";
                document.forms[1].submit();
             }
            }  
         </script>

</head>

<body onload="carrega_unidades()">
<center><h1>Cadastro de Setores Objetos da Per�cia</h1></center>

</BR>
<div>
    <form id="frm_barra_tarefas" action="" >
       <button type="button" onclick="">
           <table style="height:30px;">
              <tr>
                <td height="32" width="48"><div align="center"><img src="../images/novo.png" height="30" width="28" /></div></td>
              </tr>
              <tr>
                <td height="16">Novo</td>
              </tr>
           </table>
       </button>
   
      <button type="button" onclick="grava_registro();">
          <table>
            <tr>
              <td height="33" width="48"><div align="center"><img src="../images/barra_ferramentas/floppy.png" height="31" width="30" /></div></td>
            </tr>
            <tr>
              <td height="16">Gravar</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="apaga_registro();">
          <table>
            <tr>
              <td height="33" width="48"><div align="center"><img src="../images/barra_ferramentas/error_button_2.png" height="29" width="31" /></div></td>
            </tr>
            <tr>
              <td height="16">Apagar</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="descer();">
          <table>
            <tr>
              <td height="34" width="48"><div align="center"><img src="../images/update_quantity_cart[1].png" height="28" width="38" /></div></td>
            </tr>
            <tr>
              <td height="16">Desfazer</td>
            </tr>
          </table>
      </button>
       <button  type="button" onclick="subir();">
          <table>
            <tr>
              <td height="34" width="48"><div align="center"><img src="../images/cima.gif" height="26" width="29" /></div></td>
            </tr>
            <tr>
              <td height="16">Primeiro</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="navega_registro('Anterior');">
          <table>
            <tr>
              <td height="35" width="48"><div align="center"><img src="../images/left.png" height="28" width="35" /></div></td>
            </tr>
            <tr>
              <td height="16">Anterior</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="navega_registro('Proximo')">
          <table>
            <tr>
              <td height="35" width="48"><div align="center"><img src="../images/right.png" height="28" width="36" /></div></td>
            </tr>
            <tr>
              <td height="16">Pr&oacute;ximo</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="descer();">
          <table>
            <tr>
              <td height="35" width="48"><div align="center"><img src="../images/baixo.gif" height="32" width="32" /></div></td>
            </tr>
            <tr>
              <td height="16">Ultimo</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="imprime_registro();">
          <table>
            <tr>
              <td height="34" width="48"><div align="center"><img src="../images/printer_2.png" height="32" width="36" /></div></td>
            </tr>
            <tr>
              <td height="18">Imprimir</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="document.forms[1].reset();document.forms[1].elements['CODIGO_CNAE'].focus();">
          <table>
            <tr>
              <td height="35" width="48"><div align="center"><img src="../images/folha.gif" height="33" width="28" /></div></td>
            </tr>
            <tr>
              <td height="16">Limpar</td>
            </tr>
          </table>
      </button>  

    </form>

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
</div>

	<div style="width:95%;overflow:auto">
      <form id="frm_setores" method="POST">
        <table width="35%" border="0" cellpadding="0" cellspacing="1" >
          <tr>
            <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onclick="trataCliqueAba( this.id );" onmouseover="trataMouseAba( this );"> Dados do Setor</td>
            <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaHistExp" onclick="trataCliqueAba( this.id );" onmouseover="trataMouseAba( this );"> Hist�rico de Exposi��es</td>
            <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaHistAtiv" onclick="trataCliqueAba( this.id );" onmouseover="trataMouseAba( this );"> Hist�rico de Atividades</td>
          </tr>
        </table>
        <div id="divCadastro" style="display: block;overflow:auto;height:60%;min-height:60%;width:95%" >
          <table width="100%" border="0" class="tabela">
            <tr>
              <td>Unidade de Trabalho </td>
              <td><select name="UNIDADE" id="UNIDADE" style="width:300px" onfocus="carrega_unidades()" >
              </select></td>
              <td>Codigo do Setor</td>
              <td  ><input name="CODIGO_SETOR" type="text" size="10" onkeypress="return entrada_numerica_inteira(this,event)"   onblur="pesquisar_setor(this)" />
                  <img src="../images/search.png" onclick="monta_consulta_setor(document.forms[1].elements['DESCRICAO'],document.forms[2].elements['txt_pesquisa'])" width="10px" height="10px"/></td>
              <td   >C&oacute;digo do Setor Mestre </td>
              <td colspan="6"><select name="CODIGO_SETOR_PAI" id="CODIGO_SETOR_PAI" style="width:300px" onfocus="carrega_setores_pai(this)" >
              </select></td>
            </tr>
            <tr>
              <td >Nome do Setor</td>
              <td  ><input name="NOME_SETOR" type="text" size="50" /></td>
              <td  >Descri&ccedil;&atilde;o do Setor</td>
              <td colspan="4"><textarea name="DESCRICAO" style="width:400px;max-width:400px;height:100px"> </textarea></td>
              <td  >N&iacute;vel para impress&atilde;o de Laudos? </td>
              <td  ><input type="hidden" name="NIVEL_IMPRESSAO_LAUDO"  value="N"/>
                  <input type="checkbox" name="NIVEL_IMPRESSAO_LAUDO" id="NIVEL_IMPRESSAO_LAUDO" value="S"  /></td>
              <td  >Situa&ccedil;&atilde;o</td>
              <td  ><select name="SITUACAO" id="select" style="width:150px"  >
                  <option value=" " selected="selected"> </option>
                  <option value="A">ATIVO</option>
                  <option value="I">INATIVO</option>
              </select></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
              <td width="15%">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </div>
          <div id="divHistoricoExposicao" style="display:none">
            <table width="100%" border="0" class="tabela">
            <thead>
                <tr>
                <th>Ano Per�cia</th>
                <th>N�mero Laudo</th>
                <th>Riscos</th>
                <th>Periodicidade</th>
                <th>Nro Funcion�rios</th>
                <th>Nro Funcion�rios Expostos</th>
                
            </tr>
            </thead>
            <tbody>    
                <tr><td colspan="6">
                        <div syle="width:100%;overflow:auto">
                            <table id="tabela_det_hist_exp" class="tabela" width="100%">
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr> 
            </tbody>
            <tfoot>    
                <tr>
                    <td>
                        
                    </td>
                </tr>
            </tfoot>    
            </table>               
          </div>
      </form>
</div>
	<div width="95%" style="display:none">
<table width="86%" height="43" border="0" class="tabela">
<caption><center>Caracter�sticas do Setor</center></caption>
<tbody>
<tr>
<td width="34%">�tens das caracter�sticas do Setor
<td>&nbsp;</td>
<td width="33%">
<select name="CARACTERISTICA_SETOR" style="width:250px">
  <option value="0" selected></option>
  <option value="1">P&eacute; Direito</option>
  <option value="2">Piso</option>
  <option value="3">Paredes</option>
  <option value="4">Cobertura</option>
  <option value="5">Iluminia&ccedil;&atilde;o e Ventila&ccedil;&atilde;o Natural</option>
  <option value="6">Ilumina&ccedil;&atilde;o Artificial</option>
  <option value="7">Arranjo F&iacute;sico</option>
</select></td>
<td width="16%">&nbsp;</td>
<td width="17%"><button type="button" value="Inserir" onclick="inserir_linha_detalhe();">Inserir</button></td>
</tr>
</tbody>
</table>
</div>
		   <form>
                <div id="consultaexterna" style="postion:absolute;display:none">
      <input type="text" id="txt_pesquisa" name="txt_pesquisa" size="50"/>
            <button name="btn" onclick="monta_consulta_atividade(document.forms[1].elements['DESCRICAO'],document.forms[2].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button><label onclick="document.getElementById('consultaexterna').style.display='none'"><strong>   X</strong></label>
      </div>     

    </form>

</body>
</html>
