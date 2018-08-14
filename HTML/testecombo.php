<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <style type="text/css">

body {
	background: #FFF;
	color: #000;
	font: normal normal 12px Verdana, Geneva, Arial, Helvetica, sans-serif;
	margin: 10px;
	padding: 0
}
table{
    height: 285px;

}
table, td, a {
	color: #000;
	font: normal normal 12px Verdana, Geneva, Arial, Helvetica, sans-serif
}

h1 {
	font: normal normal 18px Verdana, Geneva, Arial, Helvetica, sans-serif;
	margin: 0 0 5px 0
}

h2 {
	font: normal normal 16px Verdana, Geneva, Arial, Helvetica, sans-serif;
	margin: 0 0 5px 0
}

h3 {
	font: normal normal 13px Verdana, Geneva, Arial, Helvetica, sans-serif;
	color: #008000;
	margin: 0 0 15px 0
}

div.tableContainer {
	clear: both;
	border: 1px solid #963;
	height: 285px;
	overflow:scroll;
	width: 756px;


}
/* @media hacks */
 
/* IE6/7 only (via Keith Clarke) */
@media screen\9 { }
 
/* IE6/7/8 (via Keith Clarke) */
@media \0screen\,screen\9 {} 
 
/* IE8 (via Keith Clarke) */
@media \0screen  {
    div{
        overflow:scroll;
        height:200px;
        width:300px;
    }
    div.tableContainer table{
	width: 300px;
        height:280px;
    }
    thead {
        display:block;
        position:relative;
    }
    tbody{
        position: relative;

    }
}
 
/* IE8/9 */
@media screen\0 { 
    div{
        overflow:scroll;
        height:200px;
        width:300px;
    }
    div.tableContainer table{
	width: 300px;
        height:280px;
    }
    thead {

        display:block;
    }
    tbody{
        position: relative;

    }    
}

/* define width of table. IE browsers only                 */
div.tableContainer table {
	
	width: 740px;
        height:280px;
}


html>body div.tableContainer table {
	width: 756px;
        height:280px;
        overflow: hidden;
}


thead.fixedHeader tr {
	position: relative
}


html>body thead.fixedHeader tr {
	display: block
}

thead.fixedHeader th {
	background: #C96;
	border-left: 1px solid #EB8;
	border-right: 1px solid #B74;
	border-top: 1px solid #EB8;
	font-weight: normal;
	padding: 4px 3px;
	text-align: left
}


thead.fixedHeader a, thead.fixedHeader a:link, thead.fixedHeader a:visited {
	color: #FFF;
	display: block;
	text-decoration: none;
	width: 100%
}


thead.fixedHeader a:hover {
	color: #FFF;
	display: block;
	text-decoration: underline;
	width: 100%
}

tbody.scrollContent{
    overflow:scroll;
}
html>body tbody.scrollContent {
	display: block;
	height: 262px;
	width: 100%
}

tbody.scrollContent td, tbody.scrollContent tr.normalRow td {
	background: #FFF;
	border-bottom: none;
	border-left: none;
	border-right: 1px solid #CCC;
	border-top: 1px solid #DDD;
	padding: 2px 3px 3px 4px
}

tbody.scrollContent tr.alternateRow td {
	background: #EEE;
	border-bottom: none;
	border-left: none;
	border-right: 1px solid #CCC;
	border-top: 1px solid #DDD;
	padding: 2px 3px 3px 4px
}


html>body thead.fixedHeader th {
	min-width: 50px;
        max-width: 400px;	
}

html>body thead.fixedHeader th + th {
	width: 240px
}

html>body thead.fixedHeader th + th + th {
	width: 316px
}


html>body tbody.scrollContent td {
	min-width: 50px;
        max-width: 500px;
}

html>body tbody.scrollContent td + td {
	width: 240px
}

html>body tbody.scrollContent td + td + td {
	width: 300px
}

        </style>
<script type="text/javascript" src="../classes/js/CBOS.js"></script>
<script type="text/javascript" src="../classes/js/Busca_Registros.js"></script>
<script type="text/javascript" src="../classes/js/Registros.js"></script>

<script type="text/javascript">
            CBOS_Familia=new CBOS();
            function cria_tabela(colunas){
                num_colunas=colunas.length;
                tabela=document.createElement('table');
                tabela.setAttribute('class', 'scrollTable');
                if (document.getElementById('tableContainer').children.length>0){
                    if (navigator.appName!='Microsoft Internet Explorer'){
                        document.getElementById('tableContainer').removeChild(0);
                    }
                    else {
                        oChild=document.getElementById('tableContainer').children[0];
                        document.getElementById('tableContainer').removeChild(oChild);
                    }
                }
                document.getElementById('tableContainer').appendChild(tabela);
                thead=document.createElement('thead');
                thead.setAttribute('class', 'fixedHeader');
                tabela.appendChild(thead);
                tr=document.createElement('tr');
                thead.appendChild(tr);
                for (xcab=0;xcab < num_colunas;xcab++){
                     th=document.createElement('th');
                     if (xcab==0){
                         th.setAttribute('width','50px' );
                     }
                     if (xcab==1){
                         th.setAttribute('width','450px' );
                     }
                     
                     th.innerHTML=colunas[xcab];
                     tr.appendChild(th);  
                }  
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                tabela.appendChild(tbody);
/*                if (ndiv.children.length>2){
                    ndiv.removeChild(document.getElementById('tbl1'));
                }*/
                buscar_registros(window,"cbos","Carrega_CBO","TIPO","F",true,"=",CBOS_Familia);
                cont=0;
                for(x=0;x<CBOS_Familia.length();x++){
                    tr=document.createElement('tr');
                   
                    if (x % 2==0){
                        tr.setAttribute('class','alternateRow');
                    }
                    else {
                        tr.setAttribute('class','normalRow');
                    }
                    td=document.createElement('td');
                    a=document.createElement('a');
                    a.setAttribute('href', "#");
                    a.innerHTML=CBOS_Familia.get_Codigo_CBOs(x);
                    td.appendChild(a);
                    tr.appendChild(td);
                    
                    td=document.createElement('td');
                    a=document.createElement('a');
                    a.setAttribute('href', "#");
                    a.innerHTML=CBOS_Familia.get_Titulo_Profissao(x);
                    td.appendChild(a);
                   
                    tr.appendChild(td);
                    tbody.appendChild(tr);
                    
                    
                    
                }    
                
            }

        </script>
    </head>
    <body>

            <input type="text" id="text1" size="50"/>
            <button name="btn" onclick="cria_tabela(Array('CODIGO','DESCRICAO'));" type="button" value="Pesquisar" ></button>
        <div id="tableContainer" class="" >
        </div>
    </body>
</html>
