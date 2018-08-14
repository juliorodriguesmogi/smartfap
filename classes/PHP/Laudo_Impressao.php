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
margin-leF:20%;

}
@media print
 {
 body{width:21.cm;height:29.7cm;margin-left:0%}
 .setores {page-break-after:always}
  .maquinas{page-break-before:always}
 .atividades 	{page-break-after:always}
 .descricao_cnae {page-break-after:always;page-break-before:always}
 .avaliacoes {page-break-after:always}
  .avaliacoes_tipo {page-break-after:always}
  input {border:none;border-width:0px;}
  select {border:none;}
  button{display:none;}
 }
 @media screen

 {
 .setores {page-break-after:always}
 .atividades {page-break-after:always}
 .descricao_cnae {page-break-after:always;page-break-before:always}
 .avaliacoes_tipo {page-break-after:always}
input {border:none;border-width:0px;}
  select {border:none;border-width:0px;display:block;}
  
 
 }
.style3 {font-size: 24px}
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
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_ruido_maquinas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_ruido_dosimetria.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_calor.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_iluminamento.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_frio.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_umidade.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_nao_ionizante.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_radiacao_ionizante.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_fisicos.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_humano.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_sangue_animal.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_manejo_animais.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_biologicos.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_produtos_limpeza.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_tintas_solventes.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_hidrocarbonetos.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_fumos_metalicos.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_incomodas.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_poeiras_minerais.js"></script>        
<script type="text/javascript" src="../classes/js/MLaudos_avaliacoes_outros_quimicos.js"></script>        
<script type="text/javascript" src="../classes/js/CNAE.js"></script>
<script type="text/javascript" src="../classes/js/CNAES.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" charset="ISO-8859-1" >
      
      function report_onload(){
        
        empresa_ativa=getUrlvars('CODIGO_EMPRESA');
        ano_pericia=getUrlvars('ANO_PERICIA');
        numero_laudo=getUrlvars('NUMERO_LAUDO');
        revisao=getUrlvars('REVISAO');
        campos_laudo=["CODIGO_EMPRESA","ANO_PERICIA","NUMERO_LAUDO","REVISAO"];
        valores_laudo=[empresa_ativa,ano_pericia,numero_laudo,revisao];
        buscar_registro(window,campos_laudo,valores_laudo,Array('=','=','=','='),'laudos','laudos','Busca_Laudo',true,newlaudo);                    
        qtdreglaudo=0;
            imprime_laudo();
            imprime_laudos_acompanhantes();
            imprime_laudos_cnae();            
            imprime_laudos_setores_pericia();
            imprime_laudos_atividades();
            imprime_laudos_atividades_funcoes();
            imprime_laudos_atividades_epis();
            imprime_laudos_maquinas();
            imprime_laudos_avaliacoes();
            
            qtdreglaudo++;
            
        
      }   
      
      function imprime_laudo(){
          tabela_dados_empresa=document.getElementById('tbl_dados_empresa');
          tabela_dados_empresa.rows[0].cells[1].children[0].children[0].innerHTML+=newlaudo.get_Numero_Laudo();
          tabela_dados_empresa.rows[0].cells[1].children[0].children[2].innerHTML+=newlaudo.get_Revisao();
          tabela_dados_empresa.rows[0].cells[1].children[0].children[4].innerHTML+=newlaudo.get_Data_Laudo();
          tabela_dados_empresa.rows[2].cells[1].children[0].innerHTML=newlaudo.get_CNPJ_CEI();
          tabela_dados_empresa.rows[3].cells[1].children[0].innerHTML=newlaudo.get_Nome_Empresa();
          tabela_dados_empresa.rows[4].cells[1].children[0].innerHTML=newlaudo.get_CNAE();
          tabela_dados_empresa.rows[5].cells[1].children[0].innerHTML=newlaudo.get_Grau_Risco();
          tabela_dados_empresa.rows[6].cells[1].children[0].innerHTML=newlaudo.get_Endereco();
          tabela_dados_empresa.rows[7].cells[1].children[0].innerHTML=newlaudo.get_Bairro();
          tabela_dados_empresa.rows[8].cells[1].children[0].innerHTML=newlaudo.get_CEP();
          tabela_dados_empresa.rows[9].cells[1].children[0].innerHTML=newlaudo.get_Municipio();
          
      }
      
      function imprime_laudos_acompanhantes(){
          
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
                divpai.appendChild(divfilho);			
                buscar_registros(window,'laudos_setores_fotos',"Carrega_Setores_Fotos",Array('CODIGO_EMPRESA','ANO_PERICIA','NUMERO_LAUDO','REVISAO','UNIDADE','CODIGO_SETOR'),Array(empresa_ativa,ano_pericia,numero_laudo,revisao,newlaudosetper.get_Unidade(cont),newlaudosetper.get_Codigo_Setor(cont)),false,Array('=','=','=','=','=','='),newlaudosetfoto);    			
                contf=0;
                tb=document.createElement('table');
                tb.setAttribute('width','90%')
                div_fotos=document.createElement('div');
                div_fotos.appendChild(tb)
                if (newlaudosetfoto.get_Caminho_Foto(contf)!=""){
                    while (contf<newlaudosetfoto.length()){
                          tb.insertRow(-1);
                          img=document.createElement('img');
                          caminho_foto=""+newlaudosetfoto.get_Caminho_Foto(contf);
                          img.src=caminho_foto.toString().toLowerCase();
                          img.setAttribute('style','width:490px;height:300px');
                          celula=document.createElement('td');
                          celula.setAttribute('width','50%');
                          celula.appendChild(img);
                          tb.rows[tb.rows.length-1].appendChild(celula);
                          contf++;
                          img=document.createElement('img');
                          caminho_foto=""+newlaudosetfoto.get_Caminho_Foto(contf);
                          img.src=caminho_foto.toString().toLowerCase();
                          img.setAttribute('style','width:490px;height:300px');
                          celula=document.createElement('td');
                          celula.setAttribute('width','50%');
                          celula.appendChild(img);
                          tb.rows[tb.rows.length-1].appendChild(celula);
                          contf++;
                     }     
                }
                divpai.appendChild(div_fotos);
                cont++;
            }

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
                tabela.rows[0].cells[0].textContent=newativlaudo.get_Sequencial(cont);
                tabela.rows[0].cells[1].textContent=newativlaudo.get_Descricao_Resumida(cont);
                tabela.rows[1].cells[0].textContent="Funções";
                tabela.rows[1].cells[1].textContent+="\n"+newativlaudo.get_Descricao_Atividade(cont);
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
            campo=document.getElementById('tbl_dados_empresa').rows[4].cells[1].textContent;
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
            buscar_registros(window,'laudos_avaliacoes',"Busca_Laudos_Avaliacoes_Sumarizadas_Todos",campos_laudo_avaliacoes,valores_laudo_avaliacoes,false,Array('=','=','=','=','=','='),newlaudosavalsum);                  
                dv_avaliacoes=document.getElementById('div_avaliacoes').cloneNode(true);
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
                valores_laudo[4]=newlaudosavaliacoes.get_Unidade(xk);
                valores_laudo[5]=newlaudosavaliacoes.get_Codigo_Setor(xk);
                buscar_registros(window,'laudos_avaliacoes',"Busca_Laudos_Avaliacoes_Sumarizadas",campos_laudo,valores_laudo,false,Array('=','=','=','=','=','='),newlaudosavalsum);                  
                dv_avaliacoes=document.getElementById('div_avaliacoes').cloneNode(true);
                tbl_unid_set=dv_avaliacoes.getElementsByTagName('table')[0];
                tbl_unid_set.rows[0].cells[0].children[1].children[0].innerHTML=newlaudosavaliacoes.get_Unidade(xk);
                tbl_unid_set.rows[0].cells[1].children[1].children[0].innerHTML=newlaudosavaliacoes.get_Descricao_Setor(xk);
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
            	
            imprime_laudos_avaliacoes_ruido(dv_avaliacoes);
            imprime_laudos_avaliacoes_ruido_dosimetria();
            imprime_laudos_avaliacoes_frio();
            imprime_laudos_avaliacoes_calor();
            imprime_laudos_avaliacoes_umidade();
            imprime_laudos_avaliacoes_radicao_nao_ionizante();
            imprime_laudos_avaliacoes_radiacao_ionizante();
            imprime_laudos_avaliacoes_outros_fisicos();
            imprime_laudos_avaliacoes_sangue_humano();
            imprime_laudos_avaliacoes_sangue_animal();
            imprime_laudos_avaliacoes_manejo_animais();
            imprime_laudos_avaliacoes_outros_biologicos();
            imprime_laudos_avaliacoes_produtos_limpeza();
            imprime_laudos_avaliacoes_tintas_solventes();
            imprime_laudos_avaliacoes_hidrocarbonetos();
            imprime_laudos_avaliacoes_fumos_metalicos();
            imprime_laudos_avaliacoes_poeiras_incomodas();
            imprime_laudos_avaliacoes_poeiras_minerais();
            imprime_laudos_avaliacoes_outros_quimicos();
            imprime_laudos_avaliacoes_iluminamento();
            }
        }            
        function imprime_laudos_avaliacoes_ruido(dv){
            divruido=document.createElement('div');
            divruido.setAttribute('id','dv_ruido');
            divruido.setAttribute('style','display:block');
            tabelaruido=document.getElementById('tabela_modelo_avaliacao_ruido').cloneNode(true);
            tabelaruido.setAttribute('style','display:block');
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
                  tabelaruido.rows[3].cells[0].children[0].value=newlaudoavalruido.get_Texto_Explicativo(xs);
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
                  tabelaruido.rows[17].cells[1].children[0].value=newlaudoavalruido.get_Enquadramento(xs);
                  
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
                 
                 dv.appendChild(divruido);
            
        }
        function imprime_laudos_avaliacoes_ruido_dosimetria(){
            
        }
        function imprime_laudos_avaliacoes_frio(){
            
        }
        function imprime_laudos_avaliacoes_calor(){
            
        }
        function imprime_laudos_avaliacoes_umidade(){
            
        }
        function imprime_laudos_avaliacoes_radicao_nao_ionizante(){
            
        }
        function imprime_laudos_avaliacoes_radiacao_ionizante(){
            
        }
        function imprime_laudos_avaliacoes_outros_fisicos(){
            
        }
        function imprime_laudos_avaliacoes_sangue_humano(){
            
        }
        function imprime_laudos_avaliacoes_sangue_animal(){
            
        }
        function imprime_laudos_avaliacoes_manejo_animais(){
            
        }
        function imprime_laudos_avaliacoes_outros_biologicos(){
            
        }
        function imprime_laudos_avaliacoes_produtos_limpeza(){
            
        }
        function imprime_laudos_avaliacoes_tintas_solventes(){
            
        }
        function imprime_laudos_avaliacoes_hidrocarbonetos(){
            
        }
        function imprime_laudos_avaliacoes_fumos_metalicos(){
            
        }
        function imprime_laudos_avaliacoes_poeiras_incomodas(){
            
        }
        function imprime_laudos_avaliacoes_poeiras_minerais(){
            
            
        }
        function imprime_laudos_avaliacoes_outros_quimicos(){
            
        }
        function imprime_laudos_avaliacoes_iluminamento(){
            
        }
        
