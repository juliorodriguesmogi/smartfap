            function Atividade(){
                 this.inicializa=function(){
                      Codigo_Empresa=0;
                      Codigo_Atividade=0;
                      Descricao_Atividade='';
                      Classificacao_Atividade='';
                      Data_Cadastro='';
                      Session_id='';
                      Ultimo_Usuario='';
                      Ultima_Atualizacao='';
                 }
                
                this.get_Codigo_Empresa= function(){
                    return Codigo_Empresa;
                }
                this.get_Codigo_Atividade= function(){
                    return Codigo_Atividade;
                }
                
                this.get_Descricao= function(){
                    return Descricao_Atividade;
                }
                this.get_Classificacao= function(){
                    return Classificacao_Atividade;
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
                this.get_Ultima_Atualizacao=function(){
                    return Ultima_Atualizacao;
                }                         

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_Empresa=response[0];
                       Codigo_Atividade=response[1];
                       Descricao_Atividade=response[2];
                       Classificacao_Atividade=response[3];
                       Data_Cadastro=response[4];
                       Ultima_Atualizacao=response[5];
                       Ultimo_Usuario=response[6];
                       Session_id=response[7];
                       
                    }
                }
            };
             newativ=new Atividade();