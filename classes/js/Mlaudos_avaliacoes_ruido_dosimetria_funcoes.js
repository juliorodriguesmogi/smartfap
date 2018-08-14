function MLaudos_avaliacoes_ruido_dosimetria_funcoes(){
this.inicializa=function(){
	 this.Codigo_empresa=Array();
	 this.Ano_pericia=Array();
	 this.Numero_laudo=Array();
	 this.Revisao=Array();
	 this.Unidade=Array();
	 this.Codigo_setor=Array();
	 this.Codigo_funcao=Array();
	 this.Sequencial=Array();
	 this.Codigo_funcionario=Array();
	 this.Turno=Array();
	 this.Data_dosimetria=Array();
	 this.Funcao_exposta=Array();
	 this.Inicio_dosimetria=Array();
	 this.Termino_dosimetria=Array();
	 this.Tempo_dosimetria=Array();
	 this.Dose=Array();
	 this.Ruido_equivalente=Array();
	 this.Nivel_atenuacao_protetor=Array();
	 this.Nivel_ruido_atenuado=Array();
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
this.get_Codigo_funcao=function(nlinha){
	 return this.Codigo_funcao[nlinha];
}
this.get_Sequencial=function(nlinha){
	 return this.Sequencial[nlinha];
}
this.get_Codigo_funcionario=function(nlinha){
	 return this.Codigo_funcionario[nlinha];
}
this.get_Turno=function(nlinha){
	 return this.Turno[nlinha];
}
this.get_Data_dosimetria=function(nlinha){
	 return this.Data_dosimetria[nlinha];
}
this.get_Funcao_exposta=function(nlinha){
	 return this.Funcao_exposta[nlinha];
}
this.get_Inicio_dosimetria=function(nlinha){
	 return this.Inicio_dosimetria[nlinha];
}
this.get_Termino_dosimetria=function(nlinha){
	 return this.Termino_dosimetria[nlinha];
}
this.get_Tempo_dosimetria=function(nlinha){
	 return this.Tempo_dosimetria[nlinha];
}
this.get_Dose=function(nlinha){
	 return this.Dose[nlinha];
}
this.get_Ruido_equivalente=function(nlinha){
	 return this.Ruido_equivalente[nlinha];
}
this.get_Nivel_atenuacao_protetor=function(nlinha){
	 return this.Nivel_atenuacao_protetor[nlinha];
}
this.get_Nivel_ruido_atenuado=function(nlinha){
	 return this.Nivel_ruido_atenuado[nlinha];
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
		 this.Codigo_funcao[x]=vreg[6];
		 this.Sequencial[x]=vreg[7];
		 this.Codigo_funcionario[x]=vreg[8];
		 this.Turno[x]=vreg[9];
		 this.Data_dosimetria[x]=vreg[10];
		 this.Funcao_exposta[x]=vreg[11];
		 this.Inicio_dosimetria[x]=vreg[12];
		 this.Termino_dosimetria[x]=vreg[13];
		 this.Tempo_dosimetria[x]=vreg[14];
		 this.Dose[x]=vreg[15];
		 this.Ruido_equivalente[x]=vreg[16];
		 this.Nivel_atenuacao_protetor[x]=vreg[17];
		 this.Nivel_ruido_atenuado[x]=vreg[18];
		 this.Id_usuario[x]=vreg[19];
		 this.Session_id[x]=vreg[20];
		 this.Ultima_atualizacao[x]=vreg[21];
		 this.Ultimo_usuario[x]=vreg[22];
		 }
	}
}
};
newlaudosavaliacoes_ruido_dosimetria_funcoes=new MLaudos_avaliacoes_ruido_dosimetria_funcoes();
