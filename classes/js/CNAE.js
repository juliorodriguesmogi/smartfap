            function CNAE(){
                this.inicializa=function(){
                     Codigo_CNAE='';
                     Descricao='';
                     Grau_Risco='';
                     Observacao='';
                    
                } 
                this.get_Codigo_CNAE= function(){
                    return Codigo_CNAE;
                }
                this.get_Descricao= function(){
                    return Descricao;
                }
                this.get_Grau_Risco= function(){
                    return Grau_Risco;
                }                
                this.get_Observacao= function(){
                    return Observacao;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_CNAE=response[0];
                       Descricao=response[1];
                       Grau_Risco=response[2];
                       Observacao=response[3];
                      
                    }

                }
            };
             newCNAE=new CNAE();