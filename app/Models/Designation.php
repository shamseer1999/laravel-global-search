<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    public function get_user()
    {
        return $this->hasOne(User::class,'fk_designation','id');
    }
}
