function MPpras_cronograma_prioridade(){
this.inicializa=function(){
	 this.Codigo_empresa=Array();
	 this.Ano_pericia=Array();
	 this.Numero_ppra=Array();
	 this.Sequencial=Array();
	 this.Prioridade_acao=Array();
	 this.Objetivo=Array();
	 this.Mes_execucao=Array();
	 this.Ano_execucao=Array();
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
this.get_Sequencial=function(nlinha){
	 return this.Sequencial[nlinha];
}
this.get_Prioridade_acao=function(nlinha){
	 return this.Prioridade_acao[nlinha];
}
this.get_Objetivo=function(nlinha){
	 return this.Objetivo[nlinha];
}
this.get_Mes_execucao=function(nlinha){
	 return this.Mes_execucao[nlinha];
}
this.get_Ano_execucao=function(nlinha){
	 return this.Ano_execucao[nlinha];
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
		 this.Sequencial[x]=vreg[3];
		 this.Prioridade_acao[x]=vreg[4];
		 this.Objetivo[x]=vreg[5];
		 this.Mes_execucao[x]=vreg[6];
		 this.Ano_execucao[x]=vreg[7];
		 this.Id_usuario[x]=vreg[8];
		 this.Session_id[x]=vreg[9];
		 this.Ultima_atualizacao[x]=vreg[10];
		 this.Ultimo_usuario[x]=vreg[11];
		 }
	}
}
};
newpprascronograma_prioridade=new MPpras_cronograma_prioridade();
