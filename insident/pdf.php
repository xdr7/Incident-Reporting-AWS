<?php
require('fpdf16/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B',16);
$pdf->Cell(40, 10, '');
$pdf->Output();
?>