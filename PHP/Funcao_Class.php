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

$A=new Funcao();
switch ($A->acao){
    case "I":
        $A->insere_Funcao();
        break;
    case "A";
        $A->insere_Funcao();
        break;
    case "D";    
        $A->apaga_Funcao();
        break;
}

class Funcao{
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
    function valida_acao(){
        $sql="select * from funcoes where CODIGO_FUNCAO=".$this->valor_campos[0];
        $result=mysql_query($sql);
        if (mysql_num_rows($result)==0){
            $this->acao="I";
        }
        else {
            $this->acao="A";
        }
        
    }
    function insere_Funcao(){
        
        if ($_SESSION['grupo']>2){
            header('location:../HTML/funcoes.php?mensagem=Usuário não possui privilégios suficientes para essa operação');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $conn->prepara_stmt('I', 'funcoes', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','CODIGO_FUNCAO'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        $r=$conn->executa_acao();        
        $conn->prepara_stmt('S', "funcoes", array('MAX(CODIGO_FUNCAO) as CODIGO_FUNCAO','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '',array('CODIGO_EMPRESA') , array('='), array($this->codigo_empresa));
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['CODIGO_FUNCAO']=$row['CODIGO_FUNCAO'];
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        
        try{
            header("location:../HTML/funcoes.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:../HTML/funcoes.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }    
    }

    function apaga_Funcao(){
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $conn->prepara_stmt('D', 'funcoes', null,null,array($this->nome_campos[0],$this->nome_campos[1]),array('=','='),array($this->valor_campos[0],$this->valor_campos[1]),null,null);
        try{
            $r=$conn->executa_acao();  
            header("location:../HTML/funcoes.php?mensagem=Registro excluido com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/funcoes.php?mensagem='Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }        
           
        
    }

}


?>
