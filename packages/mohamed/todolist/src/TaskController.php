<?php

namespace Mohamed\Todolist;

use App\Http\Controllers\Controller;
use Request;

class TaskController extends Controller
{
    public function index()
    {
        return redirect()->route('tasks.create');
    }

    public function create()
    {
        $tasks = Task::all();
        $submit = 'Add';
        return view('todolist::list', compact('tasks', 'submit'));
    }

    public function store()
    {
        $input = Request::all();
        Task::create($input);
        return redirect()->route('tasks.create');
    }

    public function edit($id)
    {
        $tasks = Task::all();
        $task = $tasks->find($id);
        $submit = 'Update';
        return view('todolist::list', compact('tasks', 'task', 'submit'));
    }

    public function show($id) {
        return redirect()->route('tasks.edit', ['id' => $id]);
    }

    public function update($id)
    {
        $input = Request::all();
        $task = Task::findOrFail($id);
        $task->update($input);
        return redirect()->route('task.create');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.create');
    }
}
