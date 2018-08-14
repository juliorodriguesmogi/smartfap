function laudo_atividades(){
                
                this.inicializa=function(){
                    this.Codigo_Empresa_Atividades=Array();
                    this.Ano_Pericia_Atividades=Array();
                    this.Numero_Laudo_Atividades=Array();
                    this.Revisao_Atividades=Array();
                    this.Codigo_Atividadex=Array();
                    this.Sequencial_Atividades=Array();
                    this.Classificacao_Atividade=Array();
                    this.Descricao_Resumida=Array();
                    this.Descricao_Atividade=Array();
                    this.Data_Registro_Atividades=Array();
                    this.Id_Usuario_Atividades=Array();
                    this.Session_id_Atividades=Array();
                    this.Ultimo_Usuario_Atividades=Array();
                    this.Ultima_Atualizacao_Atividades=Array();
                    this.Acao_PPRA=Array();
                    
                     
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return this.Codigo_Empresa_Atividades[nlinha];
                }                
                this.get_Numero_Laudo= function(nlinha){
                    return this.Numero_Laudo_Atividades[nlinha];
                }
                this.get_Ano_Pericia= function(nlinha){
                    return this.Ano_Pericia_Atividades[nlinha];
                }
                this.get_Revisao=function(nlinha){
                    return this.Revisao_Atividades[nlinha];
                }
                this.get_Sequencial=function(nlinha){
                    return this.Sequencial_Atividades[nlinha];
                }
                this.get_Codigo_Atividade=function(nlinha){
                    return this.Codigo_Atividadex[nlinha];
                }
                this.get_Classificacao_Atividade=function(nlinha){
                    return this.Classificacao_Atividade[nlinha];
                }
                
                this.get_Descricao_Resumida=function(nlinha){
                    return this.Descricao_Resumida[nlinha];
                }
                this.get_Descricao_Atividade=function(nlinha){
                    return this.Descricao_Atividade[nlinha];
                }
                
                this.get_Data_Registro=function(nlinha){
                    return this.Data_Registro_Atividades[nlinha];
                }
                this.get_Acao_PPRA=function(nlinha){
                    return this.Acao_PPRA[nlinha];
                }
                this.get_Session_id=function(nlinha){
                    return this.Session_id_Atividades[nlinha];
                }         
                this.get_Ultimo_Usuario=function(nlinha){
                    return this.Ultimo_Usuario_Atividades[nlinha];
                }         
                this.get_Id_Usuario=function(nlinha){
                    return this.Id_Usuario_Atividades[nlinha];
                }         
                this.length=function(){
                    return this.Codigo_Empresa_Atividades.length;
                }                
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao_Atividades[nlinha];
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');
                            this.Codigo_Empresa_Atividades[x]=vreg[0];
                            this.Ano_Pericia_Atividades[x]=vreg[1];
                            this.Numero_Laudo_Atividades[x]=vreg[2];
                            this.Revisao_Atividades[x]=vreg[3];
                            this.Codigo_Atividadex[x]=vreg[4];
                            this.Sequencial_Atividades[x]=vreg[5];
                            this.Classificacao_Atividade[x]=vreg[6];
                            this.Descricao_Atividade[x]=vreg[7];
                            this.Descricao_Resumida[x]=vreg[8];
                            this.Acao_PPRA[x]=vreg[9]
                            this.Id_Usuario_Atividades[x]=vreg[10];
                            this.Session_id_Atividades[x]=vreg[11];
                            this.Ultima_Atualizacao_Atividades[x]=response[12];
                            this.Ultimo_Usuario_Atividades[x]=response[13];                     
                            
                            
                       }     
                    }
                }
            };
             newativlaudo=new laudo_atividades();

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


