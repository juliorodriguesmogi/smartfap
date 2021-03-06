<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro de Funcion�rios</title>
<style type="text/css">
body{
	font-family:Geneva, Arial, Helvetica, sans-serif;
	font-size:80%;
	width:85%;
        background:white;
}
#principal{
	position:absolute;
	width:80%;
	height:32%;
	left:0%;
}
#aba_principal{
	position: relative;
	width:30%;
	list-style: none;
	font-family:  sans-serif;
	font-size: 95%;
	left: 0;
}
#aba_principal li{
    display:inline;
    position:relative;
}
li{display:inline}

li:hover{display:block;}
h1{font-size:150%}
#div_statusbar {	vertical-align: bottom;
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
#bulb_gif_nome{
	display:none;
}
#bulb_gif_endereco{
	display:none;
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
</style>
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Funcao.js"></script>
<script type="text/javascript" src="../classes/js/Atividades.js"></script>
<script type="text/javascript" src="../classes/js/Funcoes.js"></script>
<script type="text/javascript" src="../classes/js/CBO.js"></script>
<script type="text/javascript" src="../classes/js/CBOS.js"></script>
<script type="text/javascript" src="../classes/js/Funcionario.js"></script>
<script type="text/javascript" src="../classes/js/Estruturas.js"></script>
<script type="text/javascript" src="../classes/js/Setores.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="../classes/js/Funcionarios_Historico_Exames.js"></script>
<script type="text/javascript" src="../classes/js/Funcionarios_Monitoracao_Biologica.js"></script>
<script type="text/javascript" src="../classes/js/Funcionarios_Historico_Afastamentos.js"></script>
<script type="text/javascript" src="../classes/js/Funcionarios_Historico_Lotacao_Atribuicao.js"></script>
<script type="text/javascript" src="../classes/js/Funcionarios_Profissografia.js"></script>
<script type="text/javascript" src="../classes/js/Exames.js"></script>
<script type="text/javascript" src="../classes/js/medico.js"></script>
<script type="text/javascript" src="../classes/js/medicos.js"></script>
<script type="text/javascript" src="../classes/js/CEPS.js"></script>
<script type="text/javascript" src="../classes/js/Tipos_Logradouros.js"></script>
<link href="estilosistema.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
         newLogradouro=new CEPS();
         newfuncoes=new Funcoes();
         newfuncionario=new Funcionario();
         newSetores=new Setores();
         empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();            
		 CBOS_Profissao=new CBOS();
            
 function captura_linha(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['funcionarios|CODIGO_FUNCIONARIO'].value=valor_celula[0];
                document.forms[1].elements['funcionarios|MATRICULA_FUNCIONARIO'].value=valor_celula[1];
                document.forms[1].elements['funcionarios|NOME_FUNCIONARIO'].value=valor_celula[2];
                document.forms[1].elements['funcionarios|CODIGO_FUNCIONARIO'].focus();
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
                colunas=Array('COD.FUNC.','MATR.FUNC.','NOME FUNC.');
				largura=Array('70px','70px','500px');
                for (xcab=0;xcab < 3;xcab++){
                     th=document.createElement('th');
                     th.innerHTML=colunas[xcab];
					 th.setAttribute('width',largura[xcab]);
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
                buscar_registros(window,'funcionarios','Consulta_Funcionarios',Array("CODIGO_EMPRESA","NOME_FUNCIONARIO"),parm,false,Array("=","like "),newregistros);
                
                cont=0;
                valores=newregistros.getValores();
                valores=valores.toString().split(',');
				largura=Array('70px','70px','500px');
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
//                        tr.appendChild(td);
                        td.setAttribute('width',largura[y]);
						tr.appendChild(td);
						
                        tbody.appendChild(tr);
                    }
                    
                    
                }    
                
            }
            function carrega_cargos(campo){
                 campos=campo.name.split("|");
                 
                 document.getElementById('carg_img').style.visibility='visible';
                 buscar_registros(window,"funcoes","Carrega_Funcao","CARGO_FUNCAO","C",false,Array("=","="),newfuncoes);
                 campo.length=0;
		 campo.add(new Option('',0));
                 for (y=1;y <=newfuncoes.length();y++){
                             opt=new Option(newfuncoes.get_Descricao_funcao_empresa([y-1]).substr(0,100),newfuncoes.get_Codigo_funcao([y-1]));
                             campo.add(opt);
                        }
                 document.getElementById('carg_img').style.visibility='hidden';
                 
            }    
			
            function carrega_funcoes(campo){
                 document.getElementById('funcimg').style.visibility='visible';
                 buscar_registros(window,"funcoes","Carrega_Funcao","CARGO_FUNCAO","F",false,Array("=","="),newfuncoes);
                 campo.length=0;
		 campo.add(new Option('',0));
                 for (y=1;y <=newfuncoes.length();y++){
                             opt=new Option(newfuncoes.get_Descricao_funcao_empresa([y-1]).substr(0,100),newfuncoes.get_Codigo_funcao([y-1]));
                             campo.add(opt);
                        }
                 document.getElementById('funcimg').style.visibility='hidden';
                 
            }    
            function onselect_cargo(campo){
                 buscar_registro(window,'CODIGO_FUNCAO', campo.value,Array("=","="),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                 codigo_cbo=newfunc.get_Codigo_CBO_Sinonimo()!=""?newfunc.get_Codigo_CBO_Sinonimo():newfunc.get_Codigo_CBO_Ocupacao();
                 linha_atualizar=campo.parentNode.parentNode;
                 coluna_atualizar=campo.parentNode;
                 numero_coluna=coluna_atualizar.cellIndex;
                 campo_atualizar=linha_atualizar.cells[numero_coluna+2];
                 campo_atualizar.firstChild.value=codigo_cbo;
			
            }			
            function onselect_funcao(campo){
                 buscar_registro(window,'CODIGO_FUNCAO', campo.value,Array("=","="),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                 codigo_cbo=newfunc.get_Codigo_CBO_Sinonimo()!=""?newfunc.get_Codigo_CBO_Sinonimo():newfunc.get_Codigo_CBO_Ocupacao();
                 linha_atualizar=campo.parentNode.parentNode;
                 coluna_atualizar=campo.parentNode;
                 numero_coluna=coluna_atualizar.cellIndex;
                 campo_atualizar=linha_atualizar.cells[numero_coluna+1];
                 campo_atualizar.firstChild.value=codigo_cbo;
			
            }			


            function mostra_lista(opcao){
		document.getElementById('div_consulta').style.display='block';
		document.getElementById('bulb_gif_nome').style.display='none';
            }
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
                    a.innerHTML+="|"+newLogradouro.get_CEP(y).toString().substr(0,10);
					a.innerHTML+="|"+newLogradouro.get_UF(y).toString().substr(0,2)+"</BR>";
                    newli.setAttribute('onclick',"captura_valor(this)");
                    newli.appendChild(a);
                    newul.appendChild(newli);
                    document.getElementById('bulb_gif_endereco').style.display='block';
                    
                    
                }     
                newdiv.appendChild(newul);
                newdiv.setAttribute('style',divestilo);
                clearInterval(i);
                primeira_vez=false;
            }
             function dispara(){
              if (!primeira_vez) {
                 primeira_vez=true;
                 i=setTimeout("Busca_CEP_Endereco()",2000);
              } 

            }
              function captura_valor(campo){
                if (navigator.appName!='Microsoft Internet Explorer'){
                    varx=campo.children[0].textContent.toString().split('|');
                }
                else {
                    varx=campo.innerText.toString().split('|');
                }
                //document.forms[1].elements["funcionarios|TIPO_LOGRADOURO"].length=0;
                document.forms[1].elements["funcionarios|TIPO_LOGRADOURO"].add(new Option(varx[0],varx[0]));
                document.forms[1].elements["funcionarios|ENDERECO_RESIDENCIAL"].value = varx[1];
                document.forms[1].elements["funcionarios|BAIRRO_RESIDENCIA"].value=varx[2];
                document.forms[1].elements["funcionarios|CIDADE_RESIDENCIA"].value=varx[3];
                document.forms[1].elements["funcionarios|CEP_RESIDENCIA"].value=varx[4];
		document.forms[1].elements["funcionarios|UF_RESIDENCIA"].value=varx[5];
                
                document.getElementById('div_consulta').style.display='none';
  		document.getElementById('bulb_gif_endereco').style.display='none';



            }
            
         newfuncionario=new Funcionario();
         
        function carrega_tipo_logradouro(campo){
            buscar_registros(window,"ceps","Carrega_Tipo_Logradouro",null,null,false,null,newtipologradouros);
            campo.length=0;
            campo.add(new Option('Selecione uma op��o',''));
            for (nocurs=0;nocurs<newtipologradouros.length();nocurs++){
                opt=new Option(newtipologradouros.get_Tipo_Logradouro(nocurs),newtipologradouros.get_Tipo_Logradouro(nocurs));
                campo.add(opt);
            }
            
        }
            
         
         
        function pesquisa_campo(campo){
            campos=campo.name.split('|');
            buscar_registro(window,campos[1], campo.value,Array("=","="),'funcionarios','funcionarios','Busca_Funcionario',true,newfuncionario);

        } 
        function exibe_campos(){
                codigo_funcionario=document.forms[1].elements['funcionarios|CODIGO_FUNCIONARIO'].value;
                document.forms[1].reset();
                //newfuncionario.setValores(newregistro.getValores());
                                
                if (acao=='I'){
                    document.forms[1].elements["funcionarios|CODIGO_FUNCIONARIO"].value = codigo_funcionario;
                }
                if (acao=='A'){
			carrega_cargos(document.forms[1].elements['funcionarios|CARGO']);
                        carrega_funcoes(document.forms[1].elements['funcionarios|FUNCAO']);
                        carrega_unidades(document.forms[1].elements['funcionarios|UNIDADE']);
                        document.forms[1].elements["funcionarios|CODIGO_FUNCIONARIO"].value = new String(newfuncionario.get_Codigo_Funcionario());
                        document.forms[1].elements["funcionarios|NOME_FUNCIONARIO"].value = new String(newfuncionario.get_Nome_Funcionario());
                        document.forms[1].elements["funcionarios|MATRICULA_FUNCIONARIO"].value = new String(newfuncionario.get_Matricula_Do_Funcionario());
                        document.forms[1].elements["funcionarios|SITUACAO"].value = new String(newfuncionario.get_Situacao());
			document.forms[1].elements["funcionarios|NUMERO_CTPS"].value = new String(newfuncionario.get_Numero_CTPS());
                        document.forms[1].elements["funcionarios|SERIE_CTPS"].value = new String(newfuncionario.get_Serie_Do_CTPS());
                        document.forms[1].elements["funcionarios|DATA_EMISSAO_CTPS"].value = new String(newfuncionario.get_Data_Emissao_CTPS());
                        document.forms[1].elements["funcionarios|NUMERO_CPF"].value = new String(newfuncionario.get_Numero_CPF());    
                        document.forms[1].elements["funcionarios|NUMERO_RG"].value = new String(newfuncionario.get_Numero_RG()); 
                        document.forms[1].elements["funcionarios|DATA_EXPEDICAO"].value = new String(newfuncionario.get_Data_Expedicao()); 
                        document.forms[1].elements["funcionarios|ORGAO_EXPEDIDOR"].value = new String(newfuncionario.get_Orgao_Expedidor()); 
                        document.forms[1].elements["funcionarios|DATA_ADMISSAO"].value = new String(newfuncionario.get_Data_Admissao()); 
                        document.forms[1].elements["funcionarios|SEXO"].value = new String(newfuncionario.get_Sexo()); 
                        document.forms[1].elements["funcionarios|DATA_DESLIGAMENTO"].value = new String(newfuncionario.get_Data_Desligamento()); 
                        document.forms[1].elements["funcionarios|UNIDADE"].value = newfuncionario.get_Unidade(); 
                        carrega_setores(document.forms[1].elements['funcionarios|CODIGO_SETOR']);      

                        document.forms[1].elements["funcionarios|CODIGO_SETOR"].value = newfuncionario.get_Setor(); 
                        document.forms[1].elements["funcionarios|CARGO"].value = new String(newfuncionario.get_Cargo()); 
			document.forms[1].elements["funcionarios|FUNCAO"].value = new String(newfuncionario.get_Funcao()); 
                        carrega_tipo_logradouro(document.forms[1].elements['funcionarios|TIPO_LOGRADOURO']);
                        document.forms[1].elements["funcionarios|TIPO_LOGRADOURO"].value=newfuncionario.get_Tipo_Logradouro();
                        document.forms[1].elements["funcionarios|ENDERECO_RESIDENCIAL"].value = new String(newfuncionario.get_Endereco_Residencial()); 
                        document.forms[1].elements["funcionarios|NRO_RESIDENCIAL"].value = new String(newfuncionario.get_Numero_Residencia()); 
                        document.forms[1].elements["funcionarios|BAIRRO_RESIDENCIA"].value = new String(newfuncionario.get_Bairro_Residencia()); 
                        document.forms[1].elements["funcionarios|CIDADE_RESIDENCIA"].value = new String(newfuncionario.get_Cidade_Residencia()); 
                        document.forms[1].elements["funcionarios|UF_RESIDENCIA"].value = new String(newfuncionario.get_UF_Residencia()); 
                        document.forms[1].elements["funcionarios|CEP_RESIDENCIA"].value = new String(newfuncionario.get_CEP_Residencia()); 
                        document.forms[1].elements["funcionarios|GRAU_EXPOSICAO"].value = new String(newfuncionario.get_Grau_Exposicao()); 
                        document.forms[1].elements["funcionarios|GRAU_RISCO"].value = new String(newfuncionario.get_Grau_Risco()); 
                        document.forms[1].elements["funcionarios|TITULO_ELEITORAL"].value = new String(newfuncionario.get_Titulo_Eleitoral()); 
                        document.forms[1].elements["funcionarios|ZONA_ELEITORAL"].value = new String(newfuncionario.get_Zona_Eleitoral()); 
                        document.forms[1].elements["funcionarios|NUMERO_NIT"].value = new String(newfuncionario.get_Numero_NIT()); 
                        document.forms[1].elements["funcionarios|DATA_NASCIMENTO"].value = new String(newfuncionario.get_Data_Nascimento()); 
                        document.forms[1].elements["funcionarios|SEXO"].value = new String(newfuncionario.get_Sexo()); 
                        document.forms[1].elements["funcionarios|REVEZAMENTO"].value = new String(newfuncionario.get_Revezamento()); 
                        document.forms[1].elements["funcionarios|CODIGO_GFIP"].value = new String(newfuncionario.get_Codigo_GFIP()); 
                        document.forms[3].elements["txt_log_data_cadastro"].value = new String(newfuncionario.get_Data_Cadastro());                
                        document.forms[3].elements["txt_log_ultima_atualizacao"].value = new String(newfuncionario.get_Ultima_Atualizacao());                     
                        document.forms[3].elements["txt_log_ultimo_usuario"].value = new String(newfuncionario.get_Ultimo_Usuario());                
                       
                        exibir_historicos();                      
                }
            }
            
            function exibir_historicos(){
               //historico 
                codigo_funcionario=document.forms[1].elements['funcionarios|CODIGO_FUNCIONARIO'].value;
                campos_chave=Array("CODIGO_EMPRESA","CODIGO_FUNCIONARIO");
                valores_chave=Array(empresa_ativa,codigo_funcionario);
                buscar_registros(window,'funcionarios_historico_exames','Consulta_Historico_Exames',campos_chave,valores_chave,false,Array("=","="),newfunchistexam);
                for(conty=0;conty<newfunchistexam.length();conty++){
                    if (conty>0){
                        if (conty<newfunchistexam.length()){
                           botao=document.getElementById('insere_historico_exames');
                           insere(botao);
                        }
                        
                        document.forms[1].elements['funcionarios_historico_exames|DATA_EXAME[]'][conty].value=newfunchistexam.get_Data_Exame(conty);
                        document.forms[1].elements['funcionarios_historico_exames|DATA_PROXIMO_EXAME[]'][conty].value=newfunchistexam.get_Data_Proximo_Exame(conty);
                        document.forms[1].elements['funcionarios_historico_exames|TIPO_EXAME[]'][conty].value=newfunchistexam.get_Tipo_Exame(conty);
                        carrega_natureza(document.forms[1].elements['funcionarios_historico_exames|NATUREZA_EXAME[]'][conty]);
                        document.forms[1].elements['funcionarios_historico_exames|NATUREZA_EXAME[]'][conty].value=newfunchistexam.get_Natureza_Exame(conty);
                        document.forms[1].elements['funcionarios_historico_exames|RESULTADO[]'][conty].value=newfunchistexam.get_Resultado(conty);
                        carrega_profissional(document.forms[1].elements['funcionarios_historico_exames|CODIGO_PROFISSIONAL_RESPONSAVEL[]'][conty]);
                        document.forms[1].elements['funcionarios_historico_exames|CODIGO_PROFISSIONAL_RESPONSAVEL[]'][conty].value=newfunchistexam.get_Codigo_Profissional_Responsavel(conty);
                        document.forms[1].elements['funcionarios_historico_exames|NIT_PROFISSIONAL_RESPONSAVEL[]'][conty].value=newfunchistexam.get_Nit_Profissional_Responsavel(conty);
                        
                    }    
                else{
                        document.forms[1].elements['funcionarios_historico_exames|DATA_EXAME[]'].value=newfunchistexam.get_Data_Exame(0);
                        document.forms[1].elements['funcionarios_historico_exames|DATA_PROXIMO_EXAME[]'].value=newfunchistexam.get_Data_Proximo_Exame(0);
                        document.forms[1].elements['funcionarios_historico_exames|TIPO_EXAME[]'].value=newfunchistexam.get_Tipo_Exame(0);
                        carrega_natureza(document.forms[1].elements['funcionarios_historico_exames|NATUREZA_EXAME[]']);
                        document.forms[1].elements['funcionarios_historico_exames|NATUREZA_EXAME[]'].value=newfunchistexam.get_Natureza_Exame(0);
                        document.forms[1].elements['funcionarios_historico_exames|RESULTADO[]'].value=newfunchistexam.get_Resultado(0);
                        carrega_profissional(document.forms[1].elements['funcionarios_historico_exames|CODIGO_PROFISSIONAL_RESPONSAVEL[]']);
                        document.forms[1].elements['funcionarios_historico_exames|CODIGO_PROFISSIONAL_RESPONSAVEL[]'].value=newfunchistexam.get_Codigo_Profissional_Responsavel(0);
                        document.forms[1].elements['funcionarios_historico_exames|NIT_PROFISSIONAL_RESPONSAVEL[]'].value=newfunchistexam.get_Nit_Profissional_Responsavel(0);
                        z=0;
                    
                }
                }
                //
                buscar_registros(window,'funcionarios_monitoracao_biologica','Consulta_Historico_Monitoracao',campos_chave,valores_chave,false,Array("=","="),newfuncmonbiol);
                for(conty=0;conty<newfuncmonbiol.length();conty++){
                    if (conty>0){
                        if (conty<newfuncmonbiol.length()){
                           botao=document.getElementById('insere_monitoracao_biologica');
                           insere(botao);
                        }
                        
                        document.forms[1].elements['funcionarios_monitoracao_biologica|DATA_INICIAL[]'][conty].value=newfuncmonbiol.get_Data_Inicial(conty);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|DATA_FINAL[]'][conty].value=newfuncmonbiol.get_Data_Final(conty);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|TIPO_EXAME[]'][conty].value=newfuncmonbiol.get_Tipo_Exame(conty);
                        carrega_natureza(document.forms[1].elements['funcionarios_monitoracao_biologica|NATUREZA_EXAME[]'][conty]);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|NATUREZA_EXAME[]'][conty].value=newfuncmonbiol.get_Natureza_Exame(conty);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|DESCRICAO_RESUMIDA[]'][conty].value=newfuncmonbiol.get_Descricao_Resumida(conty);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|RESULTADO[]'][conty].value=newfuncmonbiol.get_Resultado(conty);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|EXAME_R_S[]'][conty].value=newfuncmonbiol.get_Exame_R_S(conty);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|DATA_PROXIMO_EXAME[]'][conty].value=newfuncmonbiol.get_Data_Proximo_Exame(conty);
                        carrega_profissional(document.forms[1].elements['funcionarios_monitoracao_biologica|CODIGO_PROFISSIONAL_RESPONSAVEL[]'][conty]);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|CODIGO_PROFISSIONAL_RESPONSAVEL[]'][conty].value=newfuncmonbiol.get_Codigo_Profissional_Responsavel(conty);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|NIT_PROFISSIONAL_RESPONSAVEL[]'][conty].value=newfuncmonbiol.get_Nit_Profissional_Responsavel(conty);
                        
                    }    
                else{
                        document.forms[1].elements['funcionarios_monitoracao_biologica|DATA_INICIAL[]'].value=newfuncmonbiol.get_Data_Inicial(0);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|DATA_FINAL[]'].value=newfuncmonbiol.get_Data_Final(0);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|TIPO_EXAME[]'].value=newfuncmonbiol.get_Tipo_Exame(0);
                        carrega_natureza(document.forms[1].elements['funcionarios_monitoracao_biologica|NATUREZA_EXAME[]']);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|NATUREZA_EXAME[]'].value=newfuncmonbiol.get_Natureza_Exame(0);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|DATA_PROXIMO_EXAME[]'].value=newfuncmonbiol.get_Data_Proximo_Exame(0);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|DESCRICAO_RESUMIDA[]'].value=newfuncmonbiol.get_Descricao_Resumida(0);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|RESULTADO[]'].value=newfuncmonbiol.get_Resultado(0);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|EXAME_R_S[]'].value=newfuncmonbiol.get_Exame_R_S(0);
                        carrega_profissional(document.forms[1].elements['funcionarios_monitoracao_biologica|CODIGO_PROFISSIONAL_RESPONSAVEL[]']);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|CODIGO_PROFISSIONAL_RESPONSAVEL[]'].value=newfuncmonbiol.get_Codigo_Profissional_Responsavel(0);
                        document.forms[1].elements['funcionarios_monitoracao_biologica|NIT_PROFISSIONAL_RESPONSAVEL[]'].value=newfuncmonbiol.get_Nit_Profissional_Responsavel(0);
                    
                }
                }
                buscar_registros(window,'funcionarios_historico_afastamentos','Consulta_Historico_Afastamentos',campos_chave,valores_chave,false,Array("=","="),newfunchistafast);
                for(conty=0;conty<newfunchistafast.length();conty++){
                    if (conty>0){
                        if (conty<newfunchistafast.length()){
                           botao=document.getElementById('insere_historico_afastamento');
                           insere(botao);
                        }
                        
                        document.forms[1].elements['funcionarios_historico_afastamentos|DATA_INICIO_AFASTAMENTO[]'][conty].value=newfunchistafast.get_Data_Inicio_Afastamento(conty);
                        document.forms[1].elements['funcionarios_historico_afastamentos|DATA_TERMINO_AFASTAMENTO[]'][conty].value=newfunchistafast.get_Data_Fim_Afastamento(conty);
                        carrega_unidades(document.forms[1].elements['funcionarios_historico_afastamentos|UNIDADE_AFASTAMENTO[]'][conty]);
                        document.forms[1].elements['funcionarios_historico_afastamentos|UNIDADE_AFASTAMENTO[]'][conty].value=newfunchistafast.get_Unidade_Afastamento(conty);
                        carrega_setores(document.forms[1].elements['funcionarios_historico_afastamentos|SETOR_AFASTAMENTO[]'][conty]);
                        document.forms[1].elements['funcionarios_historico_afastamentos|SETOR_AFASTAMENTO[]'][conty].value=newfunchistafast.get_Setor_Afastamento(conty);
                        carrega_cargos(document.forms[1].elements['funcionarios_historico_afastamentos|CARGO_AFASTAMENTO[]'][conty]);
                        document.forms[1].elements['funcionarios_historico_afastamentos|CARGO_AFASTAMENTO[]'][conty].value=newfunchistafast.get_Cargo_Afastamento(conty);
                        carrega_funcoes(document.forms[1].elements['funcionarios_historico_afastamentos|FUNCAO_AFASTAMENTO[]'][conty]);
                        document.forms[1].elements['funcionarios_historico_afastamentos|FUNCAO_AFASTAMENTO[]'][conty].value=newfunchistafast.get_Funcao_Afastamento(conty);
                        document.forms[1].elements['funcionarios_historico_afastamentos|CNPJ_CEI[]'][conty].value=newfunchistafast.get_CNPJ_CEI(conty);
                        document.forms[1].elements['funcionarios_historico_afastamentos|CAT[]'][conty].value=newfunchistafast.get_CAT(conty);
                        
                        
                    }    
                else{
                        document.forms[1].elements['funcionarios_historico_afastamentos|DATA_INICIO_AFASTAMENTO[]'].value=newfunchistafast.get_Data_Inicio_Afastamento(0);
                        document.forms[1].elements['funcionarios_historico_afastamentos|DATA_TERMINO_AFASTAMENTO[]'].value=newfunchistafast.get_Data_Fim_Afastamento(0);
                        carrega_unidades(document.forms[1].elements['funcionarios_historico_afastamentos|UNIDADE_AFASTAMENTO[]']);
                        document.forms[1].elements['funcionarios_historico_afastamentos|UNIDADE_AFASTAMENTO[]'].value=newfunchistafast.get_Unidade_Afastamento(0);
                        carrega_setores(document.forms[1].elements['funcionarios_historico_afastamentos|SETOR_AFASTAMENTO[]']);
                        document.forms[1].elements['funcionarios_historico_afastamentos|SETOR_AFASTAMENTO[]'].value=newfunchistafast.get_Setor_Afastamento(0);
                        carrega_cargos(document.forms[1].elements['funcionarios_historico_afastamentos|CARGO_AFASTAMENTO[]']);
                        document.forms[1].elements['funcionarios_historico_afastamentos|CARGO_AFASTAMENTO[]'].value=newfunchistafast.get_Cargo_Afastamento(0);
                        carrega_funcoes(document.forms[1].elements['funcionarios_historico_afastamentos|FUNCAO_AFASTAMENTO[]']);
                        document.forms[1].elements['funcionarios_historico_afastamentos|FUNCAO_AFASTAMENTO[]'].value=newfunchistafast.get_Funcao_Afastamento(0);
                        document.forms[1].elements['funcionarios_historico_afastamentos|CAT[]'].value=newfunchistafast.get_CAT(0);
                        document.forms[1].elements['funcionarios_historico_afastamentos|CNPJ_CEI[]'].value=newfunchistafast.get_CNPJ_CEI(0);
                        
                    
                }
                }
                
                condicao=Array("=","=");
                buscar_registros(window,'funcionarios_historico_lotacao_atribuicao','Consulta_Historico_Atribuicao',campos_chave,valores_chave,false,condicao,newfunchistlotatr);
                for(conty=0;conty<newfunchistlotatr.length();conty++){
                    if (conty>0){
                        if (conty<newfunchistlotatr.length()){
                           botao=document.getElementById('insere_historico_lotacao');
                           insere(botao);
                        }
                        
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|DATA_INICIO_ATRIBUICAO[]'][conty].value=newfunchistlotatr.get_Data_Inicio_Atribuicao(conty);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|DATA_TERMINO_ATRIBUICAO[]'][conty].value=newfunchistlotatr.get_Data_Fim_Atribuicao(conty);
                        carrega_unidades(document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|UNIDADE_ATRIBUICAO[]'][conty]);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|UNIDADE_ATRIBUICAO[]'][conty].value=newfunchistlotatr.get_Unidade_Atribuicao(conty);
                        carrega_setores(document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CODIGO_SETOR_ATRIBUICAO[]'][conty]);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CODIGO_SETOR_ATRIBUICAO[]'][conty].value=newfunchistlotatr.get_Setor_Atribuicao(conty);
                        carrega_cargos(document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CARGO_ATRIBUICAO[]'][conty]);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CARGO_ATRIBUICAO[]'][conty].value=newfunchistlotatr.get_Cargo_Atribuicao(conty);
                        carrega_funcoes(document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|FUNCAO_ATRIBUICAO[]'][conty]);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|FUNCAO_ATRIBUICAO[]'][conty].value=newfunchistlotatr.get_Funcao_Atribuicao(conty);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CODIGO_CBO[]'][conty].value=newfunchistlotatr.get_Codigo_CBO(conty);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CODIGO_GFIP[]'][conty].value=newfunchistlotatr.get_Codigo_Gfip(conty);

                        
                    }    
                else{
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|DATA_INICIO_ATRIBUICAO[]'].value=newfunchistlotatr.get_Data_Inicio_Atribuicao(0);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|DATA_TERMINO_ATRIBUICAO[]'].value=newfunchistlotatr.get_Data_Fim_Atribuicao(0);
                        carrega_unidades(document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|UNIDADE_ATRIBUICAO[]']);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|UNIDADE_ATRIBUICAO[]'].value=newfunchistlotatr.get_Unidade_Atribuicao(0);
                        carrega_setores(document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CODIGO_SETOR_ATRIBUICAO[]']);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CODIGO_SETOR_ATRIBUICAO[]'].value=newfunchistlotatr.get_Setor_Atribuicao(0);
                        carrega_cargos(document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CARGO_ATRIBUICAO[]']);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CARGO_ATRIBUICAO[]'].value=newfunchistlotatr.get_Cargo_Atribuicao(0);
                        carrega_funcoes(document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|FUNCAO_ATRIBUICAO[]']);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|FUNCAO_ATRIBUICAO[]'].value=newfunchistlotatr.get_Funcao_Atribuicao(0);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CODIGO_CBO[]'].value=newfunchistlotatr.get_Codigo_CBO(0);
                        document.forms[1].elements['funcionarios_historico_lotacao_atribuicao|CODIGO_GFIP[]'].value=newfunchistlotatr.get_Codigo_Gfip(0);

                    
                }
                }      
                condicao=Array("=","=");
                buscar_registros(window,'funcionarios_profissiografia','Consulta_Funcionarios_Profissiografia',campos_chave,valores_chave,false,condicao,newfuncionariosprofissiografia);
                for(conty=0;conty<newfuncionariosprofissiografia.length();conty++){
                    if (conty>0){
                        if (conty<newfuncionariosprofissiografia.length()){
                           botao=document.getElementById('insere_historico_profissiografia');
                           insere(botao);
                        }
                        
                        document.forms[1].elements['funcionarios_profissiografia|DATA_INICIO_ATIVIDADE[]'][conty].value=newfuncionariosprofissiografia.get_Data_Inicio_Atividade(conty);
                        document.forms[1].elements['funcionarios_profissiografia|DATA_FIM_ATIVIDADE[]'][conty].value=newfuncionariosprofissiografia.get_Data_Fim_Atividade(conty);
                        carregar_atividades(document.forms[1].elements['funcionarios_profissiografia|DESCRICAO_RESUMIDA_ATIVIDADE[]'][conty]);
                        document.forms[1].elements['funcionarios_profissiografia|DESCRICAO_RESUMIDA_ATIVIDADE[]'][conty].value=newfuncionariosprofissiografia.get_Descricao_Resunida_Atividade(conty);
                        document.forms[1].elements['funcionarios_profissiografia|DESCRICAO_COMPLETA_ATIVIDADE[]'][conty].value=newfuncionariosprofissiografia.get_Descricao_Completa_Atividade(conty);
                        
                    }    
                else{
                        document.forms[1].elements['funcionarios_profissiografia|DATA_INICIO_ATIVIDADE[]'].value=newfuncionariosprofissiografia.get_Data_Inicio_Atividade(0);
                        document.forms[1].elements['funcionarios_profissiografia|DATA_FIM_ATIVIDADE[]'].value=newfuncionariosprofissiografia.get_Data_Fim_Atividade(0);
                        carregar_atividades(document.forms[1].elements['funcionarios_profissiografia|DESCRICAO_RESUMIDA_ATIVIDADE[]']);
                        document.forms[1].elements['funcionarios_profissiografia|DESCRICAO_RESUMIDA_ATIVIDADE[]'].value=newfuncionariosprofissiografia.get_Descricao_Resunida_Atividade(0);
                        document.forms[1].elements['funcionarios_profissiografia|DESCRICAO_COMPLETA_ATIVIDADE[]'].value=newfuncionariosprofissiografia.get_Descricao_Completa_Atividade(0);
                     
                }
                } 
                 buscar_registros(window,'Funcionario_Historico_Fatores_Risco','Consulta_Fatores_de_Riscos',campos_chave,valores_chave,false,Array("=","="),newfuncionariosexposicaofatoresriscos);
                for(conty=0;conty<newfuncionariosexposicaofatoresriscos.length();conty++){
                    if (conty>0){
                        if (conty<newfuncionariosexposicaofatoresriscos.length()){
                           botao=document.getElementById('insere_historico_exposicao');
                           insere(botao);
                        }
                        
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|DATA_INICIO_EXPOSICAO[]'][conty].value=newfuncionariosexposicaofatoresriscos.get_Data_inicio_exposicao(conty);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|DATA_FIM_EXPOSICAO[]'][conty].value=newfuncionariosexposicaofatoresriscos.get_Data_fim_exposicao(conty);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|TIPO_EXPOSICAO[]'][conty].value=newfuncionariosexposicaofatoresriscos.get_Tipo_exposicao(conty);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|FATOR_RISCO[]'][conty].value=newfuncionariosexposicaofatoresriscos.get_Fator_risco(conty);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|TECNICA_UTILIZADA[]'][conty].value=newfuncionariosexposicaofatoresriscos.get_Tecnica_utilizada(conty);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|INTENSIDADE_CONCENTRACAO[]'][conty].value=newfuncionariosexposicaofatoresriscos.get_Intensidade_concentracao(conty);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|EPC_EFICAZ[]'][conty].value=newfuncionariosexposicaofatoresriscos.get_Epc_eficaz(conty);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|EPI_EFICAZ[]'][conty].value=newfuncionariosexposicaofatoresriscos.get_Epi_eficaz(conty);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|CA_EPI[]'][conty].value=newfuncionariosexposicaofatoresriscos.get_Ca_epi(conty);
                        
                    }    
                else{
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|DATA_INICIO_EXPOSICAO[]'].value=newfuncionariosexposicaofatoresriscos.get_Data_inicio_exposicao(0);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|DATA_FIM_EXPOSICAO[]'].value=newfuncionariosexposicaofatoresriscos.get_Data_fim_exposicao(0);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|TIPO_EXPOSICAO[]'].value=newfuncionariosexposicaofatoresriscos.get_Tipo_exposicao(0);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|FATOR_RISCO[]'].value=newfuncionariosexposicaofatoresriscos.get_Fator_risco(0);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|TECNICA_UTILIZADA[]'].value=newfuncionariosexposicaofatoresriscos.get_Tecnica_utilizada(0);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|INTENSIDADE_CONCENTRACAO[]'].value=newfuncionariosexposicaofatoresriscos.get_Intensidade_concentracao(0);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|EPC_EFICAZ[]'].value=newfuncionariosexposicaofatoresriscos.get_Epc_eficaz(0);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|EPI_EFICAZ[]'].value=newfuncionariosexposicaofatoresriscos.get_Epi_eficaz(0);
                        document.forms[1].elements['funcionarios_exposicao_fatores_riscos|CA_EPI[]'].value=newfuncionariosexposicaofatoresriscos.get_Ca_epi(0);
                    
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
                                opt.text="Selecione um ítem";
                                opt.value="";
                             }
                             else {
                                opt.text=cnae[y]+" "+descricao[y];
                                opt.value=cnae[y];
                             }
                             
                             document.forms[1].elements['CODIGO_CNAE'].add(opt);
                        }
                        document.forms[1].elements['CODIGO_CNAE'].value=newfuncionario.get_CNAE();

            }
           

            
            var acao='';
            function grava_registro(){
             if (confirm("Confirma a manuten��o do registro?")){
                document.forms[1].action="../PHP/Funcionarios_Class.php?acao=I";
                document.forms[1].submit();
             }
            }
            function apaga_registro(){
                if (confirm("Confirma a exclus�o do registro?")){
                    document.forms[1].action="../PHP/Funcionarios_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
             function proximo_registro(campo,visao){
                codfunc=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codfunc,Array(">","="),visao,visao,'Busca_Funcionario',false,newfuncionario);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codfunc=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codfunc,Array("<","="),visao,visao,'Busca_Funcionario',false,newfuncionario);                    
                exibe_campos();
            } 
            function imprime_registro(){
  
          if (confirm("Imprimir registro corrente?")){
                document.forms[1].action="../Reports/Relatorio_Funcionario.php";
                document.forms[1].submit();
             }
       }   
            function imprime_ppp(){
  
          if (confirm("Imprimir ppp para o funcionario?")){
                
                document.forms[1].action="../Reports/Relatorio_PPP.php";
                document.forms[1].submit();
             }
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
                    a.innerHTML+="|"+newLogradouro.get_CEP(y).toString().substr(0,10);
                    a.innerHTML+="|"+newLogradouro.get_UF(y).toString().substr(0,2)+"</BR>";
                    newli.setAttribute('onclick',"captura_valor(this)");
                    newli.setAttribute('width', 'auto');
                    newli.appendChild(a);
                    newul.appendChild(newli);
                    document.getElementById('bulb_gif_endereco').style.display='block';
                    
                    
                }     
                newdiv.appendChild(newul);
                newdiv.setAttribute('style',divestilo);
                clearInterval(i);
                primeira_vez=false;
            }
			
			
 function captura_valor2(campo){
                if (navigator.appName!='Microsoft Internet Explorer'){
                    varx=campo.children[0].textContent.toString().split('|');
                }
                else {
                    varx=campo.innerText.toString().split('|');
                }
                document.forms[1].elements["funcionarios|TIPO_LOGRADOURO"].value=varx[0];
                document.forms[1].elements["funcionarios|ENDERECO_RESIDENCIAL"].value = varx[1];
                document.forms[1].elements["funcionarios|BAIRRO_RESIDENCIA"].value=varx[2];
                document.forms[1].elements["funcionarios|CIDADE_RESIDENCIA"].value=varx[3];
                document.forms[1].elements["funcionarios|CEP_RESIDENCIA"].value=varx[4]; 
                document.getElementById('div_consulta').style.display='none';
				document.getElementById('bulb_gif_endereco').style.display='none';

            }
            
            function dispara(campo){
              if (!primeira_vez) {
                 primeira_vez=true;
                 i=setTimeout("Busca_CEP_Endereco()",2000);
              } 

            }
			
			
