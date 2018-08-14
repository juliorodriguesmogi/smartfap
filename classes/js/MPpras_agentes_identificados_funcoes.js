function MPpras_agentes_identificados_funcoes(){
this.inicializa=function(){
	 this.Codigo_atividade=Array();
	 this.Len_agente_prevencao=Array();
	 this.Lef_agente_prevencao=Array();
	 this.Codigo_funcao=Array();
	 this.Descricao_funcao=Array();
	 this.Epi_eficaz=Array();
	 this.Codigo_epi=Array();
	 this.Ca_epi=Array();
	 this.Epc_eficaz=Array();
	 this.Cont_masculino=Array();
	 this.Cont_feminino=Array();
}
this.get_Codigo_atividade=function(nlinha){
	 return this.Codigo_atividade[nlinha];
}
this.get_Len_agente_prevencao=function(nlinha){
	 return this.Len_agente_prevencao[nlinha];
}
this.get_Lef_agente_prevencao=function(nlinha){
	 return this.Lef_agente_prevencao[nlinha];
}
this.get_Codigo_funcao=function(nlinha){
	 return this.Codigo_funcao[nlinha];
}
this.get_Descricao_funcao=function(nlinha){
	 return this.Descricao_funcao[nlinha];
}
this.get_Epi_eficaz=function(nlinha){
	 return this.Epi_eficaz[nlinha];
}
this.get_Codigo_epi=function(nlinha){
	 return this.Codigo_epi[nlinha];
}
this.get_Ca_epi=function(nlinha){
	 return this.Ca_epi[nlinha];
}
this.get_Epc_eficaz=function(nlinha){
	 return this.Epc_eficaz[nlinha];
}
this.get_Cont_masculino=function(nlinha){
	 return this.Cont_masculino[nlinha];
}
this.get_Cont_feminino=function(nlinha){
	 return this.Cont_feminino[nlinha];
}

this.length=function(){
return this.Codigo_atividade.length;
}
this.setValores=function(response){
	 this.inicializa();
	 if (response[0]!='NF'){
		 for (x=0;x<response.length-1;x++){
		 vreg=response[x].split('|')
		 this.Codigo_atividade[x]=vreg[0];
                 this.Len_agente_prevencao[x]=vreg[1];
                 this.Lef_agente_prevencao[x]=vreg[2];
                 this.Codigo_funcao[x]=vreg[3];
		 this.Descricao_funcao[x]=vreg[4];
		 this.Epi_eficaz[x]=vreg[5];
		 this.Codigo_epi[x]=vreg[6];
                 this.Ca_epi[x]=vreg[7];
		 this.Epc_eficaz[x]=vreg[8];
                 this.Cont_masculino[x]=vreg[9];
		 this.Cont_feminino[x]=vreg[10];                 
		 }
	}
}
};
newpprasagentes_identificados_funcoes=new MPpras_agentes_identificados_funcoes();
