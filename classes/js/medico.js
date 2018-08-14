            function medico(){
                
                this.inicializa=function(){
                     this.Codigo_Medico=0;
                     this.Nome_Profissional='';
                     this.Cpf='';
		     this.Cep='';
                     this.M_Area_Atuacao='';
                     this.Tipo_Logradouro='';
                     this.Endereco='';
                     this.Numero='';
                     this.Nit='';
                     this.Crm='';
                     this.Bairro='';
                     this.Municipio='';
                     this.UF='';
                     this.Observacao='';
                     this.Data_Cadastro='';
                     this.Session_id='';
                     this.Ultimo_Usuario='';
                     this.Ultima_Atualizacao=''; 
                     this.Id_Usuario='';
                     this.Situacao='';
                     this.Codigo_Empresa='';
                     this.Razao_Social='';
                     this.CNPJ='';
                }
                this.get_Codigo_Medico= function(){
                    return this.Codigo_Medico;
                }
                this.get_Nome_Profissional= function(){
                    return this.Nome_Profissional;
                }
                this.get_Cpf=function(){
                    return this.Cpf;
                }
                this.get_Cep=function(){
                    return this.Cep;
                }
                this.get_Nit=function(){
                    return this.Nit;
                }
                this.get_Tipo_Logradouro=function(){
                    return this.Tipo_Logradouro;
                }
                this.get_Crm=function(){
                    return this.Crm;
                }
                this.get_Endereco=function(){
                    return this.Endereco;
                }
                this.get_Numero=function(){
                    return this.Numero;
                }
                
                  this.get_Area_Atuacao=function(){
                    return this.M_Area_Atuacao;
                  }
                this.get_Bairro=function(){
                    return this.Bairro;
                }
                this.get_Municipio=function(){
                    return this.Municipio;
                }
                this.get_Observacao=function(){
                    return this.Observacao;
                }
                this.get_UF=function(){
                    return this.UF;
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
                this.get_Id_Usuario=function(){
                    return this.Id_Usuario;
                }         
                this.get_Situacao=function(){
                    return this.Situacao;
                }         
                this.get_Empresa=function(){
                    return this.Codigo_Empresa;
                }    
                this.get_Razao_Social=function(){
                    return this.Razao_Social;
                }    
                this.get_CNPJ=function(){
                    return this.CNPJ;
                }    
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       this.Codigo_Medico=response[0];
                       this.Nome_Profissional=response[1];
                       this.M_Area_Atuacao=response[2];
                       this.Tipo_Logradouro=response[3];
                       this.Endereco=response[4];
                       this.Numero=response[5];
                       this.Bairro=response[6];
                       this.Municipio=response[7];
                       this.UF=response[8];
                       this.Cep=response[9];
                       this.Observacao=response[10];
                       this.Cpf=response[11];   
                       this.Crm=response[12];
                       this.Data_Cadastro=response[13];
                       this.Ultima_Atualizacao=response[14];
                       this.Ultimo_Usuario=response[15];                     
                       this.Id_Usuario=response[16];
                       this.Session_id=response[17];
                       this.Nit=response[18];                       
                       this.Situacao=response[19];
                       this.Codigo_Empresa=response[20];
                       this.Razao_Social=response[22];
                       this.CNPJ=response[21];
                    }
                }
            };
             newmedico=new medico();