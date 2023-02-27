<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;

class ChartController extends Controller
{
    //number of ticket for chaque csc pour la semaine actueille
    public function chartCscParSemaine(Request $request){
        //les libelle de cscs pour l'axe des x
        // $cscs=DB::table('cscs')->get()->pluck('libelle_csc');
        //remplire la table par le nomber de ticket pour chaque semaine

        $firstOfWeek=now()->startOfWeek();
        $lastOfMonth=now()->endOfWeek();
        // $numberWeekOfYrear=$firstOfWeek->weekOfYear;
        $tickets=DB::table('tickets')->select(['csc_id','libelle_csc',
        DB::raw('COUNT(csc_id) as number_csc')])
        ->join('cscs','csc_id','=','cscs.id')
        ->whereBetween('created_at',[$firstOfWeek,$lastOfMonth])
        ->groupBy('csc_id')
        ->get() ;
       
        $axeX=[];
        $axeY=[];
        for($i=0;$i<count($tickets);$i++){
            $axeX[]=$tickets[$i]->libelle_csc;
            $axeY[]=$tickets[$i]->number_csc;
        }
       
    	return view('charts.chartCscSemaine')
        ->with('axeX',json_encode($axeX,JSON_NUMERIC_CHECK))
        ->with('axeY',json_encode($axeY,JSON_NUMERIC_CHECK));
       
    }

    //number of ticket for chaque csc pour le mois actueille
    public function chartCscParMois(Request $request){
        //les libelle de cscs pour l'axe des x
        // $cscs=DB::table('cscs')->get()->pluck('libelle_csc');
        //remplire la table par le nomber de ticket pour chaque semaine

        $firstOfMonth=now()->startOfMonth();
        $lastOfMonth=now()->endOfMonth();
        $numberWeekOfYrear=$firstOfMonth->weekOfYear;
        $tickets=DB::table('tickets')->select(['csc_id','libelle_csc',
        DB::raw('COUNT(csc_id) as number_csc')])
        ->join('cscs','csc_id','=','cscs.id')
        ->whereBetween('created_at',[$firstOfMonth,$lastOfMonth])
        ->groupBy('csc_id')
        ->get() ;
        
        $axeX=[];
        $axeY=[];
        for($i=0;$i<count($tickets);$i++){
            $axeX[]=$tickets[$i]->libelle_csc;
            $axeY[]=$tickets[$i]->number_csc;
        }
    

    	return view('charts.chartCSCMois')
        ->with('axeX',json_encode($axeX,JSON_NUMERIC_CHECK))
        ->with('axeY',json_encode($axeY,JSON_NUMERIC_CHECK));
       
    }

    //le nomber des tickets pour chaque type des tickets dans la semaine actuiel
    public function chartTicketParSemaine() {
          //les libelle de cscs pour l'axe des x
        $cscs=DB::table('cscs')->get()->pluck('libelle_csc');
        $categories=DB::table('sous_categories')->get()->pluck('intitule');
        //remplire la table par le nomber de ticket pour chaque semaine

        $startWeek=now()->startOfWeek();
        $endWeek=now()->endOfWeek();

        $tickets=DB::table('tickets')->select(['tickets.id','csc_id','libelle_csc','intitule',
        DB::raw('COUNT(csc_id) as number_csc')
        ])
        ->join('cscs','csc_id','=','cscs.id')
        ->join('sous_categories','sous_categorie_id','=','sous_categories.id')
        ->whereBetween('created_at',[$startWeek,$endWeek])
        ->groupBy('sous_categorie_id')
        ->get();
        
       
        $axeX=[];
        $axeY=[];
        for($i=0;$i<count($tickets);$i++){
            $axeX[]=$tickets[$i]->intitule;
            $axeY[]=$tickets[$i]->number_csc;
        }
        
    

    	return view('charts.chartTicketSemaine')
        ->with('axeX',json_encode($axeX,JSON_NUMERIC_CHECK))
        ->with('axeY',json_encode($axeY,JSON_NUMERIC_CHECK));
    }



     //le nomber des tickets pour chaque type des tickets dans la semaine actuiel
     public function chartTicketCscParMois() {
        //les libelle de cscs pour l'axe des x
      $cscs=DB::table('cscs')->get()->pluck('libelle_csc');
      $categories=DB::table('sous_categories')->get()->pluck('intitule');
      //remplire la table par le nomber de ticket pour chaque semaine

      $firstOfMonth=now()->startOfMonth();
      $lastOfMonth=now()->endOfMonth();

      $tickets=DB::table('tickets')->select(['tickets.id','csc_id','libelle_csc','intitule',
      DB::raw('COUNT(csc_id) as number_csc')
      ])
      ->join('cscs','csc_id','=','cscs.id')
      ->join('sous_categories','sous_categorie_id','=','sous_categories.id')
      ->whereBetween('created_at',[$firstOfMonth,$lastOfMonth])
      ->groupBy('sous_categorie_id')
      ->get();
      
     
      $axeX=[];
      $axeY=[];
      for($i=0;$i<count($tickets);$i++){
          $axeX[]=$tickets[$i]->intitule;
          $axeY[]=$tickets[$i]->number_csc;
      }
      
  

      return view('charts.chartTicketMois')
      ->with('axeX',json_encode($axeX,JSON_NUMERIC_CHECK))
      ->with('axeY',json_encode($axeY,JSON_NUMERIC_CHECK));
  }
}


