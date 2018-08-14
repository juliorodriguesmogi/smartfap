var asubabas       = new Array();  // Lista de subabas do documento atual
var ssubabaAtiva   = ""                 // Define qual � a subaba ativa no momento
var subaba_ID      = 1
var subaba_BLOCO   = 2
var subaba_CAMPOS  = 3
        
function definesubAba(sgrupo, ssID, sBloco ){
    var asubaba  = new Array( subaba_CAMPOS );
    asubaba[ 0    ]  = sgrupo;
    asubaba[ subaba_ID    ]  = ssID;
    asubaba[ subaba_BLOCO ]  = sBloco;
    asubabas.push( asubaba );
}

function definesubabaAtiva( sgrupo,ssID ){
     trataCliquesubaba( sgrupo,ssID );
}

function trataMousesubaba( osubaba ){
      osubaba.style.cursor  = "pointer";
}

function trataCliquesubaba(sgrupo, ssID ){
      for ( var isubaba  = 0; isubaba < asubabas.length; isubaba++ ){
          var asubaba  = asubabas[ isubaba ];
          if   (asubaba[0]==sgrupo ){
                  if ( asubaba[1] == ssID.id ) {
                    ativasubaba( sgrupo,asubaba );
                       ssubabaAtiva=ssID;
                    }
                    else
                        inativasubaba( sgrupo,asubaba );
         }          
      }
}
function recuperasubabaAtiva(){
    return ssubabaAtiva;
}

function ativasubaba( sgrupo,asubaba ){
      var ssubaba       = asubaba[ sgrupo,subaba_ID ];
      var osubaba       = document.getElementById( ssubaba );
      mudasClasse( osubaba, "subabaativa" ); // Esse comando chama a classe css para fazer a troca

      var sBlocosubaba  = asubaba[ sgrupo,subaba_BLOCO ];
      //var oBlocosubaba  = document.getElementById( sBlocosubaba );
      var oBlocosubaba  = document.getElementById( sBlocosubaba );
      oBlocosubaba.style.display  = "block";
}

function inativasubaba( sgrupo,asubaba ){
       var ssubaba       = asubaba[ sgrupo,subaba_ID ];
       var osubaba       = document.getElementById( ssubaba );
       mudasClasse( osubaba, "subabainativa" ); // Esse comando chama a classe css para fazer a troca

       var sBlocosubaba  = asubaba[ sgrupo,subaba_BLOCO ];
       var oBlocosubaba  = document.getElementById( sBlocosubaba );
       oBlocosubaba.style.display  = "none";
}
        
function mudasClasse( oObjeto, sClasse ){
     oObjeto.className  = sClasse;
}
