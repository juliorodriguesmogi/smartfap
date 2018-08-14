<?php
$nome_tabela='laudos_avaliacoes_umidade';
$conecta= mysql_connect("209.97.130.137","cyberpc10","phoenix10");
mysql_select_db('cyberpc10');
$sql='show '.$nome_tabela.";";
$executa="DESCRIBE $nome_tabela";
$aux=mysql_query($executa,$conecta);
$nome_classe='M'.ucfirst(strtolower($nome_tabela));
$nome_classe=ucfirst(strtolower($nome_classe));
$handler=fopen("C:\\Users\\julio\\Documents\\NetBeansProjects\\ELC2012\\ELC2012\\classes\\js\\$nome_classe.js",'w');
fwrite($handler,"function $nome_classe(){\n");
fwrite($handler,"this.inicializa=function(){\n");
while ($atributos= mysql_fetch_array($aux)){
    $campos[]=$atributos[0];
    
}
for($x=0;$x<count($campos);$x++) {
    fwrite($handler,"\t".ucfirst(strtolower($campos[$x]))."=Array();\n");    
}
fwrite($handler,"}\n");
for($x=0;$x<count($campos);$x++) {
    fwrite($handler,"this.get_".ucfirst(strtolower($campos[$x]))."=function(nlinha){\n");    
    fwrite($handler,"\t return ".ucfirst(strtolower($campos[$x]))."[nlinha];\n");
    fwrite($handler,"}\n");
}
fwrite($handler,"\t this.length=function(){\n");
fwrite($handler,"\t return $campos[$x];\n");
fwrite($handler,"\t }\n");
fwrite($handler,"this.setValores=function(response){\n");
fwrite($handler,"\t this.inicializa();\n");
fwrite($handler,"\t if (response[0]!='NF'){\n");
fwrite($handler,"\t\t for (x=0;x<response.length-1;x++){\n");
fwrite($handler,"\t\t vreg=response[x].split('|')\n");
for($x=0;$x<count($campos);$x++) {
    fwrite($handler,"\t\t".ucfirst(strtolower($campos[$x]))."[x]=vreg[".$x."];\n");
}
fwrite($handler,"\t\t }\n");
fwrite($handler,"\t}\n");
fwrite($handler,"}\n");
fwrite($handler,"};\n");
$frag=explode("_",$nome_tabela);
$nomefunc="";
$vtemp="";
for($c=0;$c<count($frag);$c++){
    $nomefunc.=$frag[$c].$vtemp;
    $vtemp="_";
}    
fwrite($handler,"new".substr($nomefunc,1,strlen($nomefunc)-2)."=new ".$nome_classe."();\n");
fclose($handler);


?>
