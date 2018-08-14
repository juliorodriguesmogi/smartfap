function MPpras_agentes_identificados_funcoes(){
this.inicializa=function(){
	 this.Codigo_empresa=Array();
	 this.Ano_pericia=Array();
	 this.Numero_ppra=Array();
	 this.Unidade=Array();
	 this.Codigo_setor=Array();
	 this.Codigo_funcao=Array();
	 this.Descricao_unidade=Array();
	 this.Descricao_setor=Array();
	 this.Descricao_funcao=Array();
	 this.Tipo=Array();
	 this.Sequencial=Array();
	 this.Funcionarios_expostos_sexo_masculino=Array();
	 this.Funcionarios_expostos_sexo_feminino=Array();
	 this.Epi_eficaz=Array();
	 this.Ca_epi=Array();
	 this.Epc_eficaz=Array();
	 this.Id_usuario=Array();
	 this.Session_id=Array();
	 this.Ultima_atualizacao=Array();
	 this.Ultimo_usuario=Array();
}
this.get_Codigo_empresa=function(nlinha){
	 return this.Codigo_empresa[nlinha];
}
this.get_Ano_pericia=function(nlinha){
	 return this.Ano_pericia[nlinha];
}
this.get_Numero_ppra=function(nlinha){
	 return this.Numero_ppra[nlinha];
}
this.get_Unidade=function(nlinha){
	 return this.Unidade[nlinha];
}
this.get_Codigo_setor=function(nlinha){
	 return this.Codigo_setor[nlinha];
}
this.get_Codigo_funcao=function(nlinha){
	 return this.Codigo_funcao[nlinha];
}
this.get_Descricao_unidade=function(nlinha){
	 return this.Descricao_unidade[nlinha];
}
this.get_Descricao_setor=function(nlinha){
	 return this.Descricao_setor[nlinha];
}
this.get_Descricao_funcao=function(nlinha){
	 return this.Descricao_funcao[nlinha];
}
this.get_Tipo=function(nlinha){
	 return this.Tipo[nlinha];
}
this.get_Sequencial=function(nlinha){
	 return this.Sequencial[nlinha];
}
this.get_Funcionarios_expostos_sexo_masculino=function(nlinha){
	 return this.Funcionarios_expostos_sexo_masculino[nlinha];
}
this.get_Funcionarios_expostos_sexo_feminino=function(nlinha){
	 return this.Funcionarios_expostos_sexo_feminino[nlinha];
}
this.get_Epi_eficaz=function(nlinha){
	 return this.Epi_eficaz[nlinha];
}
this.get_Ca_epi=function(nlinha){
	 return this.Ca_epi[nlinha];
}
this.get_Epc_eficaz=function(nlinha){
	 return this.Epc_eficaz[nlinha];
}
this.get_Id_usuario=function(nlinha){
	 return this.Id_usuario[nlinha];
}
this.get_Session_id=function(nlinha){
	 return this.Session_id[nlinha];
}
this.get_Ultima_atualizacao=function(nlinha){
	 return this.Ultima_atualizacao[nlinha];
}
this.get_Ultimo_usuario=function(nlinha){
	 return this.Ultimo_usuario[nlinha];
}
this.length=function(){
return this.Codigo_empresa.length;
}
this.setValores=function(response){
	 this.inicializa();
	 if (response[0]!='NF'){
		 for (x=0;x<response.length-1;x++){
		 vreg=response[x].split('|')
		 this.Codigo_empresa[x]=vreg[0];
		 this.Ano_pericia[x]=vreg[1];
		 this.Numero_ppra[x]=vreg[2];
		 this.Unidade[x]=vreg[3];
		 this.Codigo_setor[x]=vreg[4];
		 this.Codigo_funcao[x]=vreg[5];
		 this.Descricao_unidade[x]=vreg[6];
		 this.Descricao_setor[x]=vreg[7];
		 this.Descricao_funcao[x]=vreg[8];
		 this.Tipo[x]=vreg[9];
		 this.Sequencial[x]=vreg[10];
		 this.Funcionarios_expostos_sexo_masculino[x]=vreg[11];
		 this.Funcionarios_expostos_sexo_feminino[x]=vreg[12];
		 this.Epi_eficaz[x]=vreg[13];
		 this.Ca_epi[x]=vreg[14];
		 this.Epc_eficaz[x]=vreg[15];
		 this.Id_usuario[x]=vreg[16];
		 this.Session_id[x]=vreg[17];
		 this.Ultima_atualizacao[x]=vreg[18];
		 this.Ultimo_usuario[x]=vreg[19];
		 }
	}
}
};
newpprasagentes_identificados_funcoes=new MPpras_agentes_identificados_funcoes();
