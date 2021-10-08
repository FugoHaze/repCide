// let num1=parseInt(document.getElementById("numerador1").value);
// let num2=parseInt(document.getElementById("numerador2").value);
// let den1=parseInt(document.getElementById("denominador1").value)
// let den2=parseInt(document.getElementById("denominador2").value);

// console.log(den1);

var fraccion={
    // n1:parseInt(document.getElementById("numerador1").value),
    // n2:parseInt(document.getElementById("numerador2").value),
    // d1:parseInt(document.getElementById("denominador1").value),
    // d2:parseInt(document.getElementById("denominador2").value),
    suma:function(a,b,c,d){ //Función de suma
        if (c==d) {
            let r1=a+b;
                res=r1/c;
        }else{
            let r1=a*d;
                r2=b*c;
                r3=c*d;
            var s=r1+r2;
                res=s/r3;
        }
        // return res;
        document.getElementById("sumaF").innerHTML= "Suma: "+res;
    },
    resta:function(a,b,c,d){ //Función de resta
        if (c==d) {
            let r1=a-b;
                res=r1/c;
        }else{
            let r1=a*d;
                r2=b*c;
                r3=c*d;
            var s=r1-r2;
                res=s/r3;
        }
        // return res;
        document.getElementById("restaF").innerHTML= "Resta: "+res;
    },
    mult:function(a,b,c,d){ //Función de Multiplicación
        let r1=a*b;
            r2=c*d;
        var res=r1/r2;

        // return res;
        document.getElementById("multF").innerHTML= "Multiplicación: "+res;
    },
    div:function(a,b,c,d){ //Función de División
        let r1=a*d;
            r2=c*b;
        var res=r1/r2;

        // return res;
        document.getElementById("divF").innerHTML= "División: "+res;
    }
}
// document.getElementById("numeros").innerHTML= "Suma: "+res;

function todo(){ //Toma los datos de los inputs y los coloca en las funciones
    let n1=parseInt(document.getElementById("numerador1").value);
        n2=parseInt(document.getElementById("numerador2").value);
        d1=parseInt(document.getElementById("denominador1").value);
        d2=parseInt(document.getElementById("denominador2").value);

    fraccion.suma(n1,n2,d1,d2);
    fraccion.resta(n1,n2,d1,d2);
    fraccion.mult(n1,n2,d1,d2);
    fraccion.div(n1,n2,d1,d2);
}
/*
function mostrarPrueba(){
    // let den1=parseInt(document.fra.numerador1.value);
    // let den1Prueba=parseInt(document.getElementById("denominador1").value);
    // console.log(den1Prueba);
    let n1=parseInt(document.getElementById("numerador1").value);
        n2=parseInt(document.getElementById("numerador2").value);
        d1=parseInt(document.getElementById("denominador1").value);
        d2=parseInt(document.getElementById("denominador2").value);

    fraccion.suma(n1,n2,d1,d2);
}
*/



// console.log(fraccion.div());
// let s=fraccion.suma();
//     r=fraccion.resta();
//     m=fraccion.mult();
//     d=fraccion.div();

// document.getElementById("resFrac").innerHTML= s;