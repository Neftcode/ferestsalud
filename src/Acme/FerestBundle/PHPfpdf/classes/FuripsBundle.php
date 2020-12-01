<?php
namespace App\Acme\FerestBundle\PHPfpdf\classes;

use App\Acme\FerestBundle\PHPfpdf\FpdfProtectionBundle;

class FuripsBundle extends FpdfProtectionBundle {

    private $dirPath;
    private $name;

    function __construct($dirPath) {
        $this->dirPath = $dirPath;
        $this->name = 'Furips.pdf';
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
        $this->SetKeywords("Formato FURIPS", true);
        $this->SetTitle("Formato FURIPS", true);
        $this->SetSubject("Formato FURIPS", true);

        $this->encabezadoFurips($matriz["datosEmpresaF"]);
        $this->datosInstitucionFurips($matriz["InstitucionF"]);
        $this->datosVictimaFurips($matriz["VictimaF"]);
        $this->datosSitioFurips($matriz["SitioF"]);
        $this->datosVehiculoAccidenteFurips($matriz["VehiculoA"]);
        $this->datosVehiculoFurips($matriz["VehiculoF"]);
        $this->datosConductorFurips($matriz["ConductorF"]);
        $this->datosRemisionFurips($matriz["RemisionF"]);
        $this->datosAmparoFurips($matriz["AmparoTransporte"]);
        $this->datosCertificacionFurips($matriz["Certificacion"]);
        $this->datosAmparonReclamaFurips($matriz["AmparoReclamaF"]);
    }
        
