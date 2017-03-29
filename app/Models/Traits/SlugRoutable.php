<?php

namespace App\Models\Traits;

/**
 * summary
 */
trait SlugRoutable
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
