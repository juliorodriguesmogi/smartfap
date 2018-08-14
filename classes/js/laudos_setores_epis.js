function laudo(){
                
                this.inicializa=function(){
                    Codigo_Empresa=0;
                    Numero_Laudo='';
                    Revisao='';
		    Ano_Pericia='';
                 
                    Codigo_Setor='';
                    Unidade='';                     
                    Codigo_epi='';
                    Tipo_Protecao='';
                    Data_Registro='';
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
                 this.get_Data_Registro=function(){
                    return Data_Registro;
                } 
                this.get_Codigo_Setor=function(){
                    return Codigo_Setor;
                }
                this.get_Unidade=function(){
                    return Unidade;
                }
              
                 this.get_Codigo_epi=function(){
                    return Codigo_epi;
                }
                  this.get_Tipo_Protecao=function(){
                    return Tipo_Protecao;
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
                       Ano_Pericia=response[3];
                       Unidade=response[5];
                       Revisao=response[2];
                        Tipo_Protecao=[7];
                 Codigo_Setor=[4];
                         Codigo_epi=[6];
                    Data_Registro=[8];
                       
                       Ultima_Atualizacao=response[11];
                       Ultimo_Usuario=response[12];                     
                       Id_Usuario=response[9];
                       Session_id=response[10];
                 

                    }
                }
            };
             newlaudo=new laudo();