</script>
</head>

<body onload="report_onload()">
<form>
    <button type="Button" onclick="window.print();">Imprimir Laudo</button>    
<table id="tbl_dados_empresa" border="1" cellspacing="0" cellpadding="0" width="984">
  <tr>
    <td colspan="2" valign="top"><h2>&nbsp;Laudo T&eacute;cnico de Condi&ccedil;&otilde;es </h2>
    <h2>Ambientais do Trabalho </h2></td>
      <td width="446"><p><strong>N&uacute;mero Laudo: </strong><br />
            <strong>Revis&atilde;o:</strong><br />
            <strong>Data:&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><p><strong>1 &ndash; DADOS DA EMPRESA</strong></p></td>
  </tr>
  <tr>
    <td width="531" valign="bottom"><p><strong>&nbsp;C.N.P.J</strong></p></td>
    <td colspan="2" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="531" valign="bottom"><p><strong>&nbsp;RAZ&Atilde;O SOCIAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p></td>
    <td colspan="2" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="531" valign="bottom"><p><strong>&nbsp;C.N.A.E. </strong></p></td>
    <td colspan="2" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td valign="bottom"><strong>&nbsp;GRAU DE RISCO</strong></td>
    <td colspan="2" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="531" valign="bottom"><p><strong>&nbsp;ENDERE&Ccedil;O</strong></p></td>
    <td colspan="2" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="531" valign="bottom"><p><strong>&nbsp;BAIRRO</strong></p></td>
    <td colspan="2" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="531" valign="bottom"><p><strong>&nbsp;C.E.P</strong></p></td>
    <td colspan="2" valign="bottom"><p align="left"></p></td>
  </tr>
  <tr>
    <td width="531" valign="bottom"><p><strong>&nbsp;MUNIC&Iacute;PIO</strong></p></td>
    <td colspan="2" valign="bottom"><p align="left"></p></td>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="0" width="985">
  <tr>
    <td colspan="2" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p><strong>2 &ndash; DADOS DO INFORMANTE</strong></p></td>
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
<table border="1" cellspacing="0" cellpadding="0" width="985">
  <tr>
    <td colspan="7" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" valign="top"><p>3 &ndash; INFORMA&Ccedil;&Otilde;ES PERICIAIS</p></td>
  </tr>
  <tr>
    <td width="202"><h6>Per&iacute;cia    Realizada em</h6></td>
    <td colspan="3" valign="top"><h4 align="center"></h4></td>
    <td width="160" valign="top"><h4>HOR&Aacute;RIO: </h4></td>
    <td width="519" valign="top">&nbsp;</td>
    <td width="7" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7"><p align="center"><strong>Instrumental    utilizado para&nbsp; Avali&ccedil;&atilde;o de Ru&iacute;do</strong> </p></td>
  </tr>
	<tr></tr>
  <tr>
    <td width="202"><strong> Metodologia    Utilizada na
      Per&iacute;cia</strong></p></td>
    <td colspan="5" valign="top"><p>Constante da Port. MTb 3214/78 &ndash; Norma Regulamentadora    NR-15. / Fundacentro e ACGIH. Descri&ccedil;&atilde;o detalhada vide levantamentos. </p></td>
  </tr>
</table>
<table border="1" cellspacing="0" cellpadding="0" width="985">
  <tr>
    <td colspan="2"><p><center>4 &ndash; CLASSIFICA&Ccedil;&Atilde;O DE EXPOSI&Ccedil;&Atilde;O</center></p></td>
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
<div id="div_setores_pericia">
<table border="1" cellspacing="0" cellpadding="0" width="984">
  <tr>
    <td colspan="3" valign="top"><center><p><strong>5 &ndash;    CARACTER&Iacute;STICAS DA CONSTRU&Ccedil;&Atilde;O DOS <br />
             SETORES    OBJETOS DA PER&Iacute;CIA </strong></p></center></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><center>00 &ndash; INFORMA&Ccedil;&Otilde;ES COMPLEMENTARES</center></td>
  </tr>
  <tr>
    <td colspan="3" valign="top"><table border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="217"><p><strong>Mudan&ccedil;as no local de trabalho:</strong></p></td>
        <td width="758" valign="top"><p>N&atilde;o ocorreram    as que pudessem modificar as avalia&ccedil;&otilde;es ambientais.</p></td>
      </tr>
      <tr>
        <td width="217"><p><strong>Tempo de exposi&ccedil;&atilde;o:</strong></p></td>
        <td width="758" valign="top"><p>De acordo    com o especificado nas avalia&ccedil;&otilde;es ambientais.<strong></strong></p></td>
      </tr>
    </table></td>
  </tr>

