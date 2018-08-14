 function MLaudos_Avaliacoes_Ruido_Dosimetria(){
                
                this.inicializa=function(){
                     this.Codigo_Empresa=Array();
                     this.Ano_Pericia=Array();
                     this.Numero_Laudo=Array();
                     this.Revisao=Array();
                     this.Unidade=Array();
                     this.Codigo_Setor=Array();
                     this.Tipo_Avaliacao=Array();
                     this.Sequencial=Array();
                     this.Numero_Funcs_Setor=Array();
                     this.Numero_Funcs_Expostos=Array();
                     this.Periodicidade_Exposicao=Array();
                     this.Texto_Explicativo=Array();
                     this.Campo_Acustico_Medido=Array();
                     this.Nivel_Atenuacao_Protetor=Array();
                     this.Nivel_Ruido_Atenuado=Array();
                     this.Medidas_Protecao_Coletiva=Array();
                     this.Medidas_Protecao_Individual=Array();
                     this.Medidas_Protecao_Coletiva_Outros=Array();
                     this.Medidas_Protecao_Individual_Outros=Array();
                     this.Enquadramento=Array();
                     this.Grau_Risco=Array();
                     this.Acoes_PPRA=Array();
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
                this.get_Tipo_Avaliacao= function(nlinha){
                    return this.Tipo_Avaliacao[nlinha];
                }
                this.get_Sequencial= function(nlinha){
                    return this.Sequencial[nlinha];
                }
                this.get_Numero_Funcs_Setor= function(nlinha){
                    return this.Numero_Funcs_Setor[nlinha];
                }
                this.get_Numero_Funcs_Expostos= function(nlinha){
                    return this.Numero_Funcs_Expostos[nlinha];
                }
                this.get_Periodicidade_Exposicao= function(nlinha){
                    return this.Periodicidade_Exposicao[nlinha];
                }
                this.get_Texto_Explicativo= function(nlinha){
                    return this.Texto_Explicativo[nlinha];
                }
                this.get_Campo_Acustico_Medido= function(nlinha){
                    return this.Campo_Acustico_Medido[nlinha];
                }
                
                this.get_Nivel_Atenuacao_Protetor= function(nlinha){
                    return this.Nivel_Atenuacao_Protetor[nlinha];
                }
                this.get_Nivel_Ruido_Atenuado= function(nlinha){
                    return this.Nivel_Ruido_Atenuado[nlinha];
                }

                this.get_Session_id=function(nlinha){
                    return this.Session_id[nlinha];
                }         
                this.get_Ultimo_Usuario=function(nlinha){
                    return this.Ultimo_Usuario[nlinha];
                }         
                this.get_Situacao=function(nlinha){
                    return this.Situacao[nlinha];
                }         
                this.get_Numero_Funcionarios=function(nlinha){
                    return this.Numero_Funcionarios[nlinha];
                }
                this.get_Ultima_Atualizacao=function(nlinha){
                    return this.Ultima_Atualizacao[nlinha];
                }  
                this.get_Grau_Risco=function(nlinha){
                    return this.Grau_Risco[nlinha];
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
                            this.Tipo_Avalicao[x]=vreg[6];
                            this.Sequencial[x]=vreg[7];
                            this.Numero_Funcs_Setor[x]=vreg[8];
                            this.Numero_Funcs_Expostos[x]=vreg[9];
                            this.Periodicidade_Exposicao[x]=vreg[10];
                            this.Texto_Explicativo[x]=vreg[11];
                            this.Campo_Acustico_Medido[x]=vreg[12];
                            this.Nivel_Atenuacao_Protetor[x]=vreg[13];
                            this.Nivel_Ruido_Atenuado[x]=vreg[14];
                            this.Medidas_Protecao_Coletiva[x]=vreg[15];
                            this.Medidas_Protecao_Individual[x]=vreg[16];
                            this.Medidas_Protecao_Coletiva_Outros[x]=vreg[17];
                            this.Medidas_Protecao_Individual_Outros[x]=vreg[18];
                            this.Enquadramento[x]=vreg[19];
                            this.Acoes_PPRA[x]=vreg[20];
                            this.Fonte_Geradora[x]=vreg[21];
                            this.Observacoes[x]=vreg[22];
                            this.ID_Usuario[x]=vreg[23];
                            this.Session_ID[x]=vreg[24];
                            this.Ultima_Atualizacao[x]=vreg[25];
                            this.Ultimo_Usuario[x]=vreg[26];
                            this.Grau_Risco[x]=vreg[27];
                            
                        } 
                    }
                }
            };
             newlaudoavalruidodosim=new MLaudos_Avaliacoes_Ruido_Dosimetria();