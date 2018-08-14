<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ELC - Cyberpc Informatica ®</title>
<style>
button{
	border:groove;
    width:90px;
	min-width:90px;
	height:110px;
	min-height:110px;
	top:0;
	zoom:75%;
}
button:onclick{ 
}
div{
 border:1px solid;
 position:relative;
}
#bemvindo{
    height:40px;
}



img{
  height:60px;
  width:68px;
}
#toolbar{
 height:100px; 	
 min-height:100px;
}
#endereco{
  height:20px;
}
.style2 {
	font-size: 10px;
	font-weight: bold;
}
iframe{
   height:600px;
   width:100%;
}
</style>
</head>
<body width="95%">
<div id="bemvindo">

</div>
<br>
<span>
  <button name="cadastros_gerais" onclick="document.getElementById('if_submenu').src='cadastros_gerais.php'">
  <table height="89">
    <tr>
      <td width="82" align="center"><img src="../images/icones_menu/cadastros_gerais.png" /></td>
    </tr>
    <tr>
      <td height="18"  align="center">Cadastros</td>
    </tr>
    <tr>
      <td height="18" align="center">Gerais</td>
    </tr>
  </table>
  </button>
 </span> 
 <span>
  <button>
  <table height="89">
    <tr>
      <td width="82" align="center"><img src="../images/icones_menu/laudo_ambiental.png" width="54%" height="27%" /></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td height="18" align="center">LTCAT</td>
    </tr>
  </table>
  </button>
</span>  
  <button>
  <table height="89">
    <tr>
      <td width="82" align="center"><img src="../images/icones_menu/PPRA.jpg" width="62" /></td>
    </tr>
    <tr>
      <td height="18" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td height="18" align="center">PPRA</td>
    </tr>
  </table>
  </button>
<span>

</span>
<span>
  <button>
  <table height="89">
    <tr>
      <td width="82" align="center"><img src="../images/icones_menu/PCMSO.png" /></td>
    </tr>
    <tr>
      <td height="18" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td height="18" align="center">PCMSO</td>
    </tr>
  </table>
  </button>
</span>
<span>
  <button>
  <table height="89">
    <tr>
      <td width="82" align="center"><img src="../images/icones_menu/epis.jpg" width="57" /></td>
    </tr>
    <tr>
      <td height="18" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td height="18" align="center">EPIs</td>
    </tr>
  </table>
  </button>
</span>
<span>
  <button>
  <table height="89">
    <tr>
      <td width="82" align="center"><img src="../images/icones_menu/previdencia.png" width="58"  /></td>
    </tr>
    <tr>
      <td height="18" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td height="18" align="center">PPP</td>
    </tr>
  </table>
  </button>
</span>
  &nbsp
  &nbsp
  &nbsp
  &nbsp
  <span>
  <button>
  <table height="89">
    <tr>
      <td width="81" align="center"><img src="../images/icones_menu/configuracao.png" /></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><span class="style2">Configurações</span></td>
    </tr>
  </table>
  </button>
  </span>
  <div id="endereco">Nível atual:
  
  </div>
  <iframe id="if_submenu">

  </iframe>
</body>
</html>
