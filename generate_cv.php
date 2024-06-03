<?php
require('fpdf/fpdf.php');  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $skills = $_POST['skills'];

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    
    $pdf->Cell(0, 10, 'Curriculum Vitae', 0, 1, 'C');
    $pdf->Ln(10);
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Name:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, $name, 0, 1);
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Email:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, $email, 0, 1);
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Phone:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, $phone, 0, 1);
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Address:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, $address);
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Education:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, $education);
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Experience:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, $experience);
    
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Skills:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, $skills);
    
    $pdf->Output('I', 'CV.pdf'); // D for download, F for save to file, I for inline in browser
    exit;
}
?>
