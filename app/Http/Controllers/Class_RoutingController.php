<?php

namespace App\Http\Controllers;

use App\Models\Class_Routing;
use Illuminate\Http\Request;

class Class_RoutingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class_routings = Class_Routing::latest()->paginate(5);
    
        return view('class_routings.index',compact('class_routings'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('class_routings.create');
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
            'status' => 'required',
        ]);
    
        Class_Routing::create($request->all());
     
        return redirect()->route('class_routings.index')
                        ->with('success','Class_Routing created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Class_Routing  $class_Routing
     * @return \Illuminate\Http\Response
     */
    public function show(Class_Routing $class_Routing)
    {
        return view('class_routings.show',compact('class_routing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Class_Routing  $class_Routing
     * @return \Illuminate\Http\Response
     */
    public function edit(Class_Routing $class_Routing)
    {
        return view('class_routings.edit',compact('class_routing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Class_Routing  $class_Routing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Class_Routing $class_Routing)
    {
        $request->validate([
            'status' => 'required',
        ]);
    
        $class_routing->update($request->all());
    
        return redirect()->route('class_routings.index')
                        ->with('success','Class Routing updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Class_Routing  $class_Routing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Class_Routing $class_Routing)
    {
        $class_routing->delete();
    
        return redirect()->route('class_routings.index')
                        ->with('success','Class Routing deleted successfully');
    }
}
