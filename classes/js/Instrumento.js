            function Instrumento(){
                 Codigo_Empresa=0;
                 Codigo_Instrumento=0;
                 Descricao_Instrumento='';
                 Categoria='';
                 Marca='';
                  Modelo='';
                 Serie='';
                 Tipo='';
                 Data_Calibracao='';
                Data_Cadastro='';
                Session_id='';
                Ultimo_Usuario='';
                  Ultima_Atualizacao='';
                 
                this.get_Codigo_Empresa= function(){
                    return Codigo_Empresa;
                }
                
                this.get_Codigo_Instrumento= function(){
                    return Codigo_Instrumento;
                }
                this.get_Descricao= function(){
                    return Descricao_Instrumento;
                }
                this.get_Categoria= function(){
                    return Categoria;
                }
                this.get_Marca= function(){
                    return Marca;
                }
                this.get_Modelo= function(){
                    return Modelo;
                }
                this.get_Serie= function(){
                    return Serie;
                }
            this.get_Tipo= function(){
                    return Tipo;
                }
                this.get_Data_Calibracao= function(){
                    return Data_Calibracao;
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
                this.setId=function(ID){
                    Id_Usuario=ID;
                }
                this.setValores=function(response){
                    if (response!='NF'){
                       Codigo_Empresa=response[0];
                       Codigo_Instrumento=response[1];
                       Descricao_Instrumento=response[2];
                       Categoria=response[3];
                      Tipo=response[4];
                      Marca=response[5];
                       Modelo=response[6];
                       Serie=response[7];
                       Data_Calibracao=response[8];
                       Data_Cadastro=response[9];
                       Session_id=response[10];
                       Ultimo_Usuario=response[12];
                       Ultima_Atualizacao=response[11];
                    }
                }
            };
             newinstr=new Instrumento();