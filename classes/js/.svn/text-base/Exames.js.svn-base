function Exames(){
                this.inicializa=function(){
                     Codigo_Exame=Array();
                     Nome=Array;
                     
                    
                } 
                this.get_Codigo_Exame= function(nlinha){
                    return Codigo_Exame[nlinha];
                }
                this.get_Nome= function(nlinha){
                    return Nome[nlinha];
                }
             
                this.length=function(){
                    return Codigo_Exame.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                        for (x=0;x<response.length-1;x++){
                        vreg=response[x].split('|');
                        Codigo_Exame[x]=vreg[0];
                        Nome[x]=vreg[1];
                        
                        }
                    }

                }
            };
             newexames=new Exames();

