<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Cadastro de Empresas Clientes</title>
<style type="text/css">
    body{
	background-color: white;
        font-family:Geneva, Arial, Helvetica, sans-serif;
	font-size:90%;
        width:90%;

        }
        #div_consulta{
        filter: alpha(opacity:0.70);  
        KHTMLOpacity: 0.70;  
        MozOpacity: 0.70;  
        -khtml-opacity: .70;  
        -ms-filter: "alpha(opacity=70)";  
        -moz-opacity: .70;  
        filter: alpha(opacity=70);  
        opacity: .70;
	top:70%;
        }
div{
	width:100%;
	
}
ul{
    margin: 0; 
    padding: 0;
    list-style-type: none;}
li{
margin: -2px 0 0;
}
a{
    left:0px;
    margin: 0px;
}
#divcadastro{
	width:90%;
}
#div_statusbar{
	vertical-align: bottom;
	position:absolute;
	top:10px;
	width: 110px;
	border:solid;
	background-color:silver;
	right: 0px;
	max-height:397px;
	height: 397px;
	text-align: center;
	z-index: -1;
        
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

#principal{
     background:whitesmoke;
    width:1000px;
    height:200px;
}
#aba_principal{
    position: relative;
    width:500px;
    list-style: none;
    font-family:  sans-serif;
    font-size: 95%; 

}
#aba_principal li{
    display:inline;
    position:relative;
}
li{display:inline}
.numero{text-align: right}
li:hover{display:block;}


#div_statusbar table tr td {
	text-align: center;
}
#bulb_gif_endereco_comercial{
	display:none;
}
#bulb_gif_bairro_comercial{
	display:none;
}
#bulb_gif_municipio_comercial{
	display:none;
}

#bulb_gif_endereco_atuacao{
	display:none;
}
#bulb_gif_bairro_atuacao{
	display:none;
}

input{
    text-transform: uppercase;
}
th{
	background-color:#c7daec;
}

