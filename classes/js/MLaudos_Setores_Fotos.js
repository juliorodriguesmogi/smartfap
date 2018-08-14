function MLaudos_setores_fotos(){
this.inicializa=function(){
                    this.Codigo_Empresa_Setores_Fotos=Array();
                    this.Ano_Pericia_Setores_Fotos=Array();
                    this.Numero_Laudo_Setores_Fotos=Array();
                    this.Revisao_Setores_Fotos=Array();
                    this.Unidade_Setores_Fotos=Array();
                    this.Codigo_Setor_Setores_Fotos=Array();
                    this.Sequencial_Setores_Fotos=Array();
                    this.Caminho_Foto_Setores_Fotos=Array();
                    this.Data_Registro_Setores_Fotos=Array();
                    this.Session_id_Setores_Fotos=Array();
                    this.Ultimo_Usuario_Setores_Fotos=Array();
                    this.Ultima_Atualizacao_Setores_Fotos=Array();
                    this.Id_Usuario_Setores_Fotos=Array();
                     
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return this.Codigo_Empresa_Setores_Fotos[nlinha];
                }                
                this.get_Numero_Laudo= function(nlinha){
                    return this.Numero_Laudo_Setores_Fotos[nlinha];
                }
                this.get_Ano_Pericia= function(nlinha){
                    return this.Ano_Pericia_Setores_Fotos[nlinha];
                }
                this.get_Revisao=function(nlinha){
                    return this.Revisao_Setores_Fotos[nlinha];
                }
                this.get_Unidade=function(nlinha){
                    return this.Unidade_Setores_Fotos[nlinha];
                }
                this.get_Codigo_Setor=function(nlinha){
                    return this.Codigo_Setor_Setores_Fotos[nlinha];
                }
                
                this.get_Sequencial=function(nlinha){
                    return this.Sequencial_Setores_Fotos[nlinha];
                }
                this.get_Caminho_Foto=function(nlinha){
                    return this.Caminho_Foto_Setores_Fotos[nlinha];
                }                
                this.get_Data_Registro=function(nlinha){
                    return this.Data_Registro_Setores_Fotos[nlinha];
                }
                this.get_Session_id=function(nlinha){
                    return this.Session_id_Setores_Fotos[nlinha];
                }         
                this.get_Ultimo_Usuario=function(nlinha){
                    return this.Ultimo_Usuario_Setores_Fotos[nlinha];
                }         
                this.get_Id_Usuario=function(nlinha){
                    return this.Id_Usuario_Setores_Fotos[nlinha];
                }         
                this.length=function(){
                    return this.Codigo_Empresa_Setores_Fotos.length;
                }                
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao_Setores_Fotos[nlinha];
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');
                            this.Codigo_Empresa_Setores_Fotos[x]=vreg[0];
                            this.Ano_Pericia_Setores_Fotos[x]=vreg[1];
                            this.Numero_Laudo_Setores_Fotos[x]=vreg[2];
                            this.Revisao_Setores_Fotos[x]=vreg[3];
                            this.Unidade_Setores_Fotos[x]=vreg[4];
                            this.Codigo_Setor_Setores_Fotos[x]=vreg[5];
                            this.Sequencial_Setores_Fotos[x]=vreg[6];
                            this.Caminho_Foto_Setores_Fotos[x]=vreg[7];
                            this.Id_Usuario_Setores_Fotos[x]=vreg[8];
                            this.Session_id_Setores_Fotos[x]=vreg[9];
                            this.Ultima_Atualizacao_Setores_Fotos[x]=vreg[10];
                            this.Ultimo_Usuario_Setores_Fotos[x]=vreg[11];                     
                            
                            
                       }     
                    }
                }
            };
             newlaudosetfoto=new MLaudos_setores_fotos();

