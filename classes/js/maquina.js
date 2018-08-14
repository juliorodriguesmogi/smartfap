  function maquina(){
                
                this.inicializa=function(){
                     this.Codigo_Empresa=0;
                     this.Codigo_Maquina=0;
                     this.Nome_Maquina='';
                     this.Tipo_De_Uso='';
		     this.Taxa_De_Ruido='';
                     this.Taxa_De_Luminosidade='';
                     this.Fabricante='';
                     this.Unidade='';
                     this.Setor='';
                     this.Vida_Util='';
                     this.Vida_Util2='';
                     this.Id_Usuario='';
                     this.Data_Cadastro='';
                     this.Session_id='';
                     this.Ultimo_Usuario='';
                     this.Ultima_Atualizacao=''; 
                     this.Situacao='';
                     this.Classificacao_Local='';
                }
                this.get_Codigo_Empresa= function(){
                    return this.Codigo_Empresa;
                }
                this.get_Codigo_Maquina= function(){
                    return this.Codigo_Maquina;
                }
                this.get_Nome= function(){
                    return this.Nome_Maquina;
                }
                this.get_Tipo_De_Uso=function(){
                    return this.Tipo_De_Uso;
                }
                this.get_Taxa_De_Ruido=function(){
                    return this.Taxa_De_Ruido;
                }
                this.get_Taxa_De_Luminosidade=function(){
                    return this.Taxa_De_Luminosidade;
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
                this.get_Unidade=function(){
                    return this.Unidade;
                }      
                this.get_Setor=function(){
                    return this.Setor;
                } 
                this.get_Id_Usuario=function(){
                    return this.ID_Usuario;
                }                 
                this.get_Classificacao_Local=function(){
                    return this.Classificacao_Local;
                }
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao;
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       this.Codigo_Empresa=response[0];
                       this.Codigo_Maquina=response[1];
                       this.Nome_Maquina=response[2];
                       this.Classificacao_Local=response[3];
                       this.Tipo_De_Uso=response[4];
                       this.Taxa_De_Ruido=response[5];
                       this.Taxa_De_Luminosidade=response[6];
                       this.Fabricante=response[7];
                       this.Unidade=response[8];
                       this.Setor=response[9];
                       this.Vida_Util=response[10];
                       this.Vida_Util2=response[11];
                       this.Id_Usuario=response[12];
                       this.Data_Cadastro=response[13];
                       this.Ultima_Atualizacao=response[14];
                       this.Ultimo_Usuario=response[15];                 
                    }
                }
            };
             newmaquina=new maquina();