<?php
namespace App\Acme\FerestBundle\PHPfpdf\classes;

use App\Acme\FerestBundle\PHPfpdf\FpdfProtectionBundle;

class OrdenMedicaBundle extends FpdfProtectionBundle {

    private $dirPath;
    private $name;

    function __construct($dirPath) {
        $this->dirPath = $dirPath;
        $this->name = 'Orden médica.pdf';
    }

    public function getDirPath(): ?string
    {
        return $this->dirPath;
    }

    public function setDirPath($dirPath): self
    {
        $this->dirPath = $dirPath;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    function pdfBuild($matriz) {
        $this->SetProtection(array('print'), '', 'DesarrolloFerestSalud2020*');// Implementar protección al documento (Permitir solo imprimir)
        parent::__construct('P',"mm","Letter");

        $this->SetCreator("Ferest Salud IPS", true);
        $this->SetAuthor("Ferest Salud IPS", true);
        $this->SetKeywords("Formato Orden Médica", true);
        $this->SetTitle("Formato Orden Médica", true);
        $this->SetSubject("Formato Orden Médica", true);

        $this->encabezadoOrdenMedica($matriz["datosEmpresaO"]);
    }
        
    function encabezadoOrdenMedica($ordenmedicaF){
        $this->AddPage();
        $this->SetFont('Arial','B',14);
        $yInitial = $this->GetY();
        $this->Cell(100,25,utf8_decode(''),1);
        $this->Cell(0,25,utf8_decode('Orden Médica Control'),1,0,'C');
        $this->Ln();
        $this->SetFont('Arial','B',8);
        $this->Cell(0,5,"NIT ".utf8_decode($ordenmedicaF["nit"]));
        $this->Ln();
        $this->Cell(70,5,utf8_decode('Transversal 18 Bis No. 13-36 Sur'),1);
        $this->Cell(1,5,utf8_decode(''),0);//ESPACIO
        $this->Cell(55,5,utf8_decode("Teléfono: ".$ordenmedicaF["telefono"]),1);
        $this->Cell(1,5,utf8_decode(''),0);//ESPACIO
        $this->Cell(0,5,"Fecha: ".utf8_decode($ordenmedicaF["fecha"]),1,0);
        $this->Ln(7);
        $this->Cell(25,5,utf8_decode('Admisión'),0);
        $this->Cell(33,5,utf8_decode($ordenmedicaF["admision"]),1);//admision
        $this->Cell(25,5,utf8_decode('ENTIDAD'),0,0,'C');
        $this->Cell(0,5,utf8_decode($ordenmedicaF["entidad"]),1);//entidad
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,5,utf8_decode('Paciente'),0);
        $this->Cell(33,5,utf8_decode($ordenmedicaF["NoDocumento"]),1);//Cédula
        $this->Cell(1,5,utf8_decode(''),0);//ESPACIO
        $this->Cell(0,5,utf8_decode($ordenmedicaF["nombres"]),1);//nombres
        $this->Ln(7);
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        // $this->Cell(0,35,'',1);
        $this->Ln(0);
        $this->Cell(90,5,utf8_decode($ordenmedicaF["terapia"]),1);
        $this->Cell(10,5,utf8_decode('en'),0,0,'C');
        $this->Cell(10,5,utf8_decode($ordenmedicaF["dias"]),1,0,'C');
        $this->Cell(10,5,utf8_decode('días'),0,0,'C');
        $this->Ln();
        $this->MultiCell(0,4,utf8_decode($ordenmedicaF["valoracion"]),1);
        $this->Image($this->dirPath.'images/ferestIPS.png',20,13,80);
        $this->Ln(12);
        $this->Cell(0,5,utf8_decode('Exámenes Pendientes'),1);
        $this->Ln();
        $this->MultiCell(0,4,utf8_decode($ordenmedicaF["examenesPendientes"]),1);
        $this->Ln(12);
        $this->Cell(40,5,utf8_decode($ordenmedicaF["medico"]),1);
        $this->Cell(120,5,utf8_decode($ordenmedicaF["procedimiento"]),1);
        $this->Cell(10,5,utf8_decode('R.M.'),1);
        $this->Cell(0,5,utf8_decode($ordenmedicaF["rm"]),1);
        
        $this->SetFont('Arial','BI',8);
        $this->Ln();
        $this->Cell(0,5,utf8_decode('"La historia clínica no lleva la firma y sello teniendo en cuenta el articulo 18 de la resolución 1995, Julio 8 de 1999"'),1,0,'C');
        $xFinal = $this->GetX();
        $this->Ln();
        $xInitial = $this->GetX();
        $yFinal = $this->GetY();
        $this->Rect($xInitial,$yInitial,($xFinal-$xInitial),($yFinal-$yInitial));
    }
}

?>