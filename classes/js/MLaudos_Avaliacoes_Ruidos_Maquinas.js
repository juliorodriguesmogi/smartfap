 function MLaudos_Avaliacoes_Ruido_Maquinas(){
                
                this.inicializa=function(){
                     this.Codigo_Empresa=Array();
                     this.Ano_Pericia=Array();
                     this.Numero_Laudo=Array();
                     this.Revisao=Array();
                     this.Unidade=Array();
                     this.Codigo_Setor=Array();
                     this.Codigo_Maquina=Array();
                     this.Sequencial=Array();
                     this.Nivel_Ruido_Medido=Array();
                     this.Tempo_Exposicao_Diaria=Array();
                     this.Nivel_Ruido_Permitido=Array();
                     this.Tempo_Maximo_Exposicao_Diaria=Array();
                     this.Observacao=Array();
                     this.Epi_Eficaz=Array();
                     this.Epc_Eficaz=Array();
                     this.Observacoes=Array();
                     this.Situacao=Array();
                     this.ID_Usuario=Array();
                     this.Session_id=Array();
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
                this.get_Codigo_Maquina= function(nlinha){
                    return this.Codigo_Maquina[nlinha];
                }
                this.get_Sequencial= function(nlinha){
                    return this.Sequencial[nlinha];
                }
                
                this.get_Ultima_Atualizacao=function(nlinha){
                    return this.Ultima_Atualizacao[nlinha];
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                        for (x=0;x<response.length-1;x++){
                            vreg=response.split('|');
                            this.Codigo_Empresa[x]=vreg[0];
                            this.Ano_Pericia[x]=vreg[1];
                            this.Numero_Laudo[x]=vreg[2];
                            this.Revisao[x]=vreg[3];
                            this.Unidade[x]=vreg[4];
                            this.Codigo_Setor[x]=vreg[5];
                            this.Codigo_Funcao[x]=vreg[6];
                            this.Sequencial[x]=vreg[7];
                            this.Funcao_Exposta[x]=vreg[8];
                            this.Periodicidade_Exposicao[x]=vreg[9];
                            this.Epi_Eficaz[x]=vreg[10];
                            this.Epc_Eficaz[x]=vreg[11];
                            this.ID_Usuario[x]=vreg[23];
                            this.Session_ID[x]=vreg[24];
                            this.Ultima_Atualizacao[x]=vreg[25];
                            this.Ultimo_Usuario[x]=vreg[26];
                            
                        } 
                    }
                }
            };
             newlaudoavalruidomaq=new MLaudos_Avaliacoes_Ruido_Maquinas();