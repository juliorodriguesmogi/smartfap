
           function carrega_familia(){
                 cont=1;
                 document.getElementById('famimg').style.visibility='visible';
                 numopt=document.forms[1].elements['CODIGO_CBO_FAMILIA_CMB'].options.length;
                 if (numopt>1) return;
                 buscar_registros(window,"cbos","Carrega_CBO","TIPO","F",true,"=",CBOS_Familia);
                 codigo_cbo=document.forms[1].elements['CODIGO_CBO_FAMILIA_CMB'].value;
                 numopt=document.forms[1].elements['CODIGO_CBO_FAMILIA_CMB'].options.length;
                 Iselfam=document.forms[1].elements['CODIGO_CBO_FAMILIA_CMB'];
                 Iselfam.length=0;
                 opcao=document.createElement('option');
                 opcao.setAttribute('text', '');
                 opcao.setAttribute('value', '0');
                 Iselfam.add(opcao);
                 ccbofam=Array();
                 tproffam=Array();
                 tipofam=Array();
                 for(i=0;i < CBOS_Familia.length();i++){
                    opt=new Option(CBOS_Familia.get_Codigo_CBOs(i)+"|"+CBOS_Familia.get_Titulo_Profissao(i).substr(0,100),CBOS_Familia.get_Codigo_CBOs(i));
                    document.forms[1].elements['CODIGO_CBO_FAMILIA_CMB'].add(opt);
                 }
                 document.getElementById('famimg').style.visibility='hidden';
                 
            }

            function carrega_ocupacao(){
                 document.getElementById('ocupimg').style.visibility='visible';
                 if (document.forms[1].elements['CODIGO_CBO_FAMILIA_CMB'].value==0) return;
                 codigo_cbo_principal=document.forms[1].elements['CODIGO_CBO_FAMILIA_CMB'].value.substr(0,4) +'%';
                 numopt=document.forms[1].elements['CODIGO_CBO_OCUPACAO_CMB'].options.length;
                 Isel=document.forms[1].elements['CODIGO_CBO_OCUPACAO_CMB'];
                 Isel.length=0;
                 buscar_registros(window,"cbos","Carrega_CBO","CODIGO_CBO,TIPO",codigo_cbo_principal+',O',false,"like,=",CBOS_Profissao);
                 opt=new Option('',0);
                 Isel.add(opt);
                 for(i=0;i < CBOS_Profissao.length();i++){
                    opt=new Option(CBOS_Profissao.get_Codigo_CBOs(i)+"|"+CBOS_Profissao.get_Titulo_Profissao(i),CBOS_Profissao.get_Codigo_CBOs(i));
                    Isel.add(opt);
                 }
                 document.getElementById('ocupimg').style.visibility='hidden';       
                 
            }



            function carrega_sinonimo(){
                 document.getElementById('sinimg').style.visibility='visible';   
                 if (document.forms[1].elements['CODIGO_CBO_OCUPACAO_CMB'].value==0) return;                 
                 codigo_cbo_ocupacao=document.forms[1].elements['CODIGO_CBO_OCUPACAO_CMB'].value.substr(0,7) +'%';
                 numopt=document.forms[1].elements['CODIGO_CBO_SINONIMO_CMB'].options.length;
                 Isel=document.forms[1].elements['CODIGO_CBO_SINONIMO_CMB'];
                 Isel.length=0;
                 buscar_registros(window,"cbos","Carrega_CBO","CODIGO_CBO,TIPO",codigo_cbo_ocupacao+',S',false,"like,=",CBOS_Sinonimo);
                 for(i=0;i < CBOS_Profissao.length();i++){
                    opt=new Option(CBOS_Profissao.get_Codigo_CBOs(i)+"|"+CBOS_Profissao.get_Titulo_Profissao(i),CBOS_Profissao.get_Codigo_CBOs(i));
                    Isel.add(opt);
                 }
                 if (Isel.length==0) {
                     opt=new Option('Nenhum �tem a selecionar',0);
                     Isel.length=0;
                     Isel.add(opt);
                 }
                 document.getElementById('sinimg').style.visibility='hidden';   
                 


            }

