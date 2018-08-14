<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Untitled Document</title>
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
	background:transpartent;
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
<script type="text/javascript" src="../classes/js/Funcoes_Laudo.js"></script>
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
<script type="text/javascript" src="../classes/js/MLaudos_Acompanhantes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Profissionais_Tecnicos.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Profissionais_Medicos.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_Profissionais_Engenheiros.js"></script>
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
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_incomodas_funcoes.js"></script>
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
<link href="../css/designer.css" type="text/css" rel="stylesheet" />    
<link href="estilosistema.css" type="text/css" rel="stylesheet" />
              <script type="text/javascript" charset="utf-8">
            defineAba( "divAbaEmpresa"  , "divDadosEmpresa"   );
            defineAba( "celAbaAcompanhantes" , "divAcompanhantes" );
            defineAba( "celAbaInstrumentos" , "divInstrumentos" );
            defineAba( "celAbaSetores"   , "divSetores"  );
            defineAba( "celAbaMaquinaseEquipamentos"   , "divMaquinas"  );            
            defineAba( "celAbaAtividades"   , "divAtividades"  );
            defineAba( "celAbaAvaliacoes"   , "divAvaliacoes"  );
            defineAbaAtiva( "divAbaEmpresa" );
			
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
                valores[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                valores[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                valores[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                valores[3]=document.forms[1].elements['laudos|REVISAO'].value;
                campos_profissionaist= new Array();
                valores_profissionaist= new Array();
                campos_profissionaist=campos_profissionaist.concat(campos);
                valores_profissionaist=valores_profissionaist.concat(valores);
                campos_profissionaist[4]='FUNCAO';
                valores_profissionaist[4]=1;
                buscar_registro(window,campos_profissionaist,valores_profissionaist,Array('=','=','=','=','='),'laudos_profissionais','laudos_profissionais','Busca_Laudos_Profissionais_Tecnicos',false,newlaudotecnicos);
                campos_profissionaise= new Array();
                valores_profissionaise= new Array();
                campos_profissionaise=campos_profissionaist.concat(campos);
                valores_profissionaise=valores_profissionaist.concat(valores);
                campos_profissionaist[4]='FUNCAO';
                valores_profissionaist[4]=2;
                buscar_registro(window,campos_profissionaise,valores_profissionaise,Array('=','=','=','=','='),'laudos_profissionais','laudos_profissionais','Busca_Laudos_Profissionais_Tecnicos',false,newlaudoengenheiros);
                buscar_registro(window,campos,valores,Array('=','=','=','='),'laudos_acompanhantes','laudos_acompanhantes','Busca_Laudos_Acompanhantes',false,newlaudoacompanhantes);
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
                                                        if ((divpai.children[x].id == 'div_tabela_modelo_avaliacao_'+nome_campo+"_quantitativa") ){
                                                                div_remover=document.getElementById('div_tabela_modelo_avaliacao_'+nome_campo+"_quantitativa");
                                                            if (confirm('Existe uma aba ativa para essa função (quantitativa). Deseja removê-la?')){
                                                                    divpai.removeChild(div_remover);	

                                                            }	
                                                        }
                                                    }
                                                    if (divpai.children.length>1){
                                                        if ((divpai.children[x].id == 'div_tabela_modelo_avaliacao_'+nome_campo+"_qualitativa") ){
                                                                div_remover=document.getElementById('div_tabela_modelo_avaliacao_'+nome_campo+"_qualitativa");
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
                                    xn=celulapai.lastChild.id;
                                    outros_descricao=celulapai.lastChild.value.toUpperCase();
                                    tabela.rows[0].cells[0].children[0].innerHTML=tabela.rows[0].cells[0].children[0].innerHTML+" "+outros_descricao;
                                    tabela2.rows[0].cells[0].children[0].innerHTML=tabela2.rows[0].cells[0].children[0].innerHTML+" "+outros_descricao;
                                }
				if (qualitativa.checked) {
					tabela.setAttribute('id','tabela_modelo_avaliacao_'+nome_campo+"_qualitativa");
                                        dv.setAttribute('id','div_tabela_modelo_avaliacao_'+nome_campo+"_qualitativa");
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
					tabela2.setAttribute('id','tabela_modelo_avaliacao_'+nome_campo+"_quantitativa");
                                        dv.setAttribute('id','div_tabela_modelo_avaliacao_'+nome_campo+"_quantitativa");
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
                        
           function carregar_maquinas_equipamentos_avaliacao(dv){

                unidade=dv.getElementsByTagName('input')[1].value;
                codigo_setor=dv.getElementsByTagName('input')[2].value;
                buscar_registros(window,'maquinas','Carrega_Maquinas_2',Array('UNIDADE','CODIGO_SETOR'),Array(unidade,codigo_setor),false,Array('=','=','='),newMaquinas);
                divmaqs=dv.getElementsByTagName('div')[7];
                dvmequip=divmaqs.getElementsByTagName('div')[0];
                divmaqs.removeChild(dvmequip);
                    
                    

                for (xo=0;xo<newMaquinas.length();xo++){
                    div_maqs2=dvmequip.cloneNode(true);
                    tblmaqs=div_maqs2.getElementsByTagName('table')[0];
                    linhax=tblmaqs.rows[0];
                    
                    linhax.cells[0].children[0].value=unidade;
                    linhax.cells[1].children[0].value=codigo_setor;
                    linhax.cells[2].children[0].length=0;
                    linhax.cells[2].children[0].add(new Option(newMaquinas.get_Nome_Maquina(xo),newMaquinas.get_Codigo_Maquina(xo)));
                    if (dv.children[0].id=='tabela_iluminamento_quantitativa'){
                        linhax.cells[3].children[0].value=newMaquinas.get_Taxa_De_Luminosidade(xo);
                    }
                    else if (dv.children[0].id=='tabela_ruido_quantitativa') {
                        linhax.cells[3].children[0].value=newMaquinas.get_Taxa_De_Ruido(xo);
                        if (newMaquinas.get_Classificacao_Local(xo)=='A'){
                            linhax.cells[5].children[0].value='65,0';
                        }
                        if (newMaquinas.get_Classificacao_Local(xo)=='O'){
                            linhax.cells[5].children[0].value='85,0';
                        }
                        
                    }
                    divmaqs.appendChild(div_maqs2);
                   
                }
                                
           
           }
           
           function exibir_historico_avaliacoes(dv,tipo){
               try{
                   switch (tipo){
                       case  "ruido":
                           exibir_historico_avaliacoes_ruido(dv);
                           break;
                       case "ruido_dosimetria":
                           exibir_historico_avaliacoes_ruido_dosimetria(dv);
                           break;
                       case "calor":    
                           exibir_historico_avaliacoes_calor(dv);
                           break;
                        case "frio":
                            exibir_historico_avaliacoes_frio(dv);
                            break;
                        case "umidade":
                            exibir_historico_avaliacoes_umidade(dv);
                            break;
                        case "radiacao_nao_ionizante":
                            exibir_historico_avaliacoes_radiacao_nao_ionizante(dv);
                            break;
                        case "radiacao_ionizante":
                            exibir_historico_avaliacoes_radiacao_ionizante(dv);
                            break;
                        case "outros_fisicos":
                           exibir_historico_avaliacoes_outros_fisicos(dv);
                           break;
                        case "sangue_humano":
                           exibir_historico_avaliacoes_sangue_humano(dv);
                           break;
                        case "sangue_animal":
                            exibir_historico_avaliacoes_sangue_animal(dv);
                            break;
                         case "manejo_animais":
                             exibir_historico_avaliacoes_manejo_animais(dv);
                             break;
                         case "outros_biologicos":
                            exibir_historico_avaliacoes_outros_biologicos(dv);
                            break;
                         case "produtos_limpeza":
                            exibir_historico_avaliacoes_produtos_limpeza(dv);
                            break;
                         case "tintas_solventes":
                            exibir_historico_avaliacoes_tintas_solventes(dv);
                            break;
                         case "hidrocarbonetos":
                           exibir_historico_avaliacoes_hidrocarbonetos(dv);
                           break;
                         case "fumos_metalicos":
                           exibir_historico_avaliacoes_fumos_metalicos(dv);
                           break;
                         case "poeiras_incomodas":
                           exibir_historico_avaliacoes_poeiras_incomodas(dv);
                           break;
                         case "poeiras_minerais":
                           exibir_historico_avaliacoes_poeiras_minerais(dv);
                           break;
                         case "outros_quimicos":
                            exibir_historico_avaliacoes_outros_quimicos(dv);
                            break;
                         case "iluminamento":
                           exibir_historico_avaliacoes_iluminamento(dv);  
                           break; 
                   }
               }
               catch (e){
                   
               }
               
           }
           
           function exibir_historico_avaliacoes_ruido(dv){
                 campos_aval_ruido=Array();
                 campos_aval_ruido[0]="CODIGO_EMPRESA";
                 campos_aval_ruido[1]="ANO_PERICIA";
                 campos_aval_ruido[2]="NUMERO_LAUDO";
                 campos_aval_ruido[3]="REVISAO";
                 campos_aval_ruido[4]="UNIDADE";
                 campos_aval_ruido[5]="CODIGO_SETOR"
                 valores_aval_ruido=Array();
                 valores_aval_ruido[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_ruido[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_ruido[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_ruido[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_ruido[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_ruido[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_ruido',"Carrega_Avaliacoes_Ruido",campos_aval_ruido,valores_aval_ruido,false,Array('=','=','=','=','=','='),newlaudoavalruido);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_ruido_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelaruido=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudoavalruido.length();xs++){
                  tabelaruido.rows[1].cells[1].children[0].value=newlaudoavalruido.get_Tipo_Avaliacao(xs);
                  tabelaruido.rows[3].cells[0].children[0].children[0].value=newlaudoavalruido.get_Texto_Explicativo(xs);
                  tabelaruido.rows[4].cells[0].children[0].value=newlaudoavalruido.get_Unidade(xs);
                  tabelaruido.rows[4].cells[1].children[0].value=newlaudoavalruido.get_Codigo_Setor(xs);
                  tabelaruido.rows[5].cells[1].children[0].value=newlaudoavalruido.get_Periodicidade_Exposicao(xs);
                  tabelaruido.rows[6].cells[1].children[0].value=newlaudoavalruido.get_Numero_Funcs_Setor(xs);
                  tabelaruido.rows[7].cells[1].children[0].value=newlaudoavalruido.get_Numero_Funcs_Expostos(xs);
                  tabelaruido.rows[11].cells[1].children[0].value=newlaudoavalruido.get_Campo_Acustico_Medido(xs);
                  tabelaruido.rows[12].cells[1].children[0].value=newlaudoavalruido.get_Nivel_Atenuacao_Protetor(xs);
                  tabelaruido.rows[13].cells[1].children[0].value=newlaudoavalruido.get_Nivel_Ruido_Atenuado(xs);
                  tabelaruido.rows[14].cells[1].children[0].value=newlaudoavalruido.get_Medidas_Protecao_Coletiva(xs);
                  tabelaruido.rows[14].cells[1].children[1].value=newlaudoavalruido.get_Medidas_Protecao_Coletiva_Outros(xs);
                  tabelaruido.rows[15].cells[1].children[0].value=newlaudoavalruido.get_Medidas_Protecao_Individual(xs);
                  tabelaruido.rows[15].cells[2].children[0].value=newlaudoavalruido.get_Medidas_Protecao_Individual_Outros(xs);
                  tabelaruido.rows[17].cells[1].children[0].value=newlaudoavalruido.get_Fonte_Geradora(xs);
                  tabelaruido.rows[18].cells[1].children[0].value=newlaudoavalruido.get_Enquadramento(xs);
                  
                 }
               
                 divmaqruido=tabelaruido.rows[10].cells[0].children[0];
                 divmaq=divmaqruido.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_ruido_maquinas',"Carrega_Avaliacoes_Ruido_Maquinas",campos_aval_ruido,valores_aval_ruido,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_ruido_maquinas);
                 if (newlaudosavaliacoes_ruido_maquinas.length()>0) while (divmaqruido.children.length>0) divmaqruido.removeChild(divmaqruido.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_ruido_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_ruido_maquinas.get_Unidade(xs),newlaudosavaliacoes_ruido_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_ruido_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqruido=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqruido.rows[0].cells[0].children[0].value=newlaudosavaliacoes_ruido_maquinas.get_Unidade(xs);
                     tabelamaqruido.rows[0].cells[1].children[0].value=newlaudosavaliacoes_ruido_maquinas.get_Codigo_setor(xs);
                     tabelamaqruido.rows[0].cells[2].children[0].length=0;
                     tabelamaqruido.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_ruido_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqruido.rows[0].cells[3].children[0].value=newlaudosavaliacoes_ruido_maquinas.get_Nivel_ruido_medido(xs);
                     tabelamaqruido.rows[0].cells[4].children[0].value=newlaudosavaliacoes_ruido_maquinas.get_Tempo_exposicao_diaria(xs);
                     tabelamaqruido.rows[0].cells[5].children[0].value=newlaudosavaliacoes_ruido_maquinas.get_Nivel_ruido_permitido(xs);
                     tabelamaqruido.rows[0].cells[6].children[0].value=newlaudosavaliacoes_ruido_maquinas.get_Tempo_maximo_exposicao_diaria(xs);
                     divmaqruido.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelaruido.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncruido=tabelaruido.rows[8].cells[0].children[1];
                 divfunc=divfuncruido.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_ruido_funcoes',"Carrega_Avaliacoes_ruido_funcoes",campos_aval_ruido,valores_aval_ruido,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_ruido_funcoes);
                 if (newlaudosavaliacoes_ruido_funcoes.length()>0) while (divfuncruido.children.length>0) divfuncruido.removeChild(divfuncruido.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_ruido_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_ruido_funcoes.get_Codigo_Funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncruido=divfunc2.children[0];
                     tabelafuncruido.rows[0].cells[0].children[0].length=0;
                     tabelafuncruido.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_ruido_funcoes.get_Codigo_Funcao(xs)));
                     tabelafuncruido.rows[0].cells[0].children[0].value=newlaudosavaliacoes_ruido_funcoes.get_Codigo_Funcao(xs);
                     tabelafuncruido.rows[0].cells[1].children[0].value=newlaudosavaliacoes_ruido_funcoes.get_Periodicidade_Exposicao(xs);
                     tabelafuncruido.rows[0].cells[2].children[0].value=newlaudosavaliacoes_ruido_funcoes.get_Unidade(xs);
                     tabelafuncruido.rows[0].cells[3].children[0].value=newlaudosavaliacoes_ruido_funcoes.get_Codigo_Setor(xs);
                     tabelafuncruido.rows[0].cells[4].children[0].value=newlaudosavaliacoes_ruido_funcoes.get_Grau_Insalubridade(xs);
                     tabelafuncruido.rows[0].cells[5].children[0].value=newlaudosavaliacoes_ruido_funcoes.get_Intensidade_Concentracao(xs);
                     tabelafuncruido.rows[0].cells[6].children[0].value=newlaudosavaliacoes_ruido_funcoes.get_Intensidade_Concentracao_Unidade(xs);
                     tabelafuncruido.rows[0].cells[7].children[0].value=newlaudosavaliacoes_ruido_funcoes.get_Tecnica_Utilizada(xs);
                     tabelafuncruido.rows[0].cells[8].children[0].value=newlaudosavaliacoes_ruido_funcoes.get_Epc_Eficaz(xs);
                     tabelafuncruido.rows[0].cells[9].children[0].value=newlaudosavaliacoes_ruido_funcoes.get_Epi_Eficaz(xs);
                     tabelafuncruido.rows[0].cells[10].children[0].value=newlaudosavaliacoes_ruido_funcoes.get_CA_EPI(xs);
                     divfuncruido.appendChild(divfunc2);
                     
                 }                 
           }
           
           function exibir_historico_avaliacoes_iluminamento(dv){
                 campos_aval_iluminamento=Array();
                 campos_aval_iluminamento[0]="CODIGO_EMPRESA";
                 campos_aval_iluminamento[1]="ANO_PERICIA";
                 campos_aval_iluminamento[2]="NUMERO_LAUDO";
                 campos_aval_iluminamento[3]="REVISAO";
                 campos_aval_iluminamento[4]="UNIDADE";
                 campos_aval_iluminamento[5]="CODIGO_SETOR"
                 valores_aval_iluminamento=Array();
                 valores_aval_iluminamento[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_iluminamento[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_iluminamento[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_iluminamento[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_iluminamento[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_iluminamento[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_iluminamento',"Carrega_Avaliacoes_iluminamento",campos_aval_iluminamento,valores_aval_iluminamento,false,Array('=','=','=','=','=','='),newlaudoavaliluminamento);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_iluminamento_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelas=dv.getElementsByTagName('table');
                 tabelailuminamento=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudoavaliluminamento.length();xs++){
                  tabelailuminamento.rows[1].cells[1].children[0].value=newlaudoavaliluminamento.get_Tipo_avaliacao(xs);
                  tabelailuminamento.rows[3].cells[0].children[0].value=newlaudoavaliluminamento.get_Texto_explicativo(xs);
                  tabelailuminamento.rows[5].cells[1].children[0].value=newlaudoavaliluminamento.get_Periodicidade_exposicao(xs);
                  tabelailuminamento.rows[4].cells[0].children[0].value=newlaudoavaliluminamento.get_Unidade(xs);
                  tabelailuminamento.rows[4].cells[1].children[0].value=newlaudoavaliluminamento.get_Codigo_setor(xs);
                  
                  tabelailuminamento.rows[5].cells[1].children[0].value=newlaudoavaliluminamento.get_Numero_funcs_setor(xs);
                  tabelailuminamento.rows[6].cells[1].children[0].value=newlaudoavaliluminamento.get_Numero_funcs_expostos(xs);
                  tabelailuminamento.rows[11].cells[1].children[0].value=newlaudoavaliluminamento.get_Enquadramento(xs);
                  
                 }
               
                 divmaqiluminamento=tabelailuminamento.rows[9].cells[0].children[0];
                 divmaq=divmaqiluminamento.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_iluminamento_maquinas',"Carrega_Avaliacoes_Iluminamento_Maquinas",campos_aval_iluminamento,valores_aval_iluminamento,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_iluminamento_maquinas);
                 if (newlaudosavaliacoes_iluminamento_maquinas.length()>0) while (divmaqiluminamento.children.length>0) divmaqiluminamento.removeChild(divmaqiluminamento.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_iluminamento_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_iluminamento_maquinas.get_Unidade(xs),newlaudosavaliacoes_iluminamento_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_iluminamento_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqiluminamento=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqiluminamento.rows[0].cells[0].children[0].value=newlaudosavaliacoes_iluminamento_maquinas.get_Unidade(xs);
                     tabelamaqiluminamento.rows[0].cells[1].children[0].value=newlaudosavaliacoes_iluminamento_maquinas.get_Codigo_setor(xs);
                     tabelamaqiluminamento.rows[0].cells[2].children[0].length=0;
                     tabelamaqiluminamento.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_iluminamento_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqiluminamento.rows[0].cells[3].children[0].value=newlaudosavaliacoes_iluminamento_maquinas.get_Lux_medido(xs);
                     tabelamaqiluminamento.rows[0].cells[4].children[0].value=newlaudosavaliacoes_iluminamento_maquinas.get_Lux_nbr(xs);
                     divmaqiluminamento.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelailuminamento.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfunciluminamento=tabelailuminamento.rows[8].cells[0].children[1];
                 divfunc=divfunciluminamento.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_iluminamento_funcoes',"Carrega_Avaliacoes_iluminamento_funcoes",campos_aval_iluminamento,valores_aval_iluminamento,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_iluminamento_funcoes);
                 if (newlaudosavaliacoes_iluminamento_funcoes.length()>0) while (divfunciluminamento.children.length>0) divfunciluminamento.removeChild(divfunciluminamento.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_iluminamento_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_iluminamento_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafunciluminamento=divfunc2.children[0];
                     tabelafunciluminamento.rows[0].cells[0].children[0].length=0;
                     tabelafunciluminamento.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_iluminamento_funcoes.get_Codigo_funcao(xs)));
                     tabelafunciluminamento.rows[0].cells[0].children[0].value=newlaudosavaliacoes_iluminamento_funcoes.get_Codigo_funcao(xs);
                     tabelafunciluminamento.rows[0].cells[1].children[0].value=newlaudosavaliacoes_iluminamento_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafunciluminamento.rows[0].cells[2].children[0].value=newlaudosavaliacoes_iluminamento_funcoes.get_Unidade(xs);
                     tabelafunciluminamento.rows[0].cells[3].children[0].value=newlaudosavaliacoes_iluminamento_funcoes.get_Codigo_setor(xs);
                     tabelafunciluminamento.rows[0].cells[4].children[0].value=newlaudosavaliacoes_iluminamento_funcoes.get_Grau_insalubridade(xs);
                     tabelafunciluminamento.rows[0].cells[5].children[0].value=newlaudosavaliacoes_iluminamento_funcoes.get_Intensidade_concentracao(xs);
                     tabelafunciluminamento.rows[0].cells[6].children[0].value=newlaudosavaliacoes_iluminamento_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafunciluminamento.rows[0].cells[7].children[0].value=newlaudosavaliacoes_iluminamento_funcoes.get_Tecnica_utilizada(xs);
                     tabelafunciluminamento.rows[0].cells[8].children[0].value=newlaudosavaliacoes_iluminamento_funcoes.get_Epc_eficaz(xs);
                     tabelafunciluminamento.rows[0].cells[9].children[0].value=newlaudosavaliacoes_iluminamento_funcoes.get_Epi_eficaz(xs);
                     tabelafunciluminamento.rows[0].cells[10].children[0].value=newlaudosavaliacoes_iluminamento_funcoes.get_Ca_epi(xs);
                     divfunciluminamento.appendChild(divfunc2);
                     
                 }                 
                 
                 
           }
           
           
           
           
function exibir_historico_avaliacoes_calor(dv){
                 campos_aval_calor=Array();
                 campos_aval_calor[0]="CODIGO_EMPRESA";
                 campos_aval_calor[1]="ANO_PERICIA";
                 campos_aval_calor[2]="NUMERO_LAUDO";
                 campos_aval_calor[3]="REVISAO";
                 campos_aval_calor[4]="UNIDADE";
                 campos_aval_calor[5]="CODIGO_SETOR"
                 valores_aval_calor=Array();
                 valores_aval_calor[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_calor[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_calor[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_calor[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_calor[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_calor[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_calor',"Carrega_Avaliacoes_Calor",campos_aval_calor,valores_aval_calor,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_calor);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_calor_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelacalor=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_calor.length();xs++){
                  tabelacalor.rows[1].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Tipo_avaliacao(xs);
                  tabelacalor.rows[3].cells[0].children[0].value=newlaudosavaliacoes_calor.get_Texto_explicativo(xs);
                  tabelacalor.rows[4].cells[0].children[0].value=newlaudosavaliacoes_calor.get_Unidade(xs);
                  tabelacalor.rows[4].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Codigo_setor(xs);
                  tabelacalor.rows[5].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Periodicidade_exposicao(xs);
                  tabelacalor.rows[6].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Numero_funcs_setor(xs);
                  tabelacalor.rows[8].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Numero_funcs_expostos(xs);
                  tabelacalor.rows[12].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Medidas_protecao_coletiva(xs);
                  tabelacalor.rows[12].cells[1].children[1].value=newlaudosavaliacoes_calor.get_Medidas_protecao_coletiva_outros(xs);
                  tabelacalor.rows[13].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Medidas_protecao_individual(xs);
                  tabelacalor.rows[13].cells[2].children[0].value=newlaudosavaliacoes_calor.get_Medidas_protecao_individual_outros(xs);
                  tabelacalor.rows[14].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Fonte_geradora(xs);
                  tabelacalor.rows[15].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Enquadramento(xs);
                  
                 }
               
                 divmaqcalor=tabelacalor.rows[11].cells[0].children[0];
                 divmaq=divmaqcalor.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_calor_maquinas',"Carrega_Avaliacoes_Calor_Maquinas",campos_aval_calor,valores_aval_calor,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_calor_maquinas);
                 if (newlaudosavaliacoes_calor_maquinas.length()>0) while (divmaqcalor.children.length>0) divmaqcalor.removeChild(divmaqcalor.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_calor_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_calor_maquinas.get_Unidade(xs),newlaudosavaliacoes_calor_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_calor_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqcalor=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqcalor.rows[0].cells[0].children[0].value=newlaudosavaliacoes_calor_maquinas.get_Unidade(xs);
                     tabelamaqcalor.rows[0].cells[1].children[0].value=newlaudosavaliacoes_calor_maquinas.get_Codigo_setor(xs);
                     tabelamaqcalor.rows[0].cells[2].children[0].length=0;
                     tabelamaqcalor.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_calor_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqcalor.rows[0].cells[3].children[0].value=newlaudosavaliacoes_calor_maquinas.get_Temperatura_medida(xs);
                     tabelamaqcalor.rows[0].cells[4].children[0].value=newlaudosavaliacoes_calor_maquinas.get_Temperatura_permitida(xs);
                     divmaqcalor.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelacalor.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfunccalor=tabelacalor.rows[9].cells[0].children[1];
                 divfunc=divfunccalor.children[0].cloneNode(true);
                 buscar_registros(window,'laudos_avaliacoes_calor_funcoes',"Carrega_Avaliacoes_calor_funcoes",campos_aval_calor,valores_aval_calor,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_calor_funcoes);
                 if (newlaudosavaliacoes_calor_funcoes.length()>0) while (divfunccalor.children.length>0) divfunccalor.removeChild(divfunccalor.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_calor_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_calor_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafunccalor=divfunc2.children[0];
                     tabelafunccalor.rows[0].cells[0].children[0].length=0;
                     tabelafunccalor.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_calor_funcoes.get_Codigo_funcao(xs)));
                     tabelafunccalor.rows[0].cells[0].children[0].value=newlaudosavaliacoes_calor_funcoes.get_Codigo_funcao(xs);
                     tabelafunccalor.rows[0].cells[1].children[0].value=newlaudosavaliacoes_calor_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafunccalor.rows[0].cells[2].children[0].value=newlaudosavaliacoes_calor_funcoes.get_Unidade(xs);
                     tabelafunccalor.rows[0].cells[3].children[0].value=newlaudosavaliacoes_calor_funcoes.get_Codigo_setor(xs);
                     tabelafunccalor.rows[0].cells[4].children[0].value=newlaudosavaliacoes_calor_funcoes.get_Grau_insalubridade(xs);
                     tabelafunccalor.rows[0].cells[5].children[0].value=newlaudosavaliacoes_calor_funcoes.get_Intensidade_concentracao(xs);
                     tabelafunccalor.rows[0].cells[6].children[0].value=newlaudosavaliacoes_calor_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafunccalor.rows[0].cells[7].children[0].value=newlaudosavaliacoes_calor_funcoes.get_Tecnica_utilizada(xs);
                     tabelafunccalor.rows[0].cells[8].children[0].value=newlaudosavaliacoes_calor_funcoes.get_Epc_eficaz(xs);
                     tabelafunccalor.rows[0].cells[9].children[0].value=newlaudosavaliacoes_calor_funcoes.get_Epi_eficaz(xs);
                     tabelafunccalor.rows[0].cells[10].children[0].value=newlaudosavaliacoes_calor_funcoes.get_Ca_epi(xs);
                     divfunccalor.appendChild(divfunc2);
                     
                 }                 
                 
                 
            }          
newlaudostipoaval
function exibir_historico_avaliacoes_frio(dv){
                 campos_aval_frio=Array();
                 campos_aval_frio[0]="CODIGO_EMPRESA";
                 campos_aval_frio[1]="ANO_PERICIA";
                 campos_aval_frio[2]="NUMERO_LAUDO";
                 campos_aval_frio[3]="REVISAO";
                 campos_aval_frio[4]="UNIDADE";
                 campos_aval_frio[5]="CODIGO_SETOR"
                 valores_aval_frio=Array();
                 valores_aval_frio[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_frio[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_frio[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_frio[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_frio[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_frio[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_frio',"Carrega_Avaliacoes_Frio",campos_aval_frio,valores_aval_frio,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_frio);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_frio_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelafrio=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_frio.length();xs++){
                  tabelafrio.rows[1].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Tipo_avaliacao(xs);
                  tabelafrio.rows[3].cells[0].children[0].value=newlaudosavaliacoes_frio.get_Texto_explicativo(xs);
                  tabelafrio.rows[4].cells[0].children[0].value=newlaudosavaliacoes_frio.get_Unidade(xs);
                  tabelafrio.rows[4].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Codigo_setor(xs);
                  tabelafrio.rows[5].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Periodicidade_exposicao(xs);
                  tabelafrio.rows[6].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Numero_funcs_setor(xs);
                  tabelafrio.rows[7].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Numero_funcs_expostos(xs);
                  tabelafrio.rows[11].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Medidas_protecao_coletiva(xs);
                  tabelafrio.rows[11].cells[2].children[0].value=newlaudosavaliacoes_frio.get_Medidas_protecao_coletiva_outros(xs);
                  tabelafrio.rows[12].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Medidas_protecao_individual(xs);
                  tabelafrio.rows[12].cells[2].children[0].value=newlaudosavaliacoes_frio.get_Medidas_protecao_individual_outros(xs);
                  tabelafrio.rows[13].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Fonte_geradora(xs);
                  tabelafrio.rows[14].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Enquadramento(xs);
                  
                 }
               
                 divmaqfrio=tabelafrio.rows[10].cells[0].children[0];
                 divmaq=divmaqfrio.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_frio_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_frio,valores_aval_frio,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_frio_maquinas);
                 if (newlaudosavaliacoes_frio_maquinas.length()>0) while (divmaqfrio.children.length>0) divmaqfrio.removeChild(divmaqfrio.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_frio_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_frio_maquinas.get_Unidade(xs),newlaudosavaliacoes_frio_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_frio_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqfrio=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqfrio.rows[0].cells[0].children[0].value=newlaudosavaliacoes_frio_maquinas.get_Unidade(xs);
                     tabelamaqfrio.rows[0].cells[1].children[0].value=newlaudosavaliacoes_frio_maquinas.get_Codigo_setor(xs);
                     tabelamaqfrio.rows[0].cells[2].children[0].length=0;
                     tabelamaqfrio.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_frio_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqfrio.rows[0].cells[3].children[0].value=newlaudosavaliacoes_frio_maquinas.get_Temperatura_medida(xs);
                     tabelamaqfrio.rows[0].cells[4].children[0].value=newlaudosavaliacoes_frio_maquinas.get_Temperatura_permitida(xs);
                     divmaqfrio.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelafrio.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncfrio=tabelafrio.rows[8].cells[0].children[1];
                 divfunc=divfuncfrio.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_frio_funcoes',"Carrega_Avaliacoes_frio_funcoes",campos_aval_frio,valores_aval_frio,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_frio_funcoes);
                 if (newlaudosavaliacoes_frio_funcoes.length()>0) while (divfuncfrio.children.length>0) divfuncfrio.removeChild(divfuncfrio.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_frio_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_frio_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncfrio=divfunc2.children[0];
                     tabelafuncfrio.rows[0].cells[0].children[0].length=0;
                     tabelafuncfrio.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_frio_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncfrio.rows[0].cells[0].children[0].value=newlaudosavaliacoes_frio_funcoes.get_Codigo_funcao(xs);
                     tabelafuncfrio.rows[0].cells[1].children[0].value=newlaudosavaliacoes_frio_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncfrio.rows[0].cells[2].children[0].value=newlaudosavaliacoes_frio_funcoes.get_Unidade(xs);
                     tabelafuncfrio.rows[0].cells[3].children[0].value=newlaudosavaliacoes_frio_funcoes.get_Codigo_setor(xs);
                     tabelafuncfrio.rows[0].cells[4].children[0].value=newlaudosavaliacoes_frio_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncfrio.rows[0].cells[5].children[0].value=newlaudosavaliacoes_frio_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncfrio.rows[0].cells[6].children[0].value=newlaudosavaliacoes_frio_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncfrio.rows[0].cells[7].children[0].value=newlaudosavaliacoes_frio_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncfrio.rows[0].cells[8].children[0].value=newlaudosavaliacoes_frio_funcoes.get_Epc_eficaz(xs);
                     tabelafuncfrio.rows[0].cells[9].children[0].value=newlaudosavaliacoes_frio_funcoes.get_Epi_eficaz(xs);
                     tabelafuncfrio.rows[0].cells[10].children[0].value=newlaudosavaliacoes_frio_funcoes.get_Ca_epi(xs);
                     divfuncfrio.appendChild(divfunc2);
                     
                 }                 
                 
                 
                 
            }          
function exibir_historico_avaliacoes_umidade(dv){
                 campos_aval_umidade=Array();
                 campos_aval_umidade[0]="CODIGO_EMPRESA";
                 campos_aval_umidade[1]="ANO_PERICIA";
                 campos_aval_umidade[2]="NUMERO_LAUDO";
                 campos_aval_umidade[3]="REVISAO";
                 campos_aval_umidade[4]="UNIDADE";
                 campos_aval_umidade[5]="CODIGO_SETOR"
                 valores_aval_umidade=Array();
                 valores_aval_umidade[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_umidade[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_umidade[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_umidade[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_umidade[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_umidade[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_umidade',"Carrega_Avaliacoes_umidade",campos_aval_umidade,valores_aval_umidade,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_umidade);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_umidade_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelaumidade=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_umidade.length();xs++){
                  tabelaumidade.rows[1].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Tipo_avaliacao(xs);
                  tabelaumidade.rows[3].cells[0].children[0].value=newlaudosavaliacoes_umidade.get_Texto_explicativo(xs);
                  tabelaumidade.rows[4].cells[0].children[0].value=newlaudosavaliacoes_umidade.get_Unidade(xs);
                  tabelaumidade.rows[4].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Codigo_setor(xs);
                  tabelaumidade.rows[5].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Periodicidade_exposicao(xs);
                  tabelaumidade.rows[6].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Numero_funcs_setor(xs);
                  tabelaumidade.rows[8].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Numero_funcs_expostos(xs);
                  tabelaumidade.rows[12].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Medidas_protecao_coletiva(xs);
                  tabelaumidade.rows[12].cells[1].children[1].value=newlaudosavaliacoes_umidade.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaumidade.rows[13].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Medidas_protecao_individual(xs);
                  tabelaumidade.rows[13].cells[2].children[0].value=newlaudosavaliacoes_umidade.get_Medidas_protecao_individual_outros(xs);
                  tabelaumidade.rows[14].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Fonte_geradora(xs);
                  tabelaumidade.rows[15].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Enquadramento(xs);
                  
                 }
               
                 divmaqumidade=tabelaumidade.rows[10].cells[0].children[0];
                 divmaq=divmaqumidade.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_umidade_maquinas',"Carrega_Avaliacoes_umidade_Maquinas",campos_aval_umidade,valores_aval_umidade,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_umidade_maquinas);
                 if (newlaudosavaliacoes_umidade_maquinas.length()>0) while (divmaqumidade.children.length>0) divmaqumidade.removeChild(divmaqumidade.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_umidade_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_umidade_maquinas.get_Unidade(xs),newlaudosavaliacoes_umidade_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_umidade_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqumidade=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqumidade.rows[0].cells[0].children[0].value=newlaudosavaliacoes_umidade_maquinas.get_Unidade(xs);
                     tabelamaqumidade.rows[0].cells[1].children[0].value=newlaudosavaliacoes_umidade_maquinas.get_Codigo_setor(xs);
                     tabelamaqumidade.rows[0].cells[2].children[0].length=0;
                     tabelamaqumidade.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_umidade_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqumidade.rows[0].cells[2].children[0].value=newlaudosavaliacoes_umidade_maquinas.get_Codigo_maquina(xs);
                     tabelamaqumidade.rows[0].cells[3].children[0].value=newlaudosavaliacoes_umidade_maquinas.get_Umidade_medida(xs);
                     tabelamaqumidade.rows[0].cells[4].children[0].value=newlaudosavaliacoes_umidade_maquinas.get_Umidade_permitida(xs);
                     divmaqumidade.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelaumidade.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncumidade=tabelaumidade.rows[9].cells[0].children[1];
                 divfunc=divfuncumidade.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_umidade_funcoes',"Carrega_Avaliacoes_umidade_funcoes",campos_aval_umidade,valores_aval_umidade,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_umidade_funcoes);
                 if (newlaudosavaliacoes_umidade_funcoes.length()>0) while (divfuncumidade.children.length>0) divfuncumidade.removeChild(divfuncumidade.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_umidade_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_umidade_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncumidade=divfunc2.children[0];
                     tabelafuncumidade.rows[0].cells[0].children[0].length=0;
                     tabelafuncumidade.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_umidade_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncumidade.rows[0].cells[0].children[0].value=newlaudosavaliacoes_umidade_funcoes.get_Codigo_funcao(xs);
                     tabelafuncumidade.rows[0].cells[1].children[0].value=newlaudosavaliacoes_umidade_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncumidade.rows[0].cells[2].children[0].value=newlaudosavaliacoes_umidade_funcoes.get_Unidade(xs);
                     tabelafuncumidade.rows[0].cells[3].children[0].value=newlaudosavaliacoes_umidade_funcoes.get_Codigo_setor(xs);
                     tabelafuncumidade.rows[0].cells[4].children[0].value=newlaudosavaliacoes_umidade_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncumidade.rows[0].cells[5].children[0].value=newlaudosavaliacoes_umidade_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncumidade.rows[0].cells[6].children[0].value=newlaudosavaliacoes_umidade_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncumidade.rows[0].cells[7].children[0].value=newlaudosavaliacoes_umidade_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncumidade.rows[0].cells[8].children[0].value=newlaudosavaliacoes_umidade_funcoes.get_Epc_eficaz(xs);
                     tabelafuncumidade.rows[0].cells[9].children[0].value=newlaudosavaliacoes_umidade_funcoes.get_Epi_eficaz(xs);
                     tabelafuncumidade.rows[0].cells[10].children[0].value=newlaudosavaliacoes_umidade_funcoes.get_Ca_epi(xs);
                     divfuncumidade.appendChild(divfunc2);
                     
                 }                 
                 
                 
                 
            }          

function exibir_historico_avaliacoes_radiacao_nao_ionizante(dv){
                 campos_aval_radiacao_nao_ionizante=Array();
                 campos_aval_radiacao_nao_ionizante[0]="CODIGO_EMPRESA";
                 campos_aval_radiacao_nao_ionizante[1]="ANO_PERICIA";
                 campos_aval_radiacao_nao_ionizante[2]="NUMERO_LAUDO";
                 campos_aval_radiacao_nao_ionizante[3]="REVISAO";
                 campos_aval_radiacao_nao_ionizante[4]="UNIDADE";
                 campos_aval_radiacao_nao_ionizante[5]="CODIGO_SETOR"
                 valores_aval_radiacao_nao_ionizante=Array();
                 valores_aval_radiacao_nao_ionizante[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_radiacao_nao_ionizante[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_radiacao_nao_ionizante[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_radiacao_nao_ionizante[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_radiacao_nao_ionizante[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_radiacao_nao_ionizante[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_radiacao_nao_ionizante',"Carrega_Avaliacoes_radiacao_nao_ionizante",campos_aval_radiacao_nao_ionizante,valores_aval_radiacao_nao_ionizante,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_radiacao_nao_ionizante);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_radiacao_nao_ionizante_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelaradiacao_nao_ionizante=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_radiacao_nao_ionizante.length();xs++){
                  tabelaradiacao_nao_ionizante.rows[1].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Tipo_avaliacao(xs);
                  tabelaradiacao_nao_ionizante.rows[3].cells[0].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Texto_explicativo(xs);
                  tabelaradiacao_nao_ionizante.rows[4].cells[0].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Unidade(xs);
                  tabelaradiacao_nao_ionizante.rows[4].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Codigo_setor(xs);
                  tabelaradiacao_nao_ionizante.rows[5].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Periodicidade_exposicao(xs);
                  tabelaradiacao_nao_ionizante.rows[6].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Numero_funcs_setor(xs);
                  tabelaradiacao_nao_ionizante.rows[7].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Numero_funcs_expostos(xs);
                  tabelaradiacao_nao_ionizante.rows[10].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Medidas_protecao_coletiva(xs);
                  tabelaradiacao_nao_ionizante.rows[10].cells[1].children[1].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaradiacao_nao_ionizante.rows[11].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Medidas_protecao_individual(xs);
                  tabelaradiacao_nao_ionizante.rows[11].cells[2].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Medidas_protecao_individual_outros(xs);
                  tabelaradiacao_nao_ionizante.rows[12].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Fonte_geradora(xs);
                  tabelaradiacao_nao_ionizante.rows[13].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Enquadramento(xs);
                  
                 }
               
                 divmaqradiacao_nao_ionizante=tabelaradiacao_nao_ionizante.rows[9].cells[0].children[0];
                 divmaq=divmaqradiacao_nao_ionizante.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_radiacao_nao_ionizante_maquinas',"Carrega_Avaliacoes_radiacao_nao_ionizante_Maquinas",campos_aval_radiacao_nao_ionizante,valores_aval_radiacao_nao_ionizante,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_radiacao_nao_ionizante_maquinas);
                 if (newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.length()>0) while (divmaqradiacao_nao_ionizante.children.length>0) divmaqradiacao_nao_ionizante.removeChild(divmaqradiacao_nao_ionizante.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Unidade(xs),newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     divmaq2=divmaq.cloneNode(true);
                     tabelamaqradiacao_nao_ionizante=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqradiacao_nao_ionizante.rows[0].cells[0].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Unidade(xs);
                     tabelamaqradiacao_nao_ionizante.rows[0].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Codigo_setor(xs);
                     tabelamaqradiacao_nao_ionizante.rows[0].cells[2].children[0].length=0;
                     tabelamaqradiacao_nao_ionizante.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqradiacao_nao_ionizante.rows[0].cells[3].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Densidade_medida(xs);
                     tabelamaqradiacao_nao_ionizante.rows[0].cells[4].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Densidade_permitida(xs);
                     divmaqradiacao_nao_ionizante.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelaradiacao_nao_ionizante.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncradiacao_nao_ionizante=tabelaradiacao_nao_ionizante.rows[8].cells[0].children[1];
                 divfunc=divfuncradiacao_nao_ionizante.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_radiacao_nao_ionizante_funcoes',"Carrega_Avaliacoes_radiacao_nao_ionizante_funcoes",campos_aval_radiacao_nao_ionizante,valores_aval_radiacao_nao_ionizante,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_radiacao_nao_ionizante_funcoes);
                 if (newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.length()>0) while (divfuncradiacao_nao_ionizante.children.length>0) divfuncradiacao_nao_ionizante.removeChild(divfuncradiacao_nao_ionizante.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncradiacao_nao_ionizante=divfunc2.children[0];
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[0].children[0].length=0;
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[0].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Codigo_funcao(xs);
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[2].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Unidade(xs);
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[3].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Codigo_setor(xs);
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[4].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[5].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[6].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[7].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[8].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Epc_eficaz(xs);
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[9].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Epi_eficaz(xs);
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[10].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Ca_epi(xs);
                     divfuncradiacao_nao_ionizante.appendChild(divfunc2);
                     
                 }                 
                 
                 
            }          
function exibir_historico_avaliacoes_radiacao_ionizante(dv){
                 campos_aval_radiacao_ionizante=Array();
                 campos_aval_radiacao_ionizante[0]="CODIGO_EMPRESA";
                 campos_aval_radiacao_ionizante[1]="ANO_PERICIA";
                 campos_aval_radiacao_ionizante[2]="NUMERO_LAUDO";
                 campos_aval_radiacao_ionizante[3]="REVISAO";
                 campos_aval_radiacao_ionizante[4]="UNIDADE";
                 campos_aval_radiacao_ionizante[5]="CODIGO_SETOR"
                 valores_aval_radiacao_ionizante=Array();
                 valores_aval_radiacao_ionizante[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_radiacao_ionizante[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_radiacao_ionizante[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_radiacao_ionizante[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_radiacao_ionizante[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_radiacao_ionizante[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_radiacao_ionizante',"Carrega_Avaliacoes_radiacao_ionizante",campos_aval_radiacao_ionizante,valores_aval_radiacao_ionizante,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_radiacao_ionizante);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_radiacao_ionizante_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelaradiacao_ionizante=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_radiacao_ionizante.length();xs++){
                  tabelaradiacao_ionizante.rows[1].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Tipo_avaliacao(xs);
                  tabelaradiacao_ionizante.rows[3].cells[0].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Texto_explicativo(xs);
                  tabelaradiacao_ionizante.rows[4].cells[0].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Unidade(xs);
                  tabelaradiacao_ionizante.rows[4].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Codigo_setor(xs);
                  tabelaradiacao_ionizante.rows[5].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Periodicidade_exposicao(xs);
                  tabelaradiacao_ionizante.rows[6].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Numero_funcs_setor(xs);
                  tabelaradiacao_ionizante.rows[7].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Numero_funcs_expostos(xs);
                  tabelaradiacao_ionizante.rows[10].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Medidas_protecao_coletiva(xs);
                  tabelaradiacao_ionizante.rows[10].cells[1].children[1].value=newlaudosavaliacoes_radiacao_ionizante.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaradiacao_ionizante.rows[11].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Medidas_protecao_individual(xs);
                  tabelaradiacao_ionizante.rows[11].cells[2].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Medidas_protecao_individual_outros(xs);
                  tabelaradiacao_ionizante.rows[12].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Fonte_geradora(xs);
                  tabelaradiacao_ionizante.rows[13].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Enquadramento(xs);
                  
                 }
               
                 divmaqradiacao_ionizante=tabelaradiacao_ionizante.rows[9].cells[0].children[0];
                 divmaq=divmaqradiacao_ionizante.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_radiacao_ionizante_maquinas',"Carrega_Avaliacoes_radiacao_ionizante_Maquinas",campos_aval_radiacao_ionizante,valores_aval_radiacao_ionizante,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_radiacao_ionizante_maquinas);
                 if (newlaudosavaliacoes_radiacao_ionizante_maquinas.length()>0) while (divmaqradiacao_ionizante.children.length>0) divmaqradiacao_ionizante.removeChild(divmaqradiacao_ionizante.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_radiacao_ionizante_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Unidade(xs),newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     divmaq2=divmaq.cloneNode(true);
                     tabelamaqradiacao_ionizante=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqradiacao_ionizante.rows[0].cells[0].children[0].value=newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Unidade(xs);
                     tabelamaqradiacao_ionizante.rows[0].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Codigo_setor(xs);
                     tabelamaqradiacao_ionizante.rows[0].cells[2].children[0].length=0;
                     tabelamaqradiacao_ionizante.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqradiacao_ionizante.rows[0].cells[3].children[0].value=newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Densidade_medida(xs);
                     tabelamaqradiacao_ionizante.rows[0].cells[4].children[0].value=newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Densidade_permitida(xs);
                     divmaqradiacao_ionizante.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelaradiacao_ionizante.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncradiacao_ionizante=tabelaradiacao_ionizante.rows[8].cells[0].children[1];
                 divfunc=divfuncradiacao_ionizante.children[0].cloneNode(true);
                 while (divfuncradiacao_ionizante.children.length>0) divfuncradiacao_ionizante.removeChild(divfuncradiacao_ionizante.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_radiacao_ionizante_funcoes',"Carrega_Avaliacoes_radiacao_ionizante_funcoes",campos_aval_radiacao_ionizante,valores_aval_radiacao_ionizante,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_radiacao_ionizante_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_radiacao_ionizante_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncradiacao_ionizante=divfunc2.children[0];
                     tabelafuncradiacao_ionizante.rows[0].cells[0].children[0].length=0;
                     tabelafuncradiacao_ionizante.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncradiacao_ionizante.rows[0].cells[0].children[0].value=newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Codigo_funcao(xs);
                     tabelafuncradiacao_ionizante.rows[0].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncradiacao_ionizante.rows[0].cells[2].children[0].value=newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Unidade(xs);
                     tabelafuncradiacao_ionizante.rows[0].cells[3].children[0].value=newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Codigo_setor(xs);
                     tabelafuncradiacao_ionizante.rows[0].cells[4].children[0].value=newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncradiacao_ionizante.rows[0].cells[5].children[0].value=newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncradiacao_ionizante.rows[0].cells[6].children[0].value=newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncradiacao_ionizante.rows[0].cells[7].children[0].value=newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncradiacao_ionizante.rows[0].cells[8].children[0].value=newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Epc_eficaz(xs);
                     tabelafuncradiacao_ionizante.rows[0].cells[9].children[0].value=newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Epi_eficaz(xs);
                     tabelafuncradiacao_ionizante.rows[0].cells[10].children[0].value=newlaudosavaliacoes_radiacao_ionizante_funcoes.get_Ca_epi(xs);
                     divfuncradiacao_ionizante.appendChild(divfunc2);
                     
                 }                 
                 
            }          

function exibir_historico_avaliacoes_outros_fisicos(dv){
                 campos_aval_outros_fisicos=Array();
                 campos_aval_outros_fisicos[0]="CODIGO_EMPRESA";
                 campos_aval_outros_fisicos[1]="ANO_PERICIA";
                 campos_aval_outros_fisicos[2]="NUMERO_LAUDO";
                 campos_aval_outros_fisicos[3]="REVISAO";
                 campos_aval_outros_fisicos[4]="UNIDADE";
                 campos_aval_outros_fisicos[5]="CODIGO_SETOR"
                 valores_aval_outros_fisicos=Array();
                 valores_aval_outros_fisicos[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_outros_fisicos[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_outros_fisicos[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_outros_fisicos[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_outros_fisicos[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_outros_fisicos[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_outros_fisicos',"Carrega_Avaliacoes_outros_fisicos",campos_aval_outros_fisicos,valores_aval_outros_fisicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_fisicos);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_outros_fisicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelaoutros_fisicos=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_fisicos.length();xs++){
                  ind=localizar_indice_componente(dv,'OUTROS_FISICOS_DESCRICAO','input');   
                  outdesc=dv.getElementsByTagName('input')[ind].value;
                  outdesc=tabelaoutros_fisicos.rows[0].cells[0].children[0].innerHTML.toString();
                  outdesc=outdesc.concat(" "+newlaudosavaliacoes.get_Outros_Fisicos_Descricao(numocur));
                  tabelaoutros_fisicos.rows[0].cells[0].children[0].innerHTML=outdesc;
                     
                  tabelaoutros_fisicos.rows[1].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Tipo_avaliacao(xs);
                  tabelaoutros_fisicos.rows[3].cells[0].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Texto_explicativo(xs);
                  tabelaoutros_fisicos.rows[4].cells[0].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Unidade(xs);
                  tabelaoutros_fisicos.rows[4].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Codigo_setor(xs);
                  tabelaoutros_fisicos.rows[5].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Periodicidade_exposicao(xs);
                  tabelaoutros_fisicos.rows[6].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Numero_funcs_setor(xs);
                  tabelaoutros_fisicos.rows[7].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Numero_funcs_expostos(xs);
                  tabelaoutros_fisicos.rows[10].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Medidas_protecao_coletiva(xs);
                  tabelaoutros_fisicos.rows[10].cells[1].children[1].value=newlaudosavaliacoes_outros_fisicos.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaoutros_fisicos.rows[11].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Medidas_protecao_individual(xs);
                  tabelaoutros_fisicos.rows[11].cells[2].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Medidas_protecao_individual_outros(xs);
                  tabelaoutros_fisicos.rows[12].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Fonte_geradora(xs);
                  tabelaoutros_fisicos.rows[13].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Enquadramento(xs);
                  
                 }
               
                 divmaqoutros_fisicos=tabelaoutros_fisicos.rows[9].cells[0].children[0];
                 divmaq=divmaqoutros_fisicos.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_outros_fisicos_maquinas',"Carrega_Avaliacoes_outros_fisicos_Maquinas",campos_aval_outros_fisicos,valores_aval_outros_fisicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_fisicos_maquinas);
                 if (newlaudosavaliacoes_outros_fisicos_maquinas.length()>0)while (divmaqoutros_fisicos.children.length>0) divmaqoutros_fisicos.removeChild(divmaqoutros_fisicos.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_outros_fisicos_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_outros_fisicos_maquinas.get_Unidade(xs),newlaudosavaliacoes_outros_fisicos_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_outros_fisicos_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     divmaq2=divmaq.cloneNode(true);
                     tabelamaqoutros_fisicos=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqoutros_fisicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_outros_fisicos_maquinas.get_Unidade(xs);
                     tabelamaqoutros_fisicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos_maquinas.get_Codigo_setor(xs);
                     tabelamaqoutros_fisicos.rows[0].cells[2].children[0].length=0;
                     tabelamaqoutros_fisicos.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_outros_fisicos_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqoutros_fisicos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_outros_fisicos_maquinas.get_Valor_medido(xs);
                     tabelamaqoutros_fisicos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_outros_fisicos_maquinas.get_Valor_referencia(xs);
                     divmaqoutros_fisicos.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelaoutros_fisicos.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncoutros_fisicos=tabelaoutros_fisicos.rows[8].cells[0].children[1];
                 divfunc=divfuncoutros_fisicos.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_outros_fisicos_funcoes',"Carrega_Avaliacoes_outros_fisicos_funcoes",campos_aval_outros_fisicos,valores_aval_outros_fisicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_fisicos_funcoes);
                 if (newlaudosavaliacoes_outros_fisicos_funcoes.length()>0) while (divfuncoutros_fisicos.children.length>0) divfuncoutros_fisicos.removeChild(divfuncoutros_fisicos.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_outros_fisicos_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_outros_fisicos_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncoutros_fisicos=divfunc2.children[0];
                     tabelafuncoutros_fisicos.rows[0].cells[0].children[0].length=0;
                     tabelafuncoutros_fisicos.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_outros_fisicos_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncoutros_fisicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_outros_fisicos_funcoes.get_Codigo_funcao(xs);
                     tabelafuncoutros_fisicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncoutros_fisicos.rows[0].cells[2].children[0].value=newlaudosavaliacoes_outros_fisicos_funcoes.get_Unidade(xs);
                     tabelafuncoutros_fisicos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_outros_fisicos_funcoes.get_Codigo_setor(xs);
                     tabelafuncoutros_fisicos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_outros_fisicos_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncoutros_fisicos.rows[0].cells[5].children[0].value=newlaudosavaliacoes_outros_fisicos_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncoutros_fisicos.rows[0].cells[6].children[0].value=newlaudosavaliacoes_outros_fisicos_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncoutros_fisicos.rows[0].cells[7].children[0].value=newlaudosavaliacoes_outros_fisicos_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncoutros_fisicos.rows[0].cells[8].children[0].value=newlaudosavaliacoes_outros_fisicos_funcoes.get_Epc_eficaz(xs);
                     tabelafuncoutros_fisicos.rows[0].cells[9].children[0].value=newlaudosavaliacoes_outros_fisicos_funcoes.get_Epi_eficaz(xs);
                     tabelafuncoutros_fisicos.rows[0].cells[10].children[0].value=newlaudosavaliacoes_outros_fisicos_funcoes.get_Ca_epi(xs);
                     divfuncoutros_fisicos.appendChild(divfunc2);
                     
                 }                 
                 
                 
            }          


function exibir_historico_avaliacoes_sangue_humano(dv){
                 campos_aval_sangue_humano=Array();
                 campos_aval_sangue_humano[0]="CODIGO_EMPRESA";
                 campos_aval_sangue_humano[1]="ANO_PERICIA";
                 campos_aval_sangue_humano[2]="NUMERO_LAUDO";
                 campos_aval_sangue_humano[3]="REVISAO";
                 campos_aval_sangue_humano[4]="UNIDADE";
                 campos_aval_sangue_humano[5]="CODIGO_SETOR"
                 valores_aval_sangue_humano=Array();
                 valores_aval_sangue_humano[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_sangue_humano[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_sangue_humano[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_sangue_humano[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_sangue_humano[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_sangue_humano[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_sangue_humano',"Carrega_Avaliacoes_sangue_humano",campos_aval_sangue_humano,valores_aval_sangue_humano,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_humano);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_sangue_humano_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelasangue_humano=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_sangue_humano.length();xs++){
                  tabelasangue_humano.rows[1].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Tipo_avaliacao(xs);
                  tabelasangue_humano.rows[3].cells[0].children[0].value=newlaudosavaliacoes_sangue_humano.get_Texto_explicativo(xs);
                  tabelasangue_humano.rows[4].cells[0].children[0].value=newlaudosavaliacoes_sangue_humano.get_Unidade(xs);
                  tabelasangue_humano.rows[4].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Codigo_setor(xs);
                  tabelasangue_humano.rows[5].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Periodicidade_exposicao(xs);
                  tabelasangue_humano.rows[6].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Numero_funcs_setor(xs);
                  tabelasangue_humano.rows[7].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Numero_funcs_expostos(xs);
                  tabelasangue_humano.rows[11].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Medidas_protecao_coletiva(xs);
                  tabelasangue_humano.rows[11].cells[1].children[1].value=newlaudosavaliacoes_sangue_humano.get_Medidas_protecao_coletiva_outros(xs);
                  tabelasangue_humano.rows[12].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Medidas_protecao_individual(xs);
                  tabelasangue_humano.rows[12].cells[2].children[0].value=newlaudosavaliacoes_sangue_humano.get_Medidas_protecao_individual_outros(xs);
                  tabelasangue_humano.rows[13].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Fonte_geradora(xs);
                  tabelasangue_humano.rows[14].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Enquadramento(xs);
                  
                 }
               
                 divmaqsangue_humano=tabelasangue_humano.rows[9].cells[0].children[0];
                 divmaq=divmaqsangue_humano.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_sangue_humano_maquinas',"Carrega_Avaliacoes_sangue_humano_Maquinas",campos_aval_sangue_humano,valores_aval_sangue_humano,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_humano_maquinas);
                 if (newlaudosavaliacoes_sangue_humano_maquinas.length()>0) while (divmaqsangue_humano.children.length>0) divmaqsangue_humano.removeChild(divmaqsangue_humano.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_sangue_humano_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_sangue_humano_maquinas.get_Unidade(xs),newlaudosavaliacoes_sangue_humano_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_sangue_humano_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqsangue_humano=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqsangue_humano.rows[0].cells[0].children[0].value=newlaudosavaliacoes_sangue_humano_maquinas.get_Unidade(xs);
                     tabelamaqsangue_humano.rows[0].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano_maquinas.get_Codigo_setor(xs);
                     tabelamaqsangue_humano.rows[0].cells[2].children[0].length=0;
                     tabelamaqsangue_humano.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_sangue_humano_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqsangue_humano.rows[0].cells[3].children[0].value=newlaudosavaliacoes_sangue_humano_maquinas.get_Nivel_medido(xs);
                     tabelamaqsangue_humano.rows[0].cells[4].children[0].value=newlaudosavaliacoes_sangue_humano_maquinas.get_Nivel_permitido(xs);
                     divmaqsangue_humano.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelasangue_humano.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncsangue_humano=tabelasangue_humano.rows[8].cells[0].children[1];
                 divfunc=divfuncsangue_humano.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_sangue_humano_funcoes',"Carrega_Avaliacoes_sangue_humano_funcoes",campos_aval_sangue_humano,valores_aval_sangue_humano,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_humano_funcoes);
                 if (newlaudosavaliacoes_sangue_humano_funcoes.length()>0) while (divfuncsangue_humano.children.length>0) divfuncsangue_humano.removeChild(divfuncsangue_humano.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_sangue_humano_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_sangue_humano_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncsangue_humano=divfunc2.children[0];
                     tabelafuncsangue_humano.rows[0].cells[0].children[0].length=0;
                     tabelafuncsangue_humano.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_sangue_humano_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncsangue_humano.rows[0].cells[0].children[0].value=newlaudosavaliacoes_sangue_humano_funcoes.get_Codigo_funcao(xs);
                     tabelafuncsangue_humano.rows[0].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncsangue_humano.rows[0].cells[2].children[0].value=newlaudosavaliacoes_sangue_humano_funcoes.get_Unidade(xs);
                     tabelafuncsangue_humano.rows[0].cells[3].children[0].value=newlaudosavaliacoes_sangue_humano_funcoes.get_Codigo_setor(xs);
                     tabelafuncsangue_humano.rows[0].cells[4].children[0].value=newlaudosavaliacoes_sangue_humano_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncsangue_humano.rows[0].cells[5].children[0].value=newlaudosavaliacoes_sangue_humano_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncsangue_humano.rows[0].cells[6].children[0].value=newlaudosavaliacoes_sangue_humano_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncsangue_humano.rows[0].cells[7].children[0].value=newlaudosavaliacoes_sangue_humano_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncsangue_humano.rows[0].cells[8].children[0].value=newlaudosavaliacoes_sangue_humano_funcoes.get_Epc_eficaz(xs);
                     tabelafuncsangue_humano.rows[0].cells[9].children[0].value=newlaudosavaliacoes_sangue_humano_funcoes.get_Epi_eficaz(xs);
                     tabelafuncsangue_humano.rows[0].cells[10].children[0].value=newlaudosavaliacoes_sangue_humano_funcoes.get_Ca_epi(xs);
                     divfuncsangue_humano.appendChild(divfunc2);
                     
                 }                 
                 
            }
function exibir_historico_avaliacoes_sangue_animal(dv){
                 campos_aval_sangue_animal=Array();
                 campos_aval_sangue_animal[0]="CODIGO_EMPRESA";
                 campos_aval_sangue_animal[1]="ANO_PERICIA";
                 campos_aval_sangue_animal[2]="NUMERO_LAUDO";
                 campos_aval_sangue_animal[3]="REVISAO";
                 campos_aval_sangue_animal[4]="UNIDADE";
                 campos_aval_sangue_animal[5]="CODIGO_SETOR"
                 valores_aval_sangue_animal=Array();
                 valores_aval_sangue_animal[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_sangue_animal[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_sangue_animal[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_sangue_animal[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_sangue_animal[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_sangue_animal[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_sangue_animal',"Carrega_Avaliacoes_sangue_animal",campos_aval_sangue_animal,valores_aval_sangue_animal,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_animal);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_sangue_animal_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelasangue_animal=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_sangue_animal.length();xs++){
                  tabelasangue_animal.rows[1].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Tipo_avaliacao(xs);
                  tabelasangue_animal.rows[3].cells[0].children[0].value=newlaudosavaliacoes_sangue_animal.get_Texto_explicativo(xs);
                  tabelasangue_animal.rows[4].cells[0].children[0].value=newlaudosavaliacoes_sangue_animal.get_Unidade(xs);
                  tabelasangue_animal.rows[4].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Codigo_setor(xs);
                  tabelasangue_animal.rows[5].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Periodicidade_exposicao(xs);
                  tabelasangue_animal.rows[6].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Numero_funcs_setor(xs);
                  tabelasangue_animal.rows[7].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Numero_funcs_expostos(xs);
                  tabelasangue_animal.rows[10].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Medidas_protecao_coletiva(xs);
                  tabelasangue_animal.rows[10].cells[1].children[1].value=newlaudosavaliacoes_sangue_animal.get_Medidas_protecao_coletiva_outros(xs);
                  tabelasangue_animal.rows[11].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Medidas_protecao_individual(xs);
                  tabelasangue_animal.rows[11].cells[2].children[0].value=newlaudosavaliacoes_sangue_animal.get_Medidas_protecao_individual_outros(xs);
                  tabelasangue_animal.rows[12].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Fonte_geradora(xs);
                  tabelasangue_animal.rows[13].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Enquadramento(xs);
                  
                 }
               
                 divmaqsangue_animal=tabelasangue_animal.rows[9].cells[0].children[0];
                 divmaq=divmaqsangue_animal.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_sangue_animal_maquinas',"Carrega_Avaliacoes_sangue_animal_Maquinas",campos_aval_sangue_animal,valores_aval_sangue_animal,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_animal_maquinas);
                 if (newlaudosavaliacoes_sangue_animal_maquinas.length()>0) while (divmaqsangue_animal.children.length>0) divmaqsangue_animal.removeChild(divmaqsangue_animal.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_sangue_animal_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_sangue_animal_maquinas.get_Unidade(xs),newlaudosavaliacoes_sangue_animal_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_sangue_animal_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqsangue_animal=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqsangue_animal.rows[0].cells[0].children[0].value=newlaudosavaliacoes_sangue_animal_maquinas.get_Unidade(xs);
                     tabelamaqsangue_animal.rows[0].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal_maquinas.get_Codigo_setor(xs);
                     tabelamaqsangue_animal.rows[0].cells[2].children[0].length=0;
                     tabelamaqsangue_animal.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_sangue_animal_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqsangue_animal.rows[0].cells[3].children[0].value=newlaudosavaliacoes_sangue_animal_maquinas.get_Nivel_medido(xs);
                     tabelamaqsangue_animal.rows[0].cells[4].children[0].value=newlaudosavaliacoes_sangue_animal_maquinas.get_Nivel_permitido(xs);
                     divmaqsangue_animal.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelasangue_animal.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncsangue_animal=tabelasangue_animal.rows[8].cells[0].children[1];
                 divfunc=divfuncsangue_animal.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_sangue_animal_funcoes',"Carrega_Avaliacoes_sangue_animal_funcoes",campos_aval_sangue_animal,valores_aval_sangue_animal,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_animal_funcoes);
                 if (newlaudosavaliacoes_sangue_animal_funcoes.length()>0) while (divfuncsangue_animal.children.length>0) divfuncsangue_animal.removeChild(divfuncsangue_animal.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_sangue_animal_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_sangue_animal_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncsangue_animal=divfunc2.children[0];
                     tabelafuncsangue_animal.rows[0].cells[0].children[0].length=0;
                     tabelafuncsangue_animal.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_sangue_animal_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncsangue_animal.rows[0].cells[0].children[0].value=newlaudosavaliacoes_sangue_animal_funcoes.get_Codigo_funcao(xs);
                     tabelafuncsangue_animal.rows[0].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncsangue_animal.rows[0].cells[2].children[0].value=newlaudosavaliacoes_sangue_animal_funcoes.get_Unidade(xs);
                     tabelafuncsangue_animal.rows[0].cells[3].children[0].value=newlaudosavaliacoes_sangue_animal_funcoes.get_Codigo_setor(xs);
                     tabelafuncsangue_animal.rows[0].cells[4].children[0].value=newlaudosavaliacoes_sangue_animal_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncsangue_animal.rows[0].cells[5].children[0].value=newlaudosavaliacoes_sangue_animal_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncsangue_animal.rows[0].cells[6].children[0].value=newlaudosavaliacoes_sangue_animal_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncsangue_animal.rows[0].cells[7].children[0].value=newlaudosavaliacoes_sangue_animal_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncsangue_animal.rows[0].cells[8].children[0].value=newlaudosavaliacoes_sangue_animal_funcoes.get_Epc_eficaz(xs);
                     tabelafuncsangue_animal.rows[0].cells[9].children[0].value=newlaudosavaliacoes_sangue_animal_funcoes.get_Epi_eficaz(xs);
                     tabelafuncsangue_animal.rows[0].cells[10].children[0].value=newlaudosavaliacoes_sangue_animal_funcoes.get_Ca_epi(xs);
                     divfuncsangue_animal.appendChild(divfunc2);
                     
                 }                 
                 
            }

function exibir_historico_avaliacoes_manejo_animais(dv){
                 campos_aval_manejo_animais=Array();
                 campos_aval_manejo_animais[0]="CODIGO_EMPRESA";
                 campos_aval_manejo_animais[1]="ANO_PERICIA";
                 campos_aval_manejo_animais[2]="NUMERO_LAUDO";
                 campos_aval_manejo_animais[3]="REVISAO";
                 campos_aval_manejo_animais[4]="UNIDADE";
                 campos_aval_manejo_animais[5]="CODIGO_SETOR"
                 valores_aval_manejo_animais=Array();
                 valores_aval_manejo_animais[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_manejo_animais[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_manejo_animais[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_manejo_animais[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_manejo_animais[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_manejo_animais[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_manejo_animais',"Carrega_Avaliacoes_manejo_animais",campos_aval_manejo_animais,valores_aval_manejo_animais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_manejo_animais);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_manejo_animais_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelamanejo_animais=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_manejo_animais.length();xs++){
                  tabelamanejo_animais.rows[1].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Tipo_avaliacao(xs);
                  tabelamanejo_animais.rows[3].cells[0].children[0].value=newlaudosavaliacoes_manejo_animais.get_Texto_explicativo(xs);
                  tabelamanejo_animais.rows[4].cells[0].children[0].value=newlaudosavaliacoes_manejo_animais.get_Unidade(xs);
                  tabelamanejo_animais.rows[4].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Codigo_setor(xs);
                  tabelamanejo_animais.rows[5].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Periodicidade_exposicao(xs);
                  tabelamanejo_animais.rows[6].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Numero_funcs_setor(xs);
                  tabelamanejo_animais.rows[7].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Numero_funcs_expostos(xs);
                  tabelamanejo_animais.rows[10].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Medidas_protecao_coletiva(xs);
                  tabelamanejo_animais.rows[10].cells[1].children[1].value=newlaudosavaliacoes_manejo_animais.get_Medidas_protecao_coletiva_outros(xs);
                  tabelamanejo_animais.rows[11].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Medidas_protecao_individual(xs);
                  tabelamanejo_animais.rows[11].cells[2].children[0].value=newlaudosavaliacoes_manejo_animais.get_Medidas_protecao_individual_outros(xs);
                  tabelamanejo_animais.rows[12].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Fonte_geradora(xs);
                  tabelamanejo_animais.rows[13].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Enquadramento(xs);
                  
                 }
               
                 divmaqmanejo_animais=tabelamanejo_animais.rows[9].cells[0].children[0];
                 divmaq=divmaqmanejo_animais.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_manejo_animais_maquinas',"Carrega_Avaliacoes_manejo_animais_Maquinas",campos_aval_manejo_animais,valores_aval_manejo_animais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_manejo_animais_maquinas);
                 if (newlaudosavaliacoes_manejo_animais_maquinas.length()>0) while (divmaqmanejo_animais.children.length>0) divmaqmanejo_animais.removeChild(divmaqmanejo_animais.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_manejo_animais_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_manejo_animais_maquinas.get_Unidade(xs),newlaudosavaliacoes_manejo_animais_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_manejo_animais_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqmanejo_animais=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqmanejo_animais.rows[0].cells[0].children[0].value=newlaudosavaliacoes_manejo_animais_maquinas.get_Unidade(xs);
                     tabelamaqmanejo_animais.rows[0].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais_maquinas.get_Codigo_setor(xs);
                     tabelamaqmanejo_animais.rows[0].cells[2].children[0].length=0;
                     tabelamaqmanejo_animais.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_manejo_animais_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqmanejo_animais.rows[0].cells[3].children[0].value=newlaudosavaliacoes_manejo_animais_maquinas.get_Nivel_medido(xs);
                     tabelamaqmanejo_animais.rows[0].cells[4].children[0].value=newlaudosavaliacoes_manejo_animais_maquinas.get_Nivel_permitido(xs);
                     divmaqmanejo_animais.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelamanejo_animais.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncmanejo_animais=tabelamanejo_animais.rows[8].cells[0].children[1];
                 divfunc=divfuncmanejo_animais.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_manejo_animais_funcoes',"Carrega_Avaliacoes_manejo_animais_funcoes",campos_aval_manejo_animais,valores_aval_manejo_animais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_manejo_animais_funcoes);
                 if (newlaudosavaliacoes_manejo_animais_funcoes.length()) while (divfuncmanejo_animais.children.length>0) divfuncmanejo_animais.removeChild(divfuncmanejo_animais.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_manejo_animais_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_manejo_animais_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncmanejo_animais=divfunc2.children[0];
                     tabelafuncmanejo_animais.rows[0].cells[0].children[0].length=0;
                     tabelafuncmanejo_animais.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_manejo_animais_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncmanejo_animais.rows[0].cells[0].children[0].value=newlaudosavaliacoes_manejo_animais_funcoes.get_Codigo_funcao(xs);
                     tabelafuncmanejo_animais.rows[0].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncmanejo_animais.rows[0].cells[2].children[0].value=newlaudosavaliacoes_manejo_animais_funcoes.get_Unidade(xs);
                     tabelafuncmanejo_animais.rows[0].cells[3].children[0].value=newlaudosavaliacoes_manejo_animais_funcoes.get_Codigo_setor(xs);
                     tabelafuncmanejo_animais.rows[0].cells[4].children[0].value=newlaudosavaliacoes_manejo_animais_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncmanejo_animais.rows[0].cells[5].children[0].value=newlaudosavaliacoes_manejo_animais_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncmanejo_animais.rows[0].cells[6].children[0].value=newlaudosavaliacoes_manejo_animais_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncmanejo_animais.rows[0].cells[7].children[0].value=newlaudosavaliacoes_manejo_animais_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncmanejo_animais.rows[0].cells[8].children[0].value=newlaudosavaliacoes_manejo_animais_funcoes.get_Epc_eficaz(xs);
                     tabelafuncmanejo_animais.rows[0].cells[9].children[0].value=newlaudosavaliacoes_manejo_animais_funcoes.get_Epi_eficaz(xs);
                     tabelafuncmanejo_animais.rows[0].cells[10].children[0].value=newlaudosavaliacoes_manejo_animais_funcoes.get_Ca_epi(xs);
                     divfuncmanejo_animais.appendChild(divfunc2);
                     
                 }                 
                 
                 
            }
function exibir_historico_avaliacoes_outros_biologicos(dv){
                 campos_aval_outros_biologicos=Array();
                 campos_aval_outros_biologicos[0]="CODIGO_EMPRESA";
                 campos_aval_outros_biologicos[1]="ANO_PERICIA";
                 campos_aval_outros_biologicos[2]="NUMERO_LAUDO";
                 campos_aval_outros_biologicos[3]="REVISAO";
                 campos_aval_outros_biologicos[4]="UNIDADE";
                 campos_aval_outros_biologicos[5]="CODIGO_SETOR"
                 valores_aval_outros_biologicos=Array();
                 valores_aval_outros_biologicos[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_outros_biologicos[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_outros_biologicos[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_outros_biologicos[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_outros_biologicos[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_outros_biologicos[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_outros_biologicos',"Carrega_Avaliacoes_outros_biologicos",campos_aval_outros_biologicos,valores_aval_outros_biologicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_biologicos);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_outros_biologicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelaoutros_biologicos=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_biologicos.length();xs++){
                  ind=localizar_indice_componente(dv,'OUTROS_FISICOS_DESCRICAO','input');   
                  outdesc=dv.getElementsByTagName('input')[ind].value;
                  tabelaoutros_biologicos.rows[0].cells[0].children[0].innerHTML+=newlaudosavaliacoes.get_Outros_Biologicos_Descricao(numocur);
                     
                  tabelaoutros_biologicos.rows[1].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Tipo_avaliacao(xs);
                  tabelaoutros_biologicos.rows[3].cells[0].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Texto_explicativo(xs);
                  tabelaoutros_biologicos.rows[4].cells[0].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Unidade(xs);
                  tabelaoutros_biologicos.rows[4].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Codigo_setor(xs);
                  tabelaoutros_biologicos.rows[5].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Periodicidade_exposicao(xs);
                  tabelaoutros_biologicos.rows[6].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Numero_funcs_setor(xs);
                  tabelaoutros_biologicos.rows[7].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Numero_funcs_expostos(xs);
                  tabelaoutros_biologicos.rows[10].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Medidas_protecao_coletiva(xs);
                  tabelaoutros_biologicos.rows[10].cells[1].children[1].value=newlaudosavaliacoes_outros_biologicos.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaoutros_biologicos.rows[11].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Medidas_protecao_individual(xs);
                  tabelaoutros_biologicos.rows[11].cells[2].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Medidas_protecao_individual_outros(xs);
                  tabelaoutros_biologicos.rows[12].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Fonte_geradora(xs);
                  tabelaoutros_biologicos.rows[13].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Enquadramento(xs);
                  
                 }
               
                 divmaqoutros_biologicos=tabelaoutros_biologicos.rows[9].cells[0].children[0];
                 divmaq=divmaqoutros_biologicos.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_outros_biologicos_maquinas',"Carrega_Avaliacoes_outros_biologicos_Maquinas",campos_aval_outros_biologicos,valores_aval_outros_biologicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_biologicos_maquinas);
                 if (newlaudosavaliacoes_outros_biologicos_maquinas.length()>0)while (divmaqoutros_biologicos.children.length>0) divmaqoutros_biologicos.removeChild(divmaqoutros_biologicos.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_outros_biologicos_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_outros_biologicos_maquinas.get_Unidade(xs),newlaudosavaliacoes_outros_biologicos_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_outros_biologicos_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     divmaq2=divmaq.cloneNode(true);
                     tabelamaqoutros_biologicos=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqoutros_biologicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_outros_biologicos_maquinas.get_Unidade(xs);
                     tabelamaqoutros_biologicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos_maquinas.get_Codigo_setor(xs);
                     tabelamaqoutros_biologicos.rows[0].cells[2].children[0].length=0;
                     tabelamaqoutros_biologicos.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_outros_biologicos_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqoutros_biologicos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_outros_biologicos_maquinas.get_Valor_medido(xs);
                     tabelamaqoutros_biologicos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_outros_biologicos_maquinas.get_Valor_referencia(xs);
                     divmaqoutros_biologicos.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelaoutros_biologicos.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncoutros_biologicos=tabelaoutros_biologicos.rows[8].cells[0].children[1];
                 divfunc=divfuncoutros_biologicos.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_outros_biologicos_funcoes',"Carrega_Avaliacoes_outros_biologicos_funcoes",campos_aval_outros_biologicos,valores_aval_outros_biologicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_biologicos_funcoes);
                 if (newlaudosavaliacoes_outros_biologicos_funcoes.length()>0) while (divfuncoutros_biologicos.children.length>0) divfuncoutros_biologicos.removeChild(divfuncoutros_biologicos.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_outros_biologicos_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_outros_biologicos_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncoutros_biologicos=divfunc2.children[0];
                     tabelafuncoutros_biologicos.rows[0].cells[0].children[0].length=0;
                     tabelafuncoutros_biologicos.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_outros_biologicos_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncoutros_biologicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_outros_biologicos_funcoes.get_Codigo_funcao(xs);
                     tabelafuncoutros_biologicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncoutros_biologicos.rows[0].cells[2].children[0].value=newlaudosavaliacoes_outros_biologicos_funcoes.get_Unidade(xs);
                     tabelafuncoutros_biologicos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_outros_biologicos_funcoes.get_Codigo_setor(xs);
                     tabelafuncoutros_biologicos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_outros_biologicos_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncoutros_biologicos.rows[0].cells[5].children[0].value=newlaudosavaliacoes_outros_biologicos_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncoutros_biologicos.rows[0].cells[6].children[0].value=newlaudosavaliacoes_outros_biologicos_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncoutros_biologicos.rows[0].cells[7].children[0].value=newlaudosavaliacoes_outros_biologicos_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncoutros_biologicos.rows[0].cells[8].children[0].value=newlaudosavaliacoes_outros_biologicos_funcoes.get_Epc_eficaz(xs);
                     tabelafuncoutros_biologicos.rows[0].cells[9].children[0].value=newlaudosavaliacoes_outros_biologicos_funcoes.get_Epi_eficaz(xs);
                     tabelafuncoutros_biologicos.rows[0].cells[10].children[0].value=newlaudosavaliacoes_outros_biologicos_funcoes.get_Ca_epi(xs);
                     divfuncoutros_biologicos.appendChild(divfunc2);
                     
                 }                 
            }          
            

function exibir_historico_avaliacoes_fumos_metalicos(dv){
                 campos_aval_fumos_metalicos=Array();
                 campos_aval_fumos_metalicos[0]="CODIGO_EMPRESA";
                 campos_aval_fumos_metalicos[1]="ANO_PERICIA";
                 campos_aval_fumos_metalicos[2]="NUMERO_LAUDO";
                 campos_aval_fumos_metalicos[3]="REVISAO";
                 campos_aval_fumos_metalicos[4]="UNIDADE";
                 campos_aval_fumos_metalicos[5]="CODIGO_SETOR"
                 valores_aval_fumos_metalicos=Array();
                 valores_aval_fumos_metalicos[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_fumos_metalicos[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_fumos_metalicos[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_fumos_metalicos[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_fumos_metalicos[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_fumos_metalicos[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_fumos_metalicos',"Carrega_Avaliacoes_fumos_metalicos",campos_aval_fumos_metalicos,valores_aval_fumos_metalicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_fumos_metalicos);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_fumos_metalicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelafumos_metalicos=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_fumos_metalicos.length();xs++){
                  tabelafumos_metalicos.rows[1].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Tipo_avaliacao(xs);
                  tabelafumos_metalicos.rows[3].cells[0].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Texto_explicativo(xs);
                  tabelafumos_metalicos.rows[4].cells[0].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Unidade(xs);
                  tabelafumos_metalicos.rows[4].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Codigo_setor(xs);
                  tabelafumos_metalicos.rows[5].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Periodicidade_exposicao(xs);
                  tabelafumos_metalicos.rows[6].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Numero_funcs_setor(xs);
                  tabelafumos_metalicos.rows[7].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Numero_funcs_expostos(xs);
                  tabelafumos_metalicos.rows[10].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Medidas_protecao_coletiva(xs);
                  tabelafumos_metalicos.rows[10].cells[1].children[1].value=newlaudosavaliacoes_fumos_metalicos.get_Medidas_protecao_coletiva_outros(xs);
                  tabelafumos_metalicos.rows[11].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Medidas_protecao_individual(xs);
                  tabelafumos_metalicos.rows[11].cells[2].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Medidas_protecao_individual_outros(xs);
                  tabelafumos_metalicos.rows[12].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Fonte_geradora(xs);
                  tabelafumos_metalicos.rows[13].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Enquadramento(xs);
                  
                 }
               
                 divmaqfumos_metalicos=tabelafumos_metalicos.rows[9].cells[0].children[0];
                 divmaq=divmaqfumos_metalicos.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_fumos_metalicos_maquinas',"Carrega_Avaliacoes_fumos_metalicos_Maquinas",campos_aval_fumos_metalicos,valores_aval_fumos_metalicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_fumos_metalicos_maquinas);
                 if (newlaudosavaliacoes_fumos_metalicos_maquinas.length()>0) while (divmaqfumos_metalicos.children.length>0) divmaqfumos_metalicos.removeChild(divmaqfumos_metalicos.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_fumos_metalicos_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_fumos_metalicos_maquinas.get_Unidade(xs),newlaudosavaliacoes_fumos_metalicos_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_fumos_metalicos_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqfumos_metalicos=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqfumos_metalicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_fumos_metalicos_maquinas.get_Unidade(xs);
                     tabelamaqfumos_metalicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos_maquinas.get_Codigo_setor(xs);
                     tabelamaqfumos_metalicos.rows[0].cells[2].children[0].length=0;
                     tabelamaqfumos_metalicos.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_fumos_metalicos_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqfumos_metalicos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_fumos_metalicos_maquinas.get_Nivel_medido(xs);
                     tabelamaqfumos_metalicos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_fumos_metalicos_maquinas.get_Nivel_permitido(xs);
                     divmaqfumos_metalicos.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelafumos_metalicos.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncfumos_metalicos=tabelafumos_metalicos.rows[8].cells[0].children[1];
                 divfunc=divfuncfumos_metalicos.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_fumos_metalicos_funcoes',"Carrega_Avaliacoes_fumos_metalicos_funcoes",campos_aval_fumos_metalicos,valores_aval_fumos_metalicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_fumos_metalicos_funcoes);
                 if (newlaudosavaliacoes_fumos_metalicos_funcoes.length()>0) while (divfuncfumos_metalicos.children.length>0) divfuncfumos_metalicos.removeChild(divfuncfumos_metalicos.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_fumos_metalicos_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_fumos_metalicos_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncfumos_metalicos=divfunc2.children[0];
                     tabelafuncfumos_metalicos.rows[0].cells[0].children[0].length=0;
                     tabelafuncfumos_metalicos.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_fumos_metalicos_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncfumos_metalicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_fumos_metalicos_funcoes.get_Codigo_funcao(xs);
                     tabelafuncfumos_metalicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncfumos_metalicos.rows[0].cells[2].children[0].value=newlaudosavaliacoes_fumos_metalicos_funcoes.get_Unidade(xs);
                     tabelafuncfumos_metalicos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_fumos_metalicos_funcoes.get_Codigo_setor(xs);
                     tabelafuncfumos_metalicos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_fumos_metalicos_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncfumos_metalicos.rows[0].cells[5].children[0].value=newlaudosavaliacoes_fumos_metalicos_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncfumos_metalicos.rows[0].cells[6].children[0].value=newlaudosavaliacoes_fumos_metalicos_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncfumos_metalicos.rows[0].cells[7].children[0].value=newlaudosavaliacoes_fumos_metalicos_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncfumos_metalicos.rows[0].cells[8].children[0].value=newlaudosavaliacoes_fumos_metalicos_funcoes.get_Epc_eficaz(xs);
                     tabelafuncfumos_metalicos.rows[0].cells[9].children[0].value=newlaudosavaliacoes_fumos_metalicos_funcoes.get_Epi_eficaz(xs);
                     tabelafuncfumos_metalicos.rows[0].cells[10].children[0].value=newlaudosavaliacoes_fumos_metalicos_funcoes.get_Ca_epi(xs);
                     divfuncfumos_metalicos.appendChild(divfunc2);
                     
                 }                 
                 
            }          
function exibir_historico_avaliacoes_hidrocarbonetos(dv){
                 campos_aval_hidrocarbonetos=Array();
                 campos_aval_hidrocarbonetos[0]="CODIGO_EMPRESA";
                 campos_aval_hidrocarbonetos[1]="ANO_PERICIA";
                 campos_aval_hidrocarbonetos[2]="NUMERO_LAUDO";
                 campos_aval_hidrocarbonetos[3]="REVISAO";
                 campos_aval_hidrocarbonetos[4]="UNIDADE";
                 campos_aval_hidrocarbonetos[5]="CODIGO_SETOR"
                 valores_aval_hidrocarbonetos=Array();
                 valores_aval_hidrocarbonetos[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_hidrocarbonetos[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_hidrocarbonetos[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_hidrocarbonetos[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_hidrocarbonetos[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_hidrocarbonetos[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_hidrocarbonetos',"Carrega_Avaliacoes_hidrocarbonetos",campos_aval_hidrocarbonetos,valores_aval_hidrocarbonetos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_hidrocarbonetos);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_hidrocarbonetos_aromaticos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelahidrocarbonetos=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_hidrocarbonetos.length();xs++){
                  tabelahidrocarbonetos.rows[1].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Tipo_avaliacao(xs);
                  tabelahidrocarbonetos.rows[3].cells[0].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Texto_explicativo(xs);
                  tabelahidrocarbonetos.rows[4].cells[0].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Unidade(xs);
                  tabelahidrocarbonetos.rows[4].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Codigo_setor(xs);
                  tabelahidrocarbonetos.rows[5].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Periodicidade_exposicao(xs);
                  tabelahidrocarbonetos.rows[6].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Numero_funcs_setor(xs);
                  tabelahidrocarbonetos.rows[7].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Numero_funcs_expostos(xs);
                  tabelahidrocarbonetos.rows[10].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Medidas_protecao_coletiva(xs);
                  tabelahidrocarbonetos.rows[10].cells[1].children[1].value=newlaudosavaliacoes_hidrocarbonetos.get_Medidas_protecao_coletiva_outros(xs);
                  tabelahidrocarbonetos.rows[11].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Medidas_protecao_individual(xs);
                  tabelahidrocarbonetos.rows[11].cells[2].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Medidas_protecao_individual_outros(xs);
                  tabelahidrocarbonetos.rows[12].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Fonte_geradora(xs);
                  tabelahidrocarbonetos.rows[13].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Enquadramento(xs);
                  
                 }
               
                 divmaqhidrocarbonetos=tabelahidrocarbonetos.rows[9].cells[0].children[0];
                 divmaq=divmaqhidrocarbonetos.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_hidrocarbonetos_maquinas',"Carrega_Avaliacoes_hidrocarbonetos_Maquinas",campos_aval_hidrocarbonetos,valores_aval_hidrocarbonetos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_hidrocarbonetos_maquinas);
                 if (newlaudosavaliacoes_hidrocarbonetos_maquinas.length()>0) while (divmaqhidrocarbonetos.children.length>0) divmaqhidrocarbonetos.removeChild(divmaqhidrocarbonetos.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_hidrocarbonetos_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Unidade(xs),newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqhidrocarbonetos=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqhidrocarbonetos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Unidade(xs);
                     tabelamaqhidrocarbonetos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Codigo_setor(xs);
                     tabelamaqhidrocarbonetos.rows[0].cells[2].children[0].length=0;
                     tabelamaqhidrocarbonetos.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqhidrocarbonetos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Valor_medido(xs);
                     tabelamaqhidrocarbonetos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Valor_referencia(xs);
                     divmaqhidrocarbonetos.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelahidrocarbonetos.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfunchidrocarbonetos=tabelahidrocarbonetos.rows[8].cells[0].children[1];
                 divfunc=divfunchidrocarbonetos.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_hidrocarbonetos_funcoes',"Carrega_Avaliacoes_hidrocarbonetos_funcoes",campos_aval_hidrocarbonetos,valores_aval_hidrocarbonetos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_hidrocarbonetos_funcoes);
                 if (newlaudosavaliacoes_hidrocarbonetos_funcoes.length()>0) while (divfunchidrocarbonetos.children.length>0) divfunchidrocarbonetos.removeChild(divfunchidrocarbonetos.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_hidrocarbonetos_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafunchidrocarbonetos=divfunc2.children[0];
                     tabelafunchidrocarbonetos.rows[0].cells[0].children[0].length=0;
                     tabelafunchidrocarbonetos.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Codigo_funcao(xs)));
                     tabelafunchidrocarbonetos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Codigo_funcao(xs);
                     tabelafunchidrocarbonetos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafunchidrocarbonetos.rows[0].cells[2].children[0].value=newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Unidade(xs);
                     tabelafunchidrocarbonetos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Codigo_setor(xs);
                     tabelafunchidrocarbonetos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Grau_insalubridade(xs);
                     tabelafunchidrocarbonetos.rows[0].cells[5].children[0].value=newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Intensidade_concentracao(xs);
                     tabelafunchidrocarbonetos.rows[0].cells[6].children[0].value=newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafunchidrocarbonetos.rows[0].cells[7].children[0].value=newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Tecnica_utilizada(xs);
                     tabelafunchidrocarbonetos.rows[0].cells[8].children[0].value=newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Epc_eficaz(xs);
                     tabelafunchidrocarbonetos.rows[0].cells[9].children[0].value=newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Epi_eficaz(xs);
                     tabelafunchidrocarbonetos.rows[0].cells[10].children[0].value=newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Ca_epi(xs);
                     divfunchidrocarbonetos.appendChild(divfunc2);
                     
                 }                 
                 
                 
            }          

function exibir_historico_avaliacoes_produtos_limpeza(dv){
                 campos_aval_produtos_limpeza=Array();
                 campos_aval_produtos_limpeza[0]="CODIGO_EMPRESA";
                 campos_aval_produtos_limpeza[1]="ANO_PERICIA";
                 campos_aval_produtos_limpeza[2]="NUMERO_LAUDO";
                 campos_aval_produtos_limpeza[3]="REVISAO";
                 campos_aval_produtos_limpeza[4]="UNIDADE";
                 campos_aval_produtos_limpeza[5]="CODIGO_SETOR"
                 valores_aval_produtos_limpeza=Array();
                 valores_aval_produtos_limpeza[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_produtos_limpeza[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_produtos_limpeza[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_produtos_limpeza[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_produtos_limpeza[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_produtos_limpeza[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_produtos_limpeza',"Carrega_Avaliacoes_produtos_limpeza",campos_aval_produtos_limpeza,valores_aval_produtos_limpeza,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_produtos_limpeza);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_produtos_limpeza_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelaprodutos_limpeza=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_produtos_limpeza.length();xs++){
                  tabelaprodutos_limpeza.rows[1].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Tipo_avaliacao(xs);
                  tabelaprodutos_limpeza.rows[3].cells[0].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Texto_explicativo(xs);
                  tabelaprodutos_limpeza.rows[4].cells[0].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Unidade(xs);
                  tabelaprodutos_limpeza.rows[4].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Codigo_setor(xs);
                  tabelaprodutos_limpeza.rows[5].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Periodicidade_exposicao(xs);
                  tabelaprodutos_limpeza.rows[6].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Numero_funcs_setor(xs);
                  tabelaprodutos_limpeza.rows[7].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Numero_funcs_expostos(xs);
                  tabelaprodutos_limpeza.rows[10].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Medidas_protecao_coletiva(xs);
                  tabelaprodutos_limpeza.rows[10].cells[1].children[1].value=newlaudosavaliacoes_produtos_limpeza.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaprodutos_limpeza.rows[11].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Medidas_protecao_individual(xs);
                  tabelaprodutos_limpeza.rows[11].cells[2].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Medidas_protecao_individual_outros(xs);
                  tabelaprodutos_limpeza.rows[12].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Fonte_geradora(xs);
                  tabelaprodutos_limpeza.rows[13].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Enquadramento(xs);
                  
                 }
               
                 divmaqprodutos_limpeza=tabelaprodutos_limpeza.rows[9].cells[0].children[0];
                 divmaq=divmaqprodutos_limpeza.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_produtos_limpeza_maquinas',"Carrega_Avaliacoes_produtos_limpeza_Maquinas",campos_aval_produtos_limpeza,valores_aval_produtos_limpeza,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_produtos_limpeza_maquinas);
                 if (newlaudosavaliacoes_produtos_limpeza_maquinas.length()>0) while (divmaqprodutos_limpeza.children.length>0) divmaqprodutos_limpeza.removeChild(divmaqprodutos_limpeza.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_produtos_limpeza_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_produtos_limpeza_maquinas.get_Unidade(xs),newlaudosavaliacoes_produtos_limpeza_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_produtos_limpeza_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqprodutos_limpeza=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqprodutos_limpeza.rows[0].cells[0].children[0].value=newlaudosavaliacoes_produtos_limpeza_maquinas.get_Unidade(xs);
                     tabelamaqprodutos_limpeza.rows[0].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza_maquinas.get_Codigo_setor(xs);
                     tabelamaqprodutos_limpeza.rows[0].cells[2].children[0].length=0;
                     tabelamaqprodutos_limpeza.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_produtos_limpeza_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqprodutos_limpeza.rows[0].cells[3].children[0].value=newlaudosavaliacoes_produtos_limpeza_maquinas.get_Densidade_medida(xs);
                     tabelamaqprodutos_limpeza.rows[0].cells[4].children[0].value=newlaudosavaliacoes_produtos_limpeza_maquinas.get_Densidade_permitida(xs);
                     divmaqprodutos_limpeza.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelaprodutos_limpeza.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncprodutos_limpeza=tabelaprodutos_limpeza.rows[8].cells[0].children[1];
                 divfunc=divfuncprodutos_limpeza.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_produtos_limpeza_funcoes',"Carrega_Avaliacoes_produtos_limpeza_funcoes",campos_aval_produtos_limpeza,valores_aval_produtos_limpeza,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_produtos_limpeza_funcoes);
                 if (newlaudosavaliacoes_produtos_limpeza_funcoes.length()>0) while (divfuncprodutos_limpeza.children.length>0) divfuncprodutos_limpeza.removeChild(divfuncprodutos_limpeza.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_produtos_limpeza_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_produtos_limpeza_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncprodutos_limpeza=divfunc2.children[0];
                     tabelafuncprodutos_limpeza.rows[0].cells[0].children[0].length=0;
                     tabelafuncprodutos_limpeza.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_produtos_limpeza_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncprodutos_limpeza.rows[0].cells[0].children[0].value=newlaudosavaliacoes_produtos_limpeza_funcoes.get_Codigo_funcao(xs);
                     tabelafuncprodutos_limpeza.rows[0].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncprodutos_limpeza.rows[0].cells[2].children[0].value=newlaudosavaliacoes_produtos_limpeza_funcoes.get_Unidade(xs);
                     tabelafuncprodutos_limpeza.rows[0].cells[3].children[0].value=newlaudosavaliacoes_produtos_limpeza_funcoes.get_Codigo_setor(xs);
                     tabelafuncprodutos_limpeza.rows[0].cells[4].children[0].value=newlaudosavaliacoes_produtos_limpeza_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncprodutos_limpeza.rows[0].cells[5].children[0].value=newlaudosavaliacoes_produtos_limpeza_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncprodutos_limpeza.rows[0].cells[6].children[0].value=newlaudosavaliacoes_produtos_limpeza_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncprodutos_limpeza.rows[0].cells[7].children[0].value=newlaudosavaliacoes_produtos_limpeza_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncprodutos_limpeza.rows[0].cells[8].children[0].value=newlaudosavaliacoes_produtos_limpeza_funcoes.get_Epc_eficaz(xs);
                     tabelafuncprodutos_limpeza.rows[0].cells[9].children[0].value=newlaudosavaliacoes_produtos_limpeza_funcoes.get_Epi_eficaz(xs);
                     tabelafuncprodutos_limpeza.rows[0].cells[10].children[0].value=newlaudosavaliacoes_produtos_limpeza_funcoes.get_Ca_epi(xs);
                     divfuncprodutos_limpeza.appendChild(divfunc2);
                     
                 }                 
                 
                 
            }          

function exibir_historico_avaliacoes_tintas_solventes(dv){
                 campos_aval_tintas_solventes=Array();
                 campos_aval_tintas_solventes[0]="CODIGO_EMPRESA";
                 campos_aval_tintas_solventes[1]="ANO_PERICIA";
                 campos_aval_tintas_solventes[2]="NUMERO_LAUDO";
                 campos_aval_tintas_solventes[3]="REVISAO";
                 campos_aval_tintas_solventes[4]="UNIDADE";
                 campos_aval_tintas_solventes[5]="CODIGO_SETOR"
                 valores_aval_tintas_solventes=Array();
                 valores_aval_tintas_solventes[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_tintas_solventes[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_tintas_solventes[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_tintas_solventes[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_tintas_solventes[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_tintas_solventes[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_tintas_solventes',"Carrega_Avaliacoes_tintas_solventes",campos_aval_tintas_solventes,valores_aval_tintas_solventes,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_tintas_solventes);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_tintas_solventes_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelatintas_solventes=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_tintas_solventes.length();xs++){
                  tabelatintas_solventes.rows[1].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Tipo_avaliacao(xs);
                  tabelatintas_solventes.rows[3].cells[0].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Texto_explicativo(xs);
                  tabelatintas_solventes.rows[4].cells[0].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Unidade(xs);
                  tabelatintas_solventes.rows[4].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Codigo_setor(xs);
                  tabelatintas_solventes.rows[5].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Periodicidade_exposicao(xs);
                  tabelatintas_solventes.rows[6].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Numero_funcs_setor(xs);
                  tabelatintas_solventes.rows[7].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Numero_funcs_expostos(xs);
                  tabelatintas_solventes.rows[10].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Medidas_protecao_coletiva(xs);
                  tabelatintas_solventes.rows[10].cells[1].children[1].value=newlaudosavaliacoes_tintas_solventes.get_Medidas_protecao_coletiva_outros(xs);
                  tabelatintas_solventes.rows[11].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Medidas_protecao_individual(xs);
                  tabelatintas_solventes.rows[11].cells[2].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Medidas_protecao_individual_outros(xs);
                  tabelatintas_solventes.rows[12].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Fonte_geradora(xs);
                  tabelatintas_solventes.rows[13].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Enquadramento(xs);
                  
                 }
               
                 divmaqtintas_solventes=tabelatintas_solventes.rows[9].cells[0].children[0];
                 divmaq=divmaqtintas_solventes.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_tintas_solventes_maquinas',"Carrega_Avaliacoes_tintas_solventes_Maquinas",campos_aval_tintas_solventes,valores_aval_tintas_solventes,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_tintas_solventes_maquinas);
                 if (newlaudosavaliacoes_tintas_solventes_maquinas.length()>0) while (divmaqtintas_solventes.children.length>0) divmaqtintas_solventes.removeChild(divmaqtintas_solventes.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_tintas_solventes_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_tintas_solventes_maquinas.get_Unidade(xs),newlaudosavaliacoes_tintas_solventes_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_tintas_solventes_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqtintas_solventes=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqtintas_solventes.rows[0].cells[0].children[0].value=newlaudosavaliacoes_tintas_solventes_maquinas.get_Unidade(xs);
                     tabelamaqtintas_solventes.rows[0].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes_maquinas.get_Codigo_setor(xs);
                     tabelamaqtintas_solventes.rows[0].cells[2].children[0].length=0;
                     tabelamaqtintas_solventes.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_tintas_solventes_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqtintas_solventes.rows[0].cells[3].children[0].value=newlaudosavaliacoes_tintas_solventes_maquinas.get_Densidade_medida(xs);
                     tabelamaqtintas_solventes.rows[0].cells[4].children[0].value=newlaudosavaliacoes_tintas_solventes_maquinas.get_Densidade_permitida(xs);
                     divmaqtintas_solventes.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelatintas_solventes.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfunctintas_solventes=tabelatintas_solventes.rows[8].cells[0].children[1];
                 divfunc=divfunctintas_solventes.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_tintas_solventes_funcoes',"Carrega_Avaliacoes_tintas_solventes_funcoes",campos_aval_tintas_solventes,valores_aval_tintas_solventes,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_tintas_solventes_funcoes);
                 if (newlaudosavaliacoes_tintas_solventes_funcoes.length()>0) while (divfunctintas_solventes.children.length>0) divfunctintas_solventes.removeChild(divfunctintas_solventes.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_tintas_solventes_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_tintas_solventes_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafunctintas_solventes=divfunc2.children[0];
                     tabelafunctintas_solventes.rows[0].cells[0].children[0].length=0;
                     tabelafunctintas_solventes.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_tintas_solventes_funcoes.get_Codigo_funcao(xs)));
                     tabelafunctintas_solventes.rows[0].cells[0].children[0].value=newlaudosavaliacoes_tintas_solventes_funcoes.get_Codigo_funcao(xs);
                     tabelafunctintas_solventes.rows[0].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafunctintas_solventes.rows[0].cells[2].children[0].value=newlaudosavaliacoes_tintas_solventes_funcoes.get_Unidade(xs);
                     tabelafunctintas_solventes.rows[0].cells[3].children[0].value=newlaudosavaliacoes_tintas_solventes_funcoes.get_Codigo_setor(xs);
                     tabelafunctintas_solventes.rows[0].cells[4].children[0].value=newlaudosavaliacoes_tintas_solventes_funcoes.get_Grau_insalubridade(xs);
                     tabelafunctintas_solventes.rows[0].cells[5].children[0].value=newlaudosavaliacoes_tintas_solventes_funcoes.get_Intensidade_concentracao(xs);
                     tabelafunctintas_solventes.rows[0].cells[6].children[0].value=newlaudosavaliacoes_tintas_solventes_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafunctintas_solventes.rows[0].cells[7].children[0].value=newlaudosavaliacoes_tintas_solventes_funcoes.get_Tecnica_utilizada(xs);
                     tabelafunctintas_solventes.rows[0].cells[8].children[0].value=newlaudosavaliacoes_tintas_solventes_funcoes.get_Epc_eficaz(xs);
                     tabelafunctintas_solventes.rows[0].cells[9].children[0].value=newlaudosavaliacoes_tintas_solventes_funcoes.get_Epi_eficaz(xs);
                     tabelafunctintas_solventes.rows[0].cells[10].children[0].value=newlaudosavaliacoes_tintas_solventes_funcoes.get_Ca_epi(xs);
                     divfunctintas_solventes.appendChild(divfunc2);
                     
                 }                 
                 
                 
            }          

function exibir_historico_avaliacoes_poeiras_incomodas(dv){
                 campos_aval_poeiras_incomodas=Array();
                 campos_aval_poeiras_incomodas[0]="CODIGO_EMPRESA";
                 campos_aval_poeiras_incomodas[1]="ANO_PERICIA";
                 campos_aval_poeiras_incomodas[2]="NUMERO_LAUDO";
                 campos_aval_poeiras_incomodas[3]="REVISAO";
                 campos_aval_poeiras_incomodas[4]="UNIDADE";
                 campos_aval_poeiras_incomodas[5]="CODIGO_SETOR"
                 valores_aval_poeiras_incomodas=Array();
                 valores_aval_poeiras_incomodas[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_poeiras_incomodas[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_poeiras_incomodas[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_poeiras_incomodas[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_poeiras_incomodas[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_poeiras_incomodas[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_poeiras_incomodas',"Carrega_Avaliacoes_poeiras_incomodas",campos_aval_poeiras_incomodas,valores_aval_poeiras_incomodas,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_incomodas);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_poeiras_incomodas_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelapoeiras_incomodas=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_poeiras_incomodas.length();xs++){
                  tabelapoeiras_incomodas.rows[1].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Tipo_avaliacao(xs);
                  tabelapoeiras_incomodas.rows[3].cells[0].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Texto_explicativo(xs);
                  tabelapoeiras_incomodas.rows[4].cells[0].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Unidade(xs);
                  tabelapoeiras_incomodas.rows[4].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Codigo_setor(xs);
                  tabelapoeiras_incomodas.rows[5].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Periodicidade_exposicao(xs);
                  tabelapoeiras_incomodas.rows[6].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Numero_funcs_setor(xs);
                  tabelapoeiras_incomodas.rows[7].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Numero_funcs_expostos(xs);
                  tabelapoeiras_incomodas.rows[10].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Medidas_protecao_coletiva(xs);
                  tabelapoeiras_incomodas.rows[10].cells[1].children[1].value=newlaudosavaliacoes_poeiras_incomodas.get_Medidas_protecao_coletiva_outros(xs);
                  tabelapoeiras_incomodas.rows[11].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Medidas_protecao_individual(xs);
                  tabelapoeiras_incomodas.rows[11].cells[2].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Medidas_protecao_individual_outros(xs);
                  tabelapoeiras_incomodas.rows[12].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Fonte_geradora(xs);
                  tabelapoeiras_incomodas.rows[13].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Enquadramento(xs);
                  
                 }
               
                 divmaqpoeiras_incomodas=tabelapoeiras_incomodas.rows[9].cells[0].children[0];
                 divmaq=divmaqpoeiras_incomodas.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_poeiras_incomodas_maquinas',"Carrega_Avaliacoes_poeiras_incomodas_Maquinas",campos_aval_poeiras_incomodas,valores_aval_poeiras_incomodas,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_incomodas_maquinas);
                 if (newlaudosavaliacoes_poeiras_incomodas_maquinas.length()>0) while (divmaqpoeiras_incomodas.children.length>0) divmaqpoeiras_incomodas.removeChild(divmaqpoeiras_incomodas.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_poeiras_incomodas_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Unidade(xs),newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqpoeiras_incomodas=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqpoeiras_incomodas.rows[0].cells[0].children[0].value=newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Unidade(xs);
                     tabelamaqpoeiras_incomodas.rows[0].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Codigo_setor(xs);
                     tabelamaqpoeiras_incomodas.rows[0].cells[2].children[0].length=0;
                     tabelamaqpoeiras_incomodas.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqpoeiras_incomodas.rows[0].cells[3].children[0].value=newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Nivel_medido(xs);
                     tabelamaqpoeiras_incomodas.rows[0].cells[4].children[0].value=newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Nivel_permitido(xs);
                     divmaqpoeiras_incomodas.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelapoeiras_incomodas.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncpoeiras_incomodas=tabelapoeiras_incomodas.rows[8].cells[0].children[1];
                 divfunc=divfuncpoeiras_incomodas.children[0].cloneNode(true);
                 buscar_registros(window,'laudos_avaliacoes_poeiras_incomodas_funcoes',"Carrega_Avaliacoes_poeiras_incomodas_funcoes",campos_aval_poeiras_incomodas,valores_aval_poeiras_incomodas,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_incomodas_funcoes);
                 if (newlaudosavaliacoes_poeiras_incomodas_funcoes.length()>0) while (divfuncpoeiras_incomodas.children.length>0) divfuncpoeiras_incomodas.removeChild(divfuncpoeiras_incomodas.children[0]);

                 for (xs=0;xs<newlaudosavaliacoes_poeiras_incomodas_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncpoeiras_incomodas=divfunc2.children[0];
                     tabelafuncpoeiras_incomodas.rows[0].cells[0].children[0].length=0;
                     tabelafuncpoeiras_incomodas.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncpoeiras_incomodas.rows[0].cells[0].children[0].value=newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Codigo_funcao(xs);
                     tabelafuncpoeiras_incomodas.rows[0].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncpoeiras_incomodas.rows[0].cells[2].children[0].value=newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Unidade(xs);
                     tabelafuncpoeiras_incomodas.rows[0].cells[3].children[0].value=newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Codigo_setor(xs);
                     tabelafuncpoeiras_incomodas.rows[0].cells[4].children[0].value=newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncpoeiras_incomodas.rows[0].cells[5].children[0].value=newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncpoeiras_incomodas.rows[0].cells[6].children[0].value=newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncpoeiras_incomodas.rows[0].cells[7].children[0].value=newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncpoeiras_incomodas.rows[0].cells[8].children[0].value=newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Epc_eficaz(xs);
                     tabelafuncpoeiras_incomodas.rows[0].cells[9].children[0].value=newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Epi_eficaz(xs);
                     tabelafuncpoeiras_incomodas.rows[0].cells[10].children[0].value=newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Ca_epi(xs);
                     divfuncpoeiras_incomodas.appendChild(divfunc2);
                     
                 }                 
                 
                 
            }
            
function exibir_historico_avaliacoes_poeiras_minerais(dv){
                 campos_aval_poeiras_minerais=Array();
                 campos_aval_poeiras_minerais[0]="CODIGO_EMPRESA";
                 campos_aval_poeiras_minerais[1]="ANO_PERICIA";
                 campos_aval_poeiras_minerais[2]="NUMERO_LAUDO";
                 campos_aval_poeiras_minerais[3]="REVISAO";
                 campos_aval_poeiras_minerais[4]="UNIDADE";
                 campos_aval_poeiras_minerais[5]="CODIGO_SETOR"
                 valores_aval_poeiras_minerais=Array();
                 valores_aval_poeiras_minerais[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_poeiras_minerais[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_poeiras_minerais[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_poeiras_minerais[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_poeiras_minerais[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_poeiras_minerais[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_poeiras_minerais',"Carrega_Avaliacoes_poeiras_minerais",campos_aval_poeiras_minerais,valores_aval_poeiras_minerais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_minerais);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_poeiras_minerais_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelapoeiras_minerais=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_poeiras_minerais.length();xs++){
                  tabelapoeiras_minerais.rows[1].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Tipo_avaliacao(xs);
                  tabelapoeiras_minerais.rows[3].cells[0].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Texto_explicativo(xs);
                  tabelapoeiras_minerais.rows[4].cells[0].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Unidade(xs);
                  tabelapoeiras_minerais.rows[4].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Codigo_setor(xs);
                  tabelapoeiras_minerais.rows[5].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Periodicidade_exposicao(xs);
                  tabelapoeiras_minerais.rows[6].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Numero_funcs_setor(xs);
                  tabelapoeiras_minerais.rows[7].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Numero_funcs_expostos(xs);
                  tabelapoeiras_minerais.rows[10].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Medidas_protecao_coletiva(xs);
                  tabelapoeiras_minerais.rows[10].cells[1].children[1].value=newlaudosavaliacoes_poeiras_minerais.get_Medidas_protecao_coletiva_outros(xs);
                  tabelapoeiras_minerais.rows[11].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Medidas_protecao_individual(xs);
                  tabelapoeiras_minerais.rows[11].cells[2].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Medidas_protecao_individual_outros(xs);
                  tabelapoeiras_minerais.rows[12].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Fonte_geradora(xs);
                  tabelapoeiras_minerais.rows[13].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Enquadramento(xs);
                  
                 }
               
                 divmaqpoeiras_minerais=tabelapoeiras_minerais.rows[9].cells[0].children[0];
                 divmaq=divmaqpoeiras_minerais.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_poeiras_minerais_maquinas',"Carrega_Avaliacoes_poeiras_minerais_Maquinas",campos_aval_poeiras_minerais,valores_aval_poeiras_minerais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_minerais_maquinas);
                 if (newlaudosavaliacoes_poeiras_minerais_maquinas.length()>0) while (divmaqpoeiras_minerais.children.length>0) divmaqpoeiras_minerais.removeChild(divmaqpoeiras_minerais.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_poeiras_minerais_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_poeiras_minerais_maquinas.get_Unidade(xs),newlaudosavaliacoes_poeiras_minerais_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_poeiras_minerais_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqpoeiras_minerais=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqpoeiras_minerais.rows[0].cells[0].children[0].value=newlaudosavaliacoes_poeiras_minerais_maquinas.get_Unidade(xs);
                     tabelamaqpoeiras_minerais.rows[0].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais_maquinas.get_Codigo_setor(xs);
                     tabelamaqpoeiras_minerais.rows[0].cells[2].children[0].length=0;
                     tabelamaqpoeiras_minerais.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_poeiras_minerais_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqpoeiras_minerais.rows[0].cells[3].children[0].value=newlaudosavaliacoes_poeiras_minerais_maquinas.get_Nivel_medido(xs);
                     tabelamaqpoeiras_minerais.rows[0].cells[4].children[0].value=newlaudosavaliacoes_poeiras_minerais_maquinas.get_Nivel_permitido(xs);
                     divmaqpoeiras_minerais.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelapoeiras_minerais.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncpoeiras_minerais=tabelapoeiras_minerais.rows[8].cells[0].children[1];
                 divfunc=divfuncpoeiras_minerais.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_poeiras_minerais_funcoes',"Carrega_Avaliacoes_poeiras_minerais_funcoes",campos_aval_poeiras_minerais,valores_aval_poeiras_minerais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_minerais_funcoes);
                 if (newlaudosavaliacoes_poeiras_minerais_funcoes.length()>0) while (divfuncpoeiras_minerais.children.length>0) divfuncpoeiras_minerais.removeChild(divfuncpoeiras_minerais.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_poeiras_minerais_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_poeiras_minerais_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncpoeiras_minerais=divfunc2.children[0];
                     tabelafuncpoeiras_minerais.rows[0].cells[0].children[0].length=0;
                     tabelafuncpoeiras_minerais.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_poeiras_minerais_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncpoeiras_minerais.rows[0].cells[0].children[0].value=newlaudosavaliacoes_poeiras_minerais_funcoes.get_Codigo_funcao(xs);
                     tabelafuncpoeiras_minerais.rows[0].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncpoeiras_minerais.rows[0].cells[2].children[0].value=newlaudosavaliacoes_poeiras_minerais_funcoes.get_Unidade(xs);
                     tabelafuncpoeiras_minerais.rows[0].cells[3].children[0].value=newlaudosavaliacoes_poeiras_minerais_funcoes.get_Codigo_setor(xs);
                     tabelafuncpoeiras_minerais.rows[0].cells[4].children[0].value=newlaudosavaliacoes_poeiras_minerais_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncpoeiras_minerais.rows[0].cells[5].children[0].value=newlaudosavaliacoes_poeiras_minerais_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncpoeiras_minerais.rows[0].cells[6].children[0].value=newlaudosavaliacoes_poeiras_minerais_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncpoeiras_minerais.rows[0].cells[7].children[0].value=newlaudosavaliacoes_poeiras_minerais_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncpoeiras_minerais.rows[0].cells[8].children[0].value=newlaudosavaliacoes_poeiras_minerais_funcoes.get_Epc_eficaz(xs);
                     tabelafuncpoeiras_minerais.rows[0].cells[9].children[0].value=newlaudosavaliacoes_poeiras_minerais_funcoes.get_Epi_eficaz(xs);
                     tabelafuncpoeiras_minerais.rows[0].cells[10].children[0].value=newlaudosavaliacoes_poeiras_minerais_funcoes.get_Ca_epi(xs);
                     divfuncpoeiras_minerais.appendChild(divfunc2);
                     
                 }                 
                 
                 
            }

function exibir_historico_avaliacoes_outros_quimicos(dv){
                 campos_aval_outros_quimicos=Array();
                 campos_aval_outros_quimicos[0]="CODIGO_EMPRESA";
                 campos_aval_outros_quimicos[1]="ANO_PERICIA";
                 campos_aval_outros_quimicos[2]="NUMERO_LAUDO";
                 campos_aval_outros_quimicos[3]="REVISAO";
                 campos_aval_outros_quimicos[4]="UNIDADE";
                 campos_aval_outros_quimicos[5]="CODIGO_SETOR"
                 valores_aval_outros_quimicos=Array();
                 valores_aval_outros_quimicos[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                 valores_aval_outros_quimicos[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                 valores_aval_outros_quimicos[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                 valores_aval_outros_quimicos[3]=document.forms[1].elements['laudos|REVISAO'].value;
                 valores_aval_outros_quimicos[4]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_outros_quimicos[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 
		 buscar_registros(window,'laudos_avaliacoes_outros_quimicos',"Carrega_Avaliacoes_outros_quimicos",campos_aval_outros_quimicos,valores_aval_outros_quimicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_quimicos);
                 indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_outros_quimicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase(),'table');
                 tabelaoutros_quimicos=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_quimicos.length();xs++){
                  ind=localizar_indice_componente(dv,'OUTROS_FISICOS_DESCRICAO','input');   
                  outdesc=dv.getElementsByTagName('input')[ind].value;
                  tabelaoutros_quimicos.rows[0].cells[0].children[0].innerHTML+=newlaudosavaliacoes.get_Outros_Quimicos_Descricao(numocur);
                     
                  tabelaoutros_quimicos.rows[1].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Tipo_avaliacao(xs);
                  tabelaoutros_quimicos.rows[3].cells[0].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Texto_explicativo(xs);
                  tabelaoutros_quimicos.rows[4].cells[0].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Unidade(xs);
                  tabelaoutros_quimicos.rows[4].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Codigo_setor(xs);
                  tabelaoutros_quimicos.rows[5].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Periodicidade_exposicao(xs);
                  tabelaoutros_quimicos.rows[6].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Numero_funcs_setor(xs);
                  tabelaoutros_quimicos.rows[7].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Numero_funcs_expostos(xs);
                  tabelaoutros_quimicos.rows[10].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Medidas_protecao_coletiva(xs);
                  tabelaoutros_quimicos.rows[10].cells[1].children[1].value=newlaudosavaliacoes_outros_quimicos.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaoutros_quimicos.rows[11].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Medidas_protecao_individual(xs);
                  tabelaoutros_quimicos.rows[11].cells[2].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Medidas_protecao_individual_outros(xs);
                  tabelaoutros_quimicos.rows[12].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Fonte_geradora(xs);
                  tabelaoutros_quimicos.rows[13].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Enquadramento(xs);
                  
                 }
               
                 divmaqoutros_quimicos=tabelaoutros_quimicos.rows[9].cells[0].children[0];
                 divmaq=divmaqoutros_quimicos.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_outros_quimicos_maquinas',"Carrega_Avaliacoes_outros_quimicos_Maquinas",campos_aval_outros_quimicos,valores_aval_outros_quimicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_quimicos_maquinas);
                 if (newlaudosavaliacoes_outros_quimicos_maquinas.length()>0)while (divmaqoutros_quimicos.children.length>0) divmaqoutros_quimicos.removeChild(divmaqoutros_quimicos.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_outros_quimicos_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_outros_quimicos_maquinas.get_Unidade(xs),newlaudosavaliacoes_outros_quimicos_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_outros_quimicos_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     divmaq2=divmaq.cloneNode(true);
                     tabelamaqoutros_quimicos=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqoutros_quimicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_outros_quimicos_maquinas.get_Unidade(xs);
                     tabelamaqoutros_quimicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos_maquinas.get_Codigo_setor(xs);
                     tabelamaqoutros_quimicos.rows[0].cells[2].children[0].length=0;
                     tabelamaqoutros_quimicos.rows[0].cells[2].children[0].add(new Option(newmaquina.get_Nome(),newlaudosavaliacoes_outros_quimicos_maquinas.get_Codigo_maquina(xs)));
                     tabelamaqoutros_quimicos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_outros_quimicos_maquinas.get_Valor_medido(xs);
                     tabelamaqoutros_quimicos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_outros_quimicos_maquinas.get_Valor_referencia(xs);
                     divmaqoutros_quimicos.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelaoutros_quimicos.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncoutros_quimicos=tabelaoutros_quimicos.rows[8].cells[0].children[1];
                 divfunc=divfuncoutros_quimicos.children[0].cloneNode(true);
                 
                 buscar_registros(window,'laudos_avaliacoes_outros_quimicos_funcoes',"Carrega_Avaliacoes_outros_quimicos_funcoes",campos_aval_outros_quimicos,valores_aval_outros_quimicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_quimicos_funcoes);
                 if (newlaudosavaliacoes_outros_quimicos_funcoes.length()>0) while (divfuncoutros_quimicos.children.length>0) divfuncoutros_quimicos.removeChild(divfuncoutros_quimicos.children[0]);
                 for (xs=0;xs<newlaudosavaliacoes_outros_quimicos_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_outros_quimicos_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncoutros_quimicos=divfunc2.children[0];
                     tabelafuncoutros_quimicos.rows[0].cells[0].children[0].length=0;
                     tabelafuncoutros_quimicos.rows[0].cells[0].children[0].add(new Option(newfunc.get_Descricao(),newlaudosavaliacoes_outros_quimicos_funcoes.get_Codigo_funcao(xs)));
                     tabelafuncoutros_quimicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_outros_quimicos_funcoes.get_Codigo_funcao(xs);
                     tabelafuncoutros_quimicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos_funcoes.get_Periodicidade_exposicao(xs);
                     tabelafuncoutros_quimicos.rows[0].cells[2].children[0].value=newlaudosavaliacoes_outros_quimicos_funcoes.get_Unidade(xs);
                     tabelafuncoutros_quimicos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_outros_quimicos_funcoes.get_Codigo_setor(xs);
                     tabelafuncoutros_quimicos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_outros_quimicos_funcoes.get_Grau_insalubridade(xs);
                     tabelafuncoutros_quimicos.rows[0].cells[5].children[0].value=newlaudosavaliacoes_outros_quimicos_funcoes.get_Intensidade_concentracao(xs);
                     tabelafuncoutros_quimicos.rows[0].cells[6].children[0].value=newlaudosavaliacoes_outros_quimicos_funcoes.get_Intensidade_concentracao_unidade(xs);
                     tabelafuncoutros_quimicos.rows[0].cells[7].children[0].value=newlaudosavaliacoes_outros_quimicos_funcoes.get_Tecnica_utilizada(xs);
                     tabelafuncoutros_quimicos.rows[0].cells[8].children[0].value=newlaudosavaliacoes_outros_quimicos_funcoes.get_Epc_eficaz(xs);
                     tabelafuncoutros_quimicos.rows[0].cells[9].children[0].value=newlaudosavaliacoes_outros_quimicos_funcoes.get_Epi_eficaz(xs);
                     tabelafuncoutros_quimicos.rows[0].cells[10].children[0].value=newlaudosavaliacoes_outros_quimicos_funcoes.get_Ca_epi(xs);
                     divfuncoutros_quimicos.appendChild(divfunc2);
                     
                 }                 
                 
                 
                 
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
                numero_laudo=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                ano_pericia=document.forms[1].elements["laudos|ANO_PERICIA"].value;
                revisao=document.forms[1].elements["laudos|REVISAO"].value;
                document.forms[1].reset();
                //newmaquina.setValores(newregistro.getValores());
                                
                if (acao=='I'){
                    document.forms[1].elements["laudos|NUMERO_LAUDO"].value = numero_laudo;
                    document.forms[1].elements["laudos|ANO_PERICIA"].value = ano_pericia;
                    document.forms[1].elements["laudos|REVISAO"].value = revisao;
                }
                
                if (acao=='A'){
                        
                        document.forms[1].elements["laudos|ANO_PERICIA"].value = new String(newlaudo.get_Ano_Pericia());
                        document.forms[1].elements["laudos|NUMERO_LAUDO"].value = new String(newlaudo.get_Numero_Laudo());
                        document.forms[1].elements["laudos|REVISAO"].value = new String(newlaudo.get_Revisao());
                        document.forms[1].elements["laudos|DATA_LANCAMENTO"].value = new String(newlaudo.get_Data_Criacao().toString().substr(0,10));
			document.forms[1].elements["laudos|DATA_HORA_PERICIA"].value = new String(newlaudo.get_Data_Pericia());
                        document.forms[1].elements["laudos|SITUACAO_LAUDO"].value = new String(newlaudo.get_Situacao());
                        document.forms[1].elements["laudos|ENDERECO_ATUACAO"].value = new String(newlaudo.get_Endereco());
                        document.forms[1].elements["laudos|BAIRRO_ATUACAO"].value = new String(newlaudo.get_Bairro());    
                        document.forms[1].elements["laudos|MUNICIPIO_ATUACAO"].value = new String(newlaudo.get_Municipio());    
                        document.forms[1].elements["laudos|CEP_ATUACAO"].value = new String(newlaudo.get_CEP());                
                        document.forms[1].elements["laudos|UF_ATUACAO"].value = new String(newlaudo.get_UF());                     
                        document.forms[1].elements["laudos_acompanhantes|FUNCAO"].value = new String(newlaudoacompanhantes.get_Funcao());
                        document.forms[1].elements["laudos_acompanhantes|NOME_RESPONSAVEL"].value = new String(newlaudoacompanhantes.get_Responsavel_laudoxxx());
                        document.forms[1].elements["laudos_acompanhantes|DATA_ADMISSAO"].value = new String(newlaudoacompanhantes.get_Data_Admissao_laudo());             
                        document.forms[1].elements["laudos_profissionais|FUNCAO[]"][0].value = new String(newlaudotecnicos.get_Funcao());
                        document.forms[1].elements["laudos_profissionais|NOME_RESPONSAVEL[]"][0].value = new String(newlaudotecnicos.get_Responsavel_laudoxxx());
                        document.forms[1].elements["laudos_profissionais|FUNCAO[]"][1].value = new String(newlaudoengenheiros.get_Funcao());
                        document.forms[1].elements["laudos_profissionais|NOME_RESPONSAVEL[]"][1].value = new String(newlaudoengenheiros.get_Responsavel_laudoxxx());

                        
                        campos=Array();
                        campos[0]="CODIGO_EMPRESA";
                        campos[1]="ANO_PERICIA";
                        campos[2]="NUMERO_LAUDO";
                        campos[3]="REVISAO";
                        valores=Array();
                        valores[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                        valores[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                        valores[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                        valores[3]=document.forms[1].elements['laudos|REVISAO'].value;
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
       function popula_fotos_setores_historico_carregados(divatual){
           for (ncont=0;ncont<newlaudosetfoto.length();ncont++){
               if (ncont>0){
                   tabela_fotos=divatual.getElementsByTagName('table')[1];
                   linha_foto=tabela_fotos.rows[tabela_fotos.rows.length-1].cloneNode(true);
                   tabela_fotos.appendChild(linha_foto);
               }
               divfoto=divatual.getElementsByTagName('img')[ncont];
               divfoto.src=newlaudosetfoto.get_Caminho_Foto(ncont).toLowerCase();
               
               //tabelacaminho=divatual.getElementsByTagName('div')[0].getElementsByTagName('table')[1].getElementsByTagName('table')[0];
               tabelacaminho=divatual.getElementsByTagName('div')[0].getElementsByTagName('div')[ncont+2];
               tabelacaminho=tabelacaminho.getElementsByTagName('table')[0];
               tabelacaminho.rows[0].cells[2].children[10].children[0].value=newlaudosetfoto.get_Caminho_Foto(ncont);
               
           }
           
       }

            function carregar_setores_empresa_historico(){
                    buscar_registros(window,'laudos_setores_pericia','Busca_Laudos_Setores_Pericia',campos,valores,true,Array("=","=","=","="),newlaudosetper);
                    divpai=document.getElementById('entrada_setores').cloneNode(true);
                    divpai.setAttribute('id','entrada_setores_2');
                    divavo=document.getElementById('divSetores');
                    if (divavo.children.length>1){
                        if (divavo.children[1].id=='entrada_setores_2'){
                            dv=document.getElementById('entrada_setores_2');
                            divavo.removeChild(dv);
                        }    
                    }

                    //divpai=document.getElementById('entrada_setores');
                    //divavo=document.getElementById('divSetores');
                    divavo.appendChild(divpai);
                    divfilho=document.getElementById(divpai.children[0].id);
                    divfilho.setAttribute("style","display:block");
                    divpai.setAttribute("style","display:block");                    
                    ddiv=document.createElement('div');
                    ddiv.setAttribute('id','dv_set')
                    ttable=document.createElement('table');
                    ttable.setAttribute('id','tbl_setores');
                    ttable.setAttribute('border','0');
                    ttable.setAttribute('cellpadding','0');
                    ttable.setAttribute('cellspacing','1');
                    divfilho=document.getElementById(divpai.children[0].id);
                    divclone=divfilho;
                    divclone.setAttribute('style','display:block');
                    ttbody=divfilho;
                    divpai.removeChild(ttbody);
                    ttbody=document.createElement('table');
                    ddiv.appendChild(ttable);
                    ddiv.setAttribute('style','overflow:auto;width:98%');
                    divpai.appendChild(ddiv);
                    ttable.insertRow(-1);
                    linha_atual=0;
                    divpai.appendChild(ttbody);
                    for (numocur=0;numocur<newlaudosetper.length();numocur++){
			divatual=divclone.cloneNode(true);
			xyz=numocur+1;
                        tr=document.createElement('tr');
                        td=document.createElement('td');
                        divatual.setAttribute('id',"div_setores"+xyz);
			td.appendChild(divatual);
                        td1=document.createElement('td');
                        td1.innerHTML="#"+(numocur+1)+"-"+newlaudosetper.get_Nome_Setor(numocur);
                        td1.setAttribute('id',"cel"+divatual.id);
                        if (numocur==0) {
                            td1.setAttribute('class','subabaativa')
                        }    
                        else { 
                            td1.setAttribute('class','subabainativa')
                        }    
                        definesubAba("setores_empresa", "cel"+divatual.id   , divatual.id );
                        td1.setAttribute('onClick',"trataCliquesubaba('setores_empresa',this)");
                        td1.setAttribute("onMouseOver","trataMousesubaba(this)");
                        if (numocur % 10==0 && numocur>0){
                              linha_atual++;
                              ttable.insertRow(-1);
                        }
                        popula_setores_historico_carregados(divatual,numocur);
                        
                        divatual.getElementsByTagName('select')[0].value=newlaudosetper.get_Unidade(numocur);
                        divatual.getElementsByTagName('select')[1].length=0;
                        divatual.getElementsByTagName('select')[1].add(new Option(newlaudosetper.get_Nome_Setor(numocur),newlaudosetper.get_Codigo_Setor(numocur)));
                        divatual.getElementsByTagName('select')[1].value=newlaudosetper.get_Codigo_Setor(numocur);
                        divatual.getElementsByTagName('textarea')[0].value=newlaudosetper.get_Descricao_Setor(numocur);
                        divatual.getElementsByTagName('input')[1].value=newlaudosetper.get_Pe_Direito(numocur);
                        divatual.getElementsByTagName('select')[2].value=newlaudosetper.get_Piso(numocur);
                        divatual.getElementsByTagName('select')[3].value=newlaudosetper.get_Parede(numocur);
                        divatual.getElementsByTagName('select')[4].value=newlaudosetper.get_Cobertura(numocur);
                        divatual.getElementsByTagName('select')[5].value=newlaudosetper.get_Iluminacao_Natural(numocur);
                        divatual.getElementsByTagName('select')[6].value=newlaudosetper.get_Iluminacao_Artificial(numocur);
                        if (navigator.appName!='Microsoft Internet Explorer'){
                            divatual.children[0].children[0].children[0].children[0].children[1].getElementsByTagName('input')[1].value=divatual.getElementsByTagName('select')[0].value;
                            divatual.children[0].children[0].children[0].children[0].children[1].getElementsByTagName('input')[2].value=divatual.getElementsByTagName('select')[1].value;
                            unid=divatual.getElementsByTagName('select')[0].value;
                            setor=divatual.getElementsByTagName('select')[1].value;
                            try{
                                sequencial_foto[unid][setor]=1;
                            }
                            catch (e){
                                sequencial_foto[unid]=Array();
                                sequencial_foto[unid][setor]=1;
                            }
                            divatual.children[0].children[0].children[0].children[0].children[1].getElementsByTagName('input')[3].value= sequencial_foto[unid][setor];
                       }
                       else {
                            divatual.children[1].getElementsByTagName('input')[3].value=divatual.getElementsByTagName('select')[0].value;
                            divatual.children[1].getElementsByTagName('input')[4].value=divatual.getElementsByTagName('select')[1].value;
                            unid=divatual.getElementsByTagName('select')[0].value;
                            setor=divatual.getElementsByTagName('select')[1].value;
                            sequencial_foto[unid][setor]=1;
                            divatual.children[0].getElementsByTagName('input')[5].value= sequencial_foto[unid][setor];                                            
                        }  
                        campos=Array();
                        campos[0]="CODIGO_EMPRESA";
                        campos[1]="ANO_PERICIA";
                        campos[2]="NUMERO_LAUDO";
                        campos[3]="REVISAO";
                        campos[4]="UNIDADE";
                        campos[5]="CODIGO_SETOR";
                        valores=Array();
                        valores[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                        valores[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                        valores[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                        valores[3]=document.forms[1].elements['laudos|REVISAO'].value;
                        valores[4]=newlaudosetper.get_Unidade(numocur);
                        valores[5]=newlaudosetper.get_Codigo_Setor(numocur);
                        vararranjo=newlaudosetper.get_Arranjo_Fisico(numocur).toString().split('",');
                        divatual.getElementsByTagName('textarea')[1].value="";
                        for (xc=0;xc<vararranjo.length;xc++){
                            vararranjo[xc]=vararranjo[xc]+"\n";
                            divatual.getElementsByTagName('textarea')[1].value=divatual.getElementsByTagName('textarea')[1].value+vararranjo[xc];
                        }
                        
                        buscar_registros(window,'laudos_setores_fotos','Carrega_Setores_Fotos',campos,valores,false,Array('=','=','=','=','=','='),newlaudosetfoto); 
                        popula_fotos_setores_historico_carregados(divatual);
                        ttable.rows[linha_atual].appendChild(td1);
                        tr.appendChild(td);
                        ttbody.appendChild(tr);


						
				
			}
            }

 function carregar_maquina_historico(){
                    campos_maquinas=Array();
                    campos_maquinas[0]="CODIGO_EMPRESA";
                    campos_maquinas[1]="ANO_PERICIA";
                    campos_maquinas[2]="NUMERO_LAUDO";
                    campos_maquinas[3]="REVISAO";
                    valores_maquinas=Array();
                    valores_maquinas[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                    valores_maquinas[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                    valores_maquinas[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                    valores_maquinas[3]=document.forms[1].elements['laudos|REVISAO'].value;
                        
                    buscar_registros(window,'laudos_setores_maquina','Busca_Laudos_Maquina',campos_maquinas,valores_maquinas,true,Array("=","=","=","="),newlaudosetmaq);
                    divpai=document.getElementById('entrada_maquinas').cloneNode(true);
                    divpai.setAttribute('id','entrada_maquinas2');
                    divpai.setAttribute('style','display:block');
                    divavo=document.getElementById('divMaquinas');
                    if (divavo.children.length>1){
                        if (divavo.children[1].id=='entrada_maquinas2'){
                            dv=document.getElementById('entrada_maquinas2');
                            divavo.removeChild(dv);
                        }    
                    }
                    
	
                    divfilho=document.getElementById(divpai.children[0].id);
                    divfilho.setAttribute("style","display:block");
                    divavo.appendChild(divpai);
                    ttable=document.createElement('table');
                    ttable.setAttribute('id','tbl_maquinas');
                    ttable.setAttribute('border','0');
                    ttable.setAttribute('cellpadding','0');
                    ttable.setAttribute('cellspacing','1');
                    divfilho=divpai.children[0];
                    divclone=divfilho;
                    divclone.setAttribute('style','display:block');
                    ttbody=divfilho;
                    divpai.removeChild(ttbody);
                    ttbody=document.createElement('table');
                    divpai.appendChild(ttable);
                    divpai.setAttribute('style','overflow:auto;width:98%');
                    
                    ttable.insertRow(-1);
                    linha_atual=0;
                    for (numocur=0;numocur<newlaudosetmaq.length();numocur++){
			divatual=divclone.cloneNode(true);
			xyz=numocur+1;
                        tr=document.createElement('tr');
                        td=document.createElement('td');
                        divatual.setAttribute('id',"div_maquinas"+xyz);
			td.appendChild(divatual);
                        td1=document.createElement('td');
                        td1.innerHTML="#"+(numocur+1)+"-"+newlaudosetmaq.get_Nome_Maquina(numocur);
                        td1.setAttribute('id',"cel"+divatual.id);
                        if (numocur==0) {
                            td1.setAttribute('class','subabaativa')
                        }    
                        else { 
                            td1.setAttribute('class','subabainativa')
                        }    
                        definesubAba("maquinas_empresa", "cel"+divatual.id   , divatual.id );
                        td1.setAttribute('onClick',"trataCliquesubaba('maquinas_empresa',this)");
                        td1.setAttribute("onMouseOver","trataMousesubaba(this)");
                        if (numocur % 10==0 && numocur>0){
                              linha_atual++;
                              ttable.insertRow(-1);
                        }
                        popula_maquina_historico_carregados(divatual,numocur);
			divpai.appendChild(divatual);

                        ttable.rows[linha_atual].appendChild(td1);
                        tr.appendChild(td);
                        ttbody.appendChild(tr);
				
				
			}	


            }
            function carregar_atividade_historico(){
                    campos_atividades=Array();
                    campos_atividades[0]="CODIGO_EMPRESA";
                    campos_atividades[1]="ANO_PERICIA";
                    campos_atividades[2]="NUMERO_LAUDO";
                    campos_atividades[3]="REVISAO";
                    valores_atividades=Array();
                    valores_atividades[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                    valores_atividades[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                    valores_atividades[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                    valores_atividades[3]=document.forms[1].elements['laudos|REVISAO'].value;

                    buscar_registros(window,'laudos_atividades','Busca_Laudos_Atividades',campos_atividades,valores_atividades,false,Array("=","=","=","="),newativlaudo);
                    divpai=document.getElementById('entrada_atividades').cloneNode(true);
                    divpai.setAttribute('id','entrada_atividades_2');
                    divavo=document.getElementById('divAtividades');
                    if (divavo.children.length>1){
                        if (divavo.children[1].id=='entrada_atividades_2'){
                            dv=document.getElementById('entrada_atividades_2');
                            divavo.removeChild(dv);
                        }    
                    }
                    divavo.appendChild(divpai);
                    divfilho=document.getElementById(divpai.children[0].id);
                    divfilho.setAttribute("style","display:block");
                    divpai.setAttribute("style","display:block");                    
                    ddiv=document.createElement('div');
                    ddiv.setAttribute('id','dv_set')
                    ttable=document.createElement('table');
                    ttable.setAttribute('id','tbl_setores');
                    ttable.setAttribute('border','0');
                    ttable.setAttribute('cellpadding','0');
                    ttable.setAttribute('cellspacing','1');
                    divfilho=document.getElementById(divpai.children[0].id);
                    divclone=divfilho;
                    divclone.setAttribute('style','display:block');
                    ttbody=divfilho;
                    divpai.removeChild(ttbody);
                    ttbody=document.createElement('table');
                    ddiv.appendChild(ttable);
                    ddiv.setAttribute('style','overflow:auto;width:98%');
                    divpai.appendChild(ddiv);
                    ttable.insertRow(-1);
                    linha_atual=0;
                    divpai.appendChild(ttbody);
                    for (numocur=0;numocur<newativlaudo.length();numocur++){
			divatual=divclone.cloneNode(true);
			xyz=numocur+1;
                        tr=document.createElement('tr');
                        td=document.createElement('td');
                        divatual.setAttribute('id',"div_atividades"+xyz);
			td.appendChild(divatual);
                        td1=document.createElement('td');
                        td1.innerHTML="#"+newativlaudo.get_Codigo_Atividade(numocur)+" "+newativlaudo.get_Descricao_Resumida(numocur);
                        td1.setAttribute('id',"cel"+divatual.id);
                        if (numocur==0) {
                            td1.setAttribute('class','subabaativa')
                        }    
                        else { 
                            td1.setAttribute('class','subabainativa')
                        }    
                        definesubAba("atividades_empresa", "cel"+divatual.id   , divatual.id );
                        td1.setAttribute('onClick',"trataCliquesubaba('atividades_empresa',this)");
                        td1.setAttribute("onMouseOver","trataMousesubaba(this)");
                        if (numocur % 10==0 && numocur>0){
                              linha_atual++;
                              ttable.insertRow(-1);
                        }
                        
                        divatual.getElementsByTagName('select')[0].value=newativlaudo.get_Classificacao_Atividade(numocur);
                        divatual.getElementsByTagName('input')[0].value=newativlaudo.get_Sequencial(numocur);
                        divatual.getElementsByTagName('select')[1].add(new Option(newativlaudo.get_Descricao_Resumida(numocur),newativlaudo.get_Codigo_Atividade(numocur)));
                        divatual.getElementsByTagName('select')[1].value=newativlaudo.get_Codigo_Atividade(numocur);
                        divatual.getElementsByTagName('textarea')[0].value=newativlaudo.get_Descricao_Atividade(numocur);
                        divatual.getElementsByTagName('input')[1].value=newativlaudo.get_Descricao_Resumida(numocur);
                        if (navigator.appName!='Microsoft Internet Explorer'){
                            //divatual.children[0].children[0].children[0].children[0].children[1].getElementsByTagName('input')[1].value=divatual.getElementsByTagName('select')[0].value;
                            //divatual.children[0].children[0].children[0].children[0].children[1].getElementsByTagName('input')[2].value=divatual.getElementsByTagName('select')[1].value;
                            //unid=divatual.getElementsByTagName('select')[0].value;
                            //setor=divatual.getElementsByTagName('select')[1].value;
                            //divatual.children[0].children[0].children[0].children[0].children[1].getElementsByTagName('input')[3].value= sequencial_foto[unid][setor];
                       }
                       else {
                            //divatual.children[1].getElementsByTagName('input')[3].value=divatual.getElementsByTagName('select')[0].value;
                            //divatual.children[1].getElementsByTagName('input')[4].value=divatual.getElementsByTagName('select')[1].value;
                            //unid=divatual.getElementsByTagName('select')[0].value;
                            //setor=divatual.getElementsByTagName('select')[1].value;
                            //sequencial_foto[unid][setor]=1;
                            //divatual.children[0].getElementsByTagName('input')[5].value= sequencial_foto[unid][setor];                                            
                        }              
                        carregar_atividade_funcao_historico(newativlaudo.get_Codigo_Atividade(numocur));
                        try{
                            carregar_atividade_epis_fornecidos_historico(newativlaudo.get_Codigo_Atividade(numocur));
                            carregar_atividade_epis_necessarios_historico(newativlaudo.get_Codigo_Atividade(numocur));
                        }
                        catch (e){
                            
                        }
                        ttable.rows[linha_atual].appendChild(td1);
                        tr.appendChild(td);
                        ttbody.appendChild(tr);


						
				
			}
            }
            function carregar_atividade_funcao_historico(codativ){
                        newativfunclaudo.inicializa();
                        campos_funcoes=Array();
                        campos_funcoes[0]="CODIGO_EMPRESA";
                        campos_funcoes[1]="ANO_PERICIA";
                        campos_funcoes[2]="NUMERO_LAUDO";
                        campos_funcoes[3]="REVISAO";
                        valores_funcoes=Array();
                        valores_funcoes[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                        valores_funcoes[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                        valores_funcoes[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                        valores_funcoes[3]=document.forms[1].elements['laudos|REVISAO'].value;
                        campos_funcoes[4]='CODIGO_ATIVIDADE';
                        valores_funcoes[4]=codativ
                        buscar_registros(window,'laudos_atividades_funcoes','Busca_Laudos_Atividades_Funcoes',campos_funcoes,valores_funcoes,false,Array("=","=","=","=","="),newativfunclaudo);
                        if (newativfunclaudo.length()>0){
                            //buscar_registros(window,'atividades','Carrega_Atividades','','',false,'',newativs);
                            tabela_funcs=divatual.getElementsByTagName('table')[1];
                            linha=tabela_funcs.rows[tabela_funcs.rows.length-1];
                            linha_atual_funcao=linha;
                            linha_atual_funcao.cells[0].children[0].value=newativfunclaudo.get_Codigo_Funcao(0);
                            linha_atual_funcao.cells[0].children[1].value=newativfunclaudo.get_Descricao_Funcao(0);
                            linha_atual_funcao.cells[0].children[2].value=newativfunclaudo.get_Codigo_Atividade(0);
                            
                            txbody=linha.parentNode.parentNode;
                            linha_atual_funcao_pai=linha_atual_funcao.parentNode;
                            cont=1;
                            txbody.appendChild(linha);
                            while (cont<newativfunclaudo.length()){
                              
                              //linha_atual_funcao=linha_atual_funcao_pai.rows[linha_atual_funcao_pai.rows.length-1].cloneNode(true);
                              linha_atual_funcao=linha;
                              linha_atual_funcao.cells[0].children[0].value=newativfunclaudo.get_Codigo_Funcao(cont);
                              linha_atual_funcao.cells[0].children[1].value=newativfunclaudo.get_Descricao_Funcao(cont);
                              linha_atual_funcao.cells[0].children[2].value=newativfunclaudo.get_Codigo_Atividade(cont);
                              cont++;
                              txbody.appendChild(linha_atual_funcao);
                            }  
                        }
	    }            
            function carregar_atividade_epis_fornecidos_historico(codativ){
                        newlaudoativepis.inicializa();
                        campos_epis=Array();
                        campos_epis[0]="CODIGO_EMPRESA";
                        campos_epis[1]="ANO_PERICIA";
                        campos_epis[2]="NUMERO_LAUDO";
                        campos_epis[3]="REVISAO";
                        valores_epis=Array();
                        valores_epis[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                        valores_epis[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                        valores_epis[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                        valores_epis[3]=document.forms[1].elements['laudos|REVISAO'].value;
                        campos_epis[4]='CODIGO_ATIVIDADE';
                        valores_epis[4]=codativ

                        buscar_registros(window,'laudos_epis_fornecidos','Busca_Laudos_Atividades_Epis',campos_epis,valores_epis,false,Array("=","=","=","=","="),newlaudoativepis);

                        if (newlaudoativepis.length()>0){
                            tabela_epis=divatual.getElementsByTagName('table')[4];
                            linhax=tabela_epis.rows[tabela_epis.rows.length-1];
                            linha_atual_epi=linhax;
                            carrega_epis(linha_atual_epi.cells[0].children[0].children[0].children[2].children[0].children[0]);
                            //onselect_carrega_epis(linha_atual_epi.cells[0].children[0].children[0].children[2].children[0].children[0]);
                            linha_atual_epi.children[0].children[0].children[0].children[2].children[0].children[0].value=newlaudoativepis.get_Codigo_EPI(0);
                            linha_atual_epi.children[0].children[0].children[0].children[2].children[1].children[0].value=newlaudoativepis.get_Codigo_CA(0);
                            txbody=linhax.parentNode;
                            cont=1;
                            txbody.appendChild(linhax);
                            while (cont<newlaudoativepis.length()){
                              
                              linha_atual_epi=linhax.cloneNode(true);
                              linha_atual_epi.children[0].children[0].children[0].children[2].children[0].children[0].value=newlaudoativepis.get_Codigo_EPI(cont);
                              linha_atual_epi.children[0].children[0].children[0].children[2].children[1].children[0].value=newlaudoativepis.get_Codigo_CA(cont);
                              cont++;
                              txbody.appendChild(linha_atual_epi);
                            }  
                        }
	    }            
            function carregar_atividade_epis_necessarios_historico(codativ){
                        newlaudoativepis.inicializa();
                        campos_epis=Array();
                        campos_epis[0]="CODIGO_EMPRESA";
                        campos_epis[1]="ANO_PERICIA";
                        campos_epis[2]="NUMERO_LAUDO";
                        campos_epis[3]="REVISAO";
                        valores_epis=Array();
                        valores_epis[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                        valores_epis[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                        valores_epis[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                        valores_epis[3]=document.forms[1].elements['laudos|REVISAO'].value;
                        campos_epis[4]='CODIGO_ATIVIDADE';
                        valores_epis[4]=codativ

                        buscar_registros(window,'laudos_epis_necessarios','Busca_Laudos_Atividades_Epis',campos_epis,valores_epis,false,Array("=","=","=","=","="),newlaudoativepis);

                        if (newlaudoativepis.length()>0){
                            tabela_epis=divatual.getElementsByTagName('table')[3];
                            linhax=tabela_epis.rows[tabela_epis.rows.length-1];
                            linha_atual_epi=linhax;
                            carrega_epis_base(linha_atual_epi.cells[0].children[0]);
                            //onselect_carrega_epis(linha_atual_epi.cells[0].children[0].children[0].children[2].children[0].children[0]);
                            linha_atual_epi.cells[0].children[0].value=newlaudoativepis.get_Codigo_EPI(0);
                            linha_atual_epi.cells[3].children[0].value=codativ;
                            txbody=linhax.parentNode;
                            cont=1;
                            txbody.appendChild(linhax);
                            while (cont<newlaudoativepis.length()){
                              
                              linha_atual_epi=linhax.cloneNode(true);
                              linha_atual_epi.cells[0].children[0].value=newlaudoativepis.get_Codigo_EPI(cont);
                              linha_atual_epi.cells[3].children[0].value=codativ;
                              cont++;
                              txbody.appendChild(linha_atual_epi);
                            }  
                        }
	    }                        
            function carregar_avaliacoes_historico(){            
                        campos=Array();
                        campos[0]="CODIGO_EMPRESA";
                        campos[1]="ANO_PERICIA";
                        campos[2]="NUMERO_LAUDO";
                        campos[3]="REVISAO";
                        valores=Array();
                        valores[0]=document.forms[1].elements['laudos|CODIGO_EMPRESA'].value;
                        valores[1]=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                        valores[2]=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                        valores[3]=document.forms[1].elements['laudos|REVISAO'].value;
                        newlaudosavaliacoes.inicializa();
                        buscar_registros(window,'laudos_avaliacoes','Busca_Laudos_Avaliacoes',campos,valores,false,Array("=","=","=","="),newlaudosavaliacoes);
                        divpai=document.getElementById('entrada_avaliacoes').cloneNode(true);
                        divpai.setAttribute('id','entrada_avaliacoes_2');
                        divavo=document.getElementById('divAvaliacoes');
                        if (divavo.children.length>1){
                             if (divavo.children[1].id=='entrada_avaliacoes_2'){
                                  dv=document.getElementById('entrada_avaliacoes_2');
                                  divavo.removeChild(dv);
                             }    
                        }
                        divavo.appendChild(divpai);                        
			//divavo=document.getElementById('divAvaliacoes');       
                        //divpai=document.getElementById('entrada_avaliacoes');
                        //divavo.appendChild(divpai);
                        divfilho=document.getElementById(divpai.children[0].id);
                        divfilho.setAttribute("style","display:block");
                        divpai.setAttribute("style","display:block");
                        ddiv=document.createElement('div');
                        ttable=document.createElement('table');
                        ttable.setAttribute('id','tbl_avaliacoes');
                        ttable.setAttribute('border','0');
                        ttable.setAttribute('cellpadding','0');
                        ttable.setAttribute('cellspacing','1');
                        divclone=divfilho;
                        ttbody=divfilho;
        		divpai.removeChild(ttbody);
                        ttbody=document.createElement('tbody');
                        ddiv.appendChild(ttable);
                        ddiv.setAttribute('style','overflow:auto;width:98%');
                        divpai.appendChild(ddiv);
                        ttable.insertRow(-1);
                        linha_atual=0;
                        divpai.appendChild(ttbody);
			for (numocur=0;numocur<newlaudosavaliacoes.length();numocur++){
					divatual=divclone.cloneNode(true);
					xyz=numocur+1;
                                        tr=document.createElement('tr');
                                        td=document.createElement('td');
					
                                        divatual.setAttribute('id',"div_setor_avaliacao"+xyz);
                                        divatual.setAttribute('style','overflow:auto');
					popula_setores_carregados_avaliacao_historico(divatual,numocur);
					td.appendChild(divatual);
                                        td1=document.createElement('td');
                                        td1.innerHTML="#"+(numocur+1)+"-"+newlaudosavaliacoes.get_Descricao_Setor(numocur);
                                        td1.setAttribute('id',"cel"+divatual.id);
                                        
                                        if (numocur==0)
                                            td1.setAttribute('class','subabaativa');
                                        else 
                                            td1.setAttribute('class','subabainativa');
                                            definesubAba("setores_avaliacoes", "cel"+divatual.id   , divatual.id );
                                            td1.setAttribute('onClick',"trataCliquesubaba('setores_avaliacoes',this)");
                                            td1.setAttribute("onMouseOver","trataMousesubaba(this)");
                                        if (numocur % 10==0 && numocur>0){
                                            linha_atual++;
                                            ttable.insertRow(-1);
                                        }
                                        campos[4]="UNIDADE";
                                        campos[5]="CODIGO_SETOR";
                                        
                                        valores[4]=newlaudosavaliacoes.get_Unidade(numocur);
                                        valores[5]=newlaudosavaliacoes.get_Codigo_Setor(numocur);

                                        buscar_registros(window,'laudos_avaliacoes','Busca_Laudos_Avaliacoes_Sumarizadas',campos,valores,false,Array("=","=","=","=","=","="),newlaudosavalsum);
                                        divatual.setAttribute('style','display:block;overflow:auto');
                                        divatual.getElementsByTagName('input')[1].checked=newlaudosavalsum.get_Ruido(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[1].checked) {
                                            buscar_registros(window,'laudos_avaliacoes_ruido','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_ruido').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_ruido_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'RUÍDO'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_ruido_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela)
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"ruido");
                                            }    
                                            
                                        }
                                        divatual.getElementsByTagName('input')[3].checked=newlaudosavalsum.get_Ruido_Dosimetria(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[3].checked) {
                                            buscar_registros(window,'laudos_avaliacoes_ruido_dosimetria','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_ruido_dosimetria').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_ruido_dosimetria_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'RUÍDO DOSIMETRIA'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_ruido_dosimetria'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"ruido_dosimetria_");
                                            }
                                        }    
                                        divatual.getElementsByTagName('input')[5].checked=newlaudosavalsum.get_Frio(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[5].checked) {
                                             buscar_registros(window,'laudos_avaliacoes_frio','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                             for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_frio').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_frio_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'FRIO'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_frio_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"frio");
                                            }        
                                        }
                                        divatual.getElementsByTagName('input')[7].checked=newlaudosavalsum.get_Calor(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[7].checked) {
                                            buscar_registros(window,'laudos_avaliacoes_calor','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_calor').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_calor_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'CALOR'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_calor_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"calor");
                                            }    
                                        }
                                        divatual.getElementsByTagName('input')[9].checked=newlaudosavalsum.get_Umidade(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[9].checked) {
                                            buscar_registros(window,'laudos_avaliacoes_umidade','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_umidade').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_umidade_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'UMIDADE'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_umidade_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"umidade");
                                            }    
                                                    
                                        }
                                        divatual.getElementsByTagName('input')[11].checked=newlaudosavalsum.get_Radiacao_Nao_Ionizante(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[11].checked) {
                                            buscar_registros(window,'laudos_avaliacoes_radiacao_nao_ionizante','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_radiacao_nao_ionizante').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_radiacao_nao_ionizante_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'RADIAÇÃO NÃO IONIZANTE'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_radiacao_nao_ionizante_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"radiacao_nao_ionizante");
                                            }
                                        }

                                        divatual.getElementsByTagName('input')[13].checked=newlaudosavalsum.get_Radiacao_Ionizante(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[13].checked){
                                            buscar_registros(window,'laudos_avaliacoes_radiacao_ionizante','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_radiacao_ionizante').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_radiacao_ionizante_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'RADIAÇÃO IONIZANTE'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_radiacao_ionizante_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"radiacao_ionizante");
                                            }
                                        } 
                                        divatual.getElementsByTagName('input')[15].checked=newlaudosavalsum.get_Outros_Fisicos(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[15].checked) {
                                            buscar_registros(window,'laudos_avaliacoes_outros_fisicos','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                dvz=divatual.getElementsByTagName('input');
                                                divatual.getElementsByTagName('input')[17].value=newlaudosavalsum.get_Outros_Fisicos_Descricao(numocur);
                                                tabela=document.getElementById('tabela_modelo_avaliacao_outros_fisicos').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_outros_fisicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'OUTROS FÍSICOS ';
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_ruido_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"outros_fisicos");
                                            }
                                        }
                                        divatual.getElementsByTagName('input')[18].checked=newlaudosavalsum.get_Sangue_Humano(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[18].checked) {
                                            buscar_registros(window,'laudos_avaliacoes_sangue_humano','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_sangue_humano').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_sangue_humano_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'SANGUE HUMANO'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_sangue_humano_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"sangue_humano");
                                            }    
                                        }
                                        divatual.getElementsByTagName('input')[20].checked=newlaudosavalsum.get_Sangue_Animal(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[20].checked){
                                            buscar_registros(window,'laudos_avaliacoes_sangue_animal','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_sangue_animal').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_sangue_animal_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'SANGUE ANIMAL'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_sangue_animal_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"sangue_animal");
                                            }
                                        }
                                        divatual.getElementsByTagName('input')[22].checked=newlaudosavalsum.get_Manejo_Animais(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[22].checked){
                                            buscar_registros(window,'laudos_avaliacoes_manejo_animais','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_manejo_animais').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_manejo_animais_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'MANEJO ANIMAIS'	;
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_manejo_animais_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"manejo_animais");
                                            }
                                        }
                                        divatual.getElementsByTagName('input')[24].checked=newlaudosavalsum.get_Outros_Biologicos(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[24].checked){
                                            buscar_registros(window,'laudos_avaliacoes_outros_biologicos','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_outros_biologicos').cloneNode(true);
                                                divatual.getElementsByTagName('input')[26].value=newlaudosavalsum.get_Outros_Biologicos_Descricao(numocur);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_outros_biologicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'OUTROS BIOLÓGICOS'+newlaudosavalsum.get_Outros_Biologicos_Descricao(0)	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_outros_biologicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"outros_biologicos");
                                            }
                                        }
                                        divatual.getElementsByTagName('input')[27].checked=newlaudosavalsum.get_Produtos_Limpeza(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[27].checked){
                                            buscar_registros(window,'laudos_avaliacoes_produtos_limpeza','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_produtos_limpeza').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_produtos_limpeza_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'PRODUTOS LIMPEZA'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_produtos_limpeza_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"produtos_limpeza");
                                            }
                                        }
                                        divatual.getElementsByTagName('input')[29].checked=newlaudosavalsum.get_Tintas_Solventes(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[29].checked){
                                            buscar_registros(window,'laudos_avaliacoes_tintas_solventes','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_tintas_solventes').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_tintas_solventes_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'TINTAS SOLVENTES'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_tintas_solventes_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"tintas_solventes");
                                            }    
                                        }
                                        divatual.getElementsByTagName('input')[31].checked=newlaudosavalsum.get_Hidrocarbonetos_Aromaticos(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[31].checked) {
                                            buscar_registros(window,'laudos_avaliacoes_hidrocarbonetos','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_hidrocarbonetos_aromaticos').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_hidrocarbonetos_aromaticos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'HIDROCARBONETOS AROMÁTICOS'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_hidrocarbonetos_aromaticos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"hidrocarbonetos");
                                            }
                                        }
                                        divatual.getElementsByTagName('input')[33].checked=newlaudosavalsum.get_Fumos_Metalicos(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[33].checked){
                                            buscar_registros(window,'laudos_avaliacoes_fumos_metalicos','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_fumos_metalicos').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_fumos_metalicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'FUMOS METÁLICOS'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_fumos_metalicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"fumos_metalicos");
                                            }
                                        }
                                        divatual.getElementsByTagName('input')[35].checked=newlaudosavalsum.get_Poeiras_Incomodas(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[35].checked){
                                            buscar_registros(window,'laudos_avaliacoes_poeiras_incomodas','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_poeiras_incomodas').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_poeiras_incomodas_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'POEIRAS INCÔMODAS'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_poeiras_incomodas_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"poeiras_incomodas");
                                            }
                                        }
                                        divatual.getElementsByTagName('input')[37].checked=newlaudosavalsum.get_Poeiras_Minerais(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[37].checked){
                                            buscar_registros(window,'laudos_avaliacoes_poeiras_minerais','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_poeiras_minerais').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_poeiras_minerais_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'POEIRAS MINERAIS'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_poeiras_minerais_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"poeiras_minerais");
                                            }
                                        }
                                        divatual.getElementsByTagName('input')[39].checked=newlaudosavalsum.get_Outros_Quimicos(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[39].checked){
                                            buscar_registros(window,'laudos_avaliacoes_outros_quimicos','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_outros_quimicos').cloneNode(true);
                                                divatual.getElementsByTagName('input')[41].value=newlaudosavalsum.get_Outros_Quimicos_Descricao(numocur);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_outros_quimicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'OUTROS QUÍMICOS'+newlaudosavalsum.get_Outros_Quimicos_Descricao(0);
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_outros_quimicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"outros_quimicos");
                                            }
                                        }
                                        divatual.getElementsByTagName('input')[42].checked=newlaudosavalsum.get_Iluminamento(0)=='1'?true:false;
                                        if (divatual.getElementsByTagName('input')[42].checked){
                                            buscar_registros(window,'laudos_avaliacoes_iluminamento','Busca_Tipos_Avaliacoes',campos,valores,false,Array("=","=","=","=","=","="),newlaudostipoaval);
                                            for (l=0;l<newlaudostipoaval.length();l++){
                                                tabela=document.getElementById('tabela_modelo_avaliacao_iluminamento').cloneNode(true);
                                                tabela.setAttribute('id','tabela_modelo_avaliacao_iluminamento_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                tabela.rows[0].cells[0].firstChild.textContent=tabela.rows[0].cells[0].firstChild.firstChild.textContent+'  '+'ILUMINAMENTO'	;
                                                tabela.rows[1].cells[0].firstChild.textContent='Avaliação '+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase();
                                                tabela.setAttribute('style','display:block;overflow:auto');
                                                dvx=document.createElement('div');
                                                dvx.setAttribute('id','div_'+'tabela_modelo_avaliacao_iluminamento_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase());
                                                dvx.appendChild(tabela);
                                                
                                                divatual.appendChild(dvx);
                                                exibir_historico_avaliacoes(divatual,"iluminamento");
                                            }
                                        }
                                        ttable.rows[linha_atual].appendChild(td1);
                                        tr.appendChild(td);
                                        
                                        ttbody.appendChild(tr);
                                        
                                        
				}

                
            }
            function exibir_historicos(){
                buscar_registros(window,'laudos_instrumentos_medicao','Consulta_Instrumentos_laudo',campos,valores,false,Array("=","=","=","="),newlaudoinstrumentomedicao);
                divinstrumentos=document.getElementById('entrada_instrumentos');
                divinstr=divinstrumentos.children[0];
                while (divinstrumentos.children.length>0) divinstrumentos.removeChild(divinstrumentos.children[0]);
                for(conty=0;conty<newlaudoinstrumentomedicao.length();conty++){
                        divi=divinstr.cloneNode(true);
                        divi.getElementsByTagName('select')[0].value=newlaudoinstrumentomedicao.get_Tipo_Selecao_Instrumento(conty);                        
                        divi.getElementsByTagName('input')[0].value=newlaudoinstrumentomedicao.get_Codigo_Instrumento(conty);
                        divi.getElementsByTagName('input')[1].value=newlaudoinstrumentomedicao.get_Tipo_Instrumento(conty);
                        divi.getElementsByTagName('input')[2].value=newlaudoinstrumentomedicao.get_Marca_Instrumento(conty);
                        divi.getElementsByTagName('input')[3].value=newlaudoinstrumentomedicao.get_Modelo_Instrumento(conty);
                        divi.getElementsByTagName('input')[4].value=newlaudoinstrumentomedicao.get_Serie_Instrumento(conty);
                        divi.getElementsByTagName('input')[5].value=newlaudoinstrumentomedicao.get_Data_Calibracao(conty);
                        divinstrumentos.appendChild(divi);

                    }
                
                carregar_setores_empresa_historico();
                carregar_maquina_historico();
                try{
                    carregar_atividade_historico();
                    carregar_avaliacoes_historico();
                }
                catch(e){
                    
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
            

            function carrega_epis_base(campo){
                 
                  buscar_registros(window,"epis_base","Carrega_EPIS_Base",null,null,false,null,newepisbase);
                 campo.length=0;
                 valor=campo.value;
                 campo.add(new Option('Não Aplicável','0'));
                 for(i=1;i <= newepisbase.length();i++){
                        campo.add(new Option(newepisbase.get_Descricao_EPI_Base(i-1),newepisbase.get_Codigo_EPI_Base(i-1)));
                 }       
                 campo.value=valor;
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
           
           function onselect_carrega_epis_necess(campo){
                linha_nbr=campo.parentNode.parentNode.parentNode.parentNode;
                divpai=linha_nbr.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
                vlcampo=divpai.children[0].rows[3].cells[1].children[0].value;
                linha_nbr.rows[1].cells[3].children[0].value=vlcampo;
               
           }      
           
           function onselect_avaliacoes_maquinas(campo){
               linhapai=campo.parentNode.parentNode;
               tblpai=linhapai.parentNode.parentNode;
               divpai=tblpai.parentNode;
               linhaavo=divpai.parentNode.parentNode;
               tblavo=linhaavo.parentNode.parentNode;
               divbsavo=tblavo.parentNode;
               divtravo=divbsavo.parentNode;
               tblunidfunc=divtravo.getElementsByTagName('table')[0];
               codigo_unidade=tblunidfunc.rows[2].cells[1].firstChild.value;
               codigo_setor=tblunidfunc.rows[3].cells[1].firstChild.value;
               linhapai.cells[0].children[0].value=codigo_unidade;
               linhapai.cells[1].children[0].value=codigo_setor;
               
               
           }
            function carregar_atividades(){
                    buscar_registros(window,'atividades','Carrega_Atividades','','',false,'',newativs);
                    divpai=document.getElementById('entrada_atividades').cloneNode(true);
                    divpai.setAttribute('id','entrada_atividades_2');
                    divavo=document.getElementById('divAtividades');
                    if (divavo.children.length>1){
                        if (divavo.children[1].id=='entrada_atividades_2'){
                            dv=document.getElementById('entrada_atividades_2');
                            divavo.removeChild(dv);
                        }    
                    }
                    divavo.appendChild(divpai);
                    divfilho=document.getElementById(divpai.children[0].id);
                    
                    divfilho.setAttribute("style","display:block");
                    divpai.setAttribute("style","display:block");                    
                    ddiv=document.createElement('div');
                    ttable=document.createElement('table');
                    ttable.setAttribute('id','tbl_atividades');
                    ttable.setAttribute('border','0');
                    ttable.setAttribute('cellpadding','0');
                    ttable.setAttribute('cellspacing','1');
                    divfilho=document.getElementById(divpai.children[0].id);
                    divclone=divfilho;
                    divclone.setAttribute('style','display:block');
                    ttbody=divfilho;
                    divpai.removeChild(ttbody);
                    ttbody=document.createElement('tbody');
                    ddiv.appendChild(ttable);
                    ddiv.setAttribute('style','overflow:auto;width:98%');
                    divpai.appendChild(ddiv);
                    ttable.insertRow(-1);
                    linha_atual=0;
                    divpai.appendChild(ttbody);
                    for (numocur=0;numocur<newativs.length();numocur++){
			divatual=divclone.cloneNode(true);
			xyz=numocur+1;
                        tr=document.createElement('tr');
                        td=document.createElement('td');
                        divatual.setAttribute('id',"div_atividades"+xyz);
			td.appendChild(divatual);
                        td1=document.createElement('td');
                        td1.innerHTML="#"+newativs.get_Codigo_Atividade(numocur)+"-"+newativs.get_Descricao_Resumida_Atividade(numocur);
                        td1.setAttribute('id',"cel"+divatual.id);
                        if (numocur==0) {
                            td1.setAttribute('class','subabaativa')
                        }    
                        else { 
                            td1.setAttribute('class','subabainativa')
                        }    
                        definesubAba("atividades_empresa", "cel"+divatual.id   , divatual.id );
                        td1.setAttribute('onClick',"trataCliquesubaba('atividades_empresa',this)");
                        td1.setAttribute("onMouseOver","trataMousesubaba(this)");
                        if (numocur % 10==0 && numocur>0){
                              linha_atual++;
                              ttable.insertRow(-1);
                        }
                        divatual.getElementsByTagName('select')[0].value=newativs.get_Classificacao(numocur);
                        divatual.getElementsByTagName('select')[1].length=0;
                        divatual.getElementsByTagName('select')[1].add(new Option(newativs.get_Descricao_Resumida_Atividade(numocur),newativs.get_Codigo_Atividade(numocur)));
                        divatual.getElementsByTagName('textarea')[0].value=newativs.get_Descricao_Atividade(numocur);
                        divatual.getElementsByTagName('input')[1].value=newativs.get_Descricao_Resumida_Atividade(numocur);
                        ttable.rows[linha_atual].appendChild(td1);
                        tr.appendChild(td);
                        ttbody.appendChild(tr);
                        empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;
                        parm=Array(empresa_ativa,newativs.get_Codigo_Atividade(numocur));
                        newativfunc.inicializa();
                        buscar_registros(window,'atividade_funcoes','Consulta_Atividade_Funcoes',Array("CODIGO_EMPRESA","CODIGO_ATIVIDADE"),parm,false,Array("=","="),newativfunc);
                        if (newativfunc.length()>0){
                            tabela_funcs=divatual.getElementsByTagName('table')[1];
                            linha=tabela_funcs.rows[tabela_funcs.rows.length-1];
                            linha_atual_funcao=linha;
                            linha_atual_funcao.cells[0].children[0].value=newativfunc.get_Codigo_Funcao(0);
                            linha_atual_funcao.cells[0].children[1].value=newativfunc.get_Descricao_Funcao(0);
                            linha_atual_funcao.cells[0].children[2].value=newativs.get_Codigo_Atividade(0);
                            txbody=linha.parentNode;
                            cont=1;
                            while (cont<newativfunc.length()){
                              
                              linha_atual_funcao=tabela_funcs.rows[tabela_funcs.rows.length-1];
                              linha_atual_funcao.cells[0].children[0].value=newativfunc.get_Codigo_Funcao(cont);
                              linha_atual_funcao.cells[0].children[1].value=newativfunc.get_Descricao_Funcao(cont);
                              linha_atual_funcao.cells[0].children[2].value=newativs.get_Codigo_Atividade(cont);
                              txbody.appendChild(linha_atual_funcao);
                              cont++;
                            }  
                        }
			}                                
				
				
            }	
                        
            
            function carregar_setores_empresa(){
                    buscar_registros(window,'setores','Carrega_Todos_Setores','','',false,'',newSetores);
                    divpai=document.getElementById('entrada_setores').cloneNode(true);
                    divpai.setAttribute('id','entrada_setores_2');
                    divavo=document.getElementById('divSetores');
                    if (divavo.children.length>1){
                        if (divavo.children[1].id=='entrada_setores_2'){
                            dv=document.getElementById('entrada_setores_2');
                            divavo.removeChild(dv);
                        }    
                    }
                    divavo.appendChild(divpai);
                    
                    //divpai=document.getElementById('entrada_setores');
                    //divavo=document.getElementById('divSetores');
                    //divavo.appendChild(divpai);
                    divfilho=document.getElementById(divpai.children[0].id);
                    divfilho.setAttribute("style","display:block");
                    divpai.setAttribute("style","display:block");                    
                    ddiv=document.createElement('div');
                    ddiv.setAttribute('id','dv_set')
                    ttable=document.createElement('table');
                    ttable.setAttribute('id','tbl_setores');
                    ttable.setAttribute('border','0');
                    ttable.setAttribute('cellpadding','0');
                    ttable.setAttribute('cellspacing','1');
                    divfilho=document.getElementById(divpai.children[0].id);
                    divclone=divfilho;
                    divclone.setAttribute('style','display:block');
                    ttbody=divfilho;
                    divpai.removeChild(ttbody);
                    ttbody=document.createElement('table');
                    ddiv.appendChild(ttable);
                    ddiv.setAttribute('style','overflow:auto;width:98%');
                    divpai.appendChild(ddiv);
                    ttable.insertRow(-1);
                    linha_atual=0;
                    divpai.appendChild(ttbody);
                    for (numocur=0;numocur<newSetores.length();numocur++){
			divatual=divclone.cloneNode(true);
			xyz=numocur+1;
                        tr=document.createElement('tr');
                        td=document.createElement('td');
                        divatual.setAttribute('id',"div_setores"+xyz);
			td.appendChild(divatual);
                        td1=document.createElement('td');
                        td1.innerHTML="#"+(numocur+1)+"-"+newSetores.get_Nome_Setor(numocur);
                        td1.setAttribute('id',"cel"+divatual.id);
                        if (numocur==0) {
                            td1.setAttribute('class','subabaativa')
                        }    
                        else { 
                            td1.setAttribute('class','subabainativa')
                        }    
                        definesubAba("setores_empresa", "cel"+divatual.id   , divatual.id );
                        td1.setAttribute('onClick',"trataCliquesubaba('setores_empresa',this)");
                        td1.setAttribute("onMouseOver","trataMousesubaba(this)");
                        if (numocur % 10==0 && numocur>0){
                              linha_atual++;
                              ttable.insertRow(-1);
                        }
                        popula_setores_carregados(divatual,numocur);
                        
                        divatual.getElementsByTagName('select')[0].value=newSetores.get_Codigo_Unidade(numocur);
                        divatual.getElementsByTagName('select')[1].value=newSetores.get_Codigo_Setor(numocur);
                        divatual.getElementsByTagName('textarea')[0].value=newSetores.get_Descricao_Setor(numocur);
                        divatual.getElementsByTagName('input')[2].value=newSetores.get_Nome_Setor(numocur);
                        
                        if (navigator.appName!='Microsoft Internet Explorer'){
                            divatual.children[0].children[0].children[0].children[0].children[1].getElementsByTagName('input')[1].value=divatual.getElementsByTagName('select')[0].value;
                            divatual.children[0].children[0].children[0].children[0].children[1].getElementsByTagName('input')[2].value=divatual.getElementsByTagName('select')[1].value;
                            unid=divatual.getElementsByTagName('select')[0].value;
                            setor=divatual.getElementsByTagName('select')[1].value;
                            try{
                                sequencial_foto[unid][setor]=1;
                            }
                            catch (e){
                                sequencial_foto[unid]=Array();
                                sequencial_foto[unid][setor]=1;
                            }
                            divatual.children[0].children[0].children[0].children[0].children[1].getElementsByTagName('input')[3].value= sequencial_foto[unid][setor];
                       }
                       else {
                            divatual.children[1].getElementsByTagName('input')[3].value=divatual.getElementsByTagName('select')[0].value;
                            divatual.children[1].getElementsByTagName('input')[4].value=divatual.getElementsByTagName('select')[1].value;
                            unid=divatual.getElementsByTagName('select')[0].value;
                            setor=divatual.getElementsByTagName('select')[1].value;
                            sequencial_foto[unid][setor]=1;
                            divatual.children[0].getElementsByTagName('input')[5].value= sequencial_foto[unid][setor];                                            
                        }  
                        param=Array('UNIDADE','CODIGO_SETOR');
                        vlrparam=Array(newSetores.get_Codigo_Unidade(numocur),newSetores.get_Codigo_Setor(numocur));
                        buscar_registros(window,'maquinas','Carrega_Maquinas_2',param,vlrparam,false,Array('=','='),newMaquinas); 
                        divatual.getElementsByTagName('textarea')[1].value="";
                        vlrmaq=Array();
                        for (iy=0;iy<newMaquinas.length();iy++){
                            divatual.getElementsByTagName('textarea')[1].value=divatual.getElementsByTagName('textarea')[1].value+newMaquinas.get_Codigo_Maquina(iy)+"-"+newMaquinas.get_Nome_Maquina(iy)+"\n";
                        }
                       
                        ttable.rows[linha_atual].appendChild(td1);
                        tr.appendChild(td);
                        ttbody.appendChild(tr);


						
				
			}
            }

            function carregar_setores_avaliacoes(){
                                buscar_registros(window,'setores','Carrega_Todos_Setores','','',false,'',newSetores);
                                divpai=document.getElementById('entrada_avaliacoes').cloneNode(true);
                                divpai.setAttribute('id','entrada_avaliacoes_2');
                                divavo=document.getElementById('divAvaliacoes');
                                if (divavo.children.length>1){
                                    if (divavo.children[1].id=='entrada_avaliacoes_2'){
                                        dv=document.getElementById('entrada_avaliacoes_2');
                                        divavo.removeChild(dv);
                                    }    
                                }
                                divavo.appendChild(divpai);
                                
				//divavo=document.getElementById('divAvaliacoes');       
                                //divpai=document.getElementById('entrada_avaliacoes');
                                //divavo.appendChild(divpai);
				//divfilho=document.getElementById(divpai.childNodes[1].id);
                                divfilho=document.getElementById(divpai.children[0].id);
                                divfilho.setAttribute("style","display:block");
                                divpai.setAttribute("style","display:block");
                                ddiv=document.createElement('div');
                                ttable=document.createElement('table');
                                ttable.setAttribute('id','tbl_avaliacoes');
                                ttable.setAttribute('border','0');
                                ttable.setAttribute('cellpadding','0');
                                ttable.setAttribute('cellspacing','1');

				//divfilho=document.getElementById(divpai.childNodes[1].id);
                                //divfilho=document.getElementById(divpai.children[0].id);
                                //divclone=divfilho.childNodes[1];
                                divclone=divfilho;
                                
                                //divclone=divclone.childNodes[0];
                                //divclone=divclone.childNodes[1]
                                //divclone=divclone.childNodes[1];
                                //ttbody=divfilho.childNodes[1];
                                ttbody=divfilho;
                                
				divpai.removeChild(ttbody);
                                //divpai.removeChild(divfilho);
                                ttbody=document.createElement('tbody');
                                ddiv.appendChild(ttable);
                                ddiv.setAttribute('style','overflow:auto;width:98%');
                                divpai.appendChild(ddiv);
                                ttable.insertRow(-1);
                                linha_atual=0;
                                divpai.appendChild(ttbody);
				for (numocur=0;numocur<newSetores.length();numocur++){
					divatual=divclone.cloneNode(true);
					xyz=numocur+1;
                                        tr=document.createElement('tr');
                                        td=document.createElement('td');
					
                                        divatual.setAttribute('id',"div_setor_avaliacao"+xyz);
                                        divatual.setAttribute('style','overflow:auto;width:98%');
					popula_setores_carregados_avaliacao(divatual,numocur);
					td.appendChild(divatual);
                                        td1=document.createElement('td');
                                        td1.innerHTML="#"+(numocur+1)+"-"+newSetores.get_Nome_Setor(numocur);
                                        td1.setAttribute('id',"cel"+divatual.id);
                                        if (numocur==0)
                                            td1.setAttribute('class','subabaativa');
                                        else 
                                            td1.setAttribute('class','subabainativa');
                                            definesubAba("setores_avaliacoes", "cel"+divatual.id   , divatual.id );
                                            td1.setAttribute('onClick',"trataCliquesubaba('setores_avaliacoes',this)");
                                            td1.setAttribute("onMouseOver","trataMousesubaba(this)");
                                        if (numocur % 10==0 && numocur>0){
                                            linha_atual++;
                                            ttable.insertRow(-1);
                                        }
                                        ttable.rows[linha_atual].appendChild(td1);
                                        tr.appendChild(td);
                                        ttbody.appendChild(tr);
                                        
                                        
				}
				
				
			}	
                        
             function carregar_setores_avaliacoes_historico(){
                                buscar_registros(window,'laudos_setores_pericia','Carrega_Todos_Setores','','',false,'',newlaudosetper);
                                divpai=document.getElementById('entrada_avaliacoes').cloneNode(true);
                                divpai.setAttribute('id','entrada_avaliacoes_2');
                                divavo=document.getElementById('divAvaliacoes');
                                if (divavo.children.length>1){
                                    if (divavo.children[1].id=='entrada_avaliacoes_2'){
                                        dv=document.getElementById('entrada_avaliacoes_2');
                                        divavo.removeChild(dv);
                                    }    
                                }
                                divavo.appendChild(divpai);
                                
				//divavo=document.getElementById('divAvaliacoes');       
                                //divpai=document.getElementById('entrada_avaliacoes');
                                //divavo.appendChild(divpai);
				//divfilho=document.getElementById(divpai.childNodes[1].id);
                                divfilho=document.getElementById(divpai.children[0].id);
                                divfilho.setAttribute("style","display:block");
                                divpai.setAttribute("style","display:block");
                                ddiv=document.createElement('div');
                                ttable=document.createElement('table');
                                ttable.setAttribute('id','tbl_avaliacoes');
                                ttable.setAttribute('border','0');
                                ttable.setAttribute('cellpadding','0');
                                ttable.setAttribute('cellspacing','1');

				//divfilho=document.getElementById(divpai.childNodes[1].id);
                                //divfilho=document.getElementById(divpai.children[0].id);
                                //divclone=divfilho.childNodes[1];
                                divclone=divfilho;
                                
                                //divclone=divclone.childNodes[0];
                                //divclone=divclone.childNodes[1]
                                //divclone=divclone.childNodes[1];
                                //ttbody=divfilho.childNodes[1];
                                ttbody=divfilho;
                                
				divpai.removeChild(ttbody);
                                //divpai.removeChild(divfilho);
                                ttbody=document.createElement('tbody');
                                ddiv.appendChild(ttable);
                                ddiv.setAttribute('style','overflow:auto;width:98%');
                                divpai.appendChild(ddiv);
                                ttable.insertRow(-1);
                                linha_atual=0;
                                divpai.appendChild(ttbody);
				for (numocur=0;numocur<newsetper.length();numocur++){
					divatual=divclone.cloneNode(true);
					xyz=numocur+1;
                                        tr=document.createElement('tr');
                                        td=document.createElement('td');
					
                                        divatual.setAttribute('id',"div_setor_avaliacao"+xyz);
                                        divatual.setAttribute('style','overflow:auto;width:98%');
					popula_setores_carregados_avaliacao_historico(divatual,numocur);
					td.appendChild(divatual);
                                        td1=document.createElement('td');
                                        td1.innerHTML="#"+(numocur+1)+"-"+newsetper.get_Nome_Setor(numocur);
                                        td1.setAttribute('id',"cel"+divatual.id);
                                        if (numocur==0)
                                            td1.setAttribute('class','subabaativa');
                                        else 
                                            td1.setAttribute('class','subabainativa');
                                            definesubAba("setores_avaliacoes", "cel"+divatual.id   , divatual.id );
                                            td1.setAttribute('onClick',"trataCliquesubaba('setores_avaliacoes',this)");
                                            td1.setAttribute("onMouseOver","trataMousesubaba(this)");
                                        if (numocur % 10==0 && numocur>0){
                                            linha_atual++;
                                            ttable.insertRow(-1);
                                        }
                                        ttable.rows[linha_atual].appendChild(td1);
                                        tr.appendChild(td);
                                        ttbody.appendChild(tr);
                                        
                                        
				}
				
				
			}	           
                        
                        
             function carregar_maquinas_equipamentos(campo){
                 newMaquinas.inicializa();
                 buscar_registros(window,'maquinas','Carrega_Maquinas','','',false,'',newMaquinas);
                 old_value=campo.value;
				 
                 for (numocur=0;numocur<newMaquinas.length();numocur++){
                     campo.add(new Option(newMaquinas.get_Nome_Maquina(numocur),newMaquinas.get_Codigo_Maquina(numocur)));
                 }
                 campo.value=old_value;
		buscar_registro(window,'CODIGO_MAQUINA',campo.value,'=','maquinas','maquinas','Busca_Maquina',false,newmaquina);
		if (newMaquina.get_Classificacao_Local=='A'){
			linha=campo.parentNode.parentNode;
			linha.cells[5].children[0].value=65;
			linha.cells[6].children[0].value="08:00:00";						
		} 
				  
		
             }
			 
			 function calcular_media_quadratica(campo){
				tabela_ruido=campo.parentNode.parentNode.parentNode.parentNode;
				
				campo_acustico=0;
				ccampo_acustico=0;
				acc_campo_acustico=0;
				for (c=0;c<tabela_ruido.rows.length;c++){
					ccampo=tabela_ruido.rows[c].cells[3].children[0].value.toString().replace(",",".");
					campo_acustico=parseInt(Math.pow(ccampo,2),10);
					campo_acustico=parseInt(campo_acustico/tabela_ruido.rows.length,10);
					acc_campo_acustico+=campo_acustico;
				}
				if (acc_campo_acustico>0)	ccampo_acustico=Math.pow(acc_campo_acustico,0.5);
				linha_atual=tabela_ruido.parentNode.parentNode.parentNode;
				ln=linha_atual.rowIndex+2;
				tabela_acustico=linha_atual.parentNode.parentNode;
				tabela_acustico.rows[ln].cells[1].children[0].value=ccampo_acustico.toFixed(2).toString().replace('.',',');
			 }

			 function calcular_media_absoluta(campo){
				tabela_ruido=campo.parentNode.parentNode.parentNode.parentNode;
				
				campo_acustico=0;
				ccampo_acustico=0;
				acc_campo_acustico=Array();
				for (c=0;c<tabela_ruido.rows.length;c++){
					ccampo=tabela_ruido.rows[c].cells[3].children[0].value.toString().replace(",",".");
					acc_campo_acustico[c]=ccampo;
                                        
				}
                                acc_campo_acustico.sort();
                                valor_minimo=acc_campo_acustico[0];
                                valor_maximo=acc_campo_acustico[acc_campo_acustico.length-1];
                                ccampo_acustico=(parseInt(valor_maximo*10,10)+parseInt(valor_minimo*10,10))/2;
                                ccampo_acustico/=10;
				linha_atual=tabela_ruido.parentNode.parentNode.parentNode;
				ln=linha_atual.rowIndex+2;
				tabela_acustico=linha_atual.parentNode.parentNode;
				tabela_acustico.rows[ln].cells[1].children[0].value=ccampo_acustico.toFixed(2).toString().replace('.',',');
			 }


            function carregar_maquinas_empresa(){
                    buscar_registros(window,'maquinas','Carrega_Maquinas','','',false,'',newMaquinas);
                    divpai=document.getElementById('entrada_maquinas').cloneNode(true);
                    divpai.setAttribute('id','entrada_maquinas2');
                    divpai.setAttribute('style','display:block');
                    divavo=document.getElementById('divMaquinas');
                    if (divavo.children.length>1){
                        if (divavo.children[1].id=='entrada_maquinas2'){
                            dv=document.getElementById('entrada_maquinas2');
                            divavo.removeChild(dv);
                        }    
                    }
                    
	
                    divfilho=document.getElementById(divpai.children[0].id);
                    divfilho.setAttribute("style","display:block");
                    divavo.appendChild(divpai);
                    ttable=document.createElement('table');
                    ttable.setAttribute('id','tbl_maquinas');
                    ttable.setAttribute('border','0');
                    ttable.setAttribute('cellpadding','0');
                    ttable.setAttribute('cellspacing','1');
                    divfilho=divpai.children[0];
                    divclone=divfilho;
                    divclone.setAttribute('style','display:block');
                    ttbody=divfilho;
                    divpai.removeChild(ttbody);
                    ttbody=document.createElement('table');
                    divpai.appendChild(ttable);
                    divpai.setAttribute('style','overflow:auto;width:98%');
                    
                    ttable.insertRow(-1);
                    linha_atual=0;
                    divpai.appendChild(ttbody);
                    for (numocur=0;numocur<newMaquinas.length();numocur++){
			divatual=divclone.cloneNode(true);
			xyz=numocur+1;
                        tr=document.createElement('tr');
                        td=document.createElement('td');
                        divatual.setAttribute('id',"div_maquinas"+xyz);
			td.appendChild(divatual);
                        td1=document.createElement('td');
                        td1.innerHTML="#"+(numocur+1)+"-"+newMaquinas.get_Nome_Maquina(numocur);
                        td1.setAttribute('id',"cel"+divatual.id);
                        if (numocur==0) {
                            td1.setAttribute('class','subabaativa')
                        }    
                        else { 
                            td1.setAttribute('class','subabainativa')
                        }    
                        definesubAba("maquinas_empresa", "cel"+divatual.id   , divatual.id );
                        td1.setAttribute('onClick',"trataCliquesubaba('maquinas_empresa',this)");
                        td1.setAttribute("onMouseOver","trataMousesubaba(this)");
                        if (numocur % 10==0 && numocur>0){
                              linha_atual++;
                              ttable.insertRow(-1);
                        }
                        popula_maquinas_carregadas(divatual,numocur);
			divpai.appendChild(divatual);

                        ttable.rows[linha_atual].appendChild(td1);
                        tr.appendChild(td);
                        ttbody.appendChild(tr);
				
				
			}	

            }
            


       function popula_setores_carregados(divisao,contador){
		    carrega_unidades(divisao.getElementsByTagName('select')[0]);
		    		
                    divisao.getElementsByTagName('input')[0].value=contador+1;
                    divisao.getElementsByTagName('select')[0].value=newSetores.get_Codigo_Unidade(contador);
                    divisao.getElementsByTagName('select')[1].length=0;
                    divisao.getElementsByTagName('select')[1].add(new Option(newSetores.get_Nome_Setor(contador),newSetores.get_Codigo_Setor(contador)));
                    divisao.getElementsByTagName('select')[1].value=newSetores.get_Codigo_Setor(contador);
                    divisao.getElementsByTagName('textarea')[0].value=newSetores.get_Descricao_Setor(contador);
                     divisao.getElementsByTagName('input')[2].value=newSetores.get_Nome_Setor(contador);
       }
       function popula_setores_carregados_avaliacao(divisao,contador){
		    carrega_unidades(divisao.getElementsByTagName('select')[0]);
		    		
                    divisao.getElementsByTagName('input')[0].value=contador+1;
                    divisao.getElementsByTagName('select')[0].value=newSetores.get_Codigo_Unidade(contador);
                    divisao.getElementsByTagName('select')[1].length=0;
                    divisao.getElementsByTagName('select')[1].add(new Option(newSetores.get_Nome_Setor(contador),newSetores.get_Codigo_Setor(contador)));
                    divisao.getElementsByTagName('select')[1].value=newSetores.get_Codigo_Setor(contador);
                    divisao.getElementsByTagName('input')[43].value=newSetores.get_Nome_Setor(contador);;
                    
       }

       function popula_setores_carregados_avaliacao_historico(divisao,contador){
		    carrega_unidades(divisao.getElementsByTagName('select')[0]);
		    		
                    divisao.getElementsByTagName('input')[0].value=contador+1;
                    divisao.getElementsByTagName('select')[0].value=newlaudosavaliacoes.get_Unidade(contador);
                    divisao.getElementsByTagName('select')[1].length=0;
                    divisao.getElementsByTagName('select')[1].add(new Option(newlaudosavaliacoes.get_Descricao_Setor(contador),newlaudosavaliacoes.get_Codigo_Setor(contador)));
                    divisao.getElementsByTagName('select')[1].value=newlaudosavaliacoes.get_Codigo_Setor(contador);
                    divisao.getElementsByTagName('input')[43].value=newlaudosavaliacoes.get_Nome_Setor(contador);;
                    
       }

        function popula_maquinas_carregadas(divisao,contador){
		    carrega_unidades(divisao.getElementsByTagName('select')[0]);
                    carrega_setores_div(divisao.getElementsByTagName('select')[1],Array(divisao.getElementsByTagName('select')[0].id),Array("="),Array(divisao.getElementsByTagName('select')[0].value));
                    divisao.getElementsByTagName('input')[0].value=contador+1;
                    divisao.getElementsByTagName('select')[0].value=newMaquinas.get_Unidade(contador);
                    divisao.getElementsByTagName('select')[1].value=newMaquinas.get_Setor(contador);					
                    divisao.getElementsByTagName('select')[2].length=0;
                    divisao.getElementsByTagName('select')[2].add(new Option(newMaquinas.get_Nome_Maquina(contador),newMaquinas.get_Codigo_Maquina(contador)));
                    divisao.getElementsByTagName('select')[2].value=newMaquinas.get_Codigo_Maquina(contador);
                    divisao.getElementsByTagName('input')[1].value=divisao.getElementsByTagName('select')[1].options[divisao.getElementsByTagName('select')[1].selectedIndex].text;
                    divisao.getElementsByTagName('input')[2].value=newMaquinas.get_Nome_Maquina(contador);

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

            //div_pai=document.getElementById('consultaexterna');

            
            function monta_consulta_instrumentos(campo_origem,campo_pesquisa){
                campo_origem=campo_origem.parentNode.children[0];
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
                div_pai.style.width='800px';
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
                colunas=Array('COD.IN','TIPO.INST','MARCA','MODELO','SERIE','DATA.CALIB');
                largura=Array('50px','150px','145px','115px','115px','150px');
                
                for (xcab=0;xcab < 6;xcab++){
                     th=document.createElement('th');
                     th.innerHTML=colunas[xcab];
                    
                     th.setAttribute('width',largura[xcab]);
                     tr.appendChild(th);  
                }  
                consultar_instrumento(tabela,campo_pesquisa,' like ')
            }    
                
                
            function consultar_instrumento(ntabela,campo_pesquisa,criterio){
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                ntabela.appendChild(tbody);
                

                empresa_ativa=empresa_ativa.toString();
                criterio="";
                cx=campo_pesquisa.value.toString();
                parm=Array(empresa_ativa,criterio.concat(cx,'%'));
                //parm=Array(empresa_ativa,("%"+campo_pesquisa.value+"%"));
                buscar_registros(window,'instrumentos','Consulta_instrumentos_laudos',Array("CODIGO_EMPRESA","DESCRICAO_INSTRUMENTO"),parm,false,Array("="," like "),newregistros);
                
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
                    tr.setAttribute('onclick', 'captura_linha_instrumentos(this)');
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
            function captura_linha_responsavel(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['laudos_acompanhantes|NOME_RESPONSAVEL'].value=valor_celula[0];
                document.forms[1].elements['laudos_acompanhantes|FUNCAO'].value=valor_celula[1];
                document.forms[1].elements['laudos_acompanhantes|DATA_ADMISSAO'].value=valor_celula[2];
                document.forms[1].elements['laudos_acompanhantes|NOME_RESPONSAVEL'].focus();
                document.getElementById('consultaexterna').style.display='none';
            }

            function captura_linha_tecnico(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['laudos_profissionais|NOME_RESPONSAVEL[]'][0].value=valor_celula[0];
                document.forms[1].elements['laudos_profissionais|FUNCAO[]'][0].value=1;
                document.forms[1].elements['laudos_profissionais|NOME_RESPONSAVEL[]'][0].focus();
                document.getElementById('consultaexterna').style.display='none';
            }

            function captura_linha_engenheiro(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['laudos_profissionais|NOME_RESPONSAVEL[]'][1].value=valor_celula[0];
                document.forms[1].elements['laudos_profissionais|FUNCAO[]'][1].value=2;
                document.forms[1].elements['laudos_profissionais|NOME_RESPONSAVEL[]'][1].focus();
                document.getElementById('consultaexterna').style.display='none';
            }

            function captura_linha_medico(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['laudos_profissionais|NOME_RESPONSAVEL[]'][2].value=valor_celula[0];
                document.forms[1].elements['laudos_profissionais|FUNCAO[]'][2].value=3;
                document.forms[1].elements['laudos_profissionais|NOME_RESPONSAVEL[]'][2].focus();
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



            function monta_consulta_medicos(campo_origem,campo_pesquisa){
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
                consultar_medicos(tabela,campo_pesquisa,' like ')
            }    
                
                
            function consultar_medicos(ntabela,campo_pesquisa,criterio){
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                ntabela.appendChild(tbody);
                empresa_ativa=empresa_ativa.toString();
                parm=Array((campo_pesquisa.value+"%"));
                buscar_registros(window,'medicos','Consulta_medico_laudo',Array('NOME_PROFISSIONAL'),parm,false,Array(' like '),newregistros);
                cont=0;
                valores=newregistros.getValores();
                valores=valores.toString().split(',');
                for(x=0;x<valores.length-1;x++){
                    vreg=valores[x].split('|');
                    //buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array( empresa_ativa,vreg[1]),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);                    
                  tr=document.createElement('tr');
                    
                    if (x % 2==0){
                        tr.setAttribute('class','alternateRow');
                    }
                    else {
                        tr.setAttribute('class','normalRow');
                    }
                    tr.setAttribute('onclick', 'captura_linha_medico(this)');
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
                    
                    //tr.cells[1].children[0].innerHTML=newfunc.get_Descricao();
                    
                }    
                
            }


            function captura_linha_laudo(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['laudos|ANO_PERICIA'].value=valor_celula[0];
                document.forms[1].elements['laudos|NUMERO_LAUDO'].value=valor_celula[1];
                document.forms[1].elements['laudos|RAZAO_SOCIAL'].value=valor_celula[2];
                document.forms[1].elements['laudos|ANO_PERICIA'].focus();
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
                buscar_registros(window,'laudos','Consulta_numero_laudo',Array("laudos|CODIGO_EMPRESA","laudos|NUMERO_LAUDO"),parm,false,Array("=","like "),newregistros);
                
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
            
			function mostra_foto(campo){
				pai=campo.parentNode.parentNode;
				document.getElementById('FOTO')[indice].src=campo.value;
				
			}
                        function carrega_campos_iniciais(){
                            if (document.forms[1].elements['laudos|ANO_PERICIA'].value=="") 
                            document.forms[1].elements['laudos|ANO_PERICIA'].value=new Date().getFullYear();
                            if (document.forms[1].elements['laudos|DATA_LANCAMENTO'].toString().length==0) 
                            document.forms[1].elements['laudos|DATA_LANCAMENTO'].value=retorna_data_hoje();
                            if (document.forms[1].elements['laudos|REVISAO'].value=="") 
                            document.forms[1].elements['laudos|REVISAO'].value="0";                            
                            if (document.forms[1].elements['laudos|SITUACAO_LAUDO'].value==" ") 
                            document.forms[1].elements['laudos|SITUACAO_LAUDO'].value="Iniciado";    
                            sequencial_foto=Array(Array());
                            
                        }
                        
                        function imprimir_laudo(){
                            ano_pericia=document.forms[1].elements['laudos|ANO_PERICIA'].value;
                            numero_laudo=document.forms[1].elements['laudos|NUMERO_LAUDO'].value;
                            revisao=document.forms[1].elements['laudos|REVISAO'].value;
                            empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
                            empresa_ativa=empresa_ativa.toString();  
                            
                            if (confirm("Imprimir registro?")){                
   
                            parm="?CODIGO_EMPRESA="+empresa_ativa+"&ANO_PERICIA="+ano_pericia+"&NUMERO_LAUDO="+numero_laudo+"&REVISAO="+revisao;
                            window.open("../Reports/Laudo_Impressao.php"+parm, "print", "location=no resizable=YES directories=no menubar=no status=no toolbar=no titlebar=no");   
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
                            linhaspai=campo.parentNode.parentNode;
                            unidade=linhaspai.cells[2].children[0].value;
                            setor=linhaspai.cells[3].children[0].value;
                            old_value_campo=campo.value;
                            buscar_registros(window,"funcionarios","Carrega_Funcao_Laudo",Array('UNIDADE','CODIGO_SETOR'),Array(unidade,setor),false,Array("=","="),newfuncoeslaudo);
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
    
    <center><h1>Composição de Laudos Técnicos Ambientais</h1></center>
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
             <button  type="button" onclick="imprimir_laudo();">
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
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="divAbaEmpresa" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Dados da Empresa        </td>
                <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaAcompanhantes" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Dados dos Profissionais na Perícia</td>
                <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaInstrumentos" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Instrumentos de Medição</td>
                <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaSetores" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Setores Objetos da Perícia</td>
                <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaMaquinaseEquipamentos" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Local/Máquinas e Equipamentos</td>
                <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaAtividades" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Atividades</td>
                <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaAvaliacoes" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                    Avaliações Técnicas</td>
            </tr>    
       </table>
        <br/>
		
        <form action="" method="POST" enctype="multipart/form-data" id="frm_laudos">
            <div id="divDadosEmpresa" style="display:block;overflow:auto;height:60%;min-height:60%;" >
                <table width="90%" border="0" class="tabela" >
                <tr>
                <td width="65">Código da Empresa </td>
                <td width="62"><input type="text" name="laudos|CODIGO_EMPRESA" maxlength="10" size="10" readonly="readonly" value="<?php echo $_SESSION['empresa_ativa']?>"/></td>
                <td colspan="2">Nome da Empresa</td>
                <td colspan="4"><input type="text" name="laudos|RAZAO_SOCIAL" readonly="readonly"  maxlength="50" size="50" value="<?php echo ($_SESSION['nome_empresa_ativa']) ?>"/></td>
                <td>CNPJ/C.E.I</td>
                <td colspan="2"><input type="text" name="laudos|CNPJ_CEI" readonly="readonly" value="<?php echo $_SESSION['cnpj_empresa_ativa'] ?>" /></td>
                <td width="56">C.NA.E</td>
                <td width="110"><input type="text" name="laudos|CNAE" readonly="readonly" size="10" value="<?php echo $_SESSION['cnae_empresa_ativa'] ?>" /></td>
                <td width="56">Grau de Risco </td>
                <td width="17"><input name="laudos|GRAU_RISCO" type='text' readonly="readonly" size="1" value="<?php echo $_SESSION['grau_risco_empresa_ativa'] ?>" /> </td>
                <td width="46">No. Func </td>
                <td width="116"><input type="text" name="laudos|NRO_FUNCS" maxlength="10" size="10" readonly="readonly" value="<?php echo $_SESSION['numero_funcs_empresa_ativa'] ?>" /></td>
              </tr>
              <tr>
                <td> Ano da Per&iacute;cia</td>
                <td><input type="text" name="laudos|ANO_PERICIA" maxlength="4" size="5"  onkeypress="return entrada_numerica_inteira(this,event)"  /></td>
                <td width="25"></td>
                <td width="22">&nbsp;</td>
                <td width="94">Número do Laudo</td>
                <td width="62"><input type="text" name="laudos|NUMERO_LAUDO" maxlength="10" size="10" onkeypress="return entrada_numerica_inteira(this,event)" /><img src="../images/search.png" onclick="monta_consulta_laudo(document.forms[1].elements['laudos|NUMERO_LAUDO'],document.forms[1].elements['laudos|NUMERO_LAUDO'])" width="10px" height="10px"/></td>
                <td width="71">Revis&atilde;o</td>
                <td width="70"><input type="text" name="laudos|REVISAO" maxlength="2" size="2"  onkeypress="return entrada_numerica_inteira(this,event)"  onblur="pesquisar_laudo()" /></td>
                <td width="69">Data de Lan&ccedil;amento</td>
                <td width="72"><input type="text" name="laudos|DATA_LANCAMENTO" maxlength="10" size="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
                <td width="72">Situa&ccedil;&atilde;o</td>
                <td colspan="2"><select name="laudos|SITUACAO_LAUDO" style="width:220px">
                  <option value=" " selected="selected"> </option>
                  <option value="IN">1-Iniciado pelo Técnico</option>
                  <option value="AN">2-Concluído pelo Técnico</option>
                  <option value="AA">3-Em Análise Administrativa</option>
                  <option value="CA">4-Concluído Análise Administrativa</option>
                  <option value="RA">5-Rejeitado pela Análise Administrativa</option>
                  <option value="EC">6-Em Análise pelo Cliente</option>
                  <option value="AC">7-Aprovado pelo Cliente</option>
                  <option value="RC">8-Rejeitado pelo Cliente</option>
                  <option value="CT">9-Concluído Totalmente</option>
                  <option value="CN">10-Cancelado</option>
                </select></td>
                <td colspan="2">Data/Hora da Per&iacute;cia</td>
                <td colspan="2"><input type="text" name="laudos|DATA_HORA_PERICIA" maxlength="19" size="19"  onkeyup="return formata_data_hora(this,'eu_dh',event);" onkeypress="return valida_data_hora(this,event)"/></td>
                </tr>
           </table>
            <label for="checkbox"></label>
            <table width="90%" border="0" class="tabela" >
            
            <tr>
                <td>Endere&ccedil;o de Atuação</td>
                <td colspan="4"><input type="text" readonly="readonly" name="laudos|ENDERECO_ATUACAO" maxlength="100" size="100" value="<?php echo ($_SESSION['endereco_empresa_ativa']) ?>" /></td>
			 </tr>
			 <tr>
               <td width="126">Bairro</td>
               <td width="237"><input type="text" name="laudos|BAIRRO_ATUACAO" SIZE="30" readonly="readonly" value="<?php echo ($_SESSION['bairro_empresa_ativa']) ?>" /></td>
                <td width="104">Municipio</td>
                <td width="267"><input type="text" name="laudos|MUNICIPIO_ATUACAO" SIZE="30" readonly="readonly" value="<?php echo ($_SESSION['municipio_empresa_ativa']) ?>"   /></td>
                <td width="68">CEP</td>
                <td width="73"><input type="text" name="laudos|CEP_ATUACAO" readonly="readonly" sIZE="10" value="<?php echo $_SESSION['cep_empresa_ativa'] ?>" /></td>
                <td width="21">UF</td>
                <td width="223"><input type="text" name="laudos|UF_ATUACAO" readonly="readonly" size="2" value="<?php echo $_SESSION['uf_empresa_ativa'] ?>" /></td>
			 </tr>
          </table>
      </div>
   		
          <div id="divAcompanhantes" style="display:none;overflow:auto;height:60%;min-height:60%;" >
            <table width="90%" border="0" class="tabela" >
		<tr>
		<td width="86">Nome  do Acompanhante </td>
		<td width="338"><input type="text" name="laudos_acompanhantes|NOME_RESPONSAVEL" maxlength="40" size="35"/> <img src="../images/search.png" onclick="monta_consulta_responsavel(document.forms[1].elements['laudos_acompanhantes|NOME_RESPONSAVEL'],document.forms[3].elements['txt_pesquisa'])" width="10px" height="10px"/>		  </td>
                <td width="41">Função</td>
          <td width="242"><input type="text"  name="laudos_acompanhantes|FUNCAO" maxlength="40" size="40"/></td>
                <td width="113">Data de Admiss&atilde;o</td>
          <td width="145"><input type="text" name="laudos_acompanhantes|DATA_ADMISSAO"  maxlength="10" size="10"  onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)"/></td>
              </tr>
    </table>                    
            <table width="90%" border="0" class="tabela" >
		<tr>
		<td width="86">Nome  do Técnico de Segurança</td>
		<td colspan="2" width="338"><input type="text" name="laudos_profissionais|NOME_RESPONSAVEL[]" maxlength="40" size="35"/> <img src="../images/search.png" onclick="monta_consulta_tecnicos(document.forms[1].elements['laudos_profissionais|NOME_RESPONSAVEL[]'][0],document.forms[3].elements['txt_pesquisa'])" width="10px" height="10px"/>		  </td>
                <td  width="338"><input type="hidden" name="laudos_profissionais|FUNCAO[]" maxlength="40" size="35" value="1"/> </td>
              </tr>
    </table>                    
            <table width="90%" border="0" class="tabela" >
		<tr>
		<td width="86">Nome  do Engenheiro de Segurança</td>
                <td colspan="2" width="338"><input type="text" name="laudos_profissionais|NOME_RESPONSAVEL[]" maxlength="40" size="35"/> <img src="../images/search.png" onclick="monta_consulta_engenheiros(document.forms[1].elements['laudos_profissionais|NOME_RESPONSAVEL[]'][1],document.forms[3].elements['txt_pesquisa'])" width="10px" height="10px"/>		  </td>
                <td  width="338"><input type="hidden" name="laudos_profissionais|FUNCAO[]" maxlength="40" size="35" disabled value="2"/> </td>
              </tr>
    </table>                    
            <table width="90%" border="0" class="tabela" >
		<tr>
		<td width="86">Nome  do Médico do Trabalho</td>
                <td colspan="2" width="338"><input type="text" name="laudos_profissionais|NOME_RESPONSAVEL[]" maxlength="40" size="35"/> <img src="../images/search.png" onclick="monta_consulta_medicos(document.forms[1].elements['laudos_profissionais|NOME_RESPONSAVEL[]'][2],document.forms[3].elements['txt_pesquisa'])" width="10px" height="10px"/>		  </td>
                <td  width="338"><input type="hidden" name="laudos_profissionais|FUNCAO[]" maxlength="40" size="35" disabled value="3"/>		  </td>
              </tr>
    </table>                    
              
     </div>        
     <div id="divInstrumentos" style="display:none;height:330px;max-height:1180px;overflow: -moz-scrollbars-vertical; overflow-y: scroll" >
		<div id="entrada_instrumentos"  >
		<div id="instrumento">
		<table width="91%" border="0" class="tabela" >
		<tr>
		  <td colspan="6"><div align="center"><strong>Instrumental Utilizado para Avalia&ccedil;&atilde;o</strong> de 
		    <select name="laudos_instrumentos_medicao|TIPO_SELECAO_INSTRUMENTO[]">
              <option value="" Selected></option>
              <option value="RU&Iacute;DO">RU&Iacute;DO</option>
              <option value="CALOR">CALOR</option>
              <option value="FRIO">FRIO</option>
              <option value="ILUMINAMENTO">ILUMINAMENTO</option>
		      </select>
		    </div></td>
	   </tr>
		<tr>
          <td width="8%">C&oacute;digo Instrumento </td>
		  <td width="16%">Tipo Instrumento</td>
		  <td width="21%">Marca</td>
		  <td width="21%">Modelo</td>
		  <td width="21%">S&eacute;rie</td>
		  <td width="13%">Data Calibra&ccedil;&atilde;o</td>
	   </tr>
		<tr>
		  <td><input type="text" name="laudos_instrumentos_medicao|CODIGO_INSTRUMENTO[]" maxlength="15" size="7" /><img src="../images/search.png" onclick="cria_consulta_instrumentos(this)" width="10px" height="10px"/>
		</td>
		  <td><input type="text" name="laudos_instrumentos_medicao|TIPO_INSTRUMENTO[]" readonly="readonly" /></td>
		  <td><input type="text" name="laudos_instrumentos_medicao|MARCA_INSTRUMENTO[]" readonly="readonly" /></td>
		  <td><input type="text" name="laudos_instrumentos_medicao|MODELO_INSTRUMENTO[]" readonly="readonly"  /></td>
		  <td><input type="text" name="laudos_instrumentos_medicao|SERIE_INSTRUMENTO[]" readonly="readonly"  /></td>
		  <td><input type="text" name="laudos_instrumentos_medicao|DATA_CALIBRACAO_INSTRUMENTO[]" readonly="readonly"  maxlength="10" size="10"/></td>
	   </tr>
		</table>
		<button type="button" id="insere_historico_instrumentos" onclick="insere(this)">+ Incluir Instrumento</button>		
		<button type="button" onclick="remove(this)">- Remover Instrumento</button>		

		</div>
		</div>
</div>                
        <div id="divSetores" style="display:none;height:330px;max-height:1180px;overflow: -moz-scrollbars-vertical; overflow-y: scroll" >
		<button type="button" onclick="carregar_setores_empresa()">Carregar Informação dos Setores</button>
          
        </div>
        <div id="divMaquinas" style="display:none;height:330px;max-height:1180px;overflow: -moz-scrollbars-vertical; overflow-y: scroll">
 <button type="button" onclick="carregar_maquinas_empresa()">Carregar Informação de Maquinas e Equipamentos</button>
        
        </div>
             <div id="divAtividades" style="display:none;height:330px;max-height:1180px;overflow: -moz-scrollbars-vertical; overflow-y: scroll" >
			<button type="button" onclick="carregar_atividades()">Carregar as Atividades da Empresa</button>
             </div>          


             <div id="divAvaliacoes" style="display:none;height:330px;max-height:1082px;overflow:auto">
<button type="button" onclick="carregar_setores_avaliacoes()">Carregar Unidades e Setores para Avalia&ccedil;&atilde;o </button>

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
		<table width="99%" border="0" class="tabela" id="tabela_modelo" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes Físicos</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
          </tr>

          <tr>
<td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes|TEXTO_EXPLICATIVO[]" rows="10" cols="100"></textarea></td>
          </tr>
          <tr>            <td><input type="text" id="CD_UNIDADE" name="laudos_avaliacoes|UNIDADE[]"/>
			  <input type="text" id="CD_SETOR" name="laudos_avaliacoes|CODIGO_SETOR[]"/></td>

            <td colspan="2">Periodicidade de exposi&ccedil;&atilde;o 
			  <select name="laudos_avaliacoes|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td colspan="2">N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="55%" colspan="3"><div align="center">Local/M&aacute;quinas e Equipamentos </div></td>
            <td width="45%"><input type="text"  value="0,00"/></td>
          </tr>
          <tr>
            <td width="55%" colspan="3"></td>
            <td width="45%"><input type="text"  value="0,00"/></td>
          </tr>
          <tr>
            <td width="55%" colspan="3"></td>
            <td width="45%"><input type="text"  value="0,00"/></td>
          </tr>

		  <tr><td width="55%" colspan="3">Campo Acústico</td>
		  <td width="45"><input type="text" size="5"/>dB(A)</td>
		  </tr>
		  <tr><td colspan="3">Nivel Atenuação do protetor auricular</td>
		  <td><input type="text" size="5"/>dB</td>		  
		  </tr>
 <tr><td colspan="3">Nivel de Ruído atenuado</td>
		  <td><input type="text" size="5"/>dB</td>		  
		  </tr>		  
          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>

    <table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_ruido" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes Físicos</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_ruido|TIPO_AVALIACAO[]"/></td>
          </tr>

          <tr>
<td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><div style="text-align:justify"><textarea name="laudos_avaliacoes_ruido|TEXTO_EXPLICATIVO[]" rows="10" cols="100"></textarea></div></td>
          </tr>
          <tr>            <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_ruido|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_ruido|CODIGO_SETOR[]"/></td>
          </tr>
                    <tr>
            <td  >Periodicidade de exposi&ccedil;&atilde;o </td><td>
			  <select name="laudos_avaliacoes_ruido|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
			  </tr>
			  <tr>
                              
            <td  width="17%">Número de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_ruido|NUMERO_FUNCS_SETOR[]" readonly="readonly" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td> Número de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_ruido|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"  size="6"/></td>
            
          </tr>
          <tr >
              <!--Inicio funções expostas ruído-->
              <td  colspan="5">
                              <table id="tbl_ruido_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_ruido_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_ruido_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_ruido_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_ruido_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_ruido_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_ruido_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_ruido_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_ruido_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_ruido_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_ruido_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_ruido_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_ruido_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_ruido_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                  </div>
                                      </td>
                                  
                          </tr>
        <!--Fim funções expostas ruído-->
        <tr><td colspan="5">
			  <table id="tbl_cabec_maq" width="100%" style="background:appworkspace">
                              <tr></tr>
                              <caption style="background:whitesmoke"><strong>Lançamento de Locais,Máquinas e Equipamentos</strong></caption>   
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
						<td width="15%">Nível de Ruído Medido(dB)</td>
						<td width="15%">Tempo Exposição Diária (H)</td>													
                                                <td width="15%">Nível de Ruído NR (dB)</td>
						<td width="20%">Tempo Máximo Exposição Diária (H)</td>													
			  </tr>
			 </table>
			 
			 </td>									

          </tr>
                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="100%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_ruido_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_ruido_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="35%"  ><select name="laudos_avaliacoes_ruido_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="15%"  ><input type="text" name="laudos_avaliacoes_ruido_maquinas|NIVEL_RUIDO_MEDIDO[]" value="0" onkeyup="calcular_media_absoluta(this)" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" size="10" /></td>
                                      <td width="15%"  ><input type="text" name="laudos_avaliacoes_ruido_maquinas|TEMPO_EXPOSICAO_DIARIA[]" value="08:00:00" onkeypress="return valida_decimal(this,event)" onblur="formata_hora(this,event)" onkeyup="calcula_exposicao_maxima(this)"  size="8" maxlength="8"/></td>
									  
                                      <td width="15%" ><input type="text" name="laudos_avaliacoes_ruido_maquinas|NIVEL_RUIDO_PERMITIDO[]" readonly value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" size="10" /></td>
                                      <td width="20%"  ><input type="text" name="laudos_avaliacoes_ruido_maquinas|TEMPO_MAXIMO_EXPOSICAO_DIARIA[]"  value="08:00:00" onkeypress="return valida_decimal(this,event)"  size="10"/></td>
									  
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>

          </tr>
		  <tr><td width="55%" >Campo Acústico</td>
		  <td width="45" colspan="3"><input type="text" size="5" value="0" name="laudos_avaliacoes_ruido|CAMPO_ACUSTICO_MEDIDO[]"/>dB(A)</td>
		  </tr>
		  <tr><td >Nivel Atenuação do protetor auricular</td>
		  <td colspan="3"><input type="text" size="5" value="0" name="laudos_avaliacoes_ruido|NIVEL_ATENUACAO_PROTETOR[]"/>dB</td>		  
		  </tr>
                  <tr><td >Nivel de Ruído atenuado</td>
		  <td colspan="3"><input type="text" size="5" value="0" name="laudos_avaliacoes_ruido|NIVEL_RUIDO_ATENUADO[]"/>dB</td>		  
		  </tr>	
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IA">Isolamento Acústico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor Auricular tipo plug</option>   
                          <option value="PAC">Protetor Auricular tipo concha</option>   
                          <option value="PPC">Combinado - Protetor auricular, tipo plug e concha</option>         
                            </select>
                        </td><td><input type="text" name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]" size="20"/></td>
                    </tr>           
		  <tr>

		  <tr>
		  <td >Fonte geradora</td>
		  <td><textarea name="laudos_avaliacoes_ruido|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
		  </tr>	
          <tr>
            <td >Enquadramento</td>
            <td colspan="2"><textarea name="laudos_avaliacoes_ruido|ENQUADRAMENTO[]" rows="10" ></textarea></td>
          </tr>
        </table>
    
	<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_ruido_dosimetria" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes Físicos</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_ruido_dosimetria|TIPO_AVALIACAO[]"/></td>
          </tr>

          <tr>
<td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_ruido_dosimetria|TEXTO_EXPLICATIVO[]" rows="10" cols="100"></textarea></td>
          </tr>
          <tr>            <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_ruido_dosimetria|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_ruido_dosimetria|CODIGO_SETOR[]"/></td>
          </tr>
                    <tr>
            <td  >Periodicidade de exposi&ccedil;&atilde;o </td><td>
			  <select name="laudos_avaliacoes_ruido_dosimetria|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
			  </tr>
			  <tr>
                              
            <td  width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_ruido_dosimetria|NUMERO_FUNCS_SETOR[]" readonly="readonly" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_ruido_dosimetria|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" readonly="readonly" size="6"/></td>
            <td>&nbsp;</td>
          </tr>

                    <tr style="overflow:visible" >
                     <td colspan="6"><div id="div_dosimetria" style="width:100%;background: appworkspace;overflow:visible ">
                             <table id="tbl_dosimetria_funcao">
                                 <tr>
                                <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_ruido_dosimetria_funcoes|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_ruido_dosimetria_funcoes|CODIGO_SETOR[]"/></td>                                     
                                     <td>
                                         Código Funcionário
                                     </td>
                                     <td>
                                         <select name="laudos_avaliacoes_ruido_dosimetria_funcoes|CODIGO_FUNCIONARIO[]">
                                             
                                         </select>
                                     </td>
                                     <td>
                                         Turno
                                     </td>                                     
                                     <td>
                                         <input type="text" name="laudos_avaliacoes_ruido_dosimetria_funcoes|TURNO[]" size="20"/>
                                     </td>
                                         
                                 </tr>

                                    <tr>
                                     <td>
                                         Código Função
                                     </td>
                                     <td>
                                         <select name="laudos_avaliacoes_ruido_dosimetria_funcoes|CODIGO_FUNCAO[]">
                                             
                                         </select>
                                     </td>
                                     <td>
                                         Código Máquina
                                     </td>
                                     <td>
                                         <select name="laudos_avaliacoes_ruido_dosimetria_funcoes|CODIGO_MAQUINA[]" onchange="onselect_avaliacoes_maquinas(this)">
                                             
                                         </select>
                                     </td>
                                     </tr>
                                 <tr>    
                                     <td>
                                         Inicio Dosimetria
                                     </td>
                                     <td>
                                         <input name="laudos_avaliacoes_ruido_dosimetria_funcoes|INICIO_DOSIMETRIA[]" />
                                     </td>
                                     <td>
                                         Término Dosimetria
                                     </td>
                                     <td>
                                         <input name="laudos_avaliacoes_ruido_dosimetria_funcoes|TERMINO_DOSIMETRIA[]" />
                                     </td>
                                     <td>
                                         Tempo Total
                                     </td>
                                     <td>
                                         <input name="laudos_avaliacoes_ruido_dosimetria_funcoes|TEMPO_TOTAL[]" />
                                     </td>
                                     <td>
                                         Dose (%)
                                     </td>
                                     <td>
                                         <input name="laudos_avaliacoes_ruido_dosimetria_funcoes|DOSE[]" />
                                     </td>
                                     <td>
                                         Ruído Equivalente
                                     </td>
                                     <td>
                                         <input name="laudos_avaliacoes_ruido_dosimetria_funcoes|RUIDO_EQUIVALENTE[]" />
                                     </td>
                                     
                                         
                                 </tr>
                                 <tr>
                                <td><button type="button" onclick="insere_dosimetria(this)">+Inserir Medicõoes</button></td>
                                <td><button type="button" onclick="remove_dosimetria(this)">-Remover Medições</button></td>
                                     
                                 </tr>
                             </table>   
                            </div>
                        
                     </td></tr>

		  <tr><td width="55%" >Campo Acústico</td>
		  <td width="45"><input type="text" size="5"/>dB(A)</td>
		  </tr>
		  <tr><td >Nivel Atenuação do protetor auricular</td>
		  <td><input type="text" size="5"/>dB</td>		  
		  </tr>
 <tr><td >Nivel de Ruído atenuado</td>
		  <td><input type="text" size="5"/>dB</td>		  
		  </tr>	
                    <tr><td >
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IA">Isolamento Ac&eacute;stico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor Auricular tipo plug</option>   
                          <option value="PAC">Protetor Auricular tipo concha</option>   
                          <option value="PPC">Combinado Protetor auricular, tipo plug e concha</option>
                          <option value="OT">Outros</option>
                            </select>
                        <input type="text" name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
                    
          <tr>

		  
            <td > Enquadramento</td><td colspan="3">
            <textarea name="laudos_avaliacoes_ruido_dosimetria|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>		
	<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_frio" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avaliação de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_frio|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_frio|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
          <tr><td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_frio|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_frio|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <select name="laudos_avaliacoes_frio|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_frio|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_frio|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly" size="6"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_frio_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_frio_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_frio_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_frio_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_frio_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_frio_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_frio_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_frio_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_frio_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_frio_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_frio_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_frio_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_frio_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_frio_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                  </div>
                          </td>
                 </tr>
                 <tr><td colspan="5">
                         <div> 
                         <table id="tbl_cabec_maq" width="100%" style="background:appworkspace">
                                
                                <tr><td width="49%">
                                <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Temperatura Medida (oC)</td>
                                                            <td width="28%" >Temperatura Permitida (oC)</td>
                                        </tr>
                                
                         </table>
                              </div>
                             
            </td>									

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_frio" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_frio_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_frio_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_frio_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_frio_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_frio_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        
          </tr>
                    <tr>
                        <td>Medidas de Proteção Coletivas Adotadas</td>
                        <td><select name="laudos_avaliacoes_frio|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IA">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_frio|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>  
                          <option value="OT">Outros</option> 
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_frio|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><textarea name="laudos_avaliacoes_frio|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td ><textarea name="laudos_avaliacoes_frio|ENQUADRAMENTO[]" rows="10" ></textarea></td>
          </tr>
               </table>
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_calor" style="display:none">
    
    
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_calor|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_calor|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
          <tr>
<td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_calor|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_calor|CODIGO_SETOR[]"/></td>    
          </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td>
            <td>
			
              <select name="laudos_avaliacoes_calor|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
          </tr>
    <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_calor|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
        
    </tr>
          <tr>
             <td><center><div></div></center></td>    
          </tr>
            <tr>
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_calor|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_calor_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_calor_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_calor_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_calor_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_calor_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_calor_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_calor_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_calor_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_calor_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_calor_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_calor_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_calor_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_calor_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_calor_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                  </div>
                          </td>
                 </tr>
                 <tr><td colspan="5">
                         
                         <table id="tbl_cabec_maq" width="100%" style="background:appworkspace">
                                
                                <tr><td width="49%">
                                <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Temperatura Medida (oC)</td>
                                                            <td width="28%" >Temperatura Permitida (oC)</td>
                                        </tr>
                                
                         </table>
                             
                             
            </td>									

          </tr>

                    
                    <tr  ><td colspan="5" id="td_maq_equip" ><div id="div_maq_equip_calor" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_calor_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_calor_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_calor_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_calor_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_calor_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        
          </tr>

                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><textarea name="laudos_avaliacoes_calor|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_calor|ENQUADRAMENTO[]" rows="10" ></textarea></td>
          </tr>
        </table>  
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_umidade" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
            
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_umidade|TIPO_AVALIACAO[]"/></td>            
          </tr>    
    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_umidade|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
    <tr>
             <td> <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_umidade|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_umidade|CODIGO_SETOR[]"/></td>
        
    </tr>
          <tr>
            
              <td >Periodicidade de exposi&ccedil;&atilde;o</td><td>
              <select name="laudos_avaliacoes_umidade|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
              
          </tr><tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_umidade|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div></div></center></td>
          </tr>
            <tr>
              <td  >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_umidade|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_umidade_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_umidade_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_umidade_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_umidade_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_umidade_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_umidade_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_umidade_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_umidade_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_umidade_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_umidade_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_umidade_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_umidade_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_umidade_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_umidade_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>


			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="49%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="38%">Densidade Medida (%)</td>
                                                    <td width="28%">Densiadade Permitida (%)</td>
				</tr>
				</table>
                                  </div>
                          </td>
                                      
								

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_umidade" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_umidade_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_umidade_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_umidade_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_umidade_maquinas|UMIDADE_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_umidade_maquinas|UMIDADE_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        <tr></tr>
          </tr>    
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_umidade|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_umidade|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_umidade|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_umidade|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
    
    
		  <tr>
		  <td >Fonte geradora</td>
		  <td><textarea name="laudos_avaliacoes_umidade|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
		  </tr>	
          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_umidade|ENQUADRAMENTO[]" rows="10" ></textarea></td>
          </tr>
        </table>
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_radiacao_nao_ionizante" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div></div><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_radiacao_nao_ionizante|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_radiacao_nao_ionizante|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
    <tr><td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radiacao_nao_ionizante|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_nao_ionizante|CODIGO_SETOR[]" size="0"/></td>              
        
    </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td> 
              <td><select name="laudos_avaliacoes_radiacao_nao_ionizante|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
<td> 
                         
          </tr>
                          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <!--Inicio funções expostas radiacao não ionizante-->
              <td  colspan="5">
                              <table id="tbl_radiacao_nao_ionizante_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_radiacao_nao_ionizante_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_radiacao_nao_ionizante_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                   </div>   
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="49%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="35%">Concentração Medida (C/kg)</td>
                                                    <td width="28%">Concentração Permitida (C/kg)</td>
				</tr>
				</table>
				

                                      </td>
              
                          </tr>
        <!--Fim funções expostas ruído-->


                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_radiacao_nao_ionizante" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|DENSIDADE_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|DENSIDADE_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        
          </tr>      
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_COLETIVA[]">
                      
                                <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
		  <tr>
		  <td  >Fonte geradora</td>
		  <td><textarea name="laudos_avaliacoes_radiacao_nao_ionizante|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
		  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea  name="laudos_avaliacoes_radiacao_nao_ionizante|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>
        
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_radiacao_ionizante" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div><div></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_radiacao_ionizante|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_radiacao_ionizante|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
    <tr>
			  <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radiacao_ionizante|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_ionizante|CODIGO_SETOR[]" size="0"/></td>              
        
    </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td> 
              <td><select name="laudos_avaliacoes_radiacao_ionizante|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
<td> 
                         
          </tr>
                          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_radiacao_ionizante|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_radiacao_ionizante|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <!--Inicio funções expostas radiacao não ionizante-->
              <td  colspan="5">
                              <table id="tbl_radiacao_ionizante_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_radiacao_ionizante_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_radiacao_ionizante_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_radiacao_ionizante_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_radiacao_ionizante_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_radiacao_ionizante_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_radiacao_ionizante_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_radiacao_ionizante_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_radiacao_ionizante_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_radiacao_ionizante_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                   </div>   
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="49%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="35%">Concentração Medida (C/kg)</td>
                                                    <td width="28%">Concentração Permitida (C/kg)</td>
				</tr>
				</table>
				

                                      </td>
              
                          </tr>
        <!--Fim funções expostas ruído-->


                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_radiacao_ionizante" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radiacao_ionizante_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_ionizante_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_radiacao_ionizante_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_radiacao_ionizante_maquinas|DENSIDADE_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_radiacao_ionizante_maquinas|DENSIDADE_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        
          </tr>      
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_radiacao_ionizante|MEDIDAS_PROTECAO_COLETIVA[]">
                      
                                <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_radiacao_ionizante|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_radiacao_ionizante|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_radiacao_ionizante|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
		  <tr>
		  <td  >Fonte geradora</td>
		  <td><textarea name="laudos_avaliacoes_radiacao_ionizante|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
		  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea  name="laudos_avaliacoes_radiacao_ionizante|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_outros_fisicos" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_outros_fisicos|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_outros_fisicos|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
    <tr>
                <td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_fisicos|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_fisicos|CODIGO_SETOR[]"/></td>
        
    </tr>
          <tr>
            <td  >Periodicidade de exposi&ccedil;&atilde;o</td>
            <td> 
            <select name="laudos_avaliacoes_outros_fisicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_outros_fisicos|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_outros_fisicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_outros_fisicos_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_outros_fisicos_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_outros_fisicos_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_outros_fisicos_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_outros_fisicos_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_outros_fisicos_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_outros_fisicos_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_outros_fisicos_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_outros_fisicos_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_outros_fisicos_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_outros_fisicos_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_outros_fisicos_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_outros_fisicos_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_outros_fisicos_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>

			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentração Medida </td>
                                                    <td width="20%">Concentração Permitida </td>
				</tr>
				</table>
                  <div></div>
                                  
                          </td>


          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_outros_fisicos" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_fisicos_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_fisicos_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_outros_fisicos_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_outros_fisicos_maquinas|VALOR_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_outros_fisicos_maquinas|VALOR_REFERENCIA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                       
          </tr>                
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_outros_fisicos|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_outros_fisicos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_outros_fisicos|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_outros_fisicos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>     
		  <tr>
		  <td >Fonte geradora</td>
		  <td><textarea name="laudos_avaliacoes_outros_fisicos|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
		  </tr>	
                  <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_outros_fisicos|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_sangue_humano" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_sangue_humano|TIPO_AVALIACAO[]"/></td>                        
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_sangue_humano|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
            <tr>
            <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_humano|UNIDADE[]"/></td>
            <td><input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_humano|CODIGO_SETOR[]"/> </td>            

        
         </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td>
              <td>
                  <select name="laudos_avaliacoes_sangue_humano|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
              </select></td>
            
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_sangue_humano|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_sangue_humano|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="5">
                              <table id="tbl_sangue_humano_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_sangue_humano_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_sangue_humano_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_sangue_humano_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_sangue_humano_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_sangue_humano_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_sangue_humano_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_sangue_humano_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_sangue_humano_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_sangue_humano_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_sangue_humano_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_sangue_humano_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_sangue_humano_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_sangue_humano_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>

			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentração Medida (C/kg)</td>
                                                    <td width="20%">Concentração Permitida (C/kg)</td>
				</tr>
				</table>
				<div></div> 
				</td>									

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_sangue_humano" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_humano_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_humano_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_sangue_humano_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_sangue_humano_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_sangue_humano_maquinas|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        <tr></tr>
          </tr>  
    
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_sangue_humano|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_sangue_humano|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_sangue_humano|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_sangue_humano|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              

	  <tr>
	  <td >Fonte geradora</td> 
	  <td><textarea name="laudos_avaliacoes_sangue_humano|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_sangue_humano|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_sangue_animal" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_sangue_animal|TIPO_AVALIACAO[]"/></td>                        
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_sangue_animal|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
            <tr>
            <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_animal|UNIDADE[]"/></td>
            <td><input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_animal|CODIGO_SETOR[]"/> </td>            

        
         </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td>
              <td>
                  <select name="laudos_avaliacoes_sangue_animal|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
              </select></td>
            
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_sangue_animal|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_sangue_animal|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="5">
                              <table id="tbl_sangue_animal_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_sangue_animal_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_sangue_animal_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_sangue_animal_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_sangue_animal_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_sangue_animal_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_sangue_animal_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_sangue_animal_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_sangue_animal_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_sangue_animal_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_sangue_animal_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_sangue_animal_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_sangue_animal_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_sangue_animal_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>

			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentração Medida (C/kg)</td>
                                                    <td width="20%">Concentração Permitida (C/kg)</td>
				</tr>
				</table>
				<div></div>
				</td>									

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_sangue_animal" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_animal_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_animal_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_sangue_animal_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_sangue_animal_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_sangue_animal_maquinas|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        
          </tr>  
    
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_sangue_animal|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_sangue_animal|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_sangue_animal|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_sangue_animal|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              

	  <tr>
	  <td >Fonte geradora</td>
	  <td><textarea name="laudos_avaliacoes_sangue_animal|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_sangue_animal|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_manejo_animais" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_manejo_animais|TIPO_AVALIACAO[]"/></td>                        
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_manejo_animais|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
            <tr>
            <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_manejo_animais|UNIDADE[]"/></td>
            <td><input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_manejo_animais|CODIGO_SETOR[]"/> </td>            

        
         </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td>
              <td>
                  <select name="laudos_avaliacoes_manejo_animais|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
              </select></td>
            
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_manejo_animais|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_manejo_animais|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="5">
                              <table id="tbl_manejo_animais_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_manejo_animais_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_manejo_animais_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_manejo_animais_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_manejo_animais_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_manejo_animais_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_manejo_animais_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_manejo_animais_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_manejo_animais_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_manejo_animais_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_manejo_animais_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_manejo_animais_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_manejo_animais_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_manejo_animais_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>

			  <table id="tbl_cabec_maq" width="100%">
                              <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentração Medida (C/kg)</td>
                                                    <td width="20%">Concentração Permitida (C/kg)</td>
				</tr>
				</table>
				<div></div>
				</td>									

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_manejo_animais" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_manejo_animais_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_manejo_animais_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_manejo_animais_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_manejo_animais_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_manejo_animais_maquinas|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                       
          </tr>  
    
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_manejo_animais|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_manejo_animais|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_manejo_animais|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_manejo_animais|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              

	  <tr>
	  <td >Fonte geradora</td>
	  <td><textarea name="laudos_avaliacoes_manejo_animais|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_manejo_animais|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_outros_biologicos" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_outros_biologicos|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_outros_biologicos|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
    <tr>
                <td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_biologicos|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_biologicos|CODIGO_SETOR[]"/></td>
        
    </tr>
          <tr>
            <td  >Periodicidade de exposi&ccedil;&atilde;o</td>
            <td> 
            <select name="laudos_avaliacoes_outros_biologicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_outros_biologicos|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_outros_biologicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_outros_biologicos_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_outros_biologicos_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_outros_biologicos_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_outros_biologicos_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_outros_biologicos_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_outros_biologicos_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_outros_biologicos_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_outros_biologicos_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_outros_biologicos_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_outros_biologicos_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_outros_biologicos_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_outros_biologicos_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_outros_biologicos_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_outros_biologicos_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>

			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentração Medida </td>
                                                    <td width="20%">Concentração Permitida </td>
				</tr>
				</table>
                  <div></div>
                                  
                          </td>


          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_outros_biologicos" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_biologicos_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_biologicos_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_outros_biologicos_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_outros_biologicos_maquinas|VALOR_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_outros_biologicos_maquinas|VALOR_REFERENCIA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                       
          </tr>                
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_outros_biologicos|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_outros_biologicos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_outros_biologicos|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_outros_biologicos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>     
		  <tr>
		  <td >Fonte geradora</td>
		  <td><textarea name="laudos_avaliacoes_outros_biologicos|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
		  </tr>	
                  <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_outros_biologicos|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>

<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_produtos_limpeza" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_produtos_limpeza|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_produtos_limpeza|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
    <tr>
                      <td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_produtos_limpeza|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_produtos_limpeza|CODIGO_SETOR[]"/></td>

    </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td>	
            </td>
              <td>
                          <select name="laudos_avaliacoes_produtos_limpeza|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_produtos_limpeza|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários expostos no setor</td>
            <td width="17%"><input type="text" name="laudos_avaliacoes_produtos_limpeza|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>

          </tr>
          
          <tr>
              <td  colspan="5">
                              <table id="tbl_produtos_limpeza_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_produtos_limpeza_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_produtos_limpeza_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_produtos_limpeza_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_produtos_limpeza_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_produtos_limpeza_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_produtos_limpeza_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_produtos_limpeza_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_produtos_limpeza_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_produtos_limpeza_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_produtos_limpeza_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_produtos_limpeza_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_produtos_limpeza_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_produtos_limpeza_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>
				
              <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentração Medida (C/kg)</td>
                                                    <td width="20%">Concentração Permitida (C/kg)</td>
				</tr>
				</table>
                  <div></div>
				</td>									

                    </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_produtos_limpeza" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_produtos_limpeza_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_produtos_limpeza_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_produtos_limpeza_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_produtos_limpeza_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_produtos_limpeza_maquinas|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        
          </tr>  
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_produtos_limpeza|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_produtos_limpeza|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_produtos_limpeza|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_produtos_limpeza|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
    
        <tr>
	  <td >Fonte geradora</td>
	  <td><textarea name="laudos_avaliacoes_produtos_limpeza|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_produtos_limpeza|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>

<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_tintas_solventes" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_tintas_solventes|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_tintas_solventes|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
              <tr>
              <td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_tintas_solventes|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_tintas_solventes|CODIGO_SETOR[]"/></td>
                  
              </tr>
           <tr> 
           <td >Periodicidade de exposi&ccedil;&atilde;o </td>	
            </td>
              <td>
                          <select name="laudos_avaliacoes_tintas_solventes|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_tintas_solventes|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários expostos no setor</td>
            <td width="17%"><input type="text" name="laudos_avaliacoes_tintas_solventes|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>

          </tr>
          
          <tr>
              <td  colspan="5">
                              <table id="tbl_tintas_solventes_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_tintas_solventes_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_tintas_solventes_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_tintas_solventes_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_tintas_solventes_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_tintas_solventes_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_tintas_solventes_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_tintas_solventes_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_tintas_solventes_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_tintas_solventes_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_tintas_solventes_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_tintas_solventes_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_tintas_solventes_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_tintas_solventes_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>
				
              <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Densidade Medida (C/kg)</td>
                                                    <td width="20%">Densidade Permitida (C/kg)</td>
				</tr>
				</table>
                  <div></div>
				</td>									

                    </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_tintas_solventes" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_tintas_solventes_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_tintas_solventes_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_tintas_solventes_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_tintas_solventes_maquinas|DENSIDADE_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_tintas_solventes_maquinas|DENSIDADE_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        
          </tr>  
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_tintas_solventes|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_tintas_solventes|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_tintas_solventes|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_tintas_solventes|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
    
        <tr>
	  <td >Fonte geradora</td>
	  <td><textarea name="laudos_avaliacoes_tintas_solventes|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_tintas_solventes|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>

<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_hidrocarbonetos_aromaticos" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_hidrocarbonetos|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_hidrocarbonetos|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
    <tr>
              <td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_hidrocarbonetos|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_hidrocarbonetos|CODIGO_SETOR[]"/></td>
        
    </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td>	
            </td>
              <td>
                          <select name="laudos_avaliacoes_hidrocarbonetos|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_hidrocarbonetos|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários expostos no setor</td>
            <td width="17%"><input type="text" name="laudos_avaliacoes_hidrocarbonetos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>

          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_hidrocarbonetos_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_hidrocarbonetos_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_hidrocarbonetos_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_hidrocarbonetos_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_hidrocarbonetos_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_hidrocarbonetos_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_hidrocarbonetos_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_hidrocarbonetos_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_hidrocarbonetos_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_hidrocarbonetos_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_hidrocarbonetos_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_hidrocarbonetos_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_hidrocarbonetos_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_hidrocarbonetos_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>
				
              <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentração Medida (C/kg)</td>
                                                    <td width="20%">Concentração Permitida (C/kg)</td>
				</tr>
				</table>
                  <div></div>
				</td>									

                    </tr>


                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_hidrocarbonetos" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_hidrocarbonetos_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_hidrocarbonetos_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_hidrocarbonetos_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_hidrocarbonetos_maquinas|VALOR_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_hidrocarbonetos_maquinas|VALOR_REFERENCIA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        
          </tr>  
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_hidrocarbonetos|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_hidrocarbonetos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_hidrocarbonetos|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_hidrocarbonetos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
    
        <tr>
	  <td >Fonte geradora</td>
	  <td><textarea name="laudos_avaliacoes_hidrocarbonetos|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_hidrocarbonetos|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_fumos_metalicos" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_fumos_metalicos|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_fumos_metalicos|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
    <tr>
                      <td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_fumos_metalicos|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_fumos_metalicos|CODIGO_SETOR[]"/></td>

    </tr>
          <tr>
              
            <td >Periodicidade de exposi&ccedil;&atilde;o </td>	
            </td>
              <td>
                          <select name="laudos_avaliacoes_fumos_metalicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_fumos_metalicos|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários expostos no setor</td>
            <td width="17%"><input type="text" name="laudos_avaliacoes_fumos_metalicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>

          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_fumos_metalicos_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_fumos_metalicos_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_fumos_metalicos_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_fumos_metalicos_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_fumos_metalicos_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_fumos_metalicos_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_fumos_metalicos_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_fumos_metalicos_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_fumos_metalicos_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_fumos_metalicos_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_fumos_metalicos_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_fumos_metalicos_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_fumos_metalicos_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_fumos_metalicos_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>
				
              <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentração Medida (C/kg)</td>
                                                    <td width="20%">Concentração Permitida (C/kg)</td>
				</tr>
				</table>
                  <div></div>
				</td>									

                    </tr>


                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_fumos_metalicos" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_fumos_metalicos_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_fumos_metalicos_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_fumos_metalicos_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_fumos_metalicos_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_fumos_metalicos_maquinas|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        
          </tr>  
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_fumos_metalicos|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_fumos_metalicos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_fumos_metalicos|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_fumos_metalicos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
    
        <tr>
	  <td >Fonte geradora</td>
	  <td><textarea name="laudos_avaliacoes_fumos_metalicos|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_fumos_metalicos|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
    
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_poeiras_incomodas" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_poeiras_incomodas|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_poeiras_incomodas|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
    <tr>
              <td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_poeiras_incomodas|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_poeiras_incomodas|CODIGO_SETOR[]"/></td>
        
    </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td>	
              <td>
                          <select name="laudos_avaliacoes_poeiras_incomodas|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_poeiras_incomodas|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários expostos no setor</td>
            <td width="17%"><input type="text" name="laudos_avaliacoes_poeiras_incomodas|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>

          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_poeiras_incomodas_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_poeiras_incomodas_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_poeiras_incomodas_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_poeiras_incomodas_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_poeiras_incomodas_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_poeiras_incomodas_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_poeiras_incomodas_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_poeiras_incomodas_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_poeiras_incomodas_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_poeiras_incomodas_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>
				
              <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentração Medida (C/kg)</td>
                                                    <td width="20%">Concentração Permitida (C/kg)</td>
				</tr>
				</table>
                  <div></div>
				</td>									

                    </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_poeiras_incomodas" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_poeiras_incomodas_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_poeiras_incomodas_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_poeiras_incomodas_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_poeiras_incomodas_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_poeiras_incomodas_maquinas|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        
          </tr>  
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_poeiras_incomodas|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_poeiras_incomodas|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_poeiras_incomodas|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_poeiras_incomodas|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
    
        <tr>
	  <td >Fonte geradora</td>
	  <td><textarea name="laudos_avaliacoes_poeiras_incomodas|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_poeiras_incomodas|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_poeiras_minerais" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_poeiras_minerais|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_poeiras_minerais|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
         
              <tr>
              <td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_poeiras_minerais|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_poeiras_minerais|CODIGO_SETOR[]"/></td>
                  
              </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td>	

              <td>
                          <select name="laudos_avaliacoes_poeiras_minerais|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_poeiras_minerais|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários expostos no setor</td>
            <td width="17%"><input type="text" name="laudos_avaliacoes_poeiras_minerais|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>

          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_poeiras_minerais_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_poeiras_minerais_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_poeiras_minerais_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_poeiras_minerais_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_poeiras_minerais_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_poeiras_minerais_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_poeiras_minerais_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_poeiras_minerais_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_poeiras_minerais_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_poeiras_minerais_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_poeiras_minerais_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_poeiras_minerais_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_poeiras_minerais_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_poeiras_minerais_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>
				
              <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentração Medida (C/kg)</td>
                                                    <td width="20%">Concentração Permitida (C/kg)</td>
				</tr>
				</table>
                  <div></div>
				</td>									

                    </tr>


                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_poeiras_minerais" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_poeiras_minerais_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_poeiras_minerais_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_poeiras_minerais_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_poeiras_minerais_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_poeiras_minerais_maquinas|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        
          </tr>  
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_poeiras_minerais|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_poeiras_minerais|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_poeiras_minerais|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_poeiras_minerais|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
    
        <tr>
	  <td >Fonte geradora</td>
	  <td><textarea name="laudos_avaliacoes_poeiras_minerais|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_poeiras_minerais|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_iluminamento" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_iluminamento|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_iluminamento|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
    <tr>
	<td>		  <input type="hidden" name="laudos_avaliacoes_iluminamento|UNIDADE[]"/></td><td>
			  <input type="hidden" name="laudos_avaliacoes_iluminamento|CODIGO_SETOR[]"/></td>
        
    </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td><td>
			
              <select name="laudos_avaliacoes_iluminamento|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td><td></td><td>
          
          </tr><tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_iluminamento|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>              
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_iluminamento|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td></td>
          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_iluminamento_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_iluminamento_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_iluminamento_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_iluminamento_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_iluminamento_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_iluminamento_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_iluminamento_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_iluminamento_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_iluminamento_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_iluminamento_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_iluminamento_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_iluminamento_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_iluminamento_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_iluminamento_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>
				
              <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
              <td  width="50%"  ><div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="35%">LUX(Medido)</td>
                                                    <td width="15%">LUX(NBR)</td>
				</tr>
				</table>
                  <div></div>
				</td>									

                    </tr>


                   
    <tr  ><td colspan="3" id="td_maq_equip" ><div style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_iluminamento_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_iluminamento_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_iluminamento_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_iluminamento_maquinas|LUX_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_iluminamento_maquinas|LUX_NBR[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                        </tr>
    <tr></tr>
    
	  <tr>
	  <td >Fonte geradora</td>
	  <td><textarea name="laudos_avaliacoes_iluminamento|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
	  </tr>
          <tr>
            <td>Enquadramento</td>
           <td colspan="3"><textarea name="laudos_avaliacoes_iluminamento|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
<table width="99%" border="0" class="tabela" id="tabela_modelo_avaliacao_outros_quimicos" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_outros_quimicos|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_outros_quimicos|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
    <tr>
                <td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_quimicos|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_quimicos|CODIGO_SETOR[]"/></td>
        
    </tr>
          <tr>
            <td  >Periodicidade de exposi&ccedil;&atilde;o</td>
            <td> 
            <select name="laudos_avaliacoes_outros_quimicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px">
                  <option value="" selected="selected"></option>   
                  <option value="EVENTUAL">EVENTUAL</option>   
                  <option value="HABITUAL">HABITUAL</option>   
                  <option value="INTERMITENTE">INTERMITENTE</option>   
                  <option value="PERMANENTE">PERMANENTE</option>   
                  
              </select>            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_outros_quimicos|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcionários expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_outros_quimicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_outros_quimicos_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong>Lançamento de Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="400px">Função</td>
                                          <td width="120px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="150px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="100px" ><p align="center">Unid. de medida</p></td>
                                          <td width="250px">T&eacute;cnica Utilizada</td>
                                          <td width="100px">EPC eficaz</td>
                                          <td width="100px">EPI eficaz</td>
                                          <td width="100px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_outros_quimicos_funcoes_detalhes" style="width:100%;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_outros_quimicos_funcoes_detalhes" style="background: appworkspace ">
                                          <tr>
                                              <td >
                                                      <select name="laudos_avaliacoes_outros_quimicos_funcoes|CODIGO_FUNCAO[]" style="width:400px" onfocus="carrega_funcoes(this)" onchange="onchange_funcoes(this)">
                                                      </select>
                                               </td>
                                              <td>
                                                      <select name="laudos_avaliacoes_outros_quimicos_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:120px;text-transform:none">
                                                        <option value="" selected="selected"></option>   
                                                        <option value="EVENTUAL">EVENTUAL</option>   
                                                        <option value="HABITUAL">HABITUAL</option>   
                                                        <option value="INTERMITENTE">INTERMITENTE</option>   
                                                        <option value="PERMANENTE">PERMANENTE</option>   
                                                      </select>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_outros_quimicos_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_outros_quimicos_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="150px">
                                                  <select name="laudos_avaliacoes_outros_quimicos_funcoes|GRAU_INSALUBRIDADE[]" >
                                                      <option value=""></option>
                                                      <option value="MINIMO">M&Iacute;NIMO</option>
                                                      <option value="MÉDIO">M&Eacute;DIO</option>
                                                      <option value="MÁXIMO">M&Aacute;XIMO</option>
                                                  </select>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_outros_quimicos_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_outros_quimicos_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="250px">
                                                  <input name="laudos_avaliacoes_outros_quimicos_funcoes|TECNICA_UTILIZADA[]" size="30" maxsize="40"/>
                                              </td>
                                              <td width="100px">
                                                  <select name="laudos_avaliacoes_outros_quimicos_funcoes|EPC_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>
                                              </td>
                                              <td width='100px'>
                                                  <select name="laudos_avaliacoes_outros_quimicos_funcoes|EPI_EFICAZ[]" >
                                                      <option value=""></option>
                                                      <option value="S">SIM</option>
                                                      <option value="N">N&Atilde;O</option>
                                                  </select>

                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_outros_quimicos_funcoes|CA_EPI[]" size="10"/>
                                              </td>
                                                  </tr>
                                      </table>
                                    <button type="button" onclick="insere_funcao_avaliacao(this)">+Inserir Registro</button>
                                    <button type="button" onclick="remove_funcao_avaliacao(this)">-Remover Registro</button>
                                       
                                   </div>
                                </div>

			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentração Medida </td>
                                                    <td width="20%">Concentração Permitida </td>
				</tr>
				</table>
                  <div></div>
                                  
                          </td>


          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_outros_quimicos" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_quimicos_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_quimicos_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><select name="laudos_avaliacoes_outros_quimicos_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"></select></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_outros_quimicos_maquinas|VALOR_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_outros_quimicos_maquinas|VALOR_REFERENCIA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                                <button type="button" onclick="insere_maquina(this)">+Inserir Registro</button>
                                <button type="button" onclick="remove_maquina(this)">-Remover Registro</button>
                            </div>
                            </div>
                        </td>
                       
          </tr>                
                    <tr><td>
                     Medidas de Proteção Coletivas Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_COLETIVA[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="IT">Isolamento T&eacute;rmico</option>   
                          <option value="OT">Outros</option>   
                                
                            </select>
                        <input type="text" name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Proteção Individuais Adotadas   
                     </td>
                        <td><select name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_INDIVIDUAL[]">
                          <option value="" selected="selected"></option>   
                          <option value="NH">Nenhuma</option>   
                          <option value="PAP">Protetor tipo jaqueta t&eacute;rmica</option>   
                          <option value="PAC">Botas Térmicas</option>   
                          <option value="PPC">Combinado Protetor tipo jaqueta térmica/Botas Térmicas</option>   
                          <option value="OT">Outros</option>  
                            </select></td><td>
                        <input type="text" name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>     
		  <tr>
		  <td >Fonte geradora</td>
		  <td><textarea name="laudos_avaliacoes_outros_quimicos|FONTE_GERADORA[]" cols="120" rows="5"></textarea></td>
		  </tr>	
                  <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_outros_quimicos|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>
<div id="entrada_setores" style="display:none" >
		  <table width="957" id="tbl_setores">
		  <tr>
		  <td>
            <div id="div_setor"  style="overflow:hidden">
              <table width="90%" border="0" class="tabela" >
                <tr>
                  <td colspan="3"><div align="center"><strong>Características dos Setores da Perícia</strong></div></td>
                </tr>
                <tr>
                  <td height="24"><p>Sequencia</p>                  </td>
                  <td colspan="2"><input type="text" name="laudos_setores_periciaSEQUENCIAL[]" maxlength="10" size="10" value="0" disabled="disabled" style="text-align:right"/></td>
                </tr>
                <tr>
                  <td>Unidade de Trabalho </td>
                  <td colspan="2"><select name="laudos_setores_pericia|UNIDADE[]" style="width:350px" onfocus="carrega_unidades(this)">
                  </select></td>
                </tr>
                <tr>
                  <td width="76">Setor</td>
                  <td colspan="2"><select name="laudos_setores_pericia|CODIGO_SETOR[]" id="CODIGO_SETOR" onfocus="carrega_setores(this)" style="width:350px">
                  </select></td>
                </tr>
                <tr>
                  <td>Descri&ccedil;&atilde;o</td>
                  <td colspan="2"><textarea id="Descricao_Setor" name="laudos_setores_pericia|DESCRICAO_SETOR[]" cols="100" rows="5"></textarea></td>
                </tr>
                <tr>
                </tr>
                <tr>
                  <td>P&eacute; Direito </td>
                  <td colspan="2"><input type="text" name="laudos_setores_pericia|PE_DIREITO[]" maxlength="15" size="15" /></td>
                </tr>
                <tr>
                  <td>Piso</td>
                  <td colspan="2"><select name="laudos_setores_pericia|PISO[]" style="width:350px">
                    <option value=" " selected="selected"> </option>
                    <option value="ASSOALHO MADEIRA">ASSOALHO DE MADEIRA</option>
                    <option value="CIMENTADO LISO">CIMENTADO LISO</option>
                    <option value="CIMENTADO RÚSTICO">CIMENTADO RÚSTICO</option>
                    <option value="CONCRETO">CONTRA-PISO</option>
                    <option value="CERÂMICO">CERÂMICO</option>
                    <option value="CHÃO BATIDO">CHÃO BATIDO</option>
                  </select></td>
                </tr>
                <tr>
                  <td>Parede</td>
                  <td colspan="2"><select name="laudos_setores_pericia|PAREDE[]" style="width:350px">
                    <option value=" " selected="selected"> </option>
                    <option value="ALVENARIA REVESTIDA E DIVISÓRIAS">ALVENARIA REVESTIDA E DIVISÓRIAS</option>
                    <option value="ALVENARIA REVESTIDA">ALVERNARIA REVESTIDA</option>
                    <option value="ALVENARIA NÃO REVESTIDA">ALVENARIA NÃO REVESTIDA</option>
                    <option value="AÇO">AÇO</option>
                    <option value="CERÂMICA">CERÂMICA</option>
                    <option value="CONCRETO">CONCRETO</option>
                    <option value="MADEIRA">MADEIRA</option>
                    <option value="REFRATÁRIA">REFRATÁRIA</option>
                  </select></td>
                </tr>
                <tr>
                  <td>Cobertura</td>
                  <td colspan="2"><select name="laudos_setores_pericia|COBERTURA[]" style="width:350px">
                    <option value=" " selected="selected"> </option>
                    <option value="LAJES">LAJES</option>
                    <option value="LONAS">LONAS</option>
                    <option value="TELHAS DE AMIANTO">TELHAS DE AMIANTO</option>
                    <option value="TELHAS DE BARRO">TELHAS DE BARRO</option>
                    <option value="TELHAS DE ZINCO">TELHAS DE ZINCO</option>
                    <option value="TELHAS DE ALUMÍNIO">TELHAS DE ALUMÍNIO</option>
                  </select></td>
                </tr>
                <tr>
                  <td>Ilumina&ccedil;&atilde;o e Ventila&ccedil;&atilde;o Natural </td>
                  <td colspan="2"><select name="laudos_setores_pericia|ILUMINACAO_NATURAL[]" style="width:350px">
                    <option value=" " selected="selected"> </option>
                    <option value="ATRAVÉS DE PORTAS E VITRAUX">ATRAVÉS DE PORTAS E VITRAUX</option>
                    <option value="ATRAVÉS DE ABERTURA SUPERIOR">ATRAVÉS DE ABERTURA SUPERIOR</option>
                    <option value="ATRAVÉS DE ABERTURA LATERAL">ATRAVÉS DE ABERTURA LATERAL</option>
                    <option value="ATRAVÉS DE TELHAS TRANSPARENTES">ATRAVES DE TELHAS TRANSPARENTES</option>
                  </select></td>
                </tr>
                <tr>
                  <td>Ilumina&ccedil;&atilde;o e Ventila&ccedil;&atilde;o Artificial </td>
                  <td colspan="2"><select name="laudos_setores_pericia|ILUMINACAO_ARTIFICIAL[]" style="width:350px">
                    <option value=" " selected="selected"> </option>
                    <option value="ATRAVÉS DE LÂMPADAS FLUORESCENTES">ATRAVÉS DE LÂMPADAS FLUORESCENTES</option>
                    <option value="ATRAVÉS DE LÂMPADAS INCANDESCENTES">ATRAVÉS DE LÂMPADAS INCANDESCENTES</option>
                    <option value="ATRAVÉS DE LÂMPADAS DE MERCÚRIO">ATRAVÉS DE LÂMPADAS DE MERCÚRIO</option>
                  </select><input type="hidden" name="laudos_setores_pericia|NOME_SETOR[]" size="0"/></td>
                </tr>
                <tr>
                  <td>Arranjo Físico</td>
                  <td><textarea readonly="readonly" name="laudos_setores_pericia|ARRANJO_FISICO[]" rows="5"></textarea> </td>
                </tr>
                <tr>
                  <td colspan="2" ><div align="center"><strong>Fotos</strong> </div></td>
                
                </tr>
            	<tr>
                    <table id="tbl_foto">
                        <tr>	
        		<td>
                            <div id="div_foto">
                                <table>
                                    <tr>
                                        <td><p>Foto</p></td>
                                        <td><p><img src="" width="668" height="288"  id="FOTO" style="background-color: #99CCCC" /></p></td>
                                        <td colspan="3">
                                                <p><button type="button" onclick="baixar_foto(this)">+ Baixar Foto</button></p> 
                                                <p><button type="button" onclick="carregar_foto(this)">+ Carregar Foto</button></p>
                                                <p><button type="button" onclick="limpar_foto(this)"> Limpar Foto</button></p>
                                                <p><button type="button" onclick="remove_foto(this)">- Remover Foto</button></p>
                                                <p></p>
                                                <p></p>
                                                <p><button type="button" onclick="insere_foto(this)">+ Incluir Nova Guia de Foto</button></p>
                                                <p><button type="button" onclick="remove_foto(this)">+ Excluir Guia de Foto</button></p>
                                                <p>&nbsp;</p>
                                                <p>Nome do Arquivo da Foto REMOTO </p>
                                                <p>
                                                    <input type="text" class="txt_foto" name="laudos_setores_fotos|CAMINHO_FOTO[]" id="nome_foto" size="75" readonly="readonly" onchange="mostra_foto(this)"/>
                                                    <input type="hidden" name="laudos_setores_fotos|UNIDADE[]" id="unidade" size="75" readonly="readonly" />
                                                    <input type="hidden" name="laudos_setores_fotos|CODIGO_SETOR[]" id="codigo_setor" size="75" readonly="readonly" />
                                                    <input type="hidden" name="laudos_setores_fotos|SEQUENCIA[]" id="codigo_setor" size="75" readonly="readonly" />

                                                </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>		  
                        </td> 	
			    </tr>

				</table>
              <button type="button" onclick="insere(this)">+ Incluir Setor</button>
              <button type="button" onclick="remove(this)">- Remover Setor</button>
				                 
				</tr>
              </table>
            </div>
			</td>
			</tr>
			</table>
          </div>
                 <div id="entrada_atividades" style="display:none">
                         <table id="tbl_atividades"> 
                             <tr><td>
			 <div id="atividade">
			
			   <table width="90%" border="0" class="tabela" >
                 <tr>
                   <td colspan="6"><div align="center"><strong>Descrição das Atividades</strong></div></td>
                 </tr>
                 <tr>
                   <td colspan="6"><div align="center">&Aacute;rea
                     <select name="laudos_atividades|CLASSIFICACAO_ATIVIDADE[]" style="width:250px">
                             <option value="A">Administrativa</option>
                             <option value="O">Operacional</option>
                     </select>
                   </div></td>
                 </tr>
                 <tr>
                   <td width="172">C&oacute;digo Sequencial </td>
                   <td width="923"><input type="text" name="laudos_atividades|SEQUENCIAL[]" size="7" radonly="readonly"  value=""/></td>
                   <td width="113">&nbsp;</td>
                   <td width="1" colspan="3">&nbsp;</td>
                 </tr>
                 <tr>
                   <td height="29">Atividade </td>
                   <td colspan="5"><select name="laudos_atividades|CODIGO_ATIVIDADE[]" style="width:350px">
                     </select>                   </td>
                 </tr>
                 <tr>
                   <td colspan="6">Detalhamento da Atividade </td>
                 </tr>
                 <tr>
                   <td colspan="2"><p>
                     <textarea name="laudos_atividades|DETALHES_ATIVIDADE[]" cols="180" rows="10" readonly="readonly"></textarea>
                     <input type="hidden" name="laudos_atividades|DESCRICAO_RESUMIDA[]" readonly="readonly" size="0" />
                   </p></td>
                 </tr>
		<tr>
                    <td colspan="3">
                  <div id="funcoes_associadas">
			   <table id="tbl_funcs_assoc" width="90%" border="0" class="tabela" >
			   <tr>
			   <td width="56%" align="center">Funções associadas a essa atividade</td>
			   </tr>
			   <tr><td><input type="text" name="laudos_atividades_funcoes|CODIGO_FUNCAO[]" readonly="readonly" style="width:50px" value=""/>
                            &nbsp<input type="text" name="laudos_atividades_funcoes|DESCRICAO_FUNCAO[]" readonly="readonly" style="width:400px;background:transparent"  value=""/>
                            <input type="hidden" name="laudos_atividades_funcoes|CODIGO_ATIVIDADE[]" readonly="readonly" />
                            </td>
                           </tr>
                               
		       </table>
                  </div>
                    </td>
                               </tr>        
                               <tr>
                                   
                               </tr>
                    </table>  
                     <div id="div_epis" style="width:99%">
                     <div id="div_epis_necessarios" style="width:45%;float:left;overflow:auto;position:relative;top:0px;left:0px">              
                     <table id="tbl_epis_necessarios" width="99%">
                     <tr id="epi_neces">
                         <td>
                         <table id="epis_necess">    
                         <tr> 
                             <td width="76%" colspan="" >EPIs necess&aacute;rios para realiza&ccedil;&atilde;o da atividade com seguran&ccedil;a </td>
                            <td width="24%" ><button type="button" value="" onclick="insere_epis(this)">+ Incluir EPIs</button></td>
                        </tr>
                        <tr>
                            <td height="24"><select name="laudos_epis_necessarios|CODIGO_EPI_BASE[]" style="width:400px" onfocus="carrega_epis_base(this)" onchange="onselect_carrega_epis_necess(this)">
                            </select>                   </td>
                            <td><button type="button" value="" onclick="remove_epis(this)" >- Remover EPI</button></td>

                            <td> </td><td>
			  <input type="hidden" id="CODIGO_ATIVIDADE" name="laudos_epis_necessarios|CODIGO_ATIVIDADE[]" size="0"/>
                             </td>                            

                        </tr>
                        </table>
                         </td>
                     </tr>    
                     </table> 
                     </div>    
                     <div id="div_epis_fornecidos" style="width:47%;float:left;overflow:auto;position:relative;top:0px;left:0px">              
                     <table id="tbl_epis_fornecidos"width="100%" >
                      <tr id="epi_forn">
		          <td>
                          <table id="epis_fornc">
                          <tr>    
                            <td colspan="2">EPIs fornecidos pela empresa para o exerc&iacute;cio da atividade </td>
                            <td width="138"> <td width="138"><button type="button" value="" onclick="window.open('http://localhost/ELC2012/HTML/epis.php', 'pagina' ,' STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=1050, HEIGHT=500');" >+ Cadastrar EPIs</button></td>
                          </tr>
                          <tr>
                            <td width="407">EPI</td>
                            <td width="68">C.A.</td>
			    <td><button type="button" value="" onclick="insere_epis(this)">+ Incluir EPIs</button></td>	
                          </tr>
                          <tr>
                            <td><select name="laudos_epis_fornecidos|CODIGO_EPI[]" style="width:400px" onfocus="carrega_epis(this)" onchange="onselect_carrega_epis(this)">
                            </select></td>
                            <td><input type="text" name="laudos_epis_fornecidos|CA_EPI[]" size="10" readonly="readonly" /></td>
                            <td><button type="button" value="" onclick="remove_epis(this)" >+ Remover EPI</button></td>
                            <td><input type="hidden" id="CODIGO_ATIVIDADE" name="laudos_epis_fornecidos|CODIGO_ATIVIDADE[]" size="5"/>                             </td>                                                            
                        </tr>
                          </table>
                          </td>    
                      </tr>
                     </table>
                                </div>
                         </div>

                         </div>        </td></tr>
                             <tr>
                                 <td>
			   <button type="button" onclick="insere(this)">+ Incluir Atividade </button>		                     
                            <button type="button" onclick="remove(this)">- Remover Atividade </button>		
                                 </td>
                             </tr>
                         </table>

                    

             </div>
    			 <div id="entrada_avaliacoes" style="display:none" >

			 <div id="divAvaliacao" style="overflow:auto">

		<table width="99%" border="0" class="tabela" >
                    <tr>
                        <td colspan="2"><div align="center"><strong>Avaliações Técnicas Executadas</strong></div></td>
                    </tr>
		<tr>
		  <td>Código Sequencial</td>
		  <td width="1013" colspan="3"><input type="text" name="laudos_avaliacoes|SEQUENCIAL[]" readonly="readonly"  size="7" value="01"/></td>
		  </tr>
		
					
		<tr>
		  <td>Unidade de Trabalho </td>
		  <td width="1013" colspan="3"><select name="laudos_avaliacoes|UNIDADE[]" style="width:250px" onfocus="carrega_unidades(this)">
          </select></td>
		  </tr>
		<tr>
		  <td width="194">Setor</td>
		  <td colspan="3"><select name="laudos_avaliacoes|CODIGO_SETOR[]" style="width:250px" onfocus="carrega_setores(this)">
          </select></td>
		</tr>
                    <tr>
                        <td width="194"><strong><h2>Agentes Nocivos</h2></strong> </td>
                        <td ><div align="center"><strong><h2>Fatores de Risco</h2></strong> </div></td>
                    </tr>
                    <tr>
                        <td>F&iacute;sicos</td>
                        <td><input type="checkbox" name="laudos_avaliacoes|RUIDO[]" id="RUIDO" value="1" onclick="registrar_fator(this)" />
			  <input type="hidden" name="laudos_avaliacoes|RUIDO[]" value="0"  onclick="registrar_fator(this)" />
                            Ruído
                            <input type="checkbox" name="laudos_avaliacoes|RUIDO_DOSIMETRIA[]" id="RUIDO_DOSIMETRIA" value="1" onclick="registrar_fator(this)" />
			  <input type="hidden" name="laudos_avaliacoes|RUIDO_DOSIMETRIA[]" value="0" onclick="registrar_fator(this)" />
                            Ruído Dosimetria                           
                            <input type="checkbox" name="laudos_avaliacoes|FRIO[]" id="FRIO" value="1"  onclick="registrar_fator(this)" /> 
			  <input type="hidden" name="laudos_avaliacoes|FRIO[]" value="0"  onclick="registrar_fator(this)"/> 
                            Frio
                            <input type="checkbox" name="laudos_avaliacoes|CALOR[]" id="CALOR" value="1"  onclick="registrar_fator(this)" />
			  <input type="hidden" name="laudos_avaliacoes|CALOR[]" value="0"  onclick="registrar_fator(this)"/> 
                            Calor 
                            <input type="checkbox" name="laudos_avaliacoes|UMIDADE[]" id="UMIDADE" value="1"  onclick="registrar_fator(this)" />
			  <input type="hidden" name="laudos_avaliacoes|UMIDADE[]" value="0" onclick="registrar_fator(this)" /> 
                            Umidade 
                            <input type="checkbox" name="laudos_avaliacoes|RADIACAO_NAO_IONIZANTE[]" id="RADIACAO_NAO_IONIZANTE" value="1"  onclick="registrar_fator(this)" />
			  <input type="hidden"  name="laudos_avaliacoes|RADIACAO_NAO_IONIZANTE[]" value="0" onclick="registrar_fator(this)"/> 							
                            Radia&ccedil;&atilde;o n&atilde;o ionizante 
                            <input type="checkbox" name="laudos_avaliacoes|RADIACAO_IONIZANTE[]"  id="RADIACAO_IONIZANTE" value="1"  onclick="registrar_fator(this)" />
			  <input type="hidden"  name="laudos_avaliacoes|RADIACAO_IONIZANTE[]" value="0" onclick="registrar_fator(this)"/>							
                            Radia&ccedil;&atilde;o Ionizante 
                            <input type="checkbox" name="laudos_avaliacoes|OUTROS_FISICOS[]" value="1" id="OUTROS_FISICOS"  onclick="registrar_fator(this)" />
			  <input type="hidden" name="laudos_avaliacoes|OUTROS_FISICOS[]" value="0" onclick="registrar_fator(this)" />							
                            Outros  
                            <input name="laudos_avaliacoes|OUTROS_FISICOS_DESCRICAO[]" id="OUTROS_FISICOS_DESCRICAO" type="text" size="15" maxlength="30" /></td>
                   </tr>
                   <tr>
                        <td>Biol&oacute;gicos</td>
                        <td><input type="checkbox" name="laudos_avaliacoes|SANGUE_HUMANO[]" id="SANGUE_HUMANO" value="1"  onclick="registrar_fator(this)"/>
			  <input type="hidden"  name="laudos_avaliacoes|SANGUE_HUMANO[]" value="0" onclick="registrar_fator(this)"/> 
                            Sangue, Flu&iacute;dos e corp&oacute;reos humanos 
                            <input type="checkbox" name="laudos_avaliacoes|SANGUE_ANIMAL[]" id="SANGUE_ANIMAL" value="1"  onclick="registrar_fator(this)" />
			  <input type="hidden" name="laudos_avaliacoes|SANGUE_ANIMAL[]" value="0"  onclick="registrar_fator(this)" /> 							
                            Sangue, Flu&iacute;dos e corp&oacute;reos animais 
                            <input type="checkbox" name="laudos_avaliacoes|MANEJO_ANIMAIS[]" id="MANEJO_ANIMAIS" value="1"  onclick="registrar_fator(this)" /> 
			  <input type="hidden" name="laudos_avaliacoes|MANEJO_ANIMAIS[]" value="0"  onclick="registrar_fator(this)" /> 							
                            Manejo de animais 
                            <input type="checkbox" name="laudos_avaliacoes|OUTROS_BIOLOGICOS[]" id="OUTROS_BIOLOGICOS" value="1"  onclick="registrar_fator(this)"/>
			  <input type="hidden" name="laudos_avaliacoes|OUTROS_BIOLOGICOS[]" value="0"  onclick="registrar_fator(this)"/> 							
                            Outros
                            <input name="laudos_avaliacoes|OUTROS_BIOLOGICOS_DESCRICAO[]" id="OUTROS_BIOLOGICOS_DESCRICAO" type="text" size="15" maxlength="30" /></td>
                   </tr>
                   <tr>
                        <td>Qu&iacute;micos</td>
                        <td>
                            <input type="checkbox" name="laudos_avaliacoes|PRODUTOS_LIMPEZA[]" id="PRODUTOS_LIMPEZA" value="1"  onclick="registrar_fator(this)" />
			  <input type="hidden"  name="laudos_avaliacoes|PRODUTOS_LIMPEZA[]" value="0" onclick="registrar_fator(this)" /> 
                                Produtos de Limpeza 
                            <input type="checkbox" name="laudos_avaliacoes|TINTAS_SOLVENTES[]" value="1" id="TINTAS_SOLVENTES" onclick="registrar_fator(this)"/>
			  <input type="hidden" name="laudos_avaliacoes|TINTAS_SOLVENTES[]" value="0" onclick="registrar_fator(this)"/>							
                                Tintas e Solventes 
                            <input type="checkbox" name="laudos_avaliacoes|HIDROCARBONETOS_AROMATICOS[]" id="HIDROCARBONETOS_AROMATICOS" value="1"  onclick="registrar_fator(this)" />
			  <input type="hidden"  name="laudos_avaliacoes|HIDROCARBONETOS_AROMATICOS[]" value="0" onclick="registrar_fator(this)" />
                                Hidrocarbonetos 
                                Arom&aacute;ticos
                            <input type="checkbox" name="laudos_avaliacoes|FUMOS_METALICOS[]" value="1" id="FUMOS_METALICOS" onclick="registrar_fator(this)" /> 
			  <input type="hidden" name="laudos_avaliacoes|FUMOS_METALICOS[]" value="0"   onclick="registrar_fator(this)" /> 
                                Fumos Met&aacute;licos
                            <input type="checkbox" name="laudos_avaliacoes|POEIRAS_INCOMODAS[]" value="1" ID="POEIRAS_INCOMODAS"  onclick="registrar_fator(this)" /> 
			  <input type="hidden" name="laudos_avaliacoes|POEIRAS_INCOMODAS[]" value="0"  onclick="registrar_fator(this)" /> 
                                Poeiras Inc&ocirc;modas
                            <input type="checkbox" name="laudos_avaliacoes|POEIRAS_MINERAIS[]" value="1" id="POEIRAS_MINERAIS"  onclick="registrar_fator(this)"/>
			  <input type="hidden"  name="laudos_avaliacoes|POEIRAS_MINERAIS[]" value="0"   onclick="registrar_fator(this)"/>
                                Poeiras Minerais
                            <input type="checkbox" name="laudos_avaliacoes|OUTROS_QUIMICOS[]" value="1" id="OUTROS_QUIMICOS"  onclick="registrar_fator(this)"/>
			  <input type="hidden" name="laudos_avaliacoes|OUTROS_QUIMICOS[]" value="0"   onclick="registrar_fator(this)"/>
                                Outros
                            <input name="laudos_avaliacoes|OUTROS_QUIMICOS_DESCRICAO[]" id="OUTROS_QUIMICOS_DESCRICAO" type="text" size="15" maxlength="30" />
                        </td>
                  </tr>
                  <tr>
                    <td>Ergon&ocirc;mico</td>
                    <td><input type="checkbox" name="laudos_avaliacoes|ILUMINAMENTO[]" ID="ILUMINAMENTO" value="1" onclick="registrar_fator(this)"/> 
			  <input type="hidden" name="laudos_avaliacoes|ILUMINAMENTO[]"  value="0"  /> 
                        Iluminamento                    </td>
                  </tr>
                    <tr>
                        <td colspan="3"><input type="hidden"  size="0" /></td>
                    </tr>
		</table>
                         
    </div>
		<button type="button" onclick="insere(this)">+ Incluir Nova Unidade para Avaliação</button>		
		<button type="button" onclick="remove(this)">- Remover Avaliação</button>		
                         </div>
<div id="entrada_maquinas" style="display:none">
                <table width="89%" border="0" class="tabela" id="tbl_maquinas" >            
		  <tr>
		  <td>
                        <div id="div_maquina"  style="overflow:hidden">
                            <table width="90%" border="0" class="tabela" >
                            <tr>
                            <td colspan="12"><div align="center"><strong>M&aacute;quinas e Equipamentos</strong></div></td>
                            </tr>
                            <tr>
                            <td>Sequencia</td>
                            <td colspan="5"><input type="text" name="laudos_setores_maquinas|SEQUENCIAL[]" maxlength="4" size="4" value="01" disabled="disabled" style="text-align:right"/></td>
                            <td colspan="6">&nbsp;</td>
                            </tr>
                            <tr>
                            <td>Unidade de Trabalho </td>
                            <td colspan="5"><select name="laudos_setores_maquinas|UNIDADE[]" style="width:250px" onfocus="carrega_unidades(this)">
                            </select></td>
                            <td colspan="6">&nbsp;</td>
                             </tr>
                            <tr>
                            <td width="165">Setor</td>
                            <td colspan="5"><select name="laudos_setores_maquinas|CODIGO_SETOR[]" style="width:250px" onfocus="carrega_setores(this)">
                            </select>  </td>
                            </tr>
                            <tr>
                            <td>C&oacute;digo da M&aacute;quina </td>
                            <td colspan="5"><select name="laudos_setores_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:250px">
                            </select></td>
                            <td colspan="6">&nbsp;</td>
                            <td colspan="5"><input type="hidden" name="laudos_setores_maquinas|NOME_SETOR[]" maxlength="4" size="0" value="01"  style="text-align:right"/><input type="hidden" name="laudos_setores_maquinas|NOME_MAQUINA[]" maxlength="4" size="0" value="01" style="text-align:right"/></td>
                            </tr>
                            <tr>
                            </tr>

                        </table>
                        </div>         
                <button type="button" onclick="insere(this)">+ Incluir M&aacute;quina </button>		
		<button type="button" onclick="remove(this)">- Remover M&aacute;quina </button>		
                      
                  </td>
                  </tr>
                  </table>

             </div>
        </div>
         			  
</body>
</html>