function carrega_unidades(campo){
                 empativa=<?php echo $_SESSION['empresa_ativa']?>+"";
                 buscar_registros(window,'estrutura_organizacional',"Carrega_Estrutura",'CODIGO_EMPRESA',empativa,false,'=',newEstruturas);
                 codigo_estrutura=campo.value;
                 // Inicializa select option 
                 campo.length=0;
                 // Loop para carregar select option
                 document.getElementById('unidimg').style.visibility='visible';
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
                            return;
                            
                        }
                       campo.value=codigo_estrutura;
                       document.getElementById('unidimg').style.visibility='hidden'; 

            }			
            function carrega_setores(campo){
                 document.getElementById('setorimg').style.visibility='visible';
                 chave=Array('UNIDADE');
                 Unidade=document.forms[1].elements['funcionarios|UNIDADE'].value;
                 valor=Array(Unidade);
                 buscar_registros(window,"setores","Carrega_Setores",chave,valor,true,Array("="),newSetores);
                 campo.length=0;
		 campo.add(new Option('',0));
                 for (y=1;y <=newSetores.length();y++){
                             opt=new Option(newSetores.get_Nome_Setor([y-1]).substr(0,100),newSetores.get_Codigo_Setor([y-1]));
                             campo.add(opt);
                        }
                 document.getElementById('setorimg').style.visibility='hidden';
                 
            }    
            
            function insere(node){
                divpai=node.parentNode.parentNode;
                numnode=divpai.getElementsByTagName('div').length;
                nodefilho=divpai.getElementsByTagName('div')[0].cloneNode(true);
                nodefilho.setAttribute('id','div_'+(numnode+1));
                cont=0;
                while(cont<nodefilho.getElementsByTagName('input').length){
                    nodefilho.getElementsByTagName('input')[cont]="";
                    cont++;
                }
                cont=0;
                while(cont<nodefilho.getElementsByTagName('select').length){
                    //nodefilho.getElementsByTagName('select')[cont].length=0;
                    cont++;
                }
                divpai.appendChild(nodefilho);
                
                
            }
            function remove(node){
               divpai=node.parentNode.parentNode;
               divfilho=node.parentNode;
               divpai.removeChild(divfilho);
            }
            function carregar_atividades(campo){
                    buscar_registros(window,'atividades','Carrega_Atividades','','',false,'',newativs);
                    oldvalue=campo.value;
                    campo.length=0;
                    campo.add(new Option('Selecione uma op��o',0));
                    for(cont=0;cont<newativs.length();cont++){
			campo.add(new Option(newativs.get_Descricao_Resumida_Atividade(cont),newativs.get_Codigo_Atividade(cont)));
                    }
                    campo.value=oldvalue;
            }         
            function onselect_atividade(campo){
                    divpai=campo.parentNode.parentNode.parentNode.parentNode.parentNode;
                    divpai.getElementsByTagName('textarea')[0].value=newativs.get_Descricao_Atividade(campo.selectedIndex-1);
            }
            function carrega_natureza(campo){
                 exame_atual=campo.value;
                  buscar_registros(window,"exame","Carrega_Exames",null,null,true,null,newexames);
                 campo.length=0;
                 campo.add(new Option('Selecione um exame','0'));
                 for(i=1;i <= newexames.length();i++){
                        campo.add(new Option(newexames.get_Nome(i-1),newexames.get_Codigo_Exame(i-1)));
                 }       
            }
            function carrega_profissional(campo){
                buscar_registros(window,"medicos","Carrega_Medicos",null,null,false,null,newmedicos);                
                campo.length=0;
                campo.add(new Option('Selecione um medico',0));
                for (numocur=0;numocur<newmedicos.length();numocur++){
                    campo.add(new Option(newmedicos.get_Nome_Profissional(numocur),newmedicos.get_Codigo_Medico(numocur)));
                }
            
            }
            function onselect_profissional(campo){
                buscar_registro(window,'CODIGO_MEDICO', campo.value,Array("="),'medicos','medicos','Busca_Medico',false,newmedico);
                linha_atualizar=campo.parentNode.parentNode;
                coluna_atualizar=campo.parentNode;
                numero_coluna=coluna_atualizar.cellIndex;
                campo_atualizar=linha_atualizar.cells[numero_coluna+1];
                campo_atualizar.firstChild.value=newmedico.get_Nit();
            }
			
