<?php

namespace App\Controller;

use App\Acme\FerestBundle\PHPfpdf\classes\FacturaBundle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class PdfController extends AbstractController
{
    private $factura = [
        "datosEmpresa" => [
            "nit" => "",
            "dire" => "",
            "tele" => ""
        ],
        "datosPaciente" => [
            "nombre" => "",
            "responsable" => "",
            "dir" => "",
            "tipoDocumento" => "",
            "cedula" => "",
            "tel" => ""
        ],
        "datosFactura" => [
            "referenciaPago" => "",
            "fechaElectronica" => "",
            "fechaEmision" => "",
            "fechaVencimiento" => "",
            "hora" => "",
            "cufe" => "",
            "planBeneficio" => "",
            "ciudad" =>  "",
            "codigo" => "",
            "tpres" => "",
            "descripcion" => "",
            "cantidad" => 2,
            "grav" => "",
            "valorUnitario" => "",
            "valorTotal" => "",
            "valorBase" => "",
            "valorIva" => "",
            "valor" => "",
            "descuento" => "",
            "totalIva" => "",
            "impuestoConsumo" => "",
            "valor_Total" => "",
            "menosAnticipos" => "",
            "copago" => "",
            "valorPagar" => "",
            "valorLetras" => "",
            "formaPago" => "",
            "medioPago" => ""
        ],
        "datosReferenciaPago" => [
            "fechaPago" => "",
            "totalPagar" => "",
            "efectivo" => "",
            "totalCheques" => "",
            "total" => ""
        ]
    ];

    private $projectDir;

    /**
     * @Route("/pdf", name="pdf")
     */
    public function index(Request $request)
    {
        $projectDir = $this->getParameter('kernel.project_dir') . '/public/';
        $pdfClass = $request->query->get('pdf');
        $data = [];
        if ($pdfClass=="Factura") {
            $pdf = new FacturaBundle($projectDir);
            $data = $this->factura;
        } else {
            return $this->redirectToRoute('admin');
        }
        $pdf->pdfBuild($data);
        $pdf->Output('I', $pdf->getName(), true);
    }

    public static function pdfGenerator($_this) {
        $pdf = new FacturaBundle($_this->getParameter('kernel.project_dir') . '/public/');
        $pdf->pdfBuild($_this->factura);
        $fileContent = $pdf->Output('S', $pdf->getName(), true);
        // $response = new Response(
        //     $fileContent,
        //     Response::HTTP_OK,
        //     array('content-type' => 'application/pdf')
        // );

        // $disposition = $response->headers->makeDisposition(
        //     ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        //     'foo.pdf'
        // );

        // $response->headers->set('Content-Disposition', $disposition);

        return $fileContent;
    }

}
