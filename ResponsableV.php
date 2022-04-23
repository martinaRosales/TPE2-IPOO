<?php
//se crea la clase ResponsableV
class ResponsableV{ 
    private $num_empleado;
    private $num_licencia;
    private $nombre;
    private $apellido;

    //se implementa el constructor para crear los objetos num_empleado, numn_licencia, nombre y apellido
    public function __construct($numEmpleado, $numLicencia, $nombre, $apellido)
    {
        $this -> num_empleado = $numEmpleado;
        $this -> num_licencia = $numLicencia;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
    }

    //se implementan las funciones para acceder a los datos de los objetos
    public function getnum_empleado (){
        return $this -> num_empleado;
    }

    public function getnum_licencia (){
        return $this -> num_licencia;
    }

    public function getnombre (){
        return $this -> nombre;
    }

    public function getapellido (){
        return $this -> apellido;
    }

    //se implementan las funciones para modificar los datos de los objetos
    public function setnum_empleado ($newEmpleado){
        $this -> num_empleado = $newEmpleado;
    }

    public function setnum_licencia ($newLicencia){
        $this -> num_licencia = $newLicencia;
    }

    public function setnombre ($newNombre){
        $this -> nombre = $newNombre;
    }

    public function setapellido ($newApellido){
        $this -> apellido = $newApellido;
    }

    //se implementa la función __toString para concatenar el contenido de los objetos
    public function __toString()
    {
        $num_empleado = $this -> getnum_empleado();
        $licencia = $this -> getnum_licencia();
        $nombre = $this -> getnombre();
        $apellido = $this -> getapellido();
        $infoResponsable = "Número de empleado: ". $num_empleado. "\n
        Número de Licencia: ". $licencia. "\n
        Nombre: ". $nombre. "\n
        Apellido: ". $apellido ."\n";
        return $infoResponsable;
    }


}