    function encabezadoFurips($empresaF) {
        $this->AddPage();
        $this->SetFont('Arial','B',6);
        $this->Cell(180,3,utf8_decode('Resolución 01915'),0,0,'R');
        $this->Cell(0,3,utf8_decode('28 MAY 2008'),0,0,'C');
        $this->Ln();
        $this->Cell(0,4,utf8_decode('REPÚBLICA DE COLOMBIA'),0,0,'C');
        $this->Ln();
        $this->Cell(0,4,utf8_decode('MINISTERIO DE LA PROTECCIÓN SOCIAL'),0,0,'C');
        $this->Ln();
        $this->Cell(0,4,utf8_decode('FORMULARIO ÚNICO DE RECLAMACIÓN DE LOS PRESTADORES DE SERVICIOS DE SALUD POR SERVICIOS PRESTADOS A VÍCTIMAS'),0,0,'C');
        $this->Ln();
        $this->Cell(0,4,utf8_decode('DE EVENTOS CATASTRÓFICOS Y ACCIDENTES DE TRÁNSITO. '),0,0,'C');
        $this->Ln();
        $this->Cell(0,4,utf8_decode('PERSONAS JURÍDICAS - FURIPS'),0,0,'C');
        $this->Image($this->dirPath.'images/ferestIPS.png',12,11,25);
        $this->Ln();
        $this->Ln();
        $this->SetFont('Arial','B',6);
        $this->Cell(20,4,utf8_decode('Fecha Radicación'),0);
        $this->Cell(10,4,utf8_decode(''),0);
        $this->Cell(7,3,"D ".utf8_decode($empresaF["fechaRadicacion1"]),1);//
        $this->Cell(7,3,"D ".utf8_decode($empresaF["fechaRadicacion2"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($empresaF["fechaRadicacion3"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($empresaF["fechaRadicacion3"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($empresaF["fechaRadicacion5"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($empresaF["fechaRadicacion6"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($empresaF["fechaRadicacion7"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($empresaF["fechaRadicacion8"]),1);//
        $this->Cell(15,3,utf8_decode('RG'),0,0,'R');//
        $this->Cell(7,3,utf8_decode($empresaF["rg"]),1);//
        $this->Cell(7,3,utf8_decode(''),0);//Espacio
        $this->Cell(20,3,utf8_decode('No. Radicado'),0);//
        $this->Cell(55,3,utf8_decode($empresaF["NoRadicado"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,3,utf8_decode('No. Radicado Anterior'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(70,3,utf8_decode($empresaF["NoRadicadoAnterior"]),1);
        $this->Cell(7,3,utf8_decode(''),0);//
        $this->Cell(35,3,utf8_decode('Nro. Factura/Cuenta de cobo'),0);//
        $this->Cell(43,3,utf8_decode($empresaF["NoFactura"]),1);//
        $this->Ln();
        $this->Ln();
    }
   
    function datosInstitucionFurips($InstitucionF) {
        $this->Cell(0,3,utf8_decode('I. DATOS DE LA INSTITUCIÓN PRESTADORA DE SERVICIOS DE SALUD'),1,0,'C');
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,3,utf8_decode('Razón Social'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(155,3,utf8_decode($InstitucionF["razonSocial"]),1);
        $this->Ln();
        $this->Cell(0,3,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,3,utf8_decode('Fecha Radicación'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($InstitucionF["fechaRadicacion1"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["fechaRadicacion2"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["fechaRadicacion3"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["fechaRadicacion4"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["fechaRadicacion5"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["fechaRadicacion6"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["fechaRadicacion7"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["fechaRadicacion8"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["fechaRadicacion9"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["fechaRadicacion10"]),1);//
        $this->Cell(15,3,utf8_decode('Nit'),0,0,'R');//
        $this->Cell(5,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($InstitucionF["nit1"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit2"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit3"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit4"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit5"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit6"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit7"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit8"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit9"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit10"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit11"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit12"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit13"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit14"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit15"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit16"]),1);//
        $this->Cell(5,3,utf8_decode($InstitucionF["nit17"]),1);//
        $this->Ln();
        $this->Ln();
    }
    
    function datosVictimaFurips($VictimaF) {
        $this->Cell(0,3,utf8_decode('II. DATOS DE LA VÍCTIMA DEL EVENTO CATASTRÓFICO O ACCIDENTE DE TRÁNSITO'),1,0,'C');
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($VictimaF["apellido1"]),1);//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($VictimaF["apellido2"]),1);//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('1er. Apellido'),0,0,'C');//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('2do. Apellido'),0,0,'C');//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($VictimaF["nombre1"]),1);//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($VictimaF["apellido2"]),1);//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('1er. Nombre'),0,0,'C');//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('2do. Nombre'),0,0,'C');//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,3,utf8_decode('Tipo de Documento'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($VictimaF["tipoDocumento1"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["tipoDocumento2"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["tipoDocumento3"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["tipoDocumento4"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["tipoDocumento5"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["tipoDocumento6"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["tipoDocumento7"]),1);//
        $this->Cell(20,3,utf8_decode(''),0);
        $this->Cell(28,3,utf8_decode('No. Documento'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento1"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento2"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento3"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento4"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento5"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento6"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento7"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento8"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento9"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento10"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento11"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["NoDocumento12"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(20,3,utf8_decode('Fecha de Nacimiento'),0);
        $this->Cell(15,3,utf8_decode(''),0);
        $this->Cell(7,3,"D ".utf8_decode($VictimaF["fechaNacimiento1"]),1);//
        $this->Cell(7,3,"D ".utf8_decode($VictimaF["fechaNacimiento2"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($VictimaF["fechaNacimiento3"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($VictimaF["fechaNacimiento4"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($VictimaF["fechaNacimiento5"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($VictimaF["fechaNacimiento6"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($VictimaF["fechaNacimiento7"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($VictimaF["fechaNacimiento8"]),1);//
        $this->Cell(15,3,utf8_decode('Sexo'),0,0,'R');//
        $this->Cell(7,3,utf8_decode(''),0);//
        $this->Cell(7,3,"F ".utf8_decode($VictimaF["sexoF"]),1);//Espacio
        $this->Cell(7,3,utf8_decode(''),0);//
        $this->Cell(7,3,"M ".utf8_decode($VictimaF["sexoM"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,3,utf8_decode('Dirección Residencia'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($VictimaF["direccion1"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion2"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion3"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion4"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion5"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion6"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion7"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion8"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion9"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion10"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion11"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion12"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion13"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion14"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion15"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion16"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion17"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion18"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion19"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion20"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion21"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion22"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion23"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion24"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion25"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion26"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion27"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion28"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion29"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion30"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion31"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["direccion32"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(25,3,utf8_decode('Departamento'),0);  
        $this->Cell(5,3,utf8_decode($VictimaF["departamento1"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento2"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento3"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento4"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento5"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento6"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento7"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento8"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento9"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento10"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento11"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento12"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento13"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento14"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento15"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["departamento16"]),1);//
        $this->Cell(15,3,utf8_decode('Cod. '),0,0,'R');//
        $this->Cell(5,3,utf8_decode($VictimaF["cod1"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["cod2"]),1);//Espacio
        $this->Cell(15,3,utf8_decode('Teléfono '),0,0,'R');//$
        $this->Cell(5,3,utf8_decode($VictimaF["tel1"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["tel2"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["tel3"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["tel4"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["tel5"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["tel6"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["tel7"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["tel8"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["tel9"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["tel10"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(25,3,utf8_decode('Municipio'),0);
        $this->Cell(5,3,utf8_decode($VictimaF["municipio1"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio2"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio3"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio4"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio5"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio6"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio7"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio8"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio9"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio10"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio11"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio12"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio13"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio14"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio15"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio16"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio17"]),1);//
        $this->Cell(5,3,utf8_decode($VictimaF["municipio18"]),1);//
        $this->Cell(15,3,utf8_decode('Cod. '),0,0,'R');//
        $this->Cell(5,3,utf8_decode($VictimaF["codigo1"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["codigo2"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VictimaF["codigo3"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(50,3,utf8_decode('Condición del Accidentado'),0);
        $this->Cell(5,3,utf8_decode($VictimaF["conductorV"]),1);//
        $this->Cell(15,3,utf8_decode('Conductor'),0);//
        $this->Cell(15,3,utf8_decode(''),0);//espacio
        $this->Cell(5,3,utf8_decode(''),0);//
        $this->Cell(5,3,utf8_decode($VictimaF["peatonV"]),1);//
        $this->Cell(15,3,utf8_decode('Peaton'),0);//
        $this->Cell(15,3,utf8_decode(''),0);//espacio
        $this->Cell(5,3,utf8_decode($VictimaF["ocupanteV"]),1);//
        $this->Cell(15,3,utf8_decode('Ocupante'),0);//
        $this->Cell(15,3,utf8_decode(''),0);//espacio
        $this->Cell(5,3,utf8_decode($VictimaF["ciclistaV"]),1);//
        $this->Cell(15,3,utf8_decode('Ciclista'),0);//
        $this->Cell(15,3,utf8_decode(''),0);//espacio
        $this->Ln();
        
    }

    function datosSitioFurips($SitioF) {
        $this->Cell(0,3,utf8_decode('III. DATOS DEL SITIO DONDE OCURRIÓ EL EVENTO CATASTRÓFICO O EL ACCIDENTE DE TRÁNSITO'),1,0,'C');
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(28,3,utf8_decode('Naturaleza del evento:'),0);
        $this->Cell(35,3,utf8_decode('Accidente de Tránsito'),0);
        $this->Cell(5,3,utf8_decode($SitioF["accidenteT"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(28,3,utf8_decode('Naturales:'),0);
        $this->Cell(35,3,utf8_decode('Sismo'),0);
        $this->Cell(5,3,utf8_decode($SitioF["sismo"]),1);//
        $this->Cell(35,3,utf8_decode('Maremoto'),0,0,'C');
        $this->Cell(5,3,utf8_decode($SitioF["maremoto"]),1);//
        $this->Cell(35,3,utf8_decode('Erupciones Volcánicas'),0,0,'C');
        $this->Cell(5,3,utf8_decode($SitioF["volcanicas"]),1);//
        $this->Cell(35,3,utf8_decode('Huracán'),0,0,'C');
        $this->Cell(5,3,utf8_decode($SitioF["huracan"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(28,3,utf8_decode(''),0);
        $this->Cell(35,3,utf8_decode('Inundaciones'),0);
        $this->Cell(5,3,utf8_decode($SitioF["inundaciones"]),1);//
        $this->Cell(35,3,utf8_decode('Avalancha'),0,0,'C');
        $this->Cell(5,3,utf8_decode($SitioF["avalancha"]),1);//
        $this->Cell(35,3,utf8_decode('Deslizamiento de Tierra'),0,0,'C');
        $this->Cell(5,3,utf8_decode($SitioF["deslizamiento"]),1);//
        $this->Cell(35,3,utf8_decode('Incendio Natural'),0,0,'C');
        $this->Cell(5,3,utf8_decode($SitioF["incendio"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(28,3,utf8_decode('Terroristas:'),0);
        $this->Cell(35,3,utf8_decode('Explosión'),0);
        $this->Cell(5,3,utf8_decode($SitioF["explosion"]),1);//
        $this->Cell(35,3,utf8_decode('Masacre'),0,0,'C');
        $this->Cell(5,3,utf8_decode($SitioF["masacre"]),1);//
        $this->Cell(35,3,utf8_decode('Mina Antipersonal'),0,0,'C');
        $this->Cell(5,3,utf8_decode($SitioF["mina"]),1);//
        $this->Cell(35,3,utf8_decode('Combate'),0,0,'C');
        $this->Cell(5,3,utf8_decode($SitioF["combate"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(28,3,utf8_decode(''),0);
        $this->Cell(35,3,utf8_decode('Incendio'),0);
        $this->Cell(5,3,utf8_decode($SitioF["incendio"]),1);//
        $this->Cell(35,3,utf8_decode('Ataques a Municipios'),0,0,'C');
        $this->Cell(5,3,utf8_decode($SitioF["ataque"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(20,3,utf8_decode('Otros:'),0);
        $this->Cell(5,3,utf8_decode(''),1);//
        $this->Cell(15,3,utf8_decode('¿Cuál?'),0,0,'C');//
        $this->Cell(5,3,utf8_decode($SitioF["cual1"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual2"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual3"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual4"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual5"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual6"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual7"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual8"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual9"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual10"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual11"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual12"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual13"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual14"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual15"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual16"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual17"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual18"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual19"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["cual20"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(35,3,utf8_decode('Dirección de la ocurrencia'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($SitioF["direccion1"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion2"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion3"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion4"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion5"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion6"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion7"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion8"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion9"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion10"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion11"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion12"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion13"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion14"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion15"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion16"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion17"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion18"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion19"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion20"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion21"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion22"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion23"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion24"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion25"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion26"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion27"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion28"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion29"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["direccion30"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(20,3,utf8_decode('Fecha Evento/Accidente'),0);
        $this->Cell(15,3,utf8_decode(''),0);
        $this->Cell(7,3,"D ".utf8_decode($SitioF["fechaEvento1"]),1);//
        $this->Cell(7,3,"D ".utf8_decode($SitioF["fechaEvento2"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($SitioF["fechaEvento3"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($SitioF["fechaEvento4"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($SitioF["fechaEvento5"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($SitioF["fechaEvento6"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($SitioF["fechaEvento7"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($SitioF["fechaEvento8"]),1);//
        $this->Cell(15,3,utf8_decode('Hora'),0,0,'R');//
        $this->Cell(15,3,utf8_decode(''),0);
        $this->Cell(7,3,"H ".utf8_decode($SitioF["hora1"]),1);//
        $this->Cell(7,3,"H ".utf8_decode($SitioF["hora2"]),1);//Espacio
        $this->Cell(7,3,"M ".utf8_decode($SitioF["hora3"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($SitioF["hora4"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,3,utf8_decode('Departamento'),0);  
        $this->Cell(5,3,utf8_decode($SitioF["departamento1"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento2"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento3"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento4"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento5"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento6"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento7"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento8"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento9"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento10"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento11"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento12"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento13"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento14"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento15"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["departamento16"]),1);//
        $this->Cell(15,3,utf8_decode('Cod. '),0,0,'R');//
        $this->Cell(5,3,utf8_decode($SitioF["cod1"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($SitioF["cod2"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(25,3,utf8_decode('Municipio'),0);
        $this->Cell(5,3,utf8_decode($SitioF["municipio1"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio2"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio3"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio4"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio5"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio6"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio7"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio8"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio9"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio10"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio11"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio12"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio13"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio14"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio15"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio16"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio17"]),1);//
        $this->Cell(5,3,utf8_decode($SitioF["municipio18"]),1);//
        $this->Cell(15,3,utf8_decode('Cod. '),0,0,'R');//
        $this->Cell(5,3,utf8_decode($SitioF["codigo1"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($SitioF["codigo2"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($SitioF["codigo3"]),1);//Espacio
        $this->Cell(15,3,utf8_decode('Zona '),0,0,'R');//
        $this->Cell(5,3,"U ".utf8_decode($SitioF["zonaU"]),1);//Espacio
        $this->Cell(5,3,utf8_decode(''),0);//Espacio
        $this->Cell(5,3,"R ".utf8_decode($SitioF["zonaR"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(80,3,utf8_decode('Descripción Breve del Evento Catastrófico o Accidente de Tránsito'),0);
        $this->Ln(); 
        $this->Cell(80,3,utf8_decode('Enuncia las principales características de evento/accidente:'),0);
        $this->Ln(); 
        $this->Cell(80,3,utf8_decode(''),0);
        $this->Cell(115,0,utf8_decode(''),1);
        $this->Ln();
        $this->MultiCell(0,3,utf8_decode('__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________'),0);
        $this->Ln();
    }

    function datosVehiculoAccidenteFurips($VehiculoA) {
        $this->Cell(0,3,utf8_decode('IV. DATOS DEL VEHÍCULO DEL ACCIDENTE DE TRÁNSITO'),1,0,'C');
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();  
        $this->Cell(32,3,utf8_decode('Estado de aseguramiento:'),0);
        $this->Cell(25,3,utf8_decode('Asegurado'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["asegurado"]),1);//
        $this->Cell(20,3,utf8_decode('No. Asegurado'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["NoAsegurado"]),1);//
        $this->Cell(35,3,utf8_decode('Vehículo fantasma'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["vehiculoFantasma"]),1);//
        $this->Cell(30,3,utf8_decode('Poliza Falsa'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["PolizaFalsa"]),1);//
        $this->Cell(25,3,utf8_decode('Vehículo en fuga'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["vehiculoFuga"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(15,3,utf8_decode('Marca'),0);
        $this->Cell(120,3,utf8_decode($VehiculoA["marca"]),1);//
        $this->Cell(15,3,utf8_decode('Placa'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["placa1"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["placa2"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["placa3"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["placa4"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["placa5"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["placa6"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();  
        $this->Cell(20,3,utf8_decode('Tipo de servicio:'),0);
        $this->Cell(15,3,utf8_decode('Particular'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["particular"]),1);//
        $this->Cell(15,3,utf8_decode('Público'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["publico"]),1);//
        $this->Cell(15,3,utf8_decode('Oficial'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["oficial"]),1);//
        $this->Cell(35,3,utf8_decode('Vehículo de emergencia'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["vehiculoEmergencia"]),1);//
        $this->Cell(60,3,utf8_decode('Vehículo de servicio diplomático o consular'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["vehiculoDiplomatico"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(60,3,utf8_decode('Vehículo de transporte masivo'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["vehiculoMasivo"]),1);//
        $this->Cell(40,3,utf8_decode('Vehículo escolar'),0,0,'C');
        $this->Cell(5,3,utf8_decode($VehiculoA["vehiculoEscolar"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(60,3,utf8_decode('Código de la aseguradora'),0);
        $this->Cell(5,3,utf8_decode($VehiculoA["codigoAseguradora1"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["codigoAseguradora2"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["codigoAseguradora3"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["codigoAseguradora4"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["codigoAseguradora5"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["codigoAseguradora6"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(29,3,utf8_decode('Número de la Póliza'),0);
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza1"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza2"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza3"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza4"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza5"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza6"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza7"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza8"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza9"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza10"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza11"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza12"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza13"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza14"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza15"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza16"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza17"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza18"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza19"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoA["numeroPoliza20"]),1);//
        $this->Cell(40,3,utf8_decode('Intervención de autoridad'),0,0,'C');
        $this->Cell(5,3,utf8_decode('SI'),0);//
        $this->Cell(5,3,utf8_decode($VehiculoA["si1"]),1);//
        $this->Cell(5,3,utf8_decode('NO'),0);//
        $this->Cell(5,3,utf8_decode($VehiculoA["no1"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(16,3,utf8_decode('Vigencia'),0);
        $this->Cell(10,3,utf8_decode('Desde'),0);//
   
        $this->Cell(6,3,"D ".utf8_decode($VehiculoA["fechaVigencia1"]),1);//
        $this->Cell(6,3,"D ".utf8_decode($VehiculoA["fechaVigencia2"]),1);//
        $this->Cell(6,3,"M ".utf8_decode($VehiculoA["fechaVigencia3"]),1);//
        $this->Cell(6,3,"M ".utf8_decode($VehiculoA["fechaVigencia4"]),1);//
        $this->Cell(6,3,"A ".utf8_decode($VehiculoA["fechaVigencia5"]),1);//
        $this->Cell(6,3,"A ".utf8_decode($VehiculoA["fechaVigencia6"]),1);//
        $this->Cell(6,3,"A ".utf8_decode($VehiculoA["fechaVigencia7"]),1);//
        $this->Cell(6,3,"A ".utf8_decode($VehiculoA["fechaVigencia8"]),1);//
        $this->Cell(10,3,utf8_decode('Hasta'),0,0,'R');//
      
        $this->Cell(6,3,"D ".utf8_decode($VehiculoA["fechaVigencia9"]),1);//
        $this->Cell(6,3,"D ".utf8_decode($VehiculoA["fechaVigencia10"]),1);//
        $this->Cell(6,3,"M ".utf8_decode($VehiculoA["fechaVigencia11"]),1);//
        $this->Cell(6,3,"M ".utf8_decode($VehiculoA["fechaVigencia12"]),1);//
        $this->Cell(6,3,"A ".utf8_decode($VehiculoA["fechaVigencia13"]),1);//
        $this->Cell(6,3,"A ".utf8_decode($VehiculoA["fechaVigencia14"]),1);//
        $this->Cell(6,3,"A ".utf8_decode($VehiculoA["fechaVigencia15"]),1);//
        $this->Cell(6,3,"A ".utf8_decode($VehiculoA["fechaVigencia16"]),1);//
        $this->Cell(37,3,utf8_decode('Cobro excedente Póliza'),0,0,'C');
        $this->Cell(5,3,utf8_decode('SI'),0);//
        $this->Cell(5,3,utf8_decode($VehiculoA["si2"]),1);//
        $this->Cell(5,3,utf8_decode('NO'),0);//
        $this->Cell(5,3,utf8_decode($VehiculoA["no2"]),1);//
    } 

    function datosVehiculoFurips($VehiculoF) {
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(0,3,utf8_decode('V. DATOS DEL PROPIETARIO DEL VEHÍCULO'),1,0,'C');
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($VehiculoF["apellido1"]),1);//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($VehiculoF["apellido2"]),1);//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('1er. Apellido o Razón Social'),0,0,'C');//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('2do. Apellido'),0,0,'C');//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($VehiculoF["nombre1"]),1);//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($VehiculoF["nombre2"]),1);//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('1er. Nombre'),0,0,'C');//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('2do. Nombre'),0,0,'C');//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,3,utf8_decode('Tipo de Documento'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($VehiculoF["tipoDocumento1"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["tipoDocumento2"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["tipoDocumento3"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["tipoDocumento4"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["tipoDocumento5"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["tipoDocumento6"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["tipoDocumento7"]),1);//
        $this->Cell(20,3,utf8_decode(''),0);
        $this->Cell(28,3,utf8_decode('No. Documento'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento1"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento2"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento3"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento4"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento5"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento6"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento7"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento8"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento9"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento10"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento11"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["NoDocumento12"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,3,utf8_decode('Dirección Residencia'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion1"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion2"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion3"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion4"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion5"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion6"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion7"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion8"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion9"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion10"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion11"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion12"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion13"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion14"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion15"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion16"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion17"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion18"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion19"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion20"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion21"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion22"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion23"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion24"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion25"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion26"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion27"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion28"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion29"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion30"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion31"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["direccion32"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(25,3,utf8_decode('Departamento'),0);  
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento1"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento2"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento3"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento4"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento5"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento6"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento7"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento8"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento9"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento10"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento11"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento12"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento13"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento14"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento15"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["departamento16"]),1);//
        $this->Cell(15,3,utf8_decode('Cod. '),0,0,'R');//
        $this->Cell(5,3,utf8_decode($VehiculoF["cod1"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["cod1"]),1);//Espacio
        $this->Cell(15,3,utf8_decode('Teléfono '),0,0,'R');//$
        $this->Cell(5,3,utf8_decode($VehiculoF["telefono1"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["telefono2"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["telefono3"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["telefono4"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["telefono5"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["telefono6"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["telefono7"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["telefono8"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["telefono9"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["telefono10"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(25,3,utf8_decode('Municipio'),0);
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio1"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio2"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio3"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio4"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio5"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio6"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio7"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio8"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio9"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio10"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio11"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio12"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio13"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio14"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio15"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio16"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio17"]),1);//
        $this->Cell(5,3,utf8_decode($VehiculoF["municipio18"]),1);//
        $this->Cell(15,3,utf8_decode('Cod. '),0,0,'R');//
        $this->Cell(5,3,utf8_decode($VehiculoF["codigo1"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["codigo2"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($VehiculoF["codigo3"]),1);//Espacio
    }

    function datosConductorFurips($ConductorF){
        //PARTE B
        $this->AddPage();
        $this->SetFont('Arial','B',6);
        $this->Cell(180,3,utf8_decode('Resolución 01915'),0,0,'R');
        $this->Cell(0,3,utf8_decode('28 MAY 2008'),0,0,'C');
        $this->Ln();
        $this->Cell(0,3,utf8_decode('REPÚBLICA DE COLOMBIA'),0,0,'C');
        $this->Ln();
        $this->Cell(0,3,utf8_decode('MINISTERIO DE LA PROTECCIÓN SOCIAL'),0,0,'C');
        $this->Ln();
        $this->Cell(0,3,utf8_decode('FORMULARIO ÚNICO DE RECLAMACIÓN DE LOS PRESTADORES DE SERVICIOS DE SALUD POR SERVICIOS PRESTADOS A VÍCTIMAS'),0,0,'C');
        $this->Ln();
        $this->Cell(0,3,utf8_decode('DE EVENTOS CATASTRÓFICOS Y ACCIDENTES DE TRÁNSITO. '),0,0,'C');
        $this->Ln();
        $this->Cell(0,3,utf8_decode('PERSONAS JURÍDICAS - FURIPS'),0,0,'C');
        $this->Image($this->dirPath.'images/ferestIPS.png',12,11,25);
        $this->Ln();
        $this->Ln();
        $this->Cell(0,6,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(0,3,utf8_decode('VI. DATOS DEL CONDUCTOR DEL VEHÍCULO INVOLUCRADO EN EL ACCIDENTE DE TRÁNSITO'),1,0,'C');
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($ConductorF["apellido1"]),1);//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($ConductorF["apellido2"]),1);//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('1er. Apellido'),0,0,'C');//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('2do. Apellido'),0,0,'C');//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($ConductorF["nombre1"]),1);//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($ConductorF["nombre2"]),1);//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('1er. Nombre'),0,0,'C');//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('2do. Nombre'),0,0,'C');//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,3,utf8_decode('Tipo de Documento'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($ConductorF["tipoDocumento1"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["tipoDocumento2"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["tipoDocumento3"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["tipoDocumento4"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["tipoDocumento5"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["tipoDocumento6"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["tipoDocumento7"]),1);//
        $this->Cell(20,3,utf8_decode(''),0);
        $this->Cell(28,3,utf8_decode('No. Documento'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento1"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento2"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento3"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento4"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento5"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento6"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento7"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento8"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento9"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento10"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento11"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["NoDocumento12"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,3,utf8_decode('Dirección Residencia'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($ConductorF["direccion1"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion2"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion3"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion4"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion5"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion6"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion7"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion8"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion9"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion10"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion11"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion12"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion13"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion14"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion15"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion16"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion17"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion18"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion19"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion20"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion21"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion22"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion23"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion24"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion25"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion26"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion27"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion28"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion29"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion30"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion31"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["direccion32"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(28,3,utf8_decode('Departamento'),0);  
        $this->Cell(5,3,utf8_decode($ConductorF["departamento1"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento2"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento3"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento4"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento5"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento6"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento7"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento8"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento9"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento10"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento11"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento12"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento13"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento14"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento15"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["departamento16"]),1);//
        $this->Cell(12,3,utf8_decode('Cod. '),0,0,'R');//
        $this->Cell(5,3,utf8_decode($ConductorF["cod1"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["cod2"]),1);//Espacio
        $this->Cell(12,3,utf8_decode('Teléfono '),0,0,'R');//$
        $this->Cell(5,3,utf8_decode($ConductorF["telefono1"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["telefono2"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["telefono3"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["telefono4"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["telefono5"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["telefono6"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["telefono7"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["telefono8"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["telefono9"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["telefono10"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(28,3,utf8_decode('Municipio Residencia'),0);
        $this->Cell(5,3,utf8_decode($ConductorF["municipio1"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio2"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio3"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio4"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio5"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio6"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio7"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio8"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio9"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio10"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio11"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio12"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio13"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio14"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio15"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio16"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio17"]),1);//
        $this->Cell(5,3,utf8_decode($ConductorF["municipio18"]),1);//
        $this->Cell(15,3,utf8_decode('Cod. '),0,0,'R');//
        $this->Cell(5,3,utf8_decode($ConductorF["codigo1"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["codigo2"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($ConductorF["codigo3"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
    }

    function datosRemisionFurips($RemisionF){
        $this->Cell(0,3,utf8_decode('VII. DATOS DE REMISIÓN'),1,0,'C');
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(35,3,utf8_decode('Tipo Referencia:'),0);
        $this->Cell(15,3,utf8_decode('Remisión'),0);
        $this->Cell(5,3,utf8_decode($RemisionF["remision"]),1);//
        $this->Cell(30,3,utf8_decode('Orden de Servicio'),0,0,'C');
        $this->Cell(5,3,utf8_decode($RemisionF["ordenServicio"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(20,3,utf8_decode('Fecha Evento/Accidente'),0);
        $this->Cell(15,3,utf8_decode(''),0);
        $this->Cell(7,3,"D ".utf8_decode($RemisionF["fechaEvento1"]),1);//
        $this->Cell(7,3,"D ".utf8_decode($RemisionF["fechaEvento2"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($RemisionF["fechaEvento3"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($RemisionF["fechaEvento4"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($RemisionF["fechaEvento5"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($RemisionF["fechaEvento6"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($RemisionF["fechaEvento7"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($RemisionF["fechaEvento8"]),1);//
        $this->Cell(15,3,utf8_decode('Hora'),0,0,'R');//
        $this->Cell(15,3,utf8_decode(''),0);
        $this->Cell(7,3,"H ".utf8_decode($RemisionF["hora1"]),1);//
        $this->Cell(7,3,"H ".utf8_decode($RemisionF["hora2"]),1);//Espacio
        $this->Cell(7,3,"M ".utf8_decode($RemisionF["hora3"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($RemisionF["hora4"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(35,3,utf8_decode('Prestador que remite'),0);
        $this->Cell(160,3,utf8_decode($RemisionF["prestador"]),1);
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(35,3,utf8_decode('Código de Inscripción'),0);
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion1"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion2"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion3"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion4"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion5"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion6"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion7"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion8"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion9"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion10"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion11"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion12"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcion13"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(35,3,utf8_decode('Profesional que remite'),0);
        $this->Cell(70,3,utf8_decode($RemisionF["profesionalRemite"]),1);//
        $this->Cell(15,3,utf8_decode('Cargo'),0,0,'C');
        $this->Cell(70,3,utf8_decode($RemisionF["cargo"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(20,3,utf8_decode('Fecha de Aceptación'),0);
        $this->Cell(15,3,utf8_decode(''),0);
        $this->Cell(7,3,"D ".utf8_decode($RemisionF["fechaAceptacion1"]),1);//
        $this->Cell(7,3,"D ".utf8_decode($RemisionF["fechaAceptacion2"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($RemisionF["fechaAceptacion3"]),1);//
        $this->Cell(7,3,"M ".utf8_decode($RemisionF["fechaAceptacion4"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($RemisionF["fechaAceptacion5"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($RemisionF["fechaAceptacion6"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($RemisionF["fechaAceptacion7"]),1);//
        $this->Cell(7,3,"A ".utf8_decode($RemisionF["fechaAceptacion8"]),1);//
        $this->Cell(15,3,utf8_decode('Hora'),0,0,'R');//
        $this->Cell(15,3,utf8_decode(''),0);
        $this->Cell(7,3,utf8_decode($RemisionF["horaF1"]),1);//
        $this->Cell(7,3,utf8_decode($RemisionF["horaF2"]),1);//Espacio
        $this->Cell(7,3,utf8_decode($RemisionF["horaF3"]),1);//
        $this->Cell(7,3,utf8_decode($RemisionF["horaF4"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(35,3,utf8_decode('Prestador que Recibe'),0);
        $this->Cell(160,3,utf8_decode($RemisionF["prestadorRecibe"]),1);
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(35,3,utf8_decode('Código de Inscripción'),0);
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF1"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF2"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF3"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF4"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF5"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF6"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF7"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF8"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF9"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF10"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF11"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF12"]),1);//
        $this->Cell(5,3,utf8_decode($RemisionF["codigoInscripcionF13"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(35,3,utf8_decode('Profesional que remite'),0);
        $this->Cell(70,3,utf8_decode($RemisionF["profesionalRemiteF"]),1);//
        $this->Cell(15,3,utf8_decode('Cargo'),0,0,'C');
        $this->Cell(70,3,utf8_decode($RemisionF["cargoF"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
    }
    
    function datosAmparoFurips($AmparoF){ 

        $this->Cell(0,3,utf8_decode('VIII. AMPARO DE TRANSPORTE Y MOVILIZACIÓN DE LA VÍCTIMA'),1,0,'C');
        $this->Ln();
        $this->Cell(180,3,utf8_decode('Diligenciar únicamente para el transporte desde el sitio hasta la primera IPS (transporte primaro) y cuando se realiza en ambulancia de la misma IPS.'),0);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(25,3,utf8_decode('Datos del Vehículo'),0);
        $this->Cell(30,3,utf8_decode('Placa No,'),0,0,'R');
        $this->Cell(5,3,utf8_decode($AmparoF["placa1"]),1);//
        $this->Cell(5,3,utf8_decode($AmparoF["placa2"]),1);//
        $this->Cell(5,3,utf8_decode($AmparoF["placa3"]),1);//
        $this->Cell(5,3,utf8_decode($AmparoF["placa4"]),1);//
        $this->Cell(5,3,utf8_decode($AmparoF["placa5"]),1);//
        $this->Cell(5,3,utf8_decode($AmparoF["placa6"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(38,3,utf8_decode('Transportó a la víctima desde'),0);
        $this->Cell(70,3,utf8_decode($AmparoF["transporteVictimaD"]),1);
        $this->Cell(15,3,utf8_decode('Hasta'),0,0,'C');
        $this->Cell(70,3,utf8_decode($AmparoF["transporteVictimaH"]),1);
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(28,3,utf8_decode('Tipo de Transporte'),0);
        $this->Cell(35,3,utf8_decode('Ambulancia Básica'),0);
        $this->Cell(5,3,utf8_decode($AmparoF["AmbulanciaBasica"]),1);//
        $this->Cell(35,3,utf8_decode('Ambulancia Medicalizada'),0,0,'C');
        $this->Cell(5,3,utf8_decode($AmparoF["AmbulanciaMedicalizada"]),1);//
        $this->Cell(40,3,utf8_decode('Lugar donde recoge la Víctima'),0,0,'C');
        $this->Cell(5,3,utf8_decode($AmparoF["LugarRecoger"]),1);//
        $this->Cell(20,3,utf8_decode('Zona'),0,0,'C');
        $this->Cell(5,3,"U ".utf8_decode($AmparoF["zonaU"]),1);//
        $this->Cell(5,3,utf8_decode(''),0);//
        $this->Cell(5,3,"R ".utf8_decode($AmparoF["zonaR"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
    }
    function datosCertificacionFurips($CertificacionF){

        $this->Cell(0,3,utf8_decode('IX. CERTIFICACIÓN DE LA ATENCIÓN MÉDICA DE LA VÍCTIMA COMO PRUEBA DEL ACCIDENTE O EVENTO'),1,0,'C');
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(25,3,utf8_decode('Fecha de Ingreso'),0);
        $this->Cell(5,3,"D ".utf8_decode($CertificacionF["fechaIngreso1"]),1);//
        $this->Cell(5,3,"D ".utf8_decode($CertificacionF["fechaIngreso2"]),1);//
        $this->Cell(5,3,"M ".utf8_decode($CertificacionF["fechaIngreso3"]),1);//
        $this->Cell(5,3,"M ".utf8_decode($CertificacionF["fechaIngreso4"]),1);//
        $this->Cell(5,3,"A ".utf8_decode($CertificacionF["fechaIngreso5"]),1);//
        $this->Cell(5,3,"A ".utf8_decode($CertificacionF["fechaIngreso6"]),1);//
        $this->Cell(5,3,"A ".utf8_decode($CertificacionF["fechaIngreso7"]),1);//
        $this->Cell(5,3,"A ".utf8_decode($CertificacionF["fechaIngreso8"]),1);//
        $this->Cell(10,3,utf8_decode('Hora'),0,0,'R');//
        $this->Cell(5,3,"H ".utf8_decode($CertificacionF["horaI1"]),1);//
        $this->Cell(5,3,"H ".utf8_decode($CertificacionF["horaI2"]),1);//Espacio
        $this->Cell(5,3,"M ".utf8_decode($CertificacionF["horaI3"]),1);//
        $this->Cell(5,3,"M ".utf8_decode($CertificacionF["horaI4"]),1);//Espacio
        $this->Cell(25,3,utf8_decode('Fecha de egreso'),0,0,'R');
        $this->Cell(5,3,"D ".utf8_decode($CertificacionF["fechaEgreso1"]),1);//
        $this->Cell(5,3,"D ".utf8_decode($CertificacionF["fechaEgreso2"]),1);//
        $this->Cell(5,3,"M ".utf8_decode($CertificacionF["fechaEgreso3"]),1);//
        $this->Cell(5,3,"M ".utf8_decode($CertificacionF["fechaEgreso4"]),1);//
        $this->Cell(5,3,"A ".utf8_decode($CertificacionF["fechaEgreso5"]),1);//
        $this->Cell(5,3,"A ".utf8_decode($CertificacionF["fechaEgreso6"]),1);//
        $this->Cell(5,3,"A ".utf8_decode($CertificacionF["fechaEgreso7"]),1);//
        $this->Cell(5,3,"A ".utf8_decode($CertificacionF["fechaEgreso8"]),1);//
        $this->Cell(15,4,utf8_decode('Hora'),0,0,'R');//
        $this->Cell(5,3,"H ".utf8_decode($CertificacionF["horaF1"]),1);//
        $this->Cell(5,3,"H ".utf8_decode($CertificacionF["horaF2"]),1);//Espacio
        $this->Cell(5,3,"M ".utf8_decode($CertificacionF["horaF3"]),1);//
        $this->Cell(5,3,"M ".utf8_decode($CertificacionF["horaF4"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(60,3,utf8_decode('Código Diagnóstico principal de ingreso'),0);//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoI1"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoI2"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoI3"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoI4"]),1);//Espacio
        $this->Cell(69,3,utf8_decode('Código Diagnóstico principal de Egreso'),0,0,'R');//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoE1"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoE2"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoE3"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoE4"]),1);//Espacio    
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(60,3,utf8_decode('Otro Código Diagnóstico principal de ingreso'),0);//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoI5"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoI6"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoI7"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoI8"]),1);//Espacio
        $this->Cell(69,3,utf8_decode('Otro Código Diagnóstico principal de Egreso'),0,0,'R');//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoE5"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoE6"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoE7"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["codigoDiagnosticoE8"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(60,3,utf8_decode('Otro Código Diagnóstico principal de ingreso'),0);//
        $this->Cell(5,3,utf8_decode($CertificacionF["otroDiagnosticoI1"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["otroDiagnosticoI2"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($CertificacionF["otroDiagnosticoI3"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["otroDiagnosticoI4"]),1);//Espacio
        $this->Cell(69,3,utf8_decode('Otro Código Diagnóstico principal de Egreso'),0,0,'R');//
        $this->Cell(5,3,utf8_decode($CertificacionF["otroDiagnosticoE1"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["otroDiagnosticoE2"]),1);//Espacio
        $this->Cell(5,3,utf8_decode($CertificacionF["otroDiagnosticoE3"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["otroDiagnosticoE4"]),1);//Espacio
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($CertificacionF["apellido1"]),1);//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($CertificacionF["apellido2"]),1);//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('1er. Apellido del Médico o Profesional tratante'),0,0,'C');//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('2do. Apellido del Médico o Profesional tratante'),0,0,'C');//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($CertificacionF["nombre1"]),1);//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode($CertificacionF["nombre2"]),1);//
        $this->Ln();
        $this->Cell(8,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('1er. Nombre del Médico o Profesional tratante'),0,0,'C');//
        $this->Cell(10,3,utf8_decode(''),0);//Espacio
        $this->Cell(85,3,utf8_decode('2do. Nombre del Médico o Profesional tratante'),0,0,'C');//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(40,3,utf8_decode('Tipo de Documento'),0);
        $this->Cell(5,3,utf8_decode($CertificacionF["tipoDocumento1"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["tipoDocumento2"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["tipoDocumento3"]),1);//
        $this->Cell(20,3,utf8_decode(''),0);
        $this->Cell(28,3,utf8_decode('No. Documento'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento1"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento2"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento3"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento4"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento5"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento6"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento7"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento8"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento9"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento10"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento11"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento12"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento13"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento14"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoDocumento15"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(75,3,utf8_decode(''),0);//
        $this->Cell(28,3,utf8_decode('Número de Registro Medico'),0);
        $this->Cell(10,3,utf8_decode(''),0);
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro1"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro2"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro3"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro4"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro5"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro6"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro7"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro8"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro9"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro10"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro11"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro12"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro13"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro14"]),1);//
        $this->Cell(5,3,utf8_decode($CertificacionF["NoRegistro15"]),1);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
    }
   
    function datosAmparonReclamaFurips($AmparoReclamaF){
        $this->Cell(0,3,utf8_decode('X. AMPAROS QUE RECLAMA'),1,0,'C');
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(75,3,utf8_decode(''),0);//
        $this->Cell(50,3,utf8_decode('VALOR TOTAL FACTURADO'),1,0,'C');//
        $this->Cell(50,3,utf8_decode('VALOR RECLAMADO AL FOSYCA'),1,0,'C');//
        $this->Ln(); 
        $this->Cell(75,3,utf8_decode('GASTO MÉDICO QUIRÚRGICOS'),1);//
        $this->Cell(50,3,utf8_decode($AmparoReclamaF["gastoMedicoT"]),1,0,'C');//
        $this->Cell(50,3,utf8_decode($AmparoReclamaF["gastoMedicoR"]),1,0,'C');//
        $this->Ln(); 
        $this->Cell(75,3,utf8_decode('GASTO DE TRANSPORTE Y MOVILIZACIÓN DE LA VÍCTIMA'),1);//
        $this->Cell(50,3,utf8_decode($AmparoReclamaF["gastoTransporteT"]),1,0,'C');//
        $this->Cell(50,3,utf8_decode($AmparoReclamaF["gastoTransporteR"]),1,0,'C');//
        $this->Ln(); 
        $this->MultiCell(190,3,utf8_decode('El total facturado y reclamado descrito en este numeral se debe detallar y hacer descripción de las actividades, procedimientos, medicamentos, insumos, suministrados y materiales, dentro del anexo técnico número 2. '),0);//
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln();
        $this->Cell(0,3,utf8_decode('XI. DECLARACIÓN DE LA INSTITUCIÓN PRESTADORA DE SERVICIOS DE SALUD'),1,0,'C');
        $this->Ln();
        $this->Cell(0,2,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->MultiCell(190,3,utf8_decode('Como representante legal o Gerente de la institución Prestadora de Servicios declaro bajo la gravedad de juramento que toda la información contenida en este fromulario es cierta y podrá ser verificada por la Dirección General de Financiamiento del Ministerio de la Protección Social, por el Administrador fiduciario del Fondo de Solidaridad y Garantía Fosyga, por la Superintendencia Nacional de Salud o la Contraloria General de la República con la IPS y las aseguradoras, de no ser asi, acepto todas las consecuencias legales que produzca la situación'),0);
        $this->Ln();
        $this->Ln();
        $this->Cell(0,5,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(80,0,utf8_decode($AmparoReclamaF["firma1"]),1);//INTERLINEADO
        $this->Cell(20,0,utf8_decode(''),0);
        $this->Cell(80,0,utf8_decode($AmparoReclamaF["firma2"]),1);//INTERLINEADO
        $this->Ln();
        $this->Cell(0,3,utf8_decode(''),0);//INTERLINEADO
        $this->Ln(); 
        $this->Cell(80,0,utf8_decode('NOMBRE'),0);//INTERLINEADO
        $this->Cell(20,0,utf8_decode(''),0);
        $this->Cell(80,0,utf8_decode('FIRMA DEL REPRESENTANTE LEGAL'),0);//INTERLINEADO
    }
}

?>