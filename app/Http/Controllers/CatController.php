<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; //連線資料庫
use Illuminate\Http\Request;
use App\Models\Cat; //這邊要增加model cat


class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Cat::where('id', '>', 5)->orderByDesc('id')->get();
        return view('cat.index', ['data' => $data]);

        //把資料弄成一包(看好幾個不同的db 設成一個變數而已喔 轉到前端)

        // $data['cats'] = DB::select('select * from cats');
        // $data['dogs'] = DB::select('select * from dogs');
        // $data['test'] = '123';
        // return view('cat.index',['data'=>$data]); 
        // return view('cat.index',['data'=>$data, 'test'=>$test]); 

        // dd($data);
        // DB::insert('insert into cats (name, mobile, address) values (bob, 0922, 中山南路)');
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
        // DB::insert('insert into cats (name, mobile) values (bob, 0922)');
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $input = $request->except('_token');
        $now=now(); //設定時間

        DB::table('cats')->insert([
            'name' => $input['name'],
            'mobile' => $input['mobile'],
            'address' => 999,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
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
