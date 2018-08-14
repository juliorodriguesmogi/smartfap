            function Funcoes(){
                  Codigo_Empresa=Array();
                  Codigo_Funcao=Array();
                  Descricao_funcoes_x=Array();
                  Codigo_Atividade=Array();
                  Classificacao_Funcao=Array();
                  Codigo_CBO_Familia=Array();
                  Codigo_CBO_Ocupacao=Array();
                  Codigo_CBO_Sinonimo=Array();
                  Descricao_CBO_Familia=Array();
                  Descricao_CBO_Ocupacao=Array();
                  Descricao_CBO_Sinonimo=Array();
                  

                  Data_Cadastro=Array();
                  Session_id=Array();
                  Ultimo_Usuario=Array();
                  Ultima_Atualizacao=Array();
                  Codigo_Funcao=Array();
                 
                this.get_Codigo_Empresa= function(linha){
                    return Codigo_Empresa[linha];
                }
                this.get_Codigo_Funcao= function(linha){
                    return Codigo_Funcao[linha];
                }
                this.get_Descricao_Funcoes_Empresa= function(linha){
                    return String(abcdescricao_funcoes[linha]);
                }
                this.get_Descricao_funcoes_x=function(linha){
                    return Descricao_funcoes_x[linha];
                }
                this.get_Classificacao= function(linha){
                    return Classificacao_Funcao[linha];
                }
                this.get_Codigo_CBO_Familia= function(linha){
                    return Codigo_CBO_Familia[linha];
                }
                this.get_Codigo_CBO_Ocupacao= function(linha){
                    return Codigo_CBO_Ocupacao[linha];
                }
                this.get_Codigo_CBO_Sinonimo= function(linha){
                    return Codigo_CBO_Sinonimo[linha];
                }
                this.get_Descricao_CBO_Familia= function(linha){
                    return Descricao_CBO_Familia[linha];
                }
                this.get_Descricao_CBO_Ocupacao= function(linha){
                    return Descricao_CBO_Ocupacao[linha];
                }
                this.get_Descricao_CBO_Sinonimo= function(linha){
                    return Descricao_CBO_Sinonimo[linha];
                }
 
                this.get_Data_Cadastro=function(linha){
                    return Data_Cadastro[linha];
                }    
                this.get_Session_id=function(linha){
                    return Session_id[linha];
                }         
                this.get_Ultimo_Usuario=function(linha){
                    return Ultimo_Usuario[linha];
                }         
                this.get_Ultima_Atualizacao=function(linha){
                    return Ultima_Atualizacao[linha];
                }                         
                this.length=function(){
                    return Codigo_Funcao.length
                }
                this.get_Cargo_Funcao=function(linha){
                    return Cargo_Funcao[linha];
                }                   
                this.setValores=function(response){
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');
                            Codigo_Empresa[x]=vreg[0];
                            Codigo_Funcao[x]=vreg[1];
                            Descricao_funcoes_x[x]=vreg[2];
                            Classificacao_Funcao[x]=vreg[3];
                            Codigo_CBO_Familia[x]=vreg[4];
                            Codigo_CBO_Ocupacao[x]=vreg[5];
                            Codigo_CBO_Sinonimo[x]=vreg[6];
                            Descricao_CBO_Familia[x]=vreg[7];
                            Descricao_CBO_Ocupacao[x]=vreg[8];
                            Descricao_CBO_Sinonimo[x]=vreg[9];
                            Descricao_LTCAT[x]=vreg[17];
                            Cargo_Funcao[x]=vreg[18];                            
                            
                       }
                       
                    }
                }
            };
             newfuncoes=new Funcoes();