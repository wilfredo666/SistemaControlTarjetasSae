<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/ordendetrabajoControlador.php";
require_once "../../modelo/ordendetrabajoModelo.php";

$id = $_GET["id"];
$orden = ControladorOrdenDeTrabajo::ctrRepOrdenTrabajo($id);
/* $today = getdate(); */
date_default_timezone_set('America/La_Paz');
$fecha;
$fecha = $orden['fecha_ordendetrabajo'];
$fecha= date("d/m/Y", strtotime($fecha));
class PDF extends FPDF
{
  private $primeraPagina = true;
  // Cabecera de página

  function Header(){
    if(!$this->primeraPagina){
      /*$this->setY(10);
      $this->SetX(8);*/
      /*$this->Cell(60, 30, '', 1, 0, 'C');
      $this->Cell(75, 30, '', 1, 0, 'C');
      $this->Cell(66, 30, '', 1, 1, 'C');*/

      $this->Cell(60, 30, "", 1, 0);
      $this->SetDrawColor(0, 0, 0);
      $this->SetFont('Arial', 'B', 14);
      $this->Image('../../assest/imagenes/saee.png', 12, 12, -200);
      $this->Cell(70, 30, 'ORDEN DE TRABAJO', 1, 0, 'C');
      $this->setY(33);
      $this->SetFont('Arial', '', 9);
      $this->setY(10);
      $this->setX(140);
      $this->SetFillColor(215, 211, 189);
      $this->SetFont('Arial', 'B', 9);
      $this->Cell(70, 5, 'CERTIFICACIONES', "TLR", 1, 'C');
      $this->setY(14);
      $this->setX(140);
      $this->SetFont('Arial', '', 9);
      $this->Cell(70, 5, 'DGAC BOLIVIA OMA No N-017', "LR", 2, 'C');
      $this->setY(18);
      $this->setX(140);
      $this->SetFont('Arial', '', 9);
      $this->Cell(70, 5, 'AEROCIVIL COLOMBIA TARE No. 042', "LR", 2, 'C');
      $this->setY(22);
      $this->setX(140);
      $this->SetFont('Arial', '', 9);
      $this->Cell(70, 5, 'DGAC CHILE E-448', "LR", 2, 'C');
      $this->setY(26);
      $this->setX(140);
      $this->Cell(70, 5, 'DGAC ECUADOR No. 077', "LR", 2, 'C');
      $this->setY(30);
      $this->setX(140);
      $this->Cell(70, 5, 'DGAC PERU OMAE No. 019', "LR", 2, 'C');
      $this->setY(34);
      $this->setX(140);
      $this->Cell(70, 6, 'AHAC HONDURAS No. CTAE-145-032 HR', "LRB", 1, 'C');
$this->Ln(10);
    }
  }

  // Page footer
  function Footer()
  {
    if (!$this->primeraPagina) {

      $this->SetY(-15);
      $this->SetX(10);
      $this->SetFont("times", "", 9);
      $this->SetDrawColor(200, 200, 200);
      $this->Cell(62, 8, 'FORM SAESC001', 1, 0, 'C');
      $this->Cell(70, 8, 'REV.06', 1, 0, 'C');
      $this->Cell(63, 8, utf8_decode("FECHA: ") . date('31/01/2023'), 1, 0, 'C');

    }
  }

  // Función para marcar que ya no estamos en la primera página
  function SetPrimeraPagina($valor)
  {
    $this->primeraPagina = $valor;
  }
}

// Instanciation of inherited class
$pdf = new PDF('P','mm','Letter');
$pdf->SetMargins(10, 10, 10, 20);
$pdf->AddPage();

//$pdf->SetAutoPageBreak(true, 1);

//inicio caratula
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetLineWidth(2.5);
$pdf->SetDrawColor(39, 73, 130);
$pdf->Cell(195, 248, '', 1,0);
$pdf->SetXY(12,13);
$pdf->SetLineWidth(0.5);
$pdf->Cell(191, 242, '', 1,0);

$pdf->Image('../../assest/imagenes/gotadeagua.jpg', 50, 30, 110);

$pdf->SetLineWidth(0.5);
$pdf->SetFont('Arial', 'B', 40);
$pdf->setY(100);
$pdf->setX(15);
/* $pdf->SetDrawColor(120,55,250); */
$pdf->Cell(180, 15, utf8_decode('ORDEN DE'), 0, 1, 'C');
$pdf->Cell(190, 15, utf8_decode('TRABAJO'), 0, 1, 'C');
$pdf->SetFont('Arial', '', 30);
$pdf->Cell(190, 12, utf8_decode($orden['numero_ordendetrabajo']), 0, 1, 'C');

$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 40);
$pdf->MultiCell(195, 18, utf8_decode($orden['titulocaratula_ordendetrabajo']), 0, 'C');

$pdf->Ln(40);

$pdf->setY(230);
$pdf->setX(10);
$pdf->SetFont('Arial', '', 40);
$pdf->Cell(195, 12, utf8_decode($orden['piepaginacaratula_ordendetrabajo']), 0, 1, 'C');


