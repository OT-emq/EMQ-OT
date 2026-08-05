<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activies = Activity::all();
        return view('pages.activities.index', compact('activies'));
    }

    public function create(){
        return view('pages.activities.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
        ]);

        return Activity::create($validated);
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

    public function destroy(Activity $activity)
    {
        $activity->delete();

        return response()->noContent();
    }
}
