            function Empresa(){
                
                this.inicializa=function(){
                     Codigo_Empresa=0;
                     Nome_Fantasia='';
                     Razao_Social='';
                     cnpj='';
                     Endereco_Comercial='';
                     Bairro='';
                     Municipio='';
                     UF='';
                     Grau_Risco=0;
                     Numero_Funcs=0;
                     CNAE='';
                     Inscricao_Estadual='';
                     Inscricao_Municipal='';
                     Data_Cadastro='';
                     Session_id='';
                     Ultimo_Usuario='';
                     Ultima_Atualizacao=''; 
                     Situacao='';
                     UF_Comercial='';
                     UF_Atuacao='';
                     Endereco_Atuacao=''
                     Bairro_Comercial='';
                     Bairro_Atuacao='';
                     CEP_Comercial='';
                     CEP_Atuacao='';
                     Municipio_Comercial='';
                     Municipio_Atuacao='';
                     Tipo_Logradouro_Comercial='';
                     Tipo_Logradouro_Atuacao='';
                     Nro_Comercial='';
                     Nro_Atuacao='';
                     Nome_Responsavel='';
                     NIT_Responsavel='';
                     Empresa_Contrato='';
                     Complemento_Atuacao='';
                     Complemento_Comercial='';
                }
                this.get_Codigo_Empresa= function(){
                    return Codigo_Empresa;
                }
                this.get_Nome_Fantasia= function(){
                    return Nome_Fantasia;
                }
                this.get_Razao_Social= function(){
                    return Razao_Social;
                }
                this.get_CNPJ=function(){
                    return cnpj;
                }
                this.get_Endereco_Comercial=function(){
                    return Endereco_Comercial;
                }
                this.get_Bairro=function(){
                    return Bairro;
                }
                this.get_Municipio=function(){
                    return Municipio;
                }
                this.get_UF=function(){
                    return UF;
                }            
                this.get_Grau_Risco=function(){
                    return Grau_Risco;
                }            
                this.get_CNAE=function(){
                    return CNAE;
                }                  
                this.get_Inscricao_Estadual=function(){
                    return Inscricao_Estadual;
                }  
                this.get_Inscricao_Municipal=function(){
                    return Inscricao_Municipal;
                }      
                this.get_Numero_Funcs=function(){
                    return Numero_Funcs;
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
 
                this.get_UF_Comercial=function(){
                    return UF_Comercial;
                }    
                this.get_UF_Atuacao=function(){
                    return UF_Atuacao;
                }    
                this.get_Endereco_Atuacao=function(){
                    return Endereco_Atuacao;
                }
                this.get_Bairro_Comercial=function(){
                    return Bairro_Comercial;
                }
                this.get_Bairro_Atuacao=function(){
                    return Bairro_Atuacao;
                }
                this.get_CEP_Comercial=function(){
                    return CEP_Comercial;
                }
                this.get_CEP_Atuacao=function(){
                    return CEP_Atuacao;
                }
                this.get_Municipio_Comercial=function(){
                    return Municipio_Comercial;
                }
                this.get_Municipio_Atuacao=function(){
                    return Municipio_Atuacao;
                }
                this.get_Tipo_Logradouro_Comercial=function(){
                    return Tipo_Logradouro_Comercial;
                }
                this.get_Tipo_Logradouro_Atuacao=function(){
                    return Tipo_Logradouro_Atuacao;
                }
                this.get_Nro_Comercial=function(){
                    return Nro_Comercial;
                }
                this.get_Nro_Atuacao=function(){
                    return Nro_Atuacao;
                }
                this.get_Nome_Responsavel=function(){
                    return Nome_Responsavel;
                }
                this.get_NIT_Responsavel=function(){
                    return NIT_Responsavel;
                }
                this.get_Complemento_Atuacao=function(){
                    return Complemento_Atuacao;
                }
                this.get_Complemento_Comercial=function(){
                    return Complemento_Comercial;
                }
                this.get_Empresa_Contrato=function(){
                    return Empresa_Contrato;
                }
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_Empresa=response[0];
                       Nome_Fantasia=response[1];
                       Razao_Social=response[2];
                       cnpj=response[3];
                       Endereco_Comercial=response[4];
                       Bairro=response[5];
                       Municipio=response[6];
                       UF=response[7];
                       Grau_Risco=response[8];
                       CNAE=response[9];
                       Inscricao_Estadual=response[10];
                       Inscricao_Municipal=response[11];
                       Numero_Funcs=response[12];
                       Data_Cadastro=response[13];
                       Ultima_Atualizacao=response[14];
                       Session_id=response[15];
                       Ultimo_Usuario=response[16];                     
                       Situacao=response[17];
                       UF_Comercial=response[18];
                       UF_Atuacao=response[19];
                       Endereco_Atuacao=response[20];
                       Bairro_Comercial=response[21];
                       Bairro_Atuacao=response[22];
                       Municipio_Comercial=response[23];
                       Municipio_Atuacao=response[24];
                       CEP_Comercial=response[25];
                       CEP_Atuacao=response[26];
                       Tipo_Logradouro_Comercial=response[27];
                       Tipo_Logradouro_Atuacao=response[28];
                       Nro_Comercial=response[29];
                       Nro_Atuacao=response[29];
                       Nome_Responsavel=response[34];
                       NIT_Responsavel=response[35];
                       Empresa_Contrato=response[36];
                       Complemento_Comercial=response[37];
                       Complemento_Atuacao=response[38];
                       

                    }
                }
            };
             newusu=new Empresa();