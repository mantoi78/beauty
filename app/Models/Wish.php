<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wish extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'part_id'];

    /**
     * @return HasMany
     */
    public function approaches(): HasMany
    {
        return $this->hasMany(approach::class);
    }
}
