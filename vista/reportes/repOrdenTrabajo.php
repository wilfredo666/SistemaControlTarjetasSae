<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/ordendetrabajoControlador.php";
require_once "../../modelo/ordendetrabajoModelo.php";

$id = $_GET["id"];
$orden = ControladorOrdenDeTrabajo::ctrRepOrdenTrabajo($id);
/* $today = getdate(); */

/* class PDF extends FPDF {
    function Header() {
        $this->SetMargins(50, 50, 50); // Establecer los márgenes izquierdo, derecho y superior
    }
} */
class PDF extends FPDF
{
    function AddBulletedText($text)
    {
        // Definir la viñeta
        $bullet = "\x95"; // Carácter de viñeta (puede variar según la fuente)

        // Dividir el texto en líneas
        $lines = explode("\n", utf8_decode($text));

        // Establecer la fuente y el tamaño de texto
        $this->SetFont('Arial', '', 10);

        // Agregar cada línea con una viñeta
        foreach ($lines as $line) {
            $this->Cell(10, 6, $bullet, 0, 'L');
            $this->MultiCell(0, 5, utf8_decode($line), 0, 'L');
           /*  $this->Ln(); // Salto de línea */
        }
    }
}

$pdf = new PDF('P', 'mm', 'Letter');
$pdf->AddPage();


$pdf->SetAutoPageBreak(true, 1);

$pdf->SetFont('Arial', 'B', 16);
$pdf->SetLineWidth(2.5);
$pdf->SetDrawColor(39, 73, 130);
$pdf->Cell(195, 260, '', 1);
$pdf->SetX(12);
$pdf->SetLineWidth(0.5);
$pdf->Cell(191, 258, '', 1);

$pdf->Image('../../assest/imagenes/gotadeagua.jpg', 50, 30, 110);


$pdf->SetFont('Arial', 'B', 40);
$pdf->setY(100);
$pdf->setX(15);
/* $pdf->SetDrawColor(120,55,250); */
$pdf->Cell(180, 15, utf8_decode('ORDEN DE'), 0, 1, 'C');
$pdf->Cell(190, 15, utf8_decode('TRABAJO'), 0, 1, 'C');
$pdf->SetFont('Arial', '', 30);
$pdf->Cell(190, 12, utf8_decode($orden['numero_ordendetrabajo']), 0, 1, 'C');

$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 50);
$pdf->MultiCell(195, 18, utf8_decode($orden['titulocaratula_ordendetrabajo']), 0, 'C');

$pdf->Ln(40);
$pdf->SetFont('Arial', '', 40);
$pdf->Cell(195, 12, utf8_decode($orden['nombrematricula_ordendetrabajo']), 0, 1, 'C');

$pdf->Ln(40);

//salto de linea
$pdf->Cell(0, 5, "", 0, 1);

$pdf->SetDrawColor(220, 220, 220);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Image('../../assest/imagenes/saee.png', 10, 10, -190);
$pdf->Cell(190, 20, 'ORDEN DE TRABAJO', 0, 2, 'C');
$pdf->setY(33);
$pdf->SetFont('Arial', '', 9);
$pdf->setY(10);
$pdf->setX(160);
$pdf->SetFillColor(215, 211, 189);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(35, 5, 'CERTIFICACIONES', 0, 1, 'C');
$pdf->setY(14);
$pdf->setX(160);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 5, 'DGAC BOLIVIA OMA No N-017', 0, 2, 'C');
$pdf->setY(18);
$pdf->setX(160);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 5, 'AEROCIVIL COLOMBIA TARE No. 042', 0, 2, 'C');
$pdf->setY(22);
$pdf->setX(160);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 5, 'DGAC CHILE E-448', 0, 2, 'C');
$pdf->setY(26);
$pdf->setX(160);
$pdf->Cell(35, 5, 'DGAC ECUADOR No. 077', 0, 2, 'C');
$pdf->setY(30);
$pdf->setX(160);
$pdf->Cell(35, 5, 'DGAC PERU OMAE No. 019', 0, 2, 'C');
$pdf->setY(34);
$pdf->setX(160);
$pdf->Cell(35, 5, 'AHAC HONDURAS No. CTAE-145-032 HR', 0, 2, 'C');

$pdf->setY(10);
$pdf->SetX(8);
$pdf->Cell(60, 30, '', 1, 0, 'C');
$pdf->Cell(75, 30, '', 1, 0, 'C');
$pdf->Cell(66, 30, '', 1, 1, 'C');

