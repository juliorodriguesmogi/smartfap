            function Estruturas(){
                 this.inicializa=function(){
                    Codigo_Empresa=Array();
                    Codigo_Unidade=Array();
                    Codigo_Unidade_Pai=Array();
                    Nivel_Organizacao=Array();
                    Nivel_Quebra=Array();
                    Descricao_Unidade=Array();
                    Nivel_LTCAT=Array();
                    CNPJ_Nivel=Array();
                    POSSUI_ALMOXARIFADO=Array();
                    RECEBIMENTO_EPIS=Array();
                    DATA_CADASTRO=Array();
                    ULTIMA_ATUALIZACAO=Array();
                    ULTIMO_USUARIO=Array();
                    ID_USUARIO=Array();
                    SESSION_ID=Array();
                    Mensagem_Erro='';
                 } 
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa[nlinha];
                }
                
                this.get_Codigo_Unidade= function(nlinha){
                    return Codigo_Unidade[nlinha];
                }
                this.get_Codigo_Unidade_Pai= function(nlinha){
                    return Codigo_Unidade_Pai[nlinha];
                }
                this.get_Nivel_Organizacao= function(nlinha){
                    return Nivel_Organizacao[nlinha];
                }
                this.get_Nivel_Quebra= function(nlinha){
                    return Nivel_Quebra[nlinha];
                }
                
                this.get_Descricao_Unidade= function(nlinha){
                    return Descricao_Unidade[nlinha];
                }
                this.length=function(){
                    return Codigo_Unidade.length;
                }
                this.get_Mensagem_Erro=function(nlinha){
                    return Mensagem_Erro;
                }
                this.setId=function(ID){
                    Id_Usuario=ID;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|');                        
                           Codigo_Empresa[x]=vreg[0];
                           Codigo_Unidade[x]=vreg[1];
                           Codigo_Unidade_Pai[x]=vreg[2];
                           Nivel_Organizacao[x]=vreg[3];
                           Nivel_Quebra[x]=vreg[4];
                           Descricao_Unidade[x]=vreg[5];
                       }    
                    }
                    else {
                        Mensagem_Erro=response[0];
                    }
                }
            };
             newEstruturas=new Estruturas();