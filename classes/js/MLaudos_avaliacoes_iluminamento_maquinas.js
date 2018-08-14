function MLaudos_avaliacoes_iluminamento_maquinas(){
this.inicializa=function(){
	Codigo_empresa_iluminamento_maquinas=Array();
	Ano_pericia_iluminamento_maquinas=Array();
	Numero_laudo_iluminamento_maquinas=Array();
	Revisao_iluminamento_maquinas=Array();
	Unidade_iluminamento_maquinas=Array();
	Codigo_setor_iluminamento_maquinas=Array();
	Codigo_maquina_iluminamento_maquinas=Array();
	Sequencial_iluminamento_maquinas=Array();
	Lux_medido_iluminamento_maquinas=Array();
	Lux_nbr_iluminamento_maquinas=Array();
	Id_usuario_iluminamento_maquinas=Array();
	Session_id_iluminamento_maquinas=Array();
	Ultima_atualizacao_iluminamento_maquinas=Array();
	Ultimo_usuario_iluminamento_maquinas=Array();
}
this.get_Codigo_empresa=function(nlinha){
	 return Codigo_empresa_iluminamento_maquinas[nlinha];
}
this.get_Ano_pericia=function(nlinha){
	 return Ano_pericia_iluminamento_maquinas[nlinha];
}
this.get_Numero_laudo=function(nlinha){
	 return Numero_laudo_iluminamento_maquinas[nlinha];
}
this.get_Revisao=function(nlinha){
	 return Revisao_iluminamento_maquinas[nlinha];
}
this.get_Unidade=function(nlinha){
	 return Unidade_iluminamento_maquinas[nlinha];
}
this.get_Codigo_setor=function(nlinha){
	 return Codigo_setor_iluminamento_maquinas[nlinha];
}
this.get_Codigo_maquina=function(nlinha){
	 return Codigo_maquina_iluminamento_maquinas[nlinha];
}
this.get_Sequencial=function(nlinha){
	 return Sequencial_iluminamento_maquinas[nlinha];
}
this.get_Lux_medido=function(nlinha){
	 return Lux_medido_iluminamento_maquinas[nlinha];
}
this.get_Lux_nbr=function(nlinha){
	 return Lux_nbr_iluminamento_maquinas[nlinha];
}
this.get_Id_usuario=function(nlinha){
	 return Id_usuario_iluminamento_maquinas[nlinha];
}
this.get_Session_id=function(nlinha){
	 return Session_id_iluminamento_maquinas[nlinha];
}
this.get_Ultima_atualizacao=function(nlinha){
	 return Ultima_atualizacao_iluminamento_maquinas[nlinha];
}
this.get_Ultimo_usuario=function(nlinha){
	 return Ultimo_usuario_iluminamento_maquinas[nlinha];
}
this.length=function(){
    return Codigo_empresa_iluminamento_maquinas.length;
}
this.setValores=function(response){
	 this.inicializa();
	 if (response[0]!='NF'){
		 for (x=0;x<response.length-1;x++){
		 vreg=response[x].split('|')
		Codigo_empresa_iluminamento_maquinas[x]=vreg[0];
		Ano_pericia_iluminamento_maquinas[x]=vreg[1];
		Numero_laudo_iluminamento_maquinas[x]=vreg[2];
		Revisao_iluminamento_maquinas[x]=vreg[3];
		Unidade_iluminamento_maquinas[x]=vreg[4];
		Codigo_setor_iluminamento_maquinas[x]=vreg[5];
		Codigo_maquina_iluminamento_maquinas[x]=vreg[6];
		Sequencial_iluminamento_maquinas[x]=vreg[7];
		Lux_medido_iluminamento_maquinas[x]=vreg[8];
		Lux_nbr_iluminamento_maquinas[x]=vreg[9];
		Id_usuario_iluminamento_maquinas[x]=vreg[10];
		Session_id_iluminamento_maquinas[x]=vreg[11];
		Ultima_atualizacao_iluminamento_maquinas[x]=vreg[12];
		Ultimo_usuario_iluminamento_maquinas[x]=vreg[13];
		 }
	}
}
};
newlaudosavaliacoes_iluminamento_maquinas=new MLaudos_avaliacoes_iluminamento_maquinas();
