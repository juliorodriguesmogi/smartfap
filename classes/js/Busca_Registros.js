
                function buscar_registros(janela,tabela,classe_busca,campo,valor,primario,condicao,nome_registro){
                janela.XMLHttpRequest?janela.xmlhttp=new XMLHttpRequest(): janela.xmlhttp=new ActiveXObject("Mcrosoft.XMLHTTP");
                xmlhttp.onreadystatechange=function()
                {
                   linha='';
                   if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                       linha=xmlhttp.responseText.split("\n");
                       //newregistros.setValores(linha);
                       nome_registro.setValores(linha);
                       return true;
                    }  

                } 
                url="../classes/PHP/"+classe_busca+".php";
                url+="?tabela="+tabela+"&campo="+campo+"&valor="+valor+"&condicao="+condicao+ "&random=" + Math.random();
                xmlhttp.open("GET",url,false);
                xmlhttp.setRequestHeader("Cache-Control", "no-cache");
                xmlhttp.setRequestHeader("Pragma", "no-cache")
                
                xmlhttp.send(null);


         	
          }      
       
