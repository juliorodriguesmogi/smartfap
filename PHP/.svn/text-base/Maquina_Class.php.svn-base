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

$U=new Maquina();
switch ($U->acao){
    case "I";
        $U->insere_maquina();
        break;
    case "A";
        $U->atualiza_maquina();
        break;
    case "D";    
        $U->apaga_maquina();
        break;

}

class Maquina{
    public $nome_campos;
    public $valor_campos;
    public $acao;
    function __construct(){
        include_once('Busca_Empresa_Ativa.php');

        $ea=new Busca_Empresa_Ativa($_SESSION['id_usuario']);
        $this->codigo_empresa=$ea->retorna_empresa();
        $this->get_campos();
        
    }
    function get_campos(){
        $cont=0;
        $this->nome_campos[]="CODIGO_EMPRESA";
        $this->valor_campos[]=$_SESSION['empresa_ativa'];
        $this->acao=$_GET['acao'];
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

    function insere_maquina(){
        if ($_SESSION['grupo']>2){
            header('location:../HTML/maquinasequipamentos.php?mensagem=Usuсrio nуo possui privilщgios suficientes para essa operaчуo');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('I', 'maquinas', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA', 'CODIGO_MAQUINA'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        $r=$conn->executa_acao();        
        $conn->prepara_stmt('S', "maquinas", array('MAX(CODIGO_MAQUINA) as CODIGO_MAQUINA','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '');
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['CODIGO_MAQUINA']=$row['CODIGO_MAQUINA'];
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        
        try{
            header("location:../HTML/maquinasequipamentos.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:../HTML/maquinasequipamentos.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicaчуo");  
        }    
    }
    function atualiza_maquina(){
        $sql_maquina="Update `maquinas` set ";
        $var_c=array_combine($this->nome_campos, $this->valor_campos);
        foreach ($var_c as $c_campos=>$c_valores){
                $sql_maquina.=$c_campos."="."'".mb_strtoupper($c_valores)."',";
                $cont++;
        }        
        $sql_maquina.="ULTIMA_ATUALIZACAO='".date('Y-m-d H:i:s')."',";
        $sql_maquina.="ULTIMO_USUARIO='".$_SESSION['id_usuario']."',";
        $sql_maquina=substr($sql_maquina, 0, strlen($sql_maquina)-1);        
        $sql_maquina.=" where CODIGO_MAQUINA = ".$this->valor_campos[0];
        try{
            mysql_query($sql_maquina);
            header("location:../HTML/maquinasequipamentos.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/maquinasequipamentos.php?mensagem=Ocorreu um erro ao atualizar o registro. Verifique o log da aplicaУЇУЃo");  
        }
    }
    function apaga_maquina(){
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('D', 'maquinas', null, null, array('CODIGO_EMPRESA','CODIGO_MAQUINA'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        try{
            $r=$conn->executa_acao();        
            header("location:../HTML/maquinasequipamentos.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/maquinasequipamentos.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicaУЇУЃo");  
        }
        
    }
}


?>