            function CNAE(){
                this.inicializa=function(){
                     Codigo_CNAE='';
                     Descricao='';
                     Observacao='';
                    
                } 
                this.get_Codigo_CNAE= function(){
                    return Codigo_CNAE;
                }
                this.get_Descricao= function(){
                    return Descricao;
                }
                this.get_Observacao= function(){
                    return Observacao;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_CNAE=response[0];
                       Descricao=response[1];
                       Observacao=response[2];
                      
                    }

                }
            };
             newCNAE=new CNAE();