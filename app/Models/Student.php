<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

 public function subjects(){
     return $this->belongsToMany(Subject::class)->withTimesstamps();
 } 
    public function teachers(){
        return $this->belongsToMany(Techer::class)->withTimesstamps();
    }                    

}
class Teacher extends Model
{
    public function sub (){
        return $this->hasOne(Subject::class)->withTimesstamps();

    }

}
class Subject extends Models
{
 
}
