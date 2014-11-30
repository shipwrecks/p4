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
        $task = new Task();
        $task->task_name = Input::get('task_name');
        $task->notes = Input::get('notes');
        $task->due_date = Input::get('due_date');
        $task->done = Input::has('done');
        $task->user_id = Auth::user()->getId();;
        $task->save();    
        return Redirect::action('TaskController@getIndex');
    }

    public function getEdit(Task $task)
    {
        return View::make('task_edit')->with('task', $task);
    }

    public function postEdit()
    {
        $id = Input::get('task');
        $task = Task::findOrFail($id);
        $task->task_name = Input::get('task_name');
        $task->notes = Input::get('notes');
        $task->due_date = Input::get('due_date');
        $task->done = Input::has('done');
        $task->user_id = Auth::user()->getId();;
        $task->save();  
        return Redirect::action('TaskController@getIndex');
    }

    public function getDelete(Task $task)
    {
        return View::make('task_delete')->with('task', $task);
    }

    public function postDelete()
    {
        $id = Input::get('task');
        $task = Task::findOrFail($id);
        $task->delete();

        return Redirect::action('TaskController@getIndex')
        ->with('flash_message', 'task deleted');
    }

    //public static function search($query) {
    //    $tasks = Task::get();
    //    return $tasks;
    //}
}