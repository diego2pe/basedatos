<?php
require_once '../util/ConexioBD.php';
require_once '../bean/PersonaBean.php';

class PersonaDAO{
    public function ListarPersona()
    { try {
        $sql = "select * from persona;";
        $objc = new ConexionBD();
        $cn = $objc->getConexionBD();
        $rs = mysql_query($cn, $sql);
        $lista = array();
        while($fila = mysql_fetch_assoc($rs)){
            $lista[] = $fila;
        }
        mysql_close($cn);
    } catch (Exception $th) {
    }
    return $lista;
    }
    public function EliminarPersonas(PersonaBean $objPersonaBean)
    {
        try {
            $codigo = $objPersonaBean->getCODPERSO();
            $sql = "DELETE FROM persona Where codperso='$codigo'";
            $objc= new ConexionBD();
            $cn = $objc->getConexionBD();
            $i = mysqli_query($cn, $sql);
            mysqli_close($cn);
            return $i;
        } catch (Exception $th) {
            return 0;
        }

    }
    public function InsertarPersona(´PersonaBean $objPB)
    {
        $i = 0;
        try {
            $sql = "INSERT INTO persona (codperso, nombperso, apelliperso)
                    VALUES ('$objPB->CODPERSO','$objPB->NOMBPERSO', '$objPB->APELLIPERSO');";
            $objc = new ConexionBD();
            $cn=$objc->getConexionBD();
            $i = mysql_query($cn, $sql);
            mysqli_close($cn);

        } catch(Exception $th){
            
        }
    }


    

}
?>