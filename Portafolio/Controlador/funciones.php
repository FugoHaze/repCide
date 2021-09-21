<?php
include "../Modelo/cone.php";
//Interfaces 
interface daoRegistro{
    public function Registrar(Persona $e);
}
interface daoModificar{
    public function Actualizar(Persona $e);
}
interface daoEliminar{
    public function Eliminar(Persona $e);
}
interface daoMostrar{
    public function Mostrar();
}

//Clases 
class Registrar extends Conexion implements daoRegistro{
    public function Registrar(Persona $e){
        try {
            if ($this->getCnx()!=null) {
                $cedula=$e->getCedula();
                $nombre=$e->getNombre();
                $apellido1=$e->getApellido1();
                $apellido2=$e->getApellido2();
                $correo=$e->getCorreo();
                $contra=$e->getContra();
                $sql="INSERT into persona values(?,?,?,?,?,?)";
                $stmt=$this->getCnx()->prepare($sql);
                $stmt->execute([$cedula,$nombre,$apellido1,$apellido2,$correo,$contra]);
            } else {
                echo $this->getCnx().' Es nulo <br>';
            }
        } catch (PDOException $s) {
            echo $s->getMessage()." Error, No se pudo Registrar";
        }
    }
}
class Actualizar extends Conexion implements daoModificar{
    public function Actualizar(Persona $e){
        try {
            $cedula=$e->getCedula();
            $nombre=$e->getNombre();
            $apellido1=$e->getApellido1();
            $apellido2=$e->getApellido2();
            $correo=$e->getCorreo();
            $contra=$e->getContra();
            $sql="UPDATE persona
            SET Nombre ='$nombre', Apellido1 ='$apellido1', Apellido2 = '$apellido2', correo = '$correo', contrasena = '$contra'
            WHERE Cedula ='$cedula'";
            $stmt=$this->getCnx()->prepare($sql);
            $stmt->execute();
        } catch (PDOException $s) {
            echo $s->getMessage()." Error, No se pudo Actualizar";
        }
    }
}
class Eliminar extends Conexion implements daoEliminar{
    public function Eliminar(Persona $e){        
        $cedula=$e->getCedula();
        $stmt=$this->getCnx()->prepare("DELETE from persona where Cedula=$cedula");
        $stmt->execute();        
    }
}
class Mostrar extends Conexion implements daoMostrar{
    public function Mostrar(){
        $lista = null;
            try{    
                $stmt = $this->getCnx()->prepare("SELECT * from persona");
                $lista = array();
                $stmt->execute();
                foreach ($stmt as $key ) {           
                    // $a = new Persona(null,null,null,null,null,null);
                    // $a->setCedula($key[0]);
                    // $a->setNombre($key[1]);
                    // $a->setApellido1($key[2]);
                    // $a->setApellido2($key[3]);
                    // $a->setCorreo($key[4]);
                    // $a->setContra($key[5]);  
                    // array_push($lista,$a);
                    echo "<tr>";
                    echo "<td>$key[0]</td>";
                    echo "<td>$key[1]</td>";
                    echo "<td>$key[2]</td>";
                    echo "<td>$key[3]</td>";
                    echo "<td>$key[4]</td>";
                    // echo "<td>$key[5]</td>";
                    echo "</tr>";         
                }        
                //$this->getCnx()->close();
            }catch(PDOException $e){
                $e->getMessage().'Error en listar de Funciones';
            } 
        //return $lista;       
    }   
    
}

?>