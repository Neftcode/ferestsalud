<?php
namespace App\Acme\FerestBundle\PHPfpdf\classes;

use App\Acme\FerestBundle\PHPfpdf\FpdfProtectionBundle;

class ValoracionCodoBundle extends FpdfProtectionBundle {

    private $dirPath;
    private $name;

    function __construct($dirPath)
    {
        $this->dirPath = $dirPath;
        $this->name = 'Valoración codo.pdf';
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
        $this->SetKeywords("Formato Valoración Codo", true);
        $this->SetTitle("Formato Valoración Codo", true);
        $this->SetSubject("Formato Valoración Codo", true);

        $this->encabezadoIngreso($matriz["datosIngresoEmpresa"]);
        $this->datosPacienteIngreso($matriz["datosPacienteIngreso"]);
        $this->antecedentes($matriz["datosAntecedentes"]);
        $this->valoracion($matriz["datosValoracion"]);
        $this->objetivo($matriz["datosObjetivo"]);
    }

    function encabezadoIngreso($empresaI) {
        $this->AddPage();
        $this->SetFont('Arial','B',7);
        $this->Cell(45,4,'',0);
        $this->Cell(25,4,utf8_decode('No. Admisión'),0,0,'R');
        $this->Cell(15,4,$empresaI['numeroAdmision'],1,0,'R'); //llenar con arreglo numero
        $this->Cell(40,4,utf8_decode('FISIOTERAPIA FORMATO NO.'),0,0,'R');
        $this->Cell(15,4,$empresaI['formatoNo'],1,0,'R'); //llenar con arreglo numero
        $this->Cell(35,4,utf8_decode('FECHA DE ELABORACIÓN'),0,0,'C');
        $this->Cell(0,4,$empresaI['fecha'],1,0,'C');
        $this->Ln();
        $this->Cell(0,7,'',0);
        $this->Ln();
        $this->Cell(130,4,"NIT: ".$empresaI['nit']);//NIT
        $this->Cell(0,4,utf8_decode("Teléfono: ").$empresaI['telef']);//TELÉFONO
        $this->Ln();
        $this->Cell(0,4,utf8_decode('VALORACIÓN DE CODO'),0,0,'C');//VALORACION-TITULO DE LA CITA
        $this->Ln();
        $this->Cell(0,0,utf8_decode(''),1,1);
        $this->Cell(0,0,utf8_decode(''),1);
        $this->Image($this->dirPath.'images/ferestIPS.png',12,10,40);
    }
    
