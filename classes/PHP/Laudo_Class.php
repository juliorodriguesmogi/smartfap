<?php
error_reporting(0); 
session_start();
//gambiarra para IECA
header("Content-Type: text/html; charset=ISO-8859-1", true);
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  
//header('http-equiv="Content-Type" content="text/html; charset=ISO-8859-1');
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
    public $nome_tabela;
    public $nome_campos;
    public $valor_campos;
    public $nome_tabela_nome_campos_valor_campos;
    public $acao;
    public $chave;
    public $oper;
    public $criterio;

    function __construct(){
        include_once('Busca_Empresa_Ativa.php');
        $ea=new Busca_Empresa_Ativa($_SESSION['id_usuario']);
        $this->codigo_empresa=$ea->retorna_empresa();
        $this->get_campos();
        
    }
    function get_campos(){
        // Armazenando chave primária laudos
        $this->acao=$_GET['acao'];
        $this->chave[]='CODIGO_EMPRESA';
        $this->chave[]='ANO_PERICIA';
        $this->chave[]='NUMERO_LAUDO';
        $this->chave[]='REVISAO';
        $this->oper[]=array("=","=","=","=");
        $this->criterio[]=$_POST['laudos|CODIGO_EMPRESA'];
        $this->criterio[]=$_POST['laudos|ANO_PERICIA'];
        $this->criterio[]=$_POST['laudos|NUMERO_LAUDO'];
        $this->criterio[]=$_POST['laudos|REVISAO'];
        $cont=0;
        // Capturando valores para laudos
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

    function insere_laudo(){
        if ($_SESSION['grupo']>2){
            header('location:../HTML/laudos.php?mensagem=Usuário não possui privilégios suficientes para essa operação');   
            break;
        }
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        // gravando laudos
        $c=array();;
        $v=array();;
        foreach ($this->laudos as $campos=>$valores){
            $c[]=$campos;
            $v[]=$valores;
        }
        
        $conn->prepara_stmt('I', 'laudos', $c, $v, $this->chave,$this->oper,$this->criterio);
        
        $r=$conn->executa_acao();
        
        if ($this->criterio[2]=='0' || $this->criterio[2] == null){
            $conn->prepara_stmt('S', "laudos", array('COALESCE(MAX(NUMERO_LAUDO),0) as NUMERO_LAUDO','MAX(DATA_CRIACAO) AS DATA_CRIACAO','MAX(ID_USUARIO) AS ID_USUARIO','MAX(ULTIMA_ATUALIZACAO) AS ULTIMA_ATUALIZACAO','MAX(ULTIMO_USUARIO) AS ULTIMO_USUARIO'), '',array('CODIGO_EMPRESA'),array('='),array( $this->codigo_empresa));
            $ultimo_registro=$conn->executa_acao();
        }
        else {

            $conn->prepara_stmt('S', "laudos",array('NUMERO_LAUDO'),'',$this->chave,array("=","=","=","="),$this->criterio);
            
            $ultimo_registro=$conn->executa_acao();
            
        }
        
        $row=$ultimo_registro->fetch(PDO::FETCH_ASSOC);
        $this->criterio[2]=$row['NUMERO_LAUDO'];
        error_reporting(0);
        $this->oper=array("=","=","=","=","=","=","=","=","=","=","=");
        foreach ($this as $campo=>$valores){
            $campos=explode("|",$campo);
            
            if (substr($campos[0],0,7)=='laudos_'){
                $tabela=$campos[0];
                $c=array();
                $v=array();
                if (is_array(($valores))){
                    $c=  array_merge($this->chave,array_keys($valores));
                    foreach ($valores as $cmp=>$vlr){
                        for ($i=0;$i<count($vlr);$i++){
                            $v[$i][$cmp]=count($vlr)>1?$vlr[$i]:$vlr;
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
            
        }
        error_reporting(E_ALL); 
       
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
        $conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $conn->prepara_stmt('D', 'laudos', $this->nome_campos, $this->valor_campos, array('NUMERO_LAUDO'), array('='),array($this->valor_campos[0],$this->valor_campos[1]));
        

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
