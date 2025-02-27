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
$this->Cell(0, 20, utf8_decode("Users' Report"), 0, 1, 'C', true);
$this->Ln(10);

/* CAMPOS DE LA TABLA */
$this->SetFillColor(220, 220, 220); // Nuevo color de fondo (gris claro)
$this->SetTextColor(0); // Nuevo color de texto (negro)
$this->SetDrawColor(163, 163, 163); //colorBorde
$this->SetFont('Helvetica', 'B', 7); // Cambio de Arial a Helvetica

$this->Cell(18, 6, utf8_decode('NAME'), 1, 0, 'C', true);
$this->Cell(18, 6, utf8_decode('LAST NAME'), 1, 0, 'C', true);
$this->Cell(18, 6, utf8_decode('USER'), 1, 0, 'C', true);
$this->Cell(37, 6, utf8_decode('EMAIL'), 1, 0, 'C', true);
$this->Cell(25, 6, utf8_decode('PHONE NUMBER'), 1, 0, 'C', true);
$this->Cell(26, 6, utf8_decode('ROLE'), 1, 0, 'C', true);
$this->Cell(25, 6, utf8_decode('STATUS'), 1, 0, 'C', true);
$this->Cell(23, 6, utf8_decode('CREATION DATE'), 1, 1, 'C', true);
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

$sql = "SELECT * FROM usuarios";
$result = pg_query($conexion, $sql);
if (pg_num_rows($result)) {
while ($row = pg_fetch_assoc($result)) {

    if ($row['rol'] == 1) {
        $result_rol = "SUPER ADMIN";
   } elseif ($row['rol'] == 2) {
        $result_rol = "ADMIN";
   } elseif ($row['rol'] == 3) {
         $result_rol = "USER";
   }

/* TABLA */

$pdf->Cell(18, 6, utf8_decode($row['nombre']), 1, 0, 'C', 0);
$pdf->Cell(18, 6, utf8_decode($row['apellido']), 1, 0, 'C', 0);
$pdf->Cell(18, 6, utf8_decode($row['usuario']), 1, 0, 'C', 0);
$pdf->Cell(37, 6, utf8_decode($row['correo_electronico']), 1, 0, 'C', 0);
$pdf->Cell(25, 6, utf8_decode($row['telefono']), 1, 0, 'C', 0);
$pdf->Cell(26, 6, utf8_decode($result_rol), 1, 0, 'C', 0);
$pdf->Cell(25, 6, utf8_decode($row['estado']), 1, 0, 'C', 0);
$pdf->Cell(23, 6, utf8_decode($row['fecha']), 1, 1, 'C', 0);


   }

}


$pdf->Output('TLW - UsersReport.pdf', 'I');

