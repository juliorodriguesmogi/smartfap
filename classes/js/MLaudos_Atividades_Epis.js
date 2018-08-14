   function laudo_atividades_epis(){
                
                this.inicializa=function(){
                     this.Codigo_Empresa_EPI=Array();
                     this.Numero_Laudo=Array();
                     this.Revisao=Array();
		     this.Ano_Pericia=Array();
                     this.Unidade=Array();
                     this.Codigo_Atividade=Array();
                     this.Codigo_EPI=Array();
                     this.Descricao_EPI=Array();
                     this.Codigo_CA=Array();
                     this.Tipo_Protecao=Array();
                     this.Session_id=Array();
                     this.Ultimo_Usuario=Array();
                     this.Ultima_Atualizacao=Array();
                     this.Id_Usuario=Array();
                     this.Agente_Prevencao=Array();
                     
                }
                 this.get_Codigo_Empresa=function(nlinha){
                    return this.Codigo_Empresa_EPI[nlinha];
                }
                
                this.get_Numero_Laudo= function(nlinha){
                    return this.Numero_Laudo[nlinha];
                }
                this.get_Ano_Pericia= function(nlinha){
                    return this.Ano_Pericia[nlinha];
                }
                this.get_Revisao=function(nlinha){
                    return this.Revisao[nlinha];
                }
                this.get_Unidade=function(nlinha){
                    return this.Unidade[nlinha];
                }
                this.get_Codigo_Atividade=function(nlinha){
                    return this.Codigo_Atividade[nlinha];
                }
                 this.get_Codigo_EPI=function(nlinha){
                    return this.Codigo_EPI[nlinha];
                }
                 this.get_Descricao_EPI=function(nlinha){
                    return this.Descricao_EPI[nlinha];
                }
                
                 this.get_Codigo_CA=function(nlinha){
                    return this.Codigo_CA[nlinha];
                }
                this.get_Tipo_Protecao=function(nlinha){
                    return this.Tipo_Protecao[nlinha];
                }
                    this.get_Data_Registro=function(nlinha){
                    return  this.Data_Registro[nlinha];
                }
                this.get_Session_id=function(nlinha){
                    return this.Session_id[nlinha];
                }         
                this.get_Ultimo_Usuario=function(nlinha){
                    return this.Ultimo_Usuario[nlinha];
                }         
                this.get_Id_Usuario=function(nlinha){
                    return this.Id_Usuario[nlinha];
                }         
                this.get_Agente_Prevencao=function(nlinha){
                    return this.Agente_Prevencao[nlinha];
                }         
                
               this.length=function(){
                   return this.Codigo_Empresa_EPI.length;
               }
                
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');                        
                            this.Codigo_Empresa_EPI[x]=vreg[0];
                            this.Ano_Pericia[x]=vreg[1];
                            this.Numero_Laudo[x]=vreg[2];
                            this.Revisao[x]=vreg[3];
                            this.Codigo_Atividade[x]=vreg[4];
                            this.Codigo_EPI[x]=vreg[5];
                            this.Descricao_EPI[x]=vreg[6];
                            this.Codigo_CA[x]=vreg[7]; 
                            this.Tipo_Protecao[x]=vreg[8];
                            this.Id_Usuario[x]=vreg[9];
                            this.Session_id[x]=vreg[10];
                            this.Ultima_Atualizacao[x]=vreg[11];
                            this.Ultimo_Usuario[x]=vreg[12];                     
                            this.Agente_Prevencao[x]=vreg[13];
                            
                                                       
                       }     
                    }
                }
            };
             newlaudoativepis=new laudo_atividades_epis();