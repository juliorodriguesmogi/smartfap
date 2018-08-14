            function Usuario(){
                 var Codigo_Usuario=0;
                 var Id_Usuario='';
                 var Usuario='';
                 var Nome_Usuario='';
                 var Grupo='';
                 var Nivel_Acesso='';
                 var Senha='';
                 var Data_Cadastro='';
                 var Session_id='';
                 var Ultimo_Usuario='';
                 var Ultima_Atualizacao='';
                 var Empresa_Ativa='';
                 var Unidade='';
                 
                 var Mensagem_Erro='';
                
                this.get_Codigo_Usuario= function(){
                    return Codigo_Usuario;
                }
                this.get_Id= function(){
                    return Id_Usuario;
                }
                this.get_Usuario= function(){
                    return Usuario;
                }
                this.get_Nome_Usuario=function(){
                    return Nome_Usuario;
                }
                this.get_Grupo=function(){
                    return Grupo;
                }
                this.get_Nivel_Acesso=function(){
                    return Nivel_Acesso;
                }
                this.get_Senha=function(){
                    return Senha;
                }                
                this.get_Data_Cadastro=function(){
                    return Data_Cadastro;
                }    
                this.get_Session_id=function(){
                    return Session_id;
                }         
                this.get_Ultimo_Usuario=function(){
                    return Ultimo_Usuario;
                }         
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }                     
                this.get_Empresa_Ativa=function(){
                    return Empresa_Ativa;
                }                       
                this.get_Unidade=function(){
                    return Unidade;
                }                       
                this.get_Mensagem_Erro=function(){
                    return Mensagem_Erro;
                }
                this.setId=function(ID){
                    Id_Usuario=ID;
                }
                this.setValores=function(response){
                    if (response!='NF'){
                       Codigo_Usuario=response[0];
                       Id_Usuario=response[1];
                       Nome_Usuario=response[2];
                       Senha=response[3];
                       Grupo=response[4];
                       Nivel_Acesso=response[5];
                       Data_Cadastro=response[6];
                       Session_id=response[8];
                       Ultimo_Usuario=response[9];
                       Ultima_Atualizacao=response[10];
                       Empresa_Ativa=response[11];
                       Unidade=response[12];
                    }
                    else {
                        Mensagem_Erro=response[0];
                    }
                }
            };
             newusu=new Usuario();