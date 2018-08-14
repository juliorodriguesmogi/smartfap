   function laudo(){
                
                this.inicializa=function(){
                     Codigo_Empresa=0;
                    Numero_Laudo='';
                     Ano_Exercicio='';
		     Revisao='';
                    Codigo_Instrumento='';
                     Data_Criacao='';
                    
                    
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
                this.get_Codigo_Instrumento=function(){
                    return Codigo_Instrumento;
                }
                this.get_Data_Criacao=function(){
                    return Data_Criacao;
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
                       Ano_Exercicio=response[2];
                       Revisao=response[3];
                       Codigo_Instrumento=response[4];
                       Data_Criacao=response[5];
                      
                       Ultima_Atualizacao=response[8];
                       Ultimo_Usuario=response[9];                     
                       Id_Usuario=response[6];
                       Session_id=response[7];
                 

                    }
                }
            };
             newlaudo=new laudo();