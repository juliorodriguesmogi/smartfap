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

$U=new Empresa();
switch ($U->acao){
    case "I":
        $U->insere_empresa();
        break;
    case "A";
        $U->insere_empresa();
        break;
    case "D";    
        $U->apaga_empresa();
        break;

}

class Empresa{
    public $nome_campos;
    public $valor_campos;
    public $acao;
    function __construct(){
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
        }
    }

    function insere_empresa(){
        if ($_SESSION['GRUPO']>2){
            header('location:../HTML/empresa.php?mensagem=Usu�rio n�o possui privil�gios suficientes para essa opera��o');   
            break;
        }
        $sql_empresa="Insert into `empresas` (";
        $cont=0;
        foreach ($this->nome_campos as $c){
                    $sql_empresa.=$c.",";                
        }
        $sql_usuario.="SESSION_ID,ULTIMO_USUARIO,";
      
        $sql_empresa=substr($sql_empresa, 0, strlen($sql_empresa)-1);
        $sql_empresa.= ") values (";
        $cont=0;
        foreach ($this->valor_campos as $c){
                  $sql_empresa.="'".$c."'".',';
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('I', 'empresas', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA'), array('='),array($this->valor_campos[0]));
        try{        
            $r=$conn->executa_acao();   
            $conn->prepara_stmt('S', "empresas", array('MAX(CODIGO_EMPRESA) as CODIGO_EMPRESA','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'));
            $ultimo_registro=$conn->executa_acao();
            $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
            $_SESSION['CODIGO_EMPRESA']=$row['CODIGO_EMPRESA'];
            $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
            $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
            header("location:../HTML/empresas.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/empresas.php?mensagem=Ocorreu um erro ao atualizar o registro. Verifique o log da aplica��o");  
        }
        
    }
    function atualiza_empresa(){
        $sql_empresa="Update `empresas` set ";
        $var_c=array_combine($this->nome_campos, $this->valor_campos);
        foreach ($var_c as $c_campos=>$c_valores){
                $sql_empresa.=$c_campos."="."'".mb_strtoupper($c_valores)."',";
                $cont++;
        }        
        $sql_usuario.="ULTIMA_ATUALIZACAO='".date('Y-m-d H:i:s')."',";
        $sql_usuario.="ULTIMO_USUARIO='".$_SESSION['id_usuario']."',";
        $sql_empresa=substr($sql_empresa, 0, strlen($sql_empresa)-1);        
        $sql_empresa.=" where CODIGO_EMPRESA = ".$this->valor_campos[0];
        try{
            mysql_query($sql_empresa);
            header("location:../HTML/empresas.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/empresas.php?mensagem=Ocorreu um erro ao atualizar o registro. Verifique o log da aplica��o");  
        }
    }
    function apaga_empresa(){
        $var_c=array_combine($this->nome_campos, $this->valor_campos);        
        $sql_empresa="Delete from `empresas` where ";
        $temp="";
        foreach ($var_c as $c_campos=>$c_valores){
            $sql_empresa.=$temp.$c_campos."="."'".$c_valores."'";
            $temp=" and ";
            break;
        }        
        try{
            mysql_query($sql_empresa);
            header("location:../HTML/empresas.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/empresas.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplica��o");  
        }
        
    }
}


?>
