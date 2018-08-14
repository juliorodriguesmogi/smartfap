function Funcionarios_Exposicao_Fatores_Risco(){
                
                this.inicializa=function(){
                     Codigo_Empresa=Array();
                     Codigo_Funcionario=Array();
                     Data_Inicio_Exposicao=Array();
                     Data_Fim_Exposicao=Array();
                     Tipo_Exposicao=Array();
                     Fator_Risco=Array();
                     Intensidade_Concentracao=Array();
                     Tecnica_Utilizada=Array();
                     EPC_Eficaz=Array();
                     CA_Epi=Array();    
                     EPI_Eficaz=Array()
                     Id_Usuario=Array();
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa[nlinha];
                }
                this.get_Codigo_Funcionario= function(nlinha){
                    return Codigo_Funcionario[nlinha];
                }
                this.Data_Inicio_Exposicao= function(nlinha){
                    return Data_Inicio_Exposicao[nlinha];
                }
                this.Data_Fim_Exposicao= function(nlinha){
                    return Data_Fim_Exposicao[nlinha];
                }                
                this.get_Tipo_Exposicao= function(nlinha){
                    return Tipo[nlinha];
                }
                this.get_Fator_Risco= function(nlinha){
                    return Fator_Risco[nlinha];
                }
                
                this.get_Intensidade_Concentracao= function(nlinha){
                    return Intensidade_Concentracao[nlinha];
                }
                this.get_Tecnica_Utilizada= function(nlinha){
                    return Tecnica_Utilizada[nlinha];
                }
                this.get_CA_Epi= function(nlinha){
                    return CA_Epi[nlinha];
                }
                this.get_EPI_Eficaz= function(nlinha){
                    return EPI_Eficaz[nlinha];
                }
                this.get_EPC_Eficaz= function(nlinha){
                    return EPC_Eficaz[nlinha];
                }                
                this.get_Id_Usuario= function(nlinha){
                    return Id_Usuario[nlinha];
                }
                this.length=function(){
                    return Codigo_Empresa.length;
                }                
                      
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response.split('|');
                           Codigo_Empresa[x]=vreg[0];
                           Codigo_Funcionario[x]=vreg[1];
                           Data_Inicio_Exposicao[x]=vreg[2];
                           Data_Fim_Exposicao[x]=vreg[3];
                           Tipo_Exposicao[x]=vreg[3];
                           Fator_Risco[x]=vreg[4];
                           Intensidade_Concentracao[x]=vreg[5];
                           Tecnica_Utilizada[x]=vreg[6];
                           EPC_Eficaz[x]=vreg[7];
                           CA_Epi[x]=vreg[8];
                           EPI_Eficaz[x]=vreg[9];
                           Id_Usuario[x]=vreg[10];
                       } 
                    }
                }
                
                
};
newfuncexpfatris=new Funcionarios_Exposicao_Fatores_Risco();
                     