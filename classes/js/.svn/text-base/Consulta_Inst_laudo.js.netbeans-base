function Laudo_Instrumento_Medicao(){
                
                this.inicializa=function(){
                     FHCodigo_Empresa=Array();
                     FHNumero_Laudo=Array();
                     FHCodigo_Instrumento=Array();
                     FHId_Usuario=Array();
                }
                this.get_Codigo_Empresa= function(nlinha){
                    return FHCodigo_Empresa[nlinha];
                }
            this.get_Numero_Laudo= function(nlinha){
                    return FHNumero_Laudo[nlinha];
                }
                this.get_Codigo_Instrumento= function(nlinha){
                    return FHCodigo_Instrumento[nlinha];
                }
                this.get_Id_Usuario= function(nlinha){
                    return FHId_Usuario[nlinha];
                }
                
                this.length=function(){
                    return FHCodigo_Empresa.length;
                }      
                this.setValores=function(response){
                    this.inicializa();
                    if (response!='NF'){
                       for (x=0;x<response.length-2;x++){
                           vreg=response[x].split('|');
                           FHCodigo_Empresa[x]=vreg[0];
                           Numero_Laudo[x]=vreg[2];
                           FHCodigo_Instrumento[x]=vreg[4];
                           FHId_Usuario[x]=vreg[9];
                       } 
                    }
                }
                
                
};
newlaudoinstrumentomedicao=new Laudo_Instrumento_Medicao();
                     