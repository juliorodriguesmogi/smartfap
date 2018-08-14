<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"  content="text/html; charset=ISO-8859-1" />
<title>/title>
<link rel="stylesheet" href="responsaveiscss.css" type="text/css" />
<link rel="stylesheet" href="csspadrao.css" type="text/css" />
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Empresa.js"></script>
<script type="text/javascript" src="../classes/js/medico.js"></script>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="../classes/js/Abas.js"></script>
<link href="estilosistema.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">  
      
         newmedico=new medico();
         
        function exibe_campos(){
                codigo_medico=document.forms[1].elements['CODIGO_MEDICO'].value;
                document.forms[1].reset();
                //newmedico.setValores(newregistro.getValores());
                                
                if (acao=='I'){
                    document.forms[1].elements["CODIGO_MEDICO"].value = codigo_medico;
                }
                if (acao=='A'){
                        
                        document.forms[1].elements["CODIGO_MEDICO"].value = new String(newmedico.get_Codigo_Medico());
                        document.forms[1].elements["NOME_PROFISSIONAL"].value = new String(newmedico.get_Nome_Profissional());
                        document.forms[1].elements["AREA_ATUACAO"].value = new String(newmedico.get_Area_Atuacao());
			document.forms[1].elements["CEP"].value = new String(newmedico.get_Cep());
                        document.forms[1].elements["ENDERECO"].value = new String(newmedico.get_Endereco());
                        document.forms[1].elements["NIT"].value = new String(newmedico.get_Nit());
                        document.forms[1].elements["CPF"].value = new String(newmedico.get_Cpf());
                        document.forms[1].elements["BAIRRO"].value = new String(newmedico.get_Bairro());    
                        document.forms[1].elements["OBSERVACAO"].value = new String(newmedico.get_Observacao());    
                        document.forms[1].elements["MUNICIPIO"].value = new String(newmedico.get_Municipio());
                        document.forms[1].elements["UF"].value = new String(newmedico.get_UF());
                        document.forms[3].elements["txt_log_data_cadastro"].value = new String(newmedico.get_Data_Cadastro());                
                        document.forms[3].elements["txt_log_ultima_atualizacao"].value = new String(newmedico.get_Ultima_Atualizacao());                        document.forms[3].elements["txt_log_ultimo_usuario"].value = new String(newmedico.get_Ultimo_Usuario());                
                        
                       
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
                        document.forms[1].elements['CODIGO_CNAE'].value=newmedico.get_CNAE();

            }
           

            
            var acao='';
            function grava_registro(){
             if (confirm("confirma o registro")){
                document.forms[1].action="../PHP/Medico_Class.php?acao=I";
                document.forms[1].submit();
             }
            }
            function apaga_registro(){
                if (confirm("Confirma a exclusão do registro?")){
                    document.forms[1].action="../PHP/Medico_Class.php?acao="+"D";
                    document.forms[1].submit();
                }
            }
            function proximo_registro(campo,visao){
                codemp=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name,codemp,">",visao,"Busca_Medico");                    
                exibe_campos();
            }
            function registro_anterior(campo,visao){
                codemp=campo.value==''?0:campo.value;
                buscar_registro(window,campo.name, codemp,"<",visao,"Busca_Medico");
                exibe_campos();
            }  

        </script>
  
</head>

<body>
<div id="titulo">

<caption>Cadastro de Profissionais M�dicos</div>
<div id="menu">
     <form id="form2" action="" method="POST">
        <button type="button" onclick="">
  <table>
    <tr>
      <td height="42" width="48"><img src="../images/novo.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Novo</td>
    </tr>
  </table>
  </button>
   
  <button type="button" onclick="grava_registro();">
  <table>
    <tr>
      <td height="42" width="48"><img src="../images/barra_ferramentas/floppy.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Gravar</td>
    </tr>
  </table>
  </button>
  <button  type="button" onclick="apaga_registro();">
  <table>
    <tr>
      <td height="42" width="48"><img src="../images/barra_ferramentas/error_button_2.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Apagar</td>
    </tr>
  </table>
  </button>
    <button  type="button" onclick="descer();">
  <table>
    <tr>
      <td height="42" width="48"><img src="../images/update_quantity_cart[1].png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Desfazer</td>
    </tr>
  </table>
  </button>
   <button  type="button" onclick="subir();">
  <table>
    <tr>
      <td height="42" width="48"><img src="../images/cima.gif" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Primeiro</td>
    </tr>
  </table>
  </button>
    <button  type="button" onclick="navega_registro('Anterior');">
  <table>
    <tr>
      <td height="42" width="48"><img src="../images/left.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Anterior</td>
    </tr>
  </table>
  </button>
      <button  type="button" onclick="navega_registro('Proximo')">
  <table>
    <tr>
      <td height="42" width="48"><img src="../images/right.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Pr&oacute;ximo</td>
    </tr>
  </table>
  </button>
    <button  type="button" onclick="descer();">
  <table>
    <tr>
      <td height="42" width="48"><img src="../images/baixo.gif" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Ultimo</td>
    </tr>
  </table>
  </button>
    <button  type="button" onclick="descer();">
  <table>
    <tr>
      <td height="40" width="48"><img src="../images/printer_2.png" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="18">Imprimir</td>
    </tr>
  </table>
  </button>
      <button  type="button" onclick="document.forms['form1'].reset();document.getElementById('iFrame1').src='';document.forms['form1'].elements['codigo_associado'].focus();">
  <table>
    <tr>
      <td height="42" width="48"><img src="../images/folha.jpg" height="40" width="40" /></td>
    </tr>
    <tr>
      <td height="16">Limpar</td>
    </tr>
  </table >
  </button>  
</form>
</div>
<div id="conteudo">
<form id="frm_medico" method="POST">
<table width="100%" class="tabela2">
<tr>
<td width="14%">Codigo
<input name="CODIGO_MEDICO" type="text" size="15" onblur="buscar_registro(window,this.name,this.value,'=','medicos','medicos','Busca_Medico',true,newmedico)"/></td>
<td width="32%">Nome
<input name="NOME_PROFISSIONAL" type="text" size="50" />
</td>
<td width="25%">Area De Atua��o
<input name="AREA_ATUACAO" type="text"/>
</td>
<td>NIT
<input name="NIT" type="text" size="15" />
</td>
<td width="17%">CPF
<input name="CPF" type="text" />
</td>
<td width="12%">CEP
<input name="CEP" size="15" type="text" />
</td>
</table>

</tr>
<table class="tabela">
<tr>
<td width="20%">Municipio
  <input name="MUNICIPIO" type="text" />
</td>
    <td>Bairro
        <input name="BAIRRO" type="text" />
    </td>
<td width="34%">Endereço
<input name="ENDERECO" type="text" size="50" />
</td>
<td width="8%">UF
  <select name="UF" type="text" />
  <option>ac</option>
  <option>am</option>
  <option>al</option>
  <option>ap</option>
  <option>ba</option>
  <option>ce</option>
  <option>df</option>
  <option>ef</option>
  <option>go</option>
  <option>ma</option>
  <option>mg</option>
  <option>ms</option>
  <option>mt</option>
  <option>pa</option>
  <option>pb</option>
  <option>pe</option>
  <option>pi</option>
  <option>pr</option>
  <option>rj</option>
  <option>rn</option>
  <option>ro</option>
  <option>rr</option>
  <option>rs</option>
  <option>sc</option>
  <option>se</option>
  <option>sp</option>
  <option>to</option>
</select>
<td width="38%">Observa��o
<textarea name="OBSERVACAO" type="text"></textarea>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
