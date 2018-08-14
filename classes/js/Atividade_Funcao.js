   function Atividade_Funcao(){
                this.inicializa=function(){
                      A_Codigo_Empresa=Array();
                      A_Codigo_Atividade=Array();
                      A_Codigo_Funcao=Array();
                      A_Descricao_Funcao=Array();
                } 
                this.inicializa();
                this.get_Codigo_Empresa= function(nlinha){
                    return A_Codigo_Empresa[nlinha];
                }
                this.get_Codigo_Atividade= function(nlinha){
                    return A_Codigo_Atividade[nlinha];
                }
                
                this.get_Codigo_Funcao= function(nlinha){
                    return A_Codigo_Funcao[nlinha];
                }
                this.get_Descricao_Funcao= function(nlinha){
                    return A_Descricao_Funcao[nlinha];
                }
                
                this.length=function(){
                    return A_Codigo_Funcao.length;
                }
                this.apaga_linha=function(nlinha){
                     A_Codigo_Empresa.splice(nlinha,1);
                     A_Codigo_Atividade.splice(nlinha,1);
                     A_Codigo_Funcao.splice(nlinha,1);
                    
                }
                this.retorna_todas_linhas=function(){
                    xlinha=Array();
                    for (x=0;x<this.length();x++){
                        xlinha[x]="CODIGO_EMPRESA="+this.get_Codigo_Empresa(x);
                        xlinha[x]+='|'+"CODIGO_ATIVIDADE="+this.get_Codigo_Atividade(x);
                        xlinha[x]+='|'+"CODIGO_FUNCAO="+this.get_Codigo_Funcao(x);
                        xlinha[x]+='|'+"DESCRICAO_FUNCAO="+this.get_Descricao_Funcao(x);                        
                    }
                    return xlinha;
                }
                this.insereLinha=function(response){
                    if (response!='NF'){
                        x=this.length();
                        vreg=response.toString().split('|');
                        A_Codigo_Empresa[x]=vreg[0];
                        A_Codigo_Atividade[x]=vreg[1];
                        A_Codigo_Funcao[x]=vreg[2];
                        A_Descricao_Funcao[x]=vreg[3];                       

                    }

                }                
                this.setValores=function(response){
                    if (response!='NF'){
                        for (x=0;x<response.length-1;x++){
                        vreg=response[x].toString().split('|');
                        A_Codigo_Empresa[x]=vreg[0];
                        A_Codigo_Atividade[x]=vreg[1];
                        A_Codigo_Funcao[x]=vreg[2];
                        A_Descricao_Funcao[x]=vreg[3];                       
                        }
                    }

                }
            };
             newativfunc=new Atividade_Funcao();