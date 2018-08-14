<?php
//gambiarra para IECA
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  

$U=new Usuario();
switch ($U->acao){
    case "I":
        $U->insere_usuario();
        break;
    case "A";
        $U->atualiza_usuario();
        break;
    case "D";    
        $U->apaga_usuario();
        break;
    case "L";
        $U->login();
}

class Usuario{
    public $nome_campos;
    public $valor_campos;
    public $acao;
    public $codigo_empresa;
    public $nome_empresa;
    
    function __construct(){
        include_once ('conexao.php');        
        session_start();
        include_once('Busca_Empresa_Ativa.php');
        $ea=new Busca_Empresa_Ativa($_SESSION['id_usuario']);
        $this->codigo_empresa=$ea->retorna_empresa();
        $this->nome_empresa=$ea->retorna_nome_empresa();
        $this->get_campos();        

    }
    function get_campos(){
        $cont=0;
        $this->acao=$_GET['acao'];
        foreach ($_POST as $campo=>$valor){
            $this->nome_campos[]=$campo;
            $valor= preg_replace("/(\d+)-(\d+)-(\d+)/", "$3/$2/$1", $valor);
            $this->valor_campos[]=mb_strtoupper($valor);
        }
    }
    function valida_id_usuario(){
        $sql="select * from usuarios where ID_USUARIO="."$this->valor_campos[1]";
        $result=mysql_query($sql);
        if (mysql_num_rows($result)>0){
            header("location:../HTML/usuarios.php?mensagem_erro=J� existe um usu�rio com o ID escolhido. Escolha outro ID.");  
        }
        
    }
    function insere_usuario(){
        session_start();
        if ($_SESSION['GRUPO']>2){
            header('location:../HTML/usuarios.php?mensagem_erro=Usu�rio n�o possui privil�gios suficientes para essa opera��o');   
            break;
        }
        $sql_usuario="Insert into `usuarios` (";
        $cont=0;
        foreach ($this->nome_campos as $c){
            if ($cont!=0){
                    $sql_usuario.=$c.",";                
            }
            $cont++;
        }
        $sql_usuario.="SESSION_ID,ULTIMO_USUARIO,";
        $sql_usuario=substr($sql_usuario, 0, strlen($sql_usuario)-1);
        $sql_usuario.= ") values (";
        $cont=0;
        foreach ($this->nome_campos as $c){
            if ($cont!=0){
                if (stripos($c,"SENHA")>-1){
                    $sql_usuario.="'".base64_encode($c)."'".",";
                }
                else {
                    $sql_usuario.="'".$c."'".',';
                }    
            }
            $cont++;

        }
        $sql_usuario.="'".session_id()."',";
        $sql_usuario.="'".$_SESSION['id_usuario']."',";
        $sql_usuario=substr($sql_usuario, 0, strlen($sql_usuario)-1);        
        $sql_usuario.=")";
        try {
            mysql_query($sql_usuario);
            $ultimo_registro="Select MAX(CODIGO_USUARIO) AS CODIGO_USUARIO,MAX(DATA_CADASTRO) AS DATA_CADASTRO, MAX(ID_USUARIO) AS ID_USUARIO from `usuarios` where SESSION_ID ='".session_id()."'";
            $result=mysql_query($ultimo_registro);
            $row=mysql_fetch_array($result);
            session_start('usuario');
            $_SESSION['CODIGO_USUARIO']=$row['CODIGO_USUARIO'];
            $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
            $_SESSION['ID_USUARIO']=$_row['ID_USUARIO'];
            header("location:../HTML/usuarios.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/usuarios.php?mensagem_erro=Ocorreu um erro ao atualizar o registro. Verifique o log da aplica��o");  
        }
    }
    function atualiza_usuario(){
        $sql_usuario="Update `usuarios` set ";
        $var_c=array_combine($this->nome_campos, $this->valor_campos);
        foreach ($var_c as $c_campos=>$c_valores){
               if (stripos($c_campos,"SENHA")>-1){
                    $sql_usuario.=$c_campos."="."'".base64_encode($c_valores)."'".",";
                }
                else {
                    $sql_usuario.=$c_campos."="."'".$c_valores."',";
                }
                $cont++;
        }        
        $sql_usuario.="ULTIMA_ATUALIZACAO='".date('Y-m-d H:i:s')."',";
        $sql_usuario.="ULTIMO_USUARIO='".$_SESSION['id_usuario']."',";
        $sql_usuario=substr($sql_usuario, 0, strlen($sql_usuario)-1);        
        $sql_usuario.=" where CODIGO_USUARIO = ".$this->valor_campos[0];
        try{
            mysql_query($sql_usuario);
            header("location:../HTML/usuarios.php?mensagem=Registro atualizado com sucesso!");        
        }
        catch (MySQLException $e){
            header("location:../HTML/usuarios.php?mensagem_erro=Ocorreu um erro ao atualizar o registro. Verifique o log da aplica��o");  
        }        
    }
    function apaga_usuario(){
        $var_c=array_combine($this->nome_campos, $this->valor_campos);        
        $sql_usuario="Delete from `usuarios` where ";
        foreach ($var_c as $c_campos=>$c_valores){
            $sql_usuario.=$c_campos."="."'".$c_valores."'";
            break;
        }      
        try{
            mysql_query($sql_usuario);
            header("location:../HTML/usuarios.php?mensagem='Registro atualizado com sucesso!'");        
        }
        catch (MySQLException $e){
            header("location:../HTML/usuarios.php?mensagem_erro='Ocorreu um erro ao excluir o registro. Verifique o log da aplica��o");  
        }        
            
        
        
    }
    function login(){
        $var_c=array_combine($this->nome_campos, $this->valor_campos);        
        $sql_usuario='select * from `usuarios` where ';
        foreach ($var_c as $c_campos=>$c_valores){
            $sql_usuario.=$c_campos."="."'".$c_valores."'";
            break;
        }   
        $result=mysql_query($sql_usuario);
        
        if (mysql_num_rows($result)>0){
            $senha=base64_encode($this->valor_campos[1]);
            while ($row=  mysql_fetch_array($result)){
                if ($row['SENHA']==$senha){
                    session_start();
                    $_SESSION['id_usuario']=$row['ID_USUARIO'];
                    $_SESSION['codigo_usuario']=$row['CODIGO_USUARIO'];
                    $_SESSION['grupo']=$row['GRUPO'];
                    $_SESSION['nivel_acesso']=$row['NIVEL_ACESSO'];
                    $_SESSION['unidade']=$row['UNIDADE'];
                    
                    include_once('Busca_Empresa_Ativa.php');
                    $ea=new Busca_Empresa_Ativa($row['ID_USUARIO']);
                    $this->codigo_empresa=$ea->retorna_empresa();
                    $this->nome_empresa=$ea->retorna_nome_empresa();
                    
                    $_SESSION['empresa_ativa']=$this->codigo_empresa;
                    $_SESSION['nome_empresa_ativa']=$this->nome_empresa;
                    include_once('Busca_Unidade.php');
                    $ua=new Busca_Unidade($row['UNIDADE']);
                    $_SESSION['nome_unidade']=$ua->retorna_nome_unidade();
                    header("location:../HTML/menu.php");
                    
                    break;
                }
                else {
                    header('location:../HTML/login.php?mensagem=Senha inv�lida para o usu�rio!');
                    
                }   
                
            }
        }
        else {
             header("location:../HTML/login.php?mensagem=Usu�rio inv�lido!");
        }
        
    }
}


?>
