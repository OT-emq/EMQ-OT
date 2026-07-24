<?php

namespace App\Http\Controllers;

use App\Models\DailyPlane;
use Illuminate\Http\Request;

class DailyPlaneController extends Controller
{
    public function index()
    {
        $dps = DailyPlane::all();
        return view('pages.plan.index', compact('dps'));
        /* return DailyPlane::with(['activity', 'worker'])->get(); */
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'address' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'activity_id' => 'required|exists:activities,id',
            'worker_id' => 'required|exists:workers,id',
            'observations' => 'nullable|string',
        ]);

        return DailyPlane::create($validated);
    }

    public function show(DailyPlane $dailyPlane)
    {
        return $dailyPlane->load(['activity', 'worker', 'workOrders']);
    }

    public function update(Request $request, DailyPlane $dailyPlane)
    {
        $validated = $request->validate([
            'date' => 'sometimes|required|date',
            'address' => 'sometimes|required|string|max:255',
            'code' => 'sometimes|required|string|max:255',
            'activity_id' => 'sometimes|required|exists:activities,id',
            'worker_id' => 'sometimes|required|exists:workers,id',
            'observations' => 'nullable|string',
        ]);

        $dailyPlane->update($validated);

        return $dailyPlane;
    }

    public function destroy(DailyPlane $dailyPlane)
    {
        $dailyPlane->delete();

        return response()->noContent();
    }
}