</table>
<table width="984" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td><center><p>00 &ndash; RESPONSABILIDADE T&Eacute;CNICA DE  AVALIA&Ccedil;&Atilde;O</p></center></td>
    </tr>
  <tr>
    <td><p>A <strong>XXXXX  &ndash; Prote&ccedil;&atilde;o de Seguran&ccedil;a no Trabalho Ltda.</strong>, CNPJ 02.385.639/0001-68, com  sede &agrave; Rua Floriano Peixoto, 514 &ndash; Esp&iacute;rito Santo do Pinhal estado de S&atilde;o  Paulo, foi contratada para elabora&ccedil;&atilde;o do Laudo T&eacute;cnico Pericial, tendo como  respons&aacute;veis t&eacute;cnicos o <strong>Dr. Cl&aacute;udio  Pereira das Neves, M&eacute;dico Do Trabalho &ndash; CRM &ndash; SP: 31.268/CRM &ndash; MG: 32.668 o Sr.  Reginaldo Jorge Brand&atilde;o, T&eacute;cnico de Seguran&ccedil;a do Trabalho &ndash; REG. MTB  51/02415-1.</strong></p></td>
    </tr>
</table>
</div>
     <div id='div_setores' style="display:none"  >
   <table border="1" cellspacing="0" cellpadding="0" width="984" class="setores" >   
  <tr>
    <td width="112"><p><strong>Setor &ndash; </strong></p></td>
    <td colspan="2" valign="top"><h4 align="center"></h4>
    <p><strong></strong></p></td>
  </tr>
    <tr>
    <td width="112"><p><strong>Descri&ccedil;&atilde;o do Setor</strong></p></td>
    <td colspan="2" valign="top"><h4 align="center"></h4>
    <p><strong></strong></p></td>
  </tr>
  </tr>
    <tr>
    <td width="112"><p><strong>P&eacute; Direito</strong></p></td>
    <td colspan="2" valign="top">
    <p></p></td>
  </tr>       
  <tr>
    <td width="112" valign="bottom"><p><strong>&nbsp;</strong></p>
    <p><strong>Piso</strong></p></td>
    <td colspan="2" valign="bottom"><p></p> </td> 
 </tr>
  <tr>
    <td width="112" valign="bottom"><p><strong>&nbsp;</strong></p>
    <p><strong>Paredes</strong></p></td>
    <td colspan="2" valign="bottom"><p></p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="112" valign="bottom"><p><strong>&nbsp;</strong></p>
    <p><strong>Cobertura</strong></p></td>
    <td colspan="2" valign="bottom"><p></p></td>
  </tr>
  <tr>
    <td width="112" valign="bottom"><p><strong>Ilumin&ccedil;&atilde;o e ventil&ccedil;&atilde;o </strong><br />
            <strong>Natural</strong></p></td>
    <td colspan="2" valign="bottom"><p></p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="112" valign="bottom"><p><strong>&nbsp;</strong></p>
    <p><strong>Ilumin&ccedil;&atilde;o artificial</strong></p></td>
    <td colspan="2" valign="bottom"><p></p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="112" valign="bottom"><p><strong>&nbsp;</strong></p>
    <p><strong>Arranjo F&iacute;sico</strong></p></td>
    <td colspan="2" valign="bottom"><p align="justify"></p>
    </td>
  
  </tr>
</table>
</div> 
<div id="div_atividades_laudo" style="display:none" >
    <table border="1" cellspacing="0" cellpadding="0" width="983" >
  <tr>
    <td colspan="2" valign="top"><p align="center"><strong>6 &ndash; DESCRI&Ccedil;&Atilde;O DAS ATIVIDADES</strong><strong> </strong></p></td>
  </tr>
   </table>
</div>
<div id="div_atividades" style="display:none">
  <table border="1" cellspacing="0" cellpadding="0" width="983" >
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
<table border="1" id="cabecalho" cellspacing="0" cellpadding="0" width="983">
  <tr>
    <td colspan="2" valign="top"><p align="center"><strong> RELA&ccedil;&atilde;O DE EPIs</strong></p></td>
  </tr>
  <tr>
    <td height="27"><p align="center"><strong>Descri&ccedil;&atilde;o dos EPIs </strong></p>      </td>
    <td width="161"><p align="center"><strong>Numero    do C. A</strong></p></td>
  </tr>
 </table>
  <table border="1" id="detalhes" width="983">
  <tr>
    <td width="812" >&nbsp;</td>
    <td width="155" >&nbsp;</td>
  </tr>
</table>
</div>    
<div id="div_cnae" style="display:none">
<table border="1" cellspacing="0" cellpadding="0" width="983" class="descricao_cnae">
  <tr>
    <td width="979" valign="top"><p align="center"><strong>7&ndash; DESCRI&Ccedil;&Atilde;O DO PROCESSO DE TRABALHO &nbsp;- CNAE</strong><strong> </strong></p></td>
  </tr>
  <tr>
    <td width="979" valign="top"></td>
  </tr>
</table>

<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="217"><p><strong>Mudan&ccedil;as no local de trabalho:</strong></p></td>
    <td width="428" valign="top"><p>N&atilde;o ocorreram    as que pudessem modificar as avalia&ccedil;&otilde;es ambientais.</p></td>
  </tr>
  <tr>
    <td width="217"><p><strong>Tempo de exposi&ccedil;&atilde;o:</strong></p></td>
    <td width="428" valign="top"><p>De acordo    com o especificado nas avalia&ccedil;&otilde;es ambientais.<strong></strong></p></td>
  </tr>
</table>

</div>
</form>
<table width="984" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td><center><p>00 &ndash; CONSIDERA&Ccedil;&Otilde;ES LEGAIS </p></center>
<p>&nbsp;</p></td>
  </tr>
  <tr>
    <td><p>Informamos que para efeitos de <u>co-responsabilidade c&iacute;vel e  criminal</u> que, al&eacute;m dos funcion&aacute;rios da empresa serem obrigados a  seguirem as normas de seguran&ccedil;a, higiene e medicina do trabalho, os  funcion&aacute;rios de prestadores de servi&ccedil;os, aut&ocirc;nomos, profissionais liberais  entre outros que venham desempenhar qualquer atividade nas depend&ecirc;ncias da  empresa, devem seguir tamb&eacute;m as normas legais e internas da empresa, tais  como:&nbsp;&nbsp; </p>
      <p>1 &ndash; Uso obrigat&oacute;rio de  equipamentos de prote&ccedil;&atilde;o individual adequados ao risco <br />
        2 &ndash; Realiza&ccedil;&atilde;o de exames m&eacute;dicos  admissionais, peri&oacute;dicos, de retorno ao trabalho e demissionais. <br />
        3 &ndash; Realiza&ccedil;&atilde;o de exames  complementares&nbsp; </p>
    <p>O n&atilde;o cumprimento das normas de  seguran&ccedil;a, higiene e medicina do trabalho por terceiros &agrave; empresa, podem  acarretar em co-responsabilidade em processos civis e criminais caso este seja  o entendimento da promotoria p&uacute;blica.</p></td>
  </tr>
