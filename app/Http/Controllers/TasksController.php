<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTaskDetails = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => ['required']
        ]);

        Task::create($newTaskDetails);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Define a variable to store number of tasks
        if ($id <= Task::count()) {
            $selectedTask = Task::find($id);
            return $selectedTask;
        } else {
            // Display an error message with 404 status
            return response()->json(["error" => "Task not found !", "status" => 404]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($id <= Task::count()) {
            $requestedTask = Task::find($id);
            $updatedValues = $request->all();
            $requestedTask->update($updatedValues);
            return response()->json(["success" => "Task has been updated successfully !", "status" => 200]);
        } else {
            // Display an error message with 404 status
            return response()->json(["error" => "Task not found !", "status" => 404]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
