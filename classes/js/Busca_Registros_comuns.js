          function buscar_registros(janela,tabela,classe_busca){
                janela.XMLHttpRequest?xmlhttp=new XMLHttpRequest():xmlhttp=new ActiveXObject("Mcrosoft.XMLHTTP");
                xmlhttp.onreadystatechange=function()
                {
                   if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                       linha=xmlhttp.responseText.split("\n");
                       newregistros.setValores(linha);
                       carrega_campo();
                    }  

                } 
                url="../classes/PHP/"+classe_busca+".php";
                url+="?tabela="+tabela;
                xmlhttp.open("GET",url,true);
                xmlhttp.setRequestHeader("Cache-Control", "no-cache");
                xmlhttp.setRequestHeader("Pragma", "no-cache")
                xmlhttp.send();
         	
          }      
       