</table>
<table width="982" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" valign="top"><center><p>00 &ndash;  CONCLUS&Atilde;O</p></center></td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><p>O presente Laudo Ambiental, foi executado    de acordo com a <strong><em>Portaria No. 3214/78</em></strong> do MTb e suas respectivas <strong><em>Normas    Regulamentadoras</em></strong>. Informamos que &eacute; proibido o trabalho de menor de    idade em local insalubre, conforme <strong><em>Inciso XXIII do Art. 7&ordm; da Constitui&ccedil;&atilde;o    Federal de 1988, inciso I do caput do Art. 405 da CLT</em>,</strong> mesmo com a    ado&ccedil;&atilde;o de tecnologia de prote&ccedil;&atilde;o individual e ou coletiva.<br />
      Salientamos tamb&eacute;m que a neutraliza&ccedil;&atilde;o dos    riscos gerados pelos agentes ambientais, avaliados neste LTCAT, s&oacute; ser&aacute;    poss&iacute;vel se <strong>for mantido o fornecimento    regular dos epi&acute;s (equipamentos de prote&ccedil;&atilde;o individual)</strong>, devidamente    anotados em fichas de controle individual e com a guarda da nota fiscal de    compra dos mesmos, bem como treinamento sobre uso correto. </p></td>
  </tr>
  <tr>
    <td width="404" valign="top"><p align="center"><strong>Data da Emiss&atilde;o do Laudo</strong></p></td>
    <td width="572" valign="top"><p align="center"><strong>Data  </strong></p></td>
  </tr>
  <tr>
    <td width="404" valign="top"><p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>DR.    </strong><br />
        <strong>M&Eacute;DICO    DO TRABALHO</strong><br />
        <strong>CRM    &ndash;</strong><br />
        <strong>Proseg    &ndash; Prote&ccedil;&atilde;o e Seguran&ccedil;a no Trabalho Ltda.</strong><strong> </strong></p></td>
    <td width="572" valign="top"><p align="center"><strong>ASSINATURA:</strong></p></td>
  </tr>
  <tr>
    <td width="404" valign="top"><p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><br />
        <strong>T&Eacute;CNICO    DE SEG. DO TRABALHO.</strong><br />
        <strong>REG.    </strong><br />
        <strong>Proseg    &ndash; Prote&ccedil;&atilde;o e Seguran&ccedil;a no Trabalho Ltda.</strong><strong> </strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p></td>
    <td width="572" valign="top"><p align="center"><strong>ASSINATURA:</strong></p></td>
  </tr>
  <tr>
    <td width="404" valign="top"><p align="center"><strong>Respons&aacute;veis da Empresa</strong></p></td>
    <td width="572" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
  </tr>
  <tr>
    <td width="404" valign="top"><p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <p align="center"><strong>&nbsp;</strong></p>
      <h4 align="center">NOME DO REPRESENTANTE LEGAL DA EMPRESA</h4>
      <p align="center"><strong>Nome    da Empresa</strong></p>
      <p align="center"><strong>&nbsp;</strong></p></td>
    <td width="572" valign="top"><p align="center"><strong>ASSINATURA:</strong></p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
<div id="div_avaliacoes" style="display:none;">
    <table id="tbl_unid_setor" border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="983">
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
    <table border="1" cellspacing="0" cellpadding="0" class="avaliacoes" width="983">
  <tr>
    <td colspan="2"><p align="center"><strong>8&ndash; AVALI&Ccedil;&Otilde;ES T&Eacute;CNICAS EXECUTADAS</strong></p></td>
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
           <input type="checkbox" id="ruido" value="0" disabled />
           Ru&iacute;do</span><br />
		   <span>
          <input type="checkbox" id="ruido_dosimetria" value="0" disabled />
          Ru&iacute;do Dosimetria</span><br />		  
          <span>
		  <input type="checkbox" id="frio" value="0" disabled />
          Frio</span><br />
		  <span>
          <input type="checkbox" id="calor" value="0" disabled />
          Calor</span><br />
          <span>
		  <input type="checkbox" id="umidade" value="0" disabled />
          Umidade</span><br />
		  <span>
          <input type="checkbox" id="radiacao_nao_ionizante" value="0"  disabled/>
          <strong> </strong>Radi&ccedil;&atilde;o N&atilde;o Ionizante</span><br />
            
			<span>
            <input type="checkbox" id="radiacao_ionizante" value="0" disabled />
            <strong></strong>Radi&ccedil;&atilde;o Ionizante</span><br />
          <span>
		  <input type="checkbox" id="outros_fisicos" value="0" disabled/> 
          Outros </span></p>
        </td>
  </tr>
  <tr>
    <td width="237"><ul>
      <li><strong>Biol&oacute;gicos </strong></li>
    </ul></td>
    <td width="740"><p>
      <span>
	  <input type="checkbox" id="sangue_humano" value="0" disabled/>
      Sangue, flu&iacute;dos e corp&oacute;reos humanos</span><br />
	  <span>
      <input type="checkbox" id="sangue_animal" value="0" disabled/>
      <strong> </strong>Sangue, flu&iacute;dos e corp&oacute;reos de animais</span><br />
      <span>
	  <input type="checkbox" id="manejo_animais" value="0" disabled/>
      <strong> </strong>Manejo de animais.</span><br />
	  <span>
      <input type="checkbox" id="outros_biologicos" value="0" disabled/>
    <strong> </strong>Outros</span> </p></td>
  </tr>
  <tr>
    <td width="237"><ul>
      <li><strong>Qu&iacute;micos</strong> </li>
    </ul>
        <p><strong>&nbsp;</strong></p></td>
    <td width="740"><p>
      <span>
	  <input type="checkbox" id="produtos_limpeza" value="0" disabled />
      <strong> </strong>Produtos de limpeza</span> <br />
	  <span>	
      <input type="checkbox" id="tintas_solventes" value="0" disabled/>
      <strong> </strong>Tintas e Solventes </span><br />
      <span>
	  <input type="checkbox" id="hidrocarbonetos_aromaticos" value="0" disabled />
      <strong> </strong>Hidrocarbonetos Arom&aacute;ticos</span> <br />
	  <span>
      <input type="checkbox" id="fumos_metalicos" value="0" disabled/>
      <strong> </strong>Fumos Met&aacute;licos</span> <br />
	  <span>
      <input type="checkbox" id="poeiras_incomodas" value="0" disabled/>
      <strong> </strong>Poeiras Inc&ocirc;modas </span><br />
	  <span>	
      <input type="checkbox" id="poeiras_minerais" value="0" disabled/>
      <strong> </strong>Poeiras Minerais</span><br />
      <span>
	  <input type="checkbox" id="outros_quimicos" value="0" disabled/>
    <strong> </strong>Outros</span>  </p></td>

	
  </tr>
  <tr>
    <td width="237"><ul>
      <li><strong>Ergon&ocirc;micos </strong></li>
    </ul></td>
    <td width="740"><p>
      <span>
	  <input type="checkbox" id="iluminamento" value="0" disabled/>
    Iluminamento</span></p></td>
	
  </tr>
    
