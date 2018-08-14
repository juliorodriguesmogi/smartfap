           function Episx(){
                 this.inicializa=function(){
                    this.Codigo_Empresa=Array();
                    this.Codigo_EPI=Array();
                    this.Codigo_CA=Array();
                    this.Descricao_EPI=Array();
                    this.Tipo_Protecao=Array();
                 }
                this.get_Codigo_Empresa= function(nlinha){
                    return this.Codigo_Empresa[nlinha];
                }
                
                this.get_Codigo_EPI= function(nlinha){
                    return this.Codigo_EPI[nlinha];
                }
                this.get_Codigo_CA= function(nlinha){
                    return this.Codigo_CA[nlinha];
                }                
                this.get_Descricao_EPI= function(nlinha){
                    return this.Descricao_EPI[nlinha];
                }
                this.get_Tipo_Protecao= function(nlinha){
                    return this.Tipo_Protecao[nlinha];
                }
                
                this.length=function(){
                    return this.Codigo_EPI.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|');                        
                           this.Codigo_Empresa[x]=vreg[0];
                           this.Codigo_EPI[x]=vreg[1];
                           this.Codigo_CA[x]=vreg[2];
                           this.Descricao_EPI[x]=vreg[3];
                           this.Tipo_Protecao[x]=vreg[4];    
                        
                       }
                    }   
                }
            }
            newepisx=new Episx();
            
