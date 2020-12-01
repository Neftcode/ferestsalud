<?php
namespace App\Acme\FerestBundle\PHPfpdf\classes;

use App\Acme\FerestBundle\PHPfpdf\FpdfProtectionBundle;

class EvolucionDiariaBundle extends FpdfProtectionBundle {

    private $dirPath;
    private $name;

    function __construct($dirPath) {
        $this->dirPath = $dirPath;
        $this->name = 'Evolución diaria.pdf';
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
        $this->SetKeywords("Formato Evolución Diaria", true);
        $this->SetTitle("Formato Evolución Diaria", true);
        $this->SetSubject("Formato Evolución Diaria", true);

        $this->encabezadoAsistencia($matriz["datosEmpresaE"]);
    }
    
    function encabezadoAsistencia($evolucionF) {
        $this->AddPage();
        $this->SetFont('Arial','B',8);
        $this->Cell(0,4,utf8_decode(''),0);
        $this->Ln();
        $this->Cell(85,4,utf8_decode(''),0);
        $this->Cell(85,4,utf8_decode(''),0);
        $this->Cell(0,4,utf8_decode(''),0);//
        $this->Ln();
        $this->Cell(55,4,utf8_decode(''),0);
        $this->Cell(45,4,"Nit. ".utf8_decode('901421975-0'),0);
        $this->SetFont('Arial','B',12);
        $this->Cell(0,4,utf8_decode('EVOLUCIÓN DE FISIOTERAPIA'),0);//
        $this->Image($this->dirPath.'images/ferestIPS.png',10,10,50);
        $this->SetFont('Arial','B',7);
        $this->Ln();
        $this->Cell(0,6,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(28,5,utf8_decode('No. IDENTIFICACIÓN:'),0);
        $this->Cell(23,5,utf8_decode($evolucionF["NoDocumento"]),1);//Cédula
        $this->Cell(1,5,utf8_decode(''),0);//ESPACIO
        $this->Cell(18,5,utf8_decode('PACIENTE'),0,0,'C');
        $this->Cell(100,5,utf8_decode($evolucionF["nombres"]),1);
        $this->Cell(1,5,utf8_decode(''),0);//ESPACIO
        $this->Cell(10,5,utf8_decode('EDAD'),0,0,'C');//
        $this->Cell(1,5,utf8_decode(''),0);//ESPACIO
        $this->Cell(0,5,utf8_decode($evolucionF["edad"]),1);//
        $this->Ln();
        $this->Cell(0,1,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(20,5,utf8_decode('ENTIDAD'),0);//
        $this->Cell(1,5,utf8_decode(''),0);//ESPACIO
        $this->Cell(80,5,utf8_decode($evolucionF["entidad"]),1);//
        $this->Cell(40,5,utf8_decode('No. Admisión'),0,0,'R');//
        $this->Cell(1,5,utf8_decode(''),0);//ESPACIO
        $this->Cell(40,5,utf8_decode($evolucionF["admision"]),1);//
        $this->Ln();
        $this->Cell(0,1,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(20,5,utf8_decode('DIAGNÓSTICO'),0);//
        $this->Cell(1,5,utf8_decode(''),0);//ESPACIO
        $this->Cell(0,5,utf8_decode($evolucionF["diagnostico"]),1);//

        $this->Ln();
        $this->Cell(0,6,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(15,5,utf8_decode('Fecha: '),0);//
        $this->Cell(40,5,utf8_decode($evolucionF["fecha"]),1);//FECHA
        $this->SetFont('Arial','B',10);
        $this->Cell(100,5,utf8_decode('Evolución de Fisitoterapia'),0,0,'C');//
        $this->Ln();
        $this->Cell(0,1,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->SetFont('Arial','B',7);
        $this->Cell(15,5,utf8_decode('Hora'),0);//
        $this->Cell(20,5,utf8_decode($evolucionF["hora"]),1);//
        $this->Cell(10,5,utf8_decode('Sesión'),0);//
        $this->Cell(10,5,utf8_decode($evolucionF["sesion"]),1);//
        $this->SetFont('Arial','B',8);
        $this->Ln();
        $this->Cell(0,3,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->MultiCell(0,4,utf8_decode($evolucionF["valoracion"]),1);//
        $this->Ln(15);
        $this->Cell(30,4,utf8_decode('Terapeuta'));            
        $this->Cell(80,4,utf8_decode($evolucionF["terapeuta"]),1);//Numero identificación
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(30,4,utf8_decode('Especialidad'));//Nombre acompañante
        $this->Cell(80,4,utf8_decode($evolucionF["especialidad"]),1);//NombreAcompañante        
    }
}

?>