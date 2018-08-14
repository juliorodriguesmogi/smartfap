function Funcionarios_exposicao_fatores_riscos(){
this.inicializa=function(){
	Codigo_empresa=Array();
	Codigo_funcionario=Array();
	Data_inicio_exposicao=Array();
	Data_fim_exposicao=Array();
	Tipo_exposicao=Array();
	Fator_risco=Array();
	Intensidade_concentracao=Array();
	Tecnica_utilizada=Array();
	Epc_eficaz=Array();
	Ca_epi=Array();
	Epi_eficaz=Array();
	Id_usuario=Array();
}
this.get_Codigo_empresa=function(nlinha){
	 return Codigo_empresa[nlinha];
}
this.get_Codigo_funcionario=function(nlinha){
	 return Codigo_funcionario[nlinha];
}
this.get_Data_inicio_exposicao=function(nlinha){
	 return Data_inicio_exposicao[nlinha];
}
this.get_Data_fim_exposicao=function(nlinha){
	 return Data_fim_exposicao[nlinha];
}
this.get_Tipo_exposicao=function(nlinha){
	 return Tipo_exposicao[nlinha];
}
this.get_Fator_risco=function(nlinha){
	 return Fator_risco[nlinha];
}
this.get_Intensidade_concentracao=function(nlinha){
	 return Intensidade_concentracao[nlinha];
}
this.get_Tecnica_utilizada=function(nlinha){
	 return Tecnica_utilizada[nlinha];
}
this.get_Epc_eficaz=function(nlinha){
	 return Epc_eficaz[nlinha];
}
this.get_Ca_epi=function(nlinha){
	 return Ca_epi[nlinha];
}
this.get_Epi_eficaz=function(nlinha){
	 return Epi_eficaz[nlinha];
}
this.get_Id_usuario=function(nlinha){
	 return Id_usuario[nlinha];
}
this.setValores=function(response){
	 this.inicializa();
	 if (response[0]!='NF'){
		 for (x=0;x<response.length-1;x++){
		 vreg=response[x].split('|')
		Codigo_empresa[x]=vreg[0];
		Codigo_funcionario[x]=vreg[1];
		Data_inicio_exposicao[x]=vreg[2];
		Data_fim_exposicao[x]=vreg[3];
		Tipo_exposicao[x]=vreg[4];
		Fator_risco[x]=vreg[5];
		Intensidade_concentracao[x]=vreg[6];
		Tecnica_utilizada[x]=vreg[7];
		Epc_eficaz[x]=vreg[8];
		Ca_epi[x]=vreg[9];
		Epi_eficaz[x]=vreg[10];
		Id_usuario[x]=vreg[11];
		 }
	}
}
};
newfuncionariosexposicaofatoresriscos-=new Funcionarios_exposicao_fatores_riscos();
