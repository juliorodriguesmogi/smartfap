            function CEPS_Bairro (){
                this.inicializa=function(){
                      Bairro=Array();
                      Cidade=Array();
                      UF=Array();
                }
                
                
                this.get_Bairro= function(nlinha){
                    return Bairro[nlinha];
                }
                this.get_Municipio=function(nlinha){
                    return Cidade[nlinha];
                }
                this.get_UF=function(nlinha){
                    return UF[nlinha];
                }    
                this.length=function(){
                    return Bairro.length;
                }

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){

                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|'); 
                           Bairro[x]=vreg[0];
                           Cidade[x]=vreg[1];
                           UF[x]=vreg[2];
                           
                       }
                      
                    }
                }
            };
             newCEPSBairro=new CEPS_Bairro();