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

$U=new Instrumento();
switch ($U->acao){
    case "I":
        $U->insere_instrumento();
        break;
    case "A";
        $U->insere_instrumento();
        break;
    case "D";    
        $U->apaga_instrumento();
        break;

}

class Instrumento{
    public $nome_campos;
    public $valor_campos;
    public $acao;
    function __construct(){
        $this->get_campos();
    }
    function get_campos(){
        $cont=0;
        $this->acao=$_GET['acao'];
        $this->nome_campos[]='CODIGO_EMPRESA';
        $this->valor_campos[]=$_SESSION['empresa_ativa'];
        foreach ($_POST as $campo=>$valor){
            $this->nome_campos[]=$campo;
            $valor=  utf8_encode($valor);
            $valor= preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1", $valor);
            if ($valor=="") $valor=null;
            $this->valor_campos[]=  strtoupper($valor);
           $cont++;
        }
        $this->nome_campos[]='ID_USUARIO';
        $this->valor_campos[]=$_SESSION['id_usuario'];
        
    }

    function insere_instrumento(){
        if ($_SESSION['grupo']>2){
            header('location:../HTML/instrumentos.php?mensagem=Usuário não possui privilégios suficientes para essa operação');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('I', 'instrumentos', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','CODIGO_INSTRUMENTO'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        $r=$conn->executa_acao();        
        $conn->prepara_stmt('S', "instrumentos", array('MAX(CODIGO_INSTRUMENTO) as CODIGO_INSTRUMENTO','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '');
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['CODIGO_INSTRUMENTOS']=$row['CODIGO_INSTRUMENTO'];
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        
        try{
            header("location:../HTML/instrumentos.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:../HTML/instrumentos.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }    
    }
   
    function apaga_instrumento(){
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('D', 'instrumentos', null,null,array($this->nome_campos[0],$this->nome_campos[1]),array('=','='),array($this->valor_campos[0],$this->valor_campos[1]),null,null);
        try{
            $r=$conn->executa_acao();  
            header("location:../HTML/instrumentos.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/instrumentos.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicaÃ§Ã£o");  
        }
        
    }
}


?>
