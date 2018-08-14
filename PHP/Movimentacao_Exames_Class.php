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

$A=new Movimento();

switch ($A->acao){
    case "I":
        $A->insere_Movimento();
        break;
    case "A";
        $A->insere_Movimento();
        break;
    case "D";    
        $A->apaga_Movimento();
        break;
}

class Movimento{
    public $nome_campos;
    public $valor_campos;
    public $acao;
    public $codigo_empresa;
    public $movimento_dl;
    
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
            $this->valor_campos[]=mb_strtoupper($valor);
        }
        $this->nome_campos[]='ID_USUARIO';
        $this->valor_campos[]=$_SESSION['id_usuario'];
        //$this->movimento_dl=$_GET['newmovimento_d'];

    }
    function insere_Movimento(){
        if ($_SESSION['grupo']>2){
            header('location:../HTML/movimentacao_exames.php?mensagem=Usuсrio nуo possui privilщgios suficientes para essa operaчуo');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
//        $conn->prepara_stmt('I', 'movimento_d', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','SEQUENCIAL'), array('='),array($this->valor_campos[0],$this->valor_campos[1]));        
            $conn->prepara_stmt('I', 'movimentacao_exames_m', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','CODIGO_MOVIMENTACAO'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
            $r=$conn->executa_acao();   

            /*$conn->prepara_stmt('S', 'movimentacao_exames', null, null, array('CODIGO_EMPRESA','CODIGO_MOVIMENTACAO'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
            $ultimo_registro=$conn->executa_acao();
            $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
            $_SESSION['CODIGO_MOVIMENTACAO']=$row['CODIGO_MOVIMENTACAO'];
            $_SESSION['DATA_MOVIMENTACAO']=$row['DATA_MOVIMENTACAO'];
            $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];*/
            
            /*$movimento_d1=explode(",",$this->movimento_dl);
            $this->nome_campos=array();
            $this->valor_campos=array();

            $this->nome_campos[]='CODIGO_EMPRESA';
            $this->valor_campos[]=$this->codigo_empresa;
            $this->nome_campos[]='SEQUENCIAL';
            $this->valor_campos[]=$row['SEQUENCIAL'];
            $linha_numero=1;
            $this->nome_campos[]='LINHA_NUMERO';
            $this->valor_campos[]=$linha_numero;
            
            foreach ($movimento_d1 as $linha){
                $movimento_d2=explode("|",$movimento_d1[0]);
                foreach ($movimento_d2 as $campo){
                    $movimento_d3=explode("=",$campo);
                    $this->nome_campos[]=$movimento_d3[0];
                    $this->valor_campos[]=$movimento_d3[1];

                }
                $conn->prepara_stmt('I', 'movimentacao_exames', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','CODIGO_MOVIMENTACAO','CODIGO_FUNCIONARIO'), array('='),array($this->valor_campos[0],$this->valor_campos[1],$this->valor_campos[2]));        
                $r=$conn->executa_acao();
                $linha_numero++;
                $this->valor_campos[2]=$linha_numero;
                
            }
            $sequencial=$row['CODIGO_MOVIMENTACAO'];
            $codigo_funcionario=$_POST['CODIGO_FUNCIONARIO'];*/
            header("location:../HTML/movimentacao_exames.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicaчуo");  
   }

    function apaga_Movimento(){
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('D', 'movimentacao_exames', null, null, array('CODIGO_EMPRESA','CODIGO_MAQUINA'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        try{
            $r=$conn->executa_acao();        
            header("location:../HTML/movimentacao_exames.php?mensagem=Registro excluido com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/movimentacao_exames.php?mensagem='Ocorreu um erro ao excluir o registro. Verifique o log da aplicaчуo");  
        }        
           
        
    }

}


?>