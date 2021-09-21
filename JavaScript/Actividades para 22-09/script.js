//Variables constantes
//El valor de una variable constante no se podrá cambiar por reasignación ni por ningún medio

const xd=8; 

//Hay en total 7 tipos de datos:

console.log("Tipos de datos: ->>->>->>->>->>->>->>->>->>")
let string="Santiago"; //El dato String
    int=24;//El dato Number
    decision=true; //Booleano, solo tiene dos valores, True y False
    nada=null; //Dato Null, no tiene 'valor'
    peorqueNada=undefined; //Un dato undefined no se le ha asignado nada de valor
    variable=Symbol("hola"); //Un dato Symbol normalmente es un string o un undefined y sirve para describir propiedades de objetos
    persona = { nombre: "Marcel", edad: "38", ciudad: "Alaior" }; //Dato Object Para resumir es una colección de propiedades

typeof persona;

console.log("string" ,typeof string)
console.log("int" ,typeof int)
console.log("decision" ,typeof decision)
console.log("nada" ,typeof nada)
console.log("peorqueNada" ,typeof peorqueNada)
console.log("variable" ,typeof variable)
console.log("persona" ,typeof persona)

//IF-ELSE
//Este funciona para ejecutar código si la condición propuesta es verdadera o falsa

console.log("IF-ELSE: ->>->>->>->>->>->>->>->>->>")
var n1=1
if (n1>5) { //Si la condición es verdadera, ejecutará este código
    console.log("El Número 1 es mayor a 5")
} else { //Si la condición es falsa, ejecutará este otro código
    console.log("El Número 1 NO es mayor a 5")
}

//Switch Case
//El Switch case sirve en su mayoria para comparar datos de forma más rápida, es como la función If
console.log("SWITCH CASE: ->>->>->>->>->>->>->>->>->>")
let fruta="Pera"
switch (fruta) {//Dependiendo del valor que tenga la variable 'fruta' va a mandar un mensaje u otro
    case "Manzana":
        console.log("Lleve aquí sus manzanas, a $1000 el kilo, aproveche!!!")
        break;
    case "Pera":
        console.log("Lleve a modico precio el kilo de peras, a solo $1500!!!")
        break;
    case "Durazno":
        console.log("Los duraznos dulcecitos, a $2000 el kilo, aproveche esta gran oportunidad")
        break;
}

//Ciclo For
//El Ciclo For sirve para realizar tareas por una cantidad específica de veces
console.log("CICLO FOR: ->>->>->>->>->>->>->>->>->>")

for (let index = 1; index < 11; index++) {
    console.log("Mando este mensaje por ",index, " vez.")
}

//Ciclo While
//El Ciclo While sirve para hacer que el código se repita hasta que se cumpla una condición en específico
console.log("CICLO WHILE: ->>->>->>->>->>->>->>->>->>")
let x=1
while (x<11) {
    console.log("No paro hasta que llegue a 10 >:( ",x)
    x++;
    if (x>1000) {
        break;
    }
}

//Ciclo DoWhile
//El Ciclo DoWhile, al igual que el While, ejecutará código hasta que se cumpla una condición, solo que en este caso
//El DoWhile ejecuta el código antes y después verifica si la condición se cumple o no
console.log("CICLO DO-WHILE: ->>->>->>->>->>->>->>->>->>")
let result = '';
let d = 0;

do {
  d = d + 1;
  result = result + d;
} while (d <10);

console.log(result);

//Arrays
//Los Arrays(vectores) son listas que pueden almacenar datos de forma casi infinita

console.log("ARRAYS: ->>->>->>->>->>->>->>->>->>")

let num =[2,8,9,41,25,-8,-6]
console.log(num)

let aprendices=["Santiago","Daniela","Oscar","Jaider","Darcy"]
console.log(aprendices)

//También se pueden mezclar los tipos de datos

let nombreEdad=["Santiago",18,"Isabella",4,"Edwin",36]
console.log(nombreEdad)

//Se acceden a los contenidos por medio de sus indices
console.log(nombreEdad[0])//Los indices comienzan desde el cero(0)