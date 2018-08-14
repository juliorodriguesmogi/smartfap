function MLaudos_avaliacoes_calor(){
this.inicializa=function(){
	this.Codigo_empresa=Array();
	this.Ano_pericia=Array();
	this.Numero_laudo=Array();
	this.Revisao=Array();
	this.Unidade=Array();
	this.Codigo_setor=Array();
	this.Tipo_avaliacao=Array();
	this.Sequencial=Array();
        this.Texto_explicativo=Array();
	this.Numero_funcs_setor=Array();
	this.Numero_funcs_expostos=Array();
	this.Periodicidade_exposicao=Array();
	this.Temperatura_nr17=Array();
	this.Temperatura_medida=Array();
	this.Medidas_protecao_coletivas=Array();
        this.Medidas_protecao_coletivas_outros=Array();
	this.Medidas_protecao_individual=Array();
        this.Medidas_protecao_individual_outros=Array();
	this.Fonte_geradora=Array();
        this.Enquadramento=Array();
        this.Grau_risco=Array();
	this.Id_usuario=Array();
	this.Session_id=Array();
	this.Ultima_atualizacao=Array();
	this.Ultimo_usuario=Array();
	this.Observacoes=Array();
	this.Acoes_ppra=Array();
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
this.get_Tipo_avaliacao=function(nlinha){
	 return this.Tipo_avaliacao[nlinha];
}
this.get_Sequencial=function(nlinha){
	 return this.Sequencial[nlinha];
}
this.get_Numero_funcs_setor=function(nlinha){
	 return this.Numero_funcs_setor[nlinha];
}
this.get_Texto_explicativo=function(nlinha){
         return this.Texto_explicativo[nlinha];
}
this.get_Numero_funcs_expostos=function(nlinha){
	 return this.Numero_funcs_expostos[nlinha];
}
this.get_Periodicidade_exposicao=function(nlinha){
	 return this.Periodicidade_exposicao[nlinha];
}
this.get_Temperatura_nr17=function(nlinha){
	 return this.Temperatura_nr17[nlinha];
}
this.get_Temperatura_medida=function(nlinha){
	 return this.Temperatura_medida[nlinha];
}
this.get_Medidas_protecao_coletiva_outros=function(nlinha){
	 return this.Medidas_protecao_coletivas_outros[nlinha];
}
this.get_Medidas_protecao_coletiva=function(nlinha){
	 return this.Medidas_protecao_coletivas[nlinha];
}
this.get_Medidas_protecao_individual=function(nlinha){
	 return this.Medidas_protecao_individual[nlinha];
}
this.get_Medidas_protecao_individual_outros=function(nlinha){
	 return this.Medidas_protecao_individual_outros[nlinha];
}
this.get_Enquadramento=function(nlinha){
	 return this.Enquadramento[nlinha];
}
this.get_Grau_risco=function(nlinha){
	 return this.Grau_risco[nlinha];
}
this.get_Fonte_geradora=function(nlinha){
	 return this.Fonte_geradora[nlinha];
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
this.get_Observacoes=function(nlinha){
	 return this.Observacoes[nlinha];
}
this.get_Acoes_ppra=function(nlinha){
	 return this.Acoes_ppra[nlinha];
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
		this.Tipo_avaliacao[x]=vreg[6];
		this.Sequencial[x]=vreg[7];
		this.Numero_funcs_setor[x]=vreg[8];
		this.Numero_funcs_expostos[x]=vreg[9];
		this.Periodicidade_exposicao[x]=vreg[10];
                this.Texto_explicativo[x]=vreg[11];
		this.Temperatura_nr17[x]=vreg[12];
		this.Temperatura_medida[x]=vreg[13];
		this.Medidas_protecao_coletivas[x]=vreg[14];
                this.Medidas_protecao_coletivas_outros[x]=vreg[15];
		this.Medidas_protecao_individual[x]=vreg[16];
                this.Medidas_protecao_individual_outros[x]=vreg[17];
                this.Enquadramento[x]=vreg[18];
                this.Fonte_geradora[x]=vreg[19];
		this.Id_usuario[x]=vreg[20];
		this.Session_id[x]=vreg[21];
		this.Ultima_atualizacao[x]=vreg[22];
		this.Ultimo_usuario[x]=vreg[23];
		this.Observacoes[x]=vreg[24];
		this.Acoes_ppra[x]=vreg[25];
                this.Grau_risco[x]=vreg[26];
		 }
	}
}
};
newlaudosavaliacoes_calor=new MLaudos_avaliacoes_calor();