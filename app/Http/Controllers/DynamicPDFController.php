<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use App\Entities\aboutClient;

class DynamicPDFController extends Controller
{

    public function pdf($id)
    {
        $objClient = aboutClient::find($id);
        if (!$objClient) {
            return abort(404);
        }
        $pdf = PDF::loadView('convert_pdf', ['company' => $objClient]);
        return $pdf->download('Client info.pdf');
    }
}
