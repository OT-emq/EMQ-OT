<?php

namespace App\Http\Controllers;

use App\Models\DailyPlane;
use App\Models\WorkOrder;
use Illuminate\Http\Request;

class WorkOrderController extends Controller
{
    public function index()
{
    $ot = WorkOrder::with([
        'dailyPlane.activity',
        'dailyPlane.worker'
    ])->first();

    return view('pages.plan.work_order', compact('ot'));
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'daily_plane_id' => 'required|exists:daily_planes,id',
        ]);

        return WorkOrder::create($validated);
    }

    public function show(DailyPlane $dailyPlane)
{
    $dailyPlane->load([
        'activity',
        'worker',
        'workOrder'
    ]);

    return view('pages.plan.work_order', compact('dailyPlane'));
}

    public function update(Request $request, WorkOrder $workOrder)
    {
        $validated = $request->validate([
            'daily_plane_id' => 'sometimes|required|exists:daily_planes,id',
        ]);

        $workOrder->update($validated);

        return $workOrder;
    }

    public function destroy(WorkOrder $workOrder)
    {
        $workOrder->delete();

        return response()->noContent();
    }
}