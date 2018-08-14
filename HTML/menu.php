<?php
session_start("Logado");

if( (!isset($_SESSION['id_usuario'])))
{
 echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=login.php'>";
}
require '../vendor/autoload.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ELC - Cyberpc Informatica ® </title>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<link href="menucss.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registro.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registro.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>
<script type="text/javascript" src="../classes/js/Empresas.js"></script>
<script type="text/javascript" src="../classes/js/atualizar_empresa_ativa.js"></script>
<script type="text/javascript">
//window.onload= new resize();

function get_modulo(){
    xmod=getUrlvars('modulo');
    nmod=xmod.toString().split('.');
    if (nmod[0]!=""){
        ax=document.getElementById(nmod[0]);
        ax.click();
         window.location="menu.php";
    }
   
}
function valida_opcoes_menu(){
    empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>;
    buscar_registro(window,'CODIGO_EMPRESA', empresa_ativa,Array("="),'modulos_acesso','modulo_acesso','Busca_Empresa_Modulo',true,newregistro);
    carrega_empresas(document.getElementById('CODIGO_EMPRESA_ATIVA'));
    opcoes=newregistro.getValores().toString();
    opcoes=opcoes.split(',');    
    menup=document.getElementById("nav");
    if (opcoes[0]=='NF'){
        opcoes.length=6;
    }
    resolucao();    
    //if (opcoes.length>5) return;
    if (navigator.appName!='Microsoft Internet Explorer'){
       for (item=0;item< menup.children.length;item++){
            for (cont=item; cont< opcoes.length;cont++){    
                if (menup.children[item].getAttribute('id')!=opcoes[cont]){
                    menup.children[item].children[0].setAttribute('style', 'fillOpacity:true;color:silver;disabled:true');
                    for (y=0;y<menup.children[item].children[1].children.length;y++){
                        var filhos = menup.children[item].children[1].childNodes;
                        for( i = filhos.length - 1; i >= 0; i-- ) {
                            if( filhos[i].tagName == 'LI' ) {
                                menup.children[item].children[1].removeChild( filhos[i] );
                            }
                        }
                    }    
                }
                else {
                    get_modulo();
                    break;
                }
            }
            
    }          
    }        
    if (navigator.appName=='Microsoft Internet Explorer'){
        for (i=0; i<menup.childNodes.length; i++) {
            for (cont=i; cont< opcoes.length-1;cont++){    
                xc=menup.childNodes.item(i).getAttribute('id');
                if (xc!=opcoes[cont]){
                    menup.childNodes.item(i).firstChild.setAttribute('style', 'fillOpacity:true;color:silver;disabled:true');
                    for (y=0;y<menup.childNodes.item(i).lastChild.childNodes.length;y++){
                        var lista = menup.childNodes.item(i).lastChild;
                        while (lista.hasChildNodes()){
                            lista.removeChild(lista.lastChild);
                        }           
                    }    
                }
                else{
                    get_modulo();
                    break;
                }
            }
    }          
    }
    
    get_modulo();
            
}
function remove_imagem_fundo(){
    document.getElementById('if').style.background='transparent';
}
function atualiza_empresa_ativa(campo){
   atualizar_empresa(campo.value);
   empresa_ativa=campo.value;
   location.reload();
   
}
function carrega_empresas(campo){
     buscar_registros(window,'empresas',"Carrega_Empresas",'','',false,'=',newEmpresas);
     codigo_empresa=campo.value;
     // Inicializa select option 
     campo.length=0;
     //Loop para carregar select option
     for (y=0;y< newEmpresas.length()+1;y++){
         opt=new Option('Selecione uma Empresa',0);
             if (y==0){
                 opt.text="Selecione uma Empresa";
                 opt.value="";
              }
              else {
                 opt=new Option();
	    	 opt.text=newEmpresas.get_Nome_Empresa(y-1);
                 opt.value=newEmpresas.get_Codigo_Empresa(y-1);
              }
              campo.add(opt);
      }
      empresa_ativa=<?php echo $_SESSION['empresa_ativa']?>;
      campo.value=empresa_ativa;
           
            
}

function resolucao(boddy){
if (document.body && document.body.offsetWidth) {
 winW = document.body.offsetWidth;
 winH = document.body.offsetHeight;
}
if (document.compatMode=='CSS1Compat' &&
    document.documentElement &&
    document.documentElement.offsetWidth ) {
 winW = document.documentElement.offsetWidth;
 winH = document.documentElement.offsetHeight;
}
if (window.innerWidth && window.innerHeight) {
 winW = window.innerWidth;
 winH = window.innerHeight;
}
    document.forms[0].elements['resolucao'].value=winW+"X"+winH;
    document.style.zoom=""
}
</script>
</head>

