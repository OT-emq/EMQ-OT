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
        $dp = DailyPlane::count();
        $act = Activity::count();
        $wk= Worker::count();
        $wko = WorkOrder::count();
        
        return view('pages.index.index', compact('dp','act','wk','wko'));
    }
}
