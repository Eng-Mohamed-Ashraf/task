<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\profile\Profile;
use App\Http\Requests\profile\storeProfile;
use App\Http\Requests\profile\updateprofile;
use App\Mail\rest_password;
use App\Mail\verviy_email;

use App\Models\Admin;
use App\Models\Models\Category;
use App\Models\Models\notification;
use App\Models\Models\userField;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends BackendController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
protected function append()
{
    $array=[
        'type_user'=>'tester',
        'type'
    ];
    return $array;
}
 public  function index(Request $request){
     $route_pref = $this->route_pref();

     $where = $this->where();


     $rows = $this->model->withcount('tasks')->orderBy('tasks_count','desc')->where($where)->take(10)->get();
     $append = $this->append();
      if($request->ajax()){
          return  $rows;
      }



     return view('admin.' . $route_pref . '.index',
         compact('append','rows', 'route_pref'));

 }

    public function login(){

        return view('auth.login');
    }
    public function auth_admin(Request  $request){



       if(auth()->guard('admin')->attempt(['email' =>$request['email'],
            'password' => $request["password"]])){
                return redirect() -> route('dashboard')->with(['success'=>'تم الدخول ']);
            }
            else{
                return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
            }


        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }



        public function logout(){
            Auth::logout();
            return redirect()->route('admin.login');
        }


}
