<?php
namespace App\Acme\FerestBundle\PHPfpdf\classes;

use App\Acme\FerestBundle\PHPfpdf\FpdfProtectionBundle;

class FacturaBundle extends FpdfProtectionBundle {

    private $dirPath;
    private $name;

    function __construct($dirPath) {
        $this->dirPath = $dirPath;
        $this->name = 'Factura.pdf';
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
        $this->SetKeywords("Formato Factura", true);
        $this->SetTitle("Formato Factura", true);
        $this->SetSubject("Formato Factura", true);

        $this->encabezado($matriz["datosEmpresa"],$matriz["datosPaciente"],$matriz["datosFactura"]);
        $this->cufeConceptos($matriz["datosFactura"]);
        $this->valor($matriz["datosFactura"]);
        $this->referenciaPago($matriz["datosEmpresa"],$matriz["datosPaciente"],$matriz["datosFactura"],$matriz["datosReferenciaPago"]);
    }

    function encabezado($empresa, $paciente, $factura) {
        $this->AddPage();
        $this->SetFont('Arial','B',6);//Tipo de logo
        $this->Cell(0,245,'',1);
        $this->Ln(0);
        $this->Cell(90,4,utf8_decode('CAJA COMPENSANCIÓN FAMILIAR FEREST SALUD'));//Cuadro izquierdo
        $this->Cell(100,4,utf8_decode(''));//izquierda
        $this->Ln();
        $this->Cell(90,4,"NIT: ".utf8_decode($empresa["nit"]));
        $this->Cell(100,4,utf8_decode(''));//izquierda
        $this->Ln();
        $this->Cell(90,4,utf8_decode('Entidad sin ánimo de lucro'));
        $this->Cell(100,4,utf8_decode(''));//izquierda
        $this->Ln();
        $this->Cell(90,4,utf8_decode("Dirección: ").utf8_decode($empresa["dire"]));
        $this->Cell(100,4,utf8_decode(''));//izquierda
        $this->Ln();
        $this->Cell(90,4,"Telefono: ".utf8_decode($empresa["tele"]));
        $this->Cell(100,4,"Referencia de pago: ".utf8_decode($factura["referenciaPago"]));//izquierda
        $this->Image($this->dirPath.'images/ferestIPS.png',100,12,50);

        //Datos del paciente
        $this->Ln();
        $this->Cell(90,4,utf8_decode(''));
        $this->Cell(100,4,utf8_decode(''));//izquierda
        $this->Ln();
        $this->Cell(90,4,"Nombre del paciente:".utf8_decode($paciente["nombre"]));
        $this->Cell(100,5,utf8_decode("Fecha Electrónica de Venta No.: ").utf8_decode($factura["fechaElectronica"]));//izquierda
        $this->Ln();
        $this->Cell(90,5,"Responsable: ".utf8_decode($paciente["responsable"]));
        $this->Cell(100,5,utf8_decode(''));//izquierda
        $this->Ln();
        $this->Cell(90,5,utf8_decode("Dirección: ").utf8_decode($paciente["dir"]));
        $this->Cell(55,5,utf8_decode(''));
        $this->Cell(15,5,utf8_decode('AÑO'),0,0,'C');
        $this->Cell(15,5,utf8_decode('MES'),0,0,'C');
        $this->Cell(15,5,utf8_decode('DIA'),0,0,'C');
        $this->Ln();
        $this->Cell(90,5,"T.D ".utf8_decode($paciente["cedula"]));
        $this->Cell(100,5,utf8_decode("Fecha Emisión: ").utf8_decode($factura["fechaEmision"]));//izquierda
        $this->Ln();
        $this->Cell(90,5,"Telefono: ".utf8_decode($paciente["tel"]));
        $this->Cell(100,5,utf8_decode("Fecha Vencimiento: ").utf8_decode($factura["fechaVencimiento"]));//izquierda
        $this->Ln();
        $this->Cell(90,5,utf8_decode(''));
        $this->Cell(100,5,"Hora: ".utf8_decode($factura["hora"]));//izquierda
    }

