            function CEPS (){
                this.inicializa=function(){
                      Codigo_CEP=Array();
                      Municipio=Array();
                      UF_CEP=Array();
                      Bairro=Array();
                      Tipo_Logradouro=Array();
                      Logradouro=Array();
                      CEP=Array();
                }
                
                this.get_Codigo_CEP= function(nlinha){
                    return Codigo_CEP[nlinha];
                }
                this.get_Municipio= function(nlinha){
                    return Municipio[nlinha];
                }
                this.get_UF_CEP = function(nlinha){
                    return UF_CEP[nlinha];
                }
                
                this.get_Bairro= function(nlinha){
                    return Bairro[nlinha];
                }
                this.get_Tipo_Logradouro= function(nlinha){
                    return Tipo_Logradouro[nlinha];
                }
                this.get_Logradouro= function(nlinha){
                    return Logradouro[nlinha];
                }
                this.get_CEP= function(nlinha){
                    return CEP[nlinha];
                }
                this.get_UF= function(nlinha){
                    return UF_CEP[nlinha];
                }
                                
                this.length=function(){
                    return Codigo_CEP.length;
                }

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){

                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|'); 
                           Codigo_CEP[x]=vreg[0];
                           Tipo_Logradouro[x]=vreg[1];
                           Logradouro[x]=vreg[2];                           
                           Bairro[x]=vreg[3];
                           Municipio[x]=vreg[4];
                           UF_CEP[x]=vreg[5];
                           CEP[x]=vreg[6];
                           
                       }
                      
                    }
                }
            };
             newCEPS=new CEPS();