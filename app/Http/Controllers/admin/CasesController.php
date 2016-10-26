<?php

namespace App\Http\Controllers\admin;

use App\model\Cases;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//
        return view('Admin/case/create');
//        $case= Cases::all();
//        return view('Admin/case/index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $this->validate($request, array(
//
//            'category_name' => 'required| max:50',
//            'description' => 'required',
//            'rank' => 'required|max:3'
//
//        ));

            $case = new Cases;
        $case->subject = $request->subject;
        $case->status = $request->status;
        $case->priority = $request->priority;
        $case->case_owner = $request->case_owner;
        $case->case_reason = $request->case_reason;
//        $case->created_by='pass';
        $case->type=$request->type;

        $case->save();
        return view('Admin/case/create');



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