</table>
</div>     

    <table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_ruido" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes F&iacute;sicos</div></td>
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
			  <input id="laudos_avaliacoes_ruido|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
            </td>
			  </tr>
			  <tr>
                              
            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_ruido|NUMERO_FUNCS_SETOR[]" readonly="readonly" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td> N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_ruido|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"  size="6"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
                          <tr>    
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  </tr>
                          <tr>
                          </tr>
                          <tr>
                          </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
						<td width="15%">N&iacute;vel de Ru&iacute;do Medido(dB)</td>
						<td width="15%">Tempo Exposi&ccedil;&atilde;o Di&aacute;ria (H)</td>													
                                                <td width="15%">N&iacute;vel de Ru&iacute;do NR (dB)</td>
						<td width="20%">Tempo M&aacute;ximo Exposi&ccedil;&atilde;o Di&aacute;ria (H)</td>													
			  </tr>
			 </table>
			 </div>
			 </td>									

          </tr>
                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="100%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_ruido_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_ruido_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="35%"  ><input name="laudos_avaliacoes_ruido_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="15%"  ><input type="text" name="laudos_avaliacoes_ruido_maquinas|NIVEL_RUIDO_MEDIDO[]" value="0" onkeyup="calcular_media_absoluta(this)" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" size="10" /></td>
                                      <td width="15%"  ><input type="text" name="laudos_avaliacoes_ruido_maquinas|TEMPO_EXPOSICAO_DIARIA[]" value="08:00:00" onkeypress="return valida_decimal(this,event)" onblur="formata_hora(this,event)" onkeyup="calcula_exposicao_maxima(this)"  size="8" maxlength="8"/></td>
									  
                                      <td width="15%" ><input type="text" name="laudos_avaliacoes_ruido_maquinas|NIVEL_RUIDO_PERMITIDO[]" readonly value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" size="10" /></td>
                                      <td width="20%"  ><input type="text" name="laudos_avaliacoes_ruido_maquinas|TEMPO_MAXIMO_EXPOSICAO_DIARIA[]"  value="08:00:00" onkeypress="return valida_decimal(this,event)"  size="10"/></td>
									  
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>

          </tr>
		  <tr><td width="55%" >Campo Ac&uacute;stico</td>
		  <td width="45" colspan="3"><input type="text" size="5" value="0" name="laudos_avaliacoes_ruido|CAMPO_ACUSTICO_MEDIDO[]"/>dB(A)</td>
		  </tr>
		  <tr><td >Nivel Atenua&ccedil;&atilde;o do protetor auricular</td>
		  <td colspan="3"><input type="text" size="5" value="0" name="laudos_avaliacoes_ruido|NIVEL_ATENUACAO_PROTETOR[]"/>dB</td>		  
		  </tr>
                  <tr><td >Nivel de Ru&iacute;do atenuado</td>
		  <td colspan="3"><input type="text" size="5" value="0" name="laudos_avaliacoes_ruido|NIVEL_RUIDO_ATENUADO[]"/>dB</td>		  
		  </tr>	
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_COLETIVA[]"/>

                        <input type="text" name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td><input type="text" name="laudos_avaliacoes_ruido|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]" size="20"/></td>
                    </tr>           
		  <tr>

		  <tr>
		  <td >Fonte geradora</td>
		  <td><input name="laudos_avaliacoes_ruido|FONTE_GERADORA[]"/></td>
		  </tr>	
          <tr>
            <td >Enquadramento</td>
            <td colspan="2"><textarea name="laudos_avaliacoes_ruido|ENQUADRAMENTO[]" rows="10" ></textarea></td>
          </tr>
        </table>
    
	<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_ruido_dosimetria" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes F&iacute;sicos</div></td>
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
			  <input id="laudos_avaliacoes_ruido_dosimetria|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
            </td>
			  </tr>
			  <tr>
                              
            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_ruido_dosimetria|NUMERO_FUNCS_SETOR[]" readonly="readonly" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
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
                                         Código Funcion&aacute;rio
                                     </td>
                                     <td>
                                         <input name="laudos_avaliacoes_ruido_dosimetria_funcoes|CODIGO_FUNCIONARIO[]"/>
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
                                         Código Fun&ccedil;&atilde;o
                                     </td>
                                     <td>
                                         <input name="laudos_avaliacoes_ruido_dosimetria_funcoes|CODIGO_FUNCAO[]"/>
                                             
                                     </td>
                                     <td>
                                         Código M&aacute;quina
                                     </td>
                                     <td>
                                         <input name="laudos_avaliacoes_ruido_dosimetria_funcoes|CODIGO_MAQUINA[]" onchange="onselect_avaliacoes_maquinas(this)"/>
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
                                         T&eacute;rmino Dosimetria
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
                                         Ru&iacute;do Equivalente
                                     </td>
                                     <td>
                                         <input name="laudos_avaliacoes_ruido_dosimetria_funcoes|RUIDO_EQUIVALENTE[]" />
                                     </td>
                                     
                                         
                                 </tr>
                                 <tr>
                                     
                                 </tr>
                             </table>   
                            </div>
                        
                     </td></tr>

		  <tr><td width="55%" >Campo Ac&uacute;stico</td>
		  <td width="45"><input type="text" size="5"/>dB(A)</td>
		  </tr>
		  <tr><td >Nivel Atenua&ccedil;&atilde;o do protetor auricular</td>
		  <td><input type="text" size="5"/>dB</td>		  
		  </tr>
 <tr><td >Nivel de Ru&iacute;do atenuado</td>
		  <td><input type="text" size="5"/>dB</td>		  
		  </tr>	
                    <tr><td >
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        <input type="text" name="laudos_avaliacoes_ruido_dosimetria|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
                    
          <tr>

		  
            <td > Enquadramento</td><td colspan="3">
            <textarea name="laudos_avaliacoes_ruido_dosimetria|ENQUADRAMENTO[]" rows="10" cols="100"></textarea></td>
          </tr>
        </table>		
		<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_frio" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avalia&ccedil;&atilde;o de Agentes</div></td>
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
			  <input id="laudos_avaliacoes_frio|PERIODICIDADE_EXPOSICAO[]" style="width:250px;text-transform:none"/>
                              </td>
			  </tr>
	 <tr>

            <td  width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_frio|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
             <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>    
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_frio|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"" size="6"/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
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
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_frio_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_frio_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_frio_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                        <tr></tr>
          </tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_frio|MEDIDAS_PROTECAO_COLETIVA[]"/>
                         </td><td>
                        <input type="text" name="laudos_avaliacoes_frio|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input type="text" name="laudos_avaliacoes_frio|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input name="laudos_avaliacoes_frio|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td ><textarea name="laudos_avaliacoes_frio|ENQUADRAMENTO[]" rows="10" ></textarea></td>
          </tr>
               </table>
<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_calor" style="display:none">
    
    
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
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
<td></td><td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_calor|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_calor|CODIGO_SETOR[]"/></td>    
          </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td>
            <td>
			
              <input id="laudos_avaliacoes_calor|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
                </td>
          </tr>
    <tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" name="laudos_avaliacoes_calor|NUMERO_FUNCS_SETOR[]" id="FUNCOES_EXPOSTAS" size="6"/></td>
        
    </tr>
          <tr>
             <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>    
          </tr>
            <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_calor|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="49%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="35%">Temperatura Medida (oC)</td>
                                                    <td width="28%">Temperatura Permitida (oC)</td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_calor" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_calor_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_calor_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_calor_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_calor_maquinas|TEMPERATURA_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_calor_maquinas|TEMPERATURA_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                        <tr></tr>
          </tr>

                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                            </td><td>
                        <input type="text" name="laudos_avaliacoes_calor|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input name="laudos_avaliacoes_calor|FONTE_GERADORA[]"/></td>
		  </tr>	

                    
          <tr>
            <td >Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_calor|ENQUADRAMENTO[]" rows="10" ></textarea></td>
          </tr>
        </table>  
<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_umidade" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
            <td><input type="hidden" name="laudos_avaliacoes_umidade|TIPO_AVALIACAO[]"/></td>
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
            
              <td >Periodicidade de exposi&ccedil;&atilde;o</td><td>
              <input id="laudos_avaliacoes_umidade|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
              </td>
             <td> <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_umidade|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_umidade|CODIGO_SETOR[]"/></td>
              
          </tr><tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_umidade|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>
          </tr>
            <tr>
              <td  >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_umidade|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
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
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_umidade_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_umidade_maquinas|UMIDADE_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_umidade_maquinas|UMIDADE_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                        <tr></tr>
          </tr>    
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_umidade|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_umidade|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_umidade|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                            </td><td>
                        <input type="text" name="laudos_avaliacoes_umidade|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
    
    
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input type="text" name="laudos_avaliacoes_umidade|FONTE_GERADORA[]"/></td>
		  </tr>	
          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_umidade|ENQUADRAMENTO[]" rows="10" ></textarea></td>
          </tr>
        </table>
<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_radiacao_nao_ionizante" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_radiacao_nao_ionizante|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_radiacao_nao_ionizante|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o</td> 
              <td><input id="laudos_avaliacoes_radiacao_nao_ionizante|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
                </td>
<td> </td><td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radicao_nao_ionizante|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_nao_ionizante|CODIGO_SETOR[]" size="0"/></td>              
                         
          </tr>
                          <tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_radiacao_nao_ionizante|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
          <tr>    
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>                                                            
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="49%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="35%">Concentra&ccedil;&atilde;o Medida (C/kg)</td>
                                                    <td width="28%">Concentra&ccedil;&atilde;o Permitida (C/kg)</td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_radiacao_nao_ionizante" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><seleinputct name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|DENSIDADE_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante_maquinas|DENSIDADE_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                        <tr></tr>
          </tr>      
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
		  <tr>
		  <td  >Fonte geradora</td>
		  <td><input name="laudos_avaliacoes_radiacao_nao_ionizante|FONTE_GERADORA[]"/></td>
		  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea rows="10" cols="100"></textarea></td>
          </tr>
        </table>
