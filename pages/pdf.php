<?
require('../config.php');
include("../auth.php");
require('C:\AppServ\www\psw5\fpdf\fpdf.php');
date_default_timezone_set("America/Bogota");


$host = "localhost";
$user = "root";
$cont = "12345678";
$db = "myDB";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('../imagenes/logo.png',10,10,-150);
$pdf->Ln(20);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->Ln(10);
$pdf->Cell(100,20,utf8_decode('REPORTES PDF'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,20,'CEDULA');
$pdf->Cell(25,20,'NOMBRES');
$pdf->Cell(25,20,'APELLIDOS');
$pdf->Cell(40,20,'EMAIL');
$pdf->Cell(15,20,'FECHA');




$pdf->Ln(10);


$pdf->SetFont('Arial','',8);


$conec = mysqli_connect($host,$user,$cont,$db);
// Check connection
if (!$conec) {
    die("Connection failed: " . mysqli_connect_error());
}

$query_select = 'SELECT * FROM myguests';
$result = mysqli_query($conec,$query_select );

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($reg = mysqli_fetch_assoc($result)) {
    	


$pdf->Cell(20,20, $reg['id'], 0);

$pdf->Cell(25,20, utf8_decode($reg['firstname']), 0);

$pdf->Cell(25,20, utf8_decode($reg['lastname']), 0);

$pdf->Cell(40,20, utf8_decode($reg['email']), 0);

$pdf->Cell(15,20, utf8_decode($reg['reg_date']), 0);

$pdf->Ln(10);

}
}

$pdf->Output();
?>
