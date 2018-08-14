            function Funcao(){
                  this.inicializa=function(){
                      Codigo_Empresa=0;
                      Codigo_Funcao=0;
                      Descricao_Funcao_Empresa='';
                      Codigo_Atividade='';
                      Classificacao_Funcao='';
                      Codigo_CBO_Familia='';
                      Codigo_CBO_Ocupacao='';
                      Codigo_CBO_Sinonimo='';
                      Descricao_CBO_Familia='';
                      Descricao_CBO_Ocupacao='';
                      Descricao_CBO_Sinonimo='';
                      Descricao_LTCAT='';
                      Data_Cadastro='';
                      Session_id='';
                      Ultimo_Usuario='';
                      Id_Usuario='';
                      Ultima_Atualizacao='';
                      Cargo_Funcao='';
                  }    
                 
                this.get_Codigo_Empresa= function(){
                    return Codigo_Empresa;
                }
                this.get_Codigo_Funcao= function(){
                    return Codigo_Funcao;
                }
                this.get_Descricao= function(){
                    return Descricao_Funcao_Empresa;
                }
                this.get_Codigo_Atividade= function(){
                    return Codigo_Atividade;
                }
                this.get_Classificacao= function(){
                    return Classificacao_Funcao;
                }
                this.get_Codigo_CBO_Familia= function(){
                    return Codigo_CBO_Familia;
                }
                this.get_Codigo_CBO_Ocupacao= function(){
                    return Codigo_CBO_Ocupacao;
                }
                this.get_Codigo_CBO_Sinonimo= function(){
                    return Codigo_CBO_Sinonimo;
                }
                this.get_Descricao_CBO_Familia= function(){
                    return Descricao_CBO_Familia;
                }
                this.get_Descricao_CBO_Ocupacao= function(){
                    return Descricao_CBO_Ocupacao;
                }
                this.get_Descricao_CBO_Sinonimo= function(){
                    return Descricao_CBO_Sinonimo;
                }
 
                this.get_Data_Cadastro=function(){
                    return Data_Cadastro;
                }    
                this.get_Descricao_LTCAT= function(){
                    return Descricao_LTCAT;
                }                
                this.get_Session_id=function(){
                    return Session_id;
                }         
                this.get_Id_Usuario=function(){
                    return Id_Usuario;
                }         
                this.get_Ultimo_Usuario=function(){
                    return Ultimo_Usuario;
                }         
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }                         
                this.get_Cargo_Funcao=function(){
                    return Cargo_Funcao;
                }    
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_Empresa=response[0];
                       Codigo_Funcao=response[1];
                       Descricao_Funcao_Empresa=response[2];
                       Classificacao_Funcao=response[3];
                       Codigo_CBO_Familia=response[4];
                       Codigo_CBO_Ocupacao=response[5];
                       Codigo_CBO_Sinonimo=response[6];
                       Descricao_CBO_Familia=response[7];
                       Descricao_CBO_Ocupacao=response[8];
                       Descricao_CBO_Sinonimo=response[9];
                       Data_Cadastro=response[13];
                       Ultima_Atualizacao=response[14];
                       Ultimo_Usuario=response[15];
                       Id_Usuario=response[16];
                       Descricao_LTCAT=response[17];
                       Cargo_Funcao=response[18];
                    }
                }
            };
             newfunc=new Funcao();