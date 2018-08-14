function Funcionarios_Exames_Realizados(){
                
                this.inicializa=function(){
                     Codigo_Empresa=Array();
                     Codigo_Funcionario=Array();
                     Data_Exame=Array();
                     Tipo=Array();
                     Tipo_Exame=Array();
                     Descricao_Exame=Array();
                     Resultado=Array();
                     Codigo_Profissional_Responsavel=Array();
                     Nit_Profissional_Responsavel=Array();
                     Id_Usuario=Array();
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa[nlinha];
                }
                this.get_Codigo_Funcionario= function(nlinha){
                    return Codigo_Funcionario[nlinha];
                }
                this.get_Data_Exame= function(nlinha){
                    return Data_Exame[nlinha];
                }
                this.get_Tipo= function(nlinha){
                    return Tipo[nlinha];
                }
                this.get_Tipo_Exame= function(nlinha){
                    return Tipo_Exame[nlinha];
                }
                
                this.get_Descricao_Exame= function(nlinha){
                    return Descricao_Exame[nlinha];
                }
                this.get_Resultado= function(nlinha){
                    return Resultado[nlinha];
                }
                this.get_Codigo_Profissional_Responsavel= function(nlinha){
                    return Codigo_Profissional_Responsavel[nlinha];
                }
                this.get_Nit_Profissional_Responsavel= function(nlinha){
                    return Nit_Profissional_Responsavel[nlinha];
                }
                this.get_Id_Usuario= function(nlinha){
                    return Id_Usuario[nlinha];
                }
                
                this.length=function(){
                    return get_Codigo_Empresa.length;
                }      
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response.split('|');
                           Codigo_Empresa[x]=vreg[0];
                           Codigo_Funcionario[x]=vreg[1];
                           Data_Exame[x]=vreg[2];
                           Tipo[x]=vreg[3];
                           Tipo_Exame[x]=vreg[4];
                           Descricao_Exame[x]=vreg[5];
                           Resultado[x]=vreg[6];
                           Codigo_Profissional_Responsavel[x]=vreg[7];
                           Nit_Profissional_Responsavel[x]=vreg[8];
                           Id_Usuario[x]=vreg[9];
                       } 
                    }
                }
                
                
};
newfuncexareal=new Funcionarios_Exames_Realizados();
                     