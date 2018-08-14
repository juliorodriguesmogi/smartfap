function MLaudos_avaliacoes_outros_biologicos_maquinas(){
this.inicializa=function(){
	 this.Codigo_empresa=Array();
	 this.Ano_pericia=Array();
	 this.Numero_laudo=Array();
	 this.Revisao=Array();
	 this.Unidade=Array();
	 this.Codigo_setor=Array();
	 this.Codigo_maquina=Array();
	 this.Sequencial=Array();
	 this.Valor_medido=Array();
	 this.Valor_referencia=Array();
	 this.Funcao_exposta=Array();
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
this.get_Codigo_maquina=function(nlinha){
	 return this.Codigo_maquina[nlinha];
}
this.get_Sequencial=function(nlinha){
	 return this.Sequencial[nlinha];
}
this.get_Valor_medido=function(nlinha){
	 return this.Valor_medido[nlinha];
}
this.get_Valor_referencia=function(nlinha){
	 return this.Valor_referencia[nlinha];
}
this.get_Funcao_exposta=function(nlinha){
	 return this.Funcao_exposta[nlinha];
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
		 this.Codigo_maquina[x]=vreg[6];
		 this.Sequencial[x]=vreg[7];
		 this.Valor_medido[x]=vreg[8];
		 this.Valor_referencia[x]=vreg[9];
		 this.Funcao_exposta[x]=vreg[10];
		 this.Id_usuario[x]=vreg[11];
		 this.Session_id[x]=vreg[12];
		 this.Ultima_atualizacao[x]=vreg[13];
		 this.Ultimo_usuario[x]=vreg[14];
		 }
	}
}
};
newlaudosavaliacoes_outros_biologicos_maquinas=new MLaudos_avaliacoes_outros_biologicos_maquinas();
