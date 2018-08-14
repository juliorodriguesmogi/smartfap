function MLaudos_tipos_avaliacoes(){
this.inicializa=function(){
	this.Codigo_empresa=Array();
	this.Ano_pericia=Array();
	this.Numero_laudo=Array();
	this.Revisao=Array();
	this.Unidade=Array();
	this.Codigo_setor=Array();
	this.Tipo_avaliacao=Array();
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
this.get_Tipo_avaliacao=function(nlinha){
	 return this.Tipo_avaliacao[nlinha];
}
this.length=function(){
         return this.Tipo_avaliacao.length;
}
this.setValores=function(response){
	 this.inicializa();
	 if (response[0]!='NF'){
             for (x=0;x<response.length-1;x++){
		 vreg=response[x].split('|')
		this.Tipo_avaliacao[x]=vreg[0];
             }
	}
}
};
newlaudostipoaval=new MLaudos_tipos_avaliacoes();
