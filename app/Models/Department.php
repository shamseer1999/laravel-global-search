<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public function get_user()
    {
        return $this->hasOne(User::class,'fk_department','id');
    }
}
