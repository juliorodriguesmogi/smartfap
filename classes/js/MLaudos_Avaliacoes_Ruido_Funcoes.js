 function MLaudos_Avaliacoes_Ruido_Funcoes(){
                
                this.inicializa=function(){
                     this.Codigo_Empresa=Array();
                     this.Ano_Pericia=Array();
                     this.Numero_Laudo=Array();
                     this.Revisao=Array();
                     this.Unidade=Array();
                     this.Codigo_Setor=Array();
                     this.Codigo_Funcao=Array();
                     this.Sequencial=Array();
                     this.Funcao_Exposta=Array();
                     this.Grau_Insalubridade=Array();
                     this.Intensidade_Concentracao=Array();
                     this.Intensidade_Concentracao_Unidade=Array();
                     this.Periodicidade_Exposicao=Array();
                     this.Epi_Eficaz=Array();
                     this.Epc_Eficaz=Array();
                     this.CA_EPI=Array();
                     this.Tecnica_Utilizada=Array();
                     this.Observacoes=Array();
                     this.Situacao=Array();
                     this.ID_Usuario=Array();
                     this.Session_ID=Array();
                     this.Ultima_Atualizacao=Array();
                     this.Ultimo_Usuario=Array();
                     
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return this.Codigo_Empresa[nlinha];
                }
               this.get_Ano_Pericia= function(nlinha){
                    return this.Ano_Pericia[nlinha];
                }
                this.get_Numero_Laudo= function(nlinha){
                    return this.Numero_Laudo[nlinha];
                }

                this.get_Revisao=function(nlinha){
                    return this.Revisao[nlinha];
                }    
                this.get_Unidade= function(nlinha){
                    return this.Unidade[nlinha];
                }
                this.get_Codigo_Setor= function(nlinha){
                    return this.Codigo_Setor[nlinha];
                }
                this.get_Tipo_Avaliacao= function(nlinha){
                    return this.Tipo_Avaliacao[nlinha];
                }
                this.get_Sequencial= function(nlinha){
                    return this.Sequencial[nlinha];
                }
                this.get_Codigo_Funcao= function(nlinha){
                    return this.Codigo_Funcao[nlinha];
                }
                this.get_Funcao_Exposta= function(nlinha){
                    return this.Funcao_Exposta[nlinha];
                }             
                this.get_Grau_Insalubridade= function(nlinha){
                    return this.Grau_Insalubridade[nlinha];
                }                   
                this.get_Intensidade_Concentracao= function(nlinha){
                    return this.Intensidade_Concentracao[nlinha];
                }                
                this.get_Intensidade_Concentracao_Unidade= function(nlinha){
                    return this.Intensidade_Concentracao_Unidade[nlinha];
                }                
                
                this.get_Periodicidade_Exposicao= function(nlinha){
                    return this.Periodicidade_Exposicao[nlinha];
                }
                this.get_Tecnica_Utilizada= function(nlinha){
                    return this.Tecnica_Utilizada[nlinha];
                }
                
                this.get_Epi_Eficaz= function(nlinha){
                    return this.Epi_Eficaz[nlinha];
                }                
                this.get_Epc_Eficaz= function(nlinha){
                    return this.Epc_Eficaz[nlinha];
                }                
                this.get_CA_EPI= function(nlinha){
                    return this.CA_EPI[nlinha];
                }                
                
                this.get_Ultima_Atualizacao=function(nlinha){
                    return this.Ultima_Atualizacao[nlinha];
                }  
                this.length=function(){
                    return this.Codigo_Empresa.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                        for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');
                            this.Codigo_Empresa[x]=vreg[0];
                            this.Ano_Pericia[x]=vreg[1];
                            this.Numero_Laudo[x]=vreg[2];
                            this.Revisao[x]=vreg[3];
                            this.Unidade[x]=vreg[4];
                            this.Codigo_Setor[x]=vreg[5];
                            this.Codigo_Funcao[x]=vreg[6];
                            this.Periodicidade_Exposicao[x]=vreg[7];
                            this.Sequencial[x]=vreg[8];
                            this.Grau_Insalubridade[x]=vreg[9];
                            this.Intensidade_Concentracao[x]=vreg[10];
                            this.Intensidade_Concentracao_Unidade[x]=vreg[11];
                            this.Tecnica_Utilizada[x]=vreg[12];
                            this.Epi_Eficaz[x]=vreg[13];
                            this.Epc_Eficaz[x]=vreg[14];
                            this.CA_EPI[x]=vreg[15];
                            
                        } 
                    }
                }
            };
             newlaudosavaliacoes_ruido_funcoes=new MLaudos_Avaliacoes_Ruido_Funcoes();