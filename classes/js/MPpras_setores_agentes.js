function MPpras_setores_agentes(){
this.inicializa=function(){
	 this.Codigo_empresa=Array();
	 this.Ano_pericia=Array();
	 this.Numero_ppra=Array();
	 this.Unidade=Array();
	 this.Codigo_setor=Array();
	 this.Numero_laudo=Array();
	 this.Revisao=Array();
	 this.Sequencial=Array();
	 this.Descricao_setor=Array();
	 this.Agente=Array();
	 this.Tipo=Array();
	 this.Fonte_geradora=Array();
	 this.Intensidade=Array();
	 this.Grau_risco=Array();
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
this.get_Numero_laudo=function(nlinha){
	 return this.Numero_laudo[nlinha];
}
this.get_Revisao=function(nlinha){
	 return this.Revisao[nlinha];
}
this.get_Sequencial=function(nlinha){
	 return this.Sequencial[nlinha];
}
this.get_Descricao_setor=function(nlinha){
	 return this.Descricao_setor[nlinha];
}
this.get_Agente=function(nlinha){
	 return this.Agente[nlinha];
}
this.get_Tipo=function(nlinha){
	 return this.Tipo[nlinha];
}
this.get_Fonte_geradora=function(nlinha){
	 return this.Fonte_geradora[nlinha];
}
this.get_Intensidade=function(nlinha){
	 return this.Intensidade[nlinha];
}
this.get_Grau_risco=function(nlinha){
	 return this.Grau_risco[nlinha];
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
		 this.Agente[x]=vreg[6];
		 this.Tipo[x]=vreg[7];
		 this.Fonte_geradora[x]=vreg[8];
                 this.Intensidade[x]=vreg[9];
		 this.Grau_risco[x]=vreg[10];
		 }
	}
}
};
newpprassetores_agentes=new MPpras_setores_agentes();
