<?php
$id_form='2';
// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf.php');
require('funciones.php');
$co= conectar_pdf();

date_default_timezone_set('America/Mexico_City');
setlocale(LC_ALL,"es_ES");

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
	 //HEADER DE LA PAGINA
	 public function Header() {
		// Logo
		$image_file = K_PATH_IMAGES.'logo-texto.png';
		$this->Image($image_file, 10, 7, 30, '', 'PNG', '', 'T', false, 100, '', false, false, 0, false, false, false);
		// FUENTE
		$this->SetFont('times', 'BI', 12);
		// TITULO DEL ENCABEZADO
		$this->Cell(0,10,'México, CDMX',0,false,'R',0,'',0,false,'T','M');
		$this->Cell(0,25,'Fecha: '.date("d/m/Y"),0,false,'R',0,'',0,false,'T','M');
	}
	// FOOTER DE LA PAGINA
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'PAGINA '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'L', 0, '', 0, false, 'T', 'M');
        $this->Cell(0,10,'COMPROBANTE DE FORMULARIO DE ADOPCIÓN',0,false,'R',0,'',0,false,'T','M');
    }
}

// CREAR UN PDF
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// PONER LA INFORMACIÓN DEL DOCUMENTO
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Mitzy Diaz');
$pdf->SetTitle('COMPROBANTE DE FORMULARIO DE ADOPCIÓN');

// AÑADIR MARGENES (AUTO) 
$pdf->SetMargins(PDF_MARGIN_LEFT, 0, PDF_MARGIN_RIGHT);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetTopMargin(15);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// AÑADIR UNA PAGINA
$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 14);
$bMargin = $pdf->getBreakMargin();
$auto_page_break = $pdf->getAutoPageBreak();
// disable auto-page-break
$pdf->SetAutoPageBreak(false, 0);
// set bacground image
$img_file = K_PATH_IMAGES.'bg.png';
$pdf->Image($img_file, 0, 50, 200, 200, '', '', '', false, 200, '', false, false, 0);
// restore auto-page-break status
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
// set the starting point for the page content
$pdf->setPageMark();

//TITULO

$pdf->Write(30, 'COMPROBANTE DE FORMULARIO DE ADOPCIÓN', '', 0, 'C', true, 0, false, false, 0);
// ---------------------------------------------------------


	$pdf->SetFont('helvetica', 'B', 10);
	$pdf->Cell(0,0, "ESTIMADO(A) ADOPTANTE : " ,0, false,'L',0,'',false,'M','M');
	$pdf->Ln(4);
	
	
	$html = 
		'<span style="text-align:justify;">Este es su comprobante de que ha realizado el formulario de adopción para adoptar a "NOMBRE_PERRO" con el número de registro "ID_PERRO".</span>';
	
	$pdf->SetFont('helvetica', '', 10);
	$pdf->writeHTML($html, true, 0, true, true);
	$pdf->Ln();
	
	$html1 = '<span style="text-align:justify;">De acuerdo a lo establecido en el formulario, los datos que hemos recibido de acuerdo a lo que ha respondido son los siguientes:
		</span>';
	$pdf->writeHTML($html1, true, 0, true, true);
	$pdf->Ln();
	

	$sql='SELECT nombre,ap,am,edad,tel,contacto_co,parent,dir,hijos,hijos_cant,mascotas,mascota_esp,mascota_cant,razon FROM form WHERE id_form=?';
$stmt=$co->prepare($sql);
$results=$stmt->execute(array($id_form));
$row=$stmt->fetchAll();
foreach($row as $rows){

	$pdf->SetFont('Helvetica','',14);
	$pdf->SetFillColor(255, 0, 0);
	$pdf->Cell(180,8,'DATOS ',1,1,'C');
	$pdf->SetFont('Helvetica','',8);
	$pdf->Cell(33,6,"Nombre",1);
	$pdf->Cell(147,6,$rows[0]." ".$rows[1]." ".$rows[2],1);
	$pdf->Ln();
	$pdf->Cell(33,6,"Edad",1);
	$pdf->Cell(147,6,$rows[3],1);
	$pdf->Ln();
	$pdf->Cell(33,6,"Teléfono",1);
	$pdf->Cell(147,6,$rows[4],1);
	$pdf->Ln();
	$pdf->Cell(33,6,"Contacto de Confianza",1);
	$pdf->Cell(147,6,$rows[5],1);
	$pdf->Ln();
	$pdf->Cell(33,6,"Parentezco",1);
	$pdf->Cell(147,6,$rows[6],1);
	$pdf->Ln();
	$pdf->Cell(33,10,"Dirección",1);
	$pdf->Cell(147,10,$rows[7],1);
	$pdf->Ln();
	$pdf->Cell(33,6,"Hijos",1);
	$pdf->Cell(147,6,$rows[8],1);
	$pdf->Ln();
	$pdf->Cell(33,6,"Cantidad",1);
	$pdf->Cell(147,6,$rows[9],1);
	$pdf->Ln();
	$pdf->Cell(33,6,"Mascotas",1);
	$pdf->Cell(147,6,$rows[10],1);
	$pdf->Ln();
	$pdf->Cell(33,6,"Especificación",1);
	$pdf->Cell(147,6,$rows[11],1);
	$pdf->Ln();
	$pdf->Cell(33,6,"Cantidad",1);
	$pdf->Cell(147,6,$rows[12],1);
	$pdf->Ln();
	$pdf->Cell(33,10,"Razón Adopción",1);
	$pdf->Cell(147,10,$rows[13],1);
	$pdf->Ln();
	
}
// INSERTAR TEXTO 
ob_end_clean();

$pdf->Ln();

$html3='<br><span style="text-align:justify;">Morbi quis pulvinar sem, sed vehicula nibh. Quisque at turpis non tellus porttitor sollicitudin. Nulla vel pretium neque. Mauris dapibus auctor consequat. <br>Nullam nisi sem, semper elementum ornare id, pellentesque non nisi. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
	<br>
	<br><br>
	<span style="text-align:center;">
	<br>Atentamente: Albergue Huellas
	<br>_____________________________
	</span>

 </span>';  
$pdf->SetFont('helvetica', '', 10);
$pdf->writeHTML($html3, true, 0, true, true);

// ---------------------------------------------------------




//Close and output PDF document
$pdf->Output('comprobante_adopción.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
