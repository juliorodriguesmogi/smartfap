            function Setores (){
                this.inicializa=function(){
                      Codigo_Empresa=Array();
                      Codigo_Unidade_Setor=Array();
                      Codigo_Setor=Array();
                      Codigo_Setor_Pai=Array();
                      Nome_Setor=Array();
                      Descricao_Setor_X=Array();

                }
                this.get_Codigo_Unidade= function(nlinha){
                    return Codigo_Unidade_Setor[nlinha];
                }                
                this.get_Codigo_Setor= function(nlinha){
                    return Codigo_Setor[nlinha];
                }
                this.get_Codigo_Setor_Pai= function(nlinha){
                    return Codigo_Setor_Pai[nlinha];
                }
                
                this.get_Nome_Setor= function(nlinha){
                    return Nome_Setor[nlinha];
                }                
                this.length=function(){
                    return Codigo_Setor.length;
                }
                this.get_Descricao_Setor = function(nlinha){
                    return Descricao_Setor_X[nlinha];
                }

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){

                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|'); 
                           Codigo_Empresa[x]=vreg[0];
                           Codigo_Unidade_Setor[x]=vreg[1];
                           Codigo_Setor[x]=vreg[2];
                           Codigo_Setor_Pai[x]=vreg[3];
                           Nome_Setor[x]=vreg[4];
                           Descricao_Setor_X[x]=vreg[5];  
                           
                       }
                      
                    }
                }
            };
             newSetores=new Setores();