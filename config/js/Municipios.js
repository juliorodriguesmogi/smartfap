            function Municipios (){
                this.inicializa=function(){
                      Codigo_Municipio=Array();
                      Municipio=Array();
                      UF=Array();
                }
                
                this.get_Codigo_Municipio= function(nlinha){
                    return Codigo_Municipio[nlinha];
                }
                this.get_Municipio= function(nlinha){
                    return Municipio[nlinha];
                }
                this.get_UF = function(nlinha){
                    return UF[nlinha];
                }
                
               
                this.length=function(){
                    return Codigo_Municipio.length;
                }

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){

                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|'); 
                           Codigo_Municipio[x]=vreg[0];
                           Municipio[x]=vreg[1];
                           UF[x]=vreg[2];                           

                           
                       }
                      
                    }
                }
            };
             newMunicipios=new Municipios();