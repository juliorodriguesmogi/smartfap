            function medicos(){
                
                this.inicializa=function(){
                     Codigo_Medico=Array();
                     Nome_Profissional=Array();
                     Cpf=Array();
		     Cep=Array();
                     M_Area_Atuacao=Array();
                     Tipo_Logradouro=Array();
                     Endereco=Array();
                     Numero=Array();
                     Nit=Array();
                     Crm=Array();
                     Bairro=Array();
                     Municipio=Array();
                     UF=Array();
                     Observacao=Array();
                     Data_Cadastro=Array();
                     Session_id=Array();
                     Ultimo_Usuario=Array();
                     Ultima_Atualizacao=Array();
                     Id_Usuario=Array();
                     Situacao=Array();
                     Codigo_Empresa=Array();
                     Razao_Social=Array();
                     CNPJ=Array();
                }
                this.get_Codigo_Medico= function(nlinha){
                    return Codigo_Medico[nlinha];
                }
                this.get_Nome_Profissional= function(nlinha){
                    return Nome_Profissional[nlinha];
                }
                this.get_Cpf=function(nlinha){
                    return Cpf[nlinha];
                }
                this.get_Cep=function(nlinha){
                    return Cep[nlinha];
                }
                this.get_Nit=function(nlinha){
                    return Nit[nlinha];
                }
                this.get_Tipo_Logradouro=function(nlinha){
                    return Tipo_Logradouro[nlinha];
                }
                this.get_Crm=function(nlinha){
                    return Crm[nlinha];
                }
                this.get_Endereco=function(nlinha){
                    return Endereco[nlinha];
                }
                this.get_Numero=function(nlinha){
                    return Numero[nlinha];
                }
                
                  this.get_Area_Atuacao=function(nlinha){
                    return M_Area_Atuacao[nlinha];
                  }
                this.get_Bairro=function(nlinha){
                    return Bairro[nlinha];
                }
                this.get_Municipio=function(nlinha){
                    return Municipio[nlinha];
                }
                this.get_Observacao=function(nlinha){
                    return Observacao[nlinha];
                }
                this.get_UF=function(nlinha){
                    return UF[nlinha];
                }            
                this.get_Data_Cadastro=function(nlinha){
                    return Data_Cadastro[nlinha];
                }    
                this.get_Session_id=function(nlinha){
                    return Session_id[nlinha];
                }         
                this.get_Ultimo_Usuario=function(nlinha){
                    return Ultimo_Usuario[nlinha];
                }         
                this.get_Id_Usuario=function(nlinha){
                    return Id_Usuario[nlinha];
                }         
                this.get_Situacao=function(nlinha){
                    return Situacao[nlinha];
                }         
                this.get_Empresa=function(nlinha){
                    return Codigo_Empresa[nlinha];
                }    
                this.get_Razao_Social=function(nlinha){
                    return Razao_Social[nlinha];
                }    
                this.get_CNPJ=function(nlinha){
                    return CNPJ[nlinha];
                }    
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }  
                this.length=function(){
                    return Codigo_Medico.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response[0]!='NF'){
                       for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');
                            Codigo_Medico[x]=vreg[0];
                            Nome_Profissional[x]=vreg[1];
                            M_Area_Atuacao[x]=vreg[2];
                            Tipo_Logradouro[x]=vreg[3];
                            Endereco[x]=vreg[4];
                            Numero[x]=vreg[5];
                            Bairro[x]=vreg[6];
                            Municipio[x]=vreg[7];
                            UF[x]=vreg[8];
                            Cep[x]=vreg[9];
                            Observacao[x]=vreg[10];
                            Cpf[x]=vreg[11];   
                            Crm[x]=vreg[12];
                            Data_Cadastro[x]=vreg[13];
                            Ultima_Atualizacao[x]=vreg[14];
                            Ultimo_Usuario[x]=vreg[15];                     
                            Id_Usuario[x]=vreg[16];
                            Session_id[x]=vreg[17];
                            Nit[x]=vreg[18];                       
                            Situacao[x]=vreg[19];
                            Codigo_Empresa[x]=vreg[20];
                            Razao_Social[x]=vreg[22];
                            CNPJ[x]=vreg[21];
                    }
                    }
                }
            };
             newmedicos=new medicos();