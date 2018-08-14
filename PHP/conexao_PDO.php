<?php
require_once("PDOdbException.php");

class conexao_PDO {
    
    private $conn;
    public $sql;
    public $erro;
    public $config_file;
    
    function __construct($host=null,$dbname=null,$usuario=null,$senha=null,$driver=null,$tipo_banco='bd_default',$tipo_conexao='conexao_remota'){
        $driver!=null?$drv=$driver:$drv='mysql';
        $db=quoted_printable_decode($dbname);
        $dr=quoted_printable_decode($drv);
        $hst=quoted_printable_decode($host);
        $this->config_file=  parse_ini_file('config.ini',true);
        $driver=$this->config_file[$tipo_conexao]['driver'];
        $hst=quoted_printable_decode($this->config_file[$tipo_conexao]['host']);
        $db=quoted_printable_decode($this->config_file[$tipo_banco]['banco_dados']);
        $usuario=quoted_printable_decode($this->config_file[$tipo_banco]['usuario']);        
        $senha=quoted_printable_decode($this->config_file[$tipo_banco]['senha']);        
        header('http-equiv="Content-Type" content="text/html; charset=ISO-8859-1');
        
        try{
        $this->conn = new PDO("$dr:host=$hst;dbname=$db",$usuario,$senha);
        }
        catch(PDOException $e){
            $ex= new PDOdbException($e);
            $this->erro='HY000';
            $_SESSION['CODIGO_ERRO']=$this->erro;
             

        }

        
        
        
    }
     function obter_arquivo_ini(){
    
    }
    
    function prepara_stmt($tipo_operacao,$nome_tabela,$campos=null,$valores=null,$chave=null,$oper=null,$criterio=null,$grupo=null,$ordem=null){
        
        switch ($tipo_operacao){
            case 'I':
                $this->sql='Insert into ';
                $this->sql.="`$nome_tabela` set ";
                $c=array_combine($campos,$valores);
                $cnt=0;
                $temp='';
                $temp2='';
                $ondp='';
                if (sizeof($c)>0){
                    foreach ($c as $cm=>$vl){
                        $this->sql.=$temp;
                        $vl=preg_replace("/(\d{2})\/(\d{2})\/(\d{4})/", "$3-$2-$1",$vl);
                        $vch=$cm." = "."'$vl'";
                        if ($cnt+1>count($chave)) {
                            $ondp.=$temp2.$vch;
                            $temp2=' , ';
                        }    
                        $this->sql.=$vch;
                        
                        $cnt++;
                        $temp=' , ';
                        
                    }    
                }
                $this->sql.=" on duplicate key update ";

                $this->sql.=$ondp;
                
                

                break;
            case 'D':
                $this->sql="Delete from `$tabela` ";
                $chv=array_combine($chave,$criterio);
                $cnt=0;
                $temp='';
                if (sizeof($chv)>0){
                    $this->sql.=' where ';
                    foreach ($chv as $ch=>$cm){
                        $this->sql.=$temp;
                        $vch=$ch.$oper[$cnt]."'$cm'";
                        $this->sql.=$vch;
                        $cnt++;
                        $temp=" and ";
                    }    
                }
                
                break;
            case 'S':
                $cmps=implode(",", $campos);
                $cmps=preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1",$cmps);                
                $tbl=array();
                if (count($nome_tabela)==1){
                    $tbl[0]=$nome_tabela;
                    $this->sql="Select $cmps from `$tbl[0]` ";
                }
                else {
                    $tbl=$nome_tabela;
                    $this->sql="Select $cmps from ";
                    $temp='';
                    foreach($tbl as $item){
                        $tbl1=explode(" ",$item);
                        $this->sql.=$temp.'`'.$tbl1[0]."` ".$tbl1[1];
                        $temp=',';
                    }
                }



                if (count($nome_tabela)>0){
                }
                $cnt=0;
                $temp='';
                if (sizeof($chave)>0 and $chave<>""){
                    $chv=array_combine($chave,$criterio);
                    if ($chv>""){
                        $this->sql.=' where ';
                        foreach ($chv as $ch=>$cm){
                            
                            $this->sql.=$temp;
                            $vch=$ch." ".$oper[$cnt];
                            if (substr($cm,0,7)=='SOUNDEX') {
                                $vch.=" $cm";
                            }
                            else {
                                if (substr($cm,0,1)=='['){
                                 $vch.=substr($cm,1,strlen($cm)-2);  
                                }
                                else if($oper[$cnt]==' is ') {
                                    $vch.=" null ";
                                    
                                }    
                                else {    
                                $vch.=" '$cm'";
                                }
                            }      
                            if ($vch>"''"){
                                $this->sql.=$vch;
                                $cnt++;
                                $temp=" and  ";
                            }    
                        }    
                    }    
                }
                if (sizeof($ordem)>0){
                    $this->sql.=' order by ';
                    $temp='';
                    foreach ($ordem as $ord){
                        $this->sql.=$temp;
                        $vch=$ord;
                        $this->sql.=$vch;
                        $cnt++;
                        $temp=" , ";
                    }    
                    
                }
                break;
            
        }     
        
    }
    
    function executa_acao(){
        try{
            $this->log_operacoes('', $this->sql);
            return $this->conn->query($this->sql);
            
        }
        catch (PDOException $e){
            $this->log_erros($e->getCode(),$e->getFile(),$e->getLine(),$e->getTraceAsString());
        }
     }
    
    function log_erros($codigo_erro,$nome_arquivo,$numero_linha,$descricao){
        error_reporting(E_ALL^ E_WARNING); 

        if (!file_exists('../../logs/db.log')) {
                $ddf = fopen('../../logs/db.log','a+'); 
                fwrite($ddf,"Data\t\t\t\t |Código erro  |\tNome Arquivo            |\tNúmero Linha|\tDescrição\r\n");
        }
        else {
                $ddf = fopen('../../logs/db.log','a+');         
        }
        
        fwrite($ddf,"[".date("r")."]|$codigo_erro|\t$nome_arquivo|\t$numero_linha|\t$descricao\r\n"); 
        fclose($ddf); 
        error_reporting(E_ALL); 
    }
    
    function log_operacoes($operacao,$sql){
        error_reporting(E_ALL^ E_WARNING); 
        if (!file_exists('../../logs/sql.log')) {
                $ddf = fopen('../../logs/sql.log','a+'); 
                fwrite($ddf,"Data\t\t\t\t |Tipo Operação\t|Operação\r\n");
        }
        else {
                $ddf = fopen('../../logs/sql.log','a+');         
                fwrite($ddf,"[".date("r")."]|$operacao\t|$sql\r\n"); 
        }
        
        fwrite($ddf,"[".date("r")."]|$operacao\t|$sql\r\n"); 
        fclose($ddf); 
        error_reporting(E_ALL); 
    }
    
    function __destruct() {
        
    }
}
$c=new conexao_PDO();
?>
