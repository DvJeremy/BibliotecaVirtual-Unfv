var c1 = new Array();
c1[0] = "jeremy";
c1[1] = 12345;
c1[2] = "JEREMY";
c1[3] = "BUSTAMANTE";
c1[4] = 789734435;
c1[5] = "jeremy@hotmail.com";
c1[6] = "jr trujillo 450 av larco";
c1[7] = "Estudiante";

var c2 = new Array();
c2[0] = "james";
c2[1] = 54321;
c2[2] = "JAMES";
c2[3] = "CHAMBI";
c2[4] = 72758670;
c2[5] = "james@hotmail.com";
c2[6] = "jr camana 870 av trujillo";
c2[7] = "Estudiante";

var u = new Array();
u[0] = c1;
u[1] = c2;

function login(){
	var us = document.getElementById("usuario").value;
	var ps = document.getElementById("contrasena").value;
	if(us=="" || ps==""){
		window.alert("Existe algun campo vacio.");
	}else{
		for(i=0;i<u.length;i++){
			if(u[i][0]==us && u[i][1]==ps){
			window.parent.principal.location="cuenta.html";
			window.alert("Bienvenid@ usuario: "+u[i][0]);
			break;
			}else{
				window.alert("Usuario o contraseña no validos.");
			}
		}
	}
}

