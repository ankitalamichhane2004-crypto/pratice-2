<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index()
    {
         $datas = Blog::get();
       return view('blogtable',compact('datas'));
    }

   
    public function create()
    {
         return view('blogform');
    }

  
    public function store(Request $request)
    {
         Blog::create($request->all());
        return redirect('Blog/blogtable');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
    
        // dd($data);
        return view('blogshow',compact('blog'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        
       return view('blogedit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
      
         $blog->update($request->all());
         return redirect()->route('blogtable');
    }

   
    public function destroy(Blog $blog)
    {
       
        $blog->delete();
        return redirect()->route('blogtable');
    }
}
