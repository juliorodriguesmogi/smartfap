charset='utf-8';
function laudo_setores_pericia(){
                
                this.inicializa=function(){
                    this.Codigo_Empresa_Setores_Pericia=Array();
                    this.Ano_Pericia_Setores_Pericia=Array();
                    this.Numero_Laudo_Setores_Pericia=Array();
                    this.Revisao_Setores_Pericia=Array();
                    this.Sequencial_Setores_Pericia=Array();
                    this.Nome_Setores_Pericia=Array();
                    this.Descricao_Setores_Pericia=Array();
                    this.Unidade_Setores_Pericia=Array();
                    this.Codigo_Setor_Setores_Pericia=Array();
                    this.Arranjo_Fisico_Setores=Array();
                    this.Pe_Direito_Setores_Pericia=Array();
                    this.Piso_Setores_Pericia=Array();
                    this.Parede_Setores_Pericia=Array();
                    this.Cobertura_Setores_Pericia=Array();
                    this.Iluminacao_Natural_Setores_Pericia=Array();
                    this.Iluminacao_Artificial_Setores_Pericia=Array();
                    this.Data_Registro_Setores_Pericia=Array();
                    this.Session_id_Setores_Pericia=Array();
                    this.Ultimo_Usuario_Setores_Pericia=Array();
                    this.Ultima_Atualizacao_Setores_Pericia=Array();
                    this.Id_Usuario_Setores_Pericia=Array();
                    this.EPC_Eficaz_Setores_Pericia=Array();
                     
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return this.Codigo_Empresa_Setores_Pericia[nlinha];
                }                
                this.get_Numero_Laudo= function(nlinha){
                    return this.Numero_Laudo_Setores_Pericia[nlinha];
                }
                this.get_Ano_Pericia= function(nlinha){
                    return this.Ano_Pericia_Setores_Pericia[nlinha];
                }
                this.get_Revisao=function(nlinha){
                    return this.Revisao_Setores_Pericia[nlinha];
                }
                this.get_Sequencial=function(nlinha){
                    return this.Sequencial_Setores_Pericia[nlinha];
                }
                this.get_Nome_Setor=function(nlinha){
                    return this.Nome_Setores_Pericia[nlinha];
                }                 
                this.get_Descricao_Setor=function(nlinha){
                    return this.Descricao_Setores_Pericia[nlinha];
                }                       
                this.get_Pe_Direito=function(nlinha){
                    return this.Pe_Direito_Setores_Pericia[nlinha];
                }                       
                this.get_Piso=function(nlinha){
                    return this.Piso_Setores_Pericia[nlinha];
                }                       
                this.get_Parede=function(nlinha){
                    return this.Parede_Setores_Pericia[nlinha];
                }                       
                this.get_Cobertura=function(nlinha){
                    return this.Cobertura_Setores_Pericia[nlinha];
                }                       
                this.get_Iluminacao_Artificial=function(nlinha){
                    return this.Iluminacao_Artificial_Setores_Pericia[nlinha];
                }                       
                this.get_Iluminacao_Natural=function(nlinha){
                    return this.Iluminacao_Natural_Setores_Pericia[nlinha];
                }                       
                                                                
                this.get_Arranjo_Fisico=function(nlinha){
                    return this.Arranjo_Fisico_Setores[nlinha];
                }
                this.get_Unidade=function(nlinha){
                    return this.Unidade_Setores_Pericia[nlinha];
                }                       
                this.get_Codigo_Setor=function(nlinha){
                    return this.Codigo_Setor_Setores_Pericia[nlinha];
                }
                this.get_Data_Registro=function(nlinha){
                    return this.Data_Registro_Setores_Pericia[nlinha];
                }
                this.get_Session_id=function(nlinha){
                    return this.Session_id_Setores_Pericia[nlinha];
                }         
                this.get_Ultimo_Usuario=function(nlinha){
                    return this.Ultimo_Usuario_Setores_Pericia[nlinha];
                }         
                this.get_Id_Usuario=function(nlinha){
                    return this.Id_Usuario_Setores_Pericia[nlinha];
                }         
                this.get_Epc_Eficaz=function(nlinha){
                    return this.EPC_Eficaz_Setores_Pericia[nlinha];
                }         
                
                this.length=function(){
                    return this.Codigo_Empresa_Setores_Pericia.length;
                }                
                this.get_Ultima_Atualizacao=function(){
                    return this.Ultima_Atualizacao_Setores_Pericia[nlinha];
                }  
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-1;x++){
                            vreg=response[x].split('|');
                            this.Codigo_Empresa_Setores_Pericia[x]=vreg[0];
                            this.Ano_Pericia_Setores_Pericia[x]=vreg[1];
                            this.Numero_Laudo_Setores_Pericia[x]=vreg[2];
                            this.Revisao_Setores_Pericia[x]=vreg[3];
                            this.Unidade_Setores_Pericia[x]=vreg[4];
                            this.Codigo_Setor_Setores_Pericia[x]=vreg[5];
                            this.Sequencial_Setores_Pericia[x]=vreg[6];
                            this.Nome_Setores_Pericia[x]=vreg[7];
                            this.Descricao_Setores_Pericia[x]=vreg[8];
                            this.Pe_Direito_Setores_Pericia[x]=vreg[9];
                            this.Piso_Setores_Pericia[x]=vreg[10];
                            this.Parede_Setores_Pericia[x]=vreg[11];
                            this.Cobertura_Setores_Pericia[x]=vreg[12];
                            this.Iluminacao_Natural_Setores_Pericia[x]=vreg[13];
                            this.Iluminacao_Artificial_Setores_Pericia[x]=vreg[14];
                            this.Data_Registro_Setores_Pericia[x]=vreg[15];
                            this.Id_Usuario_Setores_Pericia[x]=vreg[16];
                            this.Session_id_Setores_Pericia[x]=vreg[17];
                            this.Ultima_Atualizacao_Setores_Pericia[x]=vreg[18];
                            this.Ultimo_Usuario_Setores_Pericia[x]=vreg[19];                     
                            this.Arranjo_Fisico_Setores[x]=vreg[20];                            
                            this.EPC_Eficaz_Setores_Pericia[x]=vreg[21];                            
                            
                       }     
                    }
                }
            };
             newlaudosetper=new laudo_setores_pericia();

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


