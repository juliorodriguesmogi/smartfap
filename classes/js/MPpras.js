function MPpras(){
this.inicializa=function(){
	 this.Codigo_empresa=Array();
	 this.Numero_ppra=Array();
	 this.Ano_pericia=Array();
	 this.Numero_laudo=Array();
	 this.Revisao=Array();
	 this.Razao_social=Array();
	 this.Cnpj_cei=Array();
	 this.Cnae=Array();
	 this.Grau_risco=Array();
	 this.Nro_funcs=Array();
	 this.Data_lancamento=Array();
	 this.Data_criacao=Array();
	 this.Data_hora_pericia=Array();
	 this.Id_usuario=Array();
	 this.Session_id=Array();
	 this.Ultima_atualizacao=Array();
	 this.Ultimo_usuario=Array();
	 this.Numero_funcionarios=Array();
	 this.Endereco_atuacao=Array();
	 this.Bairro_atuacao=Array();
	 this.Municipio_atuacao=Array();
	 this.Cep_atuacao=Array();
	 this.Uf_atuacao=Array();
	 this.Justificativa_nao_implantacao=Array();
}
this.get_Codigo_empresa=function(nlinha){
	 return this.Codigo_empresa[nlinha];
}
this.get_Numero_ppra=function(nlinha){
	 return this.Numero_ppra[nlinha];
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
this.get_Razao_social=function(nlinha){
	 return this.Razao_social[nlinha];
}
this.get_Cnpj_cei=function(nlinha){
	 return this.Cnpj_cei[nlinha];
}
this.get_Cnae=function(nlinha){
	 return this.Cnae[nlinha];
}
this.get_Grau_risco=function(nlinha){
	 return this.Grau_risco[nlinha];
}
this.get_Nro_funcs=function(nlinha){
	 return this.Nro_funcs[nlinha];
}
this.get_Data_lancamento=function(nlinha){
	 return this.Data_lancamento[nlinha];
}
this.get_Data_criacao=function(nlinha){
	 return this.Data_criacao[nlinha];
}
this.get_Data_hora_pericia=function(nlinha){
	 return this.Data_hora_pericia[nlinha];
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
this.get_Numero_funcionarios=function(nlinha){
	 return this.Numero_funcionarios[nlinha];
}
this.get_Endereco_atuacao=function(nlinha){
	 return this.Endereco_atuacao[nlinha];
}
this.get_Bairro_atuacao=function(nlinha){
	 return this.Bairro_atuacao[nlinha];
}
this.get_Municipio_atuacao=function(nlinha){
	 return this.Municipio_atuacao[nlinha];
}
this.get_Cep_atuacao=function(nlinha){
	 return this.Cep_atuacao[nlinha];
}
this.get_Uf_atuacao=function(nlinha){
	 return this.Uf_atuacao[nlinha];
}
this.get_Justificativa_nao_implantacao=function(nlinha){
	 return this.Justificativa_nao_implantacao[nlinha];
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
		 this.Numero_ppra[x]=vreg[1];
		 this.Ano_pericia[x]=vreg[2];
		 this.Numero_laudo[x]=vreg[3];
		 this.Revisao[x]=vreg[4];
		 this.Razao_social[x]=vreg[5];
		 this.Cnpj_cei[x]=vreg[6];
		 this.Cnae[x]=vreg[7];
		 this.Grau_risco[x]=vreg[8];
		 this.Nro_funcs[x]=vreg[9];
		 this.Data_lancamento[x]=vreg[10];
		 this.Data_criacao[x]=vreg[11];
		 this.Data_hora_pericia[x]=vreg[12];
		 this.Id_usuario[x]=vreg[13];
		 this.Session_id[x]=vreg[14];
		 this.Ultima_atualizacao[x]=vreg[15];
		 this.Ultimo_usuario[x]=vreg[16];
		 this.Numero_funcionarios[x]=vreg[17];
		 this.Endereco_atuacao[x]=vreg[18];
		 this.Bairro_atuacao[x]=vreg[19];
		 this.Municipio_atuacao[x]=vreg[20];
		 this.Cep_atuacao[x]=vreg[21];
		 this.Uf_atuacao[x]=vreg[22];
		 this.Justificativa_nao_implantacao[x]=vreg[23];
		 }
	}
}
};
newppra=new MPpras();
