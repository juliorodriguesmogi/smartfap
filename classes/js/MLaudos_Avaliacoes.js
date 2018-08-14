function MLaudos_Avaliacoes(){
                
                this.inicializa=function(){
                    this.Codigo_Empresa_Avaliacao=Array();
                    this.Numero_Laudo_Avaliacao=Array();
                    this.Revisao_Avaliacao=Array();
                    this.Ano_Pericia_Avaliacao=Array();
                    this.Unidade_Avaliacao=Array();
                    this.Codigo_Setor_Avaliacao=Array();
                    this.Descricao_Setor_Avaliacao=Array();
                    this.Nome_Setor_Avaliacao=Array();
                    this.Sequencial=Array();
                    this.Numero_Funcs=Array();
                    this.Numero_Funcs_Expostos=Array();
                    this.Expostos_Sexo_Masculino=Array();
                    this.Expostos_Sexo_Feminino=Array();
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
                    this.Outros_Biologicos_Descricao=Array();
                    this.Outros_Fisicos_Descricao=Array();
                    this.Outros_Quimicos_Descricao=Array();
                    this.Outros_Ergonomicos_Descricao=Array();
                     
                }
                 this.get_Codigo_Empresa=function(nlinha){
                    return this.Codigo_Empresa_Avaliacao[nlinha];
                }
                
                this.get_Numero_Laudo= function(nlinha){
                    return this.Numero_Laudo_Avaliacao[nlinha];
                }
                this.get_Ano_Pericia= function(nlinha){
                    return this.Ano_Pericia_Avaliacao[nlinha];
                }
                this.get_Revisao=function(nlinha){
                    return this.Revisao_Avaliacao[nlinha];
                }
                this.get_Umidade=function(nlinha){
                    return this.Umidade[nlinha];
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
                this.get_Unidade=function(nlinha){
                    return this.Unidade_Avaliacao[nlinha];
                }
                this.get_Codigo_Setor=function(nlinha){
                    return this.Codigo_Setor_Avaliacao[nlinha];
                }
                this.get_Nome_Setor=function(nlinha){
                    return this.Nome_Setor_Avaliacao[nlinha];
                }
             
                this.get_Descricao_Setor=function(nlinha){
                    return this.Descricao_Setor_Avaliacao[nlinha];
                }
                
                this.get_Numero_Funcs=function(nlinha){
                    return this.Numero_Funcs[nlinha];
                }    
                this.get_Numero_Funcs_Expostos=function(nlinha){
                    return this.Numero_Funcs_Expostos[nlinha];
                }
                this.get_Expostos_Sexo_Masculino=function(nlinha){
                    return this.Expostos_Sexo_Masculino=[nlinha];
                }
                this.get_Expostos_Sexo_Feminino=function(nlinha){    
                    return this.Expostos_Sexo_Feminino=[nlinha];
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
                this.get_Outros_Fisicos_Descricao=function(nlinha){
                    return this.Outros_Fisicos_Descricao[nlinha];
                }
                this.get_Outros_Biologicos_Descricao=function(nlinha){
                    return this.Outros_Biologicos_Descricao[nlinha];
                }
                this.get_Outros_Ergonomicos_Descricao=function(nlinha){
                    return this.Outros_Ergonomicos_Descricao[nlinha];
                }
                
                this.get_Iluminamento=function(nlinha){
                    return this.Iluminamento[nlinha];
                }
                
                
                this.length=function(){
                    return this.Codigo_Empresa_Avaliacao.length;
                }                

                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');
                            this.Codigo_Empresa_Avaliacao[x]=vreg[0];
                            this.Ano_Pericia_Avaliacao[x]=vreg[1];
                            this.Numero_Laudo_Avaliacao[x]=vreg[2];
                            this.Revisao_Avaliacao[x]=vreg[3];
                            this.Unidade_Avaliacao[x]=vreg[4];
                            this.Codigo_Setor_Avaliacao[x]=vreg[5];
                            this.Descricao_Setor_Avaliacao[x]=vreg[6];
                            this.Sequencial[x]=vreg[7];
                            this.Numero_Funcs[x]=vreg[8];
                            this.Numero_Funcs_Expostos[x]=vreg[9];
                            this.Expostos_Sexo_Masculino[x]=vreg[10];
                            this.Expostos_Sexo_Feminino[x]=vreg[11];
                            this.Ruido[x]=vreg[12];
                            this.Ruido_Dosimetria[x]=vreg[13];
                            this.Frio[x]=vreg[14];
                            this.Calor[x]=vreg[15];
                            this.Umidade[x]=vreg[16];
                            this.Radiacao_Nao_Ionizante[x]=vreg[17];
                            this.Radiacao_Ionizante[x]=vreg[18];
                            this.Outros_Fisicos[x]=vreg[19];
                            this.Outros_Fisicos_Descricao[x]=vreg[20];
                            this.Sangue_Humano[x]=vreg[21];
                            this.Sangue_Animal[x]=vreg[22];
                            this.Manejo_Animais[x]=vreg[23];
                            this.Outros_Biologicos[x]=vreg[24];
                            this.Outros_Biologicos_Descricao[x]=vreg[25];
                            this.Produtos_Limpeza[x]=vreg[26];
                            this.Tintas_Solventes[x]=vreg[27];
                            this.Hidrocarbonetos_Aromaticos[x]=vreg[28];
                            this.Fumos_Metalicos[x]=vreg[29];
                            this.Poeiras_Incomodas[x]=vreg[30];
                            this.Poeiras_Minerais[x]=vreg[31];
                            this.Outros_Quimicos[x]=vreg[32];
                            this.Outros_Quimicos_Descricao[x]=vreg[33];
                            this.Iluminamento[x]=vreg[34];
                            this.Outros_Ergonomicos_Descricao[x]=vreg[34];
                            this.Nome_Setor_Avaliacao[x]=vreg[36];
                            
                       }     
                    }
                }
            };
             newlaudosavaliacoes=new MLaudos_Avaliacoes();




