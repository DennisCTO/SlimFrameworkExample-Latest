<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //Used in Eloquent to identify table plus fields that can be CRUD.
    protected  $table = "user";
    protected $fillable =["name","email","password"];

}