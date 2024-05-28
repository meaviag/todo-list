<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function create()
    {
        return view('tasks');
    }

    public function store(TaskRequest $request)
    {
        $task = Task::create([
            'tasks' => $request->tasks,
        ]);
        return;
        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
        // $user->save();

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
}