<body id="body" onload="valida_opcoes_menu()" onresize="resolucao(this)">
   <img src="../images/empregos.jpg" name="img_fundo" align="center" style="position:absolute;top:25%;left:30%;width:45%;height:45% " id="img_fundo" />
<!--[if IE]>
    <img src="../images/empregos.jpg" name="img_fundo" align="center" style="position:absolute;top:25%;left:30%;width:45%;height:45%;z-index:1; " id="img_fundo" />
<![endif]-->

<img src='cyberlogo.gif' id="logo_cyber" style='position:absolute;bottom:70px;right:20px;z-index:1;'/>
<iframe id="if" name="iframe"  >

</iframe>
<form>
<ul id="nav" name="menu_principal" onclick="document.getElementById('if').setAttribute('style','z-index:0');" onmouseover="document.getElementById('if').setAttribute('style','z-index:8');remove_imagem_fundo()">
	<li  id="LTCAT" ><a>1-LTCAT</a>
	 <ul>
			<li class="submenu"><a>Cadastros</a>
			 <ul>
				<li><a href="empresas.php" target="iframe">Empresas</a></li>
				<li><a href="instrumentos.php" target="iframe">Instrumentos de Medição</a></li>
				<li><a href="atividades.php" target="iframe">Atividades</a></li>
				<li><a href="funcoes.php" target="iframe">Cargos e Funções</a></li>
				<li><a href="epis.php" target="iframe">EPIs</a></li>
				<li><a href="maquinasequipamentos.php" target="iframe">Locais/Maquinas e Equipamentos</a></li>
				<li><a href="responsaveis.php" target="iframe">Responsáveis Técnicos</a></li>
				<li><a href="setoresdeobjeto.php" target="iframe">Setores de Objetos da Perícia</a></li>
             </ul>
	      </li>
	<li class="submenu"><a>Lançamentos</a>
		<ul>
			<li><a href="laudos.php" target="iframe">Laudos Técnicos </a></li>

		</ul>
	</li>

	<li class="submenu"><a>Relatórios</a>
		<ul>
			<li class="submenu"><a>Cadastrais</a>
			 <ul>                    
			<li><a href="../Reports/Relatorio_Empresa.php" target="iframe">Empresas</a></li>
			<li><a href="../Reports/Relatorios_Instrumentos.php" target="iframe">Instrumentos de Medição</a></li>
			<li><a href="../Reports/Relatorio_Atividades.php" target="iframe">Atividades</a></li>
			<li><a href="../Reports/Relatorio_Funcoes.php" target="iframe">Funções</a></li>
			<li><a href="../Reports/Relatorio_Epis.php" target="iframe">EPIs</a></li>
			<li><a href="../Reports/Relatorio_Maquinas.php" target="iframe">Máquinas e Equipamentos</a></li>
			<li><a href="../Reports/Relatorio_Responsaveis.php" target="iframe">Responsáveis Técnicos</a></li>
                        <li><a href="../Reports/Relatorio_Medico.php" target="iframe">Profissionais da Saúde</a></li>
                         <li><a href="../Reports/Relatorio_Fabricante.php" target="iframe">Fabricantes</a></li>
                           <li><a href="../Reports/Relatorio_Exames.php" target="iframe">Exames</a></li>
                            <li><a href="../Reports/Relatorio_Setores.php" target="iframe">Setores</a></li>
			<li><a href="../Reports/Relatorio_Laudos.php" target="iframe">Laudos Emitidos</a></li>
                        <li><a href="../Reports/Relatorio_Funcionarios.php" target="iframe">Funcionarios Cadastrados</a></li>
                         </ul>
                        </li>
                        <li class="submenu"><a>Lançamentos</a>
                        <ul>                      
                            <li><a href="../Reports/Laudos_Impressao.php" target="iframe">Laudos Ambientais</a></li>
                            <li><a href="" target="iframe">Setores de Laudos</a></li>
                            <li><a href="" target="iframe">Avaliações Técnicas</a></li>
                            
                        </ul>
                        </li>    
                        <li class="submenu"><a>Histórico</a>
                        <ul>                      
                            <li><a href="" target="iframe">Avaliações Periciais Anteriores</a></li>
                            <li><a href="" target="iframe">Setores de Laudos Anteriores</a></li>
                            <li><a href="" target="iframe">Atividades de Laudos Anteriores</a></li>
                            
                        </ul>
                            
                        </li>
 		</ul>
	</li>
    </ul>
    </li>

            <li id="PPRA" ><a>2-PPRA</a>
	 <ul>
			<li class="submenu"><a>Cadastros</a>
			 <ul>
                            
                             <li><a href="">Cronogramas PPRA</a></li>
                             
                         </ul>
                        </li>
			<li class="submenu"><a>Lançamentos</a>
			 <ul>
                            
                             <li><a href="ppras.php" target="iframe">Geração de PPRAs</a></li>
                             
                         </ul>
                        </li>
                    
               
                  
                 
                	<li class="submenu"><a>Relatórios</a>
                    <ul>
                    	<li><a href="">Relatório de Não-Conformidades</a></li>
                        <li><a href="">Emissão de PPRA</a></li>
                   </ul>
                   </li>
              </ul>
           </li>


	<li id="PCMSO" ><a>3-PCMSO</a>
    	<ul>
        	<li class="submenu"><a>Cadastros</a>
            	<ul>
		    <li><a href="empresas.php" target="iframe">Empresas</a></li>
                    <li><a href="funcionarios.php" target="iframe">Funcionários</a></li>
                    <li><a href="cadastromedico.php" target="iframe">Profissionais da Saúde</a></li>
                    <li><a href="exame.php" target="iframe">Natureza de Exames</a></li>
                </ul>
           </li>
	        <li class="submenu"><a href="">Lançamentos</a>
                <ul>
                    <li><a href="exames.php" target="iframe">Exames Clínicos</a></li>
                    <li><a href="monitoracao_biologica.php" target="iframe">Monitoração Biológica</a></li>
                    <li><a href="pcmsos.php" target="iframe">Elaboração de PCMSO</a></li>

                    
                </ul>
            <ul>
            	<li ><a>Rotinas Médicas</a>
                	<ul>
                    	<li><a href="movimentacao_exames.php" target="iframe">Exames Laboratoriais</a></li>

                   </ul>
                   </li>
            </ul>
            </li>
            <li class="submenu"><a>Relatórios</a>
            	<ul>
                    <li class="submenu"><a>Relatorios Cadastrais</a>
                        <ul>
                            <li><a href="../Reports/Relatorio_Exames.php" target="iframe">Relatório de Tipos de Exames</a></li>
                            <li><a href="../Reports/Relatorio_Medico.php" target="iframe">Relatório Profissionais Médicos</a></li>
                        </ul>
                    </li>    
                    <li class="submenu"><a>Relatorios Gerenciais</a>                    
                        <ul>
                            <li><a href="#">Emissão de ASO</a></li>
                            <li><a href="#">Relatório de Exames Realizados</a></li>
                            <li><a href="#">Emissão de Anamnese Clínica</a></li>
                            <li><a href="#" target="iframe">Emissão de PCMSO</a></li>
                        </ul>
                    </li>   
                </ul>
            </li>
      </ul>
   </li>
    
            <li id="EPI" ><a>4- EPIs</a>
             	<ul>
        	<li class="submenu"><a>Cadastros</a>
            	<ul>
		    <li><a href="empresas.php" target="iframe">Empresas</a></li>
                    <li><a href="funcionarios.php" target="iframe">Funcionários</a></li>
                    <li><a href="epis.php" target="iframe">EPIs</a></li>
                    <li><a href="fabricante.php" target="iframe">Fabricantes</a></li>
                </ul>
                </li>
        	<li class="submenu"><a>Movimentações</a>
            	<ul>
		    <li><a id="movimentacao_epis" href="movimentacao_epis.php" target="iframe">Movimentação EPIs - Funcionários</a></li>
                    <li><a href="recebimento_devolucao_epis.php" target="iframe">Recebimento/Dev. EPIs - Fornecedores</a></li>
                    <li><a href="transferencia_epis.php" target="iframe">Transferência de EPIs entre Unidades</a></li>
                </ul>
                </li>
                    
            <li class="submenu"><a>Relatorios</a>
            	<ul>
                    <li class="submenu"><a>Relatorios Cadastrais</a>
                        <ul>
                        <li><a href="../Reports/Relatorio_Epis.php" target="iframe">Listagem de EPIs</a></li>
                        <li><a href="../Reports/Relatorio_Funcionario_S_Epi.php" target="iframe">Relatório de Funcionários sem EPI</a></li>
                        </ul>
                    </li>    
                    <li class="submenu"><a>Relatorios Gerenciais</a>
                        <ul>
                        <li><a href="../Reports/Relatorio_Movimentacao_EPIs.php" target="iframe">Movimentação de EPIs para Funcionários</a></li>
                        <li><a href="../Reports/Relatorio_Entrada_Devolucao_EPIs.php" target="iframe">Entradas/Dev. de EPIs para Fornecedores</a></li>
                        <li><a href="../Reports/Listagem_Compras_EPIs.php" target="iframe">Listagem de Compras</a></li>
                        <li><a style="font-size:70%" href="../Reports/.php" target="iframe">Relatório de validade de EPIs de Funcionários</a></li>
                        <li><a href="../Reports/Relatorio_Conciliacao_EPIs.php" target="iframe">Relatório de conciliação EPIs</a></li>
                        <li><a href="../Reports/.php" target="iframe">Balancete periódico por Unidade de Trabalho</a></li>
                        </ul>
                    </li>    
                    
                </ul>
            </li>
                    
              </ul>
           </li>