html{
    overflow: auto;
}
</style>
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Empresa.js"></script>
<script type="text/javascript" src="../classes/js/CNAE.js"></script>
<script type="text/javascript" src="../classes/js/CNAES.js"></script>
<script type="text/javascript" src="../classes/js/CEPS.js"></script>
<script type="text/javascript" src="../classes/js/CEPS_Ceps.js"></script>
<script type="text/javascript" src="../classes/js/CEPS_Bairro.js"></script>
<script type="text/javascript" src="../classes/js/CEPS_Municipios.js"></script>
<script type="text/javascript" src="../classes/js/Municipios.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="../js/CNPJ.js"></script>
<script type="text/javascript" src="../js/NIT.js"></script>
<script type="text/javascript" src="../classes/js/Abas.js"></script>
<link href="estilosistema.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">  
         newempresa=new Empresa();
         newLogradouro=new CEPS();
         newCEPS_C=new CEPS_Ceps();
         newBairros=new CEPS_Bairro();
         newCNAE=new CNAE();
         newCNAES=new CNAES();
         
         empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();            
          function captura_linha(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['CODIGO_EMPRESA'].value=valor_celula[0];
                document.forms[1].elements['NOME_FANTASIA'].value=valor_celula[1];
                document.forms[1].elements['RAZAO_SOCIAL'].value=valor_celula[2];
                document.forms[1].elements['CODIGO_EMPRESA'].focus();
                document.getElementById('consultaexterna').style.display='none';
            }

            div_pai=document.getElementById('consultaexterna');

            
            function monta_consulta_empresa(campo_origem,campo_pesquisa){
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
                colunas=Array('COD.EMPRESA.','NOME.FANTASIA','RAZAO SOCIAL');
                largura=Array('112px','116px','550px');
                for (xcab=0;xcab < 3;xcab++){
                     th=document.createElement('th');
                     th.setAttribute('width',largura[xcab]);
                     th.innerHTML=colunas[xcab];
                     
                     tr.appendChild(th);  
                }  
                consultar_empresa(tabela,campo_pesquisa,' like ')
            }    
                
                
            function consultar_empresa(ntabela,campo_pesquisa,criterio){
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                ntabela.appendChild(tbody);
                parm=Array(campo_pesquisa.value,campo_pesquisa.value);
                
                buscar_registros(window,'empresas','Consulta_Empresas',Array("NOME_FANTASIA","RAZAO_SOCIAL"),parm,false,Array(" like ","  like "),newregistros);
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
                    largura=Array('112px','116px','550px');
                    for (y=0;y<vreg.length-1;y++){
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
        function exibe_campos(){
                codigo_empresa=document.forms[1].elements['CODIGO_EMPRESA'].value;
                
                document.forms[1].reset();
                //newempresa.setValores(newregistro.getValores());
                                
                if (acao=='I'){
                    document.forms[1].elements["CODIGO_EMPRESA"].value = codigo_empresa;
                }
                if (acao=='A'){
                        
                        document.forms[1].elements["CODIGO_EMPRESA"].value = new String(newempresa.get_Codigo_Empresa());
                        document.forms[1].elements["NOME_FANTASIA"].value = new String(newempresa.get_Nome_Fantasia());
                        document.forms[1].elements["RAZAO_SOCIAL"].value = new String(newempresa.get_Razao_Social());
                        document.forms[1].elements["SITUACAO"].value = new String(newempresa.get_Situacao());
                        document.forms[1].elements["CNPJ"].value = new String(newempresa.get_CNPJ());
                        document.forms[1].elements["ENDERECO_COMERCIAL"].value = new String(newempresa.get_Endereco_Comercial());
                        document.forms[1].elements["NRO_COMERCIAL"].value = new String(newempresa.get_Nro_Comercial());
                        document.forms[1].elements["TIPO_LOGRADOURO_COMERCIAL"].value=newempresa.get_Tipo_Logradouro_Comercial();
                        document.forms[1].elements["BAIRRO_COMERCIAL"].value=newempresa.get_Bairro_Comercial();
                        document.forms[1].elements["MUNICIPIO_COMERCIAL"].value=newempresa.get_Municipio_Comercial();
                        document.forms[1].elements["UF_COMERCIAL"].value=String(newempresa.get_UF_Comercial());
                        document.forms[1].elements["CEP_COMERCIAL"].value=newempresa.get_CEP_Comercial();
                        document.forms[1].elements["ENDERECO_ATUACAO"].value = new String(newempresa.get_Endereco_Atuacao());    
                        document.forms[1].elements["NRO_ATUACAO"].value = new String(newempresa.get_Nro_Atuacao());
                        document.forms[1].elements["TIPO_LOGRADOURO_ATUACAO"].value=newempresa.get_Tipo_Logradouro_Atuacao();
                        document.forms[1].elements["BAIRRO_ATUACAO"].value=newempresa.get_Bairro_Atuacao();
                        document.forms[1].elements["MUNICIPIO_ATUACAO"].value=newempresa.get_Municipio_Atuacao();
                        document.forms[1].elements["UF_ATUACAO"].value=String(newempresa.get_UF_Atuacao());
                        document.forms[1].elements["GRAU_RISCO"].value = new String(newempresa.get_Grau_Risco());
                        document.forms[1].elements["INSCRICAO_ESTADUAL"].value = new String(newempresa.get_Inscricao_Estadual());                
                        document.forms[1].elements["NUMERO_FUNCS"].value=new String(newempresa.get_Numero_Funcs());
                        document.forms[1].elements["NOME_RESPONSAVEL"].value=new String(newempresa.get_Nome_Responsavel());
                        document.forms[1].elements["NIT_RESPONSAVEL"].value=new String(newempresa.get_NIT_Responsavel());
                        document.forms[1].elements["CODIGO_CNAE"].value = new String(newempresa.get_CNAE());
                        document.forms[2].elements["txt_log_data_cadastro"].value = new String(newempresa.get_Data_Cadastro());                
                        document.forms[2].elements["txt_log_ultima_atualizacao"].value = new String(newempresa.get_Ultima_Atualizacao());                
                        document.forms[2].elements["txt_log_ultimo_usuario"].value = new String(newempresa.get_Ultimo_Usuario());                
                        document.forms[1].elements["CEP_ATUACAO"].value=newempresa.get_CEP_Atuacao();
                        document.forms[1].elements["COMPLEMENTO_ATUACAO"].value=newempresa.get_Complemento_Atuacao();
                        document.forms[1].elements["COMPLEMENTO_COMERCIAL"].value=newempresa.get_Complemento_Comercial();
                        carregar_historico_laudos();
                        exibe_cnae(newempresa.get_CNAE());                         

                        

                }
            }
            function carrega_campo(){
                 buscar_registros(window,'cnae',"Carrega_CNAE",null,null,false,'=',newCNAES);
                 
                 codigo_cnae=document.forms[1].elements['CODIGO_CNAE'].value;
                 // Inicializa select option 
                 document.forms[1].elements['CODIGO_CNAE'].length=0;
                 // Loop para carregar select option
                 for (y=0;y< newCNAES.length();y++){
                             opt=new Option();
                             if (y==0){
                                opt.text="Selecione um �tem";
                                opt.value="";
                             }
                             else {
                                opt.text=newCNAES.get_Codigo_CNAE(y)+" "+newCNAES.get_Descricao(y);
                                opt.value=newCNAES.get_Codigo_CNAE(y);
                             }
                             
                             document.forms[1].elements['CODIGO_CNAE'].add(opt);
                        }
                        document.forms[1].elements['CODIGO_CNAE'].value=codigo_cnae;

            }
           
            function exibe_cnae(campo){
                buscar_registro(window,'CODIGO_CNAE',campo,'=','cnae','cnae','Busca_CNAE',false,newCNAE);
                document.forms[1].elements['CODIGO_CNAE'].add(new Option(newCNAE.get_Codigo_CNAE()+" "+newCNAE.get_Descricao()),newCNAE.get_Codigo_CNAE());
		document.getElementById('TXT_CNAE').value=newCNAE.get_Descricao();
                document.forms[1].elements['GRAU_RISCO'].value=newCNAE.get_Grau_Risco();
            }
            
            var acao='';
            function grava_registro(){
                if (confirm("Gravar registro?")){
                    document.forms[1].action="../PHP/Empresa_Class.php?acao="+acao;
                    document.forms[1].submit();
                }    
            }
            function apaga_registro(){
                if (confirm("Confirma a exclus�o do registro?")){
                    document.forms[1].action="../PHP/Empresa_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
              function proximo_registro(campo,visao){
                codemp=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codemp,">",visao,visao,'Busca_Empresa',false,newempresa);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codemp=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codemp,"<",visao,visao,'Busca_Empresa',false,newempresa);                    
                exibe_campos();
            }   
            function carrega_Municipios(){
                if (document.forms[1].elements["ENDERECO_COMERCIAL"].value>"" || document.forms[1].elements["TIPO_LOGRADOURO_COMERCIAL"].value>"" ) return;
                uf=document.forms[1].elements["UF_COMERCIAL"] .value;
                document.forms[1].elements["MUNICIPIO_COMERCIAL"].length=0;
                numopt=document.forms[1].elements['MUNICIPIO_COMERCIAL'].options.length;
                Isel=document.forms[1].elements['MUNICIPIO_COMERCIAL'];
                Isel.length=0;
                buscar_registros(window,"municipios","Carrega_Municipios","UF",uf,false,"=",newMunicipios);
                opt=new Option('',0);
                Isel.add(opt);
                 for (y=1;y<=newMunicipios.length();y++){
                             opt=new Option(newMunicipios.get_Municipio(y-1),newMunicipios.get_Municipio(y-1));
                             Isel.add(opt);

                        }                
                
            }

            function carrega_Bairros(){
			                if (document.forms[1].elements["ENDERECO_COMERCIAL"].value>"" || document.forms[1].elements["TIPO_LOGRADOURO_COMERCIAL"].value>"" ) return;

                uf=document.forms[1].elements["UF_COMERCIAL"].value;
		municipio= document.forms[1].elements["MUNICIPIO_COMERCIAL"].value.toUpperCase();
                Isel1=document.forms[1].elements['BAIRRO_COMERCIAL'];
                Isel1.length=0;
                Isel2=document.forms[1].elements['CEP_COMERCIAL'];
                Isel2.length=0;
                Isel3=document.forms[1].elements['TIPO_LOGRADOURO_COMERCIAL'];
                Isel3.length=0;
                campo=Array("UF","(LEFT(CIDADE,4))","(RIGHT(CIDADE,4))");
                criterio=Array(uf,"("+municipio.toString().substr(0,4));
                criterio[2]="("+municipio.toString().substr(municipio.toString().length-4,4);

                buscar_registros(window,"ceps","Carrega_Bairros",campo,criterio,false,Array("=","=","="),newBairros);
                opt=new Option('',0);
                Isel1.add(opt);
                
                 for (y=1;y<=newBairros.length();y++){
                             opt=new Option(newBairros.get_Bairro(y-1),newBairros.get_Bairro(y-1));
                             Isel1.add(opt);
                             
                        }                
                
            }            
            function carrega_CEPS(){
                uf=document.forms[1].elements["UF_COMERCIAL"].value;
		municipio= document.forms[1].elements["MUNICIPIO_COMERCIAL"].value.toUpperCase();
                bairro=document.forms[1].elements["BAIRRO_COMERCIAL"].value.toUpperCase();
                Isel1=document.forms[1].elements['CEP_COMERCIAL'];
                Isel1.length=0;
                campo=Array("UF","(LEFT(CIDADE,4))","(RIGHT(CIDADE,4))","(LEFT(BAIRRO,4))","(RIGHT(BAIRRO,4))");
                criterio=Array(uf,"("+municipio.toString().substr(0,4));
                criterio[2]=",("+municipio.toString().substr(municipio.toString().length-4,4);
                criterio[3]=Array("("+bairro.toString().substr(0,4));
                criterio[4]="("+bairro.toString().substr(bairro.toString().length-4,4);

                buscar_registros(window,"ceps","Carrega_CEPS_C",campo,criterio,false,Array("=","=","=","=","="),newCEPS_C);
                opt=new Option('',0);
                Isel1.add(opt);
                
                 for (y=1;y<=newCEPS_C.length();y++){
                             opt=new Option(newCEPS_C.get_CEPS_C(y-1),newCEPS_C.get_CEPS_C(y-1));
                             Isel1.add(opt);
                             
                        }                
                
            }   
            function TimeOut(evt){
            }
            var primeira_vez=false;
            
            function Busca_CEP_Endereco(){
                campo_atual=document.activeElement;
                newdiv=document.getElementById('div_consulta');
                divstop=findPosY(campo_atual)+campo_atual.offsetHeight;
                divsleft=findPosX(campo_atual)+campo_atual.offsetLeft;
                divestilo='display:none;'+'width:'+campo_atual.offsetWidth+"px;";
                divestilo+='height:'+"50px;"+'overflow:auto;'+'top:'+divstop+"px;";
                divestilo+='left:'+divsleft+"px;"+'position:absolute;'+'z-index:10;background-color:greenyellow';
                if (document.getElementById('div_consulta').children.length>0){
                    if (navigator.appName!='Microsoft Internet Explorer'){
                        while (newdiv.hasChildNodes()){
                            newdiv.removeChild(newdiv.lastChild);
                        }

                    }
                    else {
                        oChild=newdiv.children[0];
                        newdiv.removeChild(oChild);
                    }
                }                
                buscar_registros(window,"ceps","Carrega_CEPS",Array('LOGRADOURO'),Array(campo_atual.value+"%"),false,Array(" Like "),newLogradouro);
                newul=document.createElement('ul');
                for (y=0;y<=newLogradouro.length()-1;y++){
                    newli=document.createElement('li');
                    a=document.createElement('a');
                    a.setAttribute('href', "#");
                    a.setAttribute('style','font-size:11px;font-weight:bold');
                    a.innerHTML=newLogradouro.get_Tipo_Logradouro(y).toString().substr(0,15)+"\t";
                    a.innerHTML+="|"+newLogradouro.get_Logradouro(y).toString().substr(0,30)+"\t";
                    a.innerHTML+="|"+newLogradouro.get_Bairro(y).toString().substr(0,50);
                    a.innerHTML+="|"+newLogradouro.get_Municipio(y).toString().substr(0,50);
                    a.innerHTML+="|"+newLogradouro.get_CEP(y).toString().substr(0,50);
                    a.innerHTML+="|"+newLogradouro.get_UF(y).toString().substr(0,2)+"</BR>";
                    newli.setAttribute('onclick',"captura_valor(this)");
                    newli.setAttribute('width', 'auto');
                    newli.appendChild(a);
                    newul.appendChild(newli);
                    document.getElementById('bulb_gif_endereco_comercial').style.display='block';
                    
                    
                }     
                newdiv.appendChild(newul);
                newdiv.setAttribute('style',divestilo);
                clearInterval(i);
                primeira_vez=false;
            }


            function Busca_Bairro(){
                campo_atual=document.activeElement;
                newdiv=document.getElementById('div_consulta');
                divstop=findPosY(campo_atual)+campo_atual.offsetHeight;
                divsleft=findPosX(campo_atual)+campo_atual.offsetLeft;
                divestilo='display:none;'+'width:'+campo_atual.offsetWidth+"px;";
                divestilo+='height:'+"50px;"+'overflow:auto;'+'top:'+divstop+"px;";
                divestilo+='left:'+divsleft+"px;"+'position:absolute;'+'z-index:10;background-color:greenyellow';
                if (document.getElementById('div_consulta').children.length>0){
                    if (navigator.appName!='Microsoft Internet Explorer'){
                        while (newdiv.hasChildNodes()){
                            newdiv.removeChild(newdiv.lastChild);
                        }

                    }
                    else {
                        oChild=newdiv.children[0];
                        newdiv.removeChild(oChild);
                    }
                }                
                buscar_registros(window,"ceps","Carrega_Bairros",Array('BAIRRO'),Array(campo_atual.value+"%"),false,Array(" Like "),newCEPSBairro);
                newul=document.createElement('ul');
                for (y=0;y<=newCEPSBairro.length()-1;y++){
                    newli=document.createElement('li');
                    a=document.createElement('a');
                    a.setAttribute('href', "#");
                    a.setAttribute('style','font-size:11px;font-weight:bold');
                    a.innerHTML+="|"+newCEPSBairro.get_Bairro(y).toString().substr(0,50);
                    a.innerHTML+="|"+newCEPSBairro.get_Municipio(y).toString().substr(0,50);
                    a.innerHTML+="|"+newCEPSBairro.get_UF(y).toString().substr(0,2)+"</BR>";
                    newli.setAttribute('onclick',"captura_campo(this,document.forms[1].elements['BAIRRO_COMERCIAL'],1)");
                    newli.setAttribute('width', 'auto');
                    newli.appendChild(a);
                    newul.appendChild(newli);
                    document.getElementById('bulb_gif_bairro_comercial').style.display='block';
                    
                    
                }     
                newdiv.appendChild(newul);
                newdiv.setAttribute('style',divestilo);
                clearInterval(i);
                primeira_vez=false;
            }

            function Busca_Municipio(){
                campo_atual=document.activeElement;
                newdiv=document.getElementById('div_consulta');
                divstop=findPosY(campo_atual)+campo_atual.offsetHeight;
                divsleft=findPosX(campo_atual)+campo_atual.offsetLeft;
                divestilo='display:none;'+'width:'+campo_atual.offsetWidth+"px;";
                divestilo+='height:'+"50px;"+'overflow:auto;'+'top:'+divstop+"px;";
                divestilo+='left:'+divsleft+"px;"+'position:absolute;'+'z-index:10;background-color:greenyellow';
                if (document.getElementById('div_consulta').children.length>0){
                    if (navigator.appName!='Microsoft Internet Explorer'){
                        while (newdiv.hasChildNodes()){
                            newdiv.removeChild(newdiv.lastChild);
                        }

                    }
                    else {
                        oChild=newdiv.children[0];
                        newdiv.removeChild(oChild);
                    }
                }                
                buscar_registros(window,"ceps","Carrega_Municipios",Array('CIDADE'),Array(campo_atual.value+"%"),false,Array(" Like "),newCEPSMunicipio);
                newul=document.createElement('ul');
                for (y=0;y<=newCEPSMunicipio.length()-1;y++){
                    newli=document.createElement('li');
                    a=document.createElement('a');
                    a.setAttribute('href', "#");
                    a.setAttribute('style','font-size:11px;font-weight:bold');
                    a.innerHTML+="|"+newCEPSMunicipio.get_Municipio(y).toString().substr(0,50);
                    a.innerHTML+="|"+newCEPSMunicipio.get_UF(y).toString().substr(0,2)+"</BR>";
                    newli.setAttribute('onclick',"captura_campo(this,document.forms[1].elements['MUNICIPIO_COMERCIAL'],1)");
                    newli.setAttribute('width', 'auto');
                    newli.appendChild(a);
                    newul.appendChild(newli);
                    document.getElementById('bulb_gif_municipio_comercial').style.display='block';
                    
                    
                }     
                newdiv.appendChild(newul);
                newdiv.setAttribute('style',divestilo);
                clearInterval(i);
                primeira_vez=false;
            }


            function captura_valor(campo){
                if (navigator.appName!='Microsoft Internet Explorer'){
                    varx=campo.children[0].textContent.toString().split('|');
                }
                else {
                    varx=campo.innerText.toString().split('|');
                }
                document.forms[1].elements["TIPO_LOGRADOURO_COMERCIAL"].value=varx[0];
                document.forms[1].elements["ENDERECO_COMERCIAL"].value = varx[1];
                document.forms[1].elements["BAIRRO_COMERCIAL"].value=varx[2];
                document.forms[1].elements["MUNICIPIO_COMERCIAL"].value=varx[3];
                document.forms[1].elements["CEP_COMERCIAL"].value=varx[4];
                document.forms[1].elements["UF_COMERCIAL"].value=varx[5];
                document.getElementById('div_consulta').style.display='none';
		document.getElementById('bulb_gif_endereco_comercial').style.display='none';
                return;

            }
            function captura_campo(campo_origem,campo_destino,coluna){
                if (navigator.appName!='Microsoft Internet Explorer'){
                    varx=campo_origem.children[0].textContent.toString().split('|');
                }
                else {
                    varx=campo_origem.innerText.toString().split('|');
                }
				campo_destino.value=varx[coluna];
                document.getElementById('div_consulta').style.display='none';
		        document.getElementById('bulb_gif_bairro_comercial').style.display='none';
				document.getElementById('bulb_gif_municipio_comercial').style.display='none';
			    
			}
            function dispara(campo){
              if (!primeira_vez) {
                 primeira_vez=true;
				 if (campo.name=="ENDERECO_COMERCIAL"){
	                 i=setTimeout("Busca_CEP_Endereco()",3000);
				 }
				 if (campo.name=="BAIRRO_COMERCIAL"){
				     i=setTimeout("Busca_Bairro()",3000);
				 }	 
				 if (campo.name=="MUNICIPIO_COMERCIAL"){
				     i=setTimeout("Busca_Municipio()",3000);
				 }	 
				 
              } 

            }
            function carregar_historico_laudos(){
                    parm=Array(document.forms[1].elements['CODIGO_EMPRESA'].value);
                    buscar_registros(window,'laudos','Busca_Laudos',Array("CODIGO_EMPRESA"),parm,false,Array("="),newregistros);

                    valores=newregistros.getValores();
                    valores=valores.toString().split(',');
                    tabela=document.getElementById('historico_laudos');   
                    tamtab=tabela.rows.length-1;
                    cont=1;
                    while (cont<tamtab){
                        tabela.deleteRow(cont);
                        tamtab=tabela.rows.length-1;
                    }
                    for(x=0;x<valores.length-1;x++){
                        tabela.insertRow(-1);
                        vreg=valores[x].split('|');
                        for(y=0;y<7;y++){
                            tamtab=tabela.rows.length-1;
                            tabela.rows[tamtab].insertCell(-1);
                            tabela.rows[tamtab].cells[y].textContent=vreg[y];
                        }    
                    }    
            }
            
            function mostra_lista(opcao){
		document.getElementById('div_consulta').style.display='block';
                if (opcao.name='bulb_gif_endereco_comercial'){
                    document.getElementById('bulb_gif_endereco_comercial').style.display='none';
                }
                if (opcao.name='bulb_gif_endereco_atuacao'){
                    document.getElementById('bulb_gif_endereco_atuacao').style.display='none';
                }
		
            }
			
			function clona_enderecos(campo){
			    if (campo.checked){
                    document.forms[1].elements['TIPO_LOGRADOURO_ATUACAO'].value=document.forms[1].elements['TIPO_LOGRADOURO_COMERCIAL'].value;
                    document.forms[1].elements['ENDERECO_ATUACAO'].value=document.forms[1].elements['ENDERECO_COMERCIAL'].value;
					document.forms[1].elements['NRO_ATUACAO'].value=document.forms[1].elements['NRO_COMERCIAL'].value;					
					document.forms[1].elements['BAIRRO_ATUACAO'].value=document.forms[1].elements['BAIRRO_COMERCIAL'].value;					
					document.forms[1].elements['MUNICIPIO_ATUACAO'].value=document.forms[1].elements['MUNICIPIO_COMERCIAL'].value;
					document.forms[1].elements['UF_ATUACAO'].value=document.forms[1].elements['UF_COMERCIAL'].value;					
					document.forms[1].elements['CEP_ATUACAO'].value=document.forms[1].elements['CEP_COMERCIAL'].value;					
				}
			    if (!campo.checked){
                    document.forms[1].elements['TIPO_LOGRADOURO_ATUACAO'].value="";
					document.forms[1].elements['ENDERECO_ATUACAO'].value="";
					document.forms[1].elements['NRO_ATUACAO'].value="";
					document.forms[1].elements['BAIRRO_ATUACAO'].value="";
					document.forms[1].elements['MUNICIPIO_ATUACAO'].value="";
					document.forms[1].elements['UF_ATUACAO'].value="";
					document.forms[1].elements['CEP_ATUACAO'].value="";
				}
                                
			}
  function imprime_registro(){
             if (confirm("Imprimir registro corrente?")){
                document.forms[1].action="../Reports/Empresa_Relatorio.php";
                document.forms[1].submit();
             }
            }   
        </script>
       
  <style type="text/css">
<!--
.style1 {font-size: 150%}
-->
  </style>
</head>

<body >
    <center><h1 class="style1">Cadastro de Empresas</h1></center>
    

<div id="menu">
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
     
      <button  type="button" onclick="registro_anterior(document.forms[1].elements['CODIGO_EMPRESA'],'empresas_codigo_desc')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/left.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Anterior</td>
           </tr>
      </table>
      </button>
      <button  type="button" onclick="proximo_registro(document.forms[1].elements['CODIGO_EMPRESA'],'empresas_codigo_asc')">
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
  <br>
       <br>

<div id="DIV_PRINCIPAL" style="bottom:0px">
      
        <table width="81%" border="0" cellpadding="0" cellspacing="1" id="TBL_ABAS">
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                Dados Cadastrais</td>                
                <td id="celAbaDocumentacao" align="center" valign="middle" width="10%" class="abainativa" onMouseOver="trataMouseAba( this );" onClick="trataCliqueAba( this.id );">
                    Documenta��o                
                </td>
                
                <td id="celAbaConsultas" align="center" valign="middle" width="10%" class="abainativa" onMouseOver="trataMouseAba( this );" onClick="trataCliqueAba( this.id );">
                    Hist�rico de Laudos T�cnicos
                </td>
                

            </tr>
  </table>
       
    <form id="frm_empresas" action="empresas.php" method="POST">
      <div id="divCadastro" style="display: block;overflow:auto;height:60%;min-height:60%;min-width:70%" >
        
          <table class="tabela" width="81%" height="40" border="0" bgcolor="whitesmoke">
            <tr>
              <td width="68">C&oacute;digo da Empresa </td>
              <td width="69"><p>
                  <input type="text" name="CODIGO_EMPRESA" class="numero" maxlength="10"  onkeypress="return entrada_numerica_inteira(this,event)" onblur="buscar_registro(window,this.name,this.value,'=','empresas','empresas','Busca_Empresa',true,newempresa)" size="10"/>
              </p></td>
              <td width="13"><label onclick="popular_caixa_pesquisa()"></label>
              <img src="../images/search.png" onclick="monta_consulta_empresa(document.forms[1].elements['CODIGO_EMPRESA'],document.forms[3].elements['txt_pesquisa'])" width="10px" height="10px"/></td>
              <p></p>
              <td width="57">Raz&atilde;o Social</td>
              <td width="282"><input type="text" name="RAZAO_SOCIAL" maxlength="50" size="45" id="RAZAO_SOCIAL" /></td>
              <td width="56">Situa��o</td>
              <td width="98"><select name="SITUACAO">
                  <option value="  " selected="selected"> </option>
                  <option value="A">Ativa</option>
                  <option value="B">Bloqueada</option>
                  <option value="C">Cancelada</option>
                  <option value="O">Outras</option>
              </select></td>
              <td width="83">Nome Fantasia</td>
              <td width="280"><input type="text" name="NOME_FANTASIA" maxlength="50" style="width:200px;min-width:100px" id="NOME_FANTASIA" /></td>
            </tr>
        </table>
        
        <div >
          <table class="tabela" width="81%" border="0" bgcolor="whitesmoke">
                <tr>
                    <td width="74">CNPJ
                    <td colspan="2"><input type="text" name="CNPJ" class="numero" onblur="Formatar_CNPJ(this)" onkeypress="return entrada_numerica(this,event)"/>
                    <td width="61">CNAE</td>
                  <td width="272"><select name="CODIGO_CNAE" size="1" id="select" style="width:200px;" onfocus="carrega_campo()"  onchange="exibe_cnae(this.value)">
                  </select></td>
                    <td colspan="4"><p>
                    <label for="select"></label>
                    </p>                      <textarea  cols="25" rows="4" style="min-width:300px;max-width:300px;width:300px;height:100px;max-height:100px" disabled="disabled" id="TXT_CNAE"></textarea></td>
                    <td>Inscri��o Estadual</td>
                    <td><input type="text" name="INSCRICAO_ESTADUAL" maxlength="20" size="20" onblur="Formatar_IE(this)"/></td>
                </tr>
            <tr>
              <td>Grau de Risco </td>
              <td colspan="2"><select name="GRAU_RISCO">
                <option selected="selected"> </option>
                <option value="0"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
              <td colspan="2">&nbsp;</td>
              <td width="104">No. Funcion.</td>
              <td width="75"><input type="text" disabled="disabled" name="NUMERO_FUNCS" class="numero" onkeypress="return entrada_numerica_inteira(this,event)" maxlength="10" size="10"/></td>
              <td>&nbsp;</td>
              <td width="79">&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
            </tr>
            <tr>
              <th colspan="20" align="center"><strong>Endere&ccedil;os</strong></th>
            </tr>
            <tr>
              <th colspan="20"><div align="center">Sele&ccedil;&atilde;o de Endere&ccedil;os</div></th>
            </tr>
            <tr>
              <th colspan="20"><div align="center">Endere&ccedil;o Comercial </div></th>
            </tr>
            <tr>
              <td width="74">Tipo Logradouro</td>
              <td width="78"><input ty name="TIPO_LOGRADOURO_COMERCIAL" id="TIPO_LOGRADOURO_COMERCIAL" style="width:70px;max-width:70px"  >
              </select></td>
              <td width="80">Endere&ccedil;o</td>
              <td colspan="2"><input name="ENDERECO_COMERCIAL" type="text" id="ENDERECO_COMERCIAL" onkeypress="dispara(this);" size="45" style="min-width:100px"/>
                <img src="../images/bulb_gif.gif" width="15px" height="15px" name="bulb_gif_endereco_comercial" id="bulb_gif_endereco_comercial" onclick="mostra_lista(this)"/></td>
              <td>Complemento</td>
              <td><input name="COMPLEMENTO_COMERCIAL" type="text" id="COMPLEMENTO_COMERCIAL" size="10" style="min-width:20px" /></td>
              <td width="30">Nro</td>
              <td><input name="NRO_COMERCIAL" type="text" id="NRO_COMERCIAL" size="10" style="min-width:20px" /></td>
              <td width="92"><div align="right">Bairro</div></td>
              <td width="252" colspan="2"><input name="BAIRRO_COMERCIAL" type="text" id="BAIRRO_COMERCIAL" style="width:250px" onkeypress="dispara(this)"></td>
		    </tr>
			  <tr>
              <td width="74">Municipio</td>
              <td colspan="4"><input type="text" name="MUNICIPIO_COMERCIAL" id="MUNICIPIO_COMERCIAL" style="width:250px" onkeypress="dispara(this)"/><img src="../images/bulb_gif.gif" width="15px" height="15px" name="bulb_gif_municipio_comercial" id="bulb_gif_municipio_comercial" onclick="mostra_lista(this)"/></td>
              <td><div align="right">UF</div></td>
              <td><select name="UF_COMERCIAL" id="UF_COMERCIAL" style="width:50px;" onchange="carrega_Municipios();" >
                <option value="  " selected="selected"> </option>
                <option value="AC">AC</option>
                <option value="AM">AM</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="EF">EF</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="RS">RS</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
              </select></td>
              <td>&nbsp;</td>
              <td width="79"><div align="right">CEP</div></td>
              <td width="92"><input type="TEXT" name="CEP_COMERCIAL" id="CEP_COMERCIAL" style="width:90px;" >
              </select></td>
            </tr>
            <tr>
              <th colspan="20"><div align="center">Endere&ccedil;o de Atua&ccedil;&atilde;o </div><div><input name="MESMO_ENDERECO_COBRANCA" type="checkbox" onclick="clona_enderecos(this)" />Utilizar o endere�o comercial como o endere�o de atua��o</div></th>
            </tr>
            <tr>
              <td width="74">Tipo Logradouro</td>
              <td><input type="TEXT"  name="TIPO_LOGRADOURO_ATUACAO" id="TIPO_LOGRADOURO_ATUACAO" style="width:70px;max-width:70px" >
              </select></td>
              <td>Endere&ccedil;o</td>
              <td colspan="2"><input name="ENDERECO_ATUACAO" type="text" id="ENDERECO_ATUACAO" onkeypress="dispara(this);" size="45" style="min-width:100px"/>                <img src="../images/bulb_gif.gif" width="15px" height="15px" name="bulb_gif_endereco_atuacao" id="bulb_gif_endereco_atuacao" onclick="mostra_lista(this)"/></td>
              <td>Complemento</td>
              <td><input name="COMPLEMENTO_ATUACAO" type="text" id="COMPLEMENTO_ATUACAO" size="10" style="min-width:20px" /></td>
              <td width="30">Nro</td>
              <td><input name="NRO_ATUACAO" type="text" id="NRO_ATUACAO" size="10" style="min-width:20px" /></td>
              <td width="92"> <div align="right">Bairro</div></td>
              <td colspan="2"><input type="text" name="BAIRRO_ATUACAO" id="BAIRRO_ATUACAO"  style="width:250px;" >
              </select></td>
		    </tr>
			  <tr>
              <td>Municipio</td>
              <td colspan="4"><input type="text" name="MUNICIPIO_ATUACAO" id="MUNICIPIO_ATUACAO" style="width:250px" >
              </select></td>
              <td><div align="right">UF</div></td>
              <td><select name="UF_ATUACAO" style="width:50px" id="UF_ATUACAO">
                <option value="  " selected="selected"> </option>
                <option value="AC">AC</option>
                <option value="AM">AM</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="EF">EF</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="RS">RS</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
              </select></td>
              <td>&nbsp;</td>
              <td><div align="right">CEP</div></td>
              <td><input type="TEXT" name="CEP_ATUACAO" id="CEP_ATUACAO" style="width:90px">
              </select></td>
            </tr>
            <tr>
              <td colspan="20">&nbsp;</td>
            </tr>
          </table>
        </div>
      </div>
      <div id="divDocumentacao" style="display: none" >
            <table border="0" width="81%" bgcolor="whitesmoke">
				<tr>
                <td width="60">Nome do Respons�vel</td>
				<td colspan="2"><input type="text" name="NOME_RESPONSAVEL" size="50"/></td>
                <td width="60">NIT do Respons�vel</td>
				<td colspan="2"><input type="text" name="NIT_RESPONSAVEL" onblur="Formatar_NIT(this)" size="12" maxlength="11" /></td>
				
				</tr>
        </table>
      </div>
        <div id="divConsulta" style="display: none">
            <table id="historico_laudos" border="0" width="100%">
                <tr id="cabecalho_campos" style="border-bottom:solid 1px" >

    
    <td  width="5%">Numero do Laudo</td>
    <td  width="5%">Ano Per�cia</td>
    <td  width="5%">Revis�o </td>
    <td  width="9%">Data de Lan�amento</td>
    <td  width="8%">Data de Cria��o </td>
    <td  width="11%">�ltima Atualiza��o </td>
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
    </form>
          
        <script>
            defineAba( "celAbaCadastro"  , "divCadastro"   );
            defineAba( "celAbaDocumentacao" , "divDocumentacao" );
            defineAba( "celAbaConsultas" , "divConsulta" );
            defineAba( "celAbaModelos"   , "divModelo"  );
            defineAbaAtiva( "celAbaCadastro" );
        </script>



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
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</div>

<div id="div_mensagem">
    <input type="text" id="mensagem" name="mensagem" readonly="readonly" value="<?php echo ($_GET['mensagem']!=null?$_GET['mensagem']:$_GET['mensagem_erro'])?> "/>
    <?php 
        if ($_GET['mensagem']!=null){
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='1;URL=../HTML/empresas.php'>";     
       }
       else if ($_GET['mensagem_erro']!=null){
           echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=../HTML/empresas.php'>";     
       }
       ?>  

</div>
           <div align="center"></div>
           <div id='div_consulta'>
           </div>
</div>
           <form>
                <div id="consultaexterna" style="postion:absolute;display:none">
      <input type="text" id="txt_pesquisa" name="txt_pesquisa" size="50"/>
            <button name="btn" onclick="monta_consulta_empresa(document.forms[1].elements['CODIGO_EMPRESA'],document.forms[3].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button><label onclick="document.getElementById('consultaexterna').style.display='none'"><strong>   X</strong></label>
      </div>     

    </form>
</body>

</html>
