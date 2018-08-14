            function CBO (){
                this.inicializa=function(){
                      Codigo_CBO='';
                      Descricao='';
                      Tipo='';
                      Descricao_Sumaria='';
                      
                }
                
                this.get_Codigo_CBO= function(){
                    return Codigo_CBO;
                }
                this.get_Descricao= function(){
                    return Descricao;
                }
                this.get_Tipo= function(){
                    return Tipo;
                }

                this.get_Descricao_Sumaria= function(){
                    return Descricao_Sumaria;
                }                

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_CBO=response[0];
                       Descricao=response[1];
                       Tipo=response[2];
                       Descricao_Sumaria=response[3];

                      
                    }
                }
            };
             newCBO=new CBO();