function Funcionario(){
                
                this.inicializa=function(){
                     Codigo_Empresa=0;
                     Codigo_Funcionario='';
		     Matricula_Do_Funcionario='';
                     Nome_Funcionario='';
                     Numero_CTPS='';
                     Serie_Do_CTPS='';
                     Data_Emissao_CTPS='';
                     Numero_CPF='';
                     Numero_RG='';
                     Data_Expedicao='';
                     Orgao_Expedidor='';
                     Numero_Pispasep='';
                     Data_Nascimento='';
                     Data_Admissao='';
                     Data_Desligamento='';
                     Profissao='';
                     Cargo='';
                     Setor='';
                     Funcao='';
                     Tipo_Logradouro='';
                     Endereco_Residencial='';
                     Bairro_Residencia='';
                     Cidade_Residencia='';
                     UF_Residencia='';
                     CEP_Residencia='';
                     Grau_Exposicao='';
                     Grau_Risco='';
                     Data_Cadastro='';
                     Session_id='';
                     Ultimo_Usuario='';
                     Ultima_Atualizacao=''; 
                     ID_Usuario='';
                     Situacao='';
                     Titulo_Eleitoral='';
                     Zona_Eleitoral='';
                     Numero_PIS='';
                     Numero_NIT='';
                }
                this.get_Codigo_Empresa= function(){
                    return Codigo_Empresa;
                      }
                this.get_Nome_Empresa= function(){
                    return Nome_Empresa;
                }
                this.get_Codigo_Funcionario= function(){
                    return Codigo_Funcionario;
                }
                this.get_Matricula_Do_Funcionario=function(){
                    return Matricula_Do_Funcionario;
                }
                this.get_Nome_Funcionario=function(){
                    return Nome_Funcionario;
                }
                this.get_Numero_CTPS=function(){
                    return Numero_CTPS;
                }
                  this.get_Serie_Do_CTPS=function(){
                    return Serie_Do_CTPS;
                  }
                this.get_Data_Emissao_CTPS=function(){
                    return Data_Emissao_CTPS;
                }
                this.get_Numero_CPF=function(){
                    return Numero_CPF;
                }
                this.get_Numero_RG=function(){
                    return Numero_RG;
                }
                 this.get_Data_Expedicao=function(){
                    return Data_Expedicao;
                }
                 this.get_Orgao_Expedidor=function(){
                    return Orgao_Expedidor;
                }
                this.get_Data_Nascimento=function(){
                    return Data_Nascimento;
                }
                  this.get_Numero_Pispasep=function(){
                    return Numero_Pispasep;
                }
                 this.get_Data_Admissao=function(){
                    return Data_Admissao;
                }
                 this.get_Data_Desligamento=function(){
                    return Data_Desligamento;
                }
                 this.get_Profissao=function(){
                    return Profissao;
                }
                 this.get_Cargo=function(){
                    return Cargo;
                }
                this.get_Tipo_Logradouro=function(){
                    return Tipo_Logradouro;
                }
                this.get_Endereco_Residencial=function(){
                    return Endereco_Residencial;
                }
                this.get_Bairro_Residencia=function(){
                    return Bairro_Residencia;
                }
                this.get_Cidade_Residencia=function(){
                    return Cidade_Residencia;
                }
                this.get_UF_Residencia=function(){
                    return UF_Residencia;
                }
                this.get_CEP_Residencia=function(){
                    return CEP_Residencia;
                }
                   this.get_Titulo_Eleitoral=function(){
                    return Titulo_Eleitoral;
                }
                   this.get_Zona_Eleitoral=function(){
                    return Zona_Eleitoral;
                }
                   this.get_Numero_PIS=function(){
                    return Numero_PIS;
                }
                this.get_Numero_NIT=function(){
                    return Numero_NIT;
                }
                
                 this.get_Setor=function(){
                    return Setor;
                }
                 this.get_Funcao=function(){
                    return Funcao;
                }
                 this.get_Grau_Exposicao=function(){
                    return Grau_Exposicao;
                }
                this.get_Grau_Risco=function(){
                    return Grau_Risco;
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
                
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_Empresa=response[0];
                       Codigo_Funcionario=response[1];
                       Matricula_Do_Funcionario=response[2];
                       Nome_Funcionario=response[3];
                       Tipo_Logradouro=response[4];
                       Endereco_Residencial=response[5];
                       Nro_Residencia=response[6];
                       Bairro_Residencia=response[7];
                       Cidade_Residencia=response[8];
                       UF_Residencia=response[9];
                       CEP_Residencia=response[10];
                       Numero_RG=response[11];
                       Data_Expedicao=response[12];
                       Orgao_Expedidor=response[13];
                       Numero_CPF=response[14];
                       Numero_CTPS=response[15];
                       Serie_Do_CTPS=response[16];
                       Data_Emissao_CTPS=response[17];
                       Titulo_Eleitoral=response[18];
                       Zona_Eleitoral=response[19];
                       Numero_NIT=response[20];
                       Profissao=response[21];
                       Cargo=response[22];
                       Funcao=response[23];
                       Setor=response[24];
                       Grau_Exposicao=response[25];
                       Grau_Risco=response[26];
                       ID_Usuario=response[27];
                       Session_id=response[28];
                       Data_Cadastro=response[29];
                       Ultimo_Usuario=response[30];                     
                       Situacao=response[31];
                       Ultima_Atualizacao=response[32];
                       Data_Nascimento=response[34];
                       Data_Admissao=response[35];
                       Data_Desligamento=response[36];
                       
       
    }
                }
            };
             newfuncionario=new Funcionario();