</script>    
<script type="text/javascript" src="../classes/js/Abas.js"></script>
</head>
<body>
<center>
  <h1 class="style1">Cadastro de Funcion&aacute;rios </h1>
</center>
    <div id="menu">
  <form id="frm_barra_tarefas" action="" >
       <button type="button"  onclick="window.location.reload(true);document.forms[1].elements['CODIGO_FUNCIONARIO'].focus();">
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
     
      <button  type="button" onclick="registro_anterior(document.forms[1].elements['CODIGO_FUNCIONARIO'],'funcionarios_codigo_desc')">
      <table>
           <tr>
           <td height="42"><img src="../images/barra_ferramentas/left.png" height="35" width="45" /></td>
           </tr>
           <tr>
           <td height="16">Anterior</td>
           </tr>
      </table>
      </button>
      <button  type="button" onclick="proximo_registro(document.forms[1].elements['CODIGO_FUNCIONARIO'],'funcionarios_codigo_asc')">
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
          <td height="18">Imprimir Ficha</td>
          </tr>
     </table>
     </button>
     <button  type="button" onclick="imprime_ppp();">
     <table>
          <tr>
          <td height="42"><img src="../images/previdencia_social.png" height="40" width="40" /></td>
          </tr>
          <tr>
          <td height="18">Imprimir PPP</td>
          </tr>
     </table>
     </button>
      
      
     <button  type="button" onclick="window.location.reload(true);document.forms[1].elements['CODIGO_FUNCIONARIO'].focus();">
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
<link href="../css/designer.css" type="text/css" rel="stylesheet" />
<form id="frm_funcionarios" action="empresas.php" method="POST">
  



    <br/>
        <br/>
        <table width="80%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                Dados Cadastrais</td>                
                <td id="celAbaDocumentacao" align="center" valign="middle" width="10%" class="abainativa" onMouseOver="trataMouseAba( this );" onClick="trataCliqueAba( this.id );">
                    Documenta&ccedil;&atilde;o                
                </td>
                <td id="celAbaExamesMedicos" align="center" valign="middle" width="10%" class="abainativa" onMouseOver="trataMouseAba( this );" onClick="trataCliqueAba( this.id );">
                    Hist�rico de Exames M�dicos
                </td>
                <td id="celAbaMonitoracaoBiologica" align="center" valign="middle" width="10%" class="abainativa" onMouseOver="trataMouseAba( this );" onClick="trataCliqueAba( this.id );">
                    Monitora��o Biol�gica
                </td>
               
                <td id="celAbaHistoricoAfastamentos" align="center" valign="middle" width="10%" class="abainativa" onMouseOver="trataMouseAba( this );" onClick="trataCliqueAba( this.id );">
                    Hist�rico de Afastamentos
                </td>
                <td id="celAbaHistoricoFuncoes" align="center" valign="middle" width="10%" class="abainativa" onMouseOver="trataMouseAba( this );" onClick="trataCliqueAba( this.id );">
                    Lota��o e Atribui��o
                </td>
                				
                <td id="celAbaProfissiografia" align="center" valign="middle" width="10%" class="abainativa" onMouseOver="trataMouseAba( this );" onClick="trataCliqueAba( this.id );">
                    Profissiografia
                </td>
                <td id="celAbaExposicaoFatoresRisco" align="center" valign="middle" width="10%" class="abainativa" onMouseOver="trataMouseAba( this );" onClick="trataCliqueAba( this.id );">
                    Exposi��o a Fatores de Risco
                </td>
                                
            </tr>
        </table>	 
  <div id="divCadastro" style="display: block;overflow:auto;width:99%" >
    <table width="95%" border="0" class="tabela"  bgcolor="WHITESMOKE">
      <tr>
        <td>C&oacute;digo da Empresa </td>
        <td width="150"><input class="input" name="funcionarios|CODIGO_EMPRESA" type="text" readonly="readonly" size="10" maxlength="10" value="<?php echo $_SESSION['empresa_ativa']?>" /></td>
        <td colspan="2"><input class="input" name="funcionarios|NOME_EMPRESA" disabled="disabled" type="text" size="50" maxlength="50" value="<?php echo $_SESSION['nome_empresa_ativa']?>"  /></td>
        <td>&nbsp;</td>
        <td colspan="2">C&oacute;digo do Funcion&aacute;rio</td>
        <td width="111"><input class="input" name="funcionarios|CODIGO_FUNCIONARIO" type="text" size="10" maxlength="10" onkeypress="return entrada_numerica_inteira(this,event)"  onblur="pesquisa_campo(this)" />
        <img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['funcionarios|CODIGO_FUNCIONARIO'],document.forms[1].elements['funcionarios|CODIGO_FUNCIONARIO'])" width="10px" height="10px"/></td>
        <td colspan="3">Matr&iacute;cula do Funcion&aacute;rio</td>
        <td colspan="5"><input class="input" name="funcionarios|MATRICULA_FUNCIONARIO" type="text" size="10" maxlength="10" /></td>
      </tr>
      <tr>
        <td width="75">Nome do Funcion&aacute;rio</td>
        <td colspan="3" ><input class="input" name="funcionarios|NOME_FUNCIONARIO" type="text" size="50" maxlength="50" />
            <img src="../images/bulb_gif.gif" width="15px" height="15px" name="bulb_gif_nome" id="bulb_gif_nome" onclick="mostra_lista(this)"/></td>
        <td width="30" >Situa&ccedil;&atilde;o</td>
        <td colspan="3" ><select class="input" name="funcionarios|SITUACAO">
          <option value=" " selected="selected"> </option>
          <option value="AT">(Ativo)</option>
          <option value="AF">Afastado</option>
          <option value="DM">Demitido</option>
          <option value="LC">Licenciado</option>
          <option value="OT">Outros</option>
                </select>
          Sexo  
          <select class="input" name="funcionarios|SEXO">
            <option value=" " selected="selected"> </option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select></td><td >&nbsp;</td>
        <td colspan="2" >Grau de Exposi&ccedil;&atilde;o</td>
        <td width="105" ><select class="input"  name="funcionarios|GRAU_EXPOSICAO">
            <option > </option>
            <option value="EVENTUAL">Eventual</option>
            <option value="HABITUAL">Habitual</option>
            <option value="INTERMITENTE">Intermitente</option>
            <option value="PERMANENTE">Permanente</option>
        </select></td>
        <td width="32" >Grau de Risco</td>
        <td width="41" ><select class="input" disabled="disabled" name="funcionarios|GRAU_RISCO">
        </select></td>
        <td colspan="2" >&nbsp;</td>
      </tr>
      <tr>
        <td>Cargo Funcion&aacute;rio </td>
        <td colspan="3"><select name="funcionarios|CARGO" class="input" onfocus="carrega_cargos(this)" style="width:250px">
          </select>        </td><td><img id="carg_img" src="../images/gears.gif" width="15px" height="15px" style="visibility:hidden"/></td>
        <td width="200">Fun&ccedil;&atilde;o Funcion&aacute;rio </td>
        <td colspan="4"><select name="funcionarios|FUNCAO" class="input" onfocus="carrega_funcoes(this)" style="width:250px">
        </select></td>
        <td width="54"><img id="funcimg" src="../images/gears.gif" width="15px" height="15px" style="visibility:hidden"/></td>
        <td width="105">&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        <td width="1">&nbsp;</td>
      </tr>
      <tr>
        <td width="75">Regime de Revezamento</td>
        <td><select name="funcionarios|REVEZAMENTO" style="width:150px" class="input">
            <option value=" " selected="selected"> </option>
            <option value="24 X 72 HORAS">24 x 72 horas</option>
            <option value="14 X 21 DIAS">14 x 21 dias</option>
            <option value="2 X 1 MESES">2 x 1 meses</option>
            <option value="8 X 4 DIAS">8 X 4 dias</option>
        </select></td>
        <td width="133">Unidade de Trabalho</td>
        <td width="165"><select name="funcionarios|UNIDADE" class="input" style="width:200px" onfocus="carrega_unidades(this)">
        </select></td>
        <td><img id="unidimg" src="../images/gears.gif" width="15px" height="15px" style="visibility:hidden"/></td>
        <td colspan="2">Setor de Trabalho</td>
        <td><select name="funcionarios|CODIGO_SETOR" onfocus="carrega_setores(this)" style="width:200px">
        </select></td>
		<td colspan="6"><img id="setorimg" src="../images/gears.gif" width="15px" height="15px" style="visibility:hidden"/></td>
		<td width="0"></td>
      </tr>
      <tr>
        <td colspan="39">&nbsp;</td>
      </tr>
    </table>
  </div>
  <div id="divDocumentacao" style="display: block">
            <table border="0" width="90%">
                <tr>
                  <td>
            	  <table width="100%" border="0" class="tabela"  bgcolor="WHITESMOKE">
                  <tr>
                    <td width="85">Numero CTPS </td>
                    <td width="75"><input class="input" name="funcionarios|NUMERO_CTPS" type="text" size="10" maxlength="10" /></td>
                    <td width="71">S&eacute;rie</td>
                    <td width="67"><input class="input" name="funcionarios|SERIE_CTPS" type="text" size="10" maxlength="10" /></td>
                    <td>Data de Emiss&atilde;o </td>
                    <td><input class="input" name="funcionarios|DATA_EMISSAO_CTPS" type="text" size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)" /></td>
                    <td>&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Tipo Logradouro</td>
                      <td colspan="2"><select class="input" name="funcionarios|TIPO_LOGRADOURO" type="text" onfocus="carrega_tipo_logradouro(this)" style='width:150px' >
                              <option> </option>
                              
                          </select></td>
                      <td>Endere�o</td>
                      <td colspan="3"><input class="input" name="funcionarios|ENDERECO_RESIDENCIAL" type="text" size="55" onkeypress="dispara(this);"/><img src="../images/bulb_gif.gif" width="15px" height="15px" name="bulb_gif_endereco" id="bulb_gif_endereco" onclick="mostra_lista(this)"/></td>
                      <td width="20">Nro</td>
                      <td width="64"><input class="input" name="funcionarios|NRO_RESIDENCIAL" type="text" size="10" /></td>
                      <td>Bairro</td>
                      <td colspan="2"><input class="input" name="funcionarios|BAIRRO_RESIDENCIA" type="text" /></td>
                  </tr>
                  <tr>    
                      <td>Municipio</td>
                      <td colspan="2"><input class="input" name="funcionarios|CIDADE_RESIDENCIA" type="text"/></td>
                      <td>UF</td>
                      <td colspan="3"><input class="input" name="funcionarios|UF_RESIDENCIA" type="text" size="3"/ ></td>
                      <td colspan="2">CEP</td>
                      <td colspan="3"><input class="input" name="funcionarios|CEP_RESIDENCIA" size="11" type="text"/></td>
                  </tr>
                      <tr>
                    <td>N&uacute;mero CPF </td>
                    <td colspan="3"><input class="input" name="funcionarios|NUMERO_CPF" type="text" size="18" maxlength="18" /></td>
                    <td width="146">N&uacute;mero RG </td>
                    <td colspan="2"><input class="input" name="funcionarios|NUMERO_RG" type="text" size="18" maxlength="18" /></td>
                    <td colspan="2">Data Expedi&ccedil;&atilde;o </td>
					<td width="62"><input class="input" name="funcionarios|DATA_EXPEDICAO" type="text" size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                      <td width="69">&Oacute;rg&atilde;o Expedidor</td>
                      <td width="73"><input class="input" name="funcionarios|ORGAO_EXPEDIDOR" type="text" size="10" maxlength="10" /></td>
                      </tr>

                  <tr>
                    <td>Data de Nascimento </td>
                    <td colspan="2"><input name="funcionarios|DATA_NASCIMENTO" class="input" type="text" size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                    <td width="67">Data de Admiss&atilde;o </td>
                    <td><input name="funcionarios|DATA_ADMISSAO" type="text" class="input" size="10" maxlength="10"  onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)" /></td>
                    <td>Data de Desligamento </td>
                    <td><input name="funcionarios|DATA_DESLIGAMENTO" type="text" size="10" class="input" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)" /></td>
                    <td colspan="2">&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                    <td width="66">&nbsp;</td>
                  </tr>
                  <tr>
                      <td>Zona Eleitoral</td>
                      <td colspan="2"><input class="input" type="text" name="funcionarios|ZONA_ELEITORAL"/></td>
                      <td>Titulo Eleitoral</td>
                      <td><input class="input" type="text" name="funcionarios|TITULO_ELEITORAL"/></td>
                      <td width="24">NIT</td>
                      <td width="107"><input class="input" type="text" name="funcionarios|NUMERO_NIT"/></td>
                      <td colspan="2">N&uacute;mero GFIP</td>
                      <td colspan="3"><input class="input" type="text" name="funcionarios|CODIGO_GFIP"/></td>
                  </tr>
                  <tr>
                    <td colspan="18">&nbsp;</td>
                  </tr>
                </table>  

                  </td>
                </tr>
          </table>
  </div> 
		
        <div id="divHistoricoAfastamentos" style="display: block;overflow:auto;height:500px">
            <div>
            <table border="0" width="99%" class="tabela" bgcolor="WHITESMOKE" >
                <tr>

                    <td width="7%">
                      Data inicial		            </td>
                    <td width="7%">
                       Data final                    </td>
                    <td width="15%">
                       CNPJ/CEI                    </td>
					<td width="36%">Unidade de Trabalho </td>
					<td width="35%">
					   Setor                    </td>              
              </tr>
			  <tr>
                  <td><input type="text" name="funcionarios_historico_afastamentos|DATA_INICIO_AFASTAMENTO[]" size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                  <td><input type="text" name="funcionarios_historico_afastamentos|DATA_TERMINO_AFASTAMENTO[]" size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                  <td><input type="text" name="funcionarios_historico_afastamentos|CNPJ_CEI[]" size="19"/></td>
                  <td><select  name="funcionarios_historico_afastamentos|UNIDADE_AFASTAMENTO[]" style="width:300px" onfocus="carrega_unidades(this)" >
                  </select></td>
                  <td><select  name="funcionarios_historico_afastamentos|SETOR_AFASTAMENTO[]" onfocus="carrega_setores(this)" style="width:350px">
                  </select></td>
			  </tr>
			  <tr>
					<td colspan="3">
					   Cargo                    </td>              
					<td width="36%">Fun&ccedil;&atilde;o</td>
					<td>N&uacute;mero CAT</td> 
			  </tr>

                
				<tr>
                  <td colspan="3"><select name="funcionarios_historico_afastamentos|CARGO_AFASTAMENTO[]" class="input" onfocus="carrega_cargos(this)" style="width:250px">
                  </select></td>
                  <td><select name="funcionarios_historico_afastamentos|FUNCAO_AFASTAMENTO[]" class="input" onfocus="carrega_funcoes(this)" style="width:250px">
                  </select></td>
				  <td><input type="text" name="funcionarios_historico_afastamentos|CAT[]" size="15"/></td>
				</tr>
          </table>
		  <table id="dethes_afastamento">
		  <tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td></td>
		  </tr>
		  </table>
		<button type="button" onclick="insere(this)" id="insere_historico_afastamento">+ Incluir Hist�rico</button>		
		<button type="button" onclick="remove(this)">- Remover Hist�rico</button>		
                
        </div>
            
        </div>
        <div id="divHistoricoFuncoes" style="display: block;overflow:auto;height:500px" >
            <div>
            <table border="0" width="100%" bgcolor="WHITESMOKE" >
                <tr>

                    <td width="6%">
                      Data inicial		            </td>
                    <td width="6%">
                       Data final                    </td>
                    <td width="14%">
                       CNPJ/CEI                    </td>
					<td width="37%">Unidade de Trabalho </td>
					<td colspan="2">
					   Setor                    </td>              
              </tr>
			  <tr>
                  <td><input type="text" name="funcionarios_historico_lotacao_atribuicao|DATA_INICIO_ATRIBUICAO[]" size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                  <td><input type="text" name="funcionarios_historico_lotacao_atribuicao|DATA_TERMINO_ATRIBUICAO[]" size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                  <td><input type="text" name="funcionarios_historico_lotacao_atribuicao|CNPJ_CEI[]" size="19"/></td>
                  <td><select  name="funcionarios_historico_lotacao_atribuicao|UNIDADE_ATRIBUICAO[]" style="width:300px" onfocus="carrega_unidades(this)" >
                  </select></td>
                  <td colspan="2"><select name="funcionarios_historico_lotacao_atribuicao|CODIGO_SETOR_ATRIBUICAO[]" onfocus="carrega_setores(this)" style="width:350px">
                  </select></td>
			  </tr>
			  <tr>
					<td colspan="3">
					   Cargo                    </td>              
					<td width="37%">Fun&ccedil;&atilde;o</td>
					<td>C�digo CBO</td>
					<td>C�digo GFIP</td>

			  </tr>
				<tr>
                  <td colspan="3"><select name="funcionarios_historico_lotacao_atribuicao|CARGO_ATRIBUICAO[]" class="input" onfocus="carrega_cargos(this)" style="width:250px" onchange="onselect_cargo(this)">
                  </select></td>
                  <td><select name="funcionarios_historico_lotacao_atribuicao|FUNCAO_ATRIBUICAO[]" class="input" onfocus="carrega_funcoes(this)" onchange="onselect_funcao(this)" style="width:250px">
                  </select></td>
				  <td width="6%"><input type="text" name="funcionarios_historico_lotacao_atribuicao|CODIGO_CBO[]" size="10" readonly="readonly"/></td>
				  <td width="31%"><input type="text" name="funcionarios_historico_lotacao_atribuicao|CODIGO_GFIP[]" size="10"/></td>

				</tr>
          </table>
       		<button type="button" onclick="insere(this)" id="insere_historico_lotacao">+ Incluir Hist�rico</button>		
    		<button type="button" onclick="remove(this)">- Remover Hist�rico</button>		
        </div>      

        </div>
