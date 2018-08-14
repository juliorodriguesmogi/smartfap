<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexao_class
 *
 * @author julio
 */
class conexao_class {
    private $timeout=3;
    private $numero_tentativas=3;
    function __construct($servidor,$porta,$usuario,$senha){
        $link=mysql_pconnect($servidor,$usuario,$senha);
        try{
        while ($link==null or $cont>$timeout){
                $cont++;
                sleep(1);
            
        }
        }
        catch(Exception $e){
            die('Impossível realizar conexão com o Servidor!. Verifique');
        }
            
        mysql_select_db('cyberpc06', $link);    
        return $link;
    }
}
$c=new conexao_class('209.97.130.137','3306','cyberpc06','phoenix10');
?>
