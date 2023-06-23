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
        $qry = ' ';
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

    public function getMovimientos($data){

        $cuenta= $data['cuenta'];

        $qry=' ';
        $qry.='SELECT ';
        $qry.='* FROM ';
        $qry.='"vw_tablaMov" ';
        $qry.='WHERE ';
        $qry.="nocuenta='$cuenta'";

        $result = $this->SQLModel->executeQuery($qry);

        return $result;
    }

    public function setMovimientos($datos){
        $tipomov = $datos['tipomov'];
        $importe = $datos['importe'];
        $cuenta= $datos['cuenta'];
        $idcte= $datos['idcte'];
        $idsuc=$datos['idsuc'];

        $qry=' ';
        $qry.='INSERT ';
        $qry.='INTO movimiento ';
        $qry.='("tipomov", "nocuenta","idcte","idsuc","fecha","importe")';
        $qry.=' VALUES(';
        $qry.="'$tipomov','$cuenta',$idcte,$idsuc,now(),$importe) returning *";

        $result = $this->SQLModel->executeQuery($qry);

        return $result;
    }

}

