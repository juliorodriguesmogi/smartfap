            function Parametro_Ruido (){
                this.inicializa=function(){
                      Classificacao=Array();
                      Ruido_Db=Array();
                      Tempo_Maximo_Exposicao=Array();
                }
                
                this.get_Classificacao= function(nlinha){
                    return Classificacao[nlinha];
                }
                this.get_Ruido_Db = function(nlinha){
                    return Ruido_Db[nlinha];
                }
                this.get_Tempo_Maximo_Exposicao= function(nlinha){
                    return Tempo_Maximo_Exposicao[nlinha];
                }
                
               
                this.length=function(){
                    return Classificacao.length;
                }

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){

                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|'); 
                           Classificacao[x]=vreg[0];
                           Ruido_Db[x]=vreg[1];
                           Tempo_Maximo_Exposicao[x]=vreg[2];                           

                           
                       }
                      
                    }
                }
            };
             newparmruido=new Parametro_Ruido();