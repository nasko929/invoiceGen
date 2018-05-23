<?php


	require("fpdf/fpdf.php");
	class myPDF extends FPDF{
		function header(){


		}
		function footer(){


		}
	}
	$pdf=new myPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell(40,10);
	$pdf->Cell(40,10,'This is FPDF Demo by Helpfolder.');
	$pdf->output();


?>