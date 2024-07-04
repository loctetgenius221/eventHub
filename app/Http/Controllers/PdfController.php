<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Evennement;
use App\Models\Reservation;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function exportParticipants($evenement_id)
    {
        $evenement = Evennement::findOrFail($evenement_id);
        $participants = Reservation::where('evenement_id', $evenement_id)->get();

        $dompdf = new Dompdf();
        $html = view('pdf.participants', compact('evenement','participants'))->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        return $dompdf->stream('participants.pdf');
    }
}

