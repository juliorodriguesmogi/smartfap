<?php session_start()?>
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
	top:10px;
	width: 110px;
	border:solid;
	background-color:silver;
	right: -7px;
	max-width:110px;
	max-height:397px;
	height: 397px;
	text-align: center;
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
                    response[6]=newmovimentoepi_d.get_Proxima_Troca(x);

                    tabela=document.forms[1].elements['tbl_detalhes'];

                    tr=document.createElement('tr');
                    tbody=document.getElementById('t_body');

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:5%;max-width:10%');
                    img=document.createElement('img');
                    img.src='../images/imageres.dll_I0037_0409.png';
                    img.setAttribute('style','height:15px;width:15px');
                    if (document.forms[1].elements['TIPO_MOVIMENTACAO'].value=='R'){
                        img.setAttribute('src','../images/imageres.dll_I0037_0409.png');
                        img.alt='Remover a linha corrente';
                    }
                    else {
                        img.setAttribute('src','../images/devolver.png');
                        img.alt='Devolver equipamento';
                    }
                    celula.appendChild(img);
                    tr.appendChild(celula);


                    celula=document.createElement('td');
                    celula.setAttribute('style','width:4%;max-width:5%;text-align:right');
                    celula.innerHTML=response[0];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:27%');
                    celula.innerHTML=response[1];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:12%');
                    celula.innerHTML=response[2];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:9%;text-align:right;');
                    celula.innerHTML=response[3];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:9%;text-align:right;');
                    celula.innerHTML=response[4];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:9%');
                    celula.innerHTML=response[5];
                    tr.appendChild(celula);

                    celula=document.createElement('td');
                    celula.setAttribute('style','width:11%');
                    celula.innerHTML=response[6];
                    tr.appendChild(celula);
                    celula=document.createElement('td');
                    celula.setAttribute('style','width:3%');
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
                            alert('N�o h� estoque suficiente pra essa opera��o!. Verifique.');
                            document.getElementById('CODIGO_EPIS').focus();
                            return;
                        }
            }
            else {
                 alert('Registro de EPI n�o encontrado!. Verifique.');
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
                alert('Funcion�rio n�o encontrado!');
            }
            else {
                document.forms[1].elements['CODIGO_FUNCIONARIO'].value=newfuncionario.get_Codigo_Funcionario();
                document.forms[1].elements['MATRICULA_FUNCIONARIO'].value=newfuncionario.get_Matricula_Do_Funcionario();
                document.forms[1].elements['NOME_FUNCIONARIO'].value=newfuncionario.get_Nome_Funcionario();
                
                
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
                document.forms[1].action="../PHP/Movimento_Epis_Class.php?acao="+"I"+"&newmovimentoepi_d="+newmovimentoepi_d.retorna_todas_linhas();
                document.forms[1].submit();
             }
            }
            function apaga_registro(){
                if (confirm("Confirma a exclusão do registro?")){
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
            function apaga_linha(td){
                ttr=td.parentNode;
                valor_celula=captura_valores(ttr);
                tbody=ttr.parentNode;
                tbody.removeChild(ttr);
                newmovimentoepi_d.apaga_linha(ttr.rowIndex);
                
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
                response[6]=document.forms[2].elements['PROXIMA_TROCA_PREVISTA'].value;

                tabela=document.forms[1].elements['tbl_detalhes'];
                
                tr=document.createElement('tr');
                tbody=document.getElementById('t_body');
                
                celula=document.createElement('td');
                celula.setAttribute('style','width:5%;max-width:10%');
                img=document.createElement('img');
                img.src='../images/imageres.dll_I0037_0409.png';
                img.setAttribute('style','height:15px;width:15px');
                img.setAttribute('src','../images/imageres.dll_I0037_0409.png');
				img.alt='Remover a linha corrente';
                celula.appendChild(img);
                celula.setAttribute('onclick','apaga_linha(this)');
                tr.appendChild(celula);


                celula=document.createElement('td');
                celula.setAttribute('style','width:4%;max-width:5%;text-align:right');
                celula.innerHTML=response[0];
                tr.appendChild(celula);

                celula=document.createElement('td');
                celula.setAttribute('style','width:27%');
                celula.innerHTML=response[1];
                tr.appendChild(celula);

                celula=document.createElement('td');
                celula.setAttribute('style','width:12%');
                celula.innerHTML=response[2];
                tr.appendChild(celula);

                celula=document.createElement('td');
                celula.setAttribute('style','width:9%;text-align:right;');
                celula.innerHTML=response[3];
                tr.appendChild(celula);

                celula=document.createElement('td');
                celula.setAttribute('style','width:9%;text-align:right;');
                celula.innerHTML=response[4];
                tr.appendChild(celula);
                
                celula=document.createElement('td');
                celula.setAttribute('style','width:9%');
                celula.innerHTML=response[5];
                tr.appendChild(celula);
                
                celula=document.createElement('td');
                celula.setAttribute('style','width:11%');
                celula.innerHTML=response[6];
                tr.appendChild(celula);
                celula=document.createElement('td');
                celula.setAttribute('style','width:3%');
                tr.appendChild(celula);
				
                tbody.appendChild(tr);

                response[0]='CODIGO_EPIS'+'='+response[0];
                response[1]='DESCRICAO_EPI'+'='+response[1];
                response[2]='TIPO_PROTECAO'+'='+response[2];
                response[3]='QTDE_FORNECIDA'+'='+response[3];
                response[4]='VIDA_UTIL'+'='+response[4];
                response[5]='VIDA_UTIL2'+'='+response[5];
                response[6]='PROXIMA_TROCA_PREVISTA'+'='+response[6];

                Xresp=response;
                Xresp.unshift('CODIGO_EMPRESA'+'='+empresa_ativa);
                Xresp.unshift('SEQUENCIAL'+'='+'0');
                Xresp.unshift('LINHA_NUMERO'+'='+'0');
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

        </script>
</head>

<body >
        <?php
 require($DOCUMENT_ROOT . "barra_tarefas.html");
 ?>

<center>
  <h1>Entrada/Devolu&ccedil;&atilde;o de EPIs </h1>
</center>

<script type="text/javascript" src="../classes/js/Abas.js"></script>
      <script type="text/javascript" src="../js/script.js" ></script>
      <link href="../css/designer.css" type="text/css" rel="stylesheet" />
      <link href="estilosistema.css" type="text/css" rel="stylesheet" />
        <table width="18%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td width="10%" height="36" align="center" valign="middle" class="abaativa" id="celAbaCadastro" onClick="trataCliqueAba( this.id );" onMouseOver="trataMouseAba( this );">
                Movimenta&ccedil;&atilde;o</td>                

                
            </tr>
</table>	  
      <div id="divCadastro" style="display: block;overflow:auto;height:60%;min-height:60%;" >
       <form id="frm_epis" method="POST">
      
                     <table width="95%" border="0" class="tabela" >
          <tr>
<td>Unidade</td>
            <td><input type="text" name="UNIDADE" maxlength="10" readonly="readonly" size="10" style="text-align:right" class="input" onkeypress="return entrada_numerica_inteira(this,event)" value="<?php echo $_SESSION['unidade']?>" /></td>
            <td colspan="5"><input type="text"  maxlength="50" readonly="readonly" size="50" value="<?php echo $_SESSION['nome_unidade']?>" /></td>            <td colspan="3">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="96">N&uacute;mero Movimento </td>
            <td width="123"><p>
                <input type="text" name="SEQUENCIAL" maxlength="10" size="10" style="text-align:right" class="input" onkeypress="return entrada_numerica_inteira(this,event)" />
            <img src="../images/search.png" width="10px" height="10px"/></p></td>
            <td width="128">C&oacute;digo Fornecedor </td>
            <td><input type="text" name="CODIGO_FORNECEDOR" maxlength="5" style="text-align:right" class="input" size="10" onkeypress="return entrada_numerica_inteira(this,event)" onblur="procura_funcionario(this)"/>
              <img src="../images/search.png" onclick="monta_consulta_funcionario(document.forms[1].elements['CODIGO_FUNCIONARIO'],document.forms[1].elements['CODIGO_FUNCIONARIO'])" width="10px" height="10px"/></td>
            <td colspan="3">Nome Fornecedor</td>
            <td colspan="3"><input type="text" name="NOME_FUNCIONARIO" disabled="disabled" maxlength="50" class="input" size="50"/></td>
            <td width="127">Data de Movimenta&ccedil;&atilde;o </td>
            <td width="94"><input type="text" name="DATA_MOVIMENTACAO" maxlength="10" class="input" size="10" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)" onfocus="data_hoje(this)"/></td>
			</tr>
			<tr>
            <td width="96">Tipo de Movimento </td>
            <td width="123"><select name="TIPO_MOVIMENTACAO">
			<option value=" "></option>
			<option value="R">(Recebimento)</option>
			<option value="D">Devolu&ccedil;&atilde;o</option>
			</select></td>
            <td width="128">N&uacute;mero Nota Fiscal/Nfe </td>
            <td width="114"><input type="text" name="NUMERO_NF" maxlength="10" size="10" style="text-align:right" class="input" onkeypress="return entrada_numerica_inteira(this,event)" /></td>
            <td width="57">S&eacute;rie</td>
            <td width="34"><input type="text" name="SERIE_NF" maxlength="3" size="3" style="text-align:right" class="input" onkeypress="return entrada_numerica_inteira(this,event)" /></td>
            <td width="8">&nbsp;</td>
            <td width="150">Data de Emiss&atilde;o</td>
			  <td width="119"><input type="text" name="DATA_EMISSAO" maxlength="10" size="10" style="text-align:right" class="input" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)" onfocus="data_hoje(this)"" /></td>
			  <td width="119">Data de Recebimento </td>
			  <td width="127"><input type="text" name="DATA_RECEBIMENTO" maxlength="10" size="10" style="text-align:right" class="input" onkeyup="return formata_data(this,'eu',event);" onkeypress="return valida_data(this,event)" onfocus="data_hoje(this)"/></td>
          </tr>
        </table>
		<br />
		<table width="95%" border="1px solid" class="tabela_epis" >
		  <!--DWLayoutTable-->
		<tr>
		<td width="10%" height="30">C�digo EPI</td>
		<td width="30%">Descri��o</td>
		<td width="13%">Tipo de Prote��o</td>
		<td width="10%"><div align="center">Qtde Recebida/Devolvida </div></td>				
		<td width="10%">Valor Unit&aacute;rio </td>				
		<td width="10%">Valor Total </td>						

		<td width="5%"><div align="center">Confirmar Linha </div></td>
		</tr>
		</table>

       </form>
          <div  style="display: block;overflow:auto;height:60%;min-height:60%;">
      <form id="frm_entrada_epis">
          <table width="95%" border="1px solid" class="tabela_epis" >
                <tr>
		  <td width="10%" height="26"><input type="text" name="CODIGO_EPIS" maxlength="10" style="text-align:right" class="input" size="7" onkeypress="return entrada_numerica_inteira(this,event)"  onblur="procura_registro_epi(this);" />
	      <img src="../images/search.png" width="10px" height="10px"/></td>
		  <td width="30%"><input  type="text" disabled="disabled" name="DESCRICAO_EPI" maxlength="55" class="input" size="55"/></td>
		  <td width="13%"><input type="text" name="TIPO_PROTECAO" disabled="disabled"  maxlength="10" class="input" size="20"/></td>
		  <td width="10%"><div align="center">
		    <input type="text" name="QTDE_FORNECIDA" maxlength="10" style="text-align:right" class="input" onkeypress="return entrada_numerica_inteira(this,event)"  size="10"/>
		    </div></td>
		  <td width="10%"><input type="text" name="VIDA_UTIL" maxlength="10" disabled="disabled" class="input" size="10"/></td>
		  <td width="10%"><input type="text" name="VIDA_UTIL2" disabled="disabled"  maxlength="10" class="input" size="13"/></td>
       		<td width="5%" valign="top"><button type="button" value="Inserir" onclick="inserir_linha_detalhe();">Inserir</button></td>
		</tr>
          </table>
		</BR>
		<div style="height:300px;overflow:scroll;width:95%">
		<table name="tbl_detalhes" id="tbl_detalhes" border="1px solid" class="tabela_epis" width="100%">
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
            <td colspan="2"><input id="TXT_LOG" name="txt_log_ultimo_usuario" type="text" disabled="disabled" size="10" style="background:transparent" maxlength="8" value="<?php echo $_SESSION['ID_USUARIO']?>"/></td>
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
    </li>
  </ul>
 
       
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
            defineAba( "celAbaDocumentacao" , "divDocumentacao" );
            defineAba( "celAbaConsultas" , "divConsulta" );
            defineAba( "celAbaModelos"   , "divModelo"  );
            defineAbaAtiva( "celAbaCadastro" );
        </script>

</body>
</html>
