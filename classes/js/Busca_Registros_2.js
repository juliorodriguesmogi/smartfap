                function buscar_registros2(janela,tabela,classe_busca,campo,valor,primario,condicao,nome_registro,tipo_acao){
                janela.XMLHttpRequest?janela.xmlhttp=new XMLHttpRequest(): janela.xmlhttp=new ActiveXObject("Mcrosoft.XMLHTTP");
                xmlhttp.onreadystatechange=function()
                {
                   linha='';
                   if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                       linha=xmlhttp.responseText.split("\n");
                       nome_registro.setValores(linha);
                       try{
                           if (linha=="NF"){
                               acao='I';
                           }
                           else {
                               acao='A';
                           }
                           if (primario){ 
                              exibe_campos(); 
                              document.activeElement.select();                              
                           }   
                       }
                    catch (e){
                        
                    }                       
                    }  

                } 
                url="../PHP/"+classe_busca+".php";
                url+="?tabela="+tabela+"&campo="+campo+"&valor="+valor+"&condicao="+condicao+ "&acao="+tipo_acao+ "&random=" + Math.random();
                xmlhttp.open("GET",url,false);
                xmlhttp.setRequestHeader("Cache-Control", "no-cache");
                xmlhttp.setRequestHeader("Pragma", "no-cache")
                
                xmlhttp.send(null);


         	
          }      
       
