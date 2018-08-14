function MPpras_responsaveis(){
this.inicializa=function(){
	 this.Codigo_empresa=Array();
	 this.Ano_pericia=Array();
	 this.Numero_ppra=Array();
	 this.Codigo_responsavel=Array();
	 this.Tipo_responsavel=Array();
	 this.Nome_responsavel=Array();
	 this.Funcao=Array();
	 this.Data_admissao=Array();
	 this.Data_criacao=Array();
	 this.Tipo_registro=Array();
	 this.Numero_registro=Array();
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
this.get_Codigo_responsavel=function(nlinha){
	 return this.Codigo_responsavel[nlinha];
}
this.get_Tipo_responsavel=function(nlinha){
	 return this.Tipo_responsavel[nlinha];
}
this.get_Nome_responsavel=function(nlinha){
	 return this.Nome_responsavel[nlinha];
}
this.get_Funcao=function(nlinha){
	 return this.Funcao[nlinha];
}
this.get_Data_admissao=function(nlinha){
	 return this.Data_admissao[nlinha];
}
this.get_Data_criacao=function(nlinha){
	 return this.Data_criacao[nlinha];
}
this.get_Tipo_registro=function(nlinha){
	 return this.Tipo_registro[nlinha];
}
this.get_Numero_registro=function(nlinha){
	 return this.Numero_registro[nlinha];
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
		 this.Codigo_responsavel[x]=vreg[3];
		 this.Tipo_responsavel[x]=vreg[4];
		 this.Nome_responsavel[x]=vreg[5];
		 this.Funcao[x]=vreg[6];
		 this.Data_admissao[x]=vreg[7];
		 this.Data_criacao[x]=vreg[8];
		 this.Tipo_registro[x]=vreg[9];
		 this.Numero_registro[x]=vreg[10];
		 this.Id_usuario[x]=vreg[11];
		 this.Session_id[x]=vreg[12];
		 this.Ultima_atualizacao[x]=vreg[13];
		 this.Ultimo_usuario[x]=vreg[14];
		 }
	}
}
};
newpprasresponsaveis=new MPpras_responsaveis();
