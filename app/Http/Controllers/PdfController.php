<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Amr;
// use Barryvdh\DomPDF\PDF;

class PdfController extends Controller
{
    public function generatePdf()
    {
        $amr = Amr::all();
        $pdf = PDF::loadView('pdf_template', ['amr' => $amr]);
        // $pdf = PDF::loadView('pdf_template', ['amr' => $amr]);

        return $pdf->download('laporan_amr.pdf');
    }
}
