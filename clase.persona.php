<?php
/**
 * 
 */
class Persona 
{
    private $_apellido;
    private $_dni;
    private $_nombre;
    private $_sexo;
    
    function __construct($nombre,$apellido,$dni,$sexo)
    {
        $this->_nombre=$nombre;
        $this->_apellido=$apellido;
        $this->_dni=$dni;
        $this->_sexo=$sexo;
    }
}

?>