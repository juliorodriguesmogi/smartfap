 function epis(){
                
                this.inicializa=function(){
                     this.Codigo_Empresa=0;
                     this.Codigo_Epis=0;
                     this.Codigo_CA='';
                     this.Descricao='';
                     this.Validade_ca='';
                     this.Natureza='';
                     this.Fabricante='';
                     this.Vida_Util='';
                     this.Vida_Util2='';
                     this.Tipo_De_Protecao='';
                     this.Tamanho='';
                     this.ID_Usuario='';
                     this.Data_Cadastro='';
                     this.Session_id='';
                     this.Ultimo_Usuario='';
                     this.Ultima_Atualizacao=''; 
                     this.Situacao='';
                     this.Nivel_Protecao='';
                     this.Codigo_Epi_Base='';
                     this.Estoque_Atual=0;
                }
                this.get_Codigo_Empresa= function(){
                    return this.Codigo_Empresa;
                }
                this.get_Codigo_Epis= function(){
                    return this.Codigo_Epis;
                }
                this.get_Codigo_CA= function(){
                    return this.Codigo_CA;
                }
                this.get_Descricao=function(){
                    return this.Descricao;
                }
                this.get_Validade_ca=function(){
                    return this.Validade_ca;
                }
                this.get_Natureza=function(){
                    return this.Natureza;
                }
                  this.get_Fabricante=function(){
                    return this.Fabricante;
                  }
                this.get_Vida_Util=function(){
                    return this.Vida_Util;
                }
                this.get_Vida_Util2=function(){
                    return this.Vida_Util2;
                }                
                this.get_Tipo_De_Protecao=function(){
                    return this.Tipo_De_Protecao;
                }
                this.get_Tamanho=function(){
                    return this.Tamanho;
                }
                this.get_ID_Usuario=function(){
                    return this.ID_Usuario;
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
                this.get_Nivel_Protecao=function(){
                    return this.Nivel_Protecao;
                }         
                this.get_Codigo_Epi_Base=function(){
                    return this.Codigo_Epi_Base;
                }                
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao;
                }  
                this.get_Estoque_Atual=function(){
                    return this.Estoque_Atual;
                }                  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       this.Codigo_Empresa=response[0];
                       this.Codigo_Epis=response[1];
                       this.Codigo_CA=response[2];
                       this.Descricao=response[3];
                       this.Validade_ca=response[4];
                       this.Natureza=response[5];
                       this.Fabricante=response[6];
                       this.Vida_Util=response[7];
                       this.Tipo_De_Protecao=response[8];
                       this.Tamanho=response[9];
                       this.Vida_Util2=response[10];
                       this.ID_Usuario=response[11];
                       this.Nivel_Protecao=response[15];
                       this.Codigo_Epi_Base=response[17];
                       this.Estoque_Atual=response[21];
                    }
                }
            };
             newepis=new epis();