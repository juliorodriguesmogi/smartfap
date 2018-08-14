<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Impress&atilde;o de Laudos</title>
<style type="text/css">
  

body{
font-family:Arial, Helvetica, sans-serif;
width:23cm;
margin-left:20%;
}
@media  print

 {
 body{width:21.0cm;height:29.7cm;margin-left:0%;counter-reset:dados_empresa_contador}
 table#tbl_dados_empresa{
     counter-increment:dados_empresa_contador;
 }
 table#tbl_classificacao_exposicao{
     counter-reset:classificacao_exposicao_contador;
     counter-increment:classificacao_exposicao_contador inhireted counter(dados_empresa_contador);

 }
H1#IDados_Empresa:after{
     content:"                        "     "Página...:" counter(dados_empresa_contador);
 }
H1#IClassificacao_Exposicao:after{
     content:"                        "     "Página...:" counter(classificacao_exposicao_contador);
 } 
 .classificacao_exposicao{page-break-before:always}
 #div_setores_pericia{page-break-before:always}
  #div_informacoes_complementares{page-break-before:always}
  #div_conclusao{page-break-before:always}
  #indice_analitico{page-break-before: always}
  .maquinas{page-break-before:always}
 .atividades 	{page-break-before:always}
 .descricao_cnae {page-break-after:always;page-break-before:always}
  #avaliacoes_tipo {page-break-before:always;page-break-after:always}
  #avaliacao {page-break-before:always}
  .quebra_unidade_setor {page-break-before:always;font-weight:bold;font-size: larger;text-align:center;width:1009px}  
  .fotos {page-break-after:always}
  
  .titulo_quebra_avaliacao{page-break-after:always}


  
  input {border:none;border-width:0px;background:none}
  textarea {border:none;border-width:0px;background:none}
  select {border:none;}
  button{display:none;}
  ul.toc a::after {
 content: '';
}  
 }


 @media screen

 {
 .setores {page-break-before:always}
 .atividades {page-break-before:always}
 .descricao_cnae {page-break-after:always;page-break-before:always}
 .avaliacoes_tipo {page-break-after:always}

  select {border:none;border-width:0px;display:block;}
input {border:none;border-width:0px;background:transparent}
  textarea {border:none;border-width:0px;background:transparent}

  
 
 }

 .quebra_unidade_setor {font-weight:bold;font-size: larger;text-align:center;width:1009px}    
.style3 {font-size: 24px}
.titulo_grupo_centralizado {
text-align:center;
font-weight:bold; 
font-size:16px; 
font-size: 24px;
background-color:#CCCCCC;	
}
.titulo_grupo_esquerda {
text-align:right;
font-weight:bold; 
border-right:none;
border-right-color: trasparent;
font-size:16px; 
font-size: 24px;
background-color:#CCCCCC;	
border-right:none;
}
.titulo_grupo_direita {
text-align:left;
font-weight:bold; 
border-left:none;
border-left-color: trasparent;
font-size:16px; 
font-size: 24px;
background-color:#CCCCCC;	
border-right:none;
}
@page {
    size: A4 portrait;
    @top-left{
        content:"LTCAT";
    }
}


