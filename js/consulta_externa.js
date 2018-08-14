
            function cria_tabela(posicao,tabela,nome_registro,classe_busca,chave,operador,criterio,colunas_saida,onclick){
                vpos=posicao.split(',');
                div=document.createElement('div');
                div_pai=document.getElementById('consultaexterna');
                div.setAttribute('className', 'tableContainer');
                div.setAttribute('style','top:'+vpos[0]+'px;left:'+vpos[1]+'px;height:'+vpos[2]+'px;width:'+vpos[3]+'px');
                div_pai.appendChild(div);
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
                     th.innerHTML=colunas[xcab];
                     tr.appendChild(th);  
                }  
                tbody=document.createElement('tbody');
                tbody.setAttribute('class','scrollContent');
                tabela.appendChild(tbody);

                buscar_registros(window,tabela,classe_busca,chave,criterio,false,operador,nome_registro);
                cont=0;
                valores=nome_registro.getValores();
                for(x=0;x<valores.length();x++){
                    vreg=valores.split('|');
                    tr=document.createElement('tr');
                   
                    if (x % 2==0){
                        tr.setAttribute('class','alternateRow');
                    }
                    else {
                        tr.setAttribute('class','normalRow');
                    }
                    for (y=0;y<vreg.length;y++){
                        td=document.createElement('td');
                        a=document.createElement('a');
                        a.setAttribute('href', "#");
                        a.innerHTML=vreg[y]
                        td.appendChild(a);
                        tr.appendChild(td);
                        tr.appendChild(td);
                        tbody.appendChild(tr);
                    }
                    
                    
                }    
                
            }


