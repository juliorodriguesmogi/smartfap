            function Epis_Base(){
                 this.inicializa=function(){
                    Tipo_Equipamento=Array();
                    Codigo_EPI_Base=Array();
                    Descricao_EPI_Base=Array();
                    Tipo_Protecao=Array();
                 }
                this.get_Tipo_Equipamento= function(nlinha){
                    return Tipo_Equipamento[nlinha];
                }
                
                this.get_Codigo_EPI_Base= function(nlinha){
                    return Codigo_EPI_Base[nlinha];
                }
                this.get_Descricao_EPI_Base= function(nlinha){
                    return Descricao_EPI_Base[nlinha];
                }
                this.get_Tipo_Protecao= function(nlinha){
                    return Tipo_Protecao[nlinha];
                }
                
                this.length=function(){
                    return Codigo_EPI_Base.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|');                        
                           Tipo_Equipamento[x]=vreg[0];
                           Codigo_EPI_Base[x]=vreg[1];
                           Descricao_EPI_Base[x]=vreg[2];
                           Tipo_Protecao[x]=vreg[3];    
                        
                       }
                    }   
                }
            }
            newepisbase=new Epis_Base();
            
