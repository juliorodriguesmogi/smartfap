 function epis(){
                
                this.inicializa=function(){
                     Codigo_Empresa=0;
                     Codigo_Epis=0;
                     Codigo_CA='';
                     Descricao='';
                     Validade_ca='';
                     Natureza='';
                     Fabricante='';
                     Vida_Util='';
                     Vida_Util2='';
                     Tipo_De_Protecao='';
                     Tamanho='';
                     ID_Usuario='';
                     Data_Cadastro='';
                     Session_id='';
                     Ultimo_Usuario='';
                     Ultima_Atualizacao=''; 
                     Situacao='';
                     Nivel_Protecao='';
                     Codigo_Epi_Base='';
                     Estoque_Atual=0;
                }
                this.get_Codigo_Empresa= function(){
                    return Codigo_Empresa;
                }
                this.get_Codigo_Epis= function(){
                    return Codigo_Epis;
                }
                this.get_Codigo_CA= function(){
                    return Codigo_CA;
                }
                this.get_Descricao=function(){
                    return Descricao;
                }
                this.get_Validade_ca=function(){
                    return Validade_ca;
                }
                this.get_Natureza=function(){
                    return Natureza;
                }
                  this.get_Fabricante=function(){
                    return Fabricante;
                  }
                this.get_Vida_Util=function(){
                    return Vida_Util;
                }
                this.get_Vida_Util2=function(){
                    return Vida_Util2;
                }                
                this.get_Tipo_De_Protecao=function(){
                    return Tipo_De_Protecao;
                }
                this.get_Tamanho=function(){
                    return Tamanho;
                }
                this.get_ID_Usuario=function(){
                    return ID_Usuario;
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
                this.get_Nivel_Protecao=function(){
                    return Nivel_Protecao;
                }         
                this.get_Codigo_Epi_Base=function(){
                    return Codigo_Epi_Base;
                }                
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }  
                this.get_Estoque_Atual=function(){
                    return Estoque_Atual;
                }                  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_Empresa=response[0];
                       Codigo_Epis=response[1];
                       Codigo_CA=response[2];
                       Descricao=response[3];
                       Validade_ca=response[4];
                       Natureza=response[5];
                       Fabricante=response[6];
                       Vida_Util=response[7];
                       Tipo_De_Protecao=response[8];
                       Tamanho=response[9];
                       Vida_Util2=response[10];
                       ID_Usuario=response[11];
                       Nivel_Protecao=response[15];
                       Codigo_Epi_Base=response[16];
                       Estoque_Atual=response[21];
                    }
                }
            };
             newepis=new epis();