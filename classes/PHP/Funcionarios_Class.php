<?php
//gambiarra para IECA
session_start();
header("Content-Type: text/html; charset=ISO-8859-1", true);
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  




$U=new Funcionario();
switch ($U->acao){
    case "I";
        $U->insere_funcionario();
        break;
    case "A";
        $U->insere_funcionario();
        break;
    case "D";    
        $U->apaga_funcionario();
        break;

}

class Funcionario{
    public $nome_campos;
    public $valor_campos;
    public $nome_campos_matriz;
    public $valor_campos_matriz;
    public $acao;
    public $chave;
    public $criterio;
    function __construct(){
        $this->codigo_empresa=$_SESSION['empresa_ativa'];
        $this->get_campos();
    }
    function get_campos(){
        $cont=0;
        $this->nome_campos[]='CODIGO_EMPRESA';
        $this->valor_campos[]=$this->codigo_empresa;
        $this->nome_campos[]='CODIGO_FUNCIONARIO';
        $this->valor_campos[]=$_POST['funcionarios|CODIGO_FUNCIONARIO'];
        
        $this->acao=$_GET['acao'];
        error_reporting(0); 
        foreach ($_POST as $campo=>$valor){
            $campos=explode("|",$campo);
            $temp = "\$this->".$campos[0]."='';";
            eval($temp);
        }    
        foreach ($_POST as $campo=>$valor){
            $campos=explode("|",$campo);
            if (is_array($valor)){
                for ($i=0;$i<count($valor);$i++){
                    $xvalor[$campos[1]][$i]=mb_strtoupper($valor[$i]);
                    $valor[$i]=  utf8_encode($valor[$i]);
                    $valor[$i]=mb_strtoupper($valor[$i]);
                    $temp = "\$this->".$campos[0]."[".$campos[1]."][$i]='$valor[$i]';";
                    eval($temp);
                }
                
            } else {
                $valor=utf8_encode($valor);
                $valor=mb_strtoupper($valor);
                $temp = "\$this->".$campos[0]."[".$campos[1]."]='$valor';";
                eval($temp);
            }
            
        }    

        
    }

    function insere_funcionario(){

        if ($_SESSION['grupo']>2){
            header('location:../HTML/funcionarios.php?mensagem=Usu?rio n?o possui privil?gios suficientes para essa opera??o');   
            break;
        }
        $this->nome_campos[]='ID_USUARIO';
        $this->valor_campos[]=$_SESSION['id_usuario'];
        
        $this->chave=array($this->nome_campos[0],$this->nome_campos[1]);
        $this->oper=array("=","=");
        $this->criterio=array($this->valor_campos[0],$this->valor_campos[1]);
        
        $c=array();;
        $v=array();;
        foreach ($this->funcionarios as $campos=>$valores){
            $c[]=$campos;
            $v[]=$valores;
        }       
        $c[]='ID_USUARIO';
        $v[]=$_SESSION['id_usuario'];
        $_SESSION['codigo_funcionario']=$this->chave[1];
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        //$conn->prepara_stmt('I', 'funcionarios', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','CODIGO_FUNCIONARIO'), array('=','='),array($this->valor_campos[0],$this->valor_campos[1]));
        $conn->prepara_stmt('I', 'funcionarios', $c, $v, array($this->chave[0],$this->chave[1]),$this->oper,array($this->criterio[0],$this->criterio[1]));

        $r=$conn->executa_acao();
        if ($this->criterio[1]==0){
            $conn->prepara_stmt('S', "funcionarios", array('MAX(CODIGO_FUNCIONARIO) as CODIGO_FUNCIONARIO','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '');
            $ultimo_registro=$conn->executa_acao();
            $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
            $this->criterio[1]=$row['CODIGO_FUNCIONARIO'];   
            $_SESSION['CODIGO_FUNCIONARIO']=$row['CODIGO_FUNCIONARIO'];
            $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
            $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];            
        }
        
        
        
        
        $conn->prepara_stmt('D', 'funcionarios_historico_exames', null,null,array($this->nome_campos[0],$this->nome_campos[1]),array('=','='),array($this->valor_campos[0],$this->valor_campos[1]),null,null);
        $conn->executa_acao();
        $conn->prepara_stmt('D', 'funcionarios_monitoracao_biologica', null,null,array($this->nome_campos[0],$this->nome_campos[1]),array('=','='),array($this->valor_campos[0],$this->valor_campos[1]),null,null);
        $conn->executa_acao();
        $conn->prepara_stmt('D', 'funcionarios_historico_afastamentos', null,null,array($this->nome_campos[0],$this->nome_campos[1]),array('=','='),array($this->valor_campos[0],$this->valor_campos[1]),null,null);
        $conn->executa_acao();
        
        foreach ($this as $campo=>$valores){
            $campos=explode("|",$campo);
            
            if (substr($campos[0],0,13)=='funcionarios_'){
                $tabela=$campos[0];
                $c=array();
                $v=array();
                if (is_array(($valores))){
                    $c=  array_merge($this->chave,array_keys($valores));
                    foreach ($valores as $cmp=>$vlr){
                        for ($i=0;$i<count($vlr);$i++){
                            $v[$i][$cmp]=isset($vlr[$i])?$vlr[$i]:"";
                        }
                    }
                        for ($i=0;$i<count($v);$i++){
                            if ($v[$i]!=""){
                            $v[$i]=array_merge($this->criterio,array_values($v[$i]));
                            $conn->prepara_stmt('I', $tabela, $c, $v[$i], $this->chave,$this->oper,$this->criterio);
                            
                            //echo $conn->sql."<br/>";
                            $r=$conn->executa_acao();
                            
                            }
                        }

                }     
            }
        }
            error_reporting(E_ALL);         

        
        try{
            header("location:../HTML/funcionarios.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:../HTML/funcionarios.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplica??o");  
        }    
    

}
    function apaga_funcionario(){
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('D', 'funcionarios', null,null,array($this->nome_campos[0],$this->nome_campos[1]),array('=','='),array($this->valor_campos[0],$this->valor_campos[1]),null,null);
        $conn->executa_acao();
        try{
            $r=$conn->executa_acao();  
            header("location:../HTML/funcionarios.php?mensagem=Registro excluído com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/funcionarios.php?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }
        
    }

}


?>