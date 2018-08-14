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

$U=new Medico();
switch ($U->acao){
    case "I":
        $U->insere_medico();
        break;
    case "A";
        $U->atualiza_medico();
        break;
    case "D";    
        $U->apaga_medico();
        break;

}

class Medico{
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
            $valor=  utf8_encode($valor);
            $this->nome_campos[]=$campo;
            $this->valor_campos[]=  mb_strtoupper($valor);
           $cont++;
        }
    }

    function insere_medico(){
        if ($_SESSION['grupo']>2){
            header('location:../HTML/cadastromedico.php?mensagem=Usuário não possui privilégios suficientes para essa operação');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $conn->prepara_stmt('I', 'medicos', $this->nome_campos, $this->valor_campos, array('CODIGO_MEDICO'), array('='),array($this->valor_campos[0],$this->valor_campos[1]));
        $r=$conn->executa_acao();        
        $conn->prepara_stmt('S', "medicos", array('MAX(CODIGO_MEDICO) as CODIGO_MEDICO','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '');
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['CODIGO_MEDICO']=$row['CODIGO_MEDICO'];
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        
        try{
            header("location:../HTML/cadastromedico.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:../HTML/cadastromedico.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }    
    }
    function atualiza_medico(){
        $sql_medico="Update `medico` set ";
        $var_c=array_combine($this->nome_campos, $this->valor_campos);
        foreach ($var_c as $c_campos=>$c_valores){
                $sql_medico.=$c_campos."="."'".mb_strtoupper($c_valores)."',";
                $cont++;
        }        
        $sql_medico.="ULTIMA_ATUALIZACAO='".date('Y-m-d H:i:s')."',";
        $sql_medico.="ULTIMO_USUARIO='".$_SESSION['id_usuario']."',";
        $sql_medico=substr($sql_medico, 0, strlen($sql_medico)-1);        
        $sql_medico.=" where CODIGO_medico = ".$this->valor_campos[0];
        try{
            mysql_query($sql_medico);
            header("location:../HTML/cadastromedico.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/cadastromedico.php?mensagem=Ocorreu um erro ao atualizar o registro. Verifique o log da aplicaÃ§Ã£o");  
        }
    }
    function apaga_medico(){
        $var_c=array_combine($this->nome_campos, $this->valor_campos);        
        $sql_medico="Delete from `medicos` where ";
        foreach ($var_c as $c_campos=>$c_valores){
            $sql_medico.=$c_campos."="."'".$c_valores."'";
            break;
        }        
        try{
            mysql_query($sql_medico);
            header("location:../HTML/cadastromedico.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/cadastromedico.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicaÃ§Ã£o");  
        }
        
    }
}


?>
