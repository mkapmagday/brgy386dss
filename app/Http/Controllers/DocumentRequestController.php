<?php

namespace App\Http\Controllers;

use App\Enums\DocumentRequestStatus;
use App\Models\DocumentList;
use App\Models\DocumentRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Node\Block\Document;
use Symfony\Component\Console\Input\Input;
use App\Notification\EmailNotification;
use App\Notifications\EmailNotification as NotificationsEmailNotification;
use Illuminate\Notifications\Facades\Vonage;
use Illuminate\Notifications\Notification as NotificationsNotification;
use Illuminate\Support\Facades\Notification as FacadesNotification;
use Notification;


class DocumentRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, DocumentList $document)
    {
        $id = Auth::id();
        $request -> all();
        $users = User::find($id);
        $document = DocumentList::all();

        return view('resident.user.request', compact('users','id','request','document'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $documentlist_id = $request->input('document_list');
        $lname = $request->input('lname');
        $fname = $request->input('fname');
        $mname = $request->input('mname');
        $pnum = $request->input('pnum');

        $bdate = $request->input('bdate');
        $years = $request->input('years');
        $months = $request->input('months');
        $municipality = $request->input('municipality');
        $vdate = $request->input('vdate');
        $age = $request->input('age');
        $representative = $request->input('representative');
        $relation = $request->input('relation');
        $address = $request->input('address');
        $purpose = $request->input('purpose');
        $reason = $request->input('reason');

        //dd($request->input());

        DocumentRequest::create([
            'user_id' => Auth::id(),
            'document_id' => $documentlist_id,
            'lname' => $lname,
            'fname' => $fname,
            'mname' => $mname,
            'pnum' => $pnum,

            'bdate' => $bdate,
            'years' => $years,
            'months' => $months,
            'municipality' => $municipality,
            'vdate' => $vdate,
            'age' => $age,
            'representative' => $representative,
            'relation' => $relation,
            'address' => $address,
            'purpose' => $purpose,
            'reason' => $reason,

        ]);
        return back();  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentRequest $docres, DocumentList $document)
    {
        $docres = DocumentRequest::all();
        $document = DocumentList::all();
        return view('resident.user.status',compact('docres','document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docres = DocumentRequest::find($id);
        $docres1 = DocumentRequest::paginate(5);
        $doclist = DocumentList::paginate(5);
        return view('admin.user.editdocumentrequest',compact('docres','doclist','docres1'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showReq(){
        $docres1 = DocumentRequest::paginate(5);
        $doclist = DocumentList::paginate(5);
        return view('admin.user.documentrequest',compact('docres1','doclist'));
    }
    public function showStatus(){
        $docres = DocumentRequest::all();
        return view('admin.user.documentstatus',compact('docres'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $doclist = DocumentList::paginate(5);
        $docres = DocumentRequest::find($id);
        $docres1 = DocumentRequest::paginate(5);
        $documentlist_id = $request->input('document_list');
        $lname = $request->input('lname');
        $fname = $request->input('fname');
        $mname = $request->input('mname');
        $pnum = $request->input('pnum');

        $bdate = $request->input('bdate');
        $years = $request->input('years');
        $months = $request->input('months');
        $municipality = $request->input('municipality');
        $vdate = $request->input('vdate');
        $age = $request->input('age');
        $representative = $request->input('representative');
        $relation = $request->input('relation');
        $address = $request->input('address');
        $purpose = $request->input('purpose');
        $reason = $request->input('reason');
        $status = $request->input('status');
        $docres->update([
            'document_list' => $documentlist_id,
            'lname' => $lname,
            'fname' => $fname,
            'mname' => $mname,
            'pnum' => $pnum,
            'bdate' => $bdate,
            'years' => $years,
            'months' => $months,
            'municipality' => $municipality,
            'vdate' => $vdate,
            'age' => $age,
            'representative' => $representative,
            'relation' => $relation,
            'address' => $address,
            'purpose' => $purpose,
            'reason' => $reason,
            'status' => $status
        ]);
        try{
            Vonage::message()->send([
                'to' => $pnum,
                'from' => 'sender',
                'text' => 'from BRGY 386 this is to inform you about your document status: '.$status.' Thank you for using our website',             
            ]);
            return view('admin.user.documentrequest',compact('doclist','docres','docres1'));  

        }catch(\Vonage\Client\Exception\Request){
            return view('admin.user.documentrequest',compact('doclist','docres','docres1'));  

        }
    
       
        
        return view('admin.user.documentrequest',compact('doclist','docres','docres1'));  
  
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docres = DocumentRequest::find($id)->delete();
        return back();
    }
}
