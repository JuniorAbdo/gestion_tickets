<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function chartCscParSemaine(Request $request){
        //les libelle de cscs pour l'axe des x
        $cscs=DB::table('cscs')->get()->pluck('libelle_csc');
        //remplire la table par le nomber de ticket pour chaque semaine

        $firstOfWeek=now()->startOfWeek();
        $lastOfWeek=now()->endOfWeek();
        $numberWeekOfYrear=$firstOfWeek->weekOfYear;
        $tickets=DB::table('tickets')->select(['csc_id','libelle_csc',
        DB::raw('COUNT(csc_id) as number_csc')])
        ->join('cscs','csc_id','=','cscs.id')
        ->whereBetween('created_at',[$firstOfWeek,$lastOfWeek])
        ->groupBy('csc_id')
        ->get() ;

        $year=[];
        $user=[];
        for($i=0;$i<count($tickets);$i++){
            $year[]=$tickets[$i]->libelle_csc;
            $user[]=$tickets[$i]->number_csc;
        }
    

    	return view('tickets.mychart')
        ->with('year',json_encode($year,JSON_NUMERIC_CHECK))
        ->with('user',json_encode($user,JSON_NUMERIC_CHECK));
       
    }
    public function chartCscParMois(Request $request){
        //les libelle de cscs pour l'axe des x
        $cscs=DB::table('cscs')->get()->pluck('libelle_csc');
        //remplire la table par le nomber de ticket pour chaque semaine

        $firstOfWeek=now()->startOfWeek();
        $lastOfWeek=now()->endOfWeek();
        $numberWeekOfYrear=$firstOfWeek->weekOfYear;
        $tickets=DB::table('tickets')->select(['csc_id','libelle_csc',
        DB::raw('COUNT(csc_id) as number_csc')])
        ->join('cscs','csc_id','=','cscs.id')
        ->whereBetween('created_at',[$firstOfWeek,$lastOfWeek])
        ->groupBy('csc_id')
        ->get() ;

        $year=[];
        $user=[];
        for($i=0;$i<count($tickets);$i++){
            $year[]=$tickets[$i]->libelle_csc;
            $user[]=$tickets[$i]->number_csc;
        }
    

    	return view('tickets.mychart')
        ->with('year',json_encode($year,JSON_NUMERIC_CHECK))
        ->with('user',json_encode($user,JSON_NUMERIC_CHECK));
       
    }
}


