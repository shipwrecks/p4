<?php

class TaskController extends BaseController
{
    public function getIndex()
    {
        $id = Auth::user()->id;
        $tasks = Task::where('user_id','=',$id)->get();
        return View::make('list', compact('tasks'));
    }

    public function getCreate()
    {
        return View::make('task_add');
    }

    public function postCreate()
    {
        $rules = array(
        'task_name' => 'required',
        'due_date' => 'required|date',
        );

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) {
        return Redirect::to('/create')
        ->with('flash_message', 'Task creation failed.')
        ->withInput()
        ->withErrors($validator);
        }

        $task = new Task();
        $task->task_name = Input::get('task_name');
        $task->notes = Input::get('notes');
        $task->due_date = Input::get('due_date');
        $task->done = Input::has('done');
        $task->user_id = Auth::user()->getId();
        $task->save(); 
        return Redirect::action('TaskController@getIndex'); 
    }

    public function getEdit($task_id)
    {
        try {
            $task = Task::findOrFail($task_id);
        }
        catch(Exception $e) {
            return Redirect::to('/list')->with('flash_message', 'Task not found');
        }
        return View::make('task_edit')->with('task', $task); 
    }

    public function postEdit($task_id)
    {
        try {
            $task = Task::findOrFail($task_id);
        }
        catch(Exception $e) {
            return Redirect::to('/list')->with('flash_message', 'Task not found');
        }
        $task->task_name = Input::get('task_name');
        $task->notes = Input::get('notes');
        $task->due_date = Input::get('due_date');
        $task->done = Input::has('done');
        $task->user_id = Auth::user()->getId();;
        $task->save();  
        return Redirect::action('TaskController@getIndex');
    }

    public function getDelete($task_id)
    {
        try {
            $task = Task::findOrFail($task_id);
        }
        catch(Exception $e) {
            return Redirect::to('/list')->with('flash_message', 'Task not found');
        }
        return View::make('task_delete')->with('task', $task);
    }

    public function postDelete($task_id)
    {
        try {
            $task = Task::findOrFail($task_id);
        }
        catch(Exception $e) {
            return Redirect::to('/list')->with('flash_message', 'Task not found');
        }

        $task->delete();

        return Redirect::action('TaskController@getIndex')
        ->with('flash_message', 'task deleted');
    }

    public function getDone()
    {
        $id = Auth::user()->id;
        $tasks = Task::where('user_id','=',$id)
        ->where('done', '=', TRUE)
        ->get();
        return View::make('list', compact('tasks'));
    }

    public function getNotDone()
    {
        $id = Auth::user()->id;
        $tasks = Task::where('user_id','=',$id)
        ->where('done', '=', FALSE)
        ->get();
        return View::make('list', compact('tasks'));
    }
}