    function datosPacienteIngreso($pacienteI) {
        $this->Ln(2);
        $this->SetFont('Arial','B',7);
        $this->Cell(20,4,'Nombre');
        $this->Cell(134,4,utf8_decode($pacienteI['nombre']),1,0,'L');//Nombre1
        $this->Cell(10,4,"Sexo: ".utf8_decode($pacienteI['sexo']));
        $this->Cell(10,4,utf8_decode($pacienteI['sexo']),1);
        $this->Cell(10,4,"Edad: ");
        $this->Cell(0,4,utf8_decode($pacienteI['edad']),1);
        $this->Ln();
        $this->Cell(20,4,utf8_decode('Identificación'));
        $this->Cell(30,4,utf8_decode($pacienteI['identificacion']),1);//Numero identificación
        $this->Cell(30,4,utf8_decode('Nombre Acompañante'));//Nombre acompañante
        $this->Cell(59,4,utf8_decode($pacienteI['nombreAcompanante']),1);//NombreAcompañante      
        $this->Cell(25,4,utf8_decode('Tel. Acompañante'));
        $this->Cell(0,4,utf8_decode($pacienteI['telAcompanante']),1);
        $this->Ln();
        $this->Cell(20,4,utf8_decode('Ocupación'));
        $this->Cell(50,4,utf8_decode($pacienteI['ocupacion']),1);//Ocupacion
        $this->Cell(10,4,utf8_decode('CIE'));
        $this->Cell(0,4,utf8_decode($pacienteI['CIE']),1);//CIE
        $this->Ln();
        $this->Cell(20,4,utf8_decode('Aseguradora'));
        $this->Cell(90,4,utf8_decode($pacienteI['aseguradora']),1);//nombre aseguradora
        $this->Cell(20,4,utf8_decode('No. Sesiones'));//Nombre acompañante
        $this->Cell(15,4,utf8_decode($pacienteI['numeroSesiones']),1);//Numero de sesiones      
        $this->Cell(10,4,utf8_decode('Peso'));
        $this->Cell(13,4,utf8_decode($pacienteI['peso']),1);//Peso
        $this->Cell(10,4,utf8_decode('Talla'));
        $this->Cell(0,4,utf8_decode($pacienteI['talla']),1,1);//Talla
        $this->Ln(2);
        $this->Cell(0,4,utf8_decode('Cronología de la patología'));
        $this->Ln();
        $this->MultiCell(0,3.5,utf8_decode($pacienteI['cronologiaPatologia']),1);
        $this->Ln(1);
        $this->Cell(0,4,utf8_decode('Diagnóstico'));
        $this->Ln();
        $this->Cell(0,4,utf8_decode($pacienteI['diagnostico']),1,1);//Diagnostico
    }    
    function antecedentes($antecedentesI) {
        $this->Ln(2);
        $this->Cell(0,4,utf8_decode('ANTECEDENTES'),0,1,'C');//VALORACION-TITULO DE LA CITA
        $this->Ln(2);
        $this->Cell(32,4,utf8_decode('Patológicos'));
        $this->Cell(65,4,utf8_decode($antecedentesI['patologicos']),1);
        $this->Cell(30,4,utf8_decode('Farmacológicos'));//Nombre2
        $this->Cell(0,4,utf8_decode($antecedentesI['farmacologicos']),1);
        $this->Ln();
        $this->Cell(32,4,utf8_decode('Quirúrgicos'));
        $this->Cell(65,4,utf8_decode($antecedentesI['quirurgicos']),1);
        $this->Cell(30,4,utf8_decode('Ginecológicos'));
        $this->Cell(0,4,utf8_decode($antecedentesI['ginecologicos']),1);
        $this->Ln();
        $this->Cell(32,4,utf8_decode('Traumáticos'));
        $this->Cell(65,4,utf8_decode($antecedentesI['traumaticos']),1);
        $this->Ln();
        $this->Cell(32,4,utf8_decode('Cardiovascular'));
        $this->Cell(65,4,utf8_decode($antecedentesI['cardiovascular']),1,1);
    }
    function valoracion($valoracionI) {
        $this->Ln(2);
        $this->Cell(0,4,utf8_decode('VALORACIÓN'),0,1,'C');//VALORACION-TITULO DE LA CITA
        $this->Ln(2);
        $this->Cell(32,4,utf8_decode('Dolor inicial'));
        $this->Cell(65,4,utf8_decode($valoracionI["dolorInicial"]),1);
        $this->Cell(30,4,utf8_decode('Dolor final'));
        $this->Cell(0,4,utf8_decode($valoracionI["dolorFinal"]),1);
        $this->Ln();
        $this->Cell(32,4,utf8_decode('Dolor inicial observación'));
        $this->Cell(65,4,utf8_decode($valoracionI["dolorInicialOb"]),1);
        $this->Cell(30,4,utf8_decode('Dolor final observación'));
        $this->Cell(0,4,utf8_decode($valoracionI["dolorFinalOb"]),1);
        $this->Ln();
        $this->Cell(32,4,utf8_decode('Dolor inicial localizado'));
        $this->Cell(65,4,utf8_decode($valoracionI["dolorInicialLoc"]),1);
        $this->Cell(30,4,utf8_decode('Dolor final localizado'));
        $this->Cell(0,4,utf8_decode($valoracionI["dolorFinalLoc"]),1);
        $this->Ln();
        $this->Cell(32,4,utf8_decode('Dolor inicial tipo'));
        $this->Cell(65,4,utf8_decode($valoracionI["dolorInicialTipo"]),1);
        $this->Cell(30,4,utf8_decode('Dolor final tipo'));
        $this->Cell(0,4,utf8_decode($valoracionI["dolorFinalTipo"]),1);
        $this->Ln();
        $this->Cell(32,4,utf8_decode('Localización cicatriz'));
        $this->Cell(65,4,utf8_decode($valoracionI["localizacionCicatriz"]),1);
        $this->Cell(30,4,utf8_decode('Longitud cicatriz'));
        $this->Cell(0,4,utf8_decode($valoracionI["longitudCicatriz"]),1);
        $this->Ln();
        $this->Cell(32,4,utf8_decode('Sensibilidad'));
        $this->Cell(65,4,utf8_decode($valoracionI["sensibilidad"]),1);
        $this->Ln();
        $this->Ln();
        $this->Cell(60,4,utf8_decode('DERECHA'),0,0,'C');
        $this->Cell(70,4,utf8_decode(''),0,0,'C');
        $this->Cell(0,4,utf8_decode('IZQUIERDA'),0,0,'C');    
        $this->Ln();
        $this->Cell(30,4,utf8_decode('Inicial'),0,0,'C');
        $this->Cell(30,4,utf8_decode('Final'),0,0,'C');
        $this->Cell(70,4,utf8_decode('EDEMA'),0,0,'C');
        $this->Cell(33,4,utf8_decode('Inicial'),0,0,'C');
        $this->Cell(0,4,utf8_decode('Final'),0,1,'C');
        $this->Ln(2);
        $this->Cell(30,4,utf8_decode($valoracionI["normalInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["normalFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('NORMAL'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["normalInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["normalFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["grado1InicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["grado1FinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('GRADO I'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["grado1InicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["grado1FinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["grado2InicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["grado2FinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('GRADO II'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["grado2InicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["grado2FinalI"]),1,1,'C');//
        $this->Ln(3);
        $this->Cell(30,4,utf8_decode(''),0,0,'C');//
        $this->Cell(30,4,utf8_decode(''),0,0,'C');//
        $this->Cell(70,4,utf8_decode('TROFISMO'),0,0,'C');
        $this->Cell(33,4,utf8_decode(''),0,0,'C');//
        $this->Cell(0,4,utf8_decode(''),0,1,'C');//
        $this->Ln(3);
        $this->Cell(30,4,utf8_decode($valoracionI["olecranonEInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["olecranonEFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('14CM X ENCIMA DEL OLÉCRANON'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["olecranonEInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["olecranonEFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["olecranonDInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["olecranonDFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('14CM X ENCIMA DEL OLÉCRANON'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["olecranonDInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["olecranonDFinalI"]),1,1,'C');//
        $this->Ln(3);
        $this->Cell(30,4,utf8_decode(''),0,0,'C');//
        $this->Cell(30,4,utf8_decode(''),0,0,'C');//
        $this->Cell(70,4,utf8_decode('MOVILIDAD ARTICULAR'),0,1,'C');
        $this->Cell(33,4,utf8_decode(''),0,0,'C');//
        $this->Cell(0,4,utf8_decode(''),0,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["flexionInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["flexionFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('FLEXIÓN 145°'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["flexionInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["flexionFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["extensionInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["extensionFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('EXTENSIÓN 145° 160°'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["extensionInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["extensionFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["pronacionInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["pronacionFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('PRONACIÓN 80°'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["pronacionInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["proncionFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["supinacionInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["supinacionFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('SUPINACIÓN 90°'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["supinacionInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["supinacionFinalI"]),1,1,'C');//
        $this->Ln(3);
        $this->Cell(30,4,utf8_decode(''),0,0,'C');//
        $this->Cell(30,4,utf8_decode(''),0,0,'C');//
        $this->Cell(70,4,utf8_decode('FUERZA MUSCULAR'),0,1,'C');
        $this->Cell(33,4,utf8_decode(''),0,0,'C');//
        $this->Cell(0,4,utf8_decode(''),0,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["bicepsInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["bicepsFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('BÍCEPS'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["bicepsInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["bicepsFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["tricepsInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["tricepsInicialD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('TRÍCEPS'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["tricepsInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["tricepsFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["braquialInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["braquialFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('BRAQUIAL ANTERIOR'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["braquialInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["braquialFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["supinadorLInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["supinadorLFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('SUPINADOR LARGO'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["supinadorLInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["supinadorLFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["supinadorCInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["supinadorCFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('SUPINADOR CORTO'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["supinadorCInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["supinadorCFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["pronadoresInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["pronadoresFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('PRONADORES'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["pronadoresInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["pronadoresFinalI"]),1,1,'C');//
        $this->Ln(3);
        $this->Cell(30,4,utf8_decode(''),0,0,'C');//
        $this->Cell(30,4,utf8_decode(''),0,0,'C');//
        $this->Cell(70,4,utf8_decode('FLEXIBILIDAD'),0,0,'C');
        $this->Cell(33,4,utf8_decode(''),0,0,'C');//
        $this->Cell(0,4,utf8_decode(''),0,1,'C');//
        $this->Ln(3);
        $this->Cell(30,4,utf8_decode($valoracionI["hombroInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["hombroFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('M.HOMBRO'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["hombroInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["hombroFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["bicepsflexInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["bicepsflexFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('BÍCEPS'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["bicepsflexInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["bicepsflexFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["tricepsflexInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["tricepsflexFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('TRÍCEPS'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["tricepsflexInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["tricepsflexFinalI"]),1,1,'C');//
        $this->Ln(3);
        $this->Cell(30,4,utf8_decode(''),0,0,'C');//
        $this->Cell(30,4,utf8_decode(''),0,0,'C');//
        $this->Cell(70,4,utf8_decode('PRUEBAS ESPECIALES'),0,0,'C');
        $this->Cell(33,4,utf8_decode(''),0,0,'C');//
        $this->Cell(0,4,utf8_decode(''),0,1,'C');//
        $this->Ln(3);
        $this->Cell(30,4,utf8_decode($valoracionI["maudsleyInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["maudsleyFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('MAUDSLEY'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["maudsleyInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["maudsleyFinalI"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["testInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["testFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('TEST DE MILL'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["testInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["testFinalD"]),1,0,'C');//
        $this->Ln();
        $this->Cell(30,4,utf8_decode($valoracionI["pruebaMuñecaInicialD"]),1,0,'C');//
        $this->Cell(30,4,utf8_decode($valoracionI["pruebaMuñecaFinalD"]),1,0,'C');//
        $this->Cell(70,4,utf8_decode('PRUEBA DE HIPER.MUÑECA'),0,0,'C');
        $this->Cell(33,4,utf8_decode($valoracionI["pruebaMuñecaInicialI"]),1,0,'C');//
        $this->Cell(0,4,utf8_decode($valoracionI["pruebaMuñecaFinalI"]),1,0,'C');//
        $this->Ln();
    }

    function objetivo($objetivoI) {
        $this->Ln();
        $this->Cell(0,4,utf8_decode('Objetivo'));
        $this->Ln();
        $this->MultiCell(0,4,utf8_decode($objetivoI["objetivo"]),1);
        $this->Ln();
        $this->Cell(0,4,utf8_decode('Resumen'));
        $this->Ln();
        $this->MultiCell(0,4,utf8_decode($objetivoI["resumen"]),1);
        $this->Ln(15);
        $this->Cell(30,4,utf8_decode('Terapeuta'));            
        $this->Cell(60,4,utf8_decode($objetivoI["terapeuta"]),1);//Numero identificación
        $this->Ln();
        $this->Cell(30,4,utf8_decode('Especialidad'));//Nombre acompañante
        $this->Cell(60,4,utf8_decode($objetivoI["especialidad"]),1);//NombreAcompañante        
    }
}
?>