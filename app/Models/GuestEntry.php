<?php

declare(strict_types=1);

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class GuestEntry extends  Model
{
    //Used in Eloquent to identify table plus fields that can be CRUD.
    protected $table="guest_entry";
    protected $fillable = ["full_name","email","comment"];
    
}