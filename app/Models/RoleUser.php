<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;
    //şimdi biz burda otomatik ekledik ve timestamps istemiyoruz bu yüzden aşağıdaki method
    public $timestamps = false;
}
