<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        return Worker::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
        ]);

        return Worker::create($validated);
    }

    public function show(Worker $worker)
    {
        return $worker;
    }

    public function update(Request $request, Worker $worker)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'last_name' => 'sometimes|required|string|max:255',
        ]);

        $worker->update($validated);

        return $worker;
    }

    public function destroy(Worker $worker)
    {
        $worker->delete();

        return response()->noContent();
    }
}
