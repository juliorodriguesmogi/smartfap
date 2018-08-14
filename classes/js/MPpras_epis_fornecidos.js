function MPpras_epis_fornecidos(){
this.inicializa=function(){
	 this.Codigo_empresa=Array();
	 this.Ano_pericia=Array();
	 this.Numero_ppra=Array();
	 this.Codigo_epi=Array();
	 this.Descricao_epi=Array();
	 this.Ca_epi=Array();
	 this.Categoria_protecao=Array();
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
this.get_Codigo_epi=function(nlinha){
	 return this.Codigo_epi[nlinha];
}
this.get_Descricao_epi=function(nlinha){
	 return this.Descricao_epi[nlinha];
}
this.get_Ca_epi=function(nlinha){
	 return this.Ca_epi[nlinha];
}
this.get_Categoria_protecao=function(nlinha){
	 return this.Categoria_protecao[nlinha];
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
		 this.Codigo_epi[x]=vreg[3];
		 this.Descricao_epi[x]=vreg[4];
		 this.Ca_epi[x]=vreg[5];
		 this.Categoria_protecao[x]=vreg[6];
		 this.Id_usuario[x]=vreg[7];
		 this.Session_id[x]=vreg[8];
		 this.Ultima_atualizacao[x]=vreg[9];
		 this.Ultimo_usuario[x]=vreg[10];
		 }
	}
}
};
newpprasepis_fornecidos=new MPpras_epis_fornecidos();
