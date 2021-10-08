//Inicio de funciones en formato flecha para el 28 de septiembre de 2021

//Sumar elementos de un array

var addVector=(vec,width)=>{ //Acá se agregan datos a un array
    for (let i = 0; i < width; i++) {
        vec.push(Math.round(Math.random()*100));        
    }
    return vec;
}
var v=[];
    s=document.getElementById("datosFF").value;;
// console.log("Array con FF",addVector(v,s));
// document.getElementById("arrayFF").innerHTML= "Datos Array: "+addVector(v,s);

var sumaVector=(vec)=>{ //Con esta función se agrega datos a una variable que va sumando los valores del array
    // let Resultado=0;
    // for (let a = 0; a < vec.length; a++) {
    //     Resultado=Resultado+vec[a];
    // }
    let Resultado = vec.reduce((a, b) => b += a); //Forma más corta de sumar los valores de un array
    return Resultado;
}

// console.log("El resultado de la suma de los datos del array es: ",sumaVector(v));

// document.getElementById("sumaFF").innerHTML = "Suma: "+sumaVector(v);

//Sacar el promedio de un array supongo :/
//Voy a utilizar la misma función de agregar datos a un array para más comodidad

var sacarPromedio=(vec)=>{ //Función para sacar el promedio de un array
    //let res=0;
    // for (let a = 0; a < vec.length; a++) {
    //     res=res+vec[a];
    // }
    let res = vec.reduce((a, b) => b += a); //Forma más corta de sumar los valores de un array
    return res/vec.length;
}
// console.log("El promedio de los datos del array es: ",sacarPromedio(v));

// document.getElementById("promedioFF").innerHTML = "Promedio: "+sacarPromedio(v);

//Sacar mediana de un array

//Voy a utilizar la misma función de agregar datos a un array para más comodidad

var sacarMediana=(vec)=>{
    let orden=vec.sort((a,b)=>a-b); //Con "sort" se ordena los datos de menor a mayor
    console.log(orden);
    var l=vec.length;
    if (l%2==0) {
        let n=l/2;
            n2=n-1;
        var med=(vec[n]+vec[n2])/2;
    }else{
        let x=Math.floor(l/2);
            med=vec[x];
    }
    return med;
}

// console.log("La mediana de los datos del array es: ",sacarMediana(v));

// document.getElementById("medianaFF").innerHTML = "Mediana: "+sacarMediana(v);

// console.log("Uso de ceil",Math.ceil(v.length/2));
// console.log("Uso de floor",Math.floor(v.length/2));

//Sacar la moda de un array

//Voy a utilizar la misma función de agregar datos a un array para más comodidad

let xd=[1,1,1,1,2,22,3,4,5,6,7,7,7]
//Voy a ser sincero y es que cogí este código de otra persona, porque no tenía ni idea de como hacer eso :(
//https://platzi.com/clases/2327-javascript-practico/38669-calculando-la-moda-en-javascript/
var sacarModa=(arr)=>{ 
    var moda=arr.sort((a,b) =>arr.filter(v => v===a).length- arr.filter(v => v===b).length).pop();
    return moda;
}

// console.log("Codigo de alguien para calcular moda con otro array: ",sacarModa(xd));

// document.getElementById("modaFF").innerHTML = "Moda: "+sacarModa(v);

//Sacar la desviación tipica/estandar de un array

var sacarDesviacion=(vec)=>{
    let pro = vec.reduce((a, b) => b += a)/vec.length;
        x=[];
    for (let a = 0; a < vec.length; a++) {
        var r=vec[a]-pro;
            y=r*r;
        x.push(y);
    }
    
    let pro2 = x.reduce((a, b) => b += a)/x.length;
    console.log(pro2)
    var dE=Math.sqrt(pro2);
    return dE.toFixed(2);
}

// console.log("La desviación estandar del array es: ",sacarDesviacion(v));

// document.getElementById("desviacionFF").innerHTML = "Desviación: "+sacarDesviacion(v);

//Sacar numero mayor de un array

var sacarMayor=(vec)=>{
    let orden=vec.sort((a,b)=>a-b);
    let x=Math.max(...vec);
    return x;
}
// console.log("Número Mayor de un array",sacarMayor(v));

// document.getElementById("mayorFF").innerHTML = "Mayor: "+sacarMayor(v);

//Sacar número menor de un array
var sacarMenor=(vec)=>{
    let x=Math.min(...vec);
    return x;
}
// console.log("Número Menor de un array",sacarMenor(v));

// document.getElementById("menorFF").innerHTML = "Menor: "+sacarMenor(v);

function iniciarTodo(){
    var v=[];
        s=document.getElementById("datosFF").value;;
    
    document.getElementById("arrayFF").innerHTML= "Datos Array: "+addVector(v,s);

    document.getElementById("sumaFF").innerHTML = "Suma: "+sumaVector(v);

    document.getElementById("promedioFF").innerHTML = "Promedio: "+sacarPromedio(v);

    document.getElementById("medianaFF").innerHTML = "Mediana: "+sacarMediana(v);

    document.getElementById("modaFF").innerHTML = "Moda: "+sacarModa(v);

    document.getElementById("desviacionFF").innerHTML = "Desviación: "+sacarDesviacion(v);

    document.getElementById("mayorFF").innerHTML = "Mayor: "+sacarMayor(v);

    document.getElementById("menorFF").innerHTML = "Menor: "+sacarMenor(v);
}