<li  id="PPP"><a>5-PPP</a>
    	<ul>
        	<li class="submenu"><a>Cadastros</a>
            	<ul>
                    <li><a href="empresas.php" target="iframe">Empresas</a></li>
                    <li><a href="funcionarios.php" target="iframe">Funcionários</a></li>
		    <li><a href="funcoes.php" target="iframe">Cargos e Funções</a></li>          
                    <li><a href="atividades.php" target="iframe">Atividades</a></li>                    
                </ul>
           </li>
           <li class="submenu"><a>Lançamentos</a>
            	<ul>
                    <li><a href="" target="iframe">CAT</a></li>
                    <li><a href="Emissao_PPP.php" target="iframe">PPP Manual</a></li>
                </ul>    

            </li>
           <li class="submenu"><a>Relatórios</a>
           	<ul>
                	<li><a href="../Reports/Relatorio_PPP.html" target="iframe">Emissão de PPPs (Modelo)</a></li>
                        <li><a href="../Reports/Relatorio_Funcionarios.php" target="iframe">Funcionarios Cadastrados</a></li>
			<li><a href="../Reports/Relatorio_Atividades.php" target="iframe">Atividades</a></li>
			<li><a href="../Reports/Relatorio_Funcoes.php" target="iframe">Funções</a></li>

                </ul>
               
           </li>
      </ul>
   </li>
            <li id="CONFIGURACOES" ><a>6-Configurações</a>
            	<ul>
                	<li class="submenu"><a>Administração</a>
                    	<ul>
                        	<li><a href="usuarios.php"  target="iframe">Cadastro de Usuários</a></li>
                                <li><a href="unidades.php"  target="iframe">Cadastro de Unidades</a></li>
                                <li><a href="estruturas.php" target="iframe">Estrutura Organizacional</a></li>
                        </ul>
                   </li>
               </ul>
          </li>
    <li></li>
    <li align="right" >
        <a href="login.php" class='disconnect' style="text-align:center">      Desconectar    </a>
    </li>
