<?php

namespace App\Models;

use App\Models\User;
use App\Models\Format;
use App\Models\Emprunt;
use App\Models\Chapitre;
use App\Models\Commande;
use App\Models\Categorie;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Pivot
{

    use SoftDeletes;

    protected $guarded = [];

    function formats () : BelongsToMany {
        return $this->belongsToMany(Format::class);
    }

    function categories () : BelongsToMany {
        return $this->belongsToMany(Categorie::class);
    }

    function chapitres () : HasMany {
        return $this->hasMany(Chapitre::class);
    }

    function users () : BelongsToMany {
        return $this->belongsToMany(User::class);
    }

    function reservations () : HasMany {
        return $this->hasMany(Reservation::class);
    }

    function emprunts () : HasMany {
        return $this->hasMany(Emprunt::class);
    }

    function commandes () : BelongsToMany {
        return $this->belongsToMany(Commande::class);
    }

}
