<?php

namespace App\Models;

use App\Models\Traits\SlugRoutable;
use App\Models\Traits\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use  SlugRoutable, Sluggable;


    protected $fillable = ['title', 'description'];


}
