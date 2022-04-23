<?php
//se crea la clase Viaje
class Viaje{
    private $codigo;
    private $destino;
    private $maxPasajeros;
    private $pasajeros; //Pasajeros es un arreglo multidimensional
    private $objResponsable;


    //se implementa el constructor para crear los objetos codigo, destino, maxPasajeros y pasajeros
    public function __construct ($codigo, $destino, $maxPasajeros, $pasajeros, $responsable){
        $this -> codigo = $codigo;
        $this -> destino = $destino;
        $this -> maxPasajeros = $maxPasajeros;
        $this -> pasajeros = $pasajeros;
        $this -> objResponsable = $responsable;
    }

    //se implementan las funciones para acceder a los datos de los objetos

    public function getcodigo (){
        return $this -> codigo;
    }

    public function getdestino (){
        return $this -> destino;
    }

    public function getmaxPasajeros (){
        return $this -> maxPasajeros;
    }

    public function getpasajeros (){
        return $this -> pasajeros;
    }
    
    public function getobjResponsable (){
        return $this -> objResponsable;
    }
    //se implementan las funciones para modificar los datos de los objetos

    public function setcodigo ($codigoNuevo){
        $this -> codigo = $codigoNuevo;
    }

    public function setdestino ($destinoNuevo){
        $this -> destino = $destinoNuevo;
    }

    public function setmaxPasajeros ($maxPasajerosNuevo){
        $this -> maxPasajeros = $maxPasajerosNuevo;
    }

    public function setpasajeros ($pasajerosNuevo){
        $this -> pasajeros = $pasajerosNuevo;
    }

    public function setobjResponsable ($responsableNuevo){
        $this -> objResponsable = $responsableNuevo;
    }

    //se implementa la función __toString para concatenar el contenido de los objetos
    public function __toString (){
        //se utiliza una función a parte para concatenar el contenido del arreglo pasajeros
        //$infoPasajero = $this -> infoPasajero ();
        $infoPasajeros = $this -> infoPasajero();
        $infoViaje = "Código de viaje: ". $this -> getcodigo(). "\n 
        Destino de viaje: ". $this -> getdestino (). "\n 
        Responsable del viaje: \n". $this -> getobjResponsable(). "\n
        Cantidad máxima de pasajeros: ". $this -> getmaxPasajeros (). "\n.
        INFORMACION PASAJEROS \n" . $infoPasajeros;
        return $infoViaje;
    }


    //repetitiva que concatena la información de los pasajeros
    public function infoPasajero (){
        $listaPasajeros = " ";
        $pasajeros = $this -> getpasajeros ();
        for ($i = 0; $i < count ($pasajeros); $i++){
            $nombre = $pasajeros [$i] -> getatNombre();
            $apellido = $pasajeros [$i] -> getatApellido ();
            $dni = $pasajeros [$i] -> getatDNI ();
            $telefono = $pasajeros [$i] -> getatTelefono ();
            $listaPasajeros = $listaPasajeros. "\n". "Pasajero/a ". ($i+1). ": \nNombre: ".$nombre. "\nApellido: ". $apellido. "\nDNI: ". $dni. "\nTeléfono: ". $telefono."\n";
        }
        return $listaPasajeros;
    }

    //función que agrega objetos pasajero a un arreglo arrayPasajeros
    public function agregarPasajeros ($objPasajero){
        $arrayPasajeros = $this -> getpasajeros();
        $i = count($arrayPasajeros);
        $arrayPasajeros [$i] = $objPasajero;
        $this -> setpasajeros($arrayPasajeros);
    }

    //función que modifica el contenido del atributo nombre de un objeto pasajero a partir de un 
    // índice en el arreglo pasajeros
    public function modificarNombrePasajero ($indice, $nombreNuevo){
        $pasajeros = $this -> getpasajeros ();
        $pasajeros [$indice] -> setatNombre ($nombreNuevo);
        $this -> setpasajeros ($pasajeros);
    }

    //función que modifica el contenido del atributo apellido de un objeto pasajero a partir de un 
    // índice en el arreglo pasajeros
    public function modificarApellidoPasajero ($indice, $apellidoNuevo){
        $pasajeros = $this -> getpasajeros ();
        $pasajeros [$indice] -> setatApellido ($apellidoNuevo);
        $this -> setpasajeros ($pasajeros);
    }

    //función que modifica el contenido del atributo dni de un objeto pasajero a partir de un 
    // índice en el arreglo pasajeros
    public function modificarDNIPasajero ($id, $dniNuevo){
        $pasajeros = $this -> getpasajeros ();
        $pasajeros [$id] -> setatDNI ($dniNuevo);
        $this -> setpasajeros ($pasajeros);
     }

     
    //función que modifica el contenido del atributo telefono de un objeto pasajero a partir de un 
    // índice en el arreglo pasajeros
    public function modificarTelefonoPasajero ($id, $telefonoNuevo){
        $pasajeros = $this -> getpasajeros ();
        $pasajeros [$id] -> setatTelefono ($telefonoNuevo);
        $this -> setpasajeros ($pasajeros);
    }

    //Función que modifica el atributo numero_empleado del objeto objResponsable
    public function modificarNumero_empleadoResponsable ($new_numeroEmpleado){
        $objResponsable = $this -> getobjResponsable ();
        $objResponsable -> setnum_empleado ($new_numeroEmpleado);
        $this -> setobjResponsable ($objResponsable);
    }

    //Función que modifica el atributo numero_licencia del objeto objResponsable
    public function modificarNumero_licenciaResponsable ($new_numeroLicencia){
        $objResponsable = $this -> getobjResponsable ();
        $objResponsable -> setnum_licencia ($new_numeroLicencia);
        $this -> setobjResponsable ($objResponsable);
    }

    //Función que modifica el atributo nombre del objeto objResponsable
    public function modificarNombre_Responsable ($new_nombre){
        $objResponsable = $this -> getobjResponsable ();
        $objResponsable -> setnombre ($new_nombre);
        $this -> setobjResponsable ($objResponsable);
    }

    //Función que modifica el atributo apellido del objeto objResponsable
    public function modificarApellido_Responsable ($new_apellido){
        $objResponsable = $this -> getobjResponsable ();
        $objResponsable -> setapellido ($new_apellido);
        $this -> setobjResponsable ($objResponsable);
    }


}
