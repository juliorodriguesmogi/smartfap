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

$U=new Setor();
switch ($U->acao){
    case "I";
        $U->insere_setor();
        break;
    case "A";
        $U->atualiza_setor();
        break;
    case "D";    
        $U->apaga_setor();
        break;

}

class Setor{
    public $nome_campos;
    public $valor_campos;
    public $acao;
    public $empresa_ativa;
    
    function __construct(){
        $this->get_campos();
    }
    function get_campos(){
        $cont=0;
        $this->empresa_ativa=$_SESSION['empresa_ativa'];
        $this->acao=$_GET['acao'];
        $this->nome_campos[]='CODIGO_EMPRESA';
        $this->valor_campos[]=$this->empresa_ativa;
        
        foreach ($_POST as $campo=>$valor){
            $this->nome_campos[]=$campo;
            $valor=  utf8_encode($valor);
            $valor= preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1", $valor);
            $this->valor_campos[]=mb_strtoupper($valor);
           $cont++;
        }
        $this->nome_campos[]='ID_USUARIO';
        $this->valor_campos[]=$_SESSION['id_usuario'];
        
        
                
    }

    function insere_setor(){
        if ($_SESSION['grupo']>2){
            header('location:../HTML/setoresdeobjeto.php?mensagem=Usuário não possui privilégios suficientes para essa operação');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('I', 'setores', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'), array('=','=','='),array($this->empresa_ativa,$this->valor_campos[1],$this->valor_campos[2]));
        $r=$conn->executa_acao();        
        $conn->prepara_stmt('S', "setores", array('MAX(CODIGO_SETOR) as CODIGO_SETOR','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '');
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['CODIGO_SETOR']=$row['CODIGO_SETOR'];
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        
        try{
            header("location:../HTML/setoresdeobjeto.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:../HTML/setoresdeobjeto.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplica??o");  
        }    
    }

    function apaga_setor(){
        $var_c=array_combine($this->nome_campos, $this->valor_campos);        
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('D', 'setores', "setores", null, array('CODIGO_EMPRESA','UNIDADE','CODIGO_SETOR'), array('=','=','='),array($this->empresa_ativa,$this->valor_campos[1],$this->valor_campos[2]));
        try{
            $r=$conn->executa_acao();        
            header("location:../HTML/setoresdeobjeto.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/setoresdeobjeto.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }
        
    }
}

?>
