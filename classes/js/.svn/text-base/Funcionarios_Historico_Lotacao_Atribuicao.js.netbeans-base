function Funcionarios_Historico_Lotacao_Atibuicao(){
                
                this.inicializa=function(){
                     Codigo_Empresa_Lotacao_Atribuicao=Array();
                     Codigo_Funcionario_Lotacao_Atribuicao=Array();
                     Data_Inicio_Atribuicao_Lotacao_Atribuicao=Array();
                     Data_Fim_Atribuicao_Lotacao_Atribuicao=Array();
                     Unidade_Atribuicao_Lotacao_Atribuicao=Array();
                     Setor_Atribuicao_Lotacao_Atribuicao=Array();
                     Cargo_Atribuicao_Lotacao_Atribuicao=Array();
                     Funcao_Atribuicao_Lotacao_Atribuicao=Array();
                     CNPJ_CEI_Lotacao_Atribuicao=Array();
                     Codigo_CBO_Lotacao_Atribuicao=Array();
                     Codigo_Gfip_Lotacao_Atribuicao=Array();
                     Id_Usuario_Lotacao_Atribuicao=Array()

                }
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa_Lotacao_Atribuicao[nlinha];
                }
                this.get_Codigo_Funcionario= function(nlinha){
                    return Codigo_Funcionario_Lotacao_Atribuicao[nlinha];
                }
                this.get_Data_Inicio_Atribuicao= function(nlinha){
                    return Data_Inicio_Atribuicao_Lotacao_Atribuicao[nlinha];
                }
                this.get_Data_Fim_Atribuicao= function(nlinha){
                    return Data_Fim_Atribuicao_Lotacao_Atribuicao[nlinha];
                }                
                this.get_Unidade_Atribuicao= function(nlinha){
                    return Unidade_Atribuicao_Lotacao_Atribuicao[nlinha];
                }
                this.get_Setor_Atribuicao= function(nlinha){
                    return Setor_Atribuicao_Lotacao_Atribuicao[nlinha];
                }
                
                this.get_Cargo_Atribuicao= function(nlinha){
                    return Cargo_Atribuicao_Lotacao_Atribuicao[nlinha];
                }
                this.get_Funcao_Atribuicao= function(nlinha){
                    return Funcao_Atribuicao_Lotacao_Atribuicao[nlinha];
                }
                
                this.get_CNPJ_CEI= function(nlinha){
                    return CNPJ_CEI_Lotacao_Atribuicao[nlinha];
                }
                this.get_Codigo_CBO= function(nlinha){
                    return Codigo_CBO_Lotacao_Atribuicao[nlinha];
                }
                this.get_Codigo_Gfip= function(nlinha){
                    return Codigo_Gfip_Lotacao_Atribuicao[nlinha];
                }
                
                this.get_Id_Usuario= function(nlinha){
                    return Id_Usuario_Lotacao_Atribuicao[nlinha];
                }                
                this.length=function(){
                    return Codigo_Empresa_Lotacao_Atribuicao.length;
                }                
                      
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|');
                           Codigo_Empresa_Lotacao_Atribuicao[x]=vreg[0];
                           Codigo_Funcionario_Lotacao_Atribuicao[x]=vreg[1];
                           Data_Inicio_Atribuicao_Lotacao_Atribuicao[x]=vreg[2];
                           Data_Fim_Atribuicao_Lotacao_Atribuicao[x]=vreg[3];
                           Unidade_Atribuicao_Lotacao_Atribuicao[x]=vreg[4];
                           Setor_Atribuicao_Lotacao_Atribuicao[x]=vreg[5];
                           Cargo_Atribuicao_Lotacao_Atribuicao[x]=vreg[6];
                           Funcao_Atribuicao_Lotacao_Atribuicao[x]=vreg[7];
                           CNPJ_CEI_Lotacao_Atribuicao[x]=vreg[8];
                           Codigo_CBO_Lotacao_Atribuicao[x]=vreg[9];
                           Codigo_Gfip_Lotacao_Atribuicao[x]=vreg[10];
                           Id_Usuario_Lotacao_Atribuicao[x]=vreg[11];
                       } 
                    }
                }
                
                
};
newfunchistlotatr=new Funcionarios_Historico_Lotacao_Atibuicao();
                     