<table width="100%" border="0" class="tabela" id="tabela_modelo_avaliacao_radiacao_ionizante" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_radiacao_ionizante|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_radiacao_ionizante|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
          <tr>
            <td colspan="2">Periodicidade de exposi&ccedil;&atilde;o </td><td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radicao_ionizante|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_ionizante|CODIGO_SETOR[]"/>			
			
              <input id="laudos_avaliacoes_radiacao_ionizante|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/ >
              </td>
          </tr>
            <tr>
              <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_radiacao_ionizante|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>                                                            
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_radiacao_ionizante|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentra&ccedil;&atilde;o Medida (C/kg)</td>
                                                    <td width="20%">Concentra&ccedil;&atilde;o Permitida (C/kg)</td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_radiacao_ionizante" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_radiacao_ionizante_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_radiacao_ionizante_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_radiacao_ionizante_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_radiacao_ionizante_maquinas|DENSIDADE_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_radiacao_ionizante_maquinas|DENSIDADE_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                        <tr></tr>
          </tr>    
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                    </td><td>
                        <input type="text" name="laudos_avaliacoes_radiacao_nao_ionizante|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
        
    
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input name="laudos_avaliacoes_radiacao_ionizante|FONTE_GERADORA[]"/></td>
		  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea rows="10" cols="100"></textarea></td>
          </tr>
        </table>
<table width="100%" border="0" class="tabela" id="tabela_modelo_avaliacao_outros_fisicos" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
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
            <td  >Periodicidade de exposi&ccedil;&atilde;o</td>
            <td> 
            <input id="laudos_avaliacoes_outros_fisicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
</td>
                <td> </td><td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_fisicos|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_fisicos|CODIGO_SETOR[]"/></td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_outros_fisicos|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_outros_fisicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input name="laudos_avaliacoes_outros_fisicos|FONTE_GERADORA[]"/></td>
		  </tr>	
                  <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea rows="10" cols="100"></textarea></td>
          </tr>
        </table>
<table width="100%" border="0" class="tabela" id="tabela_modelo_avaliacao_sangue_humano" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_umidade|TIPO_AVALIACAO[]"/></td>                        
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_sangue_humano|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td><td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_humano|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_humano|CODIGO_SETOR[]"/>		
            </td>
              <td>
                          <input id="laudos_avaliacoes_sangue_humano|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
</td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_sangue_humano|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>                                                            
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_sangue_animal|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentra&ccedil;&atilde;o Medida (C/kg)</td>
                                                    <td width="20%">Concentra&ccedil;&atilde;o Permitida (C/kg)</td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_sangue_humano" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_humano_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_humano_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_sangue_humano_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_sangue_humano_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_sangue_humano_maquinas|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>

                                </div>
                            </div>
                        </td>
                        <tr></tr>
          </tr>  
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_sangue_humano|MEDIDAS_PROTECAO_COLETIVA[]"/>
                          <input type="text" name="laudos_avaliacoes_sangue_humano|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_sangue_humano|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                    </td><td>
                        <input type="text" name="laudos_avaliacoes_sangue_humano|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              

	  <tr>
	  <td >Fonte geradora</td>
	  <td><input name="laudos_avaliacoes_sangue_humano|FONTE_GERADORA[]"/></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea rows="10" cols="100"></textarea></td>
          </tr>
        </table>
<table width="100%" border="0" class="tabela" id="tabela_modelo_avaliacao_sangue_animal" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
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
            <td >Periodicidade de exposi&ccedil;&atilde;o </td><td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_animal|UNIDADE[]"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_animal|CODIGO_SETOR[]"/>		
            </td>
              <td>
                          <input id="laudos_avaliacoes_sangue_animal|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
                              </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_sangue_animal|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>                                                            
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_sangue_animal|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentra&ccedil;&atilde;o Medida (C/kg)</td>
                                                    <td width="20%">Concentra&ccedil;&atilde;o Permitida (C/kg)</td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_sangue_animal" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_sangue_animal_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_sangue_animal_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_sangue_animal_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_sangue_animal_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_sangue_animal_maquinas|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                        <tr></tr>
          </tr>  
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_sangue_animal|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_sangue_animal|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_sangue_animal|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                            <input type="text" name="laudos_avaliacoes_sangue_animal|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
    
        <tr>
	  <td >Fonte geradora</td>
	  <td><input name="laudos_avaliacoes_sangue_animal|FONTE_GERADORA[]"/></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_sangue_animal|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
