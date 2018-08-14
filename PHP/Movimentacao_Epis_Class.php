<?php
//gambiarra para IECA
session_start('usuario');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  

$M=new Movimentacao_Epis();
switch ($M->acao){
    case "I";
        $M->insere_movimentacao_epis();
        break;
    case "A";
        $M->atualiza_movimentacao_epis();
        break;
    case "D";    
        $M->apaga_movimentacao_epis();
        break;

}

class Movimentacao_Epis{
    public $nome_campos;
    public $valor_campos;
    public $acao;
    function __construct(){
        include_once ('conexao.php'); 
        include_once('Busca_Empresa_Ativa.php');
        session_start();
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
            $valor= preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1", $valor);
            $this->valor_campos[]=$valor;
           $cont++;
        }
        $this->nome_campos[]='ID_USUARIO';
        $this->valor_campos[]=$_SESSION['id_usuario'];
        
    }

    function insere_movimentacao_epis(){

        if ($_SESSION['grupo']>2){
            header('location:../HTML/movimentacao_epis.php?mensagem=Usu?rio n?o possui privil?gios suficientes para essa opera??o');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10',mysql);
        $conn->prepara_stmt('I', 'movimentacao_epis_m', $this->nome_campos, $this->valor_campos, array('CODIGO_movimentacao_epis'), array('='),array($this->valor_campos[0],$this->valor_campos[1]));
        $r=$conn->executa_acao();    
        $conn->prepara_stmt('S', "movimentacao_epis_m", array('MAX(SEQUENCIAL) as CODIGO_movimentacao_epis','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '');
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['id_usuario']=$row['ID_USUARIO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        
        try{
            header("location:../HTML/movimentacao_epis.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:../HTML/movimentacao_epis.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplica??o");  
        }    
    }
    function atualiza_movimentacao_epis(){
        $sql_movimentacao_epis="Update `funcionarios` set ";
        $var_c=array_combine($this->nome_campos, $this->valor_campos);
        foreach ($var_c as $c_campos=>$c_valores){
                $sql_movimentacao_epis.=$c_campos."="."'".mb_strtoupper($c_valores)."',";
                $cont++;
        }        
        $sql_movimentacao_epis.="ULTIMA_ATUALIZACAO='".date('Y-m-d H:i:s')."',";
        $sql_movimentacao_epis.="ULTIMO_USUARIO='".$_SESSION['id_usuario']."',";
        $sql_movimentacao_epis=substr($sql_movimentacao_epis, 0, strlen($sql_movimentacao_epis)-1);        
        $sql_movimentacao_epis.=" where CODIGO_movimentacao_epis = ".$this->valor_campos[0];
        try{
            mysql_query($sql_movimentacao_epis);
            header("location:../HTML/movimentacao_epis.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/movimentacao_epis.php?mensagem=Ocorreu um erro ao atualizar o registro. Verifique o log da aplicaчуo");  
        }
    }
    function apaga_movimentacao_epis(){
        $var_c=array_combine($this->nome_campos, $this->valor_campos);        
        $sql_movimentacao_epis="Delete from `movimentacao_epis_m` where ";
        foreach ($var_c as $c_campos=>$c_valores){
            $sql_movimentacao_epis.=$c_campos."="."'".$c_valores."'";
            break;
        }        
        try{
            mysql_query($sql_movimentacao_epis);
            header("location:../HTML/movimentacao_epis.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/movimentacao_epis.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicaчуo");  
        }
        
    }
}


?>