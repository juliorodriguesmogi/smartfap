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
<script type="text/javascript" src="../classes/js/Exames.js"></script>
<script type="text/javascript" src="../classes/js/Movimentacao_Exames.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
</head>

<body onload="inicializa_variaveis();">
    <script type="text/javascript">  
 
        newexames=new Exames();
        newmaquina=new maquina();
         newmovimento_d=new Movimento_d();
         newmovimento_d.inicializa();
         newmovimento_m=new Movimento_m();
         newmovimento_m.inicializa();
        function inicializa_variaveis(){
            empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
            empresa_ativa=empresa_ativa.toString();  
            campo_atual,campovalor;
        }

        

        function captura_linha_medico(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['CODIGO_MEDICO'].value=valor_celula[0];
                document.forms[1].elements['NOME_PROFISSIONAL'].value=valor_celula[1];
                document.forms[1].elements['AREA_ATUACAO'].value=valor_celula[2];
                document.forms[1].elements['CODIGO_MEDICO'].focus();
                document.getElementById('consultaexterna').style.display='none';
            }



            
            function monta_consulta_medico(campo_origem,campo_pesquisa){
                estilo='';
                if (campo_origem!=null){
                    var posicao=Array();
                    posicao[0]=findPosY(campo_origem)+campo_origem.offsetHeight;
                    posicao[1]=findPosX(campo_origem)+campo_origem.offsetLeft;
                    posicao[2]="150";
                    posicao[3]=campo_origem.offsetWidth;
                    estilo='z-index:10;position:absolute;'+'top:'+posicao[0]+'px;'+'left:'+posicao[1]+'px;'+'height:'+posicao[2]+'px;'+'width:'+posicao[3]+'px;'+'border:solid 1px'+'background:white;';
                }    
                var div_pai=document.getElementById('consultaexterna');
                div_pai.setAttribute('style',estilo);
                div_pai.style.border='solid 1px';
                div_pai.style.top=posicao[0];
                div_pai.style.left=posicao[1]+'px';
                div_pai.style.height='340px';
                div_pai.style.width='425px';
                div_pai.style.background='white';
                var div=document.createElement('div');
                div.setAttribute('className', 'tableContainer');
                div.setAttribute('id', 'tableContainer');
                div_pai.appendChild(div);                
                var tabela=document.createElement('table');
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
                var thead=document.createElement('thead');
                thead.setAttribute('class', 'fixedHeader');
                tabela.appendChild(thead);
                var tr=document.createElement('tr');
                thead.appendChild(tr);
                var colunas=Array('COD.MEDIC.','NOME MEDIC.','AREA DE ATUA��O');
                for (xcab=0;xcab < 3;xcab++){
                     var th=document.createElement('th');
                     th.innerHTML=colunas[xcab];
                     tr.appendChild(th);  
                }  
                consultar_medico(tabela,campo_pesquisa,' like ')
            }    
                
                
            function consultar_medico(ntabela,campo_pesquisa,criterio){
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                ntabela.appendChild(tbody);
                
               parm=Array((campo_pesquisa.value+"%"));
                newregistros = new Registros();
                buscar_registros(window,'medicos','Consulta_Medicos',Array("NOME_PROFISSIONAL"),parm,false,Array("like "),newregistros);
                
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
                    tr.setAttribute('onclick', 'captura_linha_medico(this)');
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
                codigo_movimentacao=document.forms[1].elements['CODIGO_MOVIMENTACAO'].value;
                document.forms[1].reset();
                //newmaquina.setValores(newregistro.getValores());
                                
                if (acao=='I'){
                    document.forms[1].elements["CODIGO_MOVIMENTACAO"].value = codigo_movimentacao;
                }
                if (acao=='A'){
                        carrega_campo();
                        document.forms[1].elements["CODIGO_MOVIMENTACAO"].value = new String(newmaquina.get_Codigo_Movimentacao());
                        document.forms[1].elements["CODIGO_FUNCIONARIO"].value = new String(newmaquina.get_Codigo_Funcionario());
                        document.forms[1].elements["NOME_FUNCIONARIO"].value = new String(newmaquina.get_Nome_Funcionario());
			document.forms[1].elements["MATRICULA_FUNCIONARIO"].value = new String(newmaquina.get_Matricula_Funcionario());
                       document.forms[1].elements["CODIGO_MEDICO"].value = new String(newmaquina.get_Codigo_Medico());
                        
                        document.forms[1].elements["NOME_PROFISSIONAL"].value = new String(newmaquina.get_Nome_Profissional());
                        document.forms[1].elements["AREA_ATUACAO"].value = new String(newmaquina.get_Area_Atuacao());    
                        document.forms[2].elements["EXAMES"].value = new String(newmaquina.get_Exames());    
                        document.forms[3].elements["txt_log_data_cadastro"].value = new String(newmaquina.get_Data_Cadastro());                
                        document.forms[3].elements["txt_log_ultima_atualizacao"].value = new String(newmaquina.get_Ultima_Atualizacao());                     
                        document.forms[3].elements["txt_log_ultimo_usuario"].value = new String(newmaquina.get_Ultimo_Usuario());                
                        
                       
                }
            }
            function carrega_campo(){
                 codigo_movimentacao=document.forms[2].elements['EXAMES'].value;
                  buscar_registros(window,"exame","Carrega_Exames",null,null,true,null,newexames);
                 document.forms[2].elements['EXAMES'].length=0;
                 document.forms[2].elements['EXAMES'].add(new Option('Selecione um exame','0'));
                 for(i=1;i <= newexames.length();i++){
                        document.forms[2].elements['EXAMES'].add(new Option(newexames.get_Nome(i-1),i-1));
                 }       
            }
           

            
            var acao='';
            function grava_registro(){
             if (confirm("Confirma o registro?")){
                document.forms[1].action="../PHP/Movimentacao_Exames_Class.php?acao=I";
                document.forms[1].submit();
             }
            }
             function grava_registro(){
             if (confirm("Confirma o registro")){
                if (recuperaAbaAtiva()=='celAbaEntrega'){
                    document.forms[1].action="../PHP/Movimentacao_Exames_Class.php?acao="+"I"+"&newmovimento_d="+newmovimento_d.retorna_todas_linhas();
                    document.forms[1].submit();
                }
                if (recuperaAbaAtiva()=='celAbaDevolucao'){
                    document.forms[2].action="../PHP/Movimentacao_Exames_Class.php?acao="+"I"+"&newmovimento_d="+newmovimento_d.retorna_todas_linhas();
                    document.forms[2].submit();
                }
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
                    document.forms[1].action="../PHP/Movimentacao_Exames_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
             function proximo_registro(campo,visao){
                codexa=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codexa,">",visao,visao,'Busca_Exame',false,newexame);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codexa=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codexa,"<",visao,visao,'Busca_Exame',false,newexame);                    
                exibe_campos();
            } 
    function imprime_registro(){
  
          if (confirm("Imprimir registro corrente?")){
                document.forms[1].action="../Reports/Relatorio_Maquina.php";
                document.forms[1].submit();
             }
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
	    
              function insere(node){
                divpai=node.parentNode.parentNode;
		divpai.appendChild(document.getElementById(node.parentNode.id).cloneNode(true));
            }	
             function remove(node){
                divremover=node.parentNode;
                divpai=node.parentNode.parentNode;
		divpai.removeChild(divremover);
            }	
        </script>
<center><h1>Monitora��o Biologica</h1></center>
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

  
      

    </form>
    </div>
    <link href="estilosistema.css" rel="stylesheet" type="text/css" />


       <script>        
        var aAbas       = new Array();  // Lista de abas do documento atual
        var sAbaAtiva   = ""                 // Define qual � a aba ativa no momento
        var ABA_ID      = 1
        var ABA_BLOCO   = 2
        var ABA_CAMPOS  = 3
        
        function defineAba( sId, sBloco ){
           var aAba  = new Array( ABA_CAMPOS );
           aAba[ ABA_ID    ]  = sId;
           aAba[ ABA_BLOCO ]  = sBloco;
           aAbas.push( aAba );
        }

        function defineAbaAtiva( sId ){
           trataCliqueAba( sId );
        }

        function trataMouseAba( oAba ){
           oAba.style.cursor  = "pointer";
        }

        function trataCliqueAba( sId ){
           for ( var iAba  = 0; iAba < aAbas.length; iAba++ ){
              var aAba  = aAbas[ iAba ];

              if   ( aAba[ ABA_ID ] == sId ) ativaAba( aAba );

              else                           inativaAba( aAba );
           }
        }

        function ativaAba( aAba ){
           var sAba       = aAba[ ABA_ID ];
           var oAba       = document.getElementById( sAba );
           mudaClasse( oAba, "abaativa" ); // Esse comando chama a classe css para fazer a troca

           var sBlocoAba  = aAba[ ABA_BLOCO ];
           var oBlocoAba  = document.getElementById( sBlocoAba );
           oBlocoAba.style.display  = "block";
        }

        function inativaAba( aAba ){
           var sAba       = aAba[ ABA_ID ];
           var oAba       = document.getElementById( sAba );
           mudaClasse( oAba, "abainativa" ); // Esse comando chama a classe css para fazer a troca

           var sBlocoAba  = aAba[ ABA_BLOCO ];
           var oBlocoAba  = document.getElementById( sBlocoAba );
           oBlocoAba.style.display  = "none";
        }
        
        function mudaClasse( oObjeto, sClasse ){
           oObjeto.className  = sClasse;
        }
        </script> <br>
        <br>
    
    <form id="frm_maquina" action="" method="POST">
        <table width="17%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                   Monitora��o Biologica </td>
                
            </tr>
</table>
       
        <div id="divCadastro" style="display: block">
           <table width="100%" border="0" class="tabela">
          <tr>
            <td width="90">C&oacute;digo  </td>
            <td width="100"><p>
                <input type="text" name="CODIGO_MONITORACAO" class="input" maxlength="10" size="10" onblur="buscar_registro(window,this.name,this.value,'=','maquinas','maquinas','Busca_Maquina',true,newmaquina)" /><img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_MAQUINA'],document.forms[1].elements['CODIGO_MAQUINA'])" width="10px" height="10px"/>
            </p></td>
            
          
            
            <td>Codigo Medico </td>
            <td width="105"><input type="text" class="input"name="CODIGO_MEDICO" maxlength="5" size="10"/><img src="../images/search.png" onclick="monta_consulta_medico(document.forms[1].elements['CODIGO_MEDICO'],document.forms[1].elements['CODIGO_MEDICO'])" width="10px" height="10px"/></td>
          
            <td width="53"><div align="right">Nome do Medico </div></td>
            <td width="88"><input type="text" DISABLED="DISABLED"  name="NOME_PROFISSIONAL" maxlength="10" size="50"/></td>
          <td width="53"><div align="right">Area de Atua��o </div></td>
            <td><input name="AREA_ATUACAO" DISABLED="DISABLED" size="30"/>
			   </td> 
          <td>Data inicial do Exame<input name="DATA_INICIAL" size="7"</td>
          <td>Data final do Exame<input name="DATA_FINAL" size="7"</td>
          </tr></table>
    <button type="button" onclick="insere(this)">+ Incluir Monitora��o</button>		
		<button type="button" onclick="remove(this)">- Remover Monitora��o</button>
    </form>
            
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
            <button name="btn" onclick="monta_consulta(campo_atual,campo_valor)"  type="button" value="Pesquisar" >Pesquisar</button><label onclick="document.getElementById('consultaexterna_funcionario').style.display='none'">        X</strong></label>
      </div>     


    </form>
</body>
</html>