<table width="100%" border="0" class="tabela" id="tabela_modelo_avaliacao_manejo_animais" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_sangue_animal|TIPO_AVALIACAO[]"/></td>
              

          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_manejo_animais|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o </td>
              <td>
                          <input id="laudos_avaliacoes_sangue_animal|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
                </td>
            <td></td><td>
			  <input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_manejo_animais|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_manejo_animais|CODIGO_SETOR[]" size="0"/>
                
            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_manejo_animais|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>                                                            
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_manejo_animais|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentra&ccedil;&atilde;o Medida (C/kg)</td>
                                                    <td width="20%">Concentra&ccedil;&atilde;o Permitida (C/kg)</td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_manejo_animais" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_manejo_animais_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_manejo_animais_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_manejo_animais_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_manejo_animais_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_manejo_animais_maquinas|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                        <tr></tr>
          </tr>  
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_manejo_animais|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_manejo_animais|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_manejo_animais|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                            </td><td>
                        <input type="text" name="laudos_avaliacoes_manejo_animais|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>           
              
    
          <tr>
	  <td >Fonte geradora</td>
	  <td><input name="laudos_avaliacoes_manejo_animais|FONTE_GERADORA[]"/></td>
	  </tr>	
          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_manejo_animais|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_outros_biologicos" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
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
            <td colspan="2">Periodicidade de exposi&ccedil;&atilde;o 
            </td><td>	
              <input id="laudos_avaliacoes_outros_biologicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
              </td></td><td>
			  <input type="hidden" name="laudos_avaliacoes_outros_biologicos|UNIDADE[]"/></td><td>
			  <input type="hidden" name="laudos_avaliacoes_outros_biologicos|CODIGO_SETOR[]"/>				
              <td>
                  
              </td>  
          </tr>          
              <tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_outros_biologicos|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>                                                            
            <td >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_outros_biologicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentra&ccedil;&atilde;o Medida (C/kg)</td>
                                                    <td width="20%">Concentra&ccedil;&atilde;o Permitida (C/kg)</td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>

                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div id="div_maq_equip_manejo_animais" style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                      <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_outros_biologicos|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_outros_biologicos|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_outros_biologicos|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_outros_biologicos|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_outros_biologicos|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                            </div>
                        </td>
                        <tr></tr>
          </tr>  
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_outros_biologicos|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_outros_biologicos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_outros_biologicos|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                            </td><td>
                        <input type="text" name="laudos_avaliacoes_outros_biologicos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>          
		  <tr>
		  <td >Fonte geradora</td>
		  <td><input name="laudos_avaliacoes_outros_biologicos|FONTE_GERADORA[]"/></td>
		  </tr>	
    
          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_manejo_animais|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_produtos_limpeza" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_produtos_limpeza|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="3"><textarea name="laudos_avaliacoes_produtos_limpeza|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
          <tr>
            <td >Periodicidade de exposi&ccedil;&atilde;o 
            </td><td>	
              <input id="laudos_avaliacoes_produtos_limpeza|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
                </td>
              <td></td><td>
			  <input type="hidden" name="laudos_avaliacoes_produtos_limpeza|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" name="laudos_avaliacoes_produtos_limpeza|CODIGO_SETOR[]" size="0"/>				
                  
              </td>
          </tr>
              <tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_produtos_limpeza|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>
          </tr>
          <tr>
              <td  >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_produtos_limpeza|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentra&ccedil;&atilde;o Medida </td>
                                                    <td width="20%">Concentra&ccedil;&atilde;o Permitida </td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>
            <tr  ><td colspan="4" id="td_maq_equip" ><div style="width:100%;background: appworkspace;overflow:visible ">
                        <div id="m_equip"        >
                        <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                       <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_produtos_limpeza_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_produtos_limpeza_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_produtos_limpeza_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_produtos_limpeza_maquinas|DENSIDADE_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" /></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_produtos_limpeza_maquinas|DENSIDADE_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                    </div>
                        </td>
                        <tr></tr></tr>
	  <tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_produtos_limpeza|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_produtos_limpeza|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_produtos_limpeza|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input type="text" name="laudos_avaliacoes_produtos_limpeza|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>                        
	  <td >Fonte geradora</td>
	  <td><input name="laudos_avaliacoes_produtos_limpeza|FONTE_GERADORA[]"/></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_produtos_limpeza|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_tintas_solventes" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
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
            <td  width="30%">Periodicidade de exposi&ccedil;&atilde;o </td><td>
              <input id="laudos_avaliacoes_tintas_solventes|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
                </td><td></td><td>
			  <input type="hidden" name="laudos_avaliacoes_tintas_solventes|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" name="laudos_avaliacoes_tintas_solventes|CODIGO_SETOR[]" size="0"/>				
                  
              </td>
          </tr><tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_tintas_solventes|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>
          </tr>
          <tr>
              <td  >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_produtos_limpeza|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentra&ccedil;&atilde;o Medida </td>
                                                    <td width="20%">Concentra&ccedil;&atilde;o Permitida </td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>

            <tr  ><td colspan="4" id="td_maq_equip" ><div style="width:100%;background: appworkspace;overflow:visible ">
                        <div id="m_equip"        >
                        <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                       <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_tintas_solventes_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_tintas_solventes_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_tintas_solventes_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_tintas_solventes_maquinas|DENSIDADE_MEDIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" /></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_tintas_solventes_maquinas|DENSIDADE_PERMITIDA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                    </div>
                        </td>
                        <tr></tr></tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_tintas_solventes|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_tintas_solventes|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_tintas_solventes|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                            </td><td>
                        <input type="text" name="laudos_avaliacoes_tintas_solventes|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>                      
	  <tr>
              
	  <td >Fonte geradora</td>
	  <td><input name="laudos_avaliacoes_tintas_solventes|FONTE_GERADORA[]"/></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_tintas_solventes|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_hidrocabonetos_aromaticos" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
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
            <td  >Periodicidade de exposi&ccedil;&atilde;o </td>
            <td>
              <input id="laudos_avaliacoes_hidrocarbonetos|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
            </td>
                        <td></td><td>
			  <input type="hidden" name="laudos_avaliacoes_hidrocarbonetos|UNIDADE[]"/></td><td>
			  <input type="hidden" name="laudos_avaliacoes_hidrocarbonetos|CODIGO_SETOR[]"/>				
            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_hidrocarbonetos|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>
          </tr>
          <tr>
              <td  >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_hidrocarbonetos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentra&ccedil;&atilde;o Medida </td>
                                                    <td width="20%">Concentra&ccedil;&atilde;o Permitida </td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>
            <tr  ><td colspan="4" id="td_maq_equip" ><div style="width:100%;background: appworkspace;overflow:visible ">
                        <div id="m_equip"        >
                        <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                       <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_hidrocarbonetos_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_hidrocarbonetos_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_hidrocarbonetos_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_hidrocarbonetos_maquinas|VALOR_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" /></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_hidrocarbonetos_maquinas|VALOR_REFERENCIA[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                    </div>
                        </td>
                        <tr></tr></tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_hidrocarbonetos|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_hidrocarbonetos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_hidrocarbonetos|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                    </td><td>
                        <input type="text" name="laudos_avaliacoes_hidrocarbonetos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>               
	  <tr>
	  <td >Fonte geradora</td>
	  <td><input name="laudos_avaliacoes_hidrocarbonetos|FONTE_GERADORA[]"/></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_hidrocarbonetos|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
    
        </table>
<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_fumos_metalicos" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
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
            <td   >Periodicidade de exposi&ccedil;&atilde;o </td><td>
              <input id="laudos_avaliacoes_fumos_metalicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
                </td><td></td><td>
			  <input type="hidden" name="laudos_avaliacoes_fumos_metalicos|UNIDADE[]"/></td><td>
			  <input type="hidden" name="laudos_avaliacoes_fumos_metalicos|CODIGO_SETOR[]"/>				
                  
              </td>
          
          </tr><tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_fumos_metalicos|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>
          </tr>
          <tr>
              <td  >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_fumos_metalicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentra&ccedil;&atilde;o Medida </td>
                                                    <td width="20%">Concentra&ccedil;&atilde;o Permitida </td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>

            <tr  ><td colspan="4" id="td_maq_equip" ><div style="width:100%;background: appworkspace;overflow:visible ">
                        <div id="m_equip"        >
                        <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                       <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_fumos_metalicos|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_fumos_metalicos|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_fumos_metalicos|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_fumos_metalicos|VALOR_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" /></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_fumos_metalicos|VALOR_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                    </div>
                        </td>
                        <tr></tr></tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_fumos_metalicos|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_fumos_metalicos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_fumos_metalicos|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                            </td><td>
                        <input type="text" name="laudos_avaliacoes_fumos_metalicos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>                  
	  <tr>
	  <td >Fonte geradora</td>
	  <td><input name="laudos_avaliacoes_fumos_metalicos|FONTE_GERADORA[]"/></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_fumos_metalicos|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
    
    
<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_poeiras_incomodas" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
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
            <td colspan="2">Periodicidade de exposi&ccedil;&atilde;o</td><td>
			
              <input id="laudos_avaliacoes_poeiras_incomodas|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
            </td>
            <td></td><td>
			  <input type="hidden" name="laudos_avaliacoes_poeiras_incomodas|UNIDADE[]"/></td><td>
			  <input type="hidden" name="laudos_avaliacoes_poeiras_incomodas|CODIGO_SETOR[]"/>				
            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_poeiras_incomodas|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>
          </tr>
          <tr>
              <td  >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_poeiras_incomodas|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentra&ccedil;&atilde;o Medida </td>
                                                    <td width="20%">Concentra&ccedil;&atilde;o Permitida </td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>

            <tr  ><td colspan="4" id="td_maq_equip" ><div style="width:100%;background: appworkspace;overflow:visible ">
                        <div id="m_equip"        >
                        <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                       <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_poeiras_incomodas_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_poeiras_incomodas_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_poeiras_incomodas_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_poeiras_incomodas_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" /></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_poeiras_incomodas_maquinas|NIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                    </div>
                        </td>
                        <tr></tr></tr>

	  <tr>
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_poeiras_incomodas|MEDIDAS_PROTECAO_COLETIVA[]"/>

                        <input type="text" name="laudos_avaliacoes_poeiras_incomodas|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_poeiras_incomodas|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                            </td><td>
                        <input type="text" name="laudos_avaliacoes_poeiras_incomodas|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>                           
	  <td >Fonte geradora</td>
	  <td><input name="laudos_avaliacoes_poeiras_incomodas|FONTE_GERADORA[]"/></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_poeiras_incomodas|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>

        </table>
