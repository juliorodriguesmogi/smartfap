<?php
session_start();
header("Content-Type: text/html; charset=ISO-8859-1", true);
//gambiarra para IECA
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  
header('http-equiv="Content-Type" content="text/html; charset=ISO-8859-1');

$U=new Fabrica();
switch ($U->acao){
    case "I";
        $U->insere_fabrica();
        break;
    case "A";
        $U->atualiza_fabrica();
        break;
    case "D";    
        $U->apaga_fabrica();
        break;

}

class fabrica{
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

    function insere_fabrica(){
                if ($_SESSION['grupo']>2){
            header('location:../HTML/fabricante.php?mensagem=Usu?rio n?o possui privil?gios suficientes para essa opera??o');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('I', 'fabricantes', $this->nome_campos, $this->valor_campos, array('CODIGO_FABRICANTE'), array('='),array($this->valor_campos[0],$this->valor_campos[1]));
        $r=$conn->executa_acao();        
        $conn->prepara_stmt('S', "fabricantes", array('MAX(CODIGO_FABRICANTE) as CODIGO_FABRICANTE','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '');
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['CODIGO_FABRICANTE']=$row['CODIGO_FABRICANTE'];
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        
        try{
            header("location:../HTML/fabricante.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:../HTML/fabricante.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplica??o");  
        }    
    }
    function atualiza_fabrica(){
        $sql_fabrica="Update `fabricantes` set ";
        $var_c=array_combine($this->nome_campos, $this->valor_campos);
        foreach ($var_c as $c_campos=>$c_valores){
                $sql_fabrica.=$c_campos."="."'".mb_strtoupper($c_valores)."',";
                $cont++;
        }        
        $sql_fabrica.="ULTIMA_ATUALIZACAO='".date('Y-m-d H:i:s')."',";
        $sql_fabrica.="ULTIMO_USUARIO='".$_SESSION['id_usuario']."',";
        $sql_fabrica=substr($sql_fabrica, 0, strlen($sql_fabrica)-1);        
        $sql_fabrica.=" where CODIGO_FABRICANTE = ".$this->valor_campos[0];
        try{
            mysql_query($sql_fabrica);
            header("location:../HTML/fabricante.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/fabricante.php?mensagem=Ocorreu um erro ao atualizar o registro. Verifique o log da aplicaчуo");  
        }
    }
    function apaga_fabrica(){
        $var_c=array_combine($this->nome_campos, $this->valor_campos);        
        $sql_fabrica="Delete from `fabricantes` where ";
        foreach ($var_c as $c_campos=>$c_valores){
            $sql_fabrica.=$c_campos."="."'".$c_valores."'";
            break;
        }        
        try{
            mysql_query($sql_fabrica);
            header("location:../HTML/fabricante.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/fabricante.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicaчуo");  
        }
        
    }
}


?>