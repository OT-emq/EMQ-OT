<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        return view('pages.workers.index', compact('workers'));
    }

    public function create(){
        return view('pages.workers.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
    ]);

    Worker::create($validated);

    return redirect()
        ->route('trabajadores.index')
        ->with('success', 'Trabajador creado correctamente.');
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

    public function destroy($id)
{
    $worker = Worker::findOrFail($id);

    $worker->delete();

    return redirect()
        ->route('trabajadores.index')
        ->with('success', 'Trabajador eliminado correctamente.');
}
}
