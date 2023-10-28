<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Stuff extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The gifts that belong to the Stuff
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function gifts(): BelongsToMany {
        return $this->belongsToMany(Gift::class)->withTimestamps();
    }
}
