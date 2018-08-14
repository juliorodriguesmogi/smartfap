 function Validar_NIT(campo){
     exp = /[.-]/g ;
     campo.value= campo.value.toString().replace( exp, "" );
     var pesos=Array(3,2,9,8,7,6,5,4,3,2);
     x1=parseInt(campo.value.toString().substr(0,1))*pesos[0];
     x2=parseInt(campo.value.toString().substr(1,1))*pesos[1];
     x3=parseInt(campo.value.toString().substr(2,1))*pesos[2];
     x4=parseInt(campo.value.toString().substr(3,1))*pesos[3];
     x5=parseInt(campo.value.toString().substr(4,1))*pesos[4];
     x6=parseInt(campo.value.toString().substr(5,1))*pesos[5];
     x7=parseInt(campo.value.toString().substr(6,1))*pesos[6];
     x8=parseInt(campo.value.toString().substr(7,1))*pesos[7];
     x9=parseInt(campo.value.toString().substr(8,1))*pesos[8];
     x10=parseInt(campo.value.toString().substr(9,1))*pesos[9];
     soma=(x1+x2+x3+x4+x5+x6+x7+x8+x9+x10);
     digito_11=soma^11;
     resultado=11-digito_11;
     x11=parseInt(campo.value.toString().substr(10,1));
     if (x11!=resultado){
         alert('NIT Inválido. Redigite!')
         return false;
     }
     else return true;
     
 }
 
 function Formatar_NIT(campo){
    var mascara_NIT = /^([\d]{3})([\d]{5})([\d]{2})([\d]{1})$/;
    campo_mascara=campo.value.toString().replace(mascara_NIT,"$1.$2.$3-$4");
    campo.value=campo_mascara;
    Validar_NIT(campo);

 }