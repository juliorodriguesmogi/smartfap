function laudo_setores_epis(){
                
                this.inicializa=function(){
                    this.Codigo_Empresa=0;
                    this.Numero_Laudo='';
                    this.Revisao='';
		    this.Ano_Pericia='';
                    this.Codigo_Setor='';
                    this.Unidade='';                     
                    this.Codigo_epi='';
                    this.Tipo_Protecao='';
                    this.Data_Registro='';
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
                 this.get_Data_Registro=function(){
                    return this.Data_Registro;
                } 
                this.get_Codigo_Setor=function(){
                    return this.Codigo_Setor;
                }
                this.get_Unidade=function(){
                    return this.Unidade;
                }
                 this.get_Codigo_epi=function(){
                    return this.Codigo_epi;
                }
                  this.get_Tipo_Protecao=function(){
                    return this.Tipo_Protecao;
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
                       this.Numero_Laudo=response[1];
                       this.Ano_Pericia=response[3];
                       this.Unidade=response[5];
                       this.Revisao=response[2];
                       this.Tipo_Protecao=[7];
                       this.Codigo_Setor=[4];
                       this.Codigo_epi=[6];
                       this.Data_Registro=[8];
                       this.Ultima_Atualizacao=response[11];
                       this.Ultimo_Usuario=response[12];                     
                       this.Id_Usuario=response[9];
                       this.Session_id=response[10];
                    }
                }
            };
             newlaudosetepis=new laudo_setores_epis();



