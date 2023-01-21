<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chart;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        // Get users grouped by age
        $groups = DB::table('users')
                        ->select('age', DB::raw('count(*) as total'))
                        ->groupBy('age')
                        ->pluck('total', 'age')->all();

        // Prepare the data for returning with the view
        $chart = new Chart;
            $chart->labels = (array_keys($groups));
            $chart->dataset = (array_values($groups));
        return view('charts.index', compact('chart'));
            }
    }
