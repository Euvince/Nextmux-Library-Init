<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categorie extends Pivot
{
    use SoftDeletes;

    protected $guarded = [];

    function articles () : BelongsToMany {
        return $this->belongsToMany(Article::class);
    }

}
