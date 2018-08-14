function Funcionarios_Monitoracao_Biologica(){
                
                this.inicializa=function(){
                     Codigo_Empresa_Monitoracao_Biologica=Array();
                     Codigo_Funcionario_Monitoracao_Biologica=Array();
                     Data_Inicial_Monitoracao_Biologica=Array();
                     Data_Final_Monitoracao_Biologica=Array();
                     Tipo_Exame_Monitoracao_Biologica=Array();
                     Natureza_Exame_Monitoracao_Biologica=Array();
                     Descricao_Resumida_Monitoracao_Biologica=Array();
                     Resultado_Monitoracao_Biologica=Array();
                     Exame_R_S_Monitoracao_Biologica=Array();
                     Codigo_Profissional_Responsavel_Monitoracao_Biologica=Array();
                     Nit_Profissional_Responsavel_Monitoracao_Biologica=Array();
                     Id_Usuario_Monitoracao_Biologica=Array();
                     Data_Proximo_Exame_Monitoracao_Biologica=Array();
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa_Monitoracao_Biologica[nlinha];
                }
                this.get_Codigo_Funcionario= function(nlinha){
                    return Codigo_Funcionario_Monitoracao_Biologica[nlinha];
                }
                this.get_Data_Inicial= function(nlinha){
                    return Data_Inicial_Monitoracao_Biologica[nlinha];
                }
                this.get_Data_Final= function(nlinha){
                    return Data_Final_Monitoracao_Biologica[nlinha];
                }
                
                this.get_Tipo_Exame= function(nlinha){
                    return Tipo_Exame_Monitoracao_Biologica[nlinha];
                }
                this.get_Natureza_Exame= function(nlinha){
                    return Natureza_Exame_Monitoracao_Biologica[nlinha];
                }
                this.get_Descricao_Resumida=function(nlinha){
                    return Descricao_Resumida_Monitoracao_Biologica[nlinha];
                }
                this.get_Resultado= function(nlinha){
                    return Resultado_Monitoracao_Biologica[nlinha];
                }
                this.get_Exame_R_S= function(nlinha){
                    return Exame_R_S_Monitoracao_Biologica[nlinha];
                }
                
                this.get_Codigo_Profissional_Responsavel= function(nlinha){
                    return Codigo_Profissional_Responsavel_Monitoracao_Biologica[nlinha];
                }
                this.get_Nit_Profissional_Responsavel= function(nlinha){
                    return Nit_Profissional_Responsavel_Monitoracao_Biologica[nlinha];
                }
                this.get_Id_Usuario= function(nlinha){
                    return Id_Usuario_Monitoracao_Biologica[nlinha];
                }
                this.get_Data_Proximo_Exame= function(nlinha){
                    return Data_Proximo_Exame_Monitoracao_Biologica[nlinha];
                }                
                this.length=function(){
                    return Codigo_Empresa_Monitoracao_Biologica.length;
                }      
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-2;x++){
                           vreg=response[x].split('|');
                           Codigo_Empresa_Monitoracao_Biologica[x]=vreg[0];
                           Codigo_Funcionario_Monitoracao_Biologica[x]=vreg[1];
                           Data_Inicial_Monitoracao_Biologica[x]=vreg[2];
                           Data_Final_Monitoracao_Biologica[x]=vreg[3];
                           Tipo_Exame_Monitoracao_Biologica[x]=vreg[4];
                           Natureza_Exame_Monitoracao_Biologica[x]=vreg[5];
                           Descricao_Resumida_Monitoracao_Biologica[x]=vreg[6];
                           Resultado_Monitoracao_Biologica[x]=vreg[7];
                           Exame_R_S_Monitoracao_Biologica[x]=vreg[8];
                           Codigo_Profissional_Responsavel_Monitoracao_Biologica[x]=vreg[9];
                           Nit_Profissional_Responsavel_Monitoracao_Biologica[x]=vreg[10];
                           Id_Usuario_Monitoracao_Biologica[x]=vreg[11];
                           Data_Proximo_Exame_Monitoracao_Biologica[x]=vreg[12];
                       } 
                    }
                }
                
                
};
newfuncmonbiol=new Funcionarios_Monitoracao_Biologica();
                     