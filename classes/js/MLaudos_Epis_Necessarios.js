   function laudos_epis_necessarios(){
                
                this.inicializa=function(){
                    this.Codigo_Empresa_Atividade_EPIs=Array();
                    this.Ano_Pericia_Atividade_EPIs=Array();
                    this.Numero_Laudo_Atividade_EPIs=Array();
                    this.Revisao_Atividade_EPIs=Array();
                    this.Codigo_Atividade_Atividade_EPIs=Array();
                    this.Codigo_EPI_Atividade_EPIs=Array();
                    this.Descricao_EPI_Atividade_EPIs=Array();
                    this.CA_EPI_Atividade_epis=Array();
                    this.Categoria_Protecao_Atividade_EPIs=Array();
                    this.Session_id_Atividade_EPIs=Array();
                    this.Ultimo_Usuario_Atividade_EPIs=Array();
                    this.Ultima_Atualizacao_Atividade_EPIs=Array();
                    this.Id_Usuario_Atividade_EPIs=Array();
                     
                }
                this.get_Numero_Laudo= function(nlinha){
                    return this.Numero_Laudo_Atividade_EPIs[nlinha];
                }
                this.get_Ano_Pericia= function(nlinha){
                    return this.Ano_Pericia_Atividade_EPIs[nlinha];
                }
                this.get_Revisao=function(nlinha){
                    return this.Revisao_Atividade_EPIs[nlinha];
                }
                 this.get_Codigo_Atividade=function(nlinha){
                    return this.Codigo_Atividade_Atividade_EPIs[nlinha];
                } 
                this.get_Codigo_EPI=function(nlinha){
                    return this.Codigo_EPI_Atividade_EPIs[nlinha];
                }
                  this.get_Descricao_EPI=function(nlinha){
                    return this.Descricao_EPI_Atividade_EPIs[nlinha];
                }
                this.get_Categoria_Protecao=function(nlinha){
                    return  this.Categoria_Protecao_Atividade_EPIs[nlinha];
                }
                this.get_CA_EPI=function(nlinha){
                    return  this.CA_EPI_Atividade_epis[nlinha];
                }
                
                this.get_Session_id=function(nlinha){
                    return this.Session_id_Atividade_EPIs[nlinha];
                }         
                this.get_Ultimo_Usuario=function(nlinha){
                    return this.Ultimo_Usuario_Atividade_EPIs[nlinha];
                }         
                this.get_Id_Usuario=function(nlinha){
                    return this.Id_Usuario_Atividade_EPIs[nlinha];
                }         
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao_Atividade_EPIs[nlinha];
                }  
                this.length=function(){
                    return this.Codigo_Atividade_Atividade_EPIs.length;
                    
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){ 
                            vreg=response[x].split("|");
                            this.Codigo_Empresa_Atividade_EPIs[x]=vreg[0];
                            this.Ano_Pericia_Atividade_EPIs[x]=vreg[1];
                            this.Numero_Laudo_Atividade_EPIs[x]=vreg[2];
                            this.Revisao_Atividade_EPIsv=vreg[3];
                            this.Codigo_Atividade_Atividade_EPIs[x]=vreg[4];
                            this.Codigo_EPI_Atividade_EPIs[x]=vreg[5];
                            this.Descricao_EPI_Atividade_EPIs[x]=vreg[6];
                            this.Id_Usuario_Atividade_EPIs[x]=vreg[9];
                            this.Session_id_Atividade_EPIs[x]=vreg[10];
                            this.Ultima_Atualizacao_Atividade_EPIs[x]=vreg[11];
                            this.Ultimo_Usuario_Atividade_EPIs[x]=vreg[12];                     
                       }     
                    }
                }
            };
             newlaudoepisforn=new laudos_epis_necessarios();
             