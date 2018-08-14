  function maquinas(){
                
                this.inicializa=function(){
                     this.Codigo_Empresa_Maquina=Array();
                     this.Codigo_Maquina=Array();
                     this.Nome_Maquina=Array();
                     this.Tipo_De_Uso=Array();
		     this.Taxa_De_Ruido=Array();
                     this.Taxa_De_Luminosidade=Array();
                     this.Fabricante=Array();
                     this.Vida_Util=Array();
                     this.Vida_Util2=Array();
                     this.Data_Cadastro=Array();
                     this.Id_Usuario=Array();
                     this.Session_id=Array();
                     this.Ultimo_Usuario=Array();
                     this.Ultima_Atualizacao=Array();
                     this.Situacao=Array();
                     this.Unidade=Array();
                     this.Setor=Array();
                     this.Classificacao_Local=Array();
                }
                this.get_Codigo_Empresa_Maquina= function(nlinha){
                    return this.Codigo_Empresa[nlinha];
                }
                this.get_Codigo_Maquina= function(nlinha){
                    return this.Codigo_Maquina[nlinha];
                }
                this.get_Nome_Maquina= function(nlinha){
                    return this.Nome_Maquina[nlinha];
                }
                this.get_Tipo_De_Uso=function(nlinha){
                    return this.Tipo_De_Uso[nlinha];
                }
                this.get_Taxa_De_Ruido=function(nlinha){
                    return this.Taxa_De_Ruido[nlinha];
                }
                this.get_Taxa_De_Luminosidade=function(nlinha){
                    return this.Taxa_De_Luminosidade[nlinha];
                }
              
                  this.get_Fabricante=function(nlinha){
                    return this.Fabricante[nlinha];
                  }
                this.get_Vida_Util=function(nlinha){
                    return this.Vida_Util[nlinha];
                }
                this.get_Vida_Util2=function(nlinha){
                    return this.Vida_Util2[nlinha];
                }
                this.get_Data_Cadastro=function(nlinha){
                    return this.Data_Cadastro[nlinha];
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
                this.get_Unidade=function(nlinha){
                    return this.Unidade[nlinha];
                }  

                this.get_Setor=function(nlinha){
                    return this.Setor[nlinha];
                }  
                this.get_Ultima_Atualizacao=function(nlinha){
                    return this.Ultima_Atualizacao[nlinha];
                }  
                this.get_Classificacao_Local=function(nlinha){
                    return this.Classificacao_Local[nlinha];
                }
                this.length=function(){
                    return this.Codigo_Empresa_Maquina.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|');
                           this.Codigo_Empresa_Maquina[x]=vreg[0];
                           this.Codigo_Maquina[x]=vreg[1];
                           this.Nome_Maquina[x]=vreg[2];
                           this.Classificacao_Local[x]=vreg[3];
                           this.Tipo_De_Uso[x]=vreg[4];
                           this.Taxa_De_Ruido[x]=vreg[5];
                           this.Taxa_De_Luminosidade[x]=vreg[6];
                           this.Fabricante[x]=vreg[7];
                           this.Unidade[x]=vreg[8];  
                           this.Setor[x]=vreg[9];  
                           this.Vida_Util[x]=vreg[10];
                           this.Vida_Util2[x]=vreg[11];
                           this.Id_Usuario[x]=vreg[12];
                           this.Data_Cadastro[x]=vreg[13];
                           this.Ultima_Atualizacao[x]=vreg[14];
                           this.Ultimo_Usuario[x]=vreg[15];                     
                       }    
                    }
                }
            };
             newMaquinas=new maquinas();