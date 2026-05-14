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


    
    public function show(string $id)
    {
       $data= table::find($id);
        // dd($data);
        return view('show',compact('data'));

        
    }

    
    public function edit(string $id)
    {
       $data = Table::find($id);
       return view('edit',compact('data'));
    }

  
    public function update(Request $request, string $id)
    {
         $table = Table::find($id);
        //  $table->update([
        //     'name'=>$request->name
        //  ]);
         $table->update($request->all());
         return redirect()->route('table');
    }

   
    public function destroy(string $id)
    {
       $table= Table::find($id);
        $table->delete();
        return redirect()->route('table');
    }
}
