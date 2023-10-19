<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=[
        "title","description",'assigned_to_id','assigned_by_id'
    ];
     public function users(){
          return $this->belongsTo(User::class,'assigned_to_id');
     }
     public function admins(){
          return $this->belongsTo(Admin::class,'assigned_by_id');
     }
}