</style>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/maquina.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_Avaliacoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_Setores_Pericia.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_Setores_Fotos.js"></script>     
<script type="text/javascript" src="../classes/js/MLaudos_Atividades.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_Atividade_Funcao.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_Epis_Necessarios.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_Epis_Fornecidos.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_Avaliacoes_Sumarizadas.js"></script>    
<script type="text/javascript" src="../classes/js/MLaudos_Avaliacoes_Ruido.js"></script>   
<script type="text/javascript" src="../classes/js/MLaudos_Avaliacoes_Ruido_Funcoes.js"></script>   
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_ruido_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_Avaliacoes_Ruido_Dosimetria.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_calor.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_calor_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_calor_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_iluminamento.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_iluminamento_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_frio.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_frio_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_frio_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_umidade.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_umidade_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_umidade_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_nao_ionizante.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_nao_ionizante_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_nao_ionizante_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_ionizante.js"></script>       
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_ionizante_maquinas.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_ionizante_funcoes.js"></script>
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_fisicos.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_fisicos_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_fisicos_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_humano.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_humano_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_humano_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_animal.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_animal_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_animal_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_manejo_animais.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_manejo_animais_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_manejo_animais_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_biologicos.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_biologicos_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_biologicos_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_produtos_limpeza.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_produtos_limpeza_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_produtos_limpeza_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_tintas_solventes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_tintas_solventes_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_tintas_solventes_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_hidrocarbonetos.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_hidrocarbonetos_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_hidrocarbonetos_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_fumos_metalicos.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_fumos_metalicos_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_fumos_metalicos_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_incomodas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_incomodas_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_incomodas_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_minerais.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_minerais_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_minerais_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_defensivos_agricolas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_defensivos_agricolas_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_defensivos_agricolas_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_quimicos.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_quimicos_funcoes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_quimicos_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/Estruturas.js"></script>        
<script type="text/javascript" src="../classes/js/CNAE.js"></script>
<script type="text/javascript" src="../classes/js/CNAES.js"></script>
<script type="text/javascript" src="../classes/js/Funcoes.js"></script>
<script type="text/javascript" src="../classes/js/Funcao.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" charset="utf-8" >

      function report_onload(){
        altura=1200;
        numpag_ini=Array();
        numpag_fim=Array();
        numpag_ini[0]=1;
        numpag_fim[0]=1;
        empresa_ativa=getUrlvars('CODIGO_EMPRESA');
        ano_pericia=getUrlvars('ANO_PERICIA');
        numero_laudo=getUrlvars('NUMERO_LAUDO');
        revisao=getUrlvars('REVISAO');
        campos_laudo=["CODIGO_EMPRESA","ANO_PERICIA","NUMERO_LAUDO","REVISAO"];
        valores_laudo=[empresa_ativa,ano_pericia,numero_laudo,revisao];
        buscar_registro(window,campos_laudo,valores_laudo,Array('=','=','=','='),'laudos','laudos','Busca_Laudo',true,newlaudo);                    
        qtdreglaudo=0;
            imprime_laudo();
            imprime_laudos_informantes();
            imprime_laudos_cnae();            
            numpag_ini[1]=1;
            numpag_fim[1]=1;
            numpag_ini[2]=1;
            numpag_fim[2]=1;
            numpag_ini[3]=1;
            numpag_fim[3]=1;
            numpag_ini[4]=2;
            numpag_fim[4]=2;
            numpag_ini[5]=3;
            imprime_laudos_setores_pericia();
            
            imprime_laudos_atividades();
            numpag_ini[6]=numpag_fim[5]+1;
            div_atividades_laudo=document.getElementById('div_atividades_laudo');
            numpag_fim[6]=numpag_ini[6]+parseInt(div_atividades_laudo.clientHeight/altura,10);
            numpag_ini[7]=numpag_fim[6]+1;
            numpag_fim[7]=numpag_ini[7];
            imprime_laudos_atividades_funcoes();
            imprime_laudos_atividades_epis();
            numpag_ini[8]=numpag_fim[7]+1;
            imprime_laudos_avaliacoes();
            div_avaliacoes=document.getElementById('avaliacao');
            numpag_fim[8]=numpag_ini[8]+parseInt(div_avaliacoes.clientHeight/altura,10)+4;
            numpag_ini[9]=numpag_fim[8]+1;
            numpag_fim[9]=numpag_ini[9];
            numpag_ini[9]=numpag_fim[8]+1;
            numpag_fim[9]=numpag_ini[9];
            numpag_ini[10]=numpag_fim[9];
            numpag_fim[10]=numpag_ini[10];            
            numpag_ini[11]=numpag_fim[10];
            numpag_fim[11]=numpag_ini[11];            
            numpag_ini[12]=numpag_fim[11]+1;
            numpag_fim[12]=numpag_ini[12];            
            
            
            qtdreglaudo++;
            indice_analitico=document.getElementById('indice_analitico');
            indice_analitico.setAttribute('style','display:block');
            dados_empresa=indice_analitico.getElementsByTagName('a')[0];
            dados_empresa.innerHTML=dados_empresa.innerHTML+numpag_ini[1];
            dados_informante=indice_analitico.getElementsByTagName('a')[1];
            dados_informante.innerHTML=dados_informante.innerHTML+numpag_ini[2];
            informacoes_periciais=indice_analitico.getElementsByTagName('a')[2];
            informacoes_periciais.innerHTML=informacoes_periciais.innerHTML+numpag_ini[3];
            classificacao_exposicao=indice_analitico.getElementsByTagName('a')[3];
            classificacao_exposicao.innerHTML=classificacao_exposicao.innerHTML+numpag_ini[4];
            setores_pericia=indice_analitico.getElementsByTagName('a')[4];
            setores_pericia.innerHTML=setores_pericia.innerHTML+numpag_ini[5];
            atividades=indice_analitico.getElementsByTagName('a')[5];
            atividades.innerHTML=atividades.innerHTML+numpag_ini[6];
            processos_trabalho=indice_analitico.getElementsByTagName('a')[6];
            processos_trabalho.innerHTML=processos_trabalho.innerHTML+numpag_ini[7];
            avaliacoes_tecnicas=indice_analitico.getElementsByTagName('a')[7];
            avaliacoes_tecnicas.innerHTML=avaliacoes_tecnicas.innerHTML+numpag_ini[8];
            informacoes_complementares=indice_analitico.getElementsByTagName('a')[8];
            informacoes_complementares.innerHTML=informacoes_complementares.innerHTML+numpag_ini[9];
            responsabilidade_tecnica=indice_analitico.getElementsByTagName('a')[9];
            responsabilidade_tecnica.innerHTML=responsabilidade_tecnica.innerHTML+numpag_ini[10];
            consideracoes_legais=indice_analitico.getElementsByTagName('a')[10];
            consideracoes_legais.innerHTML=consideracoes_legais.innerHTML+numpag_ini[11];
            conclusao=indice_analitico.getElementsByTagName('a')[11];
            conclusao.innerHTML=conclusao.innerHTML+numpag_ini[12];
            

      }   
      
      function imprime_laudo(){
          tabela_dados_empresa=document.getElementById('tbl_dados_empresa');
          tabela_dados_empresa.rows[0].cells[2].children[0].innerHTML+=newlaudo.get_Ano_Pericia();
          tabela_dados_empresa.rows[1].cells[1].children[0].innerHTML+=newlaudo.get_Numero_Laudo();
          tabela_dados_empresa.rows[2].cells[1].children[0].innerHTML+=newlaudo.get_Revisao();
          tabela_dados_empresa.rows[3].cells[1].children[0].innerHTML+=newlaudo.get_Data_Laudo();
          tabela_dados_empresa.rows[5].cells[1].children[0].innerHTML=newlaudo.get_CNPJ_CEI();
          tabela_dados_empresa.rows[6].cells[1].children[0].innerHTML=newlaudo.get_Nome_Empresa();
          tabela_dados_empresa.rows[7].cells[1].children[0].innerHTML=newlaudo.get_CNAE();
          tabela_dados_empresa.rows[8].cells[1].children[0].innerHTML=newlaudo.get_Grau_Risco();
          tabela_dados_empresa.rows[9].cells[1].children[0].innerHTML=newlaudo.get_Endereco();
          tabela_dados_empresa.rows[10].cells[1].children[0].innerHTML=newlaudo.get_Bairro();
          tabela_dados_empresa.rows[11].cells[1].children[0].innerHTML=newlaudo.get_CEP();
          tabela_dados_empresa.rows[12].cells[1].children[0].innerHTML=newlaudo.get_Municipio();
          
      }
      
      function imprime_laudos_informantes(){
          divpai=document.getElementById('div_dados_informante');
          tabela_informante=divpai.getElementsByTagName('table')[0];
          tabela_informante.rows[2].cells[1].innerHTML=newlaudos.get_nome_informante('nome_informante');
      }

     function imprime_laudos_setores_pericia(dv){
        buscar_registros(window,'laudos_setores_pericia',"Carrega_Setores_Pericia",campos_laudo,valores_laudo,false,Array('=','=','=','='),newlaudosetper);    
        
        cont=0;
        while (cont<newlaudosetper.length()){
                divpai=document.getElementById('div_setores_pericia');
                divfilho=document.getElementById('div_setores').cloneNode(true);
                divfilho.setAttribute('style','display:block');
                divfilho.setAttribute('id','div_setores'+cont);
                tabela=divfilho.getElementsByTagName('table')[0];
                tabela.rows[0].cells[0].firstChild.textContent="Setor - "+newlaudosetper.get_Sequencial(cont);
                tabela.rows[0].cells[1].firstChild.textContent=newlaudosetper.get_Codigo_Setor(cont)+" "+newlaudosetper.get_Nome_Setor(cont);
                tabela.rows[1].cells[1].firstChild.textContent=newlaudosetper.get_Descricao_Setor(cont);
                tabela.rows[2].cells[1].firstChild.textContent=newlaudosetper.get_Pe_Direito(cont);
                tabela.rows[3].cells[1].firstChild.textContent=newlaudosetper.get_Piso(cont);
                tabela.rows[4].cells[1].firstChild.textContent=newlaudosetper.get_Parede(cont);
                tabela.rows[5].cells[1].firstChild.textContent=newlaudosetper.get_Cobertura(cont);
                tabela.rows[6].cells[1].firstChild.textContent=newlaudosetper.get_Iluminacao_Natural(cont);
                tabela.rows[7].cells[1].firstChild.textContent=newlaudosetper.get_Iluminacao_Artificial(cont);
                tabela.rows[8].cells[1].firstChild.textContent=newlaudosetper.get_Arranjo_Fisico(cont);
                if (newlaudosetper.get_Descricao_Setor(cont)=="" || newlaudosetper.get_Descricao_Setor(cont)==" "){
                   contdel=8;
                   while (contdel>1) {
                        tabela.deleteRow(contdel);
                        contdel--;
                    }
                }
                divpai.appendChild(divfilho);			
                buscar_registros(window,'laudos_setores_fotos',"Carrega_Setores_Fotos",Array('CODIGO_EMPRESA','ANO_PERICIA','NUMERO_LAUDO','REVISAO','UNIDADE','CODIGO_SETOR'),Array(empresa_ativa,ano_pericia,numero_laudo,revisao,newlaudosetper.get_Unidade(cont),newlaudosetper.get_Codigo_Setor(cont)),false,Array('=','=','=','=','=','='),newlaudosetfoto);    			
                contf=0;
                tb=document.createElement('table');
                tb.setAttribute('width','90%');
                tb.height="500px";
		tb.setAttribute('border','1');
                div_fotos=document.createElement('div');
		div_fotos.setAttribute('class','fotos');
                div_fotos.setAttribute('height','500px');
                div_fotos.appendChild(tb)
                if (newlaudosetfoto.get_Caminho_Foto(contf)!=""){
                    while (contf<newlaudosetfoto.length()){
                          tb.insertRow(-1);
                          img=document.createElement('img');
                          caminho_foto=""+newlaudosetfoto.get_Caminho_Foto(contf);
                          img.src=caminho_foto.toString().toLowerCase();
                          img.setAttribute('style','width:485px;height:250px');
                          celula=document.createElement('td');
                          celula.setAttribute('width','48%');
                          celula.setAttribute('height','250px');
                          celula.appendChild(img);
                          tb.rows[tb.rows.length-1].appendChild(celula);
                          contf++;
                          img=document.createElement('img');
                          caminho_foto=""+newlaudosetfoto.get_Caminho_Foto(contf);
                          img.src=caminho_foto.toString().toLowerCase();
                          img.setAttribute('style','width:485px;height:250px');
                          celula=document.createElement('td');
                          celula.setAttribute('width','48%');
                          celula.setAttribute('height','250px');
                          celula.appendChild(img);
                          tb.rows[tb.rows.length-1].appendChild(celula);
                          
                          contf++;
                     }     
                }
                divpai.appendChild(div_fotos);
                cont++;
            }
            numpag_fim[5]=numpag_ini[5]+cont-1;

        }
        function imprime_laudos_atividades(dv){
            
            buscar_registros(window,'laudos_atividades',"Carrega_Atividades_Laudo",Array('CODIGO_EMPRESA','ANO_PERICIA','NUMERO_LAUDO','REVISAO'),Array(empresa_ativa,ano_pericia,numero_laudo,revisao),false,Array('=','=','=','='),newativlaudo);    
            cont=0;
            while (cont<newativlaudo.length()){
                divpai=document.getElementById('div_atividades_laudo');
                divpai.setAttribute('style','display:block');
                divfilho=document.getElementById('div_atividades').cloneNode(true);
                divfilho.setAttribute('style','display:block');
                divfilho.setAttribute('id','div_atividades'+cont);
                tabela=divfilho.getElementsByTagName('table')[0];
                tabela.rows[0].cells[0].textContent='Funções';
                tabela.rows[0].cells[1].textContent=newativlaudo.get_Descricao_Resumida(cont);
                tabela.rows[0].cells[1].setAttribute('align','center');
                tabela.rows[0].cells[1].setAttribute('font-weight','bold');
                
                tabela.rows[1].cells[1].children[0].textContent+="\n"+newativlaudo.get_Descricao_Atividade(cont);
                tabela.rows[1].cells[1].children[0].setAttribute('align','justify');
                newativfunclaudo.inicializa();
                buscar_registros(window,'laudos_atividades_funcoes',"Carrega_Atividades_Funcoes",Array('CODIGO_EMPRESA','ANO_PERICIA','NUMERO_LAUDO','REVISAO','CODIGO_ATIVIDADE'),Array(empresa_ativa,ano_pericia,numero_laudo,revisao,newativlaudo.get_Codigo_Atividade(cont)),false,Array('=','=','=','=','='),newativfunclaudo);    
                cont2=0;
                while(cont2<newativfunclaudo.length()){
                        tabela.rows[tabela.rows.length-1].cells[0].textContent=newativfunclaudo.get_Descricao_Funcao(cont2);
                        tabela.insertRow(-1);
                        tabela.rows[tabela.rows.length-1].insertCell(-1);
                        cont2++;
                }
                tabela.insertRow(-1);
                classificacao="";
                if (newativlaudo.get_Classificacao_Atividade(cont)=="A"){
                    classificacao='Área Administrativa';
                }
                else if (newativlaudo.get_Classificacao_Atividade(cont)=="O"){
                    classificacao='Área Operacional';
                }
                tabela.rows[tabela.rows.length-1].insertCell(-1);
                tabela.rows[tabela.rows.length-1].cells[0].textContent=classificacao;
                tabela.rows[tabela.rows.length-1].cells[0].style.fontWeight='bold';
                tabela.rows[1].cells[1].rowSpan=cont2+2;
                divpai.appendChild(divfilho);		
                divfilho=document.getElementById('div_ativ_epis').cloneNode(true);
                divfilho.setAttribute('id','div_ativ_epis'+cont);		
                divfilho.setAttribute('style','display:block');
                newlaudoepisforn.inicializa();
                buscar_registros(window,'laudos_epis_fornecidos',"Carrega_Funcoes_Epis",Array('CODIGO_EMPRESA','ANO_PERICIA','NUMERO_LAUDO','REVISAO','CODIGO_ATIVIDADE'),Array(empresa_ativa,ano_pericia,numero_laudo,revisao,newativlaudo.get_Codigo_Atividade(cont)),false,Array('=','=','=','=','='),newlaudoepisforn);    
                cont3=0;
                tabela=divfilho.getElementsByTagName('table')[1];			
                while(cont3<newlaudoepisforn.length()){
                        descepi=newlaudoepisforn.get_Descricao_EPI(cont3);
                        caepi= newlaudoepisforn.get_CA_EPI(cont3);	
                        tabela.rows[cont3].cells[0].textContent=descepi;
                        tabela.rows[cont3].cells[1].textContent=caepi;
                        tabela.insertRow(-1);
                        tabela.rows[tabela.rows.length-1].insertCell(-1);
                        tabela.rows[tabela.rows.length-1].insertCell(-1);				
                        cont3++;
                    }
                    if (cont3>0) {
                        divfilho.setAttribute('style','display:block');
                        divpai.appendChild(divfilho);		
                    }
                    //tabela=tb_ant;
                    cont++;
            }
    
        }
        function imprime_laudos_cnae(dv){
            campo=document.getElementById('tbl_dados_empresa').rows[5].cells[1].textContent;
            buscar_registro(window,'CODIGO_CNAE',campo,'=','cnae','cnae','Busca_CNAE',false,newCNAE);
            divpai=document.getElementById('div_cnae');
            divpai.setAttribute('style','display:block');     
            tblpai=divpai.getElementsByTagName('table')[0];      
            //tblpai.rows[1].cells[0].textContent=newCNAE.get_Descricao();

        }
        function imprime_laudos_atividades_funcoes(){
            
        }
        function imprime_laudos_atividades_epis(){
            
        }
        function imprime_laudos_maquinas(){
            
        }
        
        function imprime_laudos_avaliacoes(dv){
            buscar_registros(window,'laudos_avaliacoes','Busca_Laudos_Avaliacoes',campos_laudo,valores_laudo,false,Array("=","=","=","="),newlaudosavaliacoes);
            campos_laudo_avaliacoes=campos_laudo;
            valores_laudo_avaliacoes=valores_laudo;
            buscar_registros(window,'laudos_avaliacoes',"Busca_Laudos_Avaliacoes_Sumarizadas__Todos",campos_laudo_avaliacoes,valores_laudo_avaliacoes,false,Array('=','=','=','='),newlaudosavalsum);                  
                dv_avaliacoes=document.getElementById('div_avaliacoes').cloneNode(true);
                dv_avaliacoes.setAttribute('id','avaliacoes_tipo');
                tbl_unid_set=dv_avaliacoes.getElementsByTagName('table')[0];
                tbl_unid_set.rows[0].cells[0].children[1].children[0].innerHTML='Todas';
                tbl_unid_set.rows[0].cells[1].children[1].children[0].innerHTML='Todos';
                dv_avaliacoes.setAttribute('style','display:block');
                document.forms[0].appendChild(dv_avaliacoes);
                ruido=newlaudosavalsum.get_Ruido(0)!='0'?true:false;
                ruido_dosimetria=newlaudosavalsum.get_Ruido_Dosimetria(0)!='0'?true:false;
                frio=newlaudosavalsum.get_Frio(0)!='0'?true:false;
                calor=newlaudosavalsum.get_Calor(0)!='0'?true:false;
                umidade=newlaudosavalsum.get_Umidade(0)!='0'?true:false;
                radiacao_nao_ionizante=newlaudosavalsum.get_Radiacao_Nao_Ionizante(0)!='0'?true:false;
                radiacao_ionizante=newlaudosavalsum.get_Radiacao_Ionizante(0)!='0'?true:false;
                outros_fisicos=newlaudosavalsum.get_Outros_Fisicos(0)!='0'?true:false;
                sangue_humano=newlaudosavalsum.get_Sangue_Humano(0)!='0'?true:false;
                sangue_animal=newlaudosavalsum.get_Sangue_Animal(0)!='0'?true:false;
                manejo_animais=newlaudosavalsum.get_Manejo_Animais(0)!='0'?true:false;
                outros_biologicos=newlaudosavalsum.get_Outros_Biologicos(0)!='0'?true:false;
                produtos_limpeza=newlaudosavalsum.get_Produtos_Limpeza(0)!='0'?true:false;
                tintas_solventes=newlaudosavalsum.get_Tintas_Solventes(0)!='0'?true:false;
                hidrocarbonetos_aromaticos=newlaudosavalsum.get_Hidrocarbonetos_Aromaticos(0)!='0'?true:false;
                fumos_metalicos=newlaudosavalsum.get_Fumos_Metalicos(0)!='0'?true:false;
                poeiras_incomodas=newlaudosavalsum.get_Poeiras_Incomodas(0)!='0'?true:false;
                poeiras_minerais=newlaudosavalsum.get_Poeiras_Minerais(0)!='0'?true:false;
                outros_quimicos=newlaudosavalsum.get_Outros_Quimicos(0)!='0'?true:false;
                iluminamento=newlaudosavalsum.get_Iluminamento(0)!='0'?true:false;
                comp=dv_avaliacoes.getElementsByTagName('input');
                comp[0].checked=ruido;
                comp[1].checked=ruido_dosimetria;
                comp[2].checked=frio;
                comp[3].checked=calor;
                comp[4].checked=umidade;
                comp[5].checked=radiacao_nao_ionizante;
                comp[6].checked=radiacao_ionizante;
                comp[7].checked=outros_fisicos;
                comp[8].checked=sangue_humano;
                comp[9].checked=sangue_animal;
                comp[10].checked=manejo_animais;
                comp[11].checked=outros_biologicos;
                comp[12].checked=produtos_limpeza;
                comp[13].checked=tintas_solventes;
                comp[14].checked=hidrocarbonetos_aromaticos;
                comp[15].checked=fumos_metalicos;
                comp[16].checked=poeiras_incomodas;
                comp[17].checked=poeiras_minerais;
                comp[18].checked=outros_quimicos;
                comp[19].checked=iluminamento;
                chkboxes=dv_avaliacoes.getElementsByTagName('input');
                for (z=0;z<chkboxes.length;z++){
                        if (chkboxes[z].checked==true){
                            chkboxes[z].parentNode.style.fontSize="24px";
                        }
                        else{
                            chkboxes[z].style.display="none";
                            chkboxes[z].parentNode.style.display="none";
                        }
                }
  

            for (xk=0;xk<newlaudosavaliacoes.length();xk++){
                dvy=document.createElement('div');
                parag=document.createElement('p');
                buscar_registros(window,'estrutura_organizacional',"Carrega_Estrutura",Array("CODIGO_EMPRESA","UNIDADE"),Array(empresa_ativa,newlaudosavaliacoes.get_Unidade(xk)),false,Array('=','='),newEstruturas);      
                parag.innerHTML= "Unidade "+ newlaudosavaliacoes.get_Unidade(xk)+" - "+newEstruturas.get_Descricao_Unidade(0);
                dvy.appendChild(parag);
                parag=document.createElement('p');
                parag.innerHTML= "Setor "+ newlaudosavaliacoes.get_Descricao_Setor(xk);
                dvy.appendChild(parag);
                dvy.setAttribute('class','quebra_unidade_setor');
                dv_avaliacoes.appendChild(dvy);
                numocur=0;
                try {
                if (newlaudosavaliacoes.get_Ruido(xk)==1) imprime_laudos_avaliacoes_ruido(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Ruido_Dosimetria(xk)==1) imprime_laudos_avaliacoes_ruido_dosimetria(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Frio(xk)==1) imprime_laudos_avaliacoes_frio(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Calor(xk)==1) imprime_laudos_avaliacoes_calor(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Umidade(xk)==1) imprime_laudos_avaliacoes_umidade(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Radiacao_Nao_Ionizante(xk)==1) imprime_laudos_avaliacoes_radicao_nao_ionizante(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Radiacao_Ionizante(xk)==1) imprime_laudos_avaliacoes_radiacao_ionizante(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Outros_Fisicos(xk)==1) imprime_laudos_avaliacoes_outros_fisicos(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Sangue_Humano(xk)==1) imprime_laudos_avaliacoes_sangue_humano(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Sangue_Animal(xk)==1) imprime_laudos_avaliacoes_sangue_animal(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Manejo_Animais(xk)==1) imprime_laudos_avaliacoes_manejo_animais(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Outros_Biologicos(xk)==1) imprime_laudos_avaliacoes_outros_biologicos(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Produtos_Limpeza(xk)==1) imprime_laudos_avaliacoes_produtos_limpeza(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Tintas_Solventes(xk)==1) imprime_laudos_avaliacoes_tintas_solventes(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Hidrocarbonetos_Aromaticos(xk)==1) imprime_laudos_avaliacoes_hidrocarbonetos(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Fumos_Metalicos(xk)==1) imprime_laudos_avaliacoes_fumos_metalicos(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Poeiras_Incomodas(xk)==1) imprime_laudos_avaliacoes_poeiras_incomodas(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Poeiras_Minerais(xk)==1) imprime_laudos_avaliacoes_poeiras_minerais(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Outros_Quimicos(xk)==1) imprime_laudos_avaliacoes_outros_quimicos(dv_avaliacoes);
                if (newlaudosavaliacoes.get_Iluminamento(xk)==1) imprime_laudos_avaliacoes_iluminamento(dv_avaliacoes);
                }
                catch (except){
                    
                }
                numocur++;
            }
        }            
        function imprime_laudos_avaliacoes_ruido(dv){
            divruido=document.createElement('div');
            dv.setAttribute('id','avaliacao');
            dv.setAttribute('style','width:1009');
			
            divruido.setAttribute('id','dv_ruido');
            divruido.setAttribute('border','1');
            divruido.setAttribute('style','display:block');
            divruido.setAttribute('style','width:1009');
            tabelaruido=document.getElementById('tabela_modelo_avaliacao_ruido').cloneNode(true);
            tabelaruido.setAttribute('style','display:block');
            dvx=document.createElement('div');
            dv.appendChild(dvx);
            und=document.createElement()
                            
            divruido.appendChild(tabelaruido);
                 campos_aval_ruido=Array();
                 campos_aval_ruido[0]="CODIGO_EMPRESA";
                 campos_aval_ruido[1]="ANO_PERICIA";
                 campos_aval_ruido[2]="NUMERO_LAUDO";
                 campos_aval_ruido[3]="REVISAO";
                 campos_aval_ruido[4]="UNIDADE";
                 campos_aval_ruido[5]="CODIGO_SETOR"
                 valores_aval_ruido=Array();
                 valores_aval_ruido[0]=empresa_ativa;
                 valores_aval_ruido[1]=ano_pericia;
                 valores_aval_ruido[2]=numero_laudo;
                 valores_aval_ruido[3]=revisao;
                 valores_aval_ruido[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_ruido[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                 
		 buscar_registros(window,'laudos_avaliacoes_ruido',"Carrega_Avaliacoes_Ruido",campos_aval_ruido,valores_aval_ruido,false,Array('=','=','=','=','=','='),newlaudoavalruido);
                 
                 for (xs=0;xs<newlaudoavalruido.length();xs++){
                  tabelaruido.rows[1].cells[1].children[0].value=newlaudoavalruido.get_Tipo_Avaliacao(xs);
                  tabelaruido.rows[3].cells[0].children[0].innerHTML=newlaudoavalruido.get_Texto_Explicativo(xs);
                  tabelaruido.rows[4].cells[0].children[0].value=newlaudoavalruido.get_Unidade(xs);
                  tabelaruido.rows[4].cells[1].children[0].value=newlaudoavalruido.get_Codigo_Setor(xs);
                  tabelaruido.rows[5].cells[1].children[0].value=newlaudoavalruido.get_Periodicidade_Exposicao(xs);
                  tabelaruido.rows[6].cells[1].children[0].value=newlaudoavalruido.get_Numero_Funcs_Setor(xs);
                  tabelaruido.rows[7].cells[1].children[0].value=newlaudoavalruido.get_Numero_Funcs_Expostos(xs);
                  tabelaruido.rows[10].cells[1].children[0].value=newlaudoavalruido.get_Campo_Acustico_Medido(xs);
                  tabelaruido.rows[11].cells[1].children[0].value=newlaudoavalruido.get_Nivel_Atenuacao_Protetor(xs);
                  tabelaruido.rows[12].cells[1].children[0].value=newlaudoavalruido.get_Nivel_Ruido_Atenuado(xs);
                  tabelaruido.rows[13].cells[1].children[0].value=newlaudoavalruido.get_Medidas_Protecao_Coletiva(xs);
                  tabelaruido.rows[13].cells[1].children[1].value=newlaudoavalruido.get_Medidas_Protecao_Coletiva_Outros(xs);
                  tabelaruido.rows[14].cells[1].children[0].value=newlaudoavalruido.get_Medidas_Protecao_Individual(xs);
                  tabelaruido.rows[14].cells[2].children[0].value=newlaudoavalruido.get_Medidas_Protecao_Individual_Outros(xs);
                  tabelaruido.rows[16].cells[1].children[0].value=newlaudoavalruido.get_Fonte_Geradora(xs);
                  tabelaruido.rows[17].cells[1].children[0].innerHTML=newlaudoavalruido.get_Enquadramento(xs);
                  
                 }
                  
                 divmaqruido=tabelaruido.rows[9].cells[0].children[0];
                 divmaq=divmaqruido.children[0].cloneNode(true);
                 while (divmaqruido.children.length>0) divmaqruido.removeChild(divmaqruido.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_ruido_maquinas',"Carrega_Avaliacoes_Ruido_Maquinas",campos_aval_ruido,valores_aval_ruido,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_ruido_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_ruido_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_ruido_maquinas.get_Unidade(xs),newlaudosavaliacoes_ruido_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_ruido_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqruido=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqruido.rows[0].cells[0].children[0].value=newlaudosavaliacoes_ruido_maquinas.get_Unidade(xs);
                     tabelamaqruido.rows[0].cells[1].children[0].value=newlaudosavaliacoes_ruido_maquinas.get_Codigo_setor(xs);
                     tabelamaqruido.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                     tabelafuncruido.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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

                 dv.appendChild(divruido);
            
        }
        function imprime_laudos_avaliacoes_ruido_dosimetria(){
            
        }
        function imprime_laudos_avaliacoes_frio(dv){
            divfrio=document.createElement('div');
            divfrio.setAttribute('id','dv_frio');
            divfrio.setAttribute('border','1');
            divfrio.setAttribute('style','display:block');
            divfrio.setAttribute('width','1009');
            tabelafrio=document.getElementById('tabela_modelo_avaliacao_frio').cloneNode(true);
            tabelafrio.setAttribute('style','display:block');
            dv.appendChild(divfrio);

                            
            divfrio.appendChild(tabelafrio);
                 campos_aval_frio=Array();
                 campos_aval_frio[0]="CODIGO_EMPRESA";
                 campos_aval_frio[1]="ANO_PERICIA";
                 campos_aval_frio[2]="NUMERO_LAUDO";
                 campos_aval_frio[3]="REVISAO";
                 campos_aval_frio[4]="UNIDADE";
                 campos_aval_frio[5]="CODIGO_SETOR"
                 valores_aval_frio=Array();
                 valores_aval_frio[0]=empresa_ativa;
                 valores_aval_frio[1]=ano_pericia;
                 valores_aval_frio[2]=numero_laudo;
                 valores_aval_frio[3]=revisao;
                 valores_aval_frio[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_frio[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_frio',"Carrega_Avaliacoes_Frio",campos_aval_frio,valores_aval_frio,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_frio);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_frio_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_frio','table');
                 //tabelafrio=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_frio.length();xs++){
                  tabelafrio.rows[1].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Tipo_avaliacao(xs);
                  tabelafrio.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_frio.get_Texto_explicativo(xs);
                  tabelafrio.rows[4].cells[0].children[0].value=newlaudosavaliacoes_frio.get_Unidade(xs);
                  tabelafrio.rows[4].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Codigo_setor(xs);
                  tabelafrio.rows[5].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Periodicidade_exposicao(xs);
                  tabelafrio.rows[6].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Numero_funcs_setor(xs);
                  tabelafrio.rows[7].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Numero_funcs_expostos(xs);
                  tabelafrio.rows[10].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Medidas_protecao_coletiva(xs);
                  tabelafrio.rows[10].cells[2].children[0].value=newlaudosavaliacoes_frio.get_Medidas_protecao_coletiva_outros(xs);
                  tabelafrio.rows[11].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Medidas_protecao_individual(xs);
                  tabelafrio.rows[11].cells[2].children[0].value=newlaudosavaliacoes_frio.get_Medidas_protecao_individual_outros(xs);
                  tabelafrio.rows[12].cells[1].children[0].value=newlaudosavaliacoes_frio.get_Fonte_geradora(xs);
                  tabelafrio.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_frio.get_Enquadramento(xs);
                  
                 }
               
                 divmaqfrio=tabelafrio.rows[9].cells[0].children[0];
                 divmaq=divmaqfrio.children[0].cloneNode(true);
                 while (divmaqfrio.children.length>0) divmaqfrio.removeChild(divmaqfrio.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_frio_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_frio,valores_aval_frio,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_frio_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_frio_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_frio_maquinas.get_Unidade(xs),newlaudosavaliacoes_frio_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_frio_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqfrio=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqfrio.rows[0].cells[0].children[0].value=newlaudosavaliacoes_frio_maquinas.get_Unidade(xs);
                     tabelamaqfrio.rows[0].cells[1].children[0].value=newlaudosavaliacoes_frio_maquinas.get_Codigo_setor(xs);
                     tabelamaqfrio.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfuncfrio.children.length>0) divfuncfrio.removeChild(divfuncfrio.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_frio_funcoes',"Carrega_Avaliacoes_frio_funcoes",campos_aval_frio,valores_aval_frio,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_frio_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_frio_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_frio_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncfrio=divfunc2.children[0];
                     tabelafuncfrio.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divfrio);
            
        }
        function imprime_laudos_avaliacoes_calor(dv){
            divcalor=document.createElement('div');
            divcalor.setAttribute('id','dv_calor');
            divcalor.setAttribute('border','1');
            divcalor.setAttribute('width','1009');
            divcalor.setAttribute('style','display:block');
            tabelacalor=document.getElementById('tabela_modelo_avaliacao_calor').cloneNode(true);
            tabelacalor.setAttribute('style','display:block');
            dv.appendChild(divcalor);

                            
            divcalor.appendChild(tabelacalor);
                 campos_aval_calor=Array();
                 campos_aval_calor[0]="CODIGO_EMPRESA";
                 campos_aval_calor[1]="ANO_PERICIA";
                 campos_aval_calor[2]="NUMERO_LAUDO";
                 campos_aval_calor[3]="REVISAO";
                 campos_aval_calor[4]="UNIDADE";
                 campos_aval_calor[5]="CODIGO_SETOR"
                 valores_aval_calor=Array();
                 valores_aval_calor[0]=empresa_ativa;
                 valores_aval_calor[1]=ano_pericia;
                 valores_aval_calor[2]=numero_laudo;
                 valores_aval_calor[3]=revisao;
                 valores_aval_calor[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_calor[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_calor',"Carrega_Avaliacoes_Frio",campos_aval_calor,valores_aval_calor,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_calor);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_calor_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_calor','table');
                 //tabelacalor=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_calor.length();xs++){
                  tabelacalor.rows[1].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Tipo_avaliacao(xs);
                  tabelacalor.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_calor.get_Texto_explicativo(xs);
                  tabelacalor.rows[4].cells[0].children[0].value=newlaudosavaliacoes_calor.get_Unidade(xs);
                  tabelacalor.rows[4].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Codigo_setor(xs);
                  tabelacalor.rows[5].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Periodicidade_exposicao(xs);
                  tabelacalor.rows[6].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Numero_funcs_setor(xs);
                  tabelacalor.rows[7].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Numero_funcs_expostos(xs);
                  tabelacalor.rows[10].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Medidas_protecao_coletiva(xs);
                  tabelacalor.rows[10].cells[2].children[0].value=newlaudosavaliacoes_calor.get_Medidas_protecao_coletiva_outros(xs);
                  tabelacalor.rows[11].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Medidas_protecao_individual(xs);
                  tabelacalor.rows[11].cells[2].children[0].value=newlaudosavaliacoes_calor.get_Medidas_protecao_individual_outros(xs);
                  tabelacalor.rows[12].cells[1].children[0].value=newlaudosavaliacoes_calor.get_Fonte_geradora(xs);
                  tabelacalor.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_calor.get_Enquadramento(xs);
                  
                 }
               
                 divmaqcalor=tabelacalor.rows[9].cells[0].children[0];
                 divmaq=divmaqcalor.children[0].cloneNode(true);
                 while (divmaqcalor.children.length>0) divmaqcalor.removeChild(divmaqcalor.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_calor_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_calor,valores_aval_calor,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_calor_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_calor_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_calor_maquinas.get_Unidade(xs),newlaudosavaliacoes_calor_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_calor_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqcalor=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqcalor.rows[0].cells[0].children[0].value=newlaudosavaliacoes_calor_maquinas.get_Unidade(xs);
                     tabelamaqcalor.rows[0].cells[1].children[0].value=newlaudosavaliacoes_calor_maquinas.get_Codigo_setor(xs);
                     tabelamaqcalor.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 divfunccalor=tabelacalor.rows[8].cells[0].children[1];
                 divfunc=divfunccalor.children[0].cloneNode(true);
                 while (divfunccalor.children.length>0) divfunccalor.removeChild(divfunccalor.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_calor_funcoes',"Carrega_Avaliacoes_calor_funcoes",campos_aval_calor,valores_aval_calor,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_calor_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_calor_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_calor_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafunccalor=divfunc2.children[0];
                     tabelafunccalor.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divcalor);
            
        }
        function imprime_laudos_avaliacoes_umidade(dv){
            divumidade=document.createElement('div');
            divumidade.setAttribute('id','dv_umidade');
            divumidade.setAttribute('border','1');
            divumidade.setAttribute('width','1009');
            divumidade.setAttribute('style','display:block');
            tabelaumidade=document.getElementById('tabela_modelo_avaliacao_umidade').cloneNode(true);
            tabelaumidade.setAttribute('style','display:block');
            dv.appendChild(divumidade);

                            
            divumidade.appendChild(tabelaumidade);
                 campos_aval_umidade=Array();
                 campos_aval_umidade[0]="CODIGO_EMPRESA";
                 campos_aval_umidade[1]="ANO_PERICIA";
                 campos_aval_umidade[2]="NUMERO_LAUDO";
                 campos_aval_umidade[3]="REVISAO";
                 campos_aval_umidade[4]="UNIDADE";
                 campos_aval_umidade[5]="CODIGO_SETOR"
                 valores_aval_umidade=Array();
                 valores_aval_umidade[0]=empresa_ativa;
                 valores_aval_umidade[1]=ano_pericia;
                 valores_aval_umidade[2]=numero_laudo;
                 valores_aval_umidade[3]=revisao;
                 valores_aval_umidade[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_umidade[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_umidade',"Carrega_Avaliacoes_Frio",campos_aval_umidade,valores_aval_umidade,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_umidade);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_umidade_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_umidade','table');
                 //tabelaumidade=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_umidade.length();xs++){
                  tabelaumidade.rows[1].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Tipo_avaliacao(xs);
                  tabelaumidade.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_umidade.get_Texto_explicativo(xs);
                  tabelaumidade.rows[4].cells[0].children[0].value=newlaudosavaliacoes_umidade.get_Unidade(xs);
                  tabelaumidade.rows[4].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Codigo_setor(xs);
                  tabelaumidade.rows[5].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Periodicidade_exposicao(xs);
                  tabelaumidade.rows[6].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Numero_funcs_setor(xs);
                  tabelaumidade.rows[7].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Numero_funcs_expostos(xs);
                  tabelaumidade.rows[10].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Medidas_protecao_coletiva(xs);
                  tabelaumidade.rows[10].cells[2].children[0].value=newlaudosavaliacoes_umidade.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaumidade.rows[11].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Medidas_protecao_individual(xs);
                  tabelaumidade.rows[11].cells[2].children[0].value=newlaudosavaliacoes_umidade.get_Medidas_protecao_individual_outros(xs);
                  tabelaumidade.rows[12].cells[1].children[0].value=newlaudosavaliacoes_umidade.get_Fonte_geradora(xs);
                  tabelaumidade.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_umidade.get_Enquadramento(xs);
                  
                 }
               
                 divmaqumidade=tabelaumidade.rows[9].cells[0].children[0];
                 divmaq=divmaqumidade.children[0].cloneNode(true);
                 while (divmaqumidade.children.length>0) divmaqumidade.removeChild(divmaqumidade.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_umidade_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_umidade,valores_aval_umidade,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_umidade_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_umidade_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_umidade_maquinas.get_Unidade(xs),newlaudosavaliacoes_umidade_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_umidade_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqumidade=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqumidade.rows[0].cells[0].children[0].value=newlaudosavaliacoes_umidade_maquinas.get_Unidade(xs);
                     tabelamaqumidade.rows[0].cells[1].children[0].value=newlaudosavaliacoes_umidade_maquinas.get_Codigo_setor(xs);
                     tabelamaqumidade.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
                     tabelamaqumidade.rows[0].cells[3].children[0].value=newlaudosavaliacoes_umidade_maquinas.get_Temperatura_medida(xs);
                     tabelamaqumidade.rows[0].cells[4].children[0].value=newlaudosavaliacoes_umidade_maquinas.get_Temperatura_permitida(xs);
                     divmaqumidade.appendChild(divmaq2);
                     
                 }
                 campos_aval_num_func=['CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'];
                 valores_aval_num_func=Array();
                 valores_aval_num_func[0]=empresa_ativa; 
                 valores_aval_num_func[1]=newlaudosavaliacoes.get_Unidade(numocur);
                 valores_aval_num_func[2]=newlaudosavaliacoes.get_Codigo_Setor(numocur);
                 buscar_registro(window,campos_aval_num_func,valores_aval_num_func,Array('=','=','='),'funcionarios','funcionarios','Sumarizar_Numero_Funcoes',false,newregistro);                 
                 tabelaumidade.rows[6].cells[1].children[0].value=newregistro.getValores();
                 divfuncumidade=tabelaumidade.rows[8].cells[0].children[1];
                 divfunc=divfuncumidade.children[0].cloneNode(true);
                 while (divfuncumidade.children.length>0) divfuncumidade.removeChild(divfuncumidade.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_umidade_funcoes',"Carrega_Avaliacoes_umidade_funcoes",campos_aval_umidade,valores_aval_umidade,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_umidade_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_umidade_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_umidade_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncumidade=divfunc2.children[0];
                     tabelafuncumidade.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divumidade);
            
        }
        function imprime_laudos_avaliacoes_radicao_nao_ionizante(dv){
            divradiacao_nao_ionizante=document.createElement('div');
            divradiacao_nao_ionizante.setAttribute('id','dv_radiacao_nao_ionizante');
            divradiacao_nao_ionizante.setAttribute('border','1');
            divradiacao_nao_ionizante.setAttribute('style','display:block');
            tabelaradiacao_nao_ionizante=document.getElementById('tabela_modelo_avaliacao_radiacao_nao_ionizante').cloneNode(true);
            tabelaradiacao_nao_ionizante.setAttribute('style','display:block');
            dv.appendChild(divradiacao_nao_ionizante);

                            
            divradiacao_nao_ionizante.appendChild(tabelaradiacao_nao_ionizante);
                 campos_aval_radiacao_nao_ionizante=Array();
                 campos_aval_radiacao_nao_ionizante[0]="CODIGO_EMPRESA";
                 campos_aval_radiacao_nao_ionizante[1]="ANO_PERICIA";
                 campos_aval_radiacao_nao_ionizante[2]="NUMERO_LAUDO";
                 campos_aval_radiacao_nao_ionizante[3]="REVISAO";
                 campos_aval_radiacao_nao_ionizante[4]="UNIDADE";
                 campos_aval_radiacao_nao_ionizante[5]="CODIGO_SETOR"
                 valores_aval_radiacao_nao_ionizante=Array();
                 valores_aval_radiacao_nao_ionizante[0]=empresa_ativa;
                 valores_aval_radiacao_nao_ionizante[1]=ano_pericia;
                 valores_aval_radiacao_nao_ionizante[2]=numero_laudo;
                 valores_aval_radiacao_nao_ionizante[3]=revisao;
                 valores_aval_radiacao_nao_ionizante[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_radiacao_nao_ionizante[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_radiacao_nao_ionizante',"Carrega_Avaliacoes_Frio",campos_aval_radiacao_nao_ionizante,valores_aval_radiacao_nao_ionizante,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_radiacao_nao_ionizante);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_radiacao_nao_ionizante_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_radiacao_nao_ionizante','table');
                 //tabelaradiacao_nao_ionizante=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_radiacao_nao_ionizante.length();xs++){
                  tabelaradiacao_nao_ionizante.rows[1].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Tipo_avaliacao(xs);
                  tabelaradiacao_nao_ionizante.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_radiacao_nao_ionizante.get_Texto_explicativo(xs);
                  tabelaradiacao_nao_ionizante.rows[4].cells[0].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Unidade(xs);
                  tabelaradiacao_nao_ionizante.rows[4].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Codigo_setor(xs);
                  tabelaradiacao_nao_ionizante.rows[5].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Periodicidade_exposicao(xs);
                  tabelaradiacao_nao_ionizante.rows[6].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Numero_funcs_setor(xs);
                  tabelaradiacao_nao_ionizante.rows[7].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Numero_funcs_expostos(xs);
                  tabelaradiacao_nao_ionizante.rows[10].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Medidas_protecao_coletiva(xs);
                  tabelaradiacao_nao_ionizante.rows[10].cells[2].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaradiacao_nao_ionizante.rows[11].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Medidas_protecao_individual(xs);
                  tabelaradiacao_nao_ionizante.rows[11].cells[2].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Medidas_protecao_individual_outros(xs);
                  tabelaradiacao_nao_ionizante.rows[12].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante.get_Fonte_geradora(xs);
                  tabelaradiacao_nao_ionizante.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_radiacao_nao_ionizante.get_Enquadramento(xs);
                  
                 }
               
                 divmaqradiacao_nao_ionizante=tabelaradiacao_nao_ionizante.rows[9].cells[0].children[0];
                 divmaq=divmaqradiacao_nao_ionizante.children[0].cloneNode(true);
                 while (divmaqradiacao_nao_ionizante.children.length>0) divmaqradiacao_nao_ionizante.removeChild(divmaqradiacao_nao_ionizante.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_radiacao_nao_ionizante_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_radiacao_nao_ionizante,valores_aval_radiacao_nao_ionizante,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_radiacao_nao_ionizante_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Unidade(xs),newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqradiacao_nao_ionizante=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqradiacao_nao_ionizante.rows[0].cells[0].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Unidade(xs);
                     tabelamaqradiacao_nao_ionizante.rows[0].cells[1].children[0].value=newlaudosavaliacoes_radiacao_nao_ionizante_maquinas.get_Codigo_setor(xs);
                     tabelamaqradiacao_nao_ionizante.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfuncradiacao_nao_ionizante.children.length>0) divfuncradiacao_nao_ionizante.removeChild(divfuncradiacao_nao_ionizante.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_radiacao_nao_ionizante_funcoes',"Carrega_Avaliacoes_radiacao_nao_ionizante_funcoes",campos_aval_radiacao_nao_ionizante,valores_aval_radiacao_nao_ionizante,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_radiacao_nao_ionizante_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_radiacao_nao_ionizante_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncradiacao_nao_ionizante=divfunc2.children[0];
                     tabelafuncradiacao_nao_ionizante.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divradiacao_nao_ionizante);
            
            
        }
        function imprime_laudos_avaliacoes_radiacao_ionizante(dv){
            divradiacao_ionizante=document.createElement('div');
            divradiacao_ionizante.setAttribute('id','dv_radiacao_ionizante');
            divradiacao_ionizante.setAttribute('border','1');
            divradiacao_ionizante.setAttribute('style','display:block');
            tabelaradiacao_ionizante=document.getElementById('tabela_modelo_avaliacao_radiacao_ionizante').cloneNode(true);
            tabelaradiacao_ionizante.setAttribute('style','display:block');
            dv.appendChild(divradiacao_ionizante);

                            
            divradiacao_ionizante.appendChild(tabelaradiacao_ionizante);
                 campos_aval_radiacao_ionizante=Array();
                 campos_aval_radiacao_ionizante[0]="CODIGO_EMPRESA";
                 campos_aval_radiacao_ionizante[1]="ANO_PERICIA";
                 campos_aval_radiacao_ionizante[2]="NUMERO_LAUDO";
                 campos_aval_radiacao_ionizante[3]="REVISAO";
                 campos_aval_radiacao_ionizante[4]="UNIDADE";
                 campos_aval_radiacao_ionizante[5]="CODIGO_SETOR"
                 valores_aval_radiacao_ionizante=Array();
                 valores_aval_radiacao_ionizante[0]=empresa_ativa;
                 valores_aval_radiacao_ionizante[1]=ano_pericia;
                 valores_aval_radiacao_ionizante[2]=numero_laudo;
                 valores_aval_radiacao_ionizante[3]=revisao;
                 valores_aval_radiacao_ionizante[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_radiacao_ionizante[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_radiacao_ionizante',"Carrega_Avaliacoes_Frio",campos_aval_radiacao_ionizante,valores_aval_radiacao_ionizante,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_radiacao_ionizante);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_radiacao_ionizante_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_radiacao_ionizante','table');
                 //tabelaradiacao_ionizante=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_radiacao_ionizante.length();xs++){
                  tabelaradiacao_ionizante.rows[1].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Tipo_avaliacao(xs);
                  tabelaradiacao_ionizante.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_radiacao_ionizante.get_Texto_explicativo(xs);
                  tabelaradiacao_ionizante.rows[4].cells[0].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Unidade(xs);
                  tabelaradiacao_ionizante.rows[4].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Codigo_setor(xs);
                  tabelaradiacao_ionizante.rows[5].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Periodicidade_exposicao(xs);
                  tabelaradiacao_ionizante.rows[6].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Numero_funcs_setor(xs);
                  tabelaradiacao_ionizante.rows[7].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Numero_funcs_expostos(xs);
                  tabelaradiacao_ionizante.rows[10].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Medidas_protecao_coletiva(xs);
                  tabelaradiacao_ionizante.rows[10].cells[2].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaradiacao_ionizante.rows[11].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Medidas_protecao_individual(xs);
                  tabelaradiacao_ionizante.rows[11].cells[2].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Medidas_protecao_individual_outros(xs);
                  tabelaradiacao_ionizante.rows[12].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante.get_Fonte_geradora(xs);
                  tabelaradiacao_ionizante.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_radiacao_ionizante.get_Enquadramento(xs);
                  
                 }
               
                 divmaqradiacao_ionizante=tabelaradiacao_ionizante.rows[9].cells[0].children[0];
                 divmaq=divmaqradiacao_ionizante.children[0].cloneNode(true);
                 while (divmaqradiacao_ionizante.children.length>0) divmaqradiacao_ionizante.removeChild(divmaqradiacao_ionizante.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_radiacao_ionizante_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_radiacao_ionizante,valores_aval_radiacao_ionizante,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_radiacao_ionizante_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_radiacao_ionizante_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Unidade(xs),newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqradiacao_ionizante=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqradiacao_ionizante.rows[0].cells[0].children[0].value=newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Unidade(xs);
                     tabelamaqradiacao_ionizante.rows[0].cells[1].children[0].value=newlaudosavaliacoes_radiacao_ionizante_maquinas.get_Codigo_setor(xs);
                     tabelamaqradiacao_ionizante.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                     tabelafuncradiacao_ionizante.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divradiacao_ionizante);
            
                        
        }
        function imprime_laudos_avaliacoes_outros_fisicos(dv){
            divoutros_fisicos=document.createElement('div');
            divoutros_fisicos.setAttribute('id','dv_outros_fisicos');
            divoutros_fisicos.setAttribute('border','1');
            divoutros_fisicos.setAttribute('style','display:block');
            tabelaoutros_fisicos=document.getElementById('tabela_modelo_avaliacao_outros_fisicos').cloneNode(true);
            tabelaoutros_fisicos.setAttribute('style','display:block');
            dv.appendChild(divoutros_fisicos);

                            
            divoutros_fisicos.appendChild(tabelaoutros_fisicos);
                 campos_aval_outros_fisicos=Array();
                 campos_aval_outros_fisicos[0]="CODIGO_EMPRESA";
                 campos_aval_outros_fisicos[1]="ANO_PERICIA";
                 campos_aval_outros_fisicos[2]="NUMERO_LAUDO";
                 campos_aval_outros_fisicos[3]="REVISAO";
                 campos_aval_outros_fisicos[4]="UNIDADE";
                 campos_aval_outros_fisicos[5]="CODIGO_SETOR"
                 valores_aval_outros_fisicos=Array();
                 valores_aval_outros_fisicos[0]=empresa_ativa;
                 valores_aval_outros_fisicos[1]=ano_pericia;
                 valores_aval_outros_fisicos[2]=numero_laudo;
                 valores_aval_outros_fisicos[3]=revisao;
                 valores_aval_outros_fisicos[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_outros_fisicos[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_outros_fisicos',"Carrega_Avaliacoes_Frio",campos_aval_outros_fisicos,valores_aval_outros_fisicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_fisicos);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_outros_fisicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_outros_fisicos','table');
                 //tabelaoutros_fisicos=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_fisicos.length();xs++){
                  tabelaoutros_fisicos.rows[1].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Tipo_avaliacao(xs);
                  tabelaoutros_fisicos.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_outros_fisicos.get_Texto_explicativo(xs);
                  tabelaoutros_fisicos.rows[4].cells[0].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Unidade(xs);
                  tabelaoutros_fisicos.rows[4].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Codigo_setor(xs);
                  tabelaoutros_fisicos.rows[5].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Periodicidade_exposicao(xs);
                  tabelaoutros_fisicos.rows[6].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Numero_funcs_setor(xs);
                  tabelaoutros_fisicos.rows[7].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Numero_funcs_expostos(xs);
                  tabelaoutros_fisicos.rows[10].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Medidas_protecao_coletiva(xs);
                  tabelaoutros_fisicos.rows[10].cells[2].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaoutros_fisicos.rows[11].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Medidas_protecao_individual(xs);
                  tabelaoutros_fisicos.rows[11].cells[2].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Medidas_protecao_individual_outros(xs);
                  tabelaoutros_fisicos.rows[12].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos.get_Fonte_geradora(xs);
                  tabelaoutros_fisicos.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_outros_fisicos.get_Enquadramento(xs);
                  
                 }
               
                 divmaqoutros_fisicos=tabelaoutros_fisicos.rows[9].cells[0].children[0];
                 divmaq=divmaqoutros_fisicos.children[0].cloneNode(true);
                 while (divmaqoutros_fisicos.children.length>0) divmaqoutros_fisicos.removeChild(divmaqoutros_fisicos.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_outros_fisicos_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_outros_fisicos,valores_aval_outros_fisicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_fisicos_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_fisicos_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_outros_fisicos_maquinas.get_Unidade(xs),newlaudosavaliacoes_outros_fisicos_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_outros_fisicos_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqoutros_fisicos=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqoutros_fisicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_outros_fisicos_maquinas.get_Unidade(xs);
                     tabelamaqoutros_fisicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_outros_fisicos_maquinas.get_Codigo_setor(xs);
                     tabelamaqoutros_fisicos.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfuncoutros_fisicos.children.length>0) divfuncoutros_fisicos.removeChild(divfuncoutros_fisicos.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_outros_fisicos_funcoes',"Carrega_Avaliacoes_outros_fisicos_funcoes",campos_aval_outros_fisicos,valores_aval_outros_fisicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_fisicos_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_fisicos_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_outros_fisicos_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncoutros_fisicos=divfunc2.children[0];
                     tabelafuncoutros_fisicos.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divoutros_fisicos);
            
                        
        }
        function imprime_laudos_avaliacoes_sangue_humano(dv){
            divsangue_humano=document.createElement('div');
            divsangue_humano.setAttribute('id','dv_sangue_humano');
            divsangue_humano.setAttribute('border','1');
            divsangue_humano.setAttribute('style','display:block');
            tabelasangue_humano=document.getElementById('tabela_modelo_avaliacao_sangue_humano').cloneNode(true);
            tabelasangue_humano.setAttribute('style','display:block');
            dv.appendChild(divsangue_humano);

                            
            divsangue_humano.appendChild(tabelasangue_humano);
                 campos_aval_sangue_humano=Array();
                 campos_aval_sangue_humano[0]="CODIGO_EMPRESA";
                 campos_aval_sangue_humano[1]="ANO_PERICIA";
                 campos_aval_sangue_humano[2]="NUMERO_LAUDO";
                 campos_aval_sangue_humano[3]="REVISAO";
                 campos_aval_sangue_humano[4]="UNIDADE";
                 campos_aval_sangue_humano[5]="CODIGO_SETOR"
                 valores_aval_sangue_humano=Array();
                 valores_aval_sangue_humano[0]=empresa_ativa;
                 valores_aval_sangue_humano[1]=ano_pericia;
                 valores_aval_sangue_humano[2]=numero_laudo;
                 valores_aval_sangue_humano[3]=revisao;
                 valores_aval_sangue_humano[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_sangue_humano[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_sangue_humano',"Carrega_Avaliacoes_Frio",campos_aval_sangue_humano,valores_aval_sangue_humano,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_humano);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_sangue_humano_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_sangue_humano','table');
                 //tabelasangue_humano=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_sangue_humano.length();xs++){
                  tabelasangue_humano.rows[1].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Tipo_avaliacao(xs);
                  tabelasangue_humano.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_sangue_humano.get_Texto_explicativo(xs);
                  tabelasangue_humano.rows[4].cells[0].children[0].value=newlaudosavaliacoes_sangue_humano.get_Unidade(xs);
                  tabelasangue_humano.rows[4].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Codigo_setor(xs);
                  tabelasangue_humano.rows[5].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Periodicidade_exposicao(xs);
                  tabelasangue_humano.rows[6].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Numero_funcs_setor(xs);
                  tabelasangue_humano.rows[7].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Numero_funcs_expostos(xs);
                  tabelasangue_humano.rows[10].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Medidas_protecao_coletiva(xs);
                  tabelasangue_humano.rows[10].cells[2].children[0].value=newlaudosavaliacoes_sangue_humano.get_Medidas_protecao_coletiva_outros(xs);
                  tabelasangue_humano.rows[11].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Medidas_protecao_individual(xs);
                  tabelasangue_humano.rows[11].cells[2].children[0].value=newlaudosavaliacoes_sangue_humano.get_Medidas_protecao_individual_outros(xs);
                  tabelasangue_humano.rows[12].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano.get_Fonte_geradora(xs);
                  tabelasangue_humano.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_sangue_humano.get_Enquadramento(xs);
                  
                 }
               
                 divmaqsangue_humano=tabelasangue_humano.rows[9].cells[0].children[0];
                 divmaq=divmaqsangue_humano.children[0].cloneNode(true);
                 while (divmaqsangue_humano.children.length>0) divmaqsangue_humano.removeChild(divmaqsangue_humano.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_sangue_humano_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_sangue_humano,valores_aval_sangue_humano,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_humano_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_sangue_humano_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_sangue_humano_maquinas.get_Unidade(xs),newlaudosavaliacoes_sangue_humano_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_sangue_humano_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqsangue_humano=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqsangue_humano.rows[0].cells[0].children[0].value=newlaudosavaliacoes_sangue_humano_maquinas.get_Unidade(xs);
                     tabelamaqsangue_humano.rows[0].cells[1].children[0].value=newlaudosavaliacoes_sangue_humano_maquinas.get_Codigo_setor(xs);
                     tabelamaqsangue_humano.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfuncsangue_humano.children.length>0) divfuncsangue_humano.removeChild(divfuncsangue_humano.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_sangue_humano_funcoes',"Carrega_Avaliacoes_sangue_humano_funcoes",campos_aval_sangue_humano,valores_aval_sangue_humano,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_humano_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_sangue_humano_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_sangue_humano_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncsangue_humano=divfunc2.children[0];
                     tabelafuncsangue_humano.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divsangue_humano);
            
                        
        }
        function imprime_laudos_avaliacoes_sangue_animal(dv){
            divsangue_animal=document.createElement('div');
            divsangue_animal.setAttribute('id','dv_sangue_animal');
            divsangue_animal.setAttribute('border','1');
            divsangue_animal.setAttribute('style','display:block');
            tabelasangue_animal=document.getElementById('tabela_modelo_avaliacao_sangue_animal').cloneNode(true);
            tabelasangue_animal.setAttribute('style','display:block');
            dv.appendChild(divsangue_animal);

                            
            divsangue_animal.appendChild(tabelasangue_animal);
                 campos_aval_sangue_animal=Array();
                 campos_aval_sangue_animal[0]="CODIGO_EMPRESA";
                 campos_aval_sangue_animal[1]="ANO_PERICIA";
                 campos_aval_sangue_animal[2]="NUMERO_LAUDO";
                 campos_aval_sangue_animal[3]="REVISAO";
                 campos_aval_sangue_animal[4]="UNIDADE";
                 campos_aval_sangue_animal[5]="CODIGO_SETOR"
                 valores_aval_sangue_animal=Array();
                 valores_aval_sangue_animal[0]=empresa_ativa;
                 valores_aval_sangue_animal[1]=ano_pericia;
                 valores_aval_sangue_animal[2]=numero_laudo;
                 valores_aval_sangue_animal[3]=revisao;
                 valores_aval_sangue_animal[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_sangue_animal[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_sangue_animal',"Carrega_Avaliacoes_Frio",campos_aval_sangue_animal,valores_aval_sangue_animal,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_animal);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_sangue_animal_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_sangue_animal','table');
                 //tabelasangue_animal=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_sangue_animal.length();xs++){
                  tabelasangue_animal.rows[1].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Tipo_avaliacao(xs);
                  tabelasangue_animal.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_sangue_animal.get_Texto_explicativo(xs);
                  tabelasangue_animal.rows[4].cells[0].children[0].value=newlaudosavaliacoes_sangue_animal.get_Unidade(xs);
                  tabelasangue_animal.rows[4].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Codigo_setor(xs);
                  tabelasangue_animal.rows[5].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Periodicidade_exposicao(xs);
                  tabelasangue_animal.rows[6].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Numero_funcs_setor(xs);
                  tabelasangue_animal.rows[7].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Numero_funcs_expostos(xs);
                  tabelasangue_animal.rows[10].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Medidas_protecao_coletiva(xs);
                  tabelasangue_animal.rows[10].cells[2].children[0].value=newlaudosavaliacoes_sangue_animal.get_Medidas_protecao_coletiva_outros(xs);
                  tabelasangue_animal.rows[11].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Medidas_protecao_individual(xs);
                  tabelasangue_animal.rows[11].cells[2].children[0].value=newlaudosavaliacoes_sangue_animal.get_Medidas_protecao_individual_outros(xs);
                  tabelasangue_animal.rows[12].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal.get_Fonte_geradora(xs);
                  tabelasangue_animal.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_sangue_animal.get_Enquadramento(xs);
                  
                 }
               
                 divmaqsangue_animal=tabelasangue_animal.rows[9].cells[0].children[0];
                 divmaq=divmaqsangue_animal.children[0].cloneNode(true);
                 while (divmaqsangue_animal.children.length>0) divmaqsangue_animal.removeChild(divmaqsangue_animal.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_sangue_animal_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_sangue_animal,valores_aval_sangue_animal,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_animal_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_sangue_animal_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_sangue_animal_maquinas.get_Unidade(xs),newlaudosavaliacoes_sangue_animal_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_sangue_animal_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqsangue_animal=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqsangue_animal.rows[0].cells[0].children[0].value=newlaudosavaliacoes_sangue_animal_maquinas.get_Unidade(xs);
                     tabelamaqsangue_animal.rows[0].cells[1].children[0].value=newlaudosavaliacoes_sangue_animal_maquinas.get_Codigo_setor(xs);
                     tabelamaqsangue_animal.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfuncsangue_animal.children.length>0) divfuncsangue_animal.removeChild(divfuncsangue_animal.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_sangue_animal_funcoes',"Carrega_Avaliacoes_sangue_animal_funcoes",campos_aval_sangue_animal,valores_aval_sangue_animal,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_sangue_animal_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_sangue_animal_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_sangue_animal_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncsangue_animal=divfunc2.children[0];
                     tabelafuncsangue_animal.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divsangue_animal);
            
                                  
        }
        function imprime_laudos_avaliacoes_manejo_animais(dv){
            divmanejo_animais=document.createElement('div');
            divmanejo_animais.setAttribute('id','dv_manejo_animais');
            divmanejo_animais.setAttribute('border','1');
            divmanejo_animais.setAttribute('style','display:block');
            tabelamanejo_animais=document.getElementById('tabela_modelo_avaliacao_manejo_animais').cloneNode(true);
            tabelamanejo_animais.setAttribute('style','display:block');
            dv.appendChild(divmanejo_animais);

                            
            divmanejo_animais.appendChild(tabelamanejo_animais);
                 campos_aval_manejo_animais=Array();
                 campos_aval_manejo_animais[0]="CODIGO_EMPRESA";
                 campos_aval_manejo_animais[1]="ANO_PERICIA";
                 campos_aval_manejo_animais[2]="NUMERO_LAUDO";
                 campos_aval_manejo_animais[3]="REVISAO";
                 campos_aval_manejo_animais[4]="UNIDADE";
                 campos_aval_manejo_animais[5]="CODIGO_SETOR"
                 valores_aval_manejo_animais=Array();
                 valores_aval_manejo_animais[0]=empresa_ativa;
                 valores_aval_manejo_animais[1]=ano_pericia;
                 valores_aval_manejo_animais[2]=numero_laudo;
                 valores_aval_manejo_animais[3]=revisao;
                 valores_aval_manejo_animais[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_manejo_animais[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_manejo_animais',"Carrega_Avaliacoes_Frio",campos_aval_manejo_animais,valores_aval_manejo_animais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_manejo_animais);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_manejo_animais_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_manejo_animais','table');
                 //tabelamanejo_animais=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_manejo_animais.length();xs++){
                  tabelamanejo_animais.rows[1].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Tipo_avaliacao(xs);
                  tabelamanejo_animais.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_manejo_animais.get_Texto_explicativo(xs);
                  tabelamanejo_animais.rows[4].cells[0].children[0].value=newlaudosavaliacoes_manejo_animais.get_Unidade(xs);
                  tabelamanejo_animais.rows[4].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Codigo_setor(xs);
                  tabelamanejo_animais.rows[5].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Periodicidade_exposicao(xs);
                  tabelamanejo_animais.rows[6].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Numero_funcs_setor(xs);
                  tabelamanejo_animais.rows[7].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Numero_funcs_expostos(xs);
                  tabelamanejo_animais.rows[10].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Medidas_protecao_coletiva(xs);
                  tabelamanejo_animais.rows[10].cells[2].children[0].value=newlaudosavaliacoes_manejo_animais.get_Medidas_protecao_coletiva_outros(xs);
                  tabelamanejo_animais.rows[11].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Medidas_protecao_individual(xs);
                  tabelamanejo_animais.rows[11].cells[2].children[0].value=newlaudosavaliacoes_manejo_animais.get_Medidas_protecao_individual_outros(xs);
                  tabelamanejo_animais.rows[12].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais.get_Fonte_geradora(xs);
                  tabelamanejo_animais.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_manejo_animais.get_Enquadramento(xs);
                  
                 }
               
                 divmaqmanejo_animais=tabelamanejo_animais.rows[9].cells[0].children[0];
                 divmaq=divmaqmanejo_animais.children[0].cloneNode(true);
                 while (divmaqmanejo_animais.children.length>0) divmaqmanejo_animais.removeChild(divmaqmanejo_animais.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_manejo_animais_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_manejo_animais,valores_aval_manejo_animais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_manejo_animais_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_manejo_animais_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_manejo_animais_maquinas.get_Unidade(xs),newlaudosavaliacoes_manejo_animais_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_manejo_animais_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqmanejo_animais=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqmanejo_animais.rows[0].cells[0].children[0].value=newlaudosavaliacoes_manejo_animais_maquinas.get_Unidade(xs);
                     tabelamaqmanejo_animais.rows[0].cells[1].children[0].value=newlaudosavaliacoes_manejo_animais_maquinas.get_Codigo_setor(xs);
                     tabelamaqmanejo_animais.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfuncmanejo_animais.children.length>0) divfuncmanejo_animais.removeChild(divfuncmanejo_animais.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_manejo_animais_funcoes',"Carrega_Avaliacoes_manejo_animais_funcoes",campos_aval_manejo_animais,valores_aval_manejo_animais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_manejo_animais_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_manejo_animais_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_manejo_animais_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncmanejo_animais=divfunc2.children[0];
                     tabelafuncmanejo_animais.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divmanejo_animais);
            
                                  
        }
        function imprime_laudos_avaliacoes_outros_biologicos(dv){
            divoutros_biologicos=document.createElement('div');
            divoutros_biologicos.setAttribute('id','dv_outros_biologicos');
            divoutros_biologicos.setAttribute('border','1');
            divoutros_biologicos.setAttribute('style','display:block');
            tabelaoutros_biologicos=document.getElementById('tabela_modelo_avaliacao_outros_biologicos').cloneNode(true);
            tabelaoutros_biologicos.setAttribute('style','display:block');
            dv.appendChild(divoutros_biologicos);

                            
            divoutros_biologicos.appendChild(tabelaoutros_biologicos);
                 campos_aval_outros_biologicos=Array();
                 campos_aval_outros_biologicos[0]="CODIGO_EMPRESA";
                 campos_aval_outros_biologicos[1]="ANO_PERICIA";
                 campos_aval_outros_biologicos[2]="NUMERO_LAUDO";
                 campos_aval_outros_biologicos[3]="REVISAO";
                 campos_aval_outros_biologicos[4]="UNIDADE";
                 campos_aval_outros_biologicos[5]="CODIGO_SETOR"
                 valores_aval_outros_biologicos=Array();
                 valores_aval_outros_biologicos[0]=empresa_ativa;
                 valores_aval_outros_biologicos[1]=ano_pericia;
                 valores_aval_outros_biologicos[2]=numero_laudo;
                 valores_aval_outros_biologicos[3]=revisao;
                 valores_aval_outros_biologicos[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_outros_biologicos[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_outros_biologicos',"Carrega_Avaliacoes_Frio",campos_aval_outros_biologicos,valores_aval_outros_biologicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_biologicos);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_outros_biologicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_outros_biologicos','table');
                 //tabelaoutros_biologicos=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_biologicos.length();xs++){
                  tabelaoutros_biologicos.rows[1].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Tipo_avaliacao(xs);
                  tabelaoutros_biologicos.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_outros_biologicos.get_Texto_explicativo(xs);
                  tabelaoutros_biologicos.rows[4].cells[0].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Unidade(xs);
                  tabelaoutros_biologicos.rows[4].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Codigo_setor(xs);
                  tabelaoutros_biologicos.rows[5].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Periodicidade_exposicao(xs);
                  tabelaoutros_biologicos.rows[6].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Numero_funcs_setor(xs);
                  tabelaoutros_biologicos.rows[7].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Numero_funcs_expostos(xs);
                  tabelaoutros_biologicos.rows[10].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Medidas_protecao_coletiva(xs);
                  tabelaoutros_biologicos.rows[10].cells[2].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaoutros_biologicos.rows[11].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Medidas_protecao_individual(xs);
                  tabelaoutros_biologicos.rows[11].cells[2].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Medidas_protecao_individual_outros(xs);
                  tabelaoutros_biologicos.rows[12].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos.get_Fonte_geradora(xs);
                  tabelaoutros_biologicos.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_outros_biologicos.get_Enquadramento(xs);
                  
                 }
               
                 divmaqoutros_biologicos=tabelaoutros_biologicos.rows[9].cells[0].children[0];
                 divmaq=divmaqoutros_biologicos.children[0].cloneNode(true);
                 while (divmaqoutros_biologicos.children.length>0) divmaqoutros_biologicos.removeChild(divmaqoutros_biologicos.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_outros_biologicos_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_outros_biologicos,valores_aval_outros_biologicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_biologicos_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_biologicos_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_outros_biologicos_maquinas.get_Unidade(xs),newlaudosavaliacoes_outros_biologicos_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_outros_biologicos_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqoutros_biologicos=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqoutros_biologicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_outros_biologicos_maquinas.get_Unidade(xs);
                     tabelamaqoutros_biologicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_outros_biologicos_maquinas.get_Codigo_setor(xs);
                     tabelamaqoutros_biologicos.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
                     tabelamaqoutros_biologicos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_outros_biologicos_maquinas.get_Nivel_medido(xs);
                     tabelamaqoutros_biologicos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_outros_biologicos_maquinas.get_Nivel_permitido(xs);
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
                 while (divfuncoutros_biologicos.children.length>0) divfuncoutros_biologicos.removeChild(divfuncoutros_biologicos.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_outros_biologicos_funcoes',"Carrega_Avaliacoes_outros_biologicos_funcoes",campos_aval_outros_biologicos,valores_aval_outros_biologicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_biologicos_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_biologicos_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_outros_biologicos_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncoutros_biologicos=divfunc2.children[0];
                     tabelafuncoutros_biologicos.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divoutros_biologicos);
            
                                  
        }
        function imprime_laudos_avaliacoes_produtos_limpeza(dv){
            divprodutos_limpeza=document.createElement('div');
            divprodutos_limpeza.setAttribute('id','dv_produtos_limpeza');
            divprodutos_limpeza.setAttribute('border','1');
            divprodutos_limpeza.setAttribute('style','display:block');
            tabelaprodutos_limpeza=document.getElementById('tabela_modelo_avaliacao_produtos_limpeza').cloneNode(true);
            tabelaprodutos_limpeza.setAttribute('style','display:block');
            dv.appendChild(divprodutos_limpeza);

                            
            divprodutos_limpeza.appendChild(tabelaprodutos_limpeza);
                 campos_aval_produtos_limpeza=Array();
                 campos_aval_produtos_limpeza[0]="CODIGO_EMPRESA";
                 campos_aval_produtos_limpeza[1]="ANO_PERICIA";
                 campos_aval_produtos_limpeza[2]="NUMERO_LAUDO";
                 campos_aval_produtos_limpeza[3]="REVISAO";
                 campos_aval_produtos_limpeza[4]="UNIDADE";
                 campos_aval_produtos_limpeza[5]="CODIGO_SETOR"
                 valores_aval_produtos_limpeza=Array();
                 valores_aval_produtos_limpeza[0]=empresa_ativa;
                 valores_aval_produtos_limpeza[1]=ano_pericia;
                 valores_aval_produtos_limpeza[2]=numero_laudo;
                 valores_aval_produtos_limpeza[3]=revisao;
                 valores_aval_produtos_limpeza[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_produtos_limpeza[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_produtos_limpeza',"Carrega_Avaliacoes_Frio",campos_aval_produtos_limpeza,valores_aval_produtos_limpeza,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_produtos_limpeza);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_produtos_limpeza_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_produtos_limpeza','table');
                 //tabelaprodutos_limpeza=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_produtos_limpeza.length();xs++){
                  tabelaprodutos_limpeza.rows[1].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Tipo_avaliacao(xs);
                  tabelaprodutos_limpeza.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_produtos_limpeza.get_Texto_explicativo(xs);
                  tabelaprodutos_limpeza.rows[4].cells[0].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Unidade(xs);
                  tabelaprodutos_limpeza.rows[4].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Codigo_setor(xs);
                  tabelaprodutos_limpeza.rows[5].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Periodicidade_exposicao(xs);
                  tabelaprodutos_limpeza.rows[6].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Numero_funcs_setor(xs);
                  tabelaprodutos_limpeza.rows[7].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Numero_funcs_expostos(xs);
                  tabelaprodutos_limpeza.rows[10].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Medidas_protecao_coletiva(xs);
                  tabelaprodutos_limpeza.rows[10].cells[2].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaprodutos_limpeza.rows[11].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Medidas_protecao_individual(xs);
                  tabelaprodutos_limpeza.rows[11].cells[2].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Medidas_protecao_individual_outros(xs);
                  tabelaprodutos_limpeza.rows[12].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza.get_Fonte_geradora(xs);
                  tabelaprodutos_limpeza.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_produtos_limpeza.get_Enquadramento(xs);
                  
                 }
               
                 divmaqprodutos_limpeza=tabelaprodutos_limpeza.rows[9].cells[0].children[0];
                 divmaq=divmaqprodutos_limpeza.children[0].cloneNode(true);
                 while (divmaqprodutos_limpeza.children.length>0) divmaqprodutos_limpeza.removeChild(divmaqprodutos_limpeza.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_produtos_limpeza_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_produtos_limpeza,valores_aval_produtos_limpeza,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_produtos_limpeza_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_produtos_limpeza_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_produtos_limpeza_maquinas.get_Unidade(xs),newlaudosavaliacoes_produtos_limpeza_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_produtos_limpeza_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqprodutos_limpeza=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqprodutos_limpeza.rows[0].cells[0].children[0].value=newlaudosavaliacoes_produtos_limpeza_maquinas.get_Unidade(xs);
                     tabelamaqprodutos_limpeza.rows[0].cells[1].children[0].value=newlaudosavaliacoes_produtos_limpeza_maquinas.get_Codigo_setor(xs);
                     tabelamaqprodutos_limpeza.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfuncprodutos_limpeza.children.length>0) divfuncprodutos_limpeza.removeChild(divfuncprodutos_limpeza.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_produtos_limpeza_funcoes',"Carrega_Avaliacoes_produtos_limpeza_funcoes",campos_aval_produtos_limpeza,valores_aval_produtos_limpeza,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_produtos_limpeza_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_produtos_limpeza_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_produtos_limpeza_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncprodutos_limpeza=divfunc2.children[0];
                     tabelafuncprodutos_limpeza.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divprodutos_limpeza);
            
        }
        function imprime_laudos_avaliacoes_tintas_solventes(dv){
            divtintas_solventes=document.createElement('div');
            divtintas_solventes.setAttribute('id','dv_tintas_solventes');
            divtintas_solventes.setAttribute('border','1');
            divtintas_solventes.setAttribute('style','display:block');
            tabelatintas_solventes=document.getElementById('tabela_modelo_avaliacao_tintas_solventes').cloneNode(true);
            tabelatintas_solventes.setAttribute('style','display:block');
            dv.appendChild(divtintas_solventes);

                            
            divtintas_solventes.appendChild(tabelatintas_solventes);
                 campos_aval_tintas_solventes=Array();
                 campos_aval_tintas_solventes[0]="CODIGO_EMPRESA";
                 campos_aval_tintas_solventes[1]="ANO_PERICIA";
                 campos_aval_tintas_solventes[2]="NUMERO_LAUDO";
                 campos_aval_tintas_solventes[3]="REVISAO";
                 campos_aval_tintas_solventes[4]="UNIDADE";
                 campos_aval_tintas_solventes[5]="CODIGO_SETOR"
                 valores_aval_tintas_solventes=Array();
                 valores_aval_tintas_solventes[0]=empresa_ativa;
                 valores_aval_tintas_solventes[1]=ano_pericia;
                 valores_aval_tintas_solventes[2]=numero_laudo;
                 valores_aval_tintas_solventes[3]=revisao;
                 valores_aval_tintas_solventes[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_tintas_solventes[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_tintas_solventes',"Carrega_Avaliacoes_Frio",campos_aval_tintas_solventes,valores_aval_tintas_solventes,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_tintas_solventes);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_tintas_solventes_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_tintas_solventes','table');
                 //tabelatintas_solventes=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_tintas_solventes.length();xs++){
                  tabelatintas_solventes.rows[1].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Tipo_avaliacao(xs);
                  tabelatintas_solventes.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_tintas_solventes.get_Texto_explicativo(xs);
                  tabelatintas_solventes.rows[4].cells[0].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Unidade(xs);
                  tabelatintas_solventes.rows[4].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Codigo_setor(xs);
                  tabelatintas_solventes.rows[5].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Periodicidade_exposicao(xs);
                  tabelatintas_solventes.rows[6].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Numero_funcs_setor(xs);
                  tabelatintas_solventes.rows[7].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Numero_funcs_expostos(xs);
                  tabelatintas_solventes.rows[10].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Medidas_protecao_coletiva(xs);
                  tabelatintas_solventes.rows[10].cells[2].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Medidas_protecao_coletiva_outros(xs);
                  tabelatintas_solventes.rows[11].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Medidas_protecao_individual(xs);
                  tabelatintas_solventes.rows[11].cells[2].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Medidas_protecao_individual_outros(xs);
                  tabelatintas_solventes.rows[12].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes.get_Fonte_geradora(xs);
                  tabelatintas_solventes.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_tintas_solventes.get_Enquadramento(xs);
                  
                 }
               
                 divmaqtintas_solventes=tabelatintas_solventes.rows[9].cells[0].children[0];
                 divmaq=divmaqtintas_solventes.children[0].cloneNode(true);
                 while (divmaqtintas_solventes.children.length>0) divmaqtintas_solventes.removeChild(divmaqtintas_solventes.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_tintas_solventes_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_tintas_solventes,valores_aval_tintas_solventes,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_tintas_solventes_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_tintas_solventes_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_tintas_solventes_maquinas.get_Unidade(xs),newlaudosavaliacoes_tintas_solventes_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_tintas_solventes_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqtintas_solventes=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqtintas_solventes.rows[0].cells[0].children[0].value=newlaudosavaliacoes_tintas_solventes_maquinas.get_Unidade(xs);
                     tabelamaqtintas_solventes.rows[0].cells[1].children[0].value=newlaudosavaliacoes_tintas_solventes_maquinas.get_Codigo_setor(xs);
                     tabelamaqtintas_solventes.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfunctintas_solventes.children.length>0) divfunctintas_solventes.removeChild(divfunctintas_solventes.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_tintas_solventes_funcoes',"Carrega_Avaliacoes_tintas_solventes_funcoes",campos_aval_tintas_solventes,valores_aval_tintas_solventes,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_tintas_solventes_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_tintas_solventes_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_tintas_solventes_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafunctintas_solventes=divfunc2.children[0];
                     tabelafunctintas_solventes.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divtintas_solventes);
            
            
        }
        function imprime_laudos_avaliacoes_hidrocarbonetos(dv){
            divhidrocarbonetos=document.createElement('div');
            divhidrocarbonetos.setAttribute('id','dv_hidrocarbonetos');
            divhidrocarbonetos.setAttribute('border','1');
            divhidrocarbonetos.setAttribute('style','display:block');
            tabelahidrocarbonetos=document.getElementById('tabela_modelo_avaliacao_hidrocarbonetos_aromaticos').cloneNode(true);
            tabelahidrocarbonetos.setAttribute('style','display:block');
            dv.appendChild(divhidrocarbonetos);

                            
            divhidrocarbonetos.appendChild(tabelahidrocarbonetos);
                 campos_aval_hidrocarbonetos=Array();
                 campos_aval_hidrocarbonetos[0]="CODIGO_EMPRESA";
                 campos_aval_hidrocarbonetos[1]="ANO_PERICIA";
                 campos_aval_hidrocarbonetos[2]="NUMERO_LAUDO";
                 campos_aval_hidrocarbonetos[3]="REVISAO";
                 campos_aval_hidrocarbonetos[4]="UNIDADE";
                 campos_aval_hidrocarbonetos[5]="CODIGO_SETOR"
                 valores_aval_hidrocarbonetos=Array();
                 valores_aval_hidrocarbonetos[0]=empresa_ativa;
                 valores_aval_hidrocarbonetos[1]=ano_pericia;
                 valores_aval_hidrocarbonetos[2]=numero_laudo;
                 valores_aval_hidrocarbonetos[3]=revisao;
                 valores_aval_hidrocarbonetos[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_hidrocarbonetos[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_hidrocarbonetos',"Carrega_Avaliacoes_Frio",campos_aval_hidrocarbonetos,valores_aval_hidrocarbonetos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_hidrocarbonetos);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_hidrocarbonetos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_hidrocarbonetos','table');
                 //tabelahidrocarbonetos=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_hidrocarbonetos.length();xs++){
                  tabelahidrocarbonetos.rows[1].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Tipo_avaliacao(xs);
                  tabelahidrocarbonetos.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_hidrocarbonetos.get_Texto_explicativo(xs);
                  tabelahidrocarbonetos.rows[4].cells[0].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Unidade(xs);
                  tabelahidrocarbonetos.rows[4].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Codigo_setor(xs);
                  tabelahidrocarbonetos.rows[5].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Periodicidade_exposicao(xs);
                  tabelahidrocarbonetos.rows[6].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Numero_funcs_setor(xs);
                  tabelahidrocarbonetos.rows[7].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Numero_funcs_expostos(xs);
                  tabelahidrocarbonetos.rows[10].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Medidas_protecao_coletiva(xs);
                  tabelahidrocarbonetos.rows[10].cells[2].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Medidas_protecao_coletiva_outros(xs);
                  tabelahidrocarbonetos.rows[11].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Medidas_protecao_individual(xs);
                  tabelahidrocarbonetos.rows[11].cells[2].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Medidas_protecao_individual_outros(xs);
                  tabelahidrocarbonetos.rows[12].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos.get_Fonte_geradora(xs);
                  tabelahidrocarbonetos.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_hidrocarbonetos.get_Enquadramento(xs);
                  
                 }
               
                 divmaqhidrocarbonetos=tabelahidrocarbonetos.rows[9].cells[0].children[0];
                 divmaq=divmaqhidrocarbonetos.children[0].cloneNode(true);
                 while (divmaqhidrocarbonetos.children.length>0) divmaqhidrocarbonetos.removeChild(divmaqhidrocarbonetos.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_hidrocarbonetos_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_hidrocarbonetos,valores_aval_hidrocarbonetos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_hidrocarbonetos_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_hidrocarbonetos_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Unidade(xs),newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqhidrocarbonetos=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqhidrocarbonetos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Unidade(xs);
                     tabelamaqhidrocarbonetos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_hidrocarbonetos_maquinas.get_Codigo_setor(xs);
                     tabelamaqhidrocarbonetos.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfunchidrocarbonetos.children.length>0) divfunchidrocarbonetos.removeChild(divfunchidrocarbonetos.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_hidrocarbonetos_funcoes',"Carrega_Avaliacoes_hidrocarbonetos_funcoes",campos_aval_hidrocarbonetos,valores_aval_hidrocarbonetos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_hidrocarbonetos_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_hidrocarbonetos_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_hidrocarbonetos_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafunchidrocarbonetos=divfunc2.children[0];
                     tabelafunchidrocarbonetos.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divhidrocarbonetos);
            
            
        }
        function imprime_laudos_avaliacoes_fumos_metalicos(dv){
            divfumos_metalicos=document.createElement('div');
            divfumos_metalicos.setAttribute('id','dv_fumos_metalicos');
            divfumos_metalicos.setAttribute('border','1');
            divfumos_metalicos.setAttribute('style','display:block');
            tabelafumos_metalicos=document.getElementById('tabela_modelo_avaliacao_fumos_metalicos').cloneNode(true);
            tabelafumos_metalicos.setAttribute('style','display:block');
            dv.appendChild(divfumos_metalicos);

                            
            divfumos_metalicos.appendChild(tabelafumos_metalicos);
                 campos_aval_fumos_metalicos=Array();
                 campos_aval_fumos_metalicos[0]="CODIGO_EMPRESA";
                 campos_aval_fumos_metalicos[1]="ANO_PERICIA";
                 campos_aval_fumos_metalicos[2]="NUMERO_LAUDO";
                 campos_aval_fumos_metalicos[3]="REVISAO";
                 campos_aval_fumos_metalicos[4]="UNIDADE";
                 campos_aval_fumos_metalicos[5]="CODIGO_SETOR"
                 valores_aval_fumos_metalicos=Array();
                 valores_aval_fumos_metalicos[0]=empresa_ativa;
                 valores_aval_fumos_metalicos[1]=ano_pericia;
                 valores_aval_fumos_metalicos[2]=numero_laudo;
                 valores_aval_fumos_metalicos[3]=revisao;
                 valores_aval_fumos_metalicos[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_fumos_metalicos[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_fumos_metalicos',"Carrega_Avaliacoes_Frio",campos_aval_fumos_metalicos,valores_aval_fumos_metalicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_fumos_metalicos);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_fumos_metalicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_fumos_metalicos','table');
                 //tabelafumos_metalicos=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_fumos_metalicos.length();xs++){
                  tabelafumos_metalicos.rows[1].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Tipo_avaliacao(xs);
                  tabelafumos_metalicos.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_fumos_metalicos.get_Texto_explicativo(xs);
                  tabelafumos_metalicos.rows[4].cells[0].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Unidade(xs);
                  tabelafumos_metalicos.rows[4].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Codigo_setor(xs);
                  tabelafumos_metalicos.rows[5].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Periodicidade_exposicao(xs);
                  tabelafumos_metalicos.rows[6].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Numero_funcs_setor(xs);
                  tabelafumos_metalicos.rows[7].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Numero_funcs_expostos(xs);
                  tabelafumos_metalicos.rows[10].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Medidas_protecao_coletiva(xs);
                  tabelafumos_metalicos.rows[10].cells[2].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Medidas_protecao_coletiva_outros(xs);
                  tabelafumos_metalicos.rows[11].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Medidas_protecao_individual(xs);
                  tabelafumos_metalicos.rows[11].cells[2].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Medidas_protecao_individual_outros(xs);
                  tabelafumos_metalicos.rows[12].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos.get_Fonte_geradora(xs);
                  tabelafumos_metalicos.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_fumos_metalicos.get_Enquadramento(xs);
                  
                 }
               
                 divmaqfumos_metalicos=tabelafumos_metalicos.rows[9].cells[0].children[0];
                 divmaq=divmaqfumos_metalicos.children[0].cloneNode(true);
                 while (divmaqfumos_metalicos.children.length>0) divmaqfumos_metalicos.removeChild(divmaqfumos_metalicos.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_fumos_metalicos_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_fumos_metalicos,valores_aval_fumos_metalicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_fumos_metalicos_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_fumos_metalicos_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_fumos_metalicos_maquinas.get_Unidade(xs),newlaudosavaliacoes_fumos_metalicos_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_fumos_metalicos_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqfumos_metalicos=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqfumos_metalicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_fumos_metalicos_maquinas.get_Unidade(xs);
                     tabelamaqfumos_metalicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_fumos_metalicos_maquinas.get_Codigo_setor(xs);
                     tabelamaqfumos_metalicos.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfuncfumos_metalicos.children.length>0) divfuncfumos_metalicos.removeChild(divfuncfumos_metalicos.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_fumos_metalicos_funcoes',"Carrega_Avaliacoes_fumos_metalicos_funcoes",campos_aval_fumos_metalicos,valores_aval_fumos_metalicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_fumos_metalicos_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_fumos_metalicos_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_fumos_metalicos_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncfumos_metalicos=divfunc2.children[0];
                     tabelafuncfumos_metalicos.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divfumos_metalicos);
            
            
        }
        function imprime_laudos_avaliacoes_poeiras_incomodas(dv){
            divpoeiras_incomodas=document.createElement('div');
            divpoeiras_incomodas.setAttribute('id','dv_poeiras_incomodas');
            divpoeiras_incomodas.setAttribute('border','1');
            divpoeiras_incomodas.setAttribute('style','display:block');
            tabelapoeiras_incomodas=document.getElementById('tabela_modelo_avaliacao_poeiras_incomodas').cloneNode(true);
            tabelapoeiras_incomodas.setAttribute('style','display:block');
            dv.appendChild(divpoeiras_incomodas);

                            
            divpoeiras_incomodas.appendChild(tabelapoeiras_incomodas);
                 campos_aval_poeiras_incomodas=Array();
                 campos_aval_poeiras_incomodas[0]="CODIGO_EMPRESA";
                 campos_aval_poeiras_incomodas[1]="ANO_PERICIA";
                 campos_aval_poeiras_incomodas[2]="NUMERO_LAUDO";
                 campos_aval_poeiras_incomodas[3]="REVISAO";
                 campos_aval_poeiras_incomodas[4]="UNIDADE";
                 campos_aval_poeiras_incomodas[5]="CODIGO_SETOR"
                 valores_aval_poeiras_incomodas=Array();
                 valores_aval_poeiras_incomodas[0]=empresa_ativa;
                 valores_aval_poeiras_incomodas[1]=ano_pericia;
                 valores_aval_poeiras_incomodas[2]=numero_laudo;
                 valores_aval_poeiras_incomodas[3]=revisao;
                 valores_aval_poeiras_incomodas[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_poeiras_incomodas[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_poeiras_incomodas',"Carrega_Avaliacoes_Frio",campos_aval_poeiras_incomodas,valores_aval_poeiras_incomodas,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_incomodas);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_poeiras_incomodas_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_poeiras_incomodas','table');
                 //tabelapoeiras_incomodas=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_poeiras_incomodas.length();xs++){
                  tabelapoeiras_incomodas.rows[1].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Tipo_avaliacao(xs);
                  tabelapoeiras_incomodas.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_poeiras_incomodas.get_Texto_explicativo(xs);
                  tabelapoeiras_incomodas.rows[4].cells[0].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Unidade(xs);
                  tabelapoeiras_incomodas.rows[4].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Codigo_setor(xs);
                  tabelapoeiras_incomodas.rows[5].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Periodicidade_exposicao(xs);
                  tabelapoeiras_incomodas.rows[6].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Numero_funcs_setor(xs);
                  tabelapoeiras_incomodas.rows[7].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Numero_funcs_expostos(xs);
                  tabelapoeiras_incomodas.rows[10].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Medidas_protecao_coletiva(xs);
                  tabelapoeiras_incomodas.rows[10].cells[2].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Medidas_protecao_coletiva_outros(xs);
                  tabelapoeiras_incomodas.rows[11].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Medidas_protecao_individual(xs);
                  tabelapoeiras_incomodas.rows[11].cells[2].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Medidas_protecao_individual_outros(xs);
                  tabelapoeiras_incomodas.rows[12].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas.get_Fonte_geradora(xs);
                  tabelapoeiras_incomodas.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_poeiras_incomodas.get_Enquadramento(xs);
                  
                 }
               
                 divmaqpoeiras_incomodas=tabelapoeiras_incomodas.rows[9].cells[0].children[0];
                 divmaq=divmaqpoeiras_incomodas.children[0].cloneNode(true);
                 while (divmaqpoeiras_incomodas.children.length>0) divmaqpoeiras_incomodas.removeChild(divmaqpoeiras_incomodas.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_poeiras_incomodas_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_poeiras_incomodas,valores_aval_poeiras_incomodas,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_incomodas_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_poeiras_incomodas_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Unidade(xs),newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqpoeiras_incomodas=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqpoeiras_incomodas.rows[0].cells[0].children[0].value=newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Unidade(xs);
                     tabelamaqpoeiras_incomodas.rows[0].cells[1].children[0].value=newlaudosavaliacoes_poeiras_incomodas_maquinas.get_Codigo_setor(xs);
                     tabelamaqpoeiras_incomodas.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfuncpoeiras_incomodas.children.length>0) divfuncpoeiras_incomodas.removeChild(divfuncpoeiras_incomodas.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_poeiras_incomodas_funcoes',"Carrega_Avaliacoes_poeiras_incomodas_funcoes",campos_aval_poeiras_incomodas,valores_aval_poeiras_incomodas,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_incomodas_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_poeiras_incomodas_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_poeiras_incomodas_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncpoeiras_incomodas=divfunc2.children[0];
                     tabelafuncpoeiras_incomodas.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divpoeiras_incomodas);
            
            
        }
        function imprime_laudos_avaliacoes_poeiras_minerais(dv){
            divpoeiras_minerais=document.createElement('div');
            divpoeiras_minerais.setAttribute('id','dv_poeiras_minerais');
            divpoeiras_minerais.setAttribute('border','1');
            divpoeiras_minerais.setAttribute('style','display:block');
            tabelapoeiras_minerais=document.getElementById('tabela_modelo_avaliacao_poeiras_minerais').cloneNode(true);
            tabelapoeiras_minerais.setAttribute('style','display:block');
            dv.appendChild(divpoeiras_minerais);

                            
            divpoeiras_minerais.appendChild(tabelapoeiras_minerais);
                 campos_aval_poeiras_minerais=Array();
                 campos_aval_poeiras_minerais[0]="CODIGO_EMPRESA";
                 campos_aval_poeiras_minerais[1]="ANO_PERICIA";
                 campos_aval_poeiras_minerais[2]="NUMERO_LAUDO";
                 campos_aval_poeiras_minerais[3]="REVISAO";
                 campos_aval_poeiras_minerais[4]="UNIDADE";
                 campos_aval_poeiras_minerais[5]="CODIGO_SETOR"
                 valores_aval_poeiras_minerais=Array();
                 valores_aval_poeiras_minerais[0]=empresa_ativa;
                 valores_aval_poeiras_minerais[1]=ano_pericia;
                 valores_aval_poeiras_minerais[2]=numero_laudo;
                 valores_aval_poeiras_minerais[3]=revisao;
                 valores_aval_poeiras_minerais[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_poeiras_minerais[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_poeiras_minerais',"Carrega_Avaliacoes_Frio",campos_aval_poeiras_minerais,valores_aval_poeiras_minerais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_minerais);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_poeiras_minerais_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_poeiras_minerais','table');
                 //tabelapoeiras_minerais=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_poeiras_minerais.length();xs++){
                  tabelapoeiras_minerais.rows[1].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Tipo_avaliacao(xs);
                  tabelapoeiras_minerais.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_poeiras_minerais.get_Texto_explicativo(xs);
                  tabelapoeiras_minerais.rows[4].cells[0].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Unidade(xs);
                  tabelapoeiras_minerais.rows[4].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Codigo_setor(xs);
                  tabelapoeiras_minerais.rows[5].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Periodicidade_exposicao(xs);
                  tabelapoeiras_minerais.rows[6].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Numero_funcs_setor(xs);
                  tabelapoeiras_minerais.rows[7].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Numero_funcs_expostos(xs);
                  tabelapoeiras_minerais.rows[10].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Medidas_protecao_coletiva(xs);
                  tabelapoeiras_minerais.rows[10].cells[2].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Medidas_protecao_coletiva_outros(xs);
                  tabelapoeiras_minerais.rows[11].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Medidas_protecao_individual(xs);
                  tabelapoeiras_minerais.rows[11].cells[2].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Medidas_protecao_individual_outros(xs);
                  tabelapoeiras_minerais.rows[12].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais.get_Fonte_geradora(xs);
                  tabelapoeiras_minerais.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_poeiras_minerais.get_Enquadramento(xs);
                  
                 }
               
                 divmaqpoeiras_minerais=tabelapoeiras_minerais.rows[9].cells[0].children[0];
                 divmaq=divmaqpoeiras_minerais.children[0].cloneNode(true);
                 while (divmaqpoeiras_minerais.children.length>0) divmaqpoeiras_minerais.removeChild(divmaqpoeiras_minerais.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_poeiras_minerais_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_poeiras_minerais,valores_aval_poeiras_minerais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_minerais_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_poeiras_minerais_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_poeiras_minerais_maquinas.get_Unidade(xs),newlaudosavaliacoes_poeiras_minerais_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_poeiras_minerais_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqpoeiras_minerais=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqpoeiras_minerais.rows[0].cells[0].children[0].value=newlaudosavaliacoes_poeiras_minerais_maquinas.get_Unidade(xs);
                     tabelamaqpoeiras_minerais.rows[0].cells[1].children[0].value=newlaudosavaliacoes_poeiras_minerais_maquinas.get_Codigo_setor(xs);
                     tabelamaqpoeiras_minerais.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
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
                 while (divfuncpoeiras_minerais.children.length>0) divfuncpoeiras_minerais.removeChild(divfuncpoeiras_minerais.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_poeiras_minerais_funcoes',"Carrega_Avaliacoes_poeiras_minerais_funcoes",campos_aval_poeiras_minerais,valores_aval_poeiras_minerais,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_poeiras_minerais_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_poeiras_minerais_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_poeiras_minerais_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncpoeiras_minerais=divfunc2.children[0];
                     tabelafuncpoeiras_minerais.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divpoeiras_minerais);
            
            
            
        }
        function imprime_laudos_avaliacoes_outros_quimicos(dv){
            divoutros_quimicos=document.createElement('div');
            divoutros_quimicos.setAttribute('id','dv_outros_quimicos');
            divoutros_quimicos.setAttribute('border','1');
            divoutros_quimicos.setAttribute('style','display:block');
            tabelaoutros_quimicos=document.getElementById('tabela_modelo_avaliacao_outros_quimicos').cloneNode(true);
            tabelaoutros_quimicos.setAttribute('style','display:block');
            dv.appendChild(divoutros_quimicos);

                            
            divoutros_quimicos.appendChild(tabelaoutros_quimicos);
                 campos_aval_outros_quimicos=Array();
                 campos_aval_outros_quimicos[0]="CODIGO_EMPRESA";
                 campos_aval_outros_quimicos[1]="ANO_PERICIA";
                 campos_aval_outros_quimicos[2]="NUMERO_LAUDO";
                 campos_aval_outros_quimicos[3]="REVISAO";
                 campos_aval_outros_quimicos[4]="UNIDADE";
                 campos_aval_outros_quimicos[5]="CODIGO_SETOR"
                 valores_aval_outros_quimicos=Array();
                 valores_aval_outros_quimicos[0]=empresa_ativa;
                 valores_aval_outros_quimicos[1]=ano_pericia;
                 valores_aval_outros_quimicos[2]=numero_laudo;
                 valores_aval_outros_quimicos[3]=revisao;
                 valores_aval_outros_quimicos[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_outros_quimicos[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                     
		 buscar_registros(window,'laudos_avaliacoes_outros_quimicos',"Carrega_Avaliacoes_Frio",campos_aval_outros_quimicos,valores_aval_outros_quimicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_quimicos);
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_outros_quimicos_'+newlaudostipoaval.get_Tipo_avaliacao(l).toString().toLowerCase()+"_0",'table');
                 //indice=localizar_indice_componente(dv,'tabela_modelo_avaliacao_outros_quimicos','table');
                 //tabelaoutros_quimicos=dv.getElementsByTagName('table')[indice];
                 
                 
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_quimicos.length();xs++){
                  tabelaoutros_quimicos.rows[1].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Tipo_avaliacao(xs);
                  tabelaoutros_quimicos.rows[3].cells[0].children[0].innerHTML=newlaudosavaliacoes_outros_quimicos.get_Texto_explicativo(xs);
                  tabelaoutros_quimicos.rows[4].cells[0].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Unidade(xs);
                  tabelaoutros_quimicos.rows[4].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Codigo_setor(xs);
                  tabelaoutros_quimicos.rows[5].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Periodicidade_exposicao(xs);
                  tabelaoutros_quimicos.rows[6].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Numero_funcs_setor(xs);
                  tabelaoutros_quimicos.rows[7].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Numero_funcs_expostos(xs);
                  tabelaoutros_quimicos.rows[10].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Medidas_protecao_coletiva(xs);
                  tabelaoutros_quimicos.rows[10].cells[2].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Medidas_protecao_coletiva_outros(xs);
                  tabelaoutros_quimicos.rows[11].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Medidas_protecao_individual(xs);
                  tabelaoutros_quimicos.rows[11].cells[2].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Medidas_protecao_individual_outros(xs);
                  tabelaoutros_quimicos.rows[12].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos.get_Fonte_geradora(xs);
                  tabelaoutros_quimicos.rows[13].cells[1].children[0].innerHTML=newlaudosavaliacoes_outros_quimicos.get_Enquadramento(xs);
                  
                 }
               
                 divmaqoutros_quimicos=tabelaoutros_quimicos.rows[9].cells[0].children[0];
                 divmaq=divmaqoutros_quimicos.children[0].cloneNode(true);
                 while (divmaqoutros_quimicos.children.length>0) divmaqoutros_quimicos.removeChild(divmaqoutros_quimicos.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_outros_quimicos_maquinas',"Carrega_Avaliacoes_Frio_Maquinas",campos_aval_outros_quimicos,valores_aval_outros_quimicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_quimicos_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_quimicos_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_outros_quimicos_maquinas.get_Unidade(xs),newlaudosavaliacoes_outros_quimicos_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_outros_quimicos_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqoutros_quimicos=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqoutros_quimicos.rows[0].cells[0].children[0].value=newlaudosavaliacoes_outros_quimicos_maquinas.get_Unidade(xs);
                     tabelamaqoutros_quimicos.rows[0].cells[1].children[0].value=newlaudosavaliacoes_outros_quimicos_maquinas.get_Codigo_setor(xs);
                     tabelamaqoutros_quimicos.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
                     tabelamaqoutros_quimicos.rows[0].cells[3].children[0].value=newlaudosavaliacoes_outros_quimicos_maquinas.get_Densidade_medida(xs);
                     tabelamaqoutros_quimicos.rows[0].cells[4].children[0].value=newlaudosavaliacoes_outros_quimicos_maquinas.get_Densidade_permitida(xs);
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
                 while (divfuncoutros_quimicos.children.length>0) divfuncoutros_quimicos.removeChild(divfuncoutros_quimicos.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_outros_quimicos_funcoes',"Carrega_Avaliacoes_outros_quimicos_funcoes",campos_aval_outros_quimicos,valores_aval_outros_quimicos,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_outros_quimicos_funcoes);
                 
                 for (xs=0;xs<newlaudosavaliacoes_outros_quimicos_funcoes.length();xs++){
                     buscar_registro(window,Array('CODIGO_EMPRESA','CODIGO_FUNCAO'),Array(empresa_ativa,newlaudosavaliacoes_outros_quimicos_funcoes.get_Codigo_funcao(xs)),Array('=','='),'funcoes','funcoes','Busca_Funcao',false,newfunc);
                     
                     divfunc2=divfunc.cloneNode(true);
                     
                     tabelafuncoutros_quimicos=divfunc2.children[0];
                     tabelafuncoutros_quimicos.rows[0].cells[0].children[0].value=newfunc.get_Descricao();
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
                 
                 dv.appendChild(divoutros_quimicos);
            
            
        }
        function imprime_laudos_avaliacoes_iluminamento(dv){
            diviluminamento=document.createElement('div');
            dv.setAttribute('id','avaliacao');
            diviluminamento.setAttribute('id','dv_iluminamento');
            diviluminamento.setAttribute('border','1');
            diviluminamento.setAttribute('style','display:block');
            tabelailuminamento=document.getElementById('tabela_modelo_avaliacao_iluminamento').cloneNode(true);
            tabelailuminamento.setAttribute('style','display:block');
            dvx=document.createElement('div');
            dv.appendChild(dvx);
            und=document.createElement()
                            
            diviluminamento.appendChild(tabelailuminamento);
                 campos_aval_iluminamento=Array();
                 campos_aval_iluminamento[0]="CODIGO_EMPRESA";
                 campos_aval_iluminamento[1]="ANO_PERICIA";
                 campos_aval_iluminamento[2]="NUMERO_LAUDO";
                 campos_aval_iluminamento[3]="REVISAO";
                 campos_aval_iluminamento[4]="UNIDADE";
                 campos_aval_iluminamento[5]="CODIGO_SETOR"
                 valores_aval_iluminamento=Array();
                 valores_aval_iluminamento[0]=empresa_ativa;
                 valores_aval_iluminamento[1]=ano_pericia;
                 valores_aval_iluminamento[2]=numero_laudo;
                 valores_aval_iluminamento[3]=revisao;
                 valores_aval_iluminamento[4]=newlaudosavaliacoes.get_Unidade(xk);
                 valores_aval_iluminamento[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                 
		 buscar_registros(window,'laudos_avaliacoes_iluminamento',"Carrega_Avaliacoes_iluminamento",campos_aval_iluminamento,valores_aval_iluminamento,false,Array('=','=','=','=','=','='),newlaudoavaliluminamento);
                 
                 for (xs=0;xs<newlaudoavaliluminamento.length();xs++){
                  tabelailuminamento.rows[1].cells[1].children[0].value=newlaudoavaliluminamento.get_Tipo_avaliacao(xs);
                  tabelailuminamento.rows[3].cells[0].children[0].innerHTML=newlaudoavaliluminamento.get_Texto_explicativo(xs);
                  tabelailuminamento.rows[4].cells[3].children[0].value=newlaudoavaliluminamento.get_Unidade(xs);
                  tabelailuminamento.rows[4].cells[4].children[0].value=newlaudoavaliluminamento.get_Codigo_setor(xs);
                  tabelailuminamento.rows[4].cells[1].children[0].value=newlaudoavaliluminamento.get_Periodicidade_exposicao(xs);
                  tabelailuminamento.rows[5].cells[1].children[0].value=newlaudoavaliluminamento.get_Numero_funcs_setor(xs);
                  tabelailuminamento.rows[7].cells[1].children[0].value=newlaudoavaliluminamento.get_Numero_funcs_expostos(xs);
/*                  tabelailuminamento.rows[11].cells[1].children[0].value=newlaudoavaliluminamento.get_Medidas_protecao_coletiva(xs);
                  tabelailuminamento.rows[11].cells[1].children[1].value=newlaudoavaliluminamento.get_Medidas_protecao_coletiva_outros(xs);
                  tabelailuminamento.rows[12].cells[1].children[0].value=newlaudoavaliluminamento.get_Medidas_protecao_individual(xs);
                  tabelailuminamento.rows[12].cells[2].children[0].value=newlaudoavaliluminamento.get_Medidas_protecao_individual_outros(xs);*/
                  tabelailuminamento.rows[11].cells[1].children[0].value=newlaudoavaliluminamento.get_Fonte_geradora(xs);
                  tabelailuminamento.rows[12].cells[1].children[0].innerHTML=newlaudoavaliluminamento.get_Enquadramento(xs);
                  
                 }
                  
                 divmaqiluminamento=tabelailuminamento.rows[9].cells[0].children[0];
                 divmaq=divmaqiluminamento.children[0].cloneNode(true);
                 while (divmaqiluminamento.children.length>0) divmaqiluminamento.removeChild(divmaqiluminamento.children[0]);
                 buscar_registros(window,'laudos_avaliacoes_iluminamento_maquinas',"Carrega_Avaliacoes_Iluminamento_Maquinas",campos_aval_iluminamento,valores_aval_iluminamento,false,Array('=','=','=','=','=','='),newlaudosavaliacoes_iluminamento_maquinas);
                 
                 for (xs=0;xs<newlaudosavaliacoes_iluminamento_maquinas.length();xs++){
                     buscar_registro(window,Array('UNIDADE','CODIGO_SETOR','CODIGO_MAQUINA'),Array(newlaudosavaliacoes_iluminamento_maquinas.get_Unidade(xs),newlaudosavaliacoes_iluminamento_maquinas.get_Codigo_setor(xs),newlaudosavaliacoes_iluminamento_maquinas.get_Codigo_maquina(xs)),Array('=','=','=','=','='),'maquinas','maquinas','Busca_Maquina',false,newmaquina);
                     
                     divmaq2=divmaq.cloneNode(true);
                     
                     tabelamaqiluminamento=divmaq2.getElementsByTagName('table')[0];
                     tabelamaqiluminamento.rows[0].cells[0].children[0].value=newlaudosavaliacoes_iluminamento_maquinas.get_Unidade(xs);
                     tabelamaqiluminamento.rows[0].cells[1].children[0].value=newlaudosavaliacoes_iluminamento_maquinas.get_Codigo_setor(xs);
                     tabelamaqiluminamento.rows[0].cells[2].children[0].value=newmaquina.get_Nome();
                     tabelamaqiluminamento.rows[0].cells[3].children[0].value=newlaudosavaliacoes_iluminamento_maquinas.get_Lux_medido(xs);
                     tabelamaqiluminamento.rows[0].cells[4].children[0].value=newlaudosavaliacoes_iluminamento_maquinas.get_Lux_nbr(xs);
                     divmaqiluminamento.appendChild(divmaq2);
                     
                 }
                 
                 dv.appendChild(diviluminamento);
        }
        
</script>
</head>

<body onload="report_onload()">
<form width="1009">
    <button type="Button" onclick="window.print();">Enviar para impressora</button>    
    <div id="div_dados_empresa">
    <table id="tbl_dados_empresa" border="1" cellspacing="0" cellpadding="0" width="1009">
    <tr>
      <td colspan="2" rowspan="4" valign="top"><h2>&nbsp;Laudo T&eacute;cnico de Condi&ccedil;&otilde;es </h2>
      <h2>Ambientais do Trabalho </h2></td>
      <td><strong>Ano Per&iacute;cia</strong></td>
      <td style="font-size:12px"><h2>&nbsp;</h2></td>
    </tr>
    <tr>
    <td width="234"><p><strong>N&uacute;mero Laudo: </strong><br />
    </p></td>
      <td width="213" style="font-size:12px"><h2>000</h2></td>
  </tr>
  <tr>
    <td height="29"><strong>Revis&atilde;o:</strong></td>
    <td width="213" style="font-size:12px"><h2>&nbsp;</h2></td>
  </tr>
  <tr>
    <td><strong>Data:&nbsp;</strong></td>
    <td width="213"  style="font-size:12px"><h2>&nbsp;</h2></td>
  </tr>
  <tr>
    <td colspan="4" valign="top" id="dados_empresa"><p class="titulo_grupo_centralizado" ><strong>1 &ndash; DADOS DA EMPRESA</strong></p></td>
  </tr>
  <tr>
    <td width="393" valign="bottom"><p><strong>&nbsp;C.N.P.J</strong></p></td>
    <td colspan="3" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="393" valign="bottom"><p><strong>RAZ&Atilde;O SOCIAL</strong></p></td>
    <td colspan="3" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="393" valign="bottom"><p><strong>&nbsp;C.N.A.E. </strong></p></td>
    <td colspan="3" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td valign="bottom"><strong>&nbsp;GRAU DE RISCO</strong></td>
    <td colspan="3" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="393" valign="bottom"><p><strong>&nbsp;ENDERE&Ccedil;O</strong></p></td>
    <td colspan="3" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="393" valign="bottom"><p><strong>&nbsp;BAIRRO</strong></p></td>
    <td colspan="3" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="393" valign="bottom"><p><strong>&nbsp;C.E.P</strong></p></td>
    <td colspan="3" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="393" valign="bottom"><p><strong>&nbsp;MUNIC&Iacute;PIO</strong></p></td>
    <td colspan="3" valign="bottom"><p align="left"></p></td>
  </tr>
</table>
    </div>
    <div id="div_dados_informante">
<table border="1" cellspacing="0" cellpadding="0" width="1009">
  <tr>
    <td colspan="2" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" valign="top" id="dados_informante"><p class="titulo_grupo_centralizado"><strong>2 &ndash; DADOS DO INFORMANTE</strong></p></td>
  </tr>
  <tr>
    <td width="531"><p><strong>&nbsp;Acompanhante / Fun&ccedil;&atilde;o</strong></p></td>
    <td width="448" valign="top"><p align="left"></p>
    <p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td width="531"><p><strong>Data de Admiss&atilde;o </strong></p></td>
    <td width="448" valign="top"><p align="left"></p>
    </td>
  </tr>
</table>
    </div>
    <div id="div_informacoes_periciais">
<table border="1" cellspacing="0" cellpadding="0" width="1009">
  <tr>
    <td colspan="7" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" valign="top" id="informacoes_periciais"><p class="titulo_grupo_centralizado">3 &ndash; INFORMA&Ccedil;&Otilde;ES PERICIAIS</p></td>
  </tr>
  <tr>
    <td width="202"><h4>Per&iacute;cia    Realizada em</h6></td>
    <td colspan="3" valign="top"><h4 style="text-align:center"></h4></td>
    <td width="147" valign="top"><h4>HOR&Aacute;RIO: </h4></td>
    <td width="524" valign="top">&nbsp;</td>
    <td width="2" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"><p align="center"><strong>Instrumental    utilizado para&nbsp; Avalia&ccedil;&atilde;o de </strong> </p></td>
  </tr>
	<tr></tr>
   
	</table>
         </div>
    <div id="div_metodologia_utilizada">
	<table border="1" cellspacing="0" cellpadding="0" width="1009">
  <tr>
    <td width="310"><strong> Metodologia    Utilizada na
      Per&iacute;cia</strong></p></td>
    <td width="1009" colspan="5" valign="top"><p>Constante da Port. MTb 3214/78 &ndash; Norma Regulamentadora    NR-15. / Fundacentro e ACGIH. Descri&ccedil;&atilde;o detalhada vide levantamentos. </p></td>
  </tr>
</table>
    </div>
    <div id="div_classificacao_exposicao" class="classificacao_exposicao">
<table border="1" cellspacing="0" cellpadding="0" width="1009" id="tbl_classificacao_exposicao">
  <tr>
    <td colspan="2" id="classificacao_exposicao"><p class="titulo_grupo_centralizado">4 &ndash; CLASSIFICA&Ccedil;&Atilde;O DE EXPOSI&Ccedil;&Atilde;O</p></td>
  </tr>
  <tr>
    <td width="480"><h2 align="left">Periodicidade de Exposi&ccedil;&atilde;o</h2>
    </td>
    <td width="499"><strong>Defini&ccedil;&atilde;o</strong></td>
  </tr>
  <tr>
    <td width="480" valign="top"><h2>Permanente </h2></td>
    <td width="499" valign="top">A atividade faz parte da atribui&ccedil;&atilde;o    do cargo e a exposi&ccedil;&atilde;o &eacute; di&aacute;ria.</td>
  </tr>
  <tr>
    <td width="480" valign="top"><h2>Habitual</h2></td>
    <td width="499" valign="top">&nbsp;A atividade faz parte da atribui&ccedil;&atilde;o    do cargo e a exposi&ccedil;&atilde;o &eacute; intercalada, n&atilde;o sendo freq&uuml;ente.</td>
  </tr>
  <tr>
    <td width="480" valign="top"><h2>Intermitente</h2></td>
    <td width="499" valign="top">&nbsp;A atividade n&atilde;o faz parte da atribui&ccedil;&atilde;o    do cargo e a exposi&ccedil;&atilde;o &eacute; intercalada, n&atilde;o sendo freq&uuml;ente.</td>
  </tr>
  <tr>
    <td width="480" valign="bottom"><h2>Eventual</h2></td>
    <td width="499" valign="top">&nbsp;A atividade n&atilde;o faz parte da    atribui&ccedil;&atilde;o do cargo e a exposi&ccedil;&atilde;o &eacute; espor&aacute;dica ou rara.</td>
  </tr>
</table>
    </div>
<div id="div_setores_pericia">
<table border="1" cellspacing="0" cellpadding="0" width="1009">
  <tr>
    <td colspan="3" valign="top" id="caracteristica_setores"><center><p class="titulo_grupo_centralizado"><strong>5 &ndash;    CARACTER&Iacute;STICAS DA CONSTRU&Ccedil;&Atilde;O DOS <br />
             SETORES    OBJETOS DA PER&Iacute;CIA </strong></p></center></td>
  </tr>

</table>


</div>
     <div id='div_setores' style="display:none"  >
   <table border="1" cellspacing="0" cellpadding="0" width="1009" class="setores" >   
  <tr>
    <td width="150"><p><strong>Setor &ndash; </strong></p></td>
    <td colspan="2" valign="top"><h4 align="center"></h4>
    <p><strong></strong></p></td>
  </tr>
    <tr>
    <td width="150"><p><strong>Descri&ccedil;&atilde;o do Setor</strong></p></td>
    <td colspan="2" valign="top"><h4 ></h4>
    <p align="justify"><strong></strong></p></td>
  </tr>
  <tr>
    <td width="150"><p><strong>P&eacute; Direito</strong></p></td>
    <td colspan="2" valign="top">
    <p align="justify"></p></td>
  </tr>       
  <tr>
    <td width="150" valign="bottom"><p><strong>Piso</strong></p></td>
    <td colspan="2" valign="bottom"><p align="justify"></p> </td> 
 </tr>
  <tr>
    <td width="150" valign="bottom"><p><strong>Paredes</strong></p></td>
    <td colspan="2" valign="bottom"><p align="justify"></p>
    </td>
  </tr>
  <tr>
    <td width="150" valign="bottom">
    <p><strong>Cobertura</strong></p></td>
    <td colspan="2" valign="bottom"><p align="justify"></p></td>
  </tr>
  <tr>
    <td width="150" valign="bottom"><p><strong>Ilumina&ccedil;&atilde;o e ventila&ccedil;&atilde;o </strong><br />
            <strong>Natural</strong></p></td>
    <td colspan="2" valign="bottom"><p></p>
    </td>
  </tr>
  <tr>
    <td width="150" valign="bottom">
    <p><strong>Ilumina&ccedil;&atilde;o artificial</strong></p></td>
    <td colspan="2" valign="bottom"><p></p>
    </td>
  </tr>
  <tr>
    <td width="150" height="59" valign="bottom">
    <p><strong>Arranjo F&iacute;sico</strong></p></td>
    <td colspan="2" valign="bottom"><p align="justify"></p>
    </td>
  
  </tr>
       <tr>
       </tr>
       <tr>
       </tr>
</table>
</div> 
<div id="div_atividades_laudo" style="display:none" >
    <table border="1" cellspacing="0" cellpadding="0" width="1009" >
  <tr>
    <td colspan="2" valign="top" class="titulo_grupo_centralizado" id="atividades_funcoes"><p align="center" ><strong>6 &ndash; DESCRI&Ccedil;&Atilde;O DAS ATIVIDADES E FUN&Ccedil;&Otilde;ES</strong><strong> </strong></p></td>
  </tr>
   </table>
</div>
<div id="div_atividades" style="display:none">
  <table border="1" cellspacing="0" cellpadding="0" width="1009" >
  <tr>
    <td width="195" valign="top"><h3 align="center">FUN&ccedil;&otilde;ES 6.1</h3>
    <p align="center">&nbsp;</p></td>
    <td width="782"><p align="center"><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="195" id="atv"><p align="center">&nbsp;</p>
        <p align="justify">&nbsp;</p></td>
    <td width="782" valign="top"><p>&nbsp;</p></td>
  </tr>


</table>
</div>    
<div id="div_ativ_epis" style="display:none;">
<table border="1" id="cabecalho" cellspacing="0" cellpadding="0" width="1009">
  <tr>
    <td colspan="2" valign="top"><p align="center"><strong> RELA&Ccedil;&Atilde;O DE EPIs</strong></p></td>
  </tr>
  <tr>
    <td height="27"><p align="center"><strong>Descri&ccedil;&atilde;o dos EPIs </strong></p>      </td>
    <td width="161"><p align="center"><strong>Numero    do C. A</strong></p></td>
  </tr>
 </table>
  <table border="1" id="detalhes" width="1009">
  <tr>
    <td width="812" >&nbsp;</td>
    <td width="155" >&nbsp;</td>
  </tr>
</table>
</div>    
<div id="div_cnae" style="display:none">
<table border="1" cellspacing="0" cellpadding="0" width="1009" class="descricao_cnae">
  <tr>
    <td width="979" valign="top" class="titulo_grupo_centralizado" id="processo_trabalho"><p align="center"><strong>7&ndash; DESCRI&Ccedil;&Atilde;O DO PROCESSO DE TRABALHO &nbsp;- CNAE</strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="979" valign="top"></td>
  </tr>
</table>


</div>
</form>
    <div id="div_informacoes_complementares">
<table border="1" cellspacing="0" cellpadding="0" width="1009">
  <tr>
    <td colspan="2" valign="top" class="titulo_grupo_esquerda"><p class="titulo_grupo_esquerda">09</p></td>
    <td width="648" valign="top" class="titulo_grupo_direita" id="informacoes_complementares"><p class="titulo_grupo_direita"> &ndash; INFORMA&Ccedil;&Otilde;ES COMPLEMENTARES</p></td>
  </tr>
</table>
</div>
    <div id="div_mudanca_local">
<table border="1" cellspacing="0" cellpadding="0" width="1009">
      <tr>
        <td width="245"><p><strong>Mudan&ccedil;as no local de trabalho:</strong></p></td>
        <td width="733" valign="top"><p>N&atilde;o ocorreram    as que pudessem modificar as avalia&ccedil;&otilde;es ambientais.</p></td>
      </tr>
  <tr>
    <td width="245" class="titulo_grupo_esquerda"><center><p class="titulo_grupo_esquerda">10 </p></center></td>
    <td width="733" class="titulo_grupo_direita" id="responsabilidade_tecnica"><p class="titulo_grupo_direita">&ndash; RESPONSABILIDADE T&Eacute;CNICA DE  AVALIA&Ccedil;&Atilde;O</p></td>
    </tr>
  <tr>
    <td colspan="2"><p>A <strong>XXXXX  &ndash; Prote&ccedil;&atilde;o de Seguran&ccedil;a no Trabalho Ltda.</strong>, CNPJ 02.385.639/0001-68, com  sede &agrave; Rua Floriano Peixoto, 514 &ndash; Esp&iacute;rito Santo do Pinhal estado de S&atilde;o  Paulo, foi contratada para elabora&ccedil;&atilde;o do Laudo T&eacute;cnico Pericial, tendo como  respons&aacute;veis t&eacute;cnicos o <strong>Dr. Cl&aacute;udio  Pereira das Neves, M&eacute;dico Do Trabalho &ndash; CRM &ndash; SP: 31.268/CRM &ndash; MG: 32.668 o Sr.</strong></p></td>
    </tr>
</table>
    </div>
    <div id="div_consideracoes_finais">
<table width="1009" border="1" cellpadding="0" cellspacing="0">
  <tr>
   <td width="388" class="titulo_grupo_esquerda"><p class="titulo_grupo_esquerda">11</p></td>
    <td width="590" class="titulo_grupo_direita" id="consideracoes_legais"><p class="titulo_grupo_direita">&ndash; CONSIDERA&Ccedil;&Otilde;ES LEGAIS</p></td>
  </tr>
  <tr>
    <td colspan="2"><p align="justify">Informamos que para efeitos de <u>co-responsabilidade c&iacute;vel e  criminal</u> que, al&eacute;m dos funcion&aacute;rios da empresa serem obrigados a  seguirem as normas de seguran&ccedil;a, higiene e medicina do trabalho, os  funcion&aacute;rios de prestadores de servi&ccedil;os, aut&ocirc;nomos, profissionais liberais  entre outros que venham desempenhar qualquer atividade nas depend&ecirc;ncias da  empresa, devem seguir tamb&eacute;m as normas legais e internas da empresa, tais  como:&nbsp;&nbsp; </p>
      <p>1 &ndash; Uso obrigat&oacute;rio de  equipamentos de prote&ccedil;&atilde;o individual adequados ao risco <br />
        2 &ndash; Realiza&ccedil;&atilde;o de exames m&eacute;dicos  admissionais, peri&oacute;dicos, de retorno ao trabalho e demissionais. <br />
        3 &ndash; Realiza&ccedil;&atilde;o de exames  complementares&nbsp; </p>
    <p>O n&atilde;o cumprimento das normas de  seguran&ccedil;a, higiene e medicina do trabalho por terceiros &agrave; empresa, podem  acarretar em co-responsabilidade em processos civis e criminais caso este seja  o entendimento da promotoria p&uacute;blica.</p></td>
  </tr>
</table>
    </div>
    <div id="div_conclusao">
<table width="1009" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" class="titulo_grupo_esquerda"><center><p class="titulo_grupo_esquerda">12</p></center></td>
    <td valign="top" class="titulo_grupo_direita" id="conclusao"><p class="titulo_grupo_direita">&ndash;  CONCLUS&Atilde;O</td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p align="justify">O presente Laudo Ambiental, foi executado    de acordo com a <strong><em>Portaria No. 3214/78</em></strong> do MTb e suas respectivas <strong><em>Normas    Regulamentadoras</em></strong>. Informamos que &eacute; proibido o trabalho de menor de    idade em local insalubre, conforme <strong><em>Inciso XXIII do Art. 7&ordm; da Constitui&ccedil;&atilde;o    Federal de 1988, inciso I do caput do Art. 405 da CLT</em>,</strong> mesmo com a    ado&ccedil;&atilde;o de tecnologia de prote&ccedil;&atilde;o individual e ou coletiva.<br />
      Salientamos tamb&eacute;m que a neutraliza&ccedil;&atilde;o dos    riscos gerados pelos agentes ambientais, avaliados neste LTCAT, s&oacute; ser&aacute;    poss&iacute;vel se <strong>for mantido o fornecimento    regular dos epi&acute;s (equipamentos de prote&ccedil;&atilde;o individual)</strong>, devidamente    anotados em fichas de controle individual e com a guarda da nota fiscal de    compra dos mesmos, bem como treinamento sobre uso correto. </p></td>
  </tr>
  <tr>
    <td width="422" valign="top"><p align="center"><strong>Data da Emiss&atilde;o do Laudo</strong></p></td>
    <td width="554" valign="top"><p align="center"><strong>Data  </strong></p></td>
  </tr>
  <tr>
    <td width="422" valign="top"><p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>DR.    </strong><br />
        <strong>M&Eacute;DICO    DO TRABALHO</strong><br />
        <strong>CRM    &ndash;</strong><br />
        <strong>Proseg    &ndash; Prote&ccedil;&atilde;o e Seguran&ccedil;a no Trabalho Ltda.</strong><strong> </strong></p></td>
    <td width="554" valign="top"><p align="center"><strong>ASSINATURA:</strong></p></td>
  </tr>
  <tr>
    <td width="422" valign="top"><p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><br />
        <strong>T&Eacute;CNICO    DE SEG. DO TRABALHO.</strong><br />
        <strong>REG.    </strong><br />
        <strong>Proseg    &ndash; Prote&ccedil;&atilde;o e Seguran&ccedil;a no Trabalho Ltda.</strong><strong> </strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p></td>
    <td width="554" valign="top"><p align="center"><strong>ASSINATURA:</strong></p></td>
  </tr>
  <tr>
    <td width="422" valign="top"><p align="center"><strong>Respons&aacute;veis da Empresa</strong></p></td>
    <td width="554" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="422" valign="top"><p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <h4 align="center">NOME DO REPRESENTANTE LEGAL DA EMPRESA</h4>
      <p align="center"><strong>Nome    da Empresa</strong></p>
      <p align="center"><strong>&nbsp;</strong></p></td>
    <td width="554" valign="top"><p align="center"><strong>ASSINATURA:</strong></p></td>
  </tr>
</table>
    </div>
<p>&nbsp;</p>
    <div id="indice_analitico" style="width:1009px;border:1px solid;display:none">
        <h2><center>Índice Analítico</center></h2>
<ul class="toc">
  <li><h2><a href="#dados_empresa" title="Dados da Empresa"                       >Dados da Empresa......................................................................................</h2></a></li>
  <li><h2><a href="#dados_informante" title="Dados do Informante"                 >Dados do Informante..................................................................................</a></h2></li>
  <li><h2><a href="#informacoes_periciais" title="Informações Periciais"          >Informações Periciais................................................................................</a></h2></li>
  <li><h2><a href="#classificacao_exposicao" title="Classificação de Exposição"   >Classificação de Exposição.....................................................................</a></h2></li>
  <li><h2><a href="#caracteristicas_setores" title="Caracterísitcas dos setores"  >Características da construçao dos setores objetos da perícia...........</a></h2></li>
  <li><h2><a href="#atividades_funcoes" title="Dados das atividades e funções"    >Descriçao das atividades e funções....................................................</a></h2></li>
  <li><h2><a href="#processo_trabalho" title="Descrição do processo de trabalho"  >Descriçao do processo de trabalho......................................................</a></h2></li>
  <li><h2><a href="#avaliacoes_tecnicas" title="Avaliações técnicas do trabalho"  >Avaliações técnicas do trabalho...........................................................</a></h2></li>
  <li><h2><a href="#informacoes_complementares" title="Informaçoes Complementares">Informações Complementares...............................................................</a></h2></li>
  <li><h2><a href="#responsabilidade_tecnica" title="Responsabilidade Técnica"    >Responsabilidade técnica da avaliação...............................................</a></h2></li>
  <li><h2><a href="#consideracoes_legais" title="Considerações Legais"            >Considerações Legais...........................................................................</a></h2></li>
  <li><h2><a href="#conclusao" title="Conclusão"                                  >Conclusão.................................................................................................</a></h2></li>  
</ul>        
    </div>       

</body>
<div id="div_avaliacoes" style="display:none;">
    <table id="tbl_unid_setor" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
        <tr>
            <td>
                <p>Unidade</p>
                <p><strong></strong></p>
            </td>
            <td>
                <p>Setor</p>
                <p><strong></strong></p>
            </td>
        </tr>
    </table>
    <table border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
  <tr>
    <td colspan="2" class="titulo_grupo_centralizado" id="avaliacoes_tecnicas"><p align="center"><strong >8&ndash; AVALIA&Ccedil;&Otilde;ES T&Eacute;CNICAS EXECUTADAS </strong></p></td>
  </tr>
  <tr>
    <td width="237"><p align="center"><strong>Agentes Nocivos</strong></p></td>
    <td width="740"><p align="center"><strong>Fatores de Risco envolvidos na an&aacute;lise </strong></p></td>
  </tr>
  <tr>
    <td width="237"><ul>
      <li><strong>F&iacute;sicos</strong> </li>
    </ul></td>
    <td width="740">
        <p>
           <span >
           <input disabled type="checkbox" id="ruido" value="0" disabled />
           Ru&iacute;do</span><br />
		   <span>
          <input disabled type="checkbox" id="ruido_dosimetria" value="0" disabled />
          Ru&iacute;do Dosimetria</span><br />		  
          <span>
		  <input disabled type="checkbox" id="frio" value="0" disabled />
          Frio</span><br />
		  <span>
          <input disabled type="checkbox" id="calor" value="0" disabled />
          Calor</span><br />
          <span>
		  <input disabled type="checkbox" id="umidade" value="0" disabled />
          Umidade</span><br />
		  <span>
          <input disabled type="checkbox" id="radiacao_nao_ionizante" value="0"  disabled/>
          <strong> </strong>Radi&ccedil;&atilde;o N&atilde;o Ionizante</span><br />
            
			<span>
            <input disabled type="checkbox" id="radiacao_ionizante" value="0" disabled />
            <strong></strong>Radi&ccedil;&atilde;o Ionizante</span><br />
          <span>
		  <input disabled type="checkbox" id="outros_fisicos" value="0" disabled/> 
          Outros </span></p>
        </td>
  </tr>
  <tr>
    <td width="237"><ul>
      <li><strong>Biol&oacute;gicos </strong></li>
    </ul></td>
    <td width="740"><p>
      <span>
	  <input disabled type="checkbox" id="sangue_humano" value="0" disabled/>
      Sangue, flu&iacute;dos e corp&oacute;reos humanos</span><br />
	  <span>
      <input disabled type="checkbox" id="sangue_animal" value="0" disabled/>
      <strong> </strong>Sangue, flu&iacute;dos e corp&oacute;reos de animais</span><br />
      <span>
	  <input disabled type="checkbox" id="manejo_animais" value="0" disabled/>
      <strong> </strong>Manejo de animais.</span><br />
	  <span>
      <input disabled type="checkbox" id="outros_biologicos" value="0" disabled/>
    <strong> </strong>Outros</span> </p></td>
  </tr>
  <tr>
    <td width="237"><ul>
      <li><strong>Qu&iacute;micos</strong> </li>
    </ul>
        <p><strong>&nbsp;</strong></p></td>
    <td width="740"><p>
      <span>
	  <input disabled type="checkbox" id="produtos_limpeza" value="0" disabled />
      <strong> </strong>Produtos de limpeza</span> <br />
	  <span>	
      <input disabled type="checkbox" id="tintas_solventes" value="0" disabled/>
      <strong> </strong>Tintas e Solventes </span><br />
      <span>
	  <input disabled type="checkbox" id="hidrocarbonetos_aromaticos" value="0" disabled />
      <strong> </strong>Hidrocarbonetos Arom&aacute;ticos</span> <br />
	  <span>
      <input disabled type="checkbox" id="fumos_metalicos" value="0" disabled/>
      <strong> </strong>Fumos Met&aacute;licos</span> <br />
	  <span>
      <input disabled type="checkbox" id="poeiras_incomodas" value="0" disabled/>
      <strong> </strong>Poeiras Inc&ocirc;modas </span><br />
	  <span>	
      <input disabled type="checkbox" id="poeiras_minerais" value="0" disabled/>
      <strong> </strong>Poeiras Minerais</span><br />
      <span>
	  <input disabled type="checkbox" id="outros_quimicos" value="0" disabled/>
    <strong> </strong>Outros</span>  </p></td>

	
  </tr>
  <tr>
    <td width="237"><ul>
      <li><strong>Ergon&ocirc;micos </strong></li>
    </ul></td>
    <td width="740"><p>
      <span>
	  <input disabled type="checkbox" id="iluminamento" value="0" disabled/>
    Iluminamento</span></p></td>
	
  </tr>
    
</table>
</div>     

    <table class="tabela" id="tabela_modelo_avaliacao_ruido" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1006">
          <tr>
              <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes F&iacute;sicos Ru&iacute;dos</div></td>
              
          </tr>
          <tr>
            <td colspan="4"><div align="center" ></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_ruido|TIPO_AVALIACAO[]"/></td>
          </tr>

          <tr>
<td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width=1009 ></p></td>
          </tr>
          <tr>            <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_ruido|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_ruido|CODIGO_SETOR[]"/></td>
          </tr>
                    <tr>
            <td  >Periodicidade de exposi&ccedil;&atilde;o </td><td>
			  <input disabled id="laudos_avaliacoes_ruido|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
            </td>
			  </tr>
			  <tr>
                              
            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_ruido|NUMERO_FUNCS_SETOR[]" readonly="readonly" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td> N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input disabled type="text" name="laudos_avaliacoes_ruido|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"  size="6"/></td>
            <td>&nbsp;</td>
          </tr>
          </tr>
<td  colspan="5">
                              <table id="tbl_ruido_funcoes_cabec" style="background: appworkspace " width="1009">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_ruido_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_ruido_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_ruido_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_ruido_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_ruido_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_ruido_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_ruido_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_ruido_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_ruido_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_ruido_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_ruido_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_ruido_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_ruido_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
			  <table id="tbl_cabec_maq" width="1009">
			  <tr><td width="35%">
			  <div align="center"  >Local/M&aacute;quinas e Equipamentos </div></td>
						<td width="15%">N&iacute;vel de Ru&iacute;do Medido(dB)</td>
						<td width="15%">Tempo Exposi&ccedil;&atilde;o Di&aacute;ria (H)</td>													
                                                <td width="15%">N&iacute;vel de Ru&iacute;do NR (dB)</td>
						<td width="20%">Tempo M&aacute;ximo Exposi&ccedil;&atilde;o Di&aacute;ria (H)</td>													
			  </tr>
			 </table>
			 </div>
			 </td>									

          </tr>
                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width=1009 border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_ruido_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_ruido_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="35%"  ><input disabled name="laudos_avaliacoes_ruido_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="15%"  ><input disabled type="text" name="laudos_avaliacoes_ruido_maquinas|NIVEL_RUIDO_MEDIDO[]" value="0" onkeyup="calcular_media_absoluta(this)" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" size="10" /></td>
                                      <td width="15%"  ><input disabled type="text" name="laudos_avaliacoes_ruido_maquinas|TEMPO_EXPOSICAO_DIARIA[]" value="08:00:00" onkeypress="return valida_decimal(this,event)" onblur="formata_hora(this,event)" onkeyup="calcula_exposicao_maxima(this)"  size="8" maxlength="8"/></td>
									  
                                      <td width="15%" ><input disabled type="text" name="laudos_avaliacoes_ruido_maquinas|NIVEL_RUIDO_PERMITIDO[]" readonly value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" size="10" /></td>
                                      <td width="20%"  ><input disabled type="text" name="laudos_avaliacoes_ruido_maquinas|TEMPO_MAXIMO_EXPOSICAO_DIARIA[]"  value="08:00:00" onkeypress="return valida_decimal(this,event)"  size="10"/></td>
									  
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>

          </tr>
		  <tr><td width="55%" >Campo Ac&uacute;stico</td>
		  <td width="45" colspan="3"><input disabled type="text" size="5" value="0" name="laudos_avaliacoes_ruido|CAMPO_ACUSTICO_MEDIDO[]"/>dB(A)</td>
		  </tr>
		  <tr><td >Nivel Atenua&ccedil;&atilde;o do protetor auricular</td>
		  <td colspan="3"><input disabled type="text" size="5" value="0" name="laudos_avaliacoes_ruido|NIVEL_ATENUACAO_PROTETOR[]"/>dB</td>		  
		  </tr>
                  <tr><td >Nivel de Ru&iacute;do atenuado</td>
		  <td colspan="3"><input disabled type="text" size="5" value="0" name="laudos_avaliacoes_ruido|NIVEL_RUIDO_ATENUADO[]"/>dB</td>		  
		  </tr>	
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td ><input disabled name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_COLETIVA[]"/>

                        <input disabled type="text" name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td><input disabled type="text" name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]" size="20"/></td>
                    </tr>           
		  <tr></tr>
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_ruido|FONTE_GERADORA[]"/></td>
		  </tr>	
          <tr>
            <td >Enquadramento</td>
            <td colspan="4"><p align="justify" ></p></td>
          </tr>
        </table>
    
	<table  class="tabela" id="tabela_modelo_avaliacao_ruido_dosimetria" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes F&iacute;sicos</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_ruido_dosimetria|TIPO_AVALIACAO[]"/></td>
          </tr>

          <tr>
<td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea disabled name="laudos_avaliacoes_ruido_dosimetria|TEXTO_EXPLICATIVO[]" rows="10" cols="100"></textarea></td>
          </tr>
          <tr>            <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_ruido_dosimetria|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_ruido_dosimetria|CODIGO_SETOR[]"/></td>
          </tr>
                    <tr>
            <td  >Periodicidade de exposi&ccedil;&atilde;o </td><td>
			  <input disabled id="laudos_avaliacoes_ruido_dosimetria|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
            </td>
			  </tr>
			  <tr>
                              
            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_ruido_dosimetria|NUMERO_FUNCS_SETOR[]" readonly="readonly" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input disabled type="text" name="laudos_avaliacoes_ruido_dosimetria|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" readonly="readonly" size="6"/></td>
            <td>&nbsp;</td>
          </tr>

                    <tr style="overflow:visible" >
                     <td colspan="6"><div id="div_dosimetria" style="width:1009;background: appworkspace;overflow:visible ">
                             <table id="tbl_dosimetria_funcao">
                                 <tr>
                                <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_ruido_dosimetria_funcoes|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_ruido_dosimetria_funcoes|CODIGO_SETOR[]"/></td>                                     
                                     <td>
                                         Código Funcion&aacute;rio
                                     </td>
                                     <td>
                                         <input disabled name="laudos_avaliacoes_ruido_dosimetria_funcoes|CODIGO_FUNCIONARIO[]"/>
                                     </td>
                                     <td>
                                         Turno
                                     </td>                                     
                                     <td>
                                         <input disabled type="text" name="laudos_avaliacoes_ruido_dosimetria_funcoes|TURNO[]" size="20"/>
                                     </td>
                                         
                                 </tr>

                                    <tr>
                                     <td>
                                         Código Fun&ccedil;&atilde;o
                                     </td>
                                     <td>
                                         <input disabled name="laudos_avaliacoes_ruido_dosimetria_funcoes|CODIGO_FUNCAO[]"/>
                                             
                                     </td>
                                     <td>
                                         Código M&aacute;quina
                                     </td>
                                     <td>
                                         <input disabled name="laudos_avaliacoes_ruido_dosimetria_funcoes|CODIGO_MAQUINA[]" onchange="onselect_avaliacoes_maquinas(this)"/>
                                     </td>
                                     </tr>
                                 <tr>    
                                     <td>
                                         Inicio Dosimetria
                                     </td>
                                     <td>
                                         <input disabled name="laudos_avaliacoes_ruido_dosimetria_funcoes|INICIO_DOSIMETRIA[]" />
                                     </td>
                                     <td>
                                         T&eacute;rmino Dosimetria
                                     </td>
                                     <td>
                                         <input disabled name="laudos_avaliacoes_ruido_dosimetria_funcoes|TERMINO_DOSIMETRIA[]" />
                                     </td>
                                     <td>
                                         Tempo Total
                                     </td>
                                     <td>
                                         <input disabled name="laudos_avaliacoes_ruido_dosimetria_funcoes|TEMPO_TOTAL[]" />
                                     </td>
                                     <td>
                                         Dose (%)
                                     </td>
                                     <td>
                                         <input disabled name="laudos_avaliacoes_ruido_dosimetria_funcoes|DOSE[]" />
                                     </td>
                                     <td>
                                         Ru&iacute;do Equivalente
                                     </td>
                                     <td>
                                         <input disabled name="laudos_avaliacoes_ruido_dosimetria_funcoes|RUIDO_EQUIVALENTE[]" />
                                     </td>
                                     
                                         
                                 </tr>
                                 <tr>
                                     
                                 </tr>
                             </table>   
                            </div>
                        
                     </td></tr>

		  <tr><td width="55%" >Campo Ac&uacute;stico</td>
		  <td width="45"><input disabled type="text" size="5"/>dB(A)</td>
		  </tr>
		  <tr><td >Nivel Atenua&ccedil;&atilde;o do protetor auricular</td>
		  <td><input disabled type="text" size="5"/>dB</td>		  
		  </tr>
 <tr><td >Nivel de Ru&iacute;do atenuado</td>
		  <td><input disabled type="text" size="5"/>dB</td>		  
		  </tr>	
                    <tr><td >
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input disabled type="text" name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        <input disabled type="text" name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
                    
          <tr>

		  
            <td > Enquadramento</td><td colspan="4">
            <textarea disabled name="laudos_avaliacoes_ruido_dosimetria|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>		
		<table  class="tabela" id="tabela_modelo_avaliacao_frio" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Físicos Frio</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_frio|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_frio|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_frio|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_frio|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_frio|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_frio|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_frio_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_frio_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_frio_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_frio_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_frio_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_frio_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_frio_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_frio_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_frio_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_frio_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_frio_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_frio_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_frio_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_frio_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Temperatura Medida (oC)</td>
                                                            <td width="28%" >Temperatura Permitida (oC)</td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_frio" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_frio_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_frio_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_frio_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_frio_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_frio_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_frio|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_frio|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_frio|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_frio|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_frio|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
		<table  class="tabela" id="tabela_modelo_avaliacao_calor" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Físicos Calor</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_calor|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_calor|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_calor|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_calor|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_calor|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_calor|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_calor_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_calor_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_calor_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_calor_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_calor_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_calor_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_calor_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_calor_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_calor_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_calor_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_calor_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_calor_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_calor_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_calor_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Temperatura Medida (oC)</td>
                                                            <td width="28%" >Temperatura Permitida (oC)</td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_calor" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_calor_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_calor_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_calor_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_calor_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_calor_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_calor|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
		<table  class="tabela" id="tabela_modelo_avaliacao_umidade" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Físicos Umidade</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_umidade|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_umidade|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_umidade|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_umidade|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_umidade|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_umidade|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_umidade_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_umidade_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_umidade_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_umidade_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_umidade_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_umidade_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_umidade_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_umidade_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_umidade_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_umidade_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_umidade_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_umidade_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_umidade_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_umidade_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Densidade Medida </td>
                                                            <td width="28%" >Densidade Permitida </td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_umidade" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_umidade_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_umidade_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_umidade_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_umidade_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_umidade_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_umidade|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_umidade|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_umidade|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_umidade|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
<table  class="tabela" id="tabela_modelo_avaliacao_radiacao_nao_ionizante" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Físicos Radiação não Ionizante</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_radiacao_nao_ionizante|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radiacao_nao_ionizante|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_nao_ionizante|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_radiacao_nao_ionizante|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_radiacao_nao_ionizante_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_radiacao_nao_ionizante_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_radiacao_nao_ionizante_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_radiacao_nao_ionizante_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Temperatura Medida (oC)</td>
                                                            <td width="28%" >Temperatura Permitida (oC)</td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_radiacao_nao_ionizante" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_radiacao_nao_ionizante|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
		<table  class="tabela" id="tabela_modelo_avaliacao_radiacao_ionizante" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Físicos Radiação Ionizante</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_radiacao_ionizante|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radiacao_ionizante|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_ionizante|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_radiacao_ionizante|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_radiacao_ionizante|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_radiacao_ionizante|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_radiacao_ionizante_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_radiacao_ionizante_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_radiacao_ionizante_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_radiacao_ionizante_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_radiacao_ionizante_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_radiacao_ionizante_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Temperatura Medida (oC)</td>
                                                            <td width="28%" >Temperatura Permitida (oC)</td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_radiacao_ionizante" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radiacao_ionizante_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_ionizante_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_radiacao_ionizante_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_radiacao_ionizante_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_radiacao_ionizante_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_radiacao_ionizante|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_radiacao_ionizante|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_radiacao_ionizante|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_radiacao_ionizante|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
		<table  class="tabela" id="tabela_modelo_avaliacao_outros_fisicos" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Físicos Outros Físicos</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_outros_fisicos|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_fisicos|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_fisicos|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_outros_fisicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_outros_fisicos|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_outros_fisicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_outros_fisicos_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_outros_fisicos_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_outros_fisicos_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_outros_fisicos_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_outros_fisicos_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_outros_fisicos_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_outros_fisicos_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_outros_fisicos_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_outros_fisicos_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_outros_fisicos_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_outros_fisicos_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_outros_fisicos_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_outros_fisicos_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_outros_fisicos_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Temperatura Medida (oC)</td>
                                                            <td width="28%" >Temperatura Permitida (oC)</td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_outros_fisicos" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_fisicos_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_fisicos_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_outros_fisicos_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_outros_fisicos_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_outros_fisicos_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_outros_fisicos|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_outros_fisicos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_outros_fisicos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_outros_fisicos|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
		<table  class="tabela" id="tabela_modelo_avaliacao_sangue_humano" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Biológicos Sangue Humano</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_sangue_humano|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_humano|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_humano|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_sangue_humano|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_sangue_humano|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_sangue_humano|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_sangue_humano_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_sangue_humano_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_sangue_humano_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_sangue_humano_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_sangue_humano_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_sangue_humano_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_sangue_humano_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_sangue_humano_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_sangue_humano_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_sangue_humano_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_sangue_humano_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_sangue_humano_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_sangue_humano_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_sangue_humano_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Concentra&ccedil;&atilde;o Medida </td>
                                                            <td width="28%" >Concentra&ccedil;&atilde;o Permitida</td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_sangue_humano" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_humano_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_humano_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_sangue_humano_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_sangue_humano_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_sangue_humano_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_sangue_humano|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_sangue_humano|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_sangue_humano|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_sangue_humano|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
    		<table  class="tabela" id="tabela_modelo_avaliacao_sangue_animal" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Biológicos Sangue Animal</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_sangue_animal|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_animal|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_animal|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_sangue_animal|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_sangue_animal|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_sangue_animal|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_sangue_animal_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_sangue_animal_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_sangue_animal_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_sangue_animal_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_sangue_animal_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_sangue_animal_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_sangue_animal_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_sangue_animal_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_sangue_animal_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_sangue_animal_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_sangue_animal_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_sangue_animal_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_sangue_animal_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_sangue_animal_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Densidade Medida </td>
                                                            <td width="28%" >Densidade Permitida </td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_sangue_animal" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_animal_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_animal_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_sangue_animal_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_sangue_animal_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_sangue_animal_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_sangue_animal|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_sangue_animal|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_sangue_animal|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_sangue_animal|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>

		<table  class="tabela" id="tabela_modelo_avaliacao_manejo_animais" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Biológicos Manejo Animais</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_manejo_animais|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_manejo_animais|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_manejo_animais|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_manejo_animais|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_manejo_animais|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_manejo_animais|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_manejo_animais_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_manejo_animais_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_manejo_animais_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_manejo_animais_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_manejo_animais_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_manejo_animais_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_manejo_animais_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_manejo_animais_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_manejo_animais_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_manejo_animais_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_manejo_animais_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_manejo_animais_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_manejo_animais_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_manejo_animais_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Densidade Medida </td>
                                                            <td width="28%" >Densidade Permitida </td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_manejo_animais" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_manejo_animais_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_manejo_animais_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_manejo_animais_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_manejo_animais_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_manejo_animais_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_manejo_animais|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_manejo_animais|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_manejo_animais|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_manejo_animais|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
		<table  class="tabela" id="tabela_modelo_avaliacao_outros_biologicos" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Biológicos Outros Biológicos</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_outros_biologicos|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_biologicos|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_biologicos|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_outros_biologicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_outros_biologicos|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_outros_biologicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_outros_biologicos_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_outros_biologicos_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_outros_biologicos_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_outros_biologicos_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_outros_biologicos_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_outros_biologicos_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_outros_biologicos_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_outros_biologicos_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_outros_biologicos_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_outros_biologicos_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_outros_biologicos_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_outros_biologicos_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_outros_biologicos_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_outros_biologicos_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Densidade Medida </td>
                                                            <td width="28%" >Densidade Permitida </td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_outros_biologicos" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_biologicos_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_biologicos_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_outros_biologicos_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_outros_biologicos_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_outros_biologicos_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_outros_biologicos|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_outros_biologicos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_outros_biologicos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_outros_biologicos|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
		<table  class="tabela" id="tabela_modelo_avaliacao_produtos_limpeza" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Químicos Produtos de Limpeza</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_produtos_limpeza|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_produtos_limpeza|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_produtos_limpeza|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_produtos_limpeza|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_produtos_limpeza|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_produtos_limpeza|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_produtos_limpeza_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_produtos_limpeza_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_produtos_limpeza_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_produtos_limpeza_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_produtos_limpeza_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_produtos_limpeza_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_produtos_limpeza_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_produtos_limpeza_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_produtos_limpeza_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_produtos_limpeza_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_produtos_limpeza_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_produtos_limpeza_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_produtos_limpeza_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_produtos_limpeza_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Densidade Medida </td>
                                                            <td width="28%" >Densidade Permitida </td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_produtos_limpeza" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_produtos_limpeza_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_produtos_limpeza_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_produtos_limpeza_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_produtos_limpeza_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_produtos_limpeza_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_produtos_limpeza|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_produtos_limpeza|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_produtos_limpeza|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_produtos_limpeza|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
		<table  class="tabela" id="tabela_modelo_avaliacao_tintas_solventes" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Químicos Tintas e Solventes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_tintas_solventes|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_tintas_solventes|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_tintas_solventes|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_tintas_solventes|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_tintas_solventes|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_tintas_solventes|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_tintas_solventes_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_tintas_solventes_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_tintas_solventes_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_tintas_solventes_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_tintas_solventes_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_tintas_solventes_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_tintas_solventes_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_tintas_solventes_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_tintas_solventes_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_tintas_solventes_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_tintas_solventes_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_tintas_solventes_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_tintas_solventes_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_tintas_solventes_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Densidade Medida </td>
                                                            <td width="28%" >Densidade Permitida </td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_tintas_solventes" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_tintas_solventes_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_tintas_solventes_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_tintas_solventes_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_tintas_solventes_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_tintas_solventes_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_tintas_solventes|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_tintas_solventes|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_tintas_solventes|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_tintas_solventes|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
		<table  class="tabela" id="tabela_modelo_avaliacao_hidrocarbonetos_aromaticos" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Químicos Hidrocarbonetos Aromáticos</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_hidrocarbonetos_aromaticos|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_hidrocarbonetos_aromaticos|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_hidrocarbonetos_aromaticos|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_hidrocarbonetos_aromaticos|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_hidrocarbonetos_aromaticos|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_hidrocarbonetos_aromaticos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_hidrocarbonetos_aromaticos_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_hidrocarbonetos_aromaticos_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_hidrocarbonetos_aromaticos_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_hidrocarbonetos_aromaticos_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_hidrocarbonetos_aromaticos_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_hidrocarbonetos_aromaticos_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_hidrocarbonetos_aromaticos_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_hidrocarbonetos_aromaticos_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_hidrocarbonetos_aromaticos_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_hidrocarbonetos_aromaticos_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_hidrocarbonetos_aromaticos_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_hidrocarbonetos_aromaticos_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_hidrocarbonetos_aromaticos_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_hidrocarbonetos_aromaticos_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Densidade Medida </td>
                                                            <td width="28%" >Densidade Permitida </td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_hidrocarbonetos_aromaticos" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_hidrocarbonetos_aromaticos_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_hidrocarbonetos_aromaticos_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_hidrocarbonetos_aromaticos_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_hidrocarbonetos_aromaticos_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_hidrocarbonetos_aromaticos_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_hidrocarbonetos_aromaticos|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_hidrocarbonetos_aromaticos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_hidrocarbonetos_aromaticos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_hidrocarbonetos_aromaticos|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
		<table  class="tabela" id="tabela_modelo_avaliacao_fumos_metalicos" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Químicos Fumos Metalicos</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_fumos_metalicos|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_fumos_metalicos|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_fumos_metalicos|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_fumos_metalicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_fumos_metalicos|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_fumos_metalicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_fumos_metalicos_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_fumos_metalicos_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_fumos_metalicos_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_fumos_metalicos_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_fumos_metalicos_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_fumos_metalicos_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_fumos_metalicos_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_fumos_metalicos_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_fumos_metalicos_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_fumos_metalicos_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_fumos_metalicos_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_fumos_metalicos_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_fumos_metalicos_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_fumos_metalicos_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Densidade Medida </td>
                                                            <td width="28%" >Densidade Permitida </td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_fumos_metalicos" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_fumos_metalicos_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_fumos_metalicos_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_fumos_metalicos_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_fumos_metalicos_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_fumos_metalicos_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_fumos_metalicos|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_fumos_metalicos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_fumos_metalicos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_fumos_metalicos|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
    
    
		<table  class="tabela" id="tabela_modelo_avaliacao_poeiras_incomodas" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Químicos Poeiras Incômodas</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_poeiras_incomodas|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_poeiras_incomodas|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_poeiras_incomodas|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_poeiras_incomodas|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_poeiras_incomodas|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_poeiras_incomodas|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_poeiras_incomodas_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_poeiras_incomodas_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_poeiras_incomodas_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_poeiras_incomodas_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_poeiras_incomodas_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_poeiras_incomodas_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Densidade Medida </td>
                                                            <td width="28%" >Densidade Permitida </td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_poeiras_incomodas" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_poeiras_incomodas_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_poeiras_incomodas_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_poeiras_incomodas_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_poeiras_incomodas_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_poeiras_incomodas_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_poeiras_incomodas|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_poeiras_incomodas|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_poeiras_incomodas|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_poeiras_incomodas|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>


		<table  class="tabela" id="tabela_modelo_avaliacao_poeiras_minerais" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes Químicos Poeiras Minerais</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_poeiras_minerais|TIPO_AVALIACAO[]"/></td>
          </tr>                    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width></p></td>
          </tr>
          <tr><td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_poeiras_minerais|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_poeiras_minerais|CODIGO_SETOR[]"/></td>
          </tr>
            <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td><td> 
			  <input disabled id="laudos_avaliacoes_poeiras_minerais|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" name="laudos_avaliacoes_poeiras_minerais|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_poeiras_minerais|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            
          </tr>
<td  colspan="5">
                              <table id="tbl_poeiras_minerais_funcoes_cabec" style="background: appworkspace  ">
                                      <caption  style="background:whitesmoke"><strong> Funções Expostas no setor</strong></caption>      
                                      <tr>
                                          <td width="200px">Função</td>
                                          <td width="70px">Periodicidade de Exposi&ccedil;&atilde;o</td>
                                          <td></td><td></td>
                                          <td width="50px">Grau de Insalubridade</td>
                                          <td width="120px" ><p align="center">Valor Intensidade / Concentra&ccedil;&atilde;o</p></td>
                                          <td width="60px" ><p align="center">Unid. de medida</p></td>
                                          <td width="220px">T&eacute;cnica Utilizada</td>
                                          <td width="50px">EPC eficaz</td>
                                          <td width="50px">EPI eficaz</td>
                                          <td width="50px">CA. EPI</td>
                                      </tr>
                                  </table>
                                  <div style="background: appworkspace ">  
                                  <div id="div_poeiras_minerais_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_poeiras_minerais_funcoes_detalhes" style="background: appworkspace ;width:1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_poeiras_minerais_funcoes|CODIGO_FUNCAO[]" size="25" disabled  />

                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_poeiras_minerais_funcoes|PERIODICIDADE_EXPOSICAO[]" size="15" disabled/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_poeiras_minerais_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_poeiras_minerais_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td >
                                                  <input name="laudos_avaliacoes_poeiras_minerais_funcoes|GRAU_INSALUBRIDADE[]" disabled size="8"/>

                                              </td>
                                              
                                              <td width="120px">
                                                  <input name="laudos_avaliacoes_poeiras_minerais_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_poeiras_minerais_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="5"/>
                                              </td>
                                              <td width="150px">
                                                  <input name="laudos_avaliacoes_poeiras_minerais_funcoes|TECNICA_UTILIZADA[]" size="25" maxsize="20"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_poeiras_minerais_funcoes|EPC_EFICAZ[]" disabled size="3"/>
                                              </td>
                                              <td width='50px'>
                                                  <input name="laudos_avaliacoes_poeiras_minerais_funcoes|EPI_EFICAZ[]" disabled size="3" />

                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_poeiras_minerais_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                  </div>
                         <table id="tbl_cabec_maq" width="1009" style="background:whitesmoke">
                                
                                <tr><td width="49%">
                                <div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                            <td width="35%">Densidade Medida </td>
                                                            <td width="28%" >Densidade Permitida </td>
                                        </tr>
                                
                         </table>
                                  
                          </td>
                 </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_poeiras_minerais" style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input disabled type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_poeiras_minerais_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input disabled type="hidden" id="CD_SETOR" name="laudos_avaliacoes_poeiras_minerais_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input disabled name="laudos_avaliacoes_poeiras_minerais_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input disabled type="text" name="laudos_avaliacoes_poeiras_minerais_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input disabled type="text" name="laudos_avaliacoes_poeiras_minerais_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                       
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_poeiras_minerais|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_poeiras_minerais|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_poeiras_minerais|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input disabled name="laudos_avaliacoes_poeiras_minerais|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><p align="justify" width="1009"></p></td>
          </tr>
               </table>
<table width="1009" class="tabela" id="tabela_modelo_avaliacao_iluminamento" style="display:none" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="1009">
          <tr>
            <td colspan="4"><div  style="text-align:center;width:1009">Avalia&ccedil;&atilde;o de Agentes Ergonômicos  Iluminamento</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_iluminamento|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><p align="justify" width=1009></p></td>
          </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td><td>
			
              <input  name="laudos_avaliacoes_iluminamento|PERIODICIDADE_EXPOSICAO[]" style="width:250px" readonly/>
                </td><td style="display:none"></td><td>
			  <input type="hidden" name="laudos_avaliacoes_iluminamento|UNIDADE[]"/></td><td>
			  <input type="hidden" name="laudos_avaliacoes_iluminamento|CODIGO_SETOR[]"/></td>
          
          </tr><tr>
            <td width="17%">N&uacute;mero de Funcionários no setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_iluminamento|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div></div></center></td>
          </tr>
          <tr>              
            <td ><div>N&uacute;mero de Funcionários expostos no setor</div></td>
            <td><input type="text" name="laudos_avaliacoes_iluminamento|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td><div></div></td>
          </tr>
          <tr>
              <td  colspan="5">
                              <table id="tbl_iluminamento_funcoes_cabec" style="background: appworkspace  " width="1009">
                                      <caption  style="background:whitesmoke"><strong> </strong></caption>      
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
                                  <div id="div_iluminamento_funcoes_detalhes" style="width:1009;overflow:auto" style="background: appworkspace "> 
                                  <table id="tbl_iluminamento_funcoes_detalhes" style="background: appworkspace " width="1009">
                                          <tr>
                                              <td >
                                                      <input name="laudos_avaliacoes_iluminamento_funcoes|CODIGO_FUNCAO[]" style="width:200px" />
                                                      
                                               </td>
                                              <td>
                                                      <input name="laudos_avaliacoes_iluminamento_funcoes|PERIODICIDADE_EXPOSICAO[]" style="width:100px;text-transform:none"/>
                                                  </td>
                                              
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_iluminamento_funcoes|UNIDADE[]"/></td>
                                                  <td width="0"><input type="hidden" name="laudos_avaliacoes_iluminamento_funcoes|CODIGO_SETOR[]"/></td>
                                              
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_iluminamento_funcoes|GRAU_INSALUBRIDADE[]" size="10" />
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_iluminamento_funcoes|INTENSIDADE_CONCENTRACAO[]" size="15"/>
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_iluminamento_funcoes|INTENSIDADE_CONCENTRACAO_UNIDADE[]" size="10"/>
                                              </td>
                                              <td width="100px">
                                                  <input name="laudos_avaliacoes_iluminamento_funcoes|TECNICA_UTILIZADA[]" size="18" maxsize="20"/>
                                              </td>
                                              <td width="30px">
                                                  <input name="laudos_avaliacoes_iluminamento_funcoes|EPC_EFICAZ[]" size="5" />
                                              </td>
                                              <td width='30px'>
                                                  <input name="laudos_avaliacoes_iluminamento_funcoes|EPI_EFICAZ[]" size="5" />
                                              </td>
                                              <td width="50px">
                                                  <input name="laudos_avaliacoes_iluminamento_funcoes|CA_EPI[]" size="5"/>
                                              </td>
                                                  </tr>
                                      </table>
                                       
                                   </div>
                                </div>
				
              <table id="tbl_cabec_maq" width="1009">
			  <tr>
              <td  width="50%"  ><div align="center" style="width:1009" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="35%">LUX(Medido)</td>
                                                    <td width="30%">LUX(NBR)</td>
				</tr>
				</table>
				</td>									

                    </tr>


                   
                    <tr  ><td colspan="3" id="td_maq_equip" ><div style="width:1009;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="1009" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_iluminamento_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_iluminamento_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_iluminamento_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_iluminamento_maquinas|LUX_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_iluminamento_maquinas|LUX_NBR[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                        </tr>
    <tr></tr>
    
	  <tr>
	  <td >Fonte geradora</td>
	  <td><input name="laudos_avaliacoes_iluminamento|FONTE_GERADORA[]"/></td>
	  </tr>
          <tr>
            <td>Enquadramento</td>
           <td colspan="2"><p align="justify" width=1009></p></td>
          </tr>
        </table>
        <table  class="tabela" id="tabela_modelo_avaliacao_outros_quimicos" style="display:none">
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Avalia&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center" style="width:1009">Texto Explicativo </div></td>
            <td><input disabled type="hidden" name="laudos_avaliacoes_outros_quimicos|TIPO_AVALIACAO[]"/></td>
          </tr>
          <tr>
            <td colspan="4"><textarea disabled name="laudos_avaliacoes_outros_quimicos|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
          <tr>
            <td colspan="2">Periodicidade de exposi&ccedil;&atilde;o </td><td>
			  <input disabled type="hidden" name="laudos_avaliacoes_outros_quimicos|UNIDADE[]"/></td><td>
			  <input disabled type="hidden" name="laudos_avaliacoes_outros_quimicos|CODIGO_SETOR[]"/>				
			
              <input disabled id="laudos_avaliacoes_outros_quimicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
            </td>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input disabled type="text" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td colspan="2">N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input disabled type="text" name="laudos_avaliacoes_outros_quimicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
         <tr>
            <td width="55%"><div align="center" style="width:1009">Local/M&aacute;quinas e Equipamentos </div></td>
			<td colspan="2">Densidade Medida</td>
			<td>Densidade Permitida</td>			
          </tr>              
          
          <tr><td><div><table id="tbl_maqeq">
                      <tr>
                        <td ><input disabled name="laudos_avaliacoes_outros_quimicos|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" /></td>
                        <td colspan="2"><input disabled type="text" name="laudos_avaliacoes_outros_quimicos|DENSIDADE_MEDIDA[]" value="0"/></td>
                        <td ><input disabled type="text" name="laudos_avaliacoes_outros_quimicos|DENSIDADE_PERMITIDA[]" value="0" /></td>
                       </tr>
          
                      </table>
                  </div>
              </td>
          </tr>
                   <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input disabled type="text" name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input disabled name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                            </td><td>
                        <input disabled type="text" name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>
	  <tr>
	  <td >Fonte geradora</td>
	  <td><input disabled name="laudos_avaliacoes_outros_quimicos|FONTE_GERADORA[]"/></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea disabled name="laudos_avaliacoes_outros_quimicos|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
		

				    
</html>
