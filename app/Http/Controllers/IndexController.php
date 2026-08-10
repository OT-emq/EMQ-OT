<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DailyPlane;
use App\Models\Activity;
use App\Models\Worker;
use App\Models\WorkOrder;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $dps = DailyPlane::count();
        $acts = Activity::count();
        $wks= Worker::count();
        $wkos = WorkOrder::count();
        
        return view('pages.index.index', compact('dps','acts','wks','wkos'));
    }
}
