function Laudos_avaliacoes_frio_maquinas(){
this.inicializa=function(){
	Codigo_empresa=Array();
	Ano_pericia=Array();
	Numero_laudo=Array();
	Revisao=Array();
	Unidade=Array();
	Codigo_setor=Array();
	Codigo_maquina=Array();
	Sequencial=Array();
	Temperatura_medida=Array();
	Temperatura_permitida=Array();
	Id_usuario=Array();
	Session_id=Array();
	Ultima_atualizacao=Array();
	Ultimo_usuario=Array();
}
this.get_Codigo_empresa=function(nlinha){
	 return Codigo_empresa[nlinha];
}
this.get_Ano_pericia=function(nlinha){
	 return Ano_pericia[nlinha];
}
this.get_Numero_laudo=function(nlinha){
	 return Numero_laudo[nlinha];
}
this.get_Revisao=function(nlinha){
	 return Revisao[nlinha];
}
this.get_Unidade=function(nlinha){
	 return Unidade[nlinha];
}
this.get_Codigo_setor=function(nlinha){
	 return Codigo_setor[nlinha];
}
this.get_Codigo_maquina=function(nlinha){
	 return Codigo_maquina[nlinha];
}
this.get_Sequencial=function(nlinha){
	 return Sequencial[nlinha];
}
this.get_Temperatura_medida=function(nlinha){
	 return Temperatura_medida[nlinha];
}
this.get_Temperatura_permitida=function(nlinha){
	 return Temperatura_permitida[nlinha];
}
this.get_Id_usuario=function(nlinha){
	 return Id_usuario[nlinha];
}
this.get_Session_id=function(nlinha){
	 return Session_id[nlinha];
}
this.get_Ultima_atualizacao=function(nlinha){
	 return Ultima_atualizacao[nlinha];
}
this.get_Ultimo_usuario=function(nlinha){
	 return Ultimo_usuario[nlinha];
}
this.setValores=function(response){
	 this.inicializa();
	 if (response[0]!='NF'){
		 for (x=0;x<response.length-1;x++){
		 vreg=response[x].split('|')
		Codigo_empresa[x]=vreg[0];
		Ano_pericia[x]=vreg[1];
		Numero_laudo[x]=vreg[2];
		Revisao[x]=vreg[3];
		Unidade[x]=vreg[4];
		Codigo_setor[x]=vreg[5];
		Codigo_maquina[x]=vreg[6];
		Sequencial[x]=vreg[7];
		Temperatura_medida[x]=vreg[8];
		Temperatura_permitida[x]=vreg[9];
		Id_usuario[x]=vreg[10];
		Session_id[x]=vreg[11];
		Ultima_atualizacao[x]=vreg[12];
		Ultimo_usuario[x]=vreg[13];
		 }
	}
}
};
newlaudosavaliacoes_frio_maquinas_=new Laudos_avaliacoes_frio_maquinas();
