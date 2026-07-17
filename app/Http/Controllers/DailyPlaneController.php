<?php

namespace App\Http\Controllers;

use App\Models\DailyPlane;
use Illuminate\Http\Request;

class DailyPlaneController extends Controller
{
    public function index()
    {
        return DailyPlane::with(['activity', 'worker'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha' => 'required|date',
            'direccion' => 'required|string|max:255',
            'codigo' => 'required|string|max:255|unique:daily_planes,codigo',
            'activity_id' => 'required|exists:activities,id',
            'worker_id' => 'required|exists:workers,id',
            'observaciones' => 'nullable|string',
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
            'fecha' => 'sometimes|required|date',
            'direccion' => 'sometimes|required|string|max:255',
            'codigo' => 'sometimes|required|string|max:255|unique:daily_planes,codigo,' . $dailyPlane->id,
            'activity_id' => 'sometimes|required|exists:activities,id',
            'worker_id' => 'sometimes|required|exists:workers,id',
            'observaciones' => 'nullable|string',
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