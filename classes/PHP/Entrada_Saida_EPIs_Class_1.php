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

$A=new Movimento_Epi();
switch ($A->acao){
    case "I":
        $A->insere_Movimento_Epi();
        break;
    case "A";
        $A->insere_Movimento_Epi();
        break;
    case "D";    
        $A->apaga_Movimento_Epi();
        break;
}

class Movimento_Epi{
    public $nome_campos;
    public $valor_campos;
    public $acao;
    public $codigo_empresa;
    public $movimento_epi_dl;
    
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
            $this->valor_campos[]=mb_strtoupper($valor);
        }
        $this->nome_campos[]='ID_USUARIO';
        $this->valor_campos[]=$_SESSION['id_usuario'];
        $this->movimento_epi_dl=$_GET['newmovimentoepi_d'];

    }
    function insere_Movimento_Epi(){
        
        if ($_SESSION['grupo']>2){
            header('location:../HTML/movimentacao_epis.php?mensagem=Usuário não possui privilégios suficientes para essa operação');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
//        $conn->prepara_stmt('I', 'movimento_epi_d', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','SEQUENCIAL'), array('='),array($this->valor_campos[0],$this->valor_campos[1]));        
        

        
        try{
            $conn->prepara_stmt('I', 'movimentacao_epis_m', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','SEQUENCIAL'), array('='),array($this->valor_campos[0],$this->valor_campos[1]));
            $r=$conn->executa_acao();        
            $conn->prepara_stmt('S', "movimentacao_epis_m", array('MAX(SEQUENCIAL) as SEQUENCIAL','MAX(DATA_MOVIMENTACAO) AS DATA_MOVIMENTACAO','MAX(ID_USUARIO) AS ID_USUARIO'), '',array('CODIGO_EMPRESA') , array('='), array($this->codigo_empresa));
            $ultimo_registro=$conn->executa_acao();
            $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
            $_SESSION['SEQUENCIAL']=$row['SEQUENCIAL'];
            $_SESSION['DATA_MOVIMENTACAO']=$row['DATA_MOVIMENTACAO'];
            $_SESSION['id_usuario']=$row['ID_USUARIO'];
            //$_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];

            $movimento_epi_d1=explode(",",$this->movimento_epi_dl);
            $this->nome_campos=array();
            $this->valor_campos=array();

            $this->nome_campos[]='CODIGO_EMPRESA';
            $this->valor_campos[]=$this->codigo_empresa;
            $this->nome_campos[]='SEQUENCIAL';
            $this->valor_campos[]=$row['SEQUENCIAL'];
            $linha_numero=1;
            $this->nome_campos[]='LINHA_NUMERO';
            $this->valor_campos[]=$linha_numero;
            
            foreach ($movimento_epi_d1 as $linha){
                $movimento_epi_d2=explode("|",$movimento_epi_d1[0]);
                foreach ($movimento_epi_d2 as $campo){
                    $movimento_epi_d3=explode("=",$campo);
                    $this->nome_campos[]=$movimento_epi_d3[0];
                    $this->valor_campos[]=$movimento_epi_d3[1];

                }
                $conn->prepara_stmt('I', 'movimentacao_epis_d', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','SEQUENCIAL','LINHA_NUMERO'), array('='),array($this->valor_campos[0],$this->valor_campos[1],$this->valor_campos[2]));        
                $r=$conn->executa_acao();
                $linha_numero++;
                $this->valor_campos[2]=$linha_numero;
                
            }
            $sequencial=$row['SEQUENCIAL'];
            $codigo_funcionario=$_POST['CODIGO_FUNCIONARIO'];
            header("location:../Reports/Relatorio_Entrega_EPIs_NR1.php?CODIGO_EMPRESA=$this->codigo_empresa&SEQUENCIAL=$sequencial&CODIGO_FUNCIONARIO=$codigo_funcionario");

 
                
            //    header("location:../HTML/movimentacao_epis.php?mensagem=Registro atualizado com sucesso!");        
            }
            catch (PDOException $e){
                header("location:../HTML/movimentacao_epis.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
            }    
    }

    function apaga_Movimento_Epi(){
        $l=include_once('conexao_PDO.php');
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('D', $visao, null,null,array($this->nome_campos[0],$this->nome_campos[1]),array('=','='),array($this->valor_campos[0],$this->valor_campos[1]),null,null);
        $r=$conn->executa_acao();     

        try{
            $r=$conn->executa_acao();     
            header("location:../HTML/movimentacao_epis.php?mensagem=Registro excluido com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/movimentacao_epis.php?mensagem='Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }        
           
        
    }

}


?>
