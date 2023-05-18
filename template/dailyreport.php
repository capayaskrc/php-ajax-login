<?php
require_once('../vendor/tecnickcom/tc-lib-pdf/src/Tcpdf.php');
require ('../vendor/autoload.php');

// Sample data - replace this with your actual data
$incomeData = [
    ['2023-05-18', 'John Doe', 'Product A', 50],
    ['2023-05-18', 'Jane Smith', 'Product B', 75],
    ['2023-05-18', 'Bob Johnson', 'Product C', 100],
];

// Create a new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

// Set document information
$pdf->SetCreator('Your Company');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Daily Income Report');
$pdf->SetSubject('Daily Income Report');
$pdf->SetKeywords('income, report, daily');

// Set header and footer information (optional)
$pdf->SetHeaderData('', 0, 'Daily Income Report', date('Y-m-d H:i:s'));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// Set default font and font size
$pdf->SetFont('helvetica', '', 10);

// Add a page
$pdf->AddPage();

// Set content
$pdf->Cell(0, 10, 'Daily Income Report', 0, 1, 'C');

$pdf->Ln(10);

// Display income data in a table
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(30, 10, 'Date', 1, 0, 'C');
$pdf->Cell(50, 10, 'Customer', 1, 0, 'C');
$pdf->Cell(50, 10, 'Product', 1, 0, 'C');
$pdf->Cell(30, 10, 'Amount', 1, 1, 'C');

$pdf->SetFont('helvetica', '', 10);
foreach ($incomeData as $data) {
    $pdf->Cell(30, 10, $data[0], 1, 0, 'C');
    $pdf->Cell(50, 10, $data[1], 1, 0, 'C');
    $pdf->Cell(50, 10, $data[2], 1, 0, 'C');
    $pdf->Cell(30, 10, $data[3], 1, 1, 'C');
}

// Output the PDF file
$pdf->Output('daily_income_report.pdf', 'I');
