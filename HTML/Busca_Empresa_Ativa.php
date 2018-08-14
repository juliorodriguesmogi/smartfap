<?php

class Busca_Empresa_Ativa {
   public $sql_empresa_ativa;
   public $idusu;
   public $result;
   public $conn;
   
    function __construct($id_usuario){
        $this->idusu=$id_usuario;
        $this->conn=new conexao_PDO('209.97.130.137','smartfapdb','root','%phoenix17%','mysql');
        $this->conn->prepara_stmt('S', 'empresa_ativa', array('*'), null, array('CODIGO_EMPRESA'), array('='),array($id_usuario));
    }
   
   function retorna_empresa(){
       $r=$conn->executa_acao();     
       if($row=$r->fetch(PDO::FETCH_ASSOC)){
            $this->codemp=$row['CODIGO_EMPRESA'];
            return $row['CODIGO_EMPRESA'];
       }
       else {
           return 0;
       }

   }
   function retorna_nome_empresa(){
       $r=$conn->executa_acao();     
       if($row=$r->fetch(PDO::FETCH_ASSOC)){
            $this->codemp=$row['CODIGO_EMPRESA'];
            return $row['RAZAO_SOCIAL'];
       }
       else {
           return '';
       }

   }
   function retorna_cidade_empresa(){
       $r=$conn->executa_acao();     
       if($row=$r->fetch(PDO::FETCH_ASSOC)){
            $this->codemp=$row['CODIGO_EMPRESA'];
            return $row['MUNICIPIO_ATUACAO'];
       }
       else {
           return '';
       }

   }   
}
?>
