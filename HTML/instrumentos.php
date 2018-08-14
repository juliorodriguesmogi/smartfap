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
        background:white;
}
#principal{
    background: whitesmoke;
    width:1000px;
    height:200px;
}
#aba_principal{
    position: relative;
    width:500px;
	height:120px;
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
#div_statusbar{
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
</style>
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Instrumento.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript">

            newinstrumento=new Instrumento();
            var acao='';
                  empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();            
            
            function captura_linha(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['CODIGO_INSTRUMENTO'].value=valor_celula[0];
                document.forms[1].elements['DESCRICAO_INSTRUMENTO'].value=valor_celula[1];
                document.forms[1].elements['CATEGORIA'].value=valor_celula[2];
                document.forms[1].elements['CODIGO_INSTRUMENTO'].focus();
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
                colunas=Array('COD.INST.','NOME INST.','CATEGORIA');
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
                buscar_registros(window,'instrumentos','Consulta_Instrumentos',Array("CODIGO_EMPRESA","DESCRICAO_INSTRUMENTO"),parm,false,Array("=","like "),newregistros);
                
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
            function grava_registro(){
                if (confirm("Gravar registro?")){  
                   document.forms[1].action="../PHP/Instrumentos_Class.php?acao="+"I";
                   document.forms[1].submit();
                }
            }
            function apaga_registro(){
                if (confirm("Confirma a exclus�o do registro?")){
                    document.forms[1].action="../PHP/Instrumentos_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
            function proximo_registro(campo,visao){
                codinstr=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codinstr,">",visao,"Busca_Instrumento");                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codinstr=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name, codinstr,"<",visao,"Busca_Instrumento");
                exibe_campos();
            }  
            
            function exibe_campos(){
                codigo_instrumento=document.forms[1].elements['CODIGO_INSTRUMENTO'].value;
                document.forms[1].reset();

                    if (acao=='I'){
                        document.forms[1].elements["CODIGO_INSTRUMENTO"].value = codigo_instrumento;
                    }

                    if (acao=='A'){
                        document.forms[1].elements["CODIGO_INSTRUMENTO"].value = new String(newinstrumento.get_Codigo_Instrumento());
                        document.forms[1].elements["DESCRICAO_INSTRUMENTO"].value = new String(newinstrumento.get_Descricao());
                        document.forms[1].elements["CATEGORIA"].value = new String(newinstrumento.get_Categoria());
                        document.forms[1].elements["TIPO"].value = new String(newinstrumento.get_Tipo());
                        document.forms[1].elements["MARCA"].value = new String(newinstrumento.get_Marca());
                        document.forms[1].elements["MODELO"].value = new String(newinstrumento.get_Modelo());
                        document.forms[1].elements["SERIE"].value = new String(newinstrumento.get_Serie());
                        document.forms[1].elements["DATA_CALIBRACAO"].value = new String(newinstrumento.get_Data_Calibracao());
                        document.forms[1].elements["txt_log_data_cadastro"].value = new String(newinstrumento.get_Data_Cadastro());                
                        document.forms[1].elements["txt_log_ultima_atualizacao"].value = new String(newinstrumento.get_Ultima_Atualizacao());                
                        document.forms[1].elements["txt_log_ultimo_usuario"].value = new String(newinstrumento.get_Ultimo_Usuario());                
                    }

            }
              function imprime_registro(){
             if (confirm("Imprimir registro corrente?")){
                document.forms[1].action="../Reports/Relatorio_Instrumento.php";
                document.forms[1].submit();
             }
            }       
            function carrega_campo(){
                
            }
      function highlighted(tr_name){
          return tr_name.setAttribute('class','highlight');
      }     
      function captura_usuario(linha){
          alert (linha.rowIndex);
          parent=linha[linha.rowIndex].firstChild.cells[0].firstChild.textContent;
          alert(parent);
      }
      function popular_caixa_pesquisa(){
           document.getElementById('pesq').style.border='solid';
           document.getElementById('pesq').style.visibility='visible'; 
           buscar_registros(window,'instrumentos','Carrega_Instrumentos');             
           try {
               tab=document.getElementById('tbl');
               if (typeof tab==null) {
                    div=tab.parentNode;
                    div.removeChild(tab);
               }
           }
           catch (e){

           }
           tabela = document.createElement('table');
           tabela.setAttribute('id','tbl');
           tabela.border='0px';
           //tabela.cellpadding='0px';
           document.getElementById('pesq').appendChild(tabela);  
           //cabecalho=document.createElement('Thead');
           //cabecalho.style="background-color:cyan";
           linha_cab=document.createElement('tr');
           //cabecalho.appendChild(linha_cab);
           //tabela.appendChild(cabecalho);
           corpo=document.createElement('tbody');
           hlinha=document.createElement('tr');
           cab=document.createElement('th');
           cab.setAttribute('scope', 'col');
           cab.innerHTML="C�digo da Atividade";
           cab.width="50px";
           hlinha.appendChild(cab);
           cab=document.createElement('th');
           cab.setAttribute('scope', 'col');
           cab.innerHTML="Descri��o do Instrumento";
           cab.width="100px";
           hlinha.appendChild(cab);
           cab=document.createElement('th');
           cab.setAttribute('scope', 'col');
           cab.innerHTML="Classifica��o";
           cab.width="250px";
           hlinha.appendChild(cab);
           linha_cab.appendChild(hlinha);
           tabela.appendChild(linha_cab);
           divi=document.getElementById('pesq');
           body=document.createElement('tbody');
           body.style.border="1px";
           tabela.appendChild(body);
           xquebra=newregistros.getValores();
           for (var y in xquebra){
               var detail=document.createElement('tr');
               detail.setAttribute('onmouseover', 'return highlighted(this)');
               detail.setAttribute('onclick', 'captura_usuario(this)');
               body.appendChild(detail);
               campos=xquebra[y].split('|');
               for (var x=0;x<3;x++){
                   celula=detail.insertCell(-1);
                   celula.width="33%";
                   a=document.createElement('a');
                   a.setAttribute('href', "#");
                   a.innerHTML=campos[x];
                   celula.appendChild(a);

               }
           }
       }
        function criarTabela(){
    // vamos criar o elemento HTML table
    var tabela = document.createElement("table");
    tabela.border = "1px";
    tabela.cellSpacing = "0px";
    tabela.cellPadding = "3px";

    // vamos criar o corpo da tabela, ou seja, o tbody 
    var corpo = document.createElement("tbody");
    tabela.appendChild(corpo);
    
    // vamos criar tr�s linhas contendo quatro c�lulas cada uma
    /*for(var i = 0; i < 3; i++){
      var linha = corpo.insertRow(-1);
      
      for(var j = 0; j < 4; j++){
         var celula = linha.insertCell(-1);
         celula.innerHTML = "C�lula " + i + ", " + j + "";
      }
    }*/

    // vamos anexar a tabela rec�m-criada a um elemento div
    var container = document.getElementById("pesq");
    container.appendChild(tabela);
    document.getElementById('pesq').style.visibility='visible'; 
  }     
  function proximo_registro(campo,visao){
                codinst=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codinst,">",visao,visao,'Busca_Instrumento',false,newinstrumento);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codinst=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codinst,"<",visao,visao,'Busca_Instrumento',false,newinstrumento);                    
                exibe_campos();
            } 
             
