<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $datas = Table::get();
       return view('table',compact('datas'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Table::create([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'phone'=>$request->Phone,
        // ]);
        Table::create($request->all());
        return redirect('/table');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $data= table::find($id);
        // dd($data);
        return view('show',compact('data'));

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $data = Table::find($id);
       return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
