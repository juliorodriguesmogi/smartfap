function MLaudos_avaliacoes_ruido_maquinas(){
this.inicializa=function(){
	Codigo_empresa_ruido_maquinas=Array();
	Ano_pericia_ruido_maquinas=Array();
	Numero_laudo_ruido_maquinas=Array();
	Revisao_ruido_maquinas=Array();
	Unidade_ruido_maquinas=Array();
	Codigo_setor_ruido_maquinas=Array();
	Codigo_maquina_ruido_maquinas=Array();
	Sequencial_ruido_maquinas=Array();
	Nivel_ruido_medido_ruido_maquinas=Array();
	Tempo_exposicao_diaria_ruido_maquinas=Array();
	Nivel_ruido_permitido_ruido_maquinas=Array();
	Tempo_maximo_exposicao_diaria_ruido_maquinas=Array();
	Observacoes_ruido_maquinas=Array();
	Id_usuario_ruido_maquinas=Array();
	Session_id_ruido_maquinas=Array();
	Ultima_atualizacao_ruido_maquinas=Array();
	Ultimo_usuario_ruido_maquinas=Array();
}
this.get_Codigo_empresa=function(nlinha){
	 return Codigo_empresa_ruido_maquinas_ruido_maquinas[nlinha];
}
this.get_Ano_pericia=function(nlinha){
	 return Ano_pericia_ruido_maquinas_ruido_maquinas[nlinha];
}
this.get_Numero_laudo=function(nlinha){
	 return Numero_laudo_ruido_maquinas_ruido_maquinas[nlinha];
}
this.get_Revisao=function(nlinha){
	 return Revisao_ruido_maquinas_ruido_maquinas[nlinha];
}
this.get_Unidade=function(nlinha){
	 return Unidade_ruido_maquinas[nlinha];
}
this.get_Codigo_setor=function(nlinha){
	 return Codigo_setor_ruido_maquinas[nlinha];
}
this.get_Codigo_maquina=function(nlinha){
	 return Codigo_maquina_ruido_maquinas[nlinha];
}
this.get_Sequencial=function(nlinha){
	 return Sequencial_ruido_maquinas[nlinha];
}
this.get_Nivel_ruido_medido=function(nlinha){
	 return Nivel_ruido_medido_ruido_maquinas[nlinha];
}
this.get_Tempo_exposicao_diaria=function(nlinha){
	 return Tempo_exposicao_diaria_ruido_maquinas[nlinha];
}
this.get_Nivel_ruido_permitido=function(nlinha){
	 return Nivel_ruido_permitido_ruido_maquinas[nlinha];
}
this.get_Tempo_maximo_exposicao_diaria=function(nlinha){
	 return Tempo_maximo_exposicao_diaria_ruido_maquinas[nlinha];
}
this.get_Observacoes=function(nlinha){
	 return Observacoes_ruido_maquinas[nlinha];
}
this.get_Id_usuario=function(nlinha){
	 return Id_usuario_ruido_maquinas[nlinha];
}
this.get_Session_id=function(nlinha){
	 return Session_id_ruido_maquinas[nlinha];
}
this.get_Ultima_atualizacao=function(nlinha){
	 return Ultima_atualizacao_ruido_maquinas[nlinha];
}
this.get_Ultimo_usuario=function(nlinha){
	 return Ultimo_usuario_ruido_maquinas[nlinha];
}
this.length=function(){
    return Codigo_empresa_ruido_maquinas.length;
}
this.setValores=function(response){
	 this.inicializa();
	 if (response[0]!='NF'){
		 for (x=0;x<response.length-1;x++){
                    vreg=response[x].split('|')
                    Codigo_empresa_ruido_maquinas[x]=vreg[0];
                    Ano_pericia_ruido_maquinas[x]=vreg[1];
                    Numero_laudo_ruido_maquinas[x]=vreg[2];
                    Revisao_ruido_maquinas[x]=vreg[3];
                    Unidade_ruido_maquinas[x]=vreg[4];
                    Codigo_setor_ruido_maquinas[x]=vreg[5];
                    Codigo_maquina_ruido_maquinas[x]=vreg[6];
                    Sequencial_ruido_maquinas[x]=vreg[7];
                    Nivel_ruido_medido_ruido_maquinas[x]=vreg[8];
                    Tempo_exposicao_diaria_ruido_maquinas[x]=vreg[9];
                    Nivel_ruido_permitido_ruido_maquinas[x]=vreg[10];
                    Tempo_maximo_exposicao_diaria_ruido_maquinas[x]=vreg[11];
                    Observacoes_ruido_maquinas[x]=vreg[12];
                    Id_usuario_ruido_maquinas[x]=vreg[13];
                    Session_id_ruido_maquinas[x]=vreg[14];
                    Ultima_atualizacao_ruido_maquinas[x]=vreg[15];
                    Ultimo_usuario_ruido_maquinas[x]=vreg[16];
		 }
	}
}
};
newlaudosavaliacoes_ruido_maquinas=new MLaudos_avaliacoes_ruido_maquinas();
