				var l1 = new Array(8);
				l1[0]="TI:F AP:B LIBRO 2011 ES:INDUS ES:SIST";
				l1[1]="TITULO: FUNDAMENTOS DE ADMINISTRACION FINANCIERA";
				l1[2]="AUTOR: BLOCK STANLEY B.";
				l1[3]="TIPO DE ARTICULO: LIBRO";
				l1[4]="ISBN:978-607-15-0927-7";
				l1[5]="FECHA DE PUBLICACION:2011, 4ta EDICION";
				l1[6]="libros/FUND_BLOCK_2011_INDySIS.png";
				l1[7]="libros/FUND_BLOCK_2011_INDySIS.pdf";

				var l2 = new Array(8);
				l2[0]="TI:I AP:S LIBRO 2006 ES:SIST";
				l2[1]="TITULO: INTRODUCCION A LA INGENIERIA DE SISTEMAS";
				l2[2]="AUTOR: SALAS ALVAREZ DANIEL";
				l2[3]="TIPO DE ARTICULO: LIBRO";
				l2[4]="ISBN:956-707-82-0137-8";
				l2[5]="FECHA DE PUBLICACION:2006";
				l2[6]="libros/INTR_SALAS_2006_SIS.png";
				l2[7]="libros/INTR_SALAS_2006_SIS.pdf";
				
				var l3 = new Array(8);
				l3[0]="TI:L AP:M TESIS 2018 ES:SIST";
				l3[1]="TITULO: LA INTELIGENCIA ARTIFICIAL Y EL GOBIERNO ELECTRÓNICO EN EL INSTITUTO DE GOBERNABILIDAD Y TECNOLOGIA";
				l3[2]="AUTOR: MUGRUZA TORRES, ROBERTO GUILLERMO";
				l3[3]="TIPO DE ARTICULO: TESIS";
				l3[4]="ESPECIALIDAD: ING. DE SISTEMAS";
				l3[5]="FECHA DE PUBLICACION:2018";
				l3[6]="tesis/LA.INTEL_MUGRUZA_2018_SIS.png";
				l3[7]="tesis/LA.INTEL_MUGRUZA_2018_SIS.pdf";
				
				var l4 = new Array(8);
				l4[0]="TI:P AP:A TESIS 2019 ES:INDUS";
				l4[1]="TITULO:PLAN DE MARKETING PARA LA LINEA DE EQUIPOS DE LIMPIEZA EN LA EMPRESA VIDAGRO S.A.C.";
				l4[2]="AUTOR: ALARCON QUINTANA EDINSON ERNESTO";
				l4[3]="TIPO DE ARTICULO: TESIS";
				l4[4]="ESPECIALIDAD: ING INDUSTRIAL";
				l4[5]="FECHA DE PUBLICACION:2019";
				l4[6]="tesis/PLAN_ALARCON_2019_IND.png";
				l4[7]="tesis/PLAN_ALARCON_2019_IND.pdf";
				
				var l5 = new Array(8);
				l5[0]="TI:L AP:T REVISTA 2020 ES:SIST";
				l5[1]="TITULO: Lenguajes de programacion y desarrollo de competencias clave";
				l5[2]="AUTOR: Tejera Martinez Francisca";
				l5[3]="TIPO DE ARTICULO:REVISTA";
				l5[4]="ISSN: 1607-4041";
				l5[5]="FECHA DE PUBLICACION:2020";
				l5[6]="revistas/Lenguajes de programacion_T_2020.png";
				l5[7]="revistas/Lenguajes de programacion_T_2020.pdf";
				
				
				var repert = new Array(5);
				repert[0]=l1;
				repert[1]=l2;
				repert[2]=l3;
				repert[3]=l4;
				repert[4]=l5;
				
				function agregar(palabra){
					for(i=0;i<repert.length;i++){
						if(repert[i][0].indexOf(palabra)!==-1){
							document.write("<br><table align='center'><td width='750' border='2'>");
							document.write("<img src='"+repert[i][6]+"' align='left'>");
							document.write("<h3>"+repert[i][1]+"</h3>");
							document.write("<p>"+repert[i][2]+"</p>");
							document.write("<p>"+repert[i][3]+"</p>");
							document.write("<p>"+repert[i][4]+"</p>");
							document.write("<p>"+repert[i][5]+"</p>");
							document.write("<p><a href='"+repert[i][7]+"' target='_blanck' ><input type='button' value='Ver'></a></p>");
							document.write("</td></table><br>");
						}
					}
				}

				function buscar(){
					z = document.getElementById("bus").value;
					var aux="";
					if(z==""){
						aux+= "<h2>RESULTADOS DE BUSQUEDA</h2>";
					}else{
						for(i=0;i<repert.length;i++){
							 if(repert[i][1].toUpperCase().indexOf(z)!==-1 || repert[i][1].toLowerCase().indexOf(z)!==-1){
									aux+="<br><table align='center'><td width='750' >";
									aux+="<img src='repositorio/"+repert[i][6]+"' align='left'>";
									aux+="<h3>"+repert[i][1]+"</h3>";
									aux+="<p>"+repert[i][2]+"</p>";
									aux+="<p>"+repert[i][3]+"</p>";
									aux+="<p>"+repert[i][4]+"</p>";
									aux+="<p>"+repert[i][5]+"</p>";
									aux+="<p><a href='repositorio/"+repert[i][7]+"' target='_blanck' ><input type='button' value='Ver'></a></p>";
									aux+="</td></table><br>";
							 }else if(repert[i][2].toUpperCase().indexOf(z)!==-1 || repert[i][2].toLowerCase().indexOf(z)!==-1){
									aux+="<br><table align='center'><td width='750' >";
									aux+="<img src='repositorio/"+repert[i][6]+"' align='left'>";
									aux+="<h3>"+repert[i][1]+"</h3>";
									aux+="<p>"+repert[i][2]+"</p>";
									aux+="<p>"+repert[i][3]+"</p>";
									aux+="<p>"+repert[i][4]+"</p>";
									aux+="<p>"+repert[i][5]+"</p>";
									aux+="<p><a href='repositorio/"+repert[i][7]+"' target='_blanck' ><input type='button' value='Ver'></a></p>";
									aux+="</td></table><br>";
							 }
					    }
					}
					 if(aux==""){
						 aux+= "<h2>NO HAY RESULTADOS</h2>";
					 }
					 document.getElementById("caja").innerHTML = aux;
				}
				
			function buscarav(){
				p1 = document.getElementById("pc1").value;
				p2 = document.getElementById("pc2").value;
				p3 = document.getElementById("pc3").value;
				var aux="";
				if(p1=="" && p2=="" && p3==""){
						aux+= "<h2>RESULTADOS DE BUSQUEDA</h2>";
				}else{
					for(i=0;i<repert.length;i++){
						k=repert[i][1];
						if(k.toUpperCase().indexOf(p1)!==-1 || k.toLowerCase().indexOf(p1)!==-1 || k.toUpperCase().indexOf(p2)!==-1 || k.toLowerCase().indexOf(p2)!==-1 || k.toUpperCase().indexOf(p3)!==-1 || k.toLowerCase().indexOf(p3)!==-1){
									aux+="<br><table align='center'><td width='750' >";
									aux+="<img src='repositorio/"+repert[i][6]+"' align='left'>";
									aux+="<h3>"+repert[i][1]+"</h3>";
									aux+="<p>"+repert[i][2]+"</p>";
									aux+="<p>"+repert[i][3]+"</p>";
									aux+="<p>"+repert[i][4]+"</p>";
									aux+="<p>"+repert[i][5]+"</p>";
									aux+="<p><a href='repositorio/"+repert[i][7]+"' target='_blanck' ><input type='button' value='Ver'></a></p>";
									aux+="</td></table><br>";
						}
					}
				}
				if(aux==""){
						 aux+= "<h2>NO HAY RESULTADOS</h2>";
					 }
					 document.getElementById("caja").innerHTML = aux;
			}