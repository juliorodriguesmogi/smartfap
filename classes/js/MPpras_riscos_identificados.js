function MPpras_riscos_identificados(){
this.inicializa=function(){
	 this.Codigo_empresa=Array();
	 this.Ano_pericia=Array();
	 this.Numero_ppra=Array();
	 this.Sequencial=Array();
	 this.Descricao_setor=Array();
	 this.Numero_funcs_setor=Array();
	 this.Numero_funcs_expostos=Array();
	 this.Expostos_sexo_feminino=Array();
	 this.Expostos_sexo_masculino=Array();
	 this.Ruido=Array();
	 this.Ruido_dosimetria=Array();
	 this.Frio=Array();
	 this.Calor=Array();
	 this.Umidade=Array();
	 this.Radiacao_nao_ionizante=Array();
	 this.Radiacao_ionizante=Array();
	 this.Outros_fisicos=Array();
	 this.Outros_fisicos_descricao=Array();
	 this.Sangue_humano=Array();
	 this.Sangue_animal=Array();
	 this.Manejo_animais=Array();
	 this.Outros_biologicos_descricao=Array();
	 this.Outros_biologicos=Array();
	 this.Produtos_limpeza=Array();
	 this.Tintas_solventes=Array();
	 this.Hidrocarbonetos_aromaticos=Array();
	 this.Fumos_metalicos=Array();
	 this.Poeiras_incomodas=Array();
	 this.Poeiras_minerais=Array();
	 this.Outros_quimicos=Array();
	 this.Outros_quimicos_descricao=Array();
	 this.Iluminamento=Array();
	 this.Outros_ergonomicos_descricao=Array();
	 this.Outros_ergonomicos=Array();
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
this.get_Sequencial=function(nlinha){
	 return this.Sequencial[nlinha];
}
this.get_Descricao_setor=function(nlinha){
	 return this.Descricao_setor[nlinha];
}
this.get_Numero_funcs_setor=function(nlinha){
	 return this.Numero_funcs_setor[nlinha];
}
this.get_Numero_funcs_expostos=function(nlinha){
	 return this.Numero_funcs_expostos[nlinha];
}
this.get_Expostos_sexo_feminino=function(nlinha){
	 return this.Expostos_sexo_feminino[nlinha];
}
this.get_Expostos_sexo_masculino=function(nlinha){
	 return this.Expostos_sexo_masculino[nlinha];
}
this.get_Ruido=function(nlinha){
	 return this.Ruido[nlinha];
}
this.get_Ruido_dosimetria=function(nlinha){
	 return this.Ruido_dosimetria[nlinha];
}
this.get_Frio=function(nlinha){
	 return this.Frio[nlinha];
}
this.get_Calor=function(nlinha){
	 return this.Calor[nlinha];
}
this.get_Umidade=function(nlinha){
	 return this.Umidade[nlinha];
}
this.get_Radiacao_nao_ionizante=function(nlinha){
	 return this.Radiacao_nao_ionizante[nlinha];
}
this.get_Radiacao_ionizante=function(nlinha){
	 return this.Radiacao_ionizante[nlinha];
}
this.get_Outros_fisicos=function(nlinha){
	 return this.Outros_fisicos[nlinha];
}
this.get_Outros_fisicos_descricao=function(nlinha){
	 return this.Outros_fisicos_descricao[nlinha];
}
this.get_Sangue_humano=function(nlinha){
	 return this.Sangue_humano[nlinha];
}
this.get_Sangue_animal=function(nlinha){
	 return this.Sangue_animal[nlinha];
}
this.get_Manejo_animais=function(nlinha){
	 return this.Manejo_animais[nlinha];
}
this.get_Outros_biologicos_descricao=function(nlinha){
	 return this.Outros_biologicos_descricao[nlinha];
}
this.get_Outros_biologicos=function(nlinha){
	 return this.Outros_biologicos[nlinha];
}
this.get_Produtos_limpeza=function(nlinha){
	 return this.Produtos_limpeza[nlinha];
}
this.get_Tintas_solventes=function(nlinha){
	 return this.Tintas_solventes[nlinha];
}
this.get_Hidrocarbonetos_aromaticos=function(nlinha){
	 return this.Hidrocarbonetos_aromaticos[nlinha];
}
this.get_Fumos_metalicos=function(nlinha){
	 return this.Fumos_metalicos[nlinha];
}
this.get_Poeiras_incomodas=function(nlinha){
	 return this.Poeiras_incomodas[nlinha];
}
this.get_Poeiras_minerais=function(nlinha){
	 return this.Poeiras_minerais[nlinha];
}
this.get_Outros_quimicos=function(nlinha){
	 return this.Outros_quimicos[nlinha];
}
this.get_Outros_quimicos_descricao=function(nlinha){
	 return this.Outros_quimicos_descricao[nlinha];
}
this.get_Iluminamento=function(nlinha){
	 return this.Iluminamento[nlinha];
}
this.get_Outros_ergonomicos_descricao=function(nlinha){
	 return this.Outros_ergonomicos_descricao[nlinha];
}
this.get_Outros_ergonomicos=function(nlinha){
	 return this.Outros_ergonomicos[nlinha];
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
		 this.Sequencial[x]=vreg[3];
		 this.Descricao_setor[x]=vreg[4];
		 this.Numero_funcs_setor[x]=vreg[5];
		 this.Numero_funcs_expostos[x]=vreg[6];
		 this.Expostos_sexo_feminino[x]=vreg[7];
		 this.Expostos_sexo_masculino[x]=vreg[8];
		 this.Ruido[x]=vreg[9];
		 this.Ruido_dosimetria[x]=vreg[10];
		 this.Frio[x]=vreg[11];
		 this.Calor[x]=vreg[12];
		 this.Umidade[x]=vreg[13];
		 this.Radiacao_nao_ionizante[x]=vreg[14];
		 this.Radiacao_ionizante[x]=vreg[15];
		 this.Outros_fisicos[x]=vreg[16];
		 this.Outros_fisicos_descricao[x]=vreg[17];
		 this.Sangue_humano[x]=vreg[18];
		 this.Sangue_animal[x]=vreg[19];
		 this.Manejo_animais[x]=vreg[20];
		 this.Outros_biologicos_descricao[x]=vreg[21];
		 this.Outros_biologicos[x]=vreg[22];
		 this.Produtos_limpeza[x]=vreg[23];
		 this.Tintas_solventes[x]=vreg[24];
		 this.Hidrocarbonetos_aromaticos[x]=vreg[25];
		 this.Fumos_metalicos[x]=vreg[26];
		 this.Poeiras_incomodas[x]=vreg[27];
		 this.Poeiras_minerais[x]=vreg[28];
		 this.Outros_quimicos[x]=vreg[29];
		 this.Outros_quimicos_descricao[x]=vreg[30];
		 this.Iluminamento[x]=vreg[31];
		 this.Outros_ergonomicos_descricao[x]=vreg[32];
		 this.Outros_ergonomicos[x]=vreg[33];
		 this.Id_usuario[x]=vreg[34];
		 this.Session_id[x]=vreg[35];
		 this.Ultima_atualizacao[x]=vreg[36];
		 this.Ultimo_usuario[x]=vreg[37];
		 }
	}
}
};
newpprasriscos_identificados=new MPpras_riscos_identificados();
