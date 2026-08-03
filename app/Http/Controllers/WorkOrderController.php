<?php

namespace App\Http\Controllers;

use App\Models\WorkOrder;
use Illuminate\Http\Request;

class WorkOrderController extends Controller
{
    public function index()
    {
        $ot = WorkOrder::with('dailyPlane')->first();
        return view('pages.work_order', compact('ot'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'daily_plane_id' => 'required|exists:daily_planes,id',
        ]);

        return WorkOrder::create($validated);
    }

    public function show(WorkOrder $workOrder)
    {
        return $workOrder->load('dailyPlane');
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