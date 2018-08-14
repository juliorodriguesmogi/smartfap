function Validar_CPF(Objcpf){ 
     var cpf = Objcpf.value.toString(); 
     exp = /[.-]/g ;
     cpf = cpf.replace( exp, "" ); 
     var digitoDigitado = eval(cpf.charAt(9)+cpf.charAt(10)); 
     var soma1=0, soma2=0; 
     var vlr =11; 
     for(i=0;i<9;i++){ 
         soma1+=eval(cpf.charAt(i)*(vlr-1)); 
         soma2+=eval(cpf.charAt(i)*vlr); 
         vlr--; 
     }    
     soma1 = (((soma1*10)%11)==10 ? 0:((soma1*10)%11)); 
     soma2 = (((soma2+(2*soma1))*10)%11); 
     
     if(cpf == "11111111111" || cpf == "22222222222" || cpf == 
 "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == 
 "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == 
 "99999999999" || cpf == "00000000000" ){ 
         var digitoGerado = null; 
     }else{ 
         var digitoGerado = (soma1*10) + soma2; 
     } 

     if(digitoGerado != digitoDigitado){ 
        alert('C.P.F. digitado � inv�lido! Por favor verifique.')
     } 
     return true;
 }

function Formatar_CPF(campo){
    var mascara_cpf = /^([\d]{3})([\d]{3})([\d]{3})([\d]{2})$/;
    campo_mascara=campo.value.toString().replace(mascara_cpf,"$1.$2.$3-$4");
    campo.value=campo_mascara;
    Validar_CPF(campo);
}
        