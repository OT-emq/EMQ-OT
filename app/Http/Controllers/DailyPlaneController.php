<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\DailyPlane;
use App\Models\Worker;
use Illuminate\Http\Request;

class DailyPlaneController extends Controller
{
    public function index(Request $request)
{
    $query = DailyPlane::with(['activity', 'worker']);

    if ($request->filled('code')) {
        $query->where('code', 'like', '%' . $request->code . '%');
    }

    if ($request->filled('date')) {
        $query->whereDate('date', $request->date);
    }

    $dps = $query->orderBy('date', 'desc')->get();

    return view('pages.plan.index', compact('dps'));
}
    public function create()
    {
        $workers = Worker::all();
        $activities = Activity::all();

        return view('pages.plan.create', compact('workers', 'activities'));
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

        DailyPlane::create($validated);

        return redirect()
            ->route('plan-diario.index')
            ->with('success', 'Plan diario creado correctamente.');
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
    }
}
