<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Student;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::latest()->paginate(5);
    
        return view('subjects.index',compact('subjects'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sname' => 'required',
            'code' => 'required',
            'credit' => 'required',
            'hour' => 'required',
        ]);
    
        Subject::create($request->all());
     
        return redirect()->route('subjects.index')
                        ->with('success','Subject created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return view('subjects.show',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('subjects.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'sname' => 'required',
            'code' => 'required',
            'credit' => 'required',
            'hour' => 'required',
        ]);
    
        $subject->update($request->all());
    
        return redirect()->route('subjects.index')
                        ->with('success','Subject updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
    
        return redirect()->route('subjects.index')
                        ->with('success','Subject deleted successfully');
    }

    public function subject(){
        return Subject::with('teacher')->get();
    }
}