</ul>



<div id="div_statusbar_bottom" style="font-family:Arial, Helvetica, sans-serif">
      <table width="100%" border="1" style="background:silver ;height:10px; ">
        <tr>
          <td width="13" height="5" style="max-width:20px">Usuário</td>
          <td width="13"><?php echo $_SESSION['id_usuario']?></td>
          <td width="13px">Data</td>
          <td width="13px" style="min-width:30px;max-width:30px"><?php echo date('d/m/Y')?></td>
          <td width="13px">Hora</td>
          <td width="13px" style="max-width:30px"><?php echo date('H:i:s')?></td>
          <td width="13" style="max-width:50px">Empresa Contrato</td>
          <td width="13" ><?php echo $_SESSION['empresa_contrato']?> </td>
          <td width="13" style="min-width:200px;font-size:85%"><?php echo htmlentities($_SESSION['nome_empresa_contrato'])?> </td>
          
          <td width="13" style="max-width:17px">Grupo</td>
          <td width="13"><?php echo $_SESSION['grupo']?> </td>
          <td width="13" style="min-width:70px">Nível de Acesso</td>
          <td width="110" style="max-width:10px"><?php echo $_SESSION['nivel_acesso']?></td>
          <td width="5" style="max-width:50px">Empresa Ativa</td>
          <td width="5" ><?php echo $_SESSION['empresa_ativa']?> </td>
          <td width="35" style="min-width:300px;font-size:85%">
              <select style="width:300px" onfocus="carrega_empresas(this)" id="CODIGO_EMPRESA_ATIVA" name="CODIGO_EMPRESA_ATIVA" onchange="atualiza_empresa_ativa(this)" >
              
              </select></td>

              </td>
          <td width="11" style="max-width:50px">Resolução</td>
          <td width="11" ><input name="resolucao" type="text" disabled="disabled" size="11"/></td>
        </tr>
      </table>
    </div>

	
</form>


</body>
</html>
