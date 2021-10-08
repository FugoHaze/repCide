
//CLIENTE y EMPLEADO son PERSONAS (Herencia), y VENTA tiene 1 CLIENTE y 1 EMPLEADO (Composición)

class Persona{    
    constructor(cedula, nombre, apellido){
        this._cedula=cedula;
        this._nombre=nombre;
        this._apellido=apellido;
    }
    set cedula(cedula){
        this._cedula=cedula;
    }
    get cedula(){
        return this._cedula;
    }
    set nombre(nombre){
        this._nombre=nombre;
    }
    get nombre(){
        return this._nombre;
    }
    set apellido(apellido){
        this._apellido=apellido;
    }
    get apellido(){
        return this._apellido;
    }
    nombreCompleto(){
        return this._nombre+' '+this._apellido;
    }  
}

class Cliente extends Persona{
    constructor(cedula, nombre, apellido, idCliente){
        super(cedula, nombre, apellido);
        this._idCliente=idCliente;
    }
    set idCliente(idCliente){
        this._idCliente=idCliente;
    }
    get idCliente(){
        return this._idCliente;
    }
    infocliente(){
        return this._nombre+' '+ this._apellido+', con cédula '+ this._cedula+ ', e id '+ this._idCliente;
    }
}

class Empleado extends Persona{
    constructor(cedula, nombre, apellido, idEmpleado, legajo){
        super(cedula, nombre, apellido);
    this._idEmpleado=idEmpleado;
    this._legajo=legajo;
    }
    get idEmpleado(){
        return this._idEmpleado;
    }
    set idEmpleado(idEmpleado){
        this._idEmpleado=idEmpleado;
    }
    get legajo(){
        return this._legajo;
    }
    set legajo(legajo){
        this._legajo=legajo;
    }
    infoEmpleado(){
        return this._nombre+' '+ this._apellido+', con cédula '+ this._cedula+ ', id '+ this._idEmpleado + ' y legajo '+this._legajo;
    }
}

class Ventas{
    constructor(idVenta,venta){
        this._idVenta=idVenta;
        this._venta=venta;
    }
}

//Creación de Clientes
var cli1=new Cliente(1001010,"Santiago","Sierra",1);
var cli2=new Cliente(1002020,"Andrés","Marciano",2);

//Creación de Empleados
var emp1=new Empleado(1003030,"José","Miraflores",1,10);

//Creación de Ventas
var ventas=[];

var ventas2=[];

ventas.push(cli1,emp1);
ventas2.push(cli2,emp1);

var venta1=new Ventas(1,ventas);
var venta2=new Ventas(2,ventas2);

//Una Venta está compuesta por un empleado y un cliente
console.log(venta1);
console.log(venta2);