<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
//gambiarra para o IECA;
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');  
header('Last-Modified: '. gmdate('D, d M Y H:i:s') .' GMT');  
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');  
header('Pragma: no-cache');  
header("Cache: no-cache");    
header('Expires: 0');  
$campo=(String) $_GET['campo'];
$valor=(String) trim($_GET['valor']);
if ($valor==null){
    echo "NF";
    return;
}
$tipo_busca=(String) $_GET['tipo_busca'];
$visao=(String) $_GET['visao'];
//$l=include_once('conexao.php');
include_once('conexao_class.php');
$sql_usuario="Select * from $visao where $campo "."$tipo_busca"."$valor";
$result=mysql_query($sql_usuario);
if (mysql_num_rows($result)==0){
    echo "NF";
    return;
}
while($row=mysql_fetch_row($result)){
        $cont=0;
        foreach ($row as $valor){
            if ($cont==3) {
                $senha=base64_decode($valor);
                echo "$senha";
            }
            else {
                echo "$valor";
            }
            $cont++;
             echo "\n";
        }
}
$result=mysql_query($sql_usuario);
if ($row=  mysql_fetch_array($result, MYSQL_ASSOC)){
    session_start('usuario');
    $_SESSION['DATA_CADASTRO']=$row['DATA_CADASTRO'];
    $_SESSION['ULTIMA_ATUALIZACAO']=$row['ULTIMA_ATUALIZACAO'];
    $_SESSION['ID_USUARIO']=$_row['ID_USUARIO'];
}


?>
