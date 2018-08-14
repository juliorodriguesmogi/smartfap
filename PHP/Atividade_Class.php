<?php
session_start();

header("Content-Type: text/html; charset=ISO-8859-1", true); 
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  
header('http-equiv="Content-Type" content="text/html; charset=ISO-8859-1');
$A=new Atividade();
switch ($A->acao){
    case "I":
        $A->insere_Atividade();
        break;
    case "A";
        $A->insere_Atividade();
        break;
    case "D";    
        $A->apaga_Atividade();
        break;

}

class Atividade{
    public $nome_campos;
    public $valor_campos;
    public $acao;
    public $codigo_empresa;
    public $newatvfunc;
    
    function __construct(){
        $this->get_campos();
    }
    
    function get_campos(){
        $cont=0;
        $this->nome_campos[]='CODIGO_EMPRESA';
        $this->valor_campos[]=$_SESSION['empresa_ativa'];
        $this->acao=$_GET['acao'];
        foreach ($_POST as $campo=>$valor){
            $valor=  utf8_encode($valor);
            $this->nome_campos[]=$campo;
            $this->valor_campos[]=mb_strtoupper($valor);
        }
        $this->nome_campos[]='ID_USUARIO';
        $this->valor_campos[]=$_SESSION['id_usuario'];
        $this->newatvfunc=array(isset($_GET['newatvfunc'])?$_GET['newatvfunc']:" ");

    }
        

    function insere_Atividade(){
        if ($_SESSION['grupo']>2){
            header('location:../HTML/atividades.php?mensagem=Usuário não possui privilégios suficientes para essa operação');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $conn->prepara_stmt('I', 'atividades', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','CODIGO_ATIVIDADE'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        $r=$conn->executa_acao();
        $conn->prepara_stmt('D', 'atividade_funcoes', null, null, array('CODIGO_EMPRESA','CODIGO_ATIVIDADE'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        $r=$conn->executa_acao();    

        $this->nome_campos=array();
        $this->valor_campos=array();
        $linha_numero=0;
            if ($this->newatvfunc[0]>''){
                $this->newatvfunc_reg=explode(",",$this->newatvfunc[0]);
                for ($p=0;$p<count($this->newatvfunc_reg);$p++){
                $newatvfunc2=explode("|",$this->newatvfunc_reg[$p]);
                $this->nome_campos=array();
                $this->valor_campos=array();

                foreach ($newatvfunc2 as $campo){
                    $newatvfunc3=explode("=",$campo);
                    $this->nome_campos[]=$newatvfunc3[0];
                    $this->valor_campos[]=utf8_encode($newatvfunc3[1]);

                }
                $conn->prepara_stmt('I', 'atividade_funcoes', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','CODIGO_ATIVIDADE','CODIGO_FUNCAO'), array('=','=','='),array($this->valor_campos[0],$this->valor_campos[1],$this->valor_campos[2]));        
                $r=$conn->executa_acao();
                $linha_numero++;
                }    
                
            }
        try{        
        $conn->prepara_stmt('S', "atividades", array('MAX(CODIGO_ATIVIDADE) as CODIGO_ATIVIDADE','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '',array('CODIGO_EMPRESA') , array('='), array($this->codigo_empresa));
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['CODIGO_ATIVIDADE']=$row['CODIGO_ATIVIDADE'];
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        

            header("location:../HTML/atividades.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:../HTML/atividades.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }    
    }

    function apaga_Atividade(){
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $conn->prepara_stmt('D', 'atividades', null, null, array('CODIGO_EMPRESA','CODIGO_ATIVIDADE'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        try{
            $r=$conn->executa_acao();        
            header("location:../HTML/atividades.php?mensagem=Registro excluido com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/atividades.php?mensagem='Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }        
           
        
    }

}


?>
