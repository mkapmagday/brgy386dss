<?php

namespace App\Http\Controllers;

use App\Models\DocumentRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;
use Spatie\Permission\Models\Role;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $docres = DocumentRequest::find($id);
        $date = Carbon::now();
        $month = $date->format('F');
        $user = User::all();
        $role = Role::all();

        $pdf = PDF::loadView('document\templates\brgyclearance', compact('docres','date','month','user','role'));
        return $pdf->download('BRGY_DOCUMENTS.pdf');
        return back();
    }
    public function show($id)
    {
        $docres = DocumentRequest::find($id);
        $date = Carbon::now();
        $month = $date->format('F');
        $user = User::all();
        $role = Role::all();

        return view('document\templates\brgyclearance', compact('docres','date','month','user','role'));
        
    }
}
