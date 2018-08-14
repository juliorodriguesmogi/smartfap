<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
 
<link href="estilosistema.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body{
	font-family:Geneva, Arial, Helvetica, sans-serif;
	width:90%;
        text-transform: none;
        background:white;

}
.xbody{
    transform: scale(2);
    -moz-transform: scale(2);
    -webkit-transform: scale(2);
    -o-transform: scale(2);
    zoom:2;
}
div{
    font-size:100%;
    width: inherit;
    height: inherit;
    
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
textarea{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	text-align:justify;
}
#div_statusbar{
	vertical-align: bottom;
	position:absolute;
	top:1%;
	width: 119px;
	max-width: 1280px;
	border:solid;
	background-color:silver;
	right:0px;
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
#codigo_funcao{
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
.tabela{
    text-transform:none;
}
.style1 {font-size: large}
h1{font-size:150%}
</style>
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Funcao.js"></script>
<script type="text/javascript" src="../classes/js/CBO.js"></script>
<script type="text/javascript" src="../classes/js/CBOS.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="funcoes2.js"></script>
<script type="text/javascript">

            newfunc=new Funcao();
            newCBO=new CBO();
            CBO_Familia=new CBO();
            CBO_Profissao=new CBO();
            CBO_Qualificacao=new CBO();
            CBO_Sinonimo=new CBO();
            CBOS_Familia=new CBOS();
            CBOS_Profissao=new CBOS();
            CBOS_Qualificacao=new CBOS();
            CBOS_Sinonimo=new CBOS();
            
            refreshed=false;
            var acao='';
            
              empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();            
          function captura_linha(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['CODIGO_FUNCAO'].value=valor_celula[0];
                document.forms[1].elements['DESCRICAO_FUNCAO_EMPRESA'].value=valor_celula[1];
                document.forms[1].elements['CODIGO_CBO_FAMILIA'].value=valor_celula[2];
                document.forms[1].elements['CODIGO_FUNCAO'].focus();
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
                colunas=Array('COD.FUNÇÃO.','DESCRIÇÃO','CODIGO.CBO');
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
                buscar_registros(window,'funcoes','Consulta_Funcoes',Array("CODIGO_EMPRESA","DESCRICAO_FUNCAO_EMPRESA"),parm,false,Array("=","like "),newregistros);
                
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
					document.forms[1].action='../PHP/Funcao_Class.php?acao=I';
					document.forms[1].elements['CODIGO_CBO_FAMILIA_CMB'].disabled=true;
					document.forms[1].elements['CODIGO_CBO_OCUPACAO_CMB'].disabled=true;
					document.forms[1].elements['CODIGO_CBO_SINONIMO_CMB'].disabled=true;
					if (document.forms[1].elements['DESCRICAO_LTCAT'].value==''){
						document.forms[1].elements['DESCRICAO_LTCAT'].value=document.forms[1].elements["DESCRICAO_RESUMIDA_FAMILIA"].value;
					}
					document.forms[1].submit();
				}	
            }
            function apaga_registro(){
                if (confirm("Confirma a exclusão do registro?")){
                    document.forms[1].action="../PHP/Funcao_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
        function proximo_registro(campo,visao){
                codfunc=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codfunc,Array(">","="),visao,visao,'Busca_Funcao',false,newfunc);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codfunc=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codfunc,Array("<","="),visao,visao,'Busca_Funcao',false,newfunc);                    
                exibe_campos();
            }   
            
            function carrega_combo(componente,valores){
                componente.length=0;
                opt=new Option('Selecione um ítem',0);
                componente.add(opt);
                opt=new Option(valores,1);
                componente.add(opt);
                componente.options.selectedIndex=1; 
            }
            function ler_registro(campo){
                buscar_registro(window,campo.name,campo.value,Array('=','='),'funcoes','funcoes','Busca_Funcao',true,newfunc);

            }
            
            function exibe_campos(){
                codigo_funcao=document.forms[1].elements['CODIGO_FUNCAO'].value;
                document.forms[1].reset();
                document.forms[2].reset();
                    if (acao=='I'){
                        document.forms[1].elements["CODIGO_FUNCAO"].value = 0;
                    }

                    if (acao=='A'){
                        document.forms[1].elements["CODIGO_FUNCAO"].value = new String(newfunc.get_Codigo_Funcao());
                        document.forms[1].elements["DESCRICAO_FUNCAO_EMPRESA"].value = new String(newfunc.get_Descricao());
                        document.forms[1].elements['CODIGO_CBO_FAMILIA'].value=new String(newfunc.get_Codigo_CBO_Familia());
                        document.forms[1].elements["DESCRICAO_RESUMIDA_FAMILIA"].value = new String(newfunc.get_Descricao_CBO_Familia());
                        document.forms[1].elements['CODIGO_CBO_OCUPACAO'].value=new String(newfunc.get_Codigo_CBO_Ocupacao());
                        document.forms[1].elements['CODIGO_CBO_SINONIMO'].value=new String(newfunc.get_Codigo_CBO_Sinonimo());
                        document.forms[1].elements['CODIGO_CBO_OCUPACAO'].value=new String(newfunc.get_Codigo_CBO_Ocupacao());
                        carrega_familia();
                        document.forms[1].elements["CODIGO_CBO_FAMILIA_CMB"].value = new String(newfunc.get_Codigo_CBO_Familia());
                        carrega_ocupacao();
                        document.forms[1].elements["CODIGO_CBO_OCUPACAO_CMB"].value = new String(newfunc.get_Codigo_CBO_Ocupacao());
                        carrega_sinonimo();
                        document.forms[1].elements['CODIGO_CBO_SINONIMO'].value=new String(newfunc.get_Codigo_CBO_Sinonimo());
                        document.forms[1].elements["CODIGO_CBO_SINONIMO_CMB"].value = new String(newfunc.get_Codigo_CBO_Sinonimo());
                        document.forms[1].elements["DESCRICAO_LTCAT"].value = new String(newfunc.get_Descricao_LTCAT());
                        document.forms[2].elements["txt_log_data_cadastro"].value = new String(newfunc.get_Data_Cadastro());                
                        document.forms[2].elements["txt_log_ultima_atualizacao"].value = new String(newfunc.get_Ultima_Atualizacao());                
                        document.forms[2].elements["txt_log_ultimo_usuario"].value = new String(newfunc.get_Ultimo_Usuario());                
                        document.getElementById(new String(newfunc.get_Cargo_Funcao())).checked=true;
                    }

            }
          function desabilitar_painel(){
              componentes=document.getElementById('frm_funcoes');
              for (element in componentes){
                  try{
                    x=componentes[element].tagName.toString();
                    if (x=='INPUT' || x=='TABLE' || x=='SELECT'){
                          componentes[element].disabled=true;
                    }
                    }
                    catch(E){
                  
                     }
              
             }
           
          }
        
          function habilitar_painel(){
             componentes=document.getElementById('frm_funcoes');
             for (element in componentes){
                  try{
                    x=componentes[element].tagName.toString();
                    if (x=='INPUT' || x=='TABLE'  || x=='SELECT'){
                          componentes[element].disabled=false;
                    }
                  }
                  catch(E){
                  
                  }
             }
          }

      function highlighted(tr_name){
          return tr_name.setAttribute('class','highlight');
      }     
      function captura_funcao(linha){
                if (navigator.appName.indexOf('Internet Explorer')>0){
                    tabela=linha.parentNode.parentNode;
                    valor_celula=tabela.rows[linha.rowIndex].cells[0].innerText;
                }
                else {
                    tabela=linha.parentNode;
                    valor_celula=tabela.rows[linha.rowIndex].cells[0].firstChild.textContent;
                }
                buscar_registro(window,'CODIGO_FUNCAO', valor_celula,"=","funcoes","funcoes","Busca_Funcao",true);

                document.forms[1].elements['CODIGO_FUNCAO'].focus();
                document.getElementById('pesq').style.visibility='hidden';

      }
      function popular_caixa_pesquisa(){
           document.getElementById('pesq').style.border='solid';
           document.getElementById('pesq').style.visibility='visible'; 

           if (document.getElementById('tbl')) {
                    tab=document.getElementById('tbl');
                    div=tab.parentNode;
                    div.removeChild(tab);
           }

           buscar_registros(window,"cbos","Carrega_CBO","TIPO","F",true,"=",newfunc);
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
           cab.innerHTML="Código da Funcao";
           cab.width="50px";
           hlinha.appendChild(cab);
           cab=document.createElement('th');
           cab.setAttribute('scope', 'col');
           cab.innerHTML="Descrição da Funcao";
           cab.width="100px";
           hlinha.appendChild(cab);
           cab=document.createElement('th');
           cab.setAttribute('scope', 'col');
           cab.innerHTML="Classificação";
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
               detail.setAttribute('onclick', 'captura_funcao(this)');
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


            function exibe_cbos(campo){


                switch (campo.name){
                      
                       
                       case 'CODIGO_CBO_FAMILIA_CMB':
                        if (campo.length>1){
                            codigo_cbo_fam=campo.options[campo.selectedIndex].text;
                            document.forms[1].elements["CODIGO_CBO_FAMILIA"].value=campo.options[campo.selectedIndex].value;
                            buscar_registro(window,'CODIGO_CBO', document.forms[1].elements["CODIGO_CBO_FAMILIA"].value,"=","cbo","cbo","Busca_CBO",false,CBO_Familia);
                            document.forms[1].elements["DESCRICAO_RESUMIDA_FAMILIA"].value=CBO_Familia.get_Descricao_Sumaria();
                        }    
                        break;
                       case 'CODIGO_CBO_OCUPACAO_CMB': 
                        if (campo.length>1){
                            codigo_cbo_ocup=campo.options[campo.selectedIndex].text;
                            document.forms[1].elements["CODIGO_CBO_OCUPACAO"].value=campo.options[campo.selectedIndex].value;
                            document.forms[1].elements["DESCRICAO_RESUMIDA_OCUPACAO"].value="";

                        }    
                        break;
                       case 'CODIGO_CBO_SINONIMO_CMB':                            
                        if (campo.length>1){
                            codigo_cbo_sin=campo.options[campo.selectedIndex].text;
                            document.forms[1].elements["CODIGO_CBO_SINONIMO"].value=campo.options[campo.selectedIndex].value;
                            document.forms[1].elements["DESCRICAO_RESUMIDA_SINONIMO"].value="";
                        }    
                        break;
                }
            }
            function resolucao(){
                if (navigator.vendor=='Google Inc.' || navigator.appName=='Opera')
                document.onkeyup=key_event; 
                
                return;
                tambodyw=document.body.clientWidth;
                zoom=((tambodyw/1497)*100);
                zoom=parseInt(zoom)/100;
                if (navigator.appName=='Netscape'){
                    var attrb="-moz-transform: scale("+zoom+","+zoom+")";
                    document.getElementById('body').setAttribute('style',attrb );
                }
                if (navigator.appName=='Microsoft Internet Explorer'){
                    var attrb="zoom: "+zoom+"";
                    document.getElementById('body').setAttribute('style',attrb);
                }
                
                /*var attrb="transform: scale("+zoom+")";
                document.getElementById('bodyy').setAttribute('style',attrb );
                if (navigator.appName=='Microsoft Internet Explorer'){
                var attrb="-webkit-transform: scale("+zoom+")";
                document.getElementById('bodyy').setAttribute('style',attrb );*/
                /*if (navigator.appName=='Opera'){
                    var attrb="-o-transform: scale("+zoom+")";
                    document.getElementById('bodyy').setAttribute('style',attrb );
                } */   

                return;
tambodyh=document.body.clientHeight;
                tamfont=((tambodyw/1680)*100);
                tamheight=((tambodyh/1050)*100);
                document.getElementById("bodyy").style.fontSize=parseInt(tamfont)+10+'%';
                document.getElementById("bodyy").style.height=parseInt(tamheight)+10+'%';
                //document.getElementById("tblf").style.fontSize=parseInt(tamfont)+10+'%';
                redim();
                //document.getElementById("divprin").style.fontSize=parseInt(tamfont)+'%';
                //document.getElementById("divCadastro").style.fontSize=parseInt(tamfont)+'%';
                
            }
          function redim(){
              xcomp=document.forms;
              for (xelement in xcomp){
                try{   
                y=xcomp[xelement].tagName.toString();
                if (y=='FORM'){
                    xnomef=xcomp[xelement];
                    componentes=document.forms[xelement];
                    for (element in componentes){

                            x=componentes[element].tagName.toString();
                            if (x=='INPUT' || x=='TABLE'  || x=='SELECT'){
                                componentes[element].fontSize=parseInt(tamfont)+"%";
                            }
                            if (x=='INPUT' ){
                                componentes[element].size=parseInt(componentes[element].size*(parseInt(tamfont)/100));
                            }
                            if (x=='TEXTAREA' || x=='SELECT' ){
                                t=componentes[element].style.width;
                                componentes[element].fontSize=parseInt(tamfont)+"%";
                                ty=parseInt(t);
                                tz=ty*tamfont/100;
                                componentes[element].style.width=parseInt(tz)+"px";
                                componentes[element].style.maxWidth=parseInt(tz)+"px";
                                componentes[element].style.minWidth=parseInt(tz)+"px";
                            }
                            if (x=='DIV'){
                                componentes[element].style.height=parseInt(tamheight)+10+'%';
                            }
                            if (x=='BUTTON'){
                                t=componentes[element].children[0].width;
                                componentes[element].fontSize=parseInt(tamfont)+"%";
                                ty=parseInt(t);
                                tz=ty*tamfont/100;
                                componentes[element].children[0].width=parseInt(t*(1-(parseInt(tz))/100))+"px";
                                componentes[element].children[0].height*=parseInt(tamheight)+10+'%';;
                                       
                                    
                            }
                  }
               }    
             }
             catch(E){
               
             }

              } 
          }
function imprime_registro(){
             if (confirm("Imprimir registro corrente?")){
                document.forms[1].action="../Reports/Relatorio_Funcao.php";
                document.forms[1].submit();
             }
            } 
var _str = "";
var _timeout = 0;
var campo;

function cbboxSearchRestart(){
    chama_ordenar_array(campo);
    var i=0, c=true;
    while (c) {
        var textOpt = campo.options[i].text.toUpperCase().substr(6,_str.length);
        var strOpt = textOpt.substr(0, (_str.length));
        if (strOpt == _str) {
            campo.options[i].selected = true;
            c = false;
        }
        if (i >= (campo.options.length - 1)) {
            c = false;
        }
        i++;
    }
    _str="";
    campo.options[0].text=_str;
    
    clearTimeout(_timeout);
    
				
}
			
function pesquisa_combo_cbo(campo_cmb,evt) {
    campo=campo_cmb;
    clearTimeout(_timeout);
    
    var kcode=window.event?window.event.keyCode:evt.charCode;
    var vkode=window.event?window.event.keyCode:evt.keyCode;
    _str = _str + String.fromCharCode(kcode);
    _str = _str.toUpperCase();
    campo_cmb.options[0].text=_str;
    _timeout = setTimeout ("cbboxSearchRestart()", 3000);    

}		
function carrega_array(vcampo){
    tamanho=vcampo.length;
    xvcampo=Array();
    temp="";
    for (xk=1;xk<tamanho;xk++){
        xcampo1=vcampo.options[xk].text.substr(0,4);
        xcampo2=vcampo.options[xk].text.substr(5,vcampo.options[xk].text.length);
        xvcampo[xk-1]=xcampo2+" "+xcampo1;
    }
    xvcampo.sort();
    return xvcampo;
}
function chama_ordenar_array(vcampo){
    xcampo=carrega_array(vcampo);
    vcampo.length=0;
    for(kl=0;kl<xcampo.length;kl++){
        vcampo.add(new Option(xcampo[kl].substr(xcampo[kl].length-4,5)+" "+xcampo[kl].substr(0,xcampo[kl].length-5),xcampo[kl].substr(xcampo[kl].length-4,5)));
    }
}

function key_event(evt){
    campo_atual=document.activeElement;
    if (campo_atual.name=='CODIGO_CBO_FAMILIA_CMB'){
        campo=campo_cmb;
        clearTimeout(_timeout);

        var kcode=window.event?window.event.keyCode:evt.charCode;
        var vkode=window.event?window.event.keyCode:evt.keyCode;
        _str = _str + String.fromCharCode(kcode);
        _str = _str.toUpperCase();
        campo_cmb.options[0].text=_str;
        _timeout = setTimeout ("cbboxSearchRestart()", 3000);    
        
    }
}
</script>
</head>
<body id="body" onload="resolucao(this);">
    <div style="width:95%;overflow:auto ">
    <center>
      <h1>Cadastro de Cargos e Funções da Empresa </h1>
    </center>
   <div id="menu">
  <form id="frm_barra_tarefas" action="" >
       <button type="button"  onclick="window.location.reload(true);document.forms[1].elements['CODIGO_FUNCAO'].focus();">
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
     
      <button  type="button" onclick="registro_anterior(document.forms[1].elements['CODIGO_FUNCAO'],'funcoes_codigo_desc')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/left.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Anterior</td>
           </tr>
      </table>
      </button>
      <button  type="button" onclick="proximo_registro(document.forms[1].elements['CODIGO_FUNCAO'],'funcoes_codigo_asc')">
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
     <button  type="button" onclick="window.location.reload(true);document.forms[1].elements['CODIGO_EMPRESA'].focus();">
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
<script src="../js/script.js" type="text/javascript" ></script>
<script src="../js/abas.js" type="text/javascript" ></script>
<div>
<form id="frm_funcoes" action="" method="POST">
        <link href="estiloSistema.css" rel="stylesheet" type="text/css" />
    </head>
       <br>
        <table width="15%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Dados da Função                </td>

        
        <div id="divCadastro" style="display: block">
          <link href="../css/designer.css" type="text/css" rel="stylesheet" />
          <table width="98%" id="tblf" class="tabela" style="padding:0px;" vspace="0">
		  	<tr>
			<td width="7%" height="121" bordercolor="#FFFFFF" >
			C&oacute;digo 
			<td width="7%" bordercolor="#FFFFFF"><input type="text" name="CODIGO_FUNCAO" id="codigo_funcao" maxlength="10" size="10" class="input" onblur="ler_registro(this);" onkeypress="return entrada_numerica_inteira(this,event)"/></td>
              
			<td width="2%" bordercolor="#CCCCCC"><img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_FUNCAO'],document.forms[1].elements['CODIGO_FUNCAO'])" width="10px" height="10px"/></td>
			<td width="11%" bordercolor="#CCCCCC">Descri&ccedil;&atilde;o</td>
			<td width="33%" bordercolor="#CCCCCC"><textarea type="text" name="DESCRICAO_FUNCAO_EMPRESA"  cols="1" rows="6" style="text-align:justify;width:300px;height:70px;min-height:70px;max-height:70px;max-width:300px;min-width:300px"  class="input"></textarea></td>
			<td width="40%" bordercolor="#CCCCCC">
				<p>
				  <label>
				  <input name="CARGO_FUNCAO" type="radio" id="C" value="C" />
				  Cargo</label>
				</p>
				<p>
				  <label>
				  <input name="CARGO_FUNCAO" type="radio" id="F"  value="F" />
				  Função</label>
				</p>
			  <p>&nbsp;</p>			</tr>
		  </table>
		  <br />
		  <br />
		  <table id="tabl1"  width="98%" cellpadding="1" bordercolor="#666666" border="solid 1px" class="tabela" style="padding:0px;" vspace="0">
		    <tr><th colspan="6"><span >Associar informa&ccedil;&otilde;es do CBO </span></th>
	        <tr>
		  <th colspan="2"><p align="center" class="style1"> Família </p></th>
		  <th colspan="2"><p align="center" class="style1"> Ocupação Principal </p></th>
		  <th colspan="2"><p align="center" class="style1"> Sinônimo </p></th>
		  </tr>
	        <tr>
	          <td width="6%">C&oacute;digo CBO </td>
	          <td width="28%"> Fam&iacute;lia CBO </td>
	          <td width="6%">C&oacute;digo CBO </td>
	          <td width="27%">T&iacute;tulo da ocupa&ccedil;&atilde;o principal </td>
	          <td width="6%">C&oacute;digo CBO </td>
	          <td width="27%">Sinônimo da ocupação principal </td>
            </tr>
	        <tr>
	          <td height="84"><p>
	            <input type="text" name="CODIGO_CBO_FAMILIA" readonly="readonly" id="CODIGO_CBO_FAMILIA" maxlength="10" size="10" class="input"  onblur="" onkeydown="return entrada_numerica_inteira(this,event)"/>
	          </p>              </td>
	          <td><div id="selectfam">
			  <label id="labelfam">Aguarde. Carregando opções...</label>
			  <select name="CODIGO_CBO_FAMILIA_CMB" size="1"  id="select" style="width:90%" onfocus="carrega_familia();" onchange="exibe_cbos(this);carrega_ocupacao();" onkeypress="pesquisa_combo_cbo(this, event)">
              </select>
                <img id="famimg" src="../images/gears.gif" width="15px" height="15px"/></div></td>
	          <td><input type="text" name="CODIGO_CBO_OCUPACAO" readonly="readonly" id="CODIGO_CBO_OCUPACAO" maxlength="10" size="10" class="input" onblur="" onkeypress="return entrada_numerica_inteira(this,event)"/></td>
	          <td>
			  <label id="labelocup">Aguarde. Carregando opções...</label>
			  <select name="CODIGO_CBO_OCUPACAO_CMB" size="1" id="select2" style="width:90%"  onchange="carrega_sinonimo();exibe_cbos(this)" onblur="exibe_cbos(this)">
              </select>
              <img id="ocupimg" src="../images/gears.gif" width="15px" height="15px"/></td>
	          <td><input type="text" name="CODIGO_CBO_SINONIMO" readonly="readonly" id="CODIGO_CBO_SINONIMO" maxlength="10" size="10" class="input" onblur="" onkeypress="return entrada_numerica_inteira(this,event)"/></td>
	          <td>
			  <label id="labelsin">Aguarde. Carregando opções...</label>
			  <select name="CODIGO_CBO_SINONIMO_CMB" size="1" id="select3" style="width:90%" onfocus="carrega_sinonimo()"  onchange="exibe_cbos(this)" onblur="exibe_cbos(this)">
              </select>
              <img id="sinimg" src="../images/gears.gif" width="15px" height="15px"/></td>
            </tr>
	        <tr>
	          <td>Descri&ccedil;&atilde;o Sum&aacute;ria </td>
	          <td colspan="5" ><textarea type="text" name="DESCRICAO_RESUMIDA_FAMILIA" readonly="readonly"  cols="1" rows="10" style="text-align:justify;width:70%;min-height:100%;max-height:30%;max-width:70%;min-width:70%"  class="input"></textarea></td>
            </tr>
            <tr>
	          <td bordercolor="#666666">Descrição para Impressão LTCAT </td>
	          <td colspan="5" bordercolor="#666666"><textarea type="text" name="DESCRICAO_LTCAT" cols="1" rows="10" style="text-align:justify;width:70%;min-height:100%;max-height:30%;max-width:70%;min-width:70%"  class="input"></textarea></td>
            </tr>
		  </table>
		  </div>
        </li>
  </ul>

        <div id="divRelatorio" style="display: none">
            <table border="0" width="50%">
                <tr>
                    <td>
                        RELATÓRIOS
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
                        MODELOS DE IMPRESSÃO
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

</form>
</div>
    <form id='status' name="status">
        <div id="div_statusbar">
          <table width="109" height="393" border="0">
            <tr>
              <td colspan="2" style="border:solid 1px">Informa&ccedil;&otilde;es do Registro</td>
            </tr>
            <tr>
              <td colspan="2">Data de Cadastro</td>
            </tr>
            <tr>
              <td colspan="2"><textarea ID="TXT_LOG" name="txt_log_data_cadastro" DISABLED="DISABLED" style="text-align:center;width:100px;min-height:30px;max-height:30px;max-width:100px;min-width:100px;background:transparent" cols="1" rows="2"><?php echo $_SESSION['DATA_CADASTRO']?></textarea></td>
            </tr>
            <tr>
              <td colspan="2">&Uacute;ltima Atualiza&ccedil;&atilde;o</td>
            </tr>
            <tr>
              <td colspan="2"><textarea ID="TXT_LOG" name="txt_log_ultima_atualizacao" DISABLED="DISABLED" style="text-align:center;width:100px;min-height:30px;max-height:30px;max-width:100px;min-width:100px;background:transparent" cols="1" rows="2"> <?php echo $_SESSION['ULTIMA_ATUALIZACAO']?></textarea></td>
            </tr>

            <tr>
              <td colspan="2">&Uacute;ltima Alteração realizada por</td>
            </tr>
            <tr>
              <td colspan="2"><INPUT ID="TXT_LOG" name="txt_log_ultimo_usuario" TYPE="TEXT" DISABLED="DISABLED" SIZE="8" STYLE="background:transparent" MAXLENGTH="8" VALUE="<?php echo $_SESSION['id_usuario']?>"/></td>
            </tr>

              <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2">&Uacute;ltimo c&oacute;digo gerado</td>
            </tr>
            <tr>
              <td colspan="2"><INPUT ID="TXT_LOG" name="txt_log_ultimo_codigo_gerado" TYPE="TEXT" DISABLED="DISABLED" SIZE="8" STYLE="background:transparent" MAXLENGTH="8" VALUE="<?php echo $_SESSION['CODIGO_FUNCAO']?>"/></td>
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

        <div id="pesq" style="visibility:hidden;position:absolute;z-index:8;background:lightgoldenrodyellow">
        <div align="right"><input type="button" value="X" onclick="document.getElementById('pesq').style.visibility='hidden'"/></div>
        <label>Digite o texto a pesquisar:</label><input type="text" name="txt_pesq" id="txt_pesq" /><input type="button" value="Pesquisar" onclick="popular_caixa_pesquisa();"/>
        </div>            
        <div id="div_mensagem">
            <input type="text" id="mensagem" name="mensagem" value="<?php echo ($_GET['mensagem']!=null?$_GET['mensagem']:$_GET['mensagem_erro'])?> "/>
            <?php 
                if ($_GET['mensagem']!=null){
                    echo "<meta HTTP-EQUIV='Refresh' CONTENT='1;URL=../HTML/funcoes.php'>";     
                }
                else if ($_GET['mensagem_erro']!=null){
                   echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=../HTML/funcoes.php'>";     
                }
             ?>  

        </div>
        <div id="divRelatorio" style="display: none">
        </div>    
      </form>  
    </div>
        <form>
                <div id="consultaexterna" style="postion:absolute;display:none">
      <input type="text" id="txt_pesquisa" name="txt_pesquisa" size="50"/>
            <button name="btn" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_FUNCAO'],document.forms[2].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button><label onclick="document.getElementById('consultaexterna').style.display='none'"><strong>   X</strong></label>
      </div>     

    </form>
</body>

</html>
