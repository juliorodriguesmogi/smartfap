 function fabrica(){
                
                this.inicializa=function(){
                     Codigo_Fabricante=0;
                     Nome='';
                     Descricao='';
                     cnpj='';
                     Data_Cadastro='';
                     Session_id='';
                     Ultimo_Usuario='';
                     Ultima_Atualizacao=''; 
                     Situacao='';
                }
                this.get_Codigo_Fabricante= function(){
                    return Codigo_Fabricante;
                }
                this.get_Nome= function(){
                    return Nome;
                }
               this.get_Descricao= function(){
                    return Descricao;
                }
                this.get_cnpj= function(){
                    return cnpj;
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
                       Codigo_Fabricante=response[0];
                       Nome=response[1];
                       Descricao=response[2];
                       cnpj=response[3];
                       Data_Cadastro=response[4];
                       Ultima_Atualizacao=response[5];
                       Session_id=response[6];
                       Ultimo_Usuario=response[7];                     
                       Situacao=response[8];
                    }
                }
            };
             newusu=new fabrica();