class Persona{
    constructor(nombre, apell){
        this._nombre=nombre;
        this._apell=apell;    
    }
    set nombre(nombre){
        this._nombre=nombre;
    }
    get nombre(){
        return this._nombre;
    }
    set apell(apell){
        this._apell=apell;
    }
    get apell(){
        return this._apell;
    }
    nombreCompleto(){
        return this._nombre + " " + this._apell;
    }
}

obj= new Persona("Carlo","Magno");

console.log(obj.apell);

obj.apell="Magnasio";

console.log(obj.apell);

console.log(obj.nombreCompleto());



class Aprendiz extends Persona{
    constructor(nombre,apell,programa,ficha){
        super(nombre, apell);
        this._programa=programa;
        this._ficha=ficha;
    }
    set programa(programa){
        this._programa=programa;
    }
    get programa(){
        return this._programa;
    }
    set ficha(ficha){
        this._ficha=ficha;
    }
    get ficha(){
        return this._ficha;
    }
    todo(){
        return "Aprendiz "+this._nombre+" "+this._apell+" de la ficha "+this._ficha+" del programa "+this._programa;
    }
}

ob=new Aprendiz("Carlitos","Muchito","ADSI",2142329);   

console.log(ob.todo())