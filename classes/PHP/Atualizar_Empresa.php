<?php
session_start();
$empresa_ativa=$_GET['empresa_ativa'];
include_once 'conexao_PDO.php';
$conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
$conn->prepara_stmt('I', 'empresa_ativa', array('CODIGO_EMPRESA','ID_USUARIO'),array($empresa_ativa,$_SESSION['id_usuario']),null,null,array($_SESSION['id_usuario']));
$conn->executa_acao();
$_SESSION['empresa_ativa']=$empresa_ativa;
$ea=new Busca_Empresa_Ativa($_SESSION['id_usuario']);
$this->codigo_empresa=$ea->retorna_empresa();
$this->nome_empresa=$ea->retorna_nome_empresa();
$_SESSION['empresa_contrato']=0;
$_SESSION['nome_empresa_ativa']="";
$_SESSION['empresa_ativa']=$this->codigo_empresa;
$_SESSION['nome_empresa_ativa']=$this->nome_empresa;
$_SESSION['endereco_empresa_ativa']=$ea->retorna_endereco_empresa();
$_SESSION['bairro_empresa_ativa']=$ea->retorna_bairro_empresa();
$_SESSION['municipio_empresa_ativa']=$ea->retorna_municipio_empresa();
$_SESSION['uf_empresa_ativa']=$ea->retorna_uf_empresa();
$_SESSION['cep_empresa_ativa']=$ea->retorna_cep_empresa();
$_SESSION['cnpj_empresa_ativa']=$ea->retorna_cnpj_empresa();



$u=new Usuario_Class();
$u->Action="L";
?>
