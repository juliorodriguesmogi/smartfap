 function exame(){
                
                this.inicializa=function(){
                     Codigo_Exame=0;
                     Nome='';
                     Descricao='';
                     Data_Cadastro='';
                     Session_id='';
                     Ultimo_Usuario='';
                     Ultima_Atualizacao=''; 
                     Situacao='';
                }
                this.get_Codigo_Exame= function(){
                    return Codigo_Exame;
                }
                this.get_Nome= function(){
                    return Nome;
                }
               this.get_Descricao= function(){
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
                this.get_Situacao=function(){
                    return Situacao;
                }         
                
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_Exame=response[0];
                       Nome=response[1];
                       Descricao=response[2];
                       Data_Cadastro=response[3];
                       Ultima_Atualizacao=response[6];
                       Session_id=response[4];
                       Ultimo_Usuario=response[5];                     
                       Situacao=response[15];
                       Nit=response[16];
                    }
                }
            };
             newexame=new exame();