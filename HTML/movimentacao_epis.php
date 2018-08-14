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
        background: white;
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
li{display:inline}
.tabela_epis{
    font-size:11px;
}
    .tabela_epis input{
        font-size:12px;
    }
@media \0screen\,screen\9 { 
    .tabela_epis input{
        font-size:9px;
    }
}    
li:hover{display:block;}
#div_statusbar{
	vertical-align: bottom;
	position:absolute;
	top:1%;
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
h1{font-size:150%}
</style>
<script type="text/javascript" src="../classes/js/epis.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Funcionario.js"></script>
<script type="text/javascript" src="../classes/js/Movimento_Epi_d.js"></script>
<script type="text/javascript" src="../classes/js/Movimento_Epi_m.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="../js/consulta_externa.js"></script>
<script type="text/javascript" src="../classes/js/Fabricantes.js"></script>
    <script type="text/javascript">  
         empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>+0;        
         empresa_ativa=empresa_ativa.toString();
         newepis=new epis();
         newmovimentoepi_d=new Movimento_Epi_d();
         newmovimentoepi_d.inicializa();
         newmovimentoepi_m=new Movimento_Epi_m();
         newmovimentoepi_m.inicializa();
         
         newfuncionario=new Funcionario();
    
        function procura_registro_movimentacao(campo) {
            buscar_registro(window,campo.name, campo.value,Array("=","="),'movimentacao_epis_m','movimentacao_epis_m','Busca_Movimentacao_Epis_m',false,newmovimentoepi_m);
            exibe_campos_mestre();
            newmovimentoepi_d.inicializa();
            buscar_registros(window,'movimentacao_epis_d', 'Busca_Movimentacao_Epis_d','SEQUENCIAL',newmovimentoepi_m.get_Sequencial(),false,Array("="),newmovimentoepi_d);            
            exibe_campos_detalhes();
        }    
        
        function exibe_campos_mestre(){
            document.forms[1].reset();
            if (acao=='A'){
                  document.forms[1].elements["SEQUENCIAL"].value = new String(newmovimentoepi_m.get_Sequencial());
                  document.forms[1].elements["TIPO_MOVIMENTACAO"].value = new String(newmovimentoepi_m.get_Tipo_Movimento());
                  document.forms[1].elements["UNIDADE"].value = new String(newmovimentoepi_m.get_Unidade());
                  document.forms[1].elements["CODIGO_FUNCIONARIO"].value = new String(newmovimentoepi_m.get_Codigo_Funcionario());
                  document.forms[1].elements["DATA_MOVIMENTACAO"].value = new String(newmovimentoepi_m.get_Data_Movimentacao());
                  document.forms[1].elements["STATUS_IMPRESSO"].value = new String(newmovimentoepi_m.get_Impresso());
            }            
            
        }
            function apaga_linha(td){
                ttr=td.parentNode;
                valor_celula=captura_valores(ttr);
                tbody=ttr.parentNode;
                tbody.removeChild(ttr);
                newmovimentoepi_d.apaga_linha(ttr.rowIndex);
                
            }
        
        function exibe_campos_detalhes(){
            document.forms[2].reset();
            if (acao=='A'){
                for(i = 0; i <  document.getElementById("tbl_detalhes").rows.length; i++)
                {
                document.getElementById("tbl_detalhes").deleteRow(0);
                }
                
                response=Array();
                for(x=0;x<newmovimentoepi_d.length();x++){
                    response[0]=newmovimentoepi_d.get_Codigo_Epi(x);
                    response[1]=newmovimentoepi_d.get_Descricao_Epi(x);
                    response[2]=newmovimentoepi_d.get_Tipo_Protecao(x);                    
                    response[3]=newmovimentoepi_d.get_Quantidade_Fornecida(x);                    
                    response[4]=newmovimentoepi_d.get_Vida_Util(x);                    
                    response[5]=newmovimentoepi_d.get_Vida_Util2(x);                    
                    response[6]=newmovimentoepi_d.get_Data_Entrega(x);
                    response[7]=newmovimentoepi_d.get_Proxima_Troca(x);

                    tabela=document.forms[1].elements['tbl_detalhes'];

                    tr=document.createElement('tr');
                    tbody=document.getElementById('t_body');

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:2%;max-width:2%');
                    img=document.createElement('img');
                    img.src='../images/imageres.dll_I0037_0409.png';
                    img.setAttribute('style','height:15px;width:15px');
                    img.setAttribute('src','../images/imageres.dll_I0037_0409.png');
                    img.alt='Remover a linha corrente';
                    celula.appendChild(img);
                    tr.appendChild(celula);


                    celula=document.createElement('td');
                    celula.setAttribute('style','width:4%;max-width:5%;text-align:right');
                    celula.innerHTML=response[0];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:24%');
                    celula.innerHTML=response[1];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:16%');
                    celula.innerHTML=response[2];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:10%;text-align:right;');
                    celula.innerHTML=response[3];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:10%;text-align:right;');
                    celula.innerHTML=response[4];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:6%');
                    celula.innerHTML=response[5];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:6%');
                    celula.innerHTML=response[6];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:6%');
                    celula.innerHTML=response[7];
                    tr.appendChild(celula);
                    
                    celula=document.createElement('td');
                    celula.setAttribute('style','width:5%');
                    celula.innerHTML=null;
                    tr.appendChild(celula);

                    tbody.appendChild(tr);

                  
            }            
            
        }
        }
            function devolve_item(td,celula){
                ttr=td.parentNode;
                valor_celula=captura_valores(ttr);
                tbody=ttr.parentNode;
                newmovimentoepi_d.set_Devolvido(ttr.rowIndex-1);
                celula.setAttribute('disabled','true');
                ttr.cells[9].firstChild.checked=ttr.cells[9].firstChild.checked?false:true;
                dt=document.createElement('input');
                dt.type="text";
                dt.value=retorna_data_hoje();
                ttr.cells[10].innerHTML=ttr.cells[9].firstChild.checked?dt.value:null;
                newmovimentoepi_d.set_Data_Devolucao(ttr.rowIndex-1,ttr.cells[10].innerHTML);
                
            }
        

        function exibe_campos_detalhes_devolucao(){
            
            if (acao=='A'){
                for(i = 0; i <  document.getElementById("tbl_detalhes2").rows.length; i++)
                {
                document.getElementById("tbl_detalhes2").deleteRow(0);
                }
                
                response=Array();
                
                for(x=0;x<newmovimentoepi_d.length();x++){
                    response[0]=newmovimentoepi_d.get_Codigo_Epi(x);
                    response[1]=newmovimentoepi_d.get_Descricao_Epi(x);
                    response[2]=newmovimentoepi_d.get_Tipo_Protecao(x);                    
                    response[3]=newmovimentoepi_d.get_Quantidade_Fornecida(x);                    
                    response[4]=newmovimentoepi_d.get_Vida_Util(x);                    
                    response[5]=newmovimentoepi_d.get_Vida_Util2(x);                    
                    response[6]=newmovimentoepi_d.get_Data_Entrega(x);
                    response[7]=newmovimentoepi_d.get_Proxima_Troca(x);
                    response[8]=newmovimentoepi_d.get_Devolvido(x);
                    response[9]=newmovimentoepi_d.get_Data_Devolucao(x);

                    tabela=document.forms[3].elements['tbl_detalhes2'];

                    tr=document.createElement('tr');
                    tbody=document.getElementById('t_body2');
                    
                    celula=document.createElement('td');
                    celula.setAttribute('style','width:2%;max-width:2%');
                    img=document.createElement('img');
                    img.src='../images/imageres.dll_I0037_0409.png';
                    img.setAttribute('style','height:15px;width:15px');
                    img.setAttribute('src','../images/devolver.png');
                    img.setAttribute('alt',"Devolver equipamento");
                    img.setAttribute('onclick','devolve_item(this.parentNode,this)');
                    celula.appendChild(img);
                    tr.appendChild(celula);


                    celula=document.createElement('td');
                    celula.setAttribute('style','width:4%;max-width:4%;text-align:right');
                    celula.innerHTML=response[0];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:24%');
                    celula.innerHTML=response[1];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:17%');
                    celula.innerHTML=response[2];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:10%;text-align:right;');
                    celula.innerHTML=response[3];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:10%;text-align:right;');
                    celula.innerHTML=response[4];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:6%');
                    celula.innerHTML=response[5];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:6%');
                    celula.innerHTML=response[6];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:6%');
                    celula.innerHTML=response[7];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:4%');
                    chkbox=document.createElement('input');
                    chkbox.type="checkbox";
                    chkbox.disabled="disabled";
                    chkbox.value=response[8];
                    celula.appendChild(chkbox);
                    tr.appendChild(celula);
                    
                    celula=document.createElement('td');
                    celula.setAttribute('style','width:6%');
                    celula.innerHTML=response[9];
                    tr.appendChild(celula);


                    tbody.appendChild(tr);

                  
            }            
            
        }
        }

        function procura_registro_epi(campo) {
            buscar_registro(window,campo.name, campo.value,Array("=","="),'epis','epis','Busca_Epi',false,newepis);

            if (acao=='A'){
                        document.forms[2].elements["CODIGO_EPIS"].value = new String(newepis.get_Codigo_Epis());
                        document.forms[2].elements["DESCRICAO_EPI"].value = new String(newepis.get_Descricao());
                        document.forms[2].elements["TIPO_PROTECAO"].value = new String(newepis.get_Tipo_De_Protecao());
                        document.forms[2].elements["QTDE_FORNECIDA"].value = new String(newepis.get_Fabricante());
                        document.forms[2].elements["VIDA_UTIL"].value = new String(newepis.get_Vida_Util());    
                        document.forms[2].elements["VIDA_UTIL2"].value = new String(newepis.get_Vida_Util2());    
                        document.forms[2].elements['PROXIMA_TROCA_PREVISTA'].value=calculo_previsao(newepis.get_Vida_Util(),newepis.get_Vida_Util2());                        
                        if (newepis.get_Estoque_Atual<=0){
                            alert('Não há estoque suficiente pra essa operação!. Verifique.');
                            document.getElementById('CODIGO_EPIS').focus();
                            return;
                        }
            }
            else {
                 alert('Registro de EPI não encontrado!. Verifique.');
                 document.getElementById('CODIGO_EPIS').focus();
                 return;
            }

        }
        function calculo_previsao(vida_util,vida_util2){
            data_hoje=new Date();
            vida_util=parseInt(vida_util);
            if (vida_util2=='HORA(S)'){
                data_hoje.setHours(data_hoje.getHours()+(vida_util));
            }
            if (vida_util2=='DIA(S)'){
                data_hoje.setDate(data_hoje.getDate()+(vida_util));
            }
            if (vida_util2=='SEMANA(S)'){
                data_hoje.setDate(data_hoje.getDate()+((vida_util*7)));
            }
            if (vida_util2=='MES(ES)'){
                data_hoje.setMonth((data_hoje.getMonth())+(vida_util));
            }
            if (vida_util2=='ANO(S)'){
                data_hoje.setFullYear((data_hoje.getFullYear())+(vida_util));
            }

            dia=Right('0'+String(data_hoje.getDate()),2);
            mes=Right('0'+String(data_hoje.getMonth()+1),2);
            ano=data_hoje.getFullYear();
            novadata=dia+'/'+mes+'/'+ano;
            return novadata;


            
            
        }
        function procura_funcionario(campo){
            buscar_registro(window,campo.name, campo.value,Array("=","="),'funcionarios','funcionarios','Busca_Funcionario',false,newfuncionario);
            if (acao=='I'){
                alert('Funcionário não encontrado!');
            }
            else {
                if (recuperaAbaAtiva()=="celAbaEntrega"){
                    document.forms[1].elements['CODIGO_FUNCIONARIO'].value=newfuncionario.get_Codigo_Funcionario();
                    document.forms[1].elements['MATRICULA_FUNCIONARIO'].value=newfuncionario.get_Matricula_Do_Funcionario();
                    document.forms[1].elements['NOME_FUNCIONARIO'].value=newfuncionario.get_Nome_Funcionario();
                }
                if (recuperaAbaAtiva()=="celAbaDevolucao"){
                    document.forms[3].elements['CODIGO_FUNCIONARIO'].value=newfuncionario.get_Codigo_Funcionario();
                    document.forms[3].elements['MATRICULA_FUNCIONARIO'].value=newfuncionario.get_Matricula_Do_Funcionario();
                    document.forms[3].elements['NOME_FUNCIONARIO'].value=newfuncionario.get_Nome_Funcionario();
                    
                }
            }
            if (document.forms[3].elements['TIPO_MOVIMENTACAO'].value=="D"){
                //buscar_registro(window,campo.name, campo.value,Array("=","="),'movimentacao_epis_m','movimentacao_epis_m','Busca_Movimentacao_Epis_m_Devolucao',false,newmovimentoepi_m);
                //exibe_campos_mestre();
                newmovimentoepi_d.inicializa();
                buscar_registros(window,'movimentacao_epis_d','Busca_Movimentacao_Epis_d_Devolucao',campo.name, campo.value,false,Array("=","="),newmovimentoepi_d);
                exibe_campos_detalhes_devolucao();                
            }
        }
         
        function exibe_campos(){
                //CODIGO_EPIS=document.forms[1].elements['CODIGO_EPIS'].value;
                //document.forms[1].reset();
                
                //newepis.setValores(newregistro.getValores());
                                
            }

            function carrega_campo(){
                 codigo_maquina=document.forms[1].elements['FABRICANTE'].value;
                  buscar_registros(window,"fabricantes","Carrega_Fabricante",null,null,true,null,newfabricantes);
                 document.forms[1].elements['FABRICANTE'].length=0;
                 document.forms[1].elements['FABRICANTE'].add(new Option('Selecione um Fabricante','0'));
                 for(i=1;i <= newfabricantes.length();i++){
                        document.forms[1].elements['FABRICANTE'].add(new Option(newfabricantes.get_Nome(i-1),i-1));
                 }       
            }           

            
            var acao='';
            function grava_registro(){
             if (confirm("Confirma o registro")){
                if (recuperaAbaAtiva()=='celAbaEntrega'){
                    document.forms[1].action="../PHP/Movimento_Epis_Class.php?acao="+"I"+"&newmovimentoepi_d="+newmovimentoepi_d.retorna_todas_linhas();
                    document.forms[1].submit();
                }
                if (recuperaAbaAtiva()=='celAbaDevolucao'){
                    document.forms[3].action="../PHP/Movimento_Epis_Class.php?acao="+"I"+"&newmovimentoepi_d="+newmovimentoepi_d.retorna_todas_linhas();
                    document.forms[3].submit();
                }
             }
            }
            function apaga_registro(){
                if (confirm("Confirma a exclusÃ£o do registro?")){
                    document.forms[1].action="../PHP/Epis_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
            function proximo_registro(campo,visao){
                codemp=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codemp,">",visao,newepis);                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codemp=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name, codemp,"<",visao,newepis);
                exibe_campos();
            }  
            function inserir_linha_detalhe(){
		if (document.forms[2].elements['QTDE_FORNECIDA'].value==0) {
                    alert ('Quantidade deve ser > 0');
                    document.forms[2].elements['QTDE_FORNECIDA'].focus();
                    return;
		}
                response=Array();
                response[0]=document.forms[2].elements['CODIGO_EPIS'].value;
                response[1]=document.forms[2].elements['DESCRICAO_EPI'].value;
                response[2]=document.forms[2].elements['TIPO_PROTECAO'].value;
                response[3]=document.forms[2].elements['QTDE_FORNECIDA'].value;
                response[4]=document.forms[2].elements['VIDA_UTIL'].value;
                response[5]=document.forms[2].elements['VIDA_UTIL2'].value;
                response[6]=document.forms[2].elements['DATA_ENTREGA'].value;
                response[7]=document.forms[2].elements['PROXIMA_TROCA_PREVISTA'].value;
                response[8]=0;
                response[9]=null;
                response[10]=document.forms[2].elements['FABRICANTE'].value;

                tabela=document.forms[1].elements['tbl_detalhes'];
                
                tr=document.createElement('tr');
                tbody=document.getElementById('t_body');
                
                celula=document.createElement('td');
                celula.setAttribute('style','width:2%;max-width:2%');
                img=document.createElement('img');
                img.src='../images/imageres.dll_I0037_0409.png';
                img.setAttribute('style','height:15px;width:15px');
                img.setAttribute('src','../images/imageres.dll_I0037_0409.png');
				img.alt='Remover a linha corrente';
                celula.appendChild(img);
                celula.setAttribute('onclick','apaga_linha(this)');
                tr.appendChild(celula);


                celula=document.createElement('td');
                celula.setAttribute('style','width:4%;max-width:4%;text-align:right');
                celula.innerHTML=response[0];
                tr.appendChild(celula);

                celula=document.createElement('td');
                celula.setAttribute('style','width:24%');
                celula.innerHTML=response[1];
                tr.appendChild(celula);

                celula=document.createElement('td');
                celula.setAttribute('style','width:16%');
                celula.innerHTML=response[2];
                tr.appendChild(celula);

                celula=document.createElement('td');
                celula.setAttribute('style','width:10%;text-align:right;');
                celula.innerHTML=response[3];
                tr.appendChild(celula);

                celula=document.createElement('td');
                celula.setAttribute('style','width:10%;text-align:right;');
                celula.innerHTML=response[4];
                tr.appendChild(celula);
                
                celula=document.createElement('td');
                celula.setAttribute('style','width:6%');
                celula.innerHTML=response[5];
                tr.appendChild(celula);
                
                celula=document.createElement('td');
                celula.setAttribute('style','width:6%');
                celula.innerHTML=response[6];
                tr.appendChild(celula);
                
                celula=document.createElement('td');
                celula.setAttribute('style','width:6%');
                celula.innerHTML=response[7];
                tr.appendChild(celula);
                
                celula=document.createElement('td');
                celula.setAttribute('style','width:5%');
                tr.appendChild(celula);
				
                tbody.appendChild(tr);

                response[0]='CODIGO_EPIS'+'='+response[0];
                response[1]='DESCRICAO_EPI'+'='+response[1];
                response[2]='TIPO_PROTECAO'+'='+response[2];
                response[3]='QTDE_FORNECIDA'+'='+response[3];
                response[4]='VIDA_UTIL'+'='+response[4];
                response[5]='VIDA_UTIL2'+'='+response[5];
                response[6]='DATA_ENTREGA'+'='+response[6];
                response[7]='PROXIMA_TROCA_PREVISTA'+'='+response[7];
                response[8]='DEVOLVIDO'+'='+response[8];
                response[9]='DATA_EFETIVA_DEVOLUCAO'+'='+response[9];
                response[10]='FABRICANTE'+'='+response[10];
                Xresp=response;
                Xresp.unshift('LINHA_NUMERO'+'='+'0');
                Xresp.unshift('SEQUENCIAL'+'='+'0');
                Xresp.unshift('CODIGO_EMPRESA'+'='+empresa_ativa);                
                Xresp2=Xresp.join('|');
                newmovimentoepi_d.setValores(Xresp2);



                
                
            }
            function captura_linha(ttr){
                valor_celula=captura_valores(ttr);
                document.forms[1].elements['CODIGO_FUNCIONARIO'].value=valor_celula[0];
                document.forms[1].elements['MATRICULA_FUNCIONARIO'].value=valor_celula[1];
                document.forms[1].elements['NOME_FUNCIONARIO'].value=valor_celula[2];
                document.forms[1].elements['CODIGO_FUNCIONARIO'].focus();
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
                div_pai.style.height=posicao[2];
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
                buscar_registros(window,'funcionarios','Consulta_Funcionarios',Array("CODIGO_EMPRESA","NOME_FUNCIONARIO"),parm,false,Array("=","like "),newregistros);
                
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
            function data_hoje(campo){
                data_hoje=new Date();
                dia=Right('0'+String(data_hoje.getDate()),2);
                mes=Right('0'+String(data_hoje.getMonth()+1),2);
                ano=data_hoje.getFullYear();
                novadata=dia+'/'+mes+'/'+ano;
                if (campo.value=='')  campo.value=novadata;
            }
		
                
                function valida_tipo_movimento(campo){
				switch (campo.value){
					case "R":
					document.forms[1].elements['SEQUENCIAL'].disabled=false;
					document.getElementById('tb_lancamento_epis').disabled=false;
					document.getElementById('MOTIVO_DEVOLUCAO').style.display="none";
					document.getElementById('PROXIMA_TROCA_PREVISTA').disabled=false;
					document.getElementById('DATA_EFETIVA_DEVOLUCAO').disabled=true;					
					break;
					case "D":
					document.forms[1].elements['SEQUENCIAL'].disabled=true;
					document.getElementById('tb_lancamento_epis').disabled=true;					
					document.getElementById('MOTIVO_DEVOLUCAO').style.display="block";
					document.getElementById('PROXIMA_TROCA_PREVISTA').disabled=true;
					document.getElementById('DATA_EFETIVA_DEVOLUCAO').disabled=false;					
					break;
				}

			}
                        function imprime_movimento(){
                                xcodemp=getUrlvars('CODIGO_EMPRESA');
                                xseq=getUrlvars('SEQUENCIAL');
                                xcodfunc=getUrlvars('CODIGO_FUNCIONARIO');
                                if (xseq>0){
                                    parm="?CODIGO_EMPRESA="+xcodemp;
                                    parm=parm+"&SEQUENCIAL="+xseq;
                                    parm=parm+"&CODIGO_FUNCIONARIO="+xfunc;
                                    window.open("Relatorio_Entrega_EPIs_NR1.php"+parm, "print", "location=no resizable=YES directories=no menubar=no status=no toolbar=no titlebar=no");   
                                }
                                CODIGO_EMPRESA=null;
                                SEQUENCIAL=null;
                                CODIGO_FUNCIONARIO=null;
                        }
                        
                        function valida_qtde(campo){
                            if (campo.value==0){
                                alert('Quantidade deve ser > 0');
                            }
                            if (newepis.get_Estoque_Atual()-campo.value<0){
                                alert('Não há quantidade suficiente no estoque para essa operação! Verifique.');
                            }
                        }

        </script>

</head>

<body >
<center><h1>Movimentação de EPIs para Funcionários</h1></center>
<div>
    <form id="frm_barra_tarefas" action="" >
       <button type="button" onclick="">
           <table style="height:30px;">
              <tr>
                <td height="32" width="48"><div align="center"><img src="../images/novo.png" height="30" width="28" /></div></td>
              </tr>
              <tr>
                <td height="16">Novo</td>
              </tr>
           </table>
       </button>
   
      <button type="button" onclick="grava_registro();">
          <table>
            <tr>
              <td height="33" width="48"><div align="center"><img src="../images/barra_ferramentas/floppy.png" alt="gravar" width="30" height="31" /></div></td>
            </tr>
            <tr>
              <td height="16">Gravar</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="apaga_registro();">
          <table>
            <tr>
              <td height="33" width="48"><div align="center"><img src="../images/barra_ferramentas/error_button_2.png" height="29" width="31" /></div></td>
            </tr>
            <tr>
              <td height="16">Apagar</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="descer();">
          <table>
            <tr>
              <td height="34" width="48"><div align="center"><img src="../images/update_quantity_cart[1].png" height="28" width="38" /></div></td>
            </tr>
            <tr>
              <td height="16">Desfazer</td>
            </tr>
          </table>
      </button>
       <button  type="button" onclick="subir();">
          <table>
            <tr>
              <td height="34" width="48"><div align="center"><img src="../images/cima.gif" height="26" width="29" /></div></td>
            </tr>
            <tr>
              <td height="16">Primeiro</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="navega_registro('Anterior');">
          <table>
            <tr>
              <td height="35" width="48"><div align="center"><img src="../images/left.png" height="28" width="35" /></div></td>
            </tr>
            <tr>
              <td height="16">Anterior</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="navega_registro('Proximo')">
          <table>
            <tr>
              <td height="35" width="48"><div align="center"><img src="../images/right.png" height="28" width="36" /></div></td>
            </tr>
            <tr>
              <td height="16">Pr&oacute;ximo</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="descer();">
          <table>
            <tr>
              <td height="35" width="48"><div align="center"><img src="../images/baixo.gif" height="32" width="32" /></div></td>
            </tr>
            <tr>
              <td height="16">Ultimo</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="descer();">
          <table>
            <tr>
              <td height="34" width="48"><div align="center"><img src="../images/printer_2.png" height="32" width="36" /></div></td>
            </tr>
            <tr>
              <td height="18">Imprimir</td>
            </tr>
          </table>
      </button>
      <button  type="button" onclick="document.forms[1].reset();document.forms[1].elements['CODIGO_CNAE'].focus();">
          <table>
            <tr>
              <td height="35" width="48"><div align="center"><img src="../images/folha.gif" height="33" width="28" /></div></td>
            </tr>
            <tr>
              <td height="16">Limpar</td>
            </tr>
          </table>
      </button>  

    </form>

    <div id="div_statusbar">
      <table width="109" height="393" border="0">
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
      </table>
    </div>
</div>
<script type="text/javascript" src="../classes/js/Abas.js"></script>
      <script type="text/javascript" src="../js/script.js" ></script>
      <link href="../css/designer.css" type="text/css" rel="stylesheet" />
      <link href="estilosistema.css" type="text/css" rel="stylesheet" />
      <div>
        <table width="30%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaEntrega" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                Entrega de EPIs </td>                

                <td width="10%" height="36" align="center" valign="middle" class="abainativa" id="celAbaDevolucao" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                Devolução de EPIs </td>                
            </tr>
            
       </table>	  
      <div id="divEntrega" style="display: block;overflow:auto;height:60%;min-height:60%;" >
       <form id="frm_entrega" method="POST">
      
                     <table width="95%" border="0" class="tabela" >
          <tr>
            <td>Unidade</td>
            <td><input type="text" name="UNIDADE" maxlength="10" readonly="readonly" size="10" style="text-align:right" class="input" onkeypress="return entrada_numerica_inteira(this,event)" value="<?php echo $_SESSION['unidade']?>" /></td>
            <td colspan="5"><input type="text" maxlength="50" readonly="readonly" size="50" value="<?php echo $_SESSION['nome_unidade']?>" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Tipo de Movimento</td>
            <td><select name="TIPO_MOVIMENTACAO" onchange="valida_tipo_movimento(this);" >
              <option value="E">(Entrega)</option>
                        </select></td>
            <td style="max-width:50px">Impresso</td>
            <td style="max-width:50px"><input type="checkbox" disabled="disabled" name="STATUS_IMPRESSO" value="checkbox" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="83">N&uacute;mero Movimento </td>
            <td width="98"><p>
                <input type="text" name="SEQUENCIAL" maxlength="10" size="10" style="text-align:right" class="input" onkeypress="return entrada_numerica_inteira(this,event)" onblur="procura_registro_movimentacao(this)" />
            <img src="../images/search.png" width="10px" height="10px"/></p></td>
            <td width="112">C&oacute;digo Funcion&aacute;rio </td>
            <td width="127"><input type="text" name="CODIGO_FUNCIONARIO" maxlength="5" style="text-align:right" class="input" size="10" onkeypress="return entrada_numerica_inteira(this,event)" onblur="procura_funcionario(this)"/>
            <img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_FUNCIONARIO'],document.forms[1].elements['CODIGO_FUNCIONARIO'])" width="10px" height="10px"/></td>
            <td width="65" style="max-width:50px">Matr&iacute;cula            </td>
            <td width="159" style="max-width:50px"><input type="text" name="MATRICULA_FUNCIONARIO" disabled="disabled" maxlength="10" class="input" size="8"/></td>
            <td width="106">Nome do Funcion&aacute;rio </td>
            <td width="218"><input type="text" name="NOME_FUNCIONARIO" disabled="disabled" maxlength="30" class="input" size="30"/></td>
            <td width="117">Data de Movimenta&ccedil;&atilde;o </td>
            <td width="92"><input type="text" name="DATA_MOVIMENTACAO" maxlength="10" class="input" size="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)" onfocus="data_hoje(this)"/></td>
			</tr>
        </table>
		<br />




		<table id="tb_lancamento_epis" width="95%" border="1px solid" class="tabela_epis" >
	<tr>
	<th >		<caption><strong>Lançamento de EPIs</strong></caption></th>
	</tr>
		<tr>
		<td width="6%" height="30">Código EPI</td>
		<td width="24%">Descrição</td>
		<td width="16%">Tipo de Proteção</td>
		<td width="6%">Fabricante</td>		
		<td width="10%"><div align="center">Qtde a Entregar </div></td>				
		<td width="10%">Vida Útil</td>				
		<td width="6%">Fator</td>						
		<td width="8%" valign="top">Data da Entrega</td>								
		<td width="9%" valign="top">Próxima Troca Prevista</td>								
		<td width="5%"><div align="center">Confirmar Linha </div></td>
		</tr>
		</table>

       </form>
          <div  style="display: block;overflow:auto;height:60%;min-height:60%;">
      <form id="frm_entrada_epis">
          		
		  <table width="95%" border="1px solid" class="tabela_epis" id="tb_lancamento_epis" >
                <tr>
		  <td width="6%" height="26"><input type="text" name="CODIGO_EPIS" maxlength="10" style="text-align:right" class="input" size="7" onkeypress="return entrada_numerica_inteira(this,event)"  onblur="procura_registro_epi(this);" />
	      <img src="../images/search.png" width="10px" height="10px"/></td>
		  <td width="24%"><input  type="text" disabled="disabled" name="DESCRICAO_EPI" maxlength="55" class="input" size="55"/></td>
		  <td width="16%"><input type="text" name="TIPO_PROTECAO" disabled="disabled"  maxlength="10" class="input" size="20"/></td>
		  <td width="6%"><input type="text" name="FABRICANTE" disabled="disabled"  maxlength="10" class="input" size="10"/></td>		  
		  <td width="10%"><div align="center">
		    <input type="text" name="QTDE_FORNECIDA" maxlength="10" style="text-align:right" class="input" onkeypress="return entrada_numerica_inteira(this,event)" onblur="valida_qtde(this)"  size="10"/>
		    </div></td>
		  <td width="10%"><input type="text" name="VIDA_UTIL" maxlength="10" disabled="disabled" class="input" size="10"/></td>
		  <td width="6%"><input type="text" name="VIDA_UTIL2" disabled="disabled"  maxlength="10" class="input" size="10"/></td>
		  <td width="8%"><input type="text" name="DATA_ENTREGA" maxlength="10" class="input" size="12" onfocus="this.value=retorna_data_hoje()" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)" /></td>
		  
		  <td width="9%"><input type="text" name="PROXIMA_TROCA_PREVISTA" maxlength="10" class="input" size="12" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)" /></td>
		  
       		<td width="5%" valign="top"><button type="button" value="Inserir" onclick="inserir_linha_detalhe();">Inserir</button></td>
		</tr>
          </table>
		  
		</BR>
		<div id="div_detalhes" style="height:300px;overflow:scroll;width:95%">
		<table name="tbl_detalhes" id="tbl_detalhes" border="1px solid" class="tabela_epis" width="100%">
		<tr>
		<th>
		<caption><strong>EPIs lançados</strong></caption>
		</th>
		</tr>
		<tbody id="t_body" style="overflow:auto">
		
          </tbody>
		
		</table>
		</div>
      <div id="consultaexterna" style="postion:absolute;display:none">
      <input type="text" id="txt_pesquisa" name="txt_pesquisa" size="50"/>
            <button name="btn" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_FUNCIONARIO'],document.forms[2].elements['txt_pesquisa'])"  type="button" value="Pesquisar" >Pesquisar</button>
      </div>            
           
