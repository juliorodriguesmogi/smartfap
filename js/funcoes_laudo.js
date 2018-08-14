        function entrada_numerica_inteira(campo,evt){
               key=window.event?window.event.keyCode:evt.which; 
               var kcode=window.event?window.event.keyCode:evt.keyCode;
               var kcode=kcode.toString();
               var mascara=/^\d{0,5}$/; 
               var valor = campo.value+String.fromCharCode(key);
               var caracter_especial=" 9"+" 46"+" 8"+" 37"+"38";
               if (mascara.test(valor)) 
                   return true
               else 
                   if (caracter_especial.indexOf(kcode) > -1)
                      return true
                   else 
                      if (kcode==27) {
                        k=window.event?window.event.keycode=17:evt.which=90; 
                        kc=window.event?window.event.keycode=90:evt.keyCode=17;
                        return kc||k;
                       }
                       else    
                          return false
               
            }   

            function valida(campo,evt){
                var kcode=window.event?window.event.keyCode:evt.keyCode;
                var kcode=kcode.toString();
                var tecla=/^\d$/;
                var ct=campo.value+kcode;
                return tecla.test(ct)
            }
            function formata_decimal(campo,tipo){
                numero_eu="###,###.###.###,##";
                numero_us="###,###,###,###.##";
                numero_real="###########";
                switch (tipo){
                    case "eu":
                        mascara=numero_eu;
                        numero=campo.value.toString().split(",")
                        break;
                    case "us":
                        mascara=numero_us;
                        numero=campo.value.toString().split(".")
                        break;
                    case "rl":
                        mascara=numero_real;
                        numero=campo.value.toString();
                        break;
                }
                var parte_inteira=numero[0].replace(/[.]/g,"");
                b=numero[1]+'00';
                b=b.substr(0,2);
                var parte_decimal=numero.length>1?b:"00";
                numero[0].length==0?parte_inteira="0":parte_inteira;
                p=parte_inteira.toString();
                d=parte_decimal.toString();
                parte_inteira=direita('00000000000000000'+parte_inteira,12);
                parte_decimal=parte_decimal+'0000';
                parte_decimal=parte_decimal.substr(0,2);
                var campo_sem_mascara=parte_inteira+parte_decimal;
                
                //campo_sem_mascara+=campo.value.toString().replace(/[,.]/g,"");
                //campo.value.indexOf(",")==-1?campo_sem_mascara+='00':campo_sem_mascara;
                campo_sem_mascara=direita(campo_sem_mascara.toString(),14);
                var i = 14;
                var f = i;
                var y = mascara.length;
                var c="";
                v=mascara.substr(13,1);
                z=p+d;
                z=z.length;
                for (x=y;x>=0&&z>0;x--){
                    
                    if (mascara.substr(x-1,1)=="#"){
                      if (z>=0){
                      c=campo_sem_mascara.substr(i-1,1)+c;
                      z-=1;
                      i-=1;
                      }
                     

                    } 
                    else {
                      c=mascara.substr(x-1,1)+c; 

                    }

                }
                campo.value=c;                
            }    

 

            function direita(str,n){
                if (n<=0) {
                    return ""
                }
                else {
                    if (n> String(str).length) {
                        return str;
                    }
                     else {
                            var iLen=String(str).length;
                            return String(str).substring(iLen,iLen-n);
                   }                
                }
                 
            }
            function formata_data(campo,tipo,evt){
                var kcode2=window.event?window.event.keyCode:evt.keyCode;
                var kcode2=kcode2.toString();
                var caracter_especial=" 9"+" 46"+" 8"+" 37"+"38";      
                if (caracter_especial.indexOf(kcode2)>-1) return true;
                data_eu="##/##/####";
                data_us="##/##/####";
                data_iso="####-##-##";
                
                switch (tipo){
                    case "eu":
                        mascara=data_eu;
                        break;
                    case "us":
                        mascara=data_us;
                        break;
                    case "iso":
                        mascara=data_iso;
                        break;
                    case "eu_dh":
                        mascara=data_eu;
                        break;
                    case "us_dh":
                        mascara=data_us;
                        break;
                    case "iso_dh":
                        mascara=data_iso;
                        break;
                        
                }
                var i = campo.value.length;
                var saida = mascara.substring(0,1);
                var texto = mascara.substring(i)
                if (texto.substring(0,1) != saida)
                {
                    campo.value += texto.substring(0,1);
                 }
                 return campo.value;
            }

            function formata_data_hora(campo,tipo,evt){
                var kcode2=window.event?window.event.keyCode:evt.keyCode;
                var kcode2=kcode2.toString();
                var caracter_especial=" 9"+" 46"+" 8"+" 37"+" 38";   
                if (caracter_especial.indexOf(kcode2)>-1) return true;
                data_eu="##/##/####";
                data_us="##/##/####";
                data_iso="####-##-##";
                data_hora_eu="##/##/#### ##:##:##";
                data_hora_us="##/##/#### ##:##:##";
                data_hora_iso="####-##-## ##:##:##";
                
                switch (tipo){
                    case "eu":
                        mascara=data_eu;
                        break;
                    case "us":
                        mascara=data_us;
                        break;
                    case "iso":
                        mascara=data_iso;
                        break;
                    case "eu_dh":
                        mascara=data_hora_eu;
                        break;
                    case "us_dh":
                        mascara=data_hora_us;
                        break;
                    case "iso_dh":
                        mascara=data_hora_iso;
                        break;
                        
                }
                var i = campo.value.length;
                var saida = mascara.substring(0,1);
                var texto = mascara.substring(i)
                if (texto.substring(0,1) != saida)
                {
                    campo.value += texto.substring(0,1);
                 }
                 return campo.value;
            }


            function valida_decimal(campo,evt){
                var key=window.event?window.event.keyCode:evt.which;
                var key=String.fromCharCode(key);
                var kcode=window.event?window.event.keyCode:evt.keyCode;
                var kcode=kcode.toString();
                var caracter_especial=" 9"+" 46"+" 8"+" 37"+" 39";      
                var ct=campo.value+key;
                if (caracter_especial.indexOf(kcode)>-1) return true;

                digito=/^([+-]{0,1}|\d*[,]?)$/;
                if (!digito.test(key)) return false;
                redecpt=/^[+-]?(\d{0,3}[.]?\d{0,3}[.]?\d{0,3}[,]?\d{0,2})$/;
                redecus=/^[+-]?(\d{0,3}[,]?\d{0,3}[,]?\d{0,3}[.]?\d{0,2})$/;
                return (redecpt.test(ct));
                if (redecpt.test(ct)) return true;
                if (redecus.test(ct)) return true;else return false;
            }    
            function valida_data(campo,evt){
                var key=window.event?window.event.keyCode:evt.which;
                var key=String.fromCharCode(key);
                var kcode=window.event?window.event.keyCode:evt.keyCode;
                var kcode=kcode.toString();
                var caracter_especial=" 9"+" 46"+" 8"+" 37"+" 39";      
                var ct=campo.value+key;
                ct=ct.toString().replace("/","");
                ct=ct.toString().replace("/","");
                digito=/^\d$/;
                if (caracter_especial.indexOf(kcode)>-1) return true;
                if (!digito.test(key)) return false;
                dia=ct.substr(0,2);
                mes=ct.substr(2,2);
                ano_mil=ct.substr(4,2);
                ano_dez=ct.substr(6,2);
                ano_total=ano_mil+ ano_dez;
                //ano_total=concat(ano_mil ano_dez;
                fdia=/^(0[1-9]?|[1-2][0-9]?|3[0-1]?)$/;
                fdia30=/^(0[1-9]?|[1-2][0-9]?|3[0]?)$/;
                fdia31=/^(0[1-9]?|[1-2][0-9]?|3[0-1]?)$/;
                fdiafev=/^(0[1-9]?|[1-2][0-8])$/;
                fdiafevb=/^(0[1-9]?|[1-2][0-9])$/;
                fmes=/^(0[1-9]?|1[0-2]?)$/;
                fano=/^(18|19|20|21|22)(\d?\d?)$/;
                fano_dez=/^(\d\d)$/;
                
                fano_bissexto=ano_mil+ano_dez;
                xano_bissexto=fano_bissexto % 4;
                
                if (ct.length>8) return false;
                if ((ano_total.length>1 && ano_total.length<=4)){
                    if (mes=='02'){
                         if (ano_total.length>3){
                            return (xano_bissexto>0?fdiafev.test(dia):fdiafevb.test(dia));
                         }
                    }
                    return fano.test(ano_total);
                }
                if (mes!="" && mes.length<=2){
                        if (mes=='02'){
                            if (ano_total.length>=3){
                                return (xano_bissexto>0?fdiafevb.test(dia):fdiafev.test(dia));
                            }
                            else {
                                return fdiafevb.test(dia);
                            }
                            
                        } else
                           {
                               mes30=/^(04|06|09|11)$/;
                               mes31=/^(01|03|05|07|08|10|12)$/;
                               if (mes30.test(mes)){
                                   return fdia30.test(dia);
                               }
                               if (mes31.test(mes)){
                                   return fdia31.test(dia);
                               }
                           }
                           return fmes.test(mes);
                }
                else if (dia.length<=2){
                        return fdia.test(dia);
                    }
              }

            function valida_data_hora(campo,evt){
                var key=window.event?window.event.keyCode:evt.which;
                var key=String.fromCharCode(key);
                var kcode=window.event?window.event.keyCode:evt.keyCode;
                var kcode=kcode.toString();
                var caracter_especial=" 9"+" 46"+" 8"+" 37"+" 39"+" 32";      
                var ct=campo.value+key;
                ct=ct.toString().replace("/","");
                ct=ct.toString().replace("/","");
                ct=ct.toString().replace(":","");
                ct=ct.toString().replace(":","");
                ct=ct.toString().replace(" ","");
                digito=/^\d|\ $/;
                if (caracter_especial.indexOf(kcode)>-1) return true;
                if (!digito.test(key)) return false;
                dia=ct.substr(0,2);
                mes=ct.substr(2,2);
                ano_mil=ct.substr(4,2);
                ano_dez=ct.substr(6,2);
                ano_total=ano_mil+ ano_dez;
                //ano_total=concat(ano_mil ano_dez;
                fdia=/^(0[1-9]?|[1-2][0-9]?|3[0-1]?)$/;
                fdia30=/^(0[1-9]?|[1-2][0-9]?|3[0]?)$/;
                fdia31=/^(0[1-9]?|[1-2][0-9]?|3[0-1]?)$/;
                fdiafev=/^(0[1-9]?|[1-2][0-8])$/;
                fdiafevb=/^(0[1-9]?|[1-2][0-9])$/;
                fmes=/^(0[1-9]?|1[0-2]?)$/;
                fano=/^(18|19|20|21|22)(\d?\d?)$/;
                fano_dez=/^(\d\d)$/;
                
                fano_bissexto=ano_mil+ano_dez;
                xano_bissexto=fano_bissexto % 4;
                
                if (ct.length<=8 ) {
                    if ((ano_total.length>1 && ano_total.length<=4)){
                        if (mes=='02'){
                             if (ano_total.length>3){
                                return (xano_bissexto>0?fdiafev.test(dia):fdiafevb.test(dia));
                             }
                        }
                        return fano.test(ano_total);
                    }
                    if (mes!="" && mes.length<=2){
                        if (mes=='02'){
                            if (ano_total.length>=3){
                                return (xano_bissexto>0?fdiafevb.test(dia):fdiafev.test(dia));
                            }
                            else {
                                return fdiafevb.test(dia);
                            }
                            
                        } else
                           {
                               mes30=/^(04|06|09|11)$/;
                               mes31=/^(01|03|05|07|08|10|12)$/;
                               if (mes30.test(mes)){
                                   return fdia30.test(dia);
                               }
                               if (mes31.test(mes)){
                                   return fdia31.test(dia);
                               }
                           }
                           return fmes.test(mes);
                    }
                    else if (dia.length<=2){
                            return fdia.test(dia);
                    }
                }
                else {
                    ct=ct.substr(0,8)+" "+ct.substr(8,ct.length);
                    fhora=/^(0[1-9]?|1[0-9]?|2[0-3]?)$/;
                    fminuto=/^(0[1-9]?|[1-5][0-9]?)|\$/;
                    fsegundo=/^(0[1-9]?|[1-5][0-9]?)|\$/;
                    if (ct.length<12) return fhora.test(ct.substr(9,2));
                    if (ct.length<14) return fminuto.test(ct.substr(11,2));
                    if (ct.length<16) return fsegundo.test(ct.substr(13,2));
                }
              }


                function perde_foco(campo,tipo,formato){
                    switch (tipo){
                        case "data":
                            if (formato=="eu"){
                                fdata=/^\d\d[/]\d\d[/]\d\d\d\d$/
                            }
                         fdata.test(campo.value)?campo.value:campo.value="";   
                         break;  
                    }
                    
                }

 function findPosX(obj)
  {
    var curleft = 0;
    if(obj.offsetParent)
        while(1)
        {
          curleft += obj.offsetLeft;
          if(!obj.offsetParent)
            break;
          obj = obj.offsetParent;
        }
    else if(obj.x)
        curleft += obj.x;
    return curleft;
  }

  function findPosY(obj)
  {
    var curtop = 0;
    if(obj.offsetParent)
        while(1)
        {
          curtop += obj.offsetTop;
          if(!obj.offsetParent)
            break;
          obj = obj.offsetParent;
        }
    else if(obj.y)
        curtop += obj.y;
    return curtop;
  }
  
  function resize(){
if (screen.width==1024 && screen.height==600){ 
    document.write("<link rel='stylesheet' href='1024X600.css' type='text/css' />");
}    
if (screen.width==1024 && screen.height==768){ 
    document.write("<link rel='stylesheet' href='1024X768.css' type='text/css' />");
}  
if (screen.width==1143 && screen.height==858){ 
    document.write("<link rel='stylesheet' href='1024X768.css' type='text/css' />");
}  

if (screen.width==1152 && screen.height==864){ 
    document.write("<link rel='stylesheet' href='1152X864.css' type='text/css' />");
}  
if (screen.width==1280 && screen.height==1024){ 
    document.write("<link rel='stylesheet' href='1280X1024.css' type='text/css' />");
}  
if (screen.width==1429 && screen.height==1143){ 
    document.write("<link rel='stylesheet' href='1280X1024.css' type='text/css' />");
}  
if (screen.width==1280 && screen.height==720){ 
    document.write("<link rel='stylesheet' href='1280X720.css' type='text/css' />");
}  
if (screen.width==1280 && screen.height==768){ 
    document.write("<link rel='stylesheet' href='1280X768.css' type='text/css' />");
}  
if (screen.width==1280 && screen.height==960){ 
    document.write("<link rel='stylesheet' href='1280X960.css' type='text/css' />");
}  
if (screen.width==800 && screen.height==600){ 
    document.write("<link rel='stylesheet' href='800X600.css' type='text/css' />");
}  
}

            function captura_valores(linha){
                if (navigator.appName.indexOf('Internet Explorer')>0){
                    tabela=linha.parentNode.parentNode;
                    celula=Array();
                    celula[0]=tabela.rows[linha.rowIndex].cells[0].innerText;
                    celula[1]=tabela.rows[linha.rowIndex].cells[1].innerText;
                    celula[2]=tabela.rows[linha.rowIndex].cells[2].innerText;
                    
                }
                else {
                    celula=Array();
                    tabela=linha.parentNode.parentNode;
                    celula[0]=tabela.rows[linha.rowIndex].cells[0].firstChild.textContent;
                    celula[1]=tabela.rows[linha.rowIndex].cells[1].firstChild.textContent;
                    celula[2]=tabela.rows[linha.rowIndex].cells[2].firstChild.textContent;
                    celula[3]=tabela.rows[linha.rowIndex].cells[3].firstChild.textContent;
                    celula[4]=tabela.rows[linha.rowIndex].cells[4].firstChild.textContent;
                    celula[5]=tabela.rows[linha.rowIndex].cells[5].firstChild.textContent;
                }
                return celula;
            }

