            function Epis_Base(){
                 this.inicializa=function(){
                    this.Tipo_Equipamento=Array();
                    this.Codigo_EPI_Base=Array();
                    this.Descricao_EPI_Base=Array();
                    this.Tipo_Protecao=Array();
                 }
                this.get_Tipo_Equipamento= function(nlinha){
                    return this.Tipo_Equipamento[nlinha];
                }
                
                this.get_Codigo_EPI_Base= function(nlinha){
                    return this.Codigo_EPI_Base[nlinha];
                }
                this.get_Descricao_EPI_Base= function(nlinha){
                    return this.Descricao_EPI_Base[nlinha];
                }
                this.get_Tipo_Protecao= function(nlinha){
                    return this.Tipo_Protecao[nlinha];
                }
                
                this.length=function(){
                    return this.Codigo_EPI_Base.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|');                        
                           this.Codigo_EPI_Base[x]=vreg[0];
                           this.Tipo_Equipamento[x]=vreg[1];
                           this.Descricao_EPI_Base[x]=vreg[2];
                           this.Tipo_Protecao[x]=vreg[3];    
                        
                       }
                    }   
                }
            }
            newepisbase=new Epis_Base();
            