</form>
          </div>
      </div>
      <div id="divDevolucao" style="display: none;overflow:auto;height:60%;min-height:60%;" >
       <form id="frm_devolucao" method="POST">
      
                     <table width="95%" border="0" class="tabela" >
          <tr>
            <td>Unidade</td>
            <td><input type="text" name="UNIDADE" maxlength="10" readonly="readonly" size="10" style="text-align:right" class="input" onkeypress="return entrada_numerica_inteira(this,event)" value="<?php echo $_SESSION['unidade']?>" /></td>
            <td colspan="5"><input type="text" maxlength="50" readonly="readonly" size="50" value="<?php echo $_SESSION['nome_unidade']?>" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Tipo de Movimento</td>
            <td><select name="TIPO_MOVIMENTACAO" onchange="valida_tipo_movimento(this);" >
              <option value="D">Devolu&ccedil;&atilde;o</option>
                        </select></td>
            <td >Motivo Devolu&ccedil;&atilde;o </td>
            <td><select name="MOTIVO_DEVOLUCAO" style="width:200px" >
              <option value="" selected></option>
              <option value="SP">Substitui&ccedil;&atilde;o Programada</option>
              <option value="DL">Desligamento</option>
              <option value="ED">Equipamento Defeituoso</option>
              <option value="EF">Equipamento Danificado</option>
                        </select></td>
            <td style="max-width:50px">Impresso</td>
            <td style="max-width:50px"><input type="checkbox" disabled="disabled" name="STATUS_IMPRESSO" value="checkbox" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="87">C&oacute;digo Funcion&aacute;rio </td>
            <td width="222"><input type="text" name="CODIGO_FUNCIONARIO" maxlength="5" style="text-align:right" class="input" size="10" onkeypress="return entrada_numerica_inteira(this,event)" onblur="procura_funcionario(this)"/>
            <img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_FUNCIONARIO'],document.forms[1].elements['CODIGO_FUNCIONARIO'])" width="10px" height="10px"/></td>
            <td width="76" style="max-width:50px">Matr&iacute;cula            </td>
            <td width="49" style="max-width:50px"><input type="text" name="MATRICULA_FUNCIONARIO" disabled="disabled" maxlength="5" class="input" size="5"/></td>
            <td width="44">Nome</td>
            <td width="234"><input type="text" name="NOME_FUNCIONARIO" disabled="disabled" maxlength="30" class="input" size="30"/></td>
            <td width="117">Data de Movimenta&ccedil;&atilde;o </td>
            <td width="92"><input type="text" name="DATA_MOVIMENTACAO" maxlength="10" class="input" size="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)" onfocus="data_hoje(this)"/></td>
			</tr>
        </table>
		<br />




		<table id="tb_lancamento_epis" width="95%" border="1px solid" class="tabela_epis" >
	<tr>
	<th >		<caption><strong>EPIs em posse do funcionário/a devolver</strong></caption></th>
	</tr>
		<tr>
		<td width="6%" height="30">Código EPI</td>
		<td width="24%">Descrição</td>
		<td width="16%">Tipo de Proteção</td>
		<td width="10%"><div align="center">Qtde a Devolver</div></td>				
		<td width="10%">Vida Útil</td>				
		<td width="6%">Fator</td>						
		<td width="6%" valign="top">Data da Entrega</td>								
		<td width="6%" valign="top">Próxima Troca Prevista</td>								
		<td width="4%" valign="top">Devolvido?</td>										
		<td width="6%" valign="top">Data Efetiva Devolução</td>										
		<td width="1%" valign="top"></td>										
		</tr>
		</table>
		<div id="div_detalhes" style="height:300px;overflow:scroll;width:95%">
		<table name="tbl_detalhes" id="tbl_detalhes2" border="1px solid" class="tabela_epis" width="100%">
		<tr>
		<th>
		<caption><strong>EPIs lançados</strong></caption>
		</th>
		</tr>
		<tbody id="t_body2" style="overflow:auto">
		
          </tbody>
		
		</table>
		</div>
                
       </form>

      </div>
      </div>
      
    </li>
  </ul>
 
       
      </div>
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
            defineAba( "celAbaEntrega"  , "divEntrega"   );
            defineAba( "celAbaDevolucao" , "divDevolucao" );
            defineAba( "celAbaConsultas" , "divConsulta" );
            defineAba( "celAbaModelos"   , "divModelo"  );
            defineAbaAtiva( "celAbaEntrega" );
        </script>

</body>
</html>
