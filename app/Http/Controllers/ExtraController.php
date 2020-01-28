<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;

class ExtraController extends Controller
{
    public function removeTask($idE, $idT) {

        $employee = Employee::findOrFail($idE);
        $task = Task::findOrFail($idT);

        $employee -> tasks() -> detach($task);
        return redirect() -> route("employee.index");

    }
}