<div id="divExamesMedicos" style="display: block;overflow:auto;height:500px">
    <div>        
    <table border="0" width="95%" bgcolor="WHITESMOKE" class="tabela">
                <tr>
                    <td width="10%">
                      Data do Exame		            </td>
                    <td width="10%">
                       Tipo do Exame</td>
                    <td width="10%">
                       Natureza do Exame</td>
                    
                    <td width="10%">
                       Resultado</td>                    
                    <td width="10%">
                      Data do Pr�ximo Exame</td>
                    <td width="10%">
                      Profissional Respons�vel</td>        
                    <td width="10%">
                      NIT Profissional Respons�vel</td>                    
                    
                </tr>
                <tr>
                  <td><input type="text" id="funcionarios_historico_exames|DATA_EXAME"  name="funcionarios_historico_exames|DATA_EXAME[]"  size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                  <td><select name="funcionarios_historico_exames|TIPO_EXAME[]">
        		    <option value=""></option>
                            <option value="AD">Admissional</option>
                            <option value="PR">Peri�dico</option>
                            <option value="AL">Altera��o Cargo/Fun��o</option>
                            <option value="RT">Retorno ao Trabalho</option>
                            <option value="DM">Demissional</option>
                          
                      </select></td>
                  <td><select name="funcionarios_historico_exames|NATUREZA_EXAME[]"  style="width:200px;" onfocus="carrega_natureza(this)">
        		    <option value=""></option>
                          
                      </select></td>
                  
                  <td><select name="funcionarios_historico_exames|RESULTADO[]">
        		    <option value=""></option>
                            <option value="NM">Normal</option>
                            <option value="AL">Alterado</option>
                            <option value="ES">Est�vel</option>
                            <option value="AG">Agravamento</option>
                            <option value="OC">Ocupacional</option>
                            <option value="NO">N�o-Ocupacional</option>
                      </select></td>
                  <td><input type="text" name="funcionarios_historico_exames|DATA_PROXIMO_EXAME[]" size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>                  
                  <td><select name="funcionarios_historico_exames|CODIGO_PROFISSIONAL_RESPONSAVEL[]" onfocus="carrega_profissional(this)" onchange="onselect_profissional(this)">
                      </select>
                   <td><input type="text" name="funcionarios_historico_exames|NIT_PROFISSIONAL_RESPONSAVEL[]"  size="10" readonly="readonly"/>     </tr>
        
          </table>
       		<button type="button" onclick="insere(this)" id="insere_historico_exames">+ Incluir Hist�rico</button>		
    		<button type="button" onclick="remove(this)" id="remove_historico_exames">- Remover Hist�rico</button>		
        
    </div>
  </div>           
