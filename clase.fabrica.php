<?php
/**
 * 
 */
class Fabrica
{
    
    private $_empleados;
    private $_razonSocial;        

    function __construct($razon)
    {
        $this->_razonSocial=$razon;
        $this->_empleados=array();
    }

    function AgregarEmpleado($persona){
        if(array_p($this->_empleados,$persona)) return true;
        return false;
    }
}

?>