   function laudo_responsaveis(){
                
                this.inicializa=function(){
                     this.Codigo_Empresa=0;
                     this.Ano_Pericia='';
                     this.Numero_Laudo='';
		     this.Revisao='';
                     this.Codigo_Responsavel='';
                     this.Data_Criacao='';
                     this.Session_id='';
                     this.Ultimo_Usuario='';
                     this.Ultima_Atualizacao=''; 
                     this.Id_Usuario='';
                     
                }
                this.get_Numero_Laudo= function(){
                    return this.Numero_Laudo;
                }
                this.get_Ano_Pericia= function(){
                    return this.Ano_Pericia;
                }
                this.get_Revisao=function(){
                    return this.Revisao;
                }
                this.get_Codigo_Responsavel=function(){
                    return this.Codigo_Responsavel;
                }
                this.get_Data_Criacao=function(){
                    return this.Data_Criacao;
                }
               
                this.get_Session_id=function(){
                    return this.Session_id;
                }         
                this.get_Ultimo_Usuario=function(){
                    return this.Ultimo_Usuario;
                }         
                this.get_Id_Usuario=function(){
                    return this.Id_Usuario;
                }         
               
                
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       this.Ano_Pericia=response[1];
                       this.Numero_Laudo=response[2];
                       this.Revisao=response[3];
                       this.Codigo_Responsavel=response[4];
                       this.Data_Criacao=response[5];
                       this.Ultima_Atualizacao=response[8];
                       this.Ultimo_Usuario=response[9];                     
                       this.Id_Usuario=response[6];
                       this.Session_id=response[7];
                 

                    }
                }
            };
             newlaudorespons =new laudo_responsaveis();