            function Empresas(){
                 this.inicializa=function(){
                    Codigo_Empresa=Array();
                    Nome_Empresa=Array();
                    Mensagem_Erro='';
                 } 
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa[nlinha];
                }
                
                this.get_Nome_Empresa= function(nlinha){
                    return Nome_Empresa[nlinha];
                }
                this.length=function(){
                    return Codigo_Empresa.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|');                        
                           Codigo_Empresa[x]=vreg[0];
                           Nome_Empresa[x]=vreg[2];
                       }    
                    }
                    else {
                        Mensagem_Erro=response[0];
                    }
                }
            };
             newEmpresas=new Empresas();