function laudo_setores_fotos(){
                
                this.inicializa=function(){
                    Codigo_Empresa=0;
                    Numero_Laudo='';
                    Revisao='';
		    Ano_Exercicio='';
                 
                    Codigo_Setor='';
                    Unidade='';                     
                    Sequencia='';
                    Caminho_Foto='';
                   
                    Session_id='';
                    Ultimo_Usuario='';
                    Ultima_Atualizacao=''; 
                    Id_Usuario='';
                     
                }
                this.get_Numero_Laudo= function(){
                    return Numero_Laudo;
                }
                this.get_Ano_Exercicio= function(){
                    return Ano_Exercicio;
                }
                this.get_Revisao=function(){
                    return Revisao;
                }
            
                this.get_Codigo_Setor=function(){
                    return Codigo_Setor;
                }
                this.get_Unidade=function(){
                    return Unidade;
                }
              
                 this.get_Sequencia=function(){
                    return Sequencia;
                }
                  this.get_Caminho_Foto=function(){
                    return Caminho_Foto;
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
                       Ano_Exercicio=response[3];
                       Unidade=response[4];
                       Revisao=response[2];
                     
                 Codigo_Setor=[5];
                         Sequencia=[6];
                    Caminho_Foto=[7];
                       
                       Ultima_Atualizacao=response[10];
                       Ultimo_Usuario=response[11];                     
                       Id_Usuario=response[8];
                       Session_id=response[9];
                 

                    }
                }
            };
             newlaudosetfor=new laudo_setores_foto();