<div id="divMonitoracaoBiologica" style="display: block;overflow:auto;height:500px">
    <div>        
    <table border="0" width="95%" bgcolor="WHITESMOKE" class="tabela">
                <tr>
                    <td width="10%">
                      Data Inicial		            </td>
                    <td width="10%">
                      Data Final		            </td>
                    <td width="10%">
                       Tipo do Exame</td>
                    <td width="10%">
                      Natureza		            </td>
                    <td width="10%">
                      Descri��o Resumida		            </td>
                    
                    <td width="10%">
                      Referencial/Sequencial           </td>

                    <td width="10%">
                       Resultado</td>                    
                    <td width="10%">
                      Data do Pr�ximo Exame</td>
                    <td width="10%">
                      Profissional Respons�vel</td>        
                    <td width="10%">
                      NIT Profissional Respons�vel</td>                    
                </tr>
                <tr>
                  <td><input type="text" name="funcionarios_monitoracao_biologica|DATA_INICIAL[]"size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                  <td><input type="text" name="funcionarios_monitoracao_biologica|DATA_FINAL[]"size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                  <td><select name="funcionarios_monitoracao_biologica|TIPO_EXAME[]">
                    <option value=""></option>
                    <option value="AD">Admissional</option>
                    <option value="PR">Peri�dico</option>
                    <option value="AL">Altera��o Cargo/Fun��o</option>
                    <option value="RT">Retorno ao Trabalho</option>
                    <option value="DM">Demissional</option>
                  </select></td>
                  <td><select name="funcionarios_monitoracao_biologica|NATUREZA_EXAME[]"  style="width:200px;" onfocus="carrega_natureza(this)">
        		    <option value=""></option>
                          
                      </select></td>

                  <td><input name="funcionarios_monitoracao_biologica|DESCRICAO_RESUMIDA[]" onfocus="carrega_natureza(this)" /></td>
                          

                    <td><select name="funcionarios_monitoracao_biologica|EXAME_R_S[]">
                    <option value=""></option>
                    <option value="R">Referencial</option>
                    <option value="S">Sequencial</option>
                  </select></td>
                  <td><select name="funcionarios_monitoracao_biologica|RESULTADO[]">
                    <option value=""></option>
                    <option value="NM">Normal</option>
                    <option value="AL">Alterado</option>
                    <option value="ES">Est�vel</option>
                    <option value="AG">Agravamento</option>
                    <option value="OC">Ocupacional</option>
                    <option value="NO">N�o-Ocupacional</option>
                  </select></td>                  
                  <td>
                      <input type="text" name="funcionarios_monitoracao_biologica|DATA_PROXIMO_EXAME[]" size="10" maxlength="10" onkeypress="return valida_data(this,event)"  onkeyup="return formata_data(this,'eu',event)"  />
                  </td>
                  
                  <td><select name="funcionarios_monitoracao_biologica|CODIGO_PROFISSIONAL_RESPONSAVEL[]" onfocus="carrega_profissional(this)" onchange="onselect_profissional(this)"></td>
                  </select>
                  
                  <td><input type="text" name="funcionarios_monitoracao_biologica|NIT_PROFISSIONAL_RESPONSAVEL[]" size="10" readonly="readonly" /></td>    </tr>
          </table>
       		<button type="button" onclick="insere(this)" id="insere_monitoracao_biologica">+ Incluir Hist�rico</button>		
    		<button type="button" onclick="remove(this)" id="remove_monitoracao_biologica">- Remover Hist�rico</button>		
        
    </div>
  </div>         
