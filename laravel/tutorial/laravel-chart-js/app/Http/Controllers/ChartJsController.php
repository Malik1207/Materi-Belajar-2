<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartJsController extends Controller
{
    public function index()
    {
        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
    ->whereYear('created_at', date('Y'))
    ->groupBy(DB::raw("month_name"))
    ->orderBy('month_name', 'ASC')
    ->pluck('count', 'month_name');


        $labels = $users->keys();
        $data = $users->values();

        return view('chart', compact('labels', 'data'));
    }
}
