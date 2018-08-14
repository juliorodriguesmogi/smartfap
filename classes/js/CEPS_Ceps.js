            function CEPS_Ceps (){
                this.inicializa=function(){
                      CEPS_C=Array();
                }
                
                
                this.get_CEPS_C= function(nlinha){
                    return CEPS_C[nlinha];
                }
                this.length=function(){
                    return CEPS_C.length;
                }

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){

                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|'); 
                           CEPS_C[x]=vreg[0];
                           
                       }
                      
                    }
                }
            };
             newCEPS_C=new CEPS_Ceps();