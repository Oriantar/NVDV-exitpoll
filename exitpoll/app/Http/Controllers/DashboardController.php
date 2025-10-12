<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'parties' => \App\Models\PoliticalParty::all(),
            'tokens' => \App\Models\Tokens::all()
        ]);
    }

    public function generatePDF()
    {
        $tokens = \App\Models\Tokens::cursor();
        $pdf = Pdf::loadView('pdf.tokens', ['tokens' => $tokens]);
        return $pdf->download('tokens.pdf');
    }
}
