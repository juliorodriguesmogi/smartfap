<?php

class Busca_Empresa_Ativa {
   public $sql_empresa_ativa;
   public $idusu;
   public $result;
   
    function __construct($id_usuario){
       include_once('conexao_class.php');
       $this->idusu=$id_usuario;
       
   }
   
   function retorna_empresa(){
       $sql_empresa_ativa="Select CODIGO_EMPRESA,RAZAO_SOCIAL from `empresa_ativa` where ID_USUARIO="."'$this->idusu'";
       $this->result=mysql_query($sql_empresa_ativa);
       if ($row=mysql_fetch_array($this->result)){
           return $row['CODIGO_EMPRESA'];
       }
       else {
           return 0;
       }

   }
   function retorna_nome_empresa(){
       $sql_empresa_ativa="Select CODIGO_EMPRESA,RAZAO_SOCIAL from `empresa_ativa` where ID_USUARIO="."'$this->idusu'";
       $this->result=mysql_query($sql_empresa_ativa);
       if ($row=mysql_fetch_array($this->result)){
           return $row['RAZAO_SOCIAL'];
       }
       else {
           return 'NENHUMA';
       }

   }
   
}
?>
