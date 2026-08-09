<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('pages.activities.index', compact('activities'));
    }

    public function create()
    {
        return view('pages.activities.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
        ]);

        Activity::create($validated);

        return redirect()
            ->route('actividad.index')
            ->with('success', 'Actividad creada correctamente.');
    }

    public function show(Activity $activity)
    {
        return $activity;
    }

    public function update(Request $request, Activity $activity)
    {
        $validated = $request->validate([
            'description' => 'sometimes|required|string|max:255',
        ]);

        $activity->update($validated);

        return $activity;
    }

   public function destroy($id)
{
    $activity = Activity::findOrFail($id);

    $activity->delete();

    return redirect()
        ->route('actividad.index')
        ->with('success', 'Actividad eliminada correctamente.');
}
}
