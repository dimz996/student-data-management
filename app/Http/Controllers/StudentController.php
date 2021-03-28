<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= DB::table('students')
        ->join('subjects','subjects.s_id','=','students.s_id')
        ->join('teachers','teachers.t_id','=','subjects.t_id')
        ->select('students.name','techers.name','subjects.name')
        ->get();
        return view('join_table',compact('data'));


        $studentsdata = DB::table -> select('students.id','students.name')
        ->get();
        return view('students_data',compact('studentsdata'));

        $techersdata = DB::table -> select('techers.id','techers.name')
        ->get();
        return view('teachers_data',compact('teachersdata'));

        $subsdata = DB::table -> select('subjects.id','subjects.name')
        ->get();
        return view('subjects_data',compact('teachersdata'));
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
