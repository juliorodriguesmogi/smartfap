 function movimentacao(){
                
                this.inicializa=function(nlinha){
                     Codigo_Empresa=Array();
                     Codigo_Movimentacao=Array();
                     Codigo_Funcionario=array();
                     Nome_Funcionario=Array();
                     Matricula_Funcionario=Array();
		     Codigo_Medico=Array();
                     Nome_Profissional=Array();
                     Area_Atuacao=Array();
                     Exames=Array();                     
                     Data_Cadastro=Array();
                     Session_id=Array();
                     Ultimo_Usuario=Array();
                     Ultima_Atualizacao=Array();
                    
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return Codigo_Empresa[nlinha];
                }
                this.get_Codigo_Funcionario= function(nlinha){
                    return Codigo_Funcionario[nlinha];
                }
                  this.get_Codigo_Movimentacao= function(nlinha){
                    return Codigo_Movimentacao[nlinha];
                }
                this.get_Nome_Funcionario= function(nlinha){
                    return Nome_Funcionario[nlinha];
                }
                this.get_Matricula_Funcionario=function(nlinha){
                    return Matricula_Funcionario[nlinha];
                }
                this.get_Codigo_Medico=function(nlinha){
                    return Codigo_Medico[nlinha];
                }
                this.get_Nome_Profissional=function(nlinha){
                    return Nome_Profissional[nlinha];
                }
              
                  this.get_Area_Atuacao=function(nlinha){
                    return Area_Atuacao[nlinha];
                  }
                this.get_Exames=function(nlinha){
                    return Exames[nlinha];
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
                
                this.get_Ultima_Atualizacao=function(nlinha){
                    return Ultima_Atualizacao[nlinha];
                }  
                this.length=function(){
                    return Codigo_Maquina.length;
                }
                this.apaga_linha=function(nlinha){
                     Codigo_Empresa.splice(nlinha,1);
                     Codigo_Funcionario.splice(nlinha,1);
                     Codigo_Movimentacao.splice(nlinha,1);
                     Nome_Funcionario.splice(nlinha,1);
                     Matricula_Funcionario.splice(nlinha,1);
                     Codigo_Medico.splice(nlinha,1);
                     Nome_Profissional.splice(nlinha,1);
                     Area_Atuacao.splice(nlinha,1);
                     Exames.splice(nlinha,1);
                     
                    
                }
                this.retorna_todas_linhas=function(){
                    xlinha=Array();
                    for (x=0;x<this.length();x++){
                        xlinha[x]=this.get_Codigo_Funcionario(x);
                        xlinha[x]+='|'+this.get_Codigo_Funcionario(x);
                        xlinha[x]+='|'+this.get_Codigo_Movimentacao(x);
                        xlinha[x]+='|'+this.get_Nome_Funcionario(x);
                        xlinha[x]+='|'+this.get_Matricula_Funcionario(x);
                        xlinha[x]+='|'+this.get_Codigo_Medico(x);
                        xlinha[x]+='|'+this.get_Nome_Profissional(x);
                        xlinha[x]+='|'+this.get_Area_Atuacao(x);
                        xlinha[x]+='|'+this.get_Exames(x);
                      
                    }
                    return xlinha;
                }
                this.setValores=function(response){
                    if (response!='NF'){
                        //x=this.length()>=0?this.length():0;
                        x=this.length();
                        xvreg=response.toString().split('|');
                       Codigo_Empresa[x]=xvreg[0];
                        Codigo_Funcionario[x]=xvreg[1];
                        Codigo_Movimentacao[x]=xvreg[2];
                        Nome_Funcionario[x]=xvreg[3];
                        Matricula_Funcionario[x]=xvreg[4];
                        Codigo_Medico[x]=xvreg[5];
                        Nome_Profissional[x]=xvreg[6];
                        Area_Atuacao[x]=xvreg[7];
                        Exames[x]=xvreg[8];
                        D_Proxima_Troca_Prevista[x]=xvreg[9];
                        D_Devolvido[x]=xvreg[10];
                        D_Data_Efetiva_Devolucao[x]=xvreg[11];
                        D_Data_Entrega[x]=xvreg[12];
                        
                    }

                }
            };
             newmovimentoepi_d=new Movimento_Epi_d();