   function Movimento_Epi_m(){
                this.inicializa=function(){
                     Codigo_Empresa=0;
                     Unidade=0;
                     Sequencial=0;
                     Tipo_Movimento='';
                     Codigo_Funcionario=0;
                     Data_Movimentacao='';
                     Id_Usuario='';
                     Impresso='';
                    
                } 
                this.inicializa();
                this.get_Codigo_Empresa= function(){
                    return Codigo_Empresa;
                }
                this.get_Sequencial= function(){
                    return Sequencial;
                }
                this.get_Unidade= function(){
                    return Unidade;
                }
                
                this.get_Tipo_Movimento= function(){
                    return Tipo_Movimento;
                }
                this.get_Codigo_Funcionario= function(){
                    return Codigo_Funcionario;
                }
                this.get_Id_Usuario= function(){
                    return Id_Usuario;
                }
                this.get_Data_Movimentacao= function(){
                    return Data_Movimentacao;
                }
                
                this.get_Impresso= function(){
                    return Impresso;
                }
                this.setValores=function(response){
                    if (response!='NF'){
                        vreg=response;
                        Codigo_Empresa=vreg[0];
                        Unidade=vreg[1];
                        Sequencial=vreg[2];
                        Codigo_Funcionario=vreg[3];                        
                        Data_Movimentacao=vreg[4];                        
                        Tipo_Movimento=vreg[5];
                        ID_Usuario=vreg[7];
                        Impresso=vreg[8];
                        
                    }

                }
            };
             newmovimentoepi_m=new Movimento_Epi_m();