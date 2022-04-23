<?php
//se crea la clase Pasajero
class Pasajero{
    
    private $atNombre;
    private $atApellido;
    private $atDNI;
    private $atTelefono;
    
    //se implementa el constructor para crear los objetos atNombre, atApellido, atDNI y atTelefono
    public function __construct ($nombre, $apellido, $dni, $telefono){
        $this -> atNombre = $nombre;
        $this -> atApellido = $apellido;
        $this -> atDNI = $dni;
        $this -> atTelefono = $telefono;
    }

    //se implementan las funciones para acceder a los datos de los objetos
    public function getatNombre (){
       return $this -> atNombre;
    }

    public function getatApellido (){
        return $this -> atApellido;
    }

    public function getatDNI (){
        return $this -> atDNI;
    }

    public function getatTelefono (){
        return $this -> atTelefono; 
    }

    //se implementan las funciones para modificar los datos de los objetos
    public function setatNombre ($newNombre){
        $this -> atNombre = $newNombre;
    }

    public function setatApellido ($newApellido){
        $this -> atApellido = $newApellido;
    } 

    public function setatDNI ($newDNI){
        $this -> atDNI = $newDNI;
    } 

    public function setatTelefono ($newTelefono){
        $this -> atTelefono = $newTelefono;
    }

    //se implementa la función __toString para concatenar el contenido de los objetos
    public function __toString (){
        $nombre = $this -> getatNombre ();
        $apellido = $this -> getatApellido();
        $dni = $this -> getatDNI();
        $telefono = $this -> getatTelefono ();
        $infoPersona = "    Nombre: ". $nombre. "\n
        Apellido: ". $apellido ."\n
        DNI: ". $dni. "\n
        Telefono: ". $telefono. "\n";
        return $infoPersona;
    }

    
}
