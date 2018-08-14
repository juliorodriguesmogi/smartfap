function Mlaudos_avaliacoes_umidade(){
this.inicializa=function(){
	Codigo_empresa=Array();
	Ano_pericia=Array();
	Numero_laudo=Array();
	Revisao=Array();
	Unidade=Array();
	Codigo_setor=Array();
	Tipo_avaliacao=Array();
	Sequencial=Array();
	Numero_funcs_setor=Array();
	Numero_funcs_expostos=Array();
	Periodicidade_exposicao=Array();
	Texto_explicativo=Array();
	Umidade_medida=Array();
	Umidade_permitida=Array();
	Medidas_protecao_coletiva=Array();
	Medidas_protecao_individual=Array();
	Medidas_protecao_coletiva_outros=Array();
	Medidas_protecao_individual_outros=Array();
	Enquadramento=Array();
        Grau_risco=Array();
	Id_usuario=Array();
	Session_id=Array();
	Ultima_atualizacao=Array();
	Ultimo_usuario=Array();
	Observacoes=Array();
	Acoes_ppra=Array();
        Fonte_geradora=Array();
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
this.get_Tipo_avaliacao=function(nlinha){
	 return Tipo_avaliacao[nlinha];
}
this.get_Sequencial=function(nlinha){
	 return Sequencial[nlinha];
}
this.get_Numero_funcs_setor=function(nlinha){
	 return Numero_funcs_setor[nlinha];
}
this.get_Numero_funcs_expostos=function(nlinha){
	 return Numero_funcs_expostos[nlinha];
}
this.get_Periodicidade_exposicao=function(nlinha){
	 return Periodicidade_exposicao[nlinha];
}
this.get_Texto_explicativo=function(nlinha){
	 return Texto_explicativo[nlinha];
}
this.get_Umidade_medida=function(nlinha){
	 return Umidade_medida[nlinha];
}
this.get_Umidade_permitida=function(nlinha){
	 return Umidade_permitida[nlinha];
}
this.get_Medidas_protecao_coletiva=function(nlinha){
	 return Medidas_protecao_coletiva[nlinha];
}
this.get_Medidas_protecao_coletiva_outros=function(nlinha){
	 return Medidas_protecao_coletiva_outros[nlinha];
}

this.get_Medidas_protecao_individual=function(nlinha){
	 return Medidas_protecao_individual[nlinha];
}
this.get_Medidas_protecao_individual_outros=function(nlinha){
	 return Medidas_protecao_individual_outros[nlinha];
}
this.get_Enquadramento=function(nlinha){
	 return Enquadramento[nlinha];
}
this.get_Grau_risco=function(nlinha){
	 return Grau_risco[nlinha];
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
this.get_Observacoes=function(nlinha){
	 return Observacoes[nlinha];
}
this.get_Acoes_ppra=function(nlinha){
	 return Acoes_ppra[nlinha];
}
this.get_Fonte_geradora=function(nlinha){
        return Fonte_geradora[nlinha];
}
	 this.length=function(){
	 return Codigo_empresa.length ;
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
		Tipo_avaliacao[x]=vreg[6];
		Sequencial[x]=vreg[7];
		Numero_funcs_setor[x]=vreg[8];
		Numero_funcs_expostos[x]=vreg[9];
		Periodicidade_exposicao[x]=vreg[10];
		Texto_explicativo[x]=vreg[11];
		Umidade_medida[x]=vreg[12];
		Umidade_permitida[x]=vreg[13];
		Medidas_protecao_coletiva[x]=vreg[14];
                Medidas_protecao_coletiva_outros[x]=vreg[15];
		Medidas_protecao_individual[x]=vreg[16];
                Medidas_protecao_individual_outros[x]=vreg[17];
		Enquadramento[x]=vreg[18];
		Id_usuario[x]=vreg[19];
		Session_id[x]=vreg[20];
		Ultima_atualizacao[x]=vreg[21];
		Ultimo_usuario[x]=vreg[22];
		Observacoes[x]=vreg[23];
		Acoes_ppra[x]=vreg[24];
                Fonte_geradora[x]=vreg[25];
                Grau_risco[x]=vreg[26];
		 }
	}
}
};
newlaudosavaliacoes_umidade=new Mlaudos_avaliacoes_umidade();
