<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Custom function to insert the PDF cells

function insert_cell($pdf, $X = 0, $Y = 0, $CellWidth = 0, $CellHeight = 0, $text="", $border = 0, $alignment = 'L',$fill = false)
{
    $pdf->SetY($Y);
    $pdf->SetX($X);
    $pdf->Cell($CellWidth, $CellHeight, $text, $border, 0, $alignment,$fill);
}

if(isset($_POST['formsubmit']))
{
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $invoice = $_POST['invoice'];
    $duedate = $_POST['duedate'];
    $subtotal = $_POST['subtotal'];
    $total = $_POST['total'];

    $desc = $_POST['desc'];
    $price = $_POST['price'];



    require_once('fpdf/fpdf.php');
    require_once('fpdf/extension.php');

    $pdf = new PDF('P', 'mm', 'A4');
    $pdf->AddFont('GR','','Goldplay-Regular.php');
    $pdf->AddFont('GR','B','Goldplay-Bold.php');
    $pdf->AddPage();
    $pdf->SetFont("GR","","10");

    $pdf->SetLineWidth(15);
    $pdf->SetDrawColor(131, 28, 84);
    $pdf->RoundedRect(0, 0, 210, 295, 12, '1234', 'D');

    $pdf->SetFillColor(245, 243, 238);
    $pdf->RoundedRect(0, 0, 210, 295, 12, '1234', 'DF');
    $pdf->SetFillColor(255, 255, 255);
    
    $pdf->Image('src/3d-logo.png',12,14,50,0);
    $pdf->SetLineWidth(5);
    $pdf->SetDrawColor(0, 64, 89);
    $pdf->SetFillColor(0, 64, 89);
    $pdf->RoundedRect(125.1,9.9, 75, 12, 2, '24', 'DF');
    $pdf->Image('src/layers/INVOICE.png',145,13,0,6);

    $pdf->SetLineWidth(0);
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetFillColor(0, 64, 89);
    $pdf->SetY(35);
    $pdf->SetX(15);
    $pdf->MultiCell(43,4,'85 Great Portland street, London, W1w7LT',0,"L");

    $pdf->SetDrawColor(0, 64, 89);
    $pdf->SetTextColor(0, 64, 89);

    $x = 15;
    $y = 60;
    $pdf->SetFont("GR","","15");
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 0, $text="Name", $border = 0, $alignment = 'L',$fill = false);
    $y+=8;
    $pdf->SetFont("GR","","13");
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 0, $text=$name, $border = 0, $alignment = 'L',$fill = false);
    $y+=3;
    $pdf->Line($x,$y,$x+70,$y);
    $y+=10;
    $pdf->SetFont("GR","","15");
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 0, $text="Company", $border = 0, $alignment = 'L',$fill = false);
    $y+=8;
    $pdf->SetFont("GR","","13");
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 0, $text=$company, $border = 0, $alignment = 'L',$fill = false);
    $y+=3;
    $pdf->Line($x,$y,$x+70,$y);
    $y+=10;
    $pdf->SetFont("GR","","15");
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 0, $text="Email", $border = 0, $alignment = 'L',$fill = false);
    $y+=8;
    $pdf->SetFont("GR","","13");
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 0, $text=$email, $border = 0, $alignment = 'L',$fill = false);
    $y+=3;
    $pdf->Line($x,$y,$x+70,$y);


    $x = 125;
    $y = 60;
    $pdf->SetFont("GR","","15");
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 0, $text="Invoice No", $border = 0, $alignment = 'L',$fill = false);
    $y+=8;
    $pdf->SetFont("GR","","13");
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 0, $text=$invoice, $border = 0, $alignment = 'L',$fill = false);
    $y+=3;
    $pdf->Line($x,$y,$x+70,$y);
    $y+=10;
    $pdf->SetFont("GR","","15");
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 0, $text="Payment due date", $border = 0, $alignment = 'L',$fill = false);
    $y+=8;
    $pdf->SetFont("GR","","13");
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 0, $text=$duedate, $border = 0, $alignment = 'L',$fill = false);
    $y+=3;
    $pdf->Line($x,$y,$x+70,$y);


    $pdf->SetFont("GR","B","15");

    $x = 15;
    $y = 120;
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 100, $CellHeight = 6, $text="Project Description", $border = 0, $alignment = 'L',$fill = false);
    $x = $pdf->GetX();
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 25, $CellHeight = 6, $text="Price", $border = 0, $alignment = 'L',$fill = false);
    $x = $pdf->GetX();
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 40, $CellHeight = 6, $text="Sub total", $border = 0, $alignment = 'L',$fill = false);
    $x = $pdf->GetX();
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 6, $text="Total", $border = 0, $alignment = 'L',$fill = false);
    $x = 15;
    $y+=7;
    $pdf->Line($x,$y,$x+180,$y);


    $pdf->SetFont("GR","","13");
    $y=120 + 12;
    for($i=0;$i<count($desc);$i++)
    {
        $x = 15;
        $pdf->SetY($y);
        $pdf->SetX($x);
        $desc = str_replace("•",chr(149),$desc);
        $pdf->MultiCell(100,5,$desc[$i],0,"L");
        $x += 100;
        insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 25, $CellHeight = 6, $text=utf8_decode("£ ".$price[$i]), $border = 0, $alignment = 'L',$fill = false);
        if($i==0)
        {
            $x = $pdf->GetX();
            insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 40, $CellHeight = 6, $text=utf8_decode("£ ".$subtotal), $border = 0, $alignment = 'L',$fill = false);
            $x = $pdf->GetX();
            insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 0, $CellHeight = 6, $text=utf8_decode("£ ".$total), $border = 0, $alignment = 'L',$fill = false);
        }
        $y+=7;
        $pdf->Line(15,$y,195,$y);
        $y+=6;
    }

    $pdf->SetFont("GR","B","14");
    $x = 115;
    $y += 10;
    // $vals_y = $y;
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 60, $CellHeight = 6, $text="Total", $border = 0, $alignment = 'L',$fill = false);
    // // $y+=7;
    // // insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 60, $CellHeight = 6, $text="Tax", $border = 0, $alignment = 'L',$fill = false);
    // // $y+=7;
    // // insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 60, $CellHeight = 6, $text="Discount", $border = 0, $alignment = 'L',$fill = false);

    // $y = $vals_y;
    // $pdf->SetFont("GR","","13");
    $x = $pdf->GetX();
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 25, $CellHeight = 6, $text=utf8_decode("£ ".$total), $border = 0, $alignment = 'L',$fill = false);
    // // $y+=7;
    // // insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 25, $CellHeight = 6, $text="-", $border = 0, $alignment = 'L',$fill = false);
    // // $y+=7;
    // // insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 25, $CellHeight = 6, $text=$discount, $border = 0, $alignment = 'L',$fill = false);


    $pdf->Image('src/stamp.png',15,190,0,80);
    $pdf->Image('src/sig.png',55,205,0,35);
    $pdf->Image('src/engst.png',60,230,0,25);



    $pdf->Output("D",'output.pdf');


    header("location:index.php");

}
else{
    header("location:index.php");
}
