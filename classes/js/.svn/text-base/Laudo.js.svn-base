 function laudo(){
                
                this.inicializa=function(){
                     Codigo_Empresa=0;
                     Nome_Empresa="";
                     CNPJ_CEI='';
                     CNAE='';
                     Grau_Risco='';
                     Numero_Funcionarios=0;
                     Numero_Laudo=0;
                     Ano_Exercicio=0;
                     Revisao=0;
                     Situacao='';
                     Data_Laudo='';
                     Data_Criacao='';
                     Session_id='';
                     Id_Usuario='';
                     Ultima_Atualizacao='';
                     Ultimo_Usuario='';
                     
                }
                this.get_Codigo_Empresa= function(){
                    return Codigo_Empresa;
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
                this.get_Data_Laudo=function(){
                    return Data_Laudo;
                }                   
                this.get_Data_Criacao=function(){
                    return Data_Criacao;
                }                   
                this.get_CNPJ_CEI=function(){
                    return CNPJ_CEI;
                }                                   
                this.get_CNAE=function(){
                    return CNAE;
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
                this.get_Numero_Funcionarios=function(){
                    return Numero_Funcionarios;
                }
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_Empresa=response[0];
                       Numero_Laudo=response[1];
                       Ano_Exercicio=response[2];
                       Revisao=response[3];
                       Situacao=response[4];
                       CNPJ_CEI=response[5];
                       CNAE=response[6];
                       Data_Laudo=response[7];
                       Data_Criacao=response[8];
                       Ultima_Atualizacao=response[9];
                       Session_id=response[10];
                       Ultimo_Usuario=response[11];                     
                       Numero_Funcionarios=response[12];
                          
                    }
                }
            };
             newlaud=new laudo();