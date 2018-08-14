function laudo_Atividades_Funcoes_funcoes(){
                
                this.inicializa=function(){
                    this.Codigo_Empresa_Atividades_Funcoes=Array();
                    this.Ano_Pericia_Atividades_Funcoes=Array();
                    this.Numero_Laudo_Atividades_Funcoes=Array();
                    this.Revisao_Atividades_Funcoes=Array();
                    this.Sequencial_Atividades_Funcoes=Array();
                    this.Codigo_Atividade_Funcao=Array();
                    this.Codigo_Funcao=Array();
                    this.Descricao_Funcao=Array();
                    this.Data_Registro_Atividades_Funcoes=Array();
                    this.Id_Usuario_Atividades_Funcoes=Array();
                    this.Session_id_Atividades_Funcoes=Array();
                    this.Ultimo_Usuario_Atividades_Funcoes=Array();
                    this.Ultima_Atualizacao_Atividades_Funcoes=Array();
                    
                     
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return this.Codigo_Empresa_Atividades_Funcoes[nlinha];
                }                
                this.get_Numero_Laudo= function(nlinha){
                    return this.Numero_Laudo_Atividades_Funcoes[nlinha];
                }
                this.get_Ano_Pericia= function(nlinha){
                    return this.Ano_Pericia_Atividades_Funcoes[nlinha];
                }
                this.get_Revisao=function(nlinha){
                    return this.Revisao_Atividades_Funcoes[nlinha];
                }
                this.get_Sequencial=function(nlinha){
                    return this.Sequencial_Atividades_Funcoes[nlinha];
                }
                this.get_Codigo_Atividade=function(nlinha){
                    return this.Codigo_Empresa_Atividades_Funcoes[nlinha];
                }
                this.get_Codigo_Funcao=function(nlinha){
                    return this.Codigo_Funcao[nlinha];
                }
                
                
                this.get_Descricao_Funcao=function(nlinha){
                    return this.Descricao_Funcao[nlinha];
                }
                
                this.get_Data_Registro=function(nlinha){
                    return this.Data_Registro_Atividades_Funcoes[nlinha];
                }
                this.get_Session_id=function(nlinha){
                    return this.Session_id_Atividades_Funcoes[nlinha];
                }         
                this.get_Ultimo_Usuario=function(nlinha){
                    return this.Ultimo_Usuario_Atividades_Funcoes[nlinha];
                }         
                this.get_Id_Usuario=function(nlinha){
                    return this.Id_Usuario_Atividades_Funcoes[nlinha];
                }         
                this.length=function(){
                    return this.Codigo_Empresa_Atividades_Funcoes.length;
                }                
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao_Atividades_Funcoes[nlinha];
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');
                            this.Codigo_Empresa_Atividades_Funcoes[x]=vreg[0];
                            this.Ano_Pericia_Atividades_Funcoes[x]=vreg[1];
                            this.Numero_Laudo_Atividades_Funcoes[x]=vreg[2];
                            this.Revisao_Atividades_Funcoes[x]=vreg[3];
                            this.Codigo_Atividade_Funcao[x]=vreg[4];
                            this.Codigo_Funcao[x]=vreg[5];
                            this.Sequencial_Atividades_Funcoes[x]=vreg[6];
                            this.Descricao_Funcao[x]=vreg[7];
                            this.Id_Usuario_Atividades_Funcoes[x]=vreg[8];
                            this.Session_id_Atividades_Funcoes[x]=vreg[9];
                            this.Ultima_Atualizacao_Atividades_Funcoes[x]=response[10];
                            this.Ultimo_Usuario_Atividades_Funcoes[x]=response[11];                     
                            
                            
                       }     
                    }
                }
            };
             newativfunclaudo=new laudo_Atividades_Funcoes_funcoes();

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


