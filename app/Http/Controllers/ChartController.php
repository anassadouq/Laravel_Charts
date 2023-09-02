<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChartController extends Controller
{
    public function DonutChart(){
        $students = DB::table('students')
                       ->select('course', DB::raw('COUNT(id) as count'))
                       ->groupBy('course')
                       ->get();
        return view('donutChart', compact('students'));
    }

    public function Barchart(){
        $sale = Sale::select('date','seller','car')->get();

        $answer[] = ['Date','Seller','Car'];
        foreach($sale as $key => $value){
            $answer[++$key] = [$value->date, (int)$value->seller, (int)$value->car];
        }
        return view('barChart',compact('answer'));
    }

    public function lineChart()
    {
        $visitors = DB::table('posts')
                      ->select(
                          DB::raw("year(created_at) as year"),
                          DB::raw("SUM(click) as total_click"),
                          DB::raw("SUM(visitor) as total_viewer"))
                      ->groupBy(DB::raw("year(created_at)"))
                      ->get();
    
        $result[] = ['Year', 'Click', 'Viewer'];
    
        foreach($visitors as $key => $value) {
            $result[++$key] = [$value->year, (int) $value->total_click, (int) $value->total_viewer];
        }
    
        return view('lineChart')->with('visitor', $result);
    }
}