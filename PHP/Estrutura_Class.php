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

$U=new estrutura();
switch ($U->acao){
    case "I":
        $U->insere_unidade();
        break;
    case "E";
        $U->atualiza_estrutura();
        break;
    case "D";    
        $U->apaga_estrutura();
        break;
    case "C";    
        $U->consulta_estrutura();
        break;
      case "L";    
        $U->lista_estrutura();
        break;  

}

class estrutura{
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
        $this->nome_campos[]='CODIGO_EMPRESA';
        $this->valor_campos[]=$_SESSION['empresa_ativa'];
        foreach ($_POST as $campo=>$valor){
            $this->nome_campos[]=$campo;
            $valor=  utf8_encode($valor);
            $valor= preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1", $valor);
            $this->valor_campos[]=mb_strtoupper($valor);
           $cont++;
        }
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
                    $valor[$i]= utf8_encode($valor[$i]);
                    $valor[$i]= preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1", $valor[$i]);
                    $valor[$i]= mb_strtoupper($valor[$i]);
                    $xvalor[$campos[1]][$i]=$valor[$i];
                    $temp = "\$this->".$campos[0]."[".$campos[1]."][$i]='$valor[$i]';";
                    eval($temp);
                }
                
            } else {
                $valor= utf8_encode($valor);
                $valor= preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1", $valor);
                $valor= mb_strtoupper($valor);
                $temp = "\$this->".$campos[0]."[".$campos[1]."]='$valor';";
                eval($temp);
            }
            
        }         
    }

    function consulta_estrutura(){

        $campo=(String) $_GET['campo'];
        $campo=explode(',', $campo);
        $valor=(String) $_GET['valor'];
        $valor=explode(',', $valor);
        $condicao=(String) $_GET['condicao'];
        $condicao=explode(',', $condicao);
        $tipo_busca=(String) $_GET['tipo_busca'];
        $tipo_busca=explode(',', $tipo_busca);
        $visao=(String) $_GET['visao'];
        $campo[]='CODIGO_EMPRESA';
        $valor[]=$_SESSION['empresa_ativa'];
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        
        if ($conn->erro!=null){
            echo "NF";
            return;
        }
       
        $conn->prepara_stmt('S', 'estrutura_organizacional',array('*'), null, $campo, $condicao,$valor);
        $r=$conn->executa_acao();     
        if ($r->fetchColumn(0)==0){
            echo "NF";
            return;
        }
        else {
            $r=$conn->executa_acao();     
            while($row=$r->fetch(PDO::FETCH_ASSOC)){
                $campo='';
                foreach ($row as $valor){
                    $valor=  utf8_decode($valor);
                    $valor=ereg_replace("\r", "", $valor); 
                    $valor=ereg_replace("\n", "", $valor); 
                    $valor=preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1",$valor);

                    $valor=str_replace("\n",'',$valor);
                // $valor=  utf8_decode($valor);            

                    $campo.=$valor.'|';
                }
                echo $campo;
                echo "\n";
            }          
    }
    }

    function lista_estrutura(){
        session_start();
         $campo=(String) $_GET['campo'];
        $campo=explode(',', $campo);
        $valor=(String) $_GET['valor'];
        $valor=explode(',', $valor);
        $condicao=(String) $_GET['condicao'];
        $condicao=explode(',', $condicao);
        $tipo_busca=(String) $_GET['tipo_busca'];
        $visao=(String) $_GET['visao'];
        $tabela=(String) $_GET['tabela'];
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('S', $tabela, array('*'),null,$campo,$condicao,$valor,null,array("UNIDADE_PAI,NIVEL_ORGANIZACAO"));
        $r=$conn->executa_acao();     
        if ($r->fetchColumn(0)==null){
            echo "NF";
            return;
        }
        else {
            $r=$conn->executa_acao();     
            while($row=$r->fetch(PDO::FETCH_ASSOC)){
                $campo='';
                foreach ($row as $valor){
                    $valor=ereg_replace("\r", "", $valor); 
                    $valor=ereg_replace("\n", "", $valor); 
                    $valor=preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1",$valor);

                    $valor=str_replace("\n",'',$valor);
                    $valor=  utf8_decode($valor);            
                    $campo.=$valor.'|';
                }
                echo $campo;
                echo "\n";
            }     
        }
    }    
    
    
    
    
    function insere_unidade(){
        if ($_SESSION['grupo']>2){
            header('location:'.$_SERVER['HTTP_REFERER'].'?mensagem=Usuário não possui privilégios suficientes para essa operação');   
            break;
        }
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('I', 'estrutura_organizacional', $this->nome_campos, $this->valor_campos, array('CODIGO_EMPRESA','CODIGO_UNIDADE'), array('=',"="),array($this->valor_campos[0],$this->valor_campos[1]));
        $r=$conn->executa_acao();        
        $conn->prepara_stmt('S', "estrutura_organizacional", array('MAX(UNIDADE) as UNIDADE','MAX(DATA_CADASTRO) AS DATA_CADASTRO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '');
        $ultimo_registro=$conn->executa_acao();
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $_SESSION['UNIDADE']=$row['UNIDADE'];
        $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
        $_SESSION['ULTIMO_USUARIO']=$row['ULTIMO_USUARIO'];
        
        try{
            header("location:".$_SERVER['HTTP_REFERER']."?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:".$_SERVER['HTTP_REFERER']."?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }    
    }
  
    function atualiza_estrutura(){
        $this->chave[]='CODIGO_EMPRESA';
        $this->oper[]='=';
        $this->criterio[]=$_SESSION['empresa_ativa'];
        include_once '../classes/PHP/conexao_PDO.php';        
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        foreach ($this as $campo=>$valores){
            $campos=explode("|",$campo);
            
            if (substr($campos[0],0,10)=='estrutura_'){
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
                                $r=$conn->executa_acao();

                            }
                        }

                }     
            }
            error_reporting(E_ALL); 
        try{
            header("location:".$_SERVER['HTTP_REFERER']."?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:".$_SERVER['HTTP_REFERER']."?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }    
            
        
        }        
    }
    
    function apaga_estrutura(){
        include_once '../classes/PHP/conexao_PDO.php';
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('D', 'estrutura_organizacional', null,null,array($this->nome_campos[0],$this->nome_campos[1]),array('=','='),array($this->valor_campos[0],$this->valor_campos[1]),null,null);
        $conn->executa_acao();
        try{
            header("location:".$_SERVER['HTTP_REFERER']."?mensagem=Registro atualizado com sucesso!");        
        }
        catch (PDOException $e){
            header("location:".$_SERVER['HTTP_REFERER']."?mensagem=Ocorreu um erro ao excluir o registro. Verifique o log da aplicação");  
        }    
        
    }
}


?>
