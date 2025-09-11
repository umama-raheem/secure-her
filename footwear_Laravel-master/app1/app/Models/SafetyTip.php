<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class SafetyTip extends Model
{

        protected $table = 'safety_tips';
 protected $fillable = ['title', 'description', 'image'];

}