          function buscar_registro_1(params){
                var janela=params.janela || window;
                var tabela=params.tabela || null;
                var visao=params.visao|| tabela;
                var classe_busca=params.classe_busca || null;
                var campo=params.campo || null;
                var valor=params.valor || null;
                var primario=params.primario || false;
                var condicao=params.condicao || null;
                var nome_registro=params.nome_registro || null;
                janela.XMLHttpRequest?janela.xmlhttp=new XMLHttpRequest():janela.xmlhttp=new ActiveXObject("Mcrosoft.XMLHTTP");
                newregistro.setValores('');
                xmlhttp.onreadystatechange=function()
                {
                   linha='';
                   if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                       linha=janela.xmlhttp.responseText.split('\n');
                       newregistro.setValores(linha);
                       newregistro.setTabela(visao);
                       nome_registro.setValores(newregistro.getValores());
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
                url="../classes/PHP/"+classe_busca+".php";
                url+="?campo="+campo+"&valor="+valor+"&tipo_busca="+tipo+"&visao="+visao+"&tabela="+tabela+"&condicao="+'=' + "&random=" + Math.random();;
                xmlhttp.open("GET",url,false);
                xmlhttp.setRequestHeader("Cache-Control", "no-cache");
                xmlhttp.setRequestHeader("Pragma", "no-cache")
                xmlhttp.send(null);
         	
          }      
       
