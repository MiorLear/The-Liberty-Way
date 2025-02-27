<?php
include("../../../Includes/Connection/connection.php");
require './Includes/Pdf/fpdf.php';
session_start();


if (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) { //Administrator
    header("Location: ../../../Views/Dashboard/index.php");
}

//_____________________________________________________________________________


class PDF extends FPDF
{
    function Header()
    {
        // No es necesario definir un encabezado en este caso
    }

    function Footer()
    {
        // No es necesario definir un pie de página en este caso
    }
}

$pdf = new PDF();
$pdf->AddPage();


$id_usuario = $_SESSION['id_user'];
$sql = pg_query($conexion, "SELECT * FROM usuarios JOIN payment_receipt ON usuarios.id_usuario = CAST(payment_receipt.id_tlw AS INTEGER) WHERE usuarios.id_usuario = '$id_usuario'");
while ($datos = pg_fetch_assoc($sql)) {
    $html = '<!DOCTYPE html>
    <html>
    
    <head>
        <title>Payment Receipt - The Liberty Way</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 0.875rem;
                line-height: 1.5;
                background-color: #f8f8f8;
                color: #333;
                margin: 0;
                padding: 0;
            }
    
            h1,
            h2,
            h4,
            h5,
            h6 {
                color: #dcbb87;
                font-weight: bold;
                margin-top: 0;
            }
    
            h3 {
                color: #dcbb87;
                border-top: 0.06rem solid #ddd;
                border-bottom: 0.06rem solid #ddd;
            }
    
            a {
                color: #dcbb87;
            }
    
            b {
                color: #dcbb87;
                font-weight: bold;
                margin-top: 0;
            }
    
            .container {
                max-width: 37.5rem;
                margin: 0 auto;
                padding: 1.25rem;
                background-color: #fff;
                border: 0.06rem solid #ddd;
                border-radius: 0.3rem;
            }
    
            .logo {
                text-align: center;
                margin-bottom: 1.3rem;
            }
    
            .logo img {
                max-width: 31.25rem;
                height: auto;
            }
    
            button {
                background-color: #dcbb87;
                color: #fff;
                border: none;
                padding: 0.6rem 1.3rem;
                font-size: 1rem;
                font-weight: bold;
                border-radius: 0.3rem;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
    
            button:hover {
                background-color: #c9a874;
            }
    
            table {
                width: 100%;
                border-collapse: collapse;
            }
    
            table th {
                border-bottom: 0.06rem solid #000000;
                padding: 0.5rem;
                text-align: left;
            }
    
            table td {
                border-bottom: 0.03rem solid #f5f5f5;
                padding: 0.5rem;
                text-align: left;
            }
    
            .total {
                text-align: right;
                font-size: 1.1rem;
                border-top: 0.06rem solid #ddd;
                border-bottom: 0.06rem solid #ddd;
                padding-top: 0.6rem;
                padding-bottom: 0.6rem;
                margin-top: 1.3rem;
            }
    
            .fecha-emision {
                text-align: center;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <div class="logo">
                <img src="cid:' . $imageName . '">
            </div>
            <center>
                <h3 style="padding: 5px 0 10px 30px;"><img src="cid:' . $imageName2 . '" alt="" height="15" style="padding-top: 10px; padding-right: 10px;"></img>| PAYMENT RECEIPT</h3>
            </center>
            <br>
            <p>Receipt ID: <strong>' . $datos['id_transaccion'] . '</strong></p>
            <p>Name: <strong>' . $datos['cliente_firstname'] . '</strong></p>
            <p>Last Name: <strong>' . $datos['cliente_lastname'] . '</strong></p>
            <p>Email Address: <strong>' . $datos['cliente_emailaddress'] . '</strong></p>
            <br>
            <hr>
            <br><br>
            <center>
                <h3>RECEIPT DETAILS</h3>
            </center>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí puedes agregar los detalles de los productos/servicios -->
                    <tr>
                        <td>Producto 1</td>
                        <td>2</td>
                        <td>$10.00</td>
                        <td>$20.00</td>
                    </tr>
                    <tr>
                        <td>Producto 2</td>
                        <td>1</td>
                        <td>$15.00</td>
                        <td>$15.00</td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <div class="total">
                <p>Total Paid: <b>' . $datos['transaccion_amount'] . '</b></p>
            </div>
            <br><br>
            <h4 class="fecha-emision" style="color: #5a5a5a;">Purchase date: <strong>' . $datos['date'] . '</strong></h4>
        </div>
    </body>
    
    </html>';
    $pdf->WriteHTML($html);
}

// Guardar el PDF en una variable
$pdfContent = $pdf->Output('PaymentReceipt-TheLibertyWay.pdf', 'S');

// Guardar el PDF en un archivo (opcional)
$pdf->Output('Payment Receipt - TheLibertyWay.pdf', 'F');
