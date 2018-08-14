 function responsavel(){
                
                this.inicializa=function(){
                     this.Codigo_Responsavel=0;
                     this.Nome_Responsavel='';
                     this.CPF='';
		     this.RG='';
                     this.Data_Nascimento='';
                     this.Data_Admissao='';
                     this.Funcao='';
                     this.Unidade=0;
                     this.Setor='';
                     this.Cargo='';
                     this.Profissao='';
                     this.Numero_Nit='';
                     this.Numero_Registro='';
                     this.Tipo_Responsavel='';
                     this.Data_Cadastro='';
                     this.Session_id='';
                     this.Ultimo_Usuario='';
                     this.Ultima_Atualizacao=''; 
                     this.Situacao='';
                     this.Id_Usuario='';
                }
                this.get_Codigo_Responsavel= function(){
                    return this.Codigo_Responsavel;
                }
                this.get_Nome_Responsavel= function(){
                    return this.Nome_Responsavel;
                }
                this.get_CPF=function(){
                    return this.CPF;
                }
                this.get_RG=function(){
                    return this.RG;
                }
                this.get_Data_Nascimento=function(){
                    return this.Data_Nascimento;
                }
                  this.get_Data_Admissao=function(){
                    return this.Data_Admissao;
                  }
                this.get_Funcao=function(){
                    return this.Funcao;
                }
                
                this.get_Setor=function(){
                    return this.Setor;
                }
                this.get_Unidade=function(){
                    return this.Unidade;
                }                
                this.get_Cargo=function(){
                    return this.Cargo;
                }
                this.get_Profissao=function(){
                    return this.Profissao;
                }
                this.get_Tipo_Responsavel=function(){
                    return this.Tipo_Responsavel;
                }
                
                this.get_Data_Cadastro=function(){
                    return this.Data_Cadastro;
                }    
                this.get_Session_id=function(){
                    return this.Session_id;
                }         
                this.get_Ultimo_Usuario=function(){
                    return this.Ultimo_Usuario;
                }         
                this.get_Situacao=function(){
                    return this.Situacao;
                }         
                this.get_Numero_Nit=function(){
                    return this.Numero_Nit;
                }         
                
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao;
                }  
                this.get_Ultimo_Usuario=function(){
                    return this.Ultimo_Usuario;
                }  
                this.get_ID_Usuario=function(){
                    return this.Id_Usuario;
                }                  
                
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       this.Codigo_Responsavel=response[0];
                       this.Nome_Responsavel=response[1];
                       this.CPF=response[2];
		       this.RG=response[3];
                       this.Data_Admissao=response[4];
                       this.Funcao=response[5];
                       this.Unidade=response[6];
                       this.Setor=response[7];
                       this.Cargo=response[8];
                       this.Profissao=response[9];
                       this.Numero_Nit=response[10];
                       this.Numero_Registro=response[11];
                       this.Tipo_Responsavel=response[12];
                       this.Data_Cadastro=response[13];
                       this.Session_id=response[14];
                       this.Ultimo_Usuario=response[15];                     
                       this.Ultima_Atualizacao=response[16];
                       this.Situacao=response[17];
                       this.Id_Usuario=response[18];
                    }
                }
            };
             newresponsavel=new responsavel();