$pdf->Ln(40);
//fin caratula

//salto de linea
// Cambiar a la siguiente página
$pdf->AddPage();

// Establecer que ya no estamos en la primera página
$pdf->SetPrimeraPagina(false);
$pdf->header();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 12, utf8_decode("ORDEN DE TRABAJO N°: ".$orden['numero_ordendetrabajo']), 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->SetDrawColor(0, 0, 0);
setlocale(LC_TIME, 'es');
$pdf->Cell(60, 8, utf8_decode("FECHA: " .$fecha), 1, 1, "");

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190, 12, utf8_decode("DESCRIPCIÓN DE LA UNIDAD "), 0, 1, 'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(55, 10, utf8_decode("NOMBRE: ".$orden['nombrematricula_ordendetrabajo']),1,0,'');
$pdf->Cell(23, 10, utf8_decode("TH: ".$orden['th_ordendetrabajo'] ),"LTB",0,'');
$pdf->Cell(17, 10, utf8_decode("TC: " .$orden['tc_ordendetrabajo']),"TBR",0,'');

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(60, 5, utf8_decode("MODELO o FABRICANTE o PART NUMBER:"),"T",2,'C');
$pdf->Cell(60, 5, utf8_decode($orden['modelo_pn_ordendetrabajo']),"B",0,'C');

$pdf->SetY(82);
$pdf->setX(165);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(40, 10, utf8_decode("S/N: ".$orden['sn_ordendetrabajo']),1,0,'');
$pdf->Ln(12);
$pdf->Cell(195, 8, utf8_decode("SOLICITADA POR: ".$orden['solicitadapor_ordendetrabajo']), 1, 1, "");

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(35, 11, utf8_decode("AUTORIZADA POR "), 0, 1, 'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(98, 12, utf8_decode("NOMBRE: ".$orden['nombreautorizado_ordendetrabajo']),1,0,'');
$pdf->Cell(97, 12, utf8_decode("FIRMA: "),1,1,'');

$pdf->Ln(2);
$ordenes = utf8_decode($orden['documentosadjuntosrecibidos_ordendetrabajo']);
$texto = ("DOCUMENTOS ADJUNTOS RECIBIDOS:  \n". $ordenes);
//$pdf->MultiCell(195, 6,($texto . " - " ." FECHA: " . date('d-m-Y')),1,1,""); //no se si debia quitar la fecha
$pdf->MultiCell(195, 6,($texto),1,1,"");


$pdf->Ln(2);
$descTrabajo = utf8_decode($orden['descripciondelalcancedeltrabajosolicitado_ordendetrabajo']);
$texto6 = ("DESCRIPCION DEL ALCANCE DEL TRABAJO SOLICITADO:  \n". $descTrabajo);
$pdf->MultiCell(195, 6,($texto6),1,1,"");

$pdf->Ln(2);
$descTrabajo = utf8_decode($orden['descripciondetrabajosefectuados_ordendetrabajo']);
$texto2 = ("DESCRIPCION DE TRABAJOS EFECTUADOS:  \n". $descTrabajo);
$pdf->MultiCell(195, 6,($texto2),1,1,"");

$pdf->Ln(2);
$ordenTrabajo = utf8_decode($orden['ordenesdetrabajosrelacionadas_ordendetrabajo']);
$texto3 = ("ORDENES DE TRABAJOS RELACIONADAS:  \n" . $ordenTrabajo);
$pdf->MultiCell(195, 6,($texto3),1,1,"");


$pdf->Ln(2);
$ordenEntregado = utf8_decode($orden['documentosadjuntosentregados_ordendetrabajo']);
$texto4 = ("DOCUMENTOS ADJUNTOS ENTREGADOS:  \n" . $ordenEntregado);
$pdf->MultiCell(195, 6,($texto4),1,1,"");

$pdf->Ln(2);
$observaciones = utf8_decode($orden['observaciones_ordendetrabajo']);
$texto5 = ("OBSERVACIONES:  \n" . $observaciones);
$pdf->MultiCell(195, 6,($texto5),1,1,"");


$pdf->Cell(195, 8, utf8_decode("TERMINADO POR:  "),"LR",1,'');
$pdf->Cell(85, 6, utf8_decode("NOMBRE:  "),"LB",0,'');
$pdf->Cell(55, 6, utf8_decode("N° LICENCIA:  "),"B",0,'');
$pdf->Cell(55, 6, utf8_decode("FIRMA:  "),"RB",1,'');


$pdf->Cell(195, 8, utf8_decode("APROBADO POR:  "),"LRT",1,'');
$pdf->Cell(85, 6, utf8_decode("NOMBRE:  "),"LB",0,'');
$pdf->Cell(55, 6, utf8_decode("N° LICENCIA:  "),"B",0,'');
$pdf->Cell(55, 6, utf8_decode("FIRMA:  "),"RB",1,'');

$pdf->Cell(195, 8, utf8_decode("FECHA DE CIERRE: "),"LRB",1,'');
$pdf->Output();
?>