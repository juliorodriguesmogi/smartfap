function MLaudos_avaliacoes_outros_qumicos_funcoes(){
this.inicializa=function(){
	Codigo_empresa=Array();
	Ano_pericia=Array();
	Numero_laudo=Array();
	Revisao=Array();
	Unidade=Array();
	Codigo_setor=Array();
	Sequencial=Array();
	Codigo_funcao=Array();
	Funcao_exposta=Array();
	Id_usuario=Array();
	Session_id=Array();
	Ultima_atualizacao=Array();
	Ultimo_usuario=Array();
}
this.get_Codigo_empresa=function(nlinha){
	 return Codigo_empresa[nlinha];
}
this.get_Ano_pericia=function(nlinha){
	 return Ano_pericia[nlinha];
}
this.get_Numero_laudo=function(nlinha){
	 return Numero_laudo[nlinha];
}
this.get_Revisao=function(nlinha){
	 return Revisao[nlinha];
}
this.get_Unidade=function(nlinha){
	 return Unidade[nlinha];
}
this.get_Codigo_setor=function(nlinha){
	 return Codigo_setor[nlinha];
}
this.get_Sequencial=function(nlinha){
	 return Sequencial[nlinha];
}
this.get_Codigo_funcao=function(nlinha){
	 return Codigo_funcao[nlinha];
}
this.get_Funcao_exposta=function(nlinha){
	 return Funcao_exposta[nlinha];
}
this.get_Id_usuario=function(nlinha){
	 return Id_usuario[nlinha];
}
this.get_Session_id=function(nlinha){
	 return Session_id[nlinha];
}
this.get_Ultima_atualizacao=function(nlinha){
	 return Ultima_atualizacao[nlinha];
}
this.get_Ultimo_usuario=function(nlinha){
	 return Ultimo_usuario[nlinha];
}
this.setValores=function(response){
	 this.inicializa();
	 if (response[0]!='NF'){
		 for (x=0;x<response.length-1;x++){
		 vreg=response[x].split('|')
		Codigo_empresa[x]=vreg[0];
		Ano_pericia[x]=vreg[1];
		Numero_laudo[x]=vreg[2];
		Revisao[x]=vreg[3];
		Unidade[x]=vreg[4];
		Codigo_setor[x]=vreg[5];
		Sequencial[x]=vreg[6];
		Codigo_funcao[x]=vreg[7];
		Funcao_exposta[x]=vreg[8];
		Id_usuario[x]=vreg[9];
		Session_id[x]=vreg[10];
		Ultima_atualizacao[x]=vreg[11];
		Ultimo_usuario[x]=vreg[12];
		 }
	}
}
};
newlaudosavaliacoes_outros_qumicos_funcoes=new MLaudos_avaliacoes_outros_qumicos_funcoes();