    function cufeConceptos($factura) {
        
        $this->Ln();
        $this->Cell(190,4,"CUFE: ".utf8_decode($factura["cufe"]));
        $this->Ln();
        $this->Cell(40,4,utf8_decode("Plan Beneficio:"),1);
        $this->Cell(110,4,utf8_decode($factura["planBeneficio"]),1);
        $this->Cell(0,4,"Ciudad: ".utf8_decode($factura["ciudad"]),1);
        $this->Ln();
        $this->Cell(0,4,utf8_decode('Autorizacón de Facturación segun resolución DIAN No. 18763001861668 del 21/11/2019 al 21/05/2021 prefijo SDO1 desde 542044 al 1542043'),1);
        $this->Ln();
        $this->Cell(0,4,utf8_decode('CONCEPTOS'),1,0,'C');
        $this->Ln();
        $this->Cell(20,4,utf8_decode('Código'),1,0,'C');
        $this->Cell(20,4,utf8_decode('T.Pres'),1,0,'C');
        $this->Cell(60,4,utf8_decode('Descripción'),1,0,'C');
        $this->Cell(15,4,utf8_decode('Cant.'),1,0,'C');
        $this->Cell(15,4,utf8_decode('Grav.%'),1,0,'C');
        $this->Cell(30,4,utf8_decode('Valor Unitario'),1,0,'C');
        $this->Cell(0,4,utf8_decode('Valor Total'),1,0,'C');
        $this->Ln();
        $this->Cell(20,35,utf8_decode($factura["codigo"]),1);
        $this->Cell(20,35,utf8_decode($factura["tpres"]),1);
        $this->Cell(60,35,utf8_decode($factura["descripcion"]),1);
        $this->Cell(15,35,utf8_decode($factura["cantidad"]),1);
        $this->Cell(15,35,utf8_decode($factura["grav"]),1);
        $this->Cell(30,35,utf8_decode($factura["valorUnitario"]),1);
        $this->Cell(0,35,utf8_decode($factura["valorTotal"]),1);

    
    }

    function valor($factura) {
        $this->Ln();
        $this->Cell(70,4,utf8_decode('Valor base gravable'),1,0,'C');
        $this->Cell(10,4,utf8_decode('%'),1,0,'C');
        $this->Cell(35,4,utf8_decode('Valor IVA'),1,0,'C');
        $this->Cell(45,4,utf8_decode('Valor'),1);
        $this->Cell(0,4,utf8_decode($factura["valor"]),1,0,'R');
        $this->Ln();
        $this->Cell(70,4,utf8_decode($factura["valorBase"]),0,0,'C');
        $this->Cell(10,4,utf8_decode(''));
        $this->Cell(35,4,utf8_decode($factura["valorIva"]),0,0,'C');
        $this->Cell(45,4,utf8_decode('Descuento'),1);
        $this->Cell(0,4,utf8_decode($factura["descuento"]),1,0,'R');
        $this->Ln();
        $this->Cell(70,4,utf8_decode(''));
        $this->Cell(10,4,utf8_decode(''));
        $this->Cell(35,4,utf8_decode(''));
        $this->Cell(45,4,utf8_decode('Total Iva'),1);
        $this->Cell(0,4,utf8_decode($factura["totalIva"]),1,0,'R');
        $this->Ln();
        $this->Cell(70,4,utf8_decode(''));
        $this->Cell(10,4,utf8_decode(''));
        $this->Cell(35,4,utf8_decode(''));
        $this->Cell(45,4,utf8_decode('Impuesto de consumo'),1);
        $this->Cell(0,4,utf8_decode($factura["impuestoConsumo"]),1,0,'R');
        $this->Ln();
        $this->Cell(70,4,utf8_decode(''));
        $this->Cell(10,4,utf8_decode(''));
        $this->Cell(35,4,utf8_decode(''));
        $this->Cell(45,4,utf8_decode('Valor Total'),1);
        $this->Cell(0,4,utf8_decode($factura["valorTotal"]),1,0,'R');
        $this->Ln();
        $this->Cell(70,4,utf8_decode(''));
        $this->Cell(10,4,utf8_decode(''));
        $this->Cell(35,4,utf8_decode(''));
        $this->Cell(45,4,utf8_decode('Menos anticipos'),1);
        $this->Cell(0,4,utf8_decode($factura["menosAnticipos"]),1,0,'R');
        $this->Ln();
        $this->Cell(70,4,utf8_decode(''));
        $this->Cell(10,4,utf8_decode(''));
        $this->Cell(35,4,utf8_decode(''));
        $this->Cell(45,4,utf8_decode('Copago/Cuota Moderadora'),1);
        $this->Cell(0,4,utf8_decode($factura["copago"]),1,0,'R');
        $this->Ln();
        $this->Cell(70,4,utf8_decode(''));
        $this->Cell(10,4,utf8_decode(''));
        $this->Cell(35,4,utf8_decode(''));
        $this->Cell(45,4,utf8_decode('Valor a pagar'),1);
        $this->Cell(0,4,utf8_decode($factura["valorPagar"]),1,0,'R');

        $this->Ln();
        $this->Cell(115,4,"Valor en letras: ".utf8_decode($factura["valorLetras"]),1);
        $this->Cell(0,4,utf8_decode(''),1);
        $this->Ln();
        $this->Cell(115,4,"Forma de pago: ".utf8_decode($factura["formaPago"]),1);
        $this->Cell(0,4,"Medio de pago ".utf8_decode($factura["medioPago"]),1);
        $this->Ln();
        $this->SetFont('Arial','',6);
        $this->MultiCell(115,3,utf8_decode('Si usted es una persona natural no debe realizar el pago ya que este se efectuó en el momento de la prestación del servicio. Por favor cancelar en Banco Bogotá o través de la sede de Ferest Salud. El incumplimiento en el pago de la presente Obligación genera cargo por intereses de mora a la tasa legal vigente.'),1);
        $this->SetFont('Arial','B',7);
        $this->Cell(0,5,utf8_decode('Observaciones'),1);
        $this->Ln();
        $this->Cell(0,15,utf8_decode(''),1);
        $this->SetFont('Arial','',6);
        $this->Ln();
        $this->Cell(0,5,utf8_decode('Elaboró: LAURA TATIANA VELÁSQUEZ RICO'),1,0,'R');
        $this->Ln();
        $this->Cell(0,2,utf8_decode('Factura 1/1'),0,0,'R');
    }

