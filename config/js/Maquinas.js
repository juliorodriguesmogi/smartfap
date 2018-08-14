  function maquinas(){
                
                this.inicializa=function(nlinha){
                     Codigo_Empresa=Array();
                     Codigo_Maquina=Array();
                     Nome_Maquina=Array();
                     Tipo_De_Uso=Array();
		     Taxa_De_Ruido=Array();
                     Taxa_De_Luminosidade=Array();
                     Fabricante=Array();
                     Vida_Util=Array();
                     Vida_Util2=Array();
                     Data_Cadastro=Array();
                     Session_id=Array();
                     Ultimo_Usuario=Array();
                     Ultima_Atualizacao=Array();
                     Situacao=Array();
                     Unidade=Array();
                     Setor=Array();
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa[nlinha];
                }
                this.get_Codigo_Maquina= function(nlinha){
                    return Codigo_Maquina[nlinha];
                }
                this.get_Nome_Maquina= function(nlinha){
                    return Nome_Maquina[nlinha];
                }
                this.get_Tipo_De_Uso=function(nlinha){
                    return Tipo_De_Uso[nlinha];
                }
                this.get_Taxa_De_Ruido=function(nlinha){
                    return Taxa_De_Ruido[nlinha];
                }
                this.get_Taxa_De_Luminosidade=function(nlinha){
                    return Taxa_De_Luminosidade[nlinha];
                }
              
                  this.get_Fabricante=function(nlinha){
                    return Fabricante[nlinha];
                  }
                this.get_Vida_Util=function(nlinha){
                    return Vida_Util[nlinha];
                }
                this.get_Vida_Util2=function(nlinha){
                    return Vida_Util2[nlinha];
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
                this.get_Situacao=function(nlinha){
                    return Situacao[nlinha];
                }         
                this.get_Unidade=function(nlinha){
                    return Unidade[nlinha];
                }  

                this.get_Setor=function(nlinha){
                    return Setor[nlinha];
                }  
                this.get_Ultima_Atualizacao=function(nlinha){
                    return Ultima_Atualizacao[nlinha];
                }  
                this.length=function(){
                    return Codigo_Maquina.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|')
                           Codigo_Empresa=vreg[0];
                           Codigo_Maquina=vreg[1];
                           Nome_Maquina=vreg[2];
                           Tipo_De_Uso=vreg[3];
                           Taxa_De_Ruido=vreg[4];
                           Taxa_De_Luminosidade=vreg[5];
                           Fabricante=vreg[6];
                           Vida_Util=vreg[7];
                           Vida_Util2=vreg[8];
                           Id_Usuario=vreg[9];
                           Data_Cadastro=vreg[10];
                           Ultima_Atualizacao=vreg[11];
                           Ultimo_Usuario=vreg[12];                     
                           Unidade=vreg[13];  
                           Setor=vreg[14];  
                       }    
                    }
                }
            };
             newMaquinas=new maquinas();