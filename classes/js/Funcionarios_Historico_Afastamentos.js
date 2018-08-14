function Funcionarios_Historico_Afastamentos(){
                
                this.inicializa=function(){
                     Codigo_Empresa_a=Array();
                     Codigo_Funcionario_a=Array();
                     Data_Inicio_Afastamento_a=Array();
                     Data_Fim_Afastamento_a=Array();
                     Unidade_Afastamento_a=Array();
                     Setor_Afastamento_a=Array();
                     Cargo_Afastamento_a=Array();
                     Funcao_Afastamento_a=Array();
                     CNPJ_CEI_a=Array();
                     CAT_a=Array();
                     Motivo_a=Array();
                     Id_Usuario_a=Array()

                }
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa_a[nlinha];
                }
                this.get_Codigo_Funcionario= function(nlinha){
                    return Codigo_Funcionario_a[nlinha];
                }
                this.get_Data_Inicio_Afastamento= function(nlinha){
                    return Data_Inicio_Afastamento_a[nlinha];
                }
                this.get_Data_Fim_Afastamento= function(nlinha){
                    return Data_Fim_Afastamento_a[nlinha];
                }                
                this.get_Unidade_Afastamento= function(nlinha){
                    return Unidade_Afastamento_a[nlinha];
                }
                this.get_Setor_Afastamento= function(nlinha){
                    return Setor_Afastamento_a[nlinha];
                }
                
                this.get_Cargo_Afastamento= function(nlinha){
                    return Cargo_Afastamento_a[nlinha];
                }
                this.get_Funcao_Afastamento= function(nlinha){
                    return Funcao_Afastamento_a[nlinha];
                }                
                this.get_CNPJ_CEI= function(nlinha){
                    return CNPJ_CEI_a[nlinha];
                }
                this.get_CAT= function(nlinha){
                    return CAT_a[nlinha];
                }
                this.get_CA_EPI= function(nlinha){
                    return CA_Epi_a[nlinha];
                }                
                this.get_Motivo= function(nlinha){
                    return Motivo_a[nlinha];
                }
                this.get_Id_Usuario= function(nlinha){
                    return Id_Usuario_a[nlinha];
                }                
                this.length=function(){
                    return Codigo_Empresa_a.length;
                }                
                      
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-2;x++){
                           vregs=response[x].split('|');
                           Codigo_Empresa_a[x]=vregs[0];
                           Codigo_Funcionario_a[x]=vregs[1];
                           Data_Inicio_Afastamento_a[x]=vregs[2];
                           Data_Fim_Afastamento_a[x]=vregs[3];
                           Unidade_Afastamento_a[x]=vregs[4];
                           Setor_Afastamento_a[x]=vregs[5];
                           Cargo_Afastamento_a[x]=vregs[6];
                           Funcao_Afastamento_a[x]=vregs[7];
                           CNPJ_CEI_a[x]=vregs[8];
                           CAT_a[x]=vregs[9]
                           Motivo_a[x]=vregs[10];
                           Id_Usuario_a[x]=vregs[11];
                       } 
                    }
                }
                
                
};
newfunchistafast=new Funcionarios_Historico_Afastamentos();
                     