   function Fabricantes(){
                this.inicializa=function(){
                     Codigo_Fabricante=Array();
                     Nome=Array;
                     
                    
                } 
                this.get_Codigo_Fabricante= function(nlinha){
                    return Codigo_Fabricante[nlinha];
                }
                this.get_Nome= function(nlinha){
                    return Nome[nlinha];
                }
             
                this.length=function(){
                    return Codigo_Fabricante.length;
                }
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                        for (x=0;x<response.length-1;x++){
                        vreg=response[x].split('|');
                        Codigo_Fabricante[x]=vreg[0];
                        Nome[x]=vreg[1];
                        
                        }
                    }

                }
            };
             newfabricantes=new Fabricantes();