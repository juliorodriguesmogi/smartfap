function MLaudos_avaliacoes_sangue_animal_funcoes(){
this.inicializa=function(){
	 this.Codigo_empresa=Array();
	 this.Ano_pericia=Array();
	 this.Numero_laudo=Array();
	 this.Revisao=Array();
	 this.Unidade=Array();
	 this.Codigo_setor=Array();
	 this.Codigo_funcao=Array();
	 this.Periodicidade_exposicao=Array();
	 this.Intensidade_concentracao=Array();
	 this.Intensidade_concentracao_unidade=Array();
	 this.Tecnica_utilizada=Array();
	 this.Grau_insalubridade=Array();
	 this.Sequencial=Array();
	 this.Epc_eficaz=Array();
	 this.Epi_eficaz=Array();
	 this.Ca_epi=Array();
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
this.get_Numero_laudo=function(nlinha){
	 return this.Numero_laudo[nlinha];
}
this.get_Revisao=function(nlinha){
	 return this.Revisao[nlinha];
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
this.get_Periodicidade_exposicao=function(nlinha){
	 return this.Periodicidade_exposicao[nlinha];
}
this.get_Intensidade_concentracao=function(nlinha){
	 return this.Intensidade_concentracao[nlinha];
}
this.get_Intensidade_concentracao_unidade=function(nlinha){
	 return this.Intensidade_concentracao_unidade[nlinha];
}
this.get_Tecnica_utilizada=function(nlinha){
	 return this.Tecnica_utilizada[nlinha];
}
this.get_Grau_insalubridade=function(nlinha){
	 return this.Grau_insalubridade[nlinha];
}
this.get_Sequencial=function(nlinha){
	 return this.Sequencial[nlinha];
}
this.get_Epc_eficaz=function(nlinha){
	 return this.Epc_eficaz[nlinha];
}
this.get_Epi_eficaz=function(nlinha){
	 return this.Epi_eficaz[nlinha];
}
this.get_Ca_epi=function(nlinha){
	 return this.Ca_epi[nlinha];
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
		 this.Numero_laudo[x]=vreg[2];
		 this.Revisao[x]=vreg[3];
		 this.Unidade[x]=vreg[4];
		 this.Codigo_setor[x]=vreg[5];
		 this.Codigo_funcao[x]=vreg[6];
		 this.Periodicidade_exposicao[x]=vreg[7];
		 this.Intensidade_concentracao[x]=vreg[8];
		 this.Intensidade_concentracao_unidade[x]=vreg[9];
		 this.Tecnica_utilizada[x]=vreg[10];
		 this.Grau_insalubridade[x]=vreg[11];
		 this.Sequencial[x]=vreg[12];
		 this.Epc_eficaz[x]=vreg[13];
		 this.Epi_eficaz[x]=vreg[14];
		 this.Ca_epi[x]=vreg[15];
		 this.Id_usuario[x]=vreg[16];
		 this.Session_id[x]=vreg[17];
		 this.Ultima_atualizacao[x]=vreg[18];
		 this.Ultimo_usuario[x]=vreg[19];
		 }
	}
}
};
newlaudosavaliacoes_sangue_animal_funcoes=new MLaudos_avaliacoes_sangue_animal_funcoes();
