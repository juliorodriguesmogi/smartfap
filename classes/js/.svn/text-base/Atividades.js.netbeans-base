            function Atividades(){
                 this.inicializa=function(){
                      Codigo_Empresa=Array();
                      Codigo_Atividade=Array();
                      Descricao_Atividade=Array();
                      Descricao_Resumida_Atividade=Array();
                      Classificacao_Atividade=Array();
                      Data_Cadastro=Array();
                      Session_id=Array();
                      Ultimo_Usuario=Array();
                      Ultima_Atualizacao=Array();
                 }
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa[nlinha];
                }
                this.get_Codigo_Atividade= function(nlinha){
                    return Codigo_Atividade[nlinha];
                }
                
                this.get_Descricao_Atividade= function(nlinha){
                    return Descricao_Atividade[nlinha];
                }
                
                this.get_Descricao_Resumida_Atividade= function(nlinha){
                    return Descricao_Resumida_Atividade[nlinha];
                }                
                this.get_Classificacao= function(nlinha){
                    return Classificacao_Atividade[nlinha];
                }
 
                this.get_Data_Cadastro=function(nlinha){
                    return Data_Cadastro[nlinha];
                }    
                this.get_Session_id=function(nlinha){
                    return Session_id[nlinha];
                }         
                this.get_Ultimo_Usuario=function(nlinha){
                    return Ultimo_Usuario[nlinha];
                }         
                this.get_Ultima_Atualizacao=function(nlinha){
                    return Ultima_Atualizacao[nlinha];
                }                
                this.length=function(){
                    return Codigo_Atividade.length;
                }

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){ 
                        vreg=response[x].split('|')   
                        Codigo_Empresa[x]=vreg[0];
                        Codigo_Atividade[x]=vreg[1];
                        Descricao_Atividade[x]=vreg[2];
                        Descricao_Resumida_Atividade[x]=vreg[9];
                        Classificacao_Atividade[x]=vreg[3];
                        Data_Cadastro[x]=vreg[4];
                        Ultima_Atualizacao[x]=vreg[5];
                        Ultimo_Usuario[x]=vreg[6];
                        Session_id[x]=vreg[7];
                       }
                    }
                }
            };
             newativs=new Atividades();