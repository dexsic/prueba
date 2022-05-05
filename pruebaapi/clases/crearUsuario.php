<?php
class crearUsuario{
    public $nombre;
    public $apellido;
    public $email;
    public $password;
   

    function __construct($n, $a, $e,$p)
    {
        $this->nombre = $n;
        $this->apellido = $a;
        $this->email = $e;
        $this->password = $p;

       
    }
}
?>