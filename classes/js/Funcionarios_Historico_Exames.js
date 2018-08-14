function Funcionarios_Historico_Exames(){
                
                this.inicializa=function(){
                     FHCodigo_Empresa=Array();
                     FHCodigo_Funcionario=Array();
                     FHData_Exame=Array();
                     FHData_Proximo_Exame=Array();
                     FHTipo=Array();
                     FHNatureza_Exame=Array();
                     FHDescricao_Exame=Array();
                     FHResultado=Array();
                     FHCodigo_Profissional_Responsavel=Array();
                     FHNit_Profissional_Responsavel=Array();
                     FHId_Usuario=Array();
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return FHCodigo_Empresa[nlinha];
                }
                this.get_Codigo_Funcionario= function(nlinha){
                    return FHCodigo_Funcionario[nlinha];
                }
                this.get_Data_Exame= function(nlinha){
                    return FHData_Exame[nlinha];
                }
                this.get_Data_Proximo_Exame= function(nlinha){
                    return FHData_Proximo_Exame[nlinha];
                }
                
                this.get_Tipo_Exame= function(nlinha){
                    return FHTipo[nlinha];
                }
                this.get_Natureza_Exame= function(nlinha){
                    return FHNatureza_Exame[nlinha];
                }
                
                this.get_Descricao_Exame= function(nlinha){
                    return FHDescricao_Exame[nlinha];
                }
                this.get_Resultado= function(nlinha){
                    return FHResultado[nlinha];
                }
                this.get_Codigo_Profissional_Responsavel= function(nlinha){
                    return FHCodigo_Profissional_Responsavel[nlinha];
                }
                this.get_Nit_Profissional_Responsavel= function(nlinha){
                    return FHNit_Profissional_Responsavel[nlinha];
                }
                this.get_Id_Usuario= function(nlinha){
                    return FHId_Usuario[nlinha];
                }
                
                this.length=function(){
                    return FHCodigo_Empresa.length;
                }      
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-2;x++){
                           vreg=response[x].split('|');
                           FHCodigo_Empresa[x]=vreg[0];
                           FHCodigo_Funcionario[x]=vreg[1];
                           FHData_Exame[x]=vreg[2];
                           FHData_Proximo_Exame[x]=vreg[3];
                           FHTipo[x]=vreg[4];
                           FHNatureza_Exame[x]=vreg[5];
                           FHResultado[x]=vreg[6];
                           FHCodigo_Profissional_Responsavel[x]=vreg[7];
                           FHNit_Profissional_Responsavel[x]=vreg[8];
                           FHId_Usuario[x]=vreg[9];
                       } 
                    }
                }
                
                
};
newfunchistexam=new Funcionarios_Historico_Exames();
                     