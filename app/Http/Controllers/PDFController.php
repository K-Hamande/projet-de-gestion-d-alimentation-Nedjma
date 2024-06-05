<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\PDF;


class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $products = Produit::Where('id',$id)->first();
        $pdf = PDF::loadView('printBarcodes', compact('products'));

        return $pdf->download('products.pdf');
    }
}