<div id="divProfissiografia" style="display: block;overflow:auto;height:500px">
    <div >        
    <table border="0" width="95%" bgcolor="WHITESMOKE" class="tabela">
                <tr>
                    <td width="10%">
                      Data inicial		            </td>
                    <td width="10%">
                       Data final                    </td>
                    <td width="80%">
                       Descri��o Resumida da Atividade       </td>
                    <td width="80%">
                       Descri��o Completa da Atividade       </td>
                    
                </tr>
                <tr>
                  <td><input type="text" name="funcionarios_profissiografia|DATA_INICIO_ATIVIDADE[]"size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                  <td><input type="text" name="funcionarios_profissiografia|DATA_FIM_ATIVIDADE[]"size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                  <td><select name="funcionarios_profissiografia|DESCRICAO_RESUMIDA_ATIVIDADE[]" style="width:500px" onfocus="carregar_atividades(this)" onchange="onselect_atividade(this)">
                  </select></td>
                  <td><textarea  name="funcionarios_profissiografia|DESCRICAO_COMPLETA_ATIVIDADE[]" rows="5" cols="50"></textarea></td>
                </tr>
       
        
          </table>
       		<button type="button" onclick="insere(this)" id="insere_historico_profissiografia">+ Incluir Hist�rico</button>		
    		<button type="button" onclick="remove(this)" >- Remover Hist�rico</button>		
        
    </div>
  </div>   
