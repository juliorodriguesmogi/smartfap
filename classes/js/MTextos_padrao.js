function MTextos_padrao(){
this.inicializa=function(){
	 this.Codigo_texto=Array();
	 this.Tipo_agente=Array();
	 this.Nome_agente=Array();
	 this.Classificacao_texto=Array();
	 this.Sequencia=Array();
	 this.Texto=Array();
}
this.get_Codigo_texto=function(nlinha){
	 return this.Codigo_texto[nlinha];
}
this.get_Tipo_agente=function(nlinha){
	 return this.Tipo_agente[nlinha];
}
this.get_Nome_agente=function(nlinha){
	 return this.Nome_agente[nlinha];
}
this.get_Classificacao_texto=function(nlinha){
	 return this.Classificacao_texto[nlinha];
}
this.get_Sequencia=function(nlinha){
	 return this.Sequencia[nlinha];
}
this.get_Texto=function(nlinha){
	 return this.Texto[nlinha];
}
this.length=function(){
return this.Codigo_texto.length;
}
this.setValores=function(response){
	 this.inicializa();
	 if (response[0]!='NF'){
		 for (x=0;x<response.length-1;x++){
		 vreg=response[x].split('|')
		 this.Codigo_texto[x]=vreg[0];
		 this.Tipo_agente[x]=vreg[1];
		 this.Nome_agente[x]=vreg[2];
		 this.Classificacao_texto[x]=vreg[3];
		 this.Sequencia[x]=vreg[4];
		 this.Texto[x]=vreg[5];
		 }
	}
}
};
newtextospadrao=new MTextos_padrao();
