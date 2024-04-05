<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Article;
use App\Models\Emprunt;
use App\Models\Commande;
use App\Models\Reservation;
use App\Models\TypeAbonnement;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    function typeAbonnement () : BelongsTo {
        return $this->belongsTo(TypeAbonnement::class, 'type_abonnement_id', 'id');
    }

    function articles () : BelongsToMany {
        return $this->belongsToMany(Article::class);
    }

    function reservations () : HasMany {
        return $this->hasMany(Reservation::class);
    }

    function emprunts () : HasMany {
        return $this->hasMany(Emprunt::class);
    }

    function commandes () : HasMany {
        return $this->hasMany(Commande::class);
    }

}