<div id="divExposicao" style="display: block;overflow:auto;height:500px">
    <div>        
    <table border="0" width="99%" bgcolor="WHITESMOKE" class="tabela">
                <tr>
                    <td width="9%">
                      Data inicial		            </td>
                    <td width="10%">
                       Data final                    </td>
                    <td width="11%">Tipo</td>
                    <td width="11%">
                       Fator de Risco                    </td>
                    <td width="18%">
                       Intensidade/Concentra��o                    </td>
                    <td width="32%">
                       T�cnica Utilizada                    </td>
                    <td width="7%">
                       EPC Eficaz                    </td>
                    <td width="5%">
                       EPI Eficaz                    </td>
                    <td width="8%">
                       CA.EPI                   </td>
                </tr>
        
                <tr>
                  <td><input type="text" name="funcionarios_exposicao_fatores_riscos|DATA_INICIO_EXPOSICAO[]" size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                  <td><input type="text" name="funcionarios_exposicao_fatores_riscos|DATA_FIM_EXPOSICAO[]" size="10" maxlength="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                  <td><select  name="funcionarios_exposicao_fatores_riscos|TIPO_EXPOSICAO[]">
		    <option value=""></option>
                    <option value="Eventual">Eventual</option>
		    <option value="Habitual">Habitual</option>
		    <option value="Intermitente">Intermitente</option>
		    <option value="Permanente">Permanente</option>
                          
                  </select></td>
                  <td><select  name="funcionarios_exposicao_fatores_riscos|FATOR_RISCO[]">
                    <option value=""></option>
                    <option value="RUIDO">RUIDO</option>
		    <option value="FRIO">FRIO</option>
		    <option value="CALOR">CALOR</option>
		    <option value="UMIDADE">UMIDADE</option>
		    <option value="RADIACAO_NAO_IONIZANTE">RADIA��O N�O IONIZANTE</option>                    
                    <option value="RADIACAO_IONIZANTE">RADIA��O IONIZANTE</option>                    
                    <option value="OUTROS_FISICOS">OUTROS F�SICOS</option>                    
                    <option value="SANGUE_HUMANO">SANGUE HUMANO</option>                    
                    <option value="SANGUE_ANIMAL">SANGUE ANIMAL</option>                    
                    <option value="MANEJO_ANIMAIS">MANEJO ANIMAL</option>                    
                    <option value="OUTROS_BIOLOGICOS">OUTROS BIOL�GICOS</option>                    
                    <option value="PRODUTOS_LIMPEZA">PRODUTOS DE LIMPEZA</option>                    
                    <option value="TINTAS_SOLVENTES">TINTAS E SOLVENTES</option>                    
                    <option value="HIDROCARBONETOS_AROMATICOS">HIDROCARBONETOS AROM�TICOS</option>                    
                    <option value="FUMOS_METALICOS">FUMOS MET�LICOS</option>                    
                    <option value="POEIRAS_INCOMODAS">POEIRAS INC�MODAS</option>                    
                    <option value="POEIRAS_MINERAIS">POEIRAS MINERAIS</option>                    
                    <option value="OUTROS_QUIMICOS">OUTROS QU�MICOS</option>                    
                    <option value="ILUMINAMENTO">ILUMINAMENTO</option>                    
                          
                      </select></td>
                  <td><select name="funcionarios_exposicao_fatores_riscos|INTENSIDADE_CONCENTRACAO[]" >
                      <option value=""></option> 
                          <option value="QUALITATIVA">QUALITATIVA</option> 
                      <option value="QUANTITATIVA">QUANTITATIVA</option> 
                      </select>
                  </td>
                  <td><input type="text" name="funcionarios_exposicao_fatores_riscos|TECNICA_UTILIZADA[]" size="40"/></td>
                  <td><select name="funcionarios_exposicao_fatores_riscos|EPC_EFICAZ[]">
                          <option value=""></option> 
                          <option value="N_A">N/A</option> 
                          <option value="SIM">SIM</option> 
                          <option value="NAO">N�O</option> 
                  </select></td>
                  <td><select name="funcionarios_exposicao_fatores_riscos|EPI_EFICAZ[]">
                          <option value=""></option> 
                          <option value="N_A">N/A</option> 
                          <option value="SIM">SIM</option> 
                          <option value="NAO">N�O</option> 

                      </select></td>
                  <td><input type="text" name="funcionarios_exposicao_fatores_riscos|CA_EPI[]" size="10"/></td>
                </tr>
          </table>
      		<button type="button" onclick="insere(this)">+ Incluir Hist�rico</button>		
    		<button type="button" onclick="remove(this)">- Remover Hist�rico</button>		
</div>      

  </div>		     
        <script>
            defineAba( "celAbaCadastro"  , "divCadastro"   );
            defineAba( "celAbaDocumentacao"  , "divDocumentacao"   );
            defineAba( "celAbaHistoricoAfastamentos" , "divHistoricoAfastamentos"   );
            defineAba( "celAbaHistoricoFuncoes"   , "divHistoricoFuncoes"     );
            defineAba( "celAbaMonitoracaoBiologica"   , "divMonitoracaoBiologica"     );
	    defineAba( "celAbaProfissiografia"   , "divProfissiografia"     );
	    defineAba( "celAbaExposicaoFatoresRisco"   , "divExposicao"     );
            defineAba( "celAbaExamesMedicos"   , "divExamesMedicos"     );
            defineAbaAtiva( "celAbaCadastro" );
        </script>

</form>
    <form>
                <div id="consultaexterna" style="postion:absolute;display:none">
      <input type="text" id="txt_pesquisa" name="txt_pesquisa" size="50"/>
            <button name="btn" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_FUNCIONARIO'],document.forms[2].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button><label onclick="document.getElementById('consultaexterna').style.display='none'"><strong>   X</strong></label>
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
              <div id='div_consulta'>
           </div>
</body>
</html>
