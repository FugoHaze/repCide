//1ra Forma de instanciar objetos 

var persona=new Object();

persona.nombre="Juanito";
persona.apellido="Perez";

//2da Forma de instanciar objetos
//Formato JSON

var alumno={
    nombre:'Pedrito',
    apellido:'Clavito',
    nombreCompleto:function(){
        return this.nombre +" "+this.apellido;
    }
}

console.log(alumno.nombreCompleto());

var fraccion={
    n1:1,
    n2:2,
    d1:2,
    d2:2,
    suma:function(){
        if (this.d1==this.d2) {
            let r1=this.n1+this.n2;
                res=r1/this.d1;
        }else{
            let r1=this.n1*this.d2;
                r2=this.n2*this.d1;
                r3=this.d1*this.d2;
            var s=r1+r2;
                res=s/r3;
        }
        return res;
    },
    resta:function(){
        if (this.d1==this.d2) {
            let r1=this.n1-this.n2;
                res=r1/this.d1;
        }else{
            let r1=this.n1*this.d2;
                r2=this.n2*this.d1;
                r3=this.d1*this.d2;
            var s=r1-r2;
                res=s/r3;
        }
        return res;
    }
}

console.log(fraccion.suma());

//For in

for(atributo in fraccion){
    console.log(atributo);
}

//4ta forma de instanciar objetos

function Aprendiz(nombre, apellido) {
    this.nombre=nombre;
    this.apellido=apellido;
    this.nombreCompleto=function(){
        return this.nombre+" "+ this.apellido;
    }
}
var ob=new Aprendiz("Luis","Diaz");
    ob1=new Aprendiz("Carliitos","Muchito");
console.log(ob.nombreCompleto())

//5ta Forma de instanciar objetos

class Estudiante{
    constructor(nombre,apellido){
        this.nombre=nombre;
        this.apellido=apellido;
    }
}

//Por un token que expiró y volví a regenerar, se jodieron muchas cosas. Esto es una prueba para ver si
//Puedo hacer push de forma tranquila en la casa :)

//Al parecer si sirvió, esta es una prueba más, para asegurarme de que si funciona todo el temario