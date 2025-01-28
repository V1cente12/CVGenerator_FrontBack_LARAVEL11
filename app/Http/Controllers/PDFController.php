<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Contact;
use App\Models\Education;
use App\Models\AdditionalInformation;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
{
    $skills = Skill::all();
    $experiences = Experience::all();
    $languages = Language::all();
    $contacts = Contact::all();
    $education = Education::all();
    $additionalInformation = AdditionalInformation::all();

    $pdf = Pdf::loadView('pdf', compact('skills', 'experiences', 'languages', 'contacts', 'education', 'additionalInformation'));
    return $pdf->setPaper('letter')->stream('CV.pdf');
}
}
