
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/fabricante.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>

    </head>
    <body>
        <script type="text/javascript">  
 
         newfabrica=new fabrica();
         
         function captura_linha(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['CODIGO_FABRICANTE'].value=valor_celula[0];
                document.forms[1].elements['NOME'].value=valor_celula[1];
                document.forms[1].elements['DESCRICAO'].value=valor_celula[2];
                document.forms[1].elements['CODIGO_FABRICANTE'].focus();
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
                div_pai.style.height='320px';
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
                colunas=Array('COD.FABRI.','NOME.','DESCRIÇÃO.');
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
                buscar_registros(window,'fabricantes','Consulta_Fabricante',Array("NOME"),parm,false,Array("like "),newregistros);
                
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
                codigo_fabrica=document.forms[1].elements['CODIGO_FABRICANTE'].value;
                document.forms[1].reset();
                //newfabrica.setValores(newregistro.getValores());
                                
                if (acao=='I'){
                    document.forms[1].elements["CODIGO_FABRICANTE"].value = codigo_fabrica;
                }
                if (acao=='A'){
                        
                        document.forms[1].elements["CODIGO_FABRICANTE"].value = new String(newfabrica.get_Codigo_Fabricante());
                        document.forms[1].elements["NOME"].value = new String(newfabrica.get_Nome());
                        document.forms[1].elements["DESCRICAO"].value = new String(newfabrica.get_Descricao());
                        document.forms[1].elements["CNPJ"].value = new String(newfabrica.get_cnpj());
                        document.forms[2].elements["txt_log_data_cadastro"].value = new String(newfabrica.get_Data_Cadastro());                
                        document.forms[2].elements["txt_log_ultima_atualizacao"].value = new String(newfabrica.get_Ultima_Atualizacao());                     
                        document.forms[2].elements["txt_log_ultimo_usuario"].value = new String(newfabrica.get_Ultimo_Usuario());                
                        
                       
                }
            }
           

            
            var acao='';
            function grava_registro(){
             if (confirm("confirma o registro")){
                document.forms[1].action="../PHP/Fabricante_Class.php?acao=I";
                document.forms[1].submit();
             }
            }
            function apaga_registro(){
                if (confirm("Confirma a exclusÃ£o do registro?")){
                    document.forms[1].action="../PHP/Fabricante_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
            function primeiro_registro(campo,visao){
                codemp=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codigo_funcao,">",visao,"Busca_Fabricante",true,newfabrica);                    

            }
            
            function proximo_registro(campo,visao){
                codfabricante=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codfabricante,">",visao,visao,'Busca_Fabricante',false,newfabrica);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codfabricante=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codfabricante,"<",visao,visao,'Busca_Fabricante',false,newfabrica);                    
                exibe_campos();
            } 
         </script>
          <script>        
        var aAbas       = new Array();  // Lista de abas do documento atual
        var sAbaAtiva   = ""                 // Define qual é a aba ativa no momento
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
        function imprime_registro(){
  
          if (confirm("Imprimir registro corrente?")){
                document.forms[1].action="../Reports/Fabricante_Relatorio.php";
                document.forms[1].submit();
             }
       }   
        </script>
        
         <div><center><h1 class="style1">Cadastro de Fabricantes</h1></center></div>
        </br>
        <link href="estilosistema.css" type="text/css" rel="stylesheet"/>
         <div id="menu">
  <form id="frm_barra_tarefas" action="" >
       <button type="button"  onclick="window.location.reload(true);document.forms[1].elements['CODIGO_FABRICANTE'].focus();">
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
     
      <button  type="button" onclick="registro_anterior(document.forms[1].elements['CODIGO_FABRICANTE'],'fabricantes_codigo_desc')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/left.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Anterior</td>
           </tr>
      </table>
      </button>
      <button  type="button" onclick="proximo_registro(document.forms[1].elements['CODIGO_FABRICANTE'],'fabricantes_codigo_asc')">
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
     <button  type="button" onclick="window.location.reload(true);document.forms[1].elements['CODIGO_FABRICANTE'].focus();">
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
</div>     <br>
        <br>
             <table width="10%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Cadastro                </td>
                
               
            </tr>
    </table>
   
        <div id="divCadastro" style="display: block">
            <form id="frm_fabricante" method="POST">
            <table class="tabela" bgcolor="whitesmoke" >
                <tr>
                    <td>Codigo
                        <input name="CODIGO_FABRICANTE" type="text" size="15" onblur="buscar_registro(window,this.name,this.value,'=','fabricantes','fabricantes','Busca_Fabricante',true,newfabrica)" /><img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_FABRICANTE'],document.forms[1].elements['CODIGO_FABRICANTE'])" width="10px" height="10px"/>
                    </td>
                    <td>Nome
                        <input name="NOME" type="text" size="35"/>
                    </td>
                    <TD>CNPJ
                        <input name="CNPJ" type="text" size="15"/>
                    </td>
                    <td>Descrição
                        <textarea name="DESCRICAO" type="text" ></textarea>
                        </td>
                </tr>
            </table>
            </form>
        </div>
        
        <script>
            defineAba( "celAbaCadastro"  , "divCadastro"   );
            defineAba( "celAbaRelatorio" , "divRelatorio"  );
            defineAba( "celAbaConsultas" , "divConsulta"   );
            defineAba( "celAbaModelos"   , "divModelo"     );
            defineAbaAtiva( "celAbaCadastro" );
        </script>
    </div></br>
             </br>
             </br>
        <div>
            
        </div><link href="statusbar.css" type="text/css" rel="stylesheet"/>
        <link href="responsaveiscss.css" type="text/css" rel="stylesheet"/>
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
      <td colspan="2">&Uacute;ltima Alteração realizada por</td>
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
            <button name="btn" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_FABRICANTE'],document.forms[2].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button><label onclick="document.getElementById('consultaexterna').style.display='none'"><strong>   X</strong></label>
      </div>     

    </form>
    </body>
</html>
