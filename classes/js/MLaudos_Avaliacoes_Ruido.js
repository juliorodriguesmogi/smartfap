 function MLaudos_Avaliacoes_Ruido(){
                
                this.inicializa=function(){
                    
                     this.Codigo_Empresa_Avaliacao_Ruido=Array();
                     this.Numero_Laudo_Avaliacao_Ruido=Array();
                     this.Ano_Pericia_Avaliacao_Ruido=Array();
                     this.Revisao_Avaliacao_Ruido=Array();
                     this.Unidade_Avaliacao_Ruido=Array();
                     this.Codigo_Setor_Avaliacao_Ruido=Array();
                     this.Tipo_Avaliacao_Avaliacao_Ruido=Array();
                     this.Sequencial_Avaliacao_Ruido=Array();
                     this.Descricao_Setor_Avaliacao_Ruido=Array();
                     this.Numero_Funcs_Setor_Avaliacao_Ruido=Array();
                     this.Numero_Funcs_Expostos_Avaliacao_Ruido=Array();
                     this.Periodicidade_Exposicao_Avaliacao_Ruido=Array();
                     this.Texto_Explicativo_Avaliacao_Ruido=Array();
                     this.Campo_Acustico_Medido_Avaliacao_Ruido=Array();
                     this.Nivel_Atenuacao_Protetor_Avaliacao_Ruido=Array();
                     this.Nivel_Ruido_Atenuado_Avaliacao_Ruido=Array();
                     this.Medidas_Protecao_Coletiva_Avaliacao_Ruido=Array();
                     this.Medidas_Protecao_Individual_Avaliacao_Ruido=Array();
                     this.Medidas_Protecao_Coletiva_Outros_Avaliacao_Ruido=Array();
                     this.Medidas_Protecao_Individual_Outros_Avaliacao_Ruido=Array();
                     this.Enquadramento_Avaliacao_Ruido=Array();
                     this.Grau_Risco_Avaliacao_Ruido=Array();
                     this.Acoes_PPRA_Avaliacao_Ruido=Array();
                     this.Fonte_Geradora_Avaliacao_Ruido=Array();
                     this.Observacoes_Avaliacao_Ruido=Array();
                     this.Situacao_Avaliacao_Ruido=Array();
                     this.ID_Usuario_Avaliacao_Ruido=Array();
                     this.Session_ID_Avaliacao_Ruido=Array();
                     this.Ultima_Atualizacao_Avaliacao_Ruido=Array();
                     this.Ultimo_Usuario_Avaliacao_Ruido=Array();
                     
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return this.Codigo_Empresa_Avaliacao_Ruido[nlinha];
                }
               this.get_Ano_Pericia= function(nlinha){
                    return this.Ano_Pericia_Avaliacao_Ruido[nlinha];
                }
                this.get_Numero_Laudo= function(nlinha){
                    return this.Numero_Laudo_Avaliacao_Ruido[nlinha];
                }

                this.get_Revisao=function(nlinha){
                    return this.Revisao_Avaliacao_Ruido[nlinha];
                }    
                this.get_Unidade= function(nlinha){
                    return this.Unidade_Avaliacao_Ruido[nlinha];
                }
                this.get_Codigo_Setor= function(nlinha){
                    return this.Codigo_Setor_Avaliacao_Ruido[nlinha];
                }
                this.get_Descricao_Setor= function(nlinha){
                    return this.Descricao_Setor_Avaliacao_Ruido[nlinha];
                }
                
                this.get_Tipo_Avaliacao= function(nlinha){
                    return this.Tipo_Avaliacao_Avaliacao_Ruido[nlinha];
                }
                this.get_Sequencial= function(nlinha){
                    return this.Sequencial_Avaliacao_Ruido[nlinha];
                }
                this.get_Numero_Funcs_Setor= function(nlinha){
                    return this.Numero_Funcs_Setor_Avaliacao_Ruido[nlinha];
                }
                this.get_Numero_Funcs_Expostos= function(nlinha){
                    return this.Numero_Funcs_Expostos_Avaliacao_Ruido[nlinha];
                }
                this.get_Periodicidade_Exposicao= function(nlinha){
                    return this.Periodicidade_Exposicao_Avaliacao_Ruido[nlinha];
                }
                this.get_Texto_Explicativo= function(nlinha){
                    return this.Texto_Explicativo_Avaliacao_Ruido[nlinha];
                }
                this.get_Campo_Acustico_Medido= function(nlinha){
                    return this.Campo_Acustico_Medido_Avaliacao_Ruido[nlinha];
                }
                
                this.get_Nivel_Atenuacao_Protetor= function(nlinha){
                    return this.Nivel_Atenuacao_Protetor_Avaliacao_Ruido[nlinha];
                }
                this.get_Nivel_Ruido_Atenuado= function(nlinha){
                    return this.Nivel_Ruido_Atenuado_Avaliacao_Ruido[nlinha];
                }
                this.get_Medidas_Protecao_Coletiva=function(nlinha){
                    return this.Medidas_Protecao_Coletiva_Avaliacao_Ruido[nlinha];
                }
                this.get_Medidas_Protecao_Individual=function(nlinha){
                    return this.Medidas_Protecao_Individual_Avaliacao_Ruido[nlinha];
                }
                this.get_Medidas_Protecao_Coletiva_Outros=function(nlinha){
                    return this.Medidas_Protecao_Coletiva_Outros_Avaliacao_Ruido[nlinha];
                }
                this.get_Medidas_Protecao_Individual_Outros=function(nlinha){
                    return this.Medidas_Protecao_Individual_Outros_Avaliacao_Ruido[nlinha];
                }
                
                this.get_Enquadramento=function(nlinha){
                    return this.Enquadramento_Avaliacao_Ruido[nlinha];
                }         
                this.get_Grau_Risco=function(nlinha){
                    return this.Grau_Risco_Avaliacao_Ruido[nlinha];
                }         
                
                this.get_Fonte_Geradora=function(nlinha){
                    return this.Fonte_Geradora_Avaliacao_Ruido[nlinha];
                }
                this.get_Session_id=function(nlinha){
                    
                    return this.Session_ID_Avaliacao_Ruido[nlinha];
                }         
                this.get_Ultimo_Usuario=function(nlinha){
                    return this.Ultimo_Usuario_Avaliacao_Ruido[nlinha];
                }         
                this.get_Situacao=function(nlinha){
                    return this.Situacao_Avaliacao_Ruido[nlinha];
                }         
                this.get_Numero_Funcionarios=function(nlinha){
                    return this.Numero_Funcionarios_Avaliacao_Ruido[nlinha];
                }
                this.get_Ultima_Atualizacao=function(nlinha){
                    return this.Ultima_Atualizacao_Avaliacao_Ruido[nlinha];
                }  
                this.length=function(){
                    return this.Codigo_Empresa_Avaliacao_Ruido.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                        for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');
                            this.Codigo_Empresa_Avaliacao_Ruido[x]=vreg[0];
                            this.Ano_Pericia_Avaliacao_Ruido[x]=vreg[1];
                            this.Numero_Laudo_Avaliacao_Ruido[x]=vreg[2];
                            this.Revisao_Avaliacao_Ruido[x]=vreg[3];
                            this.Unidade_Avaliacao_Ruido[x]=vreg[4];
                            this.Codigo_Setor_Avaliacao_Ruido[x]=vreg[5];
                            this.Tipo_Avaliacao_Avaliacao_Ruido[x]=vreg[6];
                            this.Sequencial_Avaliacao_Ruido[x]=vreg[7];
                            this.Numero_Funcs_Setor_Avaliacao_Ruido[x]=vreg[8];
                            this.Numero_Funcs_Expostos_Avaliacao_Ruido[x]=vreg[9];
                            this.Periodicidade_Exposicao_Avaliacao_Ruido[x]=vreg[10];
                            this.Texto_Explicativo_Avaliacao_Ruido[x]=vreg[11];
                            this.Campo_Acustico_Medido_Avaliacao_Ruido[x]=vreg[12];
                            this.Nivel_Atenuacao_Protetor_Avaliacao_Ruido[x]=vreg[13];
                            this.Nivel_Ruido_Atenuado_Avaliacao_Ruido[x]=vreg[14];
                            this.Medidas_Protecao_Coletiva_Avaliacao_Ruido[x]=vreg[15];
                            this.Medidas_Protecao_Individual_Avaliacao_Ruido[x]=vreg[16];
                            this.Medidas_Protecao_Coletiva_Outros_Avaliacao_Ruido[x]=vreg[17];
                            this.Medidas_Protecao_Individual_Outros_Avaliacao_Ruido[x]=vreg[18];
                            this.Enquadramento_Avaliacao_Ruido[x]=vreg[19];
                            this.Acoes_PPRA_Avaliacao_Ruido[x]=vreg[20];
                            this.Fonte_Geradora_Avaliacao_Ruido[x]=vreg[21];
                            this.Observacoes_Avaliacao_Ruido[x]=vreg[22];
                            this.ID_Usuario_Avaliacao_Ruido[x]=vreg[23];
                            this.Session_ID_Avaliacao_Ruido[x]=vreg[24];
                            this.Ultima_Atualizacao_Avaliacao_Ruido[x]=vreg[25];
                            this.Ultimo_Usuario_Avaliacao_Ruido[x]=vreg[26];
                            this.Grau_Risco_Avaliacao_Ruido[x]=vreg[27];
                            
                        } 
                    }
                }
            };
             newlaudoavalruido=new MLaudos_Avaliacoes_Ruido();