            function Modulo(){
                  this.inicializa=function(){
                      Codigo_Empresa=0;
                      Codigo_Usuario=0;
                      Codigo_Modulo=0;
                  }    
                 
                this.get_Codigo_Empresa= function(){
                    return Codigo_Empresa;
                }
                this.get_Codigo_Usuario= function(){
                    return Codigo_Funcao;
                }
                this.get_Codigo_Modulo= function(){
                    return Codigo_Modulo;
                }

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       Codigo_Empresa=response[0];
                       Codigo_Usuario=response[1];
                       Codigo_Modulo=response[2];
                       
                    }
                }
            };
             newModulo=new Modulo();