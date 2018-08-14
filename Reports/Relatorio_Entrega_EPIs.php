<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title></title>
        <script type="text/javascript">
            window.onload=carrega_impressao();
            
            function carrega_impressao(){
                parm="?CODIGO_EMPRESA="+<?php echo $_GET['CODIGO_EMPRESA'] ?>;
                parm=parm+"&SEQUENCIAL="+<?php echo $_GET['SEQUENCIAL'] ?>;
                parm=parm+"&CODIGO_FUNCIONARIO="+<?php echo $_GET['CODIGO_FUNCIONARIO'] ?>;
                window.open("Relatorio_Entrega_EPIs_NR1.php"+parm, "print", "location=no resizable=YES directories=no menubar=no status=no toolbar=no titlebar=no");   
                window.parent.location="../HTML/menu.php?modulo=movimentacao_epis.php";
            }
    </script>
    </head>
    
    <body >

    </body>
</html>
