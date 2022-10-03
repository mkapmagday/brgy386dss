<?php

namespace App\Http\Controllers;

use App\Models\DocumentRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DocumentRequest $docres)
    {
        $id = Auth::user()->id;
        $docres1 = DocumentRequest::where('user_id',$id)->get();
        $pending = DocumentRequest::where('user_id',$id)->where('status','pending',)->get();
        $approved = DocumentRequest::where('user_id',$id)->where('status','approved')->get();
        $for_claiming = DocumentRequest::where('user_id',$id)->where('status','for_claiming')->get();
        $claimed = DocumentRequest::where('user_id',$id)->where('status','claimed')->get();

        $users = User::select('id','created_at')->get()->groupBy(function($data){
            return Carbon::parse($data->created_at)->format('M');
        });
        $months=[];
        $monthCount=[];
        foreach($users as $month => $values){
            $months[] = $month;
            $monthCount[]=count($values);

        }
        $labels = $months;
        $data = $monthCount;

        $docres = DocumentRequest::select('id','created_at')->get()->groupBy(function($data){
            return Carbon::parse($data->created_at)->format('M');
        });

        $months1=[];
        $monthCount1=[];
        foreach($docres as $month => $values){
            $months1[] = $month;
            $monthCount1[] = count($values);
        }
        $labels1 = $months1;
        $data1 = $monthCount1;

        $claimedRequest = DocumentRequest::select('id','status','updated_at')->where('status','claimed')->get()->groupBy(function($data){
            return Carbon::parse($data->updated_at)->format('M');
        });
        $months2=[];
        $monthCount2=[];
        foreach($claimedRequest as $month => $values){
            $months2[] = $month;
            $monthCount2[] = count($values);
        }
        $labels2 = $months2;
        $data2 = $monthCount2;

             return view('dashboard', compact('docres1','pending','approved','for_claiming','claimed','labels','data','labels1','data1','labels2','data2'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