    function referenciaPago($empresa,$paciente,$factura,$pago) {
        $this->Ln();
        $this->Cell(190,10,utf8_decode(''));
        $this->Ln();
        $this->SetFont('Arial','B',7);
        $this->Cell(95,5,"Referencia de pago: ".utf8_decode($factura["referenciaPago"]),1);
        $this->Cell(0,5,utf8_decode("Fecha Electrónica de Venta No.: ").utf8_decode($factura["fechaElectronica"]),1);
    
        $this->Ln();
        $this->Cell(40,5,utf8_decode(''));
        $this->Cell(102,5,"Nombre del paciente: ".utf8_decode($paciente["nombre"]),1);
        $this->Cell(0,5,"T.D ".utf8_decode($paciente["cedula"]),1);
        $this->Ln();
        $this->Cell(40,5,utf8_decode(''));
        $this->Cell(102,5,"Fecha de pago: ".utf8_decode($pago["fechaPago"]),1);
        $this->Cell(18,5,utf8_decode('AÑO'),1,0,'C');
        $this->Cell(18,5,utf8_decode('MES'),1,0,'C');
        $this->Cell(0,5,utf8_decode('DIA'),1,0,'C');
        $this->Ln();
        $this->Cell(40,5,utf8_decode(''));
        $this->Cell(25,5,utf8_decode('Total a pagar:'),1);
        $this->Cell(40,5,utf8_decode($pago["totalPagar"]),1);
        $this->Cell(0,5,utf8_decode('Detalle de cheques'),1,0,'C');
        $this->Ln();
        $this->Cell(40,5,utf8_decode(''));
        $this->Cell(34,5,utf8_decode('Efectivo:'),1);
        $this->Cell(46,5,utf8_decode('$ Cod. Bco'),1,0,'C');
        $this->Cell(35,5,utf8_decode('No. Cheque'),1,0,'C');
        $this->Cell(0,5,utf8_decode('Valor'),1,0,'C');
        $this->Ln();
        $this->Cell(40,5,utf8_decode(''));
        $this->Cell(34,5,utf8_decode('Total Cheques:'),1);
        $this->Cell(23,5,utf8_decode('$'),1);
        $this->Cell(23,5,utf8_decode(''),1);
        $this->Cell(35,5,utf8_decode(''),1);
        $this->Cell(0,5,utf8_decode(''),1);
        $this->Ln();
        $this->Cell(40,5,utf8_decode(''));
        $this->Cell(34,5,utf8_decode('Total'),1);
        $this->Cell(23,5,utf8_decode('$'),1);
        $this->Cell(23,5,utf8_decode(''),1);
        $this->Cell(35,5,utf8_decode(''),1);
        $this->Cell(0,5,utf8_decode(''),1);
        $this->Ln();
        $this->Cell(40,15,utf8_decode(''));
        $this->Cell(0,15,utf8_decode(''),1);
    }
}

?>