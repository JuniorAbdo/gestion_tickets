<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SousCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=DB::table('sous_categories')->paginate(8);
       
       $categories=[];
       for($i=0;$i<count($data);$i++){
        $categorie=DB::table('categories')->where('id',$data[$i]->categorie_id)->value('intitule');
        $categories[]=$categorie;
       }
      
       return view('SousCategorie.index',['categories'=>$categories,'sousCategories'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=DB::table('categories')->get();
        return view('SousCategorie.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('sous_categories')->insert([
            'intitule'=>$request->input('sousCategorie'),
            'categorie_id'=>$request->input('categorie'),
        ]);
        return redirect()->route('sousCategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sousCategorie = DB::table('sous_categories')->where('id',$id)->get();
        $categories=DB::table('categories')->get();
        return view('SousCategorie.edit',['sousCategorie'=>$sousCategorie,'categories'=>$categories]);
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
        DB::table('sous_categories')->where('id',$id)->update([
            'intitule'=>$request->input('sousCategorie'),
            'categorie_id'=>$request->input('categorie'),
        ]);
        return redirect()->route('sousCategories.index');
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
