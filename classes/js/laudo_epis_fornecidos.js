   function laudo(){
                
                this.inicializa=function(){
                     Codigo_Empresa=0;
                    Numero_Laudo='';
                         Revisao='';
		 Ano_Pericia='';
                 Codigo_Funcao='';
                 Codigo_Setor='';
                     Unidade='';
                     
                    Codigo_EPI='';
                    Descricao_EPI='';
                    Categoria_Protecao='';
                    Nivel_Protecao='';
                     Session_id='';
                     Ultimo_Usuario='';
                     Ultima_Atualizacao=''; 
                     Id_Usuario='';
                     
                }
                this.get_Numero_Laudo= function(){
                    return Numero_Laudo;
                }
                this.get_Ano_Pericia= function(){
                    return Ano_Pericia;
                }
                this.get_Revisao=function(){
                    return Revisao;
                }
                 this.get_Codigo_Funcao=function(){
                    return Codigo_Funcao;
                } 
                this.get_Codigo_Setor=function(){
                    return Codigo_Setor;
                }
                this.get_Unidade=function(){
                    return Unidade;
                }
              
                 this.get_Codigo_EPI=function(){
                    return Codigo_EPI;
                }
                  this.get_Descricao_EPI=function(){
                    return Descricao_EPI;
                }
                    this.get_Categoria_Protecao=function(){
                    return  Categoria_Protecao;
                }
                    this.get_Nivel_Protecao=function(){
                    return  Nivel_Protecao;
                }
                this.get_Session_id=function(){
                    return Session_id;
                }         
                this.get_Ultimo_Usuario=function(){
                    return Ultimo_Usuario;
                }         
                this.get_Id_Usuario=function(){
                    return Id_Usuario;
                }         
               
                
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Numero_Laudo=response[1];
                       Ano_Pericia=response[2];
                       Unidade=response[6];
                       Revisao=response[3];
                        Codigo_Funcao=[4];
                 Codigo_Setor=[5];
                       
                       Codigo_EPI=response[7];
                      Descricao_EPI=[8];
                    Categoria_Protecao=[9];
                    Nivel_Protecao=[10];
                       Ultima_Atualizacao=response[13];
                       Ultimo_Usuario=response[14];                     
                       Id_Usuario=response[11];
                       Session_id=response[12];
                 

                    }
                }
            };
             newlaudo=new laudo();
             