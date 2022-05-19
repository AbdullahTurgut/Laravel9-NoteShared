<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //burda da User modelimizde yaptığımız gibi 'role_users' yapmamız lazım.
    public function users(){
        return $this->belongsToMany(User::class,'role_users');
    }
}
