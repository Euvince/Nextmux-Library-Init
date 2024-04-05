<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chapitre extends Pivot
{
    use SoftDeletes;

    protected $guarded = [];

    function article () : BelongsTo {
        return $this->belongsTo(Article::class);
    }

}
