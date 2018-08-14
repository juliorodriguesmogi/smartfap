          function Carregar_Foto(janela,foto,classe){
                janela.XMLHttpRequest?janela.xmlhttp=new XMLHttpRequest():janela.xmlhttp=new ActiveXObject("Mcrosoft.XMLHTTP");
                
                xmlhttp.onreadystatechange=function()
                {
                   try{
                   if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {

                       }
                   }
                    catch (e){
                        
                    }
                    }  

                 
                url="../classes/PHP/"+classe+".php";
                url+="?acao=I&foto="+foto;
                xmlhttp.open("GET",url,false);
                xmlhttp.setRequestHeader("Cache-Control", "no-cache");
                xmlhttp.setRequestHeader("Pragma", "no-cache")
                xmlhttp.send(null);
         	
          }      
       
