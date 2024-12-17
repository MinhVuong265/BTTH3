<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $task = Task::find($id);
        return view('tasks.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $task = Task::find($id);
        return view('tasks.edit')->with('task',$task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $longDesc = $request->input('long_description');
        $completed = $request->has('completed') ? 1 : 0;

        $task = Task::find($id);
        $task->title = $title;
        $task->description = $description;
        $task->long_description = $longDesc;
        $task->completed = $completed;
        $task->save();
        return redirect()->route('tasks.index')->with('success', "Cập nhật thành công");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks.index')->with('delete', "Xóa thành công");
    }
}
