<?php
session_start();
require_once '../bean/PersonaBean.php';
require_once '../dao/PersonaDAO.php';
$op= $_GET['op'];
switch($op)
{   case 1:
        {   unset($_SESSION['lista']);
            $obj= new PersonaDAO();
            $lista= $obj->ListarPersona();
            $_SESSION['lista'] = $lista;
            header('location:../vista/FrmListarPersona.php');
            break;
        }
    case 2:
        {
            unset($_SESSION['lista']);
            header('location:../vista/FrmMenu.php');
            break;
        }
    case 3:
        {
            unset($_SESSION['lista']);
            unset($_SESSION['estadoeliminar']);
            $codigo = $_GET['cod'];
            $objPersonaBean = new PersonaBean();
            $objPersonaBean -> setCODPERSO($codigo);
            $obj = new PersonaDAO();
            $i = $obj ->EliminarPersonas($objPersonaBean);
            $_SESSION['lista']=$lista;
            header('location: ../viata/FrmListarPersona.php');
            break;
        }    
    case 4:
        {
            $_SESSION['estado']= $estado;
            header('location: ../vista/FrmGrabarPersona.php');
            break;
        }
    case 5:
        {
            $CODIGO = $_GET['txtcod'];
            $NOMBRE = $_GET['txtnom'];
            $APELLIDO = $_GET['txtape'];
            $objPersonaBean = new PersonaBean();
            $objPersonaBean -> setCODPERSO($CODIGO);
            $objPersonaBean -> setNOMBPERSO($NOMBRE);
            $objPersonaBean ->setAPELLIPERSO($APELLIDO);
            $objPersonaBean =new PersonaDAO();
            $estado = $objPersonaDAO->InsertarPersona($objPersonaBean);
            $_SESSION['estado'] = $estado;
            header('Location: ../vista/FrmGrabarPersona.php');
        }        
        

}
?>