function MLaudos_Avaliacoes_Sumarizadas(){
                
                this.inicializa=function(){
                    this.Ruido=Array();
                    this.Ruido_Dosimetria=Array();
                    this.Frio=Array();
                    this.Calor=Array();
                    this.Umidade=Array();
                    this.Radiacao_Nao_Ionizante=Array();
                    this.Radiacao_Ionizante=Array();
                    this.Outros_Fisicos=Array();
                    this.Sangue_Humano=Array();
                    this.Sangue_Animal=Array();
                    this.Manejo_Animais=Array();
                    this.Outros_Biologicos=Array();
                    this.Produtos_Limpeza=Array();
                    this.Tintas_Solventes=Array();
                    this.Hidrocarbonetos_Aromaticos=Array();
                    this.Fumos_Metalicos=Array();
                    this.Poeiras_Incomodas=Array();
                    this.Poeiras_Minerais=Array();
                    this.Outros_Quimicos=Array();
                    this.Iluminamento=Array();
                    this.Outros_Fisicos_Descricao=Array();
                    this.Outros_Biologicos_Descricao=Array();
                    this.Outros_Quimicos_Descricao=Array();
                    
                     
                }
                this.get_Ruido=function(nlinha){
                    return this.Ruido[nlinha];
                }
                this.get_Ruido_Dosimetria=function(nlinha){
                    return this.Ruido_Dosimetria[nlinha];
                }
                this.get_Frio=function(nlinha){
                    return this.Frio[nlinha];
                }
                this.get_Calor=function(nlinha){
                    return this.Calor[nlinha];
                }
                this.get_Umidade=function(nlinha){
                    return this.Umidade[nlinha];
                }
                this.get_Radiacao_Nao_Ionizante=function(nlinha){
                    return this.Radiacao_Nao_Ionizante[nlinha];
                }
                this.get_Radiacao_Ionizante=function(nlinha){
                    return this.Radiacao_Ionizante[nlinha];
                }
                this.get_Outros_Fisicos=function(nlinha){
                    return this.Outros_Fisicos[nlinha];
                }
                this.get_Outros_Fisicos_Descricao=function(nlinha){
                    return this.Outros_Fisicos_Descricao[nlinha];
                }
                
                this.get_Sangue_Humano=function(nlinha){
                    return this.Sangue_Humano[nlinha];
                }
                this.get_Sangue_Animal=function(nlinha){
                    return this.Sangue_Animal[nlinha];
                }
                this.get_Manejo_Animais=function(nlinha){
                    return this.Manejo_Animais[nlinha];
                }
                this.get_Outros_Biologicos=function(nlinha){
                    return this.Outros_Biologicos[nlinha];
                }
                this.get_Outros_Biologicos_Descricao=function(nlinha){
                    return this.Outros_Biologicos_Descricao[nlinha];
                }
                
                this.get_Produtos_Limpeza=function(nlinha){
                    return this.Produtos_Limpeza[nlinha];
                }
                this.get_Tintas_Solventes=function(nlinha){
                    return this.Tintas_Solventes[nlinha];
                }
                this.get_Hidrocarbonetos_Aromaticos=function(nlinha){
                    return this.Hidrocarbonetos_Aromaticos[nlinha];
                }
                this.get_Fumos_Metalicos=function(nlinha){
                    return this.Fumos_Metalicos[nlinha];
                }
                this.get_Poeiras_Incomodas=function(nlinha){
                    return this.Poeiras_Incomodas[nlinha];
                }
                this.get_Poeiras_Minerais=function(nlinha){
                    return this.Poeiras_Minerais[nlinha];
                }
                this.get_Outros_Quimicos=function(nlinha){
                    return this.Outros_Quimicos[nlinha];
                }
                this.get_Outros_Quimicos_Descricao=function(nlinha){
                    return this.Outros_Quimicos_Descricao[nlinha];
                }
                
                this.get_Iluminamento=function(nlinha){
                    return this.Iluminamento[nlinha];
                }
                
                
                this.length=function(){
                    return this.Iluminamento.length;
                }                

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');
                            this.Outros_Fisicos_Descricao[x]=vreg[0];                            
                            this.Outros_Biologicos_Descricao[x]=vreg[1];
                            this.Outros_Quimicos_Descricao[x]=vreg[2];
                            this.Ruido[x]=vreg[3];
                            this.Ruido_Dosimetria[x]=vreg[4];
                            this.Frio[x]=vreg[5];
                            this.Calor[x]=vreg[6];
                            this.Umidade[x]=vreg[7];
                            this.Radiacao_Nao_Ionizante[x]=vreg[8];
                            this.Radiacao_Ionizante[x]=vreg[9];
                            this.Outros_Fisicos[x]=vreg[10];
                            this.Sangue_Humano[x]=vreg[11];
                            this.Sangue_Animal[x]=vreg[12];
                            this.Manejo_Animais[x]=vreg[13];
                            this.Outros_Biologicos[x]=vreg[14];
                            this.Produtos_Limpeza[x]=vreg[15];
                            this.Tintas_Solventes[x]=vreg[16];
                            this.Hidrocarbonetos_Aromaticos[x]=vreg[17];
                            this.Fumos_Metalicos[x]=vreg[18];
                            this.Poeiras_Incomodas[x]=vreg[19];
                            this.Poeiras_Minerais[x]=vreg[20];
                            this.Outros_Quimicos[x]=vreg[21];
                            this.Iluminamento[x]=vreg[22];
                            
                       }     
                    }
                }
            };
             newlaudosavalsum=new MLaudos_Avaliacoes_Sumarizadas(); 




