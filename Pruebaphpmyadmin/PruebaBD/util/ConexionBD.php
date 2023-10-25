<?php
class ConexionBD{
    const servidor = "localhost";
    const usuario = "root";
    const password = "";
    const basedatos = "pruebabd";
    private $cn = null;

    public function getConexionBD()
    {  try {
        $this-> cn = mysqli_connect(self::servidor, self::usuario, self::password, self::basedatos);
    } catch (Exception $th) {
        //throw $th;
    }
    return $this -> cn;

    }
}

?>