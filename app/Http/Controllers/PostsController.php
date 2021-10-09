<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Isian;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $file = Isian::get('detail');
         $data2 = json_decode($file, true);
  
        // $hasil= $data2[0];
        // $data = Isian::latest()->get();
        // $data2 = json_decode($data, true);
        // $list = array_column($data2,'table');

        return view('post.index',compact('data2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file = Storage::get("public/data.json");
        // $data = json_decode($file, true);

        // $data_isian = New Isian;
        // $data_isian->nama = $request->nama;
        // $data_isian->nama = $request->umur;
        // $data [] = array(
        //     'berat' => $request->berat,
        //     'tinggi' => $request->tinggi,
        //     'hobi' => $request->hobi,
        // );
        // $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        // $data_isian->detail = $jsonfile
        // $file = Storage::put("public/data.json",$jsonfile);
        // return redirect('/');

        $data_isian = New Isian;
        $data_isian->nama = $request->nama;
        $data [] = array(
            'berat' => $request->berat,
            'tinggi' => $request->tinggi,
            'umur' => $request->tinggi,
            'hobi' => $request->hobi
        );
        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        $data_isian->detail = $jsonfile;
        $data_isian->save();
        
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
