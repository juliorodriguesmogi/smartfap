  function maquina(){
                
                this.inicializa=function(){
                     Codigo_Empresa=0;
                     Codigo_Maquina=0;
                     Nome_Maquina='';
                     Tipo_De_Uso='';
		     Taxa_De_Ruido='';
                     Taxa_De_Luminosidade='';
                     Fabricante='';
                     Vida_Util='';
                     Vida_Util2='';
                     Data_Cadastro='';
                     Session_id='';
                     Ultimo_Usuario='';
                     Ultima_Atualizacao=''; 
                     Situacao='';
                }
                this.get_Codigo_Empresa= function(){
                    return Codigo_Empresa;
                }
                this.get_Codigo_Maquina= function(){
                    return Codigo_Maquina;
                }
                this.get_Nome= function(){
                    return Nome_Maquina;
                }
                this.get_Tipo_De_Uso=function(){
                    return Tipo_De_Uso;
                }
                this.get_Taxa_De_Ruido=function(){
                    return Taxa_De_Ruido;
                }
                this.get_Taxa_De_Luminosidade=function(){
                    return Taxa_De_Luminosidade;
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
                       Codigo_Maquina=response[1];
                       Nome_Maquina=response[2];
                       Tipo_De_Uso=response[3];
                       Taxa_De_Ruido=response[4];
                       Taxa_De_Luminosidade=response[5];
                       Fabricante=response[6];
                       Vida_Util=response[7];
                       Vida_Util2=response[8];
                       Data_Cadastro=response[10];
                       Ultima_Atualizacao=response[11];
                       Session_id=response[9];
                       Ultimo_Usuario=response[12];                     
                       Situacao=response[13];
                    }
                }
            };
             newmaquina=new maquina();