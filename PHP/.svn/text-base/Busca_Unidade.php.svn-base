<?php
header('http-equiv="Content-Type" content="text/html; charset=ISO-8859-1');
class Busca_Unidade {
   public $unidade;
   public $nome_unidade;
   public $conn;
   
   
    function __construct($unidade){
        $l=include_once('../classes/PHP/conexao_PDO.php');
        $this->conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $this->conn->prepara_stmt('S', 'estrutura_organizacional', array('*'), null, array('UNIDADE'), array('='),array($unidade));

       
   }
   
   function retorna_nome_unidade(){
       $r=$this->conn->executa_acao();     
       if($row=$r->fetch(PDO::FETCH_ASSOC)){
            return $row['DESCRICAO_UNIDADE'];
       }
       else {
           return '';
       }

   }

}
?>
