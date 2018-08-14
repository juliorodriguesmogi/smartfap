<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<script type="text/javascript" src="../js/funcoes.js"></script>
<script type="text/javascript">

function transferir_imagem(){
    div_linha_pai=getUrlvars ('div_linha_pai');
    linha_pai=getUrlvars('linha_pai');
    p=parseInt(div_linha_pai,10)+1;
    tbl_setores=window.opener.document.getElementById('div_setores'+p);
    if (navigator.appName=='Microsoft Internet Explorer' || navigator.vendor=='Google Inc.' || navigator.appName=='Opera'){
        tbl_fotos=tbl_setores.getElementsByTagName('table')[1];
        div_fotos=tbl_fotos.getElementsByTagName('div')[parseInt(linha_pai,10)];
        img_setor=div_fotos.getElementsByTagName('img')[0];
    }
    else {
        tbl_fotos=tbl_setores.getElementsByTagName('table')[parseInt(div_linha_pai,10)];
        div_fotos=tbl_fotos.getElementsByTagName('div')[parseInt(linha_pai,10)];
        img_setor=div_fotos.getElementsByTagName('img')[parseInt(linha_pai,10)];
    }    
    caminho_foto=document.getElementById('foto').src.split('/');
    nome_foto=caminho_foto[caminho_foto.length-1];
    //img_setor.src=document.getElementById('foto').src;
    img_setor.src="../fotos/"+nome_foto;
    //div_fotos.getElementsByTagName('input')[0].value=img_setor.src;
    div_fotos.getElementsByTagName('input')[0].value="../fotos/"+nome_foto;

    window.close;
    
}
function mostra_foto(){
    fotox=getUrlvars('foto');
    document.getElementById("foto").src="../fotos/"+fotox;
}
function submeter(){
    document.forms[0].action ="../PHP/submetefoto.php?div_linha_pai="+getUrlvars('div_linha_pai')+"&linha_pai="+getUrlvars('linha_pai');
    document.forms[0].submit();
}
</script>
<body onload="mostra_foto()" >
<form   method="POST" enctype="multipart/form-data">
<label>Selecione a foto</label>
<input type="file" name="nome_foto"/>
<button  type="button" onclick="submeter()">Enviar Foto</button>
<input type="button" value="transferir imagem" onclick="transferir_imagem()" /><div>
<img src="../fotos/" id="foto" width="598" height="327"/></div>
</form>
</body>
</html>
