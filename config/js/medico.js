            function medico(){
                
                this.inicializa=function(){
                     Codigo_Medico=0;
                     Nome_Profissional='';
                     Cpf='';
		     Cep='';
                     M_Area_Atuacao='';
                     Tipo_Logradouro='';
                     Endereco='';
                     Numero='';
                     Nit='';
                     Crm='';
                     Bairro='';
                     Municipio='';
                     UF='';
                     Observacao='';
                     Data_Cadastro='';
                     Session_id='';
                     Ultimo_Usuario='';
                     Ultima_Atualizacao=''; 
                     Id_Usuario='';
                     Situacao='';
                     Codigo_Empresa='';
                     Razao_Social='';
                     CNPJ='';
                }
                this.get_Codigo_Medico= function(){
                    return Codigo_Medico;
                }
                this.get_Nome_Profissional= function(){
                    return Nome_Profissional;
                }
                this.get_Cpf=function(){
                    return Cpf;
                }
                this.get_Cep=function(){
                    return Cep;
                }
                this.get_Nit=function(){
                    return Nit;
                }
                this.get_Tipo_Logradouro=function(){
                    return Tipo_Logradouro;
                }
                this.get_Crm=function(){
                    return Crm;
                }
                this.get_Endereco=function(){
                    return Endereco;
                }
                this.get_Numero=function(){
                    return Numero;
                }
                
                  this.get_Area_Atuacao=function(){
                    return M_Area_Atuacao;
                  }
                this.get_Bairro=function(){
                    return Bairro;
                }
                this.get_Municipio=function(){
                    return Municipio;
                }
                this.get_Observacao=function(){
                    return Observacao;
                }
                this.get_UF=function(){
                    return UF;
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
                this.get_Id_Usuario=function(){
                    return Id_Usuario;
                }         
                this.get_Situacao=function(){
                    return Situacao;
                }         
                this.get_Empresa=function(){
                    return Codigo_Empresa;
                }    
                this.get_Razao_Social=function(){
                    return Razao_Social;
                }    
                this.get_CNPJ=function(){
                    return CNPJ;
                }    
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_Medico=response[0];
                       Nome_Profissional=response[1];
                       M_Area_Atuacao=response[2];
                       Tipo_Logradouro=response[3];
                       Endereco=response[4];
                       Numero=response[5];
                       Bairro=response[6];
                       Municipio=response[7];
                       UF=response[8];
                       Cep=response[9];
                       Observacao=response[10];
                       Cpf=response[11];   
                       Crm=response[12];
                       Data_Cadastro=response[13];
                       Ultima_Atualizacao=response[14];
                       Ultimo_Usuario=response[15];                     
                       Id_Usuario=response[16];
                       Session_id=response[17];
                       Nit=response[18];                       
                       Situacao=response[19];
                       Codigo_Empresa=response[20];
                       Razao_Social=response[22];
                       CNPJ=response[21];
                    }
                }
            };
             newmedico=new medico();