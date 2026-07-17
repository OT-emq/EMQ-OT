<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        return Activity::all();
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
