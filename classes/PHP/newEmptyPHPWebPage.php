<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title></title>
        <script language="javascript">

function printpr(OLECMDID)
{
//var OLECMDID = 10;
/* OLECMDID values:
* 6 - print
* 7 - print preview
* 8 - page setup (for printing)
* 1 - open window
* 4 - Save As
* 10 - properties
*/
var PROMPT = 1; // 1 PROMPT & 2 DONT PROMPT USER
var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
WebBrowser1.ExecWB(OLECMDID,PROMPT);
WebBrowser1.outerHTML = "";


}
function displayHTML(printContent) {
    var x=window.open("../../Reports/Relatorio_Atividades.php", "rpt");
return;
var inf = printContent;
win = window.open("print.htm", 'popup', 'toolbar = yes, status = yes, menubar=yes');
win.document.write(inf);
win.document.close(); // new line
} 
</script>
<form name="form">
<div align="center"> <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Selecione
a Op&ccedil;&atilde;o desejada:<br>
</font>
<select name="olecmdid" class="select1">
<option value="6">Imprimir</option>
<option value="7">Visualizar Impressão</option>
<option value="8">Configurar Pagina</option>
</select>
<input type="Button" class="select1" onclick="displayHTML(document.form.olecmdid.value);" value="Entrar">
</div>
</form> 
    </head>
    <body>
        <button type='button' onclick="printr()"></button>
    </body>
</html>
