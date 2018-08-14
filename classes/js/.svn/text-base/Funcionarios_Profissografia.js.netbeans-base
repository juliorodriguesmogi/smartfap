function Funcionarios_Profissiografia(){
                
                this.inicializa=function(){
                     Codigo_Empresa_Profissiografia=Array();
                     Codigo_Funcionario_Profissiografia=Array();
                     Data_Inicio_Atividade_Profissiografia=Array();
                     Data_Fim_Atividade_Profissiografia=Array();
                     Descricao_Resunida_Atividade_Profissiografia=Array();
                     Descricao_Completa_Atividade_Profissiografia=Array();
                     Id_Usuario_Profissiografia=Array()

                }
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa_Profissiografia[nlinha];
                }
                this.get_Codigo_Funcionario= function(nlinha){
                    return Codigo_Funcionario_Profissiografia[nlinha];
                }
                this.get_Data_Inicio_Atividade= function(nlinha){
                    return Data_Inicio_Atividade_Profissiografia[nlinha];
                }
                this.get_Data_Fim_Atividade= function(nlinha){
                    return Data_Fim_Atividade_Profissiografia[nlinha];
                }                
                this.get_Descricao_Resunida_Atividade= function(nlinha){
                    return Descricao_Resunida_Atividade_Profissiografia[nlinha];
                }
                this.get_Descricao_Completa_Atividade= function(nlinha){
                    return Descricao_Completa_Atividade_Profissiografia[nlinha];
                }
                
               
                
                this.get_Id_Usuario= function(nlinha){
                    return Id_Usuario_Profissiografia[nlinha];
                }                
                this.length=function(){
                    return Codigo_Empresa_Profissiografia.length;
                }                
                      
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|');
                           Codigo_Empresa_Profissiografia[x]=vreg[0];
                           Codigo_Funcionario_Profissiografia[x]=vreg[1];
                           Data_Inicio_Atividade_Profissiografia[x]=vreg[2];
                           Data_Fim_Atividade_Profissiografia[x]=vreg[3];
                           Descricao_Resunida_Atividade_Profissiografia[x]=vreg[4];
                           Descricao_Completa_Atividade_Profissiografia[x]=vreg[5];
                           
                           Id_Usuario[x]=vreg[6];
                       } 
                    }
                }
                
                
};
newfuncionariosprofissiografia=new Funcionarios_Profissiografia();
                     