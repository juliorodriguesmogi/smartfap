function laudo_setores_maquina(){
                
                this.inicializa=function(){
                    this.Codigo_Empresa_Setores_Maquinas=Array();
                    this.Ano_Maquinas_Setores_Maquinas=Array();
                    this.Numero_Laudo_Setores_Maquinas=Array();
                    this.Revisao_Setores_Maquinas=Array();
                    this.Sequencial_Setores_Maquinas=Array();
                    this.Unidade_Setores_Maquinas=Array();
                    this.Codigo_Setor_Setores_Maquinas=Array();
                    this.Codigo_Maquina=Array();
                    this.Numero_Func_expostos=Array();
                    this.Expostos_sexo_feminino=Array();
                    this.Expostos_sexo_masculino=Array();
                    this.Numero_func_setor=Array();
                    this.Tipo_exposicao=Array();
                    this.Data_Registro_Setores_Maquinas=Array();
                    this.Session_id_Setores_Maquinas=Array();
                    this.Ultimo_Usuario_Setores_Maquinas=Array();
                    this.Ultima_Atualizacao_Setores_Maquinas=Array();
                    this.Id_Usuario_Setores_Maquinas=Array();
                    this.Nome_Setor_Setores_Maquinas=Array();
                    this.Nome_Maquina_Setores_Maquinas=Array();
                     
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return this.Codigo_Empresa_Setores_Maquinas[nlinha];
                }                
                this.get_Numero_Laudo= function(nlinha){
                    return this.Numero_Laudo_Setores_Maquinas[nlinha];
                }
                this.get_Ano_Maquinas= function(nlinha){
                    return this.Ano_Maquinas_Setores_Maquinas[nlinha];
                }
                this.get_Revisao=function(nlinha){
                    return this.Revisao_Setores_Maquinas[nlinha];
                }
                this.get_Sequencial=function(nlinha){
                    return this.Sequencial_Setores_Maquinas[nlinha];
                }
                this.get_Codigo_Maquina=function(nlinha){
                    return this.Codigo_Maquina[nlinha];
                }                       
                this.get_Nome_Setor=function(nlinha){
                    return this.Nome_Setor_Setores_Maquinas[nlinha];
                }                       
                this.get_Nome_Maquina=function(nlinha){
                    return this.Nome_Maquina_Setores_Maquinas[nlinha];
                }                       
                
                this.get_Numero_Func_expostos=function(nlinha){
                    return this.Numero_Func_expostos[nlinha];
                }                       
                this.get_Tipo_exposicao=function(nlinha){
                    return this.Tipo_exposicao[nlinha];
                }                       
                this.get_Expostos_sexo_feminino=function(nlinha){
                    return this.Expostos_sexo_feminino[nlinha];
                }                       
                this.get_Expostos_sexo_masculino=function(nlinha){
                    return this.Expostos_sexo_masculino[nlinha];
                }                       
                this.get_Numero_func_seto=function(nlinha){
                    return this.Numero_func_seto[nlinha];
                }                       
                                                                
                
                this.get_Unidade=function(nlinha){
                    return this.Unidade_Setores_Maquinas[nlinha];
                }                       
                this.get_Codigo_Setor=function(nlinha){
                    return this.Codigo_Setor_Setores_Maquinas[nlinha];
                }
                this.get_Data_Registro=function(nlinha){
                    return this.Data_Registro_Setores_Maquinas[nlinha];
                }
                this.get_Session_id=function(nlinha){
                    return this.Session_id_Setores_Maquinas[nlinha];
                }         
                this.get_Ultimo_Usuario=function(nlinha){
                    return this.Ultimo_Usuario_Setores_Maquinas[nlinha];
                }         
                this.get_Id_Usuario=function(nlinha){
                    return this.Id_Usuario_Setores_Maquinas[nlinha];
                }         
                this.length=function(){
                    return this.Codigo_Empresa_Setores_Maquinas.length;
                }                
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao_Setores_Maquinas[nlinha];
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');
                            this.Codigo_Empresa_Setores_Maquinas[x]=vreg[0];
                            this.Ano_Maquinas_Setores_Maquinas[x]=vreg[1];
                            this.Numero_Laudo_Setores_Maquinas[x]=vreg[2];
                            this.Revisao_Setores_Maquinas[x]=vreg[3];
                            this.Sequencial_Setores_Maquinas[x]=vreg[4];
                            this.Unidade_Setores_Maquinas[x]=vreg[5];
                            this.Codigo_Setor_Setores_Maquinas[x]=vreg[6];
                            this.Codigo_Maquina[x]=vreg[7];
                            this.Tipo_exposicao[x]=vreg[8];
                            this.Numero_func_setor[x]=vreg[9];
                            this.Numero_Func_expostos[x]=vreg[10];
                            this.Expostos_sexo_feminino[x]=vreg[11];
                            this.Expostos_sexo_masculino[x]=vreg[12];
                            this.Id_Usuario_Setores_Maquinas[x]=vreg[13];
                            this.Session_id_Setores_Maquinas[x]=vreg[14];
                            this.Ultima_Atualizacao_Setores_Maquinas[x]=vreg[16];                           
                            this.Ultimo_Usuario_Setores_Maquinas[x]=vreg[17];
                            this.Nome_Setor_Setores_Maquinas[x]=vreg[17];
                            this.Nome_Maquina_Setores_Maquinas[x]=vreg[18];
                            
                       }     
                    }
                }
            };
             newlaudosetmaq=new laudo_setores_maquina();

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


