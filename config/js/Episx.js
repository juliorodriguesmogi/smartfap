           function Episx(){
                 this.inicializa=function(){
                    Codigo_Empresa=Array();
                    Codigo_EPI=Array();
                    Descricao_EPI=Array();
                    Tipo_Protecao=Array();
                 }
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa[nlinha];
                }
                
                this.get_Codigo_EPI= function(nlinha){
                    return Codigo_EPI[nlinha];
                }
                this.get_Descricao_EPI= function(nlinha){
                    return Descricao_EPI[nlinha];
                }
                this.get_Tipo_Protecao= function(nlinha){
                    return Tipo_Protecao[nlinha];
                }
                
                this.length=function(){
                    return Codigo_EPI.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|');                        
                           Codigo_Empresa[x]=vreg[0];
                           Codigo_EPI[x]=vreg[1];
                           Descricao_EPI[x]=vreg[2];
                           Tipo_Protecao[x]=vreg[3];    
                        
                       }
                    }   
                }
            }
            newepisx=new Episx();
            
