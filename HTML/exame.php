<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8559-1" />
<title>Documento sem título</title>
<link rel="stylesheet" type="text/css" href="responsaveiscss.css" />
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Exame.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<style type="text/css">
body{
	font-family:Geneva, Arial, Helvetica, sans-serif;
	font-size:90%;
	width:90%;
        background:white;
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

</style>

</head>

<body>
      <script type="text/javascript">  
     newexame=new exame();
         
         function captura_linha(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['CODIGO_EXAME'].value=valor_celula[0];
                document.forms[1].elements['NOME'].value=valor_celula[1];
                document.forms[1].elements['DESCRICAO'].value=valor_celula[2];
                document.forms[1].elements['CODIGO_EXAME'].focus();
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
                colunas=Array('COD.EXAME.','NOME EXAME.','DESCRI��O');
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
                

                
                parm=Array((campo_pesquisa.value+"%"));
                buscar_registros(window,'exame','Consulta_Exame',Array("NOME"),parm,false,Array("like "),newregistros);
                
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
                codigo_exame=document.forms[1].elements['CODIGO_EXAME'].value;
                document.forms[1].reset();
                //newexame.setValores(newregistro.getValores());
                                
                if (acao=='I'){
                    document.forms[1].elements["CODIGO_EXAME"].value = codigo_exame;
                }
                if (acao=='A'){
                        
                        document.forms[1].elements["CODIGO_EXAME"].value = new String(newexame.get_Codigo_Exame());
                        document.forms[1].elements["NOME"].value = new String(newexame.get_Nome());
                        document.forms[1].elements["DESCRICAO"].value = new String(newexame.get_Descricao());
                        document.forms[2].elements["txt_log_data_cadastro"].value = new String(newexame.get_Data_Cadastro());                
                        document.forms[2].elements["txt_log_ultima_atualizacao"].value = new String(newexame.get_Ultima_Atualizacao());                     
                        document.forms[2].elements["txt_log_ultimo_usuario"].value = new String(newexame.get_Ultimo_Usuario());                
                        
                       
                }
            }
           

            
            var acao='';
            function grava_registro(){
             if (confirm("confirma o registro")){
                document.forms[1].action="../PHP/Exame_Class.php?acao=I";
                document.forms[1].submit();
             }
            }
            function apaga_registro(){
                if (confirm("Confirma a exclusão do registro?")){
                    document.forms[1].action="../PHP/Exame_Class.php?acao="+"D";
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
                document.forms[1].action="../Reports/Relatorio_Exame.php";
                document.forms[1].submit();
             }
       }   
         </script> 
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
        </script>
         <link href="estilosistema.css" type="text/css" rel="stylesheet"/>
         <div id="titulo">Cadastro de exames</div><br></br>
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
       <button type="button" onClick="grava_registro();">
       <table>
            <tr>
            <td height="42"><img src="../images/barra_ferramentas/floppy.png" height="40" width="45" /></td>
            </tr>
            <tr>
            <td height="16">Gravar</td>
            </tr>
       </table>
       </button>
       <button  type="button" onClick="apaga_registro();">
       <table>
            <tr>
            <td height="42"><img src="../images/barra_ferramentas/error_button_2.png" height="40" width="45" /></td>
            </tr>
            <tr>
            <td height="16">Apagar</td>
            </tr>
       </table>
       </button>
       <button  type="button" onClick="exibe_campos();">
       <table>
            <tr>
            <td height="42"><img src="../images/barra_ferramentas/update_quantity_cart[1].png" height="33" width="47" /></td>
            </tr>
            <tr>
            <td height="16">Desfazer</td>
            </tr>
       </table>
       </button>
     
      <button  type="button" onClick="registro_anterior(document.forms[1].elements['CODIGO_EXAME'],'exames_codigo_desc')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/left.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Anterior</td>
           </tr>
      </table>
      </button>
      <button  type="button" onClick="proximo_registro(document.forms[1].elements['CODIGO_EXAME'],'exames_codigo_asc')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/right.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Pr�ximo</td>
           </tr>
      </table>
      </button>
     
     <button  type="button" onClick="imprime_registro();">
     <table>
          <tr>
          <td height="42"><img src="../images/printer_2.png" height="40" width="40" /></td>
          </tr>
          <tr>
          <td height="18">Imprimir</td>
          </tr>
     </table>
     </button>
     <button  type="button" onClick="window.location.reload(true);document.forms[1].elements['CODIGO_EXAME'].focus();">
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
           <table width="10%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Cadastro                </td>
                
              
            </tr>
    </table>
        
        <div id="divCadastro" style="display: block">
            <div id="conteudo">
  <form id="frm_EXAME" method="POST" >
<table class="tabela" width="80%">
<tr>
<td>Codigo
<input name="CODIGO_EXAME" type="text" onBlur="buscar_registro(window,this.name,this.value,'=','exame','exame','Busca_Exame',true,newexame)" onKeyPress="return entrada_numerica_inteira(this,event)" /><img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_EXAME'],document.forms[1].elements['CODIGO_EXAME'])" width="10px" height="10px"/>
</td>
<td>Nome do Exame
<input name="NOME" type="text" />
</td>
<td>Descri��o
<textarea name="DESCRICAO" type="text" /></textarea>
</td>
</tr>
</table>
    </form>
</div>
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

</div><link href="statusbar.css" type="text/css" rel="stylesheet"/>
    <form>
	<div id="div_statusbar">
      <table width="109" height="400" border="0">
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
        <tr><td></td></tr>
      </table>
    </div>
    </form>
<form>
                <div id="consultaexterna" style="postion:absolute;display:none">
      <input type="text" id="txt_pesquisa" name="txt_pesquisa" size="50"/>
            <button name="btn" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_RESPONSAVEL'],document.forms[3].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button><label onclick="document.getElementById('consultaexterna').style.display='none'"><strong>   X</strong></label>
      </div>     

    </form>
</body>
</html>
