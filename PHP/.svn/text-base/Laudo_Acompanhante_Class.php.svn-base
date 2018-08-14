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

$U=new Laudo();
switch ($U->acao){
    case "I";
        $U->insere_laudo();
        break;
    case "A";
        $U->insere_laudo();
        break;
    case "D";    
        $U->apaga_laudo();
        break;

}

class Laudo{
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
            $valor= preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1", $valor);
            $this->valor_campos[]=mb_strtoupper($valor);
           $cont++;
        }
        $this->nome_campos[]='ID_USUARIO';
        $this->valor_campos[]=$_SESSION['id_usuario'];
        
    }

    function insere_laudo(){
        if ($_SESSION['grupo']>2){
            header('location:../HTML/laudos.php?mensagem=Usuário não possui privilégios suficientes para essa operação');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $conn->prepara_stmt('I', 'laudos_acompanhantes', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','NUMERO_LAUDO','REVISAO'), array('=','=','='),array($this->valor_campos[0],$this->valor_campos[1],$this->valor_campos[2]));
        $r=$conn->executa_acao();        
        $conn->prepara_stmt('S', "laudos_acompanhantes", array('MAX(NUMERO_LAUDO) as NUMERO_LAUDO','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '');
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['NUMERO_LAUDO']=$row['NUMERO_LAUDO'];
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        
        try{
            header("location:../HTML/laudos.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:../HTML/laudos.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }    
    }

    function apaga_laudo(){
        $var_c=array_combine($this->nome_campos, $this->valor_campos);        
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $conn->prepara_stmt('D', 'laudos_acompanhantes', $this->nome_campos, $this->valor_campos, array('NUMERO_LAUDO'), array('='),array($this->valor_campos[0],$this->valor_campos[1]));
        

        try{
            $r=$conn->executa_acao();        
            header("location:../HTML/laudos.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/laudos.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicaÃ§Ã£o");  
        }
        
    }
}


?>
