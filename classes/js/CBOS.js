            function CBOS (){
                this.inicializa=function(){
                      Codigo_CBO=Array();
                      Titulo_Profissao=Array();
                      Tipo=Array();
                      Descricao_Sumaria=Array();
                      Descricao_Detalhada=Array();
                }
                
                this.get_Codigo_CBOs= function(nlinha){
                    return Codigo_CBO[nlinha];
                }
                this.get_Titulo_Profissao= function(nlinha){
                    return Titulo_Profissao[nlinha];
                }
                this.get_Tipo = function(nlinha){
                    return Tipo[nlinha];
                }
                
                this.get_Descricao_Sumaria= function(nlinha){
                    return Descricao_Sumaria[nlinha];
                }
                this.get_Descricao_Detalhada= function(nlinha){
                    return Descricao_Detalhada[nlinha];
                }
                this.length=function(){
                    return Codigo_CBO.length;
                }

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){

                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|'); 
                           Codigo_CBO[x]=vreg[0];
                           Titulo_Profissao[x]=vreg[1];
                           Tipo[x]=vreg[2];
                           Descricao_Sumaria[x]=vreg[3];
                           //Descricao_Detalhada[x]=vreg[3];
                           
                       }
                      
                    }
                }
            };
             newCBO=new CBOS();