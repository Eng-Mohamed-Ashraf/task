<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Http\Requests\CreateTask;
use App\Models\Admin;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TaskController extends BackendController
{
    public function __construct(Task $model)
    {
        parent::__construct($model);
    }
     public  function append(){
         return[
             'admins'=>Admin::get(),
             "users"=>User::get()
         ];
     }
      public function store(CreateTask $request){
       $this->model::create([
           "title" => $request['title'],
      "assigned_by_id" =>$request['assigned_by_id'],
      "assigned_to_id" => $request['assigned_to_id'],
      "description" => $request['description']
       ]);
        $data=[
            "url"=>route($this->route_pref().".index")
        ];
        return $data;

      }

}
