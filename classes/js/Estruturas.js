            function Estruturas(){
                 this.inicializa=function(){
                   this.Codigo_Empresa=Array();
                   this.Codigo_Unidade=Array();
                   this.Codigo_Unidade_Pai=Array();
                   this.Nivel_Organizacao=Array();
                   this.Nivel_Quebra=Array();
                   this.Descricao_Unidade=Array();
                   this.Responsavel=Array();
                   this.Nivel_LTCAT=Array();
                   this.CNPJ_Nivel=Array();
                   this.Possui_Almoxarifado=Array();
                   this.Recebimento_Epis=Array();
                   this.Data_Cadastro=Array();
                   this.Ultima_Atualizacao=Array();
                   this.Ultimo_Usuario=Array();
                   this.Id_Usuario=Array();
                   this.Session_ID=Array();
                   this.Mensagem_Erro='';
                 } 
                this.get_Codigo_Empresa= function(nlinha){
                    return this.Codigo_Empresa[nlinha];
                }
                
                this.get_Codigo_Unidade= function(nlinha){
                    return this.Codigo_Unidade[nlinha];
                }
                this.get_Codigo_Unidade_Pai= function(nlinha){
                    return this.Codigo_Unidade_Pai[nlinha];
                }
                this.get_Responsavel= function(nlinha){
                    return this.Responsavel[nlinha];
                }                
                this.get_Nivel_Organizacao= function(nlinha){
                    return this.Nivel_Organizacao[nlinha];
                }
                this.get_Nivel_Quebra= function(nlinha){
                    return this.Nivel_Quebra[nlinha];
                }
                this.get_Possui_Almoxarifado= function(nlinha){
                    return this.Possui_Almoxarifado[nlinha];
                }
                this.get_Recebimento_Epis= function(nlinha){
                    return this.Recebimento_Epis[nlinha];
                }
                this.get_CNPJ_Nivel= function(nlinha){
                    return this.CNPJ_Nivel[nlinha];
                }
                
                this.get_Nivel_LTCAT= function(nlinha){
                    return this.Nivel_LTCAT[nlinha];
                }
                
                this.get_Descricao_Unidade= function(nlinha){
                    return this.Descricao_Unidade[nlinha];
                }
                this.length=function(){
                    return this.Codigo_Unidade.length;
                }
                this.get_Mensagem_Erro=function(nlinha){
                    return this.Mensagem_Erro;
                }
                this.setId=function(ID){
                    this.Id_Usuario=ID;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|');                        
                           this.Codigo_Empresa[x]=vreg[0];
                           this.Codigo_Unidade[x]=vreg[1];
                           this.Codigo_Unidade_Pai[x]=vreg[2];
                           this.Nivel_Organizacao[x]=vreg[3];
                           this.Nivel_Quebra[x]=vreg[4];
                           this.Descricao_Unidade[x]=vreg[5];
                           this.Responsavel[x]=vreg[6];
                           this.Nivel_LTCAT[x]=vreg[7];
                           this.CNPJ_Nivel[x]=vreg[8];
                           this.Possui_Almoxarifado[x]=vreg[9];
                           this.Recebimento_Epis[x]=vreg[10];
                           this.Data_Cadastro[x]=vreg[11];
                           this.Ultima_Atualizacao[x]=vreg[12];
                           this.Ultimo_Usuario[x]=vreg[13];
                           this.Id_Usuario[x]=vreg[14];
                           this.Session_ID[x]=vreg[15];
                       }    
                    }
                    else {
                        Mensagem_Erro=response[0];
                    }
                }
            };
            newEstruturas=new Estruturas(); 