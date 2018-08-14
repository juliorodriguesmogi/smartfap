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

$U=new Responsavel();
switch ($U->acao){
    case "I";
        $U->insere_responsavel();
        break;
    case "A";
        $U->insere_responsavel();
        break;
    case "D";    
        $U->apaga_responsavel();
        break;

}

class Responsavel{
    public $nome_campos;
    public $valor_campos;
    public $acao;
    function __construct(){
        include_once ('conexao.php');        
        $this->get_campos();
    }
    function get_campos(){
        $cont=0;
        $this->acao=$_GET['acao'];
        foreach ($_POST as $campo=>$valor){
            $this->nome_campos[]=$campo;
            $valor=  utf8_encode($valor);
            $valor= preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1", $valor);
            $this->valor_campos[]=mb_strtoupper($valor);
           $cont++;
        }
    }

    function insere_responsavel(){
        if ($_SESSION['grupo']>2){
            header('location:../HTML/responsaveis.php?mensagem=Usu?rio n?o possui privil?gios suficientes para essa opera??o');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $conn->prepara_stmt('I', 'responsaveis', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA', 'CODIGO_RESPONSAVEL'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        $r=$conn->executa_acao();        
        $conn->prepara_stmt('S', "responsaveis", array('MAX(CODIGO_RESPONSAVEL) as CODIGO_RESPONSAVEL','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '');
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['CODIGO_RESPONSAVEL']=$row['CODIGO_RESPONSAVEL'];
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        
        try{
            header("location:../HTML/responsaveis.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:../HTML/responsaveis.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplica??o");  
        }    
    }
    function apaga_responsavel(){
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $conn->prepara_stmt('D', 'maquinas', null, null, array('CODIGO_EMPRESA','CODIGO_MAQUINA'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        try{
            $r=$conn->executa_acao();        
            header("location:../HTML/responsaveis.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/responsaveis.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicaчуo");  
        }
        
    }
}


?>