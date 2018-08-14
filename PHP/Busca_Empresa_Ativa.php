<?php


class Busca_Empresa_Ativa {
   public $sql_empresa_ativa;
   public $codigo_empresa;
   public $idusu;
   public $result;
   public $conn;
   public $conn2;
   public $r;
   public $row;
   public $r2;
   public $row2;
   
   
    function __construct($id_usuario){
        
        //gambiarra para o IECA;
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
        header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
        header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
        header('Pragma: no-cache');  
        header("Cache: no-cache");    
        header('Expires: 0');  
        header('http-equiv="Content-Type" content="text/html; charset=ISO-8859-1');
        $this->idusu=$id_usuario;
        $l=include_once('../classes/PHP/conexao_PDO.php');
        $this->conn=new conexao_PDO('209.97.130.137','cyberpc06','cyberpc06','phoenix10','mysql');
        $this->conn->prepara_stmt('S', 'empresa_ativa', array('*'), null, array('ID_USUARIO'), array('='),array($id_usuario));
        $this->r=$this->conn->executa_acao();     
        $this->row=$this->r->fetch(PDO::FETCH_ASSOC);
        $this->codigo_empresa=$this->row['CODIGO_EMPRESA'];
        $this->conn->prepara_stmt('S', 'empresas', array('*'), null, array('CODIGO_EMPRESA'), array('='),array($this->codigo_empresa));
        $this->r2=$this->conn->executa_acao();     
        $this->row2=$this->r2->fetch(PDO::FETCH_ASSOC);
        // header("Content-Type: text/html; charset=ISO-8859-1", true);  
    }
   
   function retorna_empresa(){
      if ($this->codigo_empresa>0){
            return $this->codigo_empresa;
       }
       else {
            return 0;
       }

   }
   function retorna_nome_empresa(){
      if ($this->row['RAZAO_SOCIAL']>''){
            return utf8_decode($this->row['RAZAO_SOCIAL']);
       }
       else {
           return '';
       }
   }
   function retorna_endereco_empresa(){
       if ($this->row2['ENDERECO_ATUACAO']>''){
           return utf8_decode($this->row2['TIPO_LOGRADOURO_ATUACAO']." ".$this->row2['ENDERECO_ATUACAO']).' '.$this->row2['NRO_ATUACAO'];
       }
       else {
           return '';
       }

   }   
    function retorna_bairro_empresa(){
      if ($this->row2['BAIRRO_ATUACAO']>''){
            return utf8_decode($this->row2['BAIRRO_ATUACAO']);
       }
       else {
           return '';
       }

   }      
    function retorna_municipio_empresa(){
        if ($this->row2['MUNICIPIO_ATUACAO']>''){
        return utf8_decode($this->row2['MUNICIPIO_ATUACAO']);
       }
       else {
           return '';
       }

   }      
       function retorna_uf_empresa(){
        if ($this->row2['UF_ATUACAO']>''){
           return $this->row2['UF_ATUACAO'];
       }
       else {
           return '';
       }

   }     
        function retorna_cep_empresa(){
           if ($this->row2['CEP_ATUACAO']>''){
            return $this->row2['CEP_ATUACAO'];
       }
       else {
           return '';
       }

   }     
       function retorna_CNPJ_empresa(){
           if ($this->row2['CNPJ']>''){
           return $this->row2['CNPJ'];
       }
       else {
           return '';
       }

   }      
       function retorna_CNAE_empresa(){
       if ($this->row2['CODIGO_CNAE']>''){
           return $this->row2['CODIGO_CNAE'];
       }
       else {
           return '';
       }
       }

       function retorna_numero_funcs_empresa(){
           if ($this->row2['NUMERO_FUNCS']>''){
           return $this->row2['NUMERO_FUNCS'];
       }
       else {
           return '';
       }

         }      
       function retorna_grau_risco_empresa(){
           if ($this->row2['GRAU_RISCO']>''){
           return $this->row2['GRAU_RISCO'];
       }
       else {
           return '';
       }
       }
         
   
}
?>
