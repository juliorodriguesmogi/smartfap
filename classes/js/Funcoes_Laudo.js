function Funcoes_Laudo(){
this.inicializa=function(){
	 this.Codigo_funcao=Array();
	 this.Descricao_funcao_empresa=Array();
}
this.get_Codigo_funcao=function(nlinha){
	 return this.Codigo_funcao[nlinha];
}
this.get_Descricao_funcao_empresa=function(nlinha){
	 return this.Descricao_funcao_empresa[nlinha];
}

this.length=function(){
return this.Codigo_funcao.length;
}
this.setValores=function(response){
	 this.inicializa();
	 if (response[0]!='NF'){
		 for (x=0;x<response.length-1;x++){
		 vreg=response[x].split('|')
		 this.Codigo_funcao[x]=vreg[0];
		 this.Descricao_funcao_empresa[x]=vreg[1];
		 }
	}
}
};
newfuncoeslaudo=new Funcoes_Laudo();
