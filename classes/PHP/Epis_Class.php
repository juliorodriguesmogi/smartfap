<?php
session_start();
//gambiarra para IECA
header("Content-Type: text/html; charset=ISO-8859-1", true);
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  
header('http-equiv="Content-Type" content="text/html; charset=ISO-8859-1');

$U=new Epis();
switch ($U->acao){
    case "I":
        $U->insere_epis();
        break;
    case "A";
        $U->insere_epis();
        break;
    case "D";    
        $U->apaga_epis();
        break;

}

class Epis{
    public $nome_campos;
    public $valor_campos;
    public $acao;
    public $codigo_empresa;
    
    function __construct(){
        include_once('Busca_Empresa_Ativa.php');
        $ea=new Busca_Empresa_Ativa($_SESSION['id_usuario']);
        $this->codigo_empresa=$ea->retorna_empresa();
        $this->get_campos();
        
    }
    function get_campos(){
        $cont=0;
        $this->nome_campos[]='CODIGO_EMPRESA';
        $this->valor_campos[]=$this->codigo_empresa;
        $this->acao=$_GET['acao'];
        foreach ($_POST as $campo=>$valor){
            $this->nome_campos[]=$campo;
            $valor=  utf8_encode($valor);
            $valor= preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1", $valor);
            $this->valor_campos[]=mb_strtoupper($valor);
        }
        $this->nome_campos[]='ID_USUARIO';
        $this->valor_campos[]=$_SESSION['id_usuario'];
    }

    function insere_epis(){
        if ($_SESSION['grupo']>2){
            header('location:..LTCAT/HTML/epis.php?mensagem=Usuсrio nуo possui privilщgios suficientes para essa operaчуo');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        if (!$conn){
            exit;
        }
        $conn->prepara_stmt('I', 'epis', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','CODIGO_EPIS'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        $r=$conn->executa_acao();        
        $conn->prepara_stmt('S', "epis", array('MAX(CODIGO_EPIS) as CODIGO_EPIS','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '');
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['CODIGO_EPIS']=$row['CODIGO_EPIS'];
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        $_SESSION['EPIS_RETORNO']=null;
        try{
            header("location:../HTML/epis.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            $_SESSION['EPIS_RETORNO']=$_POST;
            header("location:../HTML/epis.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicaчуo");  
        }    
    }
    function apaga_epis(){
        $l=include_once('conexao_PDO.php');
        $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $conn->prepara_stmt('D', 'epis', null,null,array($this->nome_campos[0],$this->nome_campos[1]),array('=','='),array($this->valor_campos[0],$this->valor_campos[1]),null,null);
        try{
            $r=$conn->executa_acao();     
            header("location:../HTML/epis.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/epis.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicaУЇУЃo");  
        }
        
    }
}


?>