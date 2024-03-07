<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$url='http://localhost/css/style.css'; //這是原本css的絕對路徑
        //$url=asset('css/style.css');//這是laravel找他css的路徑method
        // dd($url);
        // $data=view('cat.index');
        // $data=route('cats.index');
        // dd($data);
        // $url = route('cats.edit', ['cat' => 1]); 
        //laravel v10目前規定id是直接寫route的單數
        // dd($url);
        //這邊測試一下是否接通 要用對的method
        return view('cat.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // $input = $request->except('_token');
        // dd($input);
        // dd('hello cat store');
        return redirect()->route('cats.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
        dd("hello $id");
        // return view('cat.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function excel(){

        dd('run forestcat, run');

    }
}
