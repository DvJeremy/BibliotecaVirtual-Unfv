
function ocultardivs(x,y,z,h){
	if(document.getElementById(x).style.display=='block'){
		document.getElementById(x).style.display='none';
	}else{
		document.getElementById(x).style.display='block';  
		document.getElementById(y).style.display='none';  
		document.getElementById(z).style.display='none'; 
		document.getElementById(h).style.display='none'; 		
	}
}

function vaciardivs(x,y,z,h){
	    document.getElementById(x).style.display='none';  
		document.getElementById(y).style.display='none';  
		document.getElementById(z).style.display='none';
		document.getElementById(h).style.display='none';
} 