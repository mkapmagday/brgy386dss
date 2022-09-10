<?php

namespace App\Http\Controllers;

use App\Models\DocumentList;
use App\Models\DocumentRequest;
use Illuminate\Http\Request;

class DocumentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $document = DocumentList::all();
        return view('admin.user.documentlist', compact('document'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $input = $request->all();
        DocumentList::create($input);
        return back();  
    }

 
    public function show()
    {
  
    }
    
  

    public function edit($id)
    {   
        $document = DocumentList::find($id);
        return view('admin.user.editdocumentlist',compact('document'));
    }

 
    public function update(Request $request, $id)
    {
        $document = DocumentList::find($id);
        $input = $request->all();
        $document->update($input);
        return view('admin.user.documentlist');  
    }

    
    public function destroy($id)
    {
        $document = DocumentList::find($id)->delete();
        return back();
    }
}