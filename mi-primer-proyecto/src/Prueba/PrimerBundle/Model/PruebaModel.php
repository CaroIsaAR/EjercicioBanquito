<?php 
namespace Prueba\PrimerBundle\Model;
use Utilerias\SQLBundle\Model\SQLModel;

class PruebaModel{
    protected $SQLModel;

    public function __construct(){
        $this->SQLModel = new SQLModel();
        $this->SQLModel->setSchema("public");
    }

    public function getCliente(){
        $qry = '';
        $qry .= 'SELECT ';
        $qry .= '"idcte",';
        $qry .= '"nombre",';
        $qry .= '"apellidos",';
        $qry .= '"telefono",';
        $qry .= '"direccion",';
        $qry .= '"idciudad"';
        $qry .= ' FROM "cliente"';

        $result = $this->SQLModel->executeQuery($qry);

        return $result;
    }

    public function getMovimientos(){
        $cuenta='1955204720564937';

        $qry=' ';
        $qry.='SELECT ';
        $qry.='* FROM ';
        $qry.='"vw_tablaMov" ';
        $qry.='WHERE ';
        $qry.="nocuenta='$cuenta'";

        $result = $this->SQLModel->executeQuery($qry);

        return $result;
    }

    /*public function getSaldo(){
        $cuenta='1955204720564937';
        $qry='';
        $qry.='SELECT ';
        $qry.='"NoCuenta,"';
        $qry='"SaldoTotal" ';
        $qry='FROM "vw_SaldoTotal" ';
        $qry.='WHERE "NoCuenta"=\''+$cuenta+'\'';

        $result = $this->SQLModel->executeQuery($qry);

        return $result;
    }*/
}

