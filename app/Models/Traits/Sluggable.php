<?php

namespace App\Models\Traits;

/**
 * summary
 */
trait Sluggable
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($event){
            $event->slug = str_slug($event->title);
        });
    }
}
