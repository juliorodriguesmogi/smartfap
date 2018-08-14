<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Geração de PPRAs</title>
<style type="text/css">
    html{
        
    }
body{
	background:white;
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
	height: 150px;
}
textarea {
    width: 90%;
    min-width: 90%;
    max-width: 90%;
}
li{display:inline}

li:hover{display:block;}
#div_statusbar{
        position:fixed;
        top:1px;
        vertical-align: top;
        
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
textarea{
text-transform: none;
text-align:justify;
word-break: break-all;
overflow-wrap: break-word;
}
#div_mensagem{
        text-align:center;
	position:relative;
	z-index:7;
}
#mensagem{
	text-align:center;
	width:300px;
	background:transparent;
	border:block;
	color:red;
}
div #setor01{
    position:relative;
}

h1{font-size:150%}
</style>
<link href="../css/designer.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Funcao.js"></script>
<script type="text/javascript" src="../classes/js/Funcoes.js"></script>
<script type="text/javascript" src="../classes/js/Funcao.js"></script>
<script type="text/javascript" src="../classes/js/Laudo.js"></script>
<script type="text/javascript" src="../classes/js/Funcionario.js"></script>
<script type="text/javascript" src="../classes/js/Estruturas.js"></script>
<script type="text/javascript" src="../classes/js/Setores.js"></script>
<script type="text/javascript" src="../classes/js/Maquinas.js"></script>
<script type="text/javascript" src="../classes/js/Episx.js"></script>
<script type="text/javascript" src="../classes/js/Atividades.js"></script>
<script type="text/javascript" src="../classes/js/Atividade_Funcao.js"></script>
<script type="text/javascript" src="../classes/js/Epis_Base.js"></script>
<script type="text/javascript" src="../js/funcoes_laudo.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="../classes/js/Abas.js"></script>
<script type="text/javascript" src="../classes/js/Instrumento.js"></script>
<script type="text/javascript" src="../classes/js/SubAbas.js"></script>
<script type="text/javascript" src="../classes/js/Parametro_Ruido.js"></script>
<script type="text/javascript" src="../classes/js/maquina.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos.js" charset="utf-8"></script>
<script type="text/javascript" src="../classes/js/Mppras_responsaveis.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Setores_Pericia.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Setores_Fotos.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Setores_Maquina.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Atividades.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Atividade_Funcao.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Atividades_Epis.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Avaliacoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Instrumentos_Medicao.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Avaliacoes_Ruido.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Avaliacoes_Ruido_Funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_ruido_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Avaliacoes_Ruido_Dosimetria.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_calor.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_calor_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_calor_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_frio.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_frio_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_frio_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_umidade.js"></script>
<script type="text/javascript" src="../classes/js/Mlaudos_avaliacoes_umidade_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_umidade_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_nao_ionizante.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_nao_ionizante_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_nao_ionizante_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_ionizante.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_ionizante_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_ionizante_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_fisicos.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_fisicos_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_fisicos_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_biologicos.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_biologicos_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_biologicos_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_quimicos.js"></script>
<script type="text/javascript" src="../classes/js/Mlaudos_avaliacoes_outros_quimicos_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_quimicos_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_humano.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_humano_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_humano_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_animal.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_animal_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_animal_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_manejo_animais.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_manejo_animais_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_manejo_animais_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_incomodas.js"></script>
<script type="text/javascript" src="../classes/js/Mlaudos_avaliacoes_poeiras_incomodas_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_incomodas_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_minerais.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_minerais_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_minerais_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_fumos_metalicos.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_fumos_metalicos_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_fumos_metalicos_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_hidrocarbonetos.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_hidrocarbonetos_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_hidrocarbonetos_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_produtos_limpeza.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_produtos_limpeza_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_produtos_limpeza_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_tintas_solventes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_tintas_solventes_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_tintas_solventes_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_iluminamento.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_iluminamento_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_iluminamento_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Avaliacoes_Sumarizadas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Tipos_Avaliacoes.js"></script>
<script type="text/javascript" src="../classes/js/MPpras.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Tipos_Avaliacoes.js"></script>
<script type="text/javascript" src="../classes/js/MPpras_agentes_identificados_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MPpras_cronograma_prioridade.js"></script>
<script type="text/javascript" src="../classes/js/MPpras_profissionais.js"></script>
<script type="text/javascript" src="../classes/js/MPpras_responsaveis.js"></script>
<script type="text/javascript" src="../classes/js/MPpras_riscos_identificados.js"></script>
<script type="text/javascript" src="../classes/js/MPpras_setores_agentes.js"></script>
<link href="../css/designer.css" type="text/css" rel="stylesheet" />    
<link href="estilosistema.css" type="text/css" rel="stylesheet" />
            <script type="text/javascript" charset="utf-8">
            defineAba( "celAbaEmpresa"  , "divDadosEmpresa"   );
            defineAba( "celAbaResponsaveis" , "divResponsaveis" );
            defineAba( "celAbaSetoresAgentes" , "divSetores_Agentes" );
            defineAba( "celAbaCronograma" , "divCronograma" );
            defineAbaAtiva( "celAbaEmpresa" );
			
            cargaSetores = new Setores();
            newlaudo = new laudo();
             newlaudoacompanhantes=new laudo_acompanhantes();

            //sequencial_foto[0][1]=0;
            function encapsular_laudo(){
                div_dados_empresa=document.getElementById('divDadosEmpresa');
                cont=0;
                componente_encontrado=true;
                var componentes=[];
                while (componente_encontrado){
                    x=div_dados_empresa.getElementsByTagName('input')[cont];
                    y=div_dados_empresa.getElementsByTagName('select')[cont];
                    if (x != null){ 
                        xname=new String(x.name);
                        componentes[cont]=x.name+"="+x.value;
                    }  
                    if (y !=null){
                        cont++;
                        yname=new String(y.name);
                        componentes[cont]=y.name+"="+y.value;
                    }
                    cont++;
                    if (x == null && y == null){
                        componente_encontrado=false;                    
                    }
                    
                }
                return componentes;
                
            }
            function inicializa_variaveis(){
                 empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
                 empresa_ativa=empresa_ativa.toString();  
                 campo_atual,campovalor ;
            }
            function grava_registro(){
                if (confirm("Gravar registro?")){                
		document.forms[1].action="../PHP/Laudo_Class.php?acao=I";
    	           
                    document.forms[1].submit();
				}	
            }
            function apaga_registro(){
                if (confirm("Confirma a exclusão do registro?")){
                    document.forms[1].action="../PHP/Laudo_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
            function proximo_registro(campo,visao){
                codativ=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codusu,">",visao,"Busca_Laudo",true);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codusu=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name, codusu,"<",visao,"Busca_Laudo",true);
                exibe_campos();
            }  
            function insere_dosimetria(node){
                divpai=node.parentNode.parentNode.parentNode.parentNode.parentNode;
                tblpai=divpai.getElementsByTagName('table')[0].cloneNode(true);
		divpai.appendChild(tblpai);
            }	
            
            function remove_dosimetria(node){
                divpai=node.parentNode.parentNode.parentNode.parentNode.parentNode;
                tblpai=node.parentNode.parentNode.parentNode.parentNode;
		divpai.removeChild(tblpai);
           }            
            
            function insere_maquina(node){
                divpai=node.parentNode.parentNode;
                divfilho=divpai.children[0].cloneNode(true);
                divpai.appendChild(divfilho);
               

            }	
            function remove_maquina(node){
                divfilho=node.parentNode;
                divpai=divfilho.parentNode;
                divpai.removeChild(divfilho);
               

            }	            
            function insere_funcao_avaliacao(node){
                divpai=node.parentNode.parentNode;
                divfilho=divpai.children[0].cloneNode(true);
                divpai.appendChild(divfilho);
               

            }	
            function remove_funcao_avaliacao(node){
                divfilho=node.parentNode;
                divpai=divfilho.parentNode;
                divpai.removeChild(divfilho);
               

            }	            
            
            function pesquisar_laudo(){
                visao="laudos";
                campos=Array();
                campos[0]="CODIGO_EMPRESA";
                campos[1]="ANO_PERICIA";
                campos[2]="NUMERO_LAUDO";
                campos[3]="REVISAO";
                valores=Array();
                valores[0]=document.forms[1].elements['ppras|CODIGO_EMPRESA'].value;
                valores[1]=document.forms[1].elements['ppras|ANO_PERICIA'].value;
                valores[2]=document.forms[1].elements['ppras|NUMERO_LAUDO'].value;
                valores[3]=document.forms[1].elements['ppras|REVISAO'].value;
                buscar_registro(window,campos,valores,Array('=','=','=','='),'ppras_responsaveis','ppras_responsaveis','Busca_ppras_responsaveis',false,newlaudoacompanhantes);                                    
                buscar_registro(window,campos,valores,Array('=','=','=','='),'laudos','laudos','Busca_Laudo',true,newlaudo);                    

                
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
            function insere_epis(node){
                divpai=node.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
		divpai.appendChild(document.getElementById(node.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.id).cloneNode(true));
            }	

            function remove_epis(node){
                divpai=node.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
		divpai.removeChild(document.getElementById(node.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.id));
            }	

            function insere_foto(node){
                
                tblpai=node.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
		divpai=tblpai.parentNode.parentNode;
		linhapai=node.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
		tblpai.insertRow(-1);
		novalinhapai=tblpai.rows[tblpai.rows.length-1];
                novalinhapai.insertCell(-1);
                divfilho=node.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.cloneNode(true);
                
		divfilho.getElementsByTagName('input')[1].value=divpai.getElementsByTagName('select')[0].value;
		divfilho.getElementsByTagName('input')[2].value=divpai.getElementsByTagName('select')[1].value;				
                unid=divpai.getElementsByTagName('select')[0].value;
                setor=divpai.getElementsByTagName('select')[1].value;
                sequencial_foto[unid][setor]=sequencial_foto[unid][setor]+1;
                divfilho.getElementsByTagName('input')[3].value=sequencial_foto[unid][setor];
                
                novalinhapai.cells[0].appendChild(divfilho);
            }	
            function remove_foto(node){
                divpai=node.parentNode.parentNode.parentNode.parentNode;
				divpai.removeChild(node.parentNode.parentNode.parentNode);
            }				
            function remove(node){
                divremover=node.parentNode;
                divpai=node.parentNode.parentNode;
		divpai.removeChild(divremover);
            }	
            var tp_fator;
            function registrar_fator(tipo_fator){
				tp_fator=tipo_fator;
                                if (tipo_fator.checked){
                                    document.getElementById('tipo_avaliacao').style.display='block';
                                    document.getElementById('tipo_avaliacao').style.top=findPosX(tipo_fator.parentNode)+10+"px";
                                    document.getElementById('tipo_avaliacao').style.left=findPosY(tipo_fator)+tipo_fator.height+"px";
                                }
                                else {
                                    executar_tipo();
                                }
            }
            function executar_tipo(){
				qualitativa=document.getElementById('qualitativa');
				quantitativa=document.getElementById('quantitativa');
				document.getElementById('tipo_avaliacao').style.display='none';
				divpai=tp_fator.parentNode.parentNode.parentNode.parentNode.parentNode;	
				nome_campo=tp_fator.id.toLowerCase();
				if (divpai.children.length>1){ 
                                       tamanho=divpai.children.length;
                                       noc=0;
                                       for (x=0;x<tamanho;x++){
                                                    if (divpai.children.length>1){
                                                        if ((divpai.children[x].id == 'div_tabela_modelo_avaliacao_'+nome_campo+"_quantitativa_"+noc) ){
                                                                div_remover=document.getElementById('div_tabela_modelo_avaliacao_'+nome_campo+"_quantitativa_"+noc);
                                                            if (confirm('Existe uma aba ativa para essa função (quantitativa). Deseja removê-la?')){
                                                                    divpai.removeChild(div_remover);	

                                                            }	
                                                        }
                                                    }
                                                    if (divpai.children.length>1){
                                                        if ((divpai.children[x].id == 'div_tabela_modelo_avaliacao_'+nome_campo+"_qualitativa_"+noc) ){
                                                                div_remover=document.getElementById('div_tabela_modelo_avaliacao_'+nome_campo+"_qualitativa_"+noc);
                                                            if (confirm('Existe uma aba ativa para essa função (qualitativa) . Deseja removê-la?')){
                                                                    divpai.removeChild(div_remover);	
                                                            }	

                                                        } 
                                                    }
					}
                                }        
                                
				if (!tp_fator.checked) return;
				dv=document.createElement('div');
                                
				
				tabela=document.getElementById('tabela_modelo_avaliacao_'+nome_campo).cloneNode(true);
				tabela.setAttribute('style','display:block');		
				tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+tp_fator.id.replace('_',' ').toUpperCase();
				tabela2=document.getElementById('tabela_modelo_avaliacao_'+nome_campo).cloneNode(true);
				tabela2.setAttribute('style','display:block');		
				tabela2.rows[0].cells[0].firstChild.textContent=tabela2.rows[0].cells[0].firstChild.firstChild.textContent+'  '+tp_fator.id.replace('_',' ').toUpperCase();					
                                if (tp_fator.id.indexOf('OUTROS')>-1) {
                                    celulapai=tp_fator.parentNode;
                                    outros_descricao=celulapai.lastChild.value.toUpperCase();
                                    tabela.rows[0].cells[0].children[0].innerHTML=tabela.rows[0].cells[0].children[0].innerHTML+" "+outros_descricao;
                                    tabela2.rows[0].cells[0].children[0].innerHTML=tabela2.rows[0].cells[0].children[0].innerHTML+" "+outros_descricao;
                                }
				if (qualitativa.checked) {
					tabela.setAttribute('id','tabela_modelo_avaliacao_'+nome_campo+"_qualitativa_0");
                                        dv.setAttribute('id','div_tabela_modelo_avaliacao_'+nome_campo+"_qualitativa_0");
                                        tabela.rows[1].cells[0].firstChild.textContent='Avaliação Qualitativa';
					dv.appendChild(tabela);
					dv.getElementsByTagName('input')[1].value=divpai.getElementsByTagName('select')[0].value;
					dv.getElementsByTagName('input')[2].value=divpai.getElementsByTagName('select')[1].value;
                                        //carregar_maquinas_equipamentos_avaliacao(dv);
                                        tabela2.rows[1].cells[1].children[0].value='QUALITATIVA';
                                        tabela.rows[8].deleteCell(0);
                                        tabela.rows[9].deleteCell(0);
                                        divpai.appendChild(dv);
					
				}	
				if (quantitativa.checked) {
					tabela2.setAttribute('id','tabela_modelo_avaliacao_'+nome_campo+"_quantitativa_0");
                                        dv.setAttribute('id','div_tabela_modelo_avaliacao_'+nome_campo+"_quantitativa_0");
                                        tabela2.rows[1].cells[0].firstChild.textContent='Avaliação Quantitativa';
					dv.appendChild(tabela2);
					dv.getElementsByTagName('input')[1].value=divpai.getElementsByTagName('select')[0].value;
					dv.getElementsByTagName('input')[2].value=divpai.getElementsByTagName('select')[1].value;				
                                        if (dv.children[0].id!="tabela_modelo_avaliacao_ruido_dosimetria_quantitativa") carregar_maquinas_equipamentos_avaliacao(dv);
                                        tabela2.rows[1].cells[1].children[0].value='QUANTITATIVA';
					divpai.appendChild(dv);
				}	
                                if (!qualitativa.checked && !quantitativa.checked) tp_fator.checked=false;
				
                                document.getElementById('qualitativa').checked=false;
				document.getElementById('quantitativa').checked=false;				
				//document.getElementById('qualitativa').value="";
				//document.getElementById('quantitativa').value="";					
				document.getElementById('tipo_avaliacao').style.display='none';
				
            }
                        
	   function carrega_unidades(campo){
                 empresa_ativa=<?php echo $_SESSION['empresa_ativa']; ?>;
		 buscar_registros(window,'estrutura_organizacional',"Carrega_Estrutura",'CODIGO_EMPRESA',empresa_ativa,false,'=',newEstruturas);
                 codigo_estrutura=campo.value;
                 isel=campo;
				 // Inicializa select option 
                 isel.length=0;
                 // Loop para carregar select option
                 nivel_organizacao=0;
                 for (y=0;y< newEstruturas.length()+1;y++){
                            
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
                             
                             isel.add(opt);
                        }
                        if (isel.length==1){
                            isel.length=0;
                            opt=new Option('Nenhuma Unidade a Selecionar',0);
                            isel.add(opt);
                            return;
                            
                        }
                        isel.value=codigo_estrutura;
                        

            }			
            function carrega_setores(campo){
                 //document.getElementById('setorimg').style.visibility='visible';
                 chave=Array('UNIDADE');
                 Unidade=document.forms[1].elements['UNIDADE'].value;
                 valor=Array(Unidade);
                 buscar_registros(window,"setores","Carrega_Setores",chave,valor,true,Array("="),newSetores);
                 campo.length=0;
		 campo.add(new Option('',0));
                 for (y=1;y <=newSetores.length();y++){
                             opt=new Option(newSetores.get_Nome_Setor([y-1]).substr(0,100),newSetores.get_Codigo_Setor([y-1]));
                             campo.add(opt);
                        }
                 
                 
            }    			

            function carrega_setores_div(campo,chave,oper,valor){
                 //document.getElementById('setorimg').style.visibility='visible';
                 old_value=campo.value;
                 campo.length=0;
                 buscar_registros(window,"setores","Carrega_Setores",chave,valor,true,oper,newSetores);
                 campo.length=0;
		 campo.add(new Option('',0));
                 for (y=1;y <=newSetores.length();y++){
                             opt=new Option(newSetores.get_Nome_Setor([y-1]).substr(0,100),newSetores.get_Codigo_Setor([y-1]));
                             campo.add(opt);
                        }
                 
                 
            }    			
            


          function exibe_campos(){
                numero_laudo=document.forms[1].elements['ppras|NUMERO_LAUDO'].value;
                ano_pericia=document.forms[1].elements["ppras|ANO_PERICIA"].value;
                revisao=document.forms[1].elements["ppras|REVISAO"].value;
                document.forms[1].reset();
                //newmaquina.setValores(newregistro.getValores());
                                
                if (acao=='I'){
                    document.forms[1].elements["ppras|NUMERO_LAUDO"].value = numero_laudo;
                    document.forms[1].elements["ppras|ANO_PERICIA"].value = ano_pericia;
                    document.forms[1].elements["ppras|REVISAO"].value = revisao;
                }
                
                if (acao=='A'){
                        
                        document.forms[1].elements["ppras|ANO_PERICIA"].value = new String(newlaudo.get_Ano_Pericia());
                        document.forms[1].elements["ppras|NUMERO_LAUDO"].value = new String(newlaudo.get_Numero_Laudo());
                        document.forms[1].elements["ppras|REVISAO"].value = new String(newlaudo.get_Revisao());
                        document.forms[1].elements["ppras|DATA_LANCAMENTO"].value = new String(newlaudo.get_Data_Criacao().toString().substr(0,10));
			document.forms[1].elements["ppras|DATA_HORA_PERICIA"].value = new String(newlaudo.get_Data_Pericia());
                        document.forms[1].elements["ppras|SITUACAO_LAUDO"].value = new String(newlaudo.get_Situacao());
                        document.forms[1].elements["ppras|ENDERECO_ATUACAO"].value = new String(newlaudo.get_Endereco());
                        document.forms[1].elements["ppras|BAIRRO_ATUACAO"].value = new String(newlaudo.get_Bairro());    
                        document.forms[1].elements["ppras|MUNICIPIO_ATUACAO"].value = new String(newlaudo.get_Municipio());    
                        document.forms[1].elements["ppras|CEP_ATUACAO"].value = new String(newlaudo.get_CEP());                
                        document.forms[1].elements["ppras|UF_ATUACAO"].value = new String(newlaudo.get_UF());                     
                        document.forms[1].elements["ppras_responsaveis|FUNCAO"].value = new String(newlaudoacompanhantes.get_Funcao());
                        document.forms[1].elements["ppras_responsaveis|NOME_RESPONSAVEL"].value = new String(newlaudoacompanhantes.get_Responsavel_laudoxxx());
                        document.forms[1].elements["ppras_responsaveis|DATA_ADMISSAO"].value = new String(newlaudoacompanhantes.get_Data_Admissao_laudo());             
                        campos=Array();
                        campos[0]="CODIGO_EMPRESA";
                        campos[1]="ANO_PERICIA";
                        campos[2]="NUMERO_LAUDO";
                        campos[3]="REVISAO";
                        valores=Array();
                        valores[0]=document.forms[1].elements['ppras|CODIGO_EMPRESA'].value;
                        valores[1]=document.forms[1].elements['ppras|ANO_PERICIA'].value;
                        valores[2]=document.forms[1].elements['ppras|NUMERO_LAUDO'].value;
                        valores[3]=document.forms[1].elements['ppras|REVISAO'].value;
                        exibir_historicos();
                        

                        
              }
            }
            
       function popula_setores_historico_carregados(divisao,contador){
		    carrega_unidades(divisao.getElementsByTagName('select')[0]);
                    divisao.getElementsByTagName('input')[0].value=contador+1;
                    divisao.getElementsByTagName('select')[0].value=newlaudosetper.get_Unidade(contador);
                    divisao.getElementsByTagName('select')[1].length=0;
                    divisao.getElementsByTagName('select')[1].add(new Option(newlaudosetper.get_Nome_Setor(contador),newlaudosetper.get_Codigo_Setor(contador)));
                    divisao.getElementsByTagName('select')[1].value=newlaudosetper.get_Codigo_Setor(contador);
                    divisao.getElementsByTagName('textarea')[0].value=newlaudosetper.get_Descricao_Setor(contador);
                    divisao.getElementsByTagName('input')[2].value=newlaudosetper.get_Nome_Setor(contador);
                    
       }
            function popula_maquina_historico_carregados(divisao,contador){
		    carrega_unidades(divisao.getElementsByTagName('select')[0]);
                    divisao.getElementsByTagName('input')[0].value=contador+1;
                    divisao.getElementsByTagName('select')[0].value=newlaudosetmaq.get_Unidade(contador);
                    divisao.getElementsByTagName('select')[1].length=0;
                    divisao.getElementsByTagName('select')[1].add(new Option(newlaudosetmaq.get_Nome_Setor(contador),newlaudosetmaq.get_Codigo_Setor(contador)));
                    divisao.getElementsByTagName('select')[1].value=newlaudosetmaq.get_Codigo_Setor(contador);
                    divisao.getElementsByTagName('select')[2].length=0;
                    divisao.getElementsByTagName('select')[2].add(new Option(newlaudosetmaq.get_Nome_Maquina(contador),newlaudosetmaq.get_Codigo_Maquina(contador)));
                    divisao.getElementsByTagName('select')[2].value=newlaudosetmaq.get_Codigo_Maquina(contador);
                    
                    divisao.getElementsByTagName('input')[1].value=newlaudosetmaq.get_Nome_Setor(contador);
                    divisao.getElementsByTagName('input')[2].value=newlaudosetmaq.get_Nome_Maquina(contador);
                 
       }

            function carregar_setores_agentes(){
                    campos=Array();
                    valores=Array();
                    txtabela=Array();
                    txtabela[txtabela.length]='laudos_avaliacoes_calor';
                    txtabela[txtabela.length]='laudos_avaliacoes_frio';
                    txtabela[txtabela.length]='laudos_avaliacoes_fumos_metalicos';
                    txtabela[txtabela.length]='laudos_avaliacoes_hidrocarbonetos';
                    txtabela[txtabela.length]='laudos_avaliacoes_iluminamento';
                    txtabela[txtabela.length]='laudos_avaliacoes_manejo_animais';                    
                    txtabela[txtabela.length]='laudos_avaliacoes_outros_biologicos';
                    txtabela[txtabela.length]='laudos_avaliacoes_outros_fisicos';
                    txtabela[txtabela.length]='laudos_avaliacoes_outros_quimicos';
                    txtabela[txtabela.length]='laudos_avaliacoes_poeiras_incomodas';
                    txtabela[txtabela.length]='laudos_avaliacoes_poeiras_minerais';
                    txtabela[txtabela.length]='laudos_avaliacoes_produtos_limpeza';
                    txtabela[txtabela.length]='laudos_avaliacoes_radiacao_ionizante';
                    txtabela[txtabela.length]='laudos_avaliacoes_radiacao_nao_ionizante';
                    txtabela[txtabela.length]='laudos_avaliacoes_ruido';
                    txtabela[txtabela.length]='laudos_avaliacoes_ruido_dosimetria';
                    txtabela[txtabela.length]='laudos_avaliacoes_sangue_animal';
                    txtabela[txtabela.length]='laudos_avaliacoes_sangue_humano';
                    txtabela[txtabela.length]='laudos_avaliacoes_tintas_solventes';
                    txtabela[txtabela.length]='laudos_avaliacoes_umidade';
                    empresa_atual=<?php echo $_SESSION['empresa_ativa'] ?>;
                    campos[0]='CODIGO_EMPRESA';
                    campos[1]='ANO_PERICIA';
                    campos[2]='NUMERO_LAUDO';
                    campos[3]='REVISAO';
                    valores[0]=empresa_atual;
                    valores[1]=document.forms[1].elements['ppras|ANO_PERICIA'].value;
                    valores[2]=document.forms[1].elements['ppras|NUMERO_LAUDO'].value;
                    valores[3]=document.forms[1].elements['ppras|REVISAO'].value;
                    divpai=document.getElementById('divSetores_Agentes');
                    if (divpai.children.length>1){
                       if (divpai.children[1].id=='div_setores_agentes'){
                           dv=document.getElementById('div_setores_agentes');
                           divpai.removeChild(dv);
                       }    
                    }
                   
                        buscar_registros(window,'','Carrega_Setores_Agentes_PPRA',campos,valores,true,Array("=","=","=","="),newpprassetores_agentes);
                        for (contador1=0;contador1<newpprassetores_agentes.length();contador1++){
                                divfilho=document.getElementById('div_setores_agentes').cloneNode(true);
                                divfilho.setAttribute('id','div_setores_agentes_'+contador1);
                                divfilho.setAttribute('style','display:block');
                                divpai.appendChild(divfilho);
                                buscar_registros(window,'estrutura_organizacional',"Carrega_Estrutura",Array("CODIGO_EMPRESA","UNIDADE"),Array(empresa_atual,newpprassetores_agentes.get_Unidade(contador1)),false,Array('=','='),newEstruturas);      
                                campos_setores=Array();
                                valores_setores=Array();
                                campos_setores[0]='CODIGO_EMPRESA';
                                campos_setores[1]='UNIDADE';
                                campos_setores[2]='CODIGO_SETOR';
                                valores_setores[0]=empresa_atual;
                                valores_setores[1]=newpprassetores_agentes.get_Unidade(contador1);
                                valores_setores[2]=newpprassetores_agentes.get_Codigo_setor(contador1);

                                buscar_registros(window,'setores','Carrega_Setores',campos_setores,valores_setores,true,Array("=","=","="),newSetores);
                                tbl=divfilho.getElementsByTagName('table')[0];
                                tbl.rows[0].cells[1].children[0].value=newEstruturas.get_Codigo_Unidade(0);
                                tbl.rows[0].cells[1].children[1].value=newEstruturas.get_Descricao_Unidade(0);
                                tbl.rows[1].cells[1].children[0].value=newSetores.get_Codigo_Setor(0);
                                tbl.rows[1].cells[1].children[1].value=newSetores.get_Descricao_Setor(0);
                                tbl.rows[2].cells[1].children[0].value=newpprassetores_agentes.get_Agente(contador1);
                                linhaclone=tbl.rows[tbl.rows.length-1].cloneNode(true);
                                tbl.deleteRow(tbl.rows.length-1);
                                
                                quebra=newpprassetores_agentes.get_Unidade(contador1)+newpprassetores_agentes.get_Codigo_setor(contador1)+newpprassetores_agentes.get_Agente(contador1);
                                numocur=contador1;
                                do{
                                  linhaf=linhaclone.cloneNode(true);
                                  linhaf.cells[0].children[0].value=newpprassetores_agentes.get_Tipo(numocur);
                                  linhaf.cells[1].children[0].value=newpprassetores_agentes.get_Fonte_geradora(numocur);
                                  linhaf.cells[2].children[0].value=newpprassetores_agentes.get_Intensidade(numocur);
                                  linhaf.cells[3].children[0].value=newpprassetores_agentes.get_Grau_risco(numocur);
                                  tbl.appendChild(linhaf);
                                  divfunc=divfilho.getElementsByTagName('div')[0];
                                  tblfunc=divfunc.getElementsByTagName('table')[0];
                                  linhafunc=tblfunc.rows[tblfunc.rows.length-1];
                                  tblfunc.deleteRow(-1);
                                  campos_funcoes=Array();
                                  valores_funcoes=Array();
                                  campos_funcoes[0]='CODIGO_EMPRESA';
                                  campos_funcoes[1]='ANO_PERICIA';
                                  campos_funcoes[2]='NUMERO_LAUDO';
                                  campos_funcoes[3]='REVISAO';
                                  campos_funcoes[4]='UNIDADE';
                                  campos_funcoes[5]='CODIGO_SETOR';
                                  valores_funcoes[0]=valores[0];
                                  valores_funcoes[1]=valores[1];
                                  valores_funcoes[2]=valores[2];
                                  valores_funcoes[3]=valores[3];
                                  valores_funcoes[4]=newpprassetores_agentes.get_Unidade(contador1);
                                  valores_funcoes[5]=newpprassetores_agentes.get_Codigo_setor(contador1);
                                  buscar_registros(window,'laudos_avaliacoes_'+newpprassetores_agentes.get_Tipo(contador1).toLowerCase(),'Carrega_Setores_Agentes_Funcoes_PPRA',campos_funcoes,valores_funcoes,true,Array("=","=","=","=","=","="),newpprasagentes_identificados_funcoes);
                                  for (contador3=0;contador3<newpprasagentes_identificados_funcoes.length();contador3++){
                                      linhag=linhafunc.cloneNode(true);
                                      linhag.cells[0].children[0].value=newpprasagentes_identificados_funcoes.get_Descricao_funcao(contador3);
                                      linhag.cells[1].children[0].value=newpprasagentes_identificados_funcoes.get_Cont_masculino(contador3);
                                      linhag.cells[2].children[0].value=newpprasagentes_identificados_funcoes.get_Cont_feminino(contador3);
                                      linhag.cells[3].children[0].value=newpprasagentes_identificados_funcoes.get_Epi_eficaz(contador3);
                                      linhag.cells[4].children[0].value=newpprasagentes_identificados_funcoes.get_Ca_epi(contador3);
                                      linhag.cells[4].children[0].value=newpprasagentes_identificados_funcoes.get_Ca_epi(contador3);
                                      tblfunc.appendChild(linhag);
                                  }
                                  numocur++;
                                  nova_quebra=newpprassetores_agentes.get_Unidade(numocur)+newpprassetores_agentes.get_Codigo_setor(numocur)+newpprassetores_agentes.get_Agente(numocur);
                                  contador1=numocur-1;
                                }
                                while(nova_quebra==quebra );
                                

                        }
                    
            }


            function carrega_epis(campo){
                  buscar_registros(window,"epis","Carrega_EPIs","","",false,"",newepisx);
                 campo.length=0;
                 campo.add(new Option('Não Aplicável','0'));
                 for(i=1;i <= newepisx.length();i++){
                        campo.add(new Option(newepisx.get_Descricao_EPI(i-1),newepisx.get_Codigo_EPI(i-1)));
                 }       
            }         
            

            
            function onselect_carrega_epis(campo){
                codigo_ca=newepisx.get_Codigo_CA(campo.selectedIndex-1>0?campo.selectedIndex-1:0);
                linha=campo.parentNode.parentNode;
                linha.cells[1].firstChild.value=codigo_ca;        
                linha_nbr=campo.parentNode.parentNode.parentNode.parentNode;
                divpai=linha_nbr.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
                vlcampo=divpai.children[0].rows[3].cells[1].children[0].value;
                linha_nbr.rows[2].cells[3].children[0].value=vlcampo;
                
           }
           
       function identifica_indice(campo){
           linha_pai=campo.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
           //linha_pai=campo.parentNode.parentNode.parentNode.parentNode;
           if (navigator.appName=='Microsoft Internet Explorer' || navigator.vendor=='Google Inc.' || navigator.appName=='Opera'){
               div_linha_pai=linha_pai.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
               
           }
           else {
               div_linha_pai=linha_pai.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
           }    
           if (navigator.appName=='Microsoft Internet Explorer' || navigator.vendor=='Google Inc.' || navigator.appName=='Opera'){
               return Array(div_linha_pai.sectionRowIndex,linha_pai.sectionRowIndex);
           }
           else
              return Array(div_linha_pai.rowIndex,linha_pai.rowIndex);
       }
       function carregar_foto(campo){
                    retorno=identifica_indice(campo);
                    div_linha_pai=retorno[0];
                    linha_pai=retorno[1];
                    window.open("carregafoto.php?div_linha_pai="+div_linha_pai+"&linha_pai="+linha_pai+"&componente="+campo.id,null,"topo="+document.activeElement.botton+"px"+",height=550px,width=200px");
                    
                    
       }
function captura_linha_instrumentos(ttr){
                valor_celula=captura_valores(ttr);
                componente=document.forms[1].elements['laudos_instrumentos_medicao|CODIGO_INSTRUMENTO[]'];
                if (componente.length>0){
                    valor_indice=componente.length-1;
                }
                else
                    valor_indice=0;
                if (valor_indice==0){
                    document.forms[1].elements['laudos_instrumentos_medicao|CODIGO_INSTRUMENTO[]'].value=valor_celula[0];
                    document.forms[1].elements['laudos_instrumentos_medicao|TIPO_INSTRUMENTO[]'].value=valor_celula[1];
                    document.forms[1].elements['laudos_instrumentos_medicao|MARCA_INSTRUMENTO[]'].value=valor_celula[2];
                    document.forms[1].elements['laudos_instrumentos_medicao|MODELO_INSTRUMENTO[]'].value=valor_celula[3];
                    document.forms[1].elements['laudos_instrumentos_medicao|SERIE_INSTRUMENTO[]'].value=valor_celula[4];
                    document.forms[1].elements['laudos_instrumentos_medicao|DATA_CALIBRACAO_INSTRUMENTO[]'].value=valor_celula[5];
                    document.forms[1].elements['laudos_instrumentos_medicao|CODIGO_INSTRUMENTO[]'].focus();
                }
                else {
                    document.forms[1].elements['laudos_instrumentos_medicao|CODIGO_INSTRUMENTO[]'][valor_indice].value=valor_celula[0];
                    document.forms[1].elements['laudos_instrumentos_medicao|TIPO_INSTRUMENTO[]'][valor_indice].value=valor_celula[1];
                    document.forms[1].elements['laudos_instrumentos_medicao|MARCA_INSTRUMENTO[]'][valor_indice].value=valor_celula[2];
                    document.forms[1].elements['laudos_instrumentos_medicao|MODELO_INSTRUMENTO[]'][valor_indice].value=valor_celula[3];
                    document.forms[1].elements['laudos_instrumentos_medicao|SERIE_INSTRUMENTO[]'][valor_indice].value=valor_celula[4];
                    document.forms[1].elements['laudos_instrumentos_medicao|DATA_CALIBRACAO_INSTRUMENTO[]'][valor_indice].value=valor_celula[5];
                    document.forms[1].elements['laudos_instrumentos_medicao|CODIGO_INSTRUMENTO[]'][valor_indice].focus();
                    
                }
                    document.getElementById('consultaexterna').style.display='none';
            }

                
            function captura_linha_responsavel(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['ppras_responsaveis|NOME_RESPONSAVEL'].value=valor_celula[0];
                document.forms[1].elements['ppras_responsaveis|FUNCAO'].value=valor_celula[1];
                document.forms[1].elements['ppras_responsaveis|DATA_ADMISSAO'].value=valor_celula[2];
                document.forms[1].elements['ppras_responsaveis|NOME_RESPONSAVEL'].focus();
                document.getElementById('consultaexterna').style.display='none';
            }

            div_pai=document.getElementById('consultaexterna');

            
            function monta_consulta_responsavel(campo_origem,campo_pesquisa){
               empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();
              
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
                colunas=Array('NOME FUNCIONARIO.','FUNÇÃO','DATA.ADMISSÃO');
                larguras=Array('250px','100px','20px');
                for (xcab=0;xcab < 3;xcab++){
                     th=document.createElement('th');
                     th.innerHTML=colunas[xcab];
                     th.setAttribute('width',larguras[xcab]);
                     tr.appendChild(th);  
                }  
                consultar_responsavel(tabela,campo_pesquisa,' like ')
            }    
                
                
            function consultar_responsavel(ntabela,campo_pesquisa,criterio){
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                ntabela.appendChild(tbody);
                empresa_ativa=empresa_ativa.toString();
                parm=Array(empresa_ativa,(campo_pesquisa.value+"%"));
                buscar_registros(window,'funcionarios','Consulta_responsavel_laudo',Array('CODIGO_EMPRESA','NOME_FUNCIONARIO'),parm,false,Array('=',' like '),newregistros);
                cont=0;
                valores=newregistros.getValores();
                valores=valores.toString().split(',');
                for(x=0;x<valores.length-1;x++){
                    vreg=valores[x].split('|');
                    buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array( empresa_ativa,vreg[1]),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);                    
                  tr=document.createElement('tr');
                    
                    if (x % 2==0){
                        tr.setAttribute('class','alternateRow');
                    }
                    else {
                        tr.setAttribute('class','normalRow');
                    }
                    tr.setAttribute('onclick', 'captura_linha_responsavel(this)');
                    larguras=Array('250px','100px','20px');
                    for (y=0;y<vreg.length-1;y++){
                        td=document.createElement('td');
                        a=document.createElement('a');
                        a.setAttribute('href', "#");
                        
                        a.innerHTML=vreg[y];
                        td.appendChild(a);
                        td.setAttribute('width',larguras[y]);
                        tr.appendChild(td);
                        tr.appendChild(td);
                        
                        tbody.appendChild(tr);
                    }
                    
                    tr.cells[1].children[0].innerHTML=newfunc.get_Descricao();
                    
                }    
                
            }
            
            function captura_linha_tecnico(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['ppras_profissionais|NOME_RESPONSAVEL[]'][0].value=valor_celula[0];
                document.forms[1].elements['ppras_profissionais|FUNCAO[]'][0].value=1;
                document.forms[1].elements['ppras_profissionais|NOME_RESPONSAVEL[]'][0].focus();
                document.getElementById('consultaexterna').style.display='none';
            }

            function captura_linha_engenheiro(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['ppras_profissionais|NOME_RESPONSAVEL[]'][1].value=valor_celula[0];
                document.forms[1].elements['ppras_profissionais|FUNCAO[]'][1].value=2;
                document.forms[1].elements['ppras_profissionais|NOME_RESPONSAVEL[]'][1].focus();
                document.getElementById('consultaexterna').style.display='none';
            }
            
            function monta_consulta_tecnicos(campo_origem,campo_pesquisa){
               empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();
              
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
                colunas=Array('NOME FUNCIONARIO.','FUNÇÃO','DATA.ADMISSÃO');
                larguras=Array('250px','100px','20px');
                for (xcab=0;xcab < 3;xcab++){
                     th=document.createElement('th');
                     th.innerHTML=colunas[xcab];
                     th.setAttribute('width',larguras[xcab]);
                     tr.appendChild(th);  
                }  
                consultar_tecnicos(tabela,campo_pesquisa,' like ')
            }    
                
                
            function consultar_tecnicos(ntabela,campo_pesquisa,criterio){
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                ntabela.appendChild(tbody);
                empresa_ativa=empresa_ativa.toString();
                parm=Array((campo_pesquisa.value+"%"),'1');
                buscar_registros(window,'responsaveis','Consulta_tecnico_laudo',Array('NOME_RESPONSAVEL','TIPO_RESPONSAVEL'),parm,false,Array(' like ','='),newregistros);
                cont=0;
                valores=newregistros.getValores();
                valores=valores.toString().split(',');
                for(x=0;x<valores.length-1;x++){
                    vreg=valores[x].split('|');
                    buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array( empresa_ativa,vreg[1]),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);                    
                  tr=document.createElement('tr');
                    
                    if (x % 2==0){
                        tr.setAttribute('class','alternateRow');
                    }
                    else {
                        tr.setAttribute('class','normalRow');
                    }
                    tr.setAttribute('onclick', 'captura_linha_tecnico(this)');
                    larguras=Array('250px','100px','20px');
                    for (y=0;y<vreg.length-1;y++){
                        td=document.createElement('td');
                        a=document.createElement('a');
                        a.setAttribute('href', "#");
                        
                        a.innerHTML=vreg[y];
                        td.appendChild(a);
                        td.setAttribute('width',larguras[y]);
                        tr.appendChild(td);
                        tr.appendChild(td);
                        
                        tbody.appendChild(tr);
                    }
                    
                    tr.cells[1].children[0].innerHTML=newfunc.get_Descricao();
                    
                }    
                
            }
            

            function monta_consulta_engenheiros(campo_origem,campo_pesquisa){
               empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();
              
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
                colunas=Array('NOME FUNCIONARIO.','FUNÇÃO','DATA.ADMISSÃO');
                larguras=Array('250px','100px','20px');
                for (xcab=0;xcab < 3;xcab++){
                     th=document.createElement('th');
                     th.innerHTML=colunas[xcab];
                     th.setAttribute('width',larguras[xcab]);
                     tr.appendChild(th);  
                }  
                consultar_engenheiros(tabela,campo_pesquisa,' like ')
            }    
                
                
            function consultar_engenheiros(ntabela,campo_pesquisa,criterio){
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                ntabela.appendChild(tbody);
                empresa_ativa=empresa_ativa.toString();
                parm=Array((campo_pesquisa.value+"%"),'2');
                buscar_registros(window,'responsaveis','Consulta_tecnico_laudo',Array('NOME_RESPONSAVEL','TIPO_RESPONSAVEL'),parm,false,Array(' like ','='),newregistros);
                cont=0;
                valores=newregistros.getValores();
                valores=valores.toString().split(',');
                for(x=0;x<valores.length-1;x++){
                    vreg=valores[x].split('|');
                    buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array( empresa_ativa,vreg[1]),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);                    
                  tr=document.createElement('tr');
                    
                    if (x % 2==0){
                        tr.setAttribute('class','alternateRow');
                    }
                    else {
                        tr.setAttribute('class','normalRow');
                    }
                    tr.setAttribute('onclick', 'captura_linha_engenheiro(this)');
                    larguras=Array('250px','100px','20px');
                    for (y=0;y<vreg.length-1;y++){
                        td=document.createElement('td');
                        a=document.createElement('a');
                        a.setAttribute('href', "#");
                        
                        a.innerHTML=vreg[y];
                        td.appendChild(a);
                        td.setAttribute('width',larguras[y]);
                        tr.appendChild(td);
                        tr.appendChild(td);
                        
                        tbody.appendChild(tr);
                    }
                    
                    tr.cells[1].children[0].innerHTML=newfunc.get_Descricao();
                    
                }    
                
            }
            
            
            function captura_linha_laudo(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['ppras|ANO_PERICIA'].value=valor_celula[0];
                document.forms[1].elements['ppras|NUMERO_LAUDO'].value=valor_celula[1];
                document.forms[1].elements['ppras|RAZAO_SOCIAL'].value=valor_celula[2];
                document.forms[1].elements['ppras|ANO_PERICIA'].focus();
                document.getElementById('consultaexterna').style.display='none';
            }

            div_pai=document.getElementById('consultaexterna');

            
            function monta_consulta_laudo(campo_origem,campo_pesquisa){
               empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();
              
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
                colunas=Array('ANO_P.','NUMERO_LAUDO','RAZÃO_SOCIAL');
                largura=Array('50px','130px','190px');
                for (xcab=0;xcab < 3;xcab++){
                     th=document.createElement('th');
                      th.setAttribute('width',largura[xcab]);
                     th.innerHTML=colunas[xcab];
                     tr.appendChild(th);  
                }  
                consultar_laudo(tabela,campo_pesquisa,' like ')
            }    
                
                
            function consultar_laudo(ntabela,campo_pesquisa,criterio){
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                ntabela.appendChild(tbody);
                empresa_ativa=empresa_ativa.toString();
                parm=Array(empresa_ativa,(campo_pesquisa.value));
                buscar_registros(window,'laudos','Consulta_numero_laudo',Array("ppras|CODIGO_EMPRESA","ppras|NUMERO_LAUDO"),parm,false,Array("=","like "),newregistros);
                
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
                    tr.setAttribute('onclick', 'captura_linha_laudo(this)');
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


            function monta_consulta_ppra(campo_origem,campo_pesquisa){
               empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();
              
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
                colunas=Array('ANO_P.','NUMERO_LAUDO','RAZÃO_SOCIAL');
                largura=Array('50px','130px','190px');
                for (xcab=0;xcab < 3;xcab++){
                     th=document.createElement('th');
                      th.setAttribute('width',largura[xcab]);
                     th.innerHTML=colunas[xcab];
                     tr.appendChild(th);  
                }  
                consultar_ppra(tabela,campo_pesquisa,' like ')
            }    
                
                
            function consultar_ppra(ntabela,campo_pesquisa,criterio){
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                ntabela.appendChild(tbody);
                empresa_ativa=empresa_ativa.toString();
                parm=Array(empresa_ativa,(campo_pesquisa.value));
                buscar_registros(window,'ppras','Consulta_numero_ppra',Array("ppras|CODIGO_EMPRESA","ppras|NUMERO_PPRA"),parm,false,Array("=","like "),newregistros);
                
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
                    tr.setAttribute('onclick', 'captura_linha_laudo(this)');
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

                        function carrega_campos_iniciais(){
                            if (document.forms[1].elements['ppras|ANO_PERICIA'].value=="") 
                            document.forms[1].elements['ppras|ANO_PERICIA'].value=new Date().getFullYear();
                            if (document.forms[1].elements['ppras|DATA_LANCAMENTO'].toString().length==0) 
                            document.forms[1].elements['ppras|DATA_LANCAMENTO'].value=retorna_data_hoje();
                            if (document.forms[1].elements['ppras|REVISAO'].value=="") 
                            document.forms[1].elements['ppras|REVISAO'].value="0";                            
                            if (document.forms[1].elements['ppras|SITUACAO_LAUDO'].value==" ") 
                            document.forms[1].elements['ppras|SITUACAO_LAUDO'].value="Iniciado";    
                            sequencial_foto=Array(Array());
                            
                        }
                        
                        function imprimir_ppra(){
                            ano_pericia=document.forms[1].elements['ppras|ANO_PERICIA'].value;
                            numero_ppra=document.forms[1].elements['ppras|NUMERO_PPRA'].value;
                            empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
                            empresa_ativa=empresa_ativa.toString();  
                            
                            if (confirm("Imprimir registro?")){                
   
                            parm="?CODIGO_EMPRESA="+empresa_ativa+"&ANO_PERICIA="+ano_pericia+"&NUMERO_PPRA="+numero_ppra;
                            window.open("../Reports/PPRA_Impressao.php"+parm, "print", "location=no resizable=YES directories=no menubar=no status=no toolbar=no titlebar=no");   
                            }        

                        }
                        function limpar_foto(campo){
                            row_img=campo.parentNode.parentNode.parentNode;
                            row_img.cells[1].children[0].children[0].src="";
                        }
                        function cria_consulta_instrumentos(campo){
                            campo_atual=campo.parentNode.children[0];
                            monta_consulta_instrumentos(campo_atual,document.forms[3].elements['txt_pesquisa']);
                        }
                        function captura_campo_atual(){
                            return campo_atual;
                        }
                        function carrega_funcoes(campo){
                            old_value_campo=campo.value;
                            buscar_registros(window,"funcoes","Carrega_Funcao","","",false,Array("=","="),newfuncoes);
                            campo.length=0;
                            campo.add(new Option('',0));
                            for (y=1;y <=newfuncoes.length();y++){
                                  opt=new Option(newfuncoes.get_Descricao_funcao_empresa([y-1]),newfuncoes.get_Codigo_funcao([y-1]));
                                  campo.add(opt);
                            }
                            campo.value=old_value_campo;

                            
                        }
                        function onchange_funcoes(campo){
                            linha_pai=campo.parentNode;
                            for (kl=1;kl<10;kl++){
                                linha_pai=linha_pai.parentNode;
                            }
                            unidade=linha_pai.rows[4].cells[0].children[0].value;
                            codigo_setor=linha_pai.rows[4].cells[1].children[0].value;
                            unidade_alterar=campo.parentNode.parentNode.cells[2].children[0];
                            unidade_alterar.value=unidade;
                            setor_alterar=campo.parentNode.parentNode.cells[3].children[0];
                            setor_alterar.value=codigo_setor;
                            
                        }
        </script>
</head>

<body onload="carrega_campos_iniciais()" >
    
    <center>
      <h1>Composição de Progama de Preven&ccedil;&atilde;o de Riscos Ambientais </h1>
    </center>
    <div id="divprin">
        <form id="frm_barra_tarefas" action="" >
            <button type="button" onclick="">
            <table width="40">
                <tr>
                <td height="42"><img src="../images/novo.png" height="40" width="38"  /></td>
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
            <button  type="button" onclick="registro_anterior(document.forms[1].elements['CODIGO_FUNCAO'],'funcoes')">
            <table>
                <tr>
                <td height="42"><img src="../images/barra_ferramentas/left.png" height="35" width="45" /></td>
                </tr>
                <tr>
                <td height="16">Anterior</td>
                </tr>
            </table>
          </button>
          <button  type="button" onclick="proximo_registro(document.forms[1].elements['CODIGO_FUNCAO'],'funcoes')">
          <table>
               <tr>
               <td height="42"><img src="../images/barra_ferramentas/right.png" height="35" width="45" /></td>
               </tr>
               <tr>
               <td height="16">Pr&oacute;ximo</td>
               </tr>
          </table>
          </button>
             <button  type="button" onclick="imprimir_ppra();">
             <table>
                  <tr>
                  <td height="40"><img src="../images/printer_2.png" height="40" width="40" /></td>
                  </tr>
                  <tr>
                  <td height="18">Imprimir</td>
                  </tr>
             </table>
             </button>
             <button  type="button" onclick="document.forms[1].reset();document.forms[1].elements['CODIGO_FUNCAO'].focus();">
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
    <br/>
	<div style="overflow:auto ">
        <table width="70%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaEmpresa" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Dados da Empresa        </td>
                <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaResponsaveis" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Dados dos Responsáveis</td>
                <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaSetoresAgentes" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Setores X Agentes Nocivos</td>
                
                <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaCronograma" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Cronograma de Ações</td>
                
            </tr>    
        </table>    
        <form action="" method="POST"  id="frm_ppras">
            <div id="divDadosEmpresa" style="overflow:auto;height:60%;min-height:60%;" >
                <table width="90%" border="0" class="tabela" >
                <tr>
                <td width="69">Código da Empresa </td>
                <td width="62"><input type="text" name="ppras|CODIGO_EMPRESA" maxlength="10" size="10" readonly="readonly" value="<?php echo $_SESSION['empresa_ativa']?>"/></td>
                <td colspan="2">Nome da Empresa</td>
                <td colspan="4"><input type="text" name="ppras|RAZAO_SOCIAL" readonly="readonly"  maxlength="50" size="50" value="<?php echo ($_SESSION['nome_empresa_ativa']) ?>"/></td>
                <td>CNPJ/C.E.I</td>
                <td colspan="2"><input type="text" name="ppras|CNPJ_CEI" readonly="readonly" value="<?php echo $_SESSION['cnpj_empresa_ativa'] ?>" /></td>
                <td width="40">C.NA.E</td>
                <td width="65"><input type="text" name="ppras|CNAE" readonly="readonly" size="10" value="<?php echo $_SESSION['cnae_empresa_ativa'] ?>" /></td>
                <td width="76">Grau de Risco </td>
                <td width="13"><input name="ppras|GRAU_RISCO" type='text' readonly="readonly" size="1" value="<?php echo $_SESSION['grau_risco_empresa_ativa'] ?>" /> </td>
                <td width="30">No. Func </td>
                <td width="92"><input type="text" name="ppras|NRO_FUNCS" maxlength="10" size="10" readonly="readonly" value="<?php echo $_SESSION['numero_funcs_empresa_ativa'] ?>" /></td>
              </tr>
              <tr>
                <td> Ano da Per&iacute;cia</td>
                <td><input type="text" name="ppras|ANO_PERICIA" maxlength="4" size="5"  onkeypress="return entrada_numerica_inteira(this,event)"  /></td>
                <td width="48">N&uacute;mero do PPRA</td>
                <td width="62"><input type="text" name="ppras|NUMERO_PPRA" maxlength="10" size="10" onkeypress="return entrada_numerica_inteira(this,event)" />
                <img src="../images/search.png" onclick="monta_consulta_ppra(document.forms[1].elements['ppras|NUMERO_PPRA'],document.forms[1].elements['ppras|NUMERO_PPRA'])" width="10px" height="10px"/></td>
                <td width="72">Data Lan&ccedil;amento PPRA</td>
                <td width="62"><input type="text" name="ppras|DATA_LANCAMENTO_PPRA" maxlength="10" size="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                <td width="85">N&uacute;mero do Laudo Origem</td>
                <td width="93"><input type="text" name="ppras|NUMERO_LAUDO" maxlength="10" size="10" onkeypress="return entrada_numerica_inteira(this,event)" />
                <img src="../images/search.png" onclick="monta_consulta_laudo(document.forms[1].elements['ppras|NUMERO_LAUDO'],document.forms[1].elements['ppras|NUMERO_LAUDO'])" width="10px" height="10px"/></td>
                <td width="61">Revis&atilde;o Laudo Origem</td>
                <td width="62"><input type="text" name="ppras|REVISAO" maxlength="2" size="2"  onkeypress="return entrada_numerica_inteira(this,event)"  onblur="pesquisar_laudo()" /></td>
                <td width="83">Data de Lan&ccedil;amento Laudo</td>
                <td colspan="2"><input type="text" name="ppras|DATA_LANCAMENTO_LAUDO" maxlength="10" size="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                <td colspan="2">Data/Hora da Per&iacute;cia</td>
                <td colspan="2"><input type="text" name="ppras|DATA_HORA_PERICIA" maxlength="19" size="19"  onkeyup="return formata_data_hora(this,'eu_dh',event);" onkeypress="return valida_data_hora(this,event)"/></td>
                </tr>
           </table>
            <label for="checkbox"></label>
            <table width="90%" border="0" class="tabela" >
            
            <tr>
                <td>Endere&ccedil;o de Atuação</td>
                <td colspan="4"><input type="text" readonly="readonly" name="ppras|ENDERECO_ATUACAO" maxlength="100" size="100" value="<?php echo ($_SESSION['endereco_empresa_ativa']) ?>" /></td>
			 </tr>
			 <tr>
               <td width="126">Bairro</td>
               <td width="237"><input type="text" name="ppras|BAIRRO_ATUACAO" SIZE="30" readonly="readonly" value="<?php echo ($_SESSION['bairro_empresa_ativa']) ?>" /></td>
                <td width="104">Municipio</td>
                <td width="267"><input type="text" name="ppras|MUNICIPIO_ATUACAO" SIZE="30" readonly="readonly" value="<?php echo ($_SESSION['municipio_empresa_ativa']) ?>"   /></td>
                <td width="68">CEP</td>
                <td width="73"><input type="text" name="ppras|CEP_ATUACAO" readonly="readonly" sIZE="10" value="<?php echo $_SESSION['cep_empresa_ativa'] ?>" /></td>
                <td width="21">UF</td>
                <td width="223"><input type="text" name="ppras|UF_ATUACAO" readonly="readonly" size="2" value="<?php echo $_SESSION['uf_empresa_ativa'] ?>" /></td>
			 </tr>
          </table>
      </div>
   		
          <div id="divResponsaveis" style="display:none;overflow:auto;height:60%;min-height:60%;" >
            <table width="90%" border="0" class="tabela" >
		<tr>
		<td width="86">Nome  do Técnico de Segurança</td>
		<td colspan="2" width="338"><input type="text" name="ppras_profissionais|NOME_RESPONSAVEL[]" maxlength="40" size="35"/> <img src="../images/search.png" onclick="monta_consulta_tecnicos(document.forms[1].elements['ppras_profissionais|NOME_RESPONSAVEL[]'][0],document.forms[3].elements['txt_pesquisa'])" width="10px" height="10px"/>		  </td>
                <td  width="338"><input type="hidden" name="ppras_profissionais|FUNCAO[]" maxlength="40" size="35" value="1"/> </td>
              </tr>
    </table>                    
            <table width="90%" border="0" class="tabela" >
		<tr>
		<td width="86">Nome  do Engenheiro de Segurança</td>
                <td colspan="2" width="338"><input type="text" name="ppras_profissionais|NOME_RESPONSAVEL[]" maxlength="40" size="35"/> <img src="../images/search.png" onclick="monta_consulta_engenheiros(document.forms[1].elements['ppras_profissionais|NOME_RESPONSAVEL[]'][1],document.forms[3].elements['txt_pesquisa'])" width="10px" height="10px"/>		  </td>
                <td  width="338"><input type="hidden" name="ppras_profissionais|FUNCAO[]" maxlength="40" size="35" disabled value="2"/> </td>
              </tr>
    </table>                    
     </div>        
              
        <div id="divSetores_Agentes" style="display:none;height:330px;max-height:1180px;overflow: -moz-scrollbars-vertical; overflow-y: scroll" >
		<button type="button" onclick="carregar_setores_agentes()">Carregar Informação dos Setores</button>
          
        </div>
        <div id="divCronograma" style="display:none;height:330px;max-height:1180px;overflow: -moz-scrollbars-vertical; overflow-y: scroll" >
		
          
        </div>


</form>
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
          </form>
        </div>
        <form>
                <div id="consultaexterna" style="postion:absolute;display:none">
      <input type="text" id="txt_pesquisa" name="txt_pesquisa" size="50"/>
            <button name="btn" onclick="monta_consulta_instrumentos(captura_campo_atual(),document.forms[3].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button><label onclick="document.getElementById('consultaexterna').style.display='none'"><strong>   X</strong></label>
      </div>     

    </form>
<div id="tipo_avaliacao" style="z-index:9;width:200px;position:absolute;display:none;background: #FFFF66"> 
    <label><center>Tipos de Avaliações</center></label>
    <label>Quantitativa</label>
<input type="checkbox" id="quantitativa" value="QN" /></td><td>
 <input type="hidden" id="quantitativa" value="" />
<label>Qualitativa</label>
<input type="checkbox" id="qualitativa" value="QL" /></td><td>
			  <input type="hidden" id="qualitativa" value="" />
<center><button type="button" onclick="executar_tipo()">Fechar</button></center>
</div>
<form>
<div id="div_setores_agentes" style="display:none;overflow:auto">
<table width="90%" border="0" class="tabela" >
<tr><td width="5%">Unidade </td>
  <td colspan="6"><input type="text" name="ppras_setores_agentes|UNIDADE[]" size="5" maxlength="5" />
    <input name="ppras_setores_agentes|DESCRICAO_UNIDADE[]" type="text" size="60" maxlength="60" /></td>
	
	</tr>
<tr><td>Setor </td><td colspan="6"><input name="ppras_setores_agentes|CODIGO_SETOR[]" type="text"  size="5" maxlength="5" />
  <input name="ppras_setores_agentes|NOME_SETOR[]" type="text" size="70" maxlength="70" /></td>
</tr>
<tr><td colspan="3" align="right">RISCOS </td><td colspan="2"><input name="ppras_setores_agentes|AGENTE[]" type="text"  size="50" maxlength="50" /></td></tr>
<tr>
  <td width="30%" colspan="2">Tipo</td>
  <td width="30%" >Fonte Geradora</td>
  <td width="14%" align="center">Intensidade/Concentração</td>
  <td width="17%" align="center">Grau de Risco</td>
  <td rowspan="2">
  <div id="div_tabela_funcoes">
      <table width="98%">
  <tr>
  <td width="48%" rowspan="2">Funções expostas</td>
  <td width="13%" colspan="2" align="center">Sexo</td>
  <td colspan="3" align="center">Medidas de proteção</td>
  </tr>
  <tr>
    <td width="6%">M</td>
    <td width="7%">F</td>
    <td width="15%">E.P.I Eficaz</td>
    <td width="11%">C.A E.P.I</td>
    <td width="13%">E.P.C. Eficaz</td>
  </tr>
  <tr>
    <td><input name="ppras_setores_agentes_funcoes|DESCRICAO_FUNCAO[]" type="text" id="ppras_setores_agentes_funcoes|DESCRICAO_FUNCAO" cols="20" rows="3"/></td>
    <td><input type="text" name="ppras_setores_agentes_funcoes|FUNCIONARIOS_EXPOSTOS_SEXO_MASCULINO[]" size="5" maxlength="5" /></td>
    <td><input type="text" name="ppras_setores_agentes|funcoes|FUNCIONARIOS_EXPOSTOS_SEXO_FEMININO[]" size="5" maxlength="5" /></td>
    <td><input type="text" name="ppras_setores_agentes_funcoes|EPI_EFICAZ[]" size="5" maxlength="5" /></td>
    <td><input type="text" name="ppras_setores_agentes_funcoes|CA_EPI[]" size="5" maxlength="5" /></td>
    <td><input type="text" name="ppras_setores_agentes_funcoes|EPC_EFICAZ[]" size="5" maxlength="5" /></td>
  </tr>
  </table>
  </div>
  </td>
</tr>
<tr>
  <td colspan="2" width="30%"><textarea style="font-family: arial;font-size:9px" type="text" name="ppras_setores_agentes|TIPO[]" rows="2" cols="30"></textarea></td>
  <td width="30%"><textarea name="ppras_setores_agentes|FONTE_GERADORA[]" cols="40" wrap="physical"></textarea></td>
  <td align="center"><input type="text" name="ppras_setores_agentes|INTENSIDADE[]" size="15" maxlength="15" /></td>
  <td>                <select name="laudos_avaliacoes_ruido|GRAU_RISCO[]"  >
    <option value="" selected="selected"></option>                        
    <option value="MÍNIMO">MÍNIMO</option>    
    <option value="MÉDIO">MÉDIO/CONTROLADO</option>
    <option value="ALTO">ALTO SEM PROTEÇÃO</option>
  </select></td>
  </tr>
</table>
</div>         			  

</form>
</body>
</html>
