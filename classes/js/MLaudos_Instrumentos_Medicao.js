   function MLaudos_instrumentos_medicao(){
                
                this.inicializa=function(){
                     this.Codigo_Empresa=Array();
                     this.Ano_Pericia=Array();
                     this.Numero_Laudo=Array();
		     this.Revisao=Array();
                     this.Codigo_Instrumento=Array();
                     this.Tipo_Selecao_Instrumento=Array();
                     this.Tipo_Instrumento=Array();
                     this.Marca_Instrumento=Array();
                     this.Modelo_Instrumento=Array();
                     this.Serie_Instrumento=Array();
                     this.Data_Calibracao=Array();
                     this.Session_id=Array();
                     this.Ultimo_Usuario=Array();
                     this.Ultima_Atualizacao=Array(); 
                     this.Id_Usuario=Array();
                     
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return this.Codigo_Empresa[nlinha];
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
                this.get_Codigo_Instrumento=function(nlinha){
                    return this.Codigo_Instrumento[nlinha];
                }
                this.get_Tipo_Selecao_Instrumento=function(nlinha){
                    return this.Tipo_Selecao_Instrumento[nlinha];
                }
                this.get_Tipo_Instrumento=function(nlinha){
                    return this.Tipo_Instrumento[nlinha];
                }
                this.get_Marca_Instrumento=function(nlinha){
                    return this.Marca_Instrumento[nlinha];
                }
                this.get_Modelo_Instrumento=function(nlinha){
                    return this.Modelo_Instrumento[nlinha];
                }
                this.get_Serie_Instrumento=function(nlinha){
                    return this.Serie_Instrumento[nlinha];
                }
                
                this.get_Data_Calibracao=function(nlinha){
                    return this.Data_Calibracao[nlinha];
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
                this.length=function(){
                    return this.Codigo_Empresa.length;
                }
                
                this.get_Ultima_Atualizacao=function(nlinha){
                    return this.Ultima_Atualizacao[nlinha];
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
                            this.Codigo_Instrumento[x]=vreg[4];
                            this.Tipo_Selecao_Instrumento[x]=vreg[5];
                            this.Tipo_Instrumento[x]=vreg[6];
                            this.Marca_Instrumento[x]=vreg[7];
                            this.Modelo_Instrumento[x]=vreg[8];
                            this.Serie_Instrumento[x]=vreg[9];
                            this.Data_Calibracao[x]=vreg[10];

                       }     

                    }
                }
            };
             newlaudoinstrumentomedicao=new MLaudos_instrumentos_medicao();