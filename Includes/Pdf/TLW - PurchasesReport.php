<?php
include("../../Includes/Connection/connection.php");
session_start();

use Google\Service\Directory\Role;
use LDAP\Result;

require('./fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{


$this->Image('logo.png', 185, 5, 20);
$this->SetFont('Helvetica', 'B', 19); // Cambio de Arial a Helvetica
$this->SetFillColor(220, 188, 135); // Nuevo color de fondo (#dcbc87)
$this->SetDrawColor(163, 163, 163); //colorBorde
$this->Cell(45);
$this->Cell(110, 15, utf8_decode('TheLibertyWay'), 1, 1, 'C', true);
$this->Ln(3);
$this->SetTextColor(103);





/* TITULO DE LA TABLA */
$this->SetFillColor(220, 188, 135); // Nuevo color de fondo (#dcbc87)
$this->SetTextColor(255); // Nuevo color de texto (blanco)
$this->SetFont('Helvetica', 'B', 20); // Cambio de Arial a Helvetica
$this->Cell(0, 20, utf8_decode("Purchase's Report"), 0, 1, 'C', true);
$this->Ln(10);

/* CAMPOS DE LA TABLA */
$this->SetFillColor(220, 220, 220); // Nuevo color de fondo (gris claro)
$this->SetTextColor(0); // Nuevo color de texto (negro)
$this->SetDrawColor(163, 163, 163); //colorBorde
$this->SetFont('Helvetica', 'B', 7); // Cambio de Arial a Helvetica

$this->Cell(10, 6, utf8_decode('ID'), 1, 0, 'C', true);
$this->Cell(24, 6, utf8_decode('Client First Name'), 1, 0, 'C', true);
$this->Cell(23, 6, utf8_decode('Client Last Name'), 1, 0, 'C', true);
$this->Cell(37, 6, utf8_decode('Client Email'), 1, 0, 'C', true);
$this->Cell(13, 6, utf8_decode('Country'), 1, 0, 'C', true);
$this->Cell(15, 6, utf8_decode('Currency'), 1, 0, 'C', true);
$this->Cell(25, 6, utf8_decode('STATUS'), 1, 0, 'C', true);
$this->Cell(15, 6, utf8_decode('Amount'), 1, 0, 'C', true);
$this->Cell(27.5, 6, utf8_decode('Purchase Date'), 1, 1, 'C', true);
}

// Pie de página
function Footer()
{
$this->SetY(-15); // Posición: a 1,5 cm del final
$this->SetFont('Helvetica', 'I', 8); // Cambio de Arial a Helvetica
$this->Cell(12, 10, utf8_decode('Creadopor '), 0, 0, 'C');
$this->SetY(-15); // Posición: a 1,5 cm del final
$this->SetFont('Helvetica', 'I', 8); // Cambio de Arial a Helvetica
$this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
$this->SetY(-15);
$this->SetFont('Helvetica', 'I', 8); // Cambio de Arial a Helvetica
$hoy = date('Y-m-d H:i:s'); 
$this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C');
}
}

$pdf = new PDF();
$pdf->AddPage();

$pdf->AliasNbPages();

$i = 0;
$pdf->SetFont('Helvetica', '', 7); // Cambio de Arial a Helvetica
$pdf->SetDrawColor(163, 163, 163); //colorBorde







include '../Connection/connection.php';

$sql = "SELECT * FROM payment_receipt";
$result = pg_query($conexion, $sql);
if (pg_num_rows($result)) {
while ($row = pg_fetch_assoc($result)) {


/* TABLA */

$pdf->Cell(10, 6, utf8_decode($row['id']), 1, 0, 'C', 0);
$pdf->Cell(24, 6, utf8_decode($row['cliente_firstname']), 1, 0, 'C', 0);
$pdf->Cell(23, 6, utf8_decode($row['cliente_lastname']), 1, 0, 'C', 0);
$pdf->Cell(37, 6, utf8_decode($row['cliente_emailaddress']), 1, 0, 'C', 0);
$pdf->Cell(13, 6, utf8_decode($row['cliente_countrycode']), 1, 0, 'C', 0);
$pdf->Cell(15, 6, utf8_decode($row['transaccion_currencycode']), 1, 0, 'C', 0);
$pdf->Cell(25, 6, utf8_decode($row['transaccion_status']), 1, 0, 'C', 0);
$pdf->Cell(15, 6, utf8_decode( '$' . $row['transaccion_amount']), 1, 0, 'C', 0);
$pdf->Cell(27.5, 6, utf8_decode($row['date']), 1, 1, 'C', 0);


   }

}


$pdf->Output('TLW - UsersReport.pdf', 'I');

