function setor(){
                
                this.inicializa=function(){
                     Codigo_Empresa=0;
                     Unidade=0;
                     Codigo_Setor=0;
                     Nome_Setor='';
                     Descricao='';
                     Data_Cadastro='';
                     Ultimo_Usuario='';
                     Ultima_Atualizacao=''; 
                     Nivel_Impressao_Laudo='';
                     Situacao='';
                     Session_id='';
                     Id_Usuario='';
                     Ultima_Atualizacao='';
                     Ultimo_Usuario='';
                     Grau_Exposicao='';
                     
                }
                this.get_Codigo_Empresa= function(){
                    return Codigo_Empresa;
                }

                this.get_Codigo_Setor= function(){
                    return Codigo_Setor;
                }
                
                this.get_Unidade= function(){
                    return Unidade;
                }
                this.get_Nome_Setor=function(){
                    return Nome_Setor;
                }
                this.get_Descricao=function(){
                    return Descricao;
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
                this.get_Nivel_Impressao_Laudo=function(){
                    return Nivel_Impressao_Laudo;
                }         
                
                this.get_Situacao=function(){
                    return Situacao;
                }         
                this.get_Grau_Exposicao=function(){
                    return Grau_Exposicao;
                }                   
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_Enmpresa=response[0];
                       Unidade=response[1];
                       Codigo_Setor=response[2];
                       Nome_Setor=response[3];
                       Descricao=response[4];
                       Data_Cadastro=response[5];
                       Id_Usuario=response[6];
                       Session_id=response[7];
                       Ultima_Atualizacao=response[8];
                       Ultimo_Usuario=response[9];                     
                       Nivel_Impressao_Laudo=response[10];
                       Situacao=response[11];
                       Grau_Exposicao=response[12];
                    }
                }
            };
            
             newsetor=new setor();