</script>
</head>
<body>
<center><h1>Cadastro de Instrumentos de Medi��o</h1></center>
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
     
      <button  type="button" onclick="registro_anterior(document.forms[1].elements['CODIGO_INSTRUMENTO'],'instrumentos_codigo_desc')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/left.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Anterior</td>
           </tr>
      </table>
      </button>
      <button  type="button" onclick="proximo_registro(document.forms[1].elements['CODIGO_INSTRUMENTO'],'instrumentos_codigo_asc')">
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
<form id="frm_empresas" action="" method="POST">

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
        </script>   <br>
        <div id="div_statusbar">
          <table width="109" height="393" border="0">
            <tr>
              <td colspan="2" style="border:solid 1px">Informa&ccedil;&otilde;es do Registro</td>
            </tr>
            <tr>
              <td colspan="2">Data de Cadastro</td>
            </tr>
            <tr>
              <td colspan="2"><textarea id="TXT_LOG" name="txt_log_data_cadastro" disabled="disabled" style="text-align:center;width:100px;min-height:30px;max-height:30px;max-width:100px;min-width:100px;background:transparent" cols="1" rows="2"><?php echo $_SESSION['DATA_CADASTRO']?></textarea></td>
            </tr>
            <tr>
              <td colspan="2">&Uacute;ltima Atualiza&ccedil;&atilde;o</td>
            </tr>
            <tr>
              <td colspan="2"><textarea id="TXT_LOG" name="txt_log_ultima_atualizacao" disabled="disabled" style="text-align:center;width:100px;min-height:30px;max-height:30px;max-width:100px;min-width:100px;background:transparent" cols="1" rows="2"> <?php echo $_SESSION['ULTIMA_ATUALIZACAO']?></textarea></td>
            </tr>
            <tr>
              <td colspan="2">&Uacute;ltima Altera&ccedil;&atilde;o realizada por</td>
            </tr>
            <tr>
              <td colspan="2"><input id="TXT_LOG" name="txt_log_ultimo_usuario" type="text" disabled="disabled" size="8" style="background:transparent" maxlength="8" value="<?php echo $_SESSION['id_usuario']?>"/></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2">&Uacute;ltimo c&oacute;digo gerado</td>
            </tr>
            <tr>
              <td colspan="2"><input id="TXT_LOG" name="txt_log_ultimo_codigo_gerado" type="text" disabled="disabled" size="8" style="background:transparent" maxlength="8" value="<?php echo $_SESSION['CODIGO_ATIVIDADE']?>"/></td>
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
        <br>
        <link href="estilosistema.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <table width="10%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Dados Cadastrais                </td>
                
               
            </tr>
    </table>
     <link href="../css/designer.css" type="text/css" rel="stylesheet" />
        <div id="divCadastro" style="display: block">
       <table width="1115" border="0" class="tabela">
          <tr>
            <td width="79">C&oacute;digo do Instrumento </td>
            <td width="124"><p>
                <input type="text" class="input" name="CODIGO_INSTRUMENTO" maxlength="10" size="10" onkeypress="return entrada_numerica_inteira(this,event)"   onblur="buscar_registro(window,this.name,this.value,'=','instrumentos','instrumentos','Busca_Instrumento',true,newinstr)"/><img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_INSTRUMENTO'],document.forms[1].elements['CODIGO_INSTRUMENTO'])" width="10px" height="10px"/>
            </p></td>
            <td width="91">Descri&ccedil;&atilde;o do Instrumento </td>
            <td width="300"><input class="input" type="text" name="DESCRICAO_INSTRUMENTO" maxlength="50" size="50" /></td>
            <td width="62">Categoria</td>
            <td width="144"><select  class="input"name="CATEGORIA" >
              <option selected> </option>
              <option value="RU&Iacute;DO">Ru&iacute;do</option>
              <option value="LUMINOSIDADE">Ilumina��o</option>
              <option value="TEMPERATURA">Temperatura</option>
              <option value="RADIA&Ccedil;&Atilde;O">Radia&ccedil;&atilde;o</option>
              <option value="N&Iacute;VEL ALCOOL">N&iacute;vel De Alcool</option>
            </select>            </td>
            <td width="72">Tipo </td>
            <td width="209"><select class="input" name="TIPO">
              <option value=" " selected="selected"> </option>
              <option value="&Aacute;RVORE DE TERM&Ocirc;METROS">&Aacute;rvore de Term&ocirc;metros</option>
              <option value="BOMBA DE AMOSTRAGEM PESSOAL">Bomba de Amostragem Pessoal</option>
              <option value="BOMBA DE MON&Oacute;XIDO DE CARBONO">Bomba de Mon&oacute;xido de Carbono</option>
              <option value="BOMBA DE TUBO COLORIM&Eacute;TRICO">Bomba de Tubo Colorim&eacute;trico</option>
              <option value="DECIBEL&Iacute;METRO">Decibel&iacute;metro</option>
              <option value="DOS&Iacute;METRO DE RU&Iacute;DO">Dos&iacute;metro de Ru&iacute;do</option>
              <option value="DOS&Iacute;METRO DE RADIA&Ccedil;&Atilde;O">Dos&iacute;metro de Radia&ccedil;&atilde;o</option>
              <option value="LUX&Iacute;METRO">Lux&iacute;metro</option>
              <option value="MEDIDOR DE MON&Oacute;XIDO DE CARBONO">Medidor de Mon&oacute;xido de Carbono</option>
              <option value="MEDIDOR DE OXIG&Ecirc;NIO">Medidor de Oxig&ecirc;nio</option>
              <option value="TERM&Ocirc;METRO">Term&ocirc;metro</option>
              <option value="TERMO-HIDRO ANEM&Ocirc;METRO">Termo-Hidro Anem&ocirc;metro</option>
            </select></td>
          </tr>   <tr>
            <td width="79">Marca</td>
            <td width="124"><p>
                <input type="text" class="input" name="MARCA" maxlength="20" size="20"/>
            </p></td>
            <td width="91">Modelo</td>
            <td width="300"><input type="text" class="input" name="MODELO" maxlength="30" size="30" /></td>
            <td width="62">S&eacute;rie</td>
            <td width="144"><input class="input" type="text" name="SERIE" /></td>
            <td width="72">Data Calibra&ccedil;&atilde;o </td>
            <td width="209"><input class="input" type="text" name="DATA_CALIBRACAO" maxlength="10" size="10" onkeyup="return formata_data_hora(this,'eu',event);" onkeypress="return valida_data_hora(this,event)" onfocus="data_hoje(this)"/></td>
          </tr>
        </table>
      </div>
  </li>
                  
</ul>
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
</body>
      
</form>
<form>
                <div id="consultaexterna" style="postion:absolute;display:none">
      <input type="text" id="txt_pesquisa" name="txt_pesquisa" size="50"/>
            <button name="btn" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_INSTRUMENTO'],document.forms[2].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button><label onclick="document.getElementById('consultaexterna').style.display='none'"><strong>   X</strong></label>
      </div>     

    </form>
</body>
</html>
