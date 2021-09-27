//Estoy ejecutando el código con Node.js y la extensión Code Runner de VS, y también por medio del Navegador xd
//ARRAYS
// let vec=new Array();

// vec.push("Hola");

// vec.push("Como");

// vec.push("Estás");

// vec.push("?");

// console.log(vec);

//FUNCIONES

// function llenarVector(vector, tam) {
//     for (let i = 0; i < tam; i++) {
//         vector.push(Math.round(Math.random()*100));        
//     }
//     return vector;
// }
// vect=new Array();
// let t=15;

// let x=llenarVector(vect,t);
// console.log("Array principal, de ",t,"elementos: ",x)

// function sumaPar() {
//     var resPar=0;
//     for (let a = 0; a < vect.length; a++) {
//         var n=vect[a]%2;
//         if (n==0) {
//             resPar=vect[a]+resPar;
//         }    
//     }
//     return resPar;
// }
// function sumaImpar() {
//     var resImp=0;
//     for (let a = 0; a < vect.length; a++) {
//         var n=vect[a]%2;
//         if (n!=0) {
//             resImp=vect[a]+resImp;
//         }    
//     }
//     return resImp;
// }
// let impar=sumaImpar();
// let par=sumaPar();
// console.log("Resultado de suma Pares",par);
// console.log("Resultado de suma Impares",impar);


//FUNCIONES FLECHA

//Comparativa 1
function sinParametros() { //Función Normal
    return "Función Normal: Hello World";
}
console.log(sinParametros());

var sinPar=()=>"Función Flecha: Hola Mundo"; //Función Flecha
console.log(sinPar());

//Comparativa 2
function cuadrado(num) { //Función Normal
    return num*num;
}
console.log("Raiz con FN",cuadrado(5));

var cuadFlecha=(num)=>num*num; //Función Flecha
console.log("Raíz con FF",cuadFlecha(4));

//Comparativa 3
function suma(n,m) { //Función Normal
    return n+m;
}
console.log("Suma con FN",suma(14,85));

var sumaF=(n,m)=>n+m; //Función Flecha
console.log("Suma con FF",sumaF(42,58));

//Comparativa 4

// function llenarVector(vector, tam) { //Función Normal
//     for (let i = 0; i < tam; i++) {
//         vector.push(Math.round(Math.random()*100));        
//     }
//     return vector;
// }
// vect=new Array();
// let t=15;

// let x=llenarVector(vect,t);
// console.log("Array principal, de ",t,"elementos: ",x)

var rellenarVector=(vec,width)=>{
    for (let i = 0; i < width; i++) {
        vec.push(Math.round(Math.random()*100));        
    }
    return vec;
}
var v=[];
    s=6;
console.log("Array con FF",rellenarVector(v,s));


//SUMA DE PARES E IMPARES CON FUNCIONES FLECHA

let sumaParF=()=>{
    var resPar=0;
    for (let a = 0; a < v.length; a++) {
        var n=v[a]%2;
        if (n==0) {
            resPar=v[a]+resPar;
        }    
    }
    return resPar;
}
let sumaImparF=()=>{
    var resImp=0;
    for (let a = 0; a < v.length; a++) {
        var n=v[a]%2;
        if (n!=0) {
            resImp=v[a]+resImp;
        }    
    }
    return resImp;
}

console.log("Resultado de suma Pares con FF",sumaParF());
console.log("Resultado de suma Impares con FF",sumaImparF());