function Right(str, n){
    if (n <= 0)
       return "";
    else if (n > String(str).length)
       return str;
    else {
       var iLen = String(str).length;
       return String(str).substring(iLen, iLen - n);
    }
}

function busca_vetor(vetor, valor){
    contn=0;
    for (chave in vetor){
        if (strpos(chave.indexOf(valor))>0){
            return contn;
            break;
        }
        contn++;
    }
}

function getUrlvars(name) {
  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp( regexS );
  var results = regex.exec( window.location.href );
  if( results == null )
    return "";
  else
    return results[1];
}

function WriteToFile(arquivo){
try {
var fso, s;
var fso = new ActiveXObject("Scripting.FileSystemObject");
var s = fso.OpenTextFile("../temp/temp.txt", 8, true, 0);
s.write(arquivo);
s.Close();
}
catch(err){
var strErr = 'Error:';
strErr += '\nNumber:' + err.number;
strErr += '\nDescription:' + err.description;
document.write(strErr);
}
}

            function retorna_data_hoje(){
                data_hoje=new Date();
                dia=Right('0'+String(data_hoje.getDate()),2);
                mes=Right('0'+String(data_hoje.getMonth()+1),2);
                ano=data_hoje.getFullYear();
                novadata=dia+'/'+mes+'/'+ano;
                return novadata;
            }

