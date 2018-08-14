function Funcoes(){
this.inicializa=function(){
	 this.Codigo_empresa=Array();
	 this.Codigo_funcao=Array();
	 this.Descricao_funcao_empresa=Array();
	 this.Classificacao_funcao=Array();
	 this.Codigo_cbo_familia=Array();
	 this.Codigo_cbo_ocupacao=Array();
	 this.Codigo_cbo_sinonimo=Array();
	 this.Descricao_resumida_familia=Array();
	 this.Descricao_resumida_ocupacao=Array();
	 this.Descricao_resumida_sinonimo=Array();
	 this.Descricao_detalhada_familia=Array();
	 this.Descricao_detalhada_ocupacao=Array();
	 this.Descricao_detalhada_sinonimo=Array();
	 this.Data_cadastro=Array();
	 this.Ultima_atualizacao=Array();
	 this.Ultimo_usuario=Array();
	 this.Id_usuario=Array();
	 this.Descricao_ltcat=Array();
	 this.Cargo_funcao=Array();
}
this.get_Codigo_empresa=function(nlinha){
	 return this.Codigo_empresa[nlinha];
}
this.get_Codigo_funcao=function(nlinha){
	 return this.Codigo_funcao[nlinha];
}
this.get_Descricao_funcao_empresa=function(nlinha){
	 return this.Descricao_funcao_empresa[nlinha];
}
this.get_Classificacao_funcao=function(nlinha){
	 return this.Classificacao_funcao[nlinha];
}
this.get_Codigo_cbo_familia=function(nlinha){
	 return this.Codigo_cbo_familia[nlinha];
}
this.get_Codigo_cbo_ocupacao=function(nlinha){
	 return this.Codigo_cbo_ocupacao[nlinha];
}
this.get_Codigo_cbo_sinonimo=function(nlinha){
	 return this.Codigo_cbo_sinonimo[nlinha];
}
this.get_Descricao_resumida_familia=function(nlinha){
	 return this.Descricao_resumida_familia[nlinha];
}
this.get_Descricao_resumida_ocupacao=function(nlinha){
	 return this.Descricao_resumida_ocupacao[nlinha];
}
this.get_Descricao_resumida_sinonimo=function(nlinha){
	 return this.Descricao_resumida_sinonimo[nlinha];
}
this.get_Descricao_detalhada_familia=function(nlinha){
	 return this.Descricao_detalhada_familia[nlinha];
}
this.get_Descricao_detalhada_ocupacao=function(nlinha){
	 return this.Descricao_detalhada_ocupacao[nlinha];
}
this.get_Descricao_detalhada_sinonimo=function(nlinha){
	 return this.Descricao_detalhada_sinonimo[nlinha];
}
this.get_Data_cadastro=function(nlinha){
	 return this.Data_cadastro[nlinha];
}
this.get_Ultima_atualizacao=function(nlinha){
	 return this.Ultima_atualizacao[nlinha];
}
this.get_Ultimo_usuario=function(nlinha){
	 return this.Ultimo_usuario[nlinha];
}
this.get_Id_usuario=function(nlinha){
	 return this.Id_usuario[nlinha];
}
this.get_Descricao_ltcat=function(nlinha){
	 return this.Descricao_ltcat[nlinha];
}
this.get_Cargo_funcao=function(nlinha){
	 return this.Cargo_funcao[nlinha];
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
		 this.Codigo_funcao[x]=vreg[1];
		 this.Descricao_funcao_empresa[x]=vreg[2];
		 this.Classificacao_funcao[x]=vreg[3];
		 this.Codigo_cbo_familia[x]=vreg[4];
		 this.Codigo_cbo_ocupacao[x]=vreg[5];
		 this.Codigo_cbo_sinonimo[x]=vreg[6];
		 this.Descricao_resumida_familia[x]=vreg[7];
		 this.Descricao_resumida_ocupacao[x]=vreg[8];
		 this.Descricao_resumida_sinonimo[x]=vreg[9];
		 this.Descricao_detalhada_familia[x]=vreg[10];
		 this.Descricao_detalhada_ocupacao[x]=vreg[11];
		 this.Descricao_detalhada_sinonimo[x]=vreg[12];
		 this.Data_cadastro[x]=vreg[13];
		 this.Ultima_atualizacao[x]=vreg[14];
		 this.Ultimo_usuario[x]=vreg[15];
		 this.Id_usuario[x]=vreg[16];
		 this.Descricao_ltcat[x]=vreg[17];
		 this.Cargo_funcao[x]=vreg[18];
		 }
	}
}
};
newfuncoes=new Funcoes();
