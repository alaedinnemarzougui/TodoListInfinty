<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    // Get All Task
    public function index()
    {

        return Task::all();

    }


    public function  store(Request $request)
    {
        return Task::create($request->all());

    }

    public  function  update(Request $request , $id)

    {

       $task = Task::findOrFail($id);

       $task->update($request->all());

          return $task;

    }


    public  function  toogleTask(Request $request)

    {

          $task = Task::findOrFail($request->get('id'));

           if(!$request->get('status'))
           {
               $task->update(['is_finished' => 1]) ;
           }else {
               $task->update(['is_finished' => 0]);
           }
           return $task;
    }


    public function  delete($id)
    {

         $task = Task::findOrFail($id);
         $task->delete();
         return 204 ;

    }



}
