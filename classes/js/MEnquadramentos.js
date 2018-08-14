function MEnquadramentos(){
this.inicializa=function(){
	 this.Codigo_enquadramento=Array();
	 this.Tipo_agente=Array();
	 this.Nome_agente=Array();
	 this.Classificacao_enquadramento=Array();
	 this.Classificacao_metodologia=Array();
	 this.Enquadramento=Array();
}
this.get_Codigo_enquadramento=function(nlinha){
	 return this.Codigo_enquadramento[nlinha];
}
this.get_Tipo_agente=function(nlinha){
	 return this.Tipo_agente[nlinha];
}
this.get_Nome_agente=function(nlinha){
	 return this.Nome_agente[nlinha];
}
this.get_Classificacao_enquadramento=function(nlinha){
	 return this.Classificacao_enquadramento[nlinha];
}
this.get_Classificacao_metodologia=function(nlinha){
	 return this.Classificacao_metodologia[nlinha];
}
this.get_Enquadramento=function(nlinha){
	 return this.Enquadramento[nlinha];
}
this.length=function(){
return this.Codigo_enquadramento.length;
}
this.setValores=function(response){
	 this.inicializa();
	 if (response[0]!='NF'){
		 for (x=0;x<response.length-1;x++){
		 vreg=response[x].split('|')
		 this.Codigo_enquadramento[x]=vreg[0];
		 this.Tipo_agente[x]=vreg[1];
		 this.Nome_agente[x]=vreg[2];
		 this.Classificacao_enquadramento[x]=vreg[3];
		 this.Classificacao_metodologia[x]=vreg[4];
		 this.Enquadramento[x]=vreg[5];
		 }
	}
}
};
newenquadramento=new MEnquadramentos();