/* $pdf->Cell(66, 8, '', 0, 1, 'C'); */

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 12, utf8_decode("ORDEN DE TRABAJO N°: ".$orden['numero_ordendetrabajo']), 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->SetDrawColor(0, 0, 0);
setlocale(LC_TIME, 'es');
$pdf->Cell(100, 8, utf8_decode("FECHA: Cochabamba, ") . strftime("%d de %B de %Y"), 1, 1, "");

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 12, utf8_decode("DESCRIPCIÓN DE LA UNIDAD "), 0, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(40, 14, utf8_decode("NOMBRE: ".$orden['nombrematricula_ordendetrabajo']),1,0,'');
$pdf->Cell(40, 14, utf8_decode("TH: ".$orden['th_ordendetrabajo']. ' | ' . "TC: " .$orden['tc_ordendetrabajo']),1,0,'');
$pdf->Cell(75, 14, utf8_decode("MODELO P/N: ".$orden['modelo_pn_ordendetrabajo']),1,0,'');
$pdf->Cell(40, 14, utf8_decode("S/N: ".$orden['sn_ordendetrabajo']),1,0,'');
$pdf->Ln(16);
$pdf->Cell(195, 8, utf8_decode("SOLICITADA POR: ".$orden['solicitadapor_ordendetrabajo']), 1, 1, "");

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 11, utf8_decode("AUTORIZADA POR "), 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(98, 12, utf8_decode("NOMBRE: ".$orden['nombreautorizado_ordendetrabajo']),1,0,'');
$pdf->Cell(97, 12, utf8_decode("FIRMA: "),1,1,'');

$pdf->Ln(2);
$pdf->Cell(195, 14, "",1,1,'');
$pdf->SetY(122);
$pdf->Cell(55, 6, utf8_decode("DOCUMENTOS ADJUNTOS RECIBIDOS:  "),0,1,'');
$pdf->SetX(20);
$pdf->AddBulletedText($orden['documentosadjuntosrecibidos_ordendetrabajo']. " - " ." FECHA: " . date('d/m/Y'));

$pdf->Ln(4);
$pdf->Cell(195, 30, "",1,1,'');
$pdf->SetY(138);
$pdf->Cell(55, 6, utf8_decode("DESCRIPCION DE TRABAJOS EFECTUADOS:  "),0,1,'');
$pdf->SetX(20);
$pdf->AddBulletedText(utf8_decode($orden['descripciondetrabajosefectuados_ordendetrabajo']));

$pdf->Ln(10);
$pdf->Cell(195, 14, "",1,1,'');
$pdf->SetY(170);
$pdf->Cell(55, 6, utf8_decode("ORDENES DE TRABAJOS RELACIONADAS:  "),0,1,'');
$pdf->SetX(20);
$pdf->AddBulletedText($orden['ordenesdetrabajosrelacionadas_ordendetrabajo']);

$pdf->Ln(4);
$pdf->Cell(195, 14, "",1,1,'');
$pdf->SetY(186);
$pdf->Cell(55, 6, utf8_decode("DOCUMUENTOS ADJUNTOS ENTREGADOS:  "),0,1,'');
$pdf->SetX(20);
$pdf->AddBulletedText($orden['documentosadjuntosentregados_ordendetrabajo']);

$pdf->Ln(4);
$pdf->Cell(195, 17, "",1,1,'');
$pdf->SetY(202);
$pdf->Cell(55, 6, utf8_decode("OBSERVACIONES:  "),0,1,'');
$pdf->SetX(20);
$pdf->AddBulletedText($orden['observaciones_ordendetrabajo']);

$pdf->Ln(5);
$pdf->Cell(195, 16, "",1,1,'');
$pdf->SetY(220);
$pdf->Cell(55, 6, utf8_decode("TERMINADO POR:  "),0,1,'');
$pdf->Cell(90, 6, utf8_decode("NOMBRE:  "),0,0,'');
$pdf->Cell(55, 6, utf8_decode("N° LICENCIA:  "),0,0,'');
$pdf->Cell(55, 6, utf8_decode("FIRMA:  "),0,0,'');

$pdf->Ln(8);
$pdf->Cell(195, 16, "",1,1,'');
$pdf->SetY(236);
$pdf->Cell(55, 6, utf8_decode("APROBADO POR:  "),0,1,'');
$pdf->Cell(90, 6, utf8_decode("NOMBRE:  "),0,0,'');
$pdf->Cell(55, 6, utf8_decode("N° LICENCIA:  "),0,0,'');
$pdf->Cell(55, 6, utf8_decode("FIRMA:  "),0,1,'');
$pdf->Ln(2);
$pdf->Cell(100, 8, utf8_decode("FECHA DE CIERRE: Cochabamba, "),1,1,'');

$pdf->SetY(-15);
$pdf->SetX(10);
$pdf->SetFont("times", "", 9);
$pdf->SetDrawColor(200, 200, 200);
$pdf->Cell(62, 8, 'FORM SAESC001', 1, 0, 'C');
$pdf->Cell(70, 8, 'REV.05', 1, 0, 'C');
$pdf->Cell(63, 8, utf8_decode("FECHA: ") . date('11/03/2022'), 1, 0, 'C');


$pdf->Output();
