<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        // dd('Hello World');
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $todo = Todo::create($request->all());
        return redirect()->route('todos.index');
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->description = $request->get('description');
        $todo->save();

        return redirect()->route('todos.index');
    }

    public function destroy(Request $request)
    {
        $todo = Todo::find($request->get('id'));
        $todo->delete();

        return redirect()->route('todos.index');
    }
}
