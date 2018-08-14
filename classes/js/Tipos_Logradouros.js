            function Tipos_Logradouro (){
                this.inicializa=function(){
                      Tipo_Logradouro=Array();


                }
                
                this.get_Tipo_Logradouro= function(nlinha){
                    return Tipo_Logradouro[nlinha];
                }

               
                this.length=function(){
                    return Tipo_Logradouro.length;
                }

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){

                       for (x=0;x<response.length-1;x++){
                           vreg=response[x].split('|'); 
                           Tipo_Logradouro[x]=vreg[0];

                           
                       }
                      
                    }
                }
            };
             newtipologradouros=new Tipos_Logradouro();