            function CEPS_Municipio (){
                this.inicializa=function(){
                      Cidade=Array();
                      UF=Array();
                }
                this.get_Municipio=function(nlinha){
                    return Cidade[nlinha];
                }
                this.get_UF=function(nlinha){
                    return UF[nlinha];
                }    
                this.length=function(){
                    return Cidade.length;
                }

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){

                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|'); 
                           Cidade[x]=vreg[0];
                           UF[x]=vreg[1];
                           
                       }
                      
                    }
                }
            };
             newCEPSMunicipio=new CEPS_Municipio();