   function Movimento_Epi_d(){
                this.inicializa=function(){
                      D_Codigo_Empresa=Array();
                      D_Sequencial=Array();
                      D_Linha_Numero=Array();
                      D_Codigo_Epi=Array();
                      D_Descricao_Epi=Array();
                      D_Tipo_Protecao=Array();
                      D_Qtde_Fornecida=Array();
                      D_Vd_Util=Array();
                      D_Vd_Util2=Array();
                      D_Data_Entrega=Array();
                      D_Proxima_Troca_Prevista=Array();
                      D_Devolvido=Array();
                      D_Data_Efetiva_Devolucao=Array();
                     
                    
                } 
                this.inicializa();
                this.get_Codigo_Empresa= function(nlinha){
                    return D_Codigo_Empresa[nlinha];
                }
                this.get_Sequencial= function(nlinha){
                    return D_Sequencial[nlinha];
                }
                
                this.get_Codigo_Epi= function(nlinha){
                    return D_Codigo_Epi[nlinha];
                }
                this.get_Descricao_Epi= function(nlinha){
                    return D_Descricao_Epi[nlinha];
                }
                this.get_Tipo_Protecao= function(nlinha){
                    return D_Tipo_Protecao[nlinha];
                }
                this.get_Quantidade_Fornecida= function(nlinha){
                    return D_Qtde_Fornecida[nlinha];
                }
                this.get_Vida_Util= function(nlinha){
                    return D_Vd_Util[nlinha];
                }
                this.get_Vida_Util2= function(nlinha){
                    return D_Vd_Util2[nlinha];
                }
                this.get_Data_Entrega= function(nlinha){
                    return D_Data_Entrega[nlinha];
                }
                this.get_Proxima_Troca= function(nlinha){
                    return D_Proxima_Troca_Prevista[nlinha];
                }
                this.get_Devolvido= function(nlinha){
                    return D_Devolvido[nlinha];
                }
                this.set_Devolvido=function(nlinha){
                    D_Devolvido[nlinha]=D_Devolvido[nlinha]=0?1:0;
                }
                this.set_Data_Devolucao=function(nlinha,valor){
                    D_Data_Efetiva_Devolucao[nlinha]=valor;
                }
                
                
                this.get_Data_Devolucao= function(nlinha){
                    return D_Data_Efetiva_Devolucao[nlinha];
                }
                          
                this.length=function(){
                    return D_Codigo_Epi.length;
                }
                this.apaga_linha=function(nlinha){
                     D_Codigo_Empresa.splice(nlinha,1);
                     D_Sequencial.splice(nlinha,1);
                     D_Linha_Numero.splice(nlinha,1);
                     D_Codigo_Epi.splice(nlinha,1);
                     D_Descricao_Epi.splice(nlinha,1);
                     D_Tipo_Protecao.splice(nlinha,1);
                     D_Qtde_Fornecida.splice(nlinha,1);
                     D_Vd_Util.splice(nlinha,1);
                     D_Vd_Util2.splice(nlinha,1);
                     D_Data_Entrega.splice(nlinha,1);
                     D_Proxima_Troca_Prevista.splice(nlinha,1);
                     D_Devolvido.splice(nlinha,1);
                     D_Data_Efetiva_Devolucao.splice(nlinha,1);
                    
                }
                this.retorna_todas_linhas=function(){
                    xlinha=Array();
                    for (x=0;x<this.length();x++){
                        xlinha[x]=this.get_Codigo_Epi(x);
                        xlinha[x]+='|'+this.get_Descricao_Epi(x);
                        xlinha[x]+='|'+this.get_Tipo_Protecao(x);
                        xlinha[x]+='|'+this.get_Quantidade_Fornecida(x);
                        xlinha[x]+='|'+this.get_Vida_Util(x);
                        xlinha[x]+='|'+this.get_Vida_Util2(x);
                        xlinha[x]+='|'+this.get_Data_Entrega(x);
                        xlinha[x]+='|'+this.get_Proxima_Troca(x);
                        xlinha[x]+='|'+this.get_Devolvido(x);
                        xlinha[x]+='|'+this.get_Data_Devolucao(x);
                    }
                    return xlinha;
                }
                this.setValores=function(response){
                    if (response!='NF'){
                        //x=this.length()>=0?this.length():0;
                        x=this.length();
                        xvreg=response.toString().split('|');
                        D_Codigo_Empresa[x]=xvreg[0];
                        D_Sequencial[x]=xvreg[1];
                        D_Linha_Numero[x]=xvreg[2];
                        D_Codigo_Epi[x]=xvreg[3];
                        D_Descricao_Epi[x]=xvreg[4];
                        D_Tipo_Protecao[x]=xvreg[5];
                        D_Qtde_Fornecida[x]=xvreg[6];
                        D_Vd_Util[x]=xvreg[7];
                        D_Vd_Util2[x]=xvreg[8];
                        D_Proxima_Troca_Prevista[x]=xvreg[9];
                        D_Devolvido[x]=xvreg[10];
                        D_Data_Efetiva_Devolucao[x]=xvreg[11];
                        D_Data_Entrega[x]=xvreg[12];
                        
                    }

                }
            };
             newmovimentoepi_d=new Movimento_Epi_d();