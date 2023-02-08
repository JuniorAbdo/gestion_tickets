<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\Vue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('responsable')->except(['create','store']);
    }

    public function index()
    {
        $data=DB::table('tickets')->paginate(8) ;
        
        $tickets=[];
        echo count($data);
        echo var_dump($data);
        // for($i=0; $i<count($data); $i++) {
        //     $tickets['id']=$data[$i]->id;
        //     $tickets['title']=$data[$i]->title;
        //     $tickets['crate_at']=$data[$i]->created_at;

        //     $tickets['csc']=DB::table('cscs')->where('id', $data[$i]->csc_id)->value('libelle_csc');
        //     $tickets['etat']=DB::table('etats')->where('id', $data[$i]->etat_id)->value('intitule_etat');
        // }
        // return view('tickets.index', ['tickets'=>$tickets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=DB::table('categories')->get();
        $typeCategories=DB::table('sous_categories')->get();
        $cscs=DB::table('cscs')->get();
        return view('tickets.create',['categories'=>$categories,
    'typeCategories'=>$typeCategories,'cscs'=>$cscs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'title'=>'required',
            'categorie' =>'required',
            'sous_categorie'=>'required',
            'pice'=>'nullable',
            'detail'=>'required',
            'csc'=>'required',
            'key_ticket'=>'required',
        ],[
            'required'=>'ce champ est obligatoire',
        ]);
        if ($Validator->fails()){
           
            return redirect('tickets/create')
            ->withErrors($Validator->errors())
            ->withInput();
        }
        $lastInsert=DB::table('tickets')->get()->last();
        
        if($lastInsert==null){
            $lastId=1;
        }
        else{
            $lastId = $lastInsert->id;
        }
        

        
        if($lastId===null){
            $lastId=1;
        }
        $idCategorie=DB::table('categories')->where('intitule', $request->input('categorie'))->value('id');
        
        $idSousCategorie = DB::table('sous_categories')->where('intitule',$request->input('sous_categorie'))->value('id');
        $idUser=$request->user()->id;
        
        $idCsc=DB::table('cscs')->where('libelle_csc',$request->input('csc'))->value('id');
       
        $namePice=date('ymdhis').'.'.$request->file('pice')->getClientOriginalExtension();
        echo $namePice.date('his');
        Storage::disk('public')->putFileAs('tickets/image',$request->pice,$namePice);
        DB::table('tickets')->insert([
            'number_ticket'=>$request->input('key_ticket').'_'.$lastId,
            'title'=>$request->input('title'),
            'description'=>$request->input('detail'),
            'pice'=>$namePice,
            'user_id'=>$idUser,
            'csc_id' =>$idCsc,
            'sous_categorie_id'=>$idSousCategorie,
            'etat_id'=>1,
            'categorie_id'=>$idCategorie,
            'created_at'=>date('Y-m-d H:i:s'),
            


        ]);
        // return response("<div class='alert alert-success' role='alert'>
        //     A simple success alert—check it out!
        //   </div>");
        return redirect('tickets/create')->with('message_succusse','ticket cree avec succssé');
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
