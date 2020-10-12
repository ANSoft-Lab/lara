<?php

namespace App\HelpModels;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BlockSync extends Pivot
{
    public static function boot()
    {
        parent::boot();

        static::saving(function ($item) {
            $item->entity_class = (string) get_class($item->pivotParent);
        });
    }
}
