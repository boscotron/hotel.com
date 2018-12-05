
function sumarNumeros(a, b) {
	
   let Res = (a) + (b);     
   return console.log(Res);  
};
sumarNumeros(89, 20);

function multiplicacion(a , b){
	let res = a * b;
	return console.log(res);
};
multiplicacion(2, 7);

let prueba = function (a, b){
	let resultado = (a) + (b);     
   return console.log(resultado);  
};
prueba(6, 16);

let resta = new Function("a", "b","return a-b");
	
let resultado = resta(56, 12);
console.log(resultado);

function suma(){

};
suma();