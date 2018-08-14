function MLaudos(){
                
                this.inicializa=function(){
                     this.Codigo_Empresa=0;
                     this.Ano_Pericia=0;
                     this.Nome_Empresa="";
                     this.CNPJ_CEI='';
                     this.CNAE='';
                     this.Grau_Risco='';
                     this.Numero_Funcionarios=0;
                     this.Numero_Laudo=0;
                     this.Revisao=0;
                     this.Situacao='';
                     this.Data_Laudo='';
                     this.Data_Criacao='';
                     this.Data_Pericia='';
                     this.Session_id='';
                     this.Id_Usuario='';
                     this.Ultima_Atualizacao='';
                     this.Ultimo_Usuario='';
                     this.Endereco='';
                     this.Bairro='';
                     this.Municipio='';
                     this.UF='';
                     this.CEP='';
                }
                this.get_Codigo_Empresa= function(){
                    return this.Codigo_Empresa;
                }
                this.get_Endereco= function(){
                    return this.Endereco;
                }
                 this.get_Bairro= function(){
                    return this.Bairro;
                }
                 this.get_Municipio= function(){
                    return this.Municipio;
                }
                 this.get_UF= function(){
                    return this.UF;
                }
                 this.get_CEP= function(){
                    return this.CEP;
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
                this.get_Data_Laudo=function(){
                    return this.Data_Laudo;
                }                   
                this.get_Data_Criacao=function(){
                    return this.Data_Criacao;
                }                   
                this.get_Data_Pericia=function(){
                    return this.Data_Pericia;
                }                   
                
                this.get_CNPJ_CEI=function(){
                    return this.CNPJ_CEI;
                }                                   
                this.get_CNAE=function(){
                    return this.CNAE;
                }                                   

                this.get_Session_id=function(){
                    return this.Session_id;
                }         
                this.get_Ultimo_Usuario=function(){
                    return this.Ultimo_Usuario;
                }         
                this.get_Nome_Empresa=function(){
                    return this.Nome_Empresa;
                }
                this.get_Situacao=function(){
                    return this.Situacao;
                }         
                this.get_Grau_Risco=function(){
                    return this.Grau_Risco;
                }
                this.get_Numero_Funcionarios=function(){
                    return this.Numero_Funcionarios;
                }
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       this.Codigo_Empresa=response[0];
                       this.Ano_Pericia=response[1];
                       this.Numero_Laudo=response[2];
                       this.Revisao=response[3];
                       this.Situacao=response[4];
                       this.Nome_Empresa=response[5];
                       this.CNPJ_CEI=response[6];
                       this.CNAE=response[7];
                       this.Grau_Risco=response[8];
                       this.Data_Laudo=response[10];
                       this.Data_Criacao=response[11];
                       this.Data_Pericia=response[12];
                       this.ID_Usuario=response[13];
                       this.Session_id=response[14];
                       this.Ultima_Atualizacao=response[15];
                       this.Ultimo_Usuario=response[16];                     
                       this.Numero_Funcionarios=response[17];
                       this.Endereco=response[18];
                       this.Bairro=response[19];
                       this.Municipio=response[20];
                       this.CEP=response[21];
                       this.UF=response[22];
                       
                       
                       
                          
                    }
                }
            };
             newlaudo=new MLaudos();