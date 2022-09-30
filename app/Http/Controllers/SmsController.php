<?php

namespace App\Http\Controllers;

use App\Models\DocumentRequest;
use App\Models\User;
use Illuminate\Notifications\Facades\Vonage;

class SmsController extends Controller
{
    public function index(DocumentRequest $docres)
   {

    $docres = DocumentRequest::all();
    dd($docres);

    Vonage::message()->send([
        'to' => '639064370355',
        'from' => 'sender',
        'text' => 'Test'
    ]);
    
        return view('admin.user.documentrequest',compact('docres'));
   }
}