<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_poeiras_minerais" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center"></div></td>
            <td><input type="hidden" name="laudos_avaliacoes_poeiras_minerais|TIPO_AVALIACAO[]"/></td>
          </tr>    
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_poeiras_minaerais|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
          <tr>
            <td colspan="2">Periodicidade de exposi&ccedil;&atilde;o</td><td>
			
              <input id="laudos_avaliacoes_poeiras_incomodas|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
            </td>
            <td></td><td>
			  <input type="hidden" name="laudos_avaliacoes_poeiras_minerais|UNIDADE[]"/></td><td>
			  <input type="hidden" name="laudos_avaliacoes_poeiras_minerais|CODIGO_SETOR[]"/>				
            </td>
          </tr>
          <tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_poeiras_incomodas|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>
          </tr>
          <tr>
              <td  >N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_poeiras_minerais|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr >
              <td  colspan="3"><div style="width:100%;overflow:auto"> 
			  <table id="tbl_funcoes_expostas" width="100%">
			  <tr>
			  	<td>
				<div align="center" >Fun&ccedil;&otilde;es e Grau de Exposi&ccedil;&atilde;o </div></td>
			  </tr>
			  <td>Fun&ccedil;&atilde;o</td><td>Possui Exposi&ccedil;&atilde;o?</td><td>Periodicidade Exposi&ccedil;&atilde;o</td>
			  <tr>
			  <td></td>
			  </tr>
			  </table>
			  <table id="tbl_cabec_maq" width="100%">
			  <tr><td width="35%">
			  <div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="15%">Concentra&ccedil;&atilde;o Medida </td>
                                                    <td width="20%">Concentra&ccedil;&atilde;o Permitida </td>
				</tr>
				</table>
				</div>
				</td>									

          </tr>

            <tr  ><td colspan="4" id="td_maq_equip" ><div style="width:100%;background: appworkspace;overflow:visible ">
                        <div id="m_equip"        >
                        <table id="tbl_maq_equip" width="99%" border="0" >
                                    <tr>                          
                                       <td><input type="hidden" id="CD_UNIDADE" name="laudos_avaliacoes_poeiras_minerais_maquinas|UNIDADE[]" size="0"/></td><td>
			  <input type="hidden" id="CD_SETOR" name="laudos_avaliacoes_poeiras_minerais_maquinas|CODIGO_SETOR[]" size="0"/></td>
                                        
                                      <td  width="49%"  ><input name="laudos_avaliacoes_poeiras_minerais_maquinas|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" style="width:90%"/></td>
                                      <td width="35%"  ><input type="text" name="laudos_avaliacoes_poeiras_minerais_maquinas|NIVEL_MEDIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)" /></td>
                                      <td width="28%" ><input type="text" name="laudos_avaliacoes_poeiras_minerais_maquinas|nIVEL_PERMITIDO[]" value="0" onkeypress="return valida_decimal(this,event)" onblur="formata_decimal_casas(this,'eu',1)"/></td>
                                    </tr>         
                                </table>
                            </div>
                    </div>
                        </td>
                        <tr></tr></tr>
                   <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_poeiras_minaerais|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_poeiras_minaerais|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_poeiras_minaerais|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                        </td><td>
                        <input type="text" name="laudos_avaliacoes_poeiras_minaerais|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>
	  <tr>
	  <td >Fonte geradora</td>
	  <td><input name="laudos_avaliacoes_poeiras_minaerais|FONTE_GERADORA[]"/></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_poeiras_minaerais|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
<table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_iluminamento" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
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
            <td >Periodicidade de exposi&ccedil;&atilde;o </td><td>
			
              <input id="laudos_avaliacoes_iluminamento|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
              </td><td></td><td>
			  <input type="hidden" name="laudos_avaliacoes_iluminamento|UNIDADE[]"/></td><td>
			  <input type="hidden" name="laudos_avaliacoes_iluminamento|CODIGO_SETOR[]"/></td>
          
          </tr><tr>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="laudos_avaliacoes_iluminamento|NUMERO_FUNCS_SETOR[]" size="6" readonly="readonly"/></td>
          </tr>
          <tr>
            <td><center><div>Fun&ccedil;&otilde;es Expostas no setor</div></center></td>
          </tr>
          <tr>              
            <td ><div>N&uacute;mero de Funcion&aacute;rios expostos no setor</div></td>
            <td><input type="text" name="laudos_avaliacoes_iluminamento|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td><div></div></td>
          </tr>
          <tr >
              <td  width="50%"  ><div align="center" >Local/M&aacute;quinas e Equipamentos </div></td>
                                                    <td width="35%">LUX(Medido)</td>
                                                    <td width="15%">LUX(NBR)</td>

          </tr>
                    
                    <tr  ><td colspan="3" id="td_maq_equip" ><div style="width:100%;background: appworkspace;overflow:visible ">
                                <div id="m_equip">
                                <table id="tbl_maq_equip" width="99%" border="0" >
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
           <td colspan="3"><textarea name="laudos_avaliacoes_iluminamento|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>
        <table width="983" border="0" class="tabela" id="tabela_modelo_avaliacao_outros_quimicos" style="display:none">
          <tr>
            <td colspan="4"><div align="center">Avali&ccedil;&atilde;o de Agentes</div></td>
          </tr>
          <tr>
            <td colspan="4"><div align="center">Texto Explicativo </div></td>
            <td><input type="hidden" name="laudos_avaliacoes_outros_quimicos|TIPO_AVALIACAO[]"/></td>
          </tr>
          <tr>
            <td colspan="4"><textarea name="laudos_avaliacoes_outros_quimicos|TEXTO_EXPLICATIVO[]" cols="145" rows="5"></textarea></td>
          </tr>
          <tr>
            <td colspan="2">Periodicidade de exposi&ccedil;&atilde;o </td><td>
			  <input type="hidden" name="laudos_avaliacoes_outros_quimicos|UNIDADE[]"/></td><td>
			  <input type="hidden" name="laudos_avaliacoes_outros_quimicos|CODIGO_SETOR[]"/>				
			
              <input id="laudos_avaliacoes_outros_quimicos|PERIODICIDADE_EXPOSICAO[]" style="width:250px"/>
            </td>
            <td width="17%">N&uacute;mero de Funcion&aacute;rios no Setor</td>
            <td width="7%"><input type="text" id="FUNCOES_EXPOSTAS" size="6"/></td>
          </tr>
          <tr>
            <td colspan="2">N&uacute;mero de Funcion&aacute;rios expostos no setor</td>
            <td><input type="text" name="laudos_avaliacoes_outros_quimicos|NUMERO_FUNCS_EXPOSTOS[]" size="6" readonly="readonly""/></td>
            <td>&nbsp;</td>
          </tr>
         <tr>
            <td width="55%"><div align="center">Local/M&aacute;quinas e Equipamentos </div></td>
			<td colspan="2">Densidade Medida</td>
			<td>Densidade Permitida</td>			
          </tr>              
          
          <tr><td><div><table id="tbl_maqeq">
                      <tr>
                        <td ><input name="laudos_avaliacoes_outros_quimicos|CODIGO_MAQUINA[]" onfocus="carregar_maquinas_equipamentos(this)" onchange="onselect_avaliacoes_maquinas(this)" /></td>
                        <td colspan="2"><input type="text" name="laudos_avaliacoes_outros_quimicos|DENSIDADE_MEDIDA[]" value="0"/></td>
                        <td ><input type="text" name="laudos_avaliacoes_outros_quimicos|DENSIDADE_PERMITIDA[]" value="0" /></td>
                       </tr>
          
                      </table>
                  </div>
              </td>
          </tr>
                   <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Coletivas Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_COLETIVA[]"/>
                        <input type="text" name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_COLETIVA_OUTROS[]"/></td>
                    </tr>           
                    <tr><td>
                     Medidas de Prote&ccedil;&atilde;o Individuais Adotadas   
                     </td>
                        <td><input name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_INDIVIDUAL[]"/>
                            </td><td>
                        <input type="text" name="laudos_avaliacoes_outros_quimicos|MEDIDAS_PROTECAO_INDIVIDUAL_OUTROS[]"/></td>
                    </tr>
	  <tr>
	  <td >Fonte geradora</td>
	  <td><input name="laudos_avaliacoes_outros_quimicos|FONTE_GERADORA[]"/></td>
	  </tr>	

          <tr>
            <td>Enquadramento</td>
            <td colspan="3"><textarea name="laudos_avaliacoes_outros_quimicos|ENQUADRAMENTO[]" cols="145" rows="5"></textarea></td>
          </tr>
        </table>